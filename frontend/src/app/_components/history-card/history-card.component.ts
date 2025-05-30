import { Component, Input, Output, EventEmitter } from '@angular/core';
import { VideoHistoryItem } from '../../_interfaces/video-history-item';
import { CommonModule } from '@angular/common';
import { Router } from '@angular/router';
import { UserServiceService } from '../../_services/user-service.service';

@Component({
  selector: 'app-history-card',
  imports: [CommonModule],
  templateUrl: './history-card.component.html',
  styleUrl: './history-card.component.css'
})
export class HistoryCardComponent {

  @Input() video!: VideoHistoryItem;
  @Output() historyDeleted = new EventEmitter<string>();

  constructor(private router: Router, private userService: UserServiceService) { }

  isExpanded = false;

  toggleDescription() {
    this.isExpanded = !this.isExpanded;
  }
  navigateToUser() {
    this.router.navigate(['/user', this.video.username]);
  }

  navigateToVideo() {
    this.router.navigate(['/video', this.video.id]);

  }

  async deleteHistory() {
    try {
      await this.userService.deleteHistoryItem(this.video.id);
      this.historyDeleted.emit(this.video.id);  // jelzem a szülőnek, hogy töröltem
    } catch (error) {
      console.error('Failed to delete history item:', error);
    }
  }
}
