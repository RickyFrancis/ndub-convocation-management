-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2023 at 10:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndub-convocation-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduate_lists`
--

CREATE TABLE `graduate_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_year` year NOT NULL,
  `admission_year` year NOT NULL,
  `admission_semester` year NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_earned` int NOT NULL,
  `cgpa` double(8,2) NOT NULL,
  `result_publish_date` date NOT NULL,
  `dob` date NOT NULL,
  `passing_trimester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_passing_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_result` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_passing_year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_result` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_clearance` tinyint(1) NOT NULL,
  `due_amount` double(100,2) NOT NULL,
  `library_clearance` tinyint(1) NOT NULL,
  `administrative_clearance` tinyint(1) NOT NULL,
  `department_clearance` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graduate_lists`
--

INSERT INTO `graduate_lists` (`id`, `name`, `student_id`, `program`, `batch`, `department`, `major`, `minor`, `academic_year`, `admission_year`, `admission_semester`, `father_name`, `mother_name`, `phone`, `email`, `blood_group`, `nid`, `birth_certificate_no`, `credit_earned`, `cgpa`, `result_publish_date`, `dob`, `passing_trimester`, `ssc_passing_year`, `ssc_result`, `hsc_passing_year`, `hsc_result`, `account_clearance`, `due_amount`, `library_clearance`, `administrative_clearance`, `department_clearance`, `created_at`, `updated_at`) VALUES
(1, 'Durward Fritsch II', '713', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'BBA', 'HRM', 'Business Math', 2017, 2012, 2017, 'Dan Cormier IV', 'Mrs. Maybell Kertzmann', '+1 (585) 830-4738', 'zlockman@example.net', 'A-', NULL, '101', 133, 3.40, '2022-09-10', '2022-09-10', 'SPRING 2021', '2017', '3.8', '2017', '4.5', 0, 0.00, 0, 0, 0, NULL, NULL),
(2, 'Clare Lindgren', '565', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'ELL', 'Finance', 'Business Math', 2018, 2014, 2018, 'Mr. Vince Pacocha MD', 'Anastasia Hills', '+13613432310', 'mitchell.reginald@example.net', 'B-', NULL, '107', 139, 3.43, '2022-04-26', '2022-04-26', 'FALL 2022', '2018', '3.76', '2018', '4.58', 1, 1007.43, 0, 1, 1, NULL, NULL),
(3, 'Alfredo Bayer', '716', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'ELL', 'Management', 'Accounting', 2019, 2015, 2019, 'Tony Quigley III', 'Miss Yoshiko Homenick Jr.', '732-653-4102', 'zieme.frederique@example.org', 'A+', NULL, '120', 131, 3.11, '2023-11-23', '2023-11-23', 'FALL 2023', '2019', '3.53', '2019', '4.21', 1, 4871.60, 0, 0, 0, NULL, NULL),
(4, 'Mr. Willard Mitchell', '907', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'LLB', 'Management', 'Accounting', 2020, 2016, 2020, 'Mr. Kaden Zulauf II', 'Dr. Burnice Flatley I', '1-816-971-1835', 'sandy.cronin@example.com', 'O+', NULL, '128', 124, 3.09, '2022-12-22', '2022-12-22', 'SPRING 2024', '2020', '4.8', '2020', '4.67', 1, 1241.44, 0, 0, 1, NULL, NULL),
(5, 'Hipolito Ward', '233', 'BSc. in Computer Science & Engineering', 'CSE 7', 'ELL', 'HRM', 'Economics', 2018, 2013, 2018, 'Delaney Monahan III', 'Prof. Sydnee Schmeler', '+1 (732) 250-3049', 'beahan.roberta@example.org', 'O+', NULL, '101', 136, 3.60, '2023-09-21', '2023-09-21', 'SUMMER 2022', '2018', '3.88', '2018', '4.09', 0, 0.00, 1, 1, 1, NULL, NULL),
(6, 'Christy Considine', '051', 'BSc. in Computer Science & Engineering', 'ELL 8', 'BBA', 'Marketing', 'Economics', 2020, 2015, 2020, 'Keegan Lynch III', 'Bridie Bechtelar III', '980.512.6863', 'hettie.sipes@example.org', 'AB+', NULL, '104', 120, 3.06, '2022-08-09', '2022-08-09', 'SUMMER 2024', '2020', '3.81', '2020', '4.74', 1, 4088.62, 0, 1, 0, NULL, NULL),
(7, 'Kamren Casper', '295', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'LLB', 'HRM', 'Accounting', 2018, 2013, 2018, 'Dagmar Grady II', 'Reyna Stiedemann', '(270) 962-5281', 'omer91@example.com', 'AB-', NULL, '104', 124, 2.69, '2023-06-28', '2023-06-28', 'SPRING 2022', '2018', '5', '2018', '3.85', 1, 545.00, 0, 0, 1, NULL, NULL),
(8, 'Prof. Eryn Hayes DDS', '980', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'MCSE', 'HRM', 'Accounting', 2017, 2016, 2017, 'Prof. Hans Torp II', 'Sierra Kuvalis I', '617.889.9598', 'weimann.baron@example.com', 'B+', NULL, '126', 133, 3.48, '2023-04-05', '2023-04-05', 'SPRING 2021', '2017', '3.59', '2017', '4.18', 1, 4309.43, 0, 1, 1, NULL, NULL),
(9, 'Ward Gulgowski', '080', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'CSE', 'Marketing', 'Statistics', 2017, 2016, 2017, 'Alvis Pfannerstill', 'Effie Sanford', '1-980-719-6368', 'cindy69@example.org', 'AB+', NULL, '119', 123, 3.94, '2022-10-15', '2022-10-15', 'SPRING 2021', '2017', '4.26', '2017', '4.71', 0, 0.00, 0, 0, 0, NULL, NULL),
(10, 'Prof. Carolina Haley', '294', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'BBA', 'Management', 'Accounting', 2020, 2015, 2020, 'Dave Cassin', 'Dolly Krajcik', '(831) 412-5968', 'gdoyle@example.net', 'AB+', NULL, '122', 134, 3.85, '2023-02-16', '2023-02-16', 'SUMMER 2024', '2020', '4.22', '2020', '4.33', 1, 3512.79, 0, 0, 1, NULL, NULL),
(11, 'Ciara Dicki', '537', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'MCSE', 'HRM', 'Accounting', 2018, 2015, 2018, 'Arch Quitzon', 'Dr. Jalyn Watsica DVM', '+18307481643', 'magdalen34@example.com', 'AB+', NULL, '117', 131, 3.92, '2021-12-27', '2021-12-27', 'SUMMER 2022', '2018', '4.16', '2018', '4', 0, 0.00, 1, 0, 1, NULL, NULL),
(12, 'Dorcas Strosin', '912', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'ELL', 'Finance', 'Economics', 2016, 2012, 2016, 'Jasen Kirlin', 'Prof. Zella Metz', '248.370.4337', 'anderson.junius@example.org', 'B+', NULL, '111', 134, 2.75, '2023-10-15', '2023-10-15', 'SPRING 2020', '2016', '3.54', '2016', '4.39', 1, 798.04, 0, 0, 1, NULL, NULL),
(13, 'Jacklyn Marks', '766', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'ELL', 'HRM', 'Accounting', 2020, 2014, 2020, 'Lew Powlowski', 'Adela Schinner', '272-915-0882', 'leonardo.larkin@example.org', 'A-', NULL, '118', 131, 2.82, '2021-12-26', '2021-12-26', 'SPRING 2024', '2020', '3.97', '2020', '3.76', 0, 0.00, 1, 0, 1, NULL, NULL),
(14, 'Miss Marta Mills', '089', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'MCSE', 'HRM', 'Accounting', 2018, 2013, 2018, 'Santiago Stiedemann', 'Madeline Leuschke', '1-254-458-4644', 'jdouglas@example.org', 'O-', NULL, '124', 125, 2.78, '2022-11-06', '2022-11-06', 'SUMMER 2022', '2018', '3.82', '2018', '3.56', 0, 0.00, 1, 0, 1, NULL, NULL),
(15, 'Zelma Crona', '655', 'BSc. in Computer Science & Engineering', 'BBA 12', 'LLB', 'Finance', 'Business Math', 2019, 2015, 2019, 'Riley Hartmann', 'Delfina Denesik', '+1-929-947-9315', 'reina43@example.net', 'A+', NULL, '101', 128, 3.43, '2023-06-05', '2023-06-05', 'SUMMER 2023', '2019', '4.34', '2019', '4.44', 0, 0.00, 0, 1, 0, NULL, NULL),
(16, 'Pearl Cummings', '965', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'MCSE', 'Management', 'Economics', 2018, 2013, 2018, 'Prof. Jasen Gusikowski', 'Amie Kunde', '1-310-249-4238', 'madisyn42@example.org', 'B-', NULL, '126', 137, 3.18, '2022-02-20', '2022-02-20', 'SUMMER 2022', '2018', '4.47', '2018', '3.51', 1, 758.37, 1, 0, 1, NULL, NULL),
(17, 'Ansley Cremin', '939', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'LLB', 'Marketing', 'Accounting', 2016, 2016, 2016, 'Nico Stroman', 'Aglae Funk', '+1 (815) 783-7196', 'violet.kuhlman@example.org', 'AB-', NULL, '106', 122, 3.27, '2023-03-07', '2023-03-07', 'FALL 2020', '2016', '4.9', '2016', '4.98', 1, 1858.75, 1, 0, 0, NULL, NULL),
(18, 'Yasmin Howe', '732', 'BSc. in Computer Science & Engineering', 'CSE 7', 'ELL', 'HRM', 'Accounting', 2017, 2016, 2017, 'Carter Schamberger II', 'Marisa Hansen', '1-415-428-0712', 'wwindler@example.org', 'AB+', NULL, '113', 143, 3.79, '2022-01-01', '2022-01-01', 'SPRING 2021', '2017', '4.79', '2017', '3.81', 0, 0.00, 0, 0, 0, NULL, NULL),
(19, 'Ebba Nikolaus', '937', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'CSE', 'Management', 'Business Math', 2016, 2012, 2016, 'Davion Wehner', 'Imogene Turner', '854.816.3647', 'geovanny.orn@example.org', 'O-', NULL, '108', 123, 3.48, '2022-07-11', '2022-07-11', 'SUMMER 2020', '2016', '3.93', '2016', '3.84', 1, 1638.92, 0, 0, 1, NULL, NULL),
(20, 'Adalberto Altenwerth', '643', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'MCSE', 'Finance', 'Statistics', 2020, 2015, 2020, 'Tremayne Romaguera', 'Prof. Julie Cole', '+1-920-315-3053', 'irogahn@example.com', 'B-', NULL, '110', 128, 3.51, '2023-07-11', '2023-07-11', 'SUMMER 2024', '2020', '3.75', '2020', '3.5', 0, 0.00, 1, 0, 0, NULL, NULL),
(21, 'Dr. Jerrell Dare', '392', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'MCSE', 'Management', 'Accounting', 2017, 2014, 2017, 'Prof. Edd Kerluke DVM', 'Miss Delta Hintz PhD', '+1.352.999.9147', 'rhermann@example.com', 'A-', NULL, '108', 149, 2.83, '2021-12-22', '2021-12-22', 'FALL 2021', '2017', '3.84', '2017', '4.1', 0, 0.00, 1, 1, 1, NULL, NULL),
(22, 'Desiree Wiza', '733', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'ELL', 'HRM', 'Business Math', 2016, 2016, 2016, 'Marc Lubowitz PhD', 'Daisy Morar', '1-808-223-3533', 'rhiannon58@example.org', 'B+', NULL, '115', 147, 3.95, '2023-10-12', '2023-10-12', 'SUMMER 2020', '2016', '4.73', '2016', '3.69', 1, 1829.42, 0, 0, 0, NULL, NULL),
(23, 'Dr. Alexandra Powlowski IV', '361', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'ELL', 'Finance', 'Accounting', 2017, 2016, 2017, 'Dr. Ross Stoltenberg II', 'Rahsaan Russel', '1-201-873-1244', 'ryan.verlie@example.com', 'A+', NULL, '124', 137, 2.65, '2023-07-19', '2023-07-19', 'FALL 2021', '2017', '4.32', '2017', '4.65', 0, 0.00, 0, 0, 0, NULL, NULL),
(24, 'Lizeth Hoeger', '216', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'LLB', 'Finance', 'Statistics', 2019, 2015, 2019, 'Dr. Trent Christiansen Jr.', 'Miss Nayeli Bernhard Jr.', '+1 (760) 251-3283', 'ana.witting@example.com', 'A+', NULL, '115', 133, 2.81, '2022-07-16', '2022-07-16', 'SPRING 2023', '2019', '3.92', '2019', '4.18', 0, 0.00, 1, 1, 0, NULL, NULL),
(25, 'Mr. Claude Dibbert V', '659', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'MBA', 'Finance', 'Business Math', 2018, 2016, 2018, 'Mr. Allan Lockman', 'Lauriane Cartwright I', '317.595.5111', 'caleb48@example.org', 'A+', NULL, '103', 138, 3.92, '2022-09-10', '2022-09-10', 'SPRING 2022', '2018', '4.26', '2018', '4.01', 0, 0.00, 1, 0, 0, NULL, NULL),
(26, 'Damon Haag', '931', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'MBA', 'HRM', 'Business Math', 2019, 2013, 2019, 'Talon Roberts', 'Antonetta Schneider', '+1.606.778.3488', 'gretchen.pagac@example.net', 'AB-', NULL, '106', 135, 3.19, '2022-01-28', '2022-01-28', 'SPRING 2023', '2019', '4.12', '2019', '4.92', 0, 0.00, 0, 0, 1, NULL, NULL),
(27, 'Ayana Hagenes II', '157', 'BSc. in Computer Science & Engineering', 'ELL 8', 'BBA', 'Marketing', 'Statistics', 2016, 2012, 2016, 'Reynold Ruecker', 'Ms. Earnestine Boyer', '(240) 817-9600', 'napoleon.larson@example.com', 'B+', NULL, '111', 120, 3.67, '2023-01-19', '2023-01-19', 'SUMMER 2020', '2016', '4.83', '2016', '3.6', 1, 1108.52, 0, 0, 1, NULL, NULL),
(28, 'Meta Parker', '417', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'BBA', 'HRM', 'Business Math', 2020, 2013, 2020, 'Emiliano Spinka', 'Cindy Reinger', '+1-508-944-1745', 'xschiller@example.org', 'A+', NULL, '106', 146, 3.31, '2022-10-31', '2022-10-31', 'FALL 2024', '2020', '3.53', '2020', '3.58', 0, 0.00, 1, 1, 0, NULL, NULL),
(29, 'Nathan Bergstrom', '354', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'LLB', 'Management', 'Statistics', 2018, 2015, 2018, 'Arely Tillman', 'Phyllis Williamson', '+1.406.655.5347', 'greenfelder.jeramie@example.org', 'B+', NULL, '125', 129, 3.53, '2023-03-17', '2023-03-17', 'SUMMER 2022', '2018', '3.72', '2018', '3.56', 0, 0.00, 1, 0, 0, NULL, NULL),
(30, 'Cyril Mante', '863', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'MBA', 'Marketing', 'Economics', 2017, 2015, 2017, 'Ervin Ratke', 'Helen Konopelski', '(480) 538-3437', 'leon.brakus@example.org', 'AB+', NULL, '113', 143, 3.42, '2022-11-18', '2022-11-18', 'FALL 2021', '2017', '3.51', '2017', '4.39', 1, 1710.04, 0, 1, 1, NULL, NULL),
(31, 'Dr. Georgette Torp MD', '865', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'MCSE', 'Management', 'Statistics', 2016, 2012, 2016, 'Kelvin Willms', 'Prof. Alicia Hermiston PhD', '1-281-794-1708', 'altenwerth.davion@example.net', 'AB-', NULL, '111', 149, 3.48, '2022-02-12', '2022-02-12', 'FALL 2020', '2016', '4.82', '2016', '3.86', 0, 0.00, 0, 0, 0, NULL, NULL),
(32, 'Jana Wiegand', '158', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'MCSE', 'Marketing', 'Statistics', 2019, 2014, 2019, 'Prof. Kiel Cole Sr.', 'Christine Batz', '+18089834150', 'fkerluke@example.com', 'O-', NULL, '121', 149, 3.93, '2022-01-04', '2022-01-04', 'FALL 2023', '2019', '4.41', '2019', '4.98', 0, 0.00, 1, 1, 0, NULL, NULL),
(33, 'Maya Paucek', '259', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'MCSE', 'Finance', 'Accounting', 2016, 2015, 2016, 'Tatum Kohler', 'Joy Quitzon DVM', '+1 (325) 796-2504', 'renner.karine@example.org', 'A-', NULL, '105', 127, 3.70, '2023-10-02', '2023-10-02', 'FALL 2020', '2016', '4.02', '2016', '4.99', 1, 857.19, 0, 1, 1, NULL, NULL),
(34, 'Alice Wiegand', '595', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'MBA', 'HRM', 'Statistics', 2016, 2012, 2016, 'Prof. Amari Schmeler Jr.', 'Mrs. Summer Schroeder III', '+1.608.474.0690', 'frank.bruen@example.com', 'AB+', NULL, '106', 131, 3.87, '2022-04-07', '2022-04-07', 'SPRING 2020', '2016', '3.68', '2016', '3.56', 1, 4241.89, 0, 1, 1, NULL, NULL),
(35, 'Mattie Gislason', '052', 'BSc. in Computer Science & Engineering', 'BBA 12', 'CSE', 'Finance', 'Economics', 2016, 2016, 2016, 'Dr. Peter Mann I', 'Anabelle Purdy', '972.282.7894', 'stoltenberg.loyce@example.net', 'A+', NULL, '124', 131, 3.05, '2023-07-04', '2023-07-04', 'SUMMER 2020', '2016', '4.97', '2016', '4.02', 0, 0.00, 0, 1, 1, NULL, NULL),
(36, 'Brad Koch', '321', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'MCSE', 'Marketing', 'Business Math', 2020, 2013, 2020, 'Landen Wehner', 'Prof. Domenica Braun', '+1-620-472-0982', 'kkutch@example.net', 'AB-', NULL, '100', 134, 3.97, '2023-07-27', '2023-07-27', 'SPRING 2024', '2020', '4.81', '2020', '4.65', 1, 3080.09, 1, 0, 1, NULL, NULL),
(37, 'Gunner Grady MD', '642', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'BBA', 'Management', 'Statistics', 2019, 2012, 2019, 'Mr. Andres Lang DDS', 'Emma Shields MD', '+1-520-777-0621', 'schimmel.jamarcus@example.com', 'B+', NULL, '118', 125, 4.00, '2023-10-09', '2023-10-09', 'SUMMER 2023', '2019', '4.82', '2019', '3.76', 0, 0.00, 1, 0, 1, NULL, NULL),
(38, 'Mr. Harry Goldner II', '137', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'BBA', 'Management', 'Accounting', 2018, 2013, 2018, 'Ceasar Pfannerstill', 'Ms. Dandre Mann Jr.', '+12529203822', 'mclaughlin.milford@example.com', 'A-', NULL, '118', 129, 3.92, '2022-10-28', '2022-10-28', 'FALL 2022', '2018', '4.33', '2018', '4.84', 1, 780.22, 0, 0, 1, NULL, NULL),
(39, 'Nakia Dickinson', '905', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'MCSE', 'Management', 'Business Math', 2017, 2016, 2017, 'Prof. Isaiah Grant', 'Viva Olson', '978.391.2602', 'dtremblay@example.org', 'O+', NULL, '129', 135, 3.07, '2023-07-25', '2023-07-25', 'SUMMER 2021', '2017', '3.52', '2017', '4.16', 0, 0.00, 1, 0, 1, NULL, NULL),
(40, 'Henriette Senger', '953', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'MCSE', 'Marketing', 'Business Math', 2017, 2013, 2017, 'Prof. Bell Wehner DVM', 'Veda Swift', '743.503.8656', 'delaney77@example.net', 'A+', NULL, '117', 129, 3.49, '2023-05-05', '2023-05-05', 'FALL 2021', '2017', '4.67', '2017', '3.82', 0, 0.00, 1, 1, 0, NULL, NULL),
(41, 'Miles Crona', '577', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'MCSE', 'HRM', 'Economics', 2016, 2014, 2016, 'Odell Sawayn', 'Mrs. Willow Cassin', '1-973-678-5194', 'sjacobson@example.net', 'B-', NULL, '118', 150, 3.53, '2023-09-15', '2023-09-15', 'FALL 2020', '2016', '3.81', '2016', '3.64', 0, 0.00, 1, 1, 0, NULL, NULL),
(42, 'Laurie Goldner DDS', '647', 'BSc. in Computer Science & Engineering', 'BBA 12', 'MBA', 'Finance', 'Business Math', 2019, 2015, 2019, 'Narciso Fahey DDS', 'Ms. Leda Jenkins', '315-897-2944', 'emelie.metz@example.org', 'A+', NULL, '124', 132, 3.73, '2023-08-10', '2023-08-10', 'SPRING 2023', '2019', '3.98', '2019', '4.45', 1, 2543.11, 1, 0, 0, NULL, NULL),
(43, 'Dr. Eda Tremblay PhD', '190', 'BSc. in Computer Science & Engineering', 'CSE 7', 'MCSE', 'Marketing', 'Statistics', 2019, 2012, 2019, 'Mr. Neil Shields', 'Prof. Yvette Dooley', '1-484-989-2694', 'forrest.koss@example.com', 'A-', NULL, '117', 143, 3.12, '2023-08-17', '2023-08-17', 'SPRING 2023', '2019', '4.96', '2019', '3.74', 0, 0.00, 0, 0, 0, NULL, NULL),
(44, 'Elmer Gulgowski', '702', 'BSc. in Computer Science & Engineering', 'ELL 8', 'CSE', 'HRM', 'Accounting', 2020, 2016, 2020, 'Prof. Raphael Hintz Sr.', 'Sabrina Daniel', '972-955-5943', 'destiney97@example.com', 'O+', NULL, '116', 140, 3.10, '2023-04-19', '2023-04-19', 'SPRING 2024', '2020', '4.8', '2020', '4.39', 0, 0.00, 1, 0, 1, NULL, NULL),
(45, 'Prof. Colton Kemmer', '996', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'ELL', 'HRM', 'Accounting', 2018, 2015, 2018, 'Dr. Josh Goldner I', 'Zelma Stoltenberg', '+1-907-586-8767', 'mkiehn@example.com', 'A+', NULL, '111', 126, 3.45, '2023-06-02', '2023-06-02', 'SUMMER 2022', '2018', '4.68', '2018', '4.27', 1, 3007.76, 1, 1, 0, NULL, NULL),
(46, 'Carmela Lowe', '578', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'ELL', 'HRM', 'Statistics', 2018, 2012, 2018, 'Mr. Jeramy McKenzie', 'Keira Lueilwitz V', '1-909-674-1176', 'jermain33@example.com', 'AB+', NULL, '106', 120, 2.87, '2022-01-22', '2022-01-22', 'FALL 2022', '2018', '4.54', '2018', '4.85', 1, 4725.90, 1, 1, 1, NULL, NULL),
(47, 'Lon Ernser', '303', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'BBA', 'Management', 'Business Math', 2018, 2013, 2018, 'Mr. Claude Boehm Sr.', 'Annetta Jenkins', '1-847-218-6074', 'mdenesik@example.net', 'A-', NULL, '130', 150, 3.73, '2023-01-11', '2023-01-11', 'SPRING 2022', '2018', '4.65', '2018', '3.68', 1, 4192.03, 0, 1, 0, NULL, NULL),
(48, 'Dr. Nikolas Bergstrom DVM', '923', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'LLB', 'Management', 'Economics', 2018, 2016, 2018, 'Dr. Bruce Cole', 'Dorothea Jacobs', '+1.512.503.6549', 'sauer.hudson@example.net', 'O+', NULL, '124', 143, 3.46, '2023-06-25', '2023-06-25', 'SPRING 2022', '2018', '3.73', '2018', '4.37', 1, 152.28, 0, 0, 1, NULL, NULL),
(49, 'Dejon Berge V', '069', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'ELL', 'HRM', 'Economics', 2019, 2015, 2019, 'Prof. Derick Schultz DDS', 'Dr. Jacinthe Prosacco', '+1.352.339.1267', 'lacy.russel@example.org', 'B-', NULL, '112', 133, 2.89, '2022-02-11', '2022-02-11', 'SUMMER 2023', '2019', '4.36', '2019', '4.85', 0, 0.00, 1, 0, 0, NULL, NULL),
(50, 'Mr. Pablo King', '237', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'BBA', 'Marketing', 'Economics', 2018, 2016, 2018, 'Lorenzo Kilback', 'Megane Labadie', '1-585-734-9995', 'littel.river@example.com', 'A-', NULL, '129', 135, 2.56, '2022-01-21', '2022-01-21', 'FALL 2022', '2018', '4.9', '2018', '4.24', 1, 2298.63, 0, 0, 1, NULL, NULL),
(51, 'Rickey Grady', '258', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'MCSE', 'HRM', 'Economics', 2019, 2012, 2019, 'Dr. Alberto Ziemann IV', 'Marlene Olson DVM', '+1.364.388.7214', 'zmclaughlin@example.com', 'O-', NULL, '128', 143, 2.52, '2023-06-08', '2023-06-08', 'FALL 2023', '2019', '3.64', '2019', '4.09', 1, 3172.89, 0, 1, 0, NULL, NULL),
(52, 'Frances Reichert', '282', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'BBA', 'Management', 'Business Math', 2019, 2014, 2019, 'Prof. Derrick Weissnat', 'Sincere Cummerata V', '1-951-757-1035', 'eino09@example.org', 'AB+', NULL, '118', 128, 3.03, '2022-02-11', '2022-02-11', 'FALL 2023', '2019', '4.12', '2019', '4.01', 0, 0.00, 1, 0, 0, NULL, NULL),
(53, 'Elenora Upton', '066', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'ELL', 'HRM', 'Accounting', 2020, 2013, 2020, 'Mr. Sean Prosacco I', 'Jody Runte', '(912) 631-6743', 'keshawn87@example.com', 'O-', NULL, '114', 150, 3.31, '2023-03-04', '2023-03-04', 'SUMMER 2024', '2020', '4.79', '2020', '4.04', 1, 3157.03, 0, 0, 1, NULL, NULL),
(54, 'Myrtice Balistreri', '035', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'MCSE', 'Finance', 'Accounting', 2018, 2012, 2018, 'Dr. Grover Moore', 'Asha Gutmann', '1-978-313-0900', 'jean.bauch@example.org', 'O-', NULL, '118', 121, 3.44, '2023-03-26', '2023-03-26', 'SPRING 2022', '2018', '4.93', '2018', '3.93', 1, 3875.02, 1, 1, 0, NULL, NULL),
(55, 'Prof. Abdul Collins', '102', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'CSE', 'Management', 'Economics', 2018, 2012, 2018, 'Prof. Ismael Aufderhar DDS', 'Dr. Duane Farrell II', '702.945.0584', 'king.oberbrunner@example.net', 'AB-', NULL, '110', 132, 3.18, '2023-08-10', '2023-08-10', 'SPRING 2022', '2018', '4.91', '2018', '3.81', 1, 1435.65, 0, 0, 1, NULL, NULL),
(56, 'Jayden Bruen', '574', 'BSc. in Computer Science & Engineering', 'LLB 15', 'MBA', 'HRM', 'Statistics', 2020, 2012, 2020, 'Keven Breitenberg', 'Prof. Christelle Waelchi Sr.', '(828) 891-5466', 'regan.kuvalis@example.net', 'AB-', NULL, '102', 139, 2.64, '2023-01-12', '2023-01-12', 'FALL 2024', '2020', '4.43', '2020', '3.75', 0, 0.00, 1, 1, 0, NULL, NULL),
(57, 'Mrs. Phyllis Bahringer MD', '439', 'BSc. in Computer Science & Engineering', 'LLB 15', 'ELL', 'Finance', 'Accounting', 2019, 2015, 2019, 'Dale Klein', 'Harmony Zieme', '+1.315.552.7088', 'oschinner@example.com', 'A-', NULL, '124', 142, 2.69, '2023-09-08', '2023-09-08', 'SUMMER 2023', '2019', '4.25', '2019', '4.01', 1, 4083.10, 1, 1, 1, NULL, NULL),
(58, 'Jerrold Bradtke', '363', 'BSc. in Computer Science & Engineering', 'LLB 15', 'MCSE', 'Management', 'Economics', 2018, 2012, 2018, 'Lenny Kirlin', 'Dr. Verona Mayert DVM', '1-312-535-5272', 'gerda.sauer@example.net', 'A+', NULL, '115', 139, 3.48, '2023-11-11', '2023-11-11', 'SPRING 2022', '2018', '4.38', '2018', '3.7', 1, 546.23, 0, 0, 0, NULL, NULL),
(59, 'Prof. Irwin Wilkinson', '044', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'MCSE', 'Management', 'Business Math', 2020, 2015, 2020, 'Blake Rodriguez', 'Frances Swaniawski', '(629) 584-4944', 'melany.farrell@example.com', 'A+', NULL, '118', 129, 3.18, '2022-01-06', '2022-01-06', 'FALL 2024', '2020', '4.67', '2020', '4.06', 0, 0.00, 0, 1, 0, NULL, NULL),
(60, 'Louie Dare DDS', '368', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'LLB', 'Management', 'Accounting', 2019, 2013, 2019, 'Prof. Aidan Pfeffer', 'Marisol Powlowski', '1-862-467-7020', 'darren83@example.com', 'AB-', NULL, '129', 146, 2.52, '2022-11-02', '2022-11-02', 'SUMMER 2023', '2019', '4.45', '2019', '4.29', 0, 0.00, 0, 1, 1, NULL, NULL),
(61, 'Flavie Kuvalis', '475', 'BSc. in Computer Science & Engineering', 'LLB 15', 'BBA', 'Finance', 'Business Math', 2019, 2012, 2019, 'Gussie Kovacek', 'Evangeline Kunde', '361.723.5121', 'treutel.rosemary@example.net', 'O-', NULL, '127', 124, 3.48, '2023-09-27', '2023-09-27', 'SUMMER 2023', '2019', '4.1', '2019', '4.14', 0, 0.00, 1, 0, 1, NULL, NULL),
(62, 'Helga Hegmann II', '559', 'BSc. in Computer Science & Engineering', 'BBA 12', 'BBA', 'HRM', 'Statistics', 2020, 2013, 2020, 'Harrison Wilderman', 'Lola Altenwerth', '586-360-0279', 'christiansen.winifred@example.net', 'A+', NULL, '116', 140, 3.93, '2022-02-22', '2022-02-22', 'FALL 2024', '2020', '4.87', '2020', '4.04', 1, 176.02, 0, 1, 1, NULL, NULL),
(63, 'Wanda Glover', '389', 'BSc. in Computer Science & Engineering', 'LLB 15', 'CSE', 'Management', 'Statistics', 2016, 2015, 2016, 'Mr. Ryleigh Wiza', 'Elissa Collier', '+15628561672', 'efren.lockman@example.com', 'AB-', NULL, '107', 148, 3.92, '2022-05-26', '2022-05-26', 'FALL 2020', '2016', '4.83', '2016', '4.47', 1, 819.13, 1, 1, 1, NULL, NULL),
(64, 'Gisselle Mills', '398', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'CSE', 'HRM', 'Business Math', 2018, 2013, 2018, 'Freddie Stiedemann', 'Carlie Beahan', '959-381-7321', 'cschumm@example.net', 'AB+', NULL, '126', 123, 3.65, '2023-01-01', '2023-01-01', 'SPRING 2022', '2018', '4.53', '2018', '3.69', 0, 0.00, 1, 0, 0, NULL, NULL),
(65, 'Nicola Watsica', '884', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'MCSE', 'Management', 'Accounting', 2017, 2013, 2017, 'Foster Metz', 'Erika Spinka', '+1-936-793-4600', 'lbogisich@example.org', 'A-', NULL, '114', 147, 3.65, '2022-10-27', '2022-10-27', 'SPRING 2021', '2017', '4.88', '2017', '4.78', 0, 0.00, 1, 0, 0, NULL, NULL),
(66, 'Destini Jast', '288', 'BSc. in Computer Science & Engineering', 'CSE 7', 'ELL', 'HRM', 'Economics', 2020, 2015, 2020, 'Hipolito Waters', 'Lacy Hoppe DDS', '1-386-794-6691', 'vconnelly@example.com', 'B+', NULL, '121', 130, 2.81, '2023-04-11', '2023-04-11', 'SPRING 2024', '2020', '4.42', '2020', '3.73', 0, 0.00, 1, 1, 0, NULL, NULL),
(67, 'Claud Swaniawski', '538', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'ELL', 'Marketing', 'Statistics', 2017, 2012, 2017, 'Prof. Santos Dooley Sr.', 'Ms. Abigayle Zemlak', '1-907-206-9401', 'fhackett@example.com', 'O-', NULL, '111', 141, 2.70, '2023-09-12', '2023-09-12', 'FALL 2021', '2017', '4.04', '2017', '3.61', 0, 0.00, 0, 0, 0, NULL, NULL),
(68, 'Alessia Hettinger', '232', 'BSc. in Computer Science & Engineering', 'BBA 12', 'LLB', 'HRM', 'Statistics', 2018, 2014, 2018, 'Emanuel Feil', 'Tressa Labadie III', '610-618-3850', 'daija.ledner@example.org', 'A-', NULL, '110', 143, 3.73, '2022-03-19', '2022-03-19', 'FALL 2022', '2018', '4.46', '2018', '4.57', 0, 0.00, 1, 1, 0, NULL, NULL),
(69, 'Darrion Labadie', '699', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'MCSE', 'HRM', 'Accounting', 2016, 2015, 2016, 'Jessie Zieme', 'Adele Gleason', '609-294-0348', 'sam93@example.com', 'AB+', NULL, '100', 130, 2.97, '2023-10-02', '2023-10-02', 'SUMMER 2020', '2016', '4.62', '2016', '4.28', 1, 1444.17, 1, 0, 0, NULL, NULL),
(70, 'Dr. Dorcas Friesen', '176', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'BBA', 'Marketing', 'Statistics', 2019, 2014, 2019, 'Dr. Alexzander Legros', 'Miss Antonetta King Sr.', '949-980-5970', 'dewitt.williamson@example.org', 'B+', NULL, '124', 132, 3.53, '2023-04-10', '2023-04-10', 'FALL 2023', '2019', '4.68', '2019', '3.87', 1, 4211.61, 1, 1, 1, NULL, NULL),
(71, 'Madaline Crooks', '528', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'CSE', 'Finance', 'Statistics', 2017, 2014, 2017, 'Hayden Miller', 'Isabel Jast', '(785) 390-6991', 'tremaine.nitzsche@example.org', 'A+', NULL, '117', 135, 3.46, '2022-03-04', '2022-03-04', 'SPRING 2021', '2017', '4.92', '2017', '4.11', 1, 3047.12, 0, 0, 1, NULL, NULL),
(72, 'Prof. Bradford Nienow IV', '750', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'BBA', 'Management', 'Accounting', 2019, 2013, 2019, 'Torrance Watsica', 'Florida Lehner', '1-424-717-5763', 'nellie29@example.org', 'AB+', NULL, '100', 148, 3.96, '2022-05-14', '2022-05-14', 'SUMMER 2023', '2019', '4.03', '2019', '3.51', 0, 0.00, 1, 0, 0, NULL, NULL),
(73, 'Cierra Kuhlman I', '453', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'MBA', 'Finance', 'Business Math', 2016, 2015, 2016, 'Erik Robel', 'Leilani Haag', '+15132189804', 'grimes.nannie@example.org', 'AB-', NULL, '116', 129, 2.68, '2023-02-24', '2023-02-24', 'FALL 2020', '2016', '4.24', '2016', '4.58', 0, 0.00, 0, 0, 0, NULL, NULL),
(74, 'Dr. Stephanie Davis', '494', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'ELL', 'HRM', 'Business Math', 2017, 2012, 2017, 'Dr. Dino Rohan III', 'Dana Daugherty', '1-443-863-2048', 'fadel.allan@example.com', 'A-', NULL, '119', 129, 3.10, '2023-04-16', '2023-04-16', 'SPRING 2021', '2017', '4.92', '2017', '4.85', 1, 2146.30, 0, 0, 1, NULL, NULL),
(75, 'Dr. Dale Kutch', '498', 'BSc. in Computer Science & Engineering', 'ELL 8', 'ELL', 'HRM', 'Business Math', 2016, 2015, 2016, 'Marley Spinka', 'Dariana Adams', '+1-415-546-2753', 'kautzer.damion@example.org', 'O-', NULL, '125', 126, 3.85, '2022-08-11', '2022-08-11', 'SUMMER 2020', '2016', '4.37', '2016', '4.56', 0, 0.00, 0, 1, 1, NULL, NULL),
(76, 'Mrs. Candice Strosin Jr.', '611', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'ELL', 'Management', 'Statistics', 2019, 2012, 2019, 'Baylee Kovacek', 'Mallie Dibbert', '361.524.0005', 'arvid.auer@example.net', 'AB+', NULL, '101', 138, 3.54, '2023-03-19', '2023-03-19', 'SPRING 2023', '2019', '3.67', '2019', '3.89', 0, 0.00, 0, 1, 0, NULL, NULL),
(77, 'Rosario Metz III', '016', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'ELL', 'Marketing', 'Statistics', 2016, 2016, 2016, 'Jamel Kiehn', 'Prof. Isabel Mayer', '904-654-3156', 'murazik.pablo@example.org', 'O-', NULL, '120', 120, 3.57, '2022-04-02', '2022-04-02', 'FALL 2020', '2016', '3.98', '2016', '3.95', 0, 0.00, 0, 0, 0, NULL, NULL),
(78, 'Priscilla Wehner', '253', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'CSE', 'Management', 'Economics', 2020, 2015, 2020, 'Stefan Paucek', 'Irma Breitenberg', '+1.352.975.4584', 'sporer.davon@example.net', 'AB+', NULL, '127', 148, 3.44, '2022-09-09', '2022-09-09', 'SUMMER 2024', '2020', '4.09', '2020', '3.86', 0, 0.00, 1, 1, 1, NULL, NULL),
(79, 'Lauryn Sawayn', '028', 'BSc. in Computer Science & Engineering', 'LLB 15', 'LLB', 'HRM', 'Business Math', 2018, 2013, 2018, 'Rodrick Mueller', 'Rhea Adams', '612-779-0774', 'addison.turner@example.com', 'AB-', NULL, '116', 147, 3.99, '2022-11-23', '2022-11-23', 'SPRING 2022', '2018', '3.57', '2018', '4.72', 1, 3548.18, 1, 0, 1, NULL, NULL),
(80, 'Armani Lowe III', '188', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'ELL', 'HRM', 'Economics', 2016, 2014, 2016, 'Mr. Ibrahim Koelpin', 'Miss Jacklyn D\'Amore', '+1 (984) 212-9948', 'hackett.sandrine@example.net', 'A+', NULL, '129', 138, 3.12, '2022-12-11', '2022-12-11', 'SUMMER 2020', '2016', '3.89', '2016', '3.9', 0, 0.00, 0, 1, 0, NULL, NULL),
(81, 'Crystel Klein', '153', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'BBA', 'Marketing', 'Statistics', 2016, 2012, 2016, 'Evert Quitzon', 'Ms. Jennyfer Morissette DVM', '+1-703-248-9227', 'ardith94@example.net', 'B-', NULL, '118', 130, 2.59, '2023-01-05', '2023-01-05', 'SPRING 2020', '2016', '4.99', '2016', '4.88', 0, 0.00, 1, 0, 1, NULL, NULL),
(82, 'Mr. Lukas Stoltenberg II', '313', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'ELL', 'Marketing', 'Business Math', 2020, 2016, 2020, 'Jayme Lynch MD', 'Esmeralda Schiller MD', '281-354-8318', 'bbayer@example.net', 'B-', NULL, '100', 132, 2.52, '2022-12-28', '2022-12-28', 'SUMMER 2024', '2020', '3.85', '2020', '4.81', 1, 1938.16, 1, 0, 0, NULL, NULL),
(83, 'Mr. Walker Bruen IV', '048', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'ELL', 'HRM', 'Statistics', 2018, 2015, 2018, 'Prof. Gussie Beer', 'Liza Wehner', '+17866760885', 'conroy.marcel@example.org', 'B-', NULL, '117', 120, 2.75, '2022-10-12', '2022-10-12', 'SPRING 2022', '2018', '4.39', '2018', '4.53', 1, 4838.99, 1, 1, 1, NULL, NULL),
(84, 'Delphine Littel', '234', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'BBA', 'Management', 'Economics', 2018, 2014, 2018, 'Rey Glover', 'Amalia Kiehn', '+1.309.205.3608', 'kutch.frida@example.net', 'B-', NULL, '104', 146, 3.74, '2023-08-04', '2023-08-04', 'FALL 2022', '2018', '4.76', '2018', '3.78', 1, 3032.61, 0, 0, 1, NULL, NULL),
(85, 'Yasmeen Crona', '683', 'BSc. in Computer Science & Engineering', 'ELL 8', 'ELL', 'Marketing', 'Statistics', 2018, 2012, 2018, 'Triston Barrows', 'Theresa Collier', '231.520.3770', 'xmertz@example.net', 'A-', NULL, '119', 122, 2.92, '2023-08-31', '2023-08-31', 'FALL 2022', '2018', '4.7', '2018', '4.71', 0, 0.00, 1, 0, 1, NULL, NULL),
(86, 'Genesis Treutel', '018', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'MBA', 'Marketing', 'Business Math', 2020, 2014, 2020, 'Carol Auer', 'Willow Ferry', '681.566.4738', 'schmeler.johnathon@example.org', 'O-', NULL, '101', 131, 2.83, '2022-01-30', '2022-01-30', 'FALL 2024', '2020', '4.85', '2020', '3.57', 1, 2124.83, 0, 1, 1, NULL, NULL),
(87, 'Prudence Jakubowski', '670', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'MCSE', 'Finance', 'Economics', 2020, 2015, 2020, 'Derick Goodwin', 'Prof. Christy Mohr Jr.', '276-551-6699', 'caesar11@example.com', 'A-', NULL, '105', 125, 3.50, '2022-05-20', '2022-05-20', 'SUMMER 2024', '2020', '3.87', '2020', '4.21', 0, 0.00, 0, 0, 0, NULL, NULL),
(88, 'Isobel Hickle', '254', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'MCSE', 'Management', 'Economics', 2020, 2014, 2020, 'Malachi Predovic', 'Gloria Haley IV', '1-813-483-6177', 'caden87@example.org', 'AB+', NULL, '107', 133, 2.60, '2023-01-25', '2023-01-25', 'FALL 2024', '2020', '4.2', '2020', '4.24', 1, 1846.54, 1, 1, 0, NULL, NULL),
(89, 'Deja Harber', '644', 'BSc. in Computer Science & Engineering', 'CSE 7', 'CSE', 'Finance', 'Business Math', 2016, 2015, 2016, 'Keenan Weimann V', 'Noemie Stehr', '+1-731-861-7523', 'jfisher@example.net', 'A+', NULL, '113', 131, 2.78, '2023-10-02', '2023-10-02', 'FALL 2020', '2016', '3.76', '2016', '4.79', 0, 0.00, 1, 0, 1, NULL, NULL),
(90, 'Gudrun Nolan', '331', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'MBA', 'Finance', 'Business Math', 2018, 2014, 2018, 'Dr. Nelson Oberbrunner III', 'Eve Kohler', '+17817735525', 'nola82@example.net', 'A-', NULL, '119', 140, 3.76, '2022-12-22', '2022-12-22', 'SPRING 2022', '2018', '4.84', '2018', '3.65', 0, 0.00, 1, 1, 0, NULL, NULL),
(91, 'Dr. Nikolas Bahringer', '911', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'CSE', 'Management', 'Statistics', 2016, 2016, 2016, 'Morris Pacocha', 'Kristy Wolf', '+1-505-662-7021', 'vito.kirlin@example.com', 'A+', NULL, '113', 144, 3.88, '2023-11-11', '2023-11-11', 'SUMMER 2020', '2016', '3.91', '2016', '4.07', 0, 0.00, 0, 0, 0, NULL, NULL),
(92, 'Jewell Doyle', '302', 'BSc. in Computer Science & Engineering', 'CSE 7', 'ELL', 'Management', 'Statistics', 2020, 2012, 2020, 'Mallory Kunze', 'Mariana Koss IV', '940-770-3912', 'rmarks@example.net', 'O-', NULL, '101', 145, 2.90, '2022-08-12', '2022-08-12', 'SUMMER 2024', '2020', '4.75', '2020', '4.68', 1, 1102.64, 0, 0, 1, NULL, NULL),
(93, 'Dedrick Grant', '619', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'MCSE', 'Marketing', 'Statistics', 2018, 2012, 2018, 'Enrico Hagenes', 'Jaclyn Mante', '435-969-1788', 'tamara.gorczany@example.com', 'AB+', NULL, '101', 142, 3.59, '2022-09-26', '2022-09-26', 'FALL 2022', '2018', '4.96', '2018', '4.12', 0, 0.00, 0, 0, 0, NULL, NULL),
(94, 'Judd Crona', '707', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'BBA', 'Management', 'Accounting', 2018, 2012, 2018, 'Mr. Holden Beier', 'Miss Elody Towne', '480.313.2090', 'jefferey48@example.com', 'B-', NULL, '105', 140, 3.89, '2022-03-09', '2022-03-09', 'SUMMER 2022', '2018', '4.93', '2018', '4.31', 0, 0.00, 1, 0, 0, NULL, NULL),
(95, 'Oliver Kemmer', '220', 'BSc. in Computer Science & Engineering', 'BBA 12', 'LLB', 'HRM', 'Economics', 2019, 2015, 2019, 'Alvis Ortiz V', 'Emily Rowe', '+1.678.246.2655', 'brown.wintheiser@example.com', 'AB-', NULL, '112', 135, 2.88, '2023-07-13', '2023-07-13', 'SUMMER 2023', '2019', '4.82', '2019', '3.89', 1, 2614.56, 1, 1, 1, NULL, NULL),
(96, 'Morris Stroman', '815', 'BSc. in Computer Science & Engineering', 'BBA 12', 'MCSE', 'HRM', 'Accounting', 2018, 2012, 2018, 'Nathanael Lubowitz', 'Mrs. Zelma Klocko', '1-620-803-3376', 'dee70@example.org', 'A+', NULL, '118', 148, 2.87, '2022-03-12', '2022-03-12', 'SUMMER 2022', '2018', '3.59', '2018', '4.16', 1, 4225.19, 0, 1, 0, NULL, NULL),
(97, 'Dr. Norris Wilderman', '805', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'LLB', 'HRM', 'Economics', 2016, 2012, 2016, 'Adolphus Hyatt', 'Dejah Kertzmann', '743-909-4317', 'mandy.mcclure@example.com', 'O+', NULL, '101', 129, 3.04, '2022-03-30', '2022-03-30', 'FALL 2020', '2016', '3.62', '2016', '4.82', 0, 0.00, 1, 0, 1, NULL, NULL),
(98, 'Johnnie Boyer', '434', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'BBA', 'Finance', 'Economics', 2019, 2014, 2019, 'Morris Harber I', 'Ms. Anissa Roob', '(380) 752-8416', 'ryder.spencer@example.net', 'B+', NULL, '115', 150, 3.51, '2023-03-14', '2023-03-14', 'SUMMER 2023', '2019', '4.3', '2019', '4.21', 1, 13.22, 1, 1, 1, NULL, NULL),
(99, 'Darren Wyman', '096', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'MBA', 'Management', 'Business Math', 2020, 2013, 2020, 'Mr. Jay Walter V', 'Irma Mayert', '+1 (779) 828-8057', 'qtowne@example.net', 'AB+', NULL, '122', 135, 3.44, '2022-02-14', '2022-02-14', 'SUMMER 2024', '2020', '3.63', '2020', '4.21', 0, 0.00, 0, 1, 1, NULL, NULL),
(100, 'Ms. Aida Jones Sr.', '581', 'BSc. in Computer Science & Engineering', 'LLB 15', 'CSE', 'Finance', 'Economics', 2018, 2015, 2018, 'Connor Ernser', 'Nedra West MD', '413.874.5310', 'tracey.steuber@example.org', 'A+', NULL, '128', 127, 3.28, '2023-07-29', '2023-07-29', 'FALL 2022', '2018', '4.08', '2018', '3.64', 1, 2733.85, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2023_12_12_093510_create_graduate_lists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduate_lists_id` int DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `graduate_lists`
--
ALTER TABLE `graduate_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduate_lists`
--
ALTER TABLE `graduate_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
