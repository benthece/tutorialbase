import { Component, Output, EventEmitter } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink, RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-navbar',
  standalone: true,
  imports: [CommonModule, RouterLink, RouterOutlet],
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent {
  dropdownVisible = false;
  hamburgerMenuVisible = false;
  @Output() showLoginModal = new EventEmitter<void>();

  toggleDropdown() {
    this.dropdownVisible = !this.dropdownVisible;
  }

  toggleHamburgerMenu() {
    this.hamburgerMenuVisible = !this.hamburgerMenuVisible;
  }

  close(){
    this.dropdownVisible = false;
    this.hamburgerMenuVisible = false;
  }

  onLoginClick(event: Event) {
    event.preventDefault();
    this.showLoginModal.emit();
    this.dropdownVisible = false;
    this.hamburgerMenuVisible = false;
    
  }
}
