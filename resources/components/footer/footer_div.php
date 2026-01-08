

    <!-- Footer -->
    <footer class="footer has-background-primary has-text-white">
        <div class="content has-text-centered">
            <p>
                &copy; 2026 MySite. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Bulma Navbar Burger Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.querySelector('.navbar-burger');
            const menu = document.getElementById('navbarMenu');

            burger.addEventListener('click', () => {
                burger.classList.toggle('is-active');
                menu.classList.toggle('is-active');
            });
        });
    </script>