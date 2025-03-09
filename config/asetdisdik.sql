-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 10:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asetdisdik`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `noId` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isMainMenu` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`noId`, `menu`, `link`, `icon`, `isMainMenu`, `role`) VALUES
(1, 'Dashboard', 'admin', 'icon-air-play', '0', 'all'),
(2, 'Master Data', '#', 'icon-stack', '0', 'all'),
(3, 'Data User', 'admin/User', 'icon-user', '2', 'admin'),
(4, 'Data Pegawai', 'admin/Pegawai', 'icon-users', '2', 'staff'),
(5, 'Data Sekolah', 'admin/Sekolah', 'icon-open-book', '2', 'staff'),
(6, 'Aset Data Kendaraan Bermotor', '#', 'icon-barometer', '0', 'all'),
(7, 'Aset Sepeda Motor', 'admin/Kendaraan/motor.php', '', '6', 'staff'),
(8, 'Aset Mobil', 'admin/Kendaraan/mobil.php', '', '6', 'staff'),
(9, 'Aset Bus', 'admin/Kendaraan/bus.php', '', '6', 'staff'),
(10, 'Aset Data Elektronik', '#', 'icon-cogs', '0', 'all'),
(11, 'Aset Komputer', 'admin/Elektronik/komputer.php', '', '10', 'staff'),
(12, 'Aset Printer', 'admin/Elektronik/printer.php', '', '10', 'staff'),
(13, 'Aset Laptop', 'admin/Elektronik/laptop.php', '', '10', 'staff'),
(14, 'Elektronik Lainnya', 'admin/Elektronik/Eln.php', '', '10', 'staff'),
(15, 'Aset Kelengkapan Sekolah', 'admin/BSekolah', 'icon-stack5', '0', 'staff'),
(16, 'Data Pemakai Kendaraan Dinas', 'admin/Pkend', 'icon-bookmark2', '0', 'all'),
(17, 'Data Mutasi Aset', 'admin/Amut', 'icon-note-list', '0', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `tasl`
--

CREATE TABLE `tasl` (
  `Idaln` varchar(20) NOT NULL,
  `Jaln` varchar(30) NOT NULL,
  `Brg` varchar(50) NOT NULL,
  `Jlh` int(20) NOT NULL,
  `Hrg` int(20) NOT NULL,
  `Asl` varchar(50) NOT NULL,
  `Kondisi` varchar(20) NOT NULL,
  `Ket` varchar(20) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tdatapeg`
--

CREATE TABLE `tdatapeg` (
  `Idpeg` int(20) NOT NULL,
  `Nip` int(50) NOT NULL,
  `Npeg` varchar(50) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Jab` varchar(30) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `Ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdatapeg`
--

INSERT INTO `tdatapeg` (`Idpeg`, `Nip`, `Npeg`, `Alamat`, `Jab`, `Instansi`, `Username`, `Password`, `Role`, `Ket`) VALUES
(1, 1, 'Admin', 'kandangan', 'Administrator Aset', 'Dinas Pendidikan Kab HSS', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Administrator Aset'),
(2, 631231231, 'rese', 'kandangan', 'tes', 'SMPN 1 KANDANGAN', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tkend`
--

CREATE TABLE `tkend` (
  `Idken` int(20) NOT NULL,
  `Jken` varchar(20) NOT NULL,
  `Mken` varchar(50) NOT NULL,
  `Cc` varchar(50) NOT NULL,
  `Thbeli` varchar(20) NOT NULL,
  `Hrg` int(20) NOT NULL,
  `Nrk` varchar(150) NOT NULL,
  `Nmsn` varchar(100) NOT NULL,
  `Npol` varchar(50) NOT NULL,
  `Bpkb` varchar(30) NOT NULL,
  `Aken` varchar(30) NOT NULL,
  `Sdana` varchar(30) NOT NULL,
  `Kondisi` varchar(20) NOT NULL,
  `Ket` varchar(20) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tkom`
--

CREATE TABLE `tkom` (
  `Idkom` int(20) NOT NULL,
  `Jkom` varchar(20) NOT NULL,
  `Merk` varchar(50) NOT NULL,
  `Tbeli` date NOT NULL,
  `Asal` varchar(20) NOT NULL,
  `Jlh` int(30) NOT NULL,
  `Hrg` int(20) NOT NULL,
  `Kondisi` varchar(50) NOT NULL,
  `Sdana` varchar(20) NOT NULL,
  `Ket` varchar(20) NOT NULL,
  `Foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tma`
--

CREATE TABLE `tma` (
  `Idmut` int(20) NOT NULL,
  `Idaln` int(20) NOT NULL,
  `Idkom` int(20) NOT NULL,
  `Idskh` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpken`
--

CREATE TABLE `tpken` (
  `Idpk` int(20) NOT NULL,
  `Idken` int(20) NOT NULL,
  `Idpeg` int(20) NOT NULL,
  `Idskh` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsekolah`
--

CREATE TABLE `tsekolah` (
  `Idskh` int(30) NOT NULL,
  `Jskh` varchar(30) NOT NULL,
  `Nmskh` varchar(50) NOT NULL,
  `Askh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`noId`);

--
-- Indexes for table `tasl`
--
ALTER TABLE `tasl`
  ADD PRIMARY KEY (`Idaln`);

--
-- Indexes for table `tdatapeg`
--
ALTER TABLE `tdatapeg`
  ADD PRIMARY KEY (`Idpeg`);

--
-- Indexes for table `tkend`
--
ALTER TABLE `tkend`
  ADD PRIMARY KEY (`Idken`);

--
-- Indexes for table `tkom`
--
ALTER TABLE `tkom`
  ADD PRIMARY KEY (`Idkom`);

--
-- Indexes for table `tma`
--
ALTER TABLE `tma`
  ADD PRIMARY KEY (`Idmut`);

--
-- Indexes for table `tpken`
--
ALTER TABLE `tpken`
  ADD PRIMARY KEY (`Idpk`);

--
-- Indexes for table `tsekolah`
--
ALTER TABLE `tsekolah`
  ADD PRIMARY KEY (`Idskh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tdatapeg`
--
ALTER TABLE `tdatapeg`
  MODIFY `Idpeg` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tma`
--
ALTER TABLE `tma`
  MODIFY `Idmut` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpken`
--
ALTER TABLE `tpken`
  MODIFY `Idpk` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
