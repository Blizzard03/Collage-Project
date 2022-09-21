-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk latihan
DROP DATABASE IF EXISTS `latihan`;
CREATE DATABASE IF NOT EXISTS `latihan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `latihan`;

-- membuang struktur untuk table latihan.pegawai
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` varchar(5) NOT NULL,
  `Nama` varchar(60) DEFAULT NULL,
  `Golongan` int(11) DEFAULT '0',
  `Divisi` varchar(25) DEFAULT NULL,
  `Alamat` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel latihan.pegawai: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`NIP`, `Nama`, `Golongan`, `Divisi`, `Alamat`) VALUES
	('22001', 'Tamara Santoso', 1, 'Produksi', 'Jl. Ganesha 96'),
	('22002', 'Gunawan Rusmanto', 2, 'Marketing', 'Jl. Merdeka'),
	('22003', 'Rudi Jayadidpura', 3, 'Produksi', 'Jl. Tamansari 77'),
	('22004', 'Wawan Kurniadi', 3, 'Personalia', 'Jl. Ternate 55');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
