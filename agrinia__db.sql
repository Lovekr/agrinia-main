-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2022 at 04:48 PM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrinia__db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_street_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_appartment` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_notes` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'billing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`id`, `order_id`, `user_id`, `first_name`, `last_name`, `company_name`, `country`, `city`, `zip_code`, `mobile`, `email`, `address_street_name`, `address_appartment`, `special_notes`, `type`, `created_at`, `updated_at`) VALUES
(1, 5, 7, 'vikas', 'kushwaha', 'mobio', 'BS', 'asd', '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'test', NULL, 'billing', '2022-09-16 13:26:48', '2022-10-15 10:54:52'),
(2, 6, 5, 'res', 'sdf', 'sdf', 'TH', 'KS', '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'sdf', 'sdf', 'esserser', 'billing', '2022-09-17 04:28:44', '2022-09-17 04:28:44'),
(3, 7, 5, 'asd', 'asd', 'asdasd', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', 'asdasd', 'billing', '2022-09-18 12:38:09', '2022-09-18 12:38:09'),
(4, 8, 5, 'asd', 'asd', 'asd', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', NULL, 'asdasd', 'billing', '2022-09-21 12:48:16', '2022-09-21 12:48:16'),
(5, 9, 5, 'asd', 'asd', 'asd', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', NULL, 'asdasd', 'billing', '2022-09-21 12:58:46', '2022-09-21 12:58:46'),
(6, 10, 5, 'testet', 'setest', 'estset', 'US', NULL, '362265', '5654565678', NULL, '345, test', 'asd', 'testset', 'billing', '2022-09-22 13:51:09', '2022-09-22 13:51:09'),
(7, 11, 5, 'testet', 'setest', 'estset', 'US', NULL, '362265', '5654565678', NULL, '345, test', 'asd', 'testset', 'billing', '2022-09-22 13:51:42', '2022-09-22 13:51:42'),
(8, 12, 5, 'testet', 'setest', 'estset', 'US', NULL, '362265', '5654565678', NULL, '345, test', 'asd', 'testset', 'billing', '2022-09-22 13:52:24', '2022-09-22 13:52:24'),
(9, 13, 5, 'testet', 'setest', 'estset', 'US', NULL, '362265', '5654565678', NULL, '345, test', 'asd', 'testset', 'billing', '2022-09-22 13:54:31', '2022-09-22 13:54:31'),
(10, 14, 5, 'testet', 'setest', 'estset', 'US', NULL, '362265', '5654565678', NULL, '345, test', 'asd', 'testset', 'billing', '2022-09-22 13:55:04', '2022-09-22 13:55:04'),
(11, 15, 5, 'asd', 'asd', 'vikas llp', 'US', NULL, '362265', '5654565678', 'vikaskushwaha028@gmail.com', '345, test', 'test', 'test', 'billing', '2022-09-23 13:04:40', '2022-09-23 13:04:40'),
(12, 16, 5, 'asd', 'asd', 'vikas llp', 'US', NULL, '362265', '5654565678', 'vikaskushwaha028@gmail.com', '345, test', 'test', 'test', 'billing', '2022-09-23 13:28:33', '2022-09-23 13:28:33'),
(13, 17, 5, 'asd', 'asda', 'asdasd', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:30:09', '2022-09-23 13:30:09'),
(14, 18, 5, 'asd', 'asd', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:31:25', '2022-09-23 13:31:25'),
(15, 19, 5, 'asd', 'asd', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:33:13', '2022-09-23 13:33:13'),
(16, 20, 5, 'res', 'sers', 'se', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:34:47', '2022-09-23 13:34:47'),
(17, 21, 5, 'asd', 'asd', 'asd', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:35:52', '2022-09-23 13:35:52'),
(18, 22, 5, 'asd', 'asd', 'asd', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:36:24', '2022-09-23 13:36:24'),
(19, 23, 5, 'asd', 'asd', 'asd', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:36:45', '2022-09-23 13:36:45'),
(20, 24, 5, 'test', 'test', 'test', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:39:20', '2022-09-23 13:39:20'),
(21, 25, 5, 'sdf', 'sdf', 'sdf', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:47:09', '2022-09-23 13:47:09'),
(22, 26, 5, 'asd', 'asd', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:51:47', '2022-09-23 13:51:47'),
(23, 27, 5, 'asd', 'asd', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 13:53:57', '2022-09-23 13:53:57'),
(24, 28, 5, 'resr', 'sfs', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 23:38:07', '2022-09-23 23:38:07'),
(25, 29, 5, 'test', 'test', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 23:41:20', '2022-09-23 23:41:20'),
(26, 30, 5, 'test', 'est', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 23:53:10', '2022-09-23 23:53:10'),
(27, 31, 5, 'asd', 'asd', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-23 23:55:33', '2022-09-23 23:55:33'),
(28, 32, 5, 'tst', 'sdfs', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-24 00:01:17', '2022-09-24 00:01:17'),
(29, 33, 5, 'test', 'test', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'billing', '2022-09-24 00:43:38', '2022-09-24 00:43:38'),
(30, 34, 5, 'ramkilavan', 'kevat', 'tew', 'US', NULL, '362265', 'test', '3137', 'taet', NULL, 'test', 'billing', '2022-10-01 07:29:35', '2022-10-01 07:29:35'),
(31, NULL, 5, 'shppin', 'shipping', 'shppin', 'BS', 'asd', '362265', '5654565678', '3137', 'asd', 'asd', NULL, 'shipping', '2022-10-02 06:25:41', '2022-10-02 06:25:41'),
(32, 35, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-02 09:38:46', '2022-10-02 09:38:46'),
(33, 36, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-02 10:26:30', '2022-10-02 10:26:30'),
(34, 37, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-02 11:50:25', '2022-10-02 11:50:25'),
(35, 38, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-02 12:02:13', '2022-10-02 12:02:13'),
(36, 39, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-02 12:13:16', '2022-10-02 12:13:16'),
(37, 40, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 04:46:12', '2022-10-04 04:46:12'),
(38, 41, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 04:53:04', '2022-10-04 04:53:04'),
(39, 42, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 04:55:38', '2022-10-04 04:55:38'),
(40, 43, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 05:02:03', '2022-10-04 05:02:03'),
(41, 44, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 05:09:27', '2022-10-04 05:09:27'),
(42, 45, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 05:18:06', '2022-10-04 05:18:06'),
(43, 46, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 07:26:41', '2022-10-04 07:26:41'),
(44, 47, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 07:39:09', '2022-10-04 07:39:09'),
(45, 48, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 08:04:14', '2022-10-04 08:04:14'),
(46, 49, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 08:06:18', '2022-10-04 08:06:18'),
(47, 50, 5, 'sdf', 'sdf', 'sdfsdf', 'US', NULL, '362265', '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'asd', NULL, 'billing', '2022-10-04 08:10:06', '2022-10-04 08:10:06'),
(48, 51, 7, 'vikas', 'kushwaha', 'mobio', 'US', NULL, NULL, '5654565678', 'kushwahavikas1993@gmail.com', 'asd', 'test', NULL, 'billing', '2022-10-15 10:56:00', '2022-10-15 10:56:00'),
(49, 52, 2, 'vikas', 'kushwaha', 'test', 'US', NULL, '362265', '5654565678', '9538992908', 'test', 'test', 'est', 'billing', '2022-10-21 14:12:04', '2022-10-21 14:12:04'),
(50, 53, 2, 'vikas', 'kushwaha', 'test', 'US', NULL, NULL, '5654565678', '9538992908', 'test', 'test', NULL, 'billing', '2022-10-22 12:03:53', '2022-10-22 12:03:53'),
(51, 54, 1, 'vikas', 'kushwaha', 'vikas llp', 'IN', NULL, '577222', '5654565678', 'agrinia', 'Plot No. 65B, K.I.A.D.B.', 'Shivamogga-Bhadravathi', NULL, 'billing', '2022-11-10 16:22:24', '2022-11-10 16:22:24'),
(52, 55, 1, 'vikas', 'shivakumar', 'vikas llp', 'IN', NULL, '560040', '5654565678', 'shivuhm15@gmail.com', '1', 'Shivamogga-Bhadravathi', NULL, 'billing', '2022-11-14 15:19:29', '2022-11-14 15:19:29'),
(53, 56, 1, 'vikas', 'kushwaha', 'vikas llp', 'US', NULL, '362265', '5654565678', 'agrinia', 'Plot No. 65B, K.I.A.D.B.', 'Shivamogga-Bhadravathi', NULL, 'billing', '2022-11-14 19:02:15', '2022-11-14 19:02:15'),
(54, 57, 1, 'vikas', 'kushwaha', 'vikas llp', 'US', NULL, '362265', '5654565678', 'agrinia', 'Plot No. 65B, K.I.A.D.B.', 'Shivamogga-Bhadravathi', NULL, 'billing', '2022-11-15 15:44:26', '2022-11-15 15:44:26'),
(55, NULL, 1, 'vikas', 'shivakumar', 'vikas llp', 'IN', 'bengaluru', '560040', '9741949207', 'shivuhm15@gmail.com', 'banneragatta main roas near arekere gate', 'mn building', NULL, 'billing', '2022-11-16 11:24:27', '2022-11-16 11:24:27'),
(56, 58, 1, 'vikas', 'shivakumar', 'vikas llp', 'IN', NULL, '560040', '5654565678', 'shivuhm15@gmail.com', '1', 'Shivamogga-Bhadravathi', NULL, 'billing', '2022-11-16 11:26:03', '2022-11-16 11:26:03'),
(57, 59, 8, 'zscs', 'dfcsd', 'sdfdsf', 'IN', NULL, '560040', '9741949207', 'raghav@gmail', 'dsdf', 'dsdfsd', NULL, 'billing', '2022-11-19 13:30:37', '2022-11-19 13:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `quantity_type` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight_quantity` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `quantity_type`, `weight_quantity`, `created_at`, `updated_at`) VALUES
(33, 6, 8, 3, '', '', '2022-10-15 03:47:37', '2022-10-15 03:47:37'),
(32, 6, 5, 5, '', '', '2022-10-15 03:47:37', '2022-10-15 03:47:37'),
(31, 6, 2, 1, '', '', '2022-10-15 03:47:37', '2022-10-15 03:47:37'),
(52, 8, 21, 7, 'quantity', '0', '2022-11-19 13:31:38', '2022-11-24 06:54:08'),
(51, 8, 20, 3, 'quantity', '0', '2022-11-19 13:31:25', '2022-11-24 06:54:08'),
(49, 1, 20, 1, 'quantity', '0', '2022-11-16 12:36:58', '2022-11-16 12:36:58'),
(53, 8, 20, 3, 'quantity', '0', '2022-11-24 06:53:01', '2022-11-24 06:54:08'),
(54, 8, 20, 1, 'quantity', '0', '2022-11-24 11:33:02', '2022-11-24 11:33:02'),
(55, 8, 19, 1, 'quantity', '0', '2022-11-28 15:48:52', '2022-11-28 15:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'yshu', 'yesha@gmail.com', 'yeaayyy', 'yeshaaa', '2022-09-25 10:29:57', '2022-09-25 10:29:57'),
(2, 'yeshaa', 'yeshhh@gmail.com', 'yayyy', 'Yeshaa', '2022-09-25 10:30:51', '2022-09-25 10:30:51'),
(3, 'asd', 'asd@gmail.com', 'asdasd', 'test', '2022-09-25 10:31:49', '2022-09-25 10:31:49'),
(4, 'asd', 'assdd@gmail.com', 'asdasd', 'asd', '2022-09-25 10:32:29', '2022-09-25 10:32:29'),
(5, 'test', 'kushwahavikas1993@gmail.com', 'asdasd', 'test', '2022-09-25 10:33:43', '2022-09-25 10:33:43'),
(6, 'asd', 'kushwahavikas1993@gmail.com', 'asdas', 'asd', '2022-09-25 10:34:04', '2022-09-25 10:34:04'),
(7, 'das', 'sasdasd@gmail.com', 'testsetset', 'test', '2022-09-25 10:38:13', '2022-09-25 10:38:13'),
(8, 'asdasd', 'asd@gmail.com', 'asdasd', 'asd', '2022-09-25 10:39:30', '2022-09-25 10:39:30'),
(9, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:43:53', '2022-09-25 11:43:53'),
(10, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:43:56', '2022-09-25 11:43:56'),
(11, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:43:57', '2022-09-25 11:43:57'),
(12, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:43:59', '2022-09-25 11:43:59'),
(13, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:44:00', '2022-09-25 11:44:00'),
(14, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:44:02', '2022-09-25 11:44:02'),
(15, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:44:03', '2022-09-25 11:44:03'),
(16, 'newmail', 'emailtes@gmail.com', 'test', 'tes', '2022-09-25 11:44:05', '2022-09-25 11:44:05'),
(17, 'fres', 'sfrsr@gmail.com', 'test', 'test', '2022-09-25 11:45:07', '2022-09-25 11:45:07'),
(18, 'asdasdasdasd', 'asdasdad@g.com', 'serwerwer', 'resr', '2022-09-25 11:45:51', '2022-09-25 11:45:51'),
(19, 'testnew user', 'testemial@mailinator.com', 'testt', 'test', '2022-10-08 12:03:14', '2022-10-08 12:03:14'),
(20, 'xcs', 'sdsdfsdf@gmail.com', 'test', 'test', '2022-10-08 12:05:05', '2022-10-08 12:05:05'),
(21, 'vikas', 'tetvikas@gmil.com', 'test', 'test', '2022-10-08 12:30:23', '2022-10-08 12:30:23'),
(22, 'testnewq', 'user@gmail.cm', 'test', 'tet', '2022-10-08 12:44:54', '2022-10-08 12:44:54'),
(23, 'asdasd', 'kushwahavikas1993@gmail.com', 'test', 'test', '2022-10-08 12:46:26', '2022-10-08 12:46:26'),
(24, 'test', 'kushwahavikas1993@gmail.com', 'asdasd', 'testasd', '2022-10-08 12:51:19', '2022-10-08 12:51:19'),
(25, 'teset', 'kushwahavikas1993@gmail.com', 'test', 'testtest', '2022-10-08 12:52:02', '2022-10-08 12:52:02'),
(26, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'test', 'asd', '2022-10-08 12:55:02', '2022-10-08 12:55:02'),
(27, 'test', 'kushwahavikas1993@gmail.com', 'test', 'test', '2022-10-08 13:00:03', '2022-10-08 13:00:03'),
(28, 'test', 'kushwahavikas1993@gmail.com', 'test', 'test', '2022-10-08 13:01:02', '2022-10-08 13:01:02'),
(29, 'test', 'kushwahavikas1993@gmail.com', 'test', 'test', '2022-10-09 11:28:13', '2022-10-09 11:28:13'),
(30, 'test', 'kushwahavikas1993@gmail.com', 'testt', 'tes', '2022-10-09 11:34:22', '2022-10-09 11:34:22'),
(31, 'test', 'kushwahavikas1993@gmail.com', 'sdfsdfs', 'sdfsdf', '2022-10-09 11:38:12', '2022-10-09 11:38:12'),
(32, 'test', 'kushwahavikas1993@gmail.com', 'testset', 'asd', '2022-10-09 11:38:49', '2022-10-09 11:38:49'),
(33, 'jiss', 'kushwahavikas1993@gmail.com', 'sdfsdf', 'fes', '2022-10-09 11:40:58', '2022-10-09 11:40:58'),
(34, 'test', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 11:41:52', '2022-10-09 11:41:52'),
(35, 'test', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 11:43:05', '2022-10-09 11:43:05'),
(36, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 11:43:34', '2022-10-09 11:43:34'),
(37, 'testte', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 12:21:31', '2022-10-09 12:21:31'),
(38, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'asdas', 'asd', '2022-10-09 12:22:51', '2022-10-09 12:22:51'),
(39, 'test', 'kushwahavikas1993@gmail.com', 'asdasd', 'asd', '2022-10-09 12:23:12', '2022-10-09 12:23:12'),
(40, 'test', 'kushwahavikas1993@gmail.com', 'asdasd', 'test', '2022-10-09 12:27:58', '2022-10-09 12:27:58'),
(41, 'test', 'kushwahavikas1993@gmail.com', 'rwarwar', 'test', '2022-10-09 12:28:48', '2022-10-09 12:28:48'),
(42, 'test', 'kushwahavikas1993@gmail.com', 'asdasd', 'asdasd', '2022-10-09 12:29:09', '2022-10-09 12:29:09'),
(43, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'asdasd', 'asdasd', '2022-10-09 12:29:54', '2022-10-09 12:29:54'),
(44, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'asdasd', 'test', '2022-10-09 12:30:25', '2022-10-09 12:30:25'),
(45, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'tstset', 'test', '2022-10-09 12:31:27', '2022-10-09 12:31:27'),
(46, 'test', 'kushwahavikas1993@gmail.com', 'asdasd', 'test', '2022-10-09 12:32:35', '2022-10-09 12:32:35'),
(47, 'test', 'kushwahavikas1993@gmail.com', 'sdfsdf', 'test', '2022-10-09 12:37:20', '2022-10-09 12:37:20'),
(48, 'test', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 12:43:22', '2022-10-09 12:43:22'),
(49, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'testest', 'testtestset', '2022-10-09 12:45:02', '2022-10-09 12:45:02'),
(50, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'asdasd', 'testf', '2022-10-09 12:45:31', '2022-10-09 12:45:31'),
(51, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 12:46:24', '2022-10-09 12:46:24'),
(52, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 12:46:55', '2022-10-09 12:46:55'),
(53, 'test', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 12:48:29', '2022-10-09 12:48:29'),
(54, 'info-messages:delete', 'kushwahavikas1993@gmail.com', 'testset', 'test', '2022-10-09 12:50:27', '2022-10-09 12:50:27'),
(55, 'vikas', 'kushwahavikas1993@gmail.com', 'testest', 'test', '2022-10-09 12:51:29', '2022-10-09 12:51:29'),
(56, 'test1', 'kushwahavikas1993@gmail.com', 'test', 'te', '2022-10-09 12:52:15', '2022-10-09 12:52:15'),
(57, 'testres', 'kushwahavikas1993@gmail.com', 'esrser', 'resr', '2022-10-09 12:53:59', '2022-10-09 12:53:59'),
(58, 'shivakumar', 'shivuhm15@gmail.com', 'nov 10', 'hkhljl2022', '2022-11-10 09:14:30', '2022-11-10 09:14:30'),
(59, 'shivakumar', 'shivuhm15@gmail.com', 'nov 10', 'hkhljl2022', '2022-11-10 09:15:14', '2022-11-10 09:15:14'),
(60, 'shivakumar', 'shivuhm15@gmail.com', 'fgsdgsdgd', 'nov16th', '2022-11-16 11:28:00', '2022-11-16 11:28:00'),
(61, 'shivakumar', 'shivuhm15@gmail.com', 'dgsdgsfg', 'nov16th', '2022-11-16 11:31:14', '2022-11-16 11:31:14'),
(62, 'vikas', 'kushwahavikas1993@gmail.com', 'test', 'test', '2022-11-17 17:32:03', '2022-11-17 17:32:03'),
(63, 'test', 'sdf@gmail.com', 'test', 'test', '2022-11-17 17:42:23', '2022-11-17 17:42:23'),
(64, 'resr', 'serser@gmial.com', 'test', 'etset', '2022-11-17 17:47:56', '2022-11-17 17:47:56'),
(65, 'test', 'agrinia.media@gmail.com', 'asd', 'asd', '2022-11-17 17:48:44', '2022-11-17 17:48:44'),
(66, 'test', 'test@test.com', 'testset', 'test', '2022-11-17 17:52:23', '2022-11-17 17:52:23'),
(67, 'testing email', 'testingzohomail@test.com', 'test', 'testingzoho', '2022-11-17 17:57:27', '2022-11-17 17:57:27'),
(68, 'shivakumar', 'shivuhm15@gmail.com', 'nmbmbm', '18', '2022-11-18 12:43:20', '2022-11-18 12:43:20'),
(69, 'shivakumar', 'raghav@gmail', 'nov18', 'hkhljl2022', '2022-11-18 12:44:57', '2022-11-18 12:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(11, '130e8d8d-ff95-47ac-9b80-b3dcdd5044d8', 'database', 'shipping_order', '{\"uuid\":\"130e8d8d-ff95-47ac-9b80-b3dcdd5044d8\",\"displayName\":\"App\\\\Jobs\\\\ShippingOrderCreate\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ShippingOrderCreate\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\ShippingOrderCreate\\\":2:{s:35:\\\"\\u0000App\\\\Jobs\\\\ShippingOrderCreate\\u0000order\\\";i:41;s:5:\\\"queue\\\";s:14:\\\"shipping_order\\\";}\"}}', 'Error: Class \"App\\Jobs\\User\" not found in C:\\wamp64\\www\\agrinia\\app\\Jobs\\ShippingOrderCreate.php:40\nStack trace:\n#0 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\ShippingOrderCreate->handle()\n#1 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#3 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#4 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#5 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#6 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\ShippingOrderCreate))\n#7 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\ShippingOrderCreate))\n#8 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#9 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\ShippingOrderCreate), false)\n#10 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\ShippingOrderCreate))\n#11 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\ShippingOrderCreate))\n#12 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(126): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\ShippingOrderCreate))\n#14 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#15 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#17 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(326): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(150): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'shipping_order\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(134): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'shipping_order\')\n#20 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#23 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#24 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#25 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(139): Illuminate\\Container\\Container->call(Array)\n#26 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Command\\Command.php(308): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#27 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(124): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(1002): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#29 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\wamp64\\www\\agrinia\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 {main}', '2022-10-04 04:53:56'),
(10, '74d30e90-3db0-49ce-9f47-f5bf0a065aec', 'database', 'shipping_order', '{\"uuid\":\"74d30e90-3db0-49ce-9f47-f5bf0a065aec\",\"displayName\":\"App\\\\Jobs\\\\ShippingOrderCreate\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ShippingOrderCreate\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\ShippingOrderCreate\\\":2:{s:35:\\\"\\u0000App\\\\Jobs\\\\ShippingOrderCreate\\u0000order\\\";i:40;s:5:\\\"queue\\\";s:14:\\\"shipping_order\\\";}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\ShippingOrderCreate has been attempted too many times or run too long. The job may have previously timed out. in C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:755\nStack trace:\n#0 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(505): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(415): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#2 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(326): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(150): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'shipping_order\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(134): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'shipping_order\')\n#6 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(139): Illuminate\\Container\\Container->call(Array)\n#12 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Command\\Command.php(308): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(124): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(1002): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\wamp64\\www\\agrinia\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2022-10-04 04:48:25'),
(9, 'af478498-95e3-41fe-848f-e600cc56cb62', 'database', 'shipping_order', '{\"uuid\":\"af478498-95e3-41fe-848f-e600cc56cb62\",\"displayName\":\"App\\\\Jobs\\\\ShippingOrderCreate\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\ShippingOrderCreate\",\"command\":\"O:28:\\\"App\\\\Jobs\\\\ShippingOrderCreate\\\":2:{s:35:\\\"\\u0000App\\\\Jobs\\\\ShippingOrderCreate\\u0000order\\\";i:39;s:5:\\\"queue\\\";s:14:\\\"shipping_order\\\";}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\ShippingOrderCreate has been attempted too many times or run too long. The job may have previously timed out. in C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:755\nStack trace:\n#0 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(505): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(415): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#2 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(326): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(150): Illuminate\\Queue\\Worker->runNextJob(\'database\', \'shipping_order\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(134): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'shipping_order\')\n#6 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(139): Illuminate\\Container\\Container->call(Array)\n#12 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Command\\Command.php(308): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(124): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(1002): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 C:\\wamp64\\www\\agrinia\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 C:\\wamp64\\www\\agrinia\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 C:\\wamp64\\www\\agrinia\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2022-10-02 12:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_01_174107_add_otp_to_users_table', 2),
(7, '2022_09_03_124034_create_orders_table', 3),
(8, '2022_09_06_175344_create_carts_table', 4),
(9, '2022_09_15_172843_create_orders_table', 5),
(10, '2022_09_15_172946_create_billing_addresses_table', 6),
(11, '2022_09_15_173913_create_order_items_table', 6),
(12, '2022_09_15_174039_create_payment_details_table', 6),
(13, '2020_06_04_000001_create_zohos_table', 7),
(14, '2022_09_25_154340_create_contacts_table', 7),
(15, '2022_10_02_154852_create_jobs_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `provider_payment_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` int DEFAULT NULL,
  `billing_address_id` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `sub_total` int DEFAULT NULL,
  `order_status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tax` int DEFAULT NULL,
  `shipping_charge` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_vendor` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `provider_payment_id`, `payment_id`, `billing_address_id`, `total`, `sub_total`, `order_status`, `tax`, `shipping_charge`, `delivery_vendor`, `payment_mode`, `created_at`, `updated_at`) VALUES
(33, 5, NULL, 14, NULL, 1050, 1000, 'success', 5, NULL, '', 'bank_transfer', '2022-09-24 00:43:38', '2022-09-24 00:43:39'),
(34, 5, NULL, 15, NULL, 1050, 1000, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-01 07:29:34', '2022-10-01 07:29:38'),
(35, 5, NULL, 16, NULL, 3465, 3300, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-02 09:38:46', '2022-10-02 09:38:49'),
(36, 5, NULL, 17, NULL, 3465, 3300, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-02 10:26:30', '2022-10-02 10:26:32'),
(37, 5, NULL, 18, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-02 11:50:25', '2022-10-02 11:50:27'),
(38, 5, NULL, 19, NULL, 158, 150, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-02 12:02:13', '2022-10-02 12:02:15'),
(39, 5, NULL, 20, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-02 12:13:16', '2022-10-02 12:13:20'),
(40, 5, NULL, 21, NULL, 630, 600, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 04:46:12', '2022-10-04 04:46:15'),
(41, 5, NULL, 22, NULL, 32, 30, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 04:53:04', '2022-10-04 04:53:07'),
(42, 5, NULL, 23, NULL, 158, 150, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 04:55:38', '2022-10-04 04:55:40'),
(43, 5, NULL, 24, NULL, 84, 80, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 05:02:03', '2022-10-04 05:02:06'),
(44, 5, NULL, 25, NULL, 263, 250, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 05:09:27', '2022-10-04 05:09:29'),
(45, 5, NULL, 26, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 05:18:06', '2022-10-04 05:18:09'),
(46, 5, NULL, 27, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 07:26:41', '2022-10-04 07:26:43'),
(47, 5, NULL, 28, NULL, 158, 150, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 07:39:09', '2022-10-04 07:39:12'),
(48, 5, NULL, 29, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 08:04:14', '2022-10-04 08:04:17'),
(49, 5, NULL, 30, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 08:06:18', '2022-10-04 08:06:21'),
(50, 5, NULL, 31, NULL, 53, 50, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-04 08:10:06', '2022-10-04 08:10:09'),
(51, 7, NULL, 32, NULL, 137, 130, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-15 10:56:00', '2022-10-15 10:56:01'),
(52, 2, NULL, 33, NULL, 2048, 1950, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-21 14:12:04', '2022-10-21 14:12:06'),
(53, 2, NULL, 34, NULL, 105, 100, 'pending', 5, NULL, '', 'bank_transfer', '2022-10-22 12:03:53', '2022-10-22 12:03:54'),
(54, 1, NULL, 35, NULL, 2153, 2050, 'pending', 5, NULL, 'xpressbees', 'bank_transfer', '2022-11-10 16:22:24', '2022-11-10 16:22:25'),
(55, 1, NULL, 36, NULL, 1257, 1197, 'pending', 5, NULL, 'xpressbees', 'bank_transfer', '2022-11-14 15:19:29', '2022-11-14 15:19:30'),
(56, 1, NULL, 37, NULL, 1048, 998, 'pending', 5, NULL, 'fedex', 'bank_transfer', '2022-11-14 19:02:15', '2022-11-14 19:02:16'),
(57, 1, NULL, 38, NULL, 629, 599, 'pending', 5, NULL, 'fedex', 'bank_transfer', '2022-11-15 15:44:26', '2022-11-15 15:44:27'),
(58, 1, NULL, 39, NULL, 1258, 1198, 'pending', 5, NULL, 'xpressbees', 'bank_transfer', '2022-11-16 11:26:03', '2022-11-16 11:26:03'),
(59, 8, NULL, 40, NULL, 629, 599, 'pending', 5, NULL, 'xpressbees', 'bank_transfer', '2022-11-19 13:30:37', '2022-11-19 13:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(84, 53, 3, 2, NULL, NULL),
(83, 52, 2, 3, NULL, NULL),
(82, 52, 5, 7, NULL, NULL),
(81, 51, 9, 1, NULL, NULL),
(80, 51, 3, 1, NULL, NULL),
(79, 50, 3, 1, NULL, NULL),
(78, 49, 3, 1, NULL, NULL),
(77, 48, 3, 1, NULL, NULL),
(76, 47, 5, 1, NULL, NULL),
(75, 46, 3, 1, NULL, NULL),
(74, 45, 3, 1, NULL, NULL),
(73, 44, 8, 1, NULL, NULL),
(72, 43, 9, 1, NULL, NULL),
(71, 42, 5, 1, NULL, NULL),
(70, 41, 4, 1, NULL, NULL),
(69, 40, 2, 2, NULL, NULL),
(68, 39, 3, 1, NULL, NULL),
(67, 38, 5, 1, NULL, NULL),
(66, 37, 3, 1, NULL, NULL),
(65, 36, 3, 2, NULL, NULL),
(64, 36, 7, 5, NULL, NULL),
(63, 36, 5, 3, NULL, NULL),
(62, 35, 3, 2, NULL, NULL),
(61, 35, 7, 5, NULL, NULL),
(60, 35, 5, 3, NULL, NULL),
(59, 34, 7, 1, NULL, NULL),
(58, 34, 5, 3, NULL, NULL),
(57, 33, 7, 1, NULL, NULL),
(56, 33, 5, 3, NULL, NULL),
(85, 54, 2, 4, NULL, NULL),
(86, 54, 3, 5, NULL, NULL),
(87, 54, 2, 2, NULL, NULL),
(88, 55, 21, 1, NULL, NULL),
(89, 55, 21, 1, NULL, NULL),
(90, 55, 20, 1, NULL, NULL),
(91, 56, 20, 1, NULL, NULL),
(92, 56, 18, 1, NULL, NULL),
(93, 57, 18, 1, NULL, NULL),
(94, 58, 18, 2, NULL, NULL),
(95, 59, 18, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int DEFAULT NULL,
  `provider_payment_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int NOT NULL,
  `provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `order_id`, `provider_payment_id`, `amount`, `provider`, `status`, `created_at`, `updated_at`) VALUES
(26, 45, 'order_KPfPuyxRwdaFVn', 53, 'Razor pay', 'success', '2022-10-04 05:18:09', '2022-10-04 05:19:29'),
(25, 44, 'order_KPfGlyiWH3sSZ1', 263, 'Razor pay', 'success', '2022-10-04 05:09:29', '2022-10-04 05:10:01'),
(24, 43, 'order_KPf8xt2qMBrLrf', 84, 'Razor pay', 'success', '2022-10-04 05:02:06', '2022-10-04 05:02:49'),
(23, 42, 'order_KPf2BJ7ZjLTVti', 158, 'Razor pay', 'success', '2022-10-04 04:55:40', '2022-10-04 04:56:34'),
(22, 41, 'order_KPezTUUryaYjgi', 32, 'Razor pay', 'success', '2022-10-04 04:53:07', '2022-10-04 04:53:54'),
(21, 40, 'order_KPesENRBldyGAb', 630, 'Razor pay', 'success', '2022-10-04 04:46:15', '2022-10-04 04:46:53'),
(20, 39, 'order_KOzQC4J3YHfOQU', 53, 'Razor pay', 'success', '2022-10-02 12:13:20', '2022-10-02 12:13:55'),
(19, 38, 'order_KOzEVHRQrXfuuQ', 158, 'Razor pay', 'success', '2022-10-02 12:02:15', '2022-10-02 12:02:56'),
(18, 37, 'order_KOz20fLV5NNBje', 53, 'Razor pay', 'success', '2022-10-02 11:50:27', '2022-10-02 11:51:30'),
(17, 36, 'order_KOxbS8s75nDuIK', 3465, 'Razor pay', 'success', '2022-10-02 10:26:32', '2022-10-02 10:28:06'),
(16, 35, 'order_KOwn2o9gBD6ftN', 3465, 'Razor pay', 'success', '2022-10-02 09:38:49', '2022-10-02 09:40:08'),
(15, 34, 'order_KOW3VO4y36f5mA', 1050, 'Razor pay', 'success', '2022-10-01 07:29:38', '2022-10-01 07:36:04'),
(14, 33, 'order_KLdOmnc7dfJ0ms', 1050, 'Razor pay', 'success', '2022-09-24 00:43:39', '2022-09-24 00:44:05'),
(27, 46, 'order_KPhbk9TdNrz1lI', 53, 'Razor pay', 'success', '2022-10-04 07:26:43', '2022-10-04 07:27:28'),
(28, 47, 'order_KPhovBsGphcU6T', 158, 'Razor pay', 'success', '2022-10-04 07:39:12', '2022-10-04 07:39:43'),
(29, 48, 'order_KPiFPya4JPAaO6', 53, 'Razor pay', 'success', '2022-10-04 08:04:17', '2022-10-04 08:04:51'),
(30, 49, 'order_KPiHbiUKaGJg6R', 53, 'Razor pay', 'success', '2022-10-04 08:06:21', '2022-10-04 08:06:53'),
(31, 50, 'order_KPiLbnzPP5aOse', 53, 'Razor pay', 'success', '2022-10-04 08:10:09', '2022-10-04 08:11:05'),
(32, 51, 'order_KU73HWFyEmzLPJ', 137, 'Razor pay', 'success', '2022-10-15 10:56:01', '2022-10-15 10:56:43'),
(33, 52, 'order_KWXb1dN35smL7N', 2048, 'Razor pay', 'success', '2022-10-21 14:12:06', '2022-10-21 14:12:36'),
(34, 53, 'order_KWtwjfykgeOgvV', 105, 'Razor pay', 'success', '2022-10-22 12:03:54', '2022-10-22 12:04:15'),
(35, 54, 'order_KeOsQLVdtqrHAg', 2153, 'Razor pay', 'success', '2022-11-10 16:22:25', '2022-11-10 16:22:52'),
(36, 55, 'order_KfxwS3KTYmHvlp', 1257, 'Razor pay', 'success', '2022-11-14 15:19:30', '2022-11-14 15:20:23'),
(37, 56, 'order_Kg1jlVSs5jF9Wf', 1048, 'Razor pay', 'success', '2022-11-14 19:02:16', '2022-11-14 19:02:43'),
(38, 57, 'order_KgMtvK1xIEMzon', 629, 'Razor pay', 'success', '2022-11-15 15:44:27', '2022-11-15 15:45:22'),
(39, 58, 'order_Kgh25rK04XG1Es', 1258, 'Razor pay', 'success', '2022-11-16 11:26:03', '2022-11-16 11:26:27'),
(40, 59, 'order_Khul2SrDZHpGf9', 629, 'Razor pay', 'success', '2022-11-19 13:30:37', '2022-11-19 13:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'authToken', 'e3f0c130e8d2f1e1f92ecb9a7e40c0371f5512f835774519f92d198b47178005', '[\"*\"]', NULL, NULL, '2022-09-02 13:38:32', '2022-09-02 13:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `offer_price` int NOT NULL,
  `ratings` int NOT NULL,
  `images` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int NOT NULL,
  `product_details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_information` json NOT NULL,
  `addtional_information` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` int NOT NULL DEFAULT '1' COMMENT '0 => agricultor, 1 => gardening',
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `offer_price`, `ratings`, `images`, `product_quantity`, `product_details`, `product_tags`, `product_description`, `product_information`, `addtional_information`, `product_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Indian Tomato', 'Tomato', 300, 300, 4, '1.png', 20, '', 'tomato,red', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(3, 'Beet', 'Beet', 100, 50, 4, '8.png', 20, '', 'tomato,red', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(4, 'Orange', 'Fruits', 400, 30, 5, '2.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(5, 'Apple', 'Fruits', 200, 150, 5, '3.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(6, 'Orange box', 'Fruits', 300, 150, 5, '5.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(7, 'Braucli', 'Vegitables', 500, 550, 5, '7.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(8, 'Red chille', 'Vegitables', 300, 250, 5, '6.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(9, 'Banana', 'Fruits', 100, 80, 5, '4.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(10, 'Indian Tomato', 'Tomato', 300, 300, 4, '1.png', 20, '', 'tomato,red', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(11, 'Beet', 'Beet', 100, 50, 4, '8.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(12, 'Orange', 'Fruits', 400, 30, 5, '2.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(13, 'Apple', 'Fruits', 200, 150, 5, '3.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(14, 'Orange box', 'Fruits', 300, 150, 5, '5.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(15, 'Braucli', 'Vegitables', 500, 550, 5, '7.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(16, 'Red chille', 'Vegitables', 300, 250, 5, '6.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(17, 'Banana', 'Fruits', 100, 80, 5, '4.png', 20, '', '', 'Sumptuous, filling, and temptingly healthy, our Biona Organic Granola with Wild Berries is just the thing to get you out of bed. The goodness of rolled wholegrain oats are combined', 'null', '', 0, 0, NULL, NULL),
(18, 'Phyto-Growth Booster', 'vegitables', 699, 599, 4, 'Agrinia-Phyto-Growth Booster_Front(2021).png,Agrinia-Phyto-Growth Booster_Back (2021).png', 10, 'Phyto-Growth Booster - Natural Growth Booster, Helps promote growth and nourishment for home, indoor-outdoor garden plants (500 g)\n', 'vegetables', 'PHYTO-GROWTH BOOSTER is formulated using high grade ingredients like Potassium Humate and Fulvate, Sea Weed Extract, Amino-Chelates and Organic Potash. == It promotes seed-germination, plant growth and development. == It facilitates slow release of nutrients in response to dynamic growth needs of plant. == It breaks down soil particles, increasing its aeration and water retention. == It boost microbial activity in soil. == It increases the pore sizes of the root system and enhances root structures. == It improves leaf and flower development and fruit set. == It increase the fertility of the soil. == It is eco-friendly and residue free.', '{\"Dosage\": \"Dosage: Use around 25 gm of product for small - medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\", \"CAUTION\": \"Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use\", \"Storage\": \"Keep container tightly sealed. Store in a dry, cool place.\", \"Application method\": \"Remove soil around the plant.\"}', '{\'dosage\': \'Dosage: Use around 25 gm of product for small/ medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\', \'Application method\': \'Remove soil around the plant.\', \'Storage\': \' Keep container tightly sealed. Store in a dry, cool place.\', \'CAUTION\': \' Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use\'}', 1, 1, '2022-11-29 20:53:55', '2022-11-14 20:53:59'),
(19, 'Neem Armor', 'vegitables', 399, 299, 4, 'Agrinia-Neem Armor_Front (2021).png,Agrinia-Neem Armor_Back (2021).png', 10, 'Neem Armor - Natural Neem Seed Manure Protects and provides nourishment for home, indoor-outdoor garden plants (1 kg)', 'vegetables', 'NEEM ARMOR (Natural Neem Manure) is composed of high quality neem seeds. The product helps to increase the nitrogen and phosphorous content in the soil. It is also rich in sulphur, potassium, calcium, etc. == It nourishes the soil and plants by providing all the major macro (Nitrogen-Phosphorus-Potassium) and micro-nutrients. It releases the nutrients slowly and uniformly. This ensures constant growth of the crops or plants during the growing cycle. == It inhibits denitrification of soil by neutralizing the responsible bacteria. == It has anti-feedant properties that help to control the number and growth of insects, nematodes and other pests/pathogens. == It is an excellent soil conditioner and increases the water holding capability of the soil. == It is bio-degradable and eco-friendly.', '{\"Dosage\": \"Use around 25 gm of product for small/ medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\", \"CAUTION\": \"Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use.\", \"Storage\": \"Keep container tightly sealed. Store in a dry, cool place.\", \"Application method\": \"Remove soil around the plant. Sprinkle the product uniformly around the plant. Turn the soil around the plant to cover the product. Pour water around the plant as per requirement.\"}', '{\'dosage\': \'Dosage: Use around 25 gm of product for small/ medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\', \'Application method\': \'Remove soil around the plant.\', \'Storage\': \' Keep container tightly sealed. Store in a dry, cool place.\', \'CAUTION\': \' Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use\'}', 1, 1, '2022-11-14 20:54:01', '2022-11-27 20:54:03'),
(20, 'Organulizer', 'vegitables', 499, 399, 4, 'Agrinia-Organulizer_Front (2021).png,Agrinia-Organulizer_Back (2021).png', 10, 'Organulizer - Organic Granular Nutrilizer, Helps Fertilize and provide slow and timely nutrition for home, indoor-outdoor garden plants (1 kg)', 'vegetables', 'ORGANULIZER (Organic Granular Nutrilizer) is composed of high quality organic nutrients along with amino acids and other micro-nutrients. == It facilitates slow release of nutrients in response to dynamic growth needs of plant. == It provides most of the major-nutrients like Nitrogen (N), Phosphorous (P) and Potassium (K). == It also provides amino acids and other micro-nutrients like Zinc (Zn), Iron (Fe), Manganese (Mn), Boron (B), etc. in the bio-available form that are required for proper and healthy plant growth. == It increases the fertility and productivity of the soil. == It acts as soil conditioner and increases the water holding capacity of the soil. == It can mobilize nutrients that favour the development of biological activities in soils. == It is organic, non-toxic and eco-friendly.', '{\"Dosage\": \"Use around 25 gm of product for small/ medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\", \"Caution\": \"Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use\", \"Storage\": \"Keep container tightly sealed. Store in a dry, cool place.\", \"Application method\": \"Remove soil around the plant. Sprinkle the product uniformly around the plant. Turn the soil around the plant to cover the product. Pour water around the plant as per requirement.\"}', '{\'dosage\': \'Dosage: Use around 25 gm of product for small/ medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\', \'Application method\': \'Remove soil around the plant.\', \'Storage\': \' Keep container tightly sealed. Store in a dry, cool place.\', \'CAUTION\': \' Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use\'}', 1, 1, '2022-11-21 20:54:05', '2022-11-20 20:54:07'),
(21, 'ORBIES (Organic and Bio-Enriched Soil)', 'vegitables', 499, 399, 4, 'Agrinia-Organulizer_Front (2021).png,Agrinia-Organulizer_Back (2021).png', 10, 'ORBIES (Organic and Bio-Enriched Soil) - Specialised Potting Soil for home, indoor-outdoor garden plants (10 kg)', 'vegetables', 'ORBIES (Organic and Bio-Enriched Soil) is Patent Applied Specialised Potting Soil formulated using high quality ingredients like Processed Soil, Organic Compost, Coconut Coir, Perlite, Beneficial Microbes, Micro-nutrients, Potassium Humate and Fulvate, Sea Weed Extract and Amino-Chelates. == It provides holistic nutrient rich media for plant growth. == It provides both Macro- and Micro-nutrient required for plant growth and development. == It helps to maintain proper aeration and water retention for better root formation. == It has beneficial microbes that aid in plant development and protection. == It is natural and eco-friendly.', '{\"Dosage\": \"Use product quantity as per pot size and volume or planting requirement\", \"Caution\": \"Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use.\", \"Storage\": \"Keep container tightly sealed. Store in a dry, cool place\", \"Application method\": \"Remove soil around the plant.Apply and fill the product over a base layer of gravel or sand or pebbles. Place the required plant into the product and cover it fully. Pour water around the plant as per requirement.\"}', '{\'dosage\': \'Dosage: Use around 25 gm of product for small/ medium plants and around 50 gm for large plants. Use the product once every 45 days for best results.\', \'Application method\': \'Remove soil around the plant.\', \'Storage\': \' Keep container tightly sealed. Store in a dry, cool place.\', \'CAUTION\': \' Keep out of reach of children and pets. Do not ingest or inhale. Avoid contact with eyes or skin. Wash hands after use\'}', 1, 1, '2022-11-07 20:54:09', '2022-11-16 20:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`) VALUES
(20, 'superadmin@demo.com', '2022-11-28 15:38:59'),
(19, 'vikas456@gmail.com', '2022-11-21 14:54:47'),
(18, 'shivakumar@thirdinfo.com', '2022-11-21 14:54:00'),
(17, 'shivu123@gmail.com', '2022-11-21 14:53:21'),
(16, 'raghav@gmail', '2022-11-21 14:52:46'),
(15, 'newtest@gmail.com', '2022-11-21 14:50:53'),
(14, 'sdasdasda@gmail.com', '2022-11-18 18:06:34'),
(13, 'shivuhm15@gmail.com', '2022-11-18 12:40:48'),
(12, 'kushwahavikas1993@gmail.com', '2022-11-17 19:14:36'),
(21, 'merchant@demo.com', '2022-11-28 15:39:22'),
(22, 'arun@gmail.com', '2022-11-28 15:41:51'),
(23, 'firsttest@gmail.com', '2022-11-29 09:03:39'),
(24, 'first11@gmail.com', '2022-11-29 09:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `first_name`, `last_name`, `display_name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `otp`) VALUES
(1, 'vikas', 'kushwahavikas1993@gmail.com', 'VIkas', 'kushwaha', 'vikas', NULL, NULL, 'MYLwQLU5UaNvZtHHNSk50kV2dpYuwws2b3Ckr0x0hpFZXQBlUy2XBPEa93pj', '2022-09-01 13:17:42', '2022-11-17 17:30:14', 8416),
(2, NULL, 'vikaskushwaha028@gmail.com', NULL, NULL, NULL, NULL, NULL, 'LEJyggHoAEWjVb1lUrFROnWVl43yvn8Sq3HTRk45ExOFP9nQSVlBKCkyB1ac', '2022-09-01 13:21:13', '2022-10-21 14:08:24', 4537),
(3, NULL, 'vikaskushwahdfgdfgdfgdfgdfga028@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-13 12:50:59', '2022-09-13 12:50:59', NULL),
(4, NULL, 'testnewuser@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-14 12:50:51', '2022-09-14 12:50:51', NULL),
(5, NULL, 'vtest@gmail.com', 'vikasw', 'kushwahaww', 'vikas123', NULL, NULL, '6rPNy3IQEiMDFMb2rYftI3bK44zRZRk05seOf2f3Vy4Fr4Jk6kbyELvbMB1U', '2022-09-14 12:58:14', '2022-09-24 05:13:23', 3137),
(6, NULL, 'vikasssstet@gmail.com', NULL, NULL, NULL, NULL, NULL, '0bquCeFHQqOP8yIZxL64KJEkGZKKFcmnI3CIjVtD0IOgGkCICaJqnQGflKxE', '2022-10-15 03:46:34', '2022-10-15 03:46:34', 1128),
(7, NULL, 'bgresssdfd@gmail.com', 'vikas', 'kushwaha', 'vikas123', NULL, NULL, 'vDinzddV1TeOUnwXIsSSkDxi5RK6gdOIzrDbUZkVInPfigtReoofXGd0rODN', '2022-10-15 03:54:36', '2022-10-15 10:52:01', 6683),
(8, NULL, 'shivuhm15@gmail.com', NULL, NULL, NULL, NULL, NULL, 'bVIi4JOC9GKm2hkIFkBx8ebjpkpisgPsWIggWch41PLO2JYLd8nll2iZbNRG', '2022-11-10 09:11:40', '2022-11-16 16:53:13', 5024);

-- --------------------------------------------------------

--
-- Table structure for table `zohos`
--

CREATE TABLE `zohos` (
  `id` bigint UNSIGNED NOT NULL,
  `zoho_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zohoable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zohoable_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zohos`
--
ALTER TABLE `zohos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zohos_zoho_id_unique` (`zoho_id`),
  ADD KEY `zohos_zohoable_type_zohoable_id_index` (`zohoable_type`,`zohoable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zohos`
--
ALTER TABLE `zohos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
