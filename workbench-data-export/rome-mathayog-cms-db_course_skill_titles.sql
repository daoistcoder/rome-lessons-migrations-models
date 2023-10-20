-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: rome-mathayog-cms-db
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `course_skill_titles`
--

DROP TABLE IF EXISTS `course_skill_titles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_skill_titles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_topic_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_skill_titles_sub_topic_id_foreign` (`sub_topic_id`),
  CONSTRAINT `course_skill_titles_sub_topic_id_foreign` FOREIGN KEY (`sub_topic_id`) REFERENCES `sub_topics` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_skill_titles`
--

LOCK TABLES `course_skill_titles` WRITE;
/*!40000 ALTER TABLE `course_skill_titles` DISABLE KEYS */;
INSERT INTO `course_skill_titles` VALUES (1,'Determine numbers to 1000 illustrated by base 100 blocks, base 10 blocks, and single blocks ','1. Counting to 1,000 Using Blocks - WN-P2-A1',1,NULL,NULL),(2,'Identify numbers to 1,000 using place values','2. Counting to 1,000 Using Place Values ',1,NULL,NULL),(3,'Illustrate numbers to 1,000 using base 100 blocks, base 10 blocks, and single blocks','3. Illustrating Numbers to 1,000 Using Blocks',1,NULL,NULL),(4,'Identifying the greater or smaller number (numbers to 1,000) by comparing the hundreds digits','1. Comparing Numbers to 1,000 (Comparing Hundreds)',2,NULL,NULL),(5,'Ordering Numbers to 1,000 by comparing the hundreds digits','2. Ordering Numbers to 1,000 (Comparing Hundreds)',2,NULL,NULL),(6,'Identifying the greater or smaller number (numbers to 1,000) by comparing the hundreds and tens digits','3. Comparing Numbers to 1,000 (Comparing Hundreds and Tens)',2,NULL,NULL),(7,'Ordering Numbers to 1,000 by comparing the hundreds and tens digits','4. Ordering Numbers to 1,000 (Comparing Hundreds and Tens)',2,NULL,NULL),(8,'Identifying the greater or smaller number (numbers to 1,000) by comparing the hundreds, tens, and ones digits','5. Comparing Numbers to 1,000 (Comparing Hundreds, Tens, and Ones)',2,NULL,NULL),(9,'Ordering Numbers to 1,000 by comparing the hundreds, tens, and ones digits','6. Ordering Numbers to 1,000 (Comparing Hundreds, Tens, and Ones)',2,NULL,NULL),(10,'Determine numbers to 10,000 represented by thousands, hundreds, tens, and ones blocks ','1. Counting to 10,000 Using Blocks',3,NULL,NULL),(11,'Identify numbers to 10,000 using place values','2. Counting to 10,000 Using Place Values',3,NULL,NULL),(12,'Illustrate numbers to 10,000 using blocks','3. Illustrating Numbers to 10,000 Using Blocks',3,NULL,NULL),(13,'Identifying the greater or smaller number (numbers to 10,000) ','1. Identifying the Greater or Smaller Number Involving Numbers to 10,000',4,NULL,NULL),(14,'Comparing numbers to 10,000 using the terms \"greater\" or smaller\"','2. Comparing Numbers to 10,000 Using \"Greater\" or \"Smaller\"',4,NULL,NULL),(15,'Arrange numbers to 10,000 from greatest to smallest and vice-versa','3. Ordering Numbers to 10,000 from Greatest to Smallest or Vice-Versa',4,NULL,NULL);
/*!40000 ALTER TABLE `course_skill_titles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-20 16:17:08
