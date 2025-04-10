-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 08:15 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `my_key` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(4) NOT NULL,
  `is_private_key` tinyint(4) NOT NULL,
  `ip_addresses` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `my_key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'bimcap123', 0, 0, 0, NULL, '2025-03-03 06:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `country_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `country_code`) VALUES
(1, 'Afghanistan', 0),
(2, 'Albania', 0),
(3, 'Algeria', 0),
(4, 'American Samoa', 0),
(5, 'Andorra', 0),
(6, 'Angola', 0),
(7, 'Anguilla', 0),
(8, 'Antarctica', 0),
(9, 'Antigua and Barbuda', 0),
(10, 'Argentina', 0),
(11, 'Armenia', 0),
(12, 'Aruba', 0),
(13, 'Australia', 0),
(14, 'Austria', 0),
(15, 'Azerbaijan', 0),
(16, 'Bahamas', 0),
(17, 'Bahrain', 0),
(18, 'Bangladesh', 0),
(19, 'Barbados', 0),
(20, 'Belarus', 0),
(21, 'Belgium', 0),
(22, 'Belize', 0),
(23, 'Benin', 0),
(24, 'Bermuda', 0),
(25, 'Bhutan', 0),
(26, 'Bolivia', 0),
(27, 'Bosnia and Herzegovina', 0),
(28, 'Botswana', 0),
(29, 'Bouvet Island', 0),
(30, 'Brazil', 0),
(31, 'British Indian Ocean Territory', 0),
(32, 'Brunei Darussalam', 0),
(33, 'Bulgaria', 0),
(34, 'Burkina Faso', 0),
(35, 'Burundi', 0),
(36, 'Cambodia', 0),
(37, 'Cameroon', 0),
(38, 'Canada', 0),
(39, 'Cape Verde', 0),
(40, 'Cayman Islands', 0),
(41, 'Central African Republic', 0),
(42, 'Chad', 0),
(43, 'Chile', 0),
(44, 'China', 0),
(45, 'Christmas Island', 0),
(46, 'Cocos (Keeling) Islands', 0),
(47, 'Colombia', 0),
(48, 'Comoros', 0),
(49, 'Congo', 0),
(50, 'Congo, Democratic Republic of the', 0),
(51, 'Cook Islands', 0),
(52, 'Costa Rica', 0),
(53, 'Cote d\'Ivoire', 0),
(54, 'Croatia', 0),
(55, 'Cuba', 0),
(56, 'Cyprus', 0),
(57, 'Czech Republic', 0),
(58, 'Denmark', 0),
(59, 'Djibouti', 0),
(60, 'Dominica', 0),
(61, 'Dominican Republic', 0),
(62, 'East Timor', 0),
(63, 'Ecuador', 0),
(64, 'Egypt', 0),
(65, 'El Salvador', 0),
(66, 'Equatorial Guinea', 0),
(67, 'Eritrea', 0),
(68, 'Estonia', 0),
(69, 'Ethiopia', 0),
(70, 'Falkland Islands', 0),
(71, 'Faroe Islands', 0),
(72, 'Fiji', 0),
(73, 'Finland', 0),
(74, 'France', 0),
(75, 'French Guiana', 0),
(76, 'French Polynesia', 0),
(77, 'French Southern Territories', 0),
(78, 'Gabon', 0),
(79, 'Gambia', 0),
(80, 'Georgia', 0),
(81, 'Germany', 0),
(82, 'Ghana', 0),
(83, 'Gibraltar', 0),
(84, 'Greece', 0),
(85, 'Greenland', 0),
(86, 'Grenada', 0),
(87, 'Guadeloupe', 0),
(88, 'Guam', 0),
(89, 'Guatemala', 0),
(90, 'Guinea', 0),
(91, 'Guinea-Bissau', 0),
(92, 'Guyana', 0),
(93, 'Haiti', 0),
(94, 'Heard and McDonald Islands', 0),
(95, 'Honduras', 0),
(96, 'Hong Kong', 0),
(97, 'Hungary', 0),
(98, 'Iceland', 0),
(99, 'India', 0),
(100, 'Indonesia', 0),
(101, 'Iran', 0),
(102, 'Iraq', 0),
(103, 'Ireland', 0),
(104, 'Israel', 0),
(105, 'Italy', 0),
(106, 'Jamaica', 0),
(107, 'Japan', 0),
(108, 'Jordan', 0),
(109, 'Kazakhstan', 0),
(110, 'Kenya', 0),
(111, 'Kiribati', 0),
(112, 'Korea, Democratic People\'s Republic of', 0),
(113, 'Korea, Republic of', 0),
(114, 'Kuwait', 0),
(115, 'Kyrgyzstan', 0),
(116, 'Lao People\'s Democratic Republic', 0),
(117, 'Latvia', 0),
(118, 'Lebanon', 0),
(119, 'Lesotho', 0),
(120, 'Liberia', 0),
(121, 'Libya', 0),
(122, 'Liechtenstein', 0),
(123, 'Lithuania', 0),
(124, 'Luxembourg', 0),
(125, 'Macau', 0),
(126, 'Macedonia', 0),
(127, 'Madagascar', 0),
(128, 'Malawi', 0),
(129, 'Malaysia', 0),
(130, 'Maldives', 0),
(131, 'Mali', 0),
(132, 'Malta', 0),
(133, 'Marshall Islands', 0),
(134, 'Martinique', 0),
(135, 'Mauritania', 0),
(136, 'Mauritius', 0),
(137, 'Mayotte', 0),
(138, 'Mexico', 0),
(139, 'Micronesia', 0),
(140, 'Moldova', 0),
(141, 'Monaco', 0),
(142, 'Mongolia', 0),
(143, 'Montenegro', 0),
(144, 'Montserrat', 0),
(145, 'Morocco', 0),
(146, 'Mozambique', 0),
(147, 'Myanmar', 0),
(148, 'Namibia', 0),
(149, 'Nauru', 0),
(150, 'Nepal', 0),
(151, 'Netherlands', 0),
(152, 'Netherlands Antilles', 0),
(153, 'New Caledonia', 0),
(154, 'New Zealand', 0),
(155, 'Nicaragua', 0),
(156, 'Niger', 0),
(157, 'Nigeria', 0),
(158, 'Niue', 0),
(159, 'Norfolk Island', 0),
(160, 'Northern Mariana Islands', 0),
(161, 'Norway', 0),
(162, 'Oman', 0),
(163, 'Pakistan', 0),
(164, 'Palau', 0),
(165, 'Palestine', 0),
(166, 'Panama', 0),
(167, 'Papua New Guinea', 0),
(168, 'Paraguay', 0),
(169, 'Peru', 0),
(170, 'Philippines', 0),
(171, 'Pitcairn', 0),
(172, 'Poland', 0),
(173, 'Portugal', 0),
(174, 'Puerto Rico', 0),
(175, 'Qatar', 0),
(176, 'Reunion', 0),
(177, 'Romania', 0),
(178, 'Russian Federation', 0),
(179, 'Rwanda', 0),
(180, 'Saint Kitts and Nevis', 0),
(181, 'Saint Lucia', 0),
(182, 'Saint Vincent and the Grenadines', 0),
(183, 'Samoa', 0),
(184, 'San Marino', 0),
(185, 'Sao Tome and Principe', 0),
(186, 'Saudi Arabia', 0),
(187, 'Senegal', 0),
(188, 'Serbia', 0),
(189, 'Seychelles', 0),
(190, 'Sierra Leone', 0),
(191, 'Singapore', 0),
(192, 'Slovakia', 0),
(193, 'Slovenia', 0),
(194, 'Solomon Islands', 0),
(195, 'Somalia', 0),
(196, 'South Africa', 0),
(197, 'South Georgia and South Sandwich Islands', 0),
(198, 'Spain', 0),
(199, 'Sri Lanka', 0),
(200, 'Sudan', 0),
(201, 'Suriname', 0),
(202, 'Svalbard and Jan Mayen Islands', 0),
(203, 'Swaziland', 0),
(204, 'Sweden', 0),
(205, 'Switzerland', 0),
(206, 'Syrian Arab Republic', 0),
(207, 'Taiwan', 0),
(208, 'Tajikistan', 0),
(209, 'Tanzania', 0),
(210, 'Thailand', 0),
(211, 'Togo', 0),
(212, 'Tokelau', 0),
(213, 'Tonga', 0),
(214, 'Trinidad and Tobago', 0),
(215, 'Tunisia', 0),
(216, 'Turkey', 0),
(217, 'Turkmenistan', 0),
(218, 'Turks and Caicos Islands', 0),
(219, 'Tuvalu', 0),
(220, 'Uganda', 0),
(221, 'Ukraine', 0),
(222, 'United Arab Emirates', 0),
(223, 'United Kingdom', 0),
(224, 'United States', 0),
(225, 'United States Minor Outlying Islands', 0),
(226, 'Uruguay', 0),
(227, 'Uzbekistan', 0),
(228, 'Vanuatu', 0),
(229, 'Vatican City State', 0),
(230, 'Venezuela', 0),
(231, 'Vietnam', 0),
(232, 'Virgin Islands (British)', 0),
(233, 'Virgin Islands (U.S.)', 0),
(234, 'Wallis and Futuna Islands', 0),
(235, 'Western Sahara', 0),
(236, 'Yemen', 0),
(237, 'Zambia', 0),
(238, 'Zimbabwe', 0),
(239, 'Åland Islands', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_status`, `date_created`) VALUES
(1, 'Innovation Hub', 1, '2025-03-17 16:00:00'),
(2, 'BD - India', 1, '2025-03-17 22:59:08'),
(3, 'IT Administrator', 1, '2025-03-18 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`, `designation_status`, `date_created`) VALUES
(1, 'Software Developer', 1, 1, '2025-03-17 16:00:00'),
(2, 'BIM IPD Director', 2, 1, '2025-03-17 22:59:25'),
(3, 'IT', 3, 1, '2025-03-18 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `history_employee_id` int(11) NOT NULL,
  `history_department_id` int(11) DEFAULT NULL,
  `history_designation_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `history_spectrum_id` int(11) DEFAULT NULL,
  `history_office_location` varchar(100) DEFAULT NULL,
  `history_emp_level` int(11) DEFAULT NULL,
  `history_emp_sub_level` int(11) DEFAULT NULL,
  `history_user_role` int(11) NOT NULL,
  `history_status` int(11) NOT NULL DEFAULT '1',
  `history_modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_history`
--

INSERT INTO `employee_history` (`history_employee_id`, `history_department_id`, `history_designation_id`, `employee_id`, `history_spectrum_id`, `history_office_location`, `history_emp_level`, `history_emp_sub_level`, `history_user_role`, `history_status`, `history_modification_date`) VALUES
(5, 2, 2, 8, 2, NULL, 3, 2, 2, 1, '2025-03-19 03:40:04'),
(8, 3, 3, 12, 3, NULL, 4, 3, 1, 1, '2025-03-19 04:04:46'),
(9, 1, 1, 12, 1, NULL, 2, 1, 2, 1, '2025-03-19 04:05:47'),
(10, 2, 2, 7, 2, NULL, 3, 2, 2, 1, '2025-03-26 03:40:16'),
(11, 1, 1, 7, 1, NULL, 2, 1, 1, 1, '2025-03-26 03:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `leaves_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_url` text NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `leave_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_level`
--

CREATE TABLE `employee_level` (
  `employee_level_id` int(11) NOT NULL,
  `employee_level_name` varchar(50) NOT NULL,
  `employee_level_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_level`
--

INSERT INTO `employee_level` (`employee_level_id`, `employee_level_name`, `employee_level_status`, `date_created`, `modification_date`) VALUES
(2, 'Support', 1, '2025-03-17 16:00:00', NULL),
(3, 'BIM IPD', 1, '2025-03-17 16:00:00', NULL),
(4, 'Support', 1, '2025-03-18 16:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_personality`
--

CREATE TABLE `employee_personality` (
  `employee_personality_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `personality_type` varchar(100) NOT NULL,
  `personality_role` varchar(100) NOT NULL,
  `personality_code` varchar(100) NOT NULL,
  `personality_strategy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_personality`
--

INSERT INTO `employee_personality` (`employee_personality_id`, `employee_id`, `personality_type`, `personality_role`, `personality_code`, `personality_strategy`) VALUES
(2, 7, 'Testing1', 'Testing1', 'Testing1', 'Testing1');

-- --------------------------------------------------------

--
-- Table structure for table `employee_sub_level`
--

CREATE TABLE `employee_sub_level` (
  `employee_sub_level_id` int(11) NOT NULL,
  `employee_sub_level_name` varchar(100) DEFAULT 'No sub level',
  `level_id` int(11) NOT NULL,
  `level_name` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_sub_level`
--

INSERT INTO `employee_sub_level` (`employee_sub_level_id`, `employee_sub_level_name`, `level_id`, `level_name`, `date_created`) VALUES
(1, 'Automation', 2, 'Support', '2025-03-17 22:46:43'),
(2, 'BIM IPD Director', 3, 'BIM IPD', '2025-03-17 23:00:43'),
(3, 'IT', 4, 'Support', '2025-03-19 03:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `main_employee_id` int(11) NOT NULL,
  `employee_first_name` varchar(50) NOT NULL,
  `employee_last_name` varchar(50) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `employee_number` varchar(20) NOT NULL,
  `employee_address` text NOT NULL,
  `employee_city` varchar(50) NOT NULL,
  `employee_country_id` int(11) NOT NULL,
  `employee_department` varchar(100) NOT NULL,
  `employee_designation` varchar(100) NOT NULL,
  `employee_image` text NOT NULL,
  `employee_doj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `employee_dot` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `emp_password` varchar(100) NOT NULL,
  `emp_level` int(11) NOT NULL,
  `emp_sub_level` int(11) NOT NULL DEFAULT '0',
  `user_role` int(11) DEFAULT NULL,
  `employee_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`main_employee_id`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_number`, `employee_address`, `employee_city`, `employee_country_id`, `employee_department`, `employee_designation`, `employee_image`, `employee_doj`, `employee_dot`, `emp_password`, `emp_level`, `emp_sub_level`, `user_role`, `employee_status`, `date_created`) VALUES
(1, 'Nadeem', 'Qureshi', 'nadeem.qureshi@bimcap.com', '1234567890', 'Bhilai', 'Bhilai', 1, '7', 'Full-Stack Developer', 'upload/2024/jun/20/FjU2lkcWYAgNG6d.jpg', '2025-03-20 11:42:28', '0000-00-00 00:00:00', '$2y$10$G9WcxQ/ulU2ugqGcz.rRDuJCJb3beEsE23mqY87dph/USWseQW0hO', 3, 0, 3, 1, '2025-03-03 07:59:45'),
(7, 'Yogesh', 'Sen', 'yogesh@bimcap.com', '911', 'Bhilai', 'Bhilai', 99, '1', '1', 'upload/2025/mar/18/Yogesh_BCP-Grey.png', '2025-03-26 16:00:00', '0000-00-00 00:00:00', '$2y$10$JcRLmMgUEFL8Ro9yUYc42uVlJSCE3rK6MUUKjZjXo/tML.UJpT1zy', 2, 1, 1, 1, '0000-00-00 00:00:00'),
(8, 'Sandeep', 'Sikdar', 'sandeep@bimcap.com', '911', 'Bhilai', 'Bhilai', 99, '2', '2', 'upload/2025/mar/18/image.jpg.png', '2024-07-17 16:00:00', '0000-00-00 00:00:00', '$2y$10$4opvfRI38VkOe82hk/o5NuR6oH2pY.mtgk4ufNQytp8.I0YwTC57O', 3, 2, 2, 1, '0000-00-00 00:00:00'),
(9, 'Avi', 'Singhal', 'avi@bimcap.com', '911', 'Bhilai', 'Bhilai', 99, '2', '2', 'upload/2025/mar/18/Avi Singhal_BCP-White.png', '2022-06-01 16:00:00', '0000-00-00 00:00:00', '$2y$10$84cQ1uTuWMDiIhH8C6ZEJObSzbqJuDnaGyWXu6Or1eLxdT63F0scW', 3, 2, 2, 1, '0000-00-00 00:00:00'),
(12, 'Gerald', 'Mabandos', 'gerald@bimcap.com', '911', 'Quezon City', 'Manila', 170, '1', '1', 'upload/2025/mar/19/Gerald_Mabandos_BCP-Grey.png', '2025-03-24 06:37:15', '0000-00-00 00:00:00', '$2y$10$ZOWxZK1M/HCjapyacgj4U.daN3G.w8tXp3x/u.PJl6JAZkd8RKYLK', 2, 1, 2, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `personality_ranks`
--

CREATE TABLE `personality_ranks` (
  `personality_rank_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `min_value_mind` int(11) DEFAULT NULL,
  `max_value_mind` int(11) DEFAULT NULL,
  `min_value_energy` int(11) DEFAULT NULL,
  `max_value_energy` int(11) DEFAULT NULL,
  `min_value_nature` int(11) DEFAULT NULL,
  `max_value_nature` int(11) DEFAULT NULL,
  `min_value_tactics` int(11) DEFAULT NULL,
  `max_value_tactics` int(11) DEFAULT NULL,
  `min_value_identity` int(11) DEFAULT NULL,
  `max_value_identity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personality_ranks`
--

INSERT INTO `personality_ranks` (`personality_rank_id`, `employee_id`, `min_value_mind`, `max_value_mind`, `min_value_energy`, `max_value_energy`, `min_value_nature`, `max_value_nature`, `min_value_tactics`, `max_value_tactics`, `min_value_identity`, `max_value_identity`) VALUES
(1, 7, 63, 37, 38, 62, 45, 55, 28, 72, 65, 35),
(2, 8, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `pe_assign_employee`
--

CREATE TABLE `pe_assign_employee` (
  `assign_id` int(11) NOT NULL,
  `assign_supervisor_id` int(11) NOT NULL,
  `assign_employee_id` int(11) NOT NULL,
  `assign_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_assign_employee`
--

INSERT INTO `pe_assign_employee` (`assign_id`, `assign_supervisor_id`, `assign_employee_id`, `assign_status`, `date_created`, `modification_date`) VALUES
(5, 7, 8, 1, '0000-00-00 00:00:00', NULL),
(6, 9, 7, 1, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pe_evaluation_history_id`
--

CREATE TABLE `pe_evaluation_history_id` (
  `evaluation_history_id` int(11) NOT NULL,
  `performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `emp_level` int(11) NOT NULL,
  `emp_sub_level` int(11) NOT NULL,
  `spectrum_id` int(11) NOT NULL,
  `goals_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_evaluation_history_id`
--

INSERT INTO `pe_evaluation_history_id` (`evaluation_history_id`, `performance_id`, `employee_id`, `supervisor_id`, `emp_level`, `emp_sub_level`, `spectrum_id`, `goals_id`, `date_created`, `modification_date`) VALUES
(1, 1, 7, 9, 2, 1, 1, 1, '2025-03-18 06:27:28', '2025-03-17 23:27:28'),
(2, 1, 7, 9, 2, 1, 1, 1, '2025-03-18 11:42:54', '2025-03-18 04:42:54'),
(3, 1, 7, 9, 2, 1, 1, 1, '2025-03-20 11:44:07', '2025-03-20 04:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `pe_evaluation_score_table`
--

CREATE TABLE `pe_evaluation_score_table` (
  `evaluation_﻿score_id` int(11) NOT NULL,
  `employee_evaluation_id` int(11) NOT NULL,
  `employee_marks_category_id` int(11) NOT NULL,
  `supervisor_marks_category_id` int(11) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `employee_feedback` text NOT NULL,
  `manager_feedback` text NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_evaluation_score_table`
--

INSERT INTO `pe_evaluation_score_table` (`evaluation_﻿score_id`, `employee_evaluation_id`, `employee_marks_category_id`, `supervisor_marks_category_id`, `question_id`, `employee_feedback`, `manager_feedback`, `modification_date`) VALUES
(1, 1, 2, 3, 1, 'Testing - Yogesh', 'Testing - Avi Amin', '2025-03-26 04:24:26'),
(2, 1, 3, 4, 2, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(3, 1, 1, 4, 3, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(4, 1, 5, 1, 4, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(5, 1, 1, 5, 5, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(6, 1, 6, 6, 6, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(7, 1, 3, 3, 7, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(8, 1, 4, 1, 8, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(9, 1, 1, 4, 9, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(10, 1, 2, 2, 10, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(11, 1, 4, 5, 11, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(12, 1, 5, 4, 12, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(13, 1, 6, 6, 13, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(14, 1, 5, 1, 14, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(15, 1, 4, 3, 15, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(16, 1, 1, 3, 16, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(17, 1, 4, 3, 17, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(18, 1, 3, 4, 18, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(19, 1, 5, 6, 19, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(20, 1, 2, 2, 20, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(21, 1, 2, 2, 21, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(22, 1, 6, 1, 22, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(23, 1, 2, 4, 23, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(24, 1, 6, 5, 24, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(25, 1, 3, 3, 25, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(26, 1, 2, 4, 26, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(27, 1, 1, 3, 27, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(28, 1, 5, 2, 28, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(29, 1, 2, 1, 29, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(30, 1, 4, 3, 30, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(31, 1, 5, 4, 31, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(32, 1, 6, 6, 32, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26'),
(33, 1, 1, 4, 33, 'Testing - Yogesh', 'Testing - Avi', '2025-03-26 04:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `pe_evaluation_table`
--

CREATE TABLE `pe_evaluation_table` (
  `employee_evaluation_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `evaluation_period` varchar(50) NOT NULL,
  `evaluation_start_date` varchar(50) NOT NULL,
  `evaluation_end_date` varchar(50) NOT NULL,
  `evaluation_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  `evaluation_delete_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_evaluation_table`
--

INSERT INTO `pe_evaluation_table` (`employee_evaluation_id`, `employee_id`, `evaluation_period`, `evaluation_start_date`, `evaluation_end_date`, `evaluation_status`, `date_created`, `modification_date`, `evaluation_delete_status`) VALUES
(1, 7, '182-e', '2024-07-01', '2024-12-30', 3, '2025-03-18 06:27:02', '2025-03-19 16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pe_goals_table`
--

CREATE TABLE `pe_goals_table` (
  `go﻿als_id` int(11) NOT NULL,
  `employee_evaluation_id` int(11) NOT NULL,
  `six_month_goal` text NOT NULL,
  `supervisor_six_month_goal` text NOT NULL,
  `twelve_month_goal` text NOT NULL,
  `supervisor_twelve_month_goal` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_goals_table`
--

INSERT INTO `pe_goals_table` (`go﻿als_id`, `employee_evaluation_id`, `six_month_goal`, `supervisor_six_month_goal`, `twelve_month_goal`, `supervisor_twelve_month_goal`, `date_created`, `modification_date`) VALUES
(1, 1, 'Testing - Yogesh', 'Testing - Avi Amin', 'Testing - Yogesh', 'Testing - Avi Amin', '2025-03-18 06:27:02', '2025-03-26 04:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `pe_marks_category_table`
--

CREATE TABLE `pe_marks_category_table` (
  `marks_category_id` int(11) NOT NULL,
  `marks_name` varchar(50) NOT NULL,
  `marks_value` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_marks_category_table`
--

INSERT INTO `pe_marks_category_table` (`marks_category_id`, `marks_name`, `marks_value`, `date_created`, `modification_date`) VALUES
(1, 'N/A for this Semester', 0, '2025-03-10 11:34:36', NULL),
(2, 'Needs Improvement', 20, '2025-03-10 11:34:36', NULL),
(3, 'Work in Progress', 40, '2025-03-13 08:58:44', NULL),
(4, 'Acceptable', 60, '2025-03-13 08:58:44', NULL),
(5, 'Good', 80, '2025-03-18 05:42:15', NULL),
(6, 'Outstanding', 100, '2025-03-18 05:42:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pe_question_table`
--

CREATE TABLE `pe_question_table` (
  `question_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `spectrum_id` int(11) NOT NULL,
  `question_weight_id` int(11) NOT NULL,
  `question_value` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_question_table`
--

INSERT INTO `pe_question_table` (`question_id`, `section_id`, `spectrum_id`, `question_weight_id`, `question_value`, `date_created`, `modification_date`) VALUES
(1, 1, 1, 1, 'You are able to understand all the tasks assigned to you, you have the necessary knowledge to understand the requirements of the tasks', '2025-03-18 06:10:20', NULL),
(2, 1, 1, 1, 'If you do not understand a task, you are able to ask the necessary questions early in the task assignment', '2025-03-18 06:10:36', NULL),
(3, 1, 1, 1, 'Your work is delivered within the given deadline', '2025-03-18 06:10:45', NULL),
(4, 1, 1, 1, 'If you are not able to meet a deadline, you are proactive to inform your supervisor ahead of the deadline submission', '2025-03-18 06:10:54', NULL),
(5, 1, 1, 2, 'Has a good understanding of LOD definitions based on latest BIM Forum release and able to question their modelling content', '2025-03-18 06:11:05', NULL),
(6, 1, 1, 2, 'Possesses great attention to detail, sheet graphic elements are aligned, legible, and make sure your modelled content is checked both in 2D and 3D views', '2025-03-18 06:11:17', NULL),
(7, 1, 1, 2, 'Ensure correct naming conventions for files and Revit elements as per your project\'s standards', '2025-03-18 06:11:27', NULL),
(8, 1, 1, 2, ' Your work is free of spelling mistakes', '2025-03-18 06:11:37', NULL),
(9, 4, 1, 1, 'Able to model and edit ARC elements in the LOD of your projects, up to LOD300, elements including walls, ceilings, doors, windows, and places rooms', '2025-03-18 06:12:31', NULL),
(10, 4, 1, 1, 'Able to model and edit Landscape elements in the LOD of your projects, up to LOD300, elements including property lines, site topography, roads, pavements, site furnishing, vegetation', '2025-03-18 06:12:42', NULL),
(11, 4, 1, 1, 'Able to model and edit Façade elements in the LOD of your projects, up to LOD300, elements including curtain walls and openings, façade massing, and skylights', '2025-03-18 06:12:53', NULL),
(12, 4, 1, 1, 'Able to model and edit Mechanical elements in the LOD of your projects, up to LOD300, elements including ducts, fittings, calculations, insulation, assemblies, detailed accessories', '2025-03-18 06:13:03', NULL),
(13, 4, 1, 1, 'Able to model and edit Electrical elements in the LOD of your projects, up to LOD300, elements including lighting fixtures, cable trays, circuits and routings', '2025-03-18 06:13:17', NULL),
(14, 4, 1, 1, 'Able to model and edit Plumbing and Fire elements in the LOD of your projects, up to LOD300, elements including plumbing fixtures and pipe routing', '2025-03-18 06:13:28', NULL),
(15, 4, 1, 1, 'Able to model and edit Structure elements in the LOD of your projects, up to LOD300, elements including beams, walls, columns, trusses, roofing, braces, foundations, openings, cut lengths, etc', '2025-03-18 06:13:42', NULL),
(16, 4, 1, 1, 'Able to model and edit Revit Families in the LOD of your projects, up to LOD300', '2025-03-18 06:13:50', NULL),
(17, 4, 1, 1, 'Input metadata into Revit elements in the LOD of your project, up to LOD300, excluding creating shared paremeters', '2025-03-18 06:13:58', NULL),
(18, 4, 1, 1, 'Able to read and interpret Construction Drawings to accurately model the geometry up to LOD300', '2025-03-18 06:14:07', NULL),
(19, 4, 1, 2, 'Able to conduct Clash Detections and Interference Checks to the assigned tolerance of your project', '2025-03-18 06:14:17', NULL),
(20, 4, 1, 2, 'Understands and applies the BIMCAP BIM Standards and Guidelines at LOD300', '2025-03-18 06:14:27', NULL),
(21, 4, 1, 2, 'Keeps model warnings under control, able to visually check for clashes, overlapping geometrics, clashes between disciplines and address with your team', '2025-03-18 06:14:40', NULL),
(22, 4, 1, 2, 'Create drawings and sheets from the Revit model as per the instructions and graphic styles set by your Supervisor', '2025-03-18 06:14:48', NULL),
(23, 4, 1, 2, 'Able to setup organized schedules with correct fields and complete information as per the instructions of your Supervisor', '2025-03-18 06:14:56', NULL),
(24, 4, 1, 2, 'Able to navigate and work in ACC as per your project\'s requirement', '2025-03-18 06:15:07', NULL),
(25, 3, 1, 1, 'Provides accurate Daily timetracked hours as per your employment contract requirements.', '2025-03-18 06:15:29', NULL),
(26, 3, 1, 1, 'Responsive in Bitrix24 communication with a response time of under 2 minutes', '2025-03-18 06:15:39', NULL),
(27, 3, 1, 1, 'Punctually attends all company meetings', '2025-03-18 06:15:49', NULL),
(28, 3, 1, 1, 'You are attentive, actively listening and involved during project and company meetings to provide insights and answer questions', '2025-03-18 06:15:59', NULL),
(29, 3, 1, 2, 'Provides regular feedback in the comments of the Bitrix24 tasks, workgroup chats, or during Project Briefings to keep your team updated', '2025-03-18 06:16:09', NULL),
(30, 3, 1, 2, 'Provides immediate updates upon completion of a task in the workgroup chat, and if applicable, by providing a task summary in the Bitrix24 task as well', '2025-03-18 06:16:18', NULL),
(31, 3, 1, 2, 'Understands the server’s organization to ensure that the folders are tidy and files saved in the correct location and not in your computer\'s desktop', '2025-03-18 06:16:29', NULL),
(32, 3, 1, 2, 'Understands the naming protocol when saving files to the Sharepoint server as per company\'s standard', '2025-03-18 06:16:37', NULL),
(33, 3, 1, 2, 'Logs Leave request correctly and within the required timeframes as per the Employee Handbook', '2025-03-18 06:16:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pe_question_weight_table`
--

CREATE TABLE `pe_question_weight_table` (
  `question_weight_id` int(11) NOT NULL,
  `question_weight_name` varchar(50) NOT NULL,
  `question_weight_value` float NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_question_weight_table`
--

INSERT INTO `pe_question_weight_table` (`question_weight_id`, `question_weight_name`, `question_weight_value`, `date_created`, `modification_date`) VALUES
(1, 'A', 0.7, '2025-03-07 10:32:14', NULL),
(2, 'B', 0.3, '2025-03-07 10:32:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pe_section_table`
--

CREATE TABLE `pe_section_table` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `section_instruction` text,
  `spectrum_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pe_section_table`
--

INSERT INTO `pe_section_table` (`section_id`, `section_name`, `section_instruction`, `spectrum_id`, `date_created`, `modification_date`) VALUES
(1, 'Production Capabilities', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2025-03-18 06:05:32', '2025-03-24 00:45:01'),
(3, 'Revit Capabilities', NULL, 1, '2025-03-18 06:09:29', NULL),
(4, 'Responsibilities', NULL, 1, '2025-03-18 06:09:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `salary_currency` varchar(50) NOT NULL,
  `salary_reason` text NOT NULL,
  `salary_type` varchar(50) NOT NULL,
  `basic_salary` text NOT NULL,
  `allowance` text NOT NULL,
  `salary_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee_id`, `created_by`, `salary_currency`, `salary_reason`, `salary_type`, `basic_salary`, `allowance`, `salary_date`, `salary_status`, `date_created`) VALUES
(1, 7, 1, 'INR', 'Testing', 'Regularisation', '0c120334f925e70b063d87ca537c66c27c93898c60a538618e92e646e3eda221e8889246027dd19fc2e4d98016ee14764ba5920390438df8d8414b233374d736UDz10Fmw0m1+a3okX166npekNbfabcdwlHFUe1i4sF0=', 'e4b34f240d47a5e78c68665ccc632b2a52606cc8ab837374a34186a803a37e9038bf47510b18ddae0bef49c39ae0e86ca8c30a754dbbc30e7a60f5cdb3eb5417id1MUqjYvpU+9/7u7X0v80TOMhyKnkML56EHvujOz/Y=', '2025-03-19 16:00:00', 1, '2025-03-26 03:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `software_expertise`
--

CREATE TABLE `software_expertise` (
  `software_expertise_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `software_name` varchar(50) NOT NULL,
  `software_value` int(11) NOT NULL,
  `software_image` varchar(100) NOT NULL,
  `software_status` int(11) NOT NULL DEFAULT '1',
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software_expertise`
--

INSERT INTO `software_expertise` (`software_expertise_id`, `employee_id`, `software_name`, `software_value`, `software_image`, `software_status`, `modification_date`) VALUES
(3, 8, 'Xammp Server', 3, '', 1, '2025-03-26 05:01:24'),
(5, 7, 'Xammp Server', 4, 'upload/2025/mar/26/images.png', 1, '2025-03-26 05:30:52'),
(6, 7, 'Revit', 2, 'upload/2025/mar/26/revit_grande.png', 1, '2025-03-26 10:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `spectrum_table`
--

CREATE TABLE `spectrum_table` (
  `spectrum_id` int(11) NOT NULL,
  `spectrum_color_code` varchar(50) NOT NULL,
  `spectrum_color_name` varchar(50) NOT NULL,
  `employee_level` varchar(50) NOT NULL,
  `employee_sub_level` varchar(50) NOT NULL,
  `spectrum_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spectrum_table`
--

INSERT INTO `spectrum_table` (`spectrum_id`, `spectrum_color_code`, `spectrum_color_name`, `employee_level`, `employee_sub_level`, `spectrum_status`, `date_created`) VALUES
(1, '808080', 'Grey', '2', '1', 1, '2025-03-18 05:47:12'),
(2, 'FFFFFF', 'White', '3', '2', 1, '2025-03-18 06:01:53'),
(3, '808080', 'Grey', '4', '3', 1, '2025-03-19 10:52:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

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
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD PRIMARY KEY (`history_employee_id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`leaves_id`);

--
-- Indexes for table `employee_level`
--
ALTER TABLE `employee_level`
  ADD PRIMARY KEY (`employee_level_id`);

--
-- Indexes for table `employee_personality`
--
ALTER TABLE `employee_personality`
  ADD PRIMARY KEY (`employee_personality_id`);

--
-- Indexes for table `employee_sub_level`
--
ALTER TABLE `employee_sub_level`
  ADD PRIMARY KEY (`employee_sub_level_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`main_employee_id`);

--
-- Indexes for table `personality_ranks`
--
ALTER TABLE `personality_ranks`
  ADD PRIMARY KEY (`personality_rank_id`);

--
-- Indexes for table `pe_assign_employee`
--
ALTER TABLE `pe_assign_employee`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `pe_evaluation_history_id`
--
ALTER TABLE `pe_evaluation_history_id`
  ADD PRIMARY KEY (`evaluation_history_id`);

--
-- Indexes for table `pe_evaluation_score_table`
--
ALTER TABLE `pe_evaluation_score_table`
  ADD PRIMARY KEY (`evaluation_﻿score_id`);

--
-- Indexes for table `pe_evaluation_table`
--
ALTER TABLE `pe_evaluation_table`
  ADD PRIMARY KEY (`employee_evaluation_id`);

--
-- Indexes for table `pe_goals_table`
--
ALTER TABLE `pe_goals_table`
  ADD PRIMARY KEY (`go﻿als_id`);

--
-- Indexes for table `pe_marks_category_table`
--
ALTER TABLE `pe_marks_category_table`
  ADD PRIMARY KEY (`marks_category_id`);

--
-- Indexes for table `pe_question_table`
--
ALTER TABLE `pe_question_table`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `pe_question_weight_table`
--
ALTER TABLE `pe_question_weight_table`
  ADD PRIMARY KEY (`question_weight_id`);

--
-- Indexes for table `pe_section_table`
--
ALTER TABLE `pe_section_table`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `software_expertise`
--
ALTER TABLE `software_expertise`
  ADD PRIMARY KEY (`software_expertise_id`);

--
-- Indexes for table `spectrum_table`
--
ALTER TABLE `spectrum_table`
  ADD PRIMARY KEY (`spectrum_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `history_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `leaves_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_level`
--
ALTER TABLE `employee_level`
  MODIFY `employee_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_personality`
--
ALTER TABLE `employee_personality`
  MODIFY `employee_personality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_sub_level`
--
ALTER TABLE `employee_sub_level`
  MODIFY `employee_sub_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `main_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personality_ranks`
--
ALTER TABLE `personality_ranks`
  MODIFY `personality_rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pe_assign_employee`
--
ALTER TABLE `pe_assign_employee`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pe_evaluation_history_id`
--
ALTER TABLE `pe_evaluation_history_id`
  MODIFY `evaluation_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pe_evaluation_score_table`
--
ALTER TABLE `pe_evaluation_score_table`
  MODIFY `evaluation_﻿score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pe_evaluation_table`
--
ALTER TABLE `pe_evaluation_table`
  MODIFY `employee_evaluation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pe_goals_table`
--
ALTER TABLE `pe_goals_table`
  MODIFY `go﻿als_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pe_marks_category_table`
--
ALTER TABLE `pe_marks_category_table`
  MODIFY `marks_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pe_question_table`
--
ALTER TABLE `pe_question_table`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pe_question_weight_table`
--
ALTER TABLE `pe_question_weight_table`
  MODIFY `question_weight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pe_section_table`
--
ALTER TABLE `pe_section_table`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `software_expertise`
--
ALTER TABLE `software_expertise`
  MODIFY `software_expertise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spectrum_table`
--
ALTER TABLE `spectrum_table`
  MODIFY `spectrum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
