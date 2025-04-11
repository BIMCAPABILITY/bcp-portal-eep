-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: employee_portal
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

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
-- Table structure for table `api_keys`
--

DROP TABLE IF EXISTS `api_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `my_key` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(4) NOT NULL,
  `is_private_key` tinyint(4) NOT NULL,
  `ip_addresses` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `api_keys`
--

LOCK TABLES `api_keys` WRITE;
/*!40000 ALTER TABLE `api_keys` DISABLE KEYS */;
INSERT INTO `api_keys` VALUES (1,0,'bimcap123',0,0,0,NULL,'2025-03-03 06:00:07');
/*!40000 ALTER TABLE `api_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  `country_code` int(11) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan',0),(2,'Albania',0),(3,'Algeria',0),(4,'American Samoa',0),(5,'Andorra',0),(6,'Angola',0),(7,'Anguilla',0),(8,'Antarctica',0),(9,'Antigua and Barbuda',0),(10,'Argentina',0),(11,'Armenia',0),(12,'Aruba',0),(13,'Australia',0),(14,'Austria',0),(15,'Azerbaijan',0),(16,'Bahamas',0),(17,'Bahrain',0),(18,'Bangladesh',0),(19,'Barbados',0),(20,'Belarus',0),(21,'Belgium',0),(22,'Belize',0),(23,'Benin',0),(24,'Bermuda',0),(25,'Bhutan',0),(26,'Bolivia',0),(27,'Bosnia and Herzegovina',0),(28,'Botswana',0),(29,'Bouvet Island',0),(30,'Brazil',0),(31,'British Indian Ocean Territory',0),(32,'Brunei Darussalam',0),(33,'Bulgaria',0),(34,'Burkina Faso',0),(35,'Burundi',0),(36,'Cambodia',0),(37,'Cameroon',0),(38,'Canada',0),(39,'Cape Verde',0),(40,'Cayman Islands',0),(41,'Central African Republic',0),(42,'Chad',0),(43,'Chile',0),(44,'China',0),(45,'Christmas Island',0),(46,'Cocos (Keeling) Islands',0),(47,'Colombia',0),(48,'Comoros',0),(49,'Congo',0),(50,'Congo, Democratic Republic of the',0),(51,'Cook Islands',0),(52,'Costa Rica',0),(53,'Cote d\'Ivoire',0),(54,'Croatia',0),(55,'Cuba',0),(56,'Cyprus',0),(57,'Czech Republic',0),(58,'Denmark',0),(59,'Djibouti',0),(60,'Dominica',0),(61,'Dominican Republic',0),(62,'East Timor',0),(63,'Ecuador',0),(64,'Egypt',0),(65,'El Salvador',0),(66,'Equatorial Guinea',0),(67,'Eritrea',0),(68,'Estonia',0),(69,'Ethiopia',0),(70,'Falkland Islands',0),(71,'Faroe Islands',0),(72,'Fiji',0),(73,'Finland',0),(74,'France',0),(75,'French Guiana',0),(76,'French Polynesia',0),(77,'French Southern Territories',0),(78,'Gabon',0),(79,'Gambia',0),(80,'Georgia',0),(81,'Germany',0),(82,'Ghana',0),(83,'Gibraltar',0),(84,'Greece',0),(85,'Greenland',0),(86,'Grenada',0),(87,'Guadeloupe',0),(88,'Guam',0),(89,'Guatemala',0),(90,'Guinea',0),(91,'Guinea-Bissau',0),(92,'Guyana',0),(93,'Haiti',0),(94,'Heard and McDonald Islands',0),(95,'Honduras',0),(96,'Hong Kong',0),(97,'Hungary',0),(98,'Iceland',0),(99,'India',0),(100,'Indonesia',0),(101,'Iran',0),(102,'Iraq',0),(103,'Ireland',0),(104,'Israel',0),(105,'Italy',0),(106,'Jamaica',0),(107,'Japan',0),(108,'Jordan',0),(109,'Kazakhstan',0),(110,'Kenya',0),(111,'Kiribati',0),(112,'Korea, Democratic People\'s Republic of',0),(113,'Korea, Republic of',0),(114,'Kuwait',0),(115,'Kyrgyzstan',0),(116,'Lao People\'s Democratic Republic',0),(117,'Latvia',0),(118,'Lebanon',0),(119,'Lesotho',0),(120,'Liberia',0),(121,'Libya',0),(122,'Liechtenstein',0),(123,'Lithuania',0),(124,'Luxembourg',0),(125,'Macau',0),(126,'Macedonia',0),(127,'Madagascar',0),(128,'Malawi',0),(129,'Malaysia',0),(130,'Maldives',0),(131,'Mali',0),(132,'Malta',0),(133,'Marshall Islands',0),(134,'Martinique',0),(135,'Mauritania',0),(136,'Mauritius',0),(137,'Mayotte',0),(138,'Mexico',0),(139,'Micronesia',0),(140,'Moldova',0),(141,'Monaco',0),(142,'Mongolia',0),(143,'Montenegro',0),(144,'Montserrat',0),(145,'Morocco',0),(146,'Mozambique',0),(147,'Myanmar',0),(148,'Namibia',0),(149,'Nauru',0),(150,'Nepal',0),(151,'Netherlands',0),(152,'Netherlands Antilles',0),(153,'New Caledonia',0),(154,'New Zealand',0),(155,'Nicaragua',0),(156,'Niger',0),(157,'Nigeria',0),(158,'Niue',0),(159,'Norfolk Island',0),(160,'Northern Mariana Islands',0),(161,'Norway',0),(162,'Oman',0),(163,'Pakistan',0),(164,'Palau',0),(165,'Palestine',0),(166,'Panama',0),(167,'Papua New Guinea',0),(168,'Paraguay',0),(169,'Peru',0),(170,'Philippines',0),(171,'Pitcairn',0),(172,'Poland',0),(173,'Portugal',0),(174,'Puerto Rico',0),(175,'Qatar',0),(176,'Reunion',0),(177,'Romania',0),(178,'Russian Federation',0),(179,'Rwanda',0),(180,'Saint Kitts and Nevis',0),(181,'Saint Lucia',0),(182,'Saint Vincent and the Grenadines',0),(183,'Samoa',0),(184,'San Marino',0),(185,'Sao Tome and Principe',0),(186,'Saudi Arabia',0),(187,'Senegal',0),(188,'Serbia',0),(189,'Seychelles',0),(190,'Sierra Leone',0),(191,'Singapore',0),(192,'Slovakia',0),(193,'Slovenia',0),(194,'Solomon Islands',0),(195,'Somalia',0),(196,'South Africa',0),(197,'South Georgia and South Sandwich Islands',0),(198,'Spain',0),(199,'Sri Lanka',0),(200,'Sudan',0),(201,'Suriname',0),(202,'Svalbard and Jan Mayen Islands',0),(203,'Swaziland',0),(204,'Sweden',0),(205,'Switzerland',0),(206,'Syrian Arab Republic',0),(207,'Taiwan',0),(208,'Tajikistan',0),(209,'Tanzania',0),(210,'Thailand',0),(211,'Togo',0),(212,'Tokelau',0),(213,'Tonga',0),(214,'Trinidad and Tobago',0),(215,'Tunisia',0),(216,'Turkey',0),(217,'Turkmenistan',0),(218,'Turks and Caicos Islands',0),(219,'Tuvalu',0),(220,'Uganda',0),(221,'Ukraine',0),(222,'United Arab Emirates',0),(223,'United Kingdom',0),(224,'United States',0),(225,'United States Minor Outlying Islands',0),(226,'Uruguay',0),(227,'Uzbekistan',0),(228,'Vanuatu',0),(229,'Vatican City State',0),(230,'Venezuela',0),(231,'Vietnam',0),(232,'Virgin Islands (British)',0),(233,'Virgin Islands (U.S.)',0),(234,'Wallis and Futuna Islands',0),(235,'Western Sahara',0),(236,'Yemen',0),(237,'Zambia',0),(238,'Zimbabwe',0),(239,'Åland Islands',0);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Innovation Hub',1,'2025-03-17 16:00:00'),(2,'BD - India',1,'2025-03-17 22:59:08'),(3,'IT Administrator',1,'2025-03-18 16:00:00');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation`
--

LOCK TABLES `designation` WRITE;
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` VALUES (1,'Software Developer',1,1,'2025-03-17 16:00:00'),(2,'BIM IPD Director',2,1,'2025-03-17 22:59:25'),(3,'IT',3,1,'2025-03-18 16:00:00');
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_history`
--

DROP TABLE IF EXISTS `employee_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_history` (
  `history_employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `history_department_id` int(11) DEFAULT NULL,
  `history_designation_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `history_spectrum_id` int(11) DEFAULT NULL,
  `history_office_location` varchar(100) DEFAULT NULL,
  `history_emp_level` int(11) DEFAULT NULL,
  `history_emp_sub_level` int(11) DEFAULT NULL,
  `history_user_role` int(11) NOT NULL,
  `history_status` int(11) NOT NULL DEFAULT '1',
  `history_modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`history_employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_history`
--

LOCK TABLES `employee_history` WRITE;
/*!40000 ALTER TABLE `employee_history` DISABLE KEYS */;
INSERT INTO `employee_history` VALUES (5,2,2,8,2,NULL,3,2,2,1,'2025-03-19 03:40:04'),(8,3,3,12,3,NULL,4,3,1,1,'2025-03-19 04:04:46'),(9,1,1,12,1,NULL,2,1,2,1,'2025-03-19 04:05:47'),(10,2,2,7,2,NULL,3,2,2,1,'2025-03-26 03:40:16'),(11,1,1,7,1,NULL,2,1,1,1,'2025-03-26 03:41:01');
/*!40000 ALTER TABLE `employee_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_leaves`
--

DROP TABLE IF EXISTS `employee_leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_leaves` (
  `leaves_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `leave_url` text NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `leave_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`leaves_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_leaves`
--

LOCK TABLES `employee_leaves` WRITE;
/*!40000 ALTER TABLE `employee_leaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_level`
--

DROP TABLE IF EXISTS `employee_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_level` (
  `employee_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_level_name` varchar(50) NOT NULL,
  `employee_level_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`employee_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_level`
--

LOCK TABLES `employee_level` WRITE;
/*!40000 ALTER TABLE `employee_level` DISABLE KEYS */;
INSERT INTO `employee_level` VALUES (2,'Support',1,'2025-03-17 16:00:00',NULL),(3,'BIM IPD',1,'2025-03-17 16:00:00',NULL),(4,'Support',1,'2025-03-18 16:00:00',NULL);
/*!40000 ALTER TABLE `employee_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_personality`
--

DROP TABLE IF EXISTS `employee_personality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_personality` (
  `employee_personality_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `personality_type` varchar(100) NOT NULL,
  `personality_role` varchar(100) NOT NULL,
  `personality_code` varchar(100) NOT NULL,
  `personality_strategy` varchar(100) NOT NULL,
  PRIMARY KEY (`employee_personality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_personality`
--

LOCK TABLES `employee_personality` WRITE;
/*!40000 ALTER TABLE `employee_personality` DISABLE KEYS */;
INSERT INTO `employee_personality` VALUES (2,7,'Testing1','Testing1','Testing1','Testing1');
/*!40000 ALTER TABLE `employee_personality` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_sub_level`
--

DROP TABLE IF EXISTS `employee_sub_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_sub_level` (
  `employee_sub_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_sub_level_name` varchar(100) DEFAULT 'No sub level',
  `level_id` int(11) NOT NULL,
  `level_name` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`employee_sub_level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_sub_level`
--

LOCK TABLES `employee_sub_level` WRITE;
/*!40000 ALTER TABLE `employee_sub_level` DISABLE KEYS */;
INSERT INTO `employee_sub_level` VALUES (1,'Automation',2,'Support','2025-03-17 22:46:43'),(2,'BIM IPD Director',3,'BIM IPD','2025-03-17 23:00:43'),(3,'IT',4,'Support','2025-03-19 03:52:37');
/*!40000 ALTER TABLE `employee_sub_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_table`
--

DROP TABLE IF EXISTS `employee_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_table` (
  `main_employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_first_name` varchar(50) NOT NULL,
  `employee_last_name` varchar(50) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `employee_number` varchar(20) NOT NULL,
  `employee_address` text NOT NULL,
  `employee_city` varchar(50) NOT NULL,
  `employee_country_id` int(11) NOT NULL,
  `employee_department` varchar(100) NOT NULL,
  `employee_designation` varchar(100) NOT NULL,
  `employee_image` text NOT NULL,
  `employee_doj` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `employee_dot` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `emp_password` varchar(100) NOT NULL,
  `emp_level` int(11) NOT NULL,
  `emp_sub_level` int(11) NOT NULL DEFAULT '0',
  `user_role` int(11) DEFAULT NULL,
  `employee_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`main_employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_table`
--

LOCK TABLES `employee_table` WRITE;
/*!40000 ALTER TABLE `employee_table` DISABLE KEYS */;
INSERT INTO `employee_table` VALUES (1,'Nadeem','Qureshi','nadeem.qureshi@bimcap.com','1234567890','Bhilai','Bhilai',1,'7','Full-Stack Developer','upload/2024/jun/20/FjU2lkcWYAgNG6d.jpg','2025-03-20 11:42:28','0000-00-00 00:00:00','$2y$10$G9WcxQ/ulU2ugqGcz.rRDuJCJb3beEsE23mqY87dph/USWseQW0hO',3,0,3,1,'2025-03-03 07:59:45'),(7,'Yogesh','Sen','yogesh@bimcap.com','911','Bhilai','Bhilai',99,'1','1','upload/2025/mar/18/Yogesh_BCP-Grey.png','2025-03-26 16:00:00','0000-00-00 00:00:00','$2y$10$JcRLmMgUEFL8Ro9yUYc42uVlJSCE3rK6MUUKjZjXo/tML.UJpT1zy',2,1,1,1,'0000-00-00 00:00:00'),(8,'Sandeep','Sikdar','sandeep@bimcap.com','911','Bhilai','Bhilai',99,'2','2','upload/2025/mar/18/image.jpg.png','2024-07-17 16:00:00','0000-00-00 00:00:00','$2y$10$4opvfRI38VkOe82hk/o5NuR6oH2pY.mtgk4ufNQytp8.I0YwTC57O',3,2,2,1,'0000-00-00 00:00:00'),(9,'Avi','Singhal','avi@bimcap.com','911','Bhilai','Bhilai',99,'2','2','upload/2025/mar/18/Avi Singhal_BCP-White.png','2022-06-01 16:00:00','0000-00-00 00:00:00','$2y$10$84cQ1uTuWMDiIhH8C6ZEJObSzbqJuDnaGyWXu6Or1eLxdT63F0scW',3,2,2,1,'0000-00-00 00:00:00'),(12,'Gerald','Mabandos','gerald@bimcap.com','911','Quezon City','Manila',170,'1','1','upload/2025/mar/19/Gerald_Mabandos_BCP-Grey.png','2025-03-24 06:37:15','0000-00-00 00:00:00','$2y$10$ZOWxZK1M/HCjapyacgj4U.daN3G.w8tXp3x/u.PJl6JAZkd8RKYLK',2,1,2,0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `employee_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_assign_employee`
--

DROP TABLE IF EXISTS `pe_assign_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_assign_employee` (
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `assign_supervisor_id` int(11) NOT NULL,
  `assign_employee_id` int(11) NOT NULL,
  `assign_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`assign_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_assign_employee`
--

LOCK TABLES `pe_assign_employee` WRITE;
/*!40000 ALTER TABLE `pe_assign_employee` DISABLE KEYS */;
INSERT INTO `pe_assign_employee` VALUES (5,7,8,1,'0000-00-00 00:00:00',NULL),(6,9,7,1,'0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `pe_assign_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_evaluation_history_id`
--

DROP TABLE IF EXISTS `pe_evaluation_history_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_evaluation_history_id` (
  `evaluation_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `emp_level` int(11) NOT NULL,
  `emp_sub_level` int(11) NOT NULL,
  `spectrum_id` int(11) NOT NULL,
  `goals_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`evaluation_history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_evaluation_history_id`
--

LOCK TABLES `pe_evaluation_history_id` WRITE;
/*!40000 ALTER TABLE `pe_evaluation_history_id` DISABLE KEYS */;
INSERT INTO `pe_evaluation_history_id` VALUES (1,1,7,9,2,1,1,1,'2025-03-18 06:27:28','2025-03-17 23:27:28'),(2,1,7,9,2,1,1,1,'2025-03-18 11:42:54','2025-03-18 04:42:54'),(3,1,7,9,2,1,1,1,'2025-03-20 11:44:07','2025-03-20 04:44:07');
/*!40000 ALTER TABLE `pe_evaluation_history_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_evaluation_score_table`
--

DROP TABLE IF EXISTS `pe_evaluation_score_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_evaluation_score_table` (
  `evaluation_﻿score_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_evaluation_id` int(11) NOT NULL,
  `employee_marks_category_id` int(11) NOT NULL,
  `supervisor_marks_category_id` int(11) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `employee_feedback` text NOT NULL,
  `manager_feedback` text NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`evaluation_﻿score_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_evaluation_score_table`
--

LOCK TABLES `pe_evaluation_score_table` WRITE;
/*!40000 ALTER TABLE `pe_evaluation_score_table` DISABLE KEYS */;
INSERT INTO `pe_evaluation_score_table` VALUES (1,1,2,3,1,'Testing - Yogesh','Testing - Avi Amin','2025-03-26 04:24:26'),(2,1,3,4,2,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(3,1,1,4,3,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(4,1,5,1,4,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(5,1,1,5,5,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(6,1,6,6,6,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(7,1,3,3,7,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(8,1,4,1,8,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(9,1,1,4,9,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(10,1,2,2,10,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(11,1,4,5,11,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(12,1,5,4,12,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(13,1,6,6,13,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(14,1,5,1,14,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(15,1,4,3,15,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(16,1,1,3,16,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(17,1,4,3,17,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(18,1,3,4,18,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(19,1,5,6,19,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(20,1,2,2,20,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(21,1,2,2,21,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(22,1,6,1,22,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(23,1,2,4,23,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(24,1,6,5,24,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(25,1,3,3,25,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(26,1,2,4,26,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(27,1,1,3,27,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(28,1,5,2,28,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(29,1,2,1,29,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(30,1,4,3,30,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(31,1,5,4,31,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(32,1,6,6,32,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26'),(33,1,1,4,33,'Testing - Yogesh','Testing - Avi','2025-03-26 04:24:26');
/*!40000 ALTER TABLE `pe_evaluation_score_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_evaluation_table`
--

DROP TABLE IF EXISTS `pe_evaluation_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_evaluation_table` (
  `employee_evaluation_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `evaluation_period` varchar(50) NOT NULL,
  `evaluation_start_date` varchar(50) NOT NULL,
  `evaluation_end_date` varchar(50) NOT NULL,
  `evaluation_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  `evaluation_delete_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_evaluation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_evaluation_table`
--

LOCK TABLES `pe_evaluation_table` WRITE;
/*!40000 ALTER TABLE `pe_evaluation_table` DISABLE KEYS */;
INSERT INTO `pe_evaluation_table` VALUES (1,7,'182-e','2024-07-01','2024-12-30',3,'2025-03-18 06:27:02','2025-03-19 16:00:00',1);
/*!40000 ALTER TABLE `pe_evaluation_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_goals_table`
--

DROP TABLE IF EXISTS `pe_goals_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_goals_table` (
  `go﻿als_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_evaluation_id` int(11) NOT NULL,
  `six_month_goal` text NOT NULL,
  `supervisor_six_month_goal` text NOT NULL,
  `twelve_month_goal` text NOT NULL,
  `supervisor_twelve_month_goal` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`go﻿als_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_goals_table`
--

LOCK TABLES `pe_goals_table` WRITE;
/*!40000 ALTER TABLE `pe_goals_table` DISABLE KEYS */;
INSERT INTO `pe_goals_table` VALUES (1,1,'Testing - Yogesh','Testing - Avi Amin','Testing - Yogesh','Testing - Avi Amin','2025-03-18 06:27:02','2025-03-26 04:24:26');
/*!40000 ALTER TABLE `pe_goals_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_marks_category_table`
--

DROP TABLE IF EXISTS `pe_marks_category_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_marks_category_table` (
  `marks_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `marks_name` varchar(50) NOT NULL,
  `marks_value` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`marks_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_marks_category_table`
--

LOCK TABLES `pe_marks_category_table` WRITE;
/*!40000 ALTER TABLE `pe_marks_category_table` DISABLE KEYS */;
INSERT INTO `pe_marks_category_table` VALUES (1,'N/A for this Semester',0,'2025-03-10 11:34:36',NULL),(2,'Needs Improvement',20,'2025-03-10 11:34:36',NULL),(3,'Work in Progress',40,'2025-03-13 08:58:44',NULL),(4,'Acceptable',60,'2025-03-13 08:58:44',NULL),(5,'Good',80,'2025-03-18 05:42:15',NULL),(6,'Outstanding',100,'2025-03-18 05:42:15',NULL);
/*!40000 ALTER TABLE `pe_marks_category_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_question_table`
--

DROP TABLE IF EXISTS `pe_question_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_question_table` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `spectrum_id` int(11) NOT NULL,
  `question_weight_id` int(11) NOT NULL,
  `question_value` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_question_table`
--

LOCK TABLES `pe_question_table` WRITE;
/*!40000 ALTER TABLE `pe_question_table` DISABLE KEYS */;
INSERT INTO `pe_question_table` VALUES (1,1,1,1,'You are able to understand all the tasks assigned to you, you have the necessary knowledge to understand the requirements of the tasks','2025-03-18 06:10:20',NULL),(2,1,1,1,'If you do not understand a task, you are able to ask the necessary questions early in the task assignment','2025-03-18 06:10:36',NULL),(3,1,1,1,'Your work is delivered within the given deadline','2025-03-18 06:10:45',NULL),(4,1,1,1,'If you are not able to meet a deadline, you are proactive to inform your supervisor ahead of the deadline submission','2025-03-18 06:10:54',NULL),(5,1,1,2,'Has a good understanding of LOD definitions based on latest BIM Forum release and able to question their modelling content','2025-03-18 06:11:05',NULL),(6,1,1,2,'Possesses great attention to detail, sheet graphic elements are aligned, legible, and make sure your modelled content is checked both in 2D and 3D views','2025-03-18 06:11:17',NULL),(7,1,1,2,'Ensure correct naming conventions for files and Revit elements as per your project\'s standards','2025-03-18 06:11:27',NULL),(8,1,1,2,' Your work is free of spelling mistakes','2025-03-18 06:11:37',NULL),(9,4,1,1,'Able to model and edit ARC elements in the LOD of your projects, up to LOD300, elements including walls, ceilings, doors, windows, and places rooms','2025-03-18 06:12:31',NULL),(10,4,1,1,'Able to model and edit Landscape elements in the LOD of your projects, up to LOD300, elements including property lines, site topography, roads, pavements, site furnishing, vegetation','2025-03-18 06:12:42',NULL),(11,4,1,1,'Able to model and edit Façade elements in the LOD of your projects, up to LOD300, elements including curtain walls and openings, façade massing, and skylights','2025-03-18 06:12:53',NULL),(12,4,1,1,'Able to model and edit Mechanical elements in the LOD of your projects, up to LOD300, elements including ducts, fittings, calculations, insulation, assemblies, detailed accessories','2025-03-18 06:13:03',NULL),(13,4,1,1,'Able to model and edit Electrical elements in the LOD of your projects, up to LOD300, elements including lighting fixtures, cable trays, circuits and routings','2025-03-18 06:13:17',NULL),(14,4,1,1,'Able to model and edit Plumbing and Fire elements in the LOD of your projects, up to LOD300, elements including plumbing fixtures and pipe routing','2025-03-18 06:13:28',NULL),(15,4,1,1,'Able to model and edit Structure elements in the LOD of your projects, up to LOD300, elements including beams, walls, columns, trusses, roofing, braces, foundations, openings, cut lengths, etc','2025-03-18 06:13:42',NULL),(16,4,1,1,'Able to model and edit Revit Families in the LOD of your projects, up to LOD300','2025-03-18 06:13:50',NULL),(17,4,1,1,'Input metadata into Revit elements in the LOD of your project, up to LOD300, excluding creating shared paremeters','2025-03-18 06:13:58',NULL),(18,4,1,1,'Able to read and interpret Construction Drawings to accurately model the geometry up to LOD300','2025-03-18 06:14:07',NULL),(19,4,1,2,'Able to conduct Clash Detections and Interference Checks to the assigned tolerance of your project','2025-03-18 06:14:17',NULL),(20,4,1,2,'Understands and applies the BIMCAP BIM Standards and Guidelines at LOD300','2025-03-18 06:14:27',NULL),(21,4,1,2,'Keeps model warnings under control, able to visually check for clashes, overlapping geometrics, clashes between disciplines and address with your team','2025-03-18 06:14:40',NULL),(22,4,1,2,'Create drawings and sheets from the Revit model as per the instructions and graphic styles set by your Supervisor','2025-03-18 06:14:48',NULL),(23,4,1,2,'Able to setup organized schedules with correct fields and complete information as per the instructions of your Supervisor','2025-03-18 06:14:56',NULL),(24,4,1,2,'Able to navigate and work in ACC as per your project\'s requirement','2025-03-18 06:15:07',NULL),(25,3,1,1,'Provides accurate Daily timetracked hours as per your employment contract requirements.','2025-03-18 06:15:29',NULL),(26,3,1,1,'Responsive in Bitrix24 communication with a response time of under 2 minutes','2025-03-18 06:15:39',NULL),(27,3,1,1,'Punctually attends all company meetings','2025-03-18 06:15:49',NULL),(28,3,1,1,'You are attentive, actively listening and involved during project and company meetings to provide insights and answer questions','2025-03-18 06:15:59',NULL),(29,3,1,2,'Provides regular feedback in the comments of the Bitrix24 tasks, workgroup chats, or during Project Briefings to keep your team updated','2025-03-18 06:16:09',NULL),(30,3,1,2,'Provides immediate updates upon completion of a task in the workgroup chat, and if applicable, by providing a task summary in the Bitrix24 task as well','2025-03-18 06:16:18',NULL),(31,3,1,2,'Understands the server’s organization to ensure that the folders are tidy and files saved in the correct location and not in your computer\'s desktop','2025-03-18 06:16:29',NULL),(32,3,1,2,'Understands the naming protocol when saving files to the Sharepoint server as per company\'s standard','2025-03-18 06:16:37',NULL),(33,3,1,2,'Logs Leave request correctly and within the required timeframes as per the Employee Handbook','2025-03-18 06:16:45',NULL);
/*!40000 ALTER TABLE `pe_question_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_question_weight_table`
--

DROP TABLE IF EXISTS `pe_question_weight_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_question_weight_table` (
  `question_weight_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_weight_name` varchar(50) NOT NULL,
  `question_weight_value` float NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`question_weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_question_weight_table`
--

LOCK TABLES `pe_question_weight_table` WRITE;
/*!40000 ALTER TABLE `pe_question_weight_table` DISABLE KEYS */;
INSERT INTO `pe_question_weight_table` VALUES (1,'A',0.7,'2025-03-07 10:32:14',NULL),(2,'B',0.3,'2025-03-07 10:32:14',NULL);
/*!40000 ALTER TABLE `pe_question_weight_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pe_section_table`
--

DROP TABLE IF EXISTS `pe_section_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pe_section_table` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(50) NOT NULL,
  `section_instruction` text,
  `spectrum_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pe_section_table`
--

LOCK TABLES `pe_section_table` WRITE;
/*!40000 ALTER TABLE `pe_section_table` DISABLE KEYS */;
INSERT INTO `pe_section_table` VALUES (1,'Production Capabilities','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',1,'2025-03-18 06:05:32','2025-03-24 00:45:01'),(3,'Revit Capabilities',NULL,1,'2025-03-18 06:09:29',NULL),(4,'Responsibilities',NULL,1,'2025-03-18 06:09:42',NULL);
/*!40000 ALTER TABLE `pe_section_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personality_ranks`
--

DROP TABLE IF EXISTS `personality_ranks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personality_ranks` (
  `personality_rank_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `min_value_mind` int(11) DEFAULT NULL,
  `max_value_mind` int(11) DEFAULT NULL,
  `min_value_energy` int(11) DEFAULT NULL,
  `max_value_energy` int(11) DEFAULT NULL,
  `min_value_nature` int(11) DEFAULT NULL,
  `max_value_nature` int(11) DEFAULT NULL,
  `min_value_tactics` int(11) DEFAULT NULL,
  `max_value_tactics` int(11) DEFAULT NULL,
  `min_value_identity` int(11) DEFAULT NULL,
  `max_value_identity` int(11) DEFAULT NULL,
  PRIMARY KEY (`personality_rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personality_ranks`
--

LOCK TABLES `personality_ranks` WRITE;
/*!40000 ALTER TABLE `personality_ranks` DISABLE KEYS */;
INSERT INTO `personality_ranks` VALUES (1,7,63,37,38,62,45,55,28,72,65,35),(2,8,50,50,50,50,50,50,50,50,50,50);
/*!40000 ALTER TABLE `personality_ranks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `salary_currency` varchar(50) NOT NULL,
  `salary_reason` text NOT NULL,
  `salary_type` varchar(50) NOT NULL,
  `basic_salary` text NOT NULL,
  `allowance` text NOT NULL,
  `salary_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`salary_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (1,7,1,'INR','Testing','Regularisation','0c120334f925e70b063d87ca537c66c27c93898c60a538618e92e646e3eda221e8889246027dd19fc2e4d98016ee14764ba5920390438df8d8414b233374d736UDz10Fmw0m1+a3okX166npekNbfabcdwlHFUe1i4sF0=','e4b34f240d47a5e78c68665ccc632b2a52606cc8ab837374a34186a803a37e9038bf47510b18ddae0bef49c39ae0e86ca8c30a754dbbc30e7a60f5cdb3eb5417id1MUqjYvpU+9/7u7X0v80TOMhyKnkML56EHvujOz/Y=','2025-03-19 16:00:00',1,'2025-03-26 03:51:31');
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software_expertise`
--

DROP TABLE IF EXISTS `software_expertise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `software_expertise` (
  `software_expertise_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `software_name` varchar(50) NOT NULL,
  `software_value` int(11) NOT NULL,
  `software_image` varchar(100) NOT NULL,
  `software_status` int(11) NOT NULL DEFAULT '1',
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`software_expertise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software_expertise`
--

LOCK TABLES `software_expertise` WRITE;
/*!40000 ALTER TABLE `software_expertise` DISABLE KEYS */;
INSERT INTO `software_expertise` VALUES (3,8,'Xammp Server',3,'',1,'2025-03-26 05:01:24'),(5,7,'Xammp Server',4,'upload/2025/mar/26/images.png',1,'2025-03-26 05:30:52'),(6,7,'Revit',2,'upload/2025/mar/26/revit_grande.png',1,'2025-03-26 10:32:07');
/*!40000 ALTER TABLE `software_expertise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spectrum_table`
--

DROP TABLE IF EXISTS `spectrum_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spectrum_table` (
  `spectrum_id` int(11) NOT NULL AUTO_INCREMENT,
  `spectrum_color_code` varchar(50) NOT NULL,
  `spectrum_color_name` varchar(50) NOT NULL,
  `employee_level` varchar(50) NOT NULL,
  `employee_sub_level` varchar(50) NOT NULL,
  `spectrum_status` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`spectrum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spectrum_table`
--

LOCK TABLES `spectrum_table` WRITE;
/*!40000 ALTER TABLE `spectrum_table` DISABLE KEYS */;
INSERT INTO `spectrum_table` VALUES (1,'808080','Grey','2','1',1,'2025-03-18 05:47:12'),(2,'FFFFFF','White','3','2',1,'2025-03-18 06:01:53'),(3,'808080','Grey','4','3',1,'2025-03-19 10:52:57');
/*!40000 ALTER TABLE `spectrum_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-10 19:22:59
