-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2024 at 01:17 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(29, '867eb2ea-2bdb-488b-b404-10d061dfc1a4', 'family_planning', 'pending', '2024-06-01 14:16:45', '2024-06-01 14:16:45');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `address`, `phone_number`, `appointment_type`, `appointment_time`, `appointment_date`, `status`, `user_id`) VALUES
(38, 'helloworld', 'asda', 'asd', '2024-05-03', 'asda', '2234234', 'family_planning', '15:17:00', '2024-05-22', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae'),
(39, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '61518a32-6f23-4b0d-bad0-ce4d12f7560e'),
(40, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '4687e68a-e21e-4811-b907-82011eb2f3d7'),
(41, 'asdasd', 'asdasd', 'asdasd', '2024-05-29', 'klkjd', '098102301293', 'family_planning', '22:13:00', '2024-05-29', 'approved', '217db051-015b-4db6-8bb4-8e9217c8d197'),
(42, 'helloworold', ';l', ';l', '2024-05-29', ';lkek', '012939012', 'family_planning', '22:40:00', '2024-05-29', 'approved', 'd7f01670-c1c7-4d86-ae72-42344749a236'),
(43, 'asd', 'asd', 'asd', '2024-06-01', 'asuhd', '192738123', 'family_planning', '14:16:00', '2024-06-01', 'approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning_methods`
--

INSERT INTO `family_planning_methods` (`id`, `user_id`, `method_name`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'iud', NULL, '2024-06-02 19:35:51', '2024-06-02 19:35:51'),
(5, NULL, 'qwe', NULL, '2024-06-02 20:46:43', '2024-06-02 20:46:43'),
(6, NULL, 'PILLs', NULL, '2024-06-02 20:47:36', '2024-06-02 20:47:36'),
(7, NULL, 'IUD', NULL, '2024-06-02 20:47:45', '2024-06-02 20:47:45'),
(8, NULL, 'PILLS 2', NULL, '2024-06-02 21:14:56', '2024-06-02 21:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `appointment_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `appointment_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'active'),
(144, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '5b62a7a181a5a14328d5dd489724acc3e18dc293', 2, 'active'),
(145, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'bfbf00655b517432c1252edfa8cb5feba748d506', 2, 'active'),
(146, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'a8fb5a92acf03a3c1b616c2a202de3e453829e2d', 2, 'active'),
(147, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'acdf6cecfe67a57cf86442685021a1ebb72a1b5d', 2, 'active'),
(148, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '5fff33e1eced510fdceb241e37b70740b4d686cd', 2, 'inactive'),
(149, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'df1a753ab8ba3ecd520384179f2bf0a2d2131ed4', 2, 'inactive'),
(150, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '43f8cd96a8762aa8f71aefb7cee2b4dffb03f5a4', 2, 'active'),
(151, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'fb4c1710a5d7b527ab164fa3d1888b20fc451683', 2, 'inactive'),
(152, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '513222d05f77d833360ae340640329b0efc6cf21', 2, 'active'),
(153, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '711179f47277306ecdb140018fb6613ff551a725', 2, 'active'),
(154, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', 'b0fb66d8fca7f0962e569e6450aea9ecc2dd554e', 2, 'active'),
(155, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', '04c23eab65a6b2da78d1f44055164aedc913a08a', 2, 'active'),
(156, 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd', 'asd', 'AAA20240516', '834871e400323ad15bd4f57e7dea269582901888', 2, 'active'),
(157, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '632ea0274d3c7d645ae65734c52fd70640f69f13', 2, 'active'),
(158, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '929ef3870ece73fd6a8dcf9ef28c24afc0d9cc64', 2, 'active'),
(159, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '27d3a803403eae2a4cd9fd44895a1bd55ef2247a', 2, 'active'),
(160, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '5e5dbbe02e4414559200310180e63a403b77490d', 2, 'active'),
(161, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '8db1c46b1231a67d45073515284102574ab45adb', 2, 'active'),
(162, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '334370482365b3ffa79c2487c740cbe4dfe1f896', 2, 'active'),
(163, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '13e1a497d57716c4339a886147a729c6cdd5d2b8', 2, 'active'),
(164, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '740545433d6c8edde7a153f3c94e113663330cb9', 2, 'active'),
(165, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'b9240990d4925315f1ef9a1b34d2920f92241fa7', 2, 'active'),
(166, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'd83f2725e548526381400245243d30753a04189d', 2, 'active'),
(167, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '58df49e5297cbcc2969f737043f79597cc2a8fa4', 2, 'active'),
(168, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'cab7b245f45be5a6c1ba84fb144918f03303f8df', 2, 'active'),
(169, 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd', 'asd', 'AAA20240516', '65d282ae13858316806572ca8220e57496c99a8e', 2, 'active'),
(170, '7e56d759-be1e-4e0a-bc06-8aa9695b4314', 'asdasd', 'AAA20240509', 'e5bdb085897db4ea1b4f093da2e8df2a637f312a', 2, 'active'),
(171, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', '40c01a0920ff2c5287aaa328a82f1439d44288d3', 2, 'active'),
(172, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '53d5c1a55ef7b1dbca95be9e20f15dcba70690b6', 2, 'active'),
(173, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '71c18b6eb2853e8b8cf645d34a27a9a4c3233569', 2, 'active'),
(174, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'da1d8d7c0db1f189536730a601c97a8396c75618', 2, 'active'),
(175, 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd', 'asd', 'AAA20240516', '803fbb4e9f36c8f66635241ecc749fc224cf0999', 2, 'active'),
(176, '7e56d759-be1e-4e0a-bc06-8aa9695b4314', 'asdasd', 'AAA20240509', '5dd9badbcaf88dfe3688c9e6d0db7245de7b7680', 2, 'active'),
(177, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'a8b8dcc8c9ad81d6564dee52b9f7117c19e3ce5d', 2, 'active'),
(178, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', '6466990e47cdda4eb839e5390455904ad929992e', 2, 'active'),
(179, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', '9c64b8ed86f231bf61f92cfc88cca62da2bebe58', 2, 'active'),
(180, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', '40643814da4a77cc77203316cf252202fa1c5ee1', 2, 'active'),
(181, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '7d5ef4f0cd77294256f3046ad5377e4771f84353', 2, 'active'),
(182, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'c232bdce1dd1f2f395dda8fd6e202516c9827eb3', 2, 'active'),
(183, 'b945e7e6-72cc-4f23-9fc6-8cc1b1ed6a37\n\n', 'test', 'ETQ20240512', 'a71cc25f26fade2850669f4cbd282a5350c9fe6a', 2, 'active'),
(184, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'e289bfdcb909e5b5a96b2e3059b4a13d835945b1', 2, 'active'),
(185, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', 'e2fa080413d8167080df99a7f2142aa048f71897', 2, 'active'),
(186, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', '53441d2d769b910e94ca968c4a73704e2df5a8d2', 2, 'active'),
(187, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'cbebcc18c25f5ae1298d532ba708e663b1147b7b', 2, 'active'),
(188, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '800fd91608cf866d7893ce856d1e8f6aa5394eae', 2, 'active'),
(189, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '897f13a37f516cd0cd48bb200461dab76423037d', 2, 'active'),
(190, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', '67970b365fb060bca0fb91e1cae41b90e498731e', 2, 'active'),
(191, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '4c8753e18c7a9066f85ea5af64082b9024f2c9a0', 2, 'active'),
(192, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', 'e7e0a265896c05f6149ba8351858d45a1ba35a82', 2, 'active'),
(193, 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd', 'asd', 'AAA20240516', '773ec0c1394586f656438a1b8238a89f26a9094e', 2, 'active'),
(194, '7e56d759-be1e-4e0a-bc06-8aa9695b4314', 'asdasd', 'AAA20240509', '4d8bc5793edd16bda18689195223f232a2056d63', 2, 'active'),
(195, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '5a6e8e2c39a5803d2f9cbffee1879724fbb9e63c', 2, 'active'),
(196, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '3f54fe601e44326289f0cb9e4a966100d487184d', 2, 'active'),
(197, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '480944702e1e6e115bbdb6ebe5c25f74065131e1', 2, 'active'),
(198, 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd', 'asd', 'AAA20240516', '423bf97e62a944729d2f80932cbf2adcde90efe6', 2, 'active'),
(199, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '44917736a1f4c270be5bce007ebed2618cd75b79', 2, 'active'),
(200, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '0fe7eac71a96c97852fedaba86b34e5c671b33ea', 2, 'active'),
(201, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', 'f83a9067140b9e04faa52d60ac4298d50380ca2a', 2, 'active'),
(202, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'eeb2e7540a6502371f9687e20e2d085ecdfd378b', 2, 'active'),
(203, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '6120dd8d04e3ab102ec37f5acc2e515678d72720', 2, 'active'),
(204, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', 'aeb2f84db65c33f5b81d1084c5cfd30da8cdd28e', 2, 'active'),
(205, 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd', 'asd', 'AAA20240516', '4343c40f37e9c5bed7c2b232927607ebf89deef5', 2, 'active'),
(206, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '671a20250bbe5c7fee38ebd480ac035613fc90e1', 2, 'active'),
(207, '7e56d759-be1e-4e0a-bc06-8aa9695b4314', 'asdasd', 'AAA20240509', '54647fa743e2b6266f18c57b13dfaab1102104f3', 2, 'active'),
(208, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'bd37429afd4e793c1da40510842a7edbc7395149', 2, 'active'),
(209, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', '764318cea2ffa8cab158922869dc5ff37e9f0f41', 2, 'active'),
(210, 'd35a7295-922e-47ee-aabb-38d70b13d9ae', 'helloworld', 'AHA20240503', '51dbff14455e8cce5a808d4c540c762b568cd41b', 2, 'active'),
(211, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'JHH20240517', '39e8c8ad99f6bd15711823131f8691ba5b13d5f2', 2, 'active'),
(212, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'JHH20240517', 'b4272d72398f59797ce5e580499147f3b2edf9ab', 2, 'active'),
(213, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'BJD20240519', 'a9b666e508b22a6b8221b899c3f2edbbade12496', 2, 'active'),
(214, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'tes', 'JTJ20240512', 'd7afe8a89e54b8ca501cad3b1b0987da8f1653b4', 2, 'active');

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
(34, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', 'ikqwhe', 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'approved', 'vaccination', '20:19:00', '2024-05-17'),
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `vaccine`, `abbreviation`, `manufacturer`, `doses`, `approved_ages`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'active', '2024-05-21 14:01:03', '2024-05-21 14:01:03'),
(2, 'test', 'test', 'test', 'test', 'test', 'test', 'active', '2024-05-21 14:01:06', '2024-05-21 14:01:06'),
(3, 'test', 'test', 'test', 'test', 'test', 'test', 'active', '2024-05-21 14:01:07', '2024-05-21 14:01:07'),
(4, 'helloworld', 'helloworld', 'helqwej', 'lkqwjel', 'lkqwje', 'elk', 'active', '2024-05-21 14:02:59', '2024-05-21 14:02:59'),
(5, 'helloworld', 'helloworld', 'helqwej', 'lkqwjel', 'lkqwje', 'elk', 'active', '2024-05-21 14:23:39', '2024-05-21 14:23:39'),
(6, 'helloworld', 'helloworld', 'helqwej', 'lkqwjel', 'lkqwje', 'elk', 'active', '2024-05-21 14:23:41', '2024-05-21 14:23:41'),
(7, 'helloworld', 'helloworld', 'helqwej', 'lkqwjel', 'lkqwje', 'elk', 'active', '2024-05-21 14:26:16', '2024-05-21 14:26:16'),
(8, 'helloworld', 'helloworld', 'helqwej', 'lkqwjel', 'lkqwje', 'elk', 'active', '2024-05-21 14:26:29', '2024-05-21 14:26:29'),
(9, 'astra', 'zeneca', 'none', '2', '12-18 years', 'n/a', 'active', '2024-05-21 14:29:09', '2024-05-21 14:29:09'),
(11, 'qwe', 'qwe', 'jhg', 'jhg', 'jhg', 'jhg', 'active', '2024-05-22 13:39:21', '2024-05-22 13:39:21'),
(12, 'test', 'tets', 'test', 'test', 'test', 'test', 'active', '2024-05-22 13:39:38', '2024-05-22 13:39:38'),
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
(31, 'test helloworld', 'test helloworld', 'test helloworld', 'test helloworld', '234', 'test helloworld', 'active', '2024-06-02 13:03:08', '2024-06-02 13:03:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
