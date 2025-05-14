import { Component, OnInit, HostListener } from '@angular/core';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
//import { VideoService } from '../../_services/video-service.service';
import { CategoryVideo } from '../../_services/video-page-service.service';
import { UserServiceService } from '../../_services/user-service.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-profile-page',
  imports: [VideoCardComponent, CommonModule],
  templateUrl: './profile-page.component.html',
  styleUrl: './profile-page.component.css'
})
export class ProfilePageComponent implements OnInit {
  videos: CategoryVideo[] = [];
  bioExpanded = false;
  isMobile = false;

  username: string = '';
  bio: string = '';
  profilePicture: string = '';
  profileThumbnail: string = '';

  constructor(/* private videoService: VideoService, */ private userService: UserServiceService, private route: ActivatedRoute) { }

  @HostListener('window:resize')
  onResize() {
    this.isMobile = window.innerWidth <= 768;
  }

  async ngOnInit() {
    this.isMobile = window.innerWidth <= 768;

    const routeUsername = this.route.snapshot.paramMap.get('username');
    if (!routeUsername) {
      console.error('Hiányzik a felhasználónév az útvonalból.');
      return;
    }

    try {
      const profile = await this.userService.getUserProfile(routeUsername);

      this.username = profile.username;
      this.bio = profile.bio;
      this.profilePicture = profile.profilePicture;
      this.profileThumbnail = profile.profileThumbnail ?? '';
    } catch (error) {
      console.error('Nem sikerült betölteni a profilt:', error);
    }
  }

  /*
  ngOnInit() {

    /* const allVideos = this.videoService.getAllVideos();
    
    this.isMobile = window.innerWidth <= 768;
    this.videos = [...allVideos]; 
  }*/
}
