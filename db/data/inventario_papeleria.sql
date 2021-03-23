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