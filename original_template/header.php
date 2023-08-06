<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="">
        <div class="head">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img class="rogo" src="<?php echo esc_url(get_theme_file_uri('/library/images/logo.png')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
            </div>
            <nav class="header-nav">
                <!-- <ul class="menu-list flex-rc">
            <li class="menu"><a href="./index.html">HOME</a></li>
            <li class="menu"><a href="./about.html">ABOUT US</a></li>
            <li class="menu"><a href="./about.html">GALLERYS</a></li>
            <li class="menu"><a href="./service.html">SERVICE</a></li>
            <li class="menu"><a href="./contact.html">CONTACT</a></li>
            </ul>  -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header_navi',
                        'container' => '',
                        'menu_class' => 'menu-list flex-rc'
                    )
                );
                ?>
            </nav>

            <div class="btn_trigger">
                <span class="bar bar_top"></span>
                <span class="bar bar_mid"></span>
                <span class="bar bar_bottom"></span>
            </div>
        </div>
        <!-- <?php var_dump(get_template_directory_uri()); ?> -->
    </header>