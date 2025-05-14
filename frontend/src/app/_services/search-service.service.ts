import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';
import axios from 'axios';

export interface SearchResult {
  videoId: string;
  videoThumbnail: string;
  videoTitle: string;
  username: string;
  userProfilePicture: string;
  description: string;
  uploadDate: string;
}

@Injectable({
  providedIn: 'root'
})
export class SearchService {
  private searchResultsSubject = new BehaviorSubject<SearchResult[]>([]);
  public searchResults$ = this.searchResultsSubject.asObservable();
  
  private currentQuery = '';
  private isLoading = false;
  
  // Az összes betöltött eredmény tárolása (maximum 30)
  private allLoadedResults: SearchResult[] = [];
  // A jelenleg megjelenített eredmények száma
  private displayedCount = 0;
  // Egyszerre mennyi eredményt jelenítünk meg
  private batchSize = 10;

  constructor() { }

  async search(query: string): Promise<void> {
    this.currentQuery = query;
    this.allLoadedResults = [];
    this.displayedCount = 0;
    
    try {
      const response = await axios.get('/api/search', {
        params: {
          query: this.currentQuery
        }
      });
      
      if (response.data && Array.isArray(response.data.results)) {
        // Eltároljuk az összes lekért eredményt (max 30 lesz a szervertől)
        this.allLoadedResults = response.data.results;
        
        // Csak az első batch-et jelenítjük meg
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
      // Csak a már letöltött eredményekből jelenítünk meg többet
      const nextBatchEnd = Math.min(this.displayedCount + this.batchSize, this.allLoadedResults.length);
      const currentResults = this.searchResultsSubject.getValue();
      
      // Hozzáadjuk a következő adagot a már megjelenített eredményekhez
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

  // Getters for component access
  get isLoadingMore(): boolean {
    return this.isLoading;
  }

  get hasMore(): boolean {
    // Csak azt ellenőrizzük, hogy már megjelenítettük-e az összes betöltött eredményt
    return this.displayedCount < this.allLoadedResults.length;
  }

  get currentSearchQuery(): string {
    return this.currentQuery;
  }
}