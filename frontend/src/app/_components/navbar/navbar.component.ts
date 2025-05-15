import { Component, Output, EventEmitter, OnInit, ElementRef, HostListener, ViewChild, OnDestroy } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Router, RouterLink } from '@angular/router';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { SearchService } from '../../_services/search-service.service';
import { Subscription } from 'rxjs';
import { FormsModule } from '@angular/forms';
import { UserServiceService } from '../../_services/user-service.service';
import { Category } from '../../_services/video-page-service.service';
import { VideoPageService } from '../../_services/video-page-service.service';

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
  limit: number = 30;
  isSearching: boolean = false;
  username: string = '';
  profilePicture: string = 'assets/profilepic.jpg'; // fallback
  clickedSearchIcon = false;
  categories: Category[] = [];

  @ViewChild('categoryButton', { static: false }) categoryButton!: ElementRef;
  @ViewChild('profileButton', { static: false }) profileButtonButton!: ElementRef;
  @ViewChild('profileMenu') profileMenu!: ElementRef;
  @ViewChild('profileButton') profileButton!: ElementRef;

  @Output() showLoginModal = new EventEmitter<void>();
  @Output() showRegisterModal = new EventEmitter<void>();

  constructor(public userAuthService: UserAuthService, private searchService: SearchService,
    private router: Router, public userService: UserServiceService, public videoPageService: VideoPageService) { }

async ngOnInit(): Promise<void> {
  // Subscribe to authentication state changes
  this.authSubscription = this.userAuthService.isAuthenticated$.subscribe(
    async isAuthenticated => {
      this.isLoggedIn = isAuthenticated;
      if (isAuthenticated) {
        await this.loadCurrentUser();
      }
    }
  );

  this.checkLoginStatus();
  if (this.isLoggedIn) {
    await this.loadCurrentUser();
  }

  await this.loadCategories();
}

  ngOnDestroy(): void {
    if (this.authSubscription) {
      this.authSubscription.unsubscribe();
    }
  }

  async loadCurrentUser(): Promise<void> {
    try {
      const userData = await this.userService.getCurrentUserInfo();
      this.username = userData.username;
      this.profilePicture = userData.profilePicture || 'assets/profilepic.jpg';
    } catch (error) {
      console.error('Error fetching current user info:', error);
    }
  }

  // Check if token exists and is not empty
  checkLoginStatus(): void {
    const token = localStorage.getItem('token');
    this.isLoggedIn = !!token && token !== '';
  }

  async loadCategories(): Promise<void> {
  try {
    this.categories = await this.videoPageService.getCategories();
  } catch (error) {
    console.error('Kategóriák betöltése sikertelen:', error);
  }
}

  toggleProfileMenu(event: Event) {
  event.stopPropagation();
  this.profileMenuVisible = !this.profileMenuVisible;

  if (this.profileMenuVisible) {
    this.categoryMenuVisible = false;
  }
}

  toggleCategoryMenu(event: Event) {
  event.stopPropagation();
  this.categoryMenuVisible = !this.categoryMenuVisible;

  if (this.categoryMenuVisible) {
    this.profileMenuVisible = false;
  }
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

      this.searchService.search(this.searchQuery.trim(), 30)
        .then(() => {
          this.router.navigate(['/search'], {
            queryParams: { text: this.searchQuery.trim(), limit: this.limit }
          });
        })
        .catch(error => {
          console.error('Search error:', error);
        })
        .finally(() => {
          this.isSearching = false;
          this.searchQuery = '';
        });
    }
  }

  onIconMouseDown(): void {
  this.clickedSearchIcon = true;
  }

  onInputBlur(): void {
  setTimeout(() => {
    if (!this.clickedSearchIcon && this.searchQuery.trim()) {
      this.searchQuery = '';
    }
    this.clickedSearchIcon = false;
  })
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