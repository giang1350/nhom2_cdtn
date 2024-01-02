-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: learnandcode
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `khoahoc`
--

DROP TABLE IF EXISTS `khoahoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `khoahoc` (
  `MaKH` int NOT NULL AUTO_INCREMENT,
  `TenKH` varchar(50) DEFAULT NULL,
  `DoTuoi` varchar(6) DEFAULT NULL,
  `Gia` varchar(15) DEFAULT NULL,
  `SoBaiGiang` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khoahoc`
--

LOCK TABLES `khoahoc` WRITE;
/*!40000 ALTER TABLE `khoahoc` DISABLE KEYS */;
INSERT INTO `khoahoc` VALUES (8,'Bài học về JavaScript','15-17','250.000 Đồng','15'),(9,'Bài học về PHP (Phần 1)','13-16','200.000 Đồng','11');
/*!40000 ALTER TABLE `khoahoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tailieu`
--

DROP TABLE IF EXISTS `tailieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tailieu` (
  `MaTL` int NOT NULL AUTO_INCREMENT,
  `TenTL` varchar(100) DEFAULT NULL,
  `TenTK` varchar(50) DEFAULT NULL,
  `TenKH` varchar(50) DEFAULT NULL,
  `NoiDung` text,
  `TenFile` blob,
  PRIMARY KEY (`MaTL`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tailieu`
--

LOCK TABLES `tailieu` WRITE;
/*!40000 ALTER TABLE `tailieu` DISABLE KEYS */;
INSERT INTO `tailieu` VALUES (25,'Bài 1','Trần Ngọc Giang','Scratch','Xin chào tất cả mọi người',_binary 'GioithieuveScratch.pdf'),(26,'Bài 2','Trần Ngọc Giang','Scratch','Bài là bài tiếp theo giúp các em tìm hiểu cơ bản về Scratch.',_binary 'GioithieuveScratch.pdf'),(27,'Bài 3','Giang','Scratch','Xin chào mọi người',_binary 'CĐTN_Báo cáo_Nhóm 3.docx'),(29,'Bài 4','Nguyễn Văn A','Scratch','Xin chào',_binary 'GioithieuveScratch.pdf'),(30,'Bài 5','Nguyễn Văn A','Scratch','Xin chào tất cả mọi người',_binary 'GioithieuveScratch.pdf');
/*!40000 ALTER TABLE `tailieu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thanhtoan`
--

DROP TABLE IF EXISTS `thanhtoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `thanhtoan` (
  `MaTT` int NOT NULL AUTO_INCREMENT,
  `TenKH` varchar(50) DEFAULT NULL,
  `TenTK` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `ThanhPho` varchar(25) DEFAULT NULL,
  `SoTien` varchar(20) DEFAULT NULL,
  `PhuongThuc` varchar(100) DEFAULT NULL,
  `SoThe` int DEFAULT NULL,
  `MaCVV` int DEFAULT NULL,
  PRIMARY KEY (`MaTT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thanhtoan`
--

LOCK TABLES `thanhtoan` WRITE;
/*!40000 ALTER TABLE `thanhtoan` DISABLE KEYS */;
/*!40000 ALTER TABLE `thanhtoan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-03  1:31:47
