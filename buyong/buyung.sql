-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2015 at 09:27 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buyung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE IF NOT EXISTS `tb_absensi` (
  `id_abs` int(5) NOT NULL AUTO_INCREMENT,
  `nippos` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kodeabsensi` enum('1','2') NOT NULL,
  `jammasuk` time NOT NULL,
  PRIMARY KEY (`id_abs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_abs`, `nippos`, `tanggal`, `kodeabsensi`, `jammasuk`) VALUES
(1, 111, '2015-06-18', '1', '06:06:09'),
(2, 111, '2015-06-18', '2', '06:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `id_jab` int(2) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL,
  `tgl_input_jab` datetime NOT NULL,
  PRIMARY KEY (`id_jab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jab`, `jabatan`, `tgl_input_jab`) VALUES
(1, 'Kepala Dinas', '2015-06-18 05:17:35'),
(2, 'Sender', '2015-06-18 03:48:19'),
(3, 'Resepsionis', '2015-06-18 04:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id_kar` int(2) NOT NULL AUTO_INCREMENT,
  `id_jab` int(2) NOT NULL,
  `nippos` int(20) NOT NULL,
  `nama_kar` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `nohp` int(12) NOT NULL,
  `tgl_input_kar` datetime NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_kar`, `id_jab`, `nippos`, `nama_kar`, `pekerjaan`, `nohp`, `tgl_input_kar`, `foto`) VALUES
(1, 1, 999, 'Herman Lantang', 'Tak Tahu', 843347883, '2015-06-18 11:23:20', '1922253_840651915960630_2004795134_n1.jpg'),
(2, 2, 111, 'Ahmad Zuckerburg', 'Pengirim', 843834883, '2015-06-18 04:39:35', 'yell2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(30) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `nama_user`, `pass_user`, `nama`, `level`, `status`) VALUES
(1, 'ad', 'ad', 'Admin KADIS', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
