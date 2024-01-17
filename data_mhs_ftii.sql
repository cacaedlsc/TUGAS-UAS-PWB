-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 10:21 PM
-- Server version: 10.4.24-MariaDB-log
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_mhs_ftii`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `alamat_tetap`
-- (See below for the actual view)
--
CREATE TABLE `alamat_tetap` (
`id` int(11)
,`nim` varchar(20)
,`alamat` text
,`RT` varchar(10)
,`RW` varchar(10)
,`kelurahan` varchar(255)
,`kecamatan` varchar(255)
,`kode_pos` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `asal_sekolah`
--

CREATE TABLE `asal_sekolah` (
  `nim` varchar(20) DEFAULT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun_lulus` int(10) NOT NULL,
  `nilai_sekolah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asal_sekolah`
--

INSERT INTO `asal_sekolah` (`nim`, `sekolah_asal`, `jurusan`, `tahun_lulus`, `nilai_sekolah`) VALUES
('2201530047', 'SMA N 2 Semarang', 'IPS', 2010, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `nim` varchar(20) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `hidup_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `agama_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `hidup_ibu` varchar(100) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL,
  `no_telp_ortu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`nim`, `nama_ayah`, `agama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `hidup_ayah`, `nama_ibu`, `agama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `hidup_ibu`, `alamat_ortu`, `no_telp_ortu`) VALUES
('123456', 'Edy Cahyono', 'Islam', 'S1', 'PNS', 'Hidup', 'Wulan Suci', 'Islam', 'D3', '-', 'MD', 'Semarang', '00000000000'),
('2201530047', 'Edy Cahyono, Drs', 'Islam', 'S1', 'Wiraswasta', 'Hidup', 'M. S. Wulan Suci', 'Islam', 'D3', 'ART', 'Hidup', 'Semarang', '00000000000');

-- --------------------------------------------------------

--
-- Table structure for table `pribadi`
--

CREATE TABLE `pribadi` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `RT` varchar(10) NOT NULL,
  `RW` varchar(10) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `telepon` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pribadi`
--

INSERT INTO `pribadi` (`id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `RT`, `RW`, `kelurahan`, `kecamatan`, `kode_pos`, `telepon`, `email`) VALUES
(1, '123456', 'Salsabilla Edlanda Putri', 'Jakarta', '1990-01-01', 'Laki-Laki', 'Jl. Contoh No. 123', '03', '07', 'Kelurahan Contoh', 'Kecamatan Contoh', 12345, 1234567890, 'john.doe@example.com'),
(3, '2201530012', 'Dylan', 'Semarang', '2005-12-09', 'Laki Laki', 'Tembalang', '03', '07', 'Pedurungan', 'Plamongansari', 50778, 0, 'salsaputri790@yahoo.com'),
(4, '2201530047', 'Karina', 'Semarang', '2000-11-12', 'Perempuan', 'Demak', '03', '07', 'Pedurungan', 'Plamongansari', 50778, 0, 'psalsabilla88@gmail.com');

-- --------------------------------------------------------

--
-- Structure for view `alamat_tetap`
--
DROP TABLE IF EXISTS `alamat_tetap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alamat_tetap`  AS SELECT `pribadi`.`id` AS `id`, `pribadi`.`nim` AS `nim`, `pribadi`.`alamat` AS `alamat`, `pribadi`.`RT` AS `RT`, `pribadi`.`RW` AS `RW`, `pribadi`.`kelurahan` AS `kelurahan`, `pribadi`.`kecamatan` AS `kecamatan`, `pribadi`.`kode_pos` AS `kode_pos` FROM `pribadi``pribadi`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  ADD KEY `asal_sekolah_ibfk_1` (`nim`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pribadi`
--
ALTER TABLE `pribadi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pribadi`
--
ALTER TABLE `pribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  ADD CONSTRAINT `asal_sekolah_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `pribadi` (`nim`);

--
-- Constraints for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `pribadi` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
