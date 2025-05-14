import { Component, Input, EventEmitter, Output } from '@angular/core';
import { CommonModule } from '@angular/common';
import { UserAuthService } from '../../_services/user-auth-service.service';
import { ReportModalComponent } from '../report-modal/report-modal.component';
import { AdminServiceService } from '../../_services/admin-service.service';

@Component({
  selector: 'app-comment',
  standalone: true,
  imports: [CommonModule, ReportModalComponent],
  templateUrl: './comment.component.html',
  styleUrls: ['./comment.component.css']
})
export class CommentComponent {
  @Input() username: string = '';
  @Input() avatarSrc: string = '';
  @Input() commentText: string = '';
  @Input() commentId: string = '';
  @Output() commentDeleted = new EventEmitter<string>();

  showReportModal = false;
  isDeleting = false;

  constructor(public authService: UserAuthService, private adminService: AdminServiceService) { }
  
  openReportModal() {
    this.showReportModal = true;
  }
  
  closeReportModal() {
    this.showReportModal = false;
  }

  async deleteComment() {
    if (!this.authService.isAdmin || !this.commentId) {
      return;
    }

    try {
      this.isDeleting = true;
      await this.adminService.deleteComment(this.commentId);
      this.commentDeleted.emit(this.commentId);
    } catch (error) {
      console.error('Hiba a komment törlésekor:', error);
      alert('A komment törlése sikertelen.');
    } finally {
      this.isDeleting = false;
    }
  }
}