<?php get_header(); ?>

<div class="archive-wrapper">
    <div class="container">

        <div class="archive-header">
            <span class="section-tag">Latest</span>
            <h1 class="archive-title">Blog</h1>
            <p class="archive-desc">Thoughts, insights and updates from Arcline Studio.</p>
        </div>

        <?php if ( have_posts() ) : ?>

            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>

                    <article class="post-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-card-image">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-card-body">
                            <div class="post-meta">
                                <span class="post-date">
                                    <?php echo get_the_date( 'F j, Y' ); ?>
                                </span>
                            </div>
                            <h2 class="post-card-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="post-card-excerpt">
                                <?php the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                                Read More
                            </a>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination( array(
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                )); ?>
            </div>

        <?php else : ?>
            <p class="no-posts">No posts published yet.</p>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>