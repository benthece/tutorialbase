import { Injectable } from '@angular/core';
import axios from 'axios';
import { BehaviorSubject } from 'rxjs/internal/BehaviorSubject';
import { Video } from '../_interfaces/video';
import { Comment } from '../_interfaces/comment';

export interface UserVideo {
  guid: string;
  title: string;
  uploader: string;
  uploader_pic: string;
  base_image_url: string;
}

export interface VideoComment {
  id: string;
  username: string;
  profilePicture: string;
  text: string;
}

export interface RecommendedVideo {
  guid: string;
  title: string;
  username: string;
  profile_pic_url: string;
  base_image_url: string;
}

export interface CategoryVideo {
  guid: string;
  title: string;
  uploader: string;
  uploader_pic: string;
  base_image_url: string;
}

export interface MainCategoryVideos {
  subcategory: {
    id: string;
    name: string;
    videos: Video[];
  }
}

export interface Subcategory {
  id?: string;
  subcategory_name: string;
  videos: Video[];
}

export interface SimpleSubcategory {
  guid: string;
  name: string;
}

interface ApiResponse {
  maincategory_name: string;
  subcategories: Subcategory[];
}

export interface Category {
  guid: string;
  name: string;
}

export interface HomeVideos {
  id: string;
  name: string;
  videos: CategoryVideo[];
}

export interface VideoDetails {
  video: {
    guid: string;
    title: string;
    description: string;
    url: string;
    base_image_url: string;
    views: string;
    uploaded_at: string;
    uploader_id: string;
    uploader: string;
    uploader_pic: string;
    categ_id: string
  };
  reactions: {
    useful: number;
    notuseful: number;
    reactionState: 'like' | 'dislike' | 'none' | 'not logged in';
  };
  views: string;
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
  categoryId: string;
  subcategoryId: string;
  tagsText: string;
}

@Injectable({
  providedIn: 'root'
})
export class VideoPageService {

  private currentVideoSubject = new BehaviorSubject<VideoDetails | null>(null);
  public currentVideo$ = this.currentVideoSubject.asObservable();

  private homeCategoriesSubject = new BehaviorSubject<HomeVideos[]>([]);
  public homeCategories$ = this.homeCategoriesSubject.asObservable();

  private isLoadingHomepageSubject = new BehaviorSubject<boolean>(false);
  public isLoadingHomepage$ = this.isLoadingHomepageSubject.asObservable();

  constructor() { }

  async getVideoWithDetails(videoId: string): Promise<VideoDetails> {
    try {
      const token = localStorage.getItem('token');

      const headers: any = {};
      if (token) {
        headers['Authorization'] = `Bearer ${token}`;
      }

      const response = await axios.get(`/api/video/${videoId}`, {
        headers
      });

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

  const externalViews = parseInt(videoDetails.views || '0', 10) || 0;
  const totalViews = externalViews;

  return {
    id: videoDetails.video.guid,
    title: videoDetails.video.title,
    description: videoDetails.video.description,
    uploaderName: videoDetails.video.uploader,
    thumbnailSrc: videoDetails.video.base_image_url,
    avatarSrc: videoDetails.video.uploader_pic,
    url: videoDetails.video.url,
    categ_id: videoDetails.video.categ_id,
    views: totalViews.toString(),
    uploadDate: videoDetails.video.uploaded_at,
    reactions: {
      useful: videoDetails.reactions.useful,
      notuseful: videoDetails.reactions.notuseful,
      reactionState: videoDetails.reactions.reactionState
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

  async getVideoComments(videoId: string, offset = 0): Promise<Comment[]> {
    const response = await axios.get(`/api/video/${videoId}`, {
      params: { off: offset }
    });

    return this.mapToCommentInterface(response.data.comments);
  }


  async getRecommendedVideos(categ_id: string): Promise<RecommendedVideo[]> {
    try {
      const response = await axios.get(`/api/videos/recommended/${categ_id}`, {
        params: { limit: 8 }
      });

      return response.data.map((video: any) => ({
        guid: video.guid,
        title: video.title,
        username: video.uploader,
        profile_pic_url: video.uploader_pic,
        base_image_url: video.base_image_url
      }));
    } catch (error) {
      console.error('Hiba a kapcsolódó videók lekérése során:', error);
      throw error;
    }
  }

  async getCategories(): Promise<Category[]> {
    try {
      const response = await axios.get('/api/maincategories');

      return response.data;
    } catch (error) {
      console.error('Hiba a kategória videóinak lekérése során:', error);
      throw error;
    }
  }

  async getVideosByCategory(guid: string): Promise<ApiResponse> {
  try {
    const response = await axios.get(`/api/subcategories/${guid}`);
    return response.data as ApiResponse;
  } catch (error) {
    console.error('Hiba a kategória videóinak lekérése során:', error);
    throw error;
  }
}

  async getSubcategoriesByMainCategory(mainCategoryId: string): Promise<SimpleSubcategory[]> {
    try {
      const response = await axios.get(`/api/categories/${mainCategoryId}`);
      return response.data;
    } catch (error) {
      console.error('Hiba az alkategóriák lekérése során:', error);
      throw error;
    }
  }

  async getHomepageVideos(): Promise<HomeVideos[]> {
    try {
      this.isLoadingHomepageSubject.next(true);

      const response = await axios.get('/api/home');

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
      const response = await axios.get(`/api/user/uploaded/${userName}`);
      return response.data;
    } catch (error) {
      console.error('Hiba a felhasználó videóinak lekérése során:', error);
      throw error;
    }
  }

  async addComment(videoId: string, commentText: string): Promise<any> {
    try {
      const token = localStorage.getItem('token');
      if (!token) {
        throw new Error('Authentication token not found. Please log in.');
      }

      await axios.post(`/api/create-comment/${videoId}`,
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
      await this.getVideoWithDetails(videoId);
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
        { action },
        {
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
          }
        }
      );

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
    tagsText: string,
    onProgress?: (progress: number) => void
  ): Promise<string> {
    try {
      const token = localStorage.getItem('token');
      if (!token) {
        throw new Error('Authentication token not found. Please log in.');
      }

      // Convert tagsText to array
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

      const response = await axios.post('/api/video/upload', formData, {
        headers: {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'multipart/form-data'
        },
        onUploadProgress: (progressEvent) => {
          // progress tracking
          const percent = Math.round((progressEvent.loaded * 100) / (progressEvent.total || 1));
          if (onProgress) onProgress(percent);
          console.log(`Upload progress: ${percent}%`);
        }
      });

      return response.data;
    } catch (error) {
      console.error('Error uploading video:', error);
      throw error;
    }
  }
}
