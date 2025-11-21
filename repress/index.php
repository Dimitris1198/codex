<?php get_header(); ?>
<div class="grid">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', get_post_type());
    endwhile;
    the_posts_pagination();
else :
    echo '<p>No articles available.</p>';
endif;
?>
</div>
<?php get_footer(); ?>
