</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">

        <div class="footer-top">

            <!-- Footer Logo -->
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                    <span class="logo-text">
                        Arcline<span class="logo-dot">.</span>
                        <small>Studio</small>
                    </span>
                </a>
                <p class="footer-tagline">
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>

            <!-- Footer Navigation -->
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

                    <!-- Copyright Bar -->
        <div class="footer-bottom">
            <p class="copyright">
                &copy; <?php echo date( 'Y' ); ?> 
                <?php bloginfo( 'name' ); ?>. 
                All rights reserved.
            </p>
        </div>

        </div>

    </div>
</footer>
<?php wp_footer(); ?>  
</body>
</html>