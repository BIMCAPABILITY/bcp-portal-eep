-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimcap_eep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_date` varchar(200) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`, `admin_date`, `admin_status`) VALUES
(1, 'admin', 'admin', '24/1/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL,
  `department_date` varchar(50) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_date`, `department_status`) VALUES
(2, 'Account Management ', '25-01-2023 14:07:11', 1),
(4, 'IT', '06-02-2023 07:36:04', 1),
(5, 'BIM Management', '06-02-2023 12:48:16', 1),
(6, 'R&D', '06-02-2023 12:48:23', 1),
(7, 'Human Resources', '06-02-2023 12:48:35', 1),
(8, 'BIMCAP Manila', '06-02-2023 12:48:46', 1),
(9, 'BIMCAP Hong Kong', '06-02-2023 12:48:55', 1),
(10, 'TEST D', '07-02-2023 08:47:22', 1),
(11, 'Marketing Department', '16-02-2023 19:09:13', 1),
(12, 'Directors', '17-04-2023 07:37:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(30) NOT NULL,
  `f_department_id` int(11) NOT NULL,
  `designation_date` varchar(50) NOT NULL,
  `designation_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `f_department_id`, `designation_date`, `designation_status`) VALUES
(2, 'Front End Developer', 1, '25-01-2023 14:19:22', 1),
(4, 'Account Manager', 2, '03-02-2023 11:31:02', 1),
(5, 'Web Developer', 4, '06-02-2023 07:36:19', 1),
(6, 'Director', 5, '06-02-2023 12:49:42', 1),
(7, 'BIM Manager', 5, '06-02-2023 12:49:50', 1),
(8, 'BIM Coordinator', 5, '06-02-2023 12:50:03', 1),
(9, 'Digital Marketing Manager', 11, '16-02-2023 19:10:39', 1),
(10, 'Managing Directors', 12, '17-04-2023 07:37:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_experience`
--

CREATE TABLE `employee_d_experience` (
  `employee_d_experience_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_experience` text DEFAULT NULL,
  `ed_experience_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_d_experience`
--

INSERT INTO `employee_d_experience` (`employee_d_experience_id`, `employee_id`, `ed_experience`, `ed_experience_date`) VALUES
(1, 1, '5 Years of experience in web development.', '22-03-2023 04:56:38'),
(2, 1, '5 Years of experience in web development.', '04-04-2023 10:57:33'),
(3, 2, 'test', '13-04-2023 09:38:54'),
(4, 3, '', '17-04-2023 09:00:24'),
(5, 3, '', '17-04-2023 09:01:27'),
(6, 3, '', '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_individual_profile`
--

CREATE TABLE `employee_d_individual_profile` (
  `employee_d_individual_profile_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_individual_profile_email` varchar(50) DEFAULT NULL,
  `ed_individual_profile_contact` varchar(20) DEFAULT NULL,
  `ed_individual_profile_age` varchar(10) DEFAULT NULL,
  `ed_individual_profile_intrest` varchar(50) DEFAULT NULL,
  `ed_individual_profile_address` varchar(100) DEFAULT NULL,
  `ed_individual_profile_city` varchar(30) DEFAULT NULL,
  `ed_individual_profile_country` varchar(30) DEFAULT NULL,
  `ed_individual_profile_doj` varchar(50) DEFAULT NULL,
  `ed_individual_profile_movie` varchar(30) DEFAULT NULL,
  `ed_individual_profile_book` varchar(30) DEFAULT NULL,
  `ed_individual_profile_tvshow` varchar(30) DEFAULT NULL,
  `ed_individual_profile_color` varchar(30) DEFAULT NULL,
  `ed_individual_profile_music` varchar(30) DEFAULT NULL,
  `ed_individual_profile_food` varchar(30) DEFAULT NULL,
  `ed_submit_status` int(11) NOT NULL DEFAULT 1,
  `ed_individual_profile_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_d_individual_profile`
--

INSERT INTO `employee_d_individual_profile` (`employee_d_individual_profile_id`, `employee_id`, `ed_individual_profile_email`, `ed_individual_profile_contact`, `ed_individual_profile_age`, `ed_individual_profile_intrest`, `ed_individual_profile_address`, `ed_individual_profile_city`, `ed_individual_profile_country`, `ed_individual_profile_doj`, `ed_individual_profile_movie`, `ed_individual_profile_book`, `ed_individual_profile_tvshow`, `ed_individual_profile_color`, `ed_individual_profile_music`, `ed_individual_profile_food`, `ed_submit_status`, `ed_individual_profile_date`) VALUES
(1, 1, 'nadeem@gmail.com', '+91 7869865421', '28', 'Gaming', 'Bhilai Durg', 'Durg', 'Lebanon', '2023-01-16', 'Documentary', 'Motivational', 'Friend\'s ', 'Blue', 'pop', 'Biryani', 2, '22-03-2023 04:56:38'),
(2, 1, 'nadeem@gmail.com', '+91 7869865421', '28', 'Gaming', 'Bhilai Durg', 'Durg', 'Lebanon', '2023-01-16', 'Documentary', 'Motivational', 'Friend\'s ', 'Blue', 'pop', 'Biryani', 2, '04-04-2023 10:57:33'),
(3, 2, 'jone@gmail.com', '12345678', '28', 'video game', 'test', 'test', 'Lebanon', '2023-04-01', 'test', 'test', 'test', 'test', 'test', 'test', 2, '13-04-2023 09:38:54'),
(4, 3, 'alex.rayo@bimcap.com', '+63 9123456789', '', '', 'JADE DRIVE', 'PASIG', 'Australia', '2022-01-02', '', '', '', '', '', '', 2, '17-04-2023 09:00:24'),
(5, 3, 'alex.rayo@bimcap.com', '+63 9123456789', '', '', 'JADE DRIVE', 'PASIG', 'Australia', '2022-01-02', '', '', '', '', '', '', 2, '17-04-2023 09:01:27'),
(6, 3, 'alex.rayo@bimcap.com', '+63 9123456789', '', '', 'JADE DRIVE', 'PASIG', 'Australia', '2022-01-02', '', '', '', '', '', '', 2, '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_personality`
--

CREATE TABLE `employee_d_personality` (
  `employee_d_personality_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_personality_type` varchar(50) DEFAULT NULL,
  `ed_personality_role` varchar(30) DEFAULT NULL,
  `ed_personality_code` varchar(30) DEFAULT NULL,
  `ed_personality_strategy` varchar(30) DEFAULT NULL,
  `min_value_mind` int(11) DEFAULT NULL,
  `max_value_mind` int(11) DEFAULT NULL,
  `min_value_energy` int(11) DEFAULT NULL,
  `max_value_energy` int(11) DEFAULT NULL,
  `min_value_nature` int(11) DEFAULT NULL,
  `max_value_nature` int(11) DEFAULT NULL,
  `min_value_tactics` int(11) DEFAULT NULL,
  `max_value_tactics` int(11) DEFAULT NULL,
  `min_value_identity` int(11) DEFAULT NULL,
  `max_value_identity` int(11) DEFAULT NULL,
  `ed_personality_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_d_personality`
--

INSERT INTO `employee_d_personality` (`employee_d_personality_id`, `employee_id`, `ed_personality_type`, `ed_personality_role`, `ed_personality_code`, `ed_personality_strategy`, `min_value_mind`, `max_value_mind`, `min_value_energy`, `max_value_energy`, `min_value_nature`, `max_value_nature`, `min_value_tactics`, `max_value_tactics`, `min_value_identity`, `max_value_identity`, `ed_personality_date`) VALUES
(1, 1, 'test', 'test', 'test', 'test', 35, 65, 25, 75, 80, 20, 90, 10, 10, 90, '22-03-2023 04:56:38'),
(2, 1, 'test', 'test', 'test', 'test', 35, 65, 25, 75, 80, 20, 90, 10, 10, 90, '04-04-2023 10:57:33'),
(3, 2, 'test', 'test', 'test', 'test', 40, 60, 20, 80, 30, 70, 40, 60, 20, 80, '13-04-2023 09:38:54'),
(4, 3, '', '', '', '', 40, 60, 10, 90, 10, 90, 10, 90, 10, 90, '17-04-2023 09:00:24'),
(5, 3, '', '', '', '', 40, 60, 10, 90, 10, 90, 10, 90, 10, 90, '17-04-2023 09:01:27'),
(6, 3, '', '', '', '', 40, 60, 10, 90, 10, 90, 10, 90, 10, 90, '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_qualification`
--

CREATE TABLE `employee_d_qualification` (
  `employee_d_qualification_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_qualification_text` text DEFAULT NULL,
  `ed_qualification_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_d_qualification`
--

INSERT INTO `employee_d_qualification` (`employee_d_qualification_id`, `employee_id`, `ed_qualification_text`, `ed_qualification_date`) VALUES
(1, 1, 'test', '22-03-2023 04:56:38'),
(2, 1, 'test', '04-04-2023 10:57:33'),
(3, 2, 'test', '13-04-2023 09:38:54'),
(4, 3, '', '17-04-2023 09:00:24'),
(5, 3, '', '17-04-2023 09:01:27'),
(6, 3, '', '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_salary_history`
--

CREATE TABLE `employee_d_salary_history` (
  `employee_d_salary_history_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_salary_date` varchar(30) DEFAULT NULL,
  `ed_salary_date2` varchar(30) DEFAULT NULL,
  `ed_salary_date3` varchar(30) DEFAULT NULL,
  `ed_salary_date4` varchar(30) DEFAULT NULL,
  `ed_salary_currency` varchar(30) DEFAULT NULL,
  `ed_salary_amount` varchar(30) DEFAULT NULL,
  `ed_salary_amount2` varchar(30) DEFAULT NULL,
  `ed_salary_amount3` varchar(30) DEFAULT NULL,
  `ed_salary_amount4` varchar(30) DEFAULT NULL,
  `ed_salary_post_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_d_salary_history`
--

INSERT INTO `employee_d_salary_history` (`employee_d_salary_history_id`, `employee_id`, `ed_salary_date`, `ed_salary_date2`, `ed_salary_date3`, `ed_salary_date4`, `ed_salary_currency`, `ed_salary_amount`, `ed_salary_amount2`, `ed_salary_amount3`, `ed_salary_amount4`, `ed_salary_post_date`) VALUES
(1, 0, NULL, '', '', '', NULL, NULL, '', '', '', '22-03-2023 04:56:38'),
(2, 1, '2023-01-16', '', '', '', 'INR', '10000', '', '', '', '22-03-2023 07:38:28'),
(3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '04-04-2023 10:57:33'),
(4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13-04-2023 09:38:54'),
(5, 2, '2023-01-16', '', '', '', 'INR', '20000', '', '', '', '13-04-2023 09:40:52'),
(6, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:00:24'),
(7, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:01:27'),
(8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_skills`
--

CREATE TABLE `employee_d_skills` (
  `ed_skills_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_arc` int(11) DEFAULT NULL,
  `ed_str` int(11) DEFAULT NULL,
  `ed_mep` int(11) DEFAULT NULL,
  `ed_mgmt` int(11) DEFAULT NULL,
  `ed_docs` int(11) DEFAULT NULL,
  `ed_4d` int(11) DEFAULT NULL,
  `ed_clash` int(11) DEFAULT NULL,
  `ed_dyna` int(11) DEFAULT NULL,
  `ed_rndr` int(11) DEFAULT NULL,
  `ed_mrkt` int(11) DEFAULT NULL,
  `ed_bd` int(11) DEFAULT NULL,
  `ed_skills_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_d_skills`
--

INSERT INTO `employee_d_skills` (`ed_skills_id`, `employee_id`, `ed_arc`, `ed_str`, `ed_mep`, `ed_mgmt`, `ed_docs`, `ed_4d`, `ed_clash`, `ed_dyna`, `ed_rndr`, `ed_mrkt`, `ed_bd`, `ed_skills_date`) VALUES
(1, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '22-03-2023 04:56:38'),
(2, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 10:57:33'),
(3, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 12:54:30'),
(4, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 13:06:02'),
(5, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 16:44:39'),
(6, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 16:44:55'),
(7, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 16:55:25'),
(8, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 16:57:24'),
(9, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '04-04-2023 16:58:43'),
(10, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '05-04-2023 06:33:55'),
(11, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '05-04-2023 06:34:45'),
(12, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '05-04-2023 06:35:04'),
(13, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '05-04-2023 06:37:54'),
(14, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, '05-04-2023 06:39:29'),
(15, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, '13-04-2023 09:38:54'),
(16, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_software_expertise`
--

CREATE TABLE `employee_d_software_expertise` (
  `employee_d_software_expertise_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_software_revit` int(11) DEFAULT NULL,
  `ed_software_navisworks` int(11) DEFAULT NULL,
  `ed_software_autocad` int(11) DEFAULT NULL,
  `ed_software_rhinoceros` int(11) DEFAULT NULL,
  `ed_software_3dsmax` int(11) DEFAULT NULL,
  `ed_software_iconodynmad` int(11) DEFAULT NULL,
  `ed_software_enscape` int(11) DEFAULT NULL,
  `ed_software_agacad` int(11) DEFAULT NULL,
  `ed_software_sketchup` int(11) DEFAULT NULL,
  `ed_software_msword` int(11) DEFAULT NULL,
  `ed_software_msexcel` int(11) DEFAULT NULL,
  `ed_software_photoshop` int(11) DEFAULT NULL,
  `ed_software_ai` int(11) DEFAULT NULL,
  `ed_software_indesign` int(11) DEFAULT NULL,
  `ed_software_ae` int(11) DEFAULT NULL,
  `ed_software_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_d_software_expertise`
--

INSERT INTO `employee_d_software_expertise` (`employee_d_software_expertise_id`, `employee_id`, `ed_software_revit`, `ed_software_navisworks`, `ed_software_autocad`, `ed_software_rhinoceros`, `ed_software_3dsmax`, `ed_software_iconodynmad`, `ed_software_enscape`, `ed_software_agacad`, `ed_software_sketchup`, `ed_software_msword`, `ed_software_msexcel`, `ed_software_photoshop`, `ed_software_ai`, `ed_software_indesign`, `ed_software_ae`, `ed_software_date`) VALUES
(1, 1, 6, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, '22-03-2023 04:56:38'),
(2, 1, 6, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, '04-04-2023 10:57:33'),
(3, 2, 5, 6, 7, 6, 6, 7, 6, 5, 6, 5, 6, 7, 6, 7, 6, '13-04-2023 09:38:54'),
(4, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:00:24'),
(5, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:01:27'),
(6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_d_status`
--

CREATE TABLE `employee_d_status` (
  `employee_d_status_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ed_part_full` int(11) DEFAULT NULL,
  `eb_status_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_d_status`
--

INSERT INTO `employee_d_status` (`employee_d_status_id`, `employee_id`, `ed_part_full`, `eb_status_date`) VALUES
(1, 1, 2, '22-03-2023 04:56:38'),
(2, 1, 2, '04-04-2023 10:57:33'),
(3, 1, 2, '04-04-2023 12:54:30'),
(4, 1, 2, '04-04-2023 13:06:02'),
(5, 1, 2, '04-04-2023 16:44:39'),
(6, 1, 2, '04-04-2023 16:44:55'),
(7, 1, 2, '04-04-2023 16:55:25'),
(8, 1, 2, '04-04-2023 16:57:24'),
(9, 1, 2, '04-04-2023 16:58:43'),
(10, 1, 2, '05-04-2023 06:33:55'),
(11, 1, 2, '05-04-2023 06:34:45'),
(12, 1, 2, '05-04-2023 06:35:04'),
(13, 1, 2, '05-04-2023 06:37:54'),
(14, 1, 2, '05-04-2023 06:39:29'),
(15, 2, 2, '13-04-2023 09:38:54'),
(16, 3, NULL, '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_main_avg`
--

CREATE TABLE `employee_main_avg` (
  `employee_main_avg_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `total_emp_avg` float NOT NULL,
  `employee_main_avg_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_main_avg`
--

INSERT INTO `employee_main_avg` (`employee_main_avg_id`, `employee_id`, `performance_id`, `total_emp_avg`, `employee_main_avg_status`) VALUES
(1, 1, 1, 3.59, 0),
(2, 1, 2, 1.1, 0),
(3, 1, 3, 2.83, 0),
(4, 1, 4, 3.5, 0),
(5, 1, 5, 0.8, 0),
(6, 1, 6, 0.3, 0),
(7, 1, 9, 3.4, 0),
(8, 1, 15, 0, 0),
(9, 1, 26, 0, 0),
(10, 1, 1, 0, 0),
(11, 1, 2, 0, 0),
(12, 1, 5, 0, 0),
(13, 1, 6, 0, 0),
(14, 1, 7, 3.1, 0),
(15, 1, 8, 3.17, 0),
(16, 1, 9, 3.4, 0),
(17, 1, 10, 1.78, 0),
(18, 2, 11, 4.11, 0),
(19, 2, 29, 0, 0),
(20, 4, 30, 2.77, 0),
(21, 2, 31, 0, 0),
(22, 1, 32, 0, 0),
(23, 1, 33, 3.56, 0),
(24, 1, 34, 0, 0),
(25, 1, 35, 3.75, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_performance`
--

CREATE TABLE `employee_performance` (
  `emp_performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `manager_name` varchar(200) DEFAULT NULL,
  `main_emp_avg` float NOT NULL,
  `evaluate_date_category` varchar(50) NOT NULL,
  `emp_performance_start_date` varchar(200) NOT NULL,
  `emp_performance_end_date` varchar(200) NOT NULL,
  `performance_post_date` varchar(200) NOT NULL,
  `submit_employee_status` int(11) NOT NULL DEFAULT 0,
  `submit_manager_status` int(11) NOT NULL DEFAULT 0,
  `employee_performance_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_performance`
--

INSERT INTO `employee_performance` (`emp_performance_id`, `employee_id`, `manager_id`, `manager_name`, `main_emp_avg`, `evaluate_date_category`, `emp_performance_start_date`, `emp_performance_end_date`, `performance_post_date`, `submit_employee_status`, `submit_manager_status`, `employee_performance_status`) VALUES
(1, 1, NULL, NULL, 0, '', '2023-04-01', '2023-04-06', '06-04-2023 06:49:41', 0, 0, 1),
(2, 1, NULL, NULL, 0, '', '2023-03-01', '2023-04-06', '06-04-2023 07:26:33', 0, 0, 1),
(3, 1, NULL, NULL, 0, '', '2023-03-01', '2023-04-06', '06-04-2023 08:01:37', 0, 0, 1),
(4, 1, NULL, NULL, 0, '', '2023-02-01', '2023-04-06', '06-04-2023 08:05:59', 0, 0, 1),
(5, 1, NULL, NULL, 0, '', '2023-02-01', '2023-04-06', '06-04-2023 08:10:03', 0, 0, 1),
(6, 1, NULL, NULL, 0, '', '2023-01-01', '2023-02-01', '06-04-2023 08:11:36', 0, 0, 1),
(7, 1, NULL, NULL, 0, '', '2023-04-01', '2023-04-06', '06-04-2023 09:40:20', 1, 0, 1),
(8, 1, 2, 'John', 0, '', '2023-02-01', '2023-04-06', '06-04-2023 13:15:22', 1, 2, 1),
(9, 1, 2, 'John', 0, '', '2023-02-01', '2023-04-10', '10-04-2023 12:16:20', 1, 2, 1),
(10, 1, NULL, NULL, 0, '', '2023-02-01', '2023-05-31', '13-04-2023 12:04:23', 1, 0, 1),
(11, 2, 3, 'alex', 0, '', '2022-12-01', '2023-01-01', '13-04-2023 13:45:12', 1, 2, 1),
(12, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:01:45', 0, 0, 1),
(13, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:02:10', 0, 0, 1),
(14, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:02:38', 0, 0, 1),
(15, 2, NULL, NULL, 0, '', '2023-04-14', '2023-04-27', '27-04-2023 14:05:11', 0, 0, 1),
(16, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:06:26', 0, 0, 1),
(17, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-07', '27-04-2023 14:12:22', 0, 0, 1),
(18, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:13:30', 0, 0, 1),
(19, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-28', '27-04-2023 14:14:08', 0, 0, 1),
(20, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-28', '27-04-2023 14:14:27', 0, 0, 1),
(21, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:14:56', 0, 0, 1),
(22, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:15:07', 0, 0, 1),
(23, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:15:32', 0, 0, 1),
(24, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:16:52', 0, 0, 1),
(25, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:16:55', 0, 0, 1),
(26, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:17:01', 0, 0, 1),
(27, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:17:02', 0, 0, 1),
(28, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:19:46', 0, 0, 1),
(29, 2, NULL, NULL, 0, '', '2023-04-01', '2023-04-27', '27-04-2023 14:20:03', 0, 0, 1),
(30, 4, 2, 'John', 0, '', '2023-01-01', '2023-01-31', '02-05-2023 08:40:36', 1, 2, 1),
(31, 2, NULL, NULL, 0, '30', '2023-05-09', '2023-06-08', '09-05-2023 14:00:57', 0, 0, 1),
(32, 1, NULL, NULL, 0, '30', '2023-05-10', '2023-06-09', '10-05-2023 12:13:55', 1, 0, 1),
(33, 1, 2, 'John', 0, '30', '2023-01-16', '2023-02-15', '15-05-2023 07:32:27', 1, 2, 1),
(34, 1, NULL, NULL, 0, '30', '2023-05-22', '', '22-05-2023 12:22:12', 0, 0, 1),
(35, 1, 2, 'John', 0, '30', '2023-05-22', '2023-06-21', '22-05-2023 12:26:56', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `main_employee_id` int(11) NOT NULL,
  `employee_first_name` varchar(30) NOT NULL,
  `employee_last_name` varchar(30) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `employee_number` varchar(20) NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `employee_city` varchar(50) NOT NULL,
  `employee_country` varchar(50) NOT NULL,
  `employee_department` varchar(50) NOT NULL,
  `employee_designation` varchar(50) NOT NULL,
  `employee_image` varchar(200) NOT NULL,
  `employee_doj` varchar(50) NOT NULL,
  `employee_dot` varchar(50) NOT NULL,
  `employee_status` int(11) NOT NULL DEFAULT 1,
  `emp_post_date` varchar(50) NOT NULL,
  `emp_password` varchar(100) NOT NULL,
  `emp_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`main_employee_id`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_number`, `employee_address`, `employee_city`, `employee_country`, `employee_department`, `employee_designation`, `employee_image`, `employee_doj`, `employee_dot`, `employee_status`, `emp_post_date`, `emp_password`, `emp_level`) VALUES
(1, 'Nadeem', 'Qureshi', 'nadeem@gmail.com', '+91 7869865421', 'Bhilai Durg', 'Durg', 'Lebanon', '4', 'Web Developer', 'upload/2023/mar/22/Nadeem Qureshi_BCP-Yellow.png', '2023-01-16', '', 1, '22-03-2023 04:49:18', 'codiz123', 2),
(2, 'John', 'Quil', 'jone@gmail.com', '12345678', 'test', 'test', 'Lebanon', '2', 'Account Manager', 'upload/2023/mar/23/manager.jpg', '2023-04-01', '', 1, '23-03-2023 06:19:18', '123', 3),
(3, 'alex', 'rayo', 'alex.rayo@bimcap.com', '+63 9123456789', 'JADE DRIVE', 'PASIG', 'Australia', '5', 'BIM Manager', 'upload/2023/apr/17/Alex Rayo_gray.png', '2022-01-02', '', 1, '17-04-2023 07:56:32', 'alex', 3),
(4, 'Salvador', 'Stephens', 'sal@gmail.com', '+1 12345678', 'Test', 'Test', 'Afghanistan', '5', 'BIM Manager', 'upload/2023/may/02/sal.jpg', '2022-02-01', '', 2, '02-05-2023 08:37:04', '123', 3),
(5, 'Catherine', 'Macabuhay', 'c@bimcap.com', '+1 75572208', 'Manila', 'Manila', 'Philippines', '2', 'Account Manager', 'upload/2023/may/10/6.png', '2022-11-12', '', 1, '10-05-2023 12:19:57', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_goals`
--

CREATE TABLE `emp_goals` (
  `emp_goals_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `goals_type` varchar(50) NOT NULL,
  `goals_description` text NOT NULL,
  `emp_goals_post_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emp_goals`
--

INSERT INTO `emp_goals` (`emp_goals_id`, `employee_id`, `goals_type`, `goals_description`, `emp_goals_post_date`) VALUES
(2, 1, '2023 Week 18', 'Test4', '04-04-2023 12:23:35'),
(3, 2, '2023 Week 18', '12', '13-04-2023 09:38:54'),
(4, 3, '2024 Week 18', '18', '17-04-2023 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_performance`
--

CREATE TABLE `knowledge_performance` (
  `knowledge_performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `knowledge_performance_question_1` int(11) DEFAULT NULL,
  `m_knowledge_performance_question_1` int(11) NOT NULL,
  `knowledge_performance_question_2` int(11) DEFAULT NULL,
  `m_knowledge_performance_question_2` int(11) NOT NULL,
  `knowledge_performance_question_3` int(11) DEFAULT NULL,
  `m_knowledge_performance_question_3` int(11) NOT NULL,
  `knowledge_performance_question_4` int(11) DEFAULT NULL,
  `m_knowledge_performance_question_4` int(11) NOT NULL,
  `knowledge_performance_question_5` int(11) DEFAULT NULL,
  `m_knowledge_performance_question_5` int(11) NOT NULL,
  `knowledge_performance_emp_avg` float DEFAULT NULL,
  `m_knowledge_performance_emp_avg` float NOT NULL,
  `knowledge_performance_comments` text NOT NULL,
  `m_knowledge_performance_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `knowledge_performance`
--

INSERT INTO `knowledge_performance` (`knowledge_performance_id`, `employee_id`, `performance_id`, `knowledge_performance_question_1`, `m_knowledge_performance_question_1`, `knowledge_performance_question_2`, `m_knowledge_performance_question_2`, `knowledge_performance_question_3`, `m_knowledge_performance_question_3`, `knowledge_performance_question_4`, `m_knowledge_performance_question_4`, `knowledge_performance_question_5`, `m_knowledge_performance_question_5`, `knowledge_performance_emp_avg`, `m_knowledge_performance_emp_avg`, `knowledge_performance_comments`, `m_knowledge_performance_comments`) VALUES
(1, 1, 1, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 'test', NULL),
(2, 1, 2, 3, 0, NULL, 0, 3, 0, 3, 0, 3, 0, 2.4, 0, '', NULL),
(3, 1, 3, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(4, 1, 4, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(5, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(7, 1, 7, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, '', NULL),
(8, 1, 8, 1, 6, 1, 3, 1, 5, 1, 3, 1, 4, 1, 4.2, '', 'your good'),
(9, 1, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(10, 1, 10, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '', NULL),
(11, 2, 11, 3, 4, 3, 4, 3, 4, 4, 3, 4, 3, 3.4, 3.6, 'Test', NULL),
(12, 2, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL),
(13, 4, 30, 4, 5, 4, 4, 4, 4, 4, 3, 0, 0, 3.2, 3.2, 'Testing', 'Testing Manager'),
(14, 2, 31, 3, 0, 3, 0, 3, 0, 4, 0, 4, 0, 3.4, 0, 'Test', NULL),
(15, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(16, 1, 33, 4, 3, 4, 5, 4, 3, 4, 4, 4, 4, 4, 3.8, 'Test', 'Manager Test'),
(17, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(18, 1, 35, 3, 4, 3, 3, 3, 3, 3, 4, 3, 4, 3, 3.6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_adaptability_table`
--

CREATE TABLE `p_adaptability_table` (
  `p_adaptability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `adaptability_question_1` int(11) DEFAULT NULL,
  `m_adaptability_question_1` int(11) NOT NULL,
  `adaptability_question_2` int(11) DEFAULT NULL,
  `m_adaptability_question_2` int(11) NOT NULL,
  `adaptability_question_3` int(11) DEFAULT NULL,
  `m_adaptability_question_3` int(11) NOT NULL,
  `adaptability_question_4` int(11) DEFAULT NULL,
  `m_adaptability_question_4` int(11) NOT NULL,
  `adaptability_question_5` int(11) DEFAULT NULL,
  `m_adaptability_question_5` int(11) NOT NULL,
  `p_adaptability_emp_avg` float DEFAULT NULL,
  `m_p_adaptability_emp_avg` int(11) NOT NULL,
  `adaptability_comments` text DEFAULT NULL,
  `m_adaptability_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_adaptability_table`
--

INSERT INTO `p_adaptability_table` (`p_adaptability_id`, `employee_id`, `performance_id`, `adaptability_question_1`, `m_adaptability_question_1`, `adaptability_question_2`, `m_adaptability_question_2`, `adaptability_question_3`, `m_adaptability_question_3`, `adaptability_question_4`, `m_adaptability_question_4`, `adaptability_question_5`, `m_adaptability_question_5`, `p_adaptability_emp_avg`, `m_p_adaptability_emp_avg`, `adaptability_comments`, `m_adaptability_comments`) VALUES
(1, 1, 1, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 'test', NULL),
(2, 1, 2, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_communication_table`
--

CREATE TABLE `p_communication_table` (
  `p_communication_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `communication_question_1` int(11) DEFAULT NULL,
  `m_communication_question_1` int(11) DEFAULT NULL,
  `communication_question_2` int(11) DEFAULT NULL,
  `m_communication_question_2` int(11) NOT NULL,
  `communication_question_3` int(11) DEFAULT NULL,
  `m_communication_question_3` int(11) NOT NULL,
  `communication_question_4` int(11) DEFAULT NULL,
  `m_communication_question_4` int(11) NOT NULL,
  `communication_question_5` int(11) DEFAULT NULL,
  `m_communication_question_5` int(11) NOT NULL,
  `communication_Informs_the_supervisor` int(11) DEFAULT NULL,
  `m_communication_Informs_the_supervisor` int(11) NOT NULL,
  `communication_comments` text DEFAULT NULL,
  `m_communication_comments` text DEFAULT NULL,
  `communication_emp_avg` float DEFAULT NULL,
  `m_communication_emp_avg` float NOT NULL,
  `p_communication_post_date` varchar(50) NOT NULL,
  `p_communication_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_communication_table`
--

INSERT INTO `p_communication_table` (`p_communication_id`, `employee_id`, `performance_id`, `communication_question_1`, `m_communication_question_1`, `communication_question_2`, `m_communication_question_2`, `communication_question_3`, `m_communication_question_3`, `communication_question_4`, `m_communication_question_4`, `communication_question_5`, `m_communication_question_5`, `communication_Informs_the_supervisor`, `m_communication_Informs_the_supervisor`, `communication_comments`, `m_communication_comments`, `communication_emp_avg`, `m_communication_emp_avg`, `p_communication_post_date`, `p_communication_status`) VALUES
(1, 1, 1, 3, NULL, 3, 0, 3, 0, 3, 0, 3, 0, NULL, 0, 'test', NULL, 3, 0, '06-04-2023 06:49:41', 1),
(2, 1, 2, 2, NULL, 2, 0, 2, 0, 2, 0, 2, 0, NULL, 0, '', NULL, 2, 0, '06-04-2023 07:26:33', 1),
(3, 1, 3, 4, NULL, 4, 0, 4, 0, 4, 0, 4, 0, NULL, 0, 'Test', NULL, 4, 0, '06-04-2023 08:01:37', 1),
(4, 1, 4, 4, NULL, 4, 0, 4, 0, 4, 0, 4, 0, NULL, 0, '', NULL, 4, 0, '06-04-2023 08:05:59', 1),
(5, 1, 5, 4, NULL, 4, 0, 4, 0, 4, 0, 4, 0, NULL, 0, '', NULL, 4, 0, '06-04-2023 08:10:03', 1),
(6, 1, 6, 5, NULL, 5, 0, 5, 0, 5, 0, 5, 0, NULL, 0, '', NULL, 5, 0, '06-04-2023 08:11:36', 1),
(7, 0, 7, 4, NULL, 4, 0, 4, 0, 4, 0, 4, 0, NULL, 0, '', NULL, 4, 0, '06-04-2023 09:40:20', 1),
(8, 0, 8, 5, 3, 5, 6, 5, 2, 5, 5, 5, 2, NULL, 0, 'Test', 'Hello your performance is very nice!!', 5, 3.6, '06-04-2023 13:15:22', 1),
(9, 0, 9, 3, NULL, 3, 0, 2, 0, 3, 0, 3, 0, NULL, 0, 'test', NULL, 4.2, 5, '10-04-2023 12:16:20', 1),
(10, 0, 10, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, NULL, 0, 'Test', NULL, 2, 2, '13-04-2023 12:04:23', 1),
(11, 2, 11, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, NULL, 0, 'Test', NULL, 3, 4, '13-04-2023 13:45:12', 1),
(12, 0, 29, 3, NULL, 3, 0, 3, 0, 3, 0, 3, 0, NULL, 0, '', NULL, 3, 0, '27-04-2023 14:20:03', 1),
(13, 4, 30, 4, 3, 4, 3, 4, 4, 4, 3, 0, 0, NULL, 0, 'Testing', 'Testing Manager', 3.2, 2.6, '02-05-2023 08:40:36', 1),
(14, 2, 31, 4, NULL, 4, 0, 0, 0, 4, 0, 4, 0, NULL, 0, 'Test', NULL, 3.2, 0, '09-05-2023 14:00:57', 1),
(15, 1, 32, 4, NULL, 4, 0, 4, 0, 4, 0, 4, 0, NULL, 0, '', NULL, 4, 0, '10-05-2023 12:13:55', 1),
(16, 1, 33, 4, 5, 4, 5, 4, 5, 4, 4, 3, 4, NULL, 0, 'Test', 'Manager Test', 3.8, 4.6, '15-05-2023 07:32:27', 1),
(17, 1, 34, 4, NULL, 4, 0, 4, 0, 4, 0, 4, 0, NULL, 0, 'Test', NULL, 4, 0, '22-05-2023 12:22:12', 1),
(18, 1, 35, 3, 4, 3, 4, 3, 4, 3, 4, 3, 3, NULL, 0, '', '', 3, 3.8, '22-05-2023 12:26:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_creativity_problem_solving_table`
--

CREATE TABLE `p_creativity_problem_solving_table` (
  `p_creativity_problem_solving_table` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `creativity_problem_question_1` int(11) DEFAULT NULL,
  `m_creativity_problem_question_1` int(11) NOT NULL,
  `creativity_problem_question_2` int(11) DEFAULT NULL,
  `m_creativity_problem_question_2` int(11) NOT NULL,
  `creativity_problem_question_3` int(11) DEFAULT NULL,
  `m_creativity_problem_question_3` int(11) NOT NULL,
  `creativity_problem_solving_knowledge_to_new_challenges` int(11) DEFAULT NULL,
  `m_creativity_problem_solving_knowledge_to_new_challenges` int(11) NOT NULL,
  `p_creativity_problem_solving_emp_avg` float DEFAULT NULL,
  `m_p_creativity_problem_solving_emp_avg` int(11) NOT NULL,
  `creativity_problem_solving_comments` text DEFAULT NULL,
  `m_creativity_problem_solving_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_creativity_problem_solving_table`
--

INSERT INTO `p_creativity_problem_solving_table` (`p_creativity_problem_solving_table`, `employee_id`, `performance_id`, `creativity_problem_question_1`, `m_creativity_problem_question_1`, `creativity_problem_question_2`, `m_creativity_problem_question_2`, `creativity_problem_question_3`, `m_creativity_problem_question_3`, `creativity_problem_solving_knowledge_to_new_challenges`, `m_creativity_problem_solving_knowledge_to_new_challenges`, `p_creativity_problem_solving_emp_avg`, `m_p_creativity_problem_solving_emp_avg`, `creativity_problem_solving_comments`, `m_creativity_problem_solving_comments`) VALUES
(1, 1, 1, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 'test', NULL),
(2, 1, 2, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(3, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(4, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(5, 0, 7, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 0, 8, 2, 2, 2, 3, 2, 3, 2, 6, 2, 4, 'Test', 'Test3'),
(7, 0, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 5, '', NULL),
(8, 0, 10, 2, 0, 3, 0, 4, 0, 3, 0, 3, 0, 'Test', NULL),
(9, 2, 11, 5, 3, 3, 4, 4, 5, 3, 4, 3.75, 4, 'Test', NULL),
(10, 2, 29, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(11, 4, 30, 4, 3, 4, 3, 4, 3, 0, 0, 3, 2, 'Testing', 'Testing Manager'),
(12, 2, 31, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(13, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(14, 1, 33, 3, 3, 3, 3, 3, 3, 3, 4, 3, 3, 'Test', 'Manager Test'),
(15, 1, 34, 4, 0, 4, 0, 4, 0, NULL, 0, 4, 0, 'Test', NULL),
(16, 1, 35, 3, 3, 3, 4, 3, 4, NULL, 0, 3, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_dependability_table`
--

CREATE TABLE `p_dependability_table` (
  `p_dependability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `reliability_question_1` int(11) DEFAULT NULL,
  `m_reliability_question_1` int(11) NOT NULL,
  `reliability_question_2` int(11) DEFAULT NULL,
  `m_reliability_question_2` int(11) NOT NULL,
  `reliability_question_3` int(11) DEFAULT NULL,
  `m_reliability_question_3` int(11) NOT NULL,
  `reliability_question_4` int(11) DEFAULT NULL,
  `m_reliability_question_4` int(11) NOT NULL,
  `reliability_question_5` int(11) DEFAULT NULL,
  `m_reliability_question_5` int(11) NOT NULL,
  `reliability_comments` text NOT NULL,
  `reliability_emp_avg` float DEFAULT NULL,
  `m_dependability_emp_avg` int(11) NOT NULL,
  `dependability_comments` text DEFAULT NULL,
  `m_dependability_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_dependability_table`
--

INSERT INTO `p_dependability_table` (`p_dependability_id`, `employee_id`, `performance_id`, `reliability_question_1`, `m_reliability_question_1`, `reliability_question_2`, `m_reliability_question_2`, `reliability_question_3`, `m_reliability_question_3`, `reliability_question_4`, `m_reliability_question_4`, `reliability_question_5`, `m_reliability_question_5`, `reliability_comments`, `reliability_emp_avg`, `m_dependability_emp_avg`, `dependability_comments`, `m_dependability_comments`) VALUES
(1, 1, 1, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 'test', 2, 0, NULL, NULL),
(2, 1, 2, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, '', 2, 0, NULL, NULL),
(3, 1, 3, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', 4, 0, NULL, NULL),
(4, 1, 4, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', 3, 0, NULL, NULL),
(5, 1, 5, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', 3, 0, NULL, NULL),
(6, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', 5, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p_initiative_proactive_table`
--

CREATE TABLE `p_initiative_proactive_table` (
  `p_initiative_proactive_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `initiative_proactive_question_1` int(11) DEFAULT NULL,
  `m_initiative_proactive_question_1` int(11) NOT NULL,
  `initiative_proactive_question_2` int(11) DEFAULT NULL,
  `m_initiative_proactive_question_2` int(11) NOT NULL,
  `initiative_proactive_question_3` int(11) DEFAULT NULL,
  `m_initiative_proactive_question_3` int(11) NOT NULL,
  `initiative_proactive_learn_new_disciplines_software` int(11) DEFAULT NULL,
  `m_initiative_proactive_learn_new_disciplines_software` int(11) NOT NULL,
  `p_initiative_proactive_emp_avg` float DEFAULT NULL,
  `m_p_initiative_proactive_emp_avg` int(11) NOT NULL,
  `initiative_proactive_comments` text DEFAULT NULL,
  `m_initiative_proactive_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p_initiative_proactive_table`
--

INSERT INTO `p_initiative_proactive_table` (`p_initiative_proactive_id`, `employee_id`, `performance_id`, `initiative_proactive_question_1`, `m_initiative_proactive_question_1`, `initiative_proactive_question_2`, `m_initiative_proactive_question_2`, `initiative_proactive_question_3`, `m_initiative_proactive_question_3`, `initiative_proactive_learn_new_disciplines_software`, `m_initiative_proactive_learn_new_disciplines_software`, `p_initiative_proactive_emp_avg`, `m_p_initiative_proactive_emp_avg`, `initiative_proactive_comments`, `m_initiative_proactive_comments`) VALUES
(1, 1, 1, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 'test', NULL),
(2, 1, 2, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(3, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(4, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(5, 0, 7, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 0, 8, 3, 3, 3, 4, 3, 6, 3, 3, 3, 4, '', ''),
(7, 0, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 4, '', NULL),
(8, 0, 10, 4, 0, 3, 0, 4, 0, 3, 0, 3.5, 0, 'Test', NULL),
(9, 2, 11, 5, 4, 4, 5, 4, 5, 4, 3, 4.25, 4, 'Test', NULL),
(10, 0, 29, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(11, 4, 30, 4, 3, 4, 5, 4, 4, 0, 0, 3, 3, 'Testing', 'Testing Manager'),
(12, 2, 31, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(13, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(14, 1, 33, 4, 2, 4, 5, 4, 3, 4, 4, 4, 4, 'Test', 'Manager Test'),
(15, 1, 34, 4, 0, 4, 0, 4, 0, NULL, 0, 4, 0, 'Test', NULL),
(16, 1, 35, 3, 4, 3, 4, 3, 4, NULL, 0, 3, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_knowledge_table`
--

CREATE TABLE `p_knowledge_table` (
  `p_knowledge_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `knowledge_standards_and_portfolio` int(11) DEFAULT NULL,
  `m_knowledge_standards_and_portfolio` int(11) NOT NULL,
  `knowledge_bim_project_requirements` int(11) DEFAULT NULL,
  `m_knowledge_bim_project_requirements` int(11) NOT NULL,
  `knowledge_of_the_construction_industry` int(11) DEFAULT NULL,
  `m_knowledge_of_the_construction_industry` int(11) NOT NULL,
  `knowledge_emp_avg` float DEFAULT NULL,
  `m_knowledge_emp_avg` int(11) NOT NULL,
  `knowledge_comments` text DEFAULT NULL,
  `m_knowledge_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_knowledge_table`
--

INSERT INTO `p_knowledge_table` (`p_knowledge_id`, `employee_id`, `performance_id`, `knowledge_standards_and_portfolio`, `m_knowledge_standards_and_portfolio`, `knowledge_bim_project_requirements`, `m_knowledge_bim_project_requirements`, `knowledge_of_the_construction_industry`, `m_knowledge_of_the_construction_industry`, `knowledge_emp_avg`, `m_knowledge_emp_avg`, `knowledge_comments`, `m_knowledge_comments`) VALUES
(1, 1, 1, 3, 0, 3, 0, 3, 0, 3, 0, 'test', NULL),
(2, 1, 2, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(3, 1, 3, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(4, 1, 4, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(5, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(7, 0, 7, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(8, 0, 8, 1, 1, 1, 1, 1, 6, 1, 3, 'Test', 'Test'),
(9, 0, 9, 3, 0, 3, 0, 3, 0, 3, 4, 'test', NULL),
(10, 0, 10, 3, 3, 3, 3, 3, 3, 3, 3, 'Test', NULL),
(11, 2, 11, 3, 4, 3, 4, 3, 5, 3, 4, 'Test', NULL),
(12, 2, 29, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL),
(13, 4, 30, 4, 3, 4, 5, 0, 0, 2.67, 3, 'Testing', 'Testing Manager'),
(14, 2, 31, 5, 0, 5, 0, 5, 0, 5, 0, 'Test', NULL),
(15, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(16, 1, 33, 4, 4, 4, 3, 4, 3, 4, 3, 'Test', 'Manager Test'),
(17, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(18, 1, 35, 3, 4, 3, 4, 3, 4, 3, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_productivity_table`
--

CREATE TABLE `p_productivity_table` (
  `productivity_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `adaptability_productivity_question_1` int(11) DEFAULT NULL,
  `m_adaptability_productivity_question_1` int(11) NOT NULL,
  `adaptability_productivity_question_2` int(11) DEFAULT NULL,
  `m_adaptability_productivity_question_2` int(11) NOT NULL,
  `adaptability_productivity_question_3` int(11) DEFAULT NULL,
  `m_adaptability_productivity_question_3` int(11) NOT NULL,
  `adaptability_productivity_question_4` int(11) DEFAULT NULL,
  `m_adaptability_productivity_question_4` int(11) NOT NULL,
  `adaptability_productivity_question_5` int(11) DEFAULT NULL,
  `m_adaptability_productivity_question_5` int(11) NOT NULL,
  `productivity_emp_avg` float DEFAULT NULL,
  `m_productivity_emp_avg` float NOT NULL,
  `productivity_comments` text DEFAULT NULL,
  `m_productivity_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_productivity_table`
--

INSERT INTO `p_productivity_table` (`productivity_id`, `employee_id`, `performance_id`, `adaptability_productivity_question_1`, `m_adaptability_productivity_question_1`, `adaptability_productivity_question_2`, `m_adaptability_productivity_question_2`, `adaptability_productivity_question_3`, `m_adaptability_productivity_question_3`, `adaptability_productivity_question_4`, `m_adaptability_productivity_question_4`, `adaptability_productivity_question_5`, `m_adaptability_productivity_question_5`, `productivity_emp_avg`, `m_productivity_emp_avg`, `productivity_comments`, `m_productivity_comments`) VALUES
(1, 1, 5, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, NULL, NULL),
(2, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, NULL, NULL),
(3, 1, 7, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(4, 1, 8, 1, 1, 1, 6, 1, 5, 1, 5, 1, 1, 1, 3.6, NULL, ''),
(5, 1, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 4, NULL, NULL),
(6, 1, 10, 2, 0, 3, 0, 2, 0, 3, 0, 3, 0, 2.6, 0, 'Test', NULL),
(7, 2, 11, 3, 4, 3, 4, 3, 4, 3, 4, 5, 4, 3.4, 4, NULL, NULL),
(8, 2, 29, 5, 0, 6, 0, 5, 0, 5, 0, 5, 0, 5.2, 0, '', NULL),
(9, 4, 30, 4, 3, 4, 3, 4, 3, 4, 4, 0, 0, 3.2, 2.6, NULL, 'Testing Manager'),
(10, 2, 31, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, NULL, NULL),
(11, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, NULL, NULL),
(12, 1, 33, 4, 3, 4, 3, 4, 3, 4, 4, 4, 4, 4, 3.4, NULL, 'Manager Test'),
(13, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, NULL, NULL),
(14, 1, 35, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `p_quality_table`
--

CREATE TABLE `p_quality_table` (
  `p_quality_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `quality_question_1` int(11) DEFAULT NULL,
  `m_quality_question_1` int(11) NOT NULL,
  `quality_question_2` int(11) DEFAULT NULL,
  `m_quality_question_2` int(11) NOT NULL,
  `quality_question_3` int(11) DEFAULT NULL,
  `m_quality_question_3` int(11) NOT NULL,
  `quality_question_4` int(11) DEFAULT NULL,
  `m_quality_question_4` int(11) NOT NULL,
  `quality_question_5` int(11) DEFAULT NULL,
  `m_quality_question_5` int(11) NOT NULL,
  `quality_emp_avg` float DEFAULT NULL,
  `m_quality_emp_avg` float NOT NULL,
  `quality_comments` text DEFAULT NULL,
  `m_quality_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_quality_table`
--

INSERT INTO `p_quality_table` (`p_quality_id`, `employee_id`, `performance_id`, `quality_question_1`, `m_quality_question_1`, `quality_question_2`, `m_quality_question_2`, `quality_question_3`, `m_quality_question_3`, `quality_question_4`, `m_quality_question_4`, `quality_question_5`, `m_quality_question_5`, `quality_emp_avg`, `m_quality_emp_avg`, `quality_comments`, `m_quality_comments`) VALUES
(1, 1, 1, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 2, 0, 'test', NULL),
(2, 1, 2, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(3, 1, 3, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(4, 1, 4, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(5, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(7, 1, 7, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(8, 1, 8, 1, 1, 1, 6, 1, 2, 1, 1, 1, 1, 1, 2.2, 'Test', 'Test'),
(9, 1, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 4, '', NULL),
(10, 1, 10, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'Test', NULL),
(11, 2, 11, 4, 3, 4, 3, 4, 3, 3, 5, 3, 5, 3.6, 3.8, 'Test', NULL),
(12, 2, 29, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, '', NULL),
(13, 4, 30, 4, 3, 4, 3, 4, 3, 4, 4, 0, 0, 3.2, 2.6, 'Testing', 'Testing Manager'),
(14, 2, 31, 3, 0, 3, 0, 3, 0, 3, 0, 2, 0, 2.8, 0, 'Test', NULL),
(15, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(16, 1, 33, 3, 3, 3, 3, 3, 4, 3, 4, 3, 3, 3, 3.4, 'Test', 'Manager Test'),
(17, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(18, 1, 35, 3, 4, 3, 4, 3, 4, 3, 2, 3, 2, 3, 3.2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_reliability_professionalism`
--

CREATE TABLE `p_reliability_professionalism` (
  `reliability_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `reliability_question_1` int(11) DEFAULT NULL,
  `m_reliability_question_1` int(11) NOT NULL,
  `reliability_question_2` int(11) DEFAULT NULL,
  `m_reliability_question_2` int(11) NOT NULL,
  `reliability_question_3` int(11) DEFAULT NULL,
  `m_reliability_question_3` int(11) NOT NULL,
  `reliability_question_4` int(11) DEFAULT NULL,
  `m_reliability_question_4` int(11) NOT NULL,
  `reliability_question_5` int(11) DEFAULT NULL,
  `m_reliability_question_5` int(11) NOT NULL,
  `reliability_question_6` int(11) DEFAULT NULL,
  `m_reliability_question_6` int(11) NOT NULL,
  `reliability_comments` text NOT NULL,
  `m_reliability_comments` text DEFAULT NULL,
  `reliability_emp_avg` float NOT NULL,
  `m_reliability_emp_avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p_reliability_professionalism`
--

INSERT INTO `p_reliability_professionalism` (`reliability_id`, `employee_id`, `performance_id`, `reliability_question_1`, `m_reliability_question_1`, `reliability_question_2`, `m_reliability_question_2`, `reliability_question_3`, `m_reliability_question_3`, `reliability_question_4`, `m_reliability_question_4`, `reliability_question_5`, `m_reliability_question_5`, `reliability_question_6`, `m_reliability_question_6`, `reliability_comments`, `m_reliability_comments`, `reliability_emp_avg`, `m_reliability_emp_avg`) VALUES
(1, 1, 7, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 0, 0, '', NULL, 5, 0),
(2, 1, 8, 1, 1, 1, 6, 1, 1, 1, 3, 1, 3, 0, 1, 'Test', NULL, 1, 2.5),
(3, 1, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 0, 0, '', NULL, 3, 4),
(4, 1, 10, 2, 3, 3, 4, 2, 3, 3, 2, 3, 4, 4, 3, 'Test', NULL, 3.4, 3.17),
(5, 2, 11, 3, 4, 3, 4, 3, 4, 3, 5, 4, 5, 4, 5, 'Test', NULL, 3.33, 4.5),
(6, 2, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, 0, 0),
(7, 4, 30, 4, 3, 4, 5, 4, 3, 4, 4, 4, 4, 0, 0, 'Testing', 'Testing Manager', 3.33, 3.17),
(8, 2, 31, 2, 0, 2, 0, 2, 0, 3, 0, 3, 0, 3, 0, 'Test', NULL, 2.5, 0),
(9, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL, 3, 0),
(10, 1, 33, 4, 3, 4, 3, 4, 3, 4, 4, 4, 4, 3, 4, 'Test', 'Manager Test', 3.83, 3.5),
(11, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL, 4, 0),
(12, 1, 35, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 3, '', NULL, 3, 3.83);

-- --------------------------------------------------------

--
-- Table structure for table `p_signature`
--

CREATE TABLE `p_signature` (
  `p_signature_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `p_signature_img` varchar(200) NOT NULL,
  `p_signature_date` varchar(50) NOT NULL,
  `p_signature_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_software_table`
--

CREATE TABLE `p_software_table` (
  `p_software_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `software_question_1` int(11) DEFAULT NULL,
  `m_software_question_1` int(11) NOT NULL,
  `software_question_2` int(11) DEFAULT NULL,
  `m_software_question_2` int(11) NOT NULL,
  `software_question_3` int(11) DEFAULT NULL,
  `m_software_question_3` int(11) NOT NULL,
  `software_question_4` int(11) DEFAULT NULL,
  `m_software_question_4` int(11) NOT NULL,
  `software_question_5` int(11) DEFAULT NULL,
  `m_software_question_5` int(11) NOT NULL,
  `software_emp_avg` float DEFAULT NULL,
  `m_software_emp_avg` int(11) NOT NULL,
  `software_comments` text DEFAULT NULL,
  `m_software_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_software_table`
--

INSERT INTO `p_software_table` (`p_software_id`, `employee_id`, `performance_id`, `software_question_1`, `m_software_question_1`, `software_question_2`, `m_software_question_2`, `software_question_3`, `m_software_question_3`, `software_question_4`, `m_software_question_4`, `software_question_5`, `m_software_question_5`, `software_emp_avg`, `m_software_emp_avg`, `software_comments`, `m_software_comments`) VALUES
(1, 1, 1, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 'test', NULL),
(2, 1, 2, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(3, 1, 3, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(4, 1, 4, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(5, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(7, 1, 7, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(8, 1, 8, 1, 6, 1, 2, 1, 1, 1, 1, 1, 1, 1, 2, 'Test', 'Test'),
(9, 1, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 5, '', NULL),
(10, 1, 10, 4, 4, 3, 3, 4, 4, 3, 3, 4, 4, 3.6, 4, 'Test', NULL),
(11, 2, 11, 3, 4, 3, 4, 3, 5, 3, 5, 2, 5, 2.8, 5, 'Test', NULL),
(12, 2, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL),
(13, 4, 30, 4, 3, 4, 3, 4, 3, 4, 4, 0, 0, 3.2, 3, 'Testing', 'Testing Manager'),
(14, 2, 31, 4, 0, 4, 0, 4, 0, 4, 0, 0, 0, 3.2, 0, 'Test', NULL),
(15, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(16, 1, 33, 5, 3, 4, 3, 4, 3, 3, 3, 4, 4, 4, 3, 'Test', 'Manager Test'),
(17, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(18, 1, 35, 3, 4, 3, 4, 3, 4, 3, 4, 3, 3, 3, 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_time_management_table`
--

CREATE TABLE `p_time_management_table` (
  `p_time_management_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `time_management_question_1` int(11) DEFAULT NULL,
  `m_time_management_question_1` int(11) NOT NULL,
  `time_management_question_2` int(11) DEFAULT NULL,
  `m_time_management_question_2` int(11) NOT NULL,
  `time_management_question_3` int(11) DEFAULT NULL,
  `m_time_management_question_3` int(11) NOT NULL,
  `time_management_question_4` int(11) DEFAULT NULL,
  `m_time_management_question_4` int(11) NOT NULL,
  `time_management_question_5` int(11) DEFAULT NULL,
  `m_time_management_question_5` int(11) NOT NULL,
  `time_management_emp_avg` float DEFAULT NULL,
  `m_time_management_emp_avg` int(11) NOT NULL,
  `time_management_comments` text DEFAULT NULL,
  `m_time_management_comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_time_management_table`
--

INSERT INTO `p_time_management_table` (`p_time_management_id`, `employee_id`, `performance_id`, `time_management_question_1`, `m_time_management_question_1`, `time_management_question_2`, `m_time_management_question_2`, `time_management_question_3`, `m_time_management_question_3`, `time_management_question_4`, `m_time_management_question_4`, `time_management_question_5`, `m_time_management_question_5`, `time_management_emp_avg`, `m_time_management_emp_avg`, `time_management_comments`, `m_time_management_comments`) VALUES
(1, 1, 1, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 'test', NULL),
(2, 1, 2, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(3, 1, 3, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(4, 1, 4, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(5, 1, 5, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, '', NULL),
(6, 1, 6, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(7, 1, 7, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, 5, 0, '', NULL),
(8, 1, 8, 2, 2, 2, 4, 2, 6, 2, 2, 2, 2, 2, 3, 'Test', NULL),
(9, 1, 9, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 4, NULL, NULL),
(10, 1, 10, 3, 0, 4, 0, 3, 0, 4, 0, 3, 0, 3.4, 0, 'Test', NULL),
(11, 2, 11, 3, 4, 3, 4, 3, 4, 3, 4, 5, 4, 3.4, 4, 'Test', NULL),
(12, 2, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL),
(13, 4, 30, 4, 3, 4, 4, 4, 4, 4, 4, 0, 0, 3.2, 3, 'Testing', 'Testing Manager'),
(14, 2, 31, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(15, 1, 32, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 3, 0, '', NULL),
(16, 1, 33, 4, 4, 4, 4, 4, 3, 4, 3, 2, 4, 3.6, 4, 'Test', 'Manager Test'),
(17, 1, 34, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 'Test', NULL),
(18, 1, 35, 3, 3, 3, 3, 3, 4, 3, 4, 3, 4, 3, 4, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_d_experience`
--
ALTER TABLE `employee_d_experience`
  ADD PRIMARY KEY (`employee_d_experience_id`);

--
-- Indexes for table `employee_d_individual_profile`
--
ALTER TABLE `employee_d_individual_profile`
  ADD PRIMARY KEY (`employee_d_individual_profile_id`);

--
-- Indexes for table `employee_d_personality`
--
ALTER TABLE `employee_d_personality`
  ADD PRIMARY KEY (`employee_d_personality_id`);

--
-- Indexes for table `employee_d_qualification`
--
ALTER TABLE `employee_d_qualification`
  ADD PRIMARY KEY (`employee_d_qualification_id`);

--
-- Indexes for table `employee_d_salary_history`
--
ALTER TABLE `employee_d_salary_history`
  ADD PRIMARY KEY (`employee_d_salary_history_id`);

--
-- Indexes for table `employee_d_skills`
--
ALTER TABLE `employee_d_skills`
  ADD PRIMARY KEY (`ed_skills_id`);

--
-- Indexes for table `employee_d_software_expertise`
--
ALTER TABLE `employee_d_software_expertise`
  ADD PRIMARY KEY (`employee_d_software_expertise_id`);

--
-- Indexes for table `employee_d_status`
--
ALTER TABLE `employee_d_status`
  ADD PRIMARY KEY (`employee_d_status_id`);

--
-- Indexes for table `employee_main_avg`
--
ALTER TABLE `employee_main_avg`
  ADD PRIMARY KEY (`employee_main_avg_id`);

--
-- Indexes for table `employee_performance`
--
ALTER TABLE `employee_performance`
  ADD PRIMARY KEY (`emp_performance_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`main_employee_id`);

--
-- Indexes for table `emp_goals`
--
ALTER TABLE `emp_goals`
  ADD PRIMARY KEY (`emp_goals_id`);

--
-- Indexes for table `knowledge_performance`
--
ALTER TABLE `knowledge_performance`
  ADD PRIMARY KEY (`knowledge_performance_id`);

--
-- Indexes for table `p_adaptability_table`
--
ALTER TABLE `p_adaptability_table`
  ADD PRIMARY KEY (`p_adaptability_id`);

--
-- Indexes for table `p_communication_table`
--
ALTER TABLE `p_communication_table`
  ADD PRIMARY KEY (`p_communication_id`);

--
-- Indexes for table `p_creativity_problem_solving_table`
--
ALTER TABLE `p_creativity_problem_solving_table`
  ADD PRIMARY KEY (`p_creativity_problem_solving_table`);

--
-- Indexes for table `p_dependability_table`
--
ALTER TABLE `p_dependability_table`
  ADD PRIMARY KEY (`p_dependability_id`);

--
-- Indexes for table `p_initiative_proactive_table`
--
ALTER TABLE `p_initiative_proactive_table`
  ADD PRIMARY KEY (`p_initiative_proactive_id`);

--
-- Indexes for table `p_knowledge_table`
--
ALTER TABLE `p_knowledge_table`
  ADD PRIMARY KEY (`p_knowledge_id`);

--
-- Indexes for table `p_productivity_table`
--
ALTER TABLE `p_productivity_table`
  ADD PRIMARY KEY (`productivity_id`);

--
-- Indexes for table `p_quality_table`
--
ALTER TABLE `p_quality_table`
  ADD PRIMARY KEY (`p_quality_id`);

--
-- Indexes for table `p_reliability_professionalism`
--
ALTER TABLE `p_reliability_professionalism`
  ADD PRIMARY KEY (`reliability_id`);

--
-- Indexes for table `p_signature`
--
ALTER TABLE `p_signature`
  ADD PRIMARY KEY (`p_signature_id`);

--
-- Indexes for table `p_software_table`
--
ALTER TABLE `p_software_table`
  ADD PRIMARY KEY (`p_software_id`);

--
-- Indexes for table `p_time_management_table`
--
ALTER TABLE `p_time_management_table`
  ADD PRIMARY KEY (`p_time_management_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee_d_experience`
--
ALTER TABLE `employee_d_experience`
  MODIFY `employee_d_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_d_individual_profile`
--
ALTER TABLE `employee_d_individual_profile`
  MODIFY `employee_d_individual_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_d_personality`
--
ALTER TABLE `employee_d_personality`
  MODIFY `employee_d_personality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_d_qualification`
--
ALTER TABLE `employee_d_qualification`
  MODIFY `employee_d_qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_d_salary_history`
--
ALTER TABLE `employee_d_salary_history`
  MODIFY `employee_d_salary_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_d_skills`
--
ALTER TABLE `employee_d_skills`
  MODIFY `ed_skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee_d_software_expertise`
--
ALTER TABLE `employee_d_software_expertise`
  MODIFY `employee_d_software_expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_d_status`
--
ALTER TABLE `employee_d_status`
  MODIFY `employee_d_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee_main_avg`
--
ALTER TABLE `employee_main_avg`
  MODIFY `employee_main_avg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee_performance`
--
ALTER TABLE `employee_performance`
  MODIFY `emp_performance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `main_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_goals`
--
ALTER TABLE `emp_goals`
  MODIFY `emp_goals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `knowledge_performance`
--
ALTER TABLE `knowledge_performance`
  MODIFY `knowledge_performance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `p_adaptability_table`
--
ALTER TABLE `p_adaptability_table`
  MODIFY `p_adaptability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_communication_table`
--
ALTER TABLE `p_communication_table`
  MODIFY `p_communication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `p_creativity_problem_solving_table`
--
ALTER TABLE `p_creativity_problem_solving_table`
  MODIFY `p_creativity_problem_solving_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `p_dependability_table`
--
ALTER TABLE `p_dependability_table`
  MODIFY `p_dependability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p_initiative_proactive_table`
--
ALTER TABLE `p_initiative_proactive_table`
  MODIFY `p_initiative_proactive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `p_knowledge_table`
--
ALTER TABLE `p_knowledge_table`
  MODIFY `p_knowledge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `p_productivity_table`
--
ALTER TABLE `p_productivity_table`
  MODIFY `productivity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `p_quality_table`
--
ALTER TABLE `p_quality_table`
  MODIFY `p_quality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `p_reliability_professionalism`
--
ALTER TABLE `p_reliability_professionalism`
  MODIFY `reliability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p_signature`
--
ALTER TABLE `p_signature`
  MODIFY `p_signature_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_software_table`
--
ALTER TABLE `p_software_table`
  MODIFY `p_software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `p_time_management_table`
--
ALTER TABLE `p_time_management_table`
  MODIFY `p_time_management_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
