-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 03:29 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `email`, `password`) VALUES
(5, 'muhammad al farizzi', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(100) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Teknik Komputer & Jaringan'),
(3, 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nilai_akhir` int(100) NOT NULL,
  `jurusan_1` varchar(100) NOT NULL,
  `jurusan_2` varchar(100) NOT NULL,
  `jurusan_rekomendasi` varchar(100) DEFAULT NULL,
  `stat` varchar(100) NOT NULL,
  `tgl_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_user`, `nama_lengkap`, `sekolah_asal`, `nisn`, `nilai_akhir`, `jurusan_1`, `jurusan_2`, `jurusan_rekomendasi`, `stat`, `tgl_daftar`) VALUES
(102, 17, 'muhammad al farizzi', 'smpn 2 gunuang omeh', '180700866', 87, 'teknik komputer & jaringan', 'rekayasa perangkat lunak', 'rekayasa perangkat lunak', 'Menunggu Keputusan', '2020-04-02 02:04:44'),
(107, 18, 'yoki hendrika', 'smpn 2 gunuang omeh', '180700895', 78, 'multimedia', 'rekayasa perangkat lunak', 'multimedia', 'Menunggu Keputusan', '2020-04-02 02:04:29'),
(108, 20, 'asti', 'smpn mungka', '909090', 87, 'multimedia', 'teknik komputer & jaringan', 'teknik komputer & jaringan', 'Menunggu Keputusan', '2020-04-02 02:04:35'),
(109, 19, 'maretabeza purnama', 'smpn 2 suliki', '180700865', 88, 'teknik komputer & jaringan', 'rekayasa perangkat lunak', 'rekayasa perangkat lunak', 'Menunggu Keputusan', '2020-04-02 02:04:20'),
(110, 21, 'muhammad al ghufran', 'smpn mungka', '180700867', 86, 'rekayasa perangkat lunak', 'multimedia', 'rekayasa perangkat lunak', 'Menunggu Keputusan', '2020-04-02 02:04:29'),
(111, 22, 'samsul', 'smpn anta branta', '18070066', 55, 'rekayasa perangkat lunak', 'rekayasa perangkat lunak', '', 'Ditolak', '2020-04-02 02:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `terima`
--

CREATE TABLE `terima` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nisn`, `username`, `email`, `password`) VALUES
(17, 'muhammad al farizzi', '180700866', 'alfarizzi12', 'malfarizzi13@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0'),
(18, 'yoki hendrika', '180700895', 'yoki035', 'yoki035@gmail.com', '220466675e31b9d20c051d5e57974150'),
(19, 'maretabeza purnama', '180700865', 'sipur', 'pur@gmail.com', '220466675e31b9d20c051d5e57974150'),
(20, 'asti', '909090', 'asti12', 'asti@gmail.com', '220466675e31b9d20c051d5e57974150'),
(21, 'muhammad al ghufran', '180700867', 'affan12', 'affan@gmail.com', '220466675e31b9d20c051d5e57974150'),
(22, 'samsul', '18070066', 'samsul12', 'samsul@gmail.com', '220466675e31b9d20c051d5e57974150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `terima`
--
ALTER TABLE `terima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `terima`
--
ALTER TABLE `terima`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
