import { Injectable } from '@angular/core';
import axios from 'axios';
import { environment } from '../../environments/environment.development';
import { BehaviorSubject } from 'rxjs/internal/BehaviorSubject';
import { Video } from '../_interfaces/video';
import { Comment } from '../_interfaces/comment';

export interface UserVideo {
  id: string;
  uploaderName: string;
  uploaderProfilePicture: string;
  title: string;
  thumbnail: string;
}

export interface VideoComment {
  id: string;
  username: string;
  profilePicture: string;
  text: string;
}

export interface RecommendedVideo {
  id: string;
  title: string;
  uploaderName: string;
  uploaderProfilePicture: string;
  thumbnail: string;
}

export interface CategoryVideo {
  id: string;
  title: string;
  uploaderName: string;
  uploaderProfilePicture: string;
  thumbnail: string;
}

export interface SubcategoryVideo {
  id: string;
  title: string;
  uploaderName: string;
  uploaderProfilePicture: string;
  thumbnail: string;
}

export interface HomeVideos {
  categoryName: string;
  categoryId: string;
  videos: CategoryVideo[];
}

export interface VideoDetails {
  video: {
    guid: string;
    title: string;
    description: string;
    url: string;
    base_image_url: string;
    views: number;
    uploaded_at: string;
    uploader_id: string;
    uploader: string;
    uploader_pic: string;
  };
  reactions: {
    useful: number;
    notuseful: number;
    //userReaction: string;
  };
  comments: Array<{
    guid: string;
    username: string;
    user_guid: string;
    user_pic: string;
    text: string;
    created_at: string;
    modified_at: string | null;
  }>;
}

export interface UploadVideoRequest {
  title: string;
  description: string;
  categoryId: string;  // We will send ID, not name
  subcategoryId: string;  // We will send ID, not name
  tagsText: string;  // Raw tags text input that will be converted to array
}

@Injectable({
  providedIn: 'root'
})
export class VideoPageService {
  private apiUrl = environment.apiUrl;

  private currentVideoSubject = new BehaviorSubject<VideoDetails | null>(null);
  public currentVideo$ = this.currentVideoSubject.asObservable();

  private homeCategoriesSubject = new BehaviorSubject<HomeVideos[]>([]);
  public homeCategories$ = this.homeCategoriesSubject.asObservable();

  private isLoadingHomepageSubject = new BehaviorSubject<boolean>(false);
  public isLoadingHomepage$ = this.isLoadingHomepageSubject.asObservable();

  constructor() { }

  async getVideoWithDetails(videoId: string): Promise<VideoDetails> {
    try {
      const response = await axios.get(`/api/video/${videoId}`);

      if (response.data) {
        this.currentVideoSubject.next(response.data);
      }

      return response.data;
    } catch (error) {
      console.error('Error fetching video details:', error);
      throw error;
    }
  }

  mapToVideoInterface(videoDetails: VideoDetails): Video {
    return {
      id: videoDetails.video.guid,
      title: videoDetails.video.title,
      description: videoDetails.video.description,
      uploaderName: videoDetails.video.uploader,
      thumbnailSrc: videoDetails.video.base_image_url,
      avatarSrc: videoDetails.video.uploader_pic,
      //videoSrc: 'videoDetails.video.src', //át kell írni majd
      //subcategoryId: 'videoDetails.video.subcategoryId',
      views: videoDetails.video.views,
      uploadDate: new Date(videoDetails.video.uploaded_at),
      reactions: {
        useful: videoDetails.reactions.useful,
        notuseful: videoDetails.reactions.notuseful
      }
    };
  }

  mapToCommentInterface(apiComments: VideoDetails['comments']): Comment[] {
    return apiComments.map(comment => ({
      id: comment.guid,
      username: comment.username,
      avatarSrc: comment.user_pic,
      text: comment.text,
      date: new Date(comment.created_at)
    }));
  }

  async getVideoById(videoId: string): Promise<Video> {
    const videoDetails = await this.getVideoWithDetails(videoId);
    return this.mapToVideoInterface(videoDetails);
  }

  async getVideoComments(videoId: string): Promise<Comment[]> {
    const videoDetails = await this.getVideoWithDetails(videoId);
    return this.mapToCommentInterface(videoDetails.comments);
  }

  

  async getRecommendedVideos(subcategoryId: string): Promise<RecommendedVideo[]> {
    try {
      const response = await axios.get('/api/video/recommended', {
        params: { subcategoryId }
      });

      return response.data;
    } catch (error) {
      console.error('Hiba a kapcsolódó videók lekérése során:', error);
      throw error;
    }
  }

  async getVideosByCategory(categoryId: string): Promise<CategoryVideo[]> {
    try {
      const response = await axios.get('/api/video/category', {
        params: { categoryId }
      });

      return response.data;
    } catch (error) {
      console.error('Hiba a kategória videóinak lekérése során:', error);
      throw error;
    }
  }

  async getVideosBySubcategory(subcategoryId: string): Promise<SubcategoryVideo[]> {
    try {
      const response = await axios.get('/api/video/subcategory', {
        params: { subcategoryId }
      });

      return response.data;
    } catch (error) {
      console.error('Hiba az alkategória videóinak lekérése során:', error);
      throw error;
    }
  }

  async getHomepageVideos(): Promise<HomeVideos[]> {
    try {
      this.isLoadingHomepageSubject.next(true);

      const response = await axios.get('/api/video/homepage');

      if (response.data) {
        this.homeCategoriesSubject.next(response.data);
      }

      return response.data;
    } catch (error) {
      console.error('Error fetching homepage videos:', error);
      throw error;
    } finally {
      this.isLoadingHomepageSubject.next(false);
    }
  }

  async getUserVideos(userName: string): Promise<UserVideo[]> {
    try {
      const response = await axios.get('/api/user/videos', {
        params: { userName }
      });

      return response.data;
    } catch (error) {
      console.error('Hiba a felhasználó videóinak lekérése során:', error);
      throw error;
    }
  }

  async addComment(videoId: string, commentText: string): Promise<VideoComment> {
    try {
      const token = localStorage.getItem('token');
      if (!token) {
        throw new Error('Authentication token not found. Please log in.');
      }

      const response = await axios.post(`/api/create-comment/${videoId}`,
        {
          text: commentText
        },
        {
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
          }
        }
      );

      // If successful, reload the video details to get the updated comments
      if (response.data) {
        // Reload the video with fresh data from the server
        await this.getVideoWithDetails(videoId);
      }

      return response.data;
    } catch (error) {
      console.error('Error adding comment:', error);
      throw error;
    }
  }

  async addReaction(videoId: string, action: 'like' | 'dislike'): Promise<void> {
  try {
    const token = localStorage.getItem('token');
    if (!token) {
      throw new Error('Authentication token not found. Please log in.');
    }

    await axios.post(`/api/reaction/${videoId}`,
      { action }, // { action: 'like' } vagy 'dislike'
      {
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json'
        }
      }
    );

    // Frissítjük az aktuális videót az új like/dislike számmal
    await this.getVideoWithDetails(videoId);
  } catch (error) {
    console.error('Error adding reaction:', error);
    throw error;
  }
}


  async uploadVideo(
    videoFile: File,
    thumbnailFile: File,
    title: string,
    description: string,
    categoryId: string,
    subcategoryId: string,
    tagsText: string
  ): Promise<string> {
    try {
      // Check if token exists
      const token = localStorage.getItem('token');
      if (!token) {
        throw new Error('Authentication token not found. Please log in.');
      }

      // Convert tagsText to array (splitting by commas and trimming whitespace)
      const tags = tagsText
        .split(',')
        .map(tag => tag.trim())
        .filter(tag => tag.length > 0);

      // Create FormData object to send files and data
      const formData = new FormData();
      formData.append('videoFile', videoFile);
      formData.append('thumbnailFile', thumbnailFile);

      // Add other metadata
      formData.append('title', title);
      formData.append('description', description);
      formData.append('categoryId', categoryId);
      formData.append('subcategoryId', subcategoryId);

      // Add tags as a JSON string
      formData.append('tags', JSON.stringify(tags));

      // Make the API request
      const response = await axios.post('/api/video/upload', formData, {
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'multipart/form-data'
        },
        onUploadProgress: (progressEvent) => {
          // You can implement progress tracking here if needed
          const percentCompleted = Math.round((progressEvent.loaded * 100) / (progressEvent.total || 1));
          console.log(`Upload progress: ${percentCompleted}%`);
        }
      });

      return response.data;
    } catch (error) {
      console.error('Error uploading video:', error);
      throw error;
    }
  }
}
