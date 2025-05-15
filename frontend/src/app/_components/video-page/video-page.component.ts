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
import { VideoPageService, RecommendedVideo } from '../../_services/video-page-service.service';

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
  videoId: string = '';
  isMobileView = false;
  commentsExpanded = false;
  categ_id: string = '';

  isLoading: boolean = true;
  error: string | null = null;

  video: Video | undefined;

  hasMoreComments = true;

  commentOffset = 0;
  readonly COMMENT_PAGE_SIZE = 5;

  constructor(
    private route: ActivatedRoute,
    public authService: UserAuthService,
    private videoPageService: VideoPageService
  ) { }

  ngOnInit() {

    this.checkScreenSize();
    // Subscribe to route parameters to get the video ID
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.videoId = params.get('id') || '';
      this.isLoading = true;
      this.error = null;

      this.loadVideo();
      this.loadComments(true);
    });
  }

  async loadComments(reset: boolean = false) {
  try {
    if (reset) {
      this.comments = [];
      this.commentOffset = 0;
      this.hasMoreComments = true;
    }

    const newComments = await this.videoPageService.getVideoComments(this.videoId, this.commentOffset);

    this.comments = [...this.comments, ...newComments];
    this.commentOffset += this.COMMENT_PAGE_SIZE;

    if (newComments.length < this.COMMENT_PAGE_SIZE) {
      this.hasMoreComments = false;
    }
  } catch (error) {
    console.error('Hiba kommentek betöltésekor:', error);
    this.error = 'Nem sikerült a kommentek betöltése.';
  }
}

  loadMoreComments() {
    this.loadComments();
  }

  async loadVideo() {
    try {
      this.currentVideo = await this.videoPageService.getVideoById(this.videoId);
      this.isLoading = false;
      this.categ_id = this.currentVideo.categ_id;

      this.recommendedVideos = await this.videoPageService.getRecommendedVideos(this.categ_id);
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

    if (this.isMobileView) {
      this.commentsExpanded = false;
    }
  }

  toggleCommentsExpanded() {
    this.commentsExpanded = !this.commentsExpanded;
  }


}