
    <!-- Footer -->
    <footer class="footer">
        &copy; 2026 Web App. All rights reserved.
    </footer>

</body>
</html>

<!--JS SCRIPT --->
<script src="public/assets/js/ajax.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('burgerBtn');
    const menu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('menuOverlay');

    function toggleMenu() {
      menu.classList.toggle('is-active');
      overlay.classList.toggle('is-active');
    }

    burger.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
  });
</script>


