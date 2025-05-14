/* import { Injectable } from '@angular/core';
import { Video } from '../_interfaces/video';

@Injectable({
  providedIn: 'root'
})
export class VideoService {
  private videos: Video[] = [
    {
      id: '1',
      title: 'Első teszt videó',
      uploaderName: 'Test User1',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 3,
      uploadDate: "2000.01.01",
      description: 'Első teszt videó leírása. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    },
    {
      id: '2',
      title: 'Második teszt videó',
      uploaderName: 'Test User2',
      thumbnailSrc: './assets/math_test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/file_example_MP4_480_1_5MG.mp4',
      views: 4,
      uploadDate: "2002.01.01",
      description: 'Második teszt videó leírása. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    },
    {
      id: '3',
      title: 'Harmadik teszt videó',
      uploaderName: 'Test User3',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 5,
      uploadDate: "2003.01.01",
      description: 'Harmadik teszt videó leírása. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
    },
    {
      id: '4',
      title: 'Negyedik teszt videó',
      uploaderName: 'Test User4',
      thumbnailSrc: './assets/math_test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/file_example_MP4_480_1_5MG.mp4',
      views: 1,
      uploadDate: "2004.01.01",
      description: 'Negyedik teszt videó leírása. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
    },
    {
      id: '5',
      title: 'Ötödik teszt videó',
      uploaderName: 'Test User5',
      thumbnailSrc: './assets/test.jpg',
      avatarSrc: './assets/profilepic.jpg',
      videoSrc: './assets/SampleVideo_1280x720_1mb.mp4',
      views: 2,
      uploadDate: "2005.01.01",
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
 */