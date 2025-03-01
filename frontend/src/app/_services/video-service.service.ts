import { Injectable } from '@angular/core';
import { Video } from '../_interfaces/video';

@Injectable({
  providedIn: 'root'
})
export class VideoService {
  private videos: Video[] = [
    {
      id: '1',
      title: 'First Sample Video',
      uploaderName: 'Test User',
      duration: '10:45',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 30000000,
      description: 'This is the first sample video description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    },
    {
      id: '2',
      title: 'Second Sample Video',
      uploaderName: 'Test User2',
      duration: '5:30',
      thumbnailSrc: './assets/math_test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/file_example_MP4_480_1_5MG.mp4',
      views: 15000000,
      description: 'This is the second sample video description. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
    },
    {
      id: '3',
      title: 'Third Sample Video',
      uploaderName: 'Test User',
      duration: '8:20',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 5000000,
      description: 'This is the third sample video description. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
    },
    {
      id: '4',
      title: 'Fourth Sample Video',
      uploaderName: 'Test User',
      duration: '12:15',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 8000000,
      description: 'This is the fourth sample video description. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    },
    {
      id: '5',
      title: 'Fifth Sample Video',
      uploaderName: 'Test User',
      duration: '7:45',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 10000000,
      description: 'This is the fifth sample video description. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    }
  ];

  constructor() { }

  getAllVideos(): Video[] {
    return this.videos;
  }

  getVideoById(id: string): Video | undefined {
    return this.videos.find(video => video.id === id);
  }

  getRecommendedVideos(currentVideoId: string): Video[] {
    return this.videos.filter(video => video.id !== currentVideoId);
  }
}
