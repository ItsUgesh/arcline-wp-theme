// Mobile menu toggle
document.addEventListener( 'DOMContentLoaded', function () {

    const toggle = document.getElementById( 'nav-toggle' );
    const nav    = document.querySelector( '.site-nav' );

    // Guard — if elements don't exist, stop
    if ( ! toggle || ! nav ) return;

    toggle.addEventListener( 'click', function () {
        toggle.classList.toggle( 'is-active' );
        nav.classList.toggle( 'nav-open' );
        // Accessibility
        const isOpen = nav.classList.contains( 'nav-open' );
        toggle.setAttribute( 'aria-expanded', isOpen );
    });

    // Close nav when clicking outside
    document.addEventListener( 'click', function ( e ) {
        if ( ! toggle.contains( e.target ) && ! nav.contains( e.target ) ) {
            toggle.classList.remove( 'is-active' );
            nav.classList.remove( 'nav-open' );
            toggle.setAttribute( 'aria-expanded', false );
        }
    });

});