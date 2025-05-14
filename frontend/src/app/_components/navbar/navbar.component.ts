import { Component, Output, EventEmitter, OnInit, ElementRef, HostListener, ViewChild, OnDestroy } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Router, RouterLink } from '@angular/router';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { SearchService } from '../../_services/search-service.service';
import { Subscription } from 'rxjs';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-navbar',
  standalone: true,
  imports: [CommonModule, RouterLink, FormsModule],
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit, OnDestroy {

  @ViewChild('categoryMenu') categoryMenu!: ElementRef;

  profileMenuVisible = false;
  categoryMenuVisible = false;
  isLoggedIn = false;
  private authSubscription!: Subscription;
  searchQuery: string = '';
  isSearching: boolean = false;

  @ViewChild('categoryButton', { static: false }) categoryButton!: ElementRef;
  @ViewChild('profileButton', { static: false }) profileButtonButton!: ElementRef;
  @ViewChild('profileMenu') profileMenu!: ElementRef;
  @ViewChild('profileButton') profileButton!: ElementRef;

  @Output() showLoginModal = new EventEmitter<void>();
  @Output() showRegisterModal = new EventEmitter<void>();

  constructor(public userAuthService: UserAuthService, private searchService: SearchService,
    private router: Router) { }

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

  onSearch(): void {
    if (this.searchQuery.trim() && !this.isSearching) {
      this.isSearching = true;

      this.searchService.search(this.searchQuery.trim())
        .then(() => {
          this.router.navigate(['/search'], {
            queryParams: { q: this.searchQuery.trim() }
          });
        })
        .catch(error => {
          console.error('Search error:', error);
        })
        .finally(() => {
          this.isSearching = false;
        });
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