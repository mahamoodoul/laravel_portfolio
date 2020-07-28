-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 12:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_07_27_182012_create_visitor_tables_table', 1),
(7, '2020_07_27_211552_services_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_des`, `service_img`) VALUES
(1, 'আইটি কোর্স', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/knowledge.svg'),
(2, 'সোর্স কোড(i)', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/code.svg'),
(3, 'ইন্টারফেস', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/graphic.svg'),
(4, 'কাস্টম সার্ভিস', 'মোবাইল এবং ওয়েব এপ্লিকেশন ডেভেলপমেন্ট', 'images/custom.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_tables`
--

CREATE TABLE `visitor_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_tables`
--

INSERT INTO `visitor_tables` (`id`, `ip_address`, `visit_time`) VALUES
(1, '127.0.0.1', '2020-07-28 02:03:47am'),
(2, '127.0.0.1', '2020-07-28 02:09:42am'),
(3, '127.0.0.1', '2020-07-28 02:09:46am'),
(4, '127.0.0.1', '2020-07-28 02:10:02am'),
(5, '127.0.0.1', '2020-07-28 02:51:36am'),
(6, '127.0.0.1', '2020-07-28 02:52:25am'),
(7, '127.0.0.1', '2020-07-28 02:52:30am'),
(8, '127.0.0.1', '2020-07-28 02:52:32am'),
(9, '127.0.0.1', '2020-07-28 02:52:33am'),
(10, '127.0.0.1', '2020-07-28 02:52:34am'),
(11, '127.0.0.1', '2020-07-28 02:52:34am'),
(12, '127.0.0.1', '2020-07-28 02:52:35am'),
(13, '127.0.0.1', '2020-07-28 02:52:36am'),
(14, '127.0.0.1', '2020-07-28 02:52:37am'),
(15, '127.0.0.1', '2020-07-28 02:52:37am'),
(16, '127.0.0.1', '2020-07-28 02:52:38am'),
(17, '127.0.0.1', '2020-07-28 02:52:39am'),
(18, '127.0.0.1', '2020-07-28 03:00:52am'),
(19, '127.0.0.1', '2020-07-28 03:00:54am'),
(20, '127.0.0.1', '2020-07-28 03:01:25am'),
(21, '127.0.0.1', '2020-07-28 03:01:36am'),
(22, '127.0.0.1', '2020-07-28 03:01:39am'),
(23, '127.0.0.1', '2020-07-28 03:02:12am'),
(24, '127.0.0.1', '2020-07-28 03:04:15am'),
(25, '127.0.0.1', '2020-07-28 03:04:22am'),
(26, '127.0.0.1', '2020-07-28 03:05:45am'),
(27, '127.0.0.1', '2020-07-28 03:05:49am'),
(28, '127.0.0.1', '2020-07-28 03:05:52am'),
(29, '127.0.0.1', '2020-07-28 03:07:18am'),
(30, '127.0.0.1', '2020-07-28 03:07:19am'),
(31, '127.0.0.1', '2020-07-28 03:07:20am'),
(32, '127.0.0.1', '2020-07-28 03:07:21am'),
(33, '127.0.0.1', '2020-07-28 03:09:27am'),
(34, '127.0.0.1', '2020-07-28 03:13:03am'),
(35, '127.0.0.1', '2020-07-28 03:32:51am'),
(36, '127.0.0.1', '2020-07-28 03:33:12am'),
(37, '127.0.0.1', '2020-07-28 03:33:19am'),
(38, '127.0.0.1', '2020-07-28 03:33:38am'),
(39, '127.0.0.1', '2020-07-28 04:23:10am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor_tables`
--
ALTER TABLE `visitor_tables`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_tables`
--
ALTER TABLE `visitor_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
