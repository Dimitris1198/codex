<?php
/**
 * Repress theme functions
 */

if (!defined('ABSPATH')) {
    exit;
}

function repress_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_editor_style('style.css');

    register_nav_menus([
        'primary' => __('Primary Menu', 'repress'),
        'footer'  => __('Footer Menu', 'repress'),
    ]);
}
add_action('after_setup_theme', 'repress_setup');

function repress_assets() {
    wp_enqueue_style('repress-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'repress_assets');

function repress_widgets() {
    register_sidebar([
        'name'          => __('Sidebar', 'repress'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets for headlines, newsletters, or highlights.', 'repress'),
        'before_widget' => '<section class="widget widget-area">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'repress_widgets');

function repress_register_content_types() {
    $labels = [
        'name'               => _x('News', 'post type general name', 'repress'),
        'singular_name'      => _x('News Article', 'post type singular name', 'repress'),
        'menu_name'          => _x('News', 'admin menu', 'repress'),
        'name_admin_bar'     => _x('News Article', 'add new on admin bar', 'repress'),
        'add_new_item'       => __('Add New Article', 'repress'),
        'new_item'           => __('New Article', 'repress'),
        'edit_item'          => __('Edit Article', 'repress'),
        'view_item'          => __('View Article', 'repress'),
        'all_items'          => __('All News', 'repress'),
    ];

    register_post_type('news', [
        'labels'       => $labels,
        'public'       => true,
        'supports'     => ['title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments'],
        'menu_icon'    => 'dashicons-megaphone',
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'news'],
        'show_in_rest' => true,
    ]);

    $sport_labels = [
        'name'          => _x('Sport', 'post type general name', 'repress'),
        'singular_name' => _x('Sport Article', 'post type singular name', 'repress'),
        'menu_name'     => _x('Sport', 'admin menu', 'repress'),
    ];

    register_post_type('sport', [
        'labels'       => $sport_labels,
        'public'       => true,
        'supports'     => ['title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments'],
        'menu_icon'    => 'dashicons-awards',
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'sport'],
        'show_in_rest' => true,
    ]);

    register_taxonomy('topic', ['post', 'news', 'sport'], [
        'label'        => __('Topics', 'repress'),
        'public'       => true,
        'hierarchical' => true,
        'rewrite'      => ['slug' => 'topic'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'repress_register_content_types');

function repress_register_blocks() {
    register_block_style('core/quote', [
        'name'  => 'repress-featured',
        'label' => __('Repress Featured Quote', 'repress'),
        'inline_style' => '.wp-block-quote.is-style-repress-featured { border-left: 4px solid var(--brand-primary); padding-left: 1rem; color: var(--text); }',
    ]);
}
add_action('init', 'repress_register_blocks');
