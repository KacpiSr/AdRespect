document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector(".gallery");
    const loadMoreButton = document.getElementById('loadMoreButton');
    const galleryGradient = document.querySelector('.gallery-gradient');

    let currentPage = 2;
    const imagesPerLoad = 5;

    const macy = Macy({
        container: '.gallery',
        trueOrder: false,
        waitForImages: false,
        margin: 24,
        columns: 3,
        breakAt: {
            940: 3,
            520: 2,
            400: 1
        }
    });

    function hideLoadMoreButton() {
        loadMoreButton.style.display = 'none';
        galleryGradient.style.display = 'none';
    }

    async function loadMoreImages() {
        try {
            const response = await fetch(`${ajax_object.ajax_url}?action=my_custom_ajax_action&page=${currentPage}&per_page=${imagesPerLoad}`);
            if (!response.ok) {
                throw new Error('Error loading images');
            }
    
            const newImages = await response.json();
    
            if (newImages.length === 0) {
                hideLoadMoreButton();
                return;
            }
    
            newImages.forEach(imageUrl => {
                const galleryItem = document.createElement('div');
                galleryItem.classList.add('gallery-item');
    
                const a = document.createElement('a');
                a.href = imageUrl;
                a.setAttribute('data-fslightbox', 'gallery');
    
                const image = document.createElement('img');
                image.src = imageUrl;
                image.alt = 'Image';
    
                a.appendChild(image);
                galleryItem.appendChild(a);
                gallery.appendChild(galleryItem);
            });
    
            window.refreshFsLightbox();
    
            macy.runOnImageLoad(function () {
                macy.recalculate(true);
            }, true);
    
            currentPage++;
    
        } catch (error) {
            console.error(error);
        }
    }
    
    loadMoreButton.addEventListener('click', loadMoreImages);
});

