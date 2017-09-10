-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: icombh5
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atributos`
--

DROP TABLE IF EXISTS `atributos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atributos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elemento_id` int(11) NOT NULL,
  `chave` varchar(45) DEFAULT NULL,
  `chave_desc` varchar(100) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `predicado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atributos_elemento1_idx` (`elemento_id`),
  CONSTRAINT `fk_atributos_elemento1` FOREIGN KEY (`elemento_id`) REFERENCES `elemento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=299 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atributos`
--

LOCK TABLES `atributos` WRITE;
/*!40000 ALTER TABLE `atributos` DISABLE KEYS */;
INSERT INTO `atributos` VALUES (1,1,'suit','Naipe','copas','vermelho'),(2,2,'suit','Naipe','espadas','preto'),(3,3,'suit','Naipe','ouros','vermelho'),(4,4,'suit','Naipe','paus','preto'),(5,5,'suit','Naipe','copas','vermelho'),(6,6,'suit','Naipe','espadas','preto'),(7,7,'suit','Naipe','ouros','vermelho'),(8,8,'suit','Naipe','paus','preto'),(9,9,'suit','Naipe','copas','vermelho'),(10,10,'suit','Naipe','espadas','preto'),(11,11,'suit','Naipe','ouros','vermelho'),(12,12,'suit','Naipe','paus','preto'),(13,13,'suit','Naipe','copas','vermelho'),(14,14,'suit','Naipe','espadas','preto'),(15,15,'suit','Naipe','ouros','vermelho'),(16,16,'suit','Naipe','paus','preto'),(17,17,'suit','Naipe','copas','vermelho'),(18,18,'suit','Naipe','espadas','preto'),(19,19,'suit','Naipe','ouros','vermelho'),(20,20,'suit','Naipe','paus','preto'),(21,21,'suit','Naipe','copas','vermelho'),(22,22,'suit','Naipe','espadas','preto'),(23,23,'suit','Naipe','ouros','vermelho'),(24,24,'suit','Naipe','paus','preto'),(25,25,'suit','Naipe','copas','vermelho'),(26,26,'suit','Naipe','espadas','preto'),(27,27,'suit','Naipe','ouros','vermelho'),(28,28,'suit','Naipe','paus','preto'),(29,29,'suit','Naipe','copas','vermelho'),(30,30,'suit','Naipe','espadas','preto'),(31,31,'suit','Naipe','ouros','vermelho'),(32,32,'suit','Naipe','paus','preto'),(33,33,'suit','Naipe','copas','vermelho'),(34,34,'suit','Naipe','espadas','preto'),(35,35,'suit','Naipe','ouros','vermelho'),(36,36,'suit','Naipe','paus','preto'),(37,37,'suit','Naipe','copas','vermelho'),(38,38,'suit','Naipe','espadas','preto'),(39,39,'suit','Naipe','ouros','vermelho'),(40,40,'suit','Naipe','paus','preto'),(41,41,'suit','Naipe','copas','vermelho'),(42,42,'suit','Naipe','espadas','preto'),(43,43,'suit','Naipe','ouros','vermelho'),(44,44,'suit','Naipe','paus','preto'),(45,45,'suit','Naipe','copas','vermelho'),(46,46,'suit','Naipe','espadas','preto'),(47,47,'suit','Naipe','ouros','vermelho'),(48,48,'suit','Naipe','paus','preto'),(49,49,'suit','Naipe','copas','vermelho'),(50,50,'suit','Naipe','espadas','preto'),(51,51,'suit','Naipe','ouros','vermelho'),(52,52,'suit','Naipe','paus','preto'),(64,1,'value','Valor','as',NULL),(65,2,'value','Valor','as',NULL),(66,3,'value','Valor','as',NULL),(67,4,'value','Valor','as',NULL),(68,5,'value','Valor','2',NULL),(69,6,'value','Valor','2',NULL),(70,7,'value','Valor','2',NULL),(71,8,'value','Valor','2',NULL),(72,9,'value','Valor','3',NULL),(73,10,'value','Valor','3',NULL),(74,11,'value','Valor','3',NULL),(75,12,'value','Valor','3',NULL),(76,13,'value','Valor','4',NULL),(77,14,'value','Valor','4',NULL),(78,15,'value','Valor','4',NULL),(79,16,'value','Valor','4',NULL),(80,17,'value','Valor','5',NULL),(81,18,'value','Valor','5',NULL),(82,19,'value','Valor','5',NULL),(83,20,'value','Valor','5',NULL),(84,21,'value','Valor','6',NULL),(85,22,'value','Valor','6',NULL),(86,23,'value','Valor','6',NULL),(87,24,'value','Valor','6',NULL),(88,25,'value','Valor','7',NULL),(89,26,'value','Valor','7',NULL),(90,27,'value','Valor','7',NULL),(91,28,'value','Valor','7',NULL),(92,29,'value','Valor','8',NULL),(93,30,'value','Valor','8',NULL),(94,31,'value','Valor','8',NULL),(95,32,'value','Valor','8',NULL),(96,33,'value','Valor','9',NULL),(97,34,'value','Valor','9',NULL),(98,35,'value','Valor','9',NULL),(99,36,'value','Valor','9',NULL),(100,37,'value','Valor','10',NULL),(101,38,'value','Valor','10',NULL),(102,39,'value','Valor','10',NULL),(103,40,'value','Valor','10',NULL),(104,41,'value','Valor','valete',NULL),(105,42,'value','Valor','valete',NULL),(106,43,'value','Valor','valete',NULL),(107,44,'value','Valor','valete',NULL),(108,45,'value','Valor','dama',NULL),(109,46,'value','Valor','dama',NULL),(110,47,'value','Valor','dama',NULL),(111,48,'value','Valor','dama',NULL),(112,49,'value','Valor','rei',NULL),(113,50,'value','Valor','rei',NULL),(114,51,'value','Valor','rei',NULL),(115,52,'value','Valor','rei',NULL),(116,81,'value','Valor','1','vermelho'),(117,82,'value','Valor','2','vermelho'),(118,83,'value','Valor','3','vermelho'),(119,84,'value','Valor','4','vermelho'),(120,85,'value','Valor','5','vermelho'),(121,86,'value','Valor','6','vermelho'),(122,87,'value','Valor','7','vermelho'),(123,88,'value','Valor','8','vermelho'),(124,89,'value','Valor','9','vermelho'),(125,90,'value','Valor','10','vermelho'),(126,91,'value','Valor','1','azul'),(127,92,'value','Valor','2','azul'),(128,93,'value','Valor','3','azul'),(129,94,'value','Valor','4','azul'),(130,95,'value','Valor','5','azul'),(131,96,'value','Valor','6','azul'),(132,97,'value','Valor','7','azul'),(133,98,'value','Valor','8','azul'),(134,99,'value','Valor','9','azul'),(135,100,'value','Valor','10','azul'),(136,101,'value','Valor','1','amarelo'),(137,102,'value','Valor','2','amarelo'),(138,103,'value','Valor','3','amarelo'),(139,104,'value','Valor','4','amarelo'),(140,105,'value','Valor','5','amarelo'),(141,106,'value','Valor','6','amarelo'),(142,107,'value','Valor','7','amarelo'),(143,108,'value','Valor','8','amarelo'),(144,109,'value','Valor','9','amarelo'),(145,110,'value','Valor','10','amarelo'),(146,111,'jogador',NULL,'1','goleiro'),(147,112,'jogador',NULL,'2','zagueiro'),(148,113,'jogador',NULL,'3','zagueiro'),(149,114,'jogador',NULL,'4','zagueiro'),(150,115,'jogador',NULL,'5','meio-campo'),(151,116,'jogador',NULL,'6','meio-campo'),(152,117,'jogador',NULL,'7','meio-campo'),(153,118,'jogador',NULL,'8','meio-campo'),(154,119,'jogador',NULL,'9','meio-campo'),(155,120,'jogador',NULL,'10','atacante'),(156,121,'jogador',NULL,'11','atacante'),(157,122,'jogador',NULL,'1','goleio'),(158,123,'jogador',NULL,'2','zagueiro'),(159,124,'jogador',NULL,'3','zagueiro'),(160,125,'jogador',NULL,'4','zagueiro'),(161,126,'jogador',NULL,'5','meio-campo'),(162,127,'jogador',NULL,'6','meio-campo'),(163,128,'jogador',NULL,'7','meio-campo'),(164,129,'jogador',NULL,'8','meio-campo'),(165,130,'jogador',NULL,'9','meio-campo'),(166,131,'jogador',NULL,'10','atacante'),(167,132,'jogador',NULL,'11','atacante'),(168,133,'jogador',NULL,'1','goleiro'),(169,134,'jogador',NULL,'2','zagueiro'),(170,135,'jogador',NULL,'3','zagueiro'),(171,136,'jogador',NULL,'4','zagueiro'),(172,137,'jogador',NULL,'5','meio-campo'),(173,138,'jogador',NULL,'6','meio-campo'),(174,139,'jogador',NULL,'7','meio-campo'),(175,140,'jogador',NULL,'8','meio-campo'),(176,141,'jogador',NULL,'9','meio-campo'),(177,142,'jogador',NULL,'10','atacante'),(178,143,'jogador',NULL,'11','atacante'),(179,144,'jogador',NULL,'1','goleio'),(180,145,'jogador',NULL,'2','zagueiro'),(181,146,'jogador',NULL,'3','zagueiro'),(182,147,'jogador',NULL,'4','zagueiro'),(183,148,'jogador',NULL,'5','meio-campo'),(184,149,'jogador',NULL,'6','meio-campo'),(185,150,'jogador',NULL,'7','meio-campo'),(186,151,'jogador',NULL,'8','meio-campo'),(187,152,'jogador',NULL,'9','meio-campo'),(188,153,'jogador',NULL,'10','atacante'),(189,154,'jogador',NULL,'11','atacante'),(190,111,'time',NULL,'azul',NULL),(191,112,'time',NULL,'azul',NULL),(192,113,'time',NULL,'azul',NULL),(193,114,'time',NULL,'azul',NULL),(194,115,'time',NULL,'azul',NULL),(195,116,'time',NULL,'azul',NULL),(196,117,'time',NULL,'azul',NULL),(197,118,'time',NULL,'azul',NULL),(198,119,'time',NULL,'azul',NULL),(199,120,'time',NULL,'azul',NULL),(200,121,'time',NULL,'azul',NULL),(201,122,'time',NULL,'amarelo',NULL),(202,123,'time',NULL,'amarelo',NULL),(203,124,'time',NULL,'amarelo',NULL),(204,125,'time',NULL,'amarelo',NULL),(205,126,'time',NULL,'amarelo',NULL),(206,127,'time',NULL,'amarelo',NULL),(207,128,'time',NULL,'amarelo',NULL),(208,129,'time',NULL,'amarelo',NULL),(209,130,'time',NULL,'amarelo',NULL),(210,131,'time',NULL,'amarelo',NULL),(211,132,'time',NULL,'amarelo',NULL),(212,133,'time',NULL,'verde',NULL),(214,134,'time',NULL,'verde',NULL),(215,135,'time',NULL,'verde',NULL),(216,136,'time',NULL,'verde',NULL),(217,137,'time',NULL,'verde',NULL),(218,138,'time',NULL,'verde',NULL),(219,139,'time',NULL,'verde',NULL),(220,140,'time',NULL,'verde',NULL),(221,141,'time',NULL,'verde',NULL),(222,142,'time',NULL,'verde',NULL),(223,143,'time',NULL,'verde',NULL),(224,144,'time',NULL,'vermelho',NULL),(225,145,'time',NULL,'vermelho',NULL),(226,146,'time',NULL,'vermelho',NULL),(227,147,'time',NULL,'vermelho',NULL),(228,148,'time',NULL,'vermelho',NULL),(229,149,'time',NULL,'vermelho',NULL),(230,150,'time',NULL,'vermelho',NULL),(231,151,'time',NULL,'vermelho',NULL),(232,152,'time',NULL,'vermelho',NULL),(233,153,'time',NULL,'vermelho',NULL),(234,154,'time',NULL,'vermelho',NULL),(235,155,'suit','Naipe','copas','vermelho'),(236,156,'suit','Naipe','espadas','preto'),(237,157,'suit','Naipe','ouros','vermelho'),(238,158,'suit','Naipe','paus','preto'),(239,53,'suit','Naipe','copas','vermelho'),(240,54,'suit','Naipe','espadas','preto'),(241,55,'suit','Naipe','ouros','vermelho'),(242,56,'suit','Naipe','paus','preto'),(243,57,'suit','Naipe','copas','vermelho'),(244,58,'suit','Naipe','espadas','preto'),(245,59,'suit','Naipe','ouros','vermelho'),(246,60,'suit','Naipe','paus','preto'),(247,61,'suit','Naipe','copas','vermelho'),(248,62,'suit','Naipe','espadas','preto'),(249,63,'suit','Naipe','ouros','vermelho'),(250,64,'suit','Naipe','paus','preto'),(251,65,'suit','Naipe','copas','vermelho'),(252,66,'suit','Naipe','espadas','preto'),(253,67,'suit','Naipe','ouros','vermelho'),(254,68,'suit','Naipe','paus','preto'),(255,69,'suit','Naipe','copas','vermelho'),(256,70,'suit','Naipe','espadas','preto'),(257,71,'suit','Naipe','ouros','vermelho'),(258,72,'suit','Naipe','paus','preto'),(259,73,'suit','Naipe','copas','vermelho'),(260,74,'suit','Naipe','espadas','preto'),(261,75,'suit','Naipe','ouros','vermelho'),(262,76,'suit','Naipe','paus','preto'),(263,77,'suit','Naipe','copas','vermelho'),(264,78,'suit','Naipe','espadas','preto'),(265,79,'suit','Naipe','ouros','vermelho'),(266,80,'suit','Naipe','paus','preto'),(267,155,'value','Valor','as',NULL),(268,156,'value','Valor','as',NULL),(269,157,'value','Valor','as',NULL),(270,158,'value','Valor','as',NULL),(271,53,'value','Valor','7',NULL),(272,54,'value','Valor','7',NULL),(273,55,'value','Valor','7',NULL),(274,56,'value','Valor','7',NULL),(275,57,'value','Valor','8',NULL),(276,58,'value','Valor','8',NULL),(277,59,'value','Valor','8',NULL),(278,60,'value','Valor','8',NULL),(279,61,'value','Valor','9',NULL),(280,62,'value','Valor','9',NULL),(281,63,'value','Valor','9',NULL),(282,64,'value','Valor','9',NULL),(283,65,'value','Valor','10',NULL),(284,66,'value','Valor','10',NULL),(285,67,'value','Valor','10',NULL),(286,68,'value','Valor','10',NULL),(287,69,'value','Valor','valete',NULL),(288,70,'value','Valor','valete',NULL),(289,71,'value','Valor','valete',NULL),(290,72,'value','Valor','valete',NULL),(291,73,'value','Valor','dama',NULL),(292,74,'value','Valor','dama',NULL),(293,75,'value','Valor','dama',NULL),(294,76,'value','Valor','dama',NULL),(295,77,'value','Valor','rei',NULL),(296,78,'value','Valor','rei',NULL),(297,79,'value','Valor','rei',NULL),(298,80,'value','Valor','rei',NULL);
/*!40000 ALTER TABLE `atributos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caracteristica`
--

DROP TABLE IF EXISTS `caracteristica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caracteristica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expressao_id` int(11) NOT NULL,
  `valor` varchar(255) DEFAULT NULL COMMENT 'representa o atributo do elemento que cumpra com a valor ou predicado indicado aqui',
  PRIMARY KEY (`id`),
  KEY `fk_caracteristica_expressao1_idx` (`expressao_id`),
  CONSTRAINT `fk_caracteristica_expressao1` FOREIGN KEY (`expressao_id`) REFERENCES `expressao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristica`
--

LOCK TABLES `caracteristica` WRITE;
/*!40000 ALTER TABLE `caracteristica` DISABLE KEYS */;
INSERT INTO `caracteristica` VALUES (1,1,'as'),(2,2,'as'),(3,3,'dama');
/*!40000 ALTER TABLE `caracteristica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elemento`
--

DROP TABLE IF EXISTS `elemento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elemento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `universo_id` int(11) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`,`universo_id`),
  KEY `fk_elemento_universo1_idx` (`universo_id`),
  CONSTRAINT `fk_elemento_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elemento`
--

LOCK TABLES `elemento` WRITE;
/*!40000 ALTER TABLE `elemento` DISABLE KEYS */;
INSERT INTO `elemento` VALUES (1,1,'user_guide/img/imagens_Baralho/AsCopas.png'),(2,1,'user_guide/img/imagens_Baralho/AsEspadas.png'),(3,1,'user_guide/img/imagens_Baralho/AsOuros.png'),(4,1,'user_guide/img/imagens_Baralho/AsPaus.png'),(5,1,'user_guide/img/imagens_Baralho/DoisCopas.png'),(6,1,'user_guide/img/imagens_Baralho/DoisEspadas.png'),(7,1,'user_guide/img/imagens_Baralho/DoisOuros.png'),(8,1,'user_guide/img/imagens_Baralho/DoisPaus.png'),(9,1,'user_guide/img/imagens_Baralho/TresCopas.png'),(10,1,'user_guide/img/imagens_Baralho/TresEspadas.png'),(11,1,'user_guide/img/imagens_Baralho/TresOuros.png'),(12,1,'user_guide/img/imagens_Baralho/TresPaus.png'),(13,1,'user_guide/img/imagens_Baralho/QuatroCopas.png'),(14,1,'user_guide/img/imagens_Baralho/QuatroEspadas.png'),(15,1,'user_guide/img/imagens_Baralho/QuatroOuros.png'),(16,1,'user_guide/img/imagens_Baralho/QuatroPaus.png'),(17,1,'user_guide/img/imagens_Baralho/CincoCopas.png'),(18,1,'user_guide/img/imagens_Baralho/CincoEspadas.png'),(19,1,'user_guide/img/imagens_Baralho/CincoOuros.png'),(20,1,'user_guide/img/imagens_Baralho/CincoPaus.png'),(21,1,'user_guide/img/imagens_Baralho/SeisCopas.png'),(22,1,'user_guide/img/imagens_Baralho/SeisEspadas.png'),(23,1,'user_guide/img/imagens_Baralho/SeisOuros.png'),(24,1,'user_guide/img/imagens_Baralho/SeisPaus.png'),(25,1,'user_guide/img/imagens_Baralho/SeteCopas.png'),(26,1,'user_guide/img/imagens_Baralho/SeteEspadas.png'),(27,1,'user_guide/img/imagens_Baralho/SeteOuros.png'),(28,1,'user_guide/img/imagens_Baralho/SetePaus.png'),(29,1,'user_guide/img/imagens_Baralho/OitoCopas.png'),(30,1,'user_guide/img/imagens_Baralho/OitoEspadas.png'),(31,1,'user_guide/img/imagens_Baralho/OitoOuros.png'),(32,1,'user_guide/img/imagens_Baralho/OitoPaus.png'),(33,1,'user_guide/img/imagens_Baralho/NoveCopas.png'),(34,1,'user_guide/img/imagens_Baralho/NoveEspadas.png'),(35,1,'user_guide/img/imagens_Baralho/NoveOuros.png'),(36,1,'user_guide/img/imagens_Baralho/NovePaus.png'),(37,1,'user_guide/img/imagens_Baralho/DezCopas.png'),(38,1,'user_guide/img/imagens_Baralho/DezEspadas.png'),(39,1,'user_guide/img/imagens_Baralho/DezOuros.png'),(40,1,'user_guide/img/imagens_Baralho/DezPaus.png'),(41,1,'user_guide/img/imagens_Baralho/ValeteCopas.png'),(42,1,'user_guide/img/imagens_Baralho/ValeteEspadas.png'),(43,1,'user_guide/img/imagens_Baralho/ValeteOuros.png'),(44,1,'user_guide/img/imagens_Baralho/ValetePaus.png'),(45,1,'user_guide/img/imagens_Baralho/DamaCopas.png'),(46,1,'user_guide/img/imagens_Baralho/DamaEspadas.png'),(47,1,'user_guide/img/imagens_Baralho/DamaOuros.png'),(48,1,'user_guide/img/imagens_Baralho/DamaPaus.png'),(49,1,'user_guide/img/imagens_Baralho/ReiCopas.png'),(50,1,'user_guide/img/imagens_Baralho/ReiEspadas.png'),(51,1,'user_guide/img/imagens_Baralho/ReiOuros.png'),(52,1,'user_guide/img/imagens_Baralho/ReiPaus.png'),(53,2,'user_guide/img/imagens_Baralho/SeteCopas.png'),(54,2,'user_guide/img/imagens_Baralho/SeteEspadas.png'),(55,2,'user_guide/img/imagens_Baralho/SeteOuros.png'),(56,2,'user_guide/img/imagens_Baralho/SetePaus.png'),(57,2,'user_guide/img/imagens_Baralho/OitoCopas.png'),(58,2,'user_guide/img/imagens_Baralho/OitoEspadas.png'),(59,2,'user_guide/img/imagens_Baralho/OitoOuros.png'),(60,2,'user_guide/img/imagens_Baralho/OitoPaus.png'),(61,2,'user_guide/img/imagens_Baralho/NoveCopas.png'),(62,2,'user_guide/img/imagens_Baralho/NoveEspadas.png'),(63,2,'user_guide/img/imagens_Baralho/NoveOuros.png'),(64,2,'user_guide/img/imagens_Baralho/NovePaus.png'),(65,2,'user_guide/img/imagens_Baralho/DezCopas.png'),(66,2,'user_guide/img/imagens_Baralho/DezEspadas.png'),(67,2,'user_guide/img/imagens_Baralho/DezOuros.png'),(68,2,'user_guide/img/imagens_Baralho/DezPaus.png'),(69,2,'user_guide/img/imagens_Baralho/ValeteCopas.png'),(70,2,'user_guide/img/imagens_Baralho/ValeteEspadas.png'),(71,2,'user_guide/img/imagens_Baralho/ValeteOuros.png'),(72,2,'user_guide/img/imagens_Baralho/ValetePaus.png'),(73,2,'user_guide/img/imagens_Baralho/DamaCopas.png'),(74,2,'user_guide/img/imagens_Baralho/DamaEspadas.png'),(75,2,'user_guide/img/imagens_Baralho/DamaOuros.png'),(76,2,'user_guide/img/imagens_Baralho/DamaPaus.png'),(77,2,'user_guide/img/imagens_Baralho/ReiCopas.png'),(78,2,'user_guide/img/imagens_Baralho/ReiEspadas.png'),(79,2,'user_guide/img/imagens_Baralho/ReiOuros.png'),(80,2,'user_guide/img/imagens_Baralho/ReiPaus.png'),(81,3,'user_guide/img/imagens_Bola/1Vermelho.png'),(82,3,'user_guide/img/imagens_Bola/2Vermelho.png'),(83,3,'user_guide/img/imagens_Bola/3Vermelho.png'),(84,3,'user_guide/img/imagens_Bola/4Vermelho.png'),(85,3,'user_guide/img/imagens_Bola/5Vermelho.png'),(86,3,'user_guide/img/imagens_Bola/6Vermelho.png'),(87,3,'user_guide/img/imagens_Bola/7Vermelho.png'),(88,3,'user_guide/img/imagens_Bola/8Vermelho.png'),(89,3,'user_guide/img/imagens_Bola/9Vermelho.png'),(90,3,'user_guide/img/imagens_Bola/10Vermelho.png'),(91,3,'user_guide/img/imagens_Bola/1Azul.png'),(92,3,'user_guide/img/imagens_Bola/2Azul.png'),(93,3,'user_guide/img/imagens_Bola/3Azul.png'),(94,3,'user_guide/img/imagens_Bola/4Azul.png'),(95,3,'user_guide/img/imagens_Bola/5Azul.png'),(96,3,'user_guide/img/imagens_Bola/6Azul.png'),(97,3,'user_guide/img/imagens_Bola/7Azul.png'),(98,3,'user_guide/img/imagens_Bola/8Azul.png'),(99,3,'user_guide/img/imagens_Bola/9Azul.png'),(100,3,'user_guide/img/imagens_Bola/10Azul.png'),(101,3,'user_guide/img/imagens_Bola/1Amarelo.png'),(102,3,'user_guide/img/imagens_Bola/2Amarelo.png'),(103,3,'user_guide/img/imagens_Bola/3Amarelo.png'),(104,3,'user_guide/img/imagens_Bola/4Amarelo.png'),(105,3,'user_guide/img/imagens_Bola/5Amarelo.png'),(106,3,'user_guide/img/imagens_Bola/6Amarelo.png'),(107,3,'user_guide/img/imagens_Bola/7Amarelo.png'),(108,3,'user_guide/img/imagens_Bola/8Amarelo.png'),(109,3,'user_guide/img/imagens_Bola/9Amarelo.png'),(110,3,'user_guide/img/imagens_Bola/10Amarelo.png'),(111,4,'user_guide/img/imagens_Camisa/1GoleiroAzul.png'),(112,4,'user_guide/img/imagens_Camisa/2ZagueiroAzul.png'),(113,4,'user_guide/img/imagens_Camisa/3ZagueiroAzul.png'),(114,4,'user_guide/img/imagens_Camisa/4ZagueiroAzul.png'),(115,4,'user_guide/img/imagens_Camisa/5MeioCampoAzul.png'),(116,4,'user_guide/img/imagens_Camisa/6MeioCampoAzul.png'),(117,4,'user_guide/img/imagens_Camisa/7MeioCampoAzul.png'),(118,4,'user_guide/img/imagens_Camisa/8MeioCampoAzul.png'),(119,4,'user_guide/img/imagens_Camisa/9MeioCampoAzul.png'),(120,4,'user_guide/img/imagens_Camisa/10AtacanteAzul.png'),(121,4,'user_guide/img/imagens_Camisa/11AtacanteAzul.png'),(122,4,'user_guide/img/imagens_Camisa/1GoleiroAmarelo.png'),(123,4,'user_guide/img/imagens_Camisa/2ZagueiroAmarelo.png'),(124,4,'user_guide/img/imagens_Camisa/3ZagueiroAmarelo.png'),(125,4,'user_guide/img/imagens_Camisa/4ZagueiroAmarelo.png'),(126,4,'user_guide/img/imagens_Camisa/5MeioCampoAmarelo.png'),(127,4,'user_guide/img/imagens_Camisa/6MeioCampoAmarelo.png'),(128,4,'user_guide/img/imagens_Camisa/7MeioCampoAmarelo.png'),(129,4,'user_guide/img/imagens_Camisa/8MeioCampoAmarelo.png'),(130,4,'user_guide/img/imagens_Camisa/9MeioCampoAmarelo.png'),(131,4,'user_guide/img/imagens_Camisa/10AtacanteAmarelo.png'),(132,4,'user_guide/img/imagens_Camisa/11AtacanteAmarelo.png'),(133,4,'user_guide/img/imagens_Camisa/1GoleiroVerde.png'),(134,4,'user_guide/img/imagens_Camisa/2ZagueiroVerde.png'),(135,4,'user_guide/img/imagens_Camisa/3ZagueiroVerde.png'),(136,4,'user_guide/img/imagens_Camisa/4ZagueiroVerde.png'),(137,4,'user_guide/img/imagens_Camisa/5MeioCampoVerde.png'),(138,4,'user_guide/img/imagens_Camisa/6MeioCampoVerde.png'),(139,4,'user_guide/img/imagens_Camisa/7MeioCampoVerde.png'),(140,4,'user_guide/img/imagens_Camisa/8MeioCampoVerde.png'),(141,4,'user_guide/img/imagens_Camisa/9MeioCampoVerde.png'),(142,4,'user_guide/img/imagens_Camisa/10AtacanteVerde.png'),(143,4,'user_guide/img/imagens_Camisa/11AtacanteVerde.png'),(144,4,'user_guide/img/imagens_Camisa/1GoleiroVermelho.png'),(145,4,'user_guide/img/imagens_Camisa/2ZagueiroVermelho.png'),(146,4,'user_guide/img/imagens_Camisa/3ZagueiroVermelho.png'),(147,4,'user_guide/img/imagens_Camisa/4ZagueiroVermelho.png'),(148,4,'user_guide/img/imagens_Camisa/5MeioCampoVermelho.png'),(149,4,'user_guide/img/imagens_Camisa/6MeioCampoVermelho.png'),(150,4,'user_guide/img/imagens_Camisa/7MeioCampoVermelho.png'),(151,4,'user_guide/img/imagens_Camisa/8MeioCampoVermelho.png'),(152,4,'user_guide/img/imagens_Camisa/9MeioCampoVermelho.png'),(153,4,'user_guide/img/imagens_Camisa/10AtacanteVermelho.png'),(154,4,'user_guide/img/imagens_Camisa/11AtacanteVermelho.png'),(155,2,'user_guide/img/imagens_Baralho/AsCopas.png'),(156,2,'user_guide/img/imagens_Baralho/AsEspadas.png'),(157,2,'user_guide/img/imagens_Baralho/AsOuros.png'),(158,2,'user_guide/img/imagens_Baralho/AsPaus.png');
/*!40000 ALTER TABLE `elemento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estagio`
--

DROP TABLE IF EXISTS `estagio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estagio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solucao_id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `num_expressoes` int(11) DEFAULT NULL COMMENT '0,1,2',
  PRIMARY KEY (`id`),
  KEY `fk_estagio_solucao1_idx` (`solucao_id`),
  CONSTRAINT `fk_estagio_solucao1` FOREIGN KEY (`solucao_id`) REFERENCES `solucao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='estagios da solucao de um exercicio\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estagio`
--

LOCK TABLES `estagio` WRITE;
/*!40000 ALTER TABLE `estagio` DISABLE KEYS */;
INSERT INTO `estagio` VALUES (1,1,1,1),(2,2,1,1),(3,2,1,1);
/*!40000 ALTER TABLE `estagio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercicio`
--

DROP TABLE IF EXISTS `exercicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercicio` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `universo_id` int(11) NOT NULL,
  `solucao_id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `dica` varchar(250) NOT NULL,
  `tempo_esperado` int(11) DEFAULT NULL,
  `operacao` varchar(45) DEFAULT NULL COMMENT 'nao sei pq',
  PRIMARY KEY (`id`),
  KEY `fk_exercicio_universo1_idx` (`universo_id`),
  KEY `fk_exercicio_solucao1_idx` (`solucao_id`),
  CONSTRAINT `fk_exercicio_solucao1` FOREIGN KEY (`solucao_id`) REFERENCES `solucao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_exercicio_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercicio`
--

LOCK TABLES `exercicio` WRITE;
/*!40000 ALTER TABLE `exercicio` DISABLE KEYS */;
INSERT INTO `exercicio` VALUES (1,2,1,'Quantas possibilidades de 1 carta tipo Ás?','Baralho completo, com 52 cartas, 4 de cada.',NULL,NULL),(2,2,2,'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?','Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).',NULL,NULL),(3,2,1,'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?','Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).',NULL,NULL),(4,2,1,'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?','O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).  ',NULL,NULL),(5,4,1,'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?','O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.',NULL,NULL),(6,4,1,'Quantos jogadores existem que tenham camisa número 11?','Lembre-se que são 4 times.',NULL,NULL);
/*!40000 ALTER TABLE `exercicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expressao`
--

DROP TABLE IF EXISTS `expressao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expressao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estagio_id` int(11) NOT NULL,
  `atributo` varchar(200) DEFAULT NULL,
  `pertence` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_condicao_estagio1_idx` (`estagio_id`),
  CONSTRAINT `fk_condicao_estagio1` FOREIGN KEY (`estagio_id`) REFERENCES `estagio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expressao`
--

LOCK TABLES `expressao` WRITE;
/*!40000 ALTER TABLE `expressao` DISABLE KEYS */;
INSERT INTO `expressao` VALUES (1,1,'value','t'),(2,2,'value','t'),(3,3,'value','t');
/*!40000 ALTER TABLE `expressao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formula`
--

DROP TABLE IF EXISTS `formula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formula` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(200) NOT NULL,
  `explicacao` varchar(300) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `expressao` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formula`
--

LOCK TABLES `formula` WRITE;
/*!40000 ALTER TABLE `formula` DISABLE KEYS */;
INSERT INTO `formula` VALUES (1,'user_guide/img/formulas/Arranjo.png','Dado um conjunto qualquer com n elementos e um valor para natural p. Será formado um arranjo simples de p elementos distintos de um conjunto qualquer seqüência formada por p elementos do conjunto.','Arranjo simples','A(n,p)'),(2,'user_guide/img/formulas/Combinacao.png','As combinações simples podem ser consideradas um tipo particular de arranjo simples, pois os agrupamentos formados nos arranjos são diferenciados pela ordem e pela natureza dos seus elementos. A combinação simples são esses arranjos diferenciados a...','Combinação simples','C(n,p)'),(3,'user_guide/img/formulas/Permutacao.jpg','Podemos considerar a permutação simples como um caso particular de arranjo, onde os elementos formarão agrupamentos que se diferenciarão somente pela ordem.','Permutação simples','Pn = p!');
/*!40000 ALTER TABLE `formula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solucao`
--

DROP TABLE IF EXISTS `solucao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solucao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resultado` int(11) DEFAULT NULL,
  `formato_legado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solucao`
--

LOCK TABLES `solucao` WRITE;
/*!40000 ALTER TABLE `solucao` DISABLE KEYS */;
INSERT INTO `solucao` VALUES (1,4,'1:value={ace}'),(2,16,'1:value={queen};1:value={ace}');
/*!40000 ALTER TABLE `solucao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `universo`
--

DROP TABLE IF EXISTS `universo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `universo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL COMMENT 'baralho, bolinhas, camisetas, etc',
  `quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universo`
--

LOCK TABLES `universo` WRITE;
/*!40000 ALTER TABLE `universo` DISABLE KEYS */;
INSERT INTO `universo` VALUES (1,'baralho_completo',52),(2,'baralho_32',32),(3,'bolas',30),(4,'camisas_futebol',44);
/*!40000 ALTER TABLE `universo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-09 23:34:03
