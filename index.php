<?php
// index.php
$page_title = 'ExamLab – Online Examination Portal';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- HERO SECTION -->
<section class="hero-section" id="hero">
    <div class="container position-relative">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="mb-3">
                    <span class="badge bg-primary-soft text-primary-custom px-3 py-2 rounded-pill">
                        <i class="bi bi-rocket-takeoff me-1"></i> Next‑Gen Exam Platform
                    </span>
                </div>
                <h1 class="hero-title">
                    <span class="highlight">ExamLab</span><br />
                    Online Examination Portal
                </h1>
                <p class="hero-description mt-3">
                    Practice exams, manage courses, and participate in discussions — all in one place.
                </p>
                <div class="hero-actions d-flex flex-wrap gap-3 mt-4">
                    <a href="auth/login.php" class="btn btn-primary-custom">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login
                    </a>
                    <a href="auth/register.php" class="btn btn-outline-primary-custom">
                        <i class="bi bi-person-plus me-2"></i>Register
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <div class="position-relative d-inline-block">
                    <div class="bg-primary-soft rounded-4 p-4 p-lg-5"
                        style="border-radius: 30px; box-shadow: var(--shadow-lg);">
                        <i class="bi bi-mortarboard-fill" style="font-size: 6rem; color: var(--primary);"></i>
                        <h4 class="mt-3 fw-bold">ExamLab</h4>
                        <p class="text-muted mb-0">Practice. Learn. Succeed.</p>
                    </div>
                    <div class="position-absolute top-0 start-0 translate-middle">
                        <span class="badge bg-primary rounded-pill p-3">
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <div class="position-absolute bottom-0 end-0 translate-middle">
                        <span class="badge bg-warning text-dark rounded-pill p-3">
                            <i class="bi bi-trophy"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-illustration">
            <i class="bi bi-mortarboard-fill"></i>
        </div>
    </div>
</section>

<!-- TOP STUDENTS LEADERBOARD -->
<section class="section-padding" id="leaderboard">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary-soft text-primary-custom px-3 py-2 rounded-pill mb-2">
                <i class="bi bi-trophy me-1"></i> Leaderboard
            </span>
            <h2 class="section-title">Top Students</h2>
            <p class="section-subtitle">Meet our highest achievers — ranked by their CGPA and overall score.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Rank 1 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card-custom p-4 text-center position-relative leaderboard-card">
                    <span class="rank-badge gold">1</span>
                    <div class="card-img-top-wrapper">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=0d6efd&color=fff&size=80&bold=true"
                            alt="Sarah Johnson" />
                    </div>
                    <h5 class="student-name">Sarah Johnson</h5>
                    <p class="student-dept">Computer Science</p>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <span class="student-score">CGPA 3.98</span>
                        <span class="badge bg-primary-soft text-primary-custom px-3 py-1 rounded-pill">
                            <i class="bi bi-star-fill me-1"></i> 2450
                        </span>
                    </div>
                </div>
            </div>
            <!-- Rank 2 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card-custom p-4 text-center position-relative leaderboard-card">
                    <span class="rank-badge silver">2</span>
                    <div class="card-img-top-wrapper">
                        <img src="https://ui-avatars.com/api/?name=Michael+Chen&background=0d6efd&color=fff&size=80&bold=true"
                            alt="Michael Chen" />
                    </div>
                    <h5 class="student-name">Michael Chen</h5>
                    <p class="student-dept">Software Engineering</p>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <span class="student-score">CGPA 3.92</span>
                        <span class="badge bg-primary-soft text-primary-custom px-3 py-1 rounded-pill">
                            <i class="bi bi-star-fill me-1"></i> 2320
                        </span>
                    </div>
                </div>
            </div>
            <!-- Rank 3 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card-custom p-4 text-center position-relative leaderboard-card">
                    <span class="rank-badge bronze">3</span>
                    <div class="card-img-top-wrapper">
                        <img src="https://ui-avatars.com/api/?name=Emily+Rodriguez&background=0d6efd&color=fff&size=80&bold=true"
                            alt="Emily Rodriguez" />
                    </div>
                    <h5 class="student-name">Emily Rodriguez</h5>
                    <p class="student-dept">Data Science</p>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <span class="student-score">CGPA 3.87</span>
                        <span class="badge bg-primary-soft text-primary-custom px-3 py-1 rounded-pill">
                            <i class="bi bi-star-fill me-1"></i> 2180
                        </span>
                    </div>
                </div>
            </div>
            <!-- Rank 4 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card-custom p-4 text-center position-relative leaderboard-card">
                    <span class="rank-badge" style="background:#6c7a8a;">4</span>
                    <div class="card-img-top-wrapper">
                        <img src="https://ui-avatars.com/api/?name=James+Kim&background=0d6efd&color=fff&size=80&bold=true"
                            alt="James Kim" />
                    </div>
                    <h5 class="student-name">James Kim</h5>
                    <p class="student-dept">Cyber Security</p>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <span class="student-score">CGPA 3.81</span>
                        <span class="badge bg-primary-soft text-primary-custom px-3 py-1 rounded-pill">
                            <i class="bi bi-star-fill me-1"></i> 2050
                        </span>
                    </div>
                </div>
            </div>
            <!-- Rank 5 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card-custom p-4 text-center position-relative leaderboard-card">
                    <span class="rank-badge" style="background:#6c7a8a;">5</span>
                    <div class="card-img-top-wrapper">
                        <img src="https://ui-avatars.com/api/?name=Aisha+Patel&background=0d6efd&color=fff&size=80&bold=true"
                            alt="Aisha Patel" />
                    </div>
                    <h5 class="student-name">Aisha Patel</h5>
                    <p class="student-dept">Artificial Intelligence</p>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <span class="student-score">CGPA 3.76</span>
                        <span class="badge bg-primary-soft text-primary-custom px-3 py-1 rounded-pill">
                            <i class="bi bi-star-fill me-1"></i> 1940
                        </span>
                    </div>
                </div>
            </div>
            <!-- Rank 6 -->
            <div class="col-sm-6 col-lg-4">
                <div class="card-custom p-4 text-center position-relative leaderboard-card">
                    <span class="rank-badge" style="background:#6c7a8a;">6</span>
                    <div class="card-img-top-wrapper">
                        <img src="https://ui-avatars.com/api/?name=David+Okafor&background=0d6efd&color=fff&size=80&bold=true"
                            alt="David Okafor" />
                    </div>
                    <h5 class="student-name">David Okafor</h5>
                    <p class="student-dept">Information Technology</p>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <span class="student-score">CGPA 3.70</span>
                        <span class="badge bg-primary-soft text-primary-custom px-3 py-1 rounded-pill">
                            <i class="bi bi-star-fill me-1"></i> 1820
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEARCH STUDENTS -->
<section class="section-padding bg-primary-soft" id="search">
    <div class="container">
        <div class="text-center mb-4">
            <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-2">
                <i class="bi bi-search me-1"></i> Find Students
            </span>
            <h2 class="section-title">Search Students</h2>
            <p class="section-subtitle">Type a name to search through our student directory.</p>
        </div>

        <div class="search-wrapper">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-0 ps-3">
                    <i class="bi bi-search text-primary"></i>
                </span>
                <input type="text" class="form-control" placeholder="Search student by name…"
                    aria-label="Search student" id="studentSearch" />
                <button class="btn btn-search" type="button" id="searchBtn">
                    <i class="bi bi-arrow-right me-1"></i> Search
                </button>
            </div>
            <div id="searchFeedback" class="mt-2 text-center text-muted small" style="min-height: 1.5rem;"></div>
        </div>
    </div>
</section>

<!-- ABOUT EXAMLAB -->
<section class="section-padding" id="about">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary-soft text-primary-custom px-3 py-2 rounded-pill mb-2">
                <i class="bi bi-info-circle me-1"></i> About
            </span>
            <h2 class="section-title">What is ExamLab?</h2>
            <p class="section-subtitle">
                A modern online examination portal designed for students, teachers, and administrators.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-custom p-4 text-center">
                    <div class="about-icon">
                        <i class="bi bi-person-graduate"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Student</h4>
                    <p class="text-muted small">Everything you need to excel in your exams.</p>
                    <ul class="about-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Take exams</li>
                        <li><i class="bi bi-check-circle-fill"></i> View results</li>
                        <li><i class="bi bi-check-circle-fill"></i> Join discussions</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom p-4 text-center">
                    <div class="about-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Teacher</h4>
                    <p class="text-muted small">Powerful tools to manage your courses and students.</p>
                    <ul class="about-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Create exams</li>
                        <li><i class="bi bi-check-circle-fill"></i> Delete exams</li>
                        <li><i class="bi bi-check-circle-fill"></i> Guide students</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-custom p-4 text-center">
                    <div class="about-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Admin</h4>
                    <p class="text-muted small">Full control to monitor and maintain the platform.</p>
                    <ul class="about-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Manage users</li>
                        <li><i class="bi bi-check-circle-fill"></i> Monitor activities</li>
                        <li><i class="bi bi-check-circle-fill"></i> Maintain the system</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUICK STATISTICS -->
<section class="section-padding bg-primary-soft" id="statistics">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-2">
                <i class="bi bi-graph-up me-1"></i> Stats
            </span>
            <h2 class="section-title">Quick Statistics</h2>
            <p class="section-subtitle">A snapshot of ExamLab's growing community and resources.</p>
        </div>

        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-people"></i></div>
                    <div class="stat-number">150<span style="font-weight:400;color:#6c7a8a;">+</span></div>
                    <div class="stat-label">Students</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-person-badge"></i></div>
                    <div class="stat-number">25<span style="font-weight:400;color:#6c7a8a;">+</span></div>
                    <div class="stat-label">Teachers</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-file-text"></i></div>
                    <div class="stat-number">50<span style="font-weight:400;color:#6c7a8a;">+</span></div>
                    <div class="stat-label">Exams</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-icon"><i class="bi bi-question-circle"></i></div>
                    <div class="stat-number">1000<span style="font-weight:400;color:#6c7a8a;">+</span></div>
                    <div class="stat-label">Questions</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>