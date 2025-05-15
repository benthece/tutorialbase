import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SearchResult } from '../../_services/search-service.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-search-card',
  imports: [CommonModule],
  templateUrl: './search-card.component.html',
  styleUrl: './search-card.component.css'
})
export class SearchCardComponent {

  @Input() result!: SearchResult;

  constructor(private router: Router) { }

  get videoId(): string {
    return this.result?.guid
  }

  get videoThumbnail(): string {
    return this.result?.base_image_url;
  }

  get videoTitle(): string {
    return this.result?.title;
  }

  get username(): string {
    return this.result?.uploader;
  }

  get userProfilePicture(): string {
    return this.result?.uploader_pic;
  }

  get uploadDate(): string {
    return this.result?.uploaded_at;
  }

  get description(): string {
    return this.result?.description;
  }

  navigateToUser() {
    this.router.navigate(['/user', this.username]);
  }

  navigateToVideo() {
    this.router.navigate(['/video', this.videoId]);
  }
}
