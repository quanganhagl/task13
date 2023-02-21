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

//phan trang
function custom_pagination($pages = '', $range = 2, $topics)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged))
        $paged = 1;
    if ($pages == '') {
        $pages = $topics->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        if ($paged > 1)
            echo "<a class='prev' href='" . get_pagenum_link($paged - 1) . "'></a>";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='current'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a>";
            }
        }

        if ($paged < $pages)
            echo "<a class='next' href='" . get_pagenum_link($paged + 1) . "'></a>";
    }
}

// //only show child title
// function remove_project_title($title)
// {
//     if (is_page()) {
//         $title = get_the_title();
//     }
//     return $title;
// }
// add_filter("wp_title", "remove_project_title");