<?php get_header(); ?>

<div class="single-wrapper">
    <div class="container">
        <div class="single-inner">
            <div class="single-col">

                <?php while ( have_posts() ) : the_post(); ?>

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

                <article class="post-content entry-content">
                    <?php the_content(); ?>
                </article>

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
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>