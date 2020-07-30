-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 11:41 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `msg`) VALUES
(1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_totalenroll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_totalclass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_des`, `course_fee`, `course_totalenroll`, `course_totalclass`, `course_link`, `course_img`) VALUES
(2, 'aa', 'aa', 'aa', 'aazzzzzzzzzz', 'aa', 'aa', 'aa'),
(3, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'images/flutter.png'),
(4, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'images/react.jpg'),
(5, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'images/laravel.jpg'),
(6, 'aa', 'aa', 'aazzzzzzz', 'aa', 'aa', 'aa', 'images/react.jpg'),
(7, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'images/flutter.png'),
(8, 'aa', 'aa', 'aazzzzz', 'aa', 'aa', 'aa', 'images/Laravel.png');

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2020_07_27_182012_create_visitor_tables_table', 1),
(26, '2020_07_27_211552_services_table', 2),
(27, '2020_07_28_185701_courses_table', 2),
(28, '2020_07_29_160210_projects_table', 2),
(29, '2020_07_29_200515_contact_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_des`, `project_link`, `project_img`) VALUES
(2, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(3, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(4, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(5, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(8, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(11, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(12, 'aa', 'aabbbbbbbbbbbbbb', 'aa', 'images/poject.jpg'),
(13, 'aa', 'aabbbbbbbbbbbbb', 'aa', 'images/poject.jpg'),
(14, 'aa', 'aa', 'aa', 'images/poject.jpg'),
(17, 'aaddqqqqqqqqqqq', 'aadddqqqqqqqqqqqqqqq', 'aaddddqqqqqqq', 'images/poject.jpg'),
(18, 'aaddqqqqqqqqqqq', 'aadddqqqqqqqqqqqqqqq', 'aaddddqqqqqqq', 'images/poject.jpg'),
(19, 'ccccccc', 'cccccc', 'cccccc', 'images/poject.jpg');

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
(2, 'shakilaaaaaaa', 'aaaaaa', 'images/android.jpg'),
(3, 'shakil', 'aaaaaa', 'images/android.jpg'),
(4, 'shakil', 'aaaaaaaaaaaaa', 'images/jwt.png'),
(5, 'shakil', 'aaaaaa', 'images/android.jpg'),
(6, 'shakil', 'aaaaaa', 'images/android.jpg'),
(7, 'shakil', 'aaaaaaaa', 'images/android.jpg'),
(8, 'zzaaaaaaaaaaaaaa', 'zzaaaa', 'images/android.jpg'),
(9, 'aaaaa', 'aaaaaaaaaaaazzzzzzz', 'images/android.jpg'),
(10, 'cccccccccc', 'ccccccccc', 'images/android.jpg'),
(11, 'cccccccccc', 'ccccccccc', 'images/android.jpg');

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
(1, '127.0.0.1', '2020-07-29 10:09:59pm'),
(2, '127.0.0.1', '2020-07-29 10:10:07pm'),
(3, '127.0.0.1', '2020-07-29 10:10:08pm'),
(4, '127.0.0.1', '2020-07-29 10:10:08pm'),
(5, '127.0.0.1', '2020-07-29 10:10:09pm'),
(6, '127.0.0.1', '2020-07-29 10:13:46pm'),
(7, '127.0.0.1', '2020-07-29 10:21:43pm'),
(8, '127.0.0.1', '2020-07-29 10:24:04pm'),
(9, '127.0.0.1', '2020-07-29 10:24:26pm'),
(10, '127.0.0.1', '2020-07-29 10:24:44pm'),
(11, '127.0.0.1', '2020-07-29 10:25:37pm'),
(12, '127.0.0.1', '2020-07-29 10:28:38pm'),
(13, '127.0.0.1', '2020-07-29 10:28:58pm'),
(14, '127.0.0.1', '2020-07-29 10:29:20pm'),
(15, '127.0.0.1', '2020-07-29 10:29:45pm'),
(16, '127.0.0.1', '2020-07-29 10:30:08pm'),
(17, '127.0.0.1', '2020-07-29 10:31:00pm'),
(18, '127.0.0.1', '2020-07-29 10:31:07pm'),
(19, '127.0.0.1', '2020-07-29 10:51:46pm'),
(20, '127.0.0.1', '2020-07-30 01:24:56am'),
(21, '127.0.0.1', '2020-07-30 01:26:15am'),
(22, '127.0.0.1', '2020-07-30 01:27:34am'),
(23, '127.0.0.1', '2020-07-30 01:28:45am'),
(24, '127.0.0.1', '2020-07-30 01:30:18am'),
(25, '127.0.0.1', '2020-07-30 01:31:11am'),
(26, '127.0.0.1', '2020-07-30 01:33:12am'),
(27, '127.0.0.1', '2020-07-30 01:33:50am'),
(28, '127.0.0.1', '2020-07-30 01:35:10am'),
(29, '127.0.0.1', '2020-07-30 01:35:29am'),
(30, '127.0.0.1', '2020-07-30 01:36:14am'),
(31, '127.0.0.1', '2020-07-30 01:39:45am'),
(32, '127.0.0.1', '2020-07-30 01:39:47am'),
(33, '127.0.0.1', '2020-07-30 01:39:48am'),
(34, '127.0.0.1', '2020-07-30 01:39:48am'),
(35, '127.0.0.1', '2020-07-30 01:39:50am'),
(36, '127.0.0.1', '2020-07-30 01:40:02am'),
(37, '127.0.0.1', '2020-07-30 01:40:03am'),
(38, '127.0.0.1', '2020-07-30 01:40:03am'),
(39, '127.0.0.1', '2020-07-30 01:40:04am'),
(40, '127.0.0.1', '2020-07-30 01:40:05am'),
(41, '127.0.0.1', '2020-07-30 02:03:01am'),
(42, '127.0.0.1', '2020-07-30 02:04:26am'),
(43, '127.0.0.1', '2020-07-30 02:19:55am'),
(44, '127.0.0.1', '2020-07-30 02:20:09am'),
(45, '127.0.0.1', '2020-07-30 02:20:34am'),
(46, '127.0.0.1', '2020-07-30 02:28:13am'),
(47, '127.0.0.1', '2020-07-30 02:29:28am'),
(48, '127.0.0.1', '2020-07-30 02:35:39am'),
(49, '127.0.0.1', '2020-07-30 02:36:12am'),
(50, '127.0.0.1', '2020-07-30 02:38:58am'),
(51, '127.0.0.1', '2020-07-30 02:40:19am'),
(52, '127.0.0.1', '2020-07-30 02:42:36am'),
(53, '127.0.0.1', '2020-07-30 02:47:12am'),
(54, '127.0.0.1', '2020-07-30 02:49:11am'),
(55, '127.0.0.1', '2020-07-30 03:02:34am'),
(56, '127.0.0.1', '2020-07-30 03:02:56am'),
(57, '127.0.0.1', '2020-07-30 03:04:43am'),
(58, '127.0.0.1', '2020-07-30 03:05:59am'),
(59, '127.0.0.1', '2020-07-30 03:07:54am'),
(60, '127.0.0.1', '2020-07-30 03:08:37am'),
(61, '127.0.0.1', '2020-07-30 03:13:44am'),
(62, '127.0.0.1', '2020-07-30 03:16:14am'),
(63, '127.0.0.1', '2020-07-30 03:16:51am'),
(64, '127.0.0.1', '2020-07-30 03:17:38am'),
(65, '127.0.0.1', '2020-07-30 03:18:33am'),
(66, '127.0.0.1', '2020-07-30 03:19:39am'),
(67, '127.0.0.1', '2020-07-30 03:20:32am'),
(68, '127.0.0.1', '2020-07-30 03:21:29am'),
(69, '127.0.0.1', '2020-07-30 03:23:40am'),
(70, '127.0.0.1', '2020-07-30 03:26:55am'),
(71, '127.0.0.1', '2020-07-30 03:27:34am'),
(72, '127.0.0.1', '2020-07-30 03:35:58am'),
(73, '127.0.0.1', '2020-07-30 03:37:24am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_tables`
--
ALTER TABLE `visitor_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitor_tables`
--
ALTER TABLE `visitor_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
