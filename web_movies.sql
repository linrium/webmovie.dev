-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 10:24 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `name`, `alias`, `views`, `likes`, `movie_id`, `created_at`, `updated_at`) VALUES
(7, '1', '1', '0', '0', 1, '2016-12-17 21:54:46', '2016-12-17 21:54:46'),
(8, '2', '2', '0', '0', 1, '2016-12-17 21:55:06', '2016-12-17 21:55:06'),
(9, '3', '3', '0', '0', 1, '2016-12-17 21:56:21', '2016-12-17 21:56:21'),
(10, '1', '1', '0', '0', 8, '2016-12-17 23:21:51', '2016-12-17 23:21:51'),
(11, '2', '2', '0', '0', 8, '2016-12-17 23:27:26', '2016-12-17 23:27:26'),
(12, '1', '1', '0', '0', 7, '2016-12-17 23:28:06', '2016-12-17 23:28:06'),
(13, '1', '1', '0', '0', 6, '2016-12-17 23:30:44', '2016-12-17 23:30:44'),
(14, '2', '2', '0', '0', 6, '2016-12-17 23:31:54', '2016-12-17 23:31:54'),
(15, '1', '1', '0', '0', 5, '2016-12-17 23:32:41', '2016-12-17 23:32:41'),
(16, '2', '2', '0', '0', 5, '2016-12-17 23:33:07', '2016-12-17 23:33:07'),
(17, '1', '1', '0', '0', 4, '2016-12-17 23:33:36', '2016-12-17 23:33:36'),
(18, '2', '2', '0', '0', 4, '2016-12-17 23:33:49', '2016-12-17 23:33:49'),
(19, '1', '1', '0', '0', 3, '2016-12-17 23:34:17', '2016-12-17 23:34:17'),
(20, '2', '2', '0', '0', 3, '2016-12-17 23:34:37', '2016-12-17 23:34:37'),
(21, '1', '1', '1', '0', 2, '2016-12-17 23:35:07', '2016-12-17 23:35:07'),
(22, '2', '2', '2', '0', 2, '2016-12-17 23:35:20', '2016-12-17 23:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `episode_keywords`
--

CREATE TABLE `episode_keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `episode_id` int(10) UNSIGNED NOT NULL,
  `keyword_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `episode_links`
--

CREATE TABLE `episode_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `episode_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `episode_links`
--

INSERT INTO `episode_links` (`id`, `link`, `episode_id`, `created_at`, `updated_at`) VALUES
(31, 'https://www.youtube.com/watch?v=jx0aoRtu5og', 7, '2016-12-17 21:54:46', '2016-12-17 21:54:46'),
(32, 'https://www.youtube.com/watch?v=jx0aoRtu5og', 7, '2016-12-17 21:54:46', '2016-12-17 21:54:46'),
(33, 'https://www.youtube.com/watch?v=jx0aoRtu5og', 7, '2016-12-17 21:54:46', '2016-12-17 21:54:46'),
(34, 'https://www.youtube.com/watch?v=jx0aoRtu5og', 7, '2016-12-17 21:54:46', '2016-12-17 21:54:46'),
(35, 'https://www.youtube.com/watch?v=jx0aoRtu5og', 7, '2016-12-17 21:54:46', '2016-12-17 21:54:46'),
(36, 'https://www.youtube.com/watch?v=LW9dxMAoDpA', 8, '2016-12-17 21:55:06', '2016-12-17 21:55:06'),
(37, 'https://www.youtube.com/watch?v=LW9dxMAoDpA', 8, '2016-12-17 21:55:06', '2016-12-17 21:55:06'),
(38, 'https://www.youtube.com/watch?v=LW9dxMAoDpA', 8, '2016-12-17 21:55:06', '2016-12-17 21:55:06'),
(39, 'https://www.youtube.com/watch?v=LW9dxMAoDpA', 8, '2016-12-17 21:55:06', '2016-12-17 21:55:06'),
(40, 'https://www.youtube.com/watch?v=LW9dxMAoDpA', 8, '2016-12-17 21:55:06', '2016-12-17 21:55:06'),
(41, 'https://www.youtube.com/watch?v=VWDGpxrOQLw', 9, '2016-12-17 21:56:21', '2016-12-17 21:56:21'),
(42, 'https://www.youtube.com/watch?v=VWDGpxrOQLw', 9, '2016-12-17 21:56:21', '2016-12-17 21:56:21'),
(43, 'https://www.youtube.com/watch?v=VWDGpxrOQLw', 9, '2016-12-17 21:56:21', '2016-12-17 21:56:21'),
(44, 'https://www.youtube.com/watch?v=VWDGpxrOQLw', 9, '2016-12-17 21:56:21', '2016-12-17 21:56:21'),
(45, 'https://www.youtube.com/watch?v=VWDGpxrOQLw', 9, '2016-12-17 21:56:21', '2016-12-17 21:56:21'),
(46, 'https://www.youtube.com/watch?v=6iSsxKZnpI8', 10, '2016-12-17 23:21:51', '2016-12-17 23:21:51'),
(47, 'https://www.youtube.com/watch?v=6iSsxKZnpI8', 10, '2016-12-17 23:21:51', '2016-12-17 23:21:51'),
(48, 'https://www.youtube.com/watch?v=6iSsxKZnpI8', 10, '2016-12-17 23:21:52', '2016-12-17 23:21:52'),
(49, 'https://www.youtube.com/watch?v=6iSsxKZnpI8', 10, '2016-12-17 23:21:52', '2016-12-17 23:21:52'),
(50, 'https://www.youtube.com/watch?v=6iSsxKZnpI8', 10, '2016-12-17 23:21:52', '2016-12-17 23:21:52'),
(51, 'https://www.youtube.com/watch?v=jbv5rCcTCfc', 11, '2016-12-17 23:27:26', '2016-12-17 23:27:26'),
(52, 'https://www.youtube.com/watch?v=jbv5rCcTCfc', 11, '2016-12-17 23:27:26', '2016-12-17 23:27:26'),
(53, 'https://www.youtube.com/watch?v=jbv5rCcTCfc', 11, '2016-12-17 23:27:26', '2016-12-17 23:27:26'),
(54, 'https://www.youtube.com/watch?v=jbv5rCcTCfc', 11, '2016-12-17 23:27:26', '2016-12-17 23:27:26'),
(55, 'https://www.youtube.com/watch?v=jbv5rCcTCfc', 11, '2016-12-17 23:27:26', '2016-12-17 23:27:26'),
(56, 'https://www.youtube.com/watch?v=eTP2ns5RS_s', 12, '2016-12-17 23:28:06', '2016-12-17 23:28:06'),
(57, 'https://www.youtube.com/watch?v=eTP2ns5RS_s', 12, '2016-12-17 23:28:06', '2016-12-17 23:28:06'),
(58, 'https://www.youtube.com/watch?v=eTP2ns5RS_s', 12, '2016-12-17 23:28:06', '2016-12-17 23:28:06'),
(59, 'https://www.youtube.com/watch?v=eTP2ns5RS_s', 12, '2016-12-17 23:28:06', '2016-12-17 23:28:06'),
(60, 'https://www.youtube.com/watch?v=eTP2ns5RS_s', 12, '2016-12-17 23:28:06', '2016-12-17 23:28:06'),
(61, 'https://www.youtube.com/watch?v=xk9vmpq_xh8', 13, '2016-12-17 23:30:44', '2016-12-17 23:30:44'),
(62, 'https://www.youtube.com/watch?v=xk9vmpq_xh8', 13, '2016-12-17 23:30:44', '2016-12-17 23:30:44'),
(63, 'https://www.youtube.com/watch?v=xk9vmpq_xh8', 13, '2016-12-17 23:30:44', '2016-12-17 23:30:44'),
(64, 'https://www.youtube.com/watch?v=xk9vmpq_xh8', 13, '2016-12-17 23:30:45', '2016-12-17 23:30:45'),
(65, 'https://www.youtube.com/watch?v=xk9vmpq_xh8', 13, '2016-12-17 23:30:45', '2016-12-17 23:30:45'),
(66, 'https://www.youtube.com/watch?v=EuevC9BUyeM', 14, '2016-12-17 23:31:54', '2016-12-17 23:31:54'),
(67, 'https://www.youtube.com/watch?v=EuevC9BUyeM', 14, '2016-12-17 23:31:54', '2016-12-17 23:31:54'),
(68, 'https://www.youtube.com/watch?v=EuevC9BUyeM', 14, '2016-12-17 23:31:54', '2016-12-17 23:31:54'),
(69, 'https://www.youtube.com/watch?v=EuevC9BUyeM', 14, '2016-12-17 23:31:54', '2016-12-17 23:31:54'),
(70, 'https://www.youtube.com/watch?v=EuevC9BUyeM', 14, '2016-12-17 23:31:54', '2016-12-17 23:31:54'),
(71, 'https://www.youtube.com/watch?v=Qtr8_xFtfIU', 15, '2016-12-17 23:32:41', '2016-12-17 23:32:41'),
(72, 'https://www.youtube.com/watch?v=Qtr8_xFtfIU', 15, '2016-12-17 23:32:41', '2016-12-17 23:32:41'),
(73, 'https://www.youtube.com/watch?v=Qtr8_xFtfIU', 15, '2016-12-17 23:32:41', '2016-12-17 23:32:41'),
(74, 'https://www.youtube.com/watch?v=Qtr8_xFtfIU', 15, '2016-12-17 23:32:41', '2016-12-17 23:32:41'),
(75, 'https://www.youtube.com/watch?v=Qtr8_xFtfIU', 15, '2016-12-17 23:32:41', '2016-12-17 23:32:41'),
(76, 'https://www.youtube.com/watch?v=B6jQRN6jbFY', 16, '2016-12-17 23:33:07', '2016-12-17 23:33:07'),
(77, 'https://www.youtube.com/watch?v=B6jQRN6jbFY', 16, '2016-12-17 23:33:07', '2016-12-17 23:33:07'),
(78, 'https://www.youtube.com/watch?v=B6jQRN6jbFY', 16, '2016-12-17 23:33:07', '2016-12-17 23:33:07'),
(79, 'https://www.youtube.com/watch?v=B6jQRN6jbFY', 16, '2016-12-17 23:33:07', '2016-12-17 23:33:07'),
(80, 'https://www.youtube.com/watch?v=B6jQRN6jbFY', 16, '2016-12-17 23:33:07', '2016-12-17 23:33:07'),
(81, 'https://www.youtube.com/watch?v=5T_YIPDfXcI', 17, '2016-12-17 23:33:36', '2016-12-17 23:33:36'),
(82, 'https://www.youtube.com/watch?v=5T_YIPDfXcI', 17, '2016-12-17 23:33:36', '2016-12-17 23:33:36'),
(83, 'https://www.youtube.com/watch?v=5T_YIPDfXcI', 17, '2016-12-17 23:33:36', '2016-12-17 23:33:36'),
(84, 'https://www.youtube.com/watch?v=5T_YIPDfXcI', 17, '2016-12-17 23:33:36', '2016-12-17 23:33:36'),
(85, 'https://www.youtube.com/watch?v=5T_YIPDfXcI', 17, '2016-12-17 23:33:36', '2016-12-17 23:33:36'),
(86, 'https://www.youtube.com/watch?v=td6TFePnGv0', 18, '2016-12-17 23:33:49', '2016-12-17 23:33:49'),
(87, 'https://www.youtube.com/watch?v=td6TFePnGv0', 18, '2016-12-17 23:33:50', '2016-12-17 23:33:50'),
(88, 'https://www.youtube.com/watch?v=td6TFePnGv0', 18, '2016-12-17 23:33:50', '2016-12-17 23:33:50'),
(89, 'https://www.youtube.com/watch?v=td6TFePnGv0', 18, '2016-12-17 23:33:50', '2016-12-17 23:33:50'),
(90, 'https://www.youtube.com/watch?v=td6TFePnGv0', 18, '2016-12-17 23:33:50', '2016-12-17 23:33:50'),
(91, 'https://www.youtube.com/watch?v=Z2omMAFJGIQ', 19, '2016-12-17 23:34:17', '2016-12-17 23:34:17'),
(92, 'https://www.youtube.com/watch?v=Z2omMAFJGIQ', 19, '2016-12-17 23:34:17', '2016-12-17 23:34:17'),
(93, 'https://www.youtube.com/watch?v=Z2omMAFJGIQ', 19, '2016-12-17 23:34:18', '2016-12-17 23:34:18'),
(94, 'https://www.youtube.com/watch?v=Z2omMAFJGIQ', 19, '2016-12-17 23:34:18', '2016-12-17 23:34:18'),
(95, 'https://www.youtube.com/watch?v=Z2omMAFJGIQ', 19, '2016-12-17 23:34:18', '2016-12-17 23:34:18'),
(96, 'https://www.youtube.com/watch?v=Vcr-l3s8yA8', 20, '2016-12-17 23:34:37', '2016-12-17 23:34:37'),
(97, 'https://www.youtube.com/watch?v=Vcr-l3s8yA8', 20, '2016-12-17 23:34:37', '2016-12-17 23:34:37'),
(98, 'https://www.youtube.com/watch?v=Vcr-l3s8yA8', 20, '2016-12-17 23:34:37', '2016-12-17 23:34:37'),
(99, 'https://www.youtube.com/watch?v=Vcr-l3s8yA8', 20, '2016-12-17 23:34:37', '2016-12-17 23:34:37'),
(100, 'https://www.youtube.com/watch?v=Vcr-l3s8yA8', 20, '2016-12-17 23:34:37', '2016-12-17 23:34:37'),
(101, 'https://www.youtube.com/watch?v=bSX-gqlr3OE', 21, '2016-12-17 23:35:07', '2016-12-17 23:35:07'),
(102, 'https://www.youtube.com/watch?v=bSX-gqlr3OE', 21, '2016-12-17 23:35:07', '2016-12-17 23:35:07'),
(103, 'https://www.youtube.com/watch?v=bSX-gqlr3OE', 21, '2016-12-17 23:35:07', '2016-12-17 23:35:07'),
(104, 'https://www.youtube.com/watch?v=bSX-gqlr3OE', 21, '2016-12-17 23:35:07', '2016-12-17 23:35:07'),
(105, 'https://www.youtube.com/watch?v=bSX-gqlr3OE', 21, '2016-12-17 23:35:07', '2016-12-17 23:35:07'),
(106, 'https://www.youtube.com/watch?v=qOEP_Yx0KWc', 22, '2016-12-17 23:35:20', '2016-12-17 23:35:20'),
(107, 'https://www.youtube.com/watch?v=qOEP_Yx0KWc', 22, '2016-12-17 23:35:20', '2016-12-17 23:35:20'),
(108, 'https://www.youtube.com/watch?v=qOEP_Yx0KWc', 22, '2016-12-17 23:35:20', '2016-12-17 23:35:20'),
(109, 'https://www.youtube.com/watch?v=qOEP_Yx0KWc', 22, '2016-12-17 23:35:20', '2016-12-17 23:35:20'),
(110, 'https://www.youtube.com/watch?v=qOEP_Yx0KWc', 22, '2016-12-17 23:35:20', '2016-12-17 23:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `fansubs`
--

CREATE TABLE `fansubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fansubs`
--

INSERT INTO `fansubs` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Okami', 'Okami', '2016-12-17 21:10:54', '2016-12-17 21:10:54'),
(2, 'Vn-Zoom Sub Team', 'Vn-Zoom-Sub-Team', '2016-12-17 21:11:02', '2016-12-17 21:11:02'),
(3, 'Fans of One Piece', 'Fans-Of-One-Piece', '2016-12-17 21:11:09', '2016-12-17 21:11:09'),
(4, 'One Piece FC', 'One-Piece-Fc', '2016-12-17 21:11:14', '2016-12-17 21:11:14'),
(5, 'Anisub', 'Anisub', '2016-12-17 22:03:21', '2016-12-17 22:03:21'),
(6, 'TamNhinSo', 'Tamnhinso', '2016-12-17 22:03:28', '2016-12-17 22:03:28'),
(7, 'Crazy-Sub', 'Crazy-Sub', '2016-12-17 22:03:34', '2016-12-17 22:03:34'),
(8, 'Naruto Free Fansub', 'Naruto-Free-Fansub', '2016-12-17 22:03:40', '2016-12-17 22:03:40'),
(9, 'Clip-Sub', 'Clip-Sub', '2016-12-17 22:03:45', '2016-12-17 22:03:45'),
(10, 'Waya', 'Waya', '2016-12-17 22:14:11', '2016-12-17 22:14:11'),
(11, 'Undefined', 'Undefined', '2016-12-17 22:14:16', '2016-12-17 22:14:16'),
(12, 'Devil Slayer Team', 'Devil-Slayer-Team', '2016-12-17 22:33:25', '2016-12-17 22:33:25'),
(13, 'OtakuMANO', 'Otakumano', '2016-12-17 22:37:20', '2016-12-17 22:37:20'),
(14, 'Sida Team', 'Sida-Team', '2016-12-17 22:37:31', '2016-12-17 22:37:31'),
(15, 'Songoku', 'Songoku', '2016-12-17 22:37:37', '2016-12-17 22:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `fansub_movies`
--

CREATE TABLE `fansub_movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `fansub_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fansub_movies`
--

INSERT INTO `fansub_movies` (`id`, `movie_id`, `fansub_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(2, 1, 2, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(3, 1, 3, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(4, 1, 4, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(5, 2, 5, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(6, 2, 6, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(7, 2, 7, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(8, 2, 8, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(9, 2, 9, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(10, 3, 10, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(11, 4, 1, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(12, 5, 12, '2016-12-17 22:35:17', '2016-12-17 22:35:17'),
(13, 6, 13, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(14, 6, 14, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(15, 6, 15, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(16, 7, 6, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(17, 8, 11, '2016-12-17 22:50:01', '2016-12-17 22:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'Action', '2016-12-17 21:06:12', '2016-12-17 21:06:12'),
(2, 'Advanture', 'Advanture', '2016-12-17 21:06:17', '2016-12-17 21:06:17'),
(3, 'Comedy', 'Comedy', '2016-12-17 21:06:26', '2016-12-17 21:06:26'),
(4, 'Drama', 'Drama', '2016-12-17 21:06:31', '2016-12-17 21:06:31'),
(5, 'Fantasy', 'Fantasy', '2016-12-17 21:06:38', '2016-12-17 21:06:38'),
(6, 'Shoumen', 'Shoumen', '2016-12-17 21:06:44', '2016-12-17 21:06:44'),
(7, 'Magic', 'Magic', '2016-12-17 21:59:37', '2016-12-17 21:59:37'),
(8, 'Ninja', 'Ninja', '2016-12-17 21:59:47', '2016-12-17 21:59:47'),
(9, 'Martial Arts', 'Martial-Arts', '2016-12-17 22:01:32', '2016-12-17 22:01:32'),
(10, 'Supernatural', 'Supernatural', '2016-12-17 22:31:20', '2016-12-17 22:31:20'),
(11, 'Super Capacity', 'Super-Capacity', '2016-12-17 22:31:30', '2016-12-17 22:31:30'),
(12, 'Seinen', 'Seinen', '2016-12-17 22:33:35', '2016-12-17 22:33:35'),
(13, 'Parody', 'Parody', '2016-12-17 22:33:45', '2016-12-17 22:33:45'),
(15, 'Fiction', 'Fiction', '2016-12-17 22:33:59', '2016-12-17 22:33:59'),
(16, 'History', 'History', '2016-12-17 22:47:18', '2016-12-17 22:47:18'),
(17, 'Samurai', 'Samurai', '2016-12-17 22:47:30', '2016-12-17 22:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `genre_movies`
--

CREATE TABLE `genre_movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre_movies`
--

INSERT INTO `genre_movies` (`id`, `movie_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(2, 1, 2, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(3, 1, 3, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(4, 1, 4, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(5, 1, 5, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(6, 1, 6, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(7, 2, 1, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(8, 2, 2, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(9, 2, 3, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(10, 2, 4, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(11, 2, 5, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(12, 2, 6, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(13, 2, 7, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(14, 2, 8, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(15, 2, 9, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(16, 3, 1, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(17, 3, 2, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(18, 3, 3, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(19, 3, 5, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(20, 3, 6, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(21, 3, 7, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(22, 4, 1, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(23, 4, 3, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(24, 4, 5, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(25, 4, 7, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(26, 5, 1, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(27, 5, 3, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(28, 5, 5, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(29, 5, 10, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(30, 5, 11, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(31, 5, 12, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(32, 5, 13, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(33, 5, 15, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(34, 6, 1, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(35, 6, 2, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(36, 6, 3, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(37, 6, 5, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(38, 6, 9, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(39, 6, 11, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(40, 7, 1, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(41, 7, 4, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(42, 7, 5, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(43, 7, 11, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(44, 8, 1, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(45, 8, 3, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(46, 8, 5, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(47, 8, 6, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(48, 8, 13, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(49, 8, 15, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(50, 8, 16, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(51, 8, 17, '2016-12-17 22:50:01', '2016-12-17 22:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'watch anime online', 'Watch-Anime-Online', '2016-12-17 21:07:01', '2016-12-17 21:07:01'),
(2, 'watch one piece online', 'Watch-One-Piece-Online', '2016-12-17 21:07:12', '2016-12-17 21:07:12'),
(3, 'new anime', 'New-Anime', '2016-12-17 21:07:20', '2016-12-17 21:07:20'),
(4, 'watch naruto online', 'Watch-Naruto-Online', '2016-12-17 22:01:48', '2016-12-17 22:01:48'),
(5, 'naruto shippuuden', 'Naruto-Shippuuden', '2016-12-17 22:01:58', '2016-12-17 22:01:58'),
(6, 'watch fairy tail online', 'Watch-Fairy-Tail-Online', '2016-12-17 22:13:10', '2016-12-17 22:13:10'),
(7, 'fairy tail new episode', 'Fairy-Tail-New-Episode', '2016-12-17 22:13:22', '2016-12-17 22:13:22'),
(8, 'watch bleach online', 'Watch-Bleach-Online', '2016-12-17 22:20:41', '2016-12-17 22:20:41'),
(9, 'watch one punch man online', 'Watch-One-Punch-Man-Online', '2016-12-17 22:32:51', '2016-12-17 22:32:51'),
(10, 'watch dragon ball chou', 'Watch-Dragon-Ball-Chou', '2016-12-17 22:36:25', '2016-12-17 22:36:25'),
(11, 'watch dragon ball super online', 'Watch-Dragon-Ball-Super-Online', '2016-12-17 22:36:35', '2016-12-17 22:36:35'),
(12, 'watch aott online', 'Watch-Aott-Online', '2016-12-17 22:41:35', '2016-12-17 22:41:35'),
(13, 'attack on the titan online', 'Attack-On-The-Titan-Online', '2016-12-17 22:41:45', '2016-12-17 22:41:45'),
(14, 'watch Shingeki no Kyojin online', 'Watch-Shingeki-No-Kyojin-Online', '2016-12-17 22:42:06', '2016-12-17 22:42:06'),
(15, 'watch gintama online', 'Watch-Gintama-Online', '2016-12-17 22:47:47', '2016-12-17 22:47:47'),
(16, 'new episode gintama', 'New-Episode-Gintama', '2016-12-17 22:47:58', '2016-12-17 22:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_page`
--

CREATE TABLE `kryptonit3_counter_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_page`
--

INSERT INTO `kryptonit3_counter_page` (`id`, `page`) VALUES
(1, '032a71c8-b350-53f6-9d87-bf8ebe6c3d67'),
(3, '168ec8b1-3868-5985-889a-3ce083f9a185'),
(5, '1af1a769-f765-5927-bea9-2126c7ea4a38'),
(9, '235f7050-129d-5cc9-a41e-ceedc5693f20'),
(8, '54fd4a24-a451-5ed8-89ee-3e854dae1cf4'),
(2, '88ed4702-5369-52eb-bdfc-9b3140a096f8'),
(4, '9f5bf574-0b29-5a67-b4f1-9ce86e29ad6e'),
(7, 'a57d26c0-c0f9-571a-9ef4-4fdee2a5d929'),
(6, 'd3a9c355-6b95-5b20-9026-652306211cb0');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_page_visitor`
--

CREATE TABLE `kryptonit3_counter_page_visitor` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_page_visitor`
--

INSERT INTO `kryptonit3_counter_page_visitor` (`page_id`, `visitor_id`, `created_at`) VALUES
(1, 1, '2016-12-19 04:55:50'),
(1, 2, '2016-12-20 01:08:14'),
(2, 2, '2016-12-19 04:56:42'),
(3, 2, '2016-12-19 04:56:53'),
(4, 2, '2016-12-20 01:09:24'),
(5, 2, '2016-12-19 05:00:07'),
(6, 2, '2016-12-19 05:00:07'),
(7, 2, '2016-12-19 05:00:52'),
(8, 2, '2016-12-19 05:01:34'),
(9, 2, '2016-12-19 05:02:48'),
(4, 3, '2016-12-19 05:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_visitor`
--

CREATE TABLE `kryptonit3_counter_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_visitor`
--

INSERT INTO `kryptonit3_counter_visitor` (`id`, `visitor`) VALUES
(3, '41a893dc49f3107ede61c7f513b6dce59487455a2235f770259ef072cd586df5'),
(1, '62d3597f088c49a60c4ecd59c882cb337fe6f21a49d6e273bbd9455604eaee64'),
(2, 'b9d5ae03884b571e913e8e468a7ddb1ee05ea2bb14be1b54b141678c59bcca7e');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2016_11_18_170055_create_seasons_table', 1),
(20, '2016_11_18_170316_create_years_table', 1),
(21, '2016_11_18_171223_create_genres_table', 1),
(22, '2016_11_19_093311_create_producers_table', 1),
(23, '2016_11_19_093312_create_movies_table', 1),
(24, '2016_11_19_093712_create_genre_movie_table', 1),
(25, '2016_11_19_100221_create_fansubs_table', 1),
(26, '2016_11_19_100332_create_fansub_movie_table', 1),
(27, '2016_11_19_102123_create_episodes_table', 1),
(28, '2016_11_19_102934_create_episode_links_table', 1),
(29, '2016_11_19_104533_create_keywords_table', 1),
(30, '2016_11_19_104800_create_movie_keyword_table', 1),
(31, '2016_11_22_070555_create_episode_keyword_table', 1),
(32, '2016_11_24_104211_create_producer_movie_table', 1),
(36, '2016_12_18_071409_add_views_episodes_table', 2),
(37, '2016_12_18_072538_add_likes_episodes_table', 3),
(38, '2015_06_21_181359_create_kryptonit3_counter_page_table', 4),
(39, '2015_06_21_193003_create_kryptonit3_counter_visitor_table', 4),
(40, '2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(10) UNSIGNED NOT NULL,
  `likes` int(10) UNSIGNED NOT NULL,
  `current_episodes` int(11) NOT NULL,
  `total_episodes` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `season_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `alias`, `status`, `thumb`, `views`, `likes`, `current_episodes`, `total_episodes`, `description`, `year_id`, `season_id`, `created_at`, `updated_at`) VALUES
(1, 'One Piece', 'One-Piece', 'continue', '1.jpg', 0, 0, 3, 0, 'One Piece xoay quanh 1 nhóm cướp biển được gọi là Băng Hải tặc Mũ Rơm - Straw Hat Pirates - được thành lập và lãnh đạo bởi thuyền trưởng Monkey D. Luffy. Cậu bé Luffy có ước mơ tìm thấy kho báu vĩ đại nhất, One Piece, của Vua Hải Tặc đời trước Gold D. Roger và trở thành Vua Hải Tặc đời kế tiếp.', 1, 1, '2016-12-17 21:12:18', '2016-12-17 21:56:21'),
(2, 'Naruto Shippuuden', 'Naruto-Shippuuden', 'continue', '2.jpg', 0, 0, 2, 0, '12 năm trước, hồ ly 9 đuôi tấn công làng ninja Mộc Diệp, Hokage Đệ Tứ đã đánh bại và phong ấn vào cậu bé Naruto.Từ đó, Naruto bị mọi người xa lánh, vậy nên cậu tìm ra cách được thừa nhận và chú ý duy nhất – qua các trò phá phách và nghịch ngợm.Câu chuyện chính bám theo sự trưởng thành và tiến bộ của Naruto và bạn cậu khi làm ninja, và nhấn mạnh mối quan hệ giữa họ và sự ảnh hưởng của quá khứ đến tính cách họ. Naruto tìm được hai người bạn đồng hành cùng là Uchiha Sasuke và Haruno Sakura, cuộc phiêu lưu bắt đầu.', 1, 1, '2016-12-17 22:07:01', '2016-12-17 23:35:20'),
(3, 'Fairy Tail', 'Fairy-Tail', 'stoped', '3.jpg', 0, 0, 2, 175, 'Câu chuyện về một cô thiếu nữ tên Lucy Heartfilia, khao khát của cô là gia nhập Hội Pháp sư nổi tiếng Fairy Tail. Trên đường phiêu lưu, Lucy đã vô tình gặp gỡ Natsu "Salamander" Dragneel, một thành viên của Fairy Tail, người sở hữu pháp thuật cổ đại Sát Long. Thế rồi Lucy được Natsu giới thiệu vào Hội Pháp sư Fairy Tail và cùng anh chàng này tham gia vô số nhiệm vụ khó khăn nhưng cũng không kém phần thú vị.', 2, 2, '2016-12-17 22:15:31', '2016-12-17 23:34:37'),
(4, 'Bleach', 'Bleach', 'continue', '4.jpg', 0, 0, 2, 366, 'Ichigo Kurosaki là một thiếu niên hung hăng, hay gây rắc rối và cậu có được một năng lực đặc bệt là có thể nhìn thấy linh hồn. Câu chuyện bắt đầu với sự xuất hiện bất ngờ của một người lạ ngay trong phòng ngủ của Ichigo. Người lạ mặt này chính là Shinigami (thần chết) Rukia Kuchiki, vô cùng ngạc nhiên trước việc Ichigo có thể nhìn thấy cô. Cuộc hội thoại của họ bị cắt ngang bằng việc một ác ma tấn công vào nhà của Ichigo. Sau khi bị thương tích đầy mình vì phải ra tay bảo vệ Ichigo, cô quyết định truyền một nửa năng lực thần chết của mình cho Ichigo để Ichigo tiêu diệt ác ma đó nhưng Ichigo lại vô tình lấy hết năng lượng của cô, giúp cậu tiêu diệt ác ma đó một cách dễ dàng. Ngày hôm sau, Rukia xuất hiện trong lớp học của Ichigo với tư cách là học sinh mới chuyển đến. Càng ngạc nhiên hơn nữa khi cậu biết rằng Rukia bây giờ là một người bình thường. Cô đặt giả thiết rằng chính năng lực kỳ lạ của Ichigo đã hút hết năng lực của cô, khiến cô bị mắc kẹt lại nhân gian, không trở lại Cõi Âm được nữa. Rukia đã chuyển linh hồn cô vào trong một gigai - một cơ thể nhân tạo - trong khi phục hồi lại năng lượng của mình. Trong thời gian này, cô phải chuyển giao công việc của mình cho Ichigo, tiệu diệt ác ma và đưa những linh hồn lạc lối đến Cõi Âm.', 1, 1, '2016-12-17 22:22:03', '2016-12-17 23:33:50'),
(5, 'One Punch Man', 'One-Punch-Man', 'completed', '5.jpg', 0, 0, 2, 12, 'Câu chuyện diễn ra tại thành phố Z của Nhật Bản tại thời điểm thế giới đầy những quái vật bí ẩn với sức mạnh ghê ghớm đã xuất hiện và gây ra biết bao nhiêu thảm họa. Nhưng cũng chính tại đây xuất hiện 1 siêu anh hùng đấm phát chết luôn, có thể dễ dàng đánh bại và tiêu diệt những con quái vật này. Cũng chính vì tài năng hiếm có này mà có rất nhiều nghi ngại về khả năng thực sự của vị siêu anh hùng, thậm chí anh không bao giờ nhận được bất kỳ lòng tin nào từ dân chúng. Câu chuyện sẽ tiếp diễn như thế nào? Mời các bạn theo dõi anime One Punch Man để cùng tham gia vào những cuộc phưu lưu của Saitama, vị anh hùng với sức mạnh không tưởng nhé. Tập 1 và 2 sẽ được giới thiệu tại một buổi chiếu tại Trung tâm Văn hóa thành phố Saitama (Small Hall) vào ngày 06 tháng 9, 2015. phát sóng đầy đủ chính thức sẽ bắt đầu vào ngày 05 tháng 10 2015.', 6, 6, '2016-12-17 22:35:16', '2016-12-17 23:33:07'),
(6, 'Dragon Ball Super', 'Dragon-Ball-Super', 'continue', '6.jpg', 0, 0, 2, 0, 'Dragon Ball Serie mới có tên là Super hoặc Chou dài tập chiếu trên truyền hình, bối cảnh nối tiếp sau cuộc chiến với Ma nhân Buu !!!', 6, 7, '2016-12-17 22:39:46', '2016-12-17 23:31:54'),
(7, 'Attack on Titan', 'Attack-On-Titan', 'completed', '12.jpg', 0, 0, 1, 1, 'Movie Recap từ tập 1-13.', 7, 8, '2016-12-17 22:44:25', '2016-12-17 23:28:06'),
(8, 'Gintama', 'Gintama', 'continue', '28.jpg', 0, 0, 2, 265, 'Đất nước của những Samurai. Có một thời đất nước chúng tôi được gọi như vậy. 20 năm trước… Những kẻ ngoài hành tinh tự xưng là Amanto đột ngột đổ bộ xuống và thiết lập lệnh cấm mang kiếm. Samurai giờ đây bị khinh rẻ, coi thường. Trong thời đại như thế, vẫn còn một người đầy tinh thần samurai. Tên anh ta là Sakata Gintoki. Và tôi, Shimura Shinpachi, cùng Kagura-chan vì một số việc đưa đẩy mà bắt đầu làm việc cho cái tên vô trách nhiệm, hảo ngọt đó tại Vạn Sự Ốc. 3 người Vạn Sự Ốc chúng tôi sẽ cùng nhau dọn sạch Edo hủ bại này. Ừm, anime này là vậy thì phải?', 8, 9, '2016-12-17 22:50:01', '2016-12-17 23:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `movie_keywords`
--

CREATE TABLE `movie_keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `keyword_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_keywords`
--

INSERT INTO `movie_keywords` (`id`, `movie_id`, `keyword_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(2, 1, 2, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(3, 1, 3, '2016-12-17 21:12:19', '2016-12-17 21:12:19'),
(4, 2, 3, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(5, 2, 4, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(6, 2, 5, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(7, 3, 1, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(8, 3, 3, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(9, 3, 6, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(10, 3, 7, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(11, 4, 1, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(12, 4, 3, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(13, 4, 8, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(14, 5, 1, '2016-12-17 22:35:17', '2016-12-17 22:35:17'),
(15, 5, 3, '2016-12-17 22:35:17', '2016-12-17 22:35:17'),
(16, 5, 9, '2016-12-17 22:35:17', '2016-12-17 22:35:17'),
(17, 6, 1, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(18, 6, 3, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(19, 6, 10, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(20, 6, 11, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(21, 7, 1, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(22, 7, 3, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(23, 7, 12, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(24, 7, 13, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(25, 7, 14, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(26, 8, 1, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(27, 8, 3, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(28, 8, 15, '2016-12-17 22:50:01', '2016-12-17 22:50:01'),
(29, 8, 16, '2016-12-17 22:50:01', '2016-12-17 22:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'FUNimation Entertainment', 'Funimation-Entertainment', '2016-12-17 21:10:07', '2016-12-17 21:10:07'),
(2, 'Toei Animation', 'Toei-Animation', '2016-12-17 21:10:20', '2016-12-17 21:10:20'),
(3, 'Fuji TV', 'Fuji-Tv', '2016-12-17 21:10:28', '2016-12-17 21:10:28'),
(4, 'TAP', 'Tap', '2016-12-17 21:10:35', '2016-12-17 21:10:35'),
(5, '4Kids Entertainment', '4Kids-Entertainment', '2016-12-17 21:10:41', '2016-12-17 21:10:41'),
(6, 'KSS', 'Kss', '2016-12-17 22:02:20', '2016-12-17 22:02:20'),
(7, 'Rakuonsha', 'Rakuonsha', '2016-12-17 22:02:32', '2016-12-17 22:02:32'),
(8, 'TV Tokyo Music', 'Tv-Tokyo-Music', '2016-12-17 22:02:40', '2016-12-17 22:02:40'),
(9, 'TV Tokyo', 'Tv-Tokyo', '2016-12-17 22:02:48', '2016-12-17 22:02:48'),
(10, 'Studio Pierrot', 'Studio-Pierrot', '2016-12-17 22:02:54', '2016-12-17 22:02:54'),
(11, 'Viz Media', 'Viz-Media', '2016-12-17 22:02:59', '2016-12-17 22:02:59'),
(12, 'Undefined', 'Undefined', '2016-12-17 22:13:34', '2016-12-17 22:13:34'),
(13, 'Madhouse', 'Madhouse', '2016-12-17 22:33:10', '2016-12-17 22:33:10'),
(14, 'Yomiko Advertising', 'Yomiko-Advertising', '2016-12-17 22:38:02', '2016-12-17 22:38:02'),
(15, 'Wit Studio', 'Wit-Studio', '2016-12-17 22:42:38', '2016-12-17 22:42:38'),
(16, 'Production I.G', 'Production-I.g', '2016-12-17 22:42:45', '2016-12-17 22:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `producer_movies`
--

CREATE TABLE `producer_movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `producer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `producer_movies`
--

INSERT INTO `producer_movies` (`id`, `movie_id`, `producer_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2016-12-17 21:12:18', '2016-12-17 21:12:18'),
(2, 1, 2, '2016-12-17 21:12:18', '2016-12-17 21:12:18'),
(3, 1, 3, '2016-12-17 21:12:18', '2016-12-17 21:12:18'),
(4, 1, 4, '2016-12-17 21:12:18', '2016-12-17 21:12:18'),
(5, 1, 5, '2016-12-17 21:12:18', '2016-12-17 21:12:18'),
(6, 2, 6, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(7, 2, 7, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(8, 2, 8, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(9, 2, 9, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(10, 2, 10, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(11, 2, 11, '2016-12-17 22:07:02', '2016-12-17 22:07:02'),
(12, 3, 12, '2016-12-17 22:15:31', '2016-12-17 22:15:31'),
(13, 4, 12, '2016-12-17 22:22:04', '2016-12-17 22:22:04'),
(14, 5, 11, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(15, 5, 13, '2016-12-17 22:35:16', '2016-12-17 22:35:16'),
(16, 6, 2, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(17, 6, 3, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(18, 6, 14, '2016-12-17 22:39:46', '2016-12-17 22:39:46'),
(19, 7, 15, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(20, 7, 16, '2016-12-17 22:44:25', '2016-12-17 22:44:25'),
(21, 8, 12, '2016-12-17 22:50:01', '2016-12-17 22:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Summer 1999', 'Summer-1999', '2016-12-17 21:06:02', '2016-12-17 21:06:02'),
(2, 'Spring 2007', 'Spring-2007', '2016-12-17 21:59:19', '2016-12-17 21:59:19'),
(3, 'Summer 2009', 'Summer-2009', '2016-12-17 22:12:46', '2016-12-17 22:12:46'),
(4, 'Undefined', 'Undefined', '2016-12-17 22:13:48', '2016-12-17 22:13:48'),
(5, 'Summer 2004', 'Summer-2004', '2016-12-17 22:20:28', '2016-12-17 22:20:28'),
(6, 'Summer 2015', 'Summer-2015', '2016-12-17 22:32:32', '2016-12-17 22:32:32'),
(7, 'Spring 2015', 'Spring-2015', '2016-12-17 22:36:08', '2016-12-17 22:36:08'),
(8, 'Summer 2014', 'Summer-2014', '2016-12-17 22:41:17', '2016-12-17 22:41:17'),
(9, 'Spring 2006', 'Spring-2006', '2016-12-17 22:47:06', '2016-12-17 22:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@webmovie.dev', 'admin', '$2y$10$qQO9kSFcUQfpcu8/oIL58uZYpMGF2Z86zsUeQ2kAAc/r8E1p/Dbxq', 'XzVHLbmEqK73goXbA50XE3TXsv2KYuqO5NG97wbMf21cvhQEMZlCQjTqStIF', '2016-12-17 20:59:10', '2016-12-20 02:21:16'),
(3, 'linh111', 'linh111@gmail.com', 'member', '$2y$10$p.AaA8ileIk665L.8hBD/.tD67tzxtZXVNpvMTkA7gD04oxAwBBUS', 'd2n8O4crTyQC7STOBGnpyZumICkUBl6XxP5QJ9ddJJlsBz8DL4FlykDoCklJ', '2016-12-19 21:47:55', '2016-12-20 02:15:36'),
(8, 'linhxyz', 'linhxyz@gmail.com', 'member', '$2y$10$tGR46/zW/9EbTsh.5LLNT.2zgc0BIpmQ4PcqKdNcy44Z5IrzpqTVO', 'TNe0j0juM7rWMwFNr1NOluvps38syqr5gXTDL6Bl', '2016-12-20 02:03:49', '2016-12-20 02:03:49'),
(9, 'lin', 'lin@gmail.com', 'admin', '$2y$10$Y5CdC07H/1kzJq7Rh9sgaOgxyWfvT9nPEgMWeG.jl5i4WjWaQ.fyq', '8IoOhBUi4iM9KbR4IpdupOu65XaRLACNd2uZd8IeRNeP593eXPdSGBJoeLuy', '2016-12-20 02:18:02', '2016-12-20 02:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, '1999', '1999', '2016-12-17 21:05:41', '2016-12-17 21:05:41'),
(2, '2007', '2007', '2016-12-17 21:59:07', '2016-12-17 21:59:07'),
(3, '2009', '2009', '2016-12-17 22:12:34', '2016-12-17 22:12:34'),
(4, '0', '0', '2016-12-17 22:14:01', '2016-12-17 22:14:01'),
(5, '2004', '2004', '2016-12-17 22:20:14', '2016-12-17 22:20:14'),
(6, '2015', '2015', '2016-12-17 22:31:53', '2016-12-17 22:31:53'),
(7, '2014', '2014', '2016-12-17 22:41:09', '2016-12-17 22:41:09'),
(8, '2006', '2006', '2016-12-17 22:46:58', '2016-12-17 22:46:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `episode_keywords`
--
ALTER TABLE `episode_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episode_keywords_episode_id_foreign` (`episode_id`),
  ADD KEY `episode_keywords_keyword_id_foreign` (`keyword_id`);

--
-- Indexes for table `episode_links`
--
ALTER TABLE `episode_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episode_links_episode_id_foreign` (`episode_id`);

--
-- Indexes for table `fansubs`
--
ALTER TABLE `fansubs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fansubs_name_unique` (`name`);

--
-- Indexes for table `fansub_movies`
--
ALTER TABLE `fansub_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fansub_movies_movie_id_foreign` (`movie_id`),
  ADD KEY `fansub_movies_fansub_id_foreign` (`fansub_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_name_unique` (`name`);

--
-- Indexes for table `genre_movies`
--
ALTER TABLE `genre_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_movies_movie_id_foreign` (`movie_id`),
  ADD KEY `genre_movies_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`);

--
-- Indexes for table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
  ADD KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`);

--
-- Indexes for table `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_name_unique` (`name`),
  ADD KEY `movies_year_id_foreign` (`year_id`),
  ADD KEY `movies_season_id_foreign` (`season_id`);

--
-- Indexes for table `movie_keywords`
--
ALTER TABLE `movie_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_keywords_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_keywords_keyword_id_foreign` (`keyword_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `producers_name_unique` (`name`);

--
-- Indexes for table `producer_movies`
--
ALTER TABLE `producer_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer_movies_movie_id_foreign` (`movie_id`),
  ADD KEY `producer_movies_producer_id_foreign` (`producer_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seasons_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `episode_keywords`
--
ALTER TABLE `episode_keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `episode_links`
--
ALTER TABLE `episode_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `fansubs`
--
ALTER TABLE `fansubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `fansub_movies`
--
ALTER TABLE `fansub_movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `genre_movies`
--
ALTER TABLE `genre_movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kryptonit3_counter_page`
--
ALTER TABLE `kryptonit3_counter_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kryptonit3_counter_visitor`
--
ALTER TABLE `kryptonit3_counter_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `movie_keywords`
--
ALTER TABLE `movie_keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `producer_movies`
--
ALTER TABLE `producer_movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `episode_keywords`
--
ALTER TABLE `episode_keywords`
  ADD CONSTRAINT `episode_keywords_episode_id_foreign` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `episode_keywords_keyword_id_foreign` FOREIGN KEY (`keyword_id`) REFERENCES `keywords` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `episode_links`
--
ALTER TABLE `episode_links`
  ADD CONSTRAINT `episode_links_episode_id_foreign` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fansub_movies`
--
ALTER TABLE `fansub_movies`
  ADD CONSTRAINT `fansub_movies_fansub_id_foreign` FOREIGN KEY (`fansub_id`) REFERENCES `fansubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fansub_movies_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `genre_movies`
--
ALTER TABLE `genre_movies`
  ADD CONSTRAINT `genre_movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `genre_movies_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `kryptonit3_counter_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `kryptonit3_counter_visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movies_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `movie_keywords`
--
ALTER TABLE `movie_keywords`
  ADD CONSTRAINT `movie_keywords_keyword_id_foreign` FOREIGN KEY (`keyword_id`) REFERENCES `keywords` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movie_keywords_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `producer_movies`
--
ALTER TABLE `producer_movies`
  ADD CONSTRAINT `producer_movies_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `producer_movies_producer_id_foreign` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
