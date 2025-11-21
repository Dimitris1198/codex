<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container branding">
        <div class="mark">R</div>
        <div>
            <p class="title">Repress</p>
            <small><?php bloginfo('description'); ?></small>
        </div>
        <?php if (has_nav_menu('primary')) : ?>
            <nav class="nav" aria-label="Primary">
                <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false, 'menu_class' => 'menu']); ?>
            </nav>
        <?php endif; ?>
    </div>
</header>
<main class="container">
