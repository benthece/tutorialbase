import { Routes } from '@angular/router';
import { HomeComponent } from './_components/home/home.component';
import { VideoUploadComponent } from './_components/video-upload/video-upload.component';
import { VideoPageComponent } from './_components/video-page/video-page.component';
import { authGuard } from './_guards/auth-guard.guard';
import { VideoHistoryPageComponent } from './_components/video-history-page/video-history-page.component';
import { ProfilePageComponent } from './_components/profile-page/profile-page.component';
import { SettingsPageComponent } from './_components/settings-page/settings-page.component';


export const routes: Routes = [
    //default
    { path: '', redirectTo: '/home', pathMatch: 'full' },
    { path: 'home', component: HomeComponent },
    { path: 'video/:id', component: VideoPageComponent },
    { path: 'video', redirectTo: '/home', pathMatch: 'full' },
    { path: 'user/:username', component: ProfilePageComponent }, //új
    { path: 'user', redirectTo: '/home', pathMatch: 'full' }, //új

    {
        path: 'upload',
        component: VideoUploadComponent,
        canActivate: [authGuard]
    },

    {//új
        path: 'history',
        component: VideoHistoryPageComponent,
        canActivate: [authGuard]
    },
    
    {//új
        path: 'settings',
        component: SettingsPageComponent,
        canActivate: [authGuard]
    },

];