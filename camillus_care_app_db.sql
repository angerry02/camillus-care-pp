CREATE DATABASE  IF NOT EXISTS `camillus_care_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `camillus_care_db`;
-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: camillus_care_db
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `employee_schedules`
--

DROP TABLE IF EXISTS `employee_schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_schedules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `effective_date` date NOT NULL,
  `employee_id` int(10) unsigned NOT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  `schedule_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_schedules_employee_id_foreign` (`employee_id`),
  KEY `employee_schedules_patient_id_foreign` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_schedules`
--

LOCK TABLES `employee_schedules` WRITE;
/*!40000 ALTER TABLE `employee_schedules` DISABLE KEYS */;
INSERT INTO `employee_schedules` VALUES (26,'08:00:00','17:00:00','2021-06-19',8,5,0,'2021-06-15 18:16:33','2021-06-15 18:16:33'),(25,'08:00:00','00:00:00','2021-06-18',8,6,0,'2021-06-15 18:06:16','2021-06-15 18:06:16'),(27,'05:00:00','05:00:00','2021-06-16',6,5,0,'2021-06-15 18:38:59','2021-06-15 18:38:59');
/*!40000 ALTER TABLE `employee_schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `employee_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_hired` date DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `sss_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `philhealth_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qualification` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (6,'JEREMIAS','ESPINA','AN','NAGA CITY','019301930193','2021-06-22','2021-06-25','3131313131313','5454634636356','U44U2039029','NURSE','2021-06-10 18:13:45','2021-06-17 21:37:10','RN'),(8,'GREG','MENDOZA','DELA CRUZ','NAGA CAMARINES SUR','0948563231','2021-06-14','2021-06-14','109309103910','029039203220','U44U2039029','NURSE','2021-06-15 18:05:45','2021-06-15 18:05:45','RN');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endorsement_medication`
--

DROP TABLE IF EXISTS `endorsement_medication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endorsement_medication` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `medication` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `datetime_given` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endorsement_medication_patient_id_foreign` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endorsement_medication`
--

LOCK TABLES `endorsement_medication` WRITE;
/*!40000 ALTER TABLE `endorsement_medication` DISABLE KEYS */;
INSERT INTO `endorsement_medication` VALUES (1,'BIOGESIC','EVERY 4HRS',6,'2021-06-17 18:21:09','2021-06-17 18:21:09',NULL),(2,'MEDICOL 500G','EVERY 4HRS',6,'2021-06-17 18:24:06','2021-06-17 18:24:06',NULL),(3,'ALAXA','EVERY 5HRS',6,'2021-06-17 18:27:32','2021-06-17 18:27:32','2021-06-15 10:27:00'),(4,'MEDICOL 250G','EVERY 6HRS',6,'2021-06-17 18:36:27','2021-06-17 18:36:27','2021-06-14 10:36:00'),(5,'ALAXA FR','EVERY 4HRS',6,'2021-06-17 18:39:22','2021-06-17 18:39:22','2021-06-01 10:39:00'),(6,'MEDICOL 500G','EVERY 4HRS',6,'2021-06-17 18:40:05','2021-06-17 18:40:05','2021-06-19 10:40:00'),(7,'MEDICOL 5000000000G','EVERY 4HRS',6,'2021-06-17 18:58:30','2021-06-17 18:58:30','2021-06-08 10:58:00');
/*!40000 ALTER TABLE `endorsement_medication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laboratory_flow`
--

DROP TABLE IF EXISTS `laboratory_flow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laboratory_flow` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blood_work` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `values` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime_added` datetime DEFAULT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `laboratory_flow_patient_id_foreign` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laboratory_flow`
--

LOCK TABLES `laboratory_flow` WRITE;
/*!40000 ALTER TABLE `laboratory_flow` DISABLE KEYS */;
INSERT INTO `laboratory_flow` VALUES (1,'TEST','12','2021-06-16 11:28:00',6,'2021-06-17 19:28:33','2021-06-17 19:28:33'),(2,'YES','AD','2021-06-19 11:38:00',6,'2021-06-17 19:38:28','2021-06-17 19:38:28');
/*!40000 ALTER TABLE `laboratory_flow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (9,'2014_10_12_000000_create_users_table',1),(10,'2014_10_12_100000_create_password_resets_table',1),(11,'2019_08_19_000000_create_failed_jobs_table',1),(12,'2021_06_05_145524_create_employee_table',1),(13,'2021_06_11_052902_add_qualificatio_to_employees_table',2),(14,'2021_06_12_123214_create_patient_table',3),(15,'2021_06_12_134242_create_add_contact_relationship_to_patien_table',4),(17,'2021_06_12_134833_create_add_patientstatus_to_patien_table',5),(20,'2021_06_14_040634_create_employee_schedule_table',6),(22,'2021_06_18_014438_create_endorsement_medication_table',7),(24,'2021_06_18_020930_add_datetimegiven_to_endorsement_medication_table',8),(25,'2021_06_18_030745_create_laboratory_flow_table',9),(26,'2021_06_18_034307_create_vio_records_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patients` (
  `patient_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` decimal(8,2) NOT NULL,
  `height` decimal(8,2) NOT NULL,
  `allergies` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_diagnosis` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physical_limitation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `physician_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_relationship` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact_person_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (6,'GERRY','ROSERO','AN','NAGA CITY, CAMARINES SUR',26,'MALE',72.00,168.00,'MANOK','ROOM#123','BMC','UBOS','NONE','NONE','ARIANE BARRIOS','MARK JOSEPH','COUSIN','2021-06-15 18:04:40','2021-06-17 16:43:20','09485623165',1),(5,'JOHN KENNETH','ROSERO','AN','ZONE 1 MAGUIRING CALABANGA CAMARINES SUR',25,'MALE',72.00,1.90,'NONE','ROOM#123','BMC','Hyperlipidemia','NONE','NONE','ARIANE BARRIOS','GERRY AN','BROTHER','2021-06-13 19:49:42','2021-06-15 18:52:25','09784512369',1);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vio_records`
--

DROP TABLE IF EXISTS `vio_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vio_records` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gcs` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hr` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rr` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `o2_sat` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iv` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oral` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urine` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drainage` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bowel_movement` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime_added` datetime DEFAULT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vio_records_patient_id_foreign` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vio_records`
--

LOCK TABLES `vio_records` WRITE;
/*!40000 ALTER TABLE `vio_records` DISABLE KEYS */;
INSERT INTO `vio_records` VALUES (1,'GCS','BP','HR','RR','T','Bowel Movement','IV','ORAL','URINE','Drainage',NULL,'Bowel Movement','2021-06-19 13:08:00',6,'2021-06-17 21:08:47','2021-06-17 21:08:47'),(2,'GCS','BP','HR','RR','T','O2 SAT','IV','ORAL','URINE','Drainage','Bowel Movement','Remark','2021-06-07 13:09:00',6,'2021-06-17 21:10:01','2021-06-17 21:10:01'),(3,'15','120/80','92CM','161PM','36.8','98%','PNSS IL','300','60','20','1X','TEST','2021-06-19 04:29:00',6,'2021-06-17 21:31:15','2021-06-17 21:31:15');
/*!40000 ALTER TABLE `vio_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'camillus_care_db'
--

--
-- Dumping routines for database 'camillus_care_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-18 13:44:21
