import { Component } from '@angular/core';
import { NavbarComponent } from "./_components/navbar/navbar.component";
import { CommonModule } from '@angular/common';
import { LoginComponent } from './_components/login-modal/login-modal.component';
import { RouterOutlet } from '@angular/router';
import { RegisterComponentModal } from './_components/register-modal/register-modal.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [NavbarComponent, LoginComponent, CommonModule, RouterOutlet, RegisterComponentModal],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  
  isLoginModalVisible = false;
  isRegisterModalVisible = false;

  showLoginModal() {
    this.isLoginModalVisible = true;
  }

  hideLoginModal() {
    this.isLoginModalVisible = false;
  }

  showRegisterModal() {
    this.isRegisterModalVisible = true;
  }

  hideRegisterModal() {
    this.isRegisterModalVisible = false;
  }

  openLoginModal() {
    this.isLoginModalVisible = true;
    this.isRegisterModalVisible = false;
  }

  openSignupModal() {
    this.isRegisterModalVisible = true;
    this.isLoginModalVisible = false;
  }
}
