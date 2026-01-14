
    <!-- Footer -->
    <footer class="footer">
        &copy; 2026 Web App. All rights reserved.
    </footer>

</body>
</html>

<!--JS SCRIPT --->
<script src="public/assets/js/ajax.js"></script>
<script src="../../../public/assets/js/modal.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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




     const modal = document.getElementById('modalOverlay');
    const openBtn = document.getElementById('openModal');
    const closeBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelModal');

    function closeModal() {
        modal.classList.add('closing');

        setTimeout(() => {
            modal.classList.remove('active', 'closing');
        }, 250);
    }

    /* OPEN */
    openBtn.addEventListener('click', () => {
        modal.classList.remove('closing');
        modal.classList.add('active');
    });

    /* CLOSE BUTTON (X) */
    closeBtn.addEventListener('click', closeModal);

    /* CANCEL BUTTON */
    cancelBtn.addEventListener('click', closeModal);

    /* CLICK OUTSIDE MODAL */
    modal.addEventListener('click', (e) => {
        if (!e.target.closest('.modalForm')) {
            closeModal();
        }
    });
</script>





