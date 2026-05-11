-- MySQL dump 10.13  Distrib 8.0.35, for Win64 (x86_64)
--
-- Host: localhost    Database: rahatlivedb
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inquiries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inquiries_is_read_index` (`is_read`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiries`
--

LOCK TABLES `inquiries` WRITE;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
INSERT INTO `inquiries` VALUES (1,'Muhammad Rashid Khan','mrashid2000@gmail.com','03333284252','Karachi','Test Message','127.0.0.1',0,'2026-05-10 14:05:12','2026-05-10 14:05:12'),(2,'Muhammad Rashid Khan','mrashid2000@gmail.com','03333284252','Karachi','Test Message','127.0.0.1',0,'2026-05-10 14:21:09','2026-05-10 14:21:09'),(3,'Muhammad Rashid Khan','mrashid2000@gmail.com','03333284252','Karachi','Testing Testing','127.0.0.1',0,'2026-05-10 14:26:14','2026-05-10 14:26:14'),(4,'Muhammad Rashid Khan','mrashid2000@gmail.com','03333284252','Karachi','testing testing 2','127.0.0.1',0,'2026-05-10 14:32:49','2026-05-10 14:32:49'),(5,'Muhammad Rashid Khan','mrashid2000@gmail.com','03333284252','Karachi','testing message','127.0.0.1',0,'2026-05-10 14:41:31','2026-05-10 14:41:31');
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_04_30_213437_create_shows_table',2),(5,'2026_04_30_213453_create_subscribers_table',2),(6,'2026_04_30_213525_create_inquiries_table',2),(7,'2026_04_30_213543_create_poll_votes_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_votes`
--

DROP TABLE IF EXISTS `poll_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_votes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `poll_votes_city_index` (`city`)
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_votes`
--

LOCK TABLES `poll_votes` WRITE;
/*!40000 ALTER TABLE `poll_votes` DISABLE KEYS */;
INSERT INTO `poll_votes` VALUES (1,'Dallas','127.0.0.1','seed_0_0','2026-04-30 16:55:02','2026-04-30 16:55:02'),(2,'Dallas','127.0.0.2','seed_0_1','2026-04-30 16:55:02','2026-04-30 16:55:02'),(3,'Dallas','127.0.0.3','seed_0_2','2026-04-30 16:55:02','2026-04-30 16:55:02'),(4,'Dallas','127.0.0.4','seed_0_3','2026-04-30 16:55:02','2026-04-30 16:55:02'),(5,'Dallas','127.0.0.5','seed_0_4','2026-04-30 16:55:02','2026-04-30 16:55:02'),(6,'Dallas','127.0.0.6','seed_0_5','2026-04-30 16:55:02','2026-04-30 16:55:02'),(7,'Dallas','127.0.0.7','seed_0_6','2026-04-30 16:55:02','2026-04-30 16:55:02'),(8,'Dallas','127.0.0.8','seed_0_7','2026-04-30 16:55:02','2026-04-30 16:55:02'),(9,'Dallas','127.0.0.9','seed_0_8','2026-04-30 16:55:02','2026-04-30 16:55:02'),(10,'Dallas','127.0.0.10','seed_0_9','2026-04-30 16:55:02','2026-04-30 16:55:02'),(11,'Dallas','127.0.0.11','seed_0_10','2026-04-30 16:55:02','2026-04-30 16:55:02'),(12,'Dallas','127.0.0.12','seed_0_11','2026-04-30 16:55:02','2026-04-30 16:55:02'),(13,'Dallas','127.0.0.13','seed_0_12','2026-04-30 16:55:02','2026-04-30 16:55:02'),(14,'Dallas','127.0.0.14','seed_0_13','2026-04-30 16:55:02','2026-04-30 16:55:02'),(15,'Dallas','127.0.0.15','seed_0_14','2026-04-30 16:55:02','2026-04-30 16:55:02'),(16,'Dallas','127.0.0.16','seed_0_15','2026-04-30 16:55:02','2026-04-30 16:55:02'),(17,'Dallas','127.0.0.17','seed_0_16','2026-04-30 16:55:02','2026-04-30 16:55:02'),(18,'Dallas','127.0.0.18','seed_0_17','2026-04-30 16:55:02','2026-04-30 16:55:02'),(19,'Dallas','127.0.0.19','seed_0_18','2026-04-30 16:55:02','2026-04-30 16:55:02'),(20,'Dallas','127.0.0.20','seed_0_19','2026-04-30 16:55:02','2026-04-30 16:55:02'),(21,'Dallas','127.0.0.21','seed_0_20','2026-04-30 16:55:02','2026-04-30 16:55:02'),(22,'Dallas','127.0.0.22','seed_0_21','2026-04-30 16:55:02','2026-04-30 16:55:02'),(23,'Dallas','127.0.0.23','seed_0_22','2026-04-30 16:55:02','2026-04-30 16:55:02'),(24,'Dallas','127.0.0.24','seed_0_23','2026-04-30 16:55:02','2026-04-30 16:55:02'),(25,'Dallas','127.0.0.25','seed_0_24','2026-04-30 16:55:02','2026-04-30 16:55:02'),(26,'Dallas','127.0.0.26','seed_0_25','2026-04-30 16:55:02','2026-04-30 16:55:02'),(27,'Dallas','127.0.0.27','seed_0_26','2026-04-30 16:55:02','2026-04-30 16:55:02'),(28,'Dallas','127.0.0.28','seed_0_27','2026-04-30 16:55:02','2026-04-30 16:55:02'),(29,'Dallas','127.0.0.29','seed_0_28','2026-04-30 16:55:02','2026-04-30 16:55:02'),(30,'Dallas','127.0.0.30','seed_0_29','2026-04-30 16:55:02','2026-04-30 16:55:02'),(31,'Dallas','127.0.0.31','seed_0_30','2026-04-30 16:55:02','2026-04-30 16:55:02'),(32,'Dallas','127.0.0.32','seed_0_31','2026-04-30 16:55:02','2026-04-30 16:55:02'),(33,'Dallas','127.0.0.33','seed_0_32','2026-04-30 16:55:02','2026-04-30 16:55:02'),(34,'Dallas','127.0.0.34','seed_0_33','2026-04-30 16:55:02','2026-04-30 16:55:02'),(35,'Dallas','127.0.0.35','seed_0_34','2026-04-30 16:55:02','2026-04-30 16:55:02'),(36,'Dallas','127.0.0.36','seed_0_35','2026-04-30 16:55:02','2026-04-30 16:55:02'),(37,'Dallas','127.0.0.37','seed_0_36','2026-04-30 16:55:02','2026-04-30 16:55:02'),(38,'Dallas','127.0.0.38','seed_0_37','2026-04-30 16:55:02','2026-04-30 16:55:02'),(39,'Dallas','127.0.0.39','seed_0_38','2026-04-30 16:55:02','2026-04-30 16:55:02'),(40,'Dallas','127.0.0.40','seed_0_39','2026-04-30 16:55:02','2026-04-30 16:55:02'),(41,'Dallas','127.0.0.41','seed_0_40','2026-04-30 16:55:02','2026-04-30 16:55:02'),(42,'Dallas','127.0.0.42','seed_0_41','2026-04-30 16:55:02','2026-04-30 16:55:02'),(43,'Houston','127.0.0.1','seed_1_0','2026-04-30 16:55:02','2026-04-30 16:55:02'),(44,'Houston','127.0.0.2','seed_1_1','2026-04-30 16:55:02','2026-04-30 16:55:02'),(45,'Houston','127.0.0.3','seed_1_2','2026-04-30 16:55:02','2026-04-30 16:55:02'),(46,'Houston','127.0.0.4','seed_1_3','2026-04-30 16:55:02','2026-04-30 16:55:02'),(47,'Houston','127.0.0.5','seed_1_4','2026-04-30 16:55:02','2026-04-30 16:55:02'),(48,'Houston','127.0.0.6','seed_1_5','2026-04-30 16:55:02','2026-04-30 16:55:02'),(49,'Houston','127.0.0.7','seed_1_6','2026-04-30 16:55:02','2026-04-30 16:55:02'),(50,'Houston','127.0.0.8','seed_1_7','2026-04-30 16:55:02','2026-04-30 16:55:02'),(51,'Houston','127.0.0.9','seed_1_8','2026-04-30 16:55:02','2026-04-30 16:55:02'),(52,'Houston','127.0.0.10','seed_1_9','2026-04-30 16:55:02','2026-04-30 16:55:02'),(53,'Houston','127.0.0.11','seed_1_10','2026-04-30 16:55:02','2026-04-30 16:55:02'),(54,'Houston','127.0.0.12','seed_1_11','2026-04-30 16:55:02','2026-04-30 16:55:02'),(55,'Houston','127.0.0.13','seed_1_12','2026-04-30 16:55:02','2026-04-30 16:55:02'),(56,'Houston','127.0.0.14','seed_1_13','2026-04-30 16:55:02','2026-04-30 16:55:02'),(57,'Houston','127.0.0.15','seed_1_14','2026-04-30 16:55:02','2026-04-30 16:55:02'),(58,'Houston','127.0.0.16','seed_1_15','2026-04-30 16:55:02','2026-04-30 16:55:02'),(59,'Houston','127.0.0.17','seed_1_16','2026-04-30 16:55:02','2026-04-30 16:55:02'),(60,'Houston','127.0.0.18','seed_1_17','2026-04-30 16:55:02','2026-04-30 16:55:02'),(61,'Houston','127.0.0.19','seed_1_18','2026-04-30 16:55:02','2026-04-30 16:55:02'),(62,'Houston','127.0.0.20','seed_1_19','2026-04-30 16:55:02','2026-04-30 16:55:02'),(63,'Houston','127.0.0.21','seed_1_20','2026-04-30 16:55:02','2026-04-30 16:55:02'),(64,'Houston','127.0.0.22','seed_1_21','2026-04-30 16:55:02','2026-04-30 16:55:02'),(65,'Houston','127.0.0.23','seed_1_22','2026-04-30 16:55:02','2026-04-30 16:55:02'),(66,'Houston','127.0.0.24','seed_1_23','2026-04-30 16:55:02','2026-04-30 16:55:02'),(67,'Houston','127.0.0.25','seed_1_24','2026-04-30 16:55:02','2026-04-30 16:55:02'),(68,'Houston','127.0.0.26','seed_1_25','2026-04-30 16:55:02','2026-04-30 16:55:02'),(69,'Houston','127.0.0.27','seed_1_26','2026-04-30 16:55:02','2026-04-30 16:55:02'),(70,'Houston','127.0.0.28','seed_1_27','2026-04-30 16:55:02','2026-04-30 16:55:02'),(71,'Houston','127.0.0.29','seed_1_28','2026-04-30 16:55:02','2026-04-30 16:55:02'),(72,'Houston','127.0.0.30','seed_1_29','2026-04-30 16:55:02','2026-04-30 16:55:02'),(73,'Houston','127.0.0.31','seed_1_30','2026-04-30 16:55:02','2026-04-30 16:55:02'),(74,'Houston','127.0.0.32','seed_1_31','2026-04-30 16:55:02','2026-04-30 16:55:02'),(75,'Houston','127.0.0.33','seed_1_32','2026-04-30 16:55:02','2026-04-30 16:55:02'),(76,'Houston','127.0.0.34','seed_1_33','2026-04-30 16:55:02','2026-04-30 16:55:02'),(77,'Houston','127.0.0.35','seed_1_34','2026-04-30 16:55:02','2026-04-30 16:55:02'),(78,'Houston','127.0.0.36','seed_1_35','2026-04-30 16:55:02','2026-04-30 16:55:02'),(79,'Houston','127.0.0.37','seed_1_36','2026-04-30 16:55:02','2026-04-30 16:55:02'),(80,'Houston','127.0.0.38','seed_1_37','2026-04-30 16:55:02','2026-04-30 16:55:02'),(81,'Chicago','127.0.0.1','seed_2_0','2026-04-30 16:55:02','2026-04-30 16:55:02'),(82,'Chicago','127.0.0.2','seed_2_1','2026-04-30 16:55:02','2026-04-30 16:55:02'),(83,'Chicago','127.0.0.3','seed_2_2','2026-04-30 16:55:02','2026-04-30 16:55:02'),(84,'Chicago','127.0.0.4','seed_2_3','2026-04-30 16:55:02','2026-04-30 16:55:02'),(85,'Chicago','127.0.0.5','seed_2_4','2026-04-30 16:55:02','2026-04-30 16:55:02'),(86,'Chicago','127.0.0.6','seed_2_5','2026-04-30 16:55:02','2026-04-30 16:55:02'),(87,'Chicago','127.0.0.7','seed_2_6','2026-04-30 16:55:02','2026-04-30 16:55:02'),(88,'Chicago','127.0.0.8','seed_2_7','2026-04-30 16:55:02','2026-04-30 16:55:02'),(89,'Chicago','127.0.0.9','seed_2_8','2026-04-30 16:55:02','2026-04-30 16:55:02'),(90,'Chicago','127.0.0.10','seed_2_9','2026-04-30 16:55:02','2026-04-30 16:55:02'),(91,'Chicago','127.0.0.11','seed_2_10','2026-04-30 16:55:03','2026-04-30 16:55:03'),(92,'Chicago','127.0.0.12','seed_2_11','2026-04-30 16:55:03','2026-04-30 16:55:03'),(93,'Chicago','127.0.0.13','seed_2_12','2026-04-30 16:55:03','2026-04-30 16:55:03'),(94,'Chicago','127.0.0.14','seed_2_13','2026-04-30 16:55:03','2026-04-30 16:55:03'),(95,'Chicago','127.0.0.15','seed_2_14','2026-04-30 16:55:03','2026-04-30 16:55:03'),(96,'Chicago','127.0.0.16','seed_2_15','2026-04-30 16:55:03','2026-04-30 16:55:03'),(97,'Chicago','127.0.0.17','seed_2_16','2026-04-30 16:55:03','2026-04-30 16:55:03'),(98,'Chicago','127.0.0.18','seed_2_17','2026-04-30 16:55:03','2026-04-30 16:55:03'),(99,'Chicago','127.0.0.19','seed_2_18','2026-04-30 16:55:03','2026-04-30 16:55:03'),(100,'Chicago','127.0.0.20','seed_2_19','2026-04-30 16:55:03','2026-04-30 16:55:03'),(101,'Chicago','127.0.0.21','seed_2_20','2026-04-30 16:55:03','2026-04-30 16:55:03'),(102,'Chicago','127.0.0.22','seed_2_21','2026-04-30 16:55:03','2026-04-30 16:55:03'),(103,'Chicago','127.0.0.23','seed_2_22','2026-04-30 16:55:03','2026-04-30 16:55:03'),(104,'Chicago','127.0.0.24','seed_2_23','2026-04-30 16:55:03','2026-04-30 16:55:03'),(105,'Chicago','127.0.0.25','seed_2_24','2026-04-30 16:55:03','2026-04-30 16:55:03'),(106,'Chicago','127.0.0.26','seed_2_25','2026-04-30 16:55:03','2026-04-30 16:55:03'),(107,'Chicago','127.0.0.27','seed_2_26','2026-04-30 16:55:03','2026-04-30 16:55:03'),(108,'Chicago','127.0.0.28','seed_2_27','2026-04-30 16:55:03','2026-04-30 16:55:03'),(109,'Chicago','127.0.0.29','seed_2_28','2026-04-30 16:55:03','2026-04-30 16:55:03'),(110,'Chicago','127.0.0.30','seed_2_29','2026-04-30 16:55:03','2026-04-30 16:55:03'),(111,'Chicago','127.0.0.31','seed_2_30','2026-04-30 16:55:03','2026-04-30 16:55:03'),(112,'New York','127.0.0.1','seed_3_0','2026-04-30 16:55:03','2026-04-30 16:55:03'),(113,'New York','127.0.0.2','seed_3_1','2026-04-30 16:55:03','2026-04-30 16:55:03'),(114,'New York','127.0.0.3','seed_3_2','2026-04-30 16:55:03','2026-04-30 16:55:03'),(115,'New York','127.0.0.4','seed_3_3','2026-04-30 16:55:03','2026-04-30 16:55:03'),(116,'New York','127.0.0.5','seed_3_4','2026-04-30 16:55:03','2026-04-30 16:55:03'),(117,'New York','127.0.0.6','seed_3_5','2026-04-30 16:55:03','2026-04-30 16:55:03'),(118,'New York','127.0.0.7','seed_3_6','2026-04-30 16:55:03','2026-04-30 16:55:03'),(119,'New York','127.0.0.8','seed_3_7','2026-04-30 16:55:03','2026-04-30 16:55:03'),(120,'New York','127.0.0.9','seed_3_8','2026-04-30 16:55:03','2026-04-30 16:55:03'),(121,'New York','127.0.0.10','seed_3_9','2026-04-30 16:55:03','2026-04-30 16:55:03'),(122,'New York','127.0.0.11','seed_3_10','2026-04-30 16:55:03','2026-04-30 16:55:03'),(123,'New York','127.0.0.12','seed_3_11','2026-04-30 16:55:03','2026-04-30 16:55:03'),(124,'New York','127.0.0.13','seed_3_12','2026-04-30 16:55:03','2026-04-30 16:55:03'),(125,'New York','127.0.0.14','seed_3_13','2026-04-30 16:55:03','2026-04-30 16:55:03'),(126,'New York','127.0.0.15','seed_3_14','2026-04-30 16:55:03','2026-04-30 16:55:03'),(127,'New York','127.0.0.16','seed_3_15','2026-04-30 16:55:03','2026-04-30 16:55:03'),(128,'New York','127.0.0.17','seed_3_16','2026-04-30 16:55:03','2026-04-30 16:55:03'),(129,'New York','127.0.0.18','seed_3_17','2026-04-30 16:55:03','2026-04-30 16:55:03'),(130,'New York','127.0.0.19','seed_3_18','2026-04-30 16:55:03','2026-04-30 16:55:03'),(131,'New York','127.0.0.20','seed_3_19','2026-04-30 16:55:03','2026-04-30 16:55:03'),(132,'New York','127.0.0.21','seed_3_20','2026-04-30 16:55:03','2026-04-30 16:55:03'),(133,'New York','127.0.0.22','seed_3_21','2026-04-30 16:55:03','2026-04-30 16:55:03'),(134,'New York','127.0.0.23','seed_3_22','2026-04-30 16:55:03','2026-04-30 16:55:03'),(135,'New York','127.0.0.24','seed_3_23','2026-04-30 16:55:03','2026-04-30 16:55:03'),(136,'New York','127.0.0.25','seed_3_24','2026-04-30 16:55:03','2026-04-30 16:55:03'),(137,'New York','127.0.0.26','seed_3_25','2026-04-30 16:55:03','2026-04-30 16:55:03'),(138,'New York','127.0.0.27','seed_3_26','2026-04-30 16:55:03','2026-04-30 16:55:03'),(139,'New York','127.0.0.28','seed_3_27','2026-04-30 16:55:03','2026-04-30 16:55:03'),(140,'New York','127.0.0.29','seed_3_28','2026-04-30 16:55:03','2026-04-30 16:55:03'),(141,'New York','127.0.0.30','seed_3_29','2026-04-30 16:55:03','2026-04-30 16:55:03'),(142,'New York','127.0.0.31','seed_3_30','2026-04-30 16:55:03','2026-04-30 16:55:03'),(143,'New York','127.0.0.32','seed_3_31','2026-04-30 16:55:03','2026-04-30 16:55:03'),(144,'New York','127.0.0.33','seed_3_32','2026-04-30 16:55:03','2026-04-30 16:55:03'),(145,'New York','127.0.0.34','seed_3_33','2026-04-30 16:55:03','2026-04-30 16:55:03'),(146,'New York','127.0.0.35','seed_3_34','2026-04-30 16:55:03','2026-04-30 16:55:03'),(147,'New York','127.0.0.36','seed_3_35','2026-04-30 16:55:03','2026-04-30 16:55:03'),(148,'New York','127.0.0.37','seed_3_36','2026-04-30 16:55:03','2026-04-30 16:55:03'),(149,'New York','127.0.0.38','seed_3_37','2026-04-30 16:55:03','2026-04-30 16:55:03'),(150,'New York','127.0.0.39','seed_3_38','2026-04-30 16:55:03','2026-04-30 16:55:03'),(151,'New York','127.0.0.40','seed_3_39','2026-04-30 16:55:03','2026-04-30 16:55:03'),(152,'New York','127.0.0.41','seed_3_40','2026-04-30 16:55:03','2026-04-30 16:55:03'),(153,'New York','127.0.0.42','seed_3_41','2026-04-30 16:55:03','2026-04-30 16:55:03'),(154,'New York','127.0.0.43','seed_3_42','2026-04-30 16:55:03','2026-04-30 16:55:03'),(155,'New York','127.0.0.44','seed_3_43','2026-04-30 16:55:03','2026-04-30 16:55:03'),(156,'New York','127.0.0.45','seed_3_44','2026-04-30 16:55:03','2026-04-30 16:55:03'),(157,'New York','127.0.0.46','seed_3_45','2026-04-30 16:55:03','2026-04-30 16:55:03'),(158,'New York','127.0.0.47','seed_3_46','2026-04-30 16:55:03','2026-04-30 16:55:03'),(159,'New York','127.0.0.48','seed_3_47','2026-04-30 16:55:03','2026-04-30 16:55:03'),(160,'New York','127.0.0.49','seed_3_48','2026-04-30 16:55:03','2026-04-30 16:55:03'),(161,'New York','127.0.0.50','seed_3_49','2026-04-30 16:55:03','2026-04-30 16:55:03'),(162,'New York','127.0.0.51','seed_3_50','2026-04-30 16:55:03','2026-04-30 16:55:03'),(163,'New York','127.0.0.52','seed_3_51','2026-04-30 16:55:03','2026-04-30 16:55:03'),(164,'New York','127.0.0.53','seed_3_52','2026-04-30 16:55:03','2026-04-30 16:55:03'),(165,'New York','127.0.0.54','seed_3_53','2026-04-30 16:55:03','2026-04-30 16:55:03'),(166,'New York','127.0.0.55','seed_3_54','2026-04-30 16:55:03','2026-04-30 16:55:03'),(167,'Los Angeles','127.0.0.1','seed_4_0','2026-04-30 16:55:03','2026-04-30 16:55:03'),(168,'Los Angeles','127.0.0.2','seed_4_1','2026-04-30 16:55:03','2026-04-30 16:55:03'),(169,'Los Angeles','127.0.0.3','seed_4_2','2026-04-30 16:55:03','2026-04-30 16:55:03'),(170,'Los Angeles','127.0.0.4','seed_4_3','2026-04-30 16:55:03','2026-04-30 16:55:03'),(171,'Los Angeles','127.0.0.5','seed_4_4','2026-04-30 16:55:03','2026-04-30 16:55:03'),(172,'Los Angeles','127.0.0.6','seed_4_5','2026-04-30 16:55:03','2026-04-30 16:55:03'),(173,'Los Angeles','127.0.0.7','seed_4_6','2026-04-30 16:55:03','2026-04-30 16:55:03'),(174,'Los Angeles','127.0.0.8','seed_4_7','2026-04-30 16:55:03','2026-04-30 16:55:03'),(175,'Los Angeles','127.0.0.9','seed_4_8','2026-04-30 16:55:03','2026-04-30 16:55:03'),(176,'Los Angeles','127.0.0.10','seed_4_9','2026-04-30 16:55:03','2026-04-30 16:55:03'),(177,'Los Angeles','127.0.0.11','seed_4_10','2026-04-30 16:55:03','2026-04-30 16:55:03'),(178,'Los Angeles','127.0.0.12','seed_4_11','2026-04-30 16:55:03','2026-04-30 16:55:03'),(179,'Los Angeles','127.0.0.13','seed_4_12','2026-04-30 16:55:03','2026-04-30 16:55:03'),(180,'Los Angeles','127.0.0.14','seed_4_13','2026-04-30 16:55:03','2026-04-30 16:55:03'),(181,'Los Angeles','127.0.0.15','seed_4_14','2026-04-30 16:55:03','2026-04-30 16:55:03'),(182,'Los Angeles','127.0.0.16','seed_4_15','2026-04-30 16:55:03','2026-04-30 16:55:03'),(183,'Los Angeles','127.0.0.17','seed_4_16','2026-04-30 16:55:03','2026-04-30 16:55:03'),(184,'Los Angeles','127.0.0.18','seed_4_17','2026-04-30 16:55:03','2026-04-30 16:55:03'),(185,'Los Angeles','127.0.0.19','seed_4_18','2026-04-30 16:55:03','2026-04-30 16:55:03'),(186,'Los Angeles','127.0.0.20','seed_4_19','2026-04-30 16:55:03','2026-04-30 16:55:03'),(187,'Los Angeles','127.0.0.21','seed_4_20','2026-04-30 16:55:03','2026-04-30 16:55:03'),(188,'Los Angeles','127.0.0.22','seed_4_21','2026-04-30 16:55:03','2026-04-30 16:55:03'),(189,'Los Angeles','127.0.0.23','seed_4_22','2026-04-30 16:55:03','2026-04-30 16:55:03'),(190,'Los Angeles','127.0.0.24','seed_4_23','2026-04-30 16:55:03','2026-04-30 16:55:03'),(191,'Los Angeles','127.0.0.25','seed_4_24','2026-04-30 16:55:03','2026-04-30 16:55:03'),(192,'Los Angeles','127.0.0.26','seed_4_25','2026-04-30 16:55:03','2026-04-30 16:55:03'),(193,'Los Angeles','127.0.0.27','seed_4_26','2026-04-30 16:55:03','2026-04-30 16:55:03'),(194,'Los Angeles','127.0.0.28','seed_4_27','2026-04-30 16:55:03','2026-04-30 16:55:03'),(195,'Los Angeles','127.0.0.29','seed_4_28','2026-04-30 16:55:03','2026-04-30 16:55:03'),(196,'Los Angeles','127.0.0.30','seed_4_29','2026-04-30 16:55:03','2026-04-30 16:55:03'),(197,'Los Angeles','127.0.0.31','seed_4_30','2026-04-30 16:55:03','2026-04-30 16:55:03'),(198,'Los Angeles','127.0.0.32','seed_4_31','2026-04-30 16:55:03','2026-04-30 16:55:03'),(199,'Los Angeles','127.0.0.33','seed_4_32','2026-04-30 16:55:03','2026-04-30 16:55:03'),(200,'Los Angeles','127.0.0.34','seed_4_33','2026-04-30 16:55:03','2026-04-30 16:55:03'),(201,'Los Angeles','127.0.0.35','seed_4_34','2026-04-30 16:55:03','2026-04-30 16:55:03'),(202,'Los Angeles','127.0.0.36','seed_4_35','2026-04-30 16:55:03','2026-04-30 16:55:03'),(203,'Los Angeles','127.0.0.37','seed_4_36','2026-04-30 16:55:03','2026-04-30 16:55:03'),(204,'Los Angeles','127.0.0.38','seed_4_37','2026-04-30 16:55:03','2026-04-30 16:55:03'),(205,'Los Angeles','127.0.0.39','seed_4_38','2026-04-30 16:55:03','2026-04-30 16:55:03'),(206,'Los Angeles','127.0.0.40','seed_4_39','2026-04-30 16:55:03','2026-04-30 16:55:03'),(207,'Los Angeles','127.0.0.41','seed_4_40','2026-04-30 16:55:03','2026-04-30 16:55:03'),(208,'Los Angeles','127.0.0.42','seed_4_41','2026-04-30 16:55:03','2026-04-30 16:55:03'),(209,'Los Angeles','127.0.0.43','seed_4_42','2026-04-30 16:55:03','2026-04-30 16:55:03'),(210,'Los Angeles','127.0.0.44','seed_4_43','2026-04-30 16:55:03','2026-04-30 16:55:03'),(211,'Los Angeles','127.0.0.45','seed_4_44','2026-04-30 16:55:03','2026-04-30 16:55:03'),(212,'Los Angeles','127.0.0.46','seed_4_45','2026-04-30 16:55:03','2026-04-30 16:55:03'),(213,'Los Angeles','127.0.0.47','seed_4_46','2026-04-30 16:55:03','2026-04-30 16:55:03'),(214,'Los Angeles','127.0.0.48','seed_4_47','2026-04-30 16:55:03','2026-04-30 16:55:03'),(215,'Atlanta','127.0.0.1','seed_5_0','2026-04-30 16:55:03','2026-04-30 16:55:03'),(216,'Atlanta','127.0.0.2','seed_5_1','2026-04-30 16:55:03','2026-04-30 16:55:03'),(217,'Atlanta','127.0.0.3','seed_5_2','2026-04-30 16:55:03','2026-04-30 16:55:03'),(218,'Atlanta','127.0.0.4','seed_5_3','2026-04-30 16:55:03','2026-04-30 16:55:03'),(219,'Atlanta','127.0.0.5','seed_5_4','2026-04-30 16:55:03','2026-04-30 16:55:03'),(220,'Atlanta','127.0.0.6','seed_5_5','2026-04-30 16:55:03','2026-04-30 16:55:03'),(221,'Atlanta','127.0.0.7','seed_5_6','2026-04-30 16:55:03','2026-04-30 16:55:03'),(222,'Atlanta','127.0.0.8','seed_5_7','2026-04-30 16:55:03','2026-04-30 16:55:03'),(223,'Atlanta','127.0.0.9','seed_5_8','2026-04-30 16:55:03','2026-04-30 16:55:03'),(224,'Atlanta','127.0.0.10','seed_5_9','2026-04-30 16:55:03','2026-04-30 16:55:03'),(225,'Atlanta','127.0.0.11','seed_5_10','2026-04-30 16:55:03','2026-04-30 16:55:03'),(226,'Atlanta','127.0.0.12','seed_5_11','2026-04-30 16:55:03','2026-04-30 16:55:03'),(227,'Atlanta','127.0.0.13','seed_5_12','2026-04-30 16:55:03','2026-04-30 16:55:03'),(228,'Atlanta','127.0.0.14','seed_5_13','2026-04-30 16:55:03','2026-04-30 16:55:03'),(229,'Atlanta','127.0.0.15','seed_5_14','2026-04-30 16:55:03','2026-04-30 16:55:03'),(230,'Atlanta','127.0.0.16','seed_5_15','2026-04-30 16:55:03','2026-04-30 16:55:03'),(231,'Atlanta','127.0.0.17','seed_5_16','2026-04-30 16:55:03','2026-04-30 16:55:03'),(232,'Atlanta','127.0.0.18','seed_5_17','2026-04-30 16:55:03','2026-04-30 16:55:03'),(233,'Atlanta','127.0.0.19','seed_5_18','2026-04-30 16:55:03','2026-04-30 16:55:03'),(234,'Atlanta','127.0.0.20','seed_5_19','2026-04-30 16:55:03','2026-04-30 16:55:03'),(235,'Atlanta','127.0.0.21','seed_5_20','2026-04-30 16:55:03','2026-04-30 16:55:03'),(236,'Atlanta','127.0.0.22','seed_5_21','2026-04-30 16:55:03','2026-04-30 16:55:03'),(237,'Seattle','127.0.0.1','seed_6_0','2026-04-30 16:55:03','2026-04-30 16:55:03'),(238,'Seattle','127.0.0.2','seed_6_1','2026-04-30 16:55:03','2026-04-30 16:55:03'),(239,'Seattle','127.0.0.3','seed_6_2','2026-04-30 16:55:03','2026-04-30 16:55:03'),(240,'Seattle','127.0.0.4','seed_6_3','2026-04-30 16:55:03','2026-04-30 16:55:03'),(241,'Seattle','127.0.0.5','seed_6_4','2026-04-30 16:55:03','2026-04-30 16:55:03'),(242,'Seattle','127.0.0.6','seed_6_5','2026-04-30 16:55:03','2026-04-30 16:55:03'),(243,'Seattle','127.0.0.7','seed_6_6','2026-04-30 16:55:03','2026-04-30 16:55:03'),(244,'Seattle','127.0.0.8','seed_6_7','2026-04-30 16:55:03','2026-04-30 16:55:03'),(245,'Seattle','127.0.0.9','seed_6_8','2026-04-30 16:55:03','2026-04-30 16:55:03'),(246,'Seattle','127.0.0.10','seed_6_9','2026-04-30 16:55:03','2026-04-30 16:55:03'),(247,'Seattle','127.0.0.11','seed_6_10','2026-04-30 16:55:03','2026-04-30 16:55:03'),(248,'Seattle','127.0.0.12','seed_6_11','2026-04-30 16:55:03','2026-04-30 16:55:03'),(249,'Seattle','127.0.0.13','seed_6_12','2026-04-30 16:55:03','2026-04-30 16:55:03'),(250,'Seattle','127.0.0.14','seed_6_13','2026-04-30 16:55:03','2026-04-30 16:55:03'),(251,'Seattle','127.0.0.15','seed_6_14','2026-04-30 16:55:03','2026-04-30 16:55:03'),(252,'Seattle','127.0.0.16','seed_6_15','2026-04-30 16:55:03','2026-04-30 16:55:03'),(253,'Seattle','127.0.0.17','seed_6_16','2026-04-30 16:55:03','2026-04-30 16:55:03'),(254,'Seattle','127.0.0.18','seed_6_17','2026-04-30 16:55:03','2026-04-30 16:55:03'),(255,'New York','127.0.0.1','YmV0QZRgJXqqdEjAdxIASLZ6CEj3nOS4k95MTlit','2026-05-01 02:10:32','2026-05-01 02:10:32'),(256,'New York','127.0.0.1','uNkdhDE0CTLwwxCW3xrn8wKzisXk5QunAkwMdQhC','2026-05-08 09:10:59','2026-05-08 09:10:59'),(257,'New York','127.0.0.1','QNXxoEczoZeHuxb9mw0phw889h5KV1bA8VUTyA1U','2026-05-09 11:27:26','2026-05-09 11:27:26');
/*!40000 ALTER TABLE `poll_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('1OgAaoCVup82hNeaMjWHxZBUdi16iHoHSxtlcSuK',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJJU214MXV4QXkxMzJSSHpGblZPb3NTcjVha3RPdUlzQU5kZ3h4UVpOIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1778445480),('naqIUqAdoIh04OEPNMerbojt39qNmE1AptzQsFg8',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJmYnFDd1pvQW5IZnMxdzI1Vkx6RE1jYk54YnQ3RnRFbXVycU55WGJjIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1778511516);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shows`
--

DROP TABLE IF EXISTS `shows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shows` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USA',
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_date` datetime NOT NULL,
  `doors_time` time DEFAULT NULL,
  `show_time` time DEFAULT NULL,
  `ticket_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('upcoming','announced','soldout','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'announced',
  `sort_order` smallint unsigned NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shows_show_date_status_index` (`show_date`,`status`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shows`
--

LOCK TABLES `shows` WRITE;
/*!40000 ALTER TABLE `shows` DISABLE KEYS */;
INSERT INTO `shows` VALUES (1,'Dallas','TX','USA','American Airlines Center','2026-06-15 20:00:00','18:00:00','20:00:00','https://www.ticketmaster.com',NULL,'upcoming',1,1,'2026-04-30 16:55:02','2026-04-30 16:55:02'),(2,'Houston','TX','USA','Toyota Center','2026-06-20 20:00:00',NULL,NULL,'https://www.ticketmaster.com',NULL,'upcoming',2,0,'2026-04-30 16:55:02','2026-04-30 16:55:02'),(3,'New York','NY','USA','Madison Square Garden','2026-07-04 20:00:00',NULL,NULL,'https://www.ticketmaster.com',NULL,'announced',3,0,'2026-04-30 16:55:02','2026-04-30 16:55:02'),(4,'Chicago','IL','USA','United Center','2026-07-12 20:00:00',NULL,NULL,NULL,NULL,'announced',4,0,'2026-04-30 16:55:02','2026-04-30 16:55:02'),(5,'Los Angeles','CA','USA','The Forum','2026-07-25 20:00:00',NULL,NULL,NULL,NULL,'announced',5,0,'2026-04-30 16:55:02','2026-04-30 16:55:02'),(6,'Atlanta','GA','USA','State Farm Arena','2026-08-02 20:00:00',NULL,NULL,NULL,NULL,'announced',6,0,'2026-04-30 16:55:02','2026-04-30 16:55:02');
/*!40000 ALTER TABLE `shows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscribers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-11 20:24:24
