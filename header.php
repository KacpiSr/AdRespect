<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <script>
        let siteUrl = '<?php echo get_site_url();  ?>';
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- PRELOADER -->
    <!-- <?php //get_template_part('template-parts/global/preloader'); 
            ?> -->


    <header>
        <nav class="page-container">
            <div class="container">
                <div class="navbar">
                    <a href="#" class="navbar-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/giarddesign.png" width="" height="" alt="logo" />
                    </a>
                    <div class="navbar-items">
                        <div class="navbar-item offer-container">
                            <div class="offer-label font-weight--fw500">Oferta
                                <ul class="navbar-dropdown">
                                    <li class="dropdown-item font-weight--fw500">Menu strony wp 1</li>
                                    <li class="dropdown-item font-weight--fw500">Menu strony wp 2</li>
                                    <li class="dropdown-item font-weight--fw500">Menu strony wp 3</li>
                                    <li class="dropdown-item font-weight--fw500">Menu strony wp 4</li>
                                    <li class="dropdown-item font-weight--fw500">Menu strony wp 5</li>
                                </ul>
                                <div class="navbar-arrow"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/arrow.svg" width="" height="" alt="arrow" /></div>
                            </div>
                        </div>
                        <a href="#ofirmie-scroll" class="navbar-item font-weight--fw500">O firmie</a>
                        <a href="#gallery-scroll" class="navbar-item font-weight--fw500">Realizacje</a>
                        <a href="#kontakt-scroll" class="navbar-item font-weight--fw500">Kontakt</a>
                        <div class="navbar-search">
                            <input type="text" class="search-bar" placeholder="Szukaj...">
                            <div class="navbar-item"><img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/dist/img/search-icon.svg" width="" height="" alt="arrow" /></div>
                        </div>
                    </div>
                    <div id='menu' class="navbar-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>