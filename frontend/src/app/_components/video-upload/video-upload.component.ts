import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { VideoPageService } from '../../_services/video-page-service.service';

@Component({
  selector: 'app-video-upload',
  imports: [CommonModule, FormsModule],
  templateUrl: './video-upload.component.html',
  styleUrls: ['./video-upload.component.css'],
})
export class VideoUploadComponent {
  selectedImage: string | ArrayBuffer | null = null;
  selectedImageFile: File | null = null;
  selectedVideo: File | null = null;

  maxFileSize = 5 * 1024 * 1024; // 5MB

  title = '';
  description = '';
  category = '';
  subcategory = '';
  tags = '';

  uploadProgress: number = 0;
  uploading: boolean = false;

  constructor(public videoPageService: VideoPageService) { }

  onImageSelected(event: Event): void {
    const file = (event.target as HTMLInputElement)?.files?.[0];
    if (file) {
      if (!file.type.startsWith('image/') || file.size > this.maxFileSize) {
        alert('Képfájl nem megfelelő típusú vagy túl nagy!');
        this.selectedImage = null;
        this.selectedImageFile = null;
        return;
      }

      this.selectedImageFile = file;

      const reader = new FileReader();
      reader.onload = (e) => {
        this.selectedImage = e.target?.result || null;
      };
      reader.readAsDataURL(file);
    } else {
      this.selectedImageFile = null;
      this.selectedImage = null;
    }
  }

  onVideoSelected(event: Event): void {
    const file = (event.target as HTMLInputElement)?.files?.[0];
    if (file) {
      if (file.type !== 'video/mp4' || file.size > this.maxFileSize) {
        alert('Videó nem megfelelő típusú vagy túl nagy!');
        this.selectedVideo = null;
        return;
      }

      this.selectedVideo = file;
    } else {
      this.selectedVideo = null;
    }
  }

  isFormValid(): boolean {
    const alphanumericPattern = /^[a-zA-Z0-9]+$/;
    const isTagsValid = this.tags.split(',').every(tag => alphanumericPattern.test(tag.trim()));

    return (
      !!this.selectedImageFile &&
      !!this.selectedVideo &&
      this.title.trim() !== '' &&
      this.description.trim() !== '' &&
      this.category.trim() !== '' &&
      this.subcategory.trim() !== '' &&
      this.tags.trim() !== '' &&
      isTagsValid
    );
  }

  async onUpload(): Promise<void> {
    if (!this.isFormValid()) return;

    this.uploading = true;
    this.uploadProgress = 0;
    try {
      await this.videoPageService.uploadVideo(
        this.selectedVideo!,
        this.selectedImageFile!,
        this.title.trim(),
        this.description.trim(),
        this.category.trim(),
        this.subcategory.trim(),
        this.tags.trim(),
        (progress: number) => {
        this.uploadProgress = progress;
      }
      );
      alert('Videó sikeresen feltöltve!');
      // Opcionálisan: reset form
    } catch (err) {
      alert('Hiba történt a videó feltöltése során.');
      console.error(err);
      this.uploading=false;
    }
  }


}
