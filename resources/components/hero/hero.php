    <!-- Hero Section -->
<section class="hero mb-3">
    <hr class="hero mb-1">
    <?php switch($pagetitle):
        case 'Users': ?>
            <h1 class="title mb-0">Users</h1>
            <small class="mb-1 has-text-grey">Manage users</small>
            <hr class="has-background-grey-dark mt-2">  
            <p class="subtitle">Your main content goes here.</p>
    <?php break;
        case 'Dashboard': ?>
            <h1 class="title mb-0">Dashboard</h1>
            <small class="mb-1 has-text-grey">Main page</small>
            <hr class="has-background-grey-dark mt-2"> 
            <p class="subtitle">Your main content goes here.</p>
    <?php break;

        default: ?>
                    <!-- Default content -->
        <?php break;
    endswitch; ?>
</section>