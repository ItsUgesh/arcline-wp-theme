<?php get_header(); ?>

<!-- ================================
     HERO SECTION
================================ -->
<section class="hero">
    <div class="container">

        <div class="hero-content">
            <span class="hero-tag">Creative Agency</span>
            <h1 class="hero-title">
                We Build Brands <br>
                <em>That Last.</em>
            </h1>
            <p class="hero-desc">
                Arcline Studio crafts purposeful digital experiences — 
                from strategy to design to development.
            </p>
            <div class="hero-actions">
                <a href="#services" class="btn btn-primary">Our Services</a>
                <a href="#about" class="btn btn-outline">About Us</a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-shape"></div>
        </div>

    </div>
</section>

<!-- ================================
     SERVICES SECTION
================================ -->
<section class="services-section" id="services">
    <div class="container">

        <div class="section-header">
            <span class="section-tag">What We Do</span>
            <h2 class="section-title">Our Services</h2>
            <p class="section-desc">Everything your brand needs to stand out.</p>
        </div>

        <div class="services-grid">
            <?php
            $services_query = new WP_Query( array(
                'post_type'      => 'services',
                'posts_per_page' => 6,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ));

            if ( $services_query->have_posts() ) :
                while ( $services_query->have_posts() ) : $services_query->the_post();
            ?>

                <div class="service-card">
                    <div class="service-icon">
                        <?php 
                        $icon = get_field( 'service_icon' );
                        echo $icon ? wp_kses_post( $icon ) : '◆';
                        ?>
                    </div>
                    <h3 class="service-title"><?php the_title(); ?></h3>
                    <p class="service-desc">
                        <?php 
                        $desc = get_field( 'service_description' );
                        echo $desc ? esc_html( $desc ) : get_the_excerpt();
                        ?>
                    </p>
                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p class="no-services">No services added yet.</p>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- ================================
     ABOUT SECTION
================================ -->
<section class="about-section" id="about">
    <div class="container">

        <div class="about-grid">

            <div class="about-visual">
                <div class="about-shape-outer">
                    <div class="about-shape-inner"></div>
                </div>
                <div class="about-stat">
                    <span class="stat-number">8+</span>
                    <span class="stat-label">Years of Experience</span>
                </div>
            </div>

            <div class="about-content">
                <span class="section-tag">Who We Are</span>
                <h2 class="section-title">A Studio Built on Craft & Intention</h2>
                <p class="about-text">
                    We are a small but mighty creative agency focused on brand identity, 
                    web design, and digital strategy. Every project we take on is treated 
                    as a long-term partnership — not a transaction.
                </p>
                <p class="about-text">
                    Based anywhere, working everywhere. We believe great work 
                    comes from great conversations.
                </p>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" 
                   class="btn btn-primary">
                    Learn More About Us
                </a>
            </div>

        </div>

    </div>
</section>

<!-- ================================
     CTA SECTION
================================ -->
<section class="cta-section">
    <div class="container">

        <div class="cta-inner">
            <span class="section-tag">Let's Work Together</span>
            <h2 class="cta-title">Ready to Build Something Great?</h2>
            <p class="cta-desc">
                Tell us about your project and we'll get back to you within 24 hours.
            </p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" 
               class="btn btn-primary btn-large">
                Start a Project
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>