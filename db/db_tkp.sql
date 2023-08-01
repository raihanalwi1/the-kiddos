-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 03:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `tanggal_kelas` date NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `usia` varchar(8) NOT NULL,
  `usia_kelas` enum('Baby','Toddler') NOT NULL,
  `lokasi_kelas` enum('Rawa Mangun','JGC','Duren Sawit','Bekasi') NOT NULL,
  `q1` enum('iya','tidak') NOT NULL,
  `q1_ex` tinytext NOT NULL,
  `q2` enum('iya','tidak') NOT NULL,
  `q2_ex` tinytext NOT NULL,
  `q3` enum('iya','tidak') NOT NULL,
  `q3_ex` tinytext NOT NULL,
  `q4` enum('iya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id_registrasi`, `nama_anak`, `tanggal_kelas`, `tanggal_registrasi`, `usia`, `usia_kelas`, `lokasi_kelas`, `q1`, `q1_ex`, `q2`, `q2_ex`, `q3`, `q3_ex`, `q4`) VALUES
(3, 'marpus', '2023-08-02', '0000-00-00', '1', 'Baby', '', '', 'karena saya ganteng', 'tidak', '', 'tidak', '', ''),
(4, 'siri', '2023-08-04', '0000-00-00', '2', '', 'Duren Sawit', '', 'sebenarnya saya nyob', 'tidak', '', '', 'jelaskan kenaappa', ''),
(5, 'paijo', '2023-08-04', '0000-00-00', '1', 'Toddler', 'Duren Sawit', 'iya', 'tes', 'iya', 'tes', 'iya', 'tes', 'iya'),
(7, 'dinda kamila alwi no', '2023-08-05', '0000-00-00', '1', 'Baby', 'Bekasi', 'iya', 'memiliki tingkat kep', 'tidak', '', 'tidak', '', 'iya'),
(8, 'diego costa mirano patusiam', '2023-08-05', '0000-00-00', '1', 'Toddler', 'JGC', 'iya', 'saya akan menjelaskan mengapa ini bisa terjadi dikarenakan saya mabuk  iya, saya akan menjelaskan mengapa ini bisa terjadi dikarenakan saya mabuk', 'iya', 'coba saja anda bayangkan, betapa kesalnya dirimu yang jelek itu', 'tidak', '', 'iya'),
(9, 'alwi', '2023-08-05', '0000-00-00', '1', 'Toddler', '', 'tidak', '', 'tidak', '', 'tidak', '', 'iya'),
(10, 'alwi', '2023-08-05', '0000-00-00', '1', 'Toddler', '', 'tidak', '', 'tidak', '', 'tidak', '', 'tidak'),
(11, 'momi losi', '2023-08-05', '0000-00-00', '8', 'Baby', '', 'tidak', '', 'tidak', '', 'tidak', '', 'tidak'),
(12, 'rossi valentino', '2023-08-05', '2023-07-31', '10', 'Baby', 'Rawa Mangun', 'tidak', '', 'tidak', '', 'tidak', '', 'iya'),
(13, 'iwan fals', '2023-08-05', '2023-07-31', '1', 'Baby', 'JGC', 'tidak', '', 'tidak', '', 'tidak', '', 'iya'),
(14, 'ivan guwawan', '2023-08-05', '2023-07-31', '1', 'Baby', 'Duren Sawit', 'tidak', '', 'tidak', '', 'tidak', '', 'iya'),
(15, 'mariam sumarni', '2023-08-05', '2023-07-31', '1', 'Baby', 'Duren Sawit', 'tidak', '', 'tidak', '', 'tidak', '', 'iya'),
(16, 'valentino jebret', '2023-08-05', '2023-07-31', '8', 'Baby', 'Bekasi', 'tidak', '', 'tidak', '', 'iya', 'ada riwayat penyakit pada anak saya yaitu susah move on dan tidak bisa dihilangkan', 'iya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `level` enum('Murid','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama_user`, `level`) VALUES
(1, 'admin@gmail.com', 'admin', 'alwi', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
