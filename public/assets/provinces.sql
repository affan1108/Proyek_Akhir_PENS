-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 06:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ongkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bali', '2023-02-22 21:10:23', '2023-02-22 21:10:23'),
(2, 2, 'Bangka Belitung', '2023-02-22 21:10:25', '2023-02-22 21:10:25'),
(3, 3, 'Banten', '2023-02-22 21:10:26', '2023-02-22 21:10:26'),
(4, 4, 'Bengkulu', '2023-02-22 21:10:27', '2023-02-22 21:10:27'),
(5, 5, 'DI Yogyakarta', '2023-02-22 21:10:29', '2023-02-22 21:10:29'),
(6, 6, 'DKI Jakarta', '2023-02-22 21:10:30', '2023-02-22 21:10:30'),
(7, 7, 'Gorontalo', '2023-02-22 21:10:31', '2023-02-22 21:10:31'),
(8, 8, 'Jambi', '2023-02-22 21:10:33', '2023-02-22 21:10:33'),
(9, 9, 'Jawa Barat', '2023-02-22 21:10:34', '2023-02-22 21:10:34'),
(10, 10, 'Jawa Tengah', '2023-02-22 21:10:35', '2023-02-22 21:10:35'),
(11, 11, 'Jawa Timur', '2023-02-22 21:10:37', '2023-02-22 21:10:37'),
(12, 12, 'Kalimantan Barat', '2023-02-22 21:10:38', '2023-02-22 21:10:38'),
(13, 13, 'Kalimantan Selatan', '2023-02-22 21:10:39', '2023-02-22 21:10:39'),
(14, 14, 'Kalimantan Tengah', '2023-02-22 21:10:41', '2023-02-22 21:10:41'),
(15, 15, 'Kalimantan Timur', '2023-02-22 21:10:42', '2023-02-22 21:10:42'),
(16, 16, 'Kalimantan Utara', '2023-02-22 21:10:43', '2023-02-22 21:10:43'),
(17, 17, 'Kepulauan Riau', '2023-02-22 21:10:45', '2023-02-22 21:10:45'),
(18, 18, 'Lampung', '2023-02-22 21:10:46', '2023-02-22 21:10:46'),
(19, 19, 'Maluku', '2023-02-22 21:10:47', '2023-02-22 21:10:47'),
(20, 20, 'Maluku Utara', '2023-02-22 21:10:49', '2023-02-22 21:10:49'),
(21, 21, 'Nanggroe Aceh Darussalam (NAD)', '2023-02-22 21:10:50', '2023-02-22 21:10:50'),
(22, 22, 'Nusa Tenggara Barat (NTB)', '2023-02-22 21:10:52', '2023-02-22 21:10:52'),
(23, 23, 'Nusa Tenggara Timur (NTT)', '2023-02-22 21:10:53', '2023-02-22 21:10:53'),
(24, 24, 'Papua', '2023-02-22 21:10:55', '2023-02-22 21:10:55'),
(25, 25, 'Papua Barat', '2023-02-22 21:10:57', '2023-02-22 21:10:57'),
(26, 26, 'Riau', '2023-02-22 21:10:58', '2023-02-22 21:10:58'),
(27, 27, 'Sulawesi Barat', '2023-02-22 21:11:00', '2023-02-22 21:11:00'),
(28, 28, 'Sulawesi Selatan', '2023-02-22 21:11:01', '2023-02-22 21:11:01'),
(29, 29, 'Sulawesi Tengah', '2023-02-22 21:11:03', '2023-02-22 21:11:03'),
(30, 30, 'Sulawesi Tenggara', '2023-02-22 21:11:04', '2023-02-22 21:11:04'),
(31, 31, 'Sulawesi Utara', '2023-02-22 21:11:05', '2023-02-22 21:11:05'),
(32, 32, 'Sumatera Barat', '2023-02-22 21:11:07', '2023-02-22 21:11:07'),
(33, 33, 'Sumatera Selatan', '2023-02-22 21:11:08', '2023-02-22 21:11:08'),
(34, 34, 'Sumatera Utara', '2023-02-22 21:11:09', '2023-02-22 21:11:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
