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
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamentos` (
  `idDepartamentos` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(45) NOT NULL,
  PRIMARY KEY (`idDepartamentos`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,'almacen sistemas'),(2,'sistemas'),(3,'cedis'),(4,'e-commerce'),(5,'mercadotecnia'),(6,'planeacion'),(7,'produccion'),(8,'ventas corporativas'),(9,'desarrollo organizacional'),(10,'contabilidad'),(11,'juridico'),(12,'nuevos proyectos'),(13,'gerente regional de tiendas'),(14,'mantenimiento'),(15,'diseño'),(16,'compras'),(17,'oficinas bosques');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:26

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
-- Table structure for table `folios`
--

DROP TABLE IF EXISTS `folios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folios` (
  `idFolios` int(11) NOT NULL AUTO_INCREMENT,
  `folioInicial` int(11) NOT NULL,
  `folioFinal` int(11) NOT NULL,
  `idMovimientoConsumibles` int(11) NOT NULL,
  PRIMARY KEY (`idFolios`),
  KEY `fk_folios_movimientoConsumibles1_idx` (`idMovimientoConsumibles`),
  CONSTRAINT `fk_folios_movimientoConsumibles1` FOREIGN KEY (`idMovimientoConsumibles`) REFERENCES `movimientoconsumibles` (`idMovimientoConsumibles`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folios`
--

LOCK TABLES `folios` WRITE;
/*!40000 ALTER TABLE `folios` DISABLE KEYS */;
/*!40000 ALTER TABLE `folios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:21

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
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inventario` (
  `idInventario` int(11) NOT NULL AUTO_INCREMENT,
  `piezas` double NOT NULL,
  `idLugarTrabajo` int(11) NOT NULL,
  `idPapeleria` int(11) NOT NULL,
  PRIMARY KEY (`idInventario`),
  KEY `fk_Inventario_lugartrabajo1_idx` (`idLugarTrabajo`),
  KEY `fk_Inventario_papeleria1_idx` (`idPapeleria`),
  CONSTRAINT `fk_Inventario_lugartrabajo1` FOREIGN KEY (`idLugarTrabajo`) REFERENCES `lugartrabajo` (`idLugarTrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Inventario_papeleria1` FOREIGN KEY (`idPapeleria`) REFERENCES `papeleria` (`idPapeleria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventario`
--

LOCK TABLES `inventario` WRITE;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` VALUES (1,64,58,1),(2,18,58,2),(3,1,58,3),(4,26,58,4),(5,171,58,5),(6,6,58,6),(7,1,58,7),(8,15,58,8),(9,2,58,9),(10,0,58,10),(11,0,58,11),(12,28,58,12),(13,28,58,13),(14,0,58,14),(15,0,58,15),(16,5,58,16),(17,16,58,17),(18,48,58,18),(19,0,58,19),(20,0,58,20),(21,0,58,21),(22,0,58,22),(23,5,58,23),(24,0,58,24),(25,76,58,25),(26,1,58,26),(27,9,58,27),(28,1,58,28),(29,6,58,29),(30,45,58,30),(31,8,58,31),(32,91,58,32),(33,16,58,33),(34,15,58,34),(35,30,58,35),(36,31,58,36),(37,6,58,37),(38,2,58,38),(39,0,58,39),(40,7,58,40),(41,1,58,41),(42,6,58,42),(43,5,58,43),(44,3,58,44),(45,1,58,45),(46,1,58,46),(47,0,58,47),(48,2,58,48),(49,4,58,49),(50,1,58,50),(51,0,58,51),(52,0,58,52),(53,29,58,53),(54,0,58,54),(55,1,58,55),(56,0,58,56),(57,11,58,57),(58,14,58,58),(59,3,58,59),(60,14,58,60),(61,0,58,61),(62,0,58,62),(63,1,58,63),(64,13,58,64),(65,0,58,65),(66,3,58,66),(67,16,58,67),(68,280,58,68),(69,394,58,69),(70,2,58,70),(71,3,58,71),(72,2,58,72),(73,19,58,73),(74,0,58,74),(75,35,58,75),(76,2,58,76),(77,2,58,77),(78,9,58,78),(79,24,58,79),(80,4,58,80),(81,0,58,81),(82,9,58,82),(83,18,58,83),(84,10,58,84),(85,16.5,58,85),(86,20,58,86),(87,31,58,87),(88,9,58,88),(89,1000,58,89),(90,83,58,90),(91,29715,58,91),(92,360,58,92),(93,650,58,93),(94,25,58,94),(95,300,58,95),(96,1000,58,96),(97,0,58,97),(98,700,58,98),(99,600,58,99),(100,600,58,100),(101,720,58,101),(102,400,58,102),(103,200,58,103),(104,0,58,104),(105,250,58,105),(106,700,58,106),(107,1100,58,107),(108,1500,58,108),(109,100,58,109),(110,400,58,110),(111,700,58,111),(112,300,58,112),(113,800,58,113),(114,200,58,114),(115,1100,58,115),(116,600,58,116),(117,400,58,117),(118,1000,58,118),(119,1000,58,119),(120,200,58,120),(121,600,58,121),(122,0,58,122),(123,250,58,123),(124,700,58,124),(125,1100,58,125),(126,900,58,126),(127,700,58,127),(128,300,58,128),(129,1000,58,129),(130,100,58,130),(131,800,58,131),(132,800,58,132),(133,950,58,133),(134,200,58,134),(135,1000,58,135),(136,500,58,136),(137,300,58,137),(138,300,58,138),(139,400,58,139),(140,400,58,140),(141,700,58,141),(142,1100,58,142),(143,250,58,143),(144,820,58,144),(145,6,58,145),(146,10,58,146),(147,4,58,147),(148,6,58,148),(149,5,58,149),(150,11,58,150),(151,5,58,151),(152,10,58,152),(153,3,58,153),(154,11,58,154),(155,10,58,155),(156,0,58,156),(157,3,58,157),(158,8,58,158),(159,8,58,159),(160,16,58,160),(161,4,58,161),(162,6,58,162),(163,4,58,163),(164,11,58,164),(165,3,58,165),(166,8,58,166),(167,4,58,167),(168,5,58,168),(169,7,58,169),(170,6,58,170),(171,11,58,171),(172,3,58,172),(173,11,58,173),(174,16,58,174),(175,3,58,175),(176,10,58,176),(177,9,58,177),(178,5,58,178),(179,2,58,179),(180,4,58,180),(181,11,58,181),(182,10,58,182),(183,5,58,183),(184,5,58,184),(185,8,58,185),(186,2,58,186),(187,11,58,187),(188,7,58,188),(189,9,58,189),(190,4,58,190),(191,4,58,191),(192,6,58,192),(193,10,58,193),(194,4,58,194),(195,9,58,195),(196,6,58,196);
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:21

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
-- Table structure for table `lugartrabajo`
--

DROP TABLE IF EXISTS `lugartrabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lugartrabajo` (
  `idLugarTrabajo` int(11) NOT NULL AUTO_INCREMENT,
  `idDepartamentos` int(11) DEFAULT NULL,
  `idSucursales` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLugarTrabajo`),
  KEY `fk_tipousuario_departamentos1_idx` (`idDepartamentos`),
  KEY `fk_tipousuario_sucursales1_idx` (`idSucursales`),
  CONSTRAINT `fk_tipousuario_departamentos1` FOREIGN KEY (`idDepartamentos`) REFERENCES `departamentos` (`idDepartamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipousuario_sucursales1` FOREIGN KEY (`idSucursales`) REFERENCES `sucursales` (`idSucursales`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugartrabajo`
--

LOCK TABLES `lugartrabajo` WRITE;
/*!40000 ALTER TABLE `lugartrabajo` DISABLE KEYS */;
INSERT INTO `lugartrabajo` VALUES (1,NULL,1),(2,NULL,2),(3,NULL,3),(4,NULL,4),(5,NULL,5),(6,NULL,6),(7,NULL,7),(8,NULL,8),(9,NULL,9),(10,NULL,10),(11,NULL,11),(12,NULL,12),(13,NULL,13),(14,NULL,14),(15,NULL,15),(16,NULL,16),(17,NULL,17),(18,NULL,18),(19,NULL,19),(20,NULL,20),(21,NULL,21),(22,NULL,22),(23,NULL,23),(24,NULL,24),(25,NULL,25),(26,NULL,26),(27,NULL,27),(28,NULL,28),(29,NULL,29),(30,NULL,30),(31,NULL,31),(32,NULL,32),(33,NULL,33),(34,NULL,34),(35,NULL,35),(36,NULL,36),(37,NULL,37),(38,NULL,38),(39,NULL,39),(40,NULL,40),(41,NULL,41),(42,NULL,42),(43,NULL,43),(44,NULL,44),(45,NULL,45),(46,NULL,46),(47,NULL,47),(48,NULL,48),(49,NULL,49),(50,NULL,50),(51,NULL,51),(52,NULL,52),(53,NULL,53),(54,NULL,54),(55,NULL,55),(56,NULL,56),(57,NULL,57),(58,1,NULL),(59,2,NULL),(60,3,NULL),(61,4,NULL),(62,5,NULL),(63,6,NULL),(64,7,NULL),(65,8,NULL),(66,9,NULL),(67,10,NULL),(68,11,NULL),(69,12,NULL),(70,13,NULL),(71,14,NULL),(72,15,NULL),(73,16,NULL),(74,17,NULL);
/*!40000 ALTER TABLE `lugartrabajo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:24

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
-- Table structure for table `movimientoconsumibles`
--

DROP TABLE IF EXISTS `movimientoconsumibles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movimientoconsumibles` (
  `idMovimientoConsumibles` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuarios` int(11) NOT NULL,
  `idPapeleria` int(11) NOT NULL,
  `piezasSolicitadas` int(11) NOT NULL,
  `piezasEnviadas` int(11) NOT NULL DEFAULT '0',
  `idSolicitudes` int(11) NOT NULL,
  PRIMARY KEY (`idMovimientoConsumibles`),
  KEY `fk_movimientos_usuarios1_idx` (`idUsuarios`),
  KEY `fk_movimientos_papeleria1_idx` (`idPapeleria`),
  KEY `fk_movimientos_requerimientos1_idx` (`idSolicitudes`),
  CONSTRAINT `fk_movimientos_Papeleria1` FOREIGN KEY (`idPapeleria`) REFERENCES `papeleria` (`idPapeleria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_Usuarios1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_movimientos_requerimientos1` FOREIGN KEY (`idSolicitudes`) REFERENCES `solicitudes` (`idSolicitudes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=883 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimientoconsumibles`
--

LOCK TABLES `movimientoconsumibles` WRITE;
/*!40000 ALTER TABLE `movimientoconsumibles` DISABLE KEYS */;
INSERT INTO `movimientoconsumibles` VALUES (1,8,8,5,0,2),(2,8,12,2,1,2),(3,8,13,1,1,2),(4,8,16,1,1,2),(5,8,19,1,0,2),(6,8,24,2,0,2),(7,8,6,2,1,2),(8,8,28,1,1,2),(9,8,51,2,1,2),(10,8,57,5,1,2),(11,8,58,5,0,2),(12,8,61,2,1,2),(13,8,65,1,1,2),(14,8,81,1,1,3),(15,8,82,1,0,3),(16,8,84,1,0,3),(17,8,86,1,1,3),(18,8,89,1,1,3),(19,11,2,6,6,4),(20,11,8,3,0,4),(21,11,10,4,0,4),(22,11,11,3,1,4),(23,11,12,2,2,4),(24,11,13,5,1,4),(25,11,16,2,2,4),(26,11,19,1,0,4),(27,11,28,2,1,4),(28,11,39,2,1,4),(29,11,45,1,0,4),(30,11,46,2,1,4),(31,11,49,2,0,4),(32,11,51,2,1,4),(33,11,53,2,0,4),(34,11,54,1,0,4),(35,11,57,5,0,4),(36,11,58,5,0,4),(37,11,60,2,2,4),(38,11,63,2,2,4),(39,11,64,2,2,4),(40,11,65,1,1,4),(41,16,5,1,1,5),(42,16,9,1,0,5),(43,16,10,2,1,5),(44,16,11,3,1,5),(45,16,12,2,1,5),(46,16,13,3,1,5),(47,16,18,10,5,5),(48,16,22,1,0,5),(49,16,6,1,1,5),(50,16,36,3,3,5),(51,16,45,1,0,5),(52,16,58,3,0,5),(53,16,61,2,2,5),(54,16,62,2,2,5),(55,16,69,10,5,5),(56,26,19,2,0,6),(57,26,8,10,1,7),(58,26,10,3,0,7),(59,26,12,3,1,7),(60,26,19,3,0,7),(61,26,20,1,1,7),(62,26,21,2,0,7),(63,26,22,2,0,7),(64,26,23,2,0,7),(65,26,24,2,0,7),(66,26,25,10,0,7),(67,26,26,1,1,7),(68,26,30,20,0,7),(69,26,38,2,0,7),(70,26,39,4,1,7),(71,26,40,20,0,7),(72,26,46,1,1,7),(73,26,47,1,1,7),(74,26,48,1,0,7),(75,26,49,1,1,7),(76,26,57,5,0,7),(77,26,58,5,0,7),(78,26,59,5,3,7),(79,26,61,2,1,7),(80,26,62,2,2,7),(81,26,63,2,2,7),(82,26,64,2,2,7),(83,26,70,2,1,7),(84,26,78,2,2,7),(85,24,8,2,2,8),(86,24,9,1,0,8),(87,24,10,3,0,8),(88,24,11,1,1,8),(89,24,12,3,1,8),(90,24,13,1,1,8),(91,24,18,100,2,8),(92,24,26,1,1,8),(93,24,39,1,1,8),(94,24,46,1,1,8),(95,24,47,1,1,8),(96,24,48,1,0,8),(97,24,49,1,0,8),(98,24,58,3,2,8),(99,24,61,1,1,8),(100,24,63,1,1,8),(101,24,69,10,5,8),(102,24,75,5,0,8),(103,16,84,15,1,9),(104,16,86,20,1,9),(105,16,88,10,1,9),(106,16,89,10,1,9),(107,16,90,2,2,9),(108,26,81,20,1,10),(109,26,84,50,0,10),(110,26,85,20,0,10),(111,26,89,50,1,10),(112,24,83,100,1,11),(113,24,84,100,0,11),(114,24,88,100,1,11),(115,24,89,50,1,11),(116,13,2,5,5,13),(117,13,7,1,1,13),(118,13,8,2,0,13),(119,13,9,2,0,13),(120,13,10,5,0,13),(121,13,11,3,1,13),(122,13,13,3,1,13),(123,13,39,2,1,13),(124,13,45,2,0,13),(125,13,46,1,1,13),(126,13,57,2,2,13),(127,13,58,2,0,13),(128,13,61,1,1,13),(129,13,62,1,1,13),(130,13,65,1,1,13),(131,13,69,50,15,13),(132,13,76,2,0,13),(133,13,84,100,0,14),(134,13,88,1,1,14),(135,13,91,100,100,14),(136,13,89,50,1,14),(137,22,81,1,1,15),(138,6,8,4,0,16),(139,6,9,1,0,16),(140,6,10,4,0,16),(141,6,12,2,1,16),(142,6,18,1,1,16),(143,6,20,1,1,16),(144,6,6,2,1,16),(145,6,36,10,10,16),(146,6,39,2,1,16),(147,6,40,50,0,16),(148,6,42,1,1,16),(149,6,43,1,1,16),(150,6,45,2,0,16),(151,6,46,1,1,16),(152,6,57,3,0,16),(153,6,58,3,0,16),(154,6,59,1,1,16),(155,6,60,1,1,16),(156,6,61,2,1,16),(157,6,68,60,30,16),(158,22,81,1,0,17),(159,22,82,1,0,17),(160,22,83,20,1,17),(161,22,84,10,1,17),(162,22,85,10,0,17),(163,22,86,1,1,17),(164,22,87,10,1,17),(165,22,92,20,1,17),(166,22,88,20,1,17),(167,22,91,50,100,17),(168,22,89,20,1,17),(169,22,90,20,1,17),(170,25,5,1,1,18),(171,25,8,10,0,18),(172,25,9,2,0,18),(173,25,10,6,0,18),(174,25,11,3,1,18),(175,25,20,1,1,18),(176,25,24,3,0,18),(177,25,6,3,0,18),(178,25,28,1,1,18),(179,25,30,10,0,18),(180,25,35,10,0,18),(181,25,36,20,0,18),(182,25,38,1,0,18),(183,25,39,2,1,18),(184,25,40,50,0,18),(185,25,41,50,0,18),(186,25,42,1,1,18),(187,25,43,1,1,18),(188,25,45,2,1,18),(189,25,46,3,3,18),(190,25,51,2,0,18),(191,25,53,2,0,18),(192,25,55,1,1,18),(193,25,57,3,1,18),(194,25,58,5,0,18),(195,25,59,1,1,18),(196,25,60,1,1,18),(197,25,61,3,2,18),(198,25,62,1,1,18),(199,25,63,2,2,18),(200,25,64,2,1,18),(201,25,65,1,1,18),(202,25,69,30,15,18),(203,25,76,4,0,18),(204,25,78,1,1,18),(205,6,83,20,1,19),(206,6,84,80,0,19),(207,6,85,20,0,19),(208,6,86,20,1,19),(209,6,88,20,1,19),(210,6,91,300,300,19),(211,43,81,20,1,20),(212,43,83,3,1,20),(213,43,84,50,1,20),(214,43,85,1,0,20),(215,43,86,4,1,20),(216,43,92,2,1,20),(217,43,88,3,1,20),(218,43,91,20,100,20),(219,43,89,30,1,20),(220,43,90,2,1,20),(221,25,84,60,0,21),(222,25,86,50,1,21),(223,25,92,50,1,21),(224,25,91,100,100,21),(225,43,1,10,0,22),(226,43,2,2,2,22),(227,43,3,3,0,22),(228,43,4,3,3,22),(229,43,5,2,2,22),(230,43,7,3,0,22),(231,43,8,5,0,22),(232,43,9,6,0,22),(233,43,10,5,0,22),(234,43,11,10,1,22),(235,43,12,15,5,22),(236,43,13,7,0,22),(237,43,14,4,1,22),(238,43,15,4,1,22),(239,43,16,4,1,22),(240,43,18,3,3,22),(241,43,19,3,0,22),(242,43,20,2,0,22),(243,43,23,5,0,22),(244,43,25,10,0,22),(245,43,6,2,0,22),(246,43,26,5,0,22),(247,43,35,15,0,22),(248,43,36,20,0,22),(249,43,37,20,10,22),(250,43,38,3,0,22),(251,43,39,5,0,22),(252,43,40,50,0,22),(253,43,41,50,0,22),(254,43,42,3,0,22),(255,43,43,2,0,22),(256,43,45,4,0,22),(257,43,46,2,1,22),(258,43,47,1,0,22),(259,43,49,1,0,22),(260,43,50,4,0,22),(261,43,51,10,0,22),(262,43,52,2,2,22),(263,43,55,1,1,22),(264,43,56,1,1,22),(265,43,57,5,0,22),(266,43,58,10,0,22),(267,43,59,5,1,22),(268,43,60,2,2,22),(269,43,61,5,0,22),(270,43,62,5,1,22),(271,43,63,3,2,22),(272,43,64,3,3,22),(273,43,68,30,15,22),(274,43,69,60,15,22),(275,43,70,1,1,22),(276,43,71,10,0,22),(277,43,72,10,0,22),(278,43,75,40,0,22),(279,43,76,5,0,22),(280,43,77,5,0,22),(281,43,78,2,2,22),(282,43,79,1,1,22),(283,40,81,20,1,24),(284,40,84,60,0,24),(285,40,90,100,1,24),(286,55,5,2,2,25),(287,55,8,3,1,25),(288,55,9,1,0,25),(289,55,11,1,1,25),(290,55,12,1,1,25),(291,55,13,1,1,25),(292,55,14,2,1,25),(293,55,19,2,0,25),(294,55,6,1,1,25),(295,55,39,1,1,25),(296,55,40,1,0,25),(297,55,45,1,0,25),(298,55,51,1,0,25),(299,55,57,2,0,25),(300,55,58,3,0,25),(301,55,61,2,2,25),(302,55,65,1,1,25),(303,40,8,2,0,26),(304,40,9,1,0,26),(305,40,11,2,1,26),(306,40,12,2,2,26),(307,40,13,1,0,26),(308,40,19,1,0,26),(309,40,6,2,0,26),(310,40,28,1,1,26),(311,40,39,2,1,26),(312,40,43,1,0,26),(313,40,51,1,0,26),(314,40,69,10,10,26),(315,48,5,1,1,28),(316,48,8,2,1,28),(317,48,10,4,0,28),(318,48,11,3,1,28),(319,48,12,3,1,28),(320,48,13,2,1,28),(321,48,18,2,2,28),(322,48,19,3,0,28),(323,48,20,2,1,28),(324,48,23,2,0,28),(325,48,24,2,0,28),(326,48,6,3,1,28),(327,48,28,1,1,28),(328,48,36,5,5,28),(329,48,38,3,1,28),(330,48,39,3,2,28),(331,48,40,20,0,28),(332,48,42,5,2,28),(333,48,43,2,1,28),(334,48,45,2,0,28),(335,48,46,1,1,28),(336,48,47,1,1,28),(337,48,48,1,1,28),(338,48,53,1,0,28),(339,48,57,5,0,28),(340,48,58,5,0,28),(341,48,59,5,5,28),(342,48,60,2,2,28),(343,48,61,3,1,28),(344,48,62,3,1,28),(345,48,63,2,2,28),(346,48,64,2,2,28),(347,48,70,2,1,28),(348,48,76,10,0,28),(349,48,78,1,1,28),(350,48,80,3,3,28),(351,47,83,1,1,29),(352,47,84,2,0,29),(353,47,86,1,1,29),(354,47,88,1,1,29),(355,47,91,1,100,29),(356,55,84,1,0,44),(357,55,90,1,1,44),(358,42,10,2,0,45),(359,42,11,1,1,45),(360,42,12,1,1,45),(361,42,13,1,0,45),(362,42,14,1,1,45),(363,42,19,1,0,45),(364,42,20,1,0,45),(365,42,21,1,0,45),(366,42,57,3,0,45),(367,42,58,3,0,45),(368,42,84,60,0,46),(369,42,86,1,1,46),(370,42,91,200,0,46),(371,42,89,50,1,46),(372,42,90,100,0,46),(373,41,19,1,1,47),(374,41,45,1,1,47),(375,41,60,1,1,47),(376,41,84,1,0,49),(377,41,89,50,1,49),(378,36,1,1,0,50),(379,36,3,2,0,50),(380,36,4,5,5,50),(381,36,5,2,2,50),(382,36,7,1,0,50),(383,36,8,15,0,50),(384,36,9,1,0,50),(385,36,10,3,0,50),(386,36,11,3,1,50),(387,36,12,2,2,50),(388,36,13,5,1,50),(389,36,14,2,1,50),(390,36,15,10,2,50),(391,36,16,10,1,50),(392,36,18,1,1,50),(393,36,19,1,0,50),(394,36,20,1,0,50),(395,36,21,1,0,50),(396,36,22,1,0,50),(397,36,23,3,0,50),(398,36,24,4,0,50),(399,36,25,10,0,50),(400,36,6,1,0,50),(401,36,26,1,0,50),(402,36,29,10,0,50),(403,36,34,10,10,50),(404,36,35,10,0,50),(405,36,36,10,0,50),(406,36,37,10,10,50),(407,36,38,1,0,50),(408,36,39,2,1,50),(409,36,40,30,0,50),(410,36,41,20,0,50),(411,36,42,3,0,50),(412,36,43,3,0,50),(413,36,45,2,0,50),(414,36,46,2,1,50),(415,36,47,2,1,50),(416,36,48,1,0,50),(417,36,49,1,0,50),(418,36,50,1,0,50),(419,36,51,1,0,50),(420,36,52,2,1,50),(421,36,53,1,0,50),(422,36,57,3,0,50),(423,36,58,3,0,50),(424,36,59,1,1,50),(425,36,60,1,1,50),(426,36,61,2,0,50),(427,36,62,1,1,50),(428,36,63,2,1,50),(429,36,64,1,1,50),(430,36,65,1,1,50),(431,36,66,1,1,50),(432,36,67,1,1,50),(433,36,68,1,1,50),(434,36,69,15,15,50),(435,36,70,1,1,50),(436,36,72,10,0,50),(437,36,74,5,0,50),(438,36,75,10,0,50),(439,36,76,6,0,50),(440,36,78,1,1,50),(441,9,3,3,0,51),(442,9,7,1,1,51),(443,9,8,5,0,51),(444,9,9,1,0,51),(445,9,11,2,1,51),(446,9,13,2,1,51),(447,9,19,2,0,51),(448,9,36,10,10,51),(449,9,39,4,1,51),(450,9,40,20,0,51),(451,9,45,4,0,51),(452,9,57,8,0,51),(453,9,58,2,0,51),(454,9,61,1,1,51),(455,9,62,1,1,51),(456,9,63,1,1,51),(457,9,64,2,1,51),(458,9,69,30,10,51),(459,58,89,30,1,52),(460,58,8,2,2,53),(461,58,9,2,0,53),(462,58,10,6,0,53),(463,58,14,25,1,53),(464,58,15,20,2,53),(465,58,16,20,1,53),(466,58,19,2,0,53),(467,58,25,15,0,53),(468,58,6,2,1,53),(469,58,36,5,5,53),(470,58,39,100,1,53),(471,58,40,30,0,53),(472,58,46,2,2,53),(473,58,58,6,0,53),(474,58,63,1,1,53),(475,58,64,1,1,53),(476,58,78,2,2,53),(477,9,84,1,0,54),(478,9,91,100,100,54),(479,9,89,100,1,54),(480,9,90,1,1,54),(481,36,81,20,1,55),(482,36,82,2,0,55),(483,36,83,1,1,55),(484,36,84,1,0,55),(485,36,88,1,1,55),(486,28,84,70,0,56),(487,60,81,15,1,57),(488,60,82,15,0,57),(489,60,83,5,1,57),(490,60,84,5,0,57),(491,60,85,2,0,57),(492,60,88,5,1,57),(493,28,10,3,0,58),(494,28,12,3,1,58),(495,28,20,1,1,58),(496,28,22,3,0,58),(497,28,25,10,0,58),(498,28,30,25,0,58),(499,28,40,100,0,58),(500,28,42,3,2,58),(501,28,45,2,0,58),(502,28,58,6,0,58),(503,28,61,2,1,58),(504,28,64,1,1,58),(505,28,69,15,5,58),(506,18,84,60,0,59),(507,18,89,20,1,59),(508,18,10,5,0,60),(509,18,19,2,0,60),(510,18,23,3,0,60),(511,18,25,10,0,60),(512,18,36,10,10,60),(513,18,39,1,1,60),(514,18,40,25,0,60),(515,18,42,5,1,60),(516,18,50,3,1,60),(517,18,57,5,0,60),(518,18,58,5,0,60),(519,18,59,2,2,60),(520,18,69,15,15,60),(521,18,70,1,1,60),(522,34,81,60,1,61),(523,34,82,60,0,61),(524,34,83,60,1,61),(525,34,84,100,0,61),(526,34,85,60,0,61),(527,34,88,50,1,61),(528,34,91,200,200,61),(529,34,89,100,1,61),(530,34,90,300,1,61),(531,44,5,3,3,62),(532,44,7,2,0,62),(533,44,8,4,0,62),(534,44,10,2,0,62),(535,44,11,1,1,62),(536,44,12,2,2,62),(537,44,13,2,0,62),(538,44,14,4,0,62),(539,44,15,1,1,62),(540,44,18,2,2,62),(541,44,20,2,0,62),(542,44,23,3,0,62),(543,44,25,10,0,62),(544,44,6,1,0,62),(545,44,35,2,0,62),(546,44,36,20,0,62),(547,44,37,10,10,62),(548,44,39,2,0,62),(549,44,40,100,0,62),(550,44,45,3,0,62),(551,44,46,2,0,62),(552,44,52,2,2,62),(553,44,55,1,1,62),(554,44,57,2,0,62),(555,44,58,2,0,62),(556,44,59,2,2,62),(557,44,61,1,0,62),(558,44,63,1,1,62),(559,44,78,1,1,62),(560,17,8,3,0,64),(561,17,10,8,0,64),(562,17,12,10,3,64),(563,17,19,2,0,64),(564,17,28,1,1,64),(565,17,39,2,1,64),(566,17,40,50,0,64),(567,17,51,1,0,64),(568,17,53,2,0,64),(569,17,57,5,0,64),(570,17,58,5,0,64),(571,17,60,1,1,64),(572,17,61,2,0,64),(573,17,62,2,2,64),(574,17,63,3,3,64),(575,17,69,50,15,64),(576,17,78,2,2,64),(577,46,5,1,1,65),(578,46,7,1,0,65),(579,46,8,1,0,65),(580,46,9,1,0,65),(581,46,10,5,0,65),(582,46,11,5,1,65),(583,46,12,5,5,65),(584,46,14,1,0,65),(585,46,15,1,1,65),(586,46,16,1,1,65),(587,46,18,2,2,65),(588,46,19,1,0,65),(589,46,20,1,0,65),(590,46,22,1,0,65),(591,46,23,1,0,65),(592,46,24,1,0,65),(593,46,6,2,0,65),(594,46,35,5,0,65),(595,46,36,5,0,65),(596,46,39,1,0,65),(597,46,40,50,0,65),(598,46,42,5,0,65),(599,46,43,1,0,65),(600,46,46,1,0,65),(601,46,47,1,0,65),(602,46,48,1,0,65),(603,46,53,1,0,65),(604,46,55,1,1,65),(605,46,57,5,0,65),(606,46,58,5,0,65),(607,46,61,3,0,65),(608,46,62,3,1,65),(609,46,64,2,2,65),(610,46,65,1,1,65),(611,46,66,1,1,65),(612,46,69,35,15,65),(613,46,75,15,0,65),(614,46,78,1,1,65),(615,46,81,1,1,66),(616,46,83,10,1,66),(617,46,84,90,0,66),(618,46,86,2,1,66),(619,46,92,1,1,66),(620,46,88,15,1,66),(621,46,91,50,100,66),(622,46,89,20,1,66),(623,46,90,3,1,66),(624,17,84,5,0,67),(625,17,86,2,2,67),(626,54,7,1,0,68),(627,54,8,5,0,68),(628,54,9,1,0,68),(629,54,10,5,0,68),(630,54,11,4,1,68),(631,54,12,4,4,68),(632,54,13,4,1,68),(633,54,14,1,1,68),(634,54,16,1,1,68),(635,54,20,1,0,68),(636,54,39,1,1,68),(637,54,40,25,0,68),(638,54,42,5,0,68),(639,54,51,1,0,68),(640,54,52,1,1,68),(641,54,57,4,0,68),(642,54,58,4,0,68),(643,54,70,2,1,68),(644,54,76,12,0,68),(645,54,77,5,0,68),(646,20,5,2,2,69),(647,20,7,2,0,69),(648,20,8,15,0,69),(649,20,9,2,0,69),(650,20,10,6,0,69),(651,20,11,5,1,69),(652,20,12,10,3,69),(653,20,13,5,1,69),(654,20,14,2,1,69),(655,20,15,1,1,69),(656,20,16,1,1,69),(657,20,18,1,1,69),(658,20,19,3,0,69),(659,20,21,2,0,69),(660,20,22,2,0,69),(661,20,25,15,0,69),(662,20,6,3,1,69),(663,20,26,2,1,69),(664,20,27,1,1,69),(665,20,28,2,1,69),(666,20,30,2,0,69),(667,20,31,2,0,69),(668,20,32,2,0,69),(669,20,33,1,0,69),(670,20,35,5,0,69),(671,20,36,10,3,69),(672,20,39,2,1,69),(673,20,40,100,0,69),(674,20,42,2,1,69),(675,20,43,2,0,69),(676,20,44,1,0,69),(677,20,45,2,0,69),(678,20,46,1,1,69),(679,20,47,1,0,69),(680,20,48,1,0,69),(681,20,49,1,0,69),(682,20,51,10,0,69),(683,20,53,1,0,69),(684,20,54,2,0,69),(685,20,56,1,0,69),(686,20,57,3,0,69),(687,20,58,3,0,69),(688,20,59,3,3,69),(689,20,60,3,3,69),(690,20,61,3,0,69),(691,20,62,2,2,69),(692,20,63,2,2,69),(693,20,64,1,1,69),(694,20,65,1,1,69),(695,20,66,1,1,69),(696,20,69,10,15,69),(697,20,70,2,1,69),(698,20,71,10,0,69),(699,20,72,10,0,69),(700,20,73,5,0,69),(701,20,74,10,0,69),(702,20,75,1,0,69),(703,20,76,2,0,69),(704,20,77,2,0,69),(705,20,78,2,2,69),(706,54,84,25,0,70),(707,60,7,15,0,71),(708,60,8,3,0,71),(709,60,10,4,0,71),(710,60,14,4,0,71),(711,60,15,4,3,71),(712,60,16,4,1,71),(713,60,17,1,1,71),(714,60,19,2,0,71),(715,60,20,1,0,71),(716,60,23,2,0,71),(717,60,24,1,0,71),(718,60,25,15,0,71),(719,60,6,2,0,71),(720,60,26,2,0,71),(721,60,27,1,1,71),(722,60,29,1,0,71),(723,60,35,1,0,71),(724,60,36,3,0,71),(725,60,37,3,6,71),(726,60,38,2,0,71),(727,60,39,1,1,71),(728,60,40,20,0,71),(729,60,41,20,0,71),(730,60,42,3,0,71),(731,60,43,2,0,71),(732,60,45,1,0,71),(733,60,46,1,1,71),(734,60,47,1,0,71),(735,60,51,2,0,71),(736,60,57,4,0,71),(737,60,58,4,0,71),(738,60,59,4,2,71),(739,60,61,1,0,71),(740,60,62,1,1,71),(741,60,70,2,1,71),(742,60,76,1,0,71),(743,19,8,2,0,72),(744,19,9,1,0,72),(745,19,19,1,0,72),(746,19,22,4,0,72),(747,19,6,1,0,72),(748,19,26,1,0,72),(749,19,29,1,0,72),(750,19,35,5,0,72),(751,19,36,5,0,72),(752,19,40,50,0,72),(753,19,42,2,0,72),(754,19,43,1,0,72),(755,19,58,5,0,72),(756,19,69,20,0,72),(757,19,70,1,0,72),(758,19,76,5,0,72),(759,19,78,1,0,72),(760,49,83,50,1,74),(761,49,84,100,0,74),(762,49,85,100,0,74),(763,49,86,100,2,74),(764,49,87,100,1,74),(765,49,92,0,0,74),(766,49,88,20,1,74),(767,49,91,100,100,74),(768,49,89,50,1,74),(769,49,90,100,1,74),(770,59,8,5,0,75),(771,59,9,2,0,75),(772,59,11,3,1,75),(773,59,12,3,3,75),(774,59,13,2,0,75),(775,59,15,3,1,75),(776,59,16,3,1,75),(777,59,19,3,0,75),(778,59,20,2,0,75),(779,59,21,1,0,75),(780,59,22,3,0,75),(781,59,23,2,0,75),(782,59,24,3,0,75),(783,59,25,12,0,75),(784,59,35,10,0,75),(785,59,36,15,0,75),(786,59,38,5,0,75),(787,59,39,4,0,75),(788,59,40,100,0,75),(789,59,42,4,0,75),(790,59,43,4,0,75),(791,59,45,5,0,75),(792,59,46,3,0,75),(793,59,47,2,0,75),(794,59,48,2,0,75),(795,59,49,2,0,75),(796,59,50,2,0,75),(797,59,57,6,0,75),(798,59,58,7,0,75),(799,59,59,5,0,75),(800,59,60,2,0,75),(801,59,61,4,0,75),(802,59,62,3,0,75),(803,59,63,4,2,75),(804,59,64,3,3,75),(805,59,70,3,1,75),(806,59,76,2,0,75),(807,59,83,20,1,76),(808,59,84,200,0,76),(809,59,86,50,1,76),(810,59,92,100,2,76),(811,59,88,20,1,76),(812,59,91,200,200,76),(813,59,89,50,1,76),(814,53,83,15,1,78),(815,53,84,60,0,78),(816,53,85,15,0,78),(817,53,88,20,1,78),(818,53,5,1,1,79),(819,53,7,1,0,79),(820,53,8,10,0,79),(821,53,11,1,1,79),(822,53,12,2,2,79),(823,53,13,2,1,79),(824,53,19,2,0,79),(825,53,20,1,1,79),(826,53,21,2,0,79),(827,53,26,1,0,79),(828,53,28,1,1,79),(829,53,36,6,0,79),(830,53,38,1,0,79),(831,53,39,1,1,79),(832,53,40,20,0,79),(833,53,42,5,0,79),(834,53,43,1,0,79),(835,53,45,1,0,79),(836,53,46,1,1,79),(837,53,49,1,0,79),(838,53,53,1,0,79),(839,53,57,5,0,79),(840,53,58,5,0,79),(841,53,59,3,3,79),(842,53,61,1,0,79),(843,53,62,1,1,79),(844,53,76,1,0,79),(845,76,18,2,2,82),(846,76,19,4,0,82),(847,76,40,4,4,82),(848,76,54,2,1,82),(849,62,5,5,0,83),(850,62,9,2,0,83),(851,62,11,36,0,83),(852,62,13,36,0,83),(853,62,15,4,0,83),(854,62,16,8,0,83),(855,62,24,10,0,83),(856,62,25,100,0,83),(857,62,6,10,0,83),(858,62,26,8,0,83),(859,62,36,100,0,83),(860,62,38,5,0,83),(861,62,40,2,0,83),(862,62,42,12,0,83),(863,62,43,3,0,83),(864,62,46,5,0,83),(865,62,47,5,0,83),(866,62,48,5,0,83),(867,62,49,5,0,83),(868,62,50,12,0,83),(869,62,53,2,0,83),(870,62,54,4,0,83),(871,62,57,12,0,83),(872,62,58,12,0,83),(873,62,59,12,0,83),(874,62,63,12,0,83),(875,62,73,20,0,83),(876,62,74,100,0,83),(877,62,76,20,0,83),(878,62,77,20,0,83),(879,62,78,5,0,83),(880,1,81,3,0,85),(881,1,91,10,0,85),(882,1,91,10,0,87);
/*!40000 ALTER TABLE `movimientoconsumibles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:22

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
-- Table structure for table `movimientosinventario`
--

DROP TABLE IF EXISTS `movimientosinventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movimientosinventario` (
  `idMovimientosInventario` int(11) NOT NULL,
  `piezas` int(11) NOT NULL,
  `idLugarTrabajo` int(11) NOT NULL,
  `idPapeleria` int(11) NOT NULL,
  PRIMARY KEY (`idMovimientosInventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimientosinventario`
--

LOCK TABLES `movimientosinventario` WRITE;
/*!40000 ALTER TABLE `movimientosinventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimientosinventario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:22

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
-- Table structure for table `papeleria`
--

DROP TABLE IF EXISTS `papeleria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `papeleria` (
  `idPapeleria` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(45) NOT NULL,
  `stockMinimo` int(11) NOT NULL DEFAULT '0',
  `minimoSucursal` int(11) NOT NULL DEFAULT '0',
  `maximoSucursal` int(11) NOT NULL,
  `folio` tinyint(4) NOT NULL DEFAULT '0',
  `formato` varchar(45) NOT NULL,
  `soloDepartamento` tinyint(4) NOT NULL,
  `idTipoPapeleria` int(11) NOT NULL,
  PRIMARY KEY (`idPapeleria`),
  KEY `fk_insumo_tipoDeInsumo1_idx` (`idTipoPapeleria`),
  CONSTRAINT `fk_insumo_tipoDeInsumo1` FOREIGN KEY (`idTipoPapeleria`) REFERENCES `tipopapeleria` (`idTipoPapeleria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `papeleria`
--

LOCK TABLES `papeleria` WRITE;
/*!40000 ALTER TABLE `papeleria` DISABLE KEYS */;
INSERT INTO `papeleria` VALUES (1,'acetatos',57,1,50,0,'piezas',1,1),(2,'bateria AA',57,1,50,0,'piezas',1,1),(3,'broche para archivo 7cm',57,1,50,0,'caja',1,1),(4,'broche para archivo 8cm',57,1,50,0,'caja',0,1),(5,'calculadora',57,1,50,0,'piezas',0,1),(6,'cúter',57,1,50,0,'piezas',0,1),(7,'chinches',57,1,50,0,'caja',1,1),(8,'cinta adhesiva (diurex)',57,1,50,0,'piezas',0,1),(9,'cinta doble cara',57,1,50,0,'piezas',1,1),(10,'cinta métrica',57,1,50,0,'piezas',1,1),(11,'cinta para empaque (canela)',57,1,50,0,'piezas',0,1),(12,'cinta para empaque (roja)',57,1,50,0,'piezas',0,1),(13,'cinta para empaque (transparente)',57,1,50,0,'piezas',0,1),(14,'clip estandar #2',57,1,50,0,'caja',0,1),(15,'clip mariposa #1',57,1,50,0,'caja',0,1),(16,'clips mariposa #2',57,1,50,0,'caja',0,1),(17,'cojines para sello',57,1,50,0,'piezas',0,1),(18,'comprobante de gastos',57,1,50,0,'block',0,1),(19,'corrector en cinta',57,1,50,0,'piezas',1,1),(20,'corrector liquido',57,1,50,0,'piezas',0,1),(21,'cuaderno frances cuadro chico',57,1,50,0,'piezas',0,1),(22,'cuaderno frances cuadro grande',57,1,50,0,'piezas',1,1),(23,'cuaderno profesional cuadro chico',57,1,50,0,'piezas',0,1),(24,'cuaderno profesional cuadro grande',57,1,50,0,'piezas',1,1),(25,'cubre hojas',57,1,50,0,'piezas',1,1),(26,'dedales',57,1,50,0,'piezas',1,1),(27,'desengrapadora',57,1,50,0,'piezas',0,1),(28,'engrapadora',57,1,50,0,'piezas',0,1),(29,'etiquetas varias',57,1,50,0,'planilla',1,1),(30,'folder carta amarillo',57,1,50,0,'piezas',1,1),(31,'folder carta morado',57,1,50,0,'piezas',1,1),(32,'folder carta rosa',57,1,50,0,'piezas',1,1),(33,'folder de costilla',57,1,50,0,'piezas',1,1),(34,'folder oficio amarillo',57,1,50,0,'piezas',1,1),(35,'folders con broche',57,1,50,0,'piezas',1,1),(36,'folders tamaño carta',57,1,50,0,'piezas',0,1),(37,'folders tamaño oficio',57,1,50,0,'piezas',1,1),(38,'goma',57,1,50,0,'piezas',0,1),(39,'grapas',57,1,50,0,'piezas',0,1),(40,'hojas blancas',57,1,50,0,'paquete',0,1),(41,'hojas tamaño oficio',57,1,50,0,'piezas',1,1),(42,'lápiz',57,1,50,0,'piezas',0,1),(43,'lápiz adhesivo',57,1,50,0,'piezas',0,1),(44,'libro florete',57,1,50,0,'piezas',1,1),(45,'ligas de hule',57,1,50,0,'piezas',0,1),(46,'marca textos amarillo',57,1,50,0,'piezas',0,1),(47,'marca textos naranja',57,1,50,0,'piezas',0,1),(48,'marca textos rosa',57,1,50,0,'piezas',1,1),(49,'marca textos verde',57,1,50,0,'piezas',1,1),(50,'marcador de cera',57,1,50,0,'piezas',1,1),(51,'navajas cúter',57,1,50,0,'paquete',0,1),(52,'navajas cúter chico',57,1,50,0,'paquete',0,1),(53,'notas adhesivas (post-it)',57,1,50,0,'block',0,1),(54,'notas adhesivas banderas (post-it)',57,1,50,0,'piezas',1,1),(55,'perforadora 2 orificios',57,1,50,0,'piezas',0,1),(56,'perforadora 3 orificios',57,1,50,0,'piezas',1,1),(57,'pluma azul',57,1,50,0,'piezas',0,1),(58,'pluma negra',57,1,50,0,'piezas',0,1),(59,'pluma roja',57,1,50,0,'piezas',0,1),(60,'plumón para billetes',57,1,50,0,'piezas',0,1),(61,'plumón permanente delgado negro',57,1,50,0,'piezas',0,1),(62,'plumón permanente delgado rojo',57,1,50,0,'piezas',0,1),(63,'plumón permanente grueso negro',57,1,50,0,'piezas',0,1),(64,'plumón permanente grueso rojo',57,1,50,0,'piezas',0,1),(65,'porta diurex',57,1,50,0,'piezas',0,1),(66,'regla 30cm metal',57,1,50,0,'piezas',1,1),(67,'regla 30cm transparente',57,1,50,0,'piezas',1,1),(68,'rollos bond',57,1,50,0,'piezas',0,1),(69,'rollos térmicos',57,1,50,0,'piezas',0,1),(70,'sacapuntas',57,1,50,0,'piezas',0,1),(71,'separadores de cartulina',57,1,50,0,'paquete',1,1),(72,'separadores de plastico',57,1,50,0,'paquete',1,1),(73,'sobre esquela',57,1,50,0,'piezas',1,1),(74,'sobre manila tamaño carta',57,1,50,0,'piezas',1,1),(75,'solicitud de empleo',57,1,50,0,'piezas',1,1),(76,'sujeta documentos',57,1,50,0,'piezas',1,1),(77,'sujeta documentos grande',57,1,50,0,'piezas',1,1),(78,'tijeras',57,1,50,0,'piezas',0,1),(79,'tinta para sello',57,1,50,0,'piezas',0,1),(80,'vale provisional de caja',57,1,50,0,'block',0,1),(81,'checklist revision de prendas',57,1,50,0,'block',0,2),(82,'checklist revision de prendas CEDIS',57,1,50,0,'block',1,2),(83,'concentrado de gastos',57,1,50,0,'block',0,2),(84,'corte de caja',57,1,50,0,'block',0,2),(85,'corte de caja (moments)',57,1,50,0,'block',0,2),(86,'formato de guía',57,1,50,1,'block',0,2),(87,'marbete',57,1,50,0,'block',0,2),(88,'relacion pasajes',57,1,50,0,'block',0,2),(89,'tasa de conversion',57,1,50,0,'piezas',0,2),(90,'vale sastreria',57,1,50,1,'block',0,2),(91,'tarjeta de presentación',57,1,50,0,'piezas',0,2),(92,'notas',57,1,50,1,'block',0,2),(93,'tarjetas bolivar',200,200,1000,0,'piezas',0,2),(94,'tarjetas primero de mayo',200,200,1000,0,'piezas',0,2),(95,'tarjetas plaza del sol',200,200,1000,0,'piezas',0,2),(96,'tarjetas aragon ',200,200,1000,0,'piezas',0,2),(97,'tarjetas san agustin',200,200,1000,0,'piezas',0,2),(98,'tarjetas plaza rio',200,200,1000,0,'piezas',0,2),(99,'tarjetas morelos 1',200,200,1000,0,'piezas',0,2),(100,'tarjetas morelos 3',200,200,1000,0,'piezas',0,2),(101,'tarjetas cuernavaca',200,200,1000,0,'piezas',0,2),(102,'tarjetas niños heroes',200,200,1000,0,'piezas',0,2),(103,'tarjetas puebla centro',200,200,1000,0,'piezas',0,2),(104,'tarjetas 5 de mayo',200,200,1000,0,'piezas',0,2),(105,'tarjetas irapuato',200,200,1000,0,'piezas',0,2),(106,'tarjetas galerias gdl',200,200,1000,0,'piezas',0,2),(107,'tarjetas pachuca',200,200,1000,0,'piezas',0,2),(108,'tarjetas lerma',200,200,1000,0,'piezas',0,2),(109,'tarjetas outlet gdl',200,200,1000,0,'piezas',0,2),(110,'tarjetas ixtapaluca',200,200,1000,0,'piezas',0,2),(111,'tarjetas tezontle',200,200,1000,0,'piezas',0,2),(112,'tarjetas plaza dorada',200,200,1000,0,'piezas',0,2),(113,'tarjetas neza 1',200,200,1000,0,'piezas',0,2),(114,'tarjetas gdl centro',200,200,1000,0,'piezas',0,2),(115,'tarjetas estrellas',200,200,1000,0,'piezas',0,2),(116,'tarjetas vallejo',200,200,1000,0,'piezas',0,2),(117,'tarjetas queretaro sendero',200,200,1000,0,'piezas',0,2),(118,'tarjetas tlaquepaque',200,200,1000,0,'piezas',0,2),(119,'tarjetas plaza satelite',200,200,1000,0,'piezas',0,2),(120,'tarjetas outlet puebla',200,200,1000,0,'piezas',0,2),(121,'tarjetas toluca centro',200,200,1000,0,'piezas',0,2),(122,'tarjetas neza chedraui',200,200,1000,0,'piezas',0,2),(123,'tarjetas acoxpa',200,200,1000,0,'piezas',0,2),(124,'tarjetas la rosa',200,200,1000,0,'piezas',0,2),(125,'tarjetas galerias atizapan',200,200,1000,0,'piezas',0,2),(126,'tarjetas punta norte',200,200,1000,0,'piezas',0,2),(127,'tarjetas polanco',200,200,1000,0,'piezas',0,2),(128,'tarjetas cuicuilco',200,200,1000,0,'piezas',0,2),(129,'tarjetas aguascalientes',200,200,1000,0,'piezas',0,2),(130,'tarjetas villasuncion',200,200,1000,0,'piezas',0,2),(131,'tarjetas san luis sendero',200,200,1000,0,'piezas',0,2),(132,'tarjetas san luis centro',200,200,1000,0,'piezas',0,2),(133,'tarjetas parque celaya',200,200,1000,0,'piezas',0,2),(134,'tarjetas morelia',200,200,1000,0,'piezas',0,2),(135,'tarjetas fiesta anahuac',200,200,1000,0,'piezas',0,2),(136,'tarjetas leon centro max',200,200,1000,0,'piezas',0,2),(137,'tarjetas queretaro centro',200,200,1000,0,'piezas',0,2),(138,'tarjetas plaza cumbres',200,200,1000,0,'piezas',0,2),(139,'tarjetas plaza tlalne',200,200,1000,0,'piezas',0,2),(140,'tarjetas plaza patria',200,200,1000,0,'piezas',0,2),(141,'tarjetas león centro',200,200,1000,0,'piezas',0,2),(142,'tarjetas explanada puebla',200,200,1000,0,'piezas',0,2),(143,'tarjetas las antenas',200,200,1000,0,'piezas',0,2),(144,'tarjetas outlet queretaro',200,200,1000,0,'piezas',0,2),(145,'notas bolivar',4,2,8,1,'block',0,2),(146,'notas primero de mayo',4,2,8,1,'block',0,2),(147,'notas plaza del sol',4,2,8,1,'block',0,2),(148,'notas aragon ',4,2,8,1,'block',0,2),(149,'notas san agustin',4,2,8,1,'block',0,2),(150,'notas plaza rio',4,2,8,1,'block',0,2),(151,'notas morelos 1',4,2,8,1,'block',0,2),(152,'notas morelos 3',4,2,8,1,'block',0,2),(153,'notas cuernavaca',4,2,8,1,'block',0,2),(154,'notas niños heroes',4,2,8,1,'block',0,2),(155,'notas puebla centro',4,2,8,1,'block',0,2),(156,'notas 5 de mayo',4,2,8,1,'block',0,2),(157,'notas irapuato',4,2,8,1,'block',0,2),(158,'notas galerias gdl',4,2,8,1,'block',0,2),(159,'notas pachuca',4,2,8,1,'block',0,2),(160,'notas lerma',4,2,8,1,'block',0,2),(161,'notas outlet gdl',4,2,8,1,'block',0,2),(162,'notas ixtapaluca',4,2,8,1,'block',0,2),(163,'notas tezontle',4,2,8,1,'block',0,2),(164,'notas plaza dorada',4,2,8,1,'block',0,2),(165,'notas neza 1',4,2,8,1,'block',0,2),(166,'notas gdl centro',4,2,8,1,'block',0,2),(167,'notas estrellas',4,2,8,1,'block',0,2),(168,'notas vallejo',4,2,8,1,'block',0,2),(169,'notas queretaro sendero',4,2,8,1,'block',0,2),(170,'notas tlaquepaque',4,2,8,1,'block',0,2),(171,'notas plaza satelite',4,2,8,1,'block',0,2),(172,'notas outlet puebla',4,2,8,1,'block',0,2),(173,'notas toluca centro',4,2,8,1,'block',0,2),(174,'notas neza chedraui',4,2,8,1,'block',0,2),(175,'notas acoxpa',4,2,8,1,'block',0,2),(176,'notas la rosa',4,2,8,1,'block',0,2),(177,'notas galerias atizapan',4,2,8,1,'block',0,2),(178,'notas punta norte',4,2,8,1,'block',0,2),(179,'notas polanco',4,2,8,1,'block',0,2),(180,'notas cuicuilco',4,2,8,1,'block',0,2),(181,'notas aguascalientes',4,2,8,1,'block',0,2),(182,'notas villasuncion',4,2,8,1,'block',0,2),(183,'notas san luis sendero',4,2,8,1,'block',0,2),(184,'notas san luis centro',4,2,8,1,'block',0,2),(185,'notas parque celaya',4,2,8,1,'block',0,2),(186,'notas morelia',4,2,8,1,'block',0,2),(187,'notas fiesta anahuac',4,2,8,1,'block',0,2),(188,'notas leon centro max',4,2,8,1,'block',0,2),(189,'notas queretaro centro',4,2,8,1,'block',0,2),(190,'notas plaza cumbres',4,2,8,1,'block',0,2),(191,'notas plaza tlalne',4,2,8,1,'block',0,2),(192,'notas plaza patria',4,2,8,1,'block',0,2),(193,'notas león centro',4,2,8,1,'block',0,2),(194,'notas explanada puebla',4,2,8,1,'block',0,2),(195,'notas las antenas',4,2,8,1,'block',0,2),(196,'notas outlet queretaro',4,2,8,1,'block',0,2);
/*!40000 ALTER TABLE `papeleria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:26

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
-- Table structure for table `productonuevo`
--

DROP TABLE IF EXISTS `productonuevo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productonuevo` (
  `idProductoNuevo` int(11) NOT NULL,
  `producto` varchar(45) NOT NULL,
  `piezas` int(11) NOT NULL,
  `uso` varchar(140) NOT NULL,
  `idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idProductoNuevo`),
  KEY `fk_productoNuevo_usuarios1_idx` (`idUsuarios`),
  CONSTRAINT `fk_productoNuevo_usuarios1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productonuevo`
--

LOCK TABLES `productonuevo` WRITE;
/*!40000 ALTER TABLE `productonuevo` DISABLE KEYS */;
/*!40000 ALTER TABLE `productonuevo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:25

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
-- Table structure for table `rastreo`
--

DROP TABLE IF EXISTS `rastreo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rastreo` (
  `idRastreo` int(11) NOT NULL AUTO_INCREMENT,
  `rastreo` varchar(45) NOT NULL,
  PRIMARY KEY (`idRastreo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rastreo`
--

LOCK TABLES `rastreo` WRITE;
/*!40000 ALTER TABLE `rastreo` DISABLE KEYS */;
INSERT INTO `rastreo` VALUES (1,'solicitud'),(2,'revisando'),(3,'enviado'),(4,'tienda');
/*!40000 ALTER TABLE `rastreo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:25

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
-- Table structure for table `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursales` (
  `idSucursales` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` int(11) NOT NULL,
  `sucursal` varchar(45) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `region` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `cp` int(11) NOT NULL,
  PRIMARY KEY (`idSucursales`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursales`
--

LOCK TABLES `sucursales` WRITE;
/*!40000 ALTER TABLE `sucursales` DISABLE KEYS */;
INSERT INTO `sucursales` VALUES (1,1,'bolivar','Bolivar 34 P.B','(106) Cdmx - Centro Sur','Centro Histórico',' Delegacion Cuauhtemoc',' Ciudad de México','4593-8058','vfbolivar@vittorioforti.com.mx',6000),(2,2,'primero de mayo','Calle del Esfuerzo 1 Locales A-1 y A-3','(101) Cdmx - Norte','Colonia Lazaro Cardenas',' Naucalpan de Juarez',' Estado de México','5989-8371','vf1demayo@vittorioforti.com.mx',53489),(3,3,'plaza del sol','Avenida López Mateos Sur 2375 Local 3 D-1','(107) Guadalajara','Ciudad del Sol',' Zapopan',' Jalisco','01(33)2387-8031','vfplazadelsol@vittorioforti.com.mx',45050),(4,4,'aragon ','Avenida Carlos Hank González 120 Local 206','(101) Cdmx - Oriente','Rinconada de Aragon',' Ecatepec de Morelos',' Estado de México','5109-2331','vfaragon@vittorioforti.com.mx',53560),(5,5,'san agustin','Avenida Real De San Agustin 1000 Local 1336','(103) Monterrey - Tijuana','Residencial',' San Agustín San Pedro Garza Garcia',' Monterrey','01(81)2044-5449','vfsanagustin@vittorioforti.com.mx',66220),(6,6,'plaza rio','Paseo de los Heroes 96 local A-5','(107) Guadalajara','Zona Urbana',' Río Tijuana',' Baja California','01(81)2044-5449','vfplazario@vittorioforti.com.mx',22010),(7,7,'morelos 1','Prolongación José María Morelos 433-A Oriente','(103) Monterrey - Tijuana','Centro',' Monterrey',' Nuevo León','01(81)2044-5449','vfmorelos1@vittorioforti.com.mx',64000),(8,8,'morelos 3','Prolongación José María Morelos 228','(103) Monterrey - Tijuana','Centro',' Monterrey',' Nuevo León','01(81)2044-5449','vfmorelos3@vittorioforti.com.mx',64000),(9,88,'cuernavaca','Jacarandas S/N Local 5','(106) Cdmx - Centro Sur','Ampliación Ricardo Flores Magon',' Cuernavaca',' Morelos','4593-8058','vfcuernavaca@vittorioforti.com.mx',62370),(10,9,'niños heroes','Tercera N° 1802 Pb.','(107) Guadalajara','Centro',' Tijuana',' Baja Califonia','01(81)2044-5449','vfninosheroes@vittorioforti.com.mx',22000),(11,10,'puebla centro','5 de Mayo 204 local C','(100) Puebla - Toluca','Centro',' Puebla',' Puebla','01(22)2269-6300','vfpuebla@vittorioforti.com.mx',72000),(12,11,'5 de mayo','Avenida 5 de Mayo 32','(106) Cdmx - Centro Sur','Centro Histórico',' Delegacion Cuauhtemoc',' Ciudad de México','4593-8058','vf5demayo@vittorioforti.com.mx',6000),(13,12,'irapuato','Boulevard Villas de Irapuato 1443 Local 59, Plaza Comercial Cibeles','Bajio 1','Quinta Villas',' Irapuato',' Guanajuato','01(44)2593-0006','vfirapuato@vittorioforti.com.mx',36643),(14,13,'galerias gdl','Avenida Rafael Sanzio 150 K 16','(107) Guadalajara','Residencial La Estancia',' Zapopan',' Jalisco','01(33)2387-8031','vfgalerias@vittorioforti.com.mx',45030),(15,14,'pachuca','Camino Real de la Plata 100 Local 138','(101) Cdmx - Norte','Zona Plateada',' Pachuca',' Hidalgo','5989-8371','vfpachuca@vittorioforti.com.mx',42080),(16,15,'lerma','Carretera Mexico-Toluca Km. 50 Local L-42','(100) Puebla - Toluca','La Isla Lerma',' Toluca',' Estado de México','01(22)2269-6300','vflerma@vittorioforti.com.mx',52000),(17,17,'outlet gdl','Carretera Guadalajara-Morelia Km. 12.5 local L-92','(107) Guadalajara','Zona Centro',' Tlajomulco de Zuñiga',' Jalisco','01(33)2387-8031','vfoutlet@vittorioforti.com.mx',45640),(18,18,'ixtapaluca',' Carretera Federal 1 México-Cuatla, Centro Comercial Sendero Ixtapaluca Local14-D','(101) Cdmx - Oriente','Santa Barbara',' Ixtapaluca',' Estado De Mexico','5109-2331','vfixtapaluca@vittorioforti.com.mx',56538),(19,20,'tezontle','Avenida Canal De Tezontle 1512 Local 270','(101) Cdmx - Oriente','Doctor Alfonso Ortiz Tirado',' Iztapalapa',' Ciudad de México','5109-2331','vftezontle@vittorioforti.com.mx',9020),(20,21,'plaza dorada','Boulevard Héroes del 5 de Mayo 3510','(100) Puebla - Toluca','Col. Anzures',' Puebla',' Puebla','01(22)2269-6300','vfdorada@vittorioforti.com.mx',72534),(21,23,'neza 1','Avenida Bordo de Xochiaca 3 Local 17','(101) Cdmx - Oriente','Ciudad Jardín Bicentenario',' Nezahualcóyotl',' Estado de México','5109-2331','vfneza@vittorioforti.com.mx',57100),(22,24,'gdl centro','Avenida Juárez 218-222','(107) Guadalajara','Zona Centro',' Guadalajara',' Jalisco','01(33)2387-8031','vfgcentro@vittorioforti.com.mx',44100),(23,25,'estrellas','Melchor Ocampo 193,  Local B-24','(106) Cdmx - Centro Sur','Veronica Anzures',' Delegacion Miguel Hidalgo',' Ciudad de México','4593-8058','vfestrellas@vittorioforti.com.mx',11300),(24,26,'vallejo','Norte 45 1017 Local 12','(101) Cdmx - Norte','Industrial Vallejo',' Delegación Azcapotzalco',' Ciudad de México','5989-8371','vfvallejo@vittorioforti.com.mx',2300),(25,28,'queretaro sendero','Avenida Revolución 99 Local 8','Bajio 1','El Rocio',' Querétaro',' Querétaro','01(44)2593-0006','vfqueretaro@vittorioforti.com.mx',76114),(26,30,'tlaquepaque','Boulevard General Marcelino García Barragán 2077 Local 19 P.B.','(107) Guadalajara','Prados del Nilo',' Guadalajara',' Jalisco','01(33)2387-8031','vftlaquepaque@vittorioforti.com.mx',44840),(27,32,'plaza satelite','Circuito Centro Comercial 2251 Local C-128','(101) Cdmx - Norte','Ciudad Satélite',' Naucalpan',' Estado de México','5989-8371','vfPlazaSatelite@vittorioforti.com.mx',53100),(28,33,'outlet puebla','Autopista México-Puebla Km. 115 Local 5-C','(100) Puebla - Toluca','San Francisco Ocotlán',' Coronango',' Puebla ','01(22)2269-6300','vfOutletPuebla@vittorioforti.com.mx',72670),(29,34,'toluca centro','Mariano Matamoros 100-B','(100) Puebla - Toluca','Centro',' Toluca',' Estado de México','01(22)2269-6300','vftolucacentro@vittorioforti.com.mx',50100),(30,35,'neza chedraui','Cuarta Avenida S/N Locales 59, 60 y 61','(101) Cdmx - Oriente','Benito Juárez',' Nezahualcóyotl',' Estado de México','5109-2331','vfNezaChedraui@vittorioforti.com.mx',57000),(31,36,'acoxpa','Calzada Acoxpa 430 Local 82','(106) Cdmx - Centro Sur','Ex-Hacienda Coapa',' Tlalpan',' Ciudad de México','4593-8058','vfpaseoacoxpa@vittorioforti.com.mx',14300),(32,37,'la rosa','Londres 127 Local 29','(106) Cdmx - Centro Sur','Juárez',' Cuauhtemoc',' Ciudad de México','4593-8058','vfplazalarosa@vittorioforti.com.mx',6000),(33,38,'galerias atizapan','Avenida Adolfo Ruiz Cortinez 255 Manzana 2 Lote 1 Local 152','(101) Cdmx - Norte','Las Margaritas',' Atizapan de Zaragoza',' Estado de México','5989-8371','vfgaleriasatizapan@vittorioforti.com.mx',52977),(34,39,'punta norte','Hacienda Sierra Vieja lote 2 Lote 14 Local 1118','(101) Cdmx - Norte','Hacienda del Parque',' Cuautitlan Izcalli',' Estado de México','5989-8371','vfpuntanorte@vittorioforti.com.mx',54769),(35,40,'polanco','Boulevard Miguel De Cervantes Savedran 397 Locales 38, 39 y 40','(101) Cdmx - Oriente','Irrigacion',' Miguel Hidalgo',' Ciudad de México','5109-2331','vfpolanco@vittorioforti.com.mx',11579),(36,55,'cuicuilco','Avenida San Fernando 649 Local 7','(106) Cdmx - Centro Sur','Peña Pobre',' Tlalpan',' Ciudad de México','4593-8058','vfcuicuilco@vittorioforti.com.mx',14060),(37,57,'aguascalientes','Avenida Francisco I. Madero 203','(107) Guadalajara','Zona Centro',' Aguascalientes',' Aguascalientes','01(33)2387-8031','vfaguascalientes@vittorioforti.com.mx',20000),(38,58,'villasuncion','Boulevard Jose Maria Chavez S/N Local 6 K1','Bajio 2','Mesoneros',' Aguascalientes',' Aguascalientes','01(33)2387-8031','vfvillasuncion@vittorioforti.com.mx',20289),(39,59,'san luis sendero','Benito Juárez 2005 Local 9 Bloque C','Bajio 1','Fraccionamiento Estrella de Oriente',' San Luis Potosi',' San Luis Potosi','01(44)2593-0006','vfsanluis@vittorioforti.com.mx',78396),(40,60,'san luis centro','Miguel Hidalgo 300-A','Bajio 1','Centro',' San Luis Potosi',' Sam Luis Potosi','01(44)2593-0006','vfsanluiscentro@vittorioforti.com.mx',78000),(41,61,'parque celaya','Eje Nor Poniente 801 Locales C-02,  C-03 y C-04','Bajio 1','15 de Mayo',' Celaya',' Guanajuato','01(44)2593-0006','vfparquecelaya@vittorioforti.com.mx',38020),(42,62,'zacatecas','Avenida Hidalgo 307','(107) Guadalajara','Centro',' Zacatecas',' Zacatecas','01(33)2387-8031','vfzacatecas@vittorioforti.com.mx',98000),(43,63,'morelia','Avenida Morelos Sur 45','Bajio 2','Morelia Centro',' Morelia',' Michoacan','01(33)3146-0501','vfmorelia@vittorioforti.com.mx',58000),(44,64,'fiesta anahuac','Manuel L. Barrgan 325 Norte Local 1022','(103) Monterrey - Tijuana','Residencial Anáhuac',' Monterrey',' Nuevo León','01(81)2044-5449','vfanahuac@vittorioforti.com.mx',66457),(45,65,'leon centro max','Boulevard Adolfo López Mateos Oriente 2518 Local 46','(107) Guadalajara','Jardines de Jerez',' León',' Guanajuato','01(33)2387-8031','vfcentromax@vittorioforti.com.mx',37530),(46,66,'queretaro centro','Benito Juarez Sur 20','Bajio 1','Centro',' Querétaro',' Querétaro','01(44)2593-0006','vfqueretarocentro@vittorioforti.com.mx',76000),(47,67,'plaza cumbres','Avenida Hacienda De Peñuelas 6773 Locales 1159 Y 1161','(103) Monterrey - Tijuana','Cumbres Las Palmas',' Monterrey',' Nuevo Leon','01(81)2044-5449','vfcumbres@vittorioforti.com.mx',64349),(48,68,'pabellon cuauhtemoc','Antonio Manuel Anza 20 Locales 22 y 23','(106) Cdmx - Centro Sur','Roma Sur',' Cuauhtemoc',' Ciudad de México','4593-8058','vfcuauhtemoc@vittorioforti.com.mx',6700),(49,69,'galerias toluca','Avenida Primero de Mayo 1700 Local 143','(100) Puebla - Toluca','Santa Ana Tlalpatitlán',' Toluca',' Estado de México','01(22)2269-6300','vfgaleriastoluca@vittorioforti.com.mx',50160),(50,70,'plaza tlalne','Avenida Sor Juana Inés de La Cruz 280 Local D-06','(101) Cdmx - Norte','San Lorenzo',' Tlalnepantla',' Estado de México','5989-8371','vfplazatlalne@vittorioforti.com.mx',54033),(51,71,'plaza patria','Avenida Patria S/N Local K-3','(107) Guadalajara','Jacarandas',' Zapopan',' Jalisco','01(33)2387-8031','vfplazapatria@vittorioforti.com.mx',45160),(52,72,'león centro','Francisco I. Madero No. 122','(107) Guadalajara','Centro',' León',' Guanajuato','01(33)2387-8031','vfleoncentro@vittorioforti.com.mx',37000),(53,73,'oaxaca','Avenida Universidad 139 Locales  C2,  C3 y C4','(101) Cdmx - Oriente','Ex Hacienda Candiani',' Oaxaca de Juarez',' Oaxaca','5109-2331','vfoaxaca@vittorioforti.com.mx',68130),(54,74,'santin','Carretera Toluca-Naucalpan 1101 Local 1A','(100) Puebla - Toluca','San Mateo Otzacatipan',' Toluca',' Estado De México','01(22)2269-6300','vfsantin@vittorioforti.com.mx',50200),(55,75,'explanada puebla','no disponible','no disponible','no disponible','no disponible','no disponible','10101110','vfexplanadapuebla@vittorioforti.com.mx',0),(56,77,'las antenas','no disponible','no disponible','no disponible','no disponible','no disponible','10101','vfantenas@vittorioforti.com.mx',0),(57,76,'outlet queretaro','no disponible','no disponible','no disponible','no disponible','no disponible','no disponible','vfoutletqueretaro@vittorioforti.com.mx',0);
/*!40000 ALTER TABLE `sucursales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:27

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
-- Table structure for table `tipopapeleria`
--

DROP TABLE IF EXISTS `tipopapeleria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipopapeleria` (
  `idTipoPapeleria` int(11) NOT NULL AUTO_INCREMENT,
  `tipoPapeleria` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoPapeleria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipopapeleria`
--

LOCK TABLES `tipopapeleria` WRITE;
/*!40000 ALTER TABLE `tipopapeleria` DISABLE KEYS */;
INSERT INTO `tipopapeleria` VALUES (1,'papeleria oficina'),(2,'papeleria impresa');
/*!40000 ALTER TABLE `tipopapeleria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-30  6:59:24

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `idLugarTrabajo` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_usuarios_lugarTrabajo1_idx` (`idLugarTrabajo`),
  CONSTRAINT `fk_usuarios_lugarTrabajo1` FOREIGN KEY (`idLugarTrabajo`) REFERENCES `lugartrabajo` (`idLugarTrabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'roberto','annie',58),(2,'mary julia','hola',59),(3,'claudia','hola',59),(4,'01 BOLIVAR','AETF',1),(5,'02 1 DE MAYO','BDV1',2),(6,'03 PLAZA DEL SOL','CFB2',3),(7,'04 ARAGON','F1M6',4),(8,'05 SAN AGUSTIN','G2R5',5),(9,'06 PLAZA RIO','H6Z4',6),(10,'07 MORELOS 1','J5CF',7),(11,'08 MORELOS 3','N4VC',8),(12,'88 CUERNAVACA','BJK3',9),(13,'09 NIÑOS HEROES','MFBB',10),(14,'10 PUEBLA CENTRO','BCGV',11),(15,'11 5 DE MAYO','VBDN',12),(16,'12 IRAPUATO','CVEM',13),(17,'13 GALERIAS GDL','DNT8',14),(18,'14 PACHUCA','SMU0',15),(19,'15 LERMA','Q87S',16),(20,'17 OUTLET GDL','W061',17),(21,'18 IXTAPALUCA','ES5B',18),(22,'20 TEZONTLE','R14M',19),(23,'21 PLAZA DORADA','TB6L',20),(24,'23 NEZA JARDIN','FMVÑ',21),(25,'24 GDL CENTRO','VLBW',22),(26,'25 ESTRELLAS','BÑH5',23),(27,'26 VALLEJO','NWLV',24),(28,'28 PATIO QRO','LVP7',25),(29,'30 TLAQUEPAQUE','OHO1',26),(30,'32 SATELITE','P7MH',27),(31,'33 OUTLET PUEBLA','71NJ',28),(32,'34 TOLUCA CENTRO','TRVN',29),(33,'35 NEZA CHEDRAUI','VTBM',30),(34,'36 PASEO ACOXPA','BFCB',31),(35,'37 PLAZA LA ROSA','MVZV',32),(36,'38 ATIZAPAN','RBXC',33),(37,'39 PUNTA NORTE','ZNSD',34),(38,'40 POLANCO','CMDS',35),(39,'55 CUICUILCO','VLEQ',36),(40,'57 AGUASCALIENTES','BOQW',37),(41,'58 VILLASUNCION','GPSE',38),(42,'59 SAN LUIS','D7WR',39),(43,'60 SAN LUIS CENTRO','ETTT',40),(44,'61 PARQUE CELAYA','TVRF',41),(45,'62 ZACATECAS','UBFV',42),(46,'63 MORELIA','7MDB',43),(47,'64 ANAHUAC','6RCG',44),(48,'65 CENTRO MAX','5ZVB',45),(49,'66 QRO CENTRO','4CBV',46),(50,'67 CUMBRES','6VGC',47),(51,'68 CUAUHTEMOC','VBHD',48),(52,'69 GALERIAS TOLUCA','BGJF',49),(53,'70 PLAZA TLALNE','HDUX',50),(54,'71 PLAZA PATRIA','LEYZ',51),(55,'72 LEON CENTRO','ÑTTP',52),(56,'73 OAXACA','PUIO',53),(57,'74 SANTIN','O7OA',54),(58,'75 EXPLANADA','MÑPQ',55),(59,'76 OUTLET QRO','NKL1',57),(60,'77 ANTENAS','VMÑ4',56),(61,'almacen','alma',60),(62,'sistemas','sist',59),(63,'cedis','cedi',60),(64,'ecommerce','ecom',61),(65,'mercadotecnia','merc',62),(66,'planeacion','plan',63),(67,'produccion','prod',64),(68,'ventas corporativas','vent',65),(69,'desarrollo','desa',66),(70,'contabilidad','cont',67),(71,'juridico','juri',68),(72,'proyectos','proy',69),(73,'tiendas','tien',70),(74,'mantenimiento','mant',71),(75,'diseño','dise',72),(76,'compras','comp',73);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
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
