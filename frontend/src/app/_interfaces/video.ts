export interface Video {
    id: string; //giud
    title: string;
    description: string; //description?: string;
    uploaderName: string;
    thumbnailSrc: string;
    avatarSrc: string;
    //videoSrc: string;
    categ_id: string;
    views: number; //views?: number;
    uploadDate: Date;
    reactions: {
    useful: number;
    notuseful: number;
    //userreaction: string;
    };
}