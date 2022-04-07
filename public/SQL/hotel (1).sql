-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `nm_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `fasilitashotel`
--

CREATE TABLE `fasilitashotel` (
  `id_fashotel` bigint(20) UNSIGNED NOT NULL,
  `nm_fashotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitashotel`
--

INSERT INTO `fasilitashotel` (`id_fashotel`, `nm_fashotel`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'WIFI', 'Internet cepat', 'wifi.png', '2022-03-30 00:47:10', '2022-03-30 00:47:10'),
(7, 'GYM', 'SDG', 'fitness.png', '2022-03-30 22:24:55', '2022-03-30 22:24:55'),
(8, 'SPA', 'fcsd', 'spa (2).png', '2022-03-30 22:34:24', '2022-03-30 22:34:24'),
(9, 'Bar', 'dengan barista yang tampan dan cantik', 'bar.png', '2022-03-30 23:29:11', '2022-03-30 23:29:11'),
(10, 'Swimming Pool', 'dengan kedalaman 2 meter dan 120 centimeter', 'pool.png', '2022-03-30 23:30:13', '2022-03-30 23:30:13'),
(11, 'Bicycle', 'Sepeda lipat yang dapat digunakan untuk berkendara', 'red_bicycle_icon-icons.com_59501.png', '2022-03-30 23:43:56', '2022-03-30 23:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitaskmr`
--

CREATE TABLE `fasilitaskmr` (
  `id_faskmr` bigint(20) UNSIGNED NOT NULL,
  `nm_faskmr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipekamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitaskmr`
--

INSERT INTO `fasilitaskmr` (`id_faskmr`, `nm_faskmr`, `tipekamar`, `gambar`, `created_at`, `updated_at`) VALUES
(10, 'Sofa', 'Deluxe Room', 'sofa deluxe.jpg', '2022-04-01 00:17:17', '2022-04-01 00:17:17'),
(11, 'Bathroom', 'Deluxe Room', 'bathroom deluxe.jpg', '2022-04-01 00:18:18', '2022-04-01 00:18:18'),
(12, 'Coffe Maker', 'Deluxe Room', 'coffe maker deluxe.jpg', '2022-04-01 00:26:36', '2022-04-01 00:26:36'),
(13, 'Sofa', 'Superior Room', 'sofa superior.jpg', '2022-04-01 00:27:03', '2022-04-01 00:27:03'),
(14, 'Bathroom', 'Superior Room', 'bathroom superior.jpg', '2022-04-01 00:27:31', '2022-04-01 00:27:31'),
(15, 'Television', 'Superior Room', 'tv.jpg', '2022-04-01 00:29:10', '2022-04-01 00:29:10'),
(18, 'Sofa', 'Suite Room', 'sofa Presidential Suite.jpg', '2022-04-01 00:36:03', '2022-04-01 00:36:03'),
(19, 'Bathroom', 'Suite Room', 'bathroom Presidential Suite.jpg', '2022-04-01 00:42:28', '2022-04-01 00:42:28'),
(20, 'Area Lounge', 'Deluxe', '1838.jpg', '2022-04-01 00:44:29', '2022-04-01 00:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` bigint(20) UNSIGNED NOT NULL,
  `tipe_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`, `jml_kamar`, `created_at`, `updated_at`) VALUES
(1, 'Deluxe', 35, NULL, NULL),
(2, 'Superior', 43, NULL, NULL),
(3, 'Suite Room', 40, NULL, NULL);

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
(4, '2022_03_15_133718_create_permission_tables', 1),
(5, '2022_03_17_050726_create_kamar_table', 1),
(6, '2022_03_17_065056_create_fasilitashotel_table', 1),
(7, '2022_03_17_070135_create_admin_table', 1),
(8, '2022_03_17_072240_create_resepsionis_table', 1),
(9, '2022_03_17_074156_create_tamu_table', 1),
(10, '2022_03_17_074604_create_reservasi_table', 1),
(11, '2022_03_20_142810_add_gambar_to_fasilitashotel_table', 1),
(12, '2022_03_22_124931_add_email_to_reservasi_table', 1),
(13, '2022_03_22_125505_add_notlp_to_reservasi_table', 1),
(14, '2022_03_25_145425_create_fasilitaskmr_table', 1),
(15, '2022_03_25_152951_add_gambar_to_fasilitaskmr_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 11),
(3, 'App\\User', 3);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resepsionis`
--

CREATE TABLE `resepsionis` (
  `id_resepsionis` bigint(20) UNSIGNED NOT NULL,
  `nm_resepsionis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_resepsionis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp_resepsionis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` bigint(20) UNSIGNED NOT NULL,
  `tglcekin` date NOT NULL,
  `tglcekout` date NOT NULL,
  `jml_kmr` int(11) NOT NULL,
  `nm_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_kmr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tglcekin`, `tglcekout`, `jml_kmr`, `nm_pemesan`, `nm_tamu`, `email`, `notlp`, `tipe_kmr`, `created_at`, `updated_at`) VALUES
(26, '2022-04-07', '2022-04-08', 5, 'rahel', 'delila', 'rahel@gmail.com', '0816758976', 'Deluxe', '2022-04-07 00:44:33', '2022-04-07 00:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-03-27 18:27:18', '2022-03-27 18:27:18'),
(2, 'tamu', 'web', '2022-03-27 18:27:18', '2022-03-27 18:27:18'),
(3, 'resepsionis', 'web', '2022-03-27 18:27:18', '2022-03-27 18:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` bigint(20) UNSIGNED NOT NULL,
  `nm_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin Role', 'admin@role.test', NULL, '$2y$10$JM5mTCGZnH//mdbcta25t.kQfiQsqqQZrVEaa5bzhEroxI8ZcWI46', NULL, '2022-03-27 18:27:19', '2022-03-27 18:27:19'),
(2, 'tamu Role', 'tamu@role.test', NULL, '$2y$10$3KhCrVJBKwhzgxJ7dbJJHOTCub5mHEL.T8FjB8SO9mM/TvjLryFAy', NULL, '2022-03-27 18:27:19', '2022-03-27 18:27:19'),
(3, 'resepsionis Role', 'res@role.test', NULL, '$2y$10$TLmjyhrR5BcsvDY87gGpVudM0uBp6YBlogMCR30JhLVcFlwCAwfAC', NULL, '2022-03-27 18:27:19', '2022-03-27 18:27:19'),
(4, 'rahel', 'rahel@gmail.com', NULL, '$2y$10$kPBUwEs1MZOLHu1gXB/m9uWgB7DEGpCSmcX7oT02C8WFFPittsABC', NULL, '2022-03-27 22:32:16', '2022-03-27 22:32:16'),
(5, 'gabriel', 'gabriel@gmail.com', NULL, '$2y$10$zHvp72TVJbZPLNyvAO30zuZgJuRjscom7Z16dL6xnXDojvEgEdv/y', NULL, '2022-03-29 22:26:11', '2022-03-29 22:26:11'),
(6, 'deo', 'deyo@gmail.com', NULL, '$2y$10$DNJA/PzpnfGy59b23NnNI.XEXogW0TlK.stWJuSuiZXOCofibovhG', NULL, '2022-03-30 05:56:24', '2022-03-30 05:56:24'),
(7, 'Ega', 'egak@gmail.com', NULL, '$2y$10$kL0fB2FVmPBwXOlzAdp1KusLA2BhB4faKKHwllDATHmxzkh9dvMXO', NULL, '2022-03-30 05:58:19', '2022-03-30 05:58:19'),
(8, 'Mumun', 'mumun@gmail.com', NULL, '$2y$10$35csvV0E5xvHMuaqDaKieeQYmjmalU1C7ShGeEn6pGhMmR.4Xv7XW', NULL, '2022-03-30 06:00:20', '2022-03-30 06:00:20'),
(9, 'mimin', 'mimin@gmail.com', NULL, '$2y$10$zSsD9Bemq1PU/MYBMFnYe.McxIdPVrOzKNu52a32VnrMGnJkqVKa.', NULL, '2022-03-30 06:01:10', '2022-03-30 06:01:10'),
(10, 'Ayunda', 'sandy@gmail.com', NULL, '$2y$10$Q3DDsHpc6BoAItrpPKKYe.VmXDxrmSRFtTDIKzZFi2j2xnd9vaFgi', NULL, '2022-03-31 00:03:24', '2022-03-31 00:03:24'),
(11, 'Yanto', 'apet@gmail.com', NULL, '$2y$10$KesIbC2MofMDGmEL9j.G8.FVMyWqQ.UjUJaUwEuspEw6P52G3cUxq', NULL, '2022-03-31 01:08:17', '2022-03-31 01:08:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  ADD PRIMARY KEY (`id_fashotel`);

--
-- Indexes for table `fasilitaskmr`
--
ALTER TABLE `fasilitaskmr`
  ADD PRIMARY KEY (`id_faskmr`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `resepsionis`
--
ALTER TABLE `resepsionis`
  ADD PRIMARY KEY (`id_resepsionis`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitashotel`
--
ALTER TABLE `fasilitashotel`
  MODIFY `id_fashotel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fasilitaskmr`
--
ALTER TABLE `fasilitaskmr`
  MODIFY `id_faskmr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resepsionis`
--
ALTER TABLE `resepsionis`
  MODIFY `id_resepsionis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
