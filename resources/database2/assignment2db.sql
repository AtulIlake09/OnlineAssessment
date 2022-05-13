-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: assignment2
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(254) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `start_date_time` datetime DEFAULT NULL,
  `end_date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate`
--

LOCK TABLES `candidate` WRITE;
/*!40000 ALTER TABLE `candidate` DISABLE KEYS */;
INSERT INTO `candidate` VALUES (206,'',1,'Atul','sdfasf@gmail.com',8958675845,'127.0.0.1',NULL,NULL),(207,'',1,'ada','gasd@gmail.com',9586745812,'127.0.0.1',NULL,NULL),(208,'',1,'Atul','abc@gmail.com',8692876825,'127.0.0.1',NULL,NULL),(209,'',1,'ada','sdfasf@gmail.com',8958675845,'127.0.0.1',NULL,NULL),(210,'',1,'sdfa','sdfasf@gmail.com',9586745812,'127.0.0.1',NULL,NULL),(211,'',1,'ada','sdfasf@gmail.com',8692876825,'127.0.0.1',NULL,NULL),(212,'',1,'ada','gasd@gmail.com',9586745812,'127.0.0.1',NULL,NULL),(213,'',1,'ada','gasd@gmail.com',8958675845,'127.0.0.1',NULL,NULL),(214,'',1,'Atul','sdfasf@gmail.com',8692876825,'127.0.0.1',NULL,NULL),(215,'',1,'Atul','abc@gmail.com',8958675845,'127.0.0.1',NULL,NULL),(216,'',1,'Atul','abfadsg@gmail.com',84545555,'127.0.0.1',NULL,NULL),(217,'',2,'Atul','abc@gmail.com',84545555,'127.0.0.1',NULL,NULL),(218,'',1,'Atul','sdfasdaw@gmail.com',548578456,'127.0.0.1',NULL,NULL);
/*!40000 ALTER TABLE `candidate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate_answers`
--

DROP TABLE IF EXISTS `candidate_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(10) NOT NULL,
  `ip_id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `answers` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=408 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_answers`
--

LOCK TABLES `candidate_answers` WRITE;
/*!40000 ALTER TABLE `candidate_answers` DISABLE KEYS */;
INSERT INTO `candidate_answers` VALUES (238,154,303,'How to print chessboard in PHP ?','ADAsda'),(239,154,303,'How to print reverse number in PHP ?','asdfasdfg'),(240,154,303,'How to print star pattern in PHP ?','fgdsafgsdfg'),(241,154,303,'How to find Armstrong number in PHP ?','dfgdsfgadg'),(242,154,303,'How to print even numbers between two numbers in PHP ?','dfgdasfgfg'),(243,155,304,'How to print chessboard in PHP ?',''),(244,154,305,'How to print reverse number in PHP ?','\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),(245,157,306,'How to print Fibonacci series in PHP ?',''),(246,157,306,'How to print even numbers between two numbers in PHP ?',''),(247,157,306,'How to print star pattern in PHP ?',''),(248,157,306,'How to print chessboard in PHP ?','dsfafawef'),(249,157,306,'How to print reverse number in PHP ?','arwerqatWEtr'),(250,158,307,'How to print reverse number in PHP ?',''),(251,158,307,'How to print even numbers between two numbers in PHP ?','awdaefrewf'),(252,158,307,'How to find palindrome number in PHP ?',''),(253,158,307,'How to print Fibonacci series in PHP ?',''),(254,155,308,'How to print Fibonacci series in PHP ?',''),(255,155,308,'How to print even numbers between two numbers in PHP ?',''),(256,155,309,'How to print reverse number in PHP ?',''),(257,155,310,'How to print even numbers between two numbers in PHP ?',''),(258,155,310,'How to print star pattern in PHP ?',''),(259,155,310,'How to print chessboard in PHP ?',''),(260,155,311,'How to find palindrome number in PHP ?',''),(261,155,311,'How to print reverse number in PHP ?',''),(262,155,311,'How to print Fibonacci series in PHP ?',''),(263,155,311,'How to print even numbers between two numbers in PHP ?',''),(264,155,312,'How to print even numbers between two numbers in PHP ?',''),(265,155,312,'How to print star pattern in PHP ?',''),(266,155,312,'How to print reverse number in PHP ?',''),(267,155,312,'How to print chessboard in PHP ?',''),(268,155,312,'How to print Fibonacci series in PHP ?',''),(269,155,313,'What are the components in React?',''),(270,155,313,'What is an event in React?',''),(271,155,313,'What are synthetic events in React?',''),(272,155,313,'Why is there a need for using keys in Lists?',''),(273,155,313,'What is the use of render() in React?',''),(274,155,315,'Why is there a need for using keys in Lists?',''),(275,155,315,'What is the use of render() in React?',''),(276,155,315,'What are the components in React?',''),(277,155,315,'What is an event in React?',''),(278,157,316,'How to print chessboard in PHP ?',''),(279,157,316,'How to print reverse number in PHP ?',''),(280,157,316,'How to print star pattern in PHP ?',''),(281,157,316,'How to find palindrome number in PHP ?',''),(282,157,316,'How to find Armstrong number in PHP ?',''),(283,155,317,'What is an event in React?',''),(284,155,317,'What is the use of render() in React?',''),(285,155,317,'What are the components in React?',''),(286,155,317,'What are synthetic events in React?',''),(287,155,317,'Why is there a need for using keys in Lists?',''),(288,155,318,'How to print even numbers between two numbers in PHP ?','fawefa'),(289,155,318,'How to print chessboard in PHP ?','erqawer'),(290,155,318,'How to print star pattern in PHP ?',''),(291,155,318,'How to print reverse number in PHP ?',''),(292,155,318,'How to find Armstrong number in PHP ?',''),(293,157,319,'How to print star pattern in PHP ?',''),(294,157,319,'How to print Fibonacci series in PHP ?',''),(295,157,320,'What is the use of render() in React?',''),(296,157,320,'What is an event in React?',''),(297,157,320,'What are synthetic events in React?',''),(298,157,321,'What are the components in React?',''),(299,157,321,'Why is there a need for using keys in Lists?',''),(300,155,324,'What are the components in React?',''),(301,155,326,'What are the components in React?',''),(302,155,327,'What are the components in React?',''),(303,155,328,'What are the components in React?',''),(304,157,329,'What are the components in React?',''),(305,157,329,'Why is there a need for using keys in Lists?',''),(306,157,329,'What are synthetic events in React?',''),(307,157,329,'What is an event in React?',''),(308,154,330,'How to print chessboard in PHP ?',''),(309,155,331,'How to print star pattern in PHP ?',''),(310,155,331,'How to print Fibonacci series in PHP ?',''),(311,155,332,'How to print Fibonacci series in PHP ?',''),(312,155,332,'How to find palindrome number in PHP ?',''),(313,155,332,'How to print even numbers between two numbers in PHP ?',''),(314,155,332,'How to find Armstrong number in PHP ?',''),(315,155,332,'How to print chessboard in PHP ?',''),(316,158,333,'How to print reverse number in PHP ?','erawgaerg'),(317,158,333,'How to find Armstrong number in PHP ?','awertgwetg'),(318,158,333,'How to print Fibonacci series in PHP ?','asfasefsfd'),(319,158,333,'How to find palindrome number in PHP ?',''),(320,158,333,'How to print even numbers between two numbers in PHP ?',''),(321,155,334,'How to find palindrome number in PHP ?','wqerqaer'),(322,155,334,'How to print Fibonacci series in PHP ?','wqerqaer'),(323,155,334,'How to print reverse number in PHP ?','wqerqaer'),(324,155,334,'How to print chessboard in PHP ?','wqerqaer'),(325,155,334,'How to find Armstrong number in PHP ?',''),(326,157,335,'How to print chessboard in PHP ?',''),(327,157,335,'How to find Armstrong number in PHP ?',''),(328,157,335,'How to print star pattern in PHP ?',''),(329,157,335,'How to print Fibonacci series in PHP ?',''),(330,155,336,'How to print even numbers between two numbers in PHP ?',''),(331,155,336,'How to print chessboard in PHP ?',''),(332,155,336,'How to find Armstrong number in PHP ?',''),(333,155,336,'How to print star pattern in PHP ?',''),(334,155,336,'How to print Fibonacci series in PHP ?',''),(335,155,337,'How to print reverse number in PHP ?',''),(336,155,337,'How to print even numbers between two numbers in PHP ?',''),(337,155,337,'How to find palindrome number in PHP ?',''),(338,155,337,'How to find Armstrong number in PHP ?',''),(339,155,338,'How to print star pattern in PHP ?',''),(340,155,338,'How to print reverse number in PHP ?',''),(341,155,338,'How to print even numbers between two numbers in PHP ?',''),(342,155,338,'How to find palindrome number in PHP ?',''),(343,155,338,'How to find Armstrong number in PHP ?',''),(344,155,339,'How to print star pattern in PHP ?',''),(345,155,339,'How to print reverse number in PHP ?',''),(346,155,339,'How to print even numbers between two numbers in PHP ?',''),(347,155,339,'How to find palindrome number in PHP ?',''),(348,155,339,'How to find Armstrong number in PHP ?',''),(349,155,340,'How to print star pattern in PHP ?',''),(350,155,340,'How to print reverse number in PHP ?',''),(351,155,340,'How to print even numbers between two numbers in PHP ?',''),(352,155,340,'How to find palindrome number in PHP ?',''),(353,155,340,'How to find Armstrong number in PHP ?',''),(354,157,341,'How to find palindrome number in PHP ?',''),(355,157,341,'How to print Fibonacci series in PHP ?',''),(356,157,341,'How to print star pattern in PHP ?',''),(357,157,341,'How to find Armstrong number in PHP ?',''),(358,157,342,'How to find palindrome number in PHP ?','aaadsfasdfgaefhsd'),(359,157,342,'How to print star pattern in PHP ?','dfhghywr5yhaqr4ywa'),(360,157,342,'How to print Fibonacci series in PHP ?',''),(361,157,342,'How to print reverse number in PHP ?','etWETWt'),(362,157,342,'How to print chessboard in PHP ?','wetaert'),(363,158,343,'How to find Armstrong number in PHP ?',''),(364,158,343,'How to print even numbers between two numbers in PHP ?',''),(365,157,344,'What is the use of render() in React?',''),(366,157,345,'What is an event in React?',''),(367,157,345,'What are synthetic events in React?',''),(368,158,346,'What is the use of render() in React?',''),(369,158,348,'How to find palindrome number in PHP ?',''),(370,157,349,'How to print Fibonacci series in PHP ?',''),(371,157,349,'How to print reverse number in PHP ?','fasdgfaerg'),(372,157,349,'How to find palindrome number in PHP ?','argadrg'),(373,157,349,'How to print even numbers between two numbers in PHP ?',''),(374,158,350,'How to print Fibonacci series in PHP ?','asgetasetg'),(375,158,350,'How to print chessboard in PHP ?','sdfgsdf'),(376,158,350,'How to find palindrome number in PHP ?',''),(377,158,351,'Why is there a need for using keys in Lists?',''),(378,207,356,'What are the components in React?',''),(379,208,357,'How to find palindrome number in PHP ?',''),(380,208,357,'How to print chessboard in PHP ?','dfaefAW'),(381,208,357,'How to print even numbers between two numbers in PHP ?',''),(382,208,357,'How to print star pattern in PHP ?',''),(383,208,357,'How to print reverse number in PHP ?',''),(384,206,358,'How to print even numbers between two numbers in PHP ?',''),(385,206,358,'How to print star pattern in PHP ?',''),(386,206,359,'How to print even numbers between two numbers in PHP ?','fqwerAE'),(387,206,359,'How to find Armstrong number in PHP ?','WERWAER'),(388,206,359,'How to print star pattern in PHP ?',''),(389,206,360,'How to print chessboard in PHP ?',''),(390,206,360,'How to find palindrome number in PHP ?','sdfasd'),(391,206,360,'How to print reverse number in PHP ?','fgasdfgf'),(392,206,360,'How to find Armstrong number in PHP ?',''),(393,207,361,'How to print reverse number in PHP ?',''),(394,207,361,'How to find Armstrong number in PHP ?','rwatwet'),(395,207,361,'How to print chessboard in PHP ?',''),(396,206,363,'How to print chessboard in PHP ?',''),(397,206,363,'How to find palindrome number in PHP ?',''),(398,208,364,'How to print star pattern in PHP ?',''),(399,208,364,'How to find Armstrong number in PHP ?',''),(400,208,364,'How to find palindrome number in PHP ?',''),(401,208,364,'How to print Fibonacci series in PHP ?',''),(402,216,365,'How to print star pattern in PHP ?',''),(403,216,365,'How to print Fibonacci series in PHP ?',''),(404,216,365,'How to find Armstrong number in PHP ?','tqwetyery'),(405,216,365,'How to print chessboard in PHP ?',''),(406,218,367,'How to print even numbers between two numbers in PHP ?',''),(407,208,367,'What are the components in React?','');
/*!40000 ALTER TABLE `candidate_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate_test_link`
--

DROP TABLE IF EXISTS `candidate_test_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate_test_link` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `phone` varchar(254) NOT NULL,
  `test_category_id` int(11) NOT NULL,
  `link` varchar(254) NOT NULL COMMENT 'base64_encode(time())',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_test_link`
--

LOCK TABLES `candidate_test_link` WRITE;
/*!40000 ALTER TABLE `candidate_test_link` DISABLE KEYS */;
INSERT INTO `candidate_test_link` VALUES (0,'Amarjit Kumar','amarjit@metricoidtech.com','',2,'dfjh66sdjfhj','2022-05-13 16:14:44');
/*!40000 ALTER TABLE `candidate_test_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) NOT NULL,
  `time_period` int(11) NOT NULL COMMENT 'min',
  `description` text NOT NULL,
  `active` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'PHP',3,'',1),(2,'React_js',20,'',1),(3,'Python',30,'',0),(4,'JavaScript',20,'',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `ip_details`
--

DROP TABLE IF EXISTS `ip_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ip_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=368 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip_details`
--

LOCK TABLES `ip_details` WRITE;
/*!40000 ALTER TABLE `ip_details` DISABLE KEYS */;
INSERT INTO `ip_details` VALUES (355,'127.0.0.1',1,'2022-05-13 06:20:23'),(356,'127.0.0.1',1,'2022-05-13 06:39:48'),(357,'127.0.0.1',1,'2022-05-13 06:43:38'),(358,'127.0.0.1',1,'2022-05-13 06:47:26'),(359,'127.0.0.1',1,'2022-05-13 06:54:32'),(360,'127.0.0.1',1,'2022-05-13 06:58:12'),(361,'127.0.0.1',1,'2022-05-13 07:04:00'),(362,'127.0.0.1',1,'2022-05-13 07:16:23'),(363,'127.0.0.1',1,'2022-05-13 07:23:43'),(364,'127.0.0.1',1,'2022-05-13 07:27:26'),(365,'127.0.0.1',1,'2022-05-13 07:32:57'),(366,'127.0.0.1',2,'2022-05-13 07:37:30'),(367,'127.0.0.1',1,'2022-05-13 07:38:44');
/*!40000 ALTER TABLE `ip_details` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','I03H4dmN5gc90Ulfm2Wzq5nCC2WDZHR6LkI6yBbW',NULL,'http://localhost',1,0,0,'2022-05-09 05:52:27','2022-05-09 05:52:27'),(2,NULL,'Laravel Password Grant Client','PS2q4PkDOUOcn74vEbGB67hpMyAOEdWTL3VbPRQn','users','http://localhost',0,1,0,'2022-05-09 05:52:27','2022-05-09 05:52:27');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2022-05-09 05:52:27','2022-05-09 05:52:27');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',1,'MyApp','be9a273f084184d0cbbb24d5575c68371b617dbdd1ce73d2f960a5b37c73f3e4','[\"*\"]',NULL,'2022-05-09 06:21:46','2022-05-09 06:21:46');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `questions` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(2) NOT NULL COMMENT 'active-1\r\ninactive-0',
  PRIMARY KEY (`id`),
  KEY `questions` (`questions`(768))
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,'How to print even numbers between two numbers in PHP ?','descriptive',1),(2,1,'How to print reverse number in PHP ?','descriptive',1),(3,1,'How to find palindrome number in PHP ?','descriptive',1),(4,1,'How to find Armstrong number in PHP ?','descriptive',1),(5,1,'How to print Fibonacci series in PHP ?','descriptive',1),(6,1,'How to print star pattern in PHP ?','descriptive',1),(7,1,'How to print chessboard in PHP ?','descriptive',1),(8,2,'What is an event in React?','descriptive',1),(9,2,'What are synthetic events in React?','descriptive',1),(10,2,'Why is there a need for using keys in Lists?','descriptive',1),(11,2,'What are the components in React?','descriptive',1),(12,2,'What is the use of render() in React?','descriptive',1),(13,3,'What is the difference between list and tuples in Python?','descriptive',0),(14,3,'Write a python program to print all even numbers between 1 to 100 ?','descriptive',0),(15,3,'Write a program to print star pattern in python ?','descriptive',0),(16,4,'Write a program to print Fibonacci series in javaScript ?\r\n','descriptive',1),(17,4,'Write a program to find palindrome number in javascript ?','descriptive',1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Atul','atul@metricoidtech.com',NULL,'$2y$10$Q7cHWBTyMCqonh/nCbj5aOxplyOOdHUoUHJh/rBYWH8fasaoqSV7S',NULL,'2022-05-09 06:21:45','2022-05-09 06:21:45');
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

-- Dump completed on 2022-05-13 20:05:03
