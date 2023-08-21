import Masonry from "masonry-layout";

const grid = document.querySelector(".gallery");
let masonry = new Masonry(grid, {
  itemSelector: ".gallery-item",
  columnWidth: ".gallery-item",
  gutter: 43,
  fitWidth: true,
});

document.addEventListener('DOMContentLoaded', function () {
    const loadMoreButton = document.getElementById('loadMoreButton');
    const galleryGradient = document.querySelector('.gallery-gradient');
    let page = 1;
    const ajaxurl = masonry_vars.ajaxurl;

    loadMoreButton.addEventListener('click', () => {
        loadMoreButton.disabled = true;

        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    const gallery = document.querySelector('.gallery');
                    const newImagesFragment = document.createRange().createContextualFragment(response.html);
                    const newImages = Array.from(newImagesFragment.querySelectorAll('.gallery-item'));
                    const existingImages = Array.from(gallery.querySelectorAll('.gallery-item'));
                    const uniqueNewImages = newImages.filter(newImage => {
                        return !existingImages.some(existingImage => existingImage.innerHTML === newImage.innerHTML);
                    });

                    if (uniqueNewImages.length > 0) {
                        uniqueNewImages.forEach(image => {
                            gallery.appendChild(image);
                        });
                        masonry.reloadItems();
                        masonry.layout();
                        const gallerySection = document.querySelector('.gallery-section');
                        const currentHeight = gallerySection.offsetHeight;
                        const newHeight = currentHeight + (currentHeight * 0.2);
                        gallerySection.style.height = newHeight + 'px';
                        loadMoreButton.disabled = false;
                        loadMoreButton.textContent = 'Rozwiń';
                        page++;
                    } else {
                        loadMoreButton.style.display = 'none';
                        galleryGradient.style.display = 'none';
                    }
                } else {
                    loadMoreButton.style.display = 'none';
                }
            }
        };

        xhr.open('GET', ajaxurl + '?action=load_more_images&page=' + page, true);
        xhr.send();
    });
});