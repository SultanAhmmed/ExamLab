<?php
// config/config.php
// Application configuration
define('APP_NAME', 'ExamLab');
define('APP_ENV', 'development'); // production, development, testing
define('APP_URL', 'http://localhost/ExamLab');
define('APP_TIMEZONE', 'UTC');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>