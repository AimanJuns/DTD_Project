<?php
include 'header.php';
include 'database_link.php';
include 'functions.php';
?>

<h1>Dashboard</h1>
<div class="dashboard-container">
    <div class="dashboard-item">
        <h2>Books Listed</h2>
        <p><?php echo getBooksListed(); ?></p>
    </div>
    <div class="dashboard-item">
        <h2>Books Not Returned</h2>
        <p><?php echo getBooksNotReturned(); ?></p>
    </div>
    <div class="dashboard-item">
        <h2>Registered Users</h2>
        <p><?php echo getRegisteredUsers(); ?></p>
    </div>
    <div class="dashboard-item">
        <h2>Listed Authors</h2>
        <p><?php echo getListedAuthors(); ?></p>
    </div>
</div>

<?php include 'footer.php'; ?>