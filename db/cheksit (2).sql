-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2022 at 07:06 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheksit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_auth`
--

CREATE TABLE `tb_auth` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_auth`
--

INSERT INTO `tb_auth` (`id_user`, `username`, `password`, `role`, `status`) VALUES
(1, '180001', '$2y$10$gWtbTQfd/m2YVKKFLHG/5uM8DYoUUswWKbZHA9cgLUk07h5nGMllO', '1', 1),
(2, '180002', '$2y$10$gWtbTQfd/m2YVKKFLHG/5uM8DYoUUswWKbZHA9cgLUk07h5nGMllO', '2', 1),
(3, '180003', '$2y$10$gWtbTQfd/m2YVKKFLHG/5uM8DYoUUswWKbZHA9cgLUk07h5nGMllO', '3', 1),
(4, '180004', '$2y$10$gWtbTQfd/m2YVKKFLHG/5uM8DYoUUswWKbZHA9cgLUk07h5nGMllO', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dept`
--

CREATE TABLE `tb_dept` (
  `id` int(11) NOT NULL,
  `dept` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dept`
--

INSERT INTO `tb_dept` (`id`, `dept`) VALUES
(2, 'IT'),
(3, 'GA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jkel` varchar(20) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `alamat` text,
  `dept` varchar(20) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `kontrak_ke` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nik`, `nama`, `jkel`, `hp`, `alamat`, `dept`, `join_date`, `close_date`, `kontrak_ke`) VALUES
(4, '180001', 'JUPRI H AGAM', 'Laki-laki', 2147483647, 'Perumahan Griya Family 3 Blok B4/17 Karanganyar,Karangbahagia - Kab.Bekasii', 'IT', '2022-01-03', '2022-01-24', '11'),
(5, '180002', 'ARIS EKA WARDANA', 'Laki-laki', 2147483647, 'CIFEST CIKARANG', 'IT', '2022-01-18', '2022-01-28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontrak`
--

CREATE TABLE `tb_kontrak` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `kontrak_ke` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontrak`
--

INSERT INTO `tb_kontrak` (`id`, `nik`, `dept`, `join_date`, `close_date`, `kontrak_ke`) VALUES
(1, '11551105411', 'IT', '2022-01-07', '2022-01-30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lisensi`
--

CREATE TABLE `tb_lisensi` (
  `id` int(11) NOT NULL,
  `trainer` varchar(50) DEFAULT NULL,
  `nama_trainer` varchar(50) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `expdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lisensi`
--

INSERT INTO `tb_lisensi` (`id`, `trainer`, `nama_trainer`, `nik`, `dept`, `expdate`) VALUES
(1, 'teri', 'abc', '11551105411', 'ITf', '2022-01-11'),
(2, 'LEADERSHIP', 'JONOTAHAN', '180001', 'IT', '2022-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `id` varchar(20) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `nama_trainer` varchar(50) DEFAULT NULL,
  `trainer` varchar(50) DEFAULT NULL,
  `training_date` date DEFAULT NULL,
  `total_waktu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`id`, `nik`, `nama`, `dept`, `nama_trainer`, `trainer`, `training_date`, `total_waktu`) VALUES
('TR00001', '180001', 'JUPRI H AGAM', 'IT', 'JONOTAHAN', 'LEADERSHIP', '2022-01-18', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trainingfile`
--

CREATE TABLE `tb_trainingfile` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `file1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trainingfile`
--

INSERT INTO `tb_trainingfile` (`id`, `kode`, `nik`, `file1`) VALUES
(12, 'TR00001', '180001', 'c30_(27).pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_dept`
--
ALTER TABLE `tb_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lisensi`
--
ALTER TABLE `tb_lisensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_trainingfile`
--
ALTER TABLE `tb_trainingfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_auth`
--
ALTER TABLE `tb_auth`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_dept`
--
ALTER TABLE `tb_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_lisensi`
--
ALTER TABLE `tb_lisensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_trainingfile`
--
ALTER TABLE `tb_trainingfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
