CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `appointment_type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
);

CREATE TABLE `family_planning` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `appointment_type` varchar(20) NOT NULL DEFAULT 'family_planning',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `user_id` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
);


CREATE TABLE `family_planning_methods` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `method_name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
);


CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
);

CREATE TABLE `patient_family_planning_records` (
  `id` int(11) NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `date_of_visit` varchar(255) DEFAULT NULL,
  `medical_findings` varchar(255) DEFAULT NULL,
  `date_of_followup` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'not approved',
  `patient_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);


CREATE TABLE `patient_vaccination_records` (
  `id` int(11) NOT NULL,
  `vaccine` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `wt` varchar(255) DEFAULT NULL,
  `ht` varchar(255) DEFAULT NULL,
  `temp` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'not approved',
  `patient_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

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


CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);


CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `'updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
);

INSERT INTO `users` (`id`, `user_id`, `name`, `username`, `password`, `role`, `status`) VALUES
(1, NULL, 'system admin', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'active'),
(226, NULL, 'DOCTOR/ NURSE', 'doctor', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 4, 'active'),
(227, '2ca0620e-bdcb-4a1d-afce-35ab3b9ff617', 'patient', 'vpatient', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 'active'),
(228, NULL, 'healthcare admin', 'healthcare', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 'active'),
(262, '867eb2ea-2bdb-488b-b404-10d061dfc1a4', 'fpatient', 'fpatient', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 'active'),
(264, '56bf6cc2-41ce-4335-a2d2-3bf3476d8e7d', 'josh', 'JJJ20240620', '3c19e346782346ff44552a92d337a3030f089201', 2, 'active'),
(265, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', '8deb91a5c65ce8ee41fdfd8985e5053bedabd513', 2, 'active'),
(266, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', 'd5d236d5f3d8c471406d54b2a85adcd3c1d74f81', 2, 'active'),
(267, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', '6d53c5084abcbf73c10c1061e6b22f489a99ad53', 2, 'active'),
(268, 'ef38c693-8da2-48d6-b199-752c389ea743', 'test family planninh', 'TTT20240721', '4d1ef0ddba177c5cc1863b98d3a4bb572123bf4b', 2, 'active'),
(269, '824252dc-96b2-4238-8bae-b3124521dc20', 'vacc test2', 'VVV20241024', '08f4cb1f3d9a033aa90d5e06ba569cd5319ed9ec', 2, 'active');


CREATE TABLE `vaccinations` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `body_weight` varchar(50) DEFAULT NULL,
  `body_length` varchar(50) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `brgy` varchar(255) DEFAULT NULL,
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
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);


CREATE TABLE `vaccines` (
  `id` int(11) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `abbreviation` varchar(50) DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `doses` varchar(255) NOT NULL,
  `approved_ages` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);


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
-- Indexes for table `family_planning_methods`
--
ALTER TABLE `family_planning_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_family_planning_records`
--
ALTER TABLE `patient_family_planning_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_vaccination_records`
--
ALTER TABLE `patient_vaccination_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `family_planning`
--
ALTER TABLE `family_planning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `family_planning_methods`
--
ALTER TABLE `family_planning_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `patient_family_planning_records`
--
ALTER TABLE `patient_family_planning_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `patient_vaccination_records`
--
ALTER TABLE `patient_vaccination_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `vaccinations`
--
ALTER TABLE `vaccinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;