-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_faculty
CREATE DATABASE IF NOT EXISTS `db_faculty` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_faculty`;

-- Dumping structure for table db_faculty.classes
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lecturer_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lecturer_id` (`lecturer_id`),
  KEY `subject_id` (`subject_id`),
  CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_faculty.classes: ~0 rows (approximately)
INSERT INTO `classes` (`id`, `lecturer_id`, `subject_id`, `date`) VALUES
	(18, 3, 2, '2025-02-01 09:00:00'),
	(19, 4, 3, '2025-02-01 11:00:00'),
	(22, 7, 6, '2025-02-02 13:00:00'),
	(23, 8, 7, '2025-02-03 10:00:00'),
	(25, 10, 9, '2025-02-04 09:30:00'),
	(26, 6, 8, '2025-11-25 17:00:00');

-- Dumping structure for table db_faculty.lecturers
CREATE TABLE IF NOT EXISTS `lecturers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nidn` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `join_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nidn` (`nidn`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_faculty.lecturers: ~0 rows (approximately)
INSERT INTO `lecturers` (`id`, `nidn`, `name`, `email`, `mobile`, `join_date`) VALUES
	(3, '1001', 'Uus Basreng', 'uuspointblank@yahoo.wow', '081234567801', '2023-01-10'),
	(4, '1002', 'Asep Komputer', 'asep@campus.test', '081234567802', '2023-02-14'),
	(6, '1004', 'Tatang Refactor', 'tatang@campus.test', '081234567804', '2023-04-01'),
	(7, '1005', 'Jajang Debug', 'jajang@campus.test', '081234567805', '2023-05-11'),
	(8, '1006', 'Oman Ram 5GB', 'Sarajevo@balkans.net', '081234567806', '2023-06-06'),
	(10, '1008', 'Bangton God', 'Bangtonzz@linux.id', '081234567808', '2023-08-08');

-- Dumping structure for table db_faculty.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(100) NOT NULL,
  `sks` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_faculty.subjects: ~0 rows (approximately)
INSERT INTO `subjects` (`id`, `subject_name`, `sks`) VALUES
	(2, 'Pengantar Rebahan', 2),
	(3, 'Teknik Bangun Pagi', 3),
	(4, 'Teknik Ngopi Pagi', 2),
	(6, 'Manajemen Tidur', 2),
	(7, 'Sistem Informasi Tugas Mepet', 3),
	(8, 'Dasar Hahahihi', 2),
	(9, 'Dasar Ngopi Skena', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
