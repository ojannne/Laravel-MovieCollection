-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2025 pada 02.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `release_date` date NOT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `nama`, `sutradara`, `genre`, `release_date`, `rating`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'The Matrix', 'Lana Wachowski, Andy Wachowski', 'sci-fi', '1999-03-30', 8.7, '1735624513_1735453870_Matrix.jpeg', NULL, '2024-12-30 22:55:13'),
(3, 'Interstellar', 'Christopher Nolan\r\n', 'Science Fiction', '2014-11-07', 8.6, 'Interstellar.jpeg', NULL, NULL),
(4, 'Kingsman: The Secret Service', 'Matthew Vaughn', 'action', '2015-02-13', 8.7, 'Kingsman The Secret Service.jpeg', NULL, '2024-12-29 07:01:17'),
(5, 'kimetsu no yaiba', 'Haruo Sotozaki', 'anime', '2019-04-06', 10.1, 'kimetsu.jpeg', NULL, '2024-12-29 07:03:08'),
(6, 'attack on titan', 'Shinji Higuchi', 'anime', '2013-04-07', 10.1, 'Attack on Titan.jpeg', NULL, '2024-12-29 07:02:42'),
(7, 'Naruto Shipudden', 'Hajime Kamegaki', 'anime', '2015-08-10', 9.9, 'Naruto Shipudden.jpg', NULL, '2024-12-29 07:04:11'),
(8, 'King Kng', 'Peter Jackson', 'action', '2023-09-08', 8.4, 'King Kong (2005).jpeg', NULL, '2024-12-29 07:03:37'),
(9, 'Kaiju No.8', 'Shigeyuki Miya', 'anime', '2024-02-11', 9.9, 'Kaiju No.8.jpg', NULL, '2024-12-29 07:04:39'),
(10, 'Inception', 'Christopher Nolan', 'sci-fi', '2010-12-20', 9.6, 'Inception.jpg', NULL, '2024-12-29 07:05:37'),
(11, 'Attack On Titan s2', 'Shinji Higuchi', 'anime', '2018-02-12', 9.9, 'Attack On Titan.jpg', NULL, '2024-12-29 07:06:03'),
(12, 'Jujutsu Kaisen', 'Sunghoo Park,', 'anime', '2019-02-21', 9.1, 'Jujutsu Kaisen.jpg', NULL, '2024-12-29 07:05:08'),
(21, 'Tenet', 'Christopher Nolan', 'action', '2010-02-12', 9.9, 'Tenet.jpg', NULL, NULL),
(23, 'Titanic', 'James Cameron', 'sci-fi', '1998-01-05', 9.8, 'Titanic.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `name`, `address`, `city`, `state`, `link_maps`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'Cinema XXI Plaza Indonesia', 'Jl. M.H. Thamrin No.28-30', 'Jakarta', 'DKI Jakarta', 'https://maps.app.goo.gl/PT6s8Pe1mJYxRq4G8', '10350', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(2, 'CGV Grand Indonesia', 'Jl. M.H. Thamrin No.1', 'Jakarta', 'DKI Jakarta', 'https://maps.app.goo.gl/BZWsqBMVzQMznhYE7', '10310', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(3, 'Cinepolis Plaza Senayan', 'Jl. Asia Afrika No.8', 'Jakarta', 'DKI Jakarta', 'https://maps.app.goo.gl/3k8s8Pe1mJYxRq4G8', '10270', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(4, 'Cinema XXI Trans Studio Mall Bandung', 'Jl. Gatot Subroto No.289', 'Bandung', 'Jawa Barat', 'https://maps.app.goo.gl/4k8s8Pe1mJYxRq4G8', '40273', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(5, 'CGV Paris Van Java', 'Jl. Sukajadi No.137-139', 'Bandung', 'Jawa Barat', 'https://maps.app.goo.gl/5k8s8Pe1mJYxRq4G8', '40162', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(6, 'Cinepolis Plaza Renon', 'Jl. Raya Puputan No.210', 'Denpasar', 'Bali', 'https://maps.app.goo.gl/6k8s8Pe1mJYxRq4G8', '80234', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(7, 'Cinema XXI Tunjungan Plaza', 'Jl. Basuki Rahmat No.8-12', 'Surabaya', 'Jawa Timur', 'https://maps.app.goo.gl/7k8s8Pe1mJYxRq4G8', '60261', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(8, 'CGV Marvell City', 'Jl. Ngagel No.123', 'Surabaya', 'Jawa Timur', 'https://maps.app.goo.gl/8k8s8Pe1mJYxRq4G8', '60246', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(9, 'Cinepolis Lippo Plaza Jogja', 'Jl. Laksda Adisucipto No.32-34', 'Yogyakarta', 'DI Yogyakarta', 'https://maps.app.goo.gl/9k8s8Pe1mJYxRq4G8', '55221', '2024-12-29 19:35:05', '2024-12-29 19:35:05'),
(11, 'Mega Bekasi XXI', 'Mega Bekasi Hypermall, Jl. Ahmad Yani No.1 Lantai 5,', 'action', 'action', 'https://maps.app.goo.gl/kfRTthnn8Gp95SSp8', '17141', '2024-12-29 20:05:29', '2024-12-29 20:05:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_12_27_233818_create_film_table', 1),
(7, '2024_12_27_233828_create_genre_table', 1),
(8, '2024_12_27_233840_create_pengguna_table', 1),
(9, '2024_12_27_233849_create_penerbit_table', 1),
(10, '2024_12_28_004657_create_pengguna_table', 2),
(11, '2024_12_28_055406_create__pengguna_table', 3),
(12, '2024_12_28_055412_create__penerbit_table', 3),
(13, '2024_12_28_055421_create_genre_table', 3),
(14, '2024_12_28_055426_create_film_table', 3),
(15, '2024_12_28_061221_create_film_table', 4),
(16, '2024_12_28_063235_create_film_table', 5),
(17, '2024_12_28_064028_create_film_table', 6),
(18, '2024_12_29_090125_create_tikcet_table', 7),
(19, '2024_12_29_093211_create_tikcets_table', 8),
(20, '2024_12_29_134138_create_location_table', 9),
(21, '2024_12_29_134247_create_location_table', 9),
(22, '2024_12_30_004917_create_tiket_table', 10),
(23, '2024_12_30_022526_create_location_table', 11),
(24, '2024_12_30_023031_create_lokasi_table', 12),
(25, '2024_12_30_051106_create_tiket_table', 13),
(26, '2024_12_30_072818_create_person_table', 14),
(27, '2024_12_30_091912_create_person_table', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id`, `name`, `event`, `event_date`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', 'Interstellar', '2024-12-01', 1, 'Rp.50.000', '2024-12-29 22:29:24', '2025-01-01 18:32:12'),
(2, 'Siti Aminah', 'Dua Hati Biru', '2024-12-05', 1, 'Rp.60.000', '2024-12-29 22:29:24', '2025-01-01 18:32:29'),
(3, 'Andi Wijaya', 'Dua Hati Biru', '2024-12-10', 1, 'Rp.80.000', '2024-12-29 22:29:24', '2025-01-01 18:33:20'),
(4, 'Rina Sari', 'Agak Laen', '2024-12-15', 1, 'Rp.100.000', '2024-12-29 22:29:24', '2025-01-01 18:33:49'),
(5, 'Dewi Lestari', 'The Wild Robot', '2024-12-20', 1, 'Rp.50.000', '2024-12-29 22:29:24', '2025-01-01 18:34:03'),
(7, 'Fauzan n', 'Interstellar', '2025-02-01', 1, 'Rp.50.000', '2024-12-29 23:14:03', '2025-01-01 18:34:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
