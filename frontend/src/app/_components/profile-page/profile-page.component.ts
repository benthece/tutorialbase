import { Component, OnInit, HostListener } from '@angular/core';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
import { UserServiceService } from '../../_services/user-service.service';
import { ActivatedRoute } from '@angular/router';
import { VideoPageService, UserVideo } from '../../_services/video-page-service.service';

@Component({
  selector: 'app-profile-page',
  imports: [VideoCardComponent, CommonModule],
  templateUrl: './profile-page.component.html',
  styleUrl: './profile-page.component.css'
})
export class ProfilePageComponent implements OnInit {
  videos: UserVideo[] = [];
  bioExpanded = false;
  isMobile = false;

  username: string = '';
  bio: string = '';
  profilePicture: string = '';
  profileThumbnail: string = '';

  constructor(private userService: UserServiceService, private route: ActivatedRoute, private videoPageService: VideoPageService) { }

  @HostListener('window:resize')
  onResize() {
    this.isMobile = window.innerWidth <= 768;
  }

ngOnInit() {
    this.isMobile = window.innerWidth <= 768;

    this.route.paramMap.subscribe(async params => {
      const routeUsername = params.get('username');
      if (!routeUsername) {
        console.error('Hiányzik a felhasználónév az útvonalból.');
        return;
      }
      await this.loadUserData(routeUsername);
    });
  }

  private async loadUserData(routeUsername: string) {
    try {
      const profile = await this.userService.getUserProfile(routeUsername);

      this.username = profile.username;
      this.bio = profile.bio;
      this.profilePicture = profile.profilePicture;
      this.profileThumbnail = profile.profileThumbnail ?? '';

      const result = await this.videoPageService.getUserVideos(routeUsername);
      this.videos = Array.isArray(result) ? result : [];
    } catch (error) {
      console.error('Nem sikerült betölteni a profilt vagy videókat:', error);
    }
  }

}
