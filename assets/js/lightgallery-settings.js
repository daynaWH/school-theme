document.addEventListener("DOMContentLoaded", function () {
    const gallery = document.querySelector(".lightgallery");
    if (gallery) {
        lightGallery(gallery, {
            selector: "a", 
            plugins: [lgThumbnail],
            thumbnail: true,
            animateThumb: true,
            showThumbByDefault: true,
        });
        }
    });
    
    