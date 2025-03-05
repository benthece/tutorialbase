import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import axios from 'axios';
import CryptoJS from 'crypto-js';

@Injectable({
  providedIn: 'root'
})
export class UserAuthService {
  private isAuthenticatedSubject = new BehaviorSubject<boolean>(false);
  public isAuthenticated$ = this.isAuthenticatedSubject.asObservable();

  constructor() {
    this.checkAuthStatus();
  }

  private checkAuthStatus(): void {
    const token = localStorage.getItem('token');
    this.isAuthenticatedSubject.next(!!token && token !== '');
  }

  get isAuthenticated(): boolean {
    return this.isAuthenticatedSubject.value;
  }

  private hashPassword(password: string): string {
    return CryptoJS.SHA1(password).toString();
  }

  async login(data: any): Promise<any> {
    let payload = {
      username: data.username,
      password: this.hashPassword(data.password)
    };

    const response = await axios.post('/api/login', payload);
    if (response.data && response.data.token) {
      this.isAuthenticatedSubject.next(true);
    }
    return response;
  }

  async register(data: any): Promise<any> {
    let payload = {
      username: data.username,
      email: data.email,
      password: this.hashPassword(data.password)
    };

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
      localStorage.removeItem('token');
      this.isAuthenticatedSubject.next(false);
      return response;
    } catch (error) {
      localStorage.removeItem('token');
      this.isAuthenticatedSubject.next(false);
      throw error;
    }
  }
}