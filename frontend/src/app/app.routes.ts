import { Routes } from '@angular/router';
import { HomeComponent } from './_components/home/home.component';
import { VideoUploadComponent } from './_components/video-upload/video-upload.component';
import { VideoPageComponent } from './_components/video-page/video-page.component';
export const routes: Routes = [
    //default
    {path: '',redirectTo: '/home', pathMatch: 'full'},
    {path: 'home', component: HomeComponent},
    {path: 'upload', component: VideoUploadComponent},
    {path: 'video/:id', component: VideoPageComponent},
    {path: 'video', redirectTo: '/video/1', pathMatch: 'full'},
];