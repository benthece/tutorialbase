export interface Video {
    id: string; //giud
    title: string;
    description: string; //description?: string;
    //url
    thumbnailSrc: string; //base_image_url
    //uploadedAt
    uploaderName: string;
    //uploaderId: string; //nem kell
    avatarSrc: string;
    videoSrc: string;
    views: number; //views?: number;
    uploadDate: string;
}