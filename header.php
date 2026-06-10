<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">

        <!-- LOGO -->
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
                <svg width="42" height="42" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M5 32 Q20 8 35 32" stroke="#722F37" stroke-width="2.5" fill="none" stroke-linecap="round"/>
    <line x1="5" y1="32" x2="35" y2="32" stroke="#722F37" stroke-width="2.5" stroke-linecap="round"/>
</svg>
                <span class="logo-text">
                    Arcline<span class="logo-dot">.</span>
                    <small>Studio</small>
                </span>
            </a>
        </div>

        <!-- NAVIGATION -->
        <nav class="site-nav" role="navigation" aria-label="Primary Navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <!-- HAMBURGER (mobile) -->
        <button class="nav-toggle" id="nav-toggle" aria-label="Toggle Navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main id="main-content" class="site-main">