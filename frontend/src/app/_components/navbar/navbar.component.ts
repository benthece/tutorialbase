import { Component, Output, EventEmitter, OnInit, ElementRef, HostListener, ViewChild, OnDestroy } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { Subscription } from 'rxjs';

@Component({
  selector: 'app-navbar',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit, OnDestroy {

  @ViewChild('categoryMenu') categoryMenu!: ElementRef;

  profileMenuVisible = false;
  categoryMenuVisible = false;
  isLoggedIn = false;
  private authSubscription!: Subscription;

  @ViewChild('categoryButton', { static: false }) categoryButton!: ElementRef;
  @ViewChild('profileButton', { static: false }) profileButtonButton!: ElementRef;
  @ViewChild('profileMenu') profileMenu!: ElementRef;
  @ViewChild('profileButton') profileButton!: ElementRef;

  @Output() showLoginModal = new EventEmitter<void>();
  @Output() showRegisterModal = new EventEmitter<void>();

  constructor(public userAuthService: UserAuthService) { }

  ngOnInit(): void {
    // Subscribe to authentication state changes
    this.authSubscription = this.userAuthService.isAuthenticated$.subscribe(
      isAuthenticated => {
        this.isLoggedIn = isAuthenticated;
      }
    );
    
    // Initial check for login status
    this.checkLoginStatus();
  }

  ngOnDestroy(): void {
    // Clean up subscription when component is destroyed
    if (this.authSubscription) {
      this.authSubscription.unsubscribe();
    }
  }

  // Check if token exists and is not empty
  checkLoginStatus(): void {
    const token = localStorage.getItem('token');
    this.isLoggedIn = !!token && token !== '';
  }

  toggleProfileMenu(event: Event) {
    event.stopPropagation();
    this.profileMenuVisible = !this.profileMenuVisible;
  }

  toggleCategoryMenu(event: Event) {
    event.stopPropagation(); // Prevent the document click event from firing
    this.categoryMenuVisible = !this.categoryMenuVisible;
  }

  close() {
    this.profileMenuVisible = false;
    this.categoryMenuVisible = false;
  }

  @HostListener('document:click', ['$event'])
  onDocumentClick(event: MouseEvent) {
    // Check if clicked element is outside the menu
    if (this.categoryMenuVisible) {
      const clickedInside = this.categoryMenu.nativeElement.contains(event.target);
      const clickedOnButton = this.categoryButton?.nativeElement.contains(event.target);

      if (!clickedInside && !clickedOnButton) {
        this.categoryMenuVisible = false;
      }
    }
    if (this.profileMenuVisible && this.profileMenu) {
      const clickedInsideProfileMenu = this.profileMenu.nativeElement.contains(event.target);
      const clickedOnProfileButton = this.profileButton?.nativeElement.contains(event.target);

      if (!clickedInsideProfileMenu && !clickedOnProfileButton) {
        this.profileMenuVisible = false;
      }
    }
  }

  onLoginClick(event: Event) {
    event.preventDefault();
    this.showLoginModal.emit();
    this.close();
  }

  onLogoutClick() {
    this.userAuthService.logout().then(() => {
      this.close();
    }).catch(() => {
      this.close();
    });
  }
}