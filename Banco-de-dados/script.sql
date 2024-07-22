CREATE DATABASE `godriver`;
USE `godriver`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: godriver
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` char(64) NOT NULL,
  `email` char(128) NOT NULL,
  `senha` char(128) NOT NULL,
  `tel` char(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Fred','fredericoaugustoferraz@gmail.com','senac123','(61) 98162-4932'),(2,'Bruno','brunintsu416@gmail.com','senac123','(61) 99582-1542'),(3,'João Lucas','joaolucasmctt@gmail.com','senac123','(61) 98266-3548'),(4,'Elyan','bilmiguel00@gmail.com','senac123','(65) 99807-1861');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carros`
--

DROP TABLE IF EXISTS `carros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carros` (
  `id_carros` int NOT NULL AUTO_INCREMENT,
  `img` char(30) DEFAULT NULL,
  `marca` char(30) DEFAULT NULL,
  `nome` char(30) DEFAULT NULL,
  `valor` decimal(30,0) DEFAULT NULL,
  PRIMARY KEY (`id_carros`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carros`
--

LOCK TABLES `carros` WRITE;
/*!40000 ALTER TABLE `carros` DISABLE KEYS */;
INSERT INTO `carros` VALUES (1,'Mobi.png','Fiat','Mobi',1000),(2,'argo.png','Fiat','Argo',1500),(3,'Fiat strada.png','Fiat','Strada',2200),(4,'hb20.png','Hyundai','Hb20',1800),(5,'Fiat_Cronos.png','Fiat','Cronos',2900),(6,'Chevrolet.png','Chevrolet','Tracker',4500),(7,'Citroern.png','Citroen','C3',3000),(8,'jeep.png','Jeep','Renegade',2900),(9,'Fiorino.png','Fiat','Fiorino',1990),(10,'Toyota.png','Toyota','Corolla',1890);
/*!40000 ALTER TABLE `carros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--
select * from cliente;
DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` char(64) NOT NULL,
  `email` char(128) NOT NULL,
  `senha` char(128) NOT NULL,
  `tel` char(16) NOT NULL,
  `CPF` char(16) NOT NULL,
  `sexo` char(16) NOT NULL,
  `data_cad` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
drop table pedidos;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id_pedidos` int NOT NULL AUTO_INCREMENT,
  `id_produto` int NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `data_pedido` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marca` char(20) DEFAULT NULL,
  `nome` char(200) DEFAULT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `foto` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Fiat','Mobi',10,1000,'tcc/Mobi.png'),(2,'Fiat','Argo',6,1500,'tcc/argo.png'),(3,'Fiat','Strada',5,2200,'tcc/Fiat strada.png'),(4,'Hyundai','Hb20',2,1800,'tcc/hb20.png'),(5,'Fiat','Cronos',1,2900,'tcc/Fiat_Cronos.png'),(6,'Chevrolet','Tracker',6,4500,'tcc/Chevrolet.png'),(7,'Citroen','C3',9,3000,'tcc/Citroern.png');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veiculos` (
  `id_veic` int NOT NULL AUTO_INCREMENT,
  `marca` char(16) NOT NULL,
  `modelo` char(32) NOT NULL,
  `cor` char(16) NOT NULL,
  `chassi` char(20) NOT NULL,
  `placa` char(16) NOT NULL,
  `portas` int NOT NULL,
  `ano_fabri` int NOT NULL,
  `cambio` char(6) NOT NULL,
  `tracao` char(4) NOT NULL,
  PRIMARY KEY (`id_veic`),
  UNIQUE KEY `chassi` (`chassi`),
  UNIQUE KEY `placa` (`placa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculos`
--

LOCK TABLES `veiculos` WRITE;
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-16 17:29:00