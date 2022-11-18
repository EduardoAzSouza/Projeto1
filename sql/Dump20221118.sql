-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: sistema
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_adm`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'Administrador','admin','admin123');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `nome_fant` varchar(80) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `responsavel` varchar(40) NOT NULL,
  PRIMARY KEY (`id_emp`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Overdrive','Overdrive Softwares e Consultoria','73.739.457/0001-96','Algum lugar de Araras','(19)98571-2127','Rafael'),(2,'Sol Agora','CREDGRID SERVIÇOS FINANCEIROS S.A.','21.331.849/0001-18','Algum lugar de Sãp Paulo','(11)93810-9337','Sol');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `cnh` varchar(14) DEFAULT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `carro` varchar(30) DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id_emp`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Eduardo Souza','154.682.750-15','09352766818','Algun lugar proximo ao Senai','(11)97514-8999','Ford Focus',2,'12345678'),(2,'Alfredo Passos Facre Rabelo','874.770.940-54','89873103808','Algum lugar da America do Sul','(62)96975-7444','Chvrolet Classic',2,'87654321'),(3,'Pedro Xavier Navega','142.356.913-09','53934420716','Rua Santo Inácio','(85)97584-2925','Brasilia',1,'87564231'),(12,'Aparecida Valente','211.445.711-70','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(14,'Gabrielle Richa Guzzo','527.076.198-09','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(15,'Ricardo Campos','218.171.121-63','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(16,'Maiara França','813.125.189-60','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(17,'Erick Farias Cormack','025.901.488-52','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(18,'Gilmara Leandro','645.810.164-36','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(19,'Maria Barthon','293.989.552-02','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(20,'Arnaldo Carino','981.362.931-20',NULL,'Quadra 254','(62)3440-3662',NULL,1,'12345678'),(21,'Domingos Annunziato','588.541.642-75',NULL,'Quadra 913','(32)3822-3873',NULL,1,'12345678'),(22,'Frank Richa','779.759.551-83',NULL,'Quadra 745','(67)3612-1384',NULL,1,'12345678'),(23,'Fernando Lucas Bastida','189.518.732-00',NULL,'Quadra 687','(67)2433-4256',NULL,1,'12345678'),(24,'Katia Mattos Figueiras','978.215.872-06',NULL,'Quadra 357','(65)2831-6281',NULL,1,'12345678'),(25,'Henry Ramos Melo','157.345.824-41',NULL,'Quadra 187','(45)2297-2222',NULL,1,'12345678'),(26,'Jouceli Gripp Castelete','636.625.360-99',NULL,'Quadra 364','(75)2680-8802',NULL,1,'12345678'),(27,'Bento Saldanha Carmanin','288.211.681-07',NULL,'Quadra 678','(12)2607-4634',NULL,1,'12345678'),(30,'Nara de Arruda','807.094.532-05','12360566339','Rua Nelade','(62)96975-7499','Vectra',1,'87654321'),(32,'teste','967.515.247-81','24144577795','Rua Quintino Bocaiúva','(28) 3780-3166','Cyber Truck',2,'32154698');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-18 17:07:32
