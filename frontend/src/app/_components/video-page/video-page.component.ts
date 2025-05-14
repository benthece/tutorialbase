import { Component, OnInit, HostListener } from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { VideoComponent } from '../video/video.component';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
import { Video } from '../../_interfaces/video';
import { CommentComponent } from "../comment/comment.component";
import { Comment as CommentModel } from '../../_interfaces/comment';
import { AddCommentComponent } from '../add-comment/add-comment.component';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { VideoPageService, RecommendedVideo } from '../../_services/video-page-service.service'; //új

@Component({
  selector: 'app-video-page',
  standalone: true,
  imports: [VideoComponent, VideoCardComponent, CommonModule, CommentComponent, AddCommentComponent],
  templateUrl: './video-page.component.html',
  styleUrl: './video-page.component.css'
})
export class VideoPageComponent implements OnInit {
  currentVideo: Video | undefined;
  recommendedVideos: RecommendedVideo[] = [];
  comments: CommentModel[] = [];
  videoId: string = '1'; // Default to first video
  isMobileView = false;
  commentsExpanded = false;

  isLoading: boolean = true; //új
  error: string | null = null; //új

  constructor(
    private route: ActivatedRoute,
    public authService: UserAuthService,
    private videoPageService: VideoPageService //új
  ) { }

  ngOnInit() {

    this.checkScreenSize();
    // Subscribe to route parameters to get the video ID
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.videoId = params.get('id') || '1';
      //this.subcategoryId = params.get('subcategoryId') || '1';
      this.isLoading = true; //új
      this.error = null; //új

      // Load video and comments data
      this.loadVideo();
      this.loadComments();
    });
  }

  async loadComments(){
    try {
      this.comments = await this.videoPageService.getVideoComments(this.videoId);
    } catch (error) {
      console.error('Error loading comments:', error);
      this.error = 'Failed to load comments. Please try again later.';
    }
  }

    async loadVideo() {
    try {
      this.currentVideo = await this.videoPageService.getVideoById(this.videoId);
      this.isLoading = false;

      //this.recommendedVideos = await this.videoPageService.getRecommendedVideos(this.subcategoryId);
    } catch (error) {
      console.error('Error loading video:', error);
      this.isLoading = false;
      this.error = 'Failed to load video. Please try again later.';
    }
  }

  @HostListener('window:resize', ['$event'])
  onResize() {
    this.checkScreenSize();
  }

  private checkScreenSize() {
    this.isMobileView = window.innerWidth <= 1200;
    
    // Reset expanded state when switching to mobile view
    if (this.isMobileView) {
      this.commentsExpanded = false;
    }
  }

  toggleCommentsExpanded() {
    this.commentsExpanded = !this.commentsExpanded;
  }
}