-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2024 at 10:36 AM
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
CREATE DATABASE IF NOT EXISTS `healthcare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `healthcare`;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `appointment_type` varchar(20) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `address`, `province`, `city`, `brgy`, `appointment_type`, `status`, `created_at`, `updated_at`) VALUES
(39, '270b7225-6078-44ab-81ca-91152a119575', 'none', '037100000-zambales', '037107000-city_of_olongapo', '037107002-banicain', 'family_planning', 'pending', '2024-07-14 21:07:51', '2024-07-14 21:07:51'),
(40, '65c8a38d-1265-489e-b3f6-2c4efbcd0c0a', '', 'surigao del norte', 'city of surigao', 'anomar', 'family_planning', 'pending', '2024-07-14 21:16:32', '2024-07-14 21:16:32'),
(41, '18e8b9b3-9e9a-4e9c-8acc-fed2264e0254', '037100000-zambales', '037100000-zambales', '037107000-city_of_olongapo', 'anomar', 'family_planning', 'pending', '2024-07-04 21:46:23', '2024-07-04 21:46:23'),
(42, 'ef38c693-8da2-48d6-b199-752c389ea743', '', 'cagayan', 'tuguegarao_city', 'centro_8_(pob.)', 'family_planning', 'pending', '2024-07-21 09:06:37', '2024-07-21 09:06:37'),
(43, 'e79c84ad-b324-4e97-baec-06b04850a2f5', '', 'pampanga', 'city_of_angeles', 'pandan', 'vaccination', 'pending', '2024-10-06 21:35:44', '2024-10-06 21:35:44'),
(44, '23f7f597-8ee3-4d1c-ae5b-d3617e3f1628', '', 'pangasinan', 'city_of_dagupan', 'bacayao_sur', 'vaccination', 'pending', '2024-10-06 21:37:27', '2024-10-06 21:37:27'),
(45, 'e57660e9-ceb3-4e23-8354-196f261d6de7', '', 'la_union', 'city_of_san_fernando', 'bacsil', 'family_planning', 'pending', '2024-10-06 21:50:48', '2024-10-06 21:50:48'),
(46, 'b384abf3-6a21-4abb-8ad7-25eb024f842c', '', 'la_union', 'city_of_san_fernando', 'cabarsican', 'family_planning', 'pending', '2024-10-06 21:54:01', '2024-10-06 21:54:01'),
(47, '8991d125-17eb-43d1-920e-d4274c37b5e2', '', 'la_union', 'city_of_san_fernando', 'cadaclan', 'family_planning', 'pending', '2024-10-06 21:54:33', '2024-10-06 21:54:33'),
(48, 'f245b6f4-a2d6-4cf2-981a-8cea36aec8f5', '', 'ilocos_sur', 'city_of_vigan', 'camangaan', 'family_planning', 'pending', '2024-10-06 21:57:29', '2024-10-06 21:57:29'),
(49, 'eda8c75e-a40a-48be-afa1-20c51c6ad6f2', '', 'la_union', 'city_of_san_fernando', 'cabaroan', 'family_planning', 'pending', '2024-10-06 22:10:21', '2024-10-06 22:10:21'),
(50, '9f22fde2-58b0-455a-b66f-a17d1f5a2dd8', '', 'kalinga', 'city_of_tabuk', 'cabaritan', 'vaccination', 'pending', '2024-10-06 22:12:10', '2024-10-06 22:12:10'),
(51, 'f7126b57-23e2-4480-92d6-a7049a31942d', '', 'la_union', 'city_of_san_fernando', 'cabarsican', 'family_planning', 'pending', '2024-10-16 20:40:23', '2024-10-16 20:40:23'),
(52, '60fcc8da-473c-4878-8093-e589dc76d7ea', '', 'cavite', 'city_of_cavite', 'barangay_23', 'vaccination', 'pending', '2024-10-16 22:13:27', '2024-10-16 22:13:27'),
(53, 'd954c88b-c2da-405b-b414-eb2fca00d5ff', '', 'tarlac', 'city_of_tarlac', 'batang', 'vaccination', 'pending', '2024-10-19 15:47:30', '2024-10-19 15:47:30'),
(54, '824252dc-96b2-4238-8bae-b3124521dc20', '', 'la_union', 'city_of_san_fernando', 'apaleng', 'vaccination', 'pending', '2024-10-19 15:47:51', '2024-10-19 15:47:51'),
(55, 'b6f08e52-01c0-4e30-a99c-86a5ecdb711e', '', 'bulacan', 'city_of_malolos', 'bangkal', 'family_planning', 'pending', '2024-10-19 18:14:19', '2024-10-19 18:14:19');

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
  `suffix` varchar(50) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `address` text,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `appointment_type` varchar(20) NOT NULL DEFAULT 'family_planning',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `age`, `birth_date`, `current_address`, `address`, `province`, `city`, `brgy`, `phone_number`, `appointment_type`, `status`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(38, 'helloworld', 'asda', 'asd', NULL, NULL, '2024-05-03', NULL, 'asda', NULL, NULL, NULL, '2234234', 'family_planning', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '', '2024-06-23 09:28:21', '2024-06-24 19:49:42'),
(39, 'asdasd', 'asdasd', 'asdasd', NULL, NULL, '2024-05-29', NULL, 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', 'approved', '61518a32-6f23-4b0d-bad0-ce4d12f7560e', '', '2024-06-23 09:28:21', '2024-06-24 19:50:15'),
(40, 'asdasd', 'asdasd', 'asdasd', NULL, NULL, '2024-05-29', NULL, 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', 'approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(41, 'asdasd', 'asdasd', 'asdasd', NULL, NULL, '2024-05-29', NULL, 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', 'approved', '217db051-015b-4db6-8bb4-8e9217c8d197', '', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(42, 'helloworold', ';l', ';l', NULL, NULL, '2024-05-29', NULL, ';lkek', NULL, NULL, NULL, '012939012', 'family_planning', 'approved', 'd7f01670-c1c7-4d86-ae72-42344749a236', '', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(43, 'asd', 'asd', 'asd', NULL, NULL, '2024-06-01', NULL, 'asuhd', NULL, NULL, NULL, '192738123', 'family_planning', 'approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4', '', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(44, 'test name', 'd', 'test lastname', NULL, NULL, '2024-06-09', NULL, 'bacolod city', NULL, NULL, NULL, '09218287398', 'family_planning', 'approved', '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b', '', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(45, 'test familyPLanning', 'test familyPLanning', 'test familyPLanning', NULL, NULL, '2024-06-20', NULL, 'test familyPLanning', '041000000-batangas', '041005000-batangas_city', '041005011-maapas', '2133243244', 'family_planning', 'approved', 'a8586277-3599-4fdf-8abe-d00e0c03afeb', '', '2024-06-23 09:28:21', '2024-06-23 09:51:01'),
(46, 'joshua balasa', 'lkdlkasjd', 'lkajsdljk', NULL, NULL, '2024-06-22', NULL, 'laksdlkasjl', '064500000-negros_occidental', '064501000-city_of_bacolod', '064501005-barangay_10_(pob.)', '1231231290909', 'family_planning', 'approved', '906fe89a-bc1b-4371-9e17-1452b5a3f7ca', '', '2024-06-23 09:28:21', '2024-06-23 09:51:01'),
(47, 'ttest timestamp', 'qwhehqwe', 'kjhqwekjhqw', NULL, NULL, '2024-06-23', NULL, 'qwkjehqwkjhe', '064500000-negros_occidental', '064501000-city_of_bacolod', '064501002-alijis', '09120391239', 'family_planning', 'approved', 'a82388c3-02af-40a0-8ab9-03a4aa318a03', '', '2024-06-23 09:31:49', '2024-06-23 09:51:01'),
(48, 'test', 'test', 'test', NULL, NULL, '2024-06-29', NULL, 'test', '074600000-negros_oriental', '074621000-city_of_tanjay', '074621003-luca', '92137912', 'family_planning', 'approved', '11019d6b-8a20-4b83-8b0c-9276adafb707', '', '2024-06-29 12:16:09', '2024-06-30 11:09:25'),
(49, 'test', 'test', 'test', NULL, NULL, '2024-07-04', NULL, 'test addresses', '074600000-negros_oriental', '074606000-city_of_bayawan', '074606003-banga', '1983798123778', 'family_planning', 'pending', '18e8b9b3-9e9a-4e9c-8acc-fed2264e0254', '', '2024-07-04 21:46:23', '2024-07-04 21:46:23'),
(50, 'mit', 'ttest', 'test', NULL, NULL, '2024-07-14', NULL, 'none', '037100000-zambales', '037107000-city_of_olongapo', '037107002-banicain', '12333', 'family_planning', 'pending', '270b7225-6078-44ab-81ca-91152a119575', '', '2024-07-14 21:07:51', '2024-07-14 21:07:51'),
(51, 'test format', 'ttest', 'test', NULL, NULL, '2024-07-14', NULL, 'none', '166700000-surigao_del_norte', '166724000-city_of_surigao', '166724003-anomar', '1111111111111', 'family_planning', 'pending', '65c8a38d-1265-489e-b3f6-2c4efbcd0c0a', '', '2024-07-14 21:16:32', '2024-07-14 21:16:32'),
(52, 'test family planninh', 'test', 'test', NULL, NULL, '2024-07-21', NULL, 'test ', '021500000-cagayan', '021529000-tuguegarao_city', '021529010-centro_8_(pob.)', '13213131213313', 'family_planning', 'approved', 'ef38c693-8da2-48d6-b199-752c389ea743', '', '2024-07-21 09:06:37', '2024-07-21 09:08:00'),
(53, 'wwe', 'ew', 'qw', NULL, NULL, '2024-10-06', NULL, 'qwe', '013300000-la_union', '013314000-city_of_san_fernando', '013314003-bacsil', '1123312', 'family_planning', 'pending', 'e57660e9-ceb3-4e23-8354-196f261d6de7', NULL, '2024-10-06 21:50:48', '2024-10-06 21:50:48'),
(54, 'wwe', 'ew', 'qw', NULL, NULL, '2024-10-06', NULL, 'qwe', '013300000-la_union', '013314000-city_of_san_fernando', '013314016-cabarsican', '1123312', 'family_planning', 'pending', 'b384abf3-6a21-4abb-8ad7-25eb024f842c', NULL, '2024-10-06 21:54:01', '2024-10-06 21:54:01'),
(55, 'wwe', 'ew', 'qw', NULL, NULL, '2024-10-06', NULL, 'qwe', '013300000-la_union', '013314000-city_of_san_fernando', '013314017-cadaclan', '1123312', 'family_planning', 'pending', '8991d125-17eb-43d1-920e-d4274c37b5e2', NULL, '2024-10-06 21:54:33', '2024-10-06 21:54:33'),
(56, 'wwe', 'ew', 'qw', NULL, NULL, '2024-10-06', NULL, 'qwe', '012900000-ilocos_sur', '012934000-city_of_vigan', '012934017-camangaan', '1123312', 'family_planning', 'pending', 'f245b6f4-a2d6-4cf2-981a-8cea36aec8f5', NULL, '2024-10-06 21:57:29', '2024-10-06 21:57:29'),
(57, 'sadf', 'sdf', 'sdf', NULL, NULL, '2024-10-06', NULL, 'qweq', '012800000-ilocos_norte', '012812000-city_of_laoag', '012812014-bgy._no._54-b,_camangaan', '123123', 'family_planning', 'pending', 'eca2f882-188a-4447-b9dd-8e3ad0399ff4', NULL, '2024-10-06 22:00:38', '2024-10-06 22:00:38'),
(58, 'wwe', 'ew', 'qw', NULL, NULL, '2024-10-06', NULL, 'qwe', '013300000-la_union', '013314000-city_of_san_fernando', '013314015-cabaroan', '1123312', 'family_planning', 'pending', 'eda8c75e-a40a-48be-afa1-20c51c6ad6f2', '65dab2ca1443bbd2dd350e123ef359b5.jpg', '2024-10-06 22:10:21', '2024-10-06 22:10:21'),
(59, 'test', 'qwe', 'sdf', 'sdf', '23', '2024-10-16', NULL, 'werwer', '013300000-la_union', '013314000-city_of_san_fernando', '013314016-cabarsican', '23234234423', 'family_planning', 'pending', 'f7126b57-23e2-4480-92d6-a7049a31942d', 'bcac5217b8be1ead63ed54f06bf4b6fd.jpg', '2024-10-16 20:40:23', '2024-10-16 20:40:23'),
(60, 'DSAF', 'SDF', 'SDF', 'SDF', '16', '2024-10-19', 'ASLKDJ', 'LKJASD', '031400000-bulacan', '031410000-city_of_malolos', '031410008-bangkal', '09101791954', 'family_planning', 'pending', 'b6f08e52-01c0-4e30-a99c-86a5ecdb711e', '6ff7e03dcc0ffb2438f0debe3615287d.jpg', '2024-10-19 18:14:19', '2024-10-19 18:14:19');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning_methods`
--

INSERT INTO `family_planning_methods` (`id`, `user_id`, `method_name`, `status`, `created_at`, `updated_at`) VALUES
(12, NULL, 'Birth control pills', NULL, '2024-06-28 22:57:14', '2024-06-28 22:57:14'),
(13, NULL, 'Birth control patch', NULL, '2024-06-28 22:57:29', '2024-06-28 22:57:29'),
(14, NULL, 'Birth control implant', NULL, '2024-06-28 22:57:36', '2024-06-28 22:57:36'),
(15, NULL, 'Birth control shot (Depo-Provera)', NULL, '2024-06-28 22:57:44', '2024-06-28 22:57:44'),
(16, NULL, 'Condoms:', NULL, '2024-06-28 22:57:59', '2024-06-28 22:57:59'),
(17, NULL, 'Emergency contraceptive pills (ECPs', NULL, '2024-06-28 22:58:18', '2024-06-28 22:58:18'),
(18, NULL, 'Sterilization (Tubal ligation or vasectomy)', NULL, '2024-06-28 22:58:26', '2024-06-28 22:58:26'),
(19, NULL, 'TEST', NULL, '2024-07-14 21:04:10', '2024-07-14 21:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `role` int NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `role`, `timestamp`) VALUES
(1, 'admin', 0, '2024-06-22 23:38:35'),
(2, 'admin', 1, '2024-06-22 23:46:35'),
(3, 'admin', 0, '2024-06-22 23:46:49'),
(4, 'admin', 1, '2024-06-22 23:47:24'),
(5, 'admin', 0, '2024-06-22 23:47:40'),
(6, 'system admin', 0, '2024-06-23 07:32:55'),
(7, 'system admin', 0, '2024-06-23 09:35:24'),
(8, 'system admin', 0, '2024-06-23 09:38:35'),
(9, 'system admin', 0, '2024-06-23 09:45:51'),
(10, 'system admin', 0, '2024-06-23 09:49:51'),
(11, 'system admin', 1, '2024-06-23 09:50:04'),
(12, 'healthcare admin', 1, '2024-06-25 22:36:46'),
(13, 'system admin', 1, '2024-06-27 20:56:17'),
(14, 'system admin', 1, '2024-06-27 21:28:25'),
(15, 'system admin', 0, '2024-06-27 21:29:42'),
(16, 'system admin', 0, '2024-06-28 22:04:13'),
(17, 'system admin', 1, '2024-06-28 22:04:58'),
(18, 'system admin', 1, '2024-06-29 12:16:17'),
(19, 'test doctor account', 4, '2024-06-29 12:36:35'),
(20, 'test doctor account', 4, '2024-06-29 12:38:04'),
(21, 'test doctor account', 4, '2024-06-29 12:42:48'),
(22, 'test doctor account', 4, '2024-06-29 12:43:51'),
(23, 'test doctor account', 4, '2024-06-29 12:47:08'),
(24, 'test doctor account', 4, '2024-06-29 12:47:52'),
(25, 'test doctor account', 4, '2024-06-29 12:50:03'),
(26, 'test doctor account', 4, '2024-06-29 12:57:37'),
(27, 'test doctor account', 4, '2024-06-29 12:58:47'),
(28, 'system admin', 1, '2024-06-29 13:24:06'),
(29, 'test doctor account', 4, '2024-06-29 13:24:21'),
(30, 'system admin', 1, '2024-06-29 15:22:11'),
(31, 'test doctor account', 4, '2024-06-29 15:22:40'),
(32, 'system admin', 1, '2024-06-29 15:30:19'),
(33, 'test doctor account', 4, '2024-06-29 15:45:45'),
(34, 'test doctor account', 4, '2024-06-29 15:58:32'),
(35, 'system admin', 1, '2024-06-29 16:02:27'),
(36, 'test doctor account', 4, '2024-06-29 22:21:27'),
(37, 'patient', 2, '2024-06-29 23:44:51'),
(38, 'patient', 2, '2024-06-30 00:19:39'),
(39, 'patient', 2, '2024-06-30 00:24:05'),
(40, 'patient', 2, '2024-06-30 00:26:05'),
(41, 'system admin', 1, '2024-06-30 00:31:21'),
(42, 'test doctor account', 4, '2024-06-30 00:31:30'),
(43, 'patient', 2, '2024-06-30 00:32:44'),
(44, 'patient', 2, '2024-06-30 09:04:54'),
(45, 'system admin', 1, '2024-06-30 09:20:18'),
(46, 'patient', 2, '2024-06-30 09:20:26'),
(47, 'patient', 2, '2024-06-30 10:01:06'),
(48, 'patient', 3, '2024-06-30 10:08:13'),
(49, 'patient', 3, '2024-06-30 10:09:02'),
(50, 'system admin', 1, '2024-06-30 10:09:33'),
(51, 'test doctor account', 4, '2024-06-30 11:17:07'),
(52, 'system admin', 1, '2024-06-30 11:24:06'),
(53, 'test doctor account', 4, '2024-06-30 11:28:57'),
(54, 'system admin', 1, '2024-06-30 18:16:10'),
(55, 'system admin', 0, '2024-06-30 20:45:45'),
(56, 'healthcare admin', 1, '2024-06-30 21:17:45'),
(57, 'healthcare admin', 1, '2024-07-02 21:25:54'),
(58, 'system admin', 0, '2024-07-04 21:03:15'),
(59, 'healthcare admin', 1, '2024-07-04 21:06:24'),
(60, 'system admin', 0, '2024-07-04 21:08:18'),
(61, 'healthcare admin', 1, '2024-07-04 21:19:36'),
(62, 'system admin', 0, '2024-07-04 21:24:53'),
(63, 'healthcare admin', 1, '2024-07-04 21:37:37'),
(64, 'healthcare admin', 1, '2024-07-04 21:47:12'),
(65, 'system admin', 0, '2024-07-06 19:40:04'),
(66, 'healthcare admin', 1, '2024-07-06 19:40:25'),
(67, 'test doctor account', 4, '2024-07-06 20:48:55'),
(68, 'healthcare admin', 1, '2024-07-06 20:51:10'),
(69, 'healthcare admin', 1, '2024-07-07 19:24:48'),
(70, 'healthcare admin', 1, '2024-07-07 20:27:51'),
(71, 'test doctor account', 4, '2024-07-09 20:55:13'),
(72, 'healthcare admin', 1, '2024-07-09 20:58:01'),
(73, 'healthcare admin', 1, '2024-07-09 20:58:10'),
(74, 'test doctor account', 4, '2024-07-10 21:33:47'),
(75, 'healthcare admin', 1, '2024-07-10 21:54:06'),
(76, 'healthcare admin', 1, '2024-07-10 22:39:38'),
(77, 'test doctor account', 4, '2024-07-10 22:40:59'),
(78, 'test doctor account', 4, '2024-07-10 22:41:55'),
(79, 'patient', 2, '2024-07-11 20:46:56'),
(80, 'patient', 2, '2024-07-11 20:47:31'),
(81, 'patient', 2, '2024-07-11 21:41:53'),
(82, 'test doctor account', 4, '2024-07-13 00:30:27'),
(83, 'test doctor account', 4, '2024-07-13 00:48:58'),
(84, 'patient', 2, '2024-07-13 01:01:53'),
(85, 'test doctor account', 4, '2024-07-13 01:14:51'),
(86, 'healthcare admin', 1, '2024-07-13 01:25:50'),
(87, 'test doctor account', 4, '2024-07-13 22:55:04'),
(88, 'healthcare admin', 1, '2024-07-14 20:37:03'),
(89, 'test doctor account', 4, '2024-07-18 20:24:32'),
(90, 'healthcare admin', 1, '2024-07-20 17:30:59'),
(91, 'patient', 2, '2024-07-20 17:32:02'),
(92, 'system admin', 0, '2024-07-20 17:34:02'),
(93, 'healthcare admin', 1, '2024-07-20 17:37:23'),
(94, 'test doctor account', 4, '2024-07-20 17:53:21'),
(95, 'healthcare admin', 1, '2024-07-20 18:39:48'),
(96, 'patient', 2, '2024-07-20 18:41:50'),
(97, 'patient', 2, '2024-07-20 18:44:03'),
(98, 'test doctor account', 4, '2024-07-20 18:44:12'),
(99, 'system admin', 0, '2024-07-20 19:43:16'),
(100, 'healthcare admin', 1, '2024-07-21 09:00:00'),
(101, 'healthcare admin', 1, '2024-07-21 09:04:15'),
(102, 'healthcare admin', 1, '2024-08-14 21:47:05'),
(103, 'patient', 2, '2024-08-14 21:50:19'),
(104, 'healthcare admin', 1, '2024-09-14 18:58:30'),
(105, 'healthcare admin', 1, '2024-09-15 18:39:05'),
(106, 'patient', 2, '2024-09-15 18:39:20'),
(107, 'fpatient', 3, '2024-09-15 18:39:30'),
(108, 'healthcare admin', 1, '2024-09-23 18:20:56'),
(109, 'healthcare admin', 1, '2024-09-23 18:25:54'),
(110, 'fpatient', 3, '2024-09-23 18:29:23'),
(111, 'system admin', 0, '2024-10-14 17:58:35'),
(112, 'healthcare admin', 1, '2024-10-14 17:58:47'),
(113, 'healthcare admin', 1, '2024-10-16 22:13:52'),
(114, 'healthcare admin', 1, '2024-10-19 15:48:03'),
(115, 'healthcare admin', 1, '2024-10-19 16:03:16'),
(116, 'vacc test2', 2, '2024-10-19 16:11:15'),
(117, 'healthcare admin', 1, '2024-10-19 16:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `patient_family_planning_records`
--

DROP TABLE IF EXISTS `patient_family_planning_records`;
CREATE TABLE IF NOT EXISTS `patient_family_planning_records` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(255) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'not approved',
  `patient_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient_family_planning_records`
--

INSERT INTO `patient_family_planning_records` (`id`, `method`, `status`, `patient_id`, `created_at`, `updated_at`) VALUES
(3, 'UID', 'approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4', '2024-06-25 23:07:49', '2024-07-10 22:44:56'),
(4, 'TEST FAM METHOD', 'not approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4', '2024-06-25 23:08:51', '2024-06-25 23:08:51'),
(5, 'INT', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:45:43', '2024-07-06 20:50:53'),
(8, 'IUD', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:54:16', '2024-06-28 22:54:16'),
(9, 'IUD', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:56:12', '2024-07-06 20:49:19'),
(11, 'Birth control implant', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 23:01:54', '2024-06-28 23:01:54'),
(12, 'Sterilization (Tubal ligation or vasectomy)', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 23:01:59', '2024-06-30 11:22:15'),
(14, 'Birth control patch', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-28 23:16:48', '2024-06-28 23:16:48'),
(15, 'Birth control implant', 'not approved', '217db051-015b-4db6-8bb4-8e9217c8d197', '2024-06-29 12:19:01', '2024-06-29 12:19:01'),
(16, 'Sterilization (Tubal ligation or vasectomy)', 'not approved', '217db051-015b-4db6-8bb4-8e9217c8d197', '2024-06-29 12:19:07', '2024-06-29 12:19:07'),
(17, 'Birth control pills', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-29 16:08:03', '2024-06-29 16:08:03'),
(18, 'Emergency contraceptive pills (ECPs', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-29 16:08:08', '2024-06-29 16:08:08'),
(25, 'Emergency contraceptive pills (ECPs', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-30 11:28:18', '2024-06-30 11:28:18'),
(26, 'Sterilization (Tubal ligation or vasectomy)', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-07-20 17:41:20', '2024-07-20 17:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `patient_vaccination_records`
--

DROP TABLE IF EXISTS `patient_vaccination_records`;
CREATE TABLE IF NOT EXISTS `patient_vaccination_records` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vaccine` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `wt` varchar(255) DEFAULT NULL,
  `ht` varchar(255) DEFAULT NULL,
  `temp` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'not approved',
  `patient_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient_vaccination_records`
--

INSERT INTO `patient_vaccination_records` (`id`, `vaccine`, `age`, `wt`, `ht`, `temp`, `remarks`, `status`, `patient_id`, `created_at`, `updated_at`) VALUES
(11, 'ert', 'ert', 'ert', 'ert', 'ert', 'ert', 'approved', '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', '2024-06-24 22:01:33', '2024-06-30 11:20:31'),
(12, 'fsdf', 'sdf', 'sdf', 'sdf', 'sdf', 'fsf', 'approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-24 22:02:01', '2024-06-30 00:32:35'),
(13, 'fsdfsd', 'fsdfs', 'dfsdf', 'sdfs', 'dfsdf', 'sd', 'approved', '6e51e09c-6dea-46d6-8ba3-f8621449ab26', '2024-06-25 23:18:45', '2024-06-29 23:24:25'),
(14, 'asd', 'lk;', 'lk;', 'lk;', 'lk', ';lk', 'approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-27 21:28:05', '2024-06-30 00:23:15'),
(15, 'gfh', 'fgh', 'fgh', 'fgh', 'fgh', 'fgh', 'approved', '6e51e09c-6dea-46d6-8ba3-f8621449ab26', '2024-06-28 22:05:08', '2024-06-29 23:24:39'),
(16, 'asd', 'asd', 'asd', 'asd', 'ad', 'asd', 'approved', 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', '2024-06-28 22:07:45', '2024-06-29 23:22:47'),
(17, 'test helloworld', 'asdasd', 'asd', 'asd', 'asd', 'asd', 'approved', 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', '2024-06-28 22:44:50', '2024-06-29 23:22:50'),
(18, 'hfgh', NULL, 'sdf', 'sdf', 'sf', 'sdf', 'approved', '6e51e09c-6dea-46d6-8ba3-f8621449ab26', '2024-06-28 22:56:22', '2024-06-29 23:27:04'),
(19, '234', NULL, 'sd', 'aasd', 'asd', 'ds', 'approved', '6e51e09c-6dea-46d6-8ba3-f8621449ab26', '2024-06-28 23:13:21', '2024-06-29 23:26:31'),
(21, 'test', NULL, '52', '232', '232', 'none', 'approved', 'b2a71a4c-0152-4d5c-8172-440c17d27677', '2024-06-29 12:20:01', '2024-06-29 23:24:45'),
(23, '234', NULL, '345', '345', '34', 'none', 'approved', '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', '2024-06-30 10:51:36', '2024-06-30 11:20:45'),
(24, 'asd', NULL, 'qwe', 'qwe', 'qwe', 'qwe', 'approved', '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', '2024-06-30 10:51:43', '2024-06-30 11:29:03'),
(25, '234', NULL, 'sd', 'sd', 'sd', 'ds', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 10:54:07', '2024-06-30 10:54:07'),
(26, 'hfgh', NULL, 'asd', 'asd', 'asd', 'asd', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 10:54:25', '2024-06-30 10:54:25'),
(27, '234', NULL, 'ert', 'ert', 'ert', 'ert', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 10:55:30', '2024-06-30 10:55:30'),
(28, '234', NULL, 'ert', 'ert', 'ert', 'ert', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:01:16', '2024-06-30 11:01:16'),
(29, '234', NULL, 'ert', 'ert', 'ert', 'ert', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:01:17', '2024-06-30 11:01:17'),
(30, '234', NULL, 'ert', 'ert', 'ert', 'ert', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:01:42', '2024-06-30 11:01:42'),
(31, 'hfgh', NULL, 'test', 'test', 'test', 'test', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:01:55', '2024-06-30 11:01:55'),
(32, 'hfgh', NULL, 'test', 'test', 'test', 'test', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:01:58', '2024-06-30 11:01:58'),
(33, 'hfgh', NULL, 'test', 'test', 'test', 'test', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:02:02', '2024-06-30 11:02:02'),
(34, 'hfgh', NULL, 'test', 'test', 'test', 'test', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:02:06', '2024-06-30 11:02:06'),
(35, 'hfgh', NULL, 'test', 'test', 'test', 'test', 'not approved', '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', '2024-06-30 11:02:31', '2024-06-30 11:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `'updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `patient_id`, `name`, `title`, `date`, `time`, `created_at`, `'updated_at`) VALUES
(15, '84d036d2-43cf-445c-b194-3c46c63c1724', NULL, '', '2024-07-10', '22:32:00', '2024-07-10 21:32:03', '2024-07-10 21:32:03'),
(16, '84d036d2-43cf-445c-b194-3c46c63c1724', NULL, 'MMR (Measles, Mumps, Rubella)', '2024-07-10', '22:35:00', '2024-07-10 22:36:32', '2024-07-10 22:36:32'),
(17, '84d036d2-43cf-445c-b194-3c46c63c1724', NULL, 'Varicella', '2024-07-10', '22:38:00', '2024-07-10 22:38:36', '2024-07-10 22:38:36'),
(18, 'd35a7295-922e-47ee-aabb-38d70b13d9ae', NULL, 'Birth control patch', '2024-07-21', '22:39:00', '2024-07-10 22:39:07', '2024-07-20 18:01:46'),
(19, '867eb2ea-2bdb-488b-b404-10d061dfc1a4', NULL, 'Sterilization (Tubal ligation or vasectomy)', '2024-07-10', '22:40:00', '2024-07-10 22:40:27', '2024-07-10 22:40:27'),
(20, 'd35a7295-922e-47ee-aabb-38d70b13d9ae', 'helloworld', 'IUD', '2024-07-20', '01:28:00', '2024-07-13 01:28:14', '2024-07-20 18:51:43'),
(21, '4687e68a-e21e-4811-b907-82011eb2f3d7', 'asdasd', 'Emergency contraceptive pills (ECPs', '2024-07-20', '17:39:00', '2024-07-20 17:39:15', '2024-07-20 17:39:15');

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
) ENGINE=InnoDB AUTO_INCREMENT=270 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'system admin', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'active'),
(226, NULL, 'test doctor account', 'doctor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 'active'),
(227, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'patient', 'vpatient', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 'active'),
(228, NULL, 'healthcare admin', 'healthcare', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'active'),
(262, NULL, 'fpatient', 'fpatient', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 'active'),
(264, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'josh', 'JJJ20240620', '3c19e346782346ff44552a92d337a3030f089201', 2, 'active'),
(265, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', '8deb91a5c65ce8ee41fdfd8985e5053bedabd513', 2, 'active'),
(266, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', 'd5d236d5f3d8c471406d54b2a85adcd3c1d74f81', 2, 'active'),
(267, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', '6d53c5084abcbf73c10c1061e6b22f489a99ad53', 2, 'active'),
(268, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', '4d1ef0ddba177c5cc1863b98d3a4bb572123bf4b', 2, 'active'),
(269, '824252dc-96b2-4238-8bae-b3124521dc20', 'vacc test2', 'VVV20241024', '08f4cb1f3d9a033aa90d5e06ba569cd5319ed9ec', 2, 'active');

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
  `suffix` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `body_weight` varchar(50) DEFAULT NULL,
  `body_length` varchar(50) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `brgy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `philhealth` varchar(20) DEFAULT NULL,
  `4ps_number` varchar(20) DEFAULT NULL,
  `mother_maiden_name` varchar(255) NOT NULL,
  `mother_birth_date` date DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_birth_date` date DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending',
  `appointment_type` varchar(20) NOT NULL DEFAULT 'vaccination',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `suffix`, `birth_date`, `body_weight`, `body_length`, `current_address`, `province`, `city`, `brgy`, `address`, `philhealth`, `4ps_number`, `mother_maiden_name`, `mother_birth_date`, `mother_occupation`, `father_name`, `father_birth_date`, `father_occupation`, `phone_number`, `status`, `appointment_type`, `image`, `created_at`, `updated_at`) VALUES
(32, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'patient testing', 'jhqgwj', 'jhgjhqwg', NULL, '2024-05-12', 'j', 'hgj', NULL, 'asd', '', '', NULL, 'wqehqwe', 'kqwhek', '', '2024-05-12', 'kjqweqhjw', 'kqwjeh', '2024-05-12', 'kqwje', '817263812', 'cancelled', 'vaccination', '', '2024-06-23 09:30:21', '2024-06-30 11:09:05'),
(33, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'helloworld', 'jklh', NULL, '2024-05-17', '129837', '982739', NULL, '', '', '', NULL, 'kjqhwe', 'kjhek', '', '2024-05-17', 'kjh', 'kjh', '2024-05-17', 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '', '2024-06-23 09:30:21', '2024-06-30 11:06:30'),
(34, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'helloworld', 'jklh', NULL, '2024-05-17', '129837', '982739', NULL, '', '', '', NULL, 'kjqhwe', 'kjhek', '', '2024-05-17', 'kjh', 'kjh', '2024-05-17', 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '', '2024-06-23 09:30:21', '2024-06-30 11:06:33'),
(35, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'Desabelle', 'Balansa', NULL, '2024-05-19', '2831', '19823', NULL, '', '', '', NULL, '91823791273', '17232832', '', '2024-05-19', 'none', 'Josepth', '2024-05-19', 'none', '09101791954', 'cancelled', 'vaccination', '', '2024-06-23 09:30:21', '2024-06-30 11:06:36'),
(36, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'qwe', 'qweqw', 'qwe', NULL, '2024-06-20', '09', '09', NULL, '012900000-ilocos_sur', '012906000-city_of_candon', '012906018-caterman', NULL, 'qwe', 'qwe', '', '2024-06-20', ';kwe', ';lwje', '2024-06-20', ';k', '928392', 'cancelled', 'vaccination', '', '2024-06-23 09:30:21', '2024-06-30 11:06:39'),
(37, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'josh', 'josh', 'josh', NULL, '2024-06-20', '12', '23', NULL, '031400000-bulacan', '031410000-city_of_malolos', '031410006-balayong', 'josh', '2131321', 'o123u', '', '2024-06-20', 'klej', 'lwke', '2024-06-20', 's;dlkf', '03294802384028', 'approved', 'vaccination', '', '2024-06-23 09:30:21', '2024-07-20 17:31:16'),
(38, '84d036d2-43cf-445c-b194-3c46c63c1724', 'test timestampo', 'qjwkhehqwk', 'jhkjqhwekjh', NULL, '2024-06-23', 'kqwjhekjqhw', 'kjqhwekjh', NULL, '064500000-negros_occidental', '064502000-city_of_bago', '064502001-abuanan', 'kjhwkqjhekjh', 'qwkejhqwkje', 'kqwjhekqjwhe', '', '2024-06-23', 'kjqwhekqwk', 'qwekjhqw', '2024-06-23', 'qwebjhj', '123123', 'approved', 'vaccination', '', '2024-06-23 09:34:58', '2024-06-24 20:19:11'),
(39, 'e79c84ad-b324-4e97-baec-06b04850a2f5', 'asd', 'asd', 'asd', NULL, '2024-10-06', '987', '987', NULL, '035400000-pampanga', '035401000-city_of_angeles', '035401018-pandan', 'qajkwgheqawhjk', '12312313', '123123', '234324', '2024-10-08', 'qwe', 'qwe', '2024-09-30', 'ewer', '123123231', 'pending', 'vaccination', '', '2024-10-06 21:35:44', '2024-10-06 21:35:44'),
(40, '23f7f597-8ee3-4d1c-ae5b-d3617e3f1628', ' test', ' test', ' test', NULL, '2024-10-06', '987', '987', NULL, '015500000-pangasinan', '015518000-city_of_dagupan', '015518002-bacayao_sur', 'qajkwgheqawhjk', '12312313', '123123', ' test', '2024-10-08', ' test', ' test', '2024-09-30', ' test', '123123123', 'pending', 'vaccination', '', '2024-10-06 21:37:27', '2024-10-06 21:37:27'),
(41, '9f22fde2-58b0-455a-b66f-a17d1f5a2dd8', 'asd', 'asd', 'asd', NULL, '2024-10-06', 'yh', 'kjh', NULL, '143200000-kalinga', '143213000-city_of_tabuk', '143213009-cabaritan', 'kjh', 'lkj', 'lj', 'lkj', '2024-10-06', 'lkajqwde', 'aslskdjasl', '2024-10-06', 'laskjd', '129831298', 'pending', 'vaccination', 'cf7e449f494465435adfbff0882b46a2.jpg', '2024-10-06 22:12:10', '2024-10-06 22:12:10'),
(42, '60fcc8da-473c-4878-8093-e589dc76d7ea', 'testing vac', 'testing vac', 'testing vac', 'testing vac', '2024-10-16', '23', '123', NULL, '042100000-cavite', '042105000-city_of_cavite', '042105016-barangay_23', 'testing vac', '123123323', 'testing vac', 'testing vac', '2024-10-16', '12313123', '1231233', '2024-10-17', 'qweqwe', '0912830123123', 'pending', 'vaccination', 'cacdd05ed78828bb31245117713cfad4.jpg', '2024-10-16 22:13:27', '2024-10-16 22:13:27'),
(43, 'd954c88b-c2da-405b-b414-eb2fca00d5ff', 'vacc test', 'vacc test', 'vacc test', 'vacc test', '2024-10-24', '123', '123', NULL, '036900000-tarlac', '036916000-city_of_tarlac', '036916016-batang-batang', '123', '12312312', '123123', 'vacc test', '2024-10-19', 'vacc test', 'vacc test', '2024-10-19', 'vacc test', '981723732', 'pending', 'vaccination', 'cbdc6b3e606f0ea2c387e71becf79581.jpg', '2024-10-19 15:47:30', '2024-10-19 15:47:30'),
(44, '824252dc-96b2-4238-8bae-b3124521dc20', 'vacc test2', 'vacc test2', 'vacc test2', 'vacc test2', '2024-10-24', '123', '123', NULL, '013300000-la_union', '013314000-city_of_san_fernando', '013314002-apaleng', '123', '12312312', '123123', 'vacc test', '2024-10-19', 'vacc test', 'vacc test', '2024-10-19', 'vacc test', '09101791954', 'approved', 'vaccination', 'c1676fdc378de3effadabe43df5eac95.jpg', '2024-10-19 15:47:51', '2024-10-19 16:03:29');

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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `vaccine`, `abbreviation`, `manufacturer`, `doses`, `approved_ages`, `description`, `status`, `created_at`, `updated_at`) VALUES
(53, 'IPV (Inactivated Poliovirus Vaccine)', 'IPV', 'IPV (Inactivated Poliovirus Vaccine)', '2', '2', 'IPV (Inactivated Poliovirus Vaccine)', 'active', '2024-07-07 12:11:29', '2024-07-07 12:11:29'),
(54, 'MMR (Measles, Mumps, Rubella)', 'MMR (Measles, Mumps, Rubella)', 'MMR (Measles, Mumps, Rubella)', '2', '2', 'MMR (Measles, Mumps, Rubella)', 'active', '2024-07-07 12:11:50', '2024-07-07 12:11:50'),
(55, 'Varicella', 'Varicella', 'Varicella', '2', '2', 'Varicella', 'active', '2024-07-07 12:12:06', '2024-07-07 12:12:06'),
(56, 'Hepatitis B', 'Hepatitis B', 'Hepatitis B', '2', '2', 'Hepatitis B', 'active', '2024-07-07 12:12:23', '2024-07-07 12:12:23'),
(57, 'Hib (Haemophilus influenzae type b)', 'Hib (Haemophilus influenzae type b):', 'Hib (Haemophilus influenzae type b):', '2', '2', 'Hib (Haemophilus influenzae type b):', 'active', '2024-07-07 12:12:41', '2024-07-07 12:12:41'),
(58, 'HPV (Human Papillomavirus)', 'HPV (Human Papillomavirus)', 'HPV (Human Papillomavirus)', '2', '2', 'HPV (Human Papillomavirus)', 'active', '2024-07-07 12:18:31', '2024-07-07 12:18:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
