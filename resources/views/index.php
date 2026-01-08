<?php
$pagetitle = 'Dashboard'; 
include_once __DIR__ . '/../components/includes/header_component.php';
?>

<style>
  /* Make the layout full height */
  html, body {
    height: 100%;
  }

  .dashboard-wrapper {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  .dashboard-content {
    display: flex;
    flex: 1; /* take remaining height */
    overflow: hidden;
  }

  /* Sidebar */
  .sidebar {
    width: 220px;
    background-color: #363636;
    color: white;
    display: flex;
    flex-direction: column;
  }

  .sidebar a {
    color: white;
    padding: 0.75rem 1rem;
    text-decoration: none;
  }

  .sidebar a:hover {
    background-color: #4a4a4a;
  }



  /* Mobile responsiveness */
  @media (max-width: 768px) {
    .dashboard-content {
      flex-direction: column;
    }

    .sidebar {
      width: 100%;
      flex-direction: row;
      overflow-x: auto;
    }

    .sidebar a {
      flex: 1;
      text-align: center;
    }
  }
</style>

<div class="dashboard-wrapper">
    <!-- Content area: sidebar + main content -->
    <div class="dashboard-content">
        <!-- Sidebar -->
        <aside class="sidebar">
            <?php include_once __DIR__ . '/../components/dashboard/nav/sidebar.php'; ?>
        </aside>

        <!-- Main content -->
        <?php include_once '../components/main/main.php'; ?>

    <!-- Footer -->
    </div>
</div>
<?php include_once __DIR__ . '/../components/includes/footer_component.php'; ?>