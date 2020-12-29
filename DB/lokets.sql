-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 08:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokets`
--

CREATE TABLE `lokets` (
  `id` int(11) NOT NULL,
  `no_berkas` varchar(30) NOT NULL,
  `proses` varchar(100) NOT NULL,
  `no_hak` int(11) NOT NULL,
  `jenis_hak` varchar(11) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `layanan_id` varchar(50) NOT NULL,
  `petugas_id` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokets`
--

INSERT INTO `lokets` (`id`, `no_berkas`, `proses`, `no_hak`, `jenis_hak`, `desa`, `kecamatan`, `layanan_id`, `petugas_id`, `created_at`, `updated_at`) VALUES
(1, '213/2020', 'CEK/05/12/2020', 560, 'HM', 'Tengah', 'Cibinong', 'Roya', 'Jamaludin', '2020-12-29 06:42:38', '2020-12-29 06:42:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokets`
--
ALTER TABLE `lokets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokets`
--
ALTER TABLE `lokets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
