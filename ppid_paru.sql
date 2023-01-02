-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 07:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid_paru`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_keberatan`
--

CREATE TABLE `pengajuan_keberatan` (
  `no_regiskeberatan` int(10) NOT NULL,
  `no_pendaftaran` int(10) NOT NULL,
  `tujuan_pengguna` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamats` text NOT NULL,
  `no_hpn` int(20) NOT NULL,
  `cara_info` varchar(50) NOT NULL,
  `kasus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_keberatan`
--

INSERT INTO `pengajuan_keberatan` (`no_regiskeberatan`, `no_pendaftaran`, `tujuan_pengguna`, `nama`, `alamat`, `pekerjaan`, `no_hp`, `name`, `alamats`, `no_hpn`, `cara_info`, `kasus`) VALUES
(1324345, 1234354, 'curi', 'Far', 'Jl. B', 'Swasta', 98765, 'Han', 'jl. ', 9876, 'Permintaan informasi tidak ditanggapi', 'curi');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_lembaga`
--

CREATE TABLE `pengajuan_lembaga` (
  `name` varchar(100) NOT NULL,
  `nik` int(16) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `telp` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rincian_info` varchar(100) NOT NULL,
  `tujuan_info` varchar(100) NOT NULL,
  `cara_info` varchar(50) NOT NULL,
  `salinan_info` varchar(50) NOT NULL,
  `identitas_pemohon` varchar(50) NOT NULL,
  `akta_pendirian` varchar(50) NOT NULL,
  `sk_bakesbangpol` varchar(50) NOT NULL,
  `sk_domisili` varchar(50) NOT NULL,
  `ormas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_lembaga`
--

INSERT INTO `pengajuan_lembaga` (`name`, `nik`, `alamat`, `pekerjaan`, `telp`, `email`, `rincian_info`, `tujuan_info`, `cara_info`, `salinan_info`, `identitas_pemohon`, `akta_pendirian`, `sk_bakesbangpol`, `sk_domisili`, `ormas`) VALUES
('farhan', 214352, 'Jl. B', 'Swasta', 98786756, 'admin@gmail.com', 'email', 'hack', 'mendengar', 'email', 'Screenshot_20200406_164134.jpg', 'IMG-20200318-WA0059.jpg', 'IMG_20210225_165904.jpg', '20210125_074234.jpg', 'IMG_20210224_124718.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pengaduan`
--

CREATE TABLE `pengajuan_pengaduan` (
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tanda_pengenal` varchar(20) NOT NULL,
  `no_tp` int(20) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `faximile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `alamats` text NOT NULL,
  `no_hpn` int(20) NOT NULL,
  `faximiles` varchar(100) NOT NULL,
  `emails` varchar(100) NOT NULL,
  `kronologi` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `identitas_pelapor` varchar(100) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_pengaduan`
--

INSERT INTO `pengajuan_pengaduan` (`nama`, `jenis_kelamin`, `alamat`, `tanda_pengenal`, `no_tp`, `no_hp`, `faximile`, `email`, `name`, `instansi`, `alamats`, `no_hpn`, `faximiles`, `emails`, `kronologi`, `waktu`, `identitas_pelapor`, `bukti`) VALUES
('Far', 'laki-laki', 'Jl. B', 'ktp', 987564, 9876543, 'jj', 'admin@gmail.com', 'Han', 'jember', 'jl. ', 98765, 'uu', 'user@gmail.com', 'uu', '2022-12-27', 'IMG_20210225_165904.jpg', '02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_perorangan`
--

CREATE TABLE `pengajuan_perorangan` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `telp` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rincian_info` varchar(100) NOT NULL,
  `tujuan_info` varchar(100) NOT NULL,
  `cara_info` varchar(100) NOT NULL,
  `salinan_info` varchar(100) NOT NULL,
  `name_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_perorangan`
--

INSERT INTO `pengajuan_perorangan` (`id`, `name`, `nik`, `alamat`, `pekerjaan`, `telp`, `email`, `rincian_info`, `tujuan_info`, `cara_info`, `salinan_info`, `name_file`) VALUES
(3, 'farhan', 123456789, '', '', 0, '', '', '', '', '', ''),
(4, 'a', 1234567, 'Jl. A', '', 0, '', '', '', '', '', ''),
(5, 'farhan', 98765432, 'Jl. B', 'Swasta', 0, '', '', '', '', '', ''),
(6, 'farhan', 2147483647, 'Jl. B', 'Swasta', 9876543, 'admin@gmail.com', 'email', 'hack', '', '', ''),
(7, 'farhan', 1324354364, 'Jl. A', 'Swasta', 2147483647, 'admin@gmail.com', 'email', 'hack', 'mendapatka', '', ''),
(8, 'farhan', 2147483647, 'Jl. B', 'Swasta', 8986543, 'admin@gmail.com', 'email', 'hack', 'mendapatkan', '', ''),
(9, 'farhan', 2147483647, 'Jl. B', 'Swasta', 8985746, 'admin@gmail.com', 'email', 'hack', 'mendapatkan salinan informasi', '', ''),
(10, 'farhan', 12345678, 'Jl. A', 'Swasta', 8675645, 'admin@gmail.com', 'email', 'hack', 'mendapatkan salinan informasi', 'mengambil langsung', ''),
(11, 'farhan', 132453454, 'Jl. A', 'Swasta', 123256374, 'admin@gmail.com', 'email', 'hack', 'mendapatkan salinan informasi', 'mengambil langsung', ''),
(12, 'farhan', 123425, 'Jl. B', 'Swasta', 123123091, 'admin@gmail.com', 'email', 'hack', 'melihat', 'mengambil langsung', 'IMG_20210225_165904.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengajuan_perorangan`
--
ALTER TABLE `pengajuan_perorangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan_perorangan`
--
ALTER TABLE `pengajuan_perorangan`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
