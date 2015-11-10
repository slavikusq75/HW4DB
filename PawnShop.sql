-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: PawnShop
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `Checks1`
--

DROP TABLE IF EXISTS `Checks1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Checks1` (
  `idCheck` int(11) NOT NULL AUTO_INCREMENT,
  `numberOfCheck` int(4) NOT NULL,
  `summOfCheck` int(6) NOT NULL,
  `dateOfCheck` date NOT NULL,
  PRIMARY KEY (`idCheck`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Checks1`
--

LOCK TABLES `Checks1` WRITE;
/*!40000 ALTER TABLE `Checks1` DISABLE KEYS */;
INSERT INTO `Checks1` VALUES (1,2134,1250,'2015-09-20'),(2,2005,250,'2015-08-10'),(3,2004,1250,'2015-07-20'),(4,1934,1250,'2015-07-10'),(5,1905,250,'2015-03-02'),(6,1874,1250,'2015-09-20'),(7,1755,250,'2015-08-10'),(8,1730,60,'2015-07-20'),(9,1720,60,'2015-03-01');
/*!40000 ALTER TABLE `Checks1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clients`
--

DROP TABLE IF EXISTS `Clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clients` (
  `idClient` int(11) NOT NULL,
  `familyName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clients`
--

LOCK TABLES `Clients` WRITE;
/*!40000 ALTER TABLE `Clients` DISABLE KEYS */;
INSERT INTO `Clients` VALUES (12,'Vasiliyev','Dody','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01'),(15,'Alibaba','Vasiliy','1970-01-01');
/*!40000 ALTER TABLE `Clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clients1`
--

DROP TABLE IF EXISTS `Clients1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clients1` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `familyName` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clients1`
--

LOCK TABLES `Clients1` WRITE;
/*!40000 ALTER TABLE `Clients1` DISABLE KEYS */;
INSERT INTO `Clients1` VALUES (1,'Ivanov','Ivan','1990-03-20'),(2,'Petrov','Petr','1981-06-10'),(3,'Sidorov','Sidor','1980-04-21'),(4,'Vovanov','Vova','1980-03-10'),(5,'Mishin','Misha','1980-02-20'),(6,'Kolin','Kolia','1979-06-15'),(7,'Dimov','Dima','1975-04-24'),(8,'Sergeyev','Sergey','1973-07-11'),(9,'Smith','John','1954-03-15'),(13,'Smith','John','1954-03-15'),(15,'Smith','John','1954-03-15'),(17,'Smith','John','1954-03-15');
/*!40000 ALTER TABLE `Clients1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contracts`
--

DROP TABLE IF EXISTS `Contracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contracts` (
  `ContractNumber` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `idSubject` int(11) NOT NULL,
  `dateOfContract` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contracts`
--

LOCK TABLES `Contracts` WRITE;
/*!40000 ALTER TABLE `Contracts` DISABLE KEYS */;
/*!40000 ALTER TABLE `Contracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contracts1`
--

DROP TABLE IF EXISTS `Contracts1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contracts1` (
  `idContract` int(11) NOT NULL AUTO_INCREMENT,
  `numberOfContract` int(4) NOT NULL,
  `dateOfContract` date NOT NULL,
  PRIMARY KEY (`idContract`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contracts1`
--

LOCK TABLES `Contracts1` WRITE;
/*!40000 ALTER TABLE `Contracts1` DISABLE KEYS */;
INSERT INTO `Contracts1` VALUES (1,1562,'2015-09-20'),(2,1498,'2015-08-10'),(3,1462,'2015-07-20'),(4,1438,'2015-07-10'),(5,1352,'2015-03-02'),(6,1310,'2015-09-20'),(7,1260,'2015-08-10'),(8,1116,'2015-07-20'),(9,981,'2015-03-01');
/*!40000 ALTER TABLE `Contracts1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MortgagesSubjects`
--

DROP TABLE IF EXISTS `MortgagesSubjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MortgagesSubjects` (
  `idSubject` int(11) NOT NULL,
  `SubjectType` varchar(40) NOT NULL,
  `Fineness` int(7) NOT NULL,
  `Weight` float NOT NULL,
  `AssessedValue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MortgagesSubjects`
--

LOCK TABLES `MortgagesSubjects` WRITE;
/*!40000 ALTER TABLE `MortgagesSubjects` DISABLE KEYS */;
/*!40000 ALTER TABLE `MortgagesSubjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MortgagesSubjects1`
--

DROP TABLE IF EXISTS `MortgagesSubjects1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MortgagesSubjects1` (
  `idSubject` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) DEFAULT NULL,
  `subjectType` varchar(20) NOT NULL,
  `weight` float NOT NULL,
  `assessedValue` int(5) NOT NULL,
  `fineness` int(3) NOT NULL,
  PRIMARY KEY (`idSubject`),
  KEY `idClient` (`idClient`),
  CONSTRAINT `MortgagesSubjects1_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `Clients1` (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MortgagesSubjects1`
--

LOCK TABLES `MortgagesSubjects1` WRITE;
/*!40000 ALTER TABLE `MortgagesSubjects1` DISABLE KEYS */;
INSERT INTO `MortgagesSubjects1` VALUES (1,2,'Golden Ring',4.35,2500,585),(2,2,'Mobile Phone',0,400,0),(3,9,'Golden Ring',6.35,3500,585),(4,9,'Mobile Phone',0,600,0),(5,9,'Mobile Phone',0,400,0),(6,7,'Golden Ring',6.35,3500,585),(7,3,'Mobile Phone',0,600,0),(8,1,'Silver Ring',10.8,120,925),(9,6,'Silver Ring',16.3,180,916);
/*!40000 ALTER TABLE `MortgagesSubjects1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-10  1:41:42
