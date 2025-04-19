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
//import { VideoPageService } from '../../_services/video-page-service.service'; //új

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
  //isLoading: boolean = true; //új
  //error: string | null = null; //új

  constructor(
    private route: ActivatedRoute,
    private videoService: VideoService,
    private commentService: CommentService,
    //private videoPageService: VideoPageService //új
  ) { }

  ngOnInit() {
    // Subscribe to route parameters to get the video ID
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.videoId = params.get('id') || '1';
      //this.isLoading = true; //új
      //this.error = null; //új

      // Load video and comments data
      this.loadVideo();
      this.loadComments();
    });
  }

  loadComments(){
    this.comments = this.commentService.getAllComments();
  }

/*   async loadComments() {
    try {
      this.comments = await this.videoPageService.getVideoComments(this.videoId);
    } catch (error) {
      console.error('Error loading comments:', error);
      this.error = 'Failed to load comments. Please try again later.';
    }
  } */

    loadVideo() {
      this.currentVideo = this.videoService.getVideoById(this.videoId);
  
      // (all videos except current)
      this.recommendedVideos = this.videoService.getRecommendedVideos(this.videoId);
    }

/*   async loadVideo() { //új
    try {
      this.currentVideo = await this.videoPageService.getVideoById(this.videoId);
      this.isLoading = false;

      this.recommendedVideos = await this.videoPageService.getRecommendedVideos(this.videoId);
    } catch (error) {
      console.error('Error loading video:', error);
      this.isLoading = false;
      this.error = 'Failed to load video. Please try again later.';
    }
  } */

/*   async handleLike() { //új
    if (this.videoId) {
      try {
        const response = await this.videoPageService.likeVideo(this.videoId);
        // Update UI with new like count from response
        if (this.currentVideo?.views !== undefined) {
          // Update the UI element that shows likes
          // Assuming component handles this internally
        }
      } catch (error) {
        console.error('Error liking video:', error);
      }
    }
  }

  async handleDislike() { //új
    if (this.videoId) {
      try {
        const response = await this.videoPageService.dislikeVideo(this.videoId);
        // Update UI with new dislike count from response
        // Assuming component handles this internally
      } catch (error) {
        console.error('Error disliking video:', error);
      }
    }
  } */
}