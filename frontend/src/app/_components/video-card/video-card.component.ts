import { CommonModule } from '@angular/common';
import { Component, Input } from '@angular/core';
import { Router } from '@angular/router';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-video-card',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './video-card.component.html',
  styleUrl: './video-card.component.css'
})
export class VideoCardComponent {
  @Input() id: string = '';
  @Input() title: string = '';
  @Input() uploaderName: string = '';
  @Input() duration: string = '';
  @Input() thumbnailSrc: string = '';
  @Input() avatarSrc: string = '';

  constructor(private router: Router) { }

  navigateToVideo() {
    this.router.navigate(['/video', this.id]);
  }
}