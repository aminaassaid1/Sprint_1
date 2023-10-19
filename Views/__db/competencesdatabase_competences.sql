-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: competencesdatabase
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
-- Table structure for table `competences`
--

DROP TABLE IF EXISTS `competences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `competences` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `REFERENCE` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `CODE` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `NOM` text COLLATE utf8mb4_general_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competences`
--

LOCK TABLES `competences` WRITE;
/*!40000 ALTER TABLE `competences` DISABLE KEYS */;
INSERT INTO `competences` VALUES (1,'C1','Maquette','Maquetter une application mobile',' Cette compétence vous permettra de concevoir des maquettes d\'applications mobiles, aidant ainsi à visualiser et à planifier l\'interface utilisateur'),(2,'C2','Base Données','Manipuler une base de données - perfectionnement',' Cette compétence vous permettra de maîtriser la manipulation avancée des bases de données, ce qui est essentiel pour stocker et gérer des informations'),(3,'C3','back-end','Développer la partie back-end d’une application web ou web mobile - perfectionnement','Cette compétence vous permettra de créer et de gérer la logique côté serveur d\'applications web et mobiles avancées'),(4,'C4','Gestion','Collaborer à la gestion d’un projet informatique et à l’organisation de l’environnement de développement - perfectionnement','Cette compétence vous préparera à jouer un rôle essentiel dans la gestion de projets informatiques et l\'optimisation de l\'environnement de développement'),(5,'C5','mobile Native','Développer une application mobile native, with Android and React Native','Cette compétence vous permettra de créer des applications mobiles performantes pour les plateformes Android et React Native'),(6,'C6','Tests','Préparer et exécuter les plans de tests d’une application','Cette compétence vous aidera à élaborer des stratégies de test efficaces pour garantir la qualité des applications'),(7,'C7','Deploiement','Préparer et exécuter le déploiement d’une application web et mobile - perfectionnement','Cette compétence vous permettra de maîtriser le processus de déploiement d\'applications web et mobiles avancées'),(28,'es','Provident minus nos','Nisi ullam culpa vo','Velit magnam ipsum n'),(29,'Eu','tttttttttt','Et dicta nulla velit','<p><strong>ggggggggggg</strong></p>'),(30,'t','684265','intissar','ttttttt'),(31,'q','qqq','intissar','qqqqqqqqq');
/*!40000 ALTER TABLE `competences` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-19  3:01:53
