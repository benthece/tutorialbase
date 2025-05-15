import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import axios from 'axios';

export interface SearchResult {
  guid: string;
  base_image_url: string;
  title: string;
  uploader: string;
  uploader_pic: string;
  description: string;
  uploaded_at: string;
}

@Injectable({
  providedIn: 'root'
})
export class SearchService {
  private searchResultsSubject = new BehaviorSubject<SearchResult[]>([]);
  public searchResults$ = this.searchResultsSubject.asObservable();
  
  private currentQuery = '';
  private limit = 30;
  private isLoading = false;
  
  // Store all loaded results (maximum 30 from the server)
  private allLoadedResults: SearchResult[] = [];
  // Number of results currently displayed
  private displayedCount = 0;
  // Number of results to display in each batch
  private batchSize = 10;

  constructor() { }

  async search(text: string, limit: number): Promise<void> {
    this.currentQuery = text;
    this.limit = limit;
    this.allLoadedResults = [];
    this.displayedCount = 0;
    
    try {
      const response = await axios.get('/api/search', {
        params: {
          text: this.currentQuery,
          limit: this.limit
        }
      });
      if (response.data) {
        // Store all fetched results (max 30 from server)
        this.allLoadedResults = response.data;
        
        // Only display the first batch initially
        const initialResults = this.allLoadedResults.slice(0, Math.min(this.batchSize, this.allLoadedResults.length));
        this.searchResultsSubject.next(initialResults);
        this.displayedCount = initialResults.length;
      } else {
        this.searchResultsSubject.next([]);
      }
    } catch (error) {
      console.error('Search error:', error);
      this.searchResultsSubject.next([]);
    }
  }

  async loadMore(): Promise<void> {
    if (this.isLoading || !this.hasMore) {
      return;
    }

    this.isLoading = true;
    
    try {
      // Display more from the already fetched results
      const nextBatchEnd = Math.min(this.displayedCount + this.batchSize, this.allLoadedResults.length);
      const currentResults = this.searchResultsSubject.getValue();
      
      // Add the next batch to the already displayed results
      const newBatch = this.allLoadedResults.slice(this.displayedCount, nextBatchEnd);
      const updatedResults = [...currentResults, ...newBatch];
      
      this.searchResultsSubject.next(updatedResults);
      this.displayedCount = nextBatchEnd;
    } catch (error) {
      console.error('Load more error:', error);
    } finally {
      this.isLoading = false;
    }
  }

  get isLoadingMore(): boolean {
    return this.isLoading;
  }

  get hasMore(): boolean {
    // Check if all loaded results have been displayed
    return this.displayedCount < this.allLoadedResults.length;
  }

  get currentSearchQuery(): string {
    return this.currentQuery;
  }
}
