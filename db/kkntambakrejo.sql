-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 11:02 AM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkntambakrejo`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(25) UNSIGNED NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `judul`, `link`, `deskripsi`, `tgl`) VALUES
(1, 'Acara Bersih Desa', 'sendiki.jpg', ' Acara bersih pantai yang dilakukan di Pantai Sendiki pada hari jumat kemaren dilakukan bersamaan seluruh warga desa', '2017-09-09 01:23:54'),
(2, 'Acara 17 Agustusan', 'sendiki2.jpg', 'Acara bersih pantai yang dilakukan di Pantai Sendiki pada hari jumat kemaren dilakukan bersamaan seluruh warga desa', '2017-09-27 07:00:16'),
(3, 'Acara Petik Laut', 'sendiki2.jpg', 'Acara bersih pantai yang dilakukan di Pantai Sendiki pada hari jumat kemaren dilakukan bersamaan seluruh warga desa', '2017-09-21 08:00:00'),
(9, 'jalan ke pantai sendiki', '8_princess_mononoke1.jpg', 'jlaan-jalan yuk', '2017-09-09 02:42:15'),
(10, 'coba pagination', '10177375_1437558363151535_7689344396591592710_n.jpg', 'hahahahhaa', '2017-09-09 03:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(25) UNSIGNED NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `judul`, `link`, `tgl`, `kategori`) VALUES
(2, 'Jalan-jalan ke pantai 2', 'sendiki.jpg', '2017-09-09 01:25:19', 'Pantai Sendiki'),
(3, 'Jalan-jalan ke pantai 3', 'sendiki3.jpg', '2017-09-05 11:24:00', 'pantai'),
(4, 'Jalan-jalan ke pantai 4', 'sendiki.jpg', '2017-09-21 15:04:00', 'pantai'),
(5, 'Jalan-jalan ke pantai 5', 'sendiki.jpg', '2017-09-05 05:00:00', 'pantai'),
(6, 'Jalan-jalan ke pantai 6', 'sendiki3.jpg', '2017-09-14 08:00:00', 'pantai');

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `id` int(25) UNSIGNED NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `harga` int(20) UNSIGNED NOT NULL,
  `kontak` varchar(10) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `available` char(10) NOT NULL,
  `paket` varchar(200) NOT NULL,
  `gambar_id` int(25) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(25) UNSIGNED NOT NULL,
  `gambar_id` int(25) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` varchar(200) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(25) UNSIGNED NOT NULL,
  `judul` varchar(200) NOT NULL,
  `link` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambar_id` (`gambar_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambar_id` (`gambar_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
