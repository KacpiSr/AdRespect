<?php
/*
*
* Template Name: Strona glowna
*
*/
?>

<?php get_header(); ?>

<!-- Sekcja Slider -->
<section class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide swiper-cols">
            <img class="slider-photo" src="<?php echo get_template_directory_uri(); ?>/dist/img/slider-photo.png" width="" height="" alt="slidphoto" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="content">
                            <div class="content__hero-text f-h1 font-main--montserrat line-height-main--lh115 font-weight--fw500">Nowoczesna aranżacja Twojego ogrodu </div>
                            <p class="content__hero-under text-main font-main line-height-main">Marka GiardDesign to wieloletnie doświadczenie i wysoka estetyka realizacji. Oferujemy kompleksowy zakres usług z indywidualnym podejściem do każdego projektu.</p>
                            <div class="content__slider-hrefs text-main font-main ">
                                <a class="content__slider-hrefs--left" href=""><span>Skontaktuj się z nami</span></a>
                                <a class="content__slider-hrefs--right" href=""><span>Zobacz nasze realizacje</span> <svg class="slider-href-arrow" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#1B5B31" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide swiper-cols">
            <img class="slider-photo" src="<?php echo get_template_directory_uri(); ?>/dist/img/slider-photo.png" width="" height="" alt="slidphoto" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="content">
                            <div class="content__hero-text f-h1 font-main--montserrat line-height-main--lh115 font-weight--fw500">Nowoczesna aranżacja Twojego ogrodu 2 </div>
                            <p class="content__hero-under text-main font-main line-height-main">Marka GiardDesign to wieloletnie doświadczenie i wysoka estetyka realizacji. Oferujemy kompleksowy zakres usług z indywidualnym podejściem do każdego projektu.2</p>
                            <div class="content__slider-hrefs text-main font-main ">
                                <a class="content__slider-hrefs--left" href=""><span>Skontaktuj się z nami</span></a>
                                <a class="content__slider-hrefs--right" href=""><span>Zobacz nasze realizacje</span>
                                    <svg class="slider-href-arrow" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 8.49529L15.1043 7.59959L8.63642 14.0769L8.63642 0.5L7.36358 0.5L7.36358 14.0675L0.895699 7.59959L9.54553e-08 8.49529L8.00471 16.5L16 8.49529Z" fill="#1B5B31" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="swiper-header">
    <div class="arrow-buttons">
        <div class="arrows arrow-previous swiper-button-prev" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-461da0671e3b5fc6" aria-disabled="true">
            <div class="button-content-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M10.7951 22.9393C10.2093 23.5251 10.2093 24.4749 10.7951 25.0607L20.3411 34.6066C20.9268 35.1924 21.8766 35.1924 22.4624 34.6066C23.0482 34.0208 23.0482 33.0711 22.4624 32.4853L13.9771 24L22.4624 15.5147C23.0482 14.9289 23.0482 13.9792 22.4624 13.3934C21.8766 12.8076 20.9268 12.8076 20.3411 13.3934L10.7951 22.9393ZM36.1442 22.5L11.8558 22.5L11.8558 25.5L36.1442 25.5L36.1442 22.5Z" fill="black" />
                </svg>
            </div>
        </div>

        <div class="arrows arrow-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-461da0671e3b5fc6" aria-disabled="false">
            <div class="button-content-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M37.2049 25.0607C37.7907 24.4749 37.7907 23.5251 37.2049 22.9393L27.6589 13.3934C27.0732 12.8076 26.1234 12.8076 25.5376 13.3934C24.9518 13.9792 24.9518 14.9289 25.5376 15.5147L34.0229 24L25.5376 32.4853C24.9518 33.0711 24.9518 34.0208 25.5376 34.6066C26.1234 35.1924 27.0732 35.1924 27.6589 34.6066L37.2049 25.0607ZM11.8558 25.5H36.1442V22.5H11.8558V25.5Z" fill="black" />
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Sekcja Oferty -->
<section class="offers">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 offset-lg-1">
                <div class="offers__text-box">
                    <span class="offers__header text-main--f12">Oferta</span>
                    <div class="offers__under-header font-main--montserrat f-h2">Działamy <span class="font-main--montserrat f-h2 fstyle--ita">kompleksowo<span></div>
                    <div class="offers__content text-main">Oferujemy kompletną obsługę inwestycji terenów zielonych. Projektujemy nowoczesne ogrody przydomowe oraz rezydencjonalne. Stworzymy dla Ciebie projekt, zwizualizujemy go i wcielimy w życie, a na każdym etapie posłużymy radą i wieloletnim doświadczeniem. </div>
                </div>
            </div>
        </div>
        <div class="tiles">
            <a href="#" class="tiles-box">
                <div class="tiles-box__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/pencil.svg" width="" height="" alt="slidphoto" /></div>
                <div class="tiles-box__content-box">
                    <div class="tiles-box__content-box--header font-main--montserrat text-main--f28 font-weight--fw500">Projekty</div>
                    <div class="tiles-box__content-box--heading text-main--f14">Zaprojektujemy Twój ogród w nowoczesnym stylu i z najlepszym wykorzystaniem istniejącej przestrzeni.</div>
                </div>
                <div class="tiles-box__link">Dowiedz się więcej
                    <svg class="tiles-box__link--arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.99528 -1.20755e-06L7.09959 0.895696L13.5769 7.36358L-7.5502e-07 7.36358L-6.43745e-07 8.63642L13.5675 8.63642L7.09959 15.1043L7.99529 16L16 7.99529L7.99528 -1.20755e-06Z" fill="#1B5B31" />
                    </svg>
                </div>
            </a>
            <a href="#" class="tiles-box">
                <div class="tiles-box__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/eye.svg" width="" height="" alt="slidphoto" /></div>
                <div class="tiles-box__content-box">
                    <div class="tiles-box__content-box--header font-main--montserrat text-main--f28 font-weight--fw500">Wizualizacje</div>
                    <div class="tiles-box__content-box--heading text-main--f14">Przedstawimy Ci projekty koncepcyjne w postaci wirtualnego spaceru animowanego w technologii 3D.</div>
                </div>
                <div class="tiles-box__link">Dowiedz się więcej
                    <svg class="tiles-box__link--arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.99528 -1.20755e-06L7.09959 0.895696L13.5769 7.36358L-7.5502e-07 7.36358L-6.43745e-07 8.63642L13.5675 8.63642L7.09959 15.1043L7.99529 16L16 7.99529L7.99528 -1.20755e-06Z" fill="#1B5B31" />
                    </svg>
                </div>
            </a>
            <a href="#" class="tiles-box">
                <div class="tiles-box__icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/stars.svg" width="" height="" alt="slidphoto" /></div>
                <div class="tiles-box__content-box">
                    <div class="tiles-box__content-box--header font-main--montserrat text-main--f28 font-weight--fw500">Realizacje</div>
                    <div class="tiles-box__content-box--heading text-main--f14">Zrealizujemy Twoje marzenie przy użyciu najnowszych rozwiązań i zaawansowanych technologii.</div>
                </div>
                <div class="tiles-box__link">Zobacz nasze realizacje
                    <svg class="tiles-box__link--arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.99528 -1.20755e-06L7.09959 0.895696L13.5769 7.36358L-7.5502e-07 7.36358L-6.43745e-07 8.63642L13.5675 8.63642L7.09959 15.1043L7.99529 16L16 7.99529L7.99528 -1.20755e-06Z" fill="#1B5B31" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Sekcja o firmie -->
<section class="about">
    <img class="about-photo" src="<?php echo get_template_directory_uri(); ?>/dist/img/japan.png" width="" height="" alt="slidphoto" />
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 offset-lg-6 col-lg-6">
                <div class="about-hero">
                    <div class="about-hero__heading text-main--f12">O firmie</div>
                    <div class="about-hero__header f-h2 font-main--montserrat">Tworzymy z <span class="fstyle--ita font-main">pasją</span></div>
                    <div class="about-hero__textarea text-main--f16 font-weight--fw200">Każdy projekt to nowe wyzwanie. Dlatego nasz zespół tworzą wykwalifikowani projektanci oraz architekci, których zadaniem jest rozpoznanie i realizacja potrzeb każdego Klienta. Nasza specjalizacja to przestrzenie nowoczesne, które charakteryzuje minimalizm, geometria i elegancka prostota. Tworzymy ogrody małoobsługowe, dostosowane do współczesnego trybu życia.</div>
                    <a class="about-hero__link text-main-f16" href="">Poznaj nas bliżej
                        <svg class="about-hero__link--arrow" width="16" height="16" viewBox="0 0 16 16" fill="$grey" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.99528 -1.20755e-06L7.09959 0.895696L13.5769 7.36358L-7.5502e-07 7.36358L-6.43745e-07 8.63642L13.5675 8.63642L7.09959 15.1043L7.99529 16L16 7.99529L7.99528 -1.20755e-06Z" fill="#F5F0EC" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
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
                    <img src="<?php echo esc_url($image_url); ?>" alt="Image">
                </div>
        <?php
            }
            wp_reset_postdata();
        } else {
            echo '';
        }
        ?>
    </div>
    <div class="text-center">
        <button id="loadMoreButton" class="btn btn-primary">Rozwiń</button>
    </div>
    <div class="gallery-gradient"></div>
    
</section>



<!-- Insta Section -->
<section class="insta-box">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="insta-contentbox">
                    <div class="insta-contentbox__info text-main--f40 font-main--montserrat">Zostańmy w kontakcie! Znajdziesz nas na <span class="fstyle--ita">Instagramie.<span></div>
                    <div class="insta-contentbox__linkbox">
                        <span>Śledź nasze najnowsze realizacje!</span>
                        <div><a class="insta-contentbox__linkbox--instabutton" href="#">Instagram</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();
