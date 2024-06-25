-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2024 at 01:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `appointment_type`, `status`, `created_at`, `updated_at`) VALUES
(25, '61518a32-6f23-4b0d-bad0-ce4d12f7560e', 'family_planning', 'pending', '2024-01-18 22:22:30', '2024-05-29 22:13:12'),
(28, 'd7f01670-c1c7-4d86-ae72-42344749a236', 'family_planning', 'pending', '2024-05-29 22:40:48', '2024-05-29 22:40:48'),
(29, '867eb2ea-2bdb-488b-b404-10d061dfc1a4', 'family_planning', 'pending', '2024-06-01 14:16:45', '2024-06-01 14:16:45'),
(30, '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b', 'family_planning', 'pending', '2024-06-09 09:30:10', '2024-06-09 09:30:10'),
(31, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'vaccination', 'pending', '2024-06-20 22:06:21', '2024-06-20 22:06:21'),
(32, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'vaccination', 'pending', '2024-06-20 22:15:14', '2024-06-20 22:15:14'),
(33, 'a8586277-3599-4fdf-8abe-d00e0c03afeb', 'family_planning', 'pending', '2024-06-20 22:29:52', '2024-06-20 22:29:52'),
(34, '906fe89a-bc1b-4371-9e17-1452b5a3f7ca', 'family_planning', 'pending', '2024-06-22 21:22:51', '2024-06-22 21:22:51'),
(35, 'a82388c3-02af-40a0-8ab9-03a4aa318a03', 'family_planning', 'pending', '2024-06-23 09:31:49', '2024-06-23 09:31:49'),
(36, '84d036d2-43cf-445c-b194-3c46c63c1724', 'vaccination', 'pending', '2024-06-23 09:34:58', '2024-06-23 09:34:58');

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
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `address`, `province`, `city`, `brgy`, `phone_number`, `appointment_type`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(38, 'helloworld', 'asda', 'asd', '2024-05-03', 'asda', NULL, NULL, NULL, '2234234', 'family_planning', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-23 09:28:21', '2024-06-24 19:49:42'),
(39, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', 'approved', '61518a32-6f23-4b0d-bad0-ce4d12f7560e', '2024-06-23 09:28:21', '2024-06-24 19:50:15'),
(40, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', 'approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(41, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', NULL, NULL, NULL, '098102301293', 'family_planning', 'approved', '217db051-015b-4db6-8bb4-8e9217c8d197', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(42, 'helloworold', ';l', ';l', '2024-05-29', ';lkek', NULL, NULL, NULL, '012939012', 'family_planning', 'approved', 'd7f01670-c1c7-4d86-ae72-42344749a236', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(43, 'asd', 'asd', 'asd', '2024-06-01', 'asuhd', NULL, NULL, NULL, '192738123', 'family_planning', 'approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(44, 'test name', 'd', 'test lastname', '2024-06-09', 'bacolod city', NULL, NULL, NULL, '09218287398', 'family_planning', 'approved', '02b7ee85-6b80-4c3e-a2e9-6d486c219f6b', '2024-06-23 09:28:21', '2024-06-23 09:29:32'),
(45, 'test familyPLanning', 'test familyPLanning', 'test familyPLanning', '2024-06-20', 'test familyPLanning', '041000000-batangas', '041005000-batangas_city', '041005011-maapas', '2133243244', 'family_planning', 'approved', 'a8586277-3599-4fdf-8abe-d00e0c03afeb', '2024-06-23 09:28:21', '2024-06-23 09:51:01'),
(46, 'joshua balasa', 'lkdlkasjd', 'lkajsdljk', '2024-06-22', 'laksdlkasjl', '064500000-negros_occidental', '064501000-city_of_bacolod', '064501005-barangay_10_(pob.)', '1231231290909', 'family_planning', 'approved', '906fe89a-bc1b-4371-9e17-1452b5a3f7ca', '2024-06-23 09:28:21', '2024-06-23 09:51:01'),
(47, 'ttest timestamp', 'qwhehqwe', 'kjhqwekjhqw', '2024-06-23', 'qwkjehqwkjhe', '064500000-negros_occidental', '064501000-city_of_bacolod', '064501002-alijis', '09120391239', 'family_planning', 'approved', 'a82388c3-02af-40a0-8ab9-03a4aa318a03', '2024-06-23 09:31:49', '2024-06-23 09:51:01');

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
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `role` int NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(11, 'system admin', 1, '2024-06-23 09:50:04');

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
  `status` varchar(255) DEFAULT 'not approve',
  `patient_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `user_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'system admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'active'),
(226, NULL, 'test doctor account', 'doctor', 'd033e22ae348aeb5660fc2140aec35850c4da997', 4, 'active'),
(227, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'ef77861ffcc089a62f7ef540324f4fc9165ed35d', 2, 'active'),
(228, NULL, 'healthcare admin', 'healthcare', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'active'),
(229, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '03954254417cf3311df414fbec539c853996e5f0', 2, 'active'),
(230, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', '24b86c266afbadfc7aeaf1e418f684eedaeb4c99', 2, 'active'),
(231, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'e21ba75fe9e2757ce540c414c2103c1939a9c82c', 2, 'active'),
(232, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', '1740f97d342c8181b7372732718a689d683bde2b', 2, 'active'),
(233, 'd35a7295-922e-47ee-aabb-38d70b13d9ae', 'helloworld', 'AHA20240503', '6b7dbbe00c1a82e7929dad0428bbef949edd8f5b', 2, 'active'),
(234, 'd35a7295-922e-47ee-aabb-38d70b13d9ae', 'helloworld', 'AHA20240503', '006e08c790d7d502607eaa4eeab0bd365aeb2b0b', 2, 'active'),
(235, '61518a32-6f23-4b0d-bad0-ce4d12f7560e', 'asdasd', 'AAA20240529', '5c6448c79f26bc87af5db3b46ffe7b6d234615d3', 2, 'active'),
(236, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'd8fd401cad0c44d925bc5d37488a521a80ac49c1', 2, 'active'),
(237, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', 'a51704729b84b055be1fb6a44a6b4e8bbe61e4e5', 2, 'active'),
(238, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', '7da7f46efb80296ecd6d826caddf7a6c230c7296', 2, 'active'),
(239, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', '69fbc6dcf593b503dac8b80e5ca26afacebc5998', 2, 'active'),
(240, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', 'd813bf6c05726f42f20f8bddb754afbcace357b4', 2, 'active'),
(241, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '4f0cc8417520c9bd015d122512cc2ebc3b88e901', 2, 'active'),
(242, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '2092f3f54f151b6e7f4b55a903bf84d59ece735e', 2, 'active'),
(243, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'ad31c90a33c824ec1f7b3f85b43a0ea00ec79761', 2, 'active'),
(244, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'qwe', 'QQQ20240620', '699d4bb67a6b166a86b5bf1db0a9b8c1460bb29a', 2, 'active'),
(245, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'qwe', 'QQQ20240620', 'c66421335adf79c76c5ed937b4079e38f9078b79', 2, 'active'),
(246, '84d036d2-43cf-445c-b194-3c46c63c1724', 'test timestampo', 'JTQ20240623', '96792423f2bd5c4b75d33dc3d05840a4b5d8de63', 2, 'active'),
(247, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '79dcdbbe736ec560d81cf1e413588b8d651ad13b', 2, 'active'),
(248, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '2fe9b522d0b07a9c2a5623a921d297a6e4be6a1c', 2, 'active'),
(249, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', 'cec6dc7f1af556156d703b4ed87d66b21b6c6e33', 2, 'active'),
(250, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '4fcdaa0529fecc64ae38eca6d155de4561617855', 2, 'active'),
(251, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'f484851219811155859ce7bdb68339e561661a6c', 2, 'active'),
(252, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'f15f87a6269b0f841d6641d8e11943931fa9377b', 2, 'active'),
(253, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'e01e5f8fef1ad76a723a87740b5280bfd1e0ff44', 2, 'active'),
(254, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '0f1007b48adca493a2b28c0da85c5bb35746952c', 2, 'active'),
(255, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '6cabb9ee205d695489c13d11e68cc7a2206700f3', 2, 'active'),
(256, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'a82461c46ce351bf07fa62478a64092b5f935e61', 2, 'active');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `body_weight`, `body_length`, `province`, `city`, `brgy`, `address`, `philhealth`, `4ps_number`, `mother_maiden_name`, `mother_birth_date`, `mother_age`, `mother_occupation`, `father_name`, `father_birth_date`, `father_age`, `father_occupation`, `phone_number`, `status`, `appointment_type`, `created_at`, `updated_at`) VALUES
(32, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'jhqgwj', 'jhgjhqwg', '2024-05-12', 'j', 'hgj', '', '', '', NULL, 'wqehqwe', 'kqwhek', 'kqjehqw', '2024-05-12', 26, 'kjqweqhjw', 'kqwjeh', '2024-05-12', 123, 'kqwje', '817263812', 'approved', 'vaccination', '2024-06-23 09:30:21', '2024-06-24 20:19:43'),
(33, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', '', '', '', NULL, 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'approved', 'vaccination', '2024-06-23 09:30:21', '2024-06-24 20:20:28'),
(34, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', '', '', '', NULL, 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-24 20:23:35'),
(35, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'Desabelle', 'Balansa', '2024-05-19', '2831', '19823', '', '', '', NULL, '91823791273', '17232832', 'Marites', '2024-05-19', 29, 'none', 'Josepth', '2024-05-19', 82, 'none', '09101791954', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-24 20:19:29'),
(36, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'qwe', 'qweqw', 'qwe', '2024-06-20', '09', '09', '012900000-ilocos_sur', '012906000-city_of_candon', '012906018-caterman', NULL, 'qwe', 'qwe', 'aklsdj', '2024-06-20', 9, ';kwe', ';lwje', '2024-06-20', 2, ';k', '928392', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-24 20:19:35'),
(37, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'josh', 'josh', 'josh', '2024-06-20', '12', '23', '031400000-bulacan', '031410000-city_of_malolos', '031410006-balayong', 'josh', '2131321', 'o123u', 'wqkle', '2024-06-20', 4, 'klej', 'lwke', '2024-06-20', 98, 's;dlkf', '03294802384028', 'approved', 'vaccination', '2024-06-23 09:30:21', '2024-06-23 09:51:01'),
(38, '84d036d2-43cf-445c-b194-3c46c63c1724', 'test timestampo', 'qjwkhehqwk', 'jhkjqhwekjh', '2024-06-23', 'kqwjhekjqhw', 'kjqhwekjh', '064500000-negros_occidental', '064502000-city_of_bago', '064502001-abuanan', 'kjhwkqjhekjh', 'qwkejhqwkje', 'kqwjhekqjwhe', 'qwkjehqwkje', '2024-06-23', 198273, 'kjqwhekqwk', 'qwekjhqw', '2024-06-23', 1892371, 'qwebjhj', '123123', 'approved', 'vaccination', '2024-06-23 09:34:58', '2024-06-24 20:19:11');

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
(14, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:45:21', '2024-05-22 13:45:21'),
(16, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:46:13', '2024-05-22 13:46:13'),
(18, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:50:05', '2024-05-22 13:50:05'),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
