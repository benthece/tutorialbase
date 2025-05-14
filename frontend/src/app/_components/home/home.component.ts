import { Component, ViewChild, ElementRef, AfterViewInit, Renderer2, OnDestroy, OnInit } from '@angular/core';
import { VideoCardComponent } from '../video-card/video-card.component';
import { CommonModule } from '@angular/common';
import { fromEvent, Subscription } from 'rxjs';
import { debounceTime } from 'rxjs/operators';
import { Video } from '../../_interfaces/video';
//import { VideoService } from '../../_services/video-service.service';
//import { VideoPageService } from '../../_services/video-page-service.service'; //új

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [VideoCardComponent, CommonModule],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent implements AfterViewInit, OnDestroy, OnInit {
  @ViewChild('category1Row') category1RowRef!: ElementRef;
  @ViewChild('category2Row') category2RowRef!: ElementRef;
  @ViewChild('category3Row') category3RowRef!: ElementRef;

  private scrollSubscriptions: Subscription[] = [];


  category1Videos: Video[] = [];
  category2Videos: Video[] = [];
  category3Videos: Video[] = [];

  //isLoading: boolean = true; //új
  //error: string | null = null; //új

  constructor(/* private videoService: VideoService, */ private renderer: Renderer2) { }
  //constructor(private videoPageService: VideoPageService, private renderer: Renderer2) { } //új

  ngOnInit() {

/*     const allVideos = this.videoService.getAllVideos();

    this.category1Videos = [...allVideos];
    this.category2Videos = [...allVideos];
    this.category3Videos = [...allVideos]; */

    //this.loadCategoryVideos(); //új
  }

/*   async loadCategoryVideos() { //új
    this.isLoading = true;
    
    try {
      this.category1Videos = await this.videoPageService.getVideosByCategory('Kategória1');
      this.category2Videos = await this.videoPageService.getVideosByCategory('Kategória2');
      this.category3Videos = await this.videoPageService.getVideosByCategory('Kategória3');
      this.isLoading = false;
    } catch (error) {
      console.error('Error loading category videos:', error);
      this.error = 'Failed to load videos. Please try again later.';
      this.isLoading = false;
    }
  } */

  ngAfterViewInit(): void {
    // Set up scroll listeners for each row
    this.setupScrollFades(this.category1RowRef.nativeElement, 'category1');
    this.setupScrollFades(this.category2RowRef.nativeElement, 'category2');
    this.setupScrollFades(this.category3RowRef.nativeElement, 'category3');
  }

  ngOnDestroy(): void {
    // Clean up all subscriptions to prevent memory leaks
    this.scrollSubscriptions.forEach(sub => sub.unsubscribe());
  }

  private setupScrollFades(element: HTMLElement, sectionId: string): void {
    // Get the parent container for this row
    const container = element.parentElement;
    if (!container) return;

    // Create fade elements if they don't exist
    const leftFadeId = `${sectionId}-left-fade`;
    const rightFadeId = `${sectionId}-right-fade`;

    // Create left fade element
    const leftFade = this.renderer.createElement('div');
    this.renderer.setAttribute(leftFade, 'id', leftFadeId);
    this.renderer.addClass(leftFade, 'fade-left');
    // Initially hide the left fade
    this.renderer.setStyle(leftFade, 'opacity', '0');

    // Create right fade element
    const rightFade = this.renderer.createElement('div');
    this.renderer.setAttribute(rightFade, 'id', rightFadeId);
    this.renderer.addClass(rightFade, 'fade-right');

    // Add the fades to the container
    this.renderer.appendChild(container, leftFade);
    this.renderer.appendChild(container, rightFade);

    // Set up scroll event subscription
    const scrollSubscription = fromEvent(element, 'scroll')
      .pipe(debounceTime(10))
      .subscribe(() => {
        this.updateFades(element, leftFade, rightFade);
      });

    this.scrollSubscriptions.push(scrollSubscription);

    // Initial check for right fade (should show if content overflows)
    setTimeout(() => {
      this.updateFades(element, leftFade, rightFade);
    }, 100);
  }

  private updateFades(scrollElement: HTMLElement, leftFade: HTMLElement, rightFade: HTMLElement): void {
    const { scrollLeft, scrollWidth, clientWidth } = scrollElement;

    // Show/hide left fade based on scroll position
    if (scrollLeft > 10) {
      this.renderer.setStyle(leftFade, 'opacity', '1');
    } else {
      this.renderer.setStyle(leftFade, 'opacity', '0');
    }

    // Show/hide right fade based on if we're at the end
    // Allow a small buffer (10px) for rounding errors
    if (scrollWidth - (scrollLeft + clientWidth) < 10) {
      this.renderer.setStyle(rightFade, 'opacity', '0');
    } else {
      this.renderer.setStyle(rightFade, 'opacity', '1');
    }
  }
}