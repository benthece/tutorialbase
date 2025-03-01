import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable, of, throwError } from 'rxjs';
import axios from 'axios';

@Injectable({
  providedIn: 'root'
})
export class UserAuthService {
  private isAuthenticatedSubject = new BehaviorSubject<boolean>(false);
  public isAuthenticated$ = this.isAuthenticatedSubject.asObservable();

  constructor() {
    // Initialize auth state based on token presence
    this.checkAuthStatus();
  }

  private checkAuthStatus(): void {
    const token = localStorage.getItem('token');
    this.isAuthenticatedSubject.next(!!token && token !== '');
  }

  get isAuthenticated(): boolean {
    return this.isAuthenticatedSubject.value;
  }

  async login(data: any): Promise<any> {
    let payload = {
      email: data.email,
      password: data.password
    }

    const response = await axios.post('/api/login', payload);
    if (response.data && response.data.token) {
      this.isAuthenticatedSubject.next(true);
    }
    return response;
  }

  async register(data: any): Promise<any> {
    let payload = {
      name: data.name,
      email: data.email,
      password: data.password,
      password_confirmation: data.confirmPassword
    }

    const response = await axios.post('/api/register', payload);
    if (response.data && response.data.token) {
      this.isAuthenticatedSubject.next(true);
    }
    return response;
  }

  getUser(): Promise<any> {
    return axios.get('/api/user', { headers: { Authorization: 'Bearer ' + localStorage.getItem('token') } });
  }

  async logout(): Promise<any> {
    try {
      const response = await axios.post('/api/logout', {}, { headers: { Authorization: 'Bearer ' + localStorage.getItem('token') } });
      this.isAuthenticatedSubject.next(false);
      return response;
    } catch (error) {
      this.isAuthenticatedSubject.next(false);
      throw error;
    }
  }
}
