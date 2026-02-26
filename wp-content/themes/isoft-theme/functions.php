<?php

// Rejestracja menu
function isoft_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'isoft-theme'),
    ));
}
add_action('init', 'isoft_register_menus');

// Wsparcie dla Featured Images
add_theme_support('post-thumbnails');

// Wsparcie dla tytułów
add_theme_support('title-tag');

// Rejestracja widgetów
function isoft_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'isoft-theme'),
        'id'            => 'footer-widget',
        'description'   => __('Widget area in footer', 'isoft-theme'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'isoft_widgets_init');

// Ładowanie stylów i skryptów
function isoft_enqueue_scripts() {
    wp_enqueue_style('isoft-style', get_stylesheet_uri());
    wp_enqueue_script('isoft-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'isoft_enqueue_scripts');

// Custom logo support
add_theme_support('custom-logo', array(
    'height'      => 50,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
));

// Excerpt length
function isoft_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'isoft_excerpt_length');

// Custom Page Template support
function isoft_add_page_templates($templates) {
    $templates['template-homepage.php'] = 'Homepage Template';
    return $templates;
}
add_filter('theme_page_templates', 'isoft_add_page_templates');

?>
