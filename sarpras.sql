-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 11:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(1) NOT NULL,
  `akses` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `akses`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'ktu'),
(4, 'kalab');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `jumlah`, `satuan`, `created_at`, `updated_at`) VALUES
(1, 'meja', 1, 'unit', '2016-06-09 16:36:57', '2016-06-09 16:36:57'),
(2, 'kursi', 50, 'unit', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(3, 'sofa', 5, 'unit', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(4, 'gelas', 5, 'lusin', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(5, 'lcd', 5, 'unit', '2016-06-09 16:36:58', '2016-06-09 16:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `ruangan_id` int(3) UNSIGNED NOT NULL,
  `barang_id` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`ruangan_id`, `barang_id`) VALUES
(1, 2),
(3, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_kuliah`
--

CREATE TABLE `tb_jadwal_kuliah` (
  `id` int(10) UNSIGNED NOT NULL,
  `hari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_matkul` int(10) UNSIGNED NOT NULL,
  `id_ruangan` int(10) UNSIGNED NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_jadwal_kuliah`
--

INSERT INTO `tb_jadwal_kuliah` (`id`, `hari`, `id_matkul`, `id_ruangan`, `jam_masuk`, `jam_keluar`, `created_at`, `updated_at`) VALUES
(1, 'Senin', 1, 1, '08:50:00', '10:30:00', '2016-06-09 16:36:59', '2016-06-09 16:36:59'),
(2, 'Senin', 2, 2, '08:50:00', '10:30:00', '2016-06-09 16:36:59', '2016-06-09 16:36:59'),
(3, 'Senin', 3, 3, '08:50:00', '10:30:00', '2016-06-09 16:36:59', '2016-06-09 16:36:59'),
(4, 'Selasa', 2, 4, '08:50:00', '10:30:00', '2016-06-09 16:36:59', '2016-06-09 16:36:59'),
(5, 'Selasa', 3, 4, '14:20:00', '16:30:00', '2016-06-09 16:36:59', '2016-06-09 16:36:59'),
(6, 'Selasa', 4, 1, '08:50:00', '10:30:00', '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(7, 'Rabu', 3, 5, '08:50:00', '10:30:00', '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(8, 'Kamis', 4, 6, '08:50:00', '10:30:00', '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(9, 'Jumat', 5, 7, '08:50:00', '10:30:00', '2016-06-09 16:37:00', '2016-06-09 16:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_matkul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dosen_pengampu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id`, `nama_matkul`, `dosen_pengampu`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(2, 'PBO 1', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(3, 'PBO 2', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(4, 'Algo 1', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(5, 'Algo 2', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(6, 'TRPL', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58'),
(7, 'Multimedia', '', '2016-06-09 16:36:58', '2016-06-09 16:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_barang`
--

CREATE TABLE `tb_peminjaman_barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_peminjam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `barang_id` int(10) UNSIGNED NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  `tgl_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_pinjam` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_peminjaman_barang`
--

INSERT INTO `tb_peminjaman_barang` (`id`, `id_user`, `nama_peminjam`, `nama_kegiatan`, `barang_id`, `jumlah_pinjam`, `tgl_pinjam`, `tgl_selesai`, `status_pinjam`, `created_at`, `updated_at`) VALUES
(1, 'bem', 'ika', 'Discovery', 1, 3, '2017-12-17 06:36:49', '2016-06-17 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-10 10:53:53'),
(2, 'bem', 'ika', 'Discovery', 2, 3, '2017-12-17 06:36:53', '2016-06-17 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-10 10:54:50'),
(3, 'bem', 'ika', 'Discovery', 3, 3, '2017-12-17 06:36:56', '2016-06-17 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(4, 'bem', 'ika', 'Discovery', 4, 3, '2017-12-17 06:36:59', '2016-06-17 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(5, 'bem', 'ika', 'Discovery', 5, 3, '2017-12-17 06:37:04', '2016-06-17 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(6, 'himasif', 'lutfi', 'Expo IT', 1, 2, '2017-12-17 06:37:13', '2016-06-21 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(7, 'himasif', 'lutfi', 'Expo IT', 2, 2, '2017-12-17 06:37:21', '2016-06-21 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(8, 'himasif', 'lutfi', 'Expo IT', 3, 2, '2017-12-17 06:37:24', '2016-06-21 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(9, 'himasif', 'lutfi', 'Expo IT', 4, 3, '2017-12-17 06:37:27', '2016-06-21 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(10, 'himasif', 'lutfi', 'Expo IT', 5, 3, '2017-12-17 06:37:30', '2016-06-21 09:30:00', 0, '2016-06-09 16:37:00', '2016-06-09 16:37:00'),
(11, 'bem', 'riya', 'dfghj', 1, 20, '2017-12-17 08:39:55', '0000-00-00 00:00:00', 1, NULL, NULL),
(12, 'maco', 'acek', 'htc', 4, 50, '2017-12-17 08:41:21', '2017-12-07 17:00:00', 3, '2017-12-02 17:00:00', '2017-12-02 17:00:00'),
(13, 'himasif', 'umaru', 'wisuda', 1, 12, '2017-12-17 08:40:14', '2017-12-18 17:00:00', 1, '2017-12-16 17:00:00', '2017-12-16 17:00:00'),
(14, 'himasif', 'shoma', 'memasak', 4, 1, '2017-12-17 08:39:47', '2017-12-18 17:00:00', 2, '2017-12-16 17:00:00', '2017-12-16 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman_ruangan`
--

CREATE TABLE `tb_peminjaman_ruangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_peminjam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ruangan_id` int(10) UNSIGNED NOT NULL,
  `tgl_dipakai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_pinjam` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_peminjaman_ruangan`
--

INSERT INTO `tb_peminjaman_ruangan` (`id`, `id_user`, `nama_peminjam`, `nama_kegiatan`, `ruangan_id`, `tgl_dipakai`, `tgl_selesai`, `status_pinjam`, `created_at`, `updated_at`) VALUES
(12, 'bem', 'lery', 'Acara 1', 3, '2017-12-17 08:41:36', '2016-12-05 03:00:00', 3, NULL, '2016-06-26 06:44:16'),
(13, 'bem', 'kaka', 'Acara 2', 6, '2017-12-17 09:49:53', '2016-06-13 02:00:00', 2, NULL, '2016-06-26 06:54:21'),
(18, 'bpm', 'nanda', 'Kegiatan 1', 7, '2017-12-17 10:00:58', '2016-12-08 02:00:00', 2, NULL, NULL),
(19, 'bem', 'nurul', 'Kegiatan 2', 2, '2017-12-17 07:36:48', '2016-12-01 03:00:00', 0, NULL, NULL),
(23, 'etalase', 'ilvi', 'tes 1', 10, '2017-12-17 10:01:30', '0000-00-00 00:00:00', 1, NULL, NULL),
(24, 'laos', 'angga', 'tes 123', 8, '2017-12-17 10:01:03', '2016-12-13 17:00:00', 0, NULL, '2016-12-19 20:12:25'),
(26, 'binary', 'khaira', 'bbb', 9, '2017-12-17 10:01:34', '2017-09-04 17:00:00', 1, NULL, NULL),
(30, 'himasif', 'abbi', 'picture', 1, '2017-12-17 07:35:31', '2017-12-25 17:00:00', 1, '2017-12-02 17:00:00', '2017-12-02 17:00:00'),
(31, 'maco', 'reni', 'sisfo', 7, '2017-12-17 07:35:20', '2017-12-20 17:00:00', 1, '2017-12-15 17:00:00', '2017-12-15 17:00:00'),
(32, 'himasif', 'ina', 'rapat kerja', 1, '2017-12-17 08:17:46', '2017-12-19 17:00:00', 0, '2017-12-16 17:00:00', '2017-12-16 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanggung_jawab`
--

CREATE TABLE `tb_penanggung_jawab` (
  `id` int(3) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_penanggung_jawab`
--

INSERT INTO `tb_penanggung_jawab` (`id`, `nama_pj`, `username`) VALUES
(1, 'Nelly Oktavia, S. Si', 'kapemro'),
(2, 'Wiji Utami, S.E., M.Si.', 'sek2'),
(3, 'Muhammad Arif', 'kabasda'),
(4, 'Windi Eka Yulia Retnani', 'karpl'),
(5, 'Yanuar Nurdiansyah', 'kagis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `letak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penanggung_jawab_id` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id`, `nama_ruangan`, `letak`, `penanggung_jawab_id`, `created_at`, `updated_at`) VALUES
(1, 'Aula PSSI', 'Lantai 2 PSSI', 2, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(2, 'Ruang Kuliah 2', 'Lantai 2 PSSI', 2, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(3, 'Ruang Kuliah 3', 'Lantai 2 PSSI', 2, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(4, 'Ruang Kuliah 4', 'Lantai 2 PSSI', 2, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(5, 'Ruang Kuliah 5', 'Lantai 1 PSSI', 2, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(6, 'Lab. Pemrograman', 'Lantai 1 PSSI', 1, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(7, 'Lab. RPL', 'Lantai 1 PSSI', 4, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(8, 'Lab. Self Access', 'Lantai 2 PSSI', 2, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(9, 'Lab. Basis Data', 'Lantai 2 PSSI', 3, '2016-06-09 16:36:56', '2016-06-09 16:36:56'),
(10, 'Lab. GIS', 'Lantai 2 PSSI', 5, '2016-06-09 16:36:56', '2016-06-09 16:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` tinyint(1) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(0, 'Belum Diverifikasi'),
(1, 'Verifikasi KTU'),
(2, 'Verifikasi Sek 2'),
(3, 'Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `alamat`, `password`, `id_akses`) VALUES
('admin', 'Admin', 'ahmad@gmail.com', 'Jl. Jawa VII', '21232f297a57a5a743894a0e4', 1),
('bem', 'bem ilkom', 'bemilkom@email.com', 'ilmu komputer unej', 'd3c654d99bdfaf101e012bfe2', 2),
('binary', 'binary', 'binary@email.com', 'ilkom', '9d7183f16acce70658f686ae7', 2),
('bpm', 'bpm ilkom', 'bpmilkom@email.ocm', 'ilkom unej', '2dc4e4a6fbeab8a7f828efa9a', 2),
('cremeh', 'cremeh', 'ika@gmail.com', 'cremeh', 'd4089db6d22f2359f5d515342', 2),
('etalase', 'etalase', 'etalase@email.com', 'ilkom unej', 'da4f5cdfea896bceaf66e582d', 2),
('himasif', 'himasif', 'himasifuj@gmail.com', 'pssi', '6628a54ce6226a0126f2cb6af', 2),
('ika', 'Nasyika', 'dnasyika@gmail.com', 'Jl. Jawa 2 no. 26 ', '68bc655e74400bd2eb68ed0f6', 2),
('kabasda', 'arif', 'arif@email.com', 'jember', '7a0204c146b69faccdef48924', 4),
('kagis', 'yanuar', 'yanuar@email.com', 'yogyakarta', '11dde6b2f2e430170a6abb0f5', 4),
('kapemro', 'nelly', 'nelly@email.com', 'jember', '34507ad142b13026cc338b809', 4),
('karpl', 'windy', 'windy@email.com', 'jember', '35e8e5eeca5aa8fdc910066c1', 4),
('ktu', 'Kepala TU', 'ktu@gmail.com', 'Jl. Kalimantan 8 no. 27 Jember', '2e18bc3df6490504a467d30c1', 3),
('laos', 'laos', 'laosuj@email.com', 'ilkom unej', '5495a2f9ee0ac16f7ee35878f', 2),
('maco', 'maco ilkom', 'maco@emali.com', 'ilkom unej', 'f4ada397ef64cd8d127124799', 2),
('mahasiswa', 'Mahasiswa ', 'nasyika@gmail.com', 'Jl. Jawa 2 E no. 6 Jember', '5787be38ee03a9ae5360f54d9', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD KEY `ruangan_id` (`ruangan_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indexes for table `tb_jadwal_kuliah`
--
ALTER TABLE `tb_jadwal_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_kuliah_id_matkul_index` (`id_matkul`),
  ADD KEY `jadwal_kuliah_id_ruangan_index` (`id_ruangan`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_peminjaman_barang`
--
ALTER TABLE `tb_peminjaman_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_barang_id_barang_index` (`barang_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_peminjaman_ruangan`
--
ALTER TABLE `tb_peminjaman_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_ruangan_ruangan_id_index` (`ruangan_id`),
  ADD KEY `status_pinjam` (`status_pinjam`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penanggung_jawab`
--
ALTER TABLE `tb_penanggung_jawab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penanggung_jawab_id` (`penanggung_jawab_id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id hak akses` (`id_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_jadwal_kuliah`
--
ALTER TABLE `tb_jadwal_kuliah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_peminjaman_barang`
--
ALTER TABLE `tb_peminjaman_barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_peminjaman_ruangan`
--
ALTER TABLE `tb_peminjaman_ruangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjaman_ruangan`
--
ALTER TABLE `tb_peminjaman_ruangan`
  ADD CONSTRAINT `tb_peminjaman_ruangan_ibfk_1` FOREIGN KEY (`status_pinjam`) REFERENCES `tb_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `tb_akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
