<?php get_header(); ?>

<div class="services-archive-wrapper">
    <div class="container">

        <!-- Archive Header -->
        <div class="section-header">
            <span class="section-tag">What We Do</span>
            <h1 class="section-title">Our Services</h1>
            <p class="section-desc">
                Everything your brand needs to stand out and grow online.
            </p>
        </div>

        <!-- Services Grid -->
        <?php if ( have_posts() ) : ?>

            <div class="services-grid">
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="service-card">
                        <div class="service-icon">
                            <?php
                            $icon = get_field( 'service_icon' );
                            echo $icon ? wp_kses_post( $icon ) : '◆';
                            ?>
                        </div>
                        <h2 class="service-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <p class="service-desc">
                            <?php
                            $desc = get_field( 'service_description' );
                            echo $desc ? esc_html( $desc ) : get_the_excerpt();
                            ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                            Learn More
                        </a>
                    </div>

                <?php endwhile; ?>
            </div>

        <?php else : ?>
            <p class="no-services">No services found.</p>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>