import { CommonModule } from '@angular/common';
import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-video-card',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './video-card.component.html',
  styleUrl: './video-card.component.css'
})
export class VideoCardComponent {
  // Sample data - in a real app, this would come from an API
  @Input() title: string = 'How to Build an Angular App';
  @Input() uploaderName: string = 'Angular Master';
  @Input() duration: string = '10:45';
  @Input() thumbnailSrc: string = './assets/test.jpg';
  @Input() avatarSrc: string = './assets/profilepic.jpg';
}