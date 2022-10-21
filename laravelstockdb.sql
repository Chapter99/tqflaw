-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 03:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelstockdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `category_attachment` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `category_attachment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'มือถือ', 'category_1622752808.pdf', 1, '2021-06-03 13:40:08', '2021-06-03 13:40:08'),
(2, 'คอมพิวเตอร์', 'category_1623044763.pdf', 1, '2021-06-06 22:46:03', '2021-06-06 22:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name_eng` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `degree` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `course_name`, `name_eng`, `degree`, `created_at`, `updated_at`) VALUES
(1, '0801111', 'หลักการพื้นฐานทางนิติศาสตร์', 'Introduction to Legal Science', 3, '2021-06-03 10:02:59', '2021-06-03 10:02:59'),
(2, '0801151', 'ประวัติศาสตร์กฎหมาย', 'Legal History', 2, '2021-06-03 10:03:43', '2021-06-03 10:03:43'),
(3, '0801251', 'ภาษาอังกฤษสำหรับนักกฎหมาย 1', 'eng law1', 2, '2021-06-03 10:04:22', '2021-06-03 10:04:22'),
(4, '0801211', 'เอกเทศสัญญา 1', 'Specific Contracts 1', 3, '2021-06-03 10:05:29', '2021-06-03 10:05:29'),
(5, '0801212', 'หนี้', '(Obligation)', 3, '2021-06-03 10:06:36', '2021-06-03 10:06:36'),
(6, '0801213', 'ทรัพย์สินและที่ดิน', '(Property and Land)', 3, '2021-06-03 10:11:58', '2021-06-03 10:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(10) UNSIGNED NOT NULL,
  `major_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_24_093922_create_products_table', 1),
(4, '2020_05_31_101512_create_password_resets_table', 1),
(5, '2020_05_31_104742_create_categorys_table', 1),
(6, '2021_05_31_071237_create_tqfs_table', 1),
(7, '2021_05_31_073845_create_courses_table', 1),
(8, '2021_05_31_080613_create_majors_table', 1),
(9, '2014_10_12_000000_create_users_table', 2),
(10, '2021_06_03_182504_create_tqfcourses_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `product_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `product_barcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` decimal(7,2) NOT NULL,
  `product_image` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `product_category` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_detail`, `product_barcode`, `product_qty`, `product_price`, `product_image`, `product_category`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 'iPad Pro', '<p>เพ</p>', '1234567891234', 10, '25000.00', 'product_1623039604.png', 'มือถือ', 1, '2021-06-06 21:20:05', '2021-06-06 21:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `tqfcourses`
--

CREATE TABLE `tqfcourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tqfs`
--

CREATE TABLE `tqfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `major_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `nyear` int(11) NOT NULL,
  `link_tqf3` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_tqf4` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_tqf5` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `mana_id` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tqfs`
--

INSERT INTO `tqfs` (`id`, `course_id`, `teacher_name`, `major_id`, `level`, `term`, `nyear`, `link_tqf3`, `link_tqf4`, `link_tqf5`, `status`, `mana_id`, `created_at`, `updated_at`) VALUES
(6, '0801213', NULL, NULL, 1, 1, 2564, 'law_tqf3_1622751803.pdf', NULL, NULL, 0, NULL, '2021-06-03 13:23:23', '2021-06-03 13:23:23'),
(7, '0801151', 'test', NULL, 1, 1, 2564, 'law_tqf3_1622753322.pdf', NULL, NULL, 1, NULL, '2021-06-03 13:48:42', '2021-06-03 13:48:42'),
(9, '0801212', 'test', NULL, 1, 1, 2564, 'law_tqf3_0801212.pdf', NULL, NULL, 1, NULL, '2021-06-04 09:31:14', '2021-06-04 09:31:14'),
(10, '0801211', NULL, NULL, 1, 1, 2564, 'law_tqf3_0801211.pdf', NULL, NULL, 1, NULL, '2021-06-04 11:29:17', '2021-06-04 11:29:17'),
(11, '0801251', NULL, NULL, 1, 1, 2564, 'law_tqf3_0801251.pdf', NULL, NULL, 1, NULL, '2021-06-04 11:30:41', '2021-06-04 11:30:41'),
(14, '0801212', 'anucha khunkaew', NULL, 2, 1, 2563, 'law_tqf3_0801212.pdf', NULL, 'law_tqf5_0801212.pdf', 0, NULL, '2021-06-04 12:29:22', '2021-06-04 12:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT 0,
  `status` int(11) DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `password`, `gender`, `tel`, `isAdmin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anucha khunkaew', 'anucha.kh@gmail.com', NULL, '$2y$10$coIARAy89xEWvwdiq4pHaeuDZ0xEitHXC0kSySmlwqK5w9ektOwFy', 'male', '089-443-3547', 1, 1, 'BSItV4RBLmRYAAylLCR5G5IQoQ4jkCLgv6tVI6M7THBD8dKfxGbWxwx2gil3', '2021-06-04 09:28:31', '2021-06-06 20:14:07'),
(2, 'somchai', 'somchai@gmail.com', NULL, '$2y$10$1TmHG4y4jo5LJulXaIzJ/e76r4dIBTKk.lEsH2BCGOrhuwHhAxPvS', 'male', '089444443333', 0, 1, NULL, '2021-06-04 09:55:14', '2021-06-04 09:55:14'),
(4, 'afff', 'wi@gmail.com', NULL, '$2y$10$H3Y59t9rMrhFq2yxh25I3uF7ZM6XPdzZopqJ39Ufm0mNgzI9nAkDO', 'male', '089444443333', 0, 1, NULL, '2021-06-06 09:45:41', '2021-06-06 09:45:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_id_unique` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `majors_major_id_unique` (`major_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_barcode_unique` (`product_barcode`);

--
-- Indexes for table `tqfcourses`
--
ALTER TABLE `tqfcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tqfs`
--
ALTER TABLE `tqfs`
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
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tqfcourses`
--
ALTER TABLE `tqfcourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tqfs`
--
ALTER TABLE `tqfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
