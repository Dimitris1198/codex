<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container header-inner">
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-drawer" data-menu-toggle>
            <span class="sr-only"><?php _e('Toggle menu', 'repress'); ?></span>
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-bar"></span>
        </button>
        <div class="branding">
            <div class="mark">R</div>
            <div>
                <p class="title">Repress</p>
                <small><?php bloginfo('description'); ?></small>
            </div>
        </div>
        <?php if (has_nav_menu('primary')) : ?>
            <nav class="nav desktop-nav" aria-label="Primary">
                <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'menu']); ?>
            </nav>
        <?php endif; ?>
    </div>
</header>

<div class="drawer-backdrop" data-menu-backdrop></div>
<aside class="drawer" id="mobile-drawer" data-menu-drawer aria-hidden="true">
    <div class="drawer-header">
        <div class="mark">R</div>
        <div>
            <p class="title">Repress</p>
            <small><?php bloginfo('description'); ?></small>
        </div>
    </div>
    <?php if (has_nav_menu('primary')) : ?>
        <nav class="drawer-nav" aria-label="Mobile Primary">
            <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'drawer-menu']); ?>
        </nav>
    <?php endif; ?>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div class="drawer-widgets">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    <?php endif; ?>
</aside>

<main class="container">
