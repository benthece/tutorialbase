import { Injectable } from '@angular/core';
import { Video } from '../_interfaces/video';

@Injectable({
  providedIn: 'root'
})
export class VideoService {
  private videos: Video[] = [
    {
      id: '1',
      title: 'Első teszt videó',
      uploaderName: 'Test User',
      duration: '10:45',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 30000000,
      description: 'Első teszt videó leírása. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    },
    {
      id: '2',
      title: 'Második teszt videó',
      uploaderName: 'Test User2',
      duration: '5:30',
      thumbnailSrc: './assets/math_test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/file_example_MP4_480_1_5MG.mp4',
      views: 15000000,
      description: 'Második teszt videó leírása. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
    },
    {
      id: '3',
      title: 'Harmadik teszt videó',
      uploaderName: 'Test User',
      duration: '8:20',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 5000000,
      description: 'Harmadik teszt videó leírása. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
    },
    {
      id: '4',
      title: 'Negyedik teszt videó',
      uploaderName: 'Test User',
      duration: '12:15',
      thumbnailSrc: './assets/math_test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/file_example_MP4_480_1_5MG.mp4',
      views: 8000000,
      description: 'Negyedik teszt videó leírása. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    },
    {
      id: '5',
      title: 'Ötödik teszt videó',
      uploaderName: 'Test User',
      duration: '7:45',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 10000000,
      description: 'Ötödik teszt videó leírása. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
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
