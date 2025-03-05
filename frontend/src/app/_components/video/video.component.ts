import { Component, Input, OnInit } from '@angular/core';
import { Video } from '../../_interfaces/video';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-video',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './video.component.html',
  styleUrl: './video.component.css'
})
export class VideoComponent implements OnInit {
  @Input() video: Video | undefined;

  isExpanded = false;
  likes = 999;
  dislikes = 150;

  ngOnInit() {
    if (!this.video) {
      this.video = {
        id: '1',
        title: 'Default Video',
        uploaderName: 'Default User',
        duration: '0:00',
        thumbnailSrc: './assets/test.jpg',
        avatarSrc: './assets/profilepic.jpg',
        videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
        views: 0,
        description: 'No description available'
      };
    }
  }

  toggleDescription() {
    this.isExpanded = !this.isExpanded;
  }

  incrementLikes() {
    this.likes++;
  }

  incrementDislikes() {
    this.dislikes++;
  }
}