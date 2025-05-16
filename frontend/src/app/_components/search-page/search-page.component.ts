import { Component, OnInit, OnDestroy, HostListener } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { Subscription } from 'rxjs';
import { SearchService } from '../../_services/search-service.service';
import { SearchCardComponent } from '../search-card/search-card.component';
import { SearchResult } from '../../_interfaces/search-result';

@Component({
  selector: 'app-search-page',
  imports: [CommonModule, SearchCardComponent],
  templateUrl: './search-page.component.html',
  styleUrl: './search-page.component.css'
})
export class SearchPageComponent implements OnInit, OnDestroy {

  searchResults: SearchResult[] = [];
  searchQuery: string = '';
  limit: number = 30;
  isLoading: boolean = false;

  private searchSubscription: Subscription | null = null;
  private scrollThreshold: number = 300; // pixels from bottom to trigger load more

  constructor(
    public searchService: SearchService,
    private route: ActivatedRoute
  ) { }

  ngOnInit(): void {
    // Subscribe to text parameter changes
    this.route.queryParams.subscribe(params => {
      if (params['text']) {
        this.searchQuery = params['text'];
        this.loadInitialResults();
      }
    });

    this.searchSubscription = this.searchService.searchResults$.subscribe(results => {
      this.searchResults = results;
      this.isLoading = false;
    });
  }

  ngOnDestroy(): void {
    if (this.searchSubscription) {
      this.searchSubscription.unsubscribe();
    }
  }

  @HostListener('window:scroll')
  onScroll(): void {
    if (this.shouldLoadMore()) {
      this.loadMoreResults();
    }
  }

  private shouldLoadMore(): boolean {
    // Check if we're near the bottom of the page
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    return !this.isLoading &&
      this.searchService.hasMore &&
      documentHeight - (scrollTop + windowHeight) < this.scrollThreshold;
  }

  private loadInitialResults(): void {
    this.isLoading = true;
    this.searchService.search(this.searchQuery, this.limit)
      .catch(error => {
        console.error('Error loading search results:', error);
        this.isLoading = false;
      });
  }

  private loadMoreResults(): void {
    if (this.isLoading || !this.searchService.hasMore) {
      return;
    }

    this.isLoading = true;
    this.searchService.loadMore()
      .catch(error => {
        console.error('Error loading more results:', error);
      })
      .finally(() => {
        this.isLoading = false;
      });
  }
}
