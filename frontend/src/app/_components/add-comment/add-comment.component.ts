import { Component, Input, OnInit  } from '@angular/core';
import { VideoPageService } from '../../_services/video-page-service.service';
import { ActivatedRoute } from '@angular/router';
import { UserServiceService } from '../../_services/user-service.service';
import { FormsModule } from '@angular/forms';

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

  constructor(
    private videoPageService: VideoPageService,
    private route: ActivatedRoute,
    private userService: UserServiceService
  ) { }

  ngOnInit(): void {
    // Get the video ID from the route parameters
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
      
      // Clear the comment text after successful submission
      this.commentText = '';
    } catch (error) {
      console.error('Error sending comment:', error);
      // You might want to show an error message to the user here
    } finally {
      this.isSubmitting = false;
    }
  }
}

