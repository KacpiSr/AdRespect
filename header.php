<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


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
                            <div class="offer-label">Oferta
                            <ul class="navbar-dropdown">
                                <li class="dropdown-item">Wpis 1 Wpis 1 Wpis 1 Wpis 1</li>
                                <li class="dropdown-item">Wpis 2</li>
                                <li class="dropdown-item">Wpis 3</li>
                                <li class="dropdown-item">Wpis 4</li>
                                <li class="dropdown-item">Wpis 5</li>
                            </ul>
                            <div class="navbar-arrow"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/arrow.svg" width="" height="" alt="arrow" /></div>
                        </div>
                    </div>
                    <a href="#" class="navbar-item">O firmie</a>
                    <a href="#" class="navbar-item">Realizacje</a>
                    <a href="#" class="navbar-item">Kontakt</a>
                    <div class="navbar-search">
                        <input type="text" class="search-bar" placeholder="Szukaj...">
                        <div class="navbar-item search-icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/search-icon.svg" width="" height="" alt="arrow" /></div>
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