import { Component, Output, EventEmitter, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { UserAuthService } from '../../_services/user-auth-service.service';

@Component({
  selector: 'app-login-modal',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './login-modal.component.html',
  styleUrls: ['./login-modal.component.css']
})
export class LoginComponent implements OnInit {

  loginForm: FormGroup;
  isSubmitting: boolean = false;
  showPassword: boolean = false;
  validationErrors: string = '';

  @Output() close = new EventEmitter<void>();
  @Output() openSignup = new EventEmitter<void>();

  constructor(
    private fb: FormBuilder,
    public userAuthService: UserAuthService,
    private router: Router
  ) {
    this.loginForm = this.fb.group({
      username: ['', [Validators.required]],
      password: ['', [Validators.required]]
    });
  }

  ngOnInit(): void {
    if (localStorage.getItem('token')) {
      this.router.navigateByUrl('/home');
    }
  }

  private translateErrorMessage(message: string): string {
  const translations: { [key: string]: string } = {
    'Invalid credentials': 'Érvénytelen felhasználónév vagy jelszó',
    'The username field must be at least 4 characters.': 'A felhasználónév mező legalább 4 karakter hosszú kell legyen'
  };

  return translations[message] || message;
}

  loginAction() {
    if (this.loginForm.valid) {
      this.isSubmitting = true;
      this.validationErrors = '';

      const payload = {
        username: this.loginForm.get('username')?.value,
        password: this.loginForm.get('password')?.value,
      };

      this.userAuthService.login(payload)
        .then(({ data }) => {
          localStorage.setItem('token', data.token);
          this.close.emit();
          // reload page for other components
          window.location.reload();
          return data;
        }).catch(error => {
  this.isSubmitting = false;
  let originalMessage = '';
  if (error.response?.data?.message) {
    originalMessage = error.response.data.message;
  } else if (error.response?.data?.error) {
    originalMessage = error.response.data.error;
  } else {
    originalMessage = 'Hiba történt a bejelentkezés során.';
  }

  this.validationErrors = this.translateErrorMessage(originalMessage);
  return error;
});
    } else {
      this.loginForm.markAllAsTouched();
    }
  }

  togglePassword(): void {
    this.showPassword = !this.showPassword;
  }

  switchToSignup() {
    this.close.emit();
    this.openSignup.emit();
  }

  onBackdropClick(event: MouseEvent) {
    if (event.target === event.currentTarget) {
      this.close.emit();
    }
  }

  closeModal() {
    this.close.emit();
  }
}
