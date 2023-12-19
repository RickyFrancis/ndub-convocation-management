-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2023 at 06:42 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u189361186_convocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduate_lists`
--

CREATE TABLE `graduate_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `program` varchar(255) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `minor` varchar(50) NOT NULL,
  `academic_year` year(4) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `credit_earned` int(11) NOT NULL,
  `cgpa` double(8,2) NOT NULL,
  `result_publish_date` date NOT NULL,
  `passing_trimester` varchar(50) NOT NULL,
  `account_clearance` tinyint(1) NOT NULL,
  `due_amount` double(100,2) NOT NULL,
  `library_clearance` tinyint(1) NOT NULL,
  `administrative_clearance` tinyint(1) NOT NULL,
  `department_clearance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graduate_lists`
--

INSERT INTO `graduate_lists` (`id`, `created_at`, `updated_at`, `name`, `student_id`, `program`, `batch`, `major`, `minor`, `academic_year`, `father_name`, `mother_name`, `phone`, `email`, `blood_group`, `credit_earned`, `cgpa`, `result_publish_date`, `passing_trimester`, `account_clearance`, `due_amount`, `library_clearance`, `administrative_clearance`, `department_clearance`) VALUES
(101, NULL, NULL, 'Fabian Anderson', '100', 'BSc. in Computer Science & Engineering', 'LLB 15', 'Marketing', 'Business Math', 2017, 'Dr. Madison Herman', 'Ms. Gilda Buckridge DDS', '660-884-0523', 'imraz@example.com', 'B-', 147, 3.81, '2023-05-05', 'SUMMER 2021', 0, 0.00, 1, 1, 0),
(102, NULL, NULL, 'Nakia Prohaska', '574', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'Management', 'Economics', 2019, 'Jimmie Turner', 'Dr. Clementina Mayert II', '+1.458.608.6492', 'kovacek.maeve@example.com', 'A+', 135, 3.52, '2023-11-19', 'SPRING 2023', 1, 2286.58, 0, 0, 0),
(103, NULL, NULL, 'Hershel Barton DVM', '840', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'HRM', 'Accounting', 2019, 'Abraham Koch', 'Miss Janis McGlynn IV', '435.401.9377', 'bchristiansen@example.org', 'B+', 141, 3.03, '2022-06-25', 'FALL 2023', 0, 0.00, 0, 1, 0),
(104, NULL, NULL, 'Aubrey Ratke', '951', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'Finance', 'Statistics', 2018, 'Dr. Wilmer Dickinson MD', 'Litzy Blanda', '1-386-298-1007', 'hilma69@example.net', 'AB+', 144, 3.36, '2022-04-20', 'FALL 2022', 0, 0.00, 1, 1, 0),
(105, NULL, NULL, 'Steve Lehner', '714', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'Marketing', 'Economics', 2019, 'Dr. Taurean Jacobs', 'Jacynthe Gaylord', '351-703-0435', 'alejandrin.runolfsdottir@example.org', 'AB-', 132, 2.59, '2023-08-17', 'FALL 2023', 0, 0.00, 0, 0, 1),
(106, NULL, NULL, 'Ardith Marvin Sr.', '227', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'Marketing', 'Business Math', 2016, 'Keshawn Johns', 'Polly Dooley', '(283) 517-9329', 'luettgen.lydia@example.org', 'AB+', 146, 2.84, '2023-04-08', 'SUMMER 2020', 1, 258.20, 1, 1, 0),
(107, NULL, NULL, 'Margret Mills', '614', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'HRM', 'Business Math', 2019, 'Gideon Schaefer', 'Cecilia Gleason', '+1-954-358-3057', 'zdonnelly@example.net', 'O+', 142, 2.95, '2022-12-16', 'SUMMER 2023', 0, 0.00, 1, 1, 1),
(108, NULL, NULL, 'Keenan Beahan MD', '692', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'Finance', 'Economics', 2016, 'Sammie Gerlach V', 'Mrs. Helena Kutch DVM', '+15084900218', 'anissa.crooks@example.org', 'B-', 137, 3.89, '2022-01-27', 'FALL 2020', 0, 0.00, 1, 0, 1),
(109, NULL, NULL, 'Dr. Reuben Adams II', '092', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'Marketing', 'Economics', 2016, 'Prof. Skylar Wiza PhD', 'Dr. Hollie Murray III', '401-595-9068', 'alana27@example.org', 'B-', 134, 3.82, '2022-09-24', 'SPRING 2020', 1, 4135.94, 1, 0, 0),
(110, NULL, NULL, 'Casandra Renner III', '669', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'Management', 'Statistics', 2016, 'Randal Effertz', 'Alysa Douglas', '925.618.8033', 'obergnaum@example.org', 'A+', 140, 2.80, '2022-01-15', 'SPRING 2020', 0, 0.00, 1, 1, 1),
(111, NULL, NULL, 'Mrs. Rita Schaefer', '931', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'Finance', 'Business Math', 2019, 'Colt Batz', 'Rose Kihn', '239-751-4694', 'wilfred.barton@example.com', 'O+', 123, 3.57, '2023-09-22', 'SPRING 2023', 0, 0.00, 1, 1, 0),
(112, NULL, NULL, 'Prof. Santa Conn PhD', '153', 'BSc. in Computer Science & Engineering', 'LLB 15', 'Finance', 'Business Math', 2018, 'Malcolm Kirlin', 'Otha Rosenbaum', '+1-240-669-2114', 'asha71@example.org', 'O+', 147, 3.54, '2023-05-10', 'SUMMER 2022', 1, 3075.83, 1, 0, 0),
(113, NULL, NULL, 'Israel Herman', '656', 'BSc. in Computer Science & Engineering', 'BBA 12', 'Finance', 'Accounting', 2020, 'Mr. Nasir Bergstrom PhD', 'Chelsie Kessler III', '+1 (463) 545-4847', 'cornell16@example.net', 'O-', 146, 3.60, '2022-12-20', 'SPRING 2024', 0, 0.00, 0, 0, 1),
(114, NULL, NULL, 'Maeve Torp', '114', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Finance', 'Accounting', 2020, 'Royce Walker', 'Asia Padberg', '680.583.8438', 'west.bobbie@example.com', 'A+', 139, 2.74, '2021-12-17', 'FALL 2024', 0, 0.00, 0, 1, 1),
(115, NULL, NULL, 'Petra Kuhn', '404', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'Management', 'Business Math', 2019, 'Dorthy Heidenreich', 'Miss Stacy Cruickshank III', '240.725.7450', 'sammy79@example.net', 'B+', 145, 3.77, '2022-11-15', 'FALL 2023', 0, 0.00, 1, 0, 1),
(116, NULL, NULL, 'Dr. Annalise Beahan', '127', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'Marketing', 'Economics', 2017, 'Dr. Benton Rosenbaum MD', 'Ashlee Leffler', '1-636-416-0140', 'pschmidt@example.com', 'A+', 140, 3.14, '2023-08-19', 'SPRING 2021', 1, 4676.01, 1, 0, 1),
(117, NULL, NULL, 'Dr. Walter Hickle', '085', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Finance', 'Economics', 2017, 'Pablo Kreiger', 'Dessie Spinka', '+1.445.634.4904', 'meggie.parisian@example.net', 'B+', 133, 3.20, '2022-09-19', 'SUMMER 2021', 0, 0.00, 1, 0, 1),
(118, NULL, NULL, 'Mrs. Linda Upton DVM', '733', 'BSc. in Computer Science & Engineering', 'CSE 7', 'Marketing', 'Business Math', 2016, 'Mr. Roderick Vandervort I', 'Alicia Gutmann', '515-866-9106', 'verona.roberts@example.org', 'O+', 129, 3.36, '2023-03-23', 'SPRING 2020', 1, 579.63, 1, 1, 1),
(119, NULL, NULL, 'Marlon Mills', '750', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'Marketing', 'Accounting', 2017, 'Lambert Cormier', 'Ms. Kaci Zulauf IV', '612-602-0765', 'smitham.kaci@example.org', 'O-', 121, 3.66, '2023-02-20', 'FALL 2021', 1, 4527.77, 0, 0, 0),
(120, NULL, NULL, 'Macey Bashirian', '571', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'Finance', 'Statistics', 2018, 'Gideon Bradtke', 'Estell Predovic', '1-570-396-9283', 'donna.hill@example.com', 'AB-', 127, 3.85, '2023-11-19', 'FALL 2022', 0, 0.00, 1, 1, 1),
(121, NULL, NULL, 'Kiley Littel', '108', 'BSc. in Computer Science & Engineering', 'LLB 15', 'Marketing', 'Accounting', 2018, 'Prof. Bartholome Stokes', 'Lenora Koss', '+1.680.757.7504', 'heller.howell@example.org', 'B-', 121, 3.15, '2023-08-02', 'SUMMER 2022', 0, 0.00, 0, 1, 1),
(122, NULL, NULL, 'Alivia Roob', '451', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'Management', 'Accounting', 2020, 'Waino Streich MD', 'Myrtice Johnston', '+1.661.719.3976', 'rosemary71@example.org', 'AB-', 120, 3.22, '2023-03-28', 'SPRING 2024', 1, 736.79, 1, 1, 0),
(123, NULL, NULL, 'Noble Swaniawski', '866', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'Management', 'Accounting', 2020, 'Ari Okuneva', 'Dr. Lavina Parker DDS', '270-995-4360', 'bernhard.carlee@example.net', 'AB-', 146, 3.47, '2022-07-12', 'SUMMER 2024', 0, 0.00, 0, 0, 1),
(124, NULL, NULL, 'Martine Crooks V', '050', 'BSc. in Computer Science & Engineering', 'BBA 12', 'Management', 'Statistics', 2019, 'Royce Miller', 'Janessa Streich', '+1-559-618-5359', 'uconroy@example.net', 'O+', 128, 2.69, '2023-05-06', 'SUMMER 2023', 0, 0.00, 0, 0, 1),
(125, NULL, NULL, 'Gay Mraz', '608', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'Marketing', 'Accounting', 2020, 'Russell Heidenreich', 'Ms. Kathleen Metz', '305-856-1188', 'cconroy@example.net', 'B-', 147, 2.50, '2023-02-02', 'FALL 2024', 1, 2743.72, 0, 1, 0),
(126, NULL, NULL, 'Loyce Nikolaus', '783', 'BSc. in Computer Science & Engineering', 'BBA 12', 'Marketing', 'Economics', 2017, 'Roosevelt Abshire DDS', 'Daphne Gaylord V', '+15205714963', 'ydoyle@example.com', 'B+', 131, 3.23, '2021-12-23', 'SUMMER 2021', 0, 0.00, 1, 0, 1),
(127, NULL, NULL, 'Troy Willms III', '096', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'HRM', 'Business Math', 2016, 'Quentin Lynch', 'Tess Wiegand', '+1-712-549-9818', 'pdietrich@example.com', 'AB-', 137, 3.57, '2022-05-21', 'FALL 2020', 0, 0.00, 1, 0, 1),
(128, NULL, NULL, 'Mrs. America Fadel', '828', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Finance', 'Statistics', 2018, 'Mr. Herman Rolfson', 'Araceli Lind', '+1-385-668-9268', 'bergnaum.diego@example.org', 'A+', 124, 2.97, '2023-07-21', 'SPRING 2022', 1, 4140.38, 1, 0, 0),
(129, NULL, NULL, 'Mrs. Gail Hermann', '139', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Marketing', 'Economics', 2018, 'Kory Miller', 'Ms. Laurianne Gutkowski MD', '351-869-7722', 'zulauf.cassandra@example.org', 'B+', 148, 3.84, '2023-11-13', 'SPRING 2022', 0, 0.00, 0, 1, 1),
(130, NULL, NULL, 'Elsie Legros', '383', 'BSc. in Computer Science & Engineering', 'BBA 12', 'Management', 'Statistics', 2018, 'Dr. Mohammad Lakin Jr.', 'Ms. Danika Mayert', '1-743-746-4246', 'yessenia25@example.net', 'AB-', 144, 3.57, '2023-07-27', 'SPRING 2022', 1, 4884.54, 0, 0, 0),
(131, NULL, NULL, 'Ana Wunsch', '003', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'Management', 'Statistics', 2018, 'Mr. Kian Hudson', 'Bernadine Braun', '337-749-3764', 'tyra.sanford@example.com', 'A+', 147, 3.75, '2022-05-30', 'FALL 2022', 1, 1077.83, 0, 0, 0),
(132, NULL, NULL, 'Lindsey Russel', '804', 'BSc. in Computer Science & Engineering', 'LLB 15', 'Management', 'Accounting', 2018, 'Tremayne Renner', 'Zola Feeney', '+17087558294', 'jdamore@example.com', 'A+', 142, 3.32, '2022-11-14', 'SUMMER 2022', 1, 469.83, 0, 1, 0),
(133, NULL, NULL, 'Kathryne Walter', '731', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Finance', 'Statistics', 2020, 'Ola Kuvalis', 'Prof. Alexandrea Maggio Jr.', '+1-641-263-4281', 'marquardt.heidi@example.com', 'B+', 131, 3.20, '2023-09-20', 'SUMMER 2024', 1, 2742.92, 1, 0, 1),
(134, NULL, NULL, 'Dr. Nicolas Gottlieb', '955', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'HRM', 'Business Math', 2017, 'Harvey Kuhn', 'Dr. Mariane Thiel II', '1-669-209-4275', 'king.nona@example.net', 'O-', 131, 3.72, '2023-11-12', 'SPRING 2021', 1, 1572.03, 1, 1, 0),
(135, NULL, NULL, 'Mac Collins', '998', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'Management', 'Accounting', 2018, 'Reginald Ebert', 'Maud Huels', '1-480-718-4140', 'shakira45@example.net', 'B+', 143, 3.72, '2021-12-19', 'SPRING 2022', 1, 642.31, 1, 1, 1),
(136, NULL, NULL, 'Selmer Huels DVM', '491', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Marketing', 'Economics', 2020, 'Kirk Streich', 'Joy Champlin DVM', '+1.725.416.3189', 'clay.olson@example.com', 'A+', 146, 2.57, '2023-11-26', 'SUMMER 2024', 1, 2387.43, 1, 0, 1),
(137, NULL, NULL, 'Jalon Mayert', '976', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'HRM', 'Business Math', 2016, 'Loy Douglas', 'Mrs. Lila Feeney', '828-268-0151', 'charity.pollich@example.com', 'B-', 121, 2.70, '2022-08-13', 'SUMMER 2020', 0, 0.00, 0, 0, 1),
(138, NULL, NULL, 'Dr. Ara Kozey', '488', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'HRM', 'Accounting', 2018, 'Kieran Ankunding', 'Graciela Schumm', '351.413.0082', 'kallie.fahey@example.org', 'AB+', 132, 3.36, '2022-05-23', 'SUMMER 2022', 1, 432.14, 0, 0, 0),
(139, NULL, NULL, 'Ms. Jammie Rippin', '659', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'Marketing', 'Economics', 2020, 'Jett Labadie', 'Aurelie Parisian Sr.', '458-974-7523', 'hammes.mina@example.org', 'B-', 121, 2.93, '2023-04-19', 'SPRING 2024', 0, 0.00, 0, 1, 1),
(140, NULL, NULL, 'Dr. Sylvia Crooks DVM', '306', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'HRM', 'Business Math', 2016, 'Mr. Heber Torp V', 'Clarabelle Cronin', '+15616405357', 'emery06@example.com', 'B+', 134, 2.87, '2022-03-16', 'SUMMER 2020', 1, 1226.19, 1, 1, 0),
(141, NULL, NULL, 'Monty Stamm', '142', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'Finance', 'Economics', 2018, 'Mr. Andre Runte', 'Miss Joannie O\'Connell', '+1.512.252.7838', 'brekke.drew@example.org', 'O+', 130, 2.71, '2023-11-08', 'SUMMER 2022', 0, 0.00, 1, 0, 0),
(142, NULL, NULL, 'Dr. Green Welch', '462', 'Bachelor of Business Administration (BBA)', 'LLB 15', 'Finance', 'Accounting', 2017, 'Darrion Runolfsson', 'Dr. Joannie Jacobson MD', '+1.425.962.3189', 'alverta.little@example.com', 'O+', 147, 2.73, '2022-12-24', 'SUMMER 2021', 1, 2845.50, 0, 1, 1),
(143, NULL, NULL, 'Sim Weissnat', '028', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Marketing', 'Economics', 2016, 'Dr. Abelardo Brakus', 'Norene Hill', '979-993-9713', 'juliana12@example.org', 'B-', 125, 3.73, '2023-11-29', 'SPRING 2020', 0, 0.00, 1, 1, 0),
(144, NULL, NULL, 'Ed Hagenes', '293', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'Finance', 'Statistics', 2019, 'Prof. Henderson Ondricka', 'Mrs. Petra Wehner V', '(972) 937-5242', 'oleannon@example.org', 'AB-', 121, 3.62, '2022-04-03', 'SPRING 2023', 1, 641.24, 0, 1, 0),
(145, NULL, NULL, 'Jonathon Runolfsdottir', '632', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'HRM', 'Economics', 2019, 'Jarvis Cormier', 'Leann Donnelly II', '+1.985.598.1862', 'treutel.ahmad@example.net', 'A+', 122, 3.37, '2022-12-04', 'SPRING 2023', 1, 1087.67, 0, 0, 0),
(146, NULL, NULL, 'Jacquelyn Senger', '195', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'Management', 'Statistics', 2018, 'Ruben Cassin II', 'Bessie Wiza', '+1-248-524-4691', 'ybeer@example.com', 'B-', 130, 2.51, '2023-10-29', 'SPRING 2022', 1, 3852.66, 1, 1, 0),
(147, NULL, NULL, 'Ms. Melba Kertzmann', '573', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'HRM', 'Economics', 2016, 'Barney Gorczany', 'Hosea Wisoky', '662-981-4682', 'river.parisian@example.net', 'A-', 134, 3.32, '2023-11-22', 'SPRING 2020', 0, 0.00, 1, 1, 1),
(148, NULL, NULL, 'Darrion Lowe', '814', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'HRM', 'Accounting', 2017, 'Geovanny Watsica', 'Malinda Littel', '+1 (252) 649-5989', 'mccullough.leopold@example.org', 'O-', 140, 3.47, '2023-05-31', 'FALL 2021', 1, 2557.15, 0, 1, 1),
(149, NULL, NULL, 'Leora Kerluke', '334', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'HRM', 'Economics', 2018, 'Prof. Erich McKenzie', 'Ona Cummings', '580-945-3534', 'gunnar14@example.com', 'A+', 125, 2.66, '2022-03-06', 'FALL 2022', 0, 0.00, 0, 1, 1),
(150, NULL, NULL, 'Mr. Buck Pollich', '782', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'Marketing', 'Business Math', 2020, 'Wiley Pfeffer', 'Lexie Brakus MD', '+1.925.253.2638', 'lind.tiana@example.com', 'B+', 134, 3.20, '2022-02-22', 'SPRING 2024', 1, 1406.77, 0, 1, 1),
(151, NULL, NULL, 'Ivory Boyer', '918', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Marketing', 'Statistics', 2017, 'Melvin Kautzer', 'Minnie Conroy', '1-870-466-0682', 'seth.padberg@example.net', 'B-', 130, 3.18, '2023-07-05', 'SUMMER 2021', 1, 2917.34, 1, 1, 0),
(152, NULL, NULL, 'Mrs. Tabitha Swaniawski', '030', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Finance', 'Economics', 2018, 'Irwin Hudson', 'Sandrine Gibson', '1-941-342-0623', 'conor.wehner@example.net', 'A+', 132, 3.64, '2023-06-08', 'SUMMER 2022', 1, 3593.54, 1, 1, 0),
(153, NULL, NULL, 'Dr. Kenyon Heller', '354', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'Marketing', 'Economics', 2017, 'Dr. Eleazar Fritsch', 'Christelle Stehr', '863.466.0229', 'amanda.abernathy@example.com', 'O+', 141, 3.88, '2022-07-27', 'SPRING 2021', 1, 1988.99, 1, 0, 0),
(154, NULL, NULL, 'Miss Lupe Franecki', '984', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'Finance', 'Statistics', 2018, 'Matteo Spinka', 'Prof. Emma Kris IV', '+1-765-661-9776', 'mcartwright@example.org', 'A+', 132, 3.40, '2022-12-12', 'SUMMER 2022', 0, 0.00, 0, 0, 1),
(155, NULL, NULL, 'Erna Nikolaus DVM', '343', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Marketing', 'Economics', 2018, 'Lexus Bauch', 'Ashtyn Torphy III', '+1-346-324-4823', 'benjamin.zboncak@example.net', 'A+', 144, 3.82, '2023-01-24', 'FALL 2022', 1, 617.17, 0, 1, 0),
(156, NULL, NULL, 'Leonard Huels', '961', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'Marketing', 'Accounting', 2020, 'Camron Jenkins', 'Hilma Weissnat', '(520) 363-9483', 'bonita.turner@example.org', 'AB+', 127, 3.83, '2023-03-31', 'FALL 2024', 0, 0.00, 0, 0, 0),
(157, NULL, NULL, 'Vernie Okuneva', '393', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'Management', 'Statistics', 2017, 'Dr. Rudy Mraz', 'Ms. Cierra Armstrong DDS', '260.486.6814', 'ethyl36@example.net', 'B-', 149, 2.81, '2023-01-24', 'FALL 2021', 1, 3684.33, 0, 0, 0),
(158, NULL, NULL, 'Mrs. Lessie Schroeder I', '303', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'HRM', 'Economics', 2018, 'Raheem Kassulke', 'Judy Gorczany I', '+1-678-247-9909', 'armstrong.johan@example.org', 'O+', 131, 3.16, '2022-03-16', 'SUMMER 2022', 0, 0.00, 0, 0, 0),
(159, NULL, NULL, 'Prof. Bridget Conroy Sr.', '295', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Marketing', 'Statistics', 2019, 'Demarco Johnston', 'Christiana Mraz', '972.220.0298', 'trever.gottlieb@example.com', 'A+', 145, 3.29, '2022-12-09', 'SPRING 2023', 1, 3609.24, 0, 0, 0),
(160, NULL, NULL, 'Randi Mohr MD', '447', 'Bachelor of Business Administration (BBA)', 'BBA 12', 'Finance', 'Economics', 2016, 'Arnaldo Hickle', 'Carley Rolfson', '+1.331.722.6283', 'meghan20@example.com', 'B+', 140, 3.24, '2023-03-02', 'SUMMER 2020', 0, 0.00, 0, 0, 1),
(161, NULL, NULL, 'Saul Pacocha', '138', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'Finance', 'Accounting', 2018, 'Alford Adams', 'Minnie Pouros III', '201-569-5331', 'cruickshank.fay@example.com', 'B-', 130, 3.54, '2023-05-18', 'FALL 2022', 1, 4049.68, 0, 0, 1),
(162, NULL, NULL, 'Kody Mraz', '013', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'HRM', 'Accounting', 2019, 'Lindsey Ziemann', 'Annalise Rice', '+1 (201) 677-9445', 'langworth.schuyler@example.net', 'B-', 127, 3.91, '2023-01-27', 'SPRING 2023', 1, 2191.12, 0, 0, 1),
(163, NULL, NULL, 'Ashly Gusikowski', '115', 'BSc. in Computer Science & Engineering', 'ELL 8', 'HRM', 'Statistics', 2018, 'Lucius Jakubowski', 'Ms. Wava Labadie I', '806.617.7180', 'jammie.bechtelar@example.com', 'AB-', 125, 3.92, '2022-04-07', 'SPRING 2022', 1, 513.78, 0, 1, 0),
(164, NULL, NULL, 'Mr. Philip Haag', '989', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Management', 'Statistics', 2019, 'Zachery Batz II', 'Selina Abbott', '626-301-7492', 'marie.hodkiewicz@example.com', 'A-', 122, 2.86, '2023-09-13', 'SPRING 2023', 0, 0.00, 0, 1, 0),
(165, NULL, NULL, 'Reece Johnson', '326', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'Marketing', 'Statistics', 2020, 'Mr. Eloy Smith', 'Rosalyn Stanton', '832.484.5683', 'deon.daugherty@example.com', 'B+', 122, 3.49, '2023-01-24', 'SPRING 2024', 1, 1033.08, 0, 1, 0),
(166, NULL, NULL, 'Dr. Karine Hermiston', '184', 'BSc. in Computer Science & Engineering', 'CSE 7', 'Finance', 'Economics', 2017, 'Roel Price', 'Asa Strosin', '+1 (352) 570-1328', 'jada33@example.com', 'O+', 150, 2.74, '2023-10-24', 'SUMMER 2021', 1, 2987.38, 1, 1, 1),
(167, NULL, NULL, 'Jonathon Hoppe MD', '173', 'Bachelor of Laws [LL.B.(Hons.)]', 'LLB 15', 'Finance', 'Business Math', 2020, 'Mr. Vincenzo Yundt', 'Vida Schoen', '(435) 672-7538', 'sgleichner@example.net', 'AB+', 147, 2.88, '2023-07-25', 'SPRING 2024', 0, 0.00, 1, 0, 0),
(168, NULL, NULL, 'Jabari Parisian Sr.', '963', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Marketing', 'Business Math', 2018, 'Mr. Mateo Doyle V', 'Icie Tillman', '(628) 515-5182', 'doyle.klein@example.com', 'A+', 135, 3.47, '2023-10-16', 'SUMMER 2022', 1, 141.86, 1, 1, 0),
(169, NULL, NULL, 'Dr. Cora McKenzie', '950', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Finance', 'Accounting', 2017, 'Mr. Stewart Goldner Jr.', 'Orpha Goodwin', '+1-267-839-1508', 'purdy.felton@example.net', 'B-', 149, 3.74, '2022-06-26', 'FALL 2021', 1, 4975.53, 0, 0, 0),
(170, NULL, NULL, 'Mrs. Hassie Eichmann Jr.', '577', 'BSc. in Computer Science & Engineering', 'CSE 7', 'Marketing', 'Accounting', 2020, 'Axel Conn', 'Madelyn Gulgowski', '+1-351-432-0865', 'okonopelski@example.net', 'B-', 145, 2.87, '2022-10-18', 'FALL 2024', 0, 0.00, 0, 1, 0),
(171, NULL, NULL, 'Prof. Toy Hoppe', '801', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'Finance', 'Business Math', 2019, 'Urban Bednar', 'Marquise Nader', '352.868.2006', 'nils.bosco@example.org', 'AB+', 140, 3.86, '2023-05-31', 'FALL 2023', 0, 0.00, 0, 0, 1),
(172, NULL, NULL, 'Riley Jacobi Sr.', '789', 'Bachelor of Arts in English Language & Literature', 'ELL 8', 'Finance', 'Economics', 2017, 'Dr. Moses Halvorson', 'Ophelia Hagenes', '618-431-5115', 'shea11@example.com', 'O-', 122, 2.66, '2023-05-12', 'SUMMER 2021', 0, 0.00, 1, 1, 0),
(173, NULL, NULL, 'Casey Beatty', '041', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Marketing', 'Accounting', 2016, 'Prof. Sebastian Balistreri', 'Prof. Berniece Bergnaum Sr.', '312.294.0004', 'jbruen@example.com', 'AB-', 138, 2.80, '2022-03-04', 'FALL 2020', 1, 16.21, 0, 0, 1),
(174, NULL, NULL, 'Jamal Krajcik', '869', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'HRM', 'Statistics', 2017, 'Pietro Emmerich', 'Prof. Annetta Glover DVM', '+1.385.637.3076', 'maggio.britney@example.net', 'O+', 123, 2.92, '2022-11-04', 'FALL 2021', 0, 0.00, 0, 0, 1),
(175, NULL, NULL, 'Mr. Abraham Jakubowski IV', '977', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'HRM', 'Accounting', 2020, 'Grayson Feeney', 'Sally Effertz', '+1.402.347.3338', 'hermann.bartholome@example.org', 'B-', 143, 3.10, '2022-06-23', 'SPRING 2024', 0, 0.00, 0, 0, 0),
(176, NULL, NULL, 'Bessie Hodkiewicz', '143', 'Bachelor of Arts in English Language & Literature', 'BBA 12', 'Marketing', 'Accounting', 2016, 'Prof. Angus Dickinson Jr.', 'Orie Konopelski', '+15412650347', 'geoffrey40@example.com', 'O-', 129, 3.65, '2022-06-28', 'SPRING 2020', 1, 2517.30, 0, 1, 1),
(177, NULL, NULL, 'Mrs. Vallie Grant', '247', 'BSc. in Computer Science & Engineering', 'LLB 15', 'Finance', 'Statistics', 2016, 'Dr. Adan Wunsch IV', 'Letha Ward', '260-932-1738', 'marlee.gulgowski@example.com', 'AB-', 130, 3.61, '2023-12-09', 'FALL 2020', 1, 2501.58, 0, 0, 1),
(178, NULL, NULL, 'Prof. Frederic Huels DDS', '604', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'Finance', 'Accounting', 2018, 'Jamal Hegmann', 'Giovanna Gulgowski III', '803-882-7801', 'kamryn75@example.org', 'A+', 139, 3.20, '2023-07-15', 'SUMMER 2022', 1, 1631.87, 1, 0, 1),
(179, NULL, NULL, 'Aurelio Nitzsche', '751', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Marketing', 'Economics', 2017, 'Emery Hessel I', 'Dixie Murphy V', '1-424-349-4071', 'tbogan@example.net', 'A+', 148, 2.75, '2023-08-21', 'SUMMER 2021', 0, 0.00, 1, 1, 0),
(180, NULL, NULL, 'Clay Hintz', '243', 'BSc. in Computer Science & Engineering', 'LLB 15', 'HRM', 'Accounting', 2020, 'Prof. Justus Crist I', 'Miss Anne Beer', '1-458-653-3640', 'effertz.golda@example.org', 'AB-', 143, 3.61, '2023-11-25', 'FALL 2024', 0, 0.00, 0, 0, 1),
(181, NULL, NULL, 'Shakira Hoeger', '178', 'BSc. in Computer Science & Engineering', 'BBA 12', 'Marketing', 'Statistics', 2017, 'Fausto Kertzmann', 'Hanna Bartell', '725-678-4546', 'sibyl55@example.com', 'O+', 136, 2.76, '2021-12-27', 'SUMMER 2021', 1, 222.52, 0, 1, 0),
(182, NULL, NULL, 'Marcus Doyle MD', '048', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'Finance', 'Accounting', 2018, 'Wilhelm Grimes', 'Kayla Quitzon', '1-870-878-4499', 'jensen48@example.com', 'AB+', 132, 3.38, '2022-08-10', 'FALL 2022', 0, 0.00, 0, 1, 0),
(183, NULL, NULL, 'Kyra Dicki', '402', 'BSc. in Computer Science & Engineering', 'CSE 7', 'Marketing', 'Statistics', 2019, 'Woodrow Sporer', 'Mrs. Libbie VonRueden PhD', '+1-580-784-6827', 'leila20@example.net', 'O-', 122, 2.77, '2022-01-09', 'FALL 2023', 1, 4143.93, 0, 0, 1),
(184, NULL, NULL, 'Prof. Anita Baumbach III', '634', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'Finance', 'Economics', 2017, 'Mr. Deon Dickinson PhD', 'Miss Ericka Spinka PhD', '1-279-461-7165', 'buckridge.trey@example.com', 'B+', 149, 3.10, '2023-02-01', 'SPRING 2021', 0, 0.00, 0, 0, 1),
(185, NULL, NULL, 'Dr. Brielle Rath Sr.', '767', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'Marketing', 'Business Math', 2017, 'Montana Ebert', 'Fannie Emmerich II', '+12674171784', 'bradford.altenwerth@example.net', 'O-', 122, 3.00, '2023-04-29', 'SUMMER 2021', 0, 0.00, 0, 0, 0),
(186, NULL, NULL, 'Mr. Randy Marvin', '674', 'Bachelor of Business Administration (BBA)', 'CSE 7', 'Finance', 'Accounting', 2020, 'Newell Mann', 'Albertha Miller', '207-705-3482', 'felicita.cormier@example.com', 'A-', 146, 3.77, '2023-11-21', 'SUMMER 2024', 0, 0.00, 0, 0, 1),
(187, NULL, NULL, 'Dana Zulauf', '823', 'BSc. in Computer Science & Engineering', 'BBA 12', 'Marketing', 'Accounting', 2020, 'Mr. Norbert D\'Amore DVM', 'Damaris Lind', '+1-713-936-3210', 'vkuhlman@example.net', 'B+', 122, 3.17, '2022-07-21', 'SPRING 2024', 0, 0.00, 1, 0, 1),
(188, NULL, NULL, 'Leo Murray', '861', 'BSc. in Computer Science & Engineering', 'CSE 7', 'Finance', 'Statistics', 2019, 'Prof. Elvis Strosin II', 'Marlen Wunsch', '+1 (219) 216-2908', 'tamara.crist@example.net', 'AB-', 142, 2.94, '2023-06-12', 'FALL 2023', 0, 0.00, 1, 0, 1),
(189, NULL, NULL, 'Brycen Koch MD', '593', 'Bachelor of Laws [LL.B.(Hons.)]', 'CSE 7', 'HRM', 'Statistics', 2017, 'Prof. Cleo Labadie', 'Verla Jaskolski', '+1-641-260-5540', 'batz.fabiola@example.org', 'A+', 149, 2.65, '2022-11-10', 'SUMMER 2021', 0, 0.00, 0, 0, 0),
(190, NULL, NULL, 'Baron Leuschke', '935', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'HRM', 'Statistics', 2016, 'Mr. Joany Nienow MD', 'Madeline Schiller', '+13475807776', 'linnea.monahan@example.com', 'O+', 141, 3.44, '2022-04-01', 'SPRING 2020', 0, 0.00, 0, 1, 0),
(191, NULL, NULL, 'Jadyn Roob', '639', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'Marketing', 'Statistics', 2018, 'Llewellyn King PhD', 'Shanie Bins', '+1.630.318.7673', 'juliana.schmidt@example.com', 'O-', 121, 3.96, '2022-09-30', 'SUMMER 2022', 0, 0.00, 0, 0, 1),
(192, NULL, NULL, 'Lewis Orn', '802', 'Bachelor of Arts in English Language & Literature', 'LLB 15', 'HRM', 'Business Math', 2018, 'Mr. Cleo Walter PhD', 'Miss Nettie Emmerich IV', '260-387-0030', 'jerry.huel@example.org', 'A-', 142, 2.71, '2023-07-22', 'SUMMER 2022', 0, 0.00, 0, 0, 1),
(193, NULL, NULL, 'Octavia Daugherty', '764', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'Management', 'Accounting', 2019, 'Dr. Russ Fisher DVM', 'Prof. Malvina Reynolds DVM', '+1-442-334-3891', 'catharine.collins@example.net', 'B+', 128, 2.88, '2022-07-29', 'SPRING 2023', 1, 1986.03, 1, 1, 1),
(194, NULL, NULL, 'Ms. May Gusikowski', '157', 'Bachelor of Arts in English Language & Literature', 'CSE 7', 'Management', 'Economics', 2020, 'Carlo Block MD', 'Julie Schaefer', '304.770.0156', 'graham69@example.org', 'O+', 123, 3.38, '2022-04-26', 'SPRING 2024', 0, 0.00, 0, 1, 1),
(195, NULL, NULL, 'Miss Dariana Cummerata', '384', 'Bachelor of Laws [LL.B.(Hons.)]', 'ELL 8', 'Marketing', 'Business Math', 2020, 'Mr. Terry Yundt MD', 'Dana Wyman', '+1 (978) 235-9822', 'zheaney@example.net', 'O+', 149, 3.04, '2023-11-21', 'FALL 2024', 1, 2173.40, 0, 0, 1),
(196, NULL, NULL, 'Fannie Hintz', '105', 'Bachelor of Business Administration (BBA)', 'ELL 8', 'HRM', 'Economics', 2019, 'Godfrey McGlynn', 'Margot Bartell DVM', '283.764.6031', 'alexander25@example.net', 'A-', 149, 3.55, '2023-09-18', 'FALL 2023', 0, 0.00, 0, 1, 1),
(197, NULL, NULL, 'Prof. Alexandria Tremblay PhD', '655', 'BSc. in Computer Science & Engineering', 'ELL 8', 'Marketing', 'Economics', 2016, 'Gilberto Moore', 'Linnie Marvin', '+1-267-558-0680', 'eulah96@example.net', 'A+', 149, 3.59, '2022-05-12', 'SUMMER 2020', 1, 3149.52, 0, 0, 0),
(198, NULL, NULL, 'Clarabelle Stokes', '298', 'BSc. in Computer Science & Engineering', 'CSE 7', 'Marketing', 'Business Math', 2020, 'Winston Larkin', 'Patricia Botsford', '+1 (415) 968-0866', 'skylar.blick@example.com', 'O-', 121, 3.38, '2022-03-15', 'FALL 2024', 0, 0.00, 1, 0, 0),
(199, NULL, NULL, 'Dr. Glen Glover II', '277', 'BSc. in Computer Science & Engineering', 'LLB 15', 'Marketing', 'Economics', 2019, 'Mr. Raymundo Smitham', 'Dr. Ruby Kshlerin', '603-615-7866', 'turcotte.armando@example.org', 'AB+', 123, 3.02, '2023-06-21', 'FALL 2023', 1, 3379.87, 1, 0, 0),
(200, NULL, NULL, 'Ryann Russel', '325', 'Bachelor of Laws [LL.B.(Hons.)]', 'BBA 12', 'Management', 'Economics', 2017, 'Nick Schinner', 'Hilda Dietrich', '+1.352.598.9119', 'deron.schuppe@example.net', 'O+', 125, 3.52, '2022-07-26', 'FALL 2021', 0, 0.00, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_12_093510_create_graduate_lists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_slug` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduate_lists`
--
ALTER TABLE `graduate_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
