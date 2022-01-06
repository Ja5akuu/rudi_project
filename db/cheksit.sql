-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2021 at 01:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

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
-- Table structure for table `tb_cheksit`
--

CREATE TABLE `tb_cheksit` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `area_gedung` varchar(20) DEFAULT NULL,
  `tanggal_cheksit` date DEFAULT NULL,
  `shifting` varchar(50) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `approved_atasan` int(11) DEFAULT 0,
  `approved_user` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cheksit`
--

INSERT INTO `tb_cheksit` (`id`, `code_cheksit`, `area_gedung`, `tanggal_cheksit`, `shifting`, `jam`, `file`, `ket`, `status`, `approved_atasan`, `approved_user`) VALUES
(24, 'BR00001', 'Tengah', '2021-10-08', '1', NULL, 'default.jpg', 'tes', 'Approved', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_coridor`
--

CREATE TABLE `tb_coridor` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_coridor` varchar(20) DEFAULT NULL,
  `langit_coridor` varchar(20) DEFAULT NULL,
  `lampu_coridor` varchar(20) DEFAULT NULL,
  `pilar_coridor` varchar(20) DEFAULT NULL,
  `lantai1_coridor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_coridor`
--

INSERT INTO `tb_coridor` (`id`, `code_cheksit`, `lantai_coridor`, `langit_coridor`, `lampu_coridor`, `pilar_coridor`, `lantai1_coridor`) VALUES
(59, 'BR00001', 'DS', 'Bersih', 'Bersih', 'Bersih', 'Bersih'),
(60, 'BR00001', '1', 'Kotor', 'Kotor', 'Kotor', 'Kotor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_coridor1`
--

CREATE TABLE `tb_coridor1` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_coridor1` varchar(20) DEFAULT NULL,
  `langit_coridor1` varchar(20) DEFAULT NULL,
  `lampu_coridor1` varchar(20) DEFAULT NULL,
  `dinding_coridor1` varchar(20) DEFAULT NULL,
  `hiasan_coridor1` varchar(20) DEFAULT NULL,
  `sampah_coridor1` varchar(20) DEFAULT NULL,
  `indoor_coridor1` varchar(20) DEFAULT NULL,
  `electrical_coridor1` varchar(20) DEFAULT NULL,
  `lantai1_coridor1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_coridor1`
--

INSERT INTO `tb_coridor1` (`id`, `code_cheksit`, `lantai_coridor1`, `langit_coridor1`, `lampu_coridor1`, `dinding_coridor1`, `hiasan_coridor1`, `sampah_coridor1`, `indoor_coridor1`, `electrical_coridor1`, `lantai1_coridor1`) VALUES
(5, 'BR00001', 'DS', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih'),
(6, 'BR00001', '1', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cs`
--

CREATE TABLE `tb_cs` (
  `id` int(11) NOT NULL,
  `code_chekcsit` varchar(50) DEFAULT NULL,
  `lantai_cs` varchar(20) DEFAULT NULL,
  `langit_cs` varchar(20) DEFAULT NULL,
  `lampu_cs` varchar(20) DEFAULT NULL,
  `dinding_cs` varchar(20) DEFAULT NULL,
  `hiasan_cs` varchar(20) DEFAULT NULL,
  `furniture_cs` varchar(20) DEFAULT NULL,
  `tlp_cs` varchar(20) DEFAULT NULL,
  `lantai1_cs` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cs`
--

INSERT INTO `tb_cs` (`id`, `code_chekcsit`, `lantai_cs`, `langit_cs`, `lampu_cs`, `dinding_cs`, `hiasan_cs`, `furniture_cs`, `tlp_cs`, `lantai1_cs`) VALUES
(36, 'BR00001', 'DS', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor'),
(37, 'BR00001', '1', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_historylogin`
--

CREATE TABLE `tb_historylogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `ip_address` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_historylogin`
--

INSERT INTO `tb_historylogin` (`id`, `username`, `password`, `browser`, `version`, `platform`, `ip_address`, `date`) VALUES
(28, '180003', '180003', 'Chrome', '93.0.4577.63', 'Linux', '::1', '2021-10-08'),
(29, '180002', '180002', 'Chrome', '93.0.4577.63', 'Linux', '::1', '2021-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lobby`
--

CREATE TABLE `tb_lobby` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_lobby` varchar(20) DEFAULT NULL,
  `langit_lobby` varchar(20) DEFAULT NULL,
  `lampu_lobby` varchar(20) DEFAULT NULL,
  `pilar_lobby` varchar(20) DEFAULT NULL,
  `pintu_lobby` varchar(20) DEFAULT NULL,
  `indoor_lobby` varchar(20) DEFAULT NULL,
  `nomat_lobby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lobby`
--

INSERT INTO `tb_lobby` (`id`, `code_cheksit`, `lantai_lobby`, `langit_lobby`, `lampu_lobby`, `pilar_lobby`, `pintu_lobby`, `indoor_lobby`, `nomat_lobby`) VALUES
(43, 'BR00001', 'DS', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih'),
(44, 'BR00001', '1', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mushola`
--

CREATE TABLE `tb_mushola` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_mushola` varchar(20) DEFAULT NULL,
  `langit_mushola` varchar(20) DEFAULT NULL,
  `dinding_mushola` varchar(20) DEFAULT NULL,
  `lantai1_mushola` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Lead'),
(3, 'Manager'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_room`
--

CREATE TABLE `tb_room` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_room` varchar(20) DEFAULT NULL,
  `langit_room` varchar(20) DEFAULT NULL,
  `dinding_room` varchar(20) DEFAULT NULL,
  `hiasan_room` varchar(20) DEFAULT NULL,
  `tanaman_room` varchar(20) DEFAULT NULL,
  `kaca_room` varchar(20) DEFAULT NULL,
  `furniture_room` varchar(20) DEFAULT NULL,
  `lantai1_room` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tangga`
--

CREATE TABLE `tb_tangga` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_cheksit` varchar(20) DEFAULT NULL,
  `relling_cheksit` varchar(20) DEFAULT NULL,
  `lantai1_cheksit` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tp`
--

CREATE TABLE `tb_tp` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_tp` varchar(20) DEFAULT NULL,
  `langit_tp` varchar(20) DEFAULT NULL,
  `lampu_tp` varchar(20) NOT NULL,
  `dinging_tp` varchar(20) DEFAULT NULL,
  `cermin_tp` varchar(20) DEFAULT NULL,
  `washtafel_tp` varchar(20) DEFAULT NULL,
  `urinoir_tp` varchar(20) DEFAULT NULL,
  `closet_tp` varchar(20) DEFAULT NULL,
  `sampah_tp` varchar(20) DEFAULT NULL,
  `lantai1_tp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tp`
--

INSERT INTO `tb_tp` (`id`, `code_cheksit`, `lantai_tp`, `langit_tp`, `lampu_tp`, `dinging_tp`, `cermin_tp`, `washtafel_tp`, `urinoir_tp`, `closet_tp`, `sampah_tp`, `lantai1_tp`) VALUES
(5, 'BR00001', '1', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih', 'Bersih'),
(6, 'BR00001', '2', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tunggu`
--

CREATE TABLE `tb_tunggu` (
  `id` int(11) NOT NULL,
  `code_chekcsit` varchar(50) DEFAULT NULL,
  `lantai_tunggu` varchar(20) DEFAULT NULL,
  `langit_tunggu` varchar(20) DEFAULT NULL,
  `lampu_tunggu` varchar(20) DEFAULT NULL,
  `dinding_tunggu` varchar(20) DEFAULT NULL,
  `hiasan_tunggu` varchar(20) DEFAULT NULL,
  `furniture_tunggu` varchar(20) DEFAULT NULL,
  `lantai1_tunggu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tunggu`
--

INSERT INTO `tb_tunggu` (`id`, `code_chekcsit`, `lantai_tunggu`, `langit_tunggu`, `lampu_tunggu`, `dinding_tunggu`, `hiasan_tunggu`, `furniture_tunggu`, `lantai1_tunggu`) VALUES
(43, 'BR00001', 'DS', 'Kotor Sekali', 'Kotor Sekali', 'Kotor Sekali', 'Kotor Sekali', 'Kotor Sekali', 'Kotor Sekali'),
(44, 'BR00001', '2', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor', 'Kotor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tw`
--

CREATE TABLE `tb_tw` (
  `id` int(11) NOT NULL,
  `code_cheksit` varchar(50) DEFAULT NULL,
  `lantai_tp` varchar(20) DEFAULT NULL,
  `langit_tp` varchar(20) DEFAULT NULL,
  `dinging_tp` varchar(20) DEFAULT NULL,
  `cermin_tp` varchar(20) DEFAULT NULL,
  `washtafel_tp` varchar(20) DEFAULT NULL,
  `urinoir_tp` varchar(20) DEFAULT NULL,
  `closet_tp` varchar(20) DEFAULT NULL,
  `sampah_tp` varchar(20) DEFAULT NULL,
  `lantai1_tp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_auth`
--
ALTER TABLE `tb_auth`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_cheksit`
--
ALTER TABLE `tb_cheksit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_coridor`
--
ALTER TABLE `tb_coridor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_coridor1`
--
ALTER TABLE `tb_coridor1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cs`
--
ALTER TABLE `tb_cs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_historylogin`
--
ALTER TABLE `tb_historylogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lobby`
--
ALTER TABLE `tb_lobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mushola`
--
ALTER TABLE `tb_mushola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tangga`
--
ALTER TABLE `tb_tangga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tp`
--
ALTER TABLE `tb_tp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tunggu`
--
ALTER TABLE `tb_tunggu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tw`
--
ALTER TABLE `tb_tw`
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
-- AUTO_INCREMENT for table `tb_cheksit`
--
ALTER TABLE `tb_cheksit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_coridor`
--
ALTER TABLE `tb_coridor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_coridor1`
--
ALTER TABLE `tb_coridor1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_cs`
--
ALTER TABLE `tb_cs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_historylogin`
--
ALTER TABLE `tb_historylogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_lobby`
--
ALTER TABLE `tb_lobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_mushola`
--
ALTER TABLE `tb_mushola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tangga`
--
ALTER TABLE `tb_tangga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tp`
--
ALTER TABLE `tb_tp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tunggu`
--
ALTER TABLE `tb_tunggu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_tw`
--
ALTER TABLE `tb_tw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
