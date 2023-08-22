<section id="gallery-scroll" class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 offset-lg-1">
                <div class="gallery-hero">
                    <div class="gallery-hero__heading text-main--f12">Realizacje</div>
                    <div class="gallery-hero__header f-h2">Nasze <span class="fstyle--ita">projekty</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="gallery">
            <?php
            $page = 1;

            $args = array(
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'post_status'    => 'inherit',
                'posts_per_page' => 9,
                'paged'          => $page,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $image_url = wp_get_attachment_url(get_the_ID());
            ?>
                    <div class="gallery-item">
                        <a href="<?php echo esc_url($image_url); ?>" data-fslightbox="gallery">
                            <img src="<?php echo esc_url($image_url); ?>" alt="Image">
                        </a>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo '';
            }
            ?>
        </div>
    </div>

    <div class="text-center">
        <button id="loadMoreButton" class="btn btn-primary">Rozwiń
            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#111111" />
            </svg>
        </button>
    </div>
    <div class="gallery-gradient"></div>

</section>