import { Component } from '@angular/core';

@Component({
  selector: 'app-video',
  imports: [],
  templateUrl: './video.component.html',
  styleUrl: './video.component.css'
})
export class VideoComponent {

  isExpanded = false;
  likes = 999;
  dislikes = 10050;

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
