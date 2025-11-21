<?php get_header(); ?>
<article <?php post_class('card'); ?>>
    <header>
        <div class="meta">
            <span class="badge"><?php echo esc_html(get_post_type()); ?></span>
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
        </div>
        <h1><?php the_title(); ?></h1>
        <div class="meta">By <?php the_author(); ?> · <?php echo get_the_term_list(get_the_ID(), 'topic', '', ', '); ?></div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <footer class="meta">
        <?php the_tags('<div class="badge">', '</div><div class="badge">', '</div>'); ?>
    </footer>
</article>
<?php comments_template(); ?>
<?php get_footer(); ?>
