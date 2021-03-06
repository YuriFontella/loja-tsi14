CREATE DATABASE  IF NOT EXISTS `loja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loja`;
-- MySQL dump 10.13  Distrib 5.5.39, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: loja
-- ------------------------------------------------------
-- Server version	5.5.39-1

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
-- Table structure for table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrinho` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_produto` int(10) NOT NULL,
  `id_session` bigint(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho`
--

LOCK TABLES `carrinho` WRITE;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (3,'InformÃ¡tica'),(4,'EletrÃ´nicos'),(5,'Brinquedos'),(6,'Video Games'),(7,'AutomÃ³veis');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagens`
--

DROP TABLE IF EXISTS `imagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagens` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `foto` varchar(45) NOT NULL,
  `id_produto` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagens`
--

LOCK TABLES `imagens` WRITE;
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (1,'1.png',5),(2,'2.png',6),(3,'3.png',7),(4,'download.jpg',8),(5,'Large-Scale-2-4Ghz-4-5CH-rc-quadcopter-With-C',9),(6,'Large-Scale-2-4Ghz-4-5CH-rc-quadcopter-With-C',9),(7,'dsds.jpg',10),(8,'images.jpg',12),(9,'1475256.jpg',11),(10,'ps3.jpg',14),(11,'jogos-eletrÃ´nicos.jpg',13),(12,'jogcos.jpg',13),(13,'jogcos.jpg',15);
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(10) NOT NULL,
  `id_session` bigint(10) NOT NULL,
  `registrado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('true','false') CHARACTER SET utf8 NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) CHARACTER SET utf8 NOT NULL,
  `detalhes` text CHARACTER SET utf8,
  `preco` decimal(10,2) NOT NULL DEFAULT '0.00',
  `id_departamento` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produtos_departamentos_idx` (`id_departamento`),
  CONSTRAINT `fk_produtos_departamentos` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (5,'TelevisÃ£o','Full HD Led 40 Polegadas',149.99,4),(6,'Notebook HP','NÃ£o Ã© dos melhores',1970.00,3),(10,'Quadcoptero',' simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro',3000.00,4),(11,'MP3',' simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro',30.00,4),(12,'MOTO X',' simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro',4000.00,7),(14,'ps3',' simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro',4000.00,4),(15,'Xbox',' simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro',500000.00,6),(16,'Toy Story','Boneco do filme Toy Story',1.00,5),(17,'Impressora HP','Multifuncional HP',3.50,3);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (6,'admin','admin','admin','d033e22ae348aeb5660fc2140aec35850c4da997'),(7,'Yuri','yurifc4@gmail.com','yuri','48058e0c99bf7d689ce71c360699a14ce2f99774');
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

-- Dump completed on 2014-12-01  1:30:26
