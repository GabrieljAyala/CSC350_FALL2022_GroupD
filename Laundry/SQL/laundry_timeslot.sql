-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laundry
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `timeslot`
--

DROP TABLE IF EXISTS `timeslot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timeslot` (
  `Reservation_Date` varchar(45) NOT NULL,
  `Is_Reserved` tinyint DEFAULT NULL,
  PRIMARY KEY (`Reservation_Date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timeslot`
--

LOCK TABLES `timeslot` WRITE;
/*!40000 ALTER TABLE `timeslot` DISABLE KEYS */;
INSERT INTO `timeslot` VALUES ('Friday 0-2am',NULL),('Friday 10-12pm',NULL),('Friday 10pm-12am',NULL),('Friday 12-2pm',NULL),('Friday 2-4am',NULL),('Friday 2-4pm',NULL),('Friday 4-6am',NULL),('Friday 4-6pm',NULL),('Friday 6-8am',NULL),('Friday 6-8pm',NULL),('Friday 8-10am',NULL),('Friday 8-10pm',NULL),('Monday 0-2am',NULL),('Monday 10-12pm',NULL),('Monday 10pm-12am',NULL),('Monday 12-2pm',NULL),('Monday 2-4am',NULL),('Monday 2-4pm',NULL),('Monday 4-6am',NULL),('Monday 4-6pm',NULL),('Monday 6-8am',NULL),('Monday 6-8pm',NULL),('Monday 8-10am',NULL),('Monday 8-10pm',NULL),('Saturday 0-2am',NULL),('Saturday 10-12pm',NULL),('Saturday 10pm-12am',NULL),('Saturday 12-2pm',NULL),('Saturday 2-4am',NULL),('Saturday 2-4pm',NULL),('Saturday 4-6am',NULL),('Saturday 4-6pm',NULL),('Saturday 6-8am',NULL),('Saturday 6-8pm',NULL),('Saturday 8-10am',NULL),('Saturday 8-10pm',NULL),('Sunday 0-2am',NULL),('Sunday 10-12pm',NULL),('Sunday 10pm-12am',NULL),('Sunday 12-2pm',NULL),('Sunday 2-4am',NULL),('Sunday 2-4pm',NULL),('Sunday 4-6am',NULL),('Sunday 4-6pm',NULL),('Sunday 6-8am',NULL),('Sunday 6-8pm',NULL),('Sunday 8-10am',NULL),('Sunday 8-10pm',NULL),('Thursday 0-2am',1),('Thursday 10-12pm',NULL),('Thursday 10pm-12am',NULL),('Thursday 12-2pm',NULL),('Thursday 2-4am',NULL),('Thursday 2-4pm',NULL),('Thursday 4-6am',NULL),('Thursday 4-6pm',NULL),('Thursday 6-8am',NULL),('Thursday 6-8pm',NULL),('Thursday 8-10am',NULL),('Thursday 8-10pm',NULL),('Tuesday 0-2am',NULL),('Tuesday 10-12pm',NULL),('Tuesday 10pm-12am',NULL),('Tuesday 12-2pm',NULL),('Tuesday 2-4am',NULL),('Tuesday 2-4pm',NULL),('Tuesday 4-6am',NULL),('Tuesday 4-6pm',NULL),('Tuesday 6-8am',NULL),('Tuesday 6-8pm',NULL),('Tuesday 8-10am',NULL),('Tuesday 8-10pm',NULL),('Wednesday 0-2am',NULL),('Wednesday 10-12pm',NULL),('Wednesday 10pm-12am',NULL),('Wednesday 12-2pm',NULL),('Wednesday 2-4am',NULL),('Wednesday 2-4pm',NULL),('Wednesday 4-6am',NULL),('Wednesday 4-6pm',NULL),('Wednesday 6-8am',1),('Wednesday 6-8pm',NULL),('Wednesday 8-10am',NULL),('Wednesday 8-10pm',NULL);
/*!40000 ALTER TABLE `timeslot` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-19 14:13:25
