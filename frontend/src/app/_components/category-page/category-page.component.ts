import { Component, OnInit, AfterViewInit, OnDestroy, ElementRef, QueryList, Renderer2, ViewChildren } from '@angular/core';
import { CommonModule } from '@angular/common';
import { fromEvent, Subscription } from 'rxjs';
import { debounceTime } from 'rxjs/operators';
import { VideoCardComponent } from '../video-card/video-card.component';
import { VideoPageService, MainCategoryVideos } from '../../_services/video-page-service.service';
import { ActivatedRoute } from '@angular/router';
import { Video } from '../../_interfaces/video';

@Component({
  selector: 'app-category-page',
  imports: [CommonModule, VideoCardComponent],
  templateUrl: './category-page.component.html',
  styleUrl: './category-page.component.css'
})
export class CategoryPageComponent implements OnInit, AfterViewInit, OnDestroy {

  categoryVideos: MainCategoryVideos[] = [];

  @ViewChildren('videoRow') videoRows!: QueryList<ElementRef>;
  private scrollSubscriptions: Subscription[] = [];
  private routeSubscription!: Subscription;

  constructor(private videoService: VideoPageService, private renderer: Renderer2, private route: ActivatedRoute,) { }

  ngOnInit(): void {
    this.routeSubscription = this.route.paramMap.subscribe(paramMap => {
      const guid = paramMap.get('guid');
      if (guid) {
        this.loadVideosByCategory(guid);
      } else {
        this.categoryVideos = [];
        console.warn('Nem található kategória GUID az útvonalban.');
      }
    });
  }

  private loadVideosByCategory(guid: string) {
    this.videoService.getVideosByCategory(guid).then(data => {
      if (data && Array.isArray(data.subcategories)) {
        this.categoryVideos = data.subcategories.map((subcat: any) => ({
          subcategory: {
            id: subcat.id ?? '',
            name: subcat.subcategory_name,
            videos: (subcat.videos ?? []).map((v: any) => ({
              id: v.guid,
              title: v.title,
              uploaderName: v.uploader,
              thumbnailSrc: v.base_image_url,
              avatarSrc: v.uploader_pic,
              url: v.url,
              categ_id: v.categ_id,
              views: 0,
              uploadDate: '',
              reactions: {
                useful: 0,
                notuseful: 0,
                reactionState: ''
              }
            })) as Video[]
          }
        })) as MainCategoryVideos[];
      } else {
        console.error('Nem megfelelő formátumú adat:', data);
      }
    }).catch(error => {
      console.error('Hiba a videók betöltésekor:', error);
    });
  }


  ngAfterViewInit(): void {
    setTimeout(() => {
      this.videoRows.forEach((row, index) => {
        const sectionId = `subcategory-${index}`;
        this.setupScrollFades(row.nativeElement, sectionId);
      });
    }, 0);
  }

ngOnDestroy(): void {
    if (this.routeSubscription) {
      this.routeSubscription.unsubscribe();
    }
    this.scrollSubscriptions.forEach(sub => sub.unsubscribe());
  }

  private setupScrollFades(element: HTMLElement, sectionId: string): void {
    const container = element.parentElement;
    if (!container) return;

    const leftFadeId = `${sectionId}-left-fade`;
    const rightFadeId = `${sectionId}-right-fade`;

    const leftFade = this.renderer.createElement('div');
    this.renderer.setAttribute(leftFade, 'id', leftFadeId);
    this.renderer.addClass(leftFade, 'fade-left');
    this.renderer.setStyle(leftFade, 'opacity', '0');

    const rightFade = this.renderer.createElement('div');
    this.renderer.setAttribute(rightFade, 'id', rightFadeId);
    this.renderer.addClass(rightFade, 'fade-right');

    this.renderer.appendChild(container, leftFade);
    this.renderer.appendChild(container, rightFade);

    const scrollSubscription = fromEvent(element, 'scroll')
      .pipe(debounceTime(10))
      .subscribe(() => {
        this.updateFades(element, leftFade, rightFade);
      });

    this.scrollSubscriptions.push(scrollSubscription);

    setTimeout(() => {
      this.updateFades(element, leftFade, rightFade);
    }, 100);
  }

  private updateFades(scrollElement: HTMLElement, leftFade: HTMLElement, rightFade: HTMLElement): void {
    const { scrollLeft, scrollWidth, clientWidth } = scrollElement;

    this.renderer.setStyle(leftFade, 'opacity', scrollLeft > 10 ? '1' : '0');
    this.renderer.setStyle(rightFade, 'opacity', scrollWidth - (scrollLeft + clientWidth) < 10 ? '0' : '1');
  }

}
