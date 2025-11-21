<?php get_header(); ?>
<header class="card">
    <p class="badge"><?php post_type_archive_title(); ?></p>
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description('<p>', '</p>'); ?>
</header>
<div class="grid">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', get_post_type());
    endwhile;
    the_posts_pagination();
else :
    echo '<p>No stories published yet.</p>';
endif;
?>
</div>
<?php get_footer(); ?>
