import { Component, Input, OnInit } from '@angular/core';
import { Video } from '../../_interfaces/video';
import { CommonModule } from '@angular/common';
//  import { VideoPageService } from '../../_services/video-page-service.service'; //új

@Component({
  selector: 'app-video',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './video.component.html',
  styleUrl: './video.component.css'
})
export class VideoComponent implements OnInit {
  @Input() video: Video | undefined;
  //@Input() videoId: string | undefined; //új

  isExpanded = false;
  likes = 9;
  dislikes = 1;
  //isLoading = false; //új

  //constructor(private videoPageService: VideoPageService) { } //új

    ngOnInit() {
      if (!this.video) {
        this.video = {
          id: '1',
          title: 'Default Video',
          uploaderName: 'Default User',
          thumbnailSrc: './assets/test.jpg',
          avatarSrc: './assets/profilepic.jpg',
          videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
          views: 0,
          uploadDate: "2010.02.11.",
          description: 'No description available'
        };
      }
    }

/*   async ngOnInit() { //új
    // If we have a videoId but no video, fetch the video
    if (!this.video && this.videoId) {
      this.isLoading = true;
      try {
        this.video = await this.videoPageService.getVideoById(this.videoId);
        this.isLoading = false;
      } catch (error) {
        console.error('Error fetching video:', error);
        this.isLoading = false;
      }
    }
  } */

  toggleDescription() {
    this.isExpanded = !this.isExpanded;
  }

  /*   incrementLikes() {
      this.likes++;
    }
  
    incrementDislikes() {
      this.dislikes++;
    } */

/*   async incrementLikes() { //új
    if (this.video) {
      try {
        const response = await this.videoPageService.likeVideo(this.video.id);
        this.likes = response.likes;
      } catch (error) {
        console.error('Error liking video:', error);
        // Optimistic UI update
        this.likes++;
      }
    }
  }

  async incrementDislikes() { //új
    if (this.video) {
      try {
        const response = await this.videoPageService.dislikeVideo(this.video.id);
        this.dislikes = response.dislikes;
      } catch (error) {
        console.error('Error disliking video:', error);
        // Optimistic UI update
        this.dislikes++;
      }
    }
  } */
}