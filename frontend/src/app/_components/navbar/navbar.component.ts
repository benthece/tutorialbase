import { Component, Output, EventEmitter, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-navbar',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  dropdownVisible = false;
  hamburgerMenuVisible = false;
  isLoggedIn = false;

  constructor(public userAuthService: UserAuthService) { }

  ngOnInit(): void {
    // Check if user is logged in on component initialization
    this.checkLoginStatus();
  }

  @Output() showLoginModal = new EventEmitter<void>();
  @Output() showRegisterModal = new EventEmitter<void>();

  // Check if token exists and is not empty
  checkLoginStatus(): void {
    const token = localStorage.getItem('token');
    this.isLoggedIn = !!token && token !== '';
  }

  toggleDropdown() {
    this.dropdownVisible = !this.dropdownVisible;
    // Refresh login status when dropdown is opened
    if (this.dropdownVisible) {
      this.checkLoginStatus();
    }
  }

  toggleHamburgerMenu() {
    this.hamburgerMenuVisible = !this.hamburgerMenuVisible;
  }

  close() {
    this.dropdownVisible = false;
    this.hamburgerMenuVisible = false;
  }

  onLoginClick(event: Event) {
    event.preventDefault();
    this.showLoginModal.emit();
    this.dropdownVisible = false;
    this.hamburgerMenuVisible = false;
  }
  
  onLogoutClick() {
    this.userAuthService.logout().then(() => {
      localStorage.setItem('token', "")
      this.isLoggedIn = false;
      this.close();
    }).catch(() => {
      localStorage.setItem('token', "")
      this.isLoggedIn = false;
      this.close()
    })
  }
}