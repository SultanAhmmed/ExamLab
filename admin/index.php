<?php
// admin/index.php
$page_title = 'Admin Dashboard - ExamLab';
include '../includes/header.php';
include '../includes/navbar.php';
?>
<div class="container py-5">
    <h1>Admin Dashboard</h1>
    <p>Welcome, Admin! You have full control over the system.</p>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">Add, edit, or remove users.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Monitor Activities</h5>
                    <p class="card-text">View system logs and user activity.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">System Settings</h5>
                    <p class="card-text">Configure global platform settings.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>