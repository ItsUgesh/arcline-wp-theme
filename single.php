<?php get_header(); ?>

<div class="single-wrapper">
    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>

        <!-- Post Header -->
        <header class="post-header">

            <div class="post-meta">
                <span class="post-date">
                    <?php echo get_the_date( 'F j, Y' ); ?>
                </span>
                <span class="post-meta-sep">—</span>
                <span class="post-author">
                    By <?php the_author(); ?>
                </span>
            </div>

            <h1 class="post-title"><?php the_title(); ?></h1>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

        </header>

        <!-- Post Content -->
        <article class="post-content entry-content">
            <?php the_content(); ?>
        </article>

        <!-- Post Navigation -->
        <nav class="post-navigation">
            <div class="nav-prev">
                <?php previous_post_link( '%link', '← %title' ); ?>
            </div>
            <div class="nav-next">
                <?php next_post_link( '%link', '%title →' ); ?>
            </div>
        </nav>

        <?php endwhile; ?>

    </div>
</div>

<?php get_footer(); ?>