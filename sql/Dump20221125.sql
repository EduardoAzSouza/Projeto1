CREATE DATABASE  IF NOT EXISTS `sistema` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sistema`;
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
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_adm`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'Administrador','admin','0192023a7bbd73250516f069df18b500'),(2,'Administrator','testeadmin','9ca28a9b83809ef59801043f81448fab'),(3,'Administrator','teste','202cb962ac59075b964b07152d234b70');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Overdrive Softwares e Consultoria','Overdrive','73.739.457/0001-96','Sem endereço presencial','(19)98571-2127','Rafael'),(2,'Microsoft Informática LTDA','Microsoft','60.316.817/0001-03','Av. Nações Unidas, 12.901 Torre Norte 27º','(11)95504-2155','Bill'),(3,'UDEMY, INC.','UDEMY','29.030.862/0001-49','600 HARRISON STREET, S/N THIRD FLOOR CA 94107 - SAN FRANCISCO','(87)98864-6955','Udemy Boss');
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
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id_emp`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Eduardo Souza','154.682.750-15','09352766818','Algun lugar proximo ao Senai','(11)97514-8976','Ford Fiesta',1,'12345678'),(2,'Alfredo Passos Facre Rabelo','874.770.940-54','89873103808','Algum lugar da America do Sul','(62)96975-7444','Chvrolet Classic',1,'12345678'),(3,'Pedro Xavier Navega','142.356.913-09','53934420716','Rua Santo Inácio','(85)97584-2925','Brasilia',1,'12345678'),(4,'Aparecida Valente','211.445.711-70','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(5,'Gabrielle Richa Guzzo','527.076.198-09','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(6,'Ricardo Campos','218.171.121-63','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(7,'Maiara França','813.125.189-60','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(8,'Erick Farias Cormack','025.901.488-52','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'5e8667a439c68f5145dd2fcbecf02209'),(9,'Gilmara Leandro','645.810.164-36','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(10,'Maria Barthon','293.989.552-02','88870271898','Rua Congonha','(67)2212-6188','Civc',2,'12345678'),(11,'Arnaldo Carino','981.362.931-20','','Quadra 254','(62)3440-3662','',3,'12345678'),(12,'Domingos Annunziato','588.541.642-75',NULL,'Quadra 913','(32)3822-3873',NULL,1,'12345678'),(13,'Frank Richa','779.759.551-83','','Quadra 745','(67)3612-1384','',2,'12345678'),(14,'Fernando Lucas Bastida','189.518.732-00',NULL,'Quadra 687','(67)2433-4256',NULL,1,'12345678'),(15,'Katia Mattos Figueiras','978.215.872-06',NULL,'Quadra 357','(65)2831-6281',NULL,1,'12345678'),(16,'Henry Ramos Melo','157.345.824-41',NULL,'Quadra 187','(45)2297-2222',NULL,1,'12345678'),(17,'Jouceli Gripp Castelete','636.625.360-99',NULL,'Quadra 364','(75)2680-8802',NULL,1,'12345678'),(18,'Bento Saldanha Carmanin','288.211.681-07',NULL,'Quadra 678','(12)2607-4634',NULL,1,'12345678'),(19,'Nara de Arruda','807.094.532-05','12360566339','Rua Nelade','(62)96975-7499','Vectra',1,'87654321'),(20,'teste','967.515.247-81','24144577795','Rua Quintino Bocaiúva','(28) 3780-3166','Cyber Truck',2,'32154698'),(21,'Silvia Heizelmann Alentejo','185.338.663-48','55170506564','Rua Confins, 278, Santa Maria, Teresina - PI','(86)97202-5267','',3,'12345678'),(22,'Yuri Annunziato Camacho','779.127.358-88','','Rua Pernambuco, 275, Chácaras Anhangüera Rio Verde-GO','(62)99216-8567','',3,'25d55ad283aa400af464'),(23,'Pietir Pereira Serravalle','303.663.110-00','','Rua Vitor Francisco Ney','(53) 98595-7078','',2,'25d55ad283aa400af464'),(24,'Laura Leite','248.821.351-91','68048192746','Algun lugar proximo ao Senai','(11)97514-8586','Ford KA',1,'25d55ad283aa400af464c76d713c07ad');
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

-- Dump completed on 2022-11-25 17:22:04
