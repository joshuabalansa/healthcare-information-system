DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `appointment_type` varchar(20) NOT NULL,
  `status` varchar(20)  NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

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
(36, '84d036d2-43cf-445c-b194-3c46c63c1724', 'vaccination', 'pending', '2024-06-23 09:34:58', '2024-06-23 09:34:58'),
(37, '11019d6b-8a20-4b83-8b0c-9276adafb707', 'family_planning', 'pending', '2024-06-29 12:16:09', '2024-06-29 12:16:09');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

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
(47, 'ttest timestamp', 'qwhehqwe', 'kjhqwekjhqw', '2024-06-23', 'qwkjehqwkjhe', '064500000-negros_occidental', '064501000-city_of_bacolod', '064501002-alijis', '09120391239', 'family_planning', 'approved', 'a82388c3-02af-40a0-8ab9-03a4aa318a03', '2024-06-23 09:31:49', '2024-06-23 09:51:01'),
(48, 'test', 'test', 'test', '2024-06-29', 'test', '074600000-negros_oriental', '074621000-city_of_tanjay', '074621003-luca', '92137912', 'family_planning', 'approved', '11019d6b-8a20-4b83-8b0c-9276adafb707', '2024-06-29 12:16:09', '2024-06-30 11:09:25');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

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
(18, NULL, 'Sterilization (Tubal ligation or vasectomy)', NULL, '2024-06-28 22:58:26', '2024-06-28 22:58:26');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

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
(55, 'system admin', 0, '2024-06-30 20:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `patient_family_planning_records`
--

DROP TABLE IF EXISTS `patient_family_planning_records`;
CREATE TABLE IF NOT EXISTS `patient_family_planning_records` (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'not approved',
  `patient_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `patient_family_planning_records`
--

INSERT INTO `patient_family_planning_records` (`id`, `method`, `status`, `patient_id`, `created_at`, `updated_at`) VALUES
(2, 'test', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-25 23:05:39', '2024-06-30 11:19:30'),
(3, 'UID', 'not approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4', '2024-06-25 23:07:49', '2024-06-25 23:08:40'),
(4, 'TEST FAM METHOD', 'not approved', '867eb2ea-2bdb-488b-b404-10d061dfc1a4', '2024-06-25 23:08:51', '2024-06-25 23:08:51'),
(5, 'INT', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:45:43', '2024-06-28 22:45:43'),
(6, 'PILLS 2', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:51:57', '2024-06-30 11:21:05'),
(8, 'IUD', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:54:16', '2024-06-28 22:54:16'),
(9, 'IUD', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 22:56:12', '2024-06-28 22:56:12'),
(10, 'PILLS 2', 'approved', '61518a32-6f23-4b0d-bad0-ce4d12f7560e', '2024-06-28 22:56:38', '2024-06-29 23:33:05'),
(11, 'Birth control implant', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 23:01:54', '2024-06-28 23:01:54'),
(12, 'Sterilization (Tubal ligation or vasectomy)', 'approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-28 23:01:59', '2024-06-30 11:22:15'),
(13, 'Emergency contraceptive pills (ECPs', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-28 23:16:26', '2024-06-28 23:16:26'),
(14, 'Birth control patch', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-28 23:16:48', '2024-06-28 23:16:48'),
(15, 'Birth control implant', 'not approved', '217db051-015b-4db6-8bb4-8e9217c8d197', '2024-06-29 12:19:01', '2024-06-29 12:19:01'),
(16, 'Sterilization (Tubal ligation or vasectomy)', 'not approved', '217db051-015b-4db6-8bb4-8e9217c8d197', '2024-06-29 12:19:07', '2024-06-29 12:19:07'),
(17, 'Birth control pills', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-29 16:08:03', '2024-06-29 16:08:03'),
(18, 'Emergency contraceptive pills (ECPs', 'not approved', '4687e68a-e21e-4811-b907-82011eb2f3d7', '2024-06-29 16:08:08', '2024-06-29 16:08:08'),
(20, 'Birth control pills', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-30 10:16:03', '2024-06-30 10:16:03'),
(25, 'Emergency contraceptive pills (ECPs', 'not approved', 'd35a7295-922e-47ee-aabb-38d70b13d9ae', '2024-06-30 11:28:18', '2024-06-30 11:28:18');

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
  `status` varchar(255) DEFAULT 'not approved',
  `patient_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=264 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'system admin', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'active'),
(226, NULL, 'test doctor account', 'doctor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 'active'),
(227, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'patient', 'vpatient', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 'active'),
(228, NULL, 'healthcare admin', 'healthcare', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'inactive'),
(262, NULL, 'fpatient', 'fpatient', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 'active'),
(263, NULL, 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 1, 'inactive');

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
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinations`
--

INSERT INTO `vaccinations` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `body_weight`, `body_length`, `province`, `city`, `brgy`, `address`, `philhealth`, `4ps_number`, `mother_maiden_name`, `mother_birth_date`, `mother_age`, `mother_occupation`, `father_name`, `father_birth_date`, `father_age`, `father_occupation`, `phone_number`, `status`, `appointment_type`, `created_at`, `updated_at`) VALUES
(32, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'patient testing', 'jhqgwj', 'jhgjhqwg', '2024-05-12', 'j', 'hgj', 'asd', '', '', NULL, 'wqehqwe', 'kqwhek', 'kqjehqw', '2024-05-12', 26, 'kjqweqhjw', 'kqwjeh', '2024-05-12', 123, 'kqwje', '817263812', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-30 11:09:05'),
(33, 'b2a71a4c-0152-4d5c-8172-440c17d27677', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', '', '', '', NULL, 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-30 11:06:30'),
(34, '6e51e09c-6dea-46d6-8ba3-f8621449ab26', 'helloworld', 'helloworld', 'jklh', '2024-05-17', '129837', '982739', '', '', '', NULL, 'kjqhwe', 'kjhek', 'kjh', '2024-05-17', 1928739, 'kjh', 'kjh', '2024-05-17', 1231, 'lkjlkj', '192031902390', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-30 11:06:33'),
(35, 'ee2696d1-39a8-4d26-87d1-d213d54a7ae2', 'Joshua', 'Desabelle', 'Balansa', '2024-05-19', '2831', '19823', '', '', '', NULL, '91823791273', '17232832', 'Marites', '2024-05-19', 29, 'none', 'Josepth', '2024-05-19', 82, 'none', '09101791954', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-30 11:06:36'),
(36, 'fffe0b6a-83ab-4e9f-8c5e-addf55554f3e', 'qwe', 'qweqw', 'qwe', '2024-06-20', '09', '09', '012900000-ilocos_sur', '012906000-city_of_candon', '012906018-caterman', NULL, 'qwe', 'qwe', 'aklsdj', '2024-06-20', 9, ';kwe', ';lwje', '2024-06-20', 2, ';k', '928392', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-30 11:06:39'),
(37, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'josh', 'josh', 'josh', '2024-06-20', '12', '23', '031400000-bulacan', '031410000-city_of_malolos', '031410006-balayong', 'josh', '2131321', 'o123u', 'wqkle', '2024-06-20', 4, 'klej', 'lwke', '2024-06-20', 98, 's;dlkf', '03294802384028', 'cancelled', 'vaccination', '2024-06-23 09:30:21', '2024-06-30 18:47:31'),
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `vaccine`, `abbreviation`, `manufacturer`, `doses`, `approved_ages`, `description`, `status`, `created_at`, `updated_at`) VALUES
(24, 'hfgh', 'fhfgffgh', 'fghfh', 'fhghhh', 'fgh', 'fgh', 'active', '2024-05-22 14:09:55', '2024-05-22 14:09:55'),
(25, 'asd', 'asdad', 'das', 'asd', 'dad', 'asda', 'active', '2024-05-22 14:18:03', '2024-05-22 14:18:03'),
(26, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:40:57', '2024-05-22 14:40:57'),
(27, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:41:25', '2024-05-22 14:41:25'),
(29, '234', '234', '243', '234', '234', '432', 'active', '2024-05-22 14:42:18', '2024-05-22 14:42:18'),
(30, 'dfg', 'dfg', 'fgdfg', 'dfgdfgdf', 'gdfgdf', 'gfgd', 'active', '2024-05-22 15:05:44', '2024-05-22 15:05:44'),
(31, 'test helloworld', 'test helloworld', 'test helloworld', 'test helloworld', '234', 'test helloworld', 'active', '2024-06-02 13:03:08', '2024-06-02 13:03:08');


DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `'updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);