//Get user profile info (bio, thumbnail), update user settings, fetch history, settings changes, like profile updates

/* getUserProfile(userId: string): Observable<UserProfile>;
updateThumbnail(userId: string, thumbnail: File): Observable<any>;
updateProfilePic(userId: string, profilePic: File): Observable<any>;
updateBio(userId: string, bio: string): Observable<any>;
deleteUser(userId: string): Observable<any>;
getUserHistory(userId: string): Observable<HistoryEntry[]>;  // (for history page) */

import { Injectable } from '@angular/core';
import axios from 'axios';

// Interfaces for type safety
export interface VideoHistoryItem {
  id: string;
  thumbnail: string;
  title: string;
  username: string;
  userProfilePicture: string;
  description: string;
  uploadDate: string;
}

export interface UserProfile {
  username: string;
  userProfilePicture: string;
  userThumbnail: string;
  bio: string;
}

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
      console.error('Hiba a felhasználói profil lekérése során:', error);
      throw error;
    }
  }

async getCurrentUserInfo(): Promise<any> {
  try {
    const response = await axios.get('/api/user/info', {
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      }
    });

    return response.data;
  } catch (error) {
    console.error('Hiba a felhasználói információ lekérésekor:', error);
    throw error;
  }
}

async updateThumbnail(imageFile: File): Promise<any> {
  try {
    // FormData objektum létrehozása a fájl feltöltéshez
    const formData = new FormData();
    formData.append('coverImage', imageFile);

    // Kérés küldése a szervernek a token hitelesítéssel
    const response = await axios.post('/api/user/cover-image', formData, {
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token'),
        'Content-Type': 'multipart/form-data'
      }
    });

    return response;
  } catch (error) {
    console.error('Hiba a borítókép feltöltése során:', error);
    throw error;
  }
}

async updateProfilepic(imageFile: File): Promise<any> {
  try {
    // FormData objektum létrehozása a fájl feltöltéshez
    const formData = new FormData();
    formData.append('ProfileImage', imageFile);

    // Kérés küldése a szervernek a token hitelesítéssel
    const response = await axios.post('/api/user/profile-image', formData, {
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token'),
        'Content-Type': 'multipart/form-data'
      }
    });

    return response;
  } catch (error) {
    console.error('Hiba a profilkép feltöltése során:', error);
    throw error;
  }
}

//response akár sima success

async updateBio(bioText: string): Promise<any> {
  try {
    // Adat objektum létrehozása a bio szövegéhez
    const bioData = {
      bio: bioText
    };

    // Kérés küldése a szervernek a token hitelesítéssel
    const response = await axios.post('/api/user/bio', bioData, {
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token'),
        'Content-Type': 'application/json'
      }
    });

    return response;
  } catch (error) {
    console.error('Hiba a bio feltöltése során:', error);
    throw error;
  }
}

async deleteUser(): Promise<any> {
  try {
    // POST kérés küldése a felhasználói fiók soft delete-jéhez
    // A token azonosítja, hogy melyik felhasználót kell törölni
    const response = await axios.post('/api/user/delete', {}, {
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token'),
        'Content-Type': 'application/json'
      }
    });

    // Token törlése a lokális tárolóból sikeres törlés esetén
    localStorage.removeItem('token');
    
    return response;
  } catch (error) {
    console.error('Hiba a felhasználói fiók törlése során:', error);
    throw error;
  }
}

async getUserHistory(): Promise<VideoHistoryItem[]> {
  try {
    const response = await axios.get('/api/user/video-history', {
      headers: { 
        Authorization: 'Bearer ' + localStorage.getItem('token')
      }
    });
    
    return response.data.data;
  } catch (error) {
    console.error('Hiba a videó előzmények lekérése során:', error);
    throw error;
  }
}
}

