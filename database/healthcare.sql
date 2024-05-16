-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 03:26 PM
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

CREATE TABLE `appointments` (
  `id` int NOT NULL,
  `patient_id` int NOT NULL,
  `appointment_type` varchar(20) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `appointment_type`, `status`, `created_at`, `updated_at`) VALUES
(9, 29, 'vaccination', 'pending', '2024-05-12 15:13:47', '2024-05-12 15:13:47'),
(10, 30, 'vaccination', 'pending', '2024-05-12 15:13:50', '2024-05-12 15:13:50'),
(11, 31, 'vaccination', 'pending', '2024-05-12 15:14:34', '2024-05-12 15:14:34'),
(12, 29, 'family_planning', 'pending', '2024-05-12 15:15:46', '2024-05-12 15:15:46'),
(13, 30, 'family_planning', 'pending', '2024-05-12 15:19:26', '2024-05-12 15:19:26'),
(14, 32, 'vaccination', 'pending', '2024-05-12 17:58:54', '2024-05-12 17:58:54'),
(15, 31, 'family_planning', 'pending', '2024-05-16 21:02:24', '2024-05-16 21:02:24'),
(16, 32, 'family_planning', 'pending', '2024-05-16 23:18:01', '2024-05-16 23:18:01'),
(17, 33, 'family_planning', 'pending', '2024-05-16 23:18:48', '2024-05-16 23:18:48'),
(18, 34, 'family_planning', 'pending', '2024-05-16 23:24:58', '2024-05-16 23:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `family_planning`
--

CREATE TABLE `family_planning` (
  `id` int NOT NULL,
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
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `family_planning`
--

INSERT INTO `family_planning` (`id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `address`, `phone_number`, `appointment_type`, `appointment_time`, `appointment_date`, `status`, `user_id`) VALUES
(12, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(13, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(14, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(15, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(16, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(17, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(18, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(19, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(20, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(21, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(22, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(23, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(24, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(25, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(26, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(27, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(28, 'test', 'qweqw', 'eqweq', '2024-05-01', 'qewqe', '12312', 'family_planning', '02:51:00', '2024-05-30', 'pending', ''),
(29, 'test', 'asdasd', 'dasd', '2024-05-09', 'asdadaad', '12321312', 'family_planning', '15:16:00', '2024-05-22', 'pending', ''),
(30, 'test', 'asdasd', 'dasd', '2024-05-09', 'asdadaad', '12321312', 'family_planning', '15:16:00', '2024-05-22', 'pending', ''),
(31, 'test', 'test', 'test', '2024-05-16', 'test', '912837891', 'family_planning', '00:06:00', '2024-05-16', 'pending', ''),
(32, 'asd', 'asd', 'asd', '2024-05-16', 'asd', '123', 'family_planning', '23:17:00', '2024-05-16', 'pending', ''),
(33, 'asd', 'asd', 'asd', '2024-05-16', 'asd', '123', 'family_planning', '23:17:00', '2024-05-16', 'pending', ''),
(34, 'asd', 'asd', 'asd', '2024-05-16', 'asd', '123', 'family_planning', '23:17:00', '2024-05-16', 'pending', 'ebf54943-3c4c-4682-9b7c-b08a53cf33fd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `appointment_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `appointment_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1, 'active'),
(19, NULL, 'John', 'SJD19900515', 'bfbd645983f36b832f94c3cad1e44f2f2276b542', 2, 'active'),
(26, NULL, 'Alice', 'BAM19851020', 'a9442d8d438770cb6629ba27c1a74b9045e9a459', 2, 'active'),
(27, NULL, 'Alice', 'BAM19851020', '97e5f5e087e33d5e5bfc06ee481b8148bbdff5e4', 2, 'active'),
(28, NULL, 'John', 'SJD19900515', 'b943aa1cc992efa80c827517bea97f9c39092bb0', 2, 'active'),
(29, NULL, 'John', 'SJD19900515', '3ba77055c3f81f2b76445c148bcbb840ed29d23e', 2, 'active'),
(30, NULL, 'John', 'SJD19900515', 'cdfece4a0d39d486d902de3a476d6cd4064c8a6a', 2, 'active'),
(31, NULL, 'John', 'SJD19900515', '899595053e38208ef95c1ea4846e8dd9b6ef20e2', 2, 'active'),
(32, NULL, 'John', 'SJD19900515', '6d63b018be84d8761ee9ec32da85765ba4d80f1d', 2, 'active'),
(33, NULL, 'Alice', 'BAM19851020', 'bb5e9569d3d0a25c30c31bf98a35766fe6add487', 2, 'active'),
(34, NULL, 'John', 'SJD19900515', '335e3d1a5b3a95eb28327fd344ac8b6661379a31', 2, 'active'),
(35, NULL, 'John', 'SJD19900515', 'a045b7efa463c6ed195c644163f4168952fbd34a', 2, 'active'),
(36, 29, 'test', 'ETQ20240512', '7190bbe30028f2e7c27125afd9ae896ada5112e3', 2, 'active'),
(37, 27, 'test', 'ETQ20240512', 'e6319333738ba5d375201d66ff92f58b14d29ff0', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinations`
--

CREATE TABLE `vaccinations` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
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
  `appointment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `body_weight`, `body_length`, `address`, `philhealth`, `4ps_number`, `mother_maiden_name`, `mother_birth_date`, `mother_age`, `mother_occupation`, `father_name`, `father_birth_date`, `father_age`, `father_occupation`, `phone_number`, `status`, `appointment_type`, `appointment_time`, `appointment_date`) VALUES
(19, NULL, 'John', 'Doe', 'Smith', '1990-05-15', '70', '180', '123 Main St', '123456789', '987654321', 'Jane Johnson', '1965-02-20', 59, 'Nurse', 'Michael Smith', '1960-08-10', 64, 'Engineer', '09101791954', 'approved', 'vaccination', '09:00:00', '2024-05-12'),
(21, NULL, 'John', 'Doe', 'Smith', '1990-05-15', '70', '180', '123 Main St', '123456789', '987654321', 'Jane Johnson', '1965-02-20', 59, 'Nurse', 'Michael Smith', '1960-08-10', 64, 'Engineer', '123-456-7890', 'cancelled', 'vaccination', '09:00:00', '2024-05-12'),
(23, NULL, 'John', 'Doe', 'Smith', '1990-05-15', '70', '180', '123 Main St', '123456789', '987654321', 'Jane Johnson', '1965-02-20', 59, 'Nurse', 'Michael Smith', '1960-08-10', 64, 'Engineer', '123-456-7890', 'cancelled', 'vaccination', '09:00:00', '2024-05-12'),
(24, NULL, 'Alice', 'Marie', 'Brown', '1985-10-20', '65', '165', '456 Elm St', '987654321', '123456789', 'Emily White', '1970-12-25', 54, 'Teacher', 'James Brown', '1975-04-30', 49, 'Artist', '987-654-3210', 'cancelled', 'vaccination', '10:30:00', '2024-05-15'),
(25, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'cancelled', 'vaccination', '15:08:00', '2024-05-12'),
(26, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'pending', 'vaccination', '15:08:00', '2024-05-12'),
(27, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'approved', 'vaccination', '15:08:00', '2024-05-12'),
(28, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'pending', 'vaccination', '15:08:00', '2024-05-12'),
(29, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'approved', 'vaccination', '15:08:00', '2024-05-12'),
(30, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'pending', 'vaccination', '15:08:00', '2024-05-12'),
(31, NULL, 'test', 'qweqw', 'eqweq', '2024-05-12', 'k', 'jl', 'kjl', '9182739128', 'lkjwe', 'lkjwelq', '2024-05-12', 293, 'iqwuegq', 'iquwge', '2024-05-12', 2983, 'qlkwje', '192837912873912', 'pending', 'vaccination', '15:08:00', '2024-05-12'),
(32, NULL, 'tes', 'jhqgwj', 'jhgjhqwg', '2024-05-12', 'j', 'hgj', 'qjkwhejk', 'wqehqwe', 'kqwhek', 'kqjehqw', '2024-05-12', 26, 'kjqweqhjw', 'kqwjeh', '2024-05-12', 123, 'kqwje', '817263812', 'pending', 'vaccination', '17:58:00', '2024-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` int NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `abbreviation` varchar(50) DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `doses` varchar(255) NOT NULL,
  `approved_ages` varchar(100) DEFAULT NULL,
  `description` text,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_planning`
--
ALTER TABLE `family_planning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinations`
--
ALTER TABLE `vaccinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `family_planning`
--
ALTER TABLE `family_planning`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vaccinations`
--
ALTER TABLE `vaccinations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
