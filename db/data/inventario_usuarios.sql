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
