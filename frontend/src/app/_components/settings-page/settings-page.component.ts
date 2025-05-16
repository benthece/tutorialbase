import { Component, OnInit } from '@angular/core';
import { UserServiceService } from '../../_services/user-service.service';
import { FormsModule } from '@angular/forms';
import { UserAuthService } from '../../_services/user-auth-service.service';

@Component({
  selector: 'app-settings-page',
  standalone: true,
  imports: [FormsModule],
  templateUrl: './settings-page.component.html',
  styleUrls: ['./settings-page.component.css']
})
export class SettingsPageComponent implements OnInit {
  cover_image: File | null = null;
  file: File | null = null;
  bio: string = '';
  maxBioLength: number = 400;

  constructor(private userService: UserServiceService, private userAuthService: UserAuthService) {}

  ngOnInit(): void {}

  onBackgroundImageSelected(event: Event) {
    const input = event.target as HTMLInputElement;
    if (input.files?.length) {
      this.cover_image = input.files[0];
    }
  }

  onProfileImageSelected(event: Event) {
    const input = event.target as HTMLInputElement;
    if (input.files?.length) {
      this.file = input.files[0];
    }
  }

  async uploadBackgroundImage() {
    if (!this.cover_image) return;

    try {
      await this.userService.updateThumbnail(this.cover_image);
      alert('Háttérkép sikeresen feltöltve!');
      this.cover_image = null;
    } catch (error) {
      alert('Hiba a háttérkép feltöltése során.');
    }
  }

  async uploadProfileImage() {
    if (!this.file) return;

    try {
      await this.userService.updateProfilepic(this.file);
      alert('Profilkép sikeresen feltöltve!');
      this.file = null;
    } catch (error) {
      alert('Hiba a profilkép feltöltése során.');
    }
  }

  async uploadBio() {
    if (!this.bio.trim()) return;

    try {
      await this.userService.updateBio(this.bio.trim());
      alert('Bio frissítve!');
    } catch (error) {
      alert('Hiba a bio frissítésekor.');
    }
  }

  async deleteAccount() {
    const confirmDelete = confirm('Biztosan törölni szeretnéd a fiókodat? Ez a művelet nem visszavonható.');
    if (!confirmDelete) return;

    try {
      await this.userService.deleteUser();
      alert('A fiókod törölve lett. Kijelentkeztetünk.');
      localStorage.removeItem('token');
      this.userAuthService.logout();
      window.location.href = '/home';
    } catch (error) {
      alert('Hiba történt a fiók törlése során.');
    }
  }

  get bioLengthRemaining(): number {
    return this.maxBioLength - this.bio.length;
  }
}
