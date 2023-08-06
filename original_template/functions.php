<?php
function add_stylesheet()
{
    wp_register_style('reset', get_template_directory_uri() . '/library/css/reset.css', array(), '1.0', false);
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/library/css/slick.css', array('reset'), '1.0', 'all');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/library/css/slick-theme.css', array('reset', 'slick-css'), '1.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/library/css/style.css', array('reset', 'slick-css', 'slick-theme-css'), '1.0', false);
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/library/css/about.css' );
    wp_enqueue_style( 'news-style', get_template_directory_uri() . '/library/css/news.css' );
    wp_enqueue_style( 'service-style', get_template_directory_uri() . '/library/css/service.css' );
    wp_enqueue_style( 'contact-style', get_template_directory_uri() . '/library/css/contact.css' );
}

// WordPress本体のjquery.jsを読み込まない


function add_script()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/library/js/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/library/js/script.js', array('jquery', 'slick'), null, true);
}


add_action('wp_enqueue_scripts', 'add_stylesheet');
add_action('wp_enqueue_scripts', 'add_script');


function remove_script_type($tag)
{
    return str_replace("type='text/javascript'", "async='async'", $tag);
}
add_filter('script_loader_tag', 'remove_script_type');

function theme_setup(){
    add_theme_support('title-tag');
    // メニュー
    register_nav_menus(
        array(
            'header_navi' => 'メインメニュー'
        )
    );
}
add_action('after_setup_theme', 'theme_setup');




