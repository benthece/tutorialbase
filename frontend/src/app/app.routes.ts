import { Routes } from '@angular/router';
import { LoginComponent } from './_components/login-modal/login-modal.component';
import { HomeComponent } from './_components/home/home.component';
import { VideoUploadComponent } from './_components/video-upload/video-upload.component';
export const routes: Routes = [
    //alapértelmezett útvonal
    {path: '',redirectTo: '/home', pathMatch: 'full'},
    {path: 'home', component: HomeComponent},
    {path: 'upload', component: VideoUploadComponent}

];