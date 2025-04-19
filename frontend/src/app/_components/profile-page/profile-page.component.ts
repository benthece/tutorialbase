import { Component, OnInit } from '@angular/core';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
import { VideoService } from '../../_services/video-service.service';
import { Video } from '../../_interfaces/video';

@Component({
  selector: 'app-profile-page',
  imports: [VideoCardComponent, CommonModule],
  templateUrl: './profile-page.component.html',
  styleUrl: './profile-page.component.css'
})
export class ProfilePageComponent implements OnInit{
videos: Video[] = [];

constructor(private videoService: VideoService) { }

  ngOnInit() {

    const allVideos = this.videoService.getAllVideos();

    this.videos = [...allVideos];
  }
}
