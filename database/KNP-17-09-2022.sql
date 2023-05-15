-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: blueolz8_knp
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `documents_slug_unique` (`slug`),
  KEY `documents_user_id_foreign` (`user_id`),
  CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_images`
--

DROP TABLE IF EXISTS `event_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_images_event_id_foreign` (`event_id`),
  CONSTRAINT `event_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_images`
--

LOCK TABLES `event_images` WRITE;
/*!40000 ALTER TABLE `event_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`),
  KEY `events_user_id_foreign` (`user_id`),
  CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_user_id_foreign` (`user_id`),
  CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,2,'knp-1','c69ec0c14ef8f211ceeebba13ffd56997db56a82.jpg','jpg',348322,0,'2022-02-28 11:33:09','2022-02-28 11:39:54'),(2,2,'knp-2','6c1680b8b794db5262bac5b10006b386cbdf9268.jpg','jpg',192177,0,'2022-02-28 11:33:28','2022-02-28 11:39:53'),(3,2,'knp-3','2d3e7272ecd3cb838ff55c7565b468f17edf958e.jpg','jpg',299900,0,'2022-02-28 11:33:28','2022-02-28 11:39:53'),(4,2,'knp-4','700b78ecc58c9195f1f994a7fcd6893b885cbf43.jpg','jpg',454342,0,'2022-02-28 11:33:29','2022-02-28 11:39:52'),(5,2,'knp-5','7f3a5ecd4e83fea0c7a275c493dc01d8f64b0afa.jpg','jpg',85277,0,'2022-02-28 11:33:29','2022-02-28 11:39:51'),(6,2,'knp-6','b2f7035858a0ba188a45ab4dac4988935bfa359f.jpg','jpg',470515,0,'2022-02-28 11:33:44','2022-02-28 11:39:50'),(7,2,'knp-7','607293d6ee63e2e885510ded4ca2a3b2e80a78c9.jpg','jpg',374229,0,'2022-02-28 11:33:44','2022-02-28 11:39:48'),(8,2,'knp-8','a1b235f9626f2b33dcbf62f25221e5a27a47d775.jpg','jpg',633039,0,'2022-02-28 11:33:45','2022-02-28 11:39:47'),(9,2,'knp-9','7466da4e2be9519d3faa4ab21cf6cabc33ea9748.jpg','jpg',236441,0,'2022-02-28 11:33:45','2022-02-28 11:39:47'),(10,2,'knp-10','2e16448b74cbbde9557db6de4c3095a87b0c0ed8.jpg','jpg',317754,0,'2022-02-28 11:33:46','2022-02-28 11:39:43'),(11,2,'knp-11','c726c4ec28f74594e3f49fb7dfd8304deec45b21.jpg','jpg',140418,0,'2022-02-28 11:34:13','2022-02-28 11:39:41'),(12,2,'knp-12','4c26f2416eeedd857b0c71c7e96a5a97f02e76f4.jpg','jpg',197885,0,'2022-02-28 11:34:13','2022-02-28 11:39:40'),(13,2,'knp-13','5de1688c7e34dfee4244b5e07e667e05f888fd03.jpg','jpg',549312,0,'2022-02-28 11:34:13','2022-02-28 11:39:40'),(14,2,'knp-14','3e7c8ffe4ffff3c33f069fed1b5af4bf3d17e81a.jpg','jpg',256249,0,'2022-02-28 11:34:13','2022-02-28 11:39:39'),(15,2,'knp-15','7a80dfb161a6e17eb19299bea986289e980dcbf6.jpg','jpg',556118,0,'2022-02-28 11:34:15','2022-02-28 11:39:38'),(16,2,'knp-16','90b92f19480230095bf43d53cb8c36adb9126207.jpg','jpg',187975,0,'2022-02-28 11:34:36','2022-02-28 11:39:38'),(17,2,'knp-17','566e796bf484499e1e397325c095b9dca27cdf88.jpg','jpg',264730,0,'2022-02-28 11:34:36','2022-02-28 11:39:37'),(18,2,'knp-18','76d4dc35f1e3372052498ded787fd0881652a183.jpg','jpg',220078,0,'2022-02-28 11:34:37','2022-02-28 11:39:36'),(19,2,'knp-19','c5732bcbad5f0492ce7abe5e60c48381bfcbb0e7.jpg','jpg',172832,0,'2022-02-28 11:34:37','2022-02-28 11:39:36'),(20,2,'knp-20','86d3d446d68217aadf78a897ec1ad8c515876ec2.jpg','jpg',89726,0,'2022-02-28 11:34:38','2022-02-28 11:39:32'),(21,2,'knp-21','08b9e8c0d994aa41e23030dd50a787a47fe453f5.jpg','jpg',241311,0,'2022-02-28 11:35:05','2022-02-28 11:39:32'),(22,2,'knp-22','bc87b094c57a66decd4cc6bc98b227788c66b1ce.jpg','jpg',135301,0,'2022-02-28 11:35:05','2022-02-28 11:39:31'),(23,2,'knp-23','ed034850669658fe150743889e38345c707ba7df.jpg','jpg',154161,0,'2022-02-28 11:35:06','2022-02-28 11:39:30'),(24,2,'knp-24','5ef4c03a1d179e49fa1143a25ccc619b4f11a7ae.jpg','jpg',265212,0,'2022-02-28 11:35:06','2022-02-28 11:39:29'),(25,2,'knp-25','c7258ba8520ca35492a6b7eb827d20e66a42c655.jpg','jpg',228291,0,'2022-02-28 11:35:07','2022-02-28 11:39:28'),(26,2,'knp-26','24750bab1546903edc52d58b9ef32501e5be442b.jpg','jpg',90725,0,'2022-02-28 11:35:34','2022-02-28 11:39:27'),(27,2,'knp-27','f9827e4831967b362e16370799505289cc73672e.jpg','jpg',136336,0,'2022-02-28 11:35:34','2022-02-28 11:39:25'),(28,2,'knp-28','ab1c51d84adf3ee85ab2a4a3ebec0ac39350ef64.jpg','jpg',161658,0,'2022-02-28 11:35:35','2022-02-28 11:39:24'),(29,2,'knp-29','34d313605e847af225e90479fa111eaade0ee890.jpg','jpg',152495,0,'2022-02-28 11:35:35','2022-02-28 11:39:23'),(30,2,'knp-30','eec5037d52634e2966d0024359fce20101f6a4bd.jpg','jpg',188986,0,'2022-02-28 11:35:36','2022-02-28 11:39:16'),(31,2,'knp-31','8d0906fa7a5cfb059308c14d3031ed5ca3daedb9.jpg','jpg',170005,0,'2022-02-28 11:35:59','2022-02-28 11:39:15'),(32,2,'knp-32','8e591d93e5bde016bd3091e08192b7e4499c75cd.jpg','jpg',78529,0,'2022-02-28 11:36:00','2022-02-28 11:39:14'),(33,2,'knp-33','093e2a5e5fefab3ad3c59ea04cde7a4691569728.jpg','jpg',202997,0,'2022-02-28 11:36:00','2022-02-28 11:40:04'),(34,2,'knp-34','d332c8da640c32d2bc27dd3864bc09065189f70e.jpg','jpg',228421,0,'2022-02-28 11:36:00','2022-02-28 11:39:12'),(35,2,'knp-35','d7fc22de22cabdc61b3462531d766a59a4f26f94.jpg','jpg',125636,0,'2022-02-28 11:36:01','2022-02-28 11:39:10'),(36,2,'knp-36','0f88af4f13251a25bdbf2545a47441f3afd6cf4d.jpg','jpg',339158,0,'2022-02-28 11:36:35','2022-02-28 11:39:09'),(37,2,'knp-37','1b816abe6286c32a28e7fb71872d2af39b7e5248.jpg','jpg',152178,0,'2022-02-28 11:36:35','2022-02-28 11:40:04'),(38,2,'knp-38','15a6e82ebb6ae5b997098536305add78056e0057.jpg','jpg',239709,0,'2022-02-28 11:36:36','2022-02-28 11:39:08'),(39,2,'knp-39','4c5bcaea236274852d38d93c9cf14f1822f08721.jpg','jpg',197432,0,'2022-02-28 11:36:36','2022-02-28 11:39:07'),(40,2,'knp-40','a495f559767cad26c74319a8ad7bbc53a14f0dfe.jpg','jpg',200179,0,'2022-02-28 11:36:37','2022-02-28 11:39:04'),(41,2,'knp-41','ce0a7e73d28bfff5197f90ade7e7882027371faa.jpg','jpg',197306,0,'2022-02-28 11:38:09','2022-02-28 11:39:03'),(42,2,'knp-42','50458e8279a56fefca32d15420579527e397a43e.jpg','jpg',141356,0,'2022-02-28 11:38:09','2022-02-28 11:39:02'),(43,2,'knp-43','aca6525de92cdf532e37a7e51cf669e2ede4a9bd.jpg','jpg',253379,0,'2022-02-28 11:38:09','2022-02-28 11:38:45'),(44,2,'knp-44','ba8d2b53d284a768e57b179c442de02890ce558b.jpg','jpg',242987,0,'2022-02-28 11:38:09','2022-02-28 11:38:44'),(45,2,'knp-45','2bcd5dcab3f095aab9927f995990ceec50f39470.jpg','jpg',305439,0,'2022-02-28 11:38:11','2022-02-28 11:38:44'),(46,2,'knp-46','36bc646044020719d85ab908002de1f236a26bec.jpg','jpg',166285,0,'2022-02-28 11:38:25','2022-02-28 11:38:42'),(47,2,'knp-47','7a3e0b4de219230e79e6b0170c8f1e6df7fc2e36.jpg','jpg',211613,0,'2022-02-28 11:38:25','2022-02-28 11:38:41'),(48,2,'knp-48','7d54108740c41a8fc690181d0e159072beb123d6.jpg','jpg',169678,0,'2022-02-28 11:38:26','2022-02-28 11:38:40'),(49,2,'knp-49','ca3ebc67c3a5dc243b77cfa3f2d3698d1e5d6caf.jpg','jpg',262498,0,'2022-02-28 11:38:26','2022-02-28 11:38:40');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_03_20_060813_create_galleries_table',1),(6,'2021_07_15_054832_create_tenders_table',1),(7,'2021_07_29_063621_create_trackers_table',1),(8,'2021_07_30_153218_create_documents_table',1),(9,'2021_10_09_152334_create_news_table',1),(10,'2021_10_09_161629_create_news_images_table',1),(11,'2021_12_09_062520_create_events_table',1),(12,'2021_12_09_064502_create_event_images_table',1),(13,'2022_01_20_094518_create_roles_table',1),(14,'2022_02_17_095845_create_contacts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,2,'Oath Taking Ceremony','oath-taking-ceremony','2020-10-01','<p style=\"text-align:justify\">Kuno Wildlife Division and Forest Division, Sheopur jointly held an Oath taking ceremony at Eco Centre, Sheopur. In this ceremony messages from Hon. Shri Prakash Javdekar, Minister of Environment, Forest and Climate Change, Minister of Information and Broadcasting and Ministry of Heavy Industries and Public Enterprises and Hon. Chief Minister of Madhya Pradesh , Hon. Forest Minister of Madhya Pradesh were read as well as the Oath for protection of forests and wildlife was taken up by the officials present at the ceremony.</p>','1645634165oath-taking-ceremony.png',0,'2022-02-23 11:06:06','2022-02-23 11:14:54'),(2,2,'Poem Recetation Competition','poem-recetation-competition','2020-10-02','<p style=\"text-align:justify\">Taking into consideration all the guidelines issued by the State Government in relation to the ongoing pandemic of COVID-19 , this year Poem Recetation Competition was organized digitally through online Video medium. In this competition Ayati Dhakar of Mother&rsquo;s Pride School, Karahal won the first prize while Kanishka Pironia from Gwalior won the second prize.</p>','1645634241poem-recetation-competition.png',0,'2022-02-23 11:07:21','2022-02-23 11:14:55'),(3,2,'Friends of Tiger Wall Painting Competition','friends-of-tiger-wall-painting-competition','2020-10-03','<p style=\"text-align:justify\">In every forest range, a group of 7 members was formed for Wall Painting Competition which was held in all forest ranges. In this competition teams from Palpur East Forest Range stood first, Palpur West Forest Range stood second and Budhera Forest Range stood third.</p>','1645634314friends-of-tiger-wall-painting-competition.png',0,'2022-02-23 11:08:34','2022-02-23 11:14:57'),(4,2,'Magic of Soil Sculpture Competition','magic-of-soil-sculpture-competition','2020-10-04','<p style=\"text-align:justify\">In every forest range, a group of 5 members was formed for Magic of Soil Sculpture Competitionwhich was held in at forest range level. In this competition teams from Palpur East Forest Range stood first, Moravan West Forest Range stood second and Vijaypur East Forest Range stood third.</p>','1645634357magic-of-soil-sculpture-competition.png',0,'2022-02-23 11:09:17','2022-02-23 11:14:58'),(5,2,'Closing Ceremony','closing-ceremony','2020-10-07','<p style=\"text-align:justify\">Closing Ceremony for the Wildlife Week Celebrations which were jointly held by Kuno Wildlife Division and Forest Division Sheopur was held at the divisional level. Superintendent of Police, Sheopur were the Chief Guest in the Ceremony. In the ceremony the winners of various competitions held during the wildlife week 2020 were felicitated.</p>','1645634418closing-ceremony.png',0,'2022-02-23 11:10:18','2022-02-23 11:15:00'),(6,2,'Park is ready for cheetah','park-is-ready-for-cheetah','2021-07-07','<p style=\"text-align:justify\">Kuno National Park is identified another home for african cheetah by the MoEFCC &amp; WII. Hence for the preperation is going on accordingly 5 sq.KM enclosure will be established for soft release of african cheetah/s.</p>','1663404668cheetah-park.jpg',0,'2022-02-23 11:11:27','2022-09-17 03:21:08'),(7,2,'कूनो राष्ट्रीय उद्यान का पत्रकारों ने किया भ्रमण, चीता लाने के स्थल का किया मुआयना','journalists-visited-kuno-national-park-inspected-the-place-to-bring-cheetah','2021-07-07','<p style=\"text-align:justify\">वन मंडल अधिकारी श्री प्रकाश कुमार वर्मा के नेतृत्व में कूनो राष्ट्रीय उद्यान का पत्रकारो द्वारा आज भ्रमण किया। भ्रमण के दौरान पत्रकारो ने चीता लाने के स्थल का मुआयना किया। साथ ही आवश्यक व्यवस्थाएं देखी। इस अवसर पर एसडीओ कूनो वनमंडल श्री विनोद कुमार शर्मा, प्रिंट एवं इलेक्ट्रोनिक, सोशल मीडिया के ब्यूरोचीफ, जिला प्रतिनिधि और कूनो वन मंडल के अधिकारी/कर्मचारी उपस्थित थे।<br />\r\nडीएफओ कूनो वन्यप्राणी श्री पीके वर्मा ने पत्रकारो को कूनो राष्ट्रीय उद्यान में चीता लाने के लिए की गई तैयारियों का अवलोकन कराया। साथ ही चीता परियोजना की जानकारी प्रदान की। इसी प्रकार कूनो राष्ट्रीय उद्यान के अंतर्गत चीता लाने की पूर्व तैयारियों की व्यवस्थाओं से अवगत कराया। इसके अलावा अभ्यारण क्षेत्र में किये जा रहे विकास और निर्माण कार्यो की जानकारी दी। डीएफओ श्री वर्मा ने कूनो नेशनल पार्क के चीते लाना लगभग तय होने की जानकारी दी। इसी प्रकार प्रदेश एवं बाहर से होटल एवं टूरिस्ट ऑपरेटर आने की संभावना से अवगत कराया। उन्होने कहा कि जिला पुरातत्व एवं पर्यटन परिषद द्वारा कूनो अभ्यारण से जोडने की दिशा में होटल और पर्यटन स्थलों की व्यवस्थाओ को आगे बढाने की पहल की जा रही है। उन्होने नेशनल पार्क की सभी प्रकार की व्यवस्थाओ की जानकारी मीडिया के प्रतिनिधियों को दी। साथ ही पर्यटको की संभावना से अवगत कराया।<br />\r\nमीडिया के पदाधिकारियों ने कूनो नेशनल पार्क के चीते लाने की संभावना को दृष्टिगत रखते हुए कूनो वनमंडल द्वारा की जा रही</p>','1645634541kuno-park.jpg',0,'2022-02-23 11:12:21','2022-02-23 11:15:01'),(8,2,'Let\'s participant in Tiger day quiz','let-s-participant-in-tiger-day-quiz','2021-07-24','<p>एमपी टाइगर फाउंडेशन सोसाइटी की *&quot;टाइगर डे क्विज 2021&rdquo;</p>\r\n\r\n<p>&ldquo;Tiger Day Quiz 2021&quot;:*</p>\r\n\r\n<p>https://bit.ly/tigerdayquiz2021</p>\r\n\r\n<p>बस ऊपर दिए गए लिंक पर क्लिक करें, अपने उत्तरों को चिह्नित करें और सबमिट करें।</p>\r\n\r\n<p>सभी प्रतिभागियों को प्रशस्ति पत्र एवं *सर्वोच्च 100 पर्तिभागियों को&nbsp; पुरस्कार* भी दिए जायेंगे ।&nbsp;</p>\r\n\r\n<p>*केवल 3 दिन शेष , प्रवेश नि: शुल्क ।*</p>\r\n\r\n<p>*ओपन बुक क्विज (आप गूगल / इंटरनेट / बुक्स जैसे संसाधनों का उपयोग कर सकते हैं)।*&nbsp;</p>\r\n\r\n<p>प्रविष्टियां रविवार, 25 जुलाई 2021 को रात 11:59:59 बजे तक स्वीकार की जाएँगी ।</p>\r\n\r\n<p>अंतर्राष्ट्रीय बाघ दिवस 29 जुलाई 2021 पर विजेता की घोषणा की जाएगी ।</p>\r\n\r\n<p>प्रति प्रतिभागी केवल एक प्रविष्टि की अनुमति है।</p>\r\n\r\n<p>शुभकामनाएं!!</p>','1645634588tiger-day-quiz.jpg',0,'2022-02-23 11:13:08','2022-02-23 11:15:03'),(9,2,'अनुभूति प्रोग्राम 2021-2022','anubhooti-program-2021-2022','2022-02-15','<ul>\r\n	<li style=\"text-align:justify\">कूनो वन्यप्राणी वनमंडल श्योपुर में दिनांक 8 फरवरी से 16 फरवरी तक ईको अनुभूति कार्यक्रम आयोजित किये जा रहे हैं। इन कार्यक्रमों के अंतर्गत विभिन्न शासकीय विद्यालयों के विद्यार्थियों को वन एवं वन्यप्राणियों का अनुभव कराने के लिए विभिन्न नेचर ट्रेल्स पर ट्रेकिंग कराई जा रही है। मोरावन पूर्व परिक्षेत्र के अंतर्गत आयोजित ईको अनुभूति कार्यक्रम में सेसईपुरा एवं बिलौआ शासकीय विद्यालय के छात्र एवं छात्राओं द्वारा भाग लिया गया। विद्यार्थियों को दौलतपुरा स्थित कूनो नदी के समीप नेचर ट्रेल पर ट्रेकिंग कराई गई। नेचर ट्रेल में वन्यप्राणियों के पदचिन्ह, विष्ठा एवं उनके द्वारा शिकार किए गए शाकाहारी प्राणियों के अवशेषों से छात्रों को परिचित कराया गया।</li>\r\n	<li style=\"text-align:justify\">ट्रेकिंग उपरांत दौलतपुरा स्थित शासकीय विद्यालय में छात्र छात्राओं को भोजन कराया गया एवं क्विज प्रतियोगिता का आयोजन किया गया। क्विज प्रतियोगिता में माध्यमिक एवं हायर सेकण्डरी श्रेणी में प्रथम, द्वितीय एवं तृतीय स्थान प्राप्त करने वाले छात्र-छात्राओं को पुरस्कार वितरण किया गया।</li>\r\n	<li style=\"text-align:justify\">कूनो वन्यप्राणी वनमण्डल श्योपुर अंतर्गत परिक्षेत्र मोरावन पूर्व में 8-9 फरवरी, पालपुर पश्चिम में 9-10 फरवरी, सिरोनी में 11-12 फरवरी, मोरावन पश्चिम में 11-12 फरवरी, अगरा में 13-14 फरवरी, पालपुर पूर्व में 14-15 फरवरी, धोरेट में 15-16 फरवरी व ओछापुरा में 15-16 फरवरी को अनुभूति कार्यक्रम आयोजित किए जा रहे हैं।</li>\r\n</ul>','1645634631ANUBHOOTI-PROGRAM.jpeg',0,'2022-02-23 11:13:51','2022-09-10 01:36:24'),(10,2,'ANUBHOOTI PROGRAM 2021-2022','anubhooti-program-2021-22','2022-02-15','<p>ANUBHOOTI PROGRAM IN KUNO NATIONAL PARK</p>','1645634675ANUBHOOTI-PROGRAM-1.jpeg',0,'2022-02-23 11:14:35','2022-09-10 02:21:21'),(11,2,'Leopard Sighting In Kuno National Park','leopard-sighting-in-kuno-national-park','2022-06-27','<p>LEOPARD SIGHTING IN KUNO NATIONAL PARK.</p>','1663404936leopard.jpg',0,'2022-09-17 03:25:36','2022-09-17 03:25:38'),(12,2,'कूनो नेशनल पार्क के बफर जोन में बनेगा ईको सेंसिटिव जोन','eco-sensitive-zone-will-be-made-in-the-buffer-zone-of-kuno-national-park','2022-07-04','<p>कूनो नेशनल पार्क के बफर जोन में बनेगा ईको सेंसिटिव जोन</p>','1663405592buffer-zone.jpg',0,'2022-09-17 03:36:32','2022-09-17 03:36:34'),(13,2,'नामीबिया से चीता लाने एमओयू साइन','mou-signed-to-bring-cheetah-from-namibian','2022-07-21','<p>नामीबिया से चीता लाने एमओयू साइन</p>','1663405749cheetah-mou-signed.jpg',0,'2022-09-17 03:39:09','2022-09-17 03:39:11'),(14,2,'मान. प्रधानमंत्री नरेन्द्र मोदी करेंगे कूनो नेशनल पार्क में चीता परियोजना का शुभारंभ','honorable-prime-minister-narendra-modi-will-launch-cheetah-project-in-kuno-national-park','2022-09-17','<p>मान. प्रधानमंत्री नरेन्द्र मोदी करेंगे कूनो नेशनल पार्क में चीता परियोजना का शुभारंभ</p>','1663406121main.jpg',0,'2022-09-17 03:45:21','2022-09-17 03:45:23'),(15,2,'मान. प्रधानमंत्री नरेन्द्र मोदी जी ने कूनो राष्ट्रीय पार्क को सौंपे नामीबिया से लाये गये 8 चीते','honorable-prime-minister-narendra-modi-handed-over-8-cheetahs-brought-from-namibia-to-kuno-national-park','2022-09-17','<p>मान. प्रधानमंत्री नरेन्द्र मोदी जी ने कूनो राष्ट्रीय पार्क को सौंपे नामीबिया से लाये गये 8 चीते</p>','1663406693main.jpg',0,'2022-09-17 03:54:53','2022-09-17 03:54:55');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `news_id` bigint unsigned NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_images_news_id_foreign` (`news_id`),
  CONSTRAINT `news_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
INSERT INTO `news_images` VALUES (1,14,'1663406121sub-1.jpg','2022-09-17 03:45:21','2022-09-17 03:45:21'),(2,14,'1663406121sub-2.jpg','2022-09-17 03:45:21','2022-09-17 03:45:21'),(3,14,'1663406121sub-3.jpg','2022-09-17 03:45:21','2022-09-17 03:45:21'),(4,14,'1663406121sub-4.jpg','2022-09-17 03:45:21','2022-09-17 03:45:21'),(5,15,'1663406693sub-1.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(6,15,'1663406693sub-2.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(7,15,'1663406693sub-3.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(8,15,'1663406693sub-4.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(9,15,'1663406693sub-5.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(10,15,'1663406693sub-6.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(11,15,'1663406693sub-7.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(12,15,'1663406693sub-8.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(13,15,'1663406693sub-9.jpg','2022-09-17 03:54:53','2022-09-17 03:54:53'),(14,15,'1663406694sub-10.jpg','2022-09-17 03:54:54','2022-09-17 03:54:54');
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Server Admin','server','2022-02-18 02:37:31','2022-02-18 02:37:31'),(2,'Super Admin','super','2022-02-18 02:37:31','2022-02-18 02:37:31'),(3,'Admin','admin','2022-02-18 02:37:31','2022-02-18 02:37:31');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenders`
--

DROP TABLE IF EXISTS `tenders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_date` datetime NOT NULL,
  `original_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint NOT NULL,
  `file_extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenders_slug_unique` (`slug`),
  KEY `tenders_user_id_foreign` (`user_id`),
  CONSTRAINT `tenders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenders`
--

LOCK TABLES `tenders` WRITE;
/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trackers`
--

DROP TABLE IF EXISTS `trackers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trackers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `hits` int NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trackers`
--

LOCK TABLES `trackers` WRITE;
/*!40000 ALTER TABLE `trackers` DISABLE KEYS */;
/*!40000 ALTER TABLE `trackers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL DEFAULT '3',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Server Admin','botadmin@knp.org',NULL,'$2y$10$jMSXTLUJeKdTWj1FcBUTx.9BQHXERIL5taOSxxpgjeRabOjpKRQve','admin',0,NULL,'2022-02-18 02:39:31','2022-02-18 02:39:31'),(2,2,'Super Admin','super@knp.org',NULL,'$2y$10$or7jYhMBR.CGzmk9FR7NWuBn/7jg.nN2K8XFxTpZNtTVbzdor7Z7S','admin',0,NULL,'2022-02-18 02:39:32','2022-09-10 01:09:54'),(3,3,'Admin VVNP','admin@knp.org',NULL,'$2y$10$eA5NFG2UWDiAjyp73fVXjONFO5lSTxQpKnjbuE0wekfdsBaqidpFK','admin',0,NULL,'2022-02-18 02:39:32','2022-09-10 01:11:38'),(4,1,'Blue Admin','sankalp.sks@gmail.com',NULL,'$2y$10$7g9xix2DdDa96efOmTA42uJgqA6HYM/Y6icvkY5Bwb01vtU62ZpGq','admin',0,NULL,'2021-01-17 06:00:56','2021-02-26 21:04:29'),(5,3,'Admin','admin@gmail.com',NULL,'$2y$10$wrPQRcDpnUEBw.Ven6VpeuE6i9OUCWFhqXVyK9II1mHCdzcE3PbV2','admin',0,NULL,'2021-01-17 06:03:55','2022-09-17 05:57:16'),(6,2,'Admin Kuno','admin@kunonationalpark.org',NULL,'$2y$10$iruCzDWaRuxOgpepcmE90.P6CXqYWfEaYDGx3HVjXQ7m1ZITsfcLq','admin',0,NULL,'2021-01-17 20:08:45','2021-02-26 21:04:58'),(7,2,'Director KNP','dir@kunonationalpark.org',NULL,'$2y$10$SKDLOl6o0KKzQBOLrJy9FO.bxlDTWGS6.41/S/5o1HFLCWZItwKee','admin',0,NULL,'2021-07-05 04:18:55','2021-07-05 04:18:55');
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

-- Dump completed on 2022-09-17 17:06:41
