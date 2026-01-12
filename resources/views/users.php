<?php
$pagetitle = 'Users'; 
include_once __DIR__ . '/../components/includes/header_component.php';
?>

<!-- Mobile Navbar -->
<nav class="mobile-nav is-hidden-tablet">
  <div class="mobile-nav-header">
    <span class="has-text-weight-bold">Dashboard</span>

    <button class="burger-btn" id="burgerBtn">
      ☰
    </button>
  </div>
</nav>

<!-- Mobile Slide Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="#">Home</a>
  <a href="#">Profile</a>
  <a href="#">Messages</a>
  <a href="#">Users</a>
  <a href="#">Settings</a>
  <a href="#" class="has-text-danger">Logout</a>
</div>

<!-- Dark overlay -->
<div class="menu-overlay" id="menuOverlay"></div>




<div class="layout">
  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <?php include_once __DIR__ . '/../components/dashboard/nav/sidebar.php'; ?>
  </aside>

  <!-- Main -->
  <main class="main-content">
    <?php include_once '../components/main/main.php'; ?>
  </main>
</div>

<?php include_once __DIR__ . '/../components/includes/footer_component.php'; ?>
