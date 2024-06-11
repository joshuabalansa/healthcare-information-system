-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 12:03 PM
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
  `appointment_type` varchar(20) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(30, '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b', 'family_planning', 'pending', '2024-06-09 09:30:10', '2024-06-09 09:30:10');

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
  `phone_number` varchar(20) DEFAULT NULL,
  `appointment_type` varchar(20) NOT NULL DEFAULT 'family_planning',
  `appointment_time` time DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `address`, `phone_number`, `appointment_type`, `appointment_time`, `appointment_date`, `status`, `user_id`) VALUES
(38, 'helloworld', 'asda', 'asd', '2024-05-03', 'asda', '2234234', 'family_planning', '15:17:00', '2024-05-22', 'cancelled', 'd35a7295-922e-47ee-aabb-38d70b13d9ae'),
(39, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '61518a32-6f23-4b0d-bad0-ce4d12f7560e'),
(40, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '4687e68a-e21e-4811-b907-82011eb2f3d7'),
(41, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '217db051-015b-4db6-8bb4-8e9217c8d197'),
(42, 'helloworold', ';l', ';l', '2024-05-29', ';lkek', '012939012', 'family_planning', '22:40:00', '2024-05-29', 'approved', 'd7f01670-c1c7-4d86-ae72-42344749a236'),
(43, 'asd', 'asd', 'asd', '2024-06-01', 'asuhd', '192738123', 'family_planning', '14:16:00', '2024-06-01', 'approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4'),
(44, 'test name', 'd', 'test lastname', '2024-06-09', 'bacolod city', '09218287398', 'family_planning', '09:30:00', '2024-06-09', 'approved', '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b');

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
(226, NULL, 'test doctor account', 'doctor', '1f0160076c9f42a157f0a8f0dcc68e02ff69045b', 4, 'active');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `body_weight`, `body_length`, `address`, `philhealth`, `4ps_number`, `mother_maiden_name`, `mother_birth_date`, `mother_age`, `mother_occupation`, `father_name`, `father_birth_date`, `father_age`, `father_occupation`, `phone_number`, `status`, `appointment_type`, `appointment_time`, `appointment_date`) VALUES
(32, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'jhqgwj', 'jhgjhqwg', '2024-05-12', 'j', 'hgj', 'qjkwhejk', 'wqehqwe', 'kqwhek', 'kqjehqw', '2024-05-12', 26, 'kjqweqhjw', 'kqwjeh', '2024-05-12', 123, 'kqwje', '817263812', 'cancelled', 'vaccination', '17:58:00', '2024-05-12'),
(33, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', 'ikqwhe', 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '20:19:00', '2024-05-17'),
(34, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', 'ikqwhe', 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '20:19:00', '2024-05-17'),
(35, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'Desabelle', 'Balansa', '2024-05-19', '2831', '19823', 'Bacolod City', '91823791273', '17232832', 'Marites', '2024-05-19', 29, 'none', 'Josepth', '2024-05-19', 82, 'none', '09101791954', 'cancelled', 'vaccination', '08:52:00', '2024-05-19');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
