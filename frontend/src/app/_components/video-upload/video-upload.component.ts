import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-video-upload',
  imports: [CommonModule, FormsModule],
  templateUrl: './video-upload.component.html',
  styleUrl: './video-upload.component.css'
})
export class VideoUploadComponent {
  selectedImage: string | ArrayBuffer | null = null;

  onImageSelected(event: Event): void {
    const file = (event.target as HTMLInputElement)?.files?.[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        const result = e.target?.result;
        if (result !== undefined) {
          this.selectedImage = result;
        }
      };
      reader.readAsDataURL(file);
    }
  }
}
