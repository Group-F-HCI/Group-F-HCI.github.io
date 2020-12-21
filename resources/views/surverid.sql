-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 12:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surverid`
--
CREATE DATABASE IF NOT EXISTS `surverid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `surverid`;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_10_102632_create_surverid_dbs_table', 1),
(5, '2020_12_15_060737_data_user_tambahan', 2),
(6, '2020_12_16_015839_add_image_to_user', 3),
(7, '2020_12_16_024659_add_userid_to_surveriddb', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bizarre@gmail.com', '$2y$10$6Wj8uaAcCee6cUzluWSN/.IFNn1RzNjRgQUV8WLrRDT5q6adjSfNO', '2020-12-15 03:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `surverid_dbs`
--

CREATE TABLE `surverid_dbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surverid_dbs`
--

INSERT INTO `surverid_dbs` (`id`, `created_at`, `updated_at`, `title`, `link`, `description`, `image`, `username`, `fullname`, `email`, `user_id`) VALUES
(204, '2020-12-13 23:16:59', '2020-12-13 23:16:59', 'Survery', 'https://puebi.readthedocs.io/en/latest/tanda-baca/tanda-koma/', 'PUEBI', 'Elaina_Wallpaper_1607926619.jpg', 'Gupron', 'Shien Valuneyard', 'b@yahoo.com', 1),
(207, '2020-12-13 23:21:57', '2020-12-13 23:21:57', 'hora', 'http://localhost/laravel_project/surverid/public/surverid_db/create', 'Starbeat', 'Picture01.jpg', 'Gupron', 'Shien Valuneyard', 'b@yahoo.com', 1),
(209, '2020-12-15 13:32:43', '2020-12-15 13:32:43', 'Hora', 'http://fmipa.unj.ac.id/elearning/mcl/', 'kira kira', 'Picture01.jpg', 'kirakira4141', 'Aotsuki Amekiri', 'jojo@tes.com', 2),
(212, '2020-12-16 01:48:35', '2020-12-16 01:48:35', 'Survey Gak Asal Asal', 'http://localhost/laravel_project/surverid/public/', 'Chigau kana', 'Picture01.jpg', 'kirakira4141', 'Aotsuki Amekiri', 'jojo@tes.com', 2),
(213, '2020-12-16 05:42:11', '2020-12-16 05:44:22', 'Kirigai Touguro', 'http://localhost/laravel_project/surverid/public/', 'Auaha', 'Picture01.jpg', 'kirakira4141', 'Aotsuki Amekiri', 'jojo@tes.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Beginner',
  `sp` int(11) NOT NULL DEFAULT 0,
  `fp` int(11) NOT NULL DEFAULT 0,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NonPicture.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `title`, `sp`, `fp`, `fullname`, `occupation`, `telegram`, `instance`, `about_me`, `image`) VALUES
(1, 'Tonkatsu', 'bizarre@gmail.com', NULL, '$2y$10$qyyzBbppkQoIlGJyrm0d9e7534wlyQNZfTsQ7MGEnWq7YjYhsYfAy', NULL, '2020-12-14 06:21:12', '2020-12-14 06:21:12', 'Beginner', 0, 0, 'Shien Valuneyard', '', '', '', '', 'NonPicture.jpg'),
(2, 'kirakira4141', 'jojo@tes.com', '2020-12-15 14:29:17', '$2y$10$EQ7btOHk34cTM6CjuGad3evvatjFgbe8yKHYYEBqg3a5VbcpKGdbO', NULL, '2020-12-15 07:29:17', '2020-12-16 05:44:38', 'Beginner', 4, 4, 'Aotsuki Amekiri', 'College Student', 'nolink', 'Bluemoone company', 'Shine', 'Haruya Nasuki_Boderless_1608085575.jpg'),
(3, 'rainfog_muzaba', 'jojo@gmail.com', '2020-12-16 06:56:28', '$2y$10$D72PDF05ptTCtkttn//QKOkzUpuXkf.RaZVhJEdG6y45dkghrC0Xu', NULL, '2020-12-15 23:56:28', '2020-12-16 00:30:13', 'Beginner', 1, 0, 'Rainfog Muzaba', NULL, NULL, NULL, NULL, 'Misane Mikoto_KW_1608101802.jpg'),
(4, 'Amekiri', 'iffinaffan@gmail.com', '2020-12-17 07:22:28', '$2y$10$0uOquzXa6SKs91YHxUQtc.yafmmtfV1rAmwA7lInYfcyu0WioevC2', NULL, '2020-12-17 00:22:28', '2020-12-17 00:22:28', 'Beginner', 0, 0, 'Scarleria Hibisu', NULL, NULL, NULL, NULL, 'NonPicture.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `surverid_dbs`
--
ALTER TABLE `surverid_dbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surverid_dbs`
--
ALTER TABLE `surverid_dbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
