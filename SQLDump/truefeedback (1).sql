-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 08:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truefeedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_surveys`
--

CREATE TABLE `business_surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `survey_form` char(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deployed` int(11) NOT NULL DEFAULT '0',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_10_095650_entrust_setup_tables', 1),
(4, '2018_04_28_162240_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('3ae21244-dd7c-46e0-903c-3828d7b3bf4d', 'App\\Notifications\\WelcomeNotification', 'App\\User', 1, '{\"repliedTime\":{\"date\":\"2018-05-04 14:18:45.377818\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-04 08:48:45', '2018-05-04 08:48:45'),
('4d9268b8-9cf0-45df-9fc0-3c32d4178ace', 'App\\Notifications\\WelcomeNotification', 'App\\User', 1, '{\"repliedTime\":{\"date\":\"2018-05-05 12:34:35.534739\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 07:04:35', '2018-05-05 07:04:35'),
('4e2a77d7-d1d4-42e6-a51e-89d211da8011', 'App\\Notifications\\WelcomeNotification', 'App\\User', 1, '{\"repliedTime\":{\"date\":\"2018-05-05 12:51:43.773688\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 07:21:43', '2018-05-05 07:21:43'),
('504de3e9-c008-4c9e-b9d5-0841db6cc736', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:17:50.966461\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:47:50', '2018-05-05 03:47:50'),
('57815fc3-517c-4e92-a01e-8eb707fbf01e', 'App\\Notifications\\WelcomeNotification', 'App\\User', 2, '{\"repliedTime\":{\"date\":\"2018-05-04 14:19:55.381178\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-04 08:49:55', '2018-05-04 08:49:55'),
('8b2f886d-c512-41b3-b5f0-9173348e15e2', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 07:11:50.967803\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 01:41:50', '2018-05-05 01:41:50'),
('8b8cb747-843c-46aa-8195-c7535f219c06', 'App\\Notifications\\WelcomeNotification', 'App\\User', 1, '{\"repliedTime\":{\"date\":\"2018-05-04 13:26:48.441683\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-04 07:56:48', '2018-05-04 07:56:48'),
('8f2af052-e437-447f-a41f-cce3317d4037', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:22:48.600245\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:52:48', '2018-05-05 03:52:48'),
('92e0d9be-b5c7-4c61-832f-aef44fa8caf8', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:21:48.728751\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:51:48', '2018-05-05 03:51:48'),
('9e28a328-de4b-4fbd-9484-f6ac5a14c136', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:33:02.586045\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 04:03:02', '2018-05-05 04:03:02'),
('9e8784e1-4ea0-4c11-964c-074ad19e2ee3', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:17:04.467552\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:47:04', '2018-05-05 03:47:04'),
('a969ea8e-df6d-4314-b7d1-18ddb8d4c47a', 'App\\Notifications\\WelcomeNotification', 'App\\User', 2, '{\"repliedTime\":{\"date\":\"2018-05-04 13:28:02.465813\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-04 07:58:02', '2018-05-04 07:58:02'),
('b3b85dc0-46f0-4f1b-aade-dba75f8f5cf7', 'App\\Notifications\\WelcomeNotification', 'App\\User', 2, '{\"repliedTime\":{\"date\":\"2018-05-05 12:37:19.870206\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 07:07:19', '2018-05-05 07:07:19'),
('ce48ebbc-5b17-4be8-a23d-261d67736791', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:14:12.632990\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:44:12', '2018-05-05 03:44:12'),
('cf7841d5-f585-4fa9-b3bd-2bad1d1d0e95', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:16:41.667355\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:46:41', '2018-05-05 03:46:41'),
('ef6d218c-b08b-4301-b995-785cef1bc50f', 'App\\Notifications\\WelcomeNotification', 'App\\User', 3, '{\"repliedTime\":{\"date\":\"2018-05-05 09:07:38.502103\",\"timezone_type\":3,\"timezone\":\"UTC\"}}', NULL, '2018-05-05 03:37:38', '2018-05-05 03:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'User', 'User without any privileges', 'User without any privileges', '2018-05-04 04:15:12', '2018-05-04 04:15:12'),
(2, 'Business', 'Business User without any privileges', 'Business User without any privileges', '2018-05-04 04:15:13', '2018-05-04 04:15:13'),
(3, 'admin', 'User without admin privileges', 'User without admin privileges', '2018-05-04 04:15:13', '2018-05-04 04:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci,
  `phone_number` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eth_key` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `is_wallet_linked` tinyint(1) NOT NULL DEFAULT '0',
  `wallet_address` text COLLATE utf8mb4_unicode_ci,
  `feedback_token_balance` double(8,4) NOT NULL DEFAULT '0.0000',
  `eth_token_balance` double(8,4) NOT NULL DEFAULT '0.0000',
  `profile_status` tinyint(1) NOT NULL DEFAULT '0',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `email`, `profile_image`, `phone_number`, `password`, `account_type`, `eth_key`, `country`, `state`, `dob`, `is_wallet_linked`, `wallet_address`, `feedback_token_balance`, `eth_token_balance`, `profile_status`, `verified`, `verification_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rNlaGKgmd', 'Tittu', 'Varghese', 'truefeedback@user.com', NULL, NULL, '$2y$10$Sp2T5B5bXiNJd9Nfm7W1DugxN3hqdiXasm9gklpgmW.qRfXXQ6dxO', 'User', NULL, 'India', 'Kerala', '1995-05-12', 1, 'this-is-just-a-test-address2', 12.3220, 15.8795, 0, 1, 'xGgV97vLo', 'Y0hANUYvmgBigUCSB2X4KJkj1lR4QvnS4cPOLIdaEtpfdzdfHz9oYtkM5EyK', NULL, '2018-05-04 07:57:15'),
(2, 'o0k1vMogZ', 'Tittu', 'Varghese', 'truefeedback@bus.com', NULL, NULL, '$2y$10$r75HFOCENKS0MfxGwiPn.OSJOxgu/qIkBvaVcpb6ef5JtJ0NWoHbG', 'Business', NULL, 'India', 'Kerala', '1995-05-12', 1, 'this-is-just-a-test-address2', 12.3220, 15.8795, 0, 1, 'evk7RB0Xy', 'HAnCHSU5NWm90Ydfy9sQjSXA0IETiFKUjM0hyChNBb1cdfmxubTEHGxdEGTg', NULL, '2018-05-04 07:58:13'),
(3, 'gmOLEw4jp', 'Stanly', 'Johnson', 'stanly@servntire.com', NULL, NULL, '$2y$10$rznYUnv7Xq/8eH9viakcQOHa02RDeFH8gaXV5vDm.gfuOJ4qVcL7i', 'Admin', NULL, 'India', 'Kerala', '1995-05-12', 1, 'this-is-just-a-test-address2', 0.0000, 0.0000, 0, 1, 'mMj2wK9nl', 'cSerKadGgIXKoxEhWNgQ4yG0KjVr1JAfly9StXKocGwFEN2DBZqkojidRTWs', NULL, '2018-05-05 01:41:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_surveys`
--
ALTER TABLE `business_surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_user_id_index` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_surveys`
--
ALTER TABLE `business_surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
