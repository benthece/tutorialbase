import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { Category, SimpleSubcategory, VideoPageService } from '../../_services/video-page-service.service';

@Component({
  selector: 'app-video-upload',
  imports: [CommonModule, FormsModule],
  templateUrl: './video-upload.component.html',
  styleUrls: ['./video-upload.component.css'],
})
export class VideoUploadComponent implements OnInit {
  selectedImage: string | ArrayBuffer | null = null;
  selectedImageFile: File | null = null;
  selectedVideo: File | null = null;

  selectedCategory: string = '';
  subcategories: SimpleSubcategory[] = [];
  selectedSubcategory: string = '';
  isSubcategoryDisabled: boolean = true;

  maxFileSize = 5 * 1024 * 1024; // 5MB
  categories: Category[] = [];

  title = '';
  description = '';
  category = '';
  subcategory = '';
  tags = '';

  uploadProgress: number = 0;
  uploading: boolean = false;

  constructor(public videoPageService: VideoPageService) { }

  ngOnInit(): void {
    this.loadCategories();
  }

  async loadCategories(): Promise<void> {
    try {
      this.categories = await this.videoPageService.getCategories();
    } catch (error) {
      console.error('Kategóriák betöltése sikertelen:', error);
    }
  }

  onCategoryChange(categoryId: string): void {
  this.selectedSubcategory = '';
  this.subcategories = [];
  this.isSubcategoryDisabled = true;

  this.selectedCategory = categoryId;
  this.category = categoryId;

  if (categoryId) {
    this.loadSubcategories(categoryId);
  }
}

  async loadSubcategories(categoryId: string): Promise<void> {
    try {
      this.subcategories = await this.videoPageService.getSubcategoriesByMainCategory(categoryId);
      this.isSubcategoryDisabled = false;
    } catch (error) {
      console.error('Alkategóriák betöltése sikertelen', error);
      this.isSubcategoryDisabled = true;
    }
  }

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
    } catch (err) {
      alert('Hiba történt a videó feltöltése során.');
      console.error(err);
      this.uploading = false;
    }
  }


}
