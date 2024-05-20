-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Konto
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorites` (
  `user_id` int NOT NULL,
  `film_id` int NOT NULL,
  PRIMARY KEY (`user_id`,`film_id`),
  KEY `film_id` (`film_id`),
  CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `filmy` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
INSERT INTO `favorites` VALUES (1,1),(1,2),(1,3);
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filmy`
--

DROP TABLE IF EXISTS `filmy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filmy` (
  `id` int NOT NULL,
  `tytuł` varchar(200) NOT NULL,
  `gatunek` varchar(100) DEFAULT NULL,
  `data_produkcji` date DEFAULT NULL,
  `ocena` decimal(3,1) DEFAULT NULL,
  `czas_trwania` int DEFAULT NULL,
  `wiek` int DEFAULT NULL,
  `główne_role` varchar(400) DEFAULT NULL,
  `opis` text,
  `logo` text,
  `tło` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmy`
--

LOCK TABLES `filmy` WRITE;
/*!40000 ALTER TABLE `filmy` DISABLE KEYS */;
INSERT INTO `filmy` VALUES (1,'World War Z','Tragedy','2021-06-20',3.6,7020,16,'Brad Pitt, Mireille Enos, Daniella Kertesz','Kiedy wybuch epidemii zombie zagraża zniszczeniem całej ludzkości, były oficer śledczy z ONZ wyrusza w niebezpieczną podróż dookoła świata, by odnaleźć źródło wirusa.','./img/wwzlogo.png','./img/worldwarZ.png'),(2,'Boże Ciało','Komedia','2019-02-24',4.6,6800,16,'Bartosz Bielenia,Aleksandra Konieczna,Eliza Rycembel','Mężczyzna, który podczas pobytu w poprawczaku przechodzi duchową przemianę, przeprowadza się do małego miasteczka, gdzie zaczyna udawać księdza.','./img/bozecialologo.jpg','./img/bozecialo.jpg'),(3,'Klaus','Bajka','1998-09-10',4.0,7500,7,'Jason Schwartzman,J.K. Simmons,Rashida Jones','Samolubny listonosz i samotny twórca zabawek nawiązują niezwykłą przyjaźń, dając radość mieszkańcom mroźnego i mrocznego miasteczka, którzy bardzo jej potrzebują.','./img/Klauslogo.png','./img/Klaus.png'),(4,'Spirited Away: W krainie Bogów','Dla dzieci','2001-10-09',4.4,7500,10,'Rumi Hiiragi,Miyu Irino,Mari Natsuki','Chihiro wkracza do magicznego świata, w którym rządzi wiedźma zmieniająca w zwierzęta wszystkich sprzeciwiających się jej rozkazom.','./img/spiritedawaylogo.png','./img/spiritedaway.png');
/*!40000 ALTER TABLE `filmy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Stefan','1234','Stefan.Indyk@onet.pl'),(2,'Wojtek','Wojtek123','Wojteknowak123@o2.pl'),(6,'Amadeusz','','yabiti7621@qiradio.com');
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

-- Dump completed on 2024-05-20 12:36:52
