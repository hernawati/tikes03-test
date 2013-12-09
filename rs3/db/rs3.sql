# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.27
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2013-12-06 14:55:09
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for rs
CREATE DATABASE IF NOT EXISTS `rs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rs`;


# Dumping structure for table rs.dokter
CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` varchar(5) NOT NULL DEFAULT '',
  `nm_dokter` varchar(45) DEFAULT NULL,
  `id_spesialis` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_dokter`),
  KEY `fk_spesialis` (`id_spesialis`),
  CONSTRAINT `fk_spesialis` FOREIGN KEY (`id_spesialis`) REFERENCES `spesialis` (`id_spesialis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table rs.dokter: ~2 rows (approximately)
/*!40000 ALTER TABLE `dokter` DISABLE KEYS */;
INSERT INTO `dokter` (`id_dokter`, `nm_dokter`, `id_spesialis`) VALUES
	('DK001', 'Beno', 'DLM'),
	('DK002', 'Kasno', 'PRU');
/*!40000 ALTER TABLE `dokter` ENABLE KEYS */;


# Dumping structure for table rs.pasien
CREATE TABLE IF NOT EXISTS `pasien` (
  `no_cm` int(6) NOT NULL,
  `nm_pasien` varchar(45) NOT NULL,
  `jk_pasien` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  PRIMARY KEY (`no_cm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table rs.pasien: ~12 rows (approximately)
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` (`no_cm`, `nm_pasien`, `jk_pasien`, `alamat`, `tgl_lahir`) VALUES
	(1, 'Samsudin', 'L', 'Jl. Penganten No. 78 Surabaya', '1987-07-23'),
	(2, 'Sulastri', 'P', 'Jl. Kalibata No. 73 Jakarta Timur', '1989-09-21'),
	(3, 'Iin Indah', 'P', 'Jl. Harumsari No. 72 Solo', '1990-02-25'),
	(4, 'Khoerudin', 'L', 'Jl. Semangka No. 22 Cirebon', '1991-09-08'),
	(5, 'Hasanudin', 'L', 'Jl. Kemayoran Lama No. 25', '1992-09-02'),
	(6, 'Samsudin', 'L', 'Jl. MT. Haryono No. 116', '1987-08-12'),
	(7, 'Popi Permata Sari', 'P', 'Jl. Kaliurang KM. 6 No. 77A', '1990-07-08'),
	(8, 'Wawan Rahmawan', 'L', 'Jl. Dirgahayu Indonesia No. 88', '1990-04-07'),
	(9, 'Fitriya Rahmawati', 'P', 'Jl. Marga Mekar No. 34', '1991-04-12'),
	(10, 'Danu Kurniawan', 'L', 'Jl. Kalimati no. 90A', '1991-08-23'),
	(11, 'Kiki Fatmala', 'P', 'Jl. Elang Bondol No. 25', '1990-09-12'),
	(12, 'Herna', 'P', 'Jl. Medan Utama No. 45', '1989-09-15');
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;


# Dumping structure for table rs.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_daftar` int(9) NOT NULL DEFAULT '0',
  `no_cm` int(6) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `id_dokter` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`no_daftar`),
  KEY `fk_dokter` (`id_dokter`),
  KEY `fk_pasien` (`no_cm`),
  CONSTRAINT `fk_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  CONSTRAINT `fk_pasien` FOREIGN KEY (`no_cm`) REFERENCES `pasien` (`no_cm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table rs.pendaftaran: ~2 rows (approximately)
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` (`no_daftar`, `no_cm`, `tgl_daftar`, `id_dokter`) VALUES
	(201300001, 1, '2013-10-22', 'DK001'),
	(201300002, 2, '2013-10-21', 'DK002');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;


# Dumping structure for table rs.spesialis
CREATE TABLE IF NOT EXISTS `spesialis` (
  `id_spesialis` varchar(5) NOT NULL,
  `nm_spesialis` varchar(45) NOT NULL,
  PRIMARY KEY (`id_spesialis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table rs.spesialis: ~5 rows (approximately)
/*!40000 ALTER TABLE `spesialis` DISABLE KEYS */;
INSERT INTO `spesialis` (`id_spesialis`, `nm_spesialis`) VALUES
	('ANK', 'Penyakit Anak'),
	('DLM', 'Penyakit Dalam (Internis)'),
	('JTG', 'Penyakit Jantung'),
	('KLT', 'Penyakit Kulit'),
	('PRU', 'Penyakit Paru-paru');
/*!40000 ALTER TABLE `spesialis` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
