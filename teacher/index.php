<?php
// teacher/index.php
$page_title = 'Teacher Dashboard - ExamLab';
include '../includes/header.php';
include '../includes/navbar.php';
?>
<div class="container py-5">
    <h1>Teacher Dashboard</h1>
    <p>Welcome, Teacher! Manage your courses and exams.</p>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Exam</h5>
                    <p class="card-text">Design a new exam for your students.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Courses</h5>
                    <p class="card-text">Update your course materials.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student Progress</h5>
                    <p class="card-text">Monitor student performance.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>