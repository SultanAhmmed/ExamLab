<?php
// student/index.php
$page_title = 'Student Dashboard - ExamLab';
include '../includes/header.php';
include '../includes/navbar.php';
?>
<div class="container py-5">
    <h1>Student Dashboard</h1>
    <p>Welcome, Student! This is your dashboard.</p>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Exams</h5>
                    <p class="card-text">You have 2 exams scheduled this week.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Results</h5>
                    <p class="card-text">View your past exam results.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Discussions</h5>
                    <p class="card-text">Join course discussions.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>