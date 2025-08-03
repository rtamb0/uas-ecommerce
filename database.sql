-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: rt_management
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `residents`
--

DROP TABLE IF EXISTS `residents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `residents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `nik` char(16) NOT NULL,
  `kk_number` char(16) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `marital_status` enum('Belum Menikah','Menikah','Cerai') NOT NULL,
  `status_in_family` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `rt_number` int NOT NULL,
  `rw_number` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residents`
--

LOCK TABLES `residents` WRITE;
/*!40000 ALTER TABLE `residents` DISABLE KEYS */;
INSERT INTO `residents` VALUES (1,'Budi Santoso','3175090101000001','3175090101000000','Laki-laki','1985-05-10','Islam','Karyawan Swasta','S1','Menikah','Kepala Keluarga','Jl. Merdeka No. 10',3,5),(2,'Siti Aminah','3175090101000002','3175090101000000','Perempuan','1987-08-12','Islam','Ibu Rumah Tangga','SMA','Menikah','Istri','Jl. Merdeka No. 10',3,5),(3,'Andi Prasetyo','3175090101000003','3175090101000003','Laki-laki','2000-01-20','Kristen','Mahasiswa','S1','Belum Menikah','Anak','Jl. Melati No. 12',3,5),(4,'Dewi Lestari','3175090101000004','3175090101000004','Perempuan','1998-11-02','Islam','Guru','S2','Belum Menikah','Kepala Keluarga','Jl. Anggrek No. 5',3,5),(5,'Rudi Hartono','3175090101000005','3175090101000005','Laki-laki','1975-03-15','Hindu','Pedagang','SMA','Menikah','Kepala Keluarga','Jl. Kenanga No. 3',3,5),(6,'Lina Marlina','3175090101000006','3175090101000005','Perempuan','1980-06-25','Hindu','Ibu Rumah Tangga','SMA','Menikah','Istri','Jl. Kenanga No. 3',3,5);
/*!40000 ALTER TABLE `residents` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-04  5:18:09
