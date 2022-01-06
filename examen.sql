CREATE DATABASE  IF NOT EXISTS `examen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `examen`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: examen
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `visible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (1,'Desarrollo',NULL,'SI'),(2,'RH',NULL,'SI'),(3,'Seguridad',NULL,'SI');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `idEmpleados` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `pass` varchar(90) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `visible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpleados`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'sergio miranda ',NULL,'checo@gmail.com','Masculino','45612345','123456789',NULL,'123','123','admin','SI'),(2,'Carlos',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(3,'Christian',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(4,'Marco',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(5,'Pericles',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(6,'Miguel',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(7,'Gustavo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(8,'Juan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SI'),(9,'rwe','2021-12-27','fdsafdsaf@fsdf.com','Masculino','43254325','5432','2022-01-06 22:23:29',NULL,NULL,NULL,'SI'),(10,'dsadfdsdsaf','2022-01-12','gads@fadsf',NULL,NULL,NULL,'2022-01-06 22:24:15',NULL,NULL,NULL,'SI'),(11,'fadsfsd','2022-01-11','fdsafdsaf@fsdf.com',NULL,NULL,NULL,'2022-01-06 22:25:51',NULL,NULL,NULL,'SI');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `visible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'A',NULL,'SI'),(2,'B',NULL,'SI'),(3,'C',NULL,'SI');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacion_departamento_empleados`
--

DROP TABLE IF EXISTS `relacion_departamento_empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relacion_departamento_empleados` (
  `idrelacion_departamento_empleados` int(11) NOT NULL AUTO_INCREMENT,
  `idDepartamento` varchar(45) DEFAULT NULL,
  `idEmpleados` varchar(45) DEFAULT NULL,
  `idEmpresa` varchar(45) DEFAULT NULL,
  `visible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idrelacion_departamento_empleados`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacion_departamento_empleados`
--

LOCK TABLES `relacion_departamento_empleados` WRITE;
/*!40000 ALTER TABLE `relacion_departamento_empleados` DISABLE KEYS */;
INSERT INTO `relacion_departamento_empleados` VALUES (1,'1','1','1','SI'),(2,'2','2','2','SI'),(3,'3','3','3','SI'),(4,'1','4','1','SI'),(5,'1','5','2','SI'),(6,'2','6','3','SI'),(7,'2','7','1','SI'),(8,'2','8','2','SI'),(9,'1','9','2','SI'),(10,'2','10','1','SI'),(11,'1','11','1','SI');
/*!40000 ALTER TABLE `relacion_departamento_empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacion_departamento_empresa`
--

DROP TABLE IF EXISTS `relacion_departamento_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relacion_departamento_empresa` (
  `idrelacion_departamento_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `idDepartamento` varchar(45) DEFAULT NULL,
  `idEmpresa` varchar(45) DEFAULT NULL,
  `visible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idrelacion_departamento_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacion_departamento_empresa`
--

LOCK TABLES `relacion_departamento_empresa` WRITE;
/*!40000 ALTER TABLE `relacion_departamento_empresa` DISABLE KEYS */;
INSERT INTO `relacion_departamento_empresa` VALUES (1,'1','1','SI'),(2,'2','1','SI'),(3,'3','2','SI'),(4,'1','2','SI'),(5,'2','3','SI'),(6,'3','3','SI');
/*!40000 ALTER TABLE `relacion_departamento_empresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-06 16:43:23
