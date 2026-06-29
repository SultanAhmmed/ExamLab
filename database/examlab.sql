-- =============================================
-- ExamLab – Full Database Installation Script
-- =============================================
-- This script drops the existing database (if any),
-- creates a fresh one, sets up the user, and
-- populates tables with sample data.
-- 
-- To run: sudo mysql -u root -p < database/examlab_full.sql
-- =============================================

-- Drop existing database if it exists
DROP DATABASE IF EXISTS examlab_db;

-- Create new database
CREATE DATABASE examlab_db;

-- Use the database
USE examlab_db;

-- Create the application user
CREATE USER IF NOT EXISTS 'examlab_user'@'localhost' IDENTIFIED BY 'examlab123';
GRANT ALL PRIVILEGES ON examlab_db.* TO 'examlab_user'@'localhost';
FLUSH PRIVILEGES;

-- =============================================
-- TABLES
-- =============================================

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('student', 'teacher', 'admin') DEFAULT 'student',
    department VARCHAR(100),
    profile_image VARCHAR(255) DEFAULT 'default.png',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Exams table
CREATE TABLE exams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    teacher_id INT,
    duration_minutes INT DEFAULT 60,
    total_marks INT DEFAULT 100,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (teacher_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Questions table
CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    exam_id INT,
    question_text TEXT NOT NULL,
    option_a VARCHAR(255),
    option_b VARCHAR(255),
    option_c VARCHAR(255),
    option_d VARCHAR(255),
    correct_answer CHAR(1) CHECK (correct_answer IN ('a','b','c','d')),
    marks INT DEFAULT 1,
    FOREIGN KEY (exam_id) REFERENCES exams(id) ON DELETE CASCADE
);

-- Results table
CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    exam_id INT,
    score INT,
    total_questions INT,
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (exam_id) REFERENCES exams(id) ON DELETE CASCADE
);

-- =============================================
-- SAMPLE DATA
-- =============================================

-- Insert sample students (matching the leaderboard)
INSERT INTO users (fullname, email, password, role, department) VALUES
('Sarah Johnson', 'sarah@example.com', 'hashed_password', 'student', 'Computer Science'),
('Michael Chen', 'michael@example.com', 'hashed_password', 'student', 'Software Engineering'),
('Emily Rodriguez', 'emily@example.com', 'hashed_password', 'student', 'Data Science'),
('James Kim', 'james@example.com', 'hashed_password', 'student', 'Cyber Security'),
('Aisha Patel', 'aisha@example.com', 'hashed_password', 'student', 'Artificial Intelligence'),
('David Okafor', 'david@example.com', 'hashed_password', 'student', 'Information Technology');

-- Insert sample exams
INSERT INTO exams (title, description, teacher_id, duration_minutes, total_marks) VALUES
('Introduction to Computer Science', 'Basic concepts of computer science.', NULL, 60, 100),
('Database Systems', 'SQL and relational database design.', NULL, 90, 100);

-- Insert sample questions (for the first exam)
INSERT INTO questions (exam_id, question_text, option_a, option_b, option_c, option_d, correct_answer, marks) VALUES
(1, 'What does CPU stand for?', 'Central Process Unit', 'Computer Personal Unit', 'Central Processing Unit', 'Core Process Unit', 'c', 2),
(1, 'Which of the following is a programming language?', 'HTML', 'CSS', 'Python', 'XML', 'c', 2);

-- Insert sample results (for the leaderboard)
INSERT INTO results (student_id, exam_id, score, total_questions) VALUES
(1, 1, 98, 2),
(2, 1, 95, 2),
(3, 1, 92, 2),
(4, 1, 88, 2),
(5, 1, 85, 2),
(6, 1, 82, 2);