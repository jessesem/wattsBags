

$(function () {

    // Initialize the Gallery as video carousel:
    blueimp.Gallery([

        // {
        //     title: 'Sintel',
        //     href: 'https://archive.org/download/Sintel/sintel-2048-surround_512kb.mp4',
        //     type: 'video/mp4',
        //     poster: 'https://i.imgur.com/MUSw4Zu.jpg'
        // },
        // {
        //     title: 'Big Buck Bunny',
        //     href: 'https://upload.wikimedia.org/wikipedia/commons/7/75/' +
        //         'Big_Buck_Bunny_Trailer_400p.ogg',
        //     type: 'video/ogg',
        //     poster: 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/' +
        //         'Big.Buck.Bunny.-.Opening.Screen.png/' +
        //         '800px-Big.Buck.Bunny.-.Opening.Screen.png'
        // },
        // {
        //     title: 'Elephants Dream',
        //     href: 'https://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/' +
        //         'Elephants_Dream_%28high_quality%29.ogv/' +
        //         'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
        //     type: 'video/webm',
        //     poster: 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/' +
        //         'Elephants_Dream_s1_proog.jpg/800px-Elephants_Dream_s1_proog.jpg'
        // },
        {
            title: 'Western River Expeditions River Guide Reviews',
            type: 'text/html',
            youtube: 'TBqITefOhno',
            stretchImages: true,
            youTubeClickToPlay: false
        },
        {
            title: 'Rafting in the Grand Canyon- The River of Life',
            type: 'text/html',
            youtube: 'japV_65NX5I',
            stretchImages: true,
            youTubeClickToPlay: false
        },
        {
            title: 'Western River Vimeo',
            type: 'text/html',
            vimeo: '4475048',
            stretchImages: true,
            vimeoClickToPlay: true,
            poster: '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-5.jpg'
        }
    ], {
        container: '#blueimp-video-carousel',
        carousel: true
    });

});

blueimp.Gallery(
    [
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-0.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-1.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-2.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-3.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-4.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-5.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-6.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-7.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-8.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-9.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-10.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-11.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-12.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-13.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-14.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-15.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-16.jpg',
        '/img/gallery/Grand-Canyon 6-7-Day-Gallery/wre-grand-6-7-day-17.jpg',

    ],
    {
        container: '#blueimp-gallery-carousel',
        carousel: true,
        stretchImages: true,
        preloadRange: 4,
        startSlideshow: false
    }
);



$(function () {
    blueimp.Gallery([

        {
            title: '',
            type: 'text/html',
            youtube: 'TBqITefOhno',
            youTubeClickToPlay: false
        }
    ], {
        container: '#blueimp-video-carousel-GC6A',
        carousel: true
    });

});

$(function () {
    blueimp.Gallery([

           {
            title: '',
            type: 'text/html',
            youtube: 'japV_65NX5I',
            stretchImages: true,
            youTubeClickToPlay: false
        }
    ], {
        container: '#blueimp-video-carousel-GC6B',
        stretchImages: true,
        carousel: true
    });

});