-- MySQL dump 10.13  Distrib 5.7.19, for macos10.12 (x86_64)
--
-- Host: localhost    Database: polar
-- ------------------------------------------------------
-- Server version	5.7.18

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hue` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'09b4d6d149171b99bc71810e13d1c36b.jpg',11,NULL,'2017-07-19 19:18:59','2017-07-19 19:18:59'),(2,'18921860_1275411985904634_6197512308178209189_n.png',89,NULL,'2017-07-19 19:18:59','2017-07-19 19:18:59'),(3,'19275136_1285918461520653_6585920528355485752_n.jpg',50,NULL,'2017-07-19 19:18:59','2017-07-19 19:18:59'),(4,'3f7b95d507cd5eb52c5d1e164db79307.jpg',38,NULL,'2017-07-19 19:18:59','2017-07-19 19:18:59'),(5,'99b7d9e922b863907a2e077dd8ea179a.jpg',78,NULL,'2017-07-19 19:18:59','2017-07-19 19:18:59'),(6,'19260399_1942725522634101_3177610134988646979_n.jpg',9,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(7,'19260620_1546744358703099_8267404426679536645_n.jpg',30,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(8,'19264380_1136099236496827_5828162652312002356_o.jpg',81,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(9,'19396633_1286237688155397_7919307762277139309_n.jpg',99,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(10,'19399343_1287926577986508_3870463492160236212_n.jpg',75,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(11,'19399893_1135441279895956_8549061170380612595_n.jpg',34,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(12,'19420439_1288126054633227_7837724033636394207_n.jpg',56,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(13,'19420855_1941642152742438_7288572803538905672_n.jpg',78,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(14,'19424070_2130874443907995_6394737112531339897_n.jpg',25,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(15,'19424070_2130874443907995_6394737112531339897_n.jpg',90,NULL,'2017-07-20 08:35:35','2017-07-20 08:35:35'),(17,'4914208-image (1).jpg',50,NULL,'2017-07-20 13:39:08','2017-07-20 13:39:08'),(18,'4914208-image(1)(1).jpg',50,NULL,'2017-07-20 14:17:39','2017-07-20 14:17:39'),(19,'4914208-image(1)(1)(1).jpg',50,NULL,'2017-07-20 15:56:13','2017-07-20 15:56:13'),(20,'IMG_20170520_110602_HDR.jpg',50,NULL,'2017-07-21 00:33:20','2017-07-21 00:33:20'),(21,'IMG_20170520_110602_HDR.jpg',50,NULL,'2017-07-21 00:33:20','2017-07-21 00:33:20'),(22,'IMG_20170520_142610_HDR.jpg',50,NULL,'2017-07-21 00:33:21','2017-07-21 00:33:21'),(23,'IMG_20170520_142610_HDR.jpg',50,NULL,'2017-07-21 00:33:21','2017-07-21 00:33:21'),(24,'IMG_20170520_143147_HDR.jpg',50,NULL,'2017-07-21 00:33:22','2017-07-21 00:33:22'),(25,'IMG_20170520_143147_HDR.jpg',50,NULL,'2017-07-21 00:33:22','2017-07-21 00:33:22');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2017_07_19_162546_create_images_table',1),(10,'2017_07_19_181615_add_hue_to_images',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-22  1:36:52
