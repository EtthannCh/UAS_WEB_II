-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 09:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_webii`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE `tbl_catalog` (
  `id_catalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_merk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_catalog`
--

INSERT INTO `tbl_catalog` (`id_catalog`, `id_kategori`, `kode_merk`) VALUES
(1, 1, 'CHG'),
(2, 1, 'GR'),
(3, 1, 'LG'),
(4, 1, 'PNC'),
(5, 1, 'PLY'),
(6, 1, 'SMG'),
(7, 1, 'SHP'),
(8, 1, 'TCL'),
(9, 2, 'GR'),
(10, 2, 'SHP'),
(11, 3, 'GR'),
(12, 3, 'LG'),
(13, 3, 'PNC'),
(14, 3, 'PLY'),
(15, 3, 'SMG'),
(16, 3, 'SHP'),
(17, 4, 'LG'),
(18, 4, 'PNC'),
(19, 4, 'PLY'),
(20, 4, 'SMG'),
(21, 4, 'SHP'),
(22, 5, 'LG'),
(23, 5, 'SMG'),
(24, 5, 'SHP'),
(25, 6, 'PNC'),
(55, 7, 'CHG'),
(56, 7, 'LG'),
(57, 7, 'PLY'),
(58, 7, 'SHP'),
(59, 7, 'TCL'),
(60, 8, 'CHG'),
(61, 8, 'LG'),
(62, 8, 'PNC'),
(63, 8, 'PLY'),
(64, 8, 'SMG'),
(65, 8, 'SHP'),
(66, 9, 'LG'),
(67, 9, 'PNC'),
(68, 9, 'PLY'),
(69, 9, 'SMG'),
(70, 9, 'SHP'),
(71, 9, 'TCL'),
(72, 10, 'LG'),
(73, 10, 'PNC'),
(74, 10, 'SMG'),
(75, 10, 'SHP'),
(76, 11, 'SHP'),
(77, 12, 'CHG'),
(78, 12, 'PNC'),
(79, 12, 'PLY'),
(80, 12, 'SMG'),
(81, 12, 'SHP'),
(82, 12, 'TCL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
