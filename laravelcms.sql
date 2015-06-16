-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 11:36 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravelcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_04_12_033614_create_user_profiles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `blocked` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `verified`, `blocked`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@local.dev', 1, 0, '$2y$10$XfvlbAATow718etDTjLGzOhxHg29Z3gAX50NQiWwiEQvaf4X0.z1q', '9XEt363EGjXX8viGOdoiS0KzySyvZnLpW62uPk8QgnM9gY65MN2mnAsFhxVM', '2015-05-12 21:22:43', '2015-06-01 23:33:48'),
(9, 'Trung', 'trung@local.dev', 0, 0, '$2y$10$fu1P0FwHO7JJAWwQh7O0se4SHrVimd/G.kqg45GqiGuEcrcyMXfBO', 'WpvHeOP2HeEprSijOtqpvp9Bx6QRSxXV10u0hwF4wQuVV6SbRMcMbrIiSjD6', '2015-05-13 01:22:16', '2015-06-01 23:33:53'),
(10, 'user1', 'user1@local.dev', 0, 0, '$2y$10$jfOXeW9aqtuP4QA0gzn1re6GEoTCsokcrNAmFISBx677PG1m4kx5q', 'b2t0GoEeNTRK4O80jQPCh2gjmZXGQLB5XaxmkMQaPl4wYBO75LF1cPCXlEir', '2015-05-13 03:11:46', '2015-05-14 03:07:46'),
(11, 'user2', 'user2@local.dev', 0, 0, '$2y$10$rIatKSeWUpOeEoOvc0rx.u69Al6jrO/0h1Tpmd5MyXwF/KO32qBg.', 'pbhPbiuAaZQ0tH0rkL6teLvuVMa4GEu9gMBitxtsNwSmZ1BYHByvfw0LKsBa', '2015-05-13 03:28:26', '2015-05-13 03:30:32'),
(12, 'user3', 'user3@local.dev', 0, 0, '$2y$10$9iwUoI02tbtjJGteTvwUoeLhbft6MoiQVgVwUE1byMNDCFz5MjBnS', 'Div3kn4Q5QMOV79HFHV1UwdBkQbo6so30ysPscMiEwCI0Xg4EIS6UzBO8poJ', '2015-05-13 03:30:50', '2015-05-13 03:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `user_id` int(11) NOT NULL,
  `language` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`user_id`, `language`, `url_name`, `updated_at`) VALUES
(1, 'en', 'admin', '2015-05-13 08:20:47'),
(9, 'en', 'Trung', '2015-05-13 01:22:16'),
(10, 'en', 'user1', '2015-05-13 03:11:46'),
(11, 'en', 'user2', '2015-05-13 03:28:26'),
(12, 'en', 'user3', '2015-05-13 03:30:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD UNIQUE KEY `user_profiles_user_id_unique` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
