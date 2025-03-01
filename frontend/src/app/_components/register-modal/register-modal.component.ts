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
  name: string = ''
  email: string = ''
  password: string = ''
  confirmPassword: string = ''
  isSubmitting: boolean = false
  validationErrors: any = []
  showPassword: boolean = false;
  showConfirmPassword: boolean = false;


  constructor(
    private fb: FormBuilder,
    public userAuthService: UserAuthService,
    private router: Router
  ) {
    this.registerForm = this.fb.group({
      email: ['', [Validators.required]],
      name: ['', Validators.required],
      password: ['', [Validators.required]],
      confirmPassword: ['', [Validators.required]]
    }, {
      validators: this.passwordMatchValidator
    });
  }

  passwordMatchValidator(control: FormGroup) {
    const password = control.get('password')?.value;
    const confirmPassword = control.get('confirmPassword')?.value;

    return password && confirmPassword && password !== confirmPassword ?
      { 'passwordMismatch': true } : null;
  }


  ngOnInit(): void {
    if (localStorage.getItem('token') != "" && localStorage.getItem('token') != null) {
      this.router.navigateByUrl('/home')
    }
  }

  registerAction() {
    if (this.registerForm.valid) {
      this.isSubmitting = true;
      let payload = {
        name: this.registerForm.get('name')?.value,
        email: this.registerForm.get('email')?.value,
        password: this.registerForm.get('password')?.value,
        confirmPassword: this.registerForm.get('confirmPassword')?.value
      }

      this.userAuthService.register(payload)
        .then(({ data }) => {
          localStorage.setItem('token', data.token)
          this.close.emit();
          return data
        }).catch(error => {
          this.isSubmitting = false;
          if (error.response.data.errors != undefined) {
            this.validationErrors = error.response.data.errors
          }
          return error
        })
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

}

