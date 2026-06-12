</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">

        <div class="footer-top">

            <!-- Column 1: Brand -->
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                    <span class="logo-text">
                        Arcline<span class="logo-dot">.</span>
                        <small>Studio</small>
                    </span>
                </a>
                <p class="footer-tagline">
                    Crafting purposeful digital experiences for brands that want to last.
                </p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-nav-group">
                <p class="footer-nav-heading">Quick Links</p>
                <nav class="footer-nav" aria-label="Footer Navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>
            </div>

            <!-- Column 3: Services (Dynamic) -->
            <div class="footer-nav-group">
                <p class="footer-nav-heading">Our Services</p>
                <ul class="footer-menu">
                    <?php
                    $footer_services = new WP_Query(array(
                        'post_type'      => 'services',
                        'posts_per_page' => 5,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                    ));

                    if ($footer_services->have_posts()) :
                        while ($footer_services->have_posts()) : $footer_services->the_post();
                    ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>

            <!-- Column 4: Footer Widget -->
            <?php if (is_active_sidebar('footer-widgets')) : ?>
                <?php dynamic_sidebar('footer-widgets'); ?>
            <?php endif; ?>
            
        </div>

        <!-- Copyright Bar -->
        <div class="footer-bottom">
            <p class="copyright">
                &copy; <?php echo date('Y'); ?>
                <span class="copyright-name"><?php bloginfo('name'); ?></span>.
                All rights reserved.
            </p>
            <p class="made-by">
                Crafted with care by
                <a href="https://github.com/ItsUgesh" target="_blank" rel="noopener">
                    Ugesh Simkhada
                </a>
            </p>
        </div>

    </div><!-- /.container -->
</footer>

<?php wp_footer(); ?>

</body>

</html>