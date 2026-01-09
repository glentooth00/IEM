<?php
$pagetitle = 'Users'; 
include_once __DIR__ . '/../components/includes/header_component.php';
?>

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