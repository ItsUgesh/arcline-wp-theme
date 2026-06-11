</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">

        <div class="footer-top">

            <!-- Column 1: Brand -->
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
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
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>
            </div>

            <!-- Column 3: Services -->
            <div class="footer-nav-group">
                <p class="footer-nav-heading">Our Services</p>
                <ul class="footer-menu">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Brand Identity</a></li>
                    <li><a href="#">Digital Strategy</a></li>
                </ul>
            </div>

        </div><!-- /.footer-top -->

        <!-- Copyright Bar -->
        <div class="footer-bottom">
            <p class="copyright">
                &copy; <?php echo date( 'Y' ); ?>
                <?php bloginfo( 'name' ); ?>.
                All rights reserved.
            </p>
            <p class="made-by">
                Crafted with care by
                <a href="https://github.com/ItsUgesh" target="_blank" rel="noopener">
                    Ugesh
                </a>
            </p>
        </div>

    </div><!-- /.container -->
</footer>

<?php wp_footer(); ?>

</body>
</html>