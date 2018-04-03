<?php
/*  THEME SUPPORT */
if (!function_exists('alergaTheme_setup')) :
    function alergaTheme_setup()
{
    add_theme_support('post-thumbnails');

    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'quote',
        'image',
        'video'
    ));
    // menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu')
    ));
    // Image size
    add_image_size( 'main-news', 1170, 585, true );
    add_image_size( 'grid-news', 585, 293, true);
}
endif;
add_action('after_setup_theme', 'alergaTheme_setup');
