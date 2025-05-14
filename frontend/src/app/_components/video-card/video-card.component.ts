import { CommonModule } from '@angular/common';
import { Component, Input } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-video-card',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './video-card.component.html',
  styleUrl: './video-card.component.css'
})
export class VideoCardComponent {
  @Input() id: string = '';
  @Input() title: string = '';
  @Input() username: string = '';
  @Input() duration: string = '';
  @Input() base_image_url: string = '';
  @Input() profile_pic_url: string = '';

  constructor(private router: Router) { }

  navigateToVideo() {
    this.router.navigate(['/video', this.id]);
  }

  navigateToUser() {
    this.router.navigate(['/user', this.username]);
  }
}