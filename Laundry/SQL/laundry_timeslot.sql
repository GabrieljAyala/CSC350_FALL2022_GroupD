-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: laundry
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
INSERT INTO `timeslot` VALUES ('Friday 0-2am',0),('Friday 10-12pm',0),('Friday 10pm-12am',1),('Friday 12-2pm',1),('Friday 2-4am',0),('Friday 2-4pm',0),('Friday 4-6am',0),('Friday 4-6pm',0),('Friday 6-8am',0),('Friday 6-8pm',0),('Friday 8-10am',0),('Friday 8-10pm',0),('Monday 0-2am',0),('Monday 10-12pm',0),('Monday 10pm-12am',1),('Monday 12-2pm',1),('Monday 2-4am',0),('Monday 2-4pm',0),('Monday 4-6am',0),('Monday 4-6pm',0),('Monday 6-8am',0),('Monday 6-8pm',0),('Monday 8-10am',1),('Monday 8-10pm',0),('Saturday 0-2am',0),('Saturday 10-12pm',0),('Saturday 10pm-12am',0),('Saturday 12-2pm',0),('Saturday 2-4am',0),('Saturday 2-4pm',0),('Saturday 4-6am',0),('Saturday 4-6pm',1),('Saturday 6-8am',0),('Saturday 6-8pm',1),('Saturday 8-10am',1),('Saturday 8-10pm',0),('Sunday 0-2am',1),('Sunday 10-12pm',0),('Sunday 10pm-12am',1),('Sunday 12-2pm',0),('Sunday 2-4am',0),('Sunday 2-4pm',0),('Sunday 4-6am',0),('Sunday 4-6pm',1),('Sunday 6-8am',1),('Sunday 6-8pm',0),('Sunday 8-10am',1),('Sunday 8-10pm',1),('Thursday 0-2am',0),('Thursday 10-12pm',0),('Thursday 10pm-12am',0),('Thursday 12-2pm',1),('Thursday 2-4am',1),('Thursday 2-4pm',0),('Thursday 4-6am',1),('Thursday 4-6pm',1),('Thursday 6-8am',1),('Thursday 6-8pm',0),('Thursday 8-10am',0),('Thursday 8-10pm',0),('Tuesday 0-2am',1),('Tuesday 10-12pm',0),('Tuesday 10pm-12am',1),('Tuesday 12-2pm',0),('Tuesday 2-4am',0),('Tuesday 2-4pm',0),('Tuesday 4-6am',0),('Tuesday 4-6pm',0),('Tuesday 6-8am',0),('Tuesday 6-8pm',0),('Tuesday 8-10am',1),('Tuesday 8-10pm',0),('Wednesday 0-2am',1),('Wednesday 10-12pm',0),('Wednesday 10pm-12am',0),('Wednesday 12-2pm',0),('Wednesday 2-4am',0),('Wednesday 2-4pm',0),('Wednesday 4-6am',0),('Wednesday 4-6pm',0),('Wednesday 6-8am',0),('Wednesday 6-8pm',0),('Wednesday 8-10am',0),('Wednesday 8-10pm',0);
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

-- Dump completed on 2022-12-05 14:23:33
