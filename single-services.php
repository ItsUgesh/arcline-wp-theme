<?php get_header(); ?>

<div class="service-single-wrapper">
    <div class="container">

        <!-- Back Link -->
        <a href="<?php echo esc_url( get_post_type_archive_link( 'services' ) ); ?>" 
           class="back-link">
            ← Back to Services
        </a>

        <div class="single-inner">
            <div class="single-col">

                <?php while ( have_posts() ) : the_post(); ?>

                <!-- Service Header -->
                <div class="service-single-header">
                    <div class="service-single-icon">
                        <?php
                        $icon = get_field( 'service_icon' );
                        echo $icon ? wp_kses_post( $icon ) : '◆';
                        ?>
                    </div>
                    <h1 class="service-single-title">
                        <?php the_title(); ?>
                    </h1>
                    <?php
                    $description = get_field( 'service_description' );
                    if ( $description ) : ?>
                        <p class="service-single-desc">
                            <?php echo esc_html( $description ); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if ( get_the_content() ) : ?>
                    <div class="service-single-content entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>

                <?php endwhile; ?>

            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>