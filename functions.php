<?php

/**
 * Mytheme
 *
 * @package WordPress
 * @subpackage Mytheme
 * @since Mytheme 1.0
 */

function showr($vvv)
{
    print("<pre>" . print_r($vvv, true) . "</pre>");
}

// change 404 page title

function theme_slug_filter_wp_title($title)
{
    if (is_404()) {
        $title = '404 | ';
    }
    // You can do other filtering here, or
    // just return $title
    return $title;
}
// Hook into wp_title filter hook
add_filter('wp_title', 'theme_slug_filter_wp_title');

//set up theme
if (!function_exists('basic_theme_setup')) {
    function basic_theme_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('image', 'video', 'gallary', 'quote', 'link'));
        add_theme_support('title-tag');
        $default_color = array('default-color' => '#cccccc');
        add_theme_support('custom-background', $default_color);
        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'basic'),
                'secondary' => __('Secondary Menu', 'basic'),
                'footer' => __('Footer Menu', 'basic')
            )
        );
        register_nav_menu('primary-menu', __('Primary Menu', 'basic'));
    }
    add_action('init', 'basic_theme_setup');
}
