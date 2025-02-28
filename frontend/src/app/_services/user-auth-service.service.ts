import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable, of, throwError } from 'rxjs';
import { Router } from '@angular/router';
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

  // Check if user is authenticated
  private checkAuthStatus(): void {
    const token = localStorage.getItem('token');
    this.isAuthenticatedSubject.next(!!token && token !== '');
  }

  // Get current auth status
  get isAuthenticated(): boolean {
    return this.isAuthenticatedSubject.value;
  }

  login(data: any): Promise<any> {
    let payload = {
      email: data.email,
      password: data.password
    }

    return axios.post('/api/login', payload)
      .then(response => {
        if (response.data && response.data.token) {
          this.isAuthenticatedSubject.next(true);
        }
        return response;
      });
  }

  register(data: any): Promise<any> {
    let payload = {
      name: data.name,
      email: data.email,
      password: data.password,
      password_confirmation: data.confirmPassword
    }

    return axios.post('/api/register', payload)
      .then(response => {
        if (response.data && response.data.token) {
          this.isAuthenticatedSubject.next(true);
        }
        return response;
      });
  }

  getUser(): Promise<any> {
    return axios.get('/api/user', { headers: { Authorization: 'Bearer ' + localStorage.getItem('token') } });
  }

  logout(): Promise<any> {
    return axios.post('/api/logout', {}, { headers: { Authorization: 'Bearer ' + localStorage.getItem('token') } })
      .then(response => {
        this.isAuthenticatedSubject.next(false);
        return response;
      })
      .catch(error => {
        this.isAuthenticatedSubject.next(false);
        throw error;
      });
  }
}
