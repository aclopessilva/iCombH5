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
-- Table structure for table `caracteristica`
--

DROP TABLE IF EXISTS `caracteristica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caracteristica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expressao_id` int(11) NOT NULL,
  `valor` varchar(255) DEFAULT NULL COMMENT 'indicador de uma caracteristica de um ou varios elemtentos que filtrara o universo. Exemplo se atributo=valor entao caracteristica=elemento.valor, se atributo=cor entao caracteristica=elemento.cor\n',
  PRIMARY KEY (`id`),
  KEY `fk_caracteristica_expressao1_idx` (`expressao_id`),
  CONSTRAINT `fk_caracteristica_expressao1` FOREIGN KEY (`expressao_id`) REFERENCES `expressao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristica`
--

LOCK TABLES `caracteristica` WRITE;
/*!40000 ALTER TABLE `caracteristica` DISABLE KEYS */;
INSERT INTO `caracteristica` VALUES (1,1,'ace');
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
INSERT INTO `ci_sessions` VALUES ('vn9enniutfupmg23560leenbs9k78jbn','::1',1502039606,'__ci_last_regenerate|i:1502039331;desenvolvimento|O:8:\"stdClass\":5:{s:9:\"exercicio\";O:8:\"stdClass\":9:{s:2:\"id\";s:1:\"6\";s:11:\"universo_id\";s:1:\"1\";s:10:\"solucao_id\";s:1:\"1\";s:9:\"descricao\";s:55:\"Quantos jogadores existem que tenham camisa número 11?\";s:4:\"dica\";s:27:\"Lembre-se que são 4 times.\";s:14:\"tempo_esperado\";N;s:8:\"operacao\";N;s:7:\"solucao\";O:8:\"stdClass\":4:{s:2:\"id\";s:1:\"1\";s:9:\"resultado\";s:1:\"4\";s:14:\"formato_legado\";s:13:\"1:value={ace}\";s:8:\"estagios\";a:1:{i:0;O:8:\"stdClass\":5:{s:2:\"id\";s:1:\"1\";s:10:\"solucao_id\";s:1:\"1\";s:10:\"quantidade\";s:1:\"1\";s:14:\"num_expressoes\";s:1:\"1\";s:10:\"expressoes\";a:1:{i:0;O:8:\"stdClass\":5:{s:2:\"id\";s:1:\"1\";s:10:\"estagio_id\";s:1:\"1\";s:8:\"atributo\";s:5:\"value\";s:8:\"pertence\";s:1:\"t\";s:15:\"caracteristicas\";a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"1\";s:12:\"expressao_id\";s:1:\"1\";s:5:\"valor\";s:3:\"ace\";}}}}}}}s:8:\"universo\";O:8:\"stdClass\":4:{s:2:\"id\";s:1:\"1\";s:4:\"tipo\";s:7:\"baralho\";s:10:\"quantidade\";s:2:\"32\";s:9:\"elementos\";a:0:{}}}s:5:\"incio\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2017-08-06 19:08:51.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:6:\"estado\";s:8:\"INICIADO\";s:9:\"avaliador\";O:9:\"Avaliador\":6:{s:19:\"\0Avaliador\0universo\";N;s:18:\"\0Avaliador\0solucao\";N;s:20:\"\0Avaliador\0elementos\";N;s:23:\"\0Avaliador\0elemParticao\";N;s:20:\"\0Avaliador\0particoes\";N;s:23:\"\0Avaliador\0elemResposta\";N;}s:3:\"log\";O:3:\"Log\":1:{s:4:\"logs\";a:1:{i:0;O:8:\"stdClass\":2:{s:5:\"texto\";s:25:\"Iniciando desenvolvimento\";s:4:\"data\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2017-08-06 19:08:51.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}}}}}'),('aetf0el4j1nl3kjv4d93anlgj5d0p5m5','::1',1502039957,'__ci_last_regenerate|i:1502039957;desenvolvimento|O:8:\"stdClass\":5:{s:9:\"exercicio\";O:8:\"stdClass\":9:{s:2:\"id\";s:1:\"6\";s:11:\"universo_id\";s:1:\"1\";s:10:\"solucao_id\";s:1:\"1\";s:9:\"descricao\";s:55:\"Quantos jogadores existem que tenham camisa número 11?\";s:4:\"dica\";s:27:\"Lembre-se que são 4 times.\";s:14:\"tempo_esperado\";N;s:8:\"operacao\";N;s:7:\"solucao\";O:8:\"stdClass\":4:{s:2:\"id\";s:1:\"1\";s:9:\"resultado\";s:1:\"4\";s:14:\"formato_legado\";s:13:\"1:value={ace}\";s:8:\"estagios\";a:1:{i:0;O:8:\"stdClass\":5:{s:2:\"id\";s:1:\"1\";s:10:\"solucao_id\";s:1:\"1\";s:10:\"quantidade\";s:1:\"1\";s:14:\"num_expressoes\";s:1:\"1\";s:10:\"expressoes\";a:1:{i:0;O:8:\"stdClass\":5:{s:2:\"id\";s:1:\"1\";s:10:\"estagio_id\";s:1:\"1\";s:8:\"atributo\";s:5:\"value\";s:8:\"pertence\";s:1:\"t\";s:15:\"caracteristicas\";a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"1\";s:12:\"expressao_id\";s:1:\"1\";s:5:\"valor\";s:3:\"ace\";}}}}}}}s:8:\"universo\";O:8:\"stdClass\":4:{s:2:\"id\";s:1:\"1\";s:4:\"tipo\";s:7:\"baralho\";s:10:\"quantidade\";s:2:\"32\";s:9:\"elementos\";a:0:{}}}s:5:\"incio\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2017-08-06 19:08:51.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:6:\"estado\";s:8:\"INICIADO\";s:9:\"avaliador\";O:9:\"Avaliador\":6:{s:19:\"\0Avaliador\0universo\";N;s:18:\"\0Avaliador\0solucao\";N;s:20:\"\0Avaliador\0elementos\";N;s:23:\"\0Avaliador\0elemParticao\";N;s:20:\"\0Avaliador\0particoes\";N;s:23:\"\0Avaliador\0elemResposta\";N;}s:3:\"log\";O:3:\"Log\":1:{s:4:\"logs\";a:1:{i:0;O:8:\"stdClass\":2:{s:5:\"texto\";s:25:\"Iniciando desenvolvimento\";s:4:\"data\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2017-08-06 19:08:51.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}}}}}'),('krjl81alkv5aj16sa9doptonte45q365','::1',1502040824,'__ci_last_regenerate|i:1502040823;desenvolvimento|O:8:\"stdClass\":5:{s:9:\"exercicio\";O:8:\"stdClass\":9:{s:2:\"id\";s:1:\"6\";s:11:\"universo_id\";s:1:\"1\";s:10:\"solucao_id\";s:1:\"1\";s:9:\"descricao\";s:55:\"Quantos jogadores existem que tenham camisa número 11?\";s:4:\"dica\";s:27:\"Lembre-se que são 4 times.\";s:14:\"tempo_esperado\";N;s:8:\"operacao\";N;s:7:\"solucao\";O:8:\"stdClass\":4:{s:2:\"id\";s:1:\"1\";s:9:\"resultado\";s:1:\"4\";s:14:\"formato_legado\";s:13:\"1:value={ace}\";s:8:\"estagios\";a:1:{i:0;O:8:\"stdClass\":5:{s:2:\"id\";s:1:\"1\";s:10:\"solucao_id\";s:1:\"1\";s:10:\"quantidade\";s:1:\"1\";s:14:\"num_expressoes\";s:1:\"1\";s:10:\"expressoes\";a:1:{i:0;O:8:\"stdClass\":5:{s:2:\"id\";s:1:\"1\";s:10:\"estagio_id\";s:1:\"1\";s:8:\"atributo\";s:5:\"value\";s:8:\"pertence\";s:1:\"t\";s:15:\"caracteristicas\";a:1:{i:0;O:8:\"stdClass\":3:{s:2:\"id\";s:1:\"1\";s:12:\"expressao_id\";s:1:\"1\";s:5:\"valor\";s:3:\"ace\";}}}}}}}s:8:\"universo\";O:8:\"stdClass\":4:{s:2:\"id\";s:1:\"1\";s:4:\"tipo\";s:7:\"baralho\";s:10:\"quantidade\";s:2:\"32\";s:9:\"elementos\";a:0:{}}}s:5:\"incio\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2017-08-06 19:08:51.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}s:6:\"estado\";s:8:\"INICIADO\";s:9:\"avaliador\";O:9:\"Avaliador\":6:{s:19:\"\0Avaliador\0universo\";N;s:18:\"\0Avaliador\0solucao\";N;s:20:\"\0Avaliador\0elementos\";N;s:23:\"\0Avaliador\0elemParticao\";N;s:20:\"\0Avaliador\0particoes\";N;s:23:\"\0Avaliador\0elemResposta\";N;}s:3:\"log\";O:3:\"Log\":1:{s:4:\"logs\";a:1:{i:0;O:8:\"stdClass\":2:{s:5:\"texto\";s:25:\"Iniciando desenvolvimento\";s:4:\"data\";O:8:\"DateTime\":3:{s:4:\"date\";s:26:\"2017-08-06 19:08:51.000000\";s:13:\"timezone_type\";i:3;s:8:\"timezone\";s:13:\"Europe/Berlin\";}}}}}');
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
  `predicado` varchar(200) DEFAULT NULL COMMENT 'baralho = cor\n',
  `atributo` varchar(200) DEFAULT NULL COMMENT 'baralho = naipe',
  `valor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`universo_id`),
  KEY `fk_elemento_universo1_idx` (`universo_id`),
  CONSTRAINT `fk_elemento_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elemento`
--

LOCK TABLES `elemento` WRITE;
/*!40000 ALTER TABLE `elemento` DISABLE KEYS */;
INSERT INTO `elemento` VALUES (1,1,'user_guide/img/imagens_Baralho/AsCopas.png','vermelho','copas','as'),(2,1,'user_guide/img/imagens_Baralho/AsEspadas.png','preto','espadas','as'),(3,1,'user_guide/img/imagens_Baralho/AsOuros.png','vermelho','ouros','as'),(4,1,'user_guide/img/imagens_Baralho/AsPaus.png','preto','paus','as'),(5,1,'user_guide/img/imagens_Baralho/DoisCopas.png','vermelho','copas','2'),(6,1,'user_guide/img/imagens_Baralho/DoisEspadas.png','preto','espadas','2'),(7,1,'user_guide/img/imagens_Baralho/DoisOuros.png','vermelho','ouros','2'),(8,1,'user_guide/img/imagens_Baralho/DoisPaus.png','preto','paus','2'),(9,1,'user_guide/img/imagens_Baralho/TresCopas.png','vermelho','copas','3'),(10,1,'user_guide/img/imagens_Baralho/TresEspadas.png','preto','espadas','3'),(11,1,'user_guide/img/imagens_Baralho/TresOuros.png','vermelho','ouros','3'),(12,1,'user_guide/img/imagens_Baralho/TresPaus.png','preto','paus','3'),(13,1,'user_guide/img/imagens_Baralho/QuatroCopas.png','vermelho','copas','4'),(14,1,'user_guide/img/imagens_Baralho/QuatroEspadas.png','preto','espadas','4'),(15,1,'user_guide/img/imagens_Baralho/QuatroOuros.png','vermelho','ouros','4'),(16,1,'user_guide/img/imagens_Baralho/QuatroPaus.png','preto','paus','4'),(17,1,'user_guide/img/imagens_Baralho/CincoCopas.png','vermelho','copas','5'),(18,1,'user_guide/img/imagens_Baralho/CincoEspadas.png','preto','espadas','5'),(19,1,'user_guide/img/imagens_Baralho/CincoOuros.png','vermelho','ouros','5'),(20,1,'user_guide/img/imagens_Baralho/CincoPaus.png','preto','paus','5'),(21,1,'user_guide/img/imagens_Baralho/SeisCopas.png','vermelho','copas','6'),(22,1,'user_guide/img/imagens_Baralho/SeisEspadas.png','preto','espadas','6'),(23,1,'user_guide/img/imagens_Baralho/SeisOuros.png','vermelho','ouros','6'),(24,1,'user_guide/img/imagens_Baralho/SeisPaus.png','preto','paus','6'),(25,1,'user_guide/img/imagens_Baralho/SeteCopas.png','vermelho','copas','7'),(26,1,'user_guide/img/imagens_Baralho/SeteEspadas.png','preto','espadas','7'),(27,1,'user_guide/img/imagens_Baralho/SeteOuros.png','vermelho','ouros','7'),(28,1,'user_guide/img/imagens_Baralho/SetePaus.png','preto','paus','7'),(29,1,'user_guide/img/imagens_Baralho/OitoCopas.png','vermelho','copas','8'),(30,1,'user_guide/img/imagens_Baralho/OitoEspadas.png','preto','espadas','8'),(31,1,'user_guide/img/imagens_Baralho/OitoOuros.png','vermelho','ouros','8'),(32,1,'user_guide/img/imagens_Baralho/OitoPaus.png','preto','paus','8'),(33,1,'user_guide/img/imagens_Baralho/NoveCopas.png','vermelho','copas','9'),(34,1,'user_guide/img/imagens_Baralho/NoveEspadas.png','preto','espadas','9'),(35,1,'user_guide/img/imagens_Baralho/NoveOuros.png','vermelho','ouros','9'),(36,1,'user_guide/img/imagens_Baralho/NovePaus.png','preto','paus','9'),(37,1,'user_guide/img/imagens_Baralho/DezCopas.png','vermelho','copas','10'),(38,1,'user_guide/img/imagens_Baralho/DezEspadas.png','preto','espadas','10'),(39,1,'user_guide/img/imagens_Baralho/DezOuros.png','vermelho','ouros','10'),(40,1,'user_guide/img/imagens_Baralho/DezPaus.png','preto','paus','10'),(41,1,'user_guide/img/imagens_Baralho/ValeteCopas.png','vermelho','copas','valete'),(42,1,'user_guide/img/imagens_Baralho/ValeteEspadas.png','preto','espadas','valete'),(43,1,'user_guide/img/imagens_Baralho/ValeteOuros.png','vermelho','ouros','valete'),(44,1,'user_guide/img/imagens_Baralho/ValetePaus.png','preto','paus','valete'),(45,1,'user_guide/img/imagens_Baralho/DamaCopas.png','vermelho','copas','dama'),(46,1,'user_guide/img/imagens_Baralho/DamaEspadas.png','preto','espadas','dama'),(47,1,'user_guide/img/imagens_Baralho/DamaOuros.png','vermelho','ouros','dama'),(48,1,'user_guide/img/imagens_Baralho/DamaPaus.png','preto','paus','dama'),(49,1,'user_guide/img/imagens_Baralho/ReiCopas.png','vermelho','copas','rei'),(50,1,'user_guide/img/imagens_Baralho/ReiEspadas.png','preto','espadas','rei'),(51,1,'user_guide/img/imagens_Baralho/ReiOuros.png','vermelho','ouros','rei'),(52,1,'user_guide/img/imagens_Baralho/ReiPaus.png','preto','paus','rei'),(53,2,'user_guide/img/imagens_Baralho/SeteCopas.png','vermelho','copas','7'),(54,2,'user_guide/img/imagens_Baralho/SeteEspadas.png','preto','espadas','7'),(55,2,'user_guide/img/imagens_Baralho/SeteOuros.png','vermelho','ouros','7'),(56,2,'user_guide/img/imagens_Baralho/SetePaus.png','preto','paus','7'),(57,2,'user_guide/img/imagens_Baralho/OitoCopas.png','vermelho','copas','8'),(58,2,'user_guide/img/imagens_Baralho/OitoEspadas.png','preto','espadas','8'),(59,2,'user_guide/img/imagens_Baralho/OitoOuros.png','vermelho','ouros','8'),(60,2,'user_guide/img/imagens_Baralho/OitoPaus.png','preto','paus','8'),(61,2,'user_guide/img/imagens_Baralho/NoveCopas.png','vermelho','copas','9'),(62,2,'user_guide/img/imagens_Baralho/NoveEspadas.png','preto','espadas','9'),(63,2,'user_guide/img/imagens_Baralho/NoveOuros.png','vermelho','ouros','9'),(64,2,'user_guide/img/imagens_Baralho/NovePaus.png','preto','paus','9'),(65,2,'user_guide/img/imagens_Baralho/DezCopas.png','vermelho','copas','10'),(66,2,'user_guide/img/imagens_Baralho/DezEspadas.png','preto','espadas','10'),(67,2,'user_guide/img/imagens_Baralho/DezOuros.png','vermelho','ouros','10'),(68,2,'user_guide/img/imagens_Baralho/DezPaus.png','preto','paus','10'),(69,2,'user_guide/img/imagens_Baralho/ValeteCopas.png','vermelho','copas','valete'),(70,2,'user_guide/img/imagens_Baralho/ValeteEspadas.png','preto','espadas','valete'),(71,2,'user_guide/img/imagens_Baralho/ValeteOuros.png','vermelho','ouros','valete'),(72,2,'user_guide/img/imagens_Baralho/ValetePaus.png','preto','paus','valete'),(73,2,'user_guide/img/imagens_Baralho/DamaCopas.png','vermelho','copas','dama'),(74,2,'user_guide/img/imagens_Baralho/DamaEspadas.png','preto','espadas','dama'),(75,2,'user_guide/img/imagens_Baralho/DamaOuros.png','vermelho','ouros','dama'),(76,2,'user_guide/img/imagens_Baralho/DamaPaus.png','preto','paus','dama'),(77,2,'user_guide/img/imagens_Baralho/ReiCopas.png','vermelho','copas','rei'),(78,2,'user_guide/img/imagens_Baralho/ReiEspadas.png','preto','espadas','rei'),(79,2,'user_guide/img/imagens_Baralho/ReiOuros.png','vermelho','ouros','rei'),(80,2,'user_guide/img/imagens_Baralho/ReiPaus.png','preto','paus','rei'),(81,3,'user_guide/img/imagens_Bola/1Vermelho.png','vermelho','','1'),(82,3,'user_guide/img/imagens_Bola/2Vermelho.png','vermelho','','2'),(83,3,'user_guide/img/imagens_Bola/3Vermelho.png','vermelho','','3'),(84,3,'user_guide/img/imagens_Bola/4Vermelho.png','vermelho','','4'),(85,3,'user_guide/img/imagens_Bola/5Vermelho.png','vermelho','','5'),(86,3,'user_guide/img/imagens_Bola/6Vermelho.png','vermelho','','6'),(87,3,'user_guide/img/imagens_Bola/7Vermelho.png','vermelho','','7'),(88,3,'user_guide/img/imagens_Bola/8Vermelho.png','vermelho','','8'),(89,3,'user_guide/img/imagens_Bola/9Vermelho.png','vermelho','','9'),(90,3,'user_guide/img/imagens_Bola/10Vermelho.png','vermelho','','10'),(91,3,'user_guide/img/imagens_Bola/1Azul.png','azul','','1'),(92,3,'user_guide/img/imagens_Bola/2Azul.png','azul','','2'),(93,3,'user_guide/img/imagens_Bola/3Azul.png','azul','','3'),(94,3,'user_guide/img/imagens_Bola/4Azul.png','azul','','4'),(95,3,'user_guide/img/imagens_Bola/5Azul.png','azul','','5'),(96,3,'user_guide/img/imagens_Bola/6Azul.png','azul','','6'),(97,3,'user_guide/img/imagens_Bola/7Azul.png','azul','','7'),(98,3,'user_guide/img/imagens_Bola/8Azul.png','azul','','8'),(99,3,'user_guide/img/imagens_Bola/9Azul.png','azul','','9'),(100,3,'user_guide/img/imagens_Bola/10Azul.png','azul','','10'),(101,3,'user_guide/img/imagens_Bola/1Amarelo.png','amarelo','','1'),(102,3,'user_guide/img/imagens_Bola/2Amarelo.png','amarelo','','2'),(103,3,'user_guide/img/imagens_Bola/3Amarelo.png','amarelo','','3'),(104,3,'user_guide/img/imagens_Bola/4Amarelo.png','amarelo','','4'),(105,3,'user_guide/img/imagens_Bola/5Amarelo.png','amarelo','','5'),(106,3,'user_guide/img/imagens_Bola/6Amarelo.png','amarelo','','6'),(107,3,'user_guide/img/imagens_Bola/7Amarelo.png','amarelo','','7'),(108,3,'user_guide/img/imagens_Bola/8Amarelo.png','amarelo','','8'),(109,3,'user_guide/img/imagens_Bola/9Amarelo.png','amarelo','','9'),(110,3,'user_guide/img/imagens_Bola/10Amarelo.png','amarelo','','10'),(111,4,'user_guide/img/imagens_Camisa/1GoleiroAzul.png','azul','goleiro','1'),(112,4,'user_guide/img/imagens_Camisa/2ZagueiroAzul.png','azul','zagueiro','2'),(113,4,'user_guide/img/imagens_Camisa/3ZagueiroAzul.png','azul','zagueiro','3'),(114,4,'user_guide/img/imagens_Camisa/4ZagueiroAzul.png','azul','zagueiro','4'),(115,4,'user_guide/img/imagens_Camisa/5MeioCampoAzul.png','azul','meio-campo','5'),(116,4,'user_guide/img/imagens_Camisa/6MeioCampoAzul.png','azul','meio-campo','6'),(117,4,'user_guide/img/imagens_Camisa/7MeioCampoAzul.png','azul','meio-campo','7'),(118,4,'user_guide/img/imagens_Camisa/8MeioCampoAzul.png','azul','meio-campo','8'),(119,4,'user_guide/img/imagens_Camisa/9MeioCampoAzul.png','azul','meio-campo','9'),(120,4,'user_guide/img/imagens_Camisa/10AtacanteAzul.png','azul','atacante','10'),(121,4,'user_guide/img/imagens_Camisa/11AtacanteAzul.png','azul','atacante','11'),(122,4,'user_guide/img/imagens_Camisa/1GoleiroAmarelo.png','amarelo','goleiro','1'),(123,4,'user_guide/img/imagens_Camisa/2ZagueiroAmarelo.png','amarelo','zagueiro','2'),(124,4,'user_guide/img/imagens_Camisa/3ZagueiroAmarelo.png','amarelo','zagueiro','3'),(125,4,'user_guide/img/imagens_Camisa/4ZagueiroAmarelo.png','amarelo','zagueiro','4'),(126,4,'user_guide/img/imagens_Camisa/5MeioCampoAmarelo.png','amarelo','meio-campo','5'),(127,4,'user_guide/img/imagens_Camisa/6MeioCampoAmarelo.png','amarelo','meio-campo','6'),(128,4,'user_guide/img/imagens_Camisa/7MeioCampoAmarelo.png','amarelo','meio-campo','7'),(129,4,'user_guide/img/imagens_Camisa/8MeioCampoAmarelo.png','amarelo','meio-campo','8'),(130,4,'user_guide/img/imagens_Camisa/9MeioCampoAmarelo.png','amarelo','meio-campo','9'),(131,4,'user_guide/img/imagens_Camisa/10AtacanteAmarelo.png','amarelo','atacante','10'),(132,4,'user_guide/img/imagens_Camisa/11AtacanteAmarelo.png','amarelo','atacante','11'),(133,4,'user_guide/img/imagens_Camisa/1GoleiroVerde.png','verde','goleiro','1'),(134,4,'user_guide/img/imagens_Camisa/2ZagueiroVerde.png','verde','zagueiro','2'),(135,4,'user_guide/img/imagens_Camisa/3ZagueiroVerde.png','verde','zagueiro','3'),(136,4,'user_guide/img/imagens_Camisa/4ZagueiroVerde.png','verde','zagueiro','4'),(137,4,'user_guide/img/imagens_Camisa/5MeioCampoVerde.png','verde','meio-campo','5'),(138,4,'user_guide/img/imagens_Camisa/6MeioCampoVerde.png','verde','meio-campo','6'),(139,4,'user_guide/img/imagens_Camisa/7MeioCampoVerde.png','verde','meio-campo','7'),(140,4,'user_guide/img/imagens_Camisa/8MeioCampoVerde.png','verde','meio-campo','8'),(141,4,'user_guide/img/imagens_Camisa/9MeioCampoVerde.png','verde','meio-campo','9'),(142,4,'user_guide/img/imagens_Camisa/10AtacanteVerde.png','verde','atacante','10'),(143,4,'user_guide/img/imagens_Camisa/11AtacanteVerde.png','verde','atacante','11'),(144,4,'user_guide/img/imagens_Camisa/1GoleiroVermelho.png','vermelho','goleiro','1'),(145,4,'user_guide/img/imagens_Camisa/2ZagueiroVermelho.png','vermelho','zagueiro','2'),(146,4,'user_guide/img/imagens_Camisa/3ZagueiroVermelho.png','vermelho','zagueiro','3'),(147,4,'user_guide/img/imagens_Camisa/4ZagueiroVermelho.png','vermelho','zagueiro','4'),(148,4,'user_guide/img/imagens_Camisa/5MeioCampoVermelho.png','vermelho','meio-campo','5'),(149,4,'user_guide/img/imagens_Camisa/6MeioCampoVermelho.png','vermelho','meio-campo','6'),(150,4,'user_guide/img/imagens_Camisa/7MeioCampoVermelho.png','vermelho','meio-campo','7'),(151,4,'user_guide/img/imagens_Camisa/8MeioCampoVermelho.png','vermelho','meio-campo','8'),(152,4,'user_guide/img/imagens_Camisa/9MeioCampoVermelho.png','vermelho','meio-campo','9'),(153,4,'user_guide/img/imagens_Camisa/10AtacanteVermelho.png','vermelho','atacante','10'),(154,4,'user_guide/img/imagens_Camisa/11AtacanteVermelho.png','vermelho','atacante','11');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='estagios da solucao de um exercicio\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estagio`
--

LOCK TABLES `estagio` WRITE;
/*!40000 ALTER TABLE `estagio` DISABLE KEYS */;
INSERT INTO `estagio` VALUES (1,1,1,1);
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
INSERT INTO `exercicio` VALUES (1,1,1,'Quantas possibilidades de 1 carta tipo Ás?','Baralho completo, com 52 cartas, 4 de cada.',NULL,NULL),(2,2,1,'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?','Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).',NULL,NULL),(3,2,1,'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?','Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).',NULL,NULL),(4,2,1,'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?','O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).  ',NULL,NULL),(5,4,1,'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?','O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.',NULL,NULL),(6,4,1,'Quantos jogadores existem que tenham camisa número 11?','Lembre-se que são 4 times.',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expressao`
--

LOCK TABLES `expressao` WRITE;
/*!40000 ALTER TABLE `expressao` DISABLE KEYS */;
INSERT INTO `expressao` VALUES (1,1,'value','t');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solucao`
--

LOCK TABLES `solucao` WRITE;
/*!40000 ALTER TABLE `solucao` DISABLE KEYS */;
INSERT INTO `solucao` VALUES (1,4,'1:value={ace}');
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

-- Dump completed on 2017-08-06 15:39:47
