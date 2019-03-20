-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2018 at 01:53 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signage`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`id`, `author`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '2018-09-22 00:56:16', '2018-09-22 00:56:16'),
(2, 'service provider', '2018-09-22 00:56:16', '2018-09-22 00:56:16'),
(3, 'network manager', '2018-09-22 00:56:16', '2018-09-22 00:56:16'),
(4, 'permission manager', '2018-09-22 00:56:16', '2018-09-22 00:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_at` timestamp NULL DEFAULT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `picture`, `name`, `email`, `password`, `registered_at`, `permission`, `created_at`, `updated_at`) VALUES
(1, 'a.png', 'test', 'test@aol.com', '6LfBrDQUAAAAAFyD0s2mHfqnROVPuvvcARpIUZPu', '2018-09-04 09:10:34', 1, '2018-09-21 02:27:31', '2018-09-21 02:27:31'),
(2, 'b.png', 'Alexy R', 'DevexpressTalent@gmail.com', 'x2YsVFCd2KrrtO9OS3YejPQD7', '2018-02-21 03:28:45', 0, '2018-09-21 02:28:45', '2018-09-21 02:28:45'),
(3, 'c.png', 'Tiger Nixon', 'eugene.elder@gmail.com', 'LKhU5sdjt!tRCFEUEFU$%$%^$^FSEE#FSF', '2018-09-11 02:30:12', 0, '2018-09-21 02:30:19', '2018-09-21 02:30:19'),
(4, '4.jpg', 'Wong Tep', 'DemoUser2@test.com', 'SX2%AQCdfoR.S<.HTHT6767&&BghnyRTbbF', '2018-09-21 00:45:11', 0, '2018-09-21 02:45:11', '2018-09-21 02:45:11'),
(5, '4.jpg', 'Eugene Elder', 'maksimmosko0303@yahoo.com', 'pcEREGRRo82GRG493$$GR&^GGRCSVVSVvvEFFvr', '2018-09-21 02:46:40', 1, '2018-09-21 02:46:40', '2018-09-21 02:46:40'),
(6, 'a.png', 'Joe Hill', 'Achilles0915@yandex.com', 'qweASD12#GRG#DF656DFGRMHM%^7878HFFGH', '2018-04-11 02:47:52', 0, '2018-09-21 02:47:52', '2018-09-21 02:47:52'),
(7, 'b.png', 'Genesis supsup', 'fornewworld@yahoo.com', 'Mjg1ODEyMzkyOTMwMDUwMDQ4.C5YI', '2017-09-21 02:47:52', 1, '2018-09-21 02:47:52', '2018-09-21 02:47:52'),
(8, 'c.png', 'Victor lavrob', 'zhangjin.dev@gmail.com', 'kyOTMwMDUwMDQ4.C5YIkA.Xzx5m7DImy', '2018-05-31 02:51:31', 1, '2018-09-21 02:51:31', '2018-09-21 02:51:31'),
(9, 'b.png', 'James Morgan', 'eugene@expdatasol.com', 'rx3QWEQWE@FSFESajNn7Y454FVDFV6&uF8', '2018-09-21 02:51:31', 0, '2018-09-21 02:51:31', '2018-09-21 02:51:31'),
(10, 'b.png', 'rionel messi', 'ARoman@azureewebsitedev.onmicrosoft.com', 'ImyelSG1PGeTcIItrht5464GRRGGDFG56&&GG441', '2018-09-21 02:51:31', 0, '2018-09-21 02:51:31', '2018-09-21 02:51:31'),
(11, '4.jpg', 'harry kein', 'alexyroman1986@hotmail.com', 'skm#123456789%^%$#$%HT', '2018-04-24 02:51:31', 1, '2018-09-21 02:51:31', '2018-09-21 02:51:31'),
(12, 'c.png', 'bill gates', 'cstuart@caribmedltd.com', 'https%3a%2f%2fwww.devexpress.com%2f', '2017-11-09 08:00:00', 1, '2018-09-21 02:51:31', '2018-09-21 02:51:31'),
(13, 'a.png', 'stev jobs', 'rubyonrail@sharemycoach.com', 'ODEyMzkyOTMwMDUwMDQ4.C5YIkA.Xzx5m7DImye', '2018-06-13 09:30:23', 0, '2018-09-21 02:51:31', '2018-09-21 02:51:31'),
(14, 'c.png', 'donald trump', 'petro123123@ctol.com', 'd5HxaII5NxEQuGnw2la+DEMwVIMu1GrJOKafp/', '2018-09-02 17:23:12', 1, '2018-09-21 02:52:13', '2018-09-21 02:52:13'),
(15, 'b.png', 'rionel messi', 'ARoman@azureewebsitedev.onmicrosoft.com', 'Imyel546GDGD$#$#SG1PGeTcIIFSD34VXVvbsvjjy', '2018-09-21 02:51:31', 0, '2018-09-21 02:51:31', '2018-09-21 02:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `customer_id`, `login_at`, `created_at`, `updated_at`) VALUES
(1, 12, '2018-09-19 15:11:24', NULL, NULL),
(2, 12, '2018-09-18 15:11:24', NULL, NULL),
(3, 12, '2018-09-17 15:11:24', NULL, NULL),
(4, 12, '2018-09-15 15:11:24', NULL, NULL),
(5, 12, '2018-09-14 15:11:24', NULL, NULL),
(6, 10, '2018-09-14 15:11:24', NULL, NULL),
(7, 10, '2018-09-19 16:06:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `customer_id`, `status`, `login_at`, `logout_at`, `count`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2018-09-21 15:11:24', '2018-09-21 15:11:24', 1, NULL, NULL),
(2, 10, 0, '2018-09-21 15:13:36', '2018-09-21 15:13:36', 12, NULL, NULL),
(3, 5, 1, '2018-09-20 15:11:24', '2018-09-21 15:21:56', 0, NULL, NULL),
(5, 12, 1, '2018-09-19 15:11:24', '2018-09-19 16:11:24', 20, NULL, NULL),
(6, 6, 1, '2018-09-12 15:11:24', '2018-09-12 17:11:24', 2, NULL, NULL),
(7, 7, 1, '2018-09-02 15:11:24', '2018-09-02 17:11:24', 9, NULL, NULL),
(8, 8, 1, '2018-09-07 15:11:24', '2018-09-07 17:11:24', 5, NULL, NULL),
(9, 9, 1, '2018-09-17 15:11:24', '2018-09-17 17:11:24', 8, NULL, NULL),
(10, 3, 0, '2018-09-01 15:11:24', '2018-09-01 17:11:24', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_20_065707_create_customer_table', 2),
(4, '2018_09_21_075305_create_login_table', 3),
(5, '2018_09_21_082854_create_history_table', 4),
(17, '2018_09_21_154824_create_authority_table', 5),
(29, '2018_09_21_172649_remove_level_from_users', 6),
(31, '2018_09_21_194311_add_level_to_users', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 1, 'sun.kiss.me@yandex.com', NULL, '$2y$10$osRujSCM4SCXsPs1ZMrSK.3q8jw20sKhdnM0mlR141O/nIWz61//C', 'jzsMT0T7BIVouvo1DIk6RX6VD84DvZXHAFHfgZ0PQGqn9ZSgCzOqsx0uXTqI', '2018-09-22 02:52:02', '2018-09-22 02:52:02'),
(4, 'alexy', 3, 'alexy1555@gmail.com', NULL, '$2y$10$MgEiaIWxKYCf3S3nuG/yYuYNBmdr0HeyP6hwM8xooW6.fOs4U0Pvi', 'GHnp6oTIJG', '2018-09-22 03:07:53', '2018-09-22 03:07:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_level_foreign` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authority`
--
ALTER TABLE `authority`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_level_foreign` FOREIGN KEY (`level`) REFERENCES `authority` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
