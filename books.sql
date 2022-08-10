-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 12:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `penulis`, `kategori`, `bahasa`, `harga`, `gambar`) VALUES
(1, 'Atomic Habits Perubahan Kecil yang Memberikan Hasil Luar Biasa', 'James Clear', 'self improvement', 'bahasa indonesia', 'Rp108.000', 'atomic-habits.jpg'),
(2, 'Cantik Itu Luka', 'Eka Kurniawan', ' fiksi', 'bahasa indonesia', 'Rp151.300', 'cantik-itu-luka.jpg'),
(3, 'Filosofi Teras', 'Henry Manampiring', 'fiksi', 'bahasa Indonesia', 'Rp98.000', 'filosofi-teras.jpg'),
(15, 'Laut Bercerita', 'Leila S. Chudori', 'fiksi', 'bahasa indonesia', 'Rp75.000', 'Laut-Bercerita.jpg'),
(16, 'Ikhlas Paling Serius', 'Fajar Sulaiman', 'novel', 'bahasa indonesia', 'Rp55.250', 'Ikhlas-Paling-Serius.jpg'),
(17, 'Ikhlas Beramal untuk Hidup Berkualitas', 'Ibnu Muhajir', 'Agama', 'bahasa indonesia', 'Rp69.520', 'Ikhlas-Beramal.jpg'),
(18, 'Berani Berubah Untuk Hidup Yang Lebih Baik', 'Mulasih Tary & Yazid Attafsir', 'self improvement', 'bahasa indonesia', 'Rp45.000', 'berani-berubah.jpg'),
(19, 'Rapijali', 'Dee Lestari', 'fiksi', 'bahasa indonesia', 'Rp84.150', 'Rapijali.jpg'),
(20, 'Microsoft Excel 2019 Untuk Pemula', 'Madcoms', 'komputer', 'bahasa indonesia', 'Rp88.000', 'MICROSOFT-EXCEL.jpg'),
(21, 'Analisis Perancangan Sistem Berorientasi Objek Dengan Uml E', 'Munawar', 'komputer', 'bahasa indonesia', 'Rp90.000', 'Analisis-Perancangan.jpg'),
(22, 'Elle Juni 2022', 'Majalah Gramedia', 'majalah', 'bahasa indonesia', 'Rp80.000', 'Elle-Juni.jpg'),
(23, 'Nova 1797 (Edisi 28 Juli - 03 Agustus 2022)', 'Majalah Gramedia', 'majalah', 'bahasa indonesia', 'Rp8.000', 'nova.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
