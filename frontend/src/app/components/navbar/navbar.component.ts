import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-navbar',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent {
  dropdownVisible = false;
  hamburgerMenuVisible = false;

  toggleDropdown() {
    this.dropdownVisible = !this.dropdownVisible;
  }

  toggleHamburgerMenu() {
    this.hamburgerMenuVisible = !this.hamburgerMenuVisible;
  }
}
