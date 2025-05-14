import { Component, EventEmitter, Input, OnInit, Output  } from '@angular/core';
import { VideoPageService } from '../../_services/video-page-service.service';
import { ActivatedRoute } from '@angular/router';
import { UserServiceService } from '../../_services/user-service.service';
import { FormsModule } from '@angular/forms';
import { Video } from '../../_interfaces/video';

@Component({
  selector: 'app-add-comment',
  imports: [FormsModule],
  templateUrl: './add-comment.component.html',
  styleUrl: './add-comment.component.css'
})
export class AddCommentComponent implements OnInit{
  commentText: string = '';
  videoId: string = '';
  isSubmitting: boolean = false;

  userName: string = '';
  profilePictureUrl: string = '';

  @Output() commentAdded = new EventEmitter<void>();
  @Input() video: Video | undefined;

  constructor(
    private videoPageService: VideoPageService,
    private route: ActivatedRoute,
    private userService: UserServiceService
  ) { }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      if (params['id']) {
        this.videoId = params['id'];
      }
    });

    this.loadUserInfo();
  }

  async loadUserInfo(): Promise<void> {
    try {
      const user = await this.userService.getCurrentUserInfo();
      this.userName = user.username;
      this.profilePictureUrl = user.profilePicture;
    } catch (error) {
      console.error('Nem sikerült lekérni a felhasználó adatait:', error);
    }
  }

  async sendComment(): Promise<void> {
    if (!this.commentText.trim()) {
      return;
    }

    try {
      this.isSubmitting = true;
      await this.videoPageService.addComment(this.videoId, this.commentText);
      this.commentText = '';
      this.commentAdded.emit();
    } catch (error) {
      console.error('Komment küldése sikertelen:', error);
    } finally {
      this.isSubmitting = false;
    }
  }
}

