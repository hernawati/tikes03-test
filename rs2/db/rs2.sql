-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2013 at 06:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `no_cm` int(6) NOT NULL,
  `nama_pasien` varchar(45) NOT NULL,
  `jk_pasien` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  PRIMARY KEY (`no_cm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_cm`, `nama_pasien`, `jk_pasien`, `alamat`, `tgl_lahir`) VALUES
(1, 'yuanita', 'P', 'Jl. Raya Warung Peutey', '1989-06-07'),
(2, 'Hernawati', 'P', 'Porsea, Medan', '1989-09-24'),
(3, 'Fachrul', 'L', 'Indramayu', '1992-04-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
