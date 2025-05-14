import { Component, Output, EventEmitter, OnInit, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';
import { ReportServiceService } from '../../_services/report-service.service';

@Component({
  selector: 'app-report-modal',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './report-modal.component.html',
  styleUrls: ['./report-modal.component.css']
})
export class ReportModalComponent implements OnInit {
  @Input() itemId!: string; // New input property for comment or video ID
  @Input() itemType: 'comment' | 'video' = 'comment'; // Type of content being reported
  
  reportForm: FormGroup;
  isSubmitting: boolean = false;
  validationErrors: any = [];
  reasons: any[] = [];
  isSuccessful: boolean = false;

  constructor(
    private fb: FormBuilder,
    public reportService: ReportServiceService
  ){
    this.reportForm = this.fb.group({
      reason: ['', [Validators.required]],
      reasonText: ['', [Validators.required]]
    });
  }

  ngOnInit(): void {
    this.reasons = this.reportService.getReasons();
  }

  async reportAction() {
    if (this.reportForm.valid) {
      this.isSubmitting = true;

      try {
        const payload = {
          itemId: this.itemId,
          itemType: this.itemType,
          reason: this.reportForm.get('reason')?.value,
          reasonText: this.reportForm.get('reasonText')?.value
        };

        await this.reportService.sendReport(payload);
        this.isSuccessful = true;
        setTimeout(() => {
          this.close.emit();
        }, 2000);

      } catch (error: any) {
        this.isSubmitting = false;

        if (error.response?.data?.errors) {
          this.validationErrors = error.response.data.errors;
        } else if (error.response?.data?.message) {
          this.validationErrors = error.response.data.message;
        } else if (error.response?.data?.error) {
          this.validationErrors = error.response.data.error;
        } else {
          this.validationErrors = 'Hiba történt a jelentés küldése során.';
        }
      }
    }
  }

  @Output() close = new EventEmitter<void>();

  onBackdropClick(event: MouseEvent) {
    if (event.target === event.currentTarget) {
      this.close.emit();
    }
  }

  closeModal() {
    this.close.emit();
  }
}