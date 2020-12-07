-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 11:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regresi_linier`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(4) NOT NULL,
  `laporan_polisi` varchar(200) NOT NULL,
  `tanggal_lapor` date NOT NULL,
  `nama_pelapor` varchar(200) NOT NULL,
  `umur` int(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `no_hp` int(200) NOT NULL,
  `alamat_tkp` varchar(200) NOT NULL,
  `uraian_singkat` text NOT NULL,
  `nama_motor` varchar(200) NOT NULL,
  `no_rangka` varchar(200) NOT NULL,
  `no_mesin` varchar(200) NOT NULL,
  `pasal` varchar(200) NOT NULL,
  `terlapor` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `laporan_tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `laporan_polisi`, `tanggal_lapor`, `nama_pelapor`, `umur`, `jenis_kelamin`, `agama`, `pekerjaan`, `no_hp`, `alamat_tkp`, `uraian_singkat`, `nama_motor`, `no_rangka`, `no_mesin`, `pasal`, `terlapor`, `unit`, `laporan_tahun`) VALUES
(1, 'a', '2020-12-01', 'a', 2, 'a', 'a', 'a', 0, 'a', 'zxcvnm', 'a', '1a', '1a', 'a', 'a', 'a', '2020-12-04'),
(2, 'b', '2020-12-01', 'b', 4, 'b', 'b', 'b', 1, 'b', 'bqwrtt', 'b', '2b', '2b', 'b', 'b', 'b', '2020-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `piket`
--

CREATE TABLE `piket` (
  `id_piket` int(4) NOT NULL,
  `nama_piket` varchar(200) NOT NULL,
  `waktu_piket` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `piket`
--

INSERT INTO `piket` (`id_piket`, `nama_piket`, `waktu_piket`) VALUES
(1, 'Kristovel Edoway', '13:00:00'),
(2, 'Marlon Wanggai', '13:11:30'),
(3, 'bask', '13:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_rs` int(4) NOT NULL,
  `nama_rs` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_rs`, `nama_rs`) VALUES
(1, 'a'),
(2, 'b'),
(3, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'kris', '12345', 'admin'),
(2, 'marlon', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piket`
--
ALTER TABLE `piket`
  ADD PRIMARY KEY (`id_piket`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `piket`
--
ALTER TABLE `piket`
  MODIFY `id_piket` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_rs` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
