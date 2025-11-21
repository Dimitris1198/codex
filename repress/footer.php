</main>
<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Repress — A newsroom and sport desk for modern storytellers.</p>
        <?php if (has_nav_menu('footer')) : ?>
            <nav aria-label="Footer" class="nav" style="justify-content:center;">
                <?php wp_nav_menu(['theme_location' => 'footer', 'container' => false, 'menu_class' => 'menu']); ?>
            </nav>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
