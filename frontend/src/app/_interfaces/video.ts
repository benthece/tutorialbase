export interface Video {
    id: string;
    title: string;
    description: string;
    uploaderName: string;
    thumbnailSrc: string;
    avatarSrc: string;
    url: string;
    categ_id: string;
    views: number;
    uploadDate: string;
    reactions: {
    useful: number;
    notuseful: number;
    reactionState: string;
    };
}