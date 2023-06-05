-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kota` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_kota`, `tanggal_berangkat`, `tanggal_pesan`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-05-24', '2023-05-23', '2023-05-28 12:26:36', '2023-05-28 05:28:40'),
(3, 3, '2023-05-30', '2023-05-27', '2023-05-29 03:21:06', '2023-05-29 03:21:06'),
(4, 3, '2023-06-04', '2023-06-03', '2023-06-04 07:40:33', '2023-06-04 07:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `kapal_laut`
--

CREATE TABLE `kapal_laut` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kapal` varchar(255) NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kapal_laut`
--

INSERT INTO `kapal_laut` (`id`, `nama_kapal`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(3, 'Pesiar', 5, '2023-05-29 03:04:56', '2023-05-29 03:04:56'),
(6, 'Ferry', 5, '2023-06-04 07:46:27', '2023-06-04 07:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `kereta_api`
--

CREATE TABLE `kereta_api` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kereta` varchar(255) NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kereta_api`
--

INSERT INTO `kereta_api` (`id`, `nama_kereta`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(5, 'Penataran', 8, '2023-05-28 21:43:56', '2023-05-28 21:43:56'),
(8, 'Jayabaya', 9, '2023-06-04 08:28:19', '2023-06-04 08:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kota_asal` varchar(255) NOT NULL,
  `nama_kota_tujuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama_kota_asal`, `nama_kota_tujuan`, `created_at`, `updated_at`) VALUES
(1, 'Malang', 'Surabaya', '2023-05-28 12:51:46', '2023-05-28 12:51:46'),
(3, 'Jakarta', 'Surabaya', '2023-05-29 03:20:33', '2023-05-29 03:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE `maskapai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pesawat` varchar(255) NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id`, `nama_pesawat`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(5, 'Lion Air', 12, '2023-06-04 07:42:21', '2023-06-04 07:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_27_122914_jadwal', 1),
(6, '2023_05_27_123005_kereta_api', 1),
(7, '2023_05_27_123020_maskapai', 1),
(8, '2023_05_27_123029_kapal_laut', 1),
(9, '2023_05_27_123040_kota', 1),
(10, '2023_05_27_123127_pegawai', 1),
(11, '2023_05_27_124235_tiket_ka', 1),
(12, '2023_05_27_124243_tiket_pesawat', 1),
(13, '2023_05_27_124256_tiket_kapal', 1),
(14, '2023_05_27_124310_pemesanan_kereta', 1),
(15, '2023_05_27_124318_pemesanan_pesawat', 1),
(16, '2023_05_27_124330_pemesanan_kapal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `notelp` varchar(13) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_pegawai`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `notelp`, `jabatan`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 'Asep', 'Jl. Candi Badut no 21', 'Laki - laki', '1983-05-18', '089520203311', 'Admin', '2023-05-27', '2023-05-27 13:33:05', '2023-06-04 06:43:20'),
(5, 'Mael', 'Jl . Ikan Lele', 'Laki laki', '1973-01-31', '081217778400', 'Nahkoda', '2023-05-27', '2023-05-27 07:44:54', '2023-06-04 06:45:29'),
(8, 'Ridho', 'Jl. Borobudur', 'Laki laki', '1997-01-06', '08999888122', 'Masinis', '2023-05-29', '2023-05-28 21:43:25', '2023-06-04 06:44:29'),
(9, 'Zidni', 'Jl. Pakis', 'Laki laki', '1996-01-17', '08999777662', 'Masinis', '2023-06-04', '2023-06-04 06:47:16', '2023-06-04 06:47:16'),
(12, 'Gilang', 'Jl. tenaga', 'Laki laki', '2003-02-17', '08999888', 'Pilot', '2023-06-04', '2023-06-04 07:31:23', '2023-06-04 07:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_kapal`
--

CREATE TABLE `pemesanan_kapal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tiket_kapal` varchar(255) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan_kapal`
--

INSERT INTO `pemesanan_kapal` (`id`, `id_user`, `id_tiket_kapal`, `jumlah_pemesanan`, `created_at`, `updated_at`) VALUES
(5, 2, '5', 2, '2023-06-04 08:34:27', '2023-06-04 08:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_kereta`
--

CREATE TABLE `pemesanan_kereta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tiket_kereta` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan_kereta`
--

INSERT INTO `pemesanan_kereta` (`id`, `id_user`, `id_tiket_kereta`, `jumlah_pemesanan`, `created_at`, `updated_at`) VALUES
(11, 1, 11, 4, '2023-06-04 08:33:04', '2023-06-04 08:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_pesawat`
--

CREATE TABLE `pemesanan_pesawat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tiket_pesawat` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_kapal`
--

CREATE TABLE `tiket_kapal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kapal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jadwal` bigint(20) UNSIGNED DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket_kapal`
--

INSERT INTO `tiket_kapal` (`id`, `id_kapal`, `id_jadwal`, `harga`, `kelas`, `created_at`, `updated_at`) VALUES
(5, 3, 3, 100000, 'Ekonomi', '2023-06-04 07:46:00', '2023-06-04 07:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_kereta`
--

CREATE TABLE `tiket_kereta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kereta` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jadwal` bigint(20) UNSIGNED DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket_kereta`
--

INSERT INTO `tiket_kereta` (`id`, `id_kereta`, `id_jadwal`, `harga`, `kelas`, `created_at`, `updated_at`) VALUES
(10, 5, 4, 10000, 'Ekonomi', '2023-06-04 07:44:50', '2023-06-04 07:44:50'),
(11, 8, 1, 450000, 'Ekonomi', '2023-06-04 08:34:52', '2023-06-04 08:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_pesawat`
--

CREATE TABLE `tiket_pesawat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_maskapai` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jadwal` bigint(20) UNSIGNED DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket_pesawat`
--

INSERT INTO `tiket_pesawat` (`id`, `id_maskapai`, `id_jadwal`, `harga`, `kelas`, `created_at`, `updated_at`) VALUES
(5, 5, 4, 450000, 'VIP', '2023-06-04 07:45:30', '2023-06-04 07:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'maul', 'maul@gmail.com', NULL, '$2y$10$HebmPRfeOn.CmEC/z.9Qa.8LKV0rPErG64h36jZSo5ApF1nCmlBKu', NULL, 'pengguna', '2023-06-02 07:17:39', '2023-06-02 07:17:39'),
(2, 'Farhan', 'farhan@gmai.com', NULL, '$2y$10$xv1OScpu1t4QcLwDeWQ1L.8DPXc2rfnvSsbtaAyTFDNDcZ.nrG4lW', NULL, 'pengguna', '2023-06-04 06:14:59', '2023-06-04 06:14:59');

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
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapal_laut`
--
ALTER TABLE `kapal_laut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kereta_api`
--
ALTER TABLE `kereta_api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan_kapal`
--
ALTER TABLE `pemesanan_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan_kereta`
--
ALTER TABLE `pemesanan_kereta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan_pesawat`
--
ALTER TABLE `pemesanan_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tiket_kapal`
--
ALTER TABLE `tiket_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
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
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kapal_laut`
--
ALTER TABLE `kapal_laut`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kereta_api`
--
ALTER TABLE `kereta_api`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maskapai`
--
ALTER TABLE `maskapai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemesanan_kapal`
--
ALTER TABLE `pemesanan_kapal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan_kereta`
--
ALTER TABLE `pemesanan_kereta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pemesanan_pesawat`
--
ALTER TABLE `pemesanan_pesawat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket_kapal`
--
ALTER TABLE `tiket_kapal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
