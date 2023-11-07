-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: localhost    Database: beauty-salon
-- ------------------------------------------------------
-- Server version	5.7.39

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
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) NOT NULL,
  `book_celphone` varchar(20) NOT NULL,
  `book_date` date NOT NULL,
  `book_hour` time NOT NULL,
  `book_quantity` int(11) DEFAULT NULL,
  `book_comment` varchar(200) DEFAULT NULL,
  `servi_id` int(11) NOT NULL,
  `book_state` varchar(45) NOT NULL DEFAULT 'PENDING',
  PRIMARY KEY (`book_id`),
  KEY `fk_booking_service_idx` (`servi_id`),
  CONSTRAINT `fk_booking_service` FOREIGN KEY (`servi_id`) REFERENCES `service` (`servi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (1,'Renzon Caceres ','3175542950','2023-11-04','16:06:00',1,'Corte Aleman con hojilla.',1,'PENDING'),(2,'Sofia Velandia','3014187374','2023-11-09','14:00:00',1,'Quiero mascarilla de miel con avena.',10,'PENDING'),(3,'Tatiana Velandia','3014187374','2023-11-04','15:00:00',1,'Quiero planchado con mascarilla de macadamia.',4,'PENDING'),(4,'Santiago Velandia','3014187374','2023-11-04','12:08:00',1,'',2,'PENDING'),(5,'test 6-11','3014187374','2023-11-07','18:30:00',1,'',1,'PENDING'),(6,'test 6-11 2','3014187374','2023-11-07','19:10:00',1,'Semi permanente.',5,'PENDING'),(7,'test ','3014187374','2023-11-13','10:56:00',1,'',2,'PENDING'),(8,'Test 2','3175542950','2023-11-07','20:29:00',1,'',4,'SUBMIT');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collaborator`
--

DROP TABLE IF EXISTS `collaborator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `collaborator` (
  `collab_id` int(11) NOT NULL AUTO_INCREMENT,
  `collab_name` varchar(45) NOT NULL,
  `collab_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`collab_id`),
  UNIQUE KEY `collab_id_UNIQUE` (`collab_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collaborator`
--

LOCK TABLES `collaborator` WRITE;
/*!40000 ALTER TABLE `collaborator` DISABLE KEYS */;
INSERT INTO `collaborator` VALUES (1,'Carla','assets/images/stylists/carla.jpeg'),(2,'Estella','assets/images/stylists/estella.jpeg'),(3,'Aliz','assets/images/stylists/aliz.jpeg'),(4,'Luisa','assets/images/stylists/luisa.jpeg');
/*!40000 ALTER TABLE `collaborator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service` (
  `servi_id` int(11) NOT NULL AUTO_INCREMENT,
  `servi_name` varchar(100) NOT NULL,
  `servi_price` decimal(10,0) NOT NULL,
  `servi_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`servi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Corte de cabello',15000,'assets/images/services/woman-cutting-hair-man-salon.jpg'),(2,'Afeitada',13000,'assets/images/services/afeitada.jpeg'),(3,'Cepillados',25000,'assets/images/services/cepillad.jpeg'),(4,'Planchados',25000,'assets/images/services/plancha.jpeg'),(5,'Manicure y Pedicure',12000,'assets/images/services/manicu.webp'),(6,'Peinados',18000,'assets/images/services/peinad.jpeg'),(7,'Maquillaje',15000,'assets/images/services/maquillaj.jpeg'),(8,'Cejas',10000,'assets/images/services/cejas.jpeg'),(9,'Tintes',20000,'assets/images/services/tint.jpeg'),(10,'Mascarillas',10000,'assets/images/services/mascarillas.webp'),(11,'Cortes niños',10000,'assets/images/services/niño.jpeg'),(12,'Peinados niñas',12000,'assets/images/services/niña.jpeg');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nickname` varchar(100) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(45) NOT NULL,
  `user_identification` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`,`user_identification`),
  UNIQUE KEY `user_identification_UNIQUE` (`user_identification`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'a','a','Renzon Caceres','1','1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-06 22:27:14
