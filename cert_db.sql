-- MySQL dump 10.13  Distrib 5.7.14, for osx10.11 (x86_64)
--
-- Host: localhost    Database: cert_db
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin`
--

LOCK TABLES `tbl_admin` WRITE;
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` VALUES (1,'lanzruizdesigns@gmail.com','21232f297a57a5a743894a0e4a801fc3'),(2,'roly@hurdman.net','21232f297a57a5a743894a0e4a801fc3'),(3,'roly@hurdman.net','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admin_info`
--

DROP TABLE IF EXISTS `tbl_admin_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_admin_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `date_created` date DEFAULT NULL,
  `date_activated` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin_info`
--

LOCK TABLES `tbl_admin_info` WRITE;
/*!40000 ALTER TABLE `tbl_admin_info` DISABLE KEYS */;
INSERT INTO `tbl_admin_info` VALUES (1,'roly','ruiz',NULL,NULL,1,1,1,''),(2,'roly','ruiz','2016-11-03',NULL,1,3,2,'bocado');
/*!40000 ALTER TABLE `tbl_admin_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_community`
--

DROP TABLE IF EXISTS `tbl_community`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_community` (
  `community_id` int(11) NOT NULL AUTO_INCREMENT,
  `community_name` varchar(100) NOT NULL,
  `community_creator` varchar(100) NOT NULL,
  `community_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`community_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_community`
--

LOCK TABLES `tbl_community` WRITE;
/*!40000 ALTER TABLE `tbl_community` DISABLE KEYS */;
INSERT INTO `tbl_community` VALUES (30,'Cebu Emergency App','Lanzruizdesigns@gmail.com',12304,66),(31,'asdasd','asdasd',4345,67);
/*!40000 ALTER TABLE `tbl_community` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_community_page`
--

DROP TABLE IF EXISTS `tbl_community_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_community_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text,
  `app_code` text,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  `editable` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_community_page`
--

LOCK TABLES `tbl_community_page` WRITE;
/*!40000 ALTER TABLE `tbl_community_page` DISABLE KEYS */;
INSERT INTO `tbl_community_page` VALUES (15,'Ask code Page',NULL,NULL,0,0,30,0),(16,'Loading Page',NULL,NULL,0,0,30,1),(17,'Instruction Page',NULL,NULL,0,0,30,1),(18,'Interview',NULL,NULL,0,0,30,1),(19,'Main',NULL,NULL,0,0,30,1);
/*!40000 ALTER TABLE `tbl_community_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_defualt_page`
--

DROP TABLE IF EXISTS `tbl_defualt_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_defualt_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text,
  `app_code` text,
  `status` int(11) DEFAULT NULL,
  `editable` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_defualt_page`
--

LOCK TABLES `tbl_defualt_page` WRITE;
/*!40000 ALTER TABLE `tbl_defualt_page` DISABLE KEYS */;
INSERT INTO `tbl_defualt_page` VALUES (1,'Ask code Page',NULL,NULL,NULL,0),(2,'Loading Page',NULL,NULL,NULL,1),(3,'Instruction Page',NULL,NULL,NULL,1),(4,'Interview',NULL,NULL,NULL,1),(5,'Main',NULL,NULL,NULL,1);
/*!40000 ALTER TABLE `tbl_defualt_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resources`
--

DROP TABLE IF EXISTS `tbl_resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `availability` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `community_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resources`
--

LOCK TABLES `tbl_resources` WRITE;
/*!40000 ALTER TABLE `tbl_resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_info`
--

DROP TABLE IF EXISTS `tbl_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `position` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_info`
--

LOCK TABLES `tbl_user_info` WRITE;
/*!40000 ALTER TABLE `tbl_user_info` DISABLE KEYS */;
INSERT INTO `tbl_user_info` VALUES (40,'LAnz','Bocado','Ruiz',1,'2016-10-05',66),(41,'fsdfsf','sdfsf','sdfsdf',1,'2016-11-02',67);
/*!40000 ALTER TABLE `tbl_user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_joined`
--

DROP TABLE IF EXISTS `tbl_user_joined`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_joined` (
  `joined_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`joined_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_joined`
--

LOCK TABLES `tbl_user_joined` WRITE;
/*!40000 ALTER TABLE `tbl_user_joined` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_user_joined` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user_login`
--

DROP TABLE IF EXISTS `tbl_user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_login`
--

LOCK TABLES `tbl_user_login` WRITE;
/*!40000 ALTER TABLE `tbl_user_login` DISABLE KEYS */;
INSERT INTO `tbl_user_login` VALUES (66,'Lanzruizdesigns@gmail.com','827ccb0eea8a706c4c34a16891f84e7b'),(67,'asdasd','49f0bad299687c62334182178bfd75d8');
/*!40000 ALTER TABLE `tbl_user_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-05 18:17:44
