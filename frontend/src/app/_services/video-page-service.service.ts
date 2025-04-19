import { Injectable } from '@angular/core';
import { Video } from '../_interfaces/video';
import { Comment } from '../_interfaces/comment';
import axios from 'axios';
import { environment } from '../../environments/environment.development';

@Injectable({
  providedIn: 'root'
})
export class VideoPageService {
  private apiUrl = environment.apiUrl;

  constructor() { }

/*   async getAllVideos(): Promise<Video[]> {
    try {
      const response = await axios.get(`${this.apiUrl}/videos`);
      return response.data;
    } catch (error) {
      console.error('Error fetching all videos:', error);
      throw error;
    }
  } */

    //át kell írni mert, mert egybe jön vissza a videó, komment és likeok

  async getVideoById(id: string): Promise<Video> {
    try {
      const response = await axios.get(`${this.apiUrl}/video/${id}`);
      return response.data;
    } catch (error) {
      console.error(`Error fetching video with id ${id}:`, error);
      throw error;
    }
  }

  //  /api/recommended?catId={categorx_guid} --> kell tárolni a videocategoryid-t fronztenden

  async getRecommendedVideos(currentVideoId: string): Promise<Video[]> {
    try {
      const response = await axios.get(`${this.apiUrl}/video/recommended/${currentVideoId}`);
      return response.data;
    } catch (error) {
      console.error('Error fetching recommended videos:', error);
      throw error;
    }
  }

  async getVideoComments(videoId: string): Promise<Comment[]> {
    try {
      const response = await axios.get(`${this.apiUrl}/videos/${videoId}/comments`);
      return response.data;
    } catch (error) {
      console.error(`Error fetching comments for video ${videoId}:`, error);
      throw error;
    }
  }

  async addComment(videoId: string, comment: Partial<Comment>): Promise<Comment> {
    try {
      const response = await axios.post(`${this.apiUrl}/videos/${videoId}/comments`, comment);
      return response.data;
    } catch (error) {
      console.error(`Error adding comment to video ${videoId}:`, error);
      throw error;
    }
  }

/*   async likeVideo(videoId: string): Promise<{likes: number}> {
    try {
      const response = await axios.post(`${this.apiUrl}/video/${videoId}/like`);
      return response.data;
    } catch (error) {
      console.error(`Error liking video ${videoId}:`, error);
      throw error;
    }
  }

  async dislikeVideo(videoId: string): Promise<{dislikes: number}> {
    try {
      const response = await axios.post(`${this.apiUrl}/videos/${videoId}/dislike`);
      return response.data;
    } catch (error) {
      console.error(`Error disliking video ${videoId}:`, error);
      throw error;
    }
  } */

  async getVideosByCategory(categoryName: string): Promise<Video[]> {
    try {
      const response = await axios.get(`${this.apiUrl}/videos/category/${categoryName}`);
      return response.data;
    } catch (error) {
      console.error(`Error fetching videos for category ${categoryName}:`, error);
      throw error;
    }
  }
}

/*

{
    "video": {
        "guid": "82395f86-66d3-4193-80d2-84d4e84c0ca5",
        "title": "Introduction to SQL",
        "description": "A beginner tutorial on SQL.",
        "url": "/videos/1",
        "base_image_url": "/images/vid1.jpg",
        "views": 1500,
        "uploaded_at": "2025-01-01 10:00:00",
        "uploader_id": "54fec882-d527-41dd-b12d-fcf9b56005cb",
        "uploader": "john_doe",
        "uploader_pic": "http://example.com/john.png"
    },
    "reactions": {
        "useful": 2,
        "notuseful": 0
    },
    "comments": [
        {
            "guid": "ffdbd219-5b0c-4cd4-8b84-3f499580d168",
            "username": "david_wilson",
            "user_guid": "a6784a48-9137-4407-b50c-ec2153a697d0",
            "user_pic": "http://example.com/david.png",
            "text": "Thanks for this!",
            "created_at": "2025-01-08 11:15:00",
            "modified_at": null
        },
        {
            "guid": "8635e5c0-b463-4f89-a9e4-e6fe3527152c",
            "username": "isabella_hall",
            "user_guid": "2233a7c6-3b66-4eb8-9edb-a59b686e0772",
            "user_pic": "http://example.com/isabella.png",
            "text": "Perfect for beginners.",
            "created_at": "2025-01-11 18:00:00",
            "modified_at": null
        },
        {
            "guid": "84efc06c-5b5b-4c8d-85db-5ee0a8d2485f",
            "username": "jack_baker",
            "user_guid": "2dbfb117-b0d9-4ecd-9cea-6e38ed906498",
            "user_pic": "http://example.com/jack.png",
            "text": "Enjoyed the session.",
            "created_at": "2025-01-12 19:15:00",
            "modified_at": null
        },
        {
            "guid": "19173576-eff9-4956-8314-44f0bb5ea34e",
            "username": "jane_smith",
            "user_guid": "f90e7c7b-8749-484e-9730-488aa157d3c5",
            "user_pic": "http://example.com/jane.png",
            "text": "Very helpful, thanks.",
            "created_at": "2025-01-03 15:00:00",
            "modified_at": "2025-01-03 15:10:00"
        },
        {
            "guid": "5c7c7b6f-89e5-40ba-8cf7-36a523ba5635",
            "username": "john_doe",
            "user_guid": "54fec882-d527-41dd-b12d-fcf9b56005cb",
            "user_pic": "http://example.com/john.png",
            "text": "Great video!",
            "created_at": "2025-01-03 14:00:00",
            "modified_at": null
        }
    ]
}

*/