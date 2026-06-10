<?php get_header(); ?>

<div class="page-wrapper">
    <div class="container">

        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>

            <?php if ( has_excerpt() ) : ?>
                <p class="page-subtitle"><?php the_excerpt(); ?></p>
            <?php endif; ?>
        </div>

                <!-- Page Content -->
        <div class="page-content">
            <?php
            while ( have_posts() ) : the_post();
            ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>