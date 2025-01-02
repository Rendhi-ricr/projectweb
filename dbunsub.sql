-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2025 at 04:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbunsub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` int NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'CUPITA SARI', 'cupitasarixiipa31617@gmail.com', '12345'),
(6, 'Rendhi Richardo Ardiansyah', 'rendhirichardo2@gmail.com', 'rendhi123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `id_biodata` int NOT NULL,
  `nik` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `kewarganegaraan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_telepon` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `asal_sekolah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jurusan_sekolah` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_lulus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nisn` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nilai_rata_rata` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `no_ijazah` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_ayah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nik_ayah` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nik_ibu` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pilihan_prodi1` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `pilihan_prodi2` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `id_akun` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`id_biodata`, `nik`, `jk`, `kewarganegaraan`, `alamat`, `no_telepon`, `asal_sekolah`, `jurusan_sekolah`, `tahun_lulus`, `nisn`, `nilai_rata_rata`, `no_ijazah`, `nama_ayah`, `nik_ayah`, `pekerjaan_ayah`, `nama_ibu`, `nik_ibu`, `pekerjaan_ibu`, `pilihan_prodi1`, `pilihan_prodi2`, `id_akun`) VALUES
(7, '123', 'Laki-Laki', 'Asia', 'hkajgsvda', '34567', 'fghjk', 'qwedfdfgfd', '1234', NULL, '99', NULL, '', NULL, '', '', NULL, '', '', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id_fakultas` int NOT NULL,
  `nama_fakultas` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_bayar` int NOT NULL,
  `id_akun` int NOT NULL,
  `tanggal_bayar` datetime NOT NULL,
  `bukti_bayar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status_bayar` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `metode_bayar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_bayar`, `id_akun`, `tanggal_bayar`, `bukti_bayar`, `status_bayar`, `metode_bayar`) VALUES
(1, 3, '2024-12-26 21:39:57', 'foto formal.jpg', 'Belum Diko', 'transfer_bank'),
(2, 4, '2024-12-27 17:33:56', 'foto formal.jpg', 'Belum Diko', 'transfer_bank'),
(4, 5, '2024-12-27 17:52:00', 'foto formal.jpg', 'Belum Diko', 'transfer_bank'),
(6, 1, '2025-01-02 08:55:26', 'Picture1.png', 'Belum Diko', 'e_wallet'),
(10, 6, '2025-01-02 09:59:24', 'Screenshot 2024-10-24 223034.png', 'Belum Diko', 'Transfer Bank');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int NOT NULL,
  `kode_prodi` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_prodi` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `id_fakultas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `e_mail` (`email`),
  ADD UNIQUE KEY `sandi` (`password`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`id_biodata`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `no_telepon` (`no_telepon`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `no_ijazah` (`no_ijazah`),
  ADD UNIQUE KEY `nik_ayah` (`nik_ayah`),
  ADD UNIQUE KEY `nik_ibu` (`nik_ibu`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD UNIQUE KEY `id_akun` (`id_akun`) USING BTREE;

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `kode_prodi` (`kode_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_akun` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  MODIFY `id_biodata` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id_fakultas` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_bayar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_prodi` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
