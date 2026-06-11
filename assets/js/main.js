// mobile menu toggle
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('nav-toggle');
    const nav = document.querySelector('.site-nav');

    toggle.addEventListener('click', function () {
        toggle.classList.toggle('is-active');
        nav.classList.toggle('nav-open');
    });
});