import { Component, OnInit } from '@angular/core';
import { UserServiceService, VideoHistoryItem } from '../../_services/user-service.service';
import { HistoryCardComponent } from '../history-card/history-card.component';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-video-history-page',
  standalone: true,
  imports: [HistoryCardComponent, CommonModule],
  templateUrl: './video-history-page.component.html',
  styleUrls: ['./video-history-page.component.css']
})
export class VideoHistoryPageComponent implements OnInit {

  historyItems: VideoHistoryItem[] = [];
  noHistory = false;

  constructor(private userService: UserServiceService) {}

  async ngOnInit() {
    try {
      this.historyItems = await this.userService.getUserHistory();
      this.noHistory = this.historyItems.length === 0;
    } catch (error) {
      console.error('Hiba a videó előzmények betöltésekor:', error);
      this.noHistory = true;
    }
  }
}
