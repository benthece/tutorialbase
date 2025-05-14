import { Component, OnInit, HostListener } from '@angular/core';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
//import { VideoService } from '../../_services/video-service.service';
import { Video } from '../../_interfaces/video';

@Component({
  selector: 'app-profile-page',
  imports: [VideoCardComponent, CommonModule],
  templateUrl: './profile-page.component.html',
  styleUrl: './profile-page.component.css'
})
export class ProfilePageComponent implements OnInit{
videos: Video[] = [];
bioExpanded = false;
isMobile = false;

constructor(/* private videoService: VideoService */) { }

@HostListener('window:resize')
  onResize() {
    this.isMobile = window.innerWidth <= 768;
  }

  ngOnInit() {

    /* const allVideos = this.videoService.getAllVideos();
    
    this.isMobile = window.innerWidth <= 768;
    this.videos = [...allVideos]; */
  }
}
