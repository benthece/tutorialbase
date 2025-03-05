import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { VideoComponent } from '../video/video.component';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
import { Video } from '../../_interfaces/video';
import { VideoService } from '../../_services/video-service.service';
import { CommentComponent } from "../comment/comment.component";
import { CommentService } from '../../_services/comment-service.service';
import { Comment as CommentModel } from '../../_interfaces/comment'; // Rename to avoid collision

@Component({
  selector: 'app-video-page',
  standalone: true,
  imports: [VideoComponent, VideoCardComponent, CommonModule, CommentComponent],
  templateUrl: './video-page.component.html',
  styleUrl: './video-page.component.css'
})
export class VideoPageComponent implements OnInit {
  currentVideo: Video | undefined;
  recommendedVideos: Video[] = [];
  comments: CommentModel[] = []; 
  videoId: string = '1'; // Default to first video

  constructor(
    private route: ActivatedRoute,
    private videoService: VideoService,
    private commentService: CommentService,
  ) { }

  ngOnInit() {
    // Subscribe to route parameters to get the video ID
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.videoId = params.get('id') || '1';
      this.loadVideo();
      this.loadComments();
    });
  }

  loadComments(){
    this.comments = this.commentService.getAllComments();
  }

  loadVideo() {
    this.currentVideo = this.videoService.getVideoById(this.videoId);

    // (all videos except current)
    this.recommendedVideos = this.videoService.getRecommendedVideos(this.videoId);
  }
}