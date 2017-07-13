CREATE DATABASE  IF NOT EXISTS `icombh5` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `icombh5`;
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
-- Table structure for table `condicao`
--

DROP TABLE IF EXISTS `condicao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condicao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estagio_id` int(11) NOT NULL,
  `atributo` varchar(200) DEFAULT NULL,
  `pertence` char(1) DEFAULT NULL,
  `caracteristica` varchar(200) DEFAULT NULL COMMENT 'indicador de uma caracteristica de um ou varios elemtentos que filtrara o universo. Exemplo se atributo=valor entao caracteristica=elemento.valor, se atributo=cor entao caracteristica=elemento.cor\n',
  PRIMARY KEY (`id`),
  KEY `fk_condicao_estagio1_idx` (`estagio_id`),
  CONSTRAINT `fk_condicao_estagio1` FOREIGN KEY (`estagio_id`) REFERENCES `estagio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicao`
--

LOCK TABLES `condicao` WRITE;
/*!40000 ALTER TABLE `condicao` DISABLE KEYS */;
/*!40000 ALTER TABLE `condicao` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elemento`
--

LOCK TABLES `elemento` WRITE;
/*!40000 ALTER TABLE `elemento` DISABLE KEYS */;
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
  `exercicio_id` int(3) NOT NULL,
  `num_propriedades` int(11) DEFAULT NULL,
  `num_elementos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estagio_exercicio_idx` (`exercicio_id`),
  CONSTRAINT `fk_estagio_exercicio` FOREIGN KEY (`exercicio_id`) REFERENCES `exercicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='estagios da solucao de um exercicio\n';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estagio`
--

LOCK TABLES `estagio` WRITE;
/*!40000 ALTER TABLE `estagio` DISABLE KEYS */;
/*!40000 ALTER TABLE `estagio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estagio_formula`
--

DROP TABLE IF EXISTS `estagio_formula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estagio_formula` (
  `estagio_id` int(11) NOT NULL,
  `formula_id` int(3) NOT NULL,
  `n` int(11) DEFAULT NULL,
  `p` int(11) DEFAULT NULL,
  PRIMARY KEY (`estagio_id`,`formula_id`),
  KEY `fk_estagio_has_formula_formula1_idx` (`formula_id`),
  KEY `fk_estagio_has_formula_estagio1_idx` (`estagio_id`),
  CONSTRAINT `fk_estagio_has_formula_estagio1` FOREIGN KEY (`estagio_id`) REFERENCES `estagio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estagio_has_formula_formula1` FOREIGN KEY (`formula_id`) REFERENCES `formula` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estagio_formula`
--

LOCK TABLES `estagio_formula` WRITE;
/*!40000 ALTER TABLE `estagio_formula` DISABLE KEYS */;
/*!40000 ALTER TABLE `estagio_formula` ENABLE KEYS */;
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
  `descricao` varchar(200) NOT NULL,
  `dica` varchar(250) NOT NULL,
  `solucao_relestagio` varchar(45) DEFAULT NULL COMMENT 'relacionamento que une os estagios da soluca ( multiplicacao ou soma)\n',
  `solucao_resfinal` varchar(45) DEFAULT NULL COMMENT 'resultado final esperado',
  `tempo_esperado` int(11) DEFAULT NULL,
  `operacao` varchar(45) DEFAULT NULL COMMENT 'nao sei pq',
  PRIMARY KEY (`id`),
  KEY `fk_exercicio_universo1_idx` (`universo_id`),
  CONSTRAINT `fk_exercicio_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercicio`
--

LOCK TABLES `exercicio` WRITE;
/*!40000 ALTER TABLE `exercicio` DISABLE KEYS */;
INSERT INTO `exercicio` VALUES (1,1,'Quantas possibilidades de 1 carta tipo Ás?','Baralho completo, com 52 cartas, 4 de cada.',NULL,NULL,NULL,NULL),(2,1,'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?','Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).',NULL,NULL,NULL,NULL),(3,1,'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?','Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).',NULL,NULL,NULL,NULL),(4,1,'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?','O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).  ',NULL,NULL,NULL,NULL),(5,1,'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?','O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.',NULL,NULL,NULL,NULL),(6,1,'Quantos jogadores existem que tenham camisa número 11?','Lembre-se que são 4 times.',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `exercicio` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `universo`
--

LOCK TABLES `universo` WRITE;
/*!40000 ALTER TABLE `universo` DISABLE KEYS */;
INSERT INTO `universo` VALUES (1,'baralho',32);
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

-- Dump completed on 2017-07-12 21:42:23
