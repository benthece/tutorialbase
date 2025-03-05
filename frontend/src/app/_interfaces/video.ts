export interface Video {
    id: string;
    title: string;
    uploaderName: string;
    duration: string;
    thumbnailSrc: string;
    avatarSrc: string;
    videoSrc: string;
    views?: number;
    description?: string;
}