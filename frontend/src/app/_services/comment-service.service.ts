import { Injectable } from '@angular/core';
import { Comment } from '../_interfaces/comment';

@Injectable({
  providedIn: 'root'
})
export class CommentService {

  private comments: Comment[] = [{
    id: '1',
    username: 'Felhasználó neve',
    text: 'Komment szöveg. Komment szöveg. Komment szöveg.',
    avatarSrc: './assets/profilepic.jpg',
  },
  {
    id: '2',
    username: 'Felhasználó neve',
    text: 'Komment szöveg. Komment szöveg. Komment szöveg. Komment szöveg.',
    avatarSrc: './assets/profilepic.jpg',
  },
  {
    id: '3',
    username: 'Felhasználó neve',
    text: 'Komment szöveg.',
    avatarSrc: './assets/profilepic.jpg',
  }];

  constructor() { }

  getAllComments(): Comment[] {
    return this.comments;
  }
}
