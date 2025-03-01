import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { VideoComponent } from '../video/video.component';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
import { Video } from '../../_interfaces/video';
import { VideoService } from '../../_services/video-service.service';

@Component({
  selector: 'app-video-page',
  standalone: true,
  imports: [VideoComponent, VideoCardComponent, CommonModule],
  templateUrl: './video-page.component.html',
  styleUrl: './video-page.component.css'
})
export class VideoPageComponent implements OnInit {
  currentVideo: Video | undefined;
  recommendedVideos: Video[] = [];
  videoId: string = '1'; // Default to first video

  constructor(
    private route: ActivatedRoute,
    private videoService: VideoService
  ) { }

  ngOnInit() {
    // Subscribe to route parameters to get the video ID
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.videoId = params.get('id') || '1';
      this.loadVideo();
    });
  }

  loadVideo() {
    this.currentVideo = this.videoService.getVideoById(this.videoId);

    // (all videos except current)
    this.recommendedVideos = this.videoService.getRecommendedVideos(this.videoId);
  }
}