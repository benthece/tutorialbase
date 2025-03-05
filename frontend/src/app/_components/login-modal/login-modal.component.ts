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
  validationErrors: any = [];

  constructor(
    private fb: FormBuilder,
    public userAuthService: UserAuthService,
    private router: Router
  ){
    this.loginForm = this.fb.group({
      username: ['', [Validators.required]],
      password: ['', [Validators.required]]
    });
  }

  ngOnInit(): void {
    if (localStorage.getItem('token') != "" && localStorage.getItem('token') != null) {
      this.router.navigateByUrl('/home');
    }
  }

  loginAction() {
    if (this.loginForm.valid) {
      this.isSubmitting = true;

      const payload = {
        username: this.loginForm.get('username')?.value,
        password: this.loginForm.get('password')?.value,
      };

      this.userAuthService.login(payload)
        .then(({ data }) => {
          localStorage.setItem('token', data.token);
          this.close.emit();
          // Force page refresh to update login status in all components
          window.location.reload();
          return data;
        }).catch(error => {
          this.isSubmitting = false;
          if (error.response.data.errors != undefined) {
            this.validationErrors = error.response.data.message;
          }
          if (error.response.data.error != undefined) {
            this.validationErrors = error.response.data.error;
          }
          return error;
        });
    }
  }

  togglePassword(): void {
    this.showPassword = !this.showPassword;
  }

  @Output() close = new EventEmitter<void>();
  @Output() openSignup = new EventEmitter<void>();

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