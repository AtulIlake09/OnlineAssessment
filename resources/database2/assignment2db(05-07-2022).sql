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
  `candidate_id` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `start_date_time` datetime DEFAULT NULL,
  `end_date_time` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1:complete 0:incomplete',
  `active_status` int(2) NOT NULL DEFAULT 1 COMMENT '1-active 0-inactive 2-deleted',
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate`
--

LOCK TABLES `candidate` WRITE;
/*!40000 ALTER TABLE `candidate` DISABLE KEYS */;
INSERT INTO `candidate` VALUES (302,'MTY1MzM3MTAwMQ==',2,'Shubham','shubham@metricoidtech.com',9865748569,2,'','/test/MTY1MzM3MTAwMQ==','127.0.0.1','2022-06-07 07:09:22','2022-06-28 12:34:47',1,2,'2022-06-30 10:52:59'),(303,'MTY1MzM3Njk4Nw==',6,'jivan','jivan123@gmail.com',8695748567,3,'','/test/MTY1MzM3Njk4Nw==','127.0.0.1','2022-06-07 07:20:10','2022-06-28 07:39:27',1,2,'2022-06-30 12:16:49'),(304,'MTY1NjMzODk5OA==',6,'Metricoid','atul@metricoidtech.com',5456498884,2,'','/test/MTY1NjMzODk5OA==','127.0.0.1','2022-06-27 07:44:48','2022-06-27 07:51:33',1,2,'2022-06-30 12:17:05'),(305,'MTY1NTI5NDU1Nw==',7,'pqr','pqr@gmail.com',8596475487,4,'','/test/MTY1NTI5NDU1Nw==','127.0.0.1','2022-06-28 11:24:54','2022-06-28 12:13:19',1,2,'2022-06-30 12:17:16'),(306,'MTY1MzM3Nzg5Mg==',2,'Atul','atul@metricoidtech.com',9865748569,2,'','/test/MTY1MzM3Nzg5Mg==','127.0.0.1','2022-06-28 12:14:24','2022-06-28 12:34:26',1,2,'2022-06-30 12:17:28'),(307,'MTY1NDg0MTk1Mw==',8,'atul','atulilake123@gmail.com',5434455456,1,'','/test/MTY1NDg0MTk1Mw==','127.0.0.1','2022-06-28 12:35:17','2022-06-28 12:40:18',1,2,'2022-06-30 12:17:41'),(308,'MTY1MzM4MzQ5MQ==',6,'ilyas bhagvan','ilyas@gmail.com',8695748567,3,'','/test/MTY1MzM4MzQ5MQ==','127.0.0.1','2022-06-28 12:41:36','2022-06-28 01:12:00',1,2,'2022-06-30 12:17:45'),(309,'MTY1NDg0MTczNg==',7,'atul','atulilake123@gmail.com',5434455456,1,'','/test/MTY1NDg0MTczNg==','127.0.0.1','2022-06-28 07:40:49','2022-06-28 07:46:24',1,2,'2022-06-30 12:17:48'),(310,'MTY1NjQyNTg2NQ==',2,'Abc','abc@gmail.com',8695748567,3,'','/test/MTY1NjQyNTg2NQ==','127.0.0.1','2022-06-28 07:48:13','2022-06-30 10:11:16',1,2,'2022-06-30 12:17:59'),(311,'MTY1NjQ3ODAyNw==',6,'Arvind','arvind1234@gmail.com',8562147565,1,'','/test/MTY1NjQ3ODAyNw==','127.0.0.1','2022-06-29 10:19:50','2022-06-29 08:11:13',1,2,'2022-06-30 12:18:05'),(312,'MTY1NjUxMzc2MA==',2,'Atul','atul@metricoidtech.com',8562147565,1,'','/test/MTY1NjUxMzc2MA==','127.0.0.1','2022-06-29 08:13:32','2022-06-29 08:15:22',1,2,'2022-06-30 12:18:16'),(314,'MTY1NjU2Nzk1Mw==',2,'Metricoid','atul@metricoidtech.com',8695748567,1,'','/test/MTY1NjU2Nzk1Mw==','127.0.0.1','2022-06-30 11:26:04','2022-06-30 11:37:49',1,1,NULL),(315,'MTY1NzAxMDUyOA==',2,'atul','atul@metricoidtech.com',8695748567,1,'','/test/MTY1NzAxMDUyOA==','127.0.0.1','2022-07-05 02:12:21','2022-07-05 02:14:34',1,1,NULL),(316,'MTY1NzAxMTE2OA==',6,'Metricoid','atul@metricoidtech.com',8695748567,2,'','/test/MTY1NzAxMTE2OA==','127.0.0.1','2022-07-05 02:23:04','2022-07-05 02:24:22',1,1,NULL),(317,'MTY1NzAxNTY1MA==',6,'Shubham','shubham@metricoidtech.com',545345458,3,'','/test/MTY1NzAxNTY1MA==','127.0.0.1','2022-07-05 03:37:51','2022-07-05 03:44:32',1,1,NULL),(318,'MTY1NzAxNzY0NA==',2,'jivan','jivan@gmail.com',955645584,1,'','/test/MTY1NzAxNzY0NA==','127.0.0.1','2022-07-05 04:11:03','2022-07-05 04:43:52',1,1,NULL),(319,'MTY1NzAxOTk3MA==',6,'atul','atul1@metricoidtech.com',8695748567,1,'','/test/MTY1NzAxOTk3MA==','127.0.0.1','2022-07-05 04:49:42','2022-07-05 06:17:42',1,1,NULL),(320,'MTY1NzAyNTQxOQ==',2,'Metricoid','career@metricoidtech.com',8695748567,1,'','/test/MTY1NzAyNTQxOQ==','127.0.0.1','2022-07-05 06:20:44','2022-07-05 06:24:38',1,2,'2022-07-05 06:31:16'),(321,'MTY1NzAyNjEzMA==',2,'jivan','jivan@gmail.com',996854756,2,'','/test/MTY1NzAyNjEzMA==','127.0.0.1','2022-07-05 06:42:27','2022-07-05 06:49:29',1,1,NULL),(322,'MTY1NzAyNzMxMA==',2,'Shubham','shubham@metricoidtech.com',999749847,3,'','/test/MTY1NzAyNzMxMA==','127.0.0.1','2022-07-05 06:52:00','2022-07-05 07:08:32',1,2,'2022-07-05 07:20:08');
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
  `candidate_id` varchar(255) NOT NULL,
  `ip_id` varchar(255) DEFAULT NULL,
  `ques_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT '1-descriptive\r\n2-objective-3-code',
  `answers` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1-acticve 2-deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=837 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_answers`
--

LOCK TABLES `candidate_answers` WRITE;
/*!40000 ALTER TABLE `candidate_answers` DISABLE KEYS */;
INSERT INTO `candidate_answers` VALUES (789,'MTY1NjU2Nzk1Mw==','467',26,2,'6','2022-06-30 11:26:05',NULL,NULL,1),(790,'MTY1NjU2Nzk1Mw==','467',7,3,'asegasdfgafdgad','2022-06-30 11:26:05',NULL,NULL,1),(791,'MTY1NjU2Nzk1Mw==','467',4,1,'fasdfazgadfg','2022-06-30 11:26:05',NULL,NULL,1),(792,'MTY1NjU2Nzk1Mw==','467',6,1,'fasdfasdfgdfgs','2022-06-30 11:26:05',NULL,NULL,1),(793,'MTY1NjU2Nzk1Mw==','467',25,2,NULL,'2022-06-30 11:26:05',NULL,NULL,1),(794,'MTY1NjU2Nzk1Mw==','467',25,2,'2','2022-06-30 11:37:49',NULL,NULL,1),(795,'MTY1NzAxMDUyOA==','468',3,1,'jfjkgfgf,h','2022-07-05 14:12:21','2022-07-05 02:14:17',NULL,1),(796,'MTY1NzAxMDUyOA==','468',2,1,'fasdfasdfgdfgsbdfbbffdb','2022-07-05 14:12:21','2022-07-05 02:14:21',NULL,1),(797,'MTY1NzAxMDUyOA==','468',28,2,'13','2022-07-05 14:12:21','2022-07-05 02:14:25',NULL,1),(798,'MTY1NzAxMDUyOA==','468',5,1,'klhnl;k','2022-07-05 14:12:21','2022-07-05 02:14:29',NULL,1),(799,'MTY1NzAxMDUyOA==','468',27,2,'.php','2022-07-05 14:12:21','2022-07-05 02:14:34',NULL,1),(800,'MTY1NzAxMTE2OA==','469',12,1,'gadsfgasdgasdf','2022-07-05 14:23:04','2022-07-05 02:23:46',NULL,1),(801,'MTY1NzAxMTE2OA==','469',9,1,'asfdfgasdgdfga','2022-07-05 14:23:04','2022-07-05 02:23:49',NULL,1),(802,'MTY1NzAxMTE2OA==','469',10,1,'agsarsdgarg','2022-07-05 14:23:04','2022-07-05 02:24:12',NULL,1),(803,'MTY1NzAxMTE2OA==','469',11,1,'adsfgasdfgsdg','2022-07-05 14:23:04','2022-07-05 02:24:15',NULL,1),(804,'MTY1NzAxMTE2OA==','469',8,1,'agfasdfgadfg','2022-07-05 14:23:04','2022-07-05 02:24:22',NULL,1),(805,'MTY1NzAxNTY1MA==','470',13,1,'agfasdfgadfg','2022-07-05 15:37:51','2022-07-05 03:44:17',NULL,1),(806,'MTY1NzAxNTY1MA==','470',14,1,'gxnxdfxd','2022-07-05 15:37:51','2022-07-05 03:44:24',NULL,1),(807,'MTY1NzAxNTY1MA==','470',15,1,NULL,'2022-07-05 15:37:51',NULL,NULL,1),(808,'MTY1NzAxNTY1MA==','470',15,1,'yufuklyhhtyh','2022-07-05 15:44:32',NULL,NULL,1),(809,'MTY1NzAxNzY0NA==','471',4,1,'aSFdasdsadgazsdgasdg','2022-07-05 16:11:03','2022-07-05 04:36:21',NULL,1),(810,'MTY1NzAxNzY0NA==','471',27,2,'9','2022-07-05 16:11:03','2022-07-05 04:40:29',NULL,1),(811,'MTY1NzAxNzY0NA==','471',26,2,'6','2022-07-05 16:11:03','2022-07-05 04:41:18',NULL,1),(812,'MTY1NzAxNzY0NA==','471',28,2,'13','2022-07-05 16:11:03','2022-07-05 04:40:32',NULL,1),(813,'MTY1NzAxNzY0NA==','471',1,1,'gadsfhszdfh','2022-07-05 16:11:03','2022-07-05 04:36:07',NULL,1),(814,'MTY1NzAxOTk3MA==','472',28,2,'13','2022-07-05 16:49:43','2022-07-05 06:17:20',NULL,1),(815,'MTY1NzAxOTk3MA==','472',26,2,'6','2022-07-05 16:49:43','2022-07-05 06:17:15',NULL,1),(816,'MTY1NzAxOTk3MA==','472',6,1,'yadrfhadrfh','2022-07-05 16:49:43','2022-07-05 06:17:37',NULL,1),(817,'MTY1NzAxOTk3MA==','472',25,2,'2','2022-07-05 16:49:43','2022-07-05 06:17:38',NULL,1),(818,'MTY1NzAxOTk3MA==','472',1,1,'sdfasdgasdgasedga','2022-07-05 16:49:43','2022-07-05 06:17:42',NULL,1),(819,'MTY1NzAyNTQxOQ==','473',1,1,'zdsfagdfgadsf','2022-07-05 18:20:44','2022-07-05 06:23:30','2022-07-05 06:31:16',2),(820,'MTY1NzAyNTQxOQ==','473',25,2,'2','2022-07-05 18:20:44','2022-07-05 06:23:34','2022-07-05 06:31:16',2),(821,'MTY1NzAyNTQxOQ==','473',26,2,'6','2022-07-05 18:20:44','2022-07-05 06:23:41','2022-07-05 06:31:16',2),(822,'MTY1NzAyNTQxOQ==','473',6,1,'v,jhbhgklyyuy','2022-07-05 18:20:44','2022-07-05 06:23:44','2022-07-05 06:31:16',2),(823,'MTY1NzAyNTQxOQ==','473',3,1,'hgklyyuy','2022-07-05 18:20:44','2022-07-05 06:24:38','2022-07-05 06:31:16',2),(824,'MTY1NzAyNjEzMA==','474',11,1,'asfasdgadfgadfg','2022-07-05 18:44:22','2022-07-05 06:49:13',NULL,1),(825,'MTY1NzAyNjEzMA==','474',8,1,'gedghsdfhgsghsf','2022-07-05 18:44:22','2022-07-05 06:49:17',NULL,1),(826,'MTY1NzAyNjEzMA==','474',10,1,'sdfhsdfhgsdfhsfh','2022-07-05 18:44:22','2022-07-05 06:49:21',NULL,1),(827,'MTY1NzAyNjEzMA==','474',9,1,'sdhdfhgsdfhsdfh','2022-07-05 18:44:22','2022-07-05 06:48:35',NULL,1),(828,'MTY1NzAyNjEzMA==','474',12,1,'sdfhsdfghsdfhs','2022-07-05 18:44:22','2022-07-05 06:49:28',NULL,1),(829,'MTY1NzAyNzMxMA==','475',15,3,'fasefasdfadf','2022-07-05 18:52:00','2022-07-05 07:05:09','2022-07-05 07:20:08',2),(830,'MTY1NzAyNzMxMA==','475',13,1,'jhgkl','2022-07-05 18:52:00','2022-07-05 07:06:07','2022-07-05 07:20:08',2),(831,'MTY1NzAyNzMxMA==','475',14,3,'fckfdhfdfdyfyu','2022-07-05 18:52:00','2022-07-05 07:08:32','2022-07-05 07:20:08',2),(832,'MTY1NzAyNzMxMA==',NULL,9,1,'efagfasdga','2022-07-05 19:00:43','2022-07-05 07:05:42','2022-07-05 07:20:08',2),(833,'MTY1NzAyNzMxMA==',NULL,12,1,'fasdfgasdgasdfg','2022-07-05 19:00:50','2022-07-05 07:05:46','2022-07-05 07:20:08',2),(834,'MTY1NzAyNzMxMA==',NULL,10,1,'fasdgasdgadfg','2022-07-05 19:00:58','2022-07-05 07:05:51','2022-07-05 07:20:08',2),(835,'MTY1NzAyNzMxMA==',NULL,8,1,'gasdgadsgadfg','2022-07-05 19:01:34','2022-07-05 07:05:56','2022-07-05 07:20:08',2),(836,'MTY1NzAyNzMxMA==',NULL,11,1,'','2022-07-05 19:01:38',NULL,'2022-07-05 07:20:08',2);
/*!40000 ALTER TABLE `candidate_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate_remark`
--

DROP TABLE IF EXISTS `candidate_remark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate_remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` varchar(255) NOT NULL,
  `result` varchar(50) NOT NULL DEFAULT '3' COMMENT '1:pass\r\n2:fail\r\n3:pending',
  `feedback` text DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1-active 2-deleted',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_remark`
--

LOCK TABLES `candidate_remark` WRITE;
/*!40000 ALTER TABLE `candidate_remark` DISABLE KEYS */;
INSERT INTO `candidate_remark` VALUES (49,'MTY1NjU2Nzk1Mw==','2','afdasdfgasdgadsg',1,'2022-06-30 12:33:49',NULL,NULL),(50,'MTY1NzAxMDUyOA==','3',NULL,1,'2022-07-05 14:14:34',NULL,NULL),(51,'MTY1NzAxMTE2OA==','3',NULL,1,'2022-07-05 14:24:22',NULL,NULL),(52,'MTY1NzAxNTY1MA==','3',NULL,1,'2022-07-05 15:44:32',NULL,NULL),(53,'MTY1NzAxNzY0NA==','3',NULL,1,'2022-07-05 16:43:52',NULL,NULL),(54,'MTY1NzAxOTk3MA==','3',NULL,1,'2022-07-05 18:17:42',NULL,NULL),(55,'MTY1NzAyNTQxOQ==','3',NULL,2,'2022-07-05 18:24:01',NULL,'2022-07-05 06:31:16'),(56,'MTY1NzAyNTQxOQ==','3',NULL,2,'2022-07-05 18:24:38',NULL,'2022-07-05 06:31:16'),(57,'MTY1NzAyNjEzMA==','3',NULL,1,'2022-07-05 18:49:29',NULL,NULL),(58,'MTY1NzAyNzMxMA==','3',NULL,2,'2022-07-05 19:08:32',NULL,'2022-07-05 07:20:08');
/*!40000 ALTER TABLE `candidate_remark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidate_test_link`
--

DROP TABLE IF EXISTS `candidate_test_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidate_test_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `phone` varchar(254) NOT NULL,
  `test_category_id` int(11) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `link` varchar(254) NOT NULL COMMENT 'base64_encode(time())',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1:active 0:inactive 2:deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidate_test_link`
--

LOCK TABLES `candidate_test_link` WRITE;
/*!40000 ALTER TABLE `candidate_test_link` DISABLE KEYS */;
INSERT INTO `candidate_test_link` VALUES (30,'Atul','atul@metricoidtech.com','9865748569',2,'MTY1MzM3Nzg5Mg==',2,'/test/MTY1MzM3Nzg5Mg==','2022-05-24 10:45:22','2022-06-15 12:37:49','2022-07-05 04:09:45',2),(31,'Shubham','shubham@metricoidtech.com','9865748569',2,'MTY1MzM3MTAwMQ==',2,'/test/MTY1MzM3MTAwMQ==','2022-05-24 11:13:21','2022-06-15 12:38:43','2022-07-05 04:09:50',2),(32,'jivan','jivan123@gmail.com','8695748567',3,'MTY1MzM3Njk4Nw==',2,'/test/MTY1MzM3Njk4Nw==','2022-05-24 11:16:08','2022-06-10 11:37:36','2022-07-05 04:09:53',2),(33,'ilyas bhagvan','ilyas@gmail.com','8695748567',3,'MTY1MzM4MzQ5MQ==',6,'/test/MTY1MzM4MzQ5MQ==','2022-05-24 11:43:32','2022-06-10 10:56:58','2022-07-05 04:10:01',2),(44,'atul','atulilake123@gmail.com','5434455456',1,'MTY1NDg0MTczNg==',7,'/test/MTY1NDg0MTczNg==','2022-06-10 11:45:36',NULL,'2022-07-05 04:10:04',2),(45,'atul','atulilake123@gmail.com','5434455456',1,'MTY1NDg0MTk1Mw==',8,'/test/MTY1NDg0MTk1Mw==','2022-06-10 11:49:13',NULL,'2022-07-05 04:10:07',2),(46,'abc','abc@gmail.com','548845645648',2,'MTY1NTI3NDY1OQ==',2,'/test/MTY1NTI3NDY1OQ==','2022-06-15 12:00:59',NULL,'2022-06-15 12:43:13',2),(47,'pqr','pqr@gmail.com','8596475487',4,'MTY1NTI5NDU1Nw==',7,'/test/MTY1NTI5NDU1Nw==','2022-06-15 17:32:37',NULL,NULL,0),(48,'Metricoid','atul@metricoidtech.com','5456498884',2,'MTY1NjMzODk5OA==',6,'/test/MTY1NjMzODk5OA==','2022-06-27 19:39:58',NULL,NULL,0),(49,'Abc','abc@gmail.com','8695748567',3,'MTY1NjQyNTg2NQ==',2,'/test/MTY1NjQyNTg2NQ==','2022-06-28 19:47:45',NULL,NULL,0),(50,'Arvind','arvind1234@gmail.com','8562147565',1,'MTY1NjQ3ODAyNw==',6,'/test/MTY1NjQ3ODAyNw==','2022-06-29 10:17:07',NULL,NULL,0),(51,'Atul','atul@metricoidtech.com','8562147565',1,'MTY1NjUxMzc2MA==',2,'/test/MTY1NjUxMzc2MA==','2022-06-29 20:12:40',NULL,NULL,0),(52,'Metricoid','atul@metricoidtech.com','8695748567',1,'MTY1NjU2Nzk1Mw==',2,'/test/MTY1NjU2Nzk1Mw==','2022-06-30 11:15:53',NULL,NULL,0),(53,'atul','atul@metricoidtech.com','8695748567',1,'MTY1NzAxMDUyOA==',2,'/test/MTY1NzAxMDUyOA==','2022-07-05 14:12:08',NULL,NULL,0),(54,'Metricoid','atul@metricoidtech.com','8695748567',2,'MTY1NzAxMTE2OA==',6,'/test/MTY1NzAxMTE2OA==','2022-07-05 14:22:48',NULL,NULL,0),(55,'Shubham','shubham@metricoidtech.com','545345458',3,'MTY1NzAxNTY1MA==',6,'/test/MTY1NzAxNTY1MA==','2022-07-05 15:37:30',NULL,NULL,0),(56,'jivan','jivan@gmail.com','955645584',1,'MTY1NzAxNzY0NA==',2,'/test/MTY1NzAxNzY0NA==','2022-07-05 16:10:44',NULL,NULL,0),(57,'atul','atul1@metricoidtech.com','8695748567',1,'MTY1NzAxOTk3MA==',6,'/test/MTY1NzAxOTk3MA==','2022-07-05 16:49:30',NULL,NULL,0),(58,'Metricoid','career@metricoidtech.com','8695748567',1,'MTY1NzAyNTQxOQ==',2,'/test/MTY1NzAyNTQxOQ==','2022-07-05 18:20:19',NULL,NULL,0),(59,'jivan','jivan@gmail.com','996854756',2,'MTY1NzAyNjEzMA==',2,'/test/MTY1NzAyNjEzMA==','2022-07-05 18:32:10',NULL,NULL,0),(60,'Shubham','shubham@metricoidtech.com','999749847',3,'MTY1NzAyNzMxMA==',2,'/test/MTY1NzAyNzMxMA==','2022-07-05 18:51:50',NULL,NULL,0);
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
  `company_id` int(11) NOT NULL,
  `active` int(2) DEFAULT 1 COMMENT '0-inactive 1-active 2-deleted',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'PHP',30,'PHP Description\r\n\'a;sl;af;\r\nl;\'fsakflklf\'\r\nslAKDf\'jojfjaskfjksd',2,1,'2022-06-09 10:43:49',NULL,NULL),(2,'React_js',20,'React_js Description\r\nasdmkfd;ljkf;klasf\r\nsdfklajhnskj;asd\r\nskdjladhgjaskd\r\nmfnkjlas',6,1,'2022-06-09 10:43:49',NULL,NULL),(3,'Python',30,'Python :-\njkbgfuhlaegy777777ufawgefy78gefujbdsluaygfy7tguif Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, veritatis? Unde vitae neque, consequatur ipsam, explicabo nihil accusamus ab beatae aspernatur amet dolores. Distinctio sint architecto dignissimos itaque repellendus velit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, veritatis? Unde vitae neque, consequatur ipsam, explicabo nihil accusamus ab beatae aspernatur amet dolores. Distinctio sint architecto dignissimos itaque repellendus velit.',2,1,'2022-06-09 10:43:49',NULL,NULL),(4,'JavaScript',20,'javaScript\r\njbahkdsgldf',2,1,'2022-06-09 10:43:49',NULL,'2022-06-14 04:14:40'),(7,'Java',30,'java:-\r\nfnhausilfgfabhefhsdfa',2,1,'2022-06-14 16:25:03',NULL,NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` int(2) DEFAULT 1 COMMENT '0-inactive 1-active 2-deleted',
  `added_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (2,'Metricoid Technology Solution pvt.Ltd.','career@metricoidtech.com','Near Nilje Railway Station, Dombiwali-west',1,'2022-06-09 15:48:43','2022-06-10 00:00:00',NULL),(6,'ABCD','abcd@gmail.com','Mumbai',1,'2022-06-10 10:02:14',NULL,NULL),(7,'PQRS','pqrs@gmail.com','Pune',1,'2022-06-10 10:03:12',NULL,NULL),(8,'LSBC','lsbc@gmail.com','USA',1,'2022-06-10 10:03:48','2022-06-10 00:00:00',NULL);
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
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
  `candidate_id` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=476 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip_details`
--

LOCK TABLES `ip_details` WRITE;
/*!40000 ALTER TABLE `ip_details` DISABLE KEYS */;
INSERT INTO `ip_details` VALUES (455,'MTY1MzM3MTAwMQ==','127.0.0.1',2,'2022-06-07 07:09:22'),(456,'MTY1MzM3Njk4Nw==','127.0.0.1',3,'2022-06-07 07:20:10'),(457,'MTY1NjMzODk5OA==','127.0.0.1',2,'2022-06-27 07:44:48'),(458,'MTY1NTI5NDU1Nw==','127.0.0.1',4,'2022-06-28 11:24:54'),(459,'MTY1MzM3Nzg5Mg==','127.0.0.1',2,'2022-06-28 12:14:24'),(460,'MTY1NDg0MTk1Mw==','127.0.0.1',1,'2022-06-28 12:35:17'),(461,'MTY1MzM4MzQ5MQ==','127.0.0.1',3,'2022-06-28 12:41:36'),(462,'MTY1NDg0MTczNg==','127.0.0.1',1,'2022-06-28 07:40:49'),(463,'MTY1NjQyNTg2NQ==','127.0.0.1',3,'2022-06-28 07:48:13'),(464,'MTY1NjQ3ODAyNw==','127.0.0.1',1,'2022-06-29 10:19:50'),(465,'MTY1NjUxMzc2MA==','127.0.0.1',1,'2022-06-29 08:13:32'),(466,'MTY1NjU2Nzk1Mw==','127.0.0.1',1,'2022-06-30 11:16:16'),(467,'MTY1NjU2Nzk1Mw==','127.0.0.1',1,'2022-06-30 11:26:04'),(468,'MTY1NzAxMDUyOA==','127.0.0.1',1,'2022-07-05 02:12:21'),(469,'MTY1NzAxMTE2OA==','127.0.0.1',2,'2022-07-05 02:23:04'),(470,'MTY1NzAxNTY1MA==','127.0.0.1',3,'2022-07-05 03:37:51'),(471,'MTY1NzAxNzY0NA==','127.0.0.1',1,'2022-07-05 04:11:03'),(472,'MTY1NzAxOTk3MA==','127.0.0.1',1,'2022-07-05 04:49:42'),(473,'MTY1NzAyNTQxOQ==','127.0.0.1',1,'2022-07-05 06:20:44'),(474,'MTY1NzAyNjEzMA==','127.0.0.1',2,'2022-07-05 06:42:27'),(475,'MTY1NzAyNzMxMA==','127.0.0.1',3,'2022-07-05 06:52:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_08_19_000000_create_failed_jobs_table',1),(9,'2019_12_14_000001_create_personal_access_tokens_table',1),(11,'2022_06_27_170853_add_provider_id_to_users',2);
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
-- Table structure for table `question_options`
--

DROP TABLE IF EXISTS `question_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `option` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_enabled` int(11) NOT NULL DEFAULT 1 COMMENT '1-active\r\n0-inactive\r\n2-deleted',
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_options`
--

LOCK TABLES `question_options` WRITE;
/*!40000 ALTER TABLE `question_options` DISABLE KEYS */;
INSERT INTO `question_options` VALUES (1,25,'Drek Kolkevi','2022-06-29 15:48:39',NULL,NULL,1),(2,25,'Rasmus Lerdrof','2022-06-29 15:48:42',NULL,NULL,1),(3,25,'List Barely','2022-06-29 15:48:45',NULL,NULL,1),(4,25,'None of the above','2022-06-29 15:48:48',NULL,NULL,1),(5,26,'! (Exclamation)','2022-06-29 15:56:28',NULL,NULL,1),(6,26,'$ (Dollar)','2022-06-29 16:00:41',NULL,NULL,1),(7,26,'& (Ampersand)','2022-06-29 16:00:44',NULL,NULL,1),(8,26,'# (Hash)','2022-06-29 16:00:48',NULL,NULL,1),(9,27,'.php','2022-06-29 16:01:54',NULL,NULL,1),(10,27,'.hphp','2022-06-29 16:01:56',NULL,NULL,1),(11,27,'.xml','2022-06-29 16:01:59',NULL,NULL,1),(12,27,'.html','2022-06-29 16:02:02',NULL,NULL,1),(13,28,'Extern','2022-06-29 16:04:40',NULL,NULL,1),(14,28,'Local','2022-06-29 16:04:47',NULL,NULL,1),(15,28,'Static','2022-06-29 16:04:49',NULL,NULL,1),(16,28,'Global','2022-06-29 16:04:52',NULL,NULL,1);
/*!40000 ALTER TABLE `question_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_solution`
--

DROP TABLE IF EXISTS `question_solution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_solution` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-active 2-deleted',
  PRIMARY KEY (`quiz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_solution`
--

LOCK TABLES `question_solution` WRITE;
/*!40000 ALTER TABLE `question_solution` DISABLE KEYS */;
INSERT INTO `question_solution` VALUES (1,25,2,'2022-06-29 16:25:12',NULL,NULL,1),(2,26,6,'2022-06-29 16:25:12',NULL,NULL,1),(3,27,9,'2022-06-29 16:25:15',NULL,NULL,1),(4,28,13,'2022-06-29 16:25:15',NULL,NULL,1);
/*!40000 ALTER TABLE `question_solution` ENABLE KEYS */;
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
  `type` int(11) DEFAULT 1 COMMENT '1-descriptive\r\n2-objective\r\n3-code',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT 'active-1\r\ninactive-0\r\ndeleted-2',
  PRIMARY KEY (`id`),
  KEY `questions` (`questions`(768))
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,'How to print even numbers between two numbers in PHP ?',3,'2022-06-10 11:54:24','2022-07-05 06:33:33','2022-06-14 05:23:36',1),(2,1,'How to print reverse number in PHP ?',3,'2022-06-10 11:54:24','2022-07-05 06:33:23',NULL,1),(3,1,'How to find palindrome number in PHP ?',3,'2022-06-10 11:54:24','2022-07-05 06:33:43',NULL,1),(4,1,'How to find Armstrong number in PHP ?',3,'2022-06-10 11:54:24','2022-07-05 06:33:57',NULL,1),(5,1,'How to print Fibonacci series in PHP ?',3,'2022-06-10 11:54:24','2022-07-05 06:34:04',NULL,1),(6,1,'How to print star pattern in PHP ?',3,'2022-06-10 11:54:24','2022-07-05 06:34:12',NULL,1),(7,1,'How to print chessboard in PHP ?',3,'2022-06-10 11:54:24','2022-06-29 02:44:24','2022-06-10 12:06:40',1),(8,2,'What is an event in React?',1,'2022-06-10 11:54:24',NULL,NULL,1),(9,2,'What are synthetic events in React?',1,'2022-06-10 11:54:24',NULL,NULL,1),(10,2,'Why is there a need for using keys in Lists?',1,'2022-06-10 11:54:24',NULL,NULL,1),(11,2,'What are the components in React?',1,'2022-06-10 11:54:24',NULL,NULL,1),(12,2,'What is the use of render() in React?',1,'2022-06-10 11:54:24',NULL,NULL,1),(13,3,'What is the difference between list and tuples in Python?',1,'2022-06-10 11:54:24',NULL,NULL,1),(14,3,'Write a python program to print all even numbers between 1 to 100 ?',3,'2022-06-10 11:54:24','2022-07-05 06:35:28',NULL,1),(15,3,'Write a program to print star pattern in python ?',3,'2022-06-10 11:54:24','2022-07-05 06:35:51',NULL,1),(16,4,'Write a program to print Fibonacci series in javaScript ?\r\n',3,'2022-06-10 11:54:24',NULL,NULL,1),(17,4,'Write a program to find palindrome number in javascript ?',3,'2022-06-10 11:54:24',NULL,NULL,1),(25,1,'Who is known as the father of PHP?',2,'2022-06-29 15:40:29',NULL,NULL,1),(26,1,'Variable name in PHP starts with -',2,'2022-06-29 15:40:36',NULL,NULL,1),(27,1,'Which of the following is the default file extension of PHP?',2,'2022-06-29 15:40:43',NULL,NULL,1),(28,1,' Which of the following is not a variable scope in PHP?',2,'2022-06-29 15:40:46',NULL,NULL,1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_queans`
--

DROP TABLE IF EXISTS `temp_queans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_queans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` varchar(255) NOT NULL,
  `questions` text NOT NULL,
  `answers` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_queans`
--

LOCK TABLES `temp_queans` WRITE;
/*!40000 ALTER TABLE `temp_queans` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_queans` ENABLE KEYS */;
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
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `user` int(2) NOT NULL DEFAULT 0 COMMENT '1-superadmin\r\n0-others',
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '0-inactive 1-active 2-deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Atul','atul@metricoidtech.com',NULL,NULL,NULL,'$2y$10$Q7cHWBTyMCqonh/nCbj5aOxplyOOdHUoUHJh/rBYWH8fasaoqSV7S','8657487549','Koparkhairane',2,NULL,'2022-05-09 11:51:45','2022-06-10 05:45:27',NULL,1,1),(3,'Shubham','shubham@metricoidtech.com',NULL,NULL,NULL,'$2y$10$BRenuMlogdvJkjnTBhaQIOogVV8Fexar39jw3syvSjDzFdIZb/5nq','9658745865','Panvel, Navi Mumbai',2,NULL,'2022-06-09 10:29:52','2022-06-13 19:21:27',NULL,0,1),(14,'Arvind','arvind1234@gmail.com',NULL,NULL,NULL,'$2y$10$y9nmvZyVJPcPbsrrrx.viuY8Rwt.mZ3iEMcCb/qr6FwoZhYtMm0va','8562147565','Solhapur',2,NULL,'2022-06-13 18:30:46','2022-06-13 18:32:20',NULL,0,1),(15,'Jivan','jivan@gmail.com',NULL,NULL,NULL,'$2y$10$nxOinMagWIgYLGPy4A.ZB./aipKibbQwO3qoa7N6lgdPF8eqxMFxi','5689547589','Nerul',6,NULL,'2022-06-13 18:50:44',NULL,NULL,0,1);
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

-- Dump completed on 2022-07-05 19:41:39
