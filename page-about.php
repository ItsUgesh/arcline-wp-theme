<?php get_header(); ?>

<div class="about-wrapper">

    <!-- Hero Section -->
    <div class="about-hero">
        <div class="container">
            <div class="about-hero-inner">
                <div class="about-hero-text">
                    <span class="section-tag">About Us</span>
                    <h1 class="about-title">
                        A Studio Built on<br>
                        <em>Craft & Intention</em>
                    </h1>
                    <p class="about-lead">
                        We are a creative agency specializing in web design, brand identity 
                        and digital strategy. Every project we take on is treated as a 
                        long-term partnership — not a transaction.
                    </p>
                </div>
                <div class="about-hero-stats">
                    <div class="stat-card">
                        <span class="stat-number">3+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">20+</span>
                        <span class="stat-label">Projects Delivered</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="about-mission">
        <div class="container">
            <div class="mission-inner">
                <div class="mission-text">
                    <span class="section-tag">Our Mission</span>
                    <h2 class="section-title">Why We Do What We Do</h2>
                    <p>
                        We believe the web should be fast, accessible and beautiful. 
                        Too many businesses are held back by outdated, overcomplicated 
                        digital experiences. We exist to change that.
                    </p>
                    <p>
                        Every decision we make — from typography to page speed — is 
                        intentional. We don't just build websites. We build tools that 
                        grow businesses.
                    </p>
                </div>
                <div class="mission-values">
                    <div class="value-item">
                        <span class="value-icon">◆</span>
                        <div>
                            <h3 class="value-title">Quality First</h3>
                            <p class="value-desc">We never cut corners. Every line of code, every pixel matters.</p>
                        </div>
                    </div>
                    <div class="value-item">
                        <span class="value-icon">◈</span>
                        <div>
                            <h3 class="value-title">Transparency</h3>
                            <p class="value-desc">Clear communication at every stage of the project.</p>
                        </div>
                    </div>
                    <div class="value-item">
                        <span class="value-icon">◉</span>
                        <div>
                            <h3 class="value-title">Long-term Thinking</h3>
                            <p class="value-desc">We build for the future, not just for today.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="about-team">
        <div class="container">
            <div class="section-header" style="text-align:center; margin-bottom: var(--space-lg);">
                <span class="section-tag">The Team</span>
                <h2 class="section-title">The Person Behind It All</h2>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">US</div>
                    <h3 class="team-name">Ugesh Simkhada</h3>
                    <p class="team-role">Founder & Lead Developer</p>
                    <p class="team-bio">
                        Based in Berlin, Germany. Passionate about clean code, 
                        elegant design and building digital experiences that actually 
                        work for people.
                    </p>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" 
                       class="btn btn-outline">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="about-cta">
        <div class="container">
            <div class="about-cta-inner">
                <h2>Ready to Start a Project?</h2>
                <p>Let's build something great together.</p>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" 
                   class="btn btn-primary">
                    Start a Project
                </a>
            </div>
        </div>
    </div>

</div><!-- /.about-wrapper -->

<?php get_footer(); ?>