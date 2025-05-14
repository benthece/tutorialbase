import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { SearchResult } from '../../_services/search-service.service';

@Component({
  selector: 'app-search-card',
  imports: [CommonModule, RouterLink],
  templateUrl: './search-card.component.html',
  styleUrl: './search-card.component.css'
})
export class SearchCardComponent {

  @Input() result!: SearchResult;

  get videoThumbnail(): string {
    return this.result?.videoThumbnail;
  }

  get videoTitle(): string {
    return this.result?.videoTitle;
  }

  get username(): string {
    return this.result?.username;
  }

  get userProfilePicture(): string {
    return this.result?.userProfilePicture;
  }

  get uploadDate(): string {
    return this.result?.uploadDate;
  }

  get description(): string {
    return this.result?.description;
  }
}
