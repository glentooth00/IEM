document.addEventListener('DOMContentLoaded', function () {

    const burger = document.querySelector('.navbar-burger');
    const menu = document.getElementById('navbarMenu');

    // Create overlay
    const overlay = document.createElement('div');
    overlay.classList.add('navbar-overlay');
    document.body.appendChild(overlay);

    /* =========================
       TOGGLE DRAWER
    ========================= */

    burger.addEventListener('click', function () {
        menu.classList.toggle('is-active');
        overlay.classList.toggle('active');

        // Lock body scroll
        document.body.classList.toggle('no-scroll');
    });

    overlay.addEventListener('click', function () {
        closeMenu();
    });

    function closeMenu() {
        menu.classList.remove('is-active');
        overlay.classList.remove('active');
        document.body.classList.remove('no-scroll');
    }

    /* =========================
       MOBILE SUBMENU ACCORDION
    ========================= */

    const submenuToggles = document.querySelectorAll('.submenu-toggle');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function () {

            const parent = this.closest('.has-submenu');

            // Close other open submenus (optional behavior)
            document.querySelectorAll('.has-submenu').forEach(item => {
                if (item !== parent) {
                    item.classList.remove('is-open');
                }
            });

            parent.classList.toggle('is-open');
        });
    });

    /* =========================
       CLOSE MENU ON LINK CLICK
    ========================= */

    const links = document.querySelectorAll('.navbar-menu a:not(.submenu-toggle)');

    links.forEach(link => {
        link.addEventListener('click', function () {
            closeMenu();
        });
    });

});
