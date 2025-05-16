import { Injectable } from '@angular/core';
import axios from 'axios';
import { Subject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AdminServiceService {

  private deleteSuccessSubject = new Subject<{ type: string, id: string }>();
  public deleteSuccess$ = this.deleteSuccessSubject.asObservable();

  constructor() { }

  async deleteVideo(videoId: string): Promise<any> {
    try {
      const response = await axios.post(`/api/video/delete-video/${videoId}`, 
        { },
        {
          headers: { Authorization: 'Bearer ' + localStorage.getItem('token') }
        }
      );
      
      if (response.status === 200) {
        this.deleteSuccessSubject.next({ type: 'video', id: videoId });
      }
      
      return response;
    } catch (error) {
      console.error('Hiba a videó törlésekor:', error);
      throw error;
    }
  }

  async deleteComment(commentId: string): Promise<any> {
    try {
      const response = await axios.post(`/api/delete-comment/${commentId}`, {},
        {
          headers: { Authorization: 'Bearer ' + localStorage.getItem('token') }
        }
      );
      console.log(response)
      if (response.status === 200) {
        this.deleteSuccessSubject.next({ type: 'comment', id: commentId });
      }
      
      return response;
    } catch (error) {
      console.error('Hiba a komment törlésekor:', error);
      throw error;
    }
  }
}
