-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: inventario
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitudes` (
  `idSolicitudes` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuarios` int(11) NOT NULL,
  `idTipoPapeleria` int(11) NOT NULL,
  `idRastreo` int(11) NOT NULL,
  `fechaSolicitud` datetime DEFAULT NULL,
  `fechaEnvio` datetime DEFAULT NULL,
  `fechaRecibido` datetime DEFAULT NULL,
  PRIMARY KEY (`idSolicitudes`),
  KEY `fk_solicitudes_usuarios1_idx` (`idUsuarios`),
  KEY `fk_solicitudes_tipoPapeleria1_idx` (`idTipoPapeleria`),
  KEY `fk_solicitudes_rastreo1` (`idRastreo`),
  CONSTRAINT `fk_solicitudes_rastreo1` FOREIGN KEY (`idRastreo`) REFERENCES `rastreo` (`idRastreo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_tipoPapeleria1` FOREIGN KEY (`idTipoPapeleria`) REFERENCES `tipopapeleria` (`idTipoPapeleria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_usuarios1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitudes`
--

LOCK TABLES `solicitudes` WRITE;
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
INSERT INTO `solicitudes` VALUES (2,8,1,4,NULL,NULL,NULL),(3,8,2,4,NULL,NULL,NULL),(4,11,1,4,NULL,NULL,NULL),(5,16,1,4,NULL,NULL,NULL),(6,26,1,4,NULL,NULL,NULL),(7,26,1,4,NULL,NULL,NULL),(8,24,1,4,NULL,NULL,NULL),(9,16,2,4,NULL,NULL,NULL),(10,26,2,4,NULL,NULL,NULL),(11,24,2,4,NULL,NULL,NULL),(13,13,1,4,NULL,NULL,NULL),(14,13,2,4,NULL,NULL,NULL),(15,22,2,4,NULL,NULL,NULL),(16,6,1,4,NULL,NULL,NULL),(17,22,2,4,NULL,NULL,NULL),(18,25,1,4,NULL,NULL,NULL),(19,6,2,4,NULL,NULL,NULL),(20,43,2,4,NULL,NULL,NULL),(21,25,2,4,NULL,NULL,NULL),(22,43,1,4,NULL,NULL,NULL),(24,40,2,4,NULL,NULL,NULL),(25,55,1,4,NULL,NULL,NULL),(26,40,1,4,NULL,NULL,NULL),(28,48,1,4,NULL,NULL,NULL),(29,47,2,4,NULL,NULL,NULL),(44,55,2,4,NULL,NULL,NULL),(45,42,1,4,NULL,NULL,NULL),(46,42,2,4,NULL,NULL,NULL),(47,41,1,4,NULL,NULL,NULL),(49,41,2,4,NULL,NULL,NULL),(50,36,1,4,NULL,NULL,NULL),(51,9,1,4,NULL,NULL,NULL),(52,58,2,4,NULL,NULL,NULL),(53,58,1,4,NULL,NULL,NULL),(54,9,2,4,NULL,NULL,NULL),(55,36,2,4,NULL,NULL,NULL),(56,28,2,4,NULL,NULL,NULL),(57,60,2,4,NULL,NULL,NULL),(58,28,1,4,NULL,NULL,NULL),(59,18,2,4,NULL,NULL,NULL),(60,18,1,4,NULL,NULL,NULL),(61,34,2,4,NULL,NULL,NULL),(62,44,1,4,NULL,NULL,NULL),(64,17,1,4,NULL,NULL,NULL),(65,46,1,4,NULL,NULL,NULL),(66,46,2,4,NULL,NULL,NULL),(67,17,2,4,NULL,NULL,NULL),(68,54,1,4,NULL,NULL,NULL),(69,20,1,4,NULL,NULL,NULL),(70,54,2,4,NULL,NULL,NULL),(71,60,1,4,NULL,NULL,NULL),(72,19,1,4,NULL,NULL,NULL),(74,49,2,4,NULL,NULL,NULL),(75,59,1,4,NULL,NULL,NULL),(76,59,2,4,NULL,NULL,NULL),(78,53,2,4,NULL,NULL,NULL),(79,53,1,4,NULL,NULL,NULL),(82,76,1,4,NULL,NULL,NULL),(83,62,1,4,NULL,NULL,NULL),(85,1,2,2,'2020-11-16 05:55:41',NULL,NULL),(86,1,1,1,'2020-11-16 06:15:19',NULL,NULL),(87,1,2,2,'2020-11-16 08:11:37',NULL,NULL);
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:23
