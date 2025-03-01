import { Component, Output, EventEmitter, OnInit, ElementRef, HostListener, ViewChild } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { UserAuthService } from '../../_services/user-auth-service.service';

@Component({
  selector: 'app-navbar',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  @ViewChild('hamburgerMenu') hamburgerMenu!: ElementRef;

  dropdownVisible = false;
  hamburgerMenuVisible = false;
  isLoggedIn = false;

  @ViewChild('hamburgerButton', { static: false }) hamburgerButton!: ElementRef;
  @ViewChild('dropdownButton', { static: false }) dropdownButtonButton!: ElementRef;
  @ViewChild('dropdownMenu') dropdownMenu!: ElementRef;
  @ViewChild('dropdownButton') dropdownButton!: ElementRef;

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

  toggleDropdown(event: Event) {
    event.stopPropagation();
    this.dropdownVisible = !this.dropdownVisible;
    // Refresh login status when dropdown is opened
    if (this.dropdownVisible) {
      this.checkLoginStatus();
    }
  }
  toggleHamburgerMenu(event: Event) {
    event.stopPropagation(); // Prevent the document click event from firing
    this.hamburgerMenuVisible = !this.hamburgerMenuVisible;
  }

  close() {
    this.dropdownVisible = false;
    this.hamburgerMenuVisible = false;
  }

  @HostListener('document:click', ['$event'])
  onDocumentClick(event: MouseEvent) {
    // Check if clicked element is outside the menu
    if (this.hamburgerMenuVisible) {
      const clickedInside = this.hamburgerMenu.nativeElement.contains(event.target);
      const clickedOnButton = this.hamburgerButton?.nativeElement.contains(event.target);

      if (!clickedInside && !clickedOnButton) {
        this.hamburgerMenuVisible = false;
      }
    }
    if (this.dropdownVisible) {
      const clickedInsideDropdown = this.dropdownMenu.nativeElement.contains(event.target);
      const clickedOnDropdownButton = this.dropdownButton?.nativeElement.contains(event.target);

      if (!clickedInsideDropdown && !clickedOnDropdownButton) {
        this.dropdownVisible = false;
      }
    }
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