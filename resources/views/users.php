<?php
$pagetitle = 'Users'; 
include_once __DIR__ . '/../components/includes/header_component.php';
?>

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

            