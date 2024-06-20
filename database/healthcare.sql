-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2024 at 02:48 PM
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
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `appointment_type` varchar(20) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `appointment_type`, `status`, `created_at`, `updated_at`) VALUES
(23, 'bc4bd560-3360-4dbe-ba9a-8d19b4fd58c7', 'family_planning', 'approved', '2024-05-20 21:11:53', '2024-05-20 21:11:53'),
(24, 'd35a7295-922e-47ee-aabb-38d70b13d9ae', 'vaccination', 'approved', '2024-06-11 22:16:02', '2024-05-22 22:16:02'),
(25, '61518a32-6f23-4b0d-bad0-ce4d12f7560e', 'family_planning', 'pending', '2024-01-18 22:22:30', '2024-05-29 22:13:12'),
(26, '4687e68a-e21e-4811-b907-82011eb2f3d7', 'vaccination', 'approved', '2024-06-12 13:26:00', '2024-05-29 22:14:25'),
(27, '217db051-015b-4db6-8bb4-8e9217c8d197', 'family_planning', 'approved', '2024-05-29 22:14:28', '2024-05-29 22:14:28'),
(28, 'd7f01670-c1c7-4d86-ae72-42344749a236', 'family_planning', 'pending', '2024-05-29 22:40:48', '2024-05-29 22:40:48'),
(29, '867eb2ea-2bdb-488b-b404-10d061dfc1a4', 'family_planning', 'pending', '2024-06-01 14:16:45', '2024-06-01 14:16:45'),
(30, '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b', 'family_planning', 'pending', '2024-06-09 09:30:10', '2024-06-09 09:30:10'),
(31, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'vaccination', 'pending', '2024-06-20 22:06:21', '2024-06-20 22:06:21'),
(32, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'vaccination', 'pending', '2024-06-20 22:15:14', '2024-06-20 22:15:14'),
(33, 'a8586277-3599-4fdf-8abe-d00e0c03afeb', 'family_planning', 'pending', '2024-06-20 22:29:52', '2024-06-20 22:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `family_planning`
--

DROP TABLE IF EXISTS `family_planning`;
CREATE TABLE IF NOT EXISTS `family_planning` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` text,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `appointment_type` varchar(20) NOT NULL DEFAULT 'family_planning',
  `appointment_time` time DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `address`, `province`, `city`, `brgy`, `phone_number`, `appointment_type`, `appointment_time`, `appointment_date`, `status`, `user_id`) VALUES
(38, 'helloworld', 'asda', 'asd', '2024-05-03', 'asda', NULL, NULL, NULL, '2234234', 'family_planning', '15:17:00', '2024-05-22', 'cancelled', 'd35a7295-922e-47ee-aabb-38d70b13d9ae'),
(39, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '61518a32-6f23-4b0d-bad0-ce4d12f7560e'),
(40, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '4687e68a-e21e-4811-b907-82011eb2f3d7'),
(41, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '217db051-015b-4db6-8bb4-8e9217c8d197'),
(42, 'helloworold', ';l', ';l', '2024-05-29', ';lkek', NULL, NULL, NULL, '012939012', 'family_planning', '22:40:00', '2024-05-29', 'approved', 'd7f01670-c1c7-4d86-ae72-42344749a236'),
(43, 'asd', 'asd', 'asd', '2024-06-01', 'asuhd', NULL, NULL, NULL, '192738123', 'family_planning', '14:16:00', '2024-06-01', 'approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4'),
(44, 'test name', 'd', 'test lastname', '2024-06-09', 'bacolod city', NULL, NULL, NULL, '09218287398', 'family_planning', '09:30:00', '2024-06-09', 'approved', '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b'),
(45, 'test familyPLanning', 'test familyPLanning', 'test familyPLanning', '2024-06-20', 'test familyPLanning', '041000000-batangas', '041005000-batangas_city', '041005011-maapas', '2133243244', 'family_planning', '22:29:00', '2024-06-20', 'pending', 'a8586277-3599-4fdf-8abe-d00e0c03afeb');

-- --------------------------------------------------------

--
-- Table structure for table `family_planning_methods`
--

DROP TABLE IF EXISTS `family_planning_methods`;
CREATE TABLE IF NOT EXISTS `family_planning_methods` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `method_name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning_methods`
--

INSERT INTO `family_planning_methods` (`id`, `user_id`, `method_name`, `status`, `created_at`, `updated_at`) VALUES
(7, NULL, 'IUD', NULL, '2024-06-02 20:47:45', '2024-06-02 20:47:45'),
(8, NULL, 'PILLS 2', NULL, '2024-06-02 21:14:56', '2024-06-02 21:14:56'),
(10, NULL, 'INT', NULL, '2024-06-07 22:04:46', '2024-06-07 22:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'active'),
(226, NULL, 'test doctor account', 'doctor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinations`
--

DROP TABLE IF EXISTS `vaccinations`;
CREATE TABLE IF NOT EXISTS `vaccinations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `body_weight` varchar(50) DEFAULT NULL,
  `body_length` varchar(50) DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `brgy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `philhealth` varchar(20) DEFAULT NULL,
  `4ps_number` varchar(20) DEFAULT NULL,
  `mother_maiden_name` varchar(100) DEFAULT NULL,
  `mother_birth_date` date DEFAULT NULL,
  `mother_age` int DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_birth_date` date DEFAULT NULL,
  `father_age` int DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending',
  `appointment_type` varchar(20) NOT NULL DEFAULT 'vaccination',
  `appointment_time` time DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `body_weight`, `body_length`, `province`, `city`, `brgy`, `address`, `philhealth`, `4ps_number`, `mother_maiden_name`, `mother_birth_date`, `mother_age`, `mother_occupation`, `father_name`, `father_birth_date`, `father_age`, `father_occupation`, `phone_number`, `status`, `appointment_type`, `appointment_time`, `appointment_date`) VALUES
(32, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'jhqgwj', 'jhgjhqwg', '2024-05-12', 'j', 'hgj', '', '', '', NULL, 'wqehqwe', 'kqwhek', 'kqjehqw', '2024-05-12', 26, 'kjqweqhjw', 'kqwjeh', '2024-05-12', 123, 'kqwje', '817263812', 'cancelled', 'vaccination', '17:58:00', '2024-05-12'),
(33, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', '', '', '', NULL, 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '20:19:00', '2024-05-17'),
(34, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', '', '', '', NULL, 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '20:19:00', '2024-05-17'),
(35, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'Desabelle', 'Balansa', '2024-05-19', '2831', '19823', '', '', '', NULL, '91823791273', '17232832', 'Marites', '2024-05-19', 29, 'none', 'Josepth', '2024-05-19', 82, 'none', '09101791954', 'cancelled', 'vaccination', '08:52:00', '2024-05-19'),
(36, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'qwe', 'qweqw', 'qwe', '2024-06-20', '09', '09', '012900000-ilocos_sur', '012906000-city_of_candon', '012906018-caterman', NULL, 'qwe', 'qwe', 'aklsdj', '2024-06-20', 9, ';kwe', ';lwje', '2024-06-20', 2, ';k', '928392', 'pending', 'vaccination', '21:57:00', '2024-06-20'),
(37, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'josh', 'josh', 'josh', '2024-06-20', '12', '23', '031400000-bulacan', '031410000-city_of_malolos', '031410006-balayong', 'josh', '2131321', 'o123u', 'wqkle', '2024-06-20', 4, 'klej', 'lwke', '2024-06-20', 98, 's;dlkf', '03294802384028', 'pending', 'vaccination', '22:15:00', '2024-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

DROP TABLE IF EXISTS `vaccines`;
CREATE TABLE IF NOT EXISTS `vaccines` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vaccine` varchar(255) NOT NULL,
  `abbreviation` varchar(50) DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `doses` varchar(255) NOT NULL,
  `approved_ages` varchar(100) DEFAULT NULL,
  `description` text,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `vaccine`, `abbreviation`, `manufacturer`, `doses`, `approved_ages`, `description`, `status`, `created_at`, `updated_at`) VALUES
(8, 'helloworld', 'helloworld', 'helqwej', 'lkqwjel', 'lkqwje', 'elk', 'active', '2024-05-21 14:26:29', '2024-05-21 14:26:29'),
(11, 'qwe', 'qwe', 'jhg', 'jhg', 'jhg', 'jhg', 'active', '2024-05-22 13:39:21', '2024-05-22 13:39:21'),
(13, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:43:43', '2024-05-22 13:43:43'),
(14, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:45:21', '2024-05-22 13:45:21'),
(15, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:45:43', '2024-05-22 13:45:43'),
(16, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:46:13', '2024-05-22 13:46:13'),
(17, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:48:49', '2024-05-22 13:48:49'),
(18, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:50:05', '2024-05-22 13:50:05'),
(19, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:51:07', '2024-05-22 13:51:07'),
(20, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:51:20', '2024-05-22 13:51:20'),
(21, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:57:28', '2024-05-22 13:57:28'),
(22, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 14:00:35', '2024-05-22 14:00:35'),
(23, 'hfgh', 'fhfgffgh', 'fghfh', 'fhghhh', 'fgh', 'fgh', 'active', '2024-05-22 14:09:06', '2024-05-22 14:09:06'),
(24, 'hfgh', 'fhfgffgh', 'fghfh', 'fhghhh', 'fgh', 'fgh', 'active', '2024-05-22 14:09:55', '2024-05-22 14:09:55'),
(25, 'asd', 'asdad', 'das', 'asd', 'dad', 'asda', 'active', '2024-05-22 14:18:03', '2024-05-22 14:18:03'),
(26, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:40:57', '2024-05-22 14:40:57'),
(27, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:41:25', '2024-05-22 14:41:25'),
(28, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:41:40', '2024-05-22 14:41:40'),
(29, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:42:18', '2024-05-22 14:42:18'),
(30, 'dfg', 'dfg', 'fgdfg', 'dfgdfgdf', 'gdfgdf', 'gfgd', 'active', '2024-05-22 15:05:44', '2024-05-22 15:05:44'),
(31, 'test helloworld', 'test helloworld', 'test helloworld', 'test helloworld', '234', 'test helloworld', 'active', '2024-06-02 13:03:08', '2024-06-02 13:03:08'),
(33, '', '', '', '', '', '', 'active', '2024-06-10 14:01:40', '2024-06-10 14:01:40'),
(34, '', '', '', '', '', '', 'active', '2024-06-10 14:02:07', '2024-06-10 14:02:07'),
(35, '', '', '', '', '', '', 'active', '2024-06-10 14:02:58', '2024-06-10 14:02:58'),
(36, '', '', '', '', '', '', 'active', '2024-06-10 14:03:19', '2024-06-10 14:03:19'),
(37, '', '', '', '', '', '', 'active', '2024-06-10 14:04:37', '2024-06-10 14:04:37'),
(38, '', '', '', '', '', '', 'active', '2024-06-10 14:05:43', '2024-06-10 14:05:43'),
(39, '', '', '', '', '', '', 'active', '2024-06-10 14:07:47', '2024-06-10 14:07:47'),
(40, '', '', '', '', '', '', 'active', '2024-06-10 14:09:37', '2024-06-10 14:09:37'),
(41, '', '', '', '', '', '', 'active', '2024-06-10 14:11:17', '2024-06-10 14:11:17'),
(42, '', '', '', '', '', '', 'active', '2024-06-10 14:11:43', '2024-06-10 14:11:43'),
(43, '', '', '', '', '', '', 'active', '2024-06-10 14:12:20', '2024-06-10 14:12:20'),
(44, '', '', '', '', '', '', 'active', '2024-06-10 14:12:35', '2024-06-10 14:12:35'),
(45, '', '', '', '', '', '', 'active', '2024-06-10 14:18:14', '2024-06-10 14:18:14'),
(46, '', '', '', '', '', '', 'active', '2024-06-10 14:18:37', '2024-06-10 14:18:37'),
(47, '', '', '', '', '', '', 'active', '2024-06-10 14:20:00', '2024-06-10 14:20:00'),
(48, '', '', '', '', '', '', 'active', '2024-06-10 14:22:28', '2024-06-10 14:22:28'),
(49, '', '', '', '', '', '', 'active', '2024-06-10 14:24:41', '2024-06-10 14:24:41'),
(50, '', '', '', '', '', '', 'active', '2024-06-10 14:25:50', '2024-06-10 14:25:50'),
(51, '', '', '', '', '', '', 'active', '2024-06-10 14:25:56', '2024-06-10 14:25:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
