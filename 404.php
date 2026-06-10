<?php get_header(); ?>

<div class="error-404-wrapper">
    <div class="container">

        <div class="error-404-inner">

            <div class="error-404-number">404</div>

            <h1 class="error-404-title">Page Not Found</h1>

            <p class="error-404-desc">
                The page you're looking for has moved, been deleted, 
                or never existed. Let's get you back on track.
            </p>

            <div class="error-404-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                   class="btn btn-primary">
                    Back to Homepage
                </a>
            </div>

            <!-- Search Form -->
            <div class="error-404-search">
                <p class="search-label">Or search for something:</p>
                <?php get_search_form(); ?>
            </div>

        </div>

    </div>
</div>

<?php get_footer(); ?>