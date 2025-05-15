import { Component, Input, OnInit, EventEmitter, Output } from '@angular/core';
import { Video } from '../../_interfaces/video';
import { CommonModule } from '@angular/common';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { ReportModalComponent } from '../report-modal/report-modal.component';
import { AdminServiceService } from '../../_services/admin-service.service';
import { Router } from '@angular/router';
import { VideoPageService } from '../../_services/video-page-service.service';

@Component({
  selector: 'app-video',
  standalone: true,
  imports: [CommonModule, ReportModalComponent],
  templateUrl: './video.component.html',
  styleUrl: './video.component.css'
})
export class VideoComponent implements OnInit {
  @Input() video: Video | undefined;
  @Output() videoDeleted = new EventEmitter<string>();
  @Input() uploaderName: string = '';
  isExpanded = false;
  showReportModal = false;
  isDeleting = false;

  constructor(public authService: UserAuthService, private adminService: AdminServiceService, private router: Router, private videoPageService: VideoPageService) { }

  async ngOnInit() {
    if (!this.video) {
      this.video = {
        id: '1',
        title: '',
        url: '',
        uploaderName: '',
        thumbnailSrc: '',
        avatarSrc: '',
        categ_id: '',
        views: '',
        uploadDate: '',
        description: '',
        reactions: {
          useful: 0,
          notuseful: 0,
          reactionState: '',
        }
      };
    }

    await this.authService.checkAdminStatus();
  }

  navigateToUser() {
    const username = this.video?.uploaderName;
    if (!username) {
      console.warn('Nem ismert a felhasználónév, nem lehet navigálni.');
      return;
    }
    this.router.navigate(['/user', username]);
  }

  toggleDescription() {
    this.isExpanded = !this.isExpanded;
  }

  openReportModal() {
    this.showReportModal = true;
  }

  closeReportModal() {
    this.showReportModal = false;
  }

  reactToVideo(action: 'like' | 'dislike') {
    if (!this.video?.id) return;

    this.videoPageService.addReaction(this.video.id, action)
      .then(() => {
        this.loadVideo();
      })
      .catch(error => {
        console.error('Nem sikerült a reakció:', error);
      });
  }

  async loadVideo() {
    if (!this.video?.id) return;

    try {
      const updated = await this.videoPageService.getVideoById(this.video.id);
      this.video = updated;
    } catch (err) {
      console.error('Hiba a videó újratöltésekor:', err);
    }
  }

  async deleteVideo() {
    if (!this.authService.isAdmin || !this.video?.id) {
      return;
    }
    try {
      this.isDeleting = true;
      await this.adminService.deleteVideo(this.video.id);
      this.videoDeleted.emit(this.video.id);
      this.router.navigate(['/']);
    } catch (error) {
      console.error('Hiba a videó törlésekor:', error);
      alert('A videó törlése sikertelen.');
    } finally {
      this.isDeleting = false;
    }
  }

    formatViewCount(views: number): string {
    return views.toLocaleString();
  }
}
