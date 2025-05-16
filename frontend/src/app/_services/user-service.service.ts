import { Injectable } from '@angular/core';
import axios from 'axios';
import { VideoHistoryItem } from '../_interfaces/video-history-item';
import { UserProfile } from '../_interfaces/user-profile';
import { UserAuthService } from './user-auth-service.service';


@Injectable({
  providedIn: 'root'
})
export class UserServiceService {

  constructor() { }

  async getUserProfile(userName: string): Promise<UserProfile> {
    try {
      const response = await axios.get(`/api/user/${userName}`);
      return response.data;
    } catch (error) {
      console.error('Error while fetching user profile:', error);
      throw error;
    }
  }

  async getCurrentUserInfo(): Promise<any> {
    try {
      const response = await axios.post('/api/user/info', {}, {
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        }
      });

      return response.data;
    } catch (error) {
      console.error('Error while retrieving user information:', error);
      throw error;
    }
  }

  async updateThumbnail(imageFile: File): Promise<any> {
    try {
      const formData = new FormData();
      formData.append('cover_image', imageFile);

      const response = await axios.post('/api/user/upload_cover_image', formData, {
        headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token'),
          'Content-Type': 'multipart/form-data'
        }
      });

      return response;
    } catch (error) {
      console.error('Error while uploading cover image:', error);
      throw error;
    }
  }

  async updateProfilepic(imageFile: File): Promise<any> {
    try {
      const formData = new FormData();
      formData.append('file', imageFile);

      const response = await axios.post('/api/user/upload_profile_pic', formData, {
        headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token'),
          'Content-Type': 'multipart/form-data'
        }
      });

      return response;
    } catch (error) {
      console.error('Error while uploading profile picture:', error);
      throw error;
    }
  }

  async updateBio(bioText: string): Promise<any> {
    try {
      const bioData = {
        bioText: bioText
      };

      const response = await axios.post('/api/user/update-bio', bioData, {
        headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token'),
          'Content-Type': 'application/json'
        }
      });

      return response;
    } catch (error) {
      console.error('Error while updating bio:', error);
      throw error;
    }
  }

  async deleteUser(): Promise<any> {
    try {

      const response = await axios.post('/api/user/delete-user', {}, {
        headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token'),
          'Content-Type': 'application/json'
        }
      });

      localStorage.removeItem('token');
      return response;
    } catch (error) {
      console.error('Error while deleting user account:', error);
      throw error;
    }
  }

  async getUserHistory(): Promise<VideoHistoryItem[]> {
  try {
    const response = await axios.post('/api/user/watch_history', {}, {
      headers: {
        Authorization: 'Bearer ' + localStorage.getItem('token')
      }
    });

    if (!response.data || response.data === false) {
      return [];
    }

    // Itt mappelünk
    return response.data.map((item: any) => ({
      id: item.guid,
      thumbnail: item.base_image_url,
      title: item.title,
      username: item.uploader,
      userProfilePicture: item.uploader_pic,
      description: item.description,
      uploadDate: item.uploaded_at,
    })) as VideoHistoryItem[];

  } catch (error) {
    console.error('Error while fetching video watch history:', error);
    throw error;
  }
}

  async deleteHistoryItem(videoId: string): Promise<any> {
    try {
      const response = await axios.post(
        '/api/user/delete_history_item',
        { videoId },
        {
          headers: {
            Authorization: 'Bearer ' + localStorage.getItem('token'),
            'Content-Type': 'application/json',
          },
        }
      );
      return response.data;
    } catch (error) {
      console.error('Error while deleting history item:', error);
      throw error;
    }
  }
}
