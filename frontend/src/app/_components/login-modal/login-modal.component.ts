import { Component, Output, EventEmitter } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login-modal',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './login-modal.component.html',
  styleUrls: ['./login-modal.component.css']
})
export class LoginComponent {
  username = '';
  password = '';

  @Output() close = new EventEmitter<void>();

  constructor(private router: Router) {}

  onSubmit() {
    console.log('Login:', {username: this.username, password: this.password });
    this.closeAndNavigate();
  }

  onBackdropClick(event: MouseEvent) {
    if (event.target === event.currentTarget) {
      this.closeAndNavigate();
    }
  }

  closeAndNavigate() {
      this.close.emit();
      this.router.navigate(['/home']);
  }
}