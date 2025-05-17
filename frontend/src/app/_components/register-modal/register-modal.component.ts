import { Component, Output, EventEmitter, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-register-modal',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './register-modal.component.html',
  styleUrls: ['./register-modal.component.css']
})
export class RegisterComponentModal implements OnInit {

  registerForm: FormGroup;
  isSubmitting: boolean = false;
  validationErrors: any = [];
  showPassword: boolean = false;
  showConfirmPassword: boolean = false;

  constructor(
    private fb: FormBuilder,
    public userAuthService: UserAuthService,
    private router: Router
  ) {
    this.registerForm = this.fb.group({
      email: ['', [Validators.required, Validators.email]],
      username: ['', Validators.required],
      password: ['', Validators.required],
      confirmPassword: ['', Validators.required]
    }, {
      validators: this.passwordMatchValidator
    });
  }

  ngOnInit(): void {
    if (localStorage.getItem('token')) {
      this.router.navigateByUrl('/home');
    }
  }

  passwordMatchValidator(control: FormGroup) {
    const password = control.get('password')?.value;
    const confirmPassword = control.get('confirmPassword')?.value;
    return password && confirmPassword && password !== confirmPassword
      ? { passwordMismatch: true }
      : null;
  }

  registerAction() {
    if (this.registerForm.valid) {
      this.isSubmitting = true;
      const payload = this.registerForm.value;

      this.userAuthService.register(payload)
        .then(({ data }) => {
          localStorage.setItem('token', data.token);
          this.close.emit();
        })
        .catch(error => {
          this.isSubmitting = false;
          if (error.response?.data?.errors) {
            this.validationErrors = error.response.data.errors;
          }
        });
    }
  }

  togglePassword(): void {
    this.showPassword = !this.showPassword;
  }

  toggleConfirmPassword(): void {
    this.showConfirmPassword = !this.showConfirmPassword;
  }

  @Output() close = new EventEmitter<void>();
  @Output() openLogin = new EventEmitter<void>();

  switchToLogin() {
    this.close.emit();
    this.openLogin.emit();
  }

  onBackdropClick(event: MouseEvent) {
    if (event.target === event.currentTarget) {
      this.closeModal();
    }
  }

  closeModal() {
    this.close.emit();
  }

  get email() { return this.registerForm.get('email'); }
  get username() { return this.registerForm.get('username'); }
  get password() { return this.registerForm.get('password'); }
  get confirmPassword() { return this.registerForm.get('confirmPassword'); }
}
