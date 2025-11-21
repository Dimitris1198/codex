<?php get_header(); ?>
<section class="hero">
    <div>
        <p class="badge">Breaking coverage</p>
        <h1>Repress is your home for trusted news and sport storytelling.</h1>
        <p>Curated reports, in-depth features, and match analysis built on WordPress. Publish confidently with custom blocks, topic taxonomies, and dedicated content types for your newsroom.</p>
        <a class="cta" href="<?php echo get_post_type_archive_link('news'); ?>">Latest headlines</a>
    </div>
    <div class="card">
        <div class="badge">Live now</div>
        <h2>Sport desk</h2>
        <p>Track fixtures, form, and fast-breaking sport articles with a dedicated archive.</p>
        <a href="<?php echo get_post_type_archive_link('sport'); ?>">View sport coverage →</a>
    </div>
</section>

<section>
    <div class="grid">
        <?php
        $front_query = new WP_Query([
            'post_type'      => ['news', 'sport', 'post'],
            'posts_per_page' => 6,
        ]);
        if ($front_query->have_posts()) :
            while ($front_query->have_posts()) :
                $front_query->the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No stories yet. Start publishing from your dashboard.</p>';
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>
