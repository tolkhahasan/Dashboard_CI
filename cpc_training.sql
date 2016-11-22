-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5120
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cpc_training
CREATE DATABASE IF NOT EXISTS `cpc_training` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cpc_training`;

-- Dumping structure for table cpc_training.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(50) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.guru: ~6 rows (approximately)
DELETE FROM `guru`;
/*!40000 ALTER TABLE `guru` DISABLE KEYS */;
INSERT INTO `guru` (`id_guru`, `nama_guru`) VALUES
	(1, 'siti munawaroh '),
	(2, 'mulawarman'),
	(3, 'musywarah'),
	(4, 'ponijan'),
	(5, 'ponidi');
/*!40000 ALTER TABLE `guru` ENABLE KEYS */;

-- Dumping structure for table cpc_training.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.kelas: ~4 rows (approximately)
DELETE FROM `kelas`;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'Kelas A'),
	(2, 'Kelas B'),
	(3, 'Kelas C'),
	(5, 'Kelas X');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

-- Dumping structure for table cpc_training.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(50) NOT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.mapel: ~4 rows (approximately)
DELETE FROM `mapel`;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_guru`) VALUES
	(1, 'Matematika', 1),
	(2, 'IPA', 2),
	(3, 'IPS', 3),
	(4, 'Bahasa Inggris', 4),
	(5, 'Bahas Indonesia', 5),
	(6, 'Bahasa Italy', 1);
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;

-- Dumping structure for table cpc_training.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_mapel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.nilai: ~4 rows (approximately)
DELETE FROM `nilai`;
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_nilai`, `id_mapel`, `id_siswa`, `total_nilai`) VALUES
	(1, 1, 1, 90),
	(2, 2, 2, 80),
	(3, 3, 3, 70),
	(4, 4, 4, 50);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

-- Dumping structure for table cpc_training.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.siswa: ~6 rows (approximately)
DELETE FROM `siswa`;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id`, `nama`, `alamat`, `id_kelas`) VALUES
	(1, 'kang', 'malang', 1),
	(2, 'wawan', 'tulungagung', 2),
	(3, 'Tholchah', 'malang', 2),
	(4, 'aufar', 'malang', 1),
	(5, 'dodi', 'malang', 2),
	(6, 'Mukidi', 'Pasuruan', 3);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

-- Dumping structure for table cpc_training.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cpc_training.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `nama_user`) VALUES
	(1, 'admin', 'admin', 'admin'),
	(2, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
