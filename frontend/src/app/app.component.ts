import { Component } from '@angular/core';
import { NavbarComponent } from "./_components/navbar/navbar.component";
import { CommonModule } from '@angular/common';
import { LoginComponent } from './_components/login-modal/login-modal.component';
import { RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [NavbarComponent, LoginComponent, CommonModule, RouterOutlet],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  
  isLoginModalVisible = false;

  showLoginModal() {
    this.isLoginModalVisible = true;
  }

  hideLoginModal() {
    this.isLoginModalVisible = false;
  }
}
