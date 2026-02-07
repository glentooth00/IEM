
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.navbar-burger');
    const menu = document.querySelector('#navbarMenu');

    // Toggle menu
    burger.addEventListener('click', () => {
        menu.classList.toggle('is-active');
    });

    // Toggle submenus on mobile
    const submenuToggles = document.querySelectorAll('.submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', e => {
            if (window.innerWidth <= 1023) {
                e.preventDefault();
                toggle.parentElement.classList.toggle('is-open');
            }
        });
    });
});

