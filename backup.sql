-- MySQL dump 10.13  Distrib 8.0.43, for Linux (aarch64)
--
-- Host: localhost    Database: crud
-- ------------------------------------------------------
-- Server version	8.0.43

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2025_10_09_000001_create_users_table',1),(2,'2025_10_17_071036_create_sessions_table',1),(4,'2025_10_22_000001_create_products_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'Lamp','Desktop lamp',642,'2025-10-22 10:56:42','2025-10-22 10:56:42'),(3,'Table','small one',34,'2025-10-22 10:56:57','2025-10-22 10:56:57'),(4,'Chair','antique',3,'2025-10-22 10:57:29','2025-10-22 10:57:29'),(5,'Mouse','Bluetooth',33,'2025-10-22 10:58:46','2025-10-22 10:58:46'),(6,'Mouse wireless','2.4G',4,'2025-10-22 10:59:34','2025-10-22 10:59:34'),(7,'Mouse desktop','desktop',45,'2025-10-22 10:59:57','2025-10-22 10:59:57'),(8,'Earphones','Wireless',56,'2025-10-22 11:00:18','2025-10-22 11:00:18'),(9,'Headphones','Bluetooth',33,'2025-10-22 11:00:45','2025-10-22 11:00:45'),(10,'Earpods','Apple',856,'2025-10-22 11:01:08','2025-10-22 11:01:08'),(11,'Cellphone','Nokia',999,'2025-10-22 11:01:24','2025-10-22 11:01:24'),(12,'Sofa','The big one',4,'2025-10-22 11:01:48','2025-10-22 11:01:48');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('EO8pIZv1S3NXwAYyxsbhtLz6RVgWckuDVO7o3KHK',NULL,'192.168.65.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUF6NG5nU3NuZVROUXROb1FjR09kZlhUb2tuOFhNTG85eTNGYWs3bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4OC91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1761146114);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ihor Kupenko','male','i.kupenko@gmail.com','Marbella',604380372,'2025-10-20 15:02:55','2025-10-20 15:02:55'),(2,'Maria Kupenko Fedosenko','female','mar.kup@gmail.com','Marbella',676447111,'2025-10-20 15:08:21','2025-10-20 16:05:46'),(3,'qqqqq','male','qqq@gmail.com','qqq',123,'2025-10-20 16:16:25','2025-10-20 16:16:25'),(4,'wwww','female','wwww@gmail.com','wwww',1234,'2025-10-20 16:16:47','2025-10-20 16:16:47'),(5,'eee','female','eee@gmail.com','eee',321,'2025-10-20 16:17:03','2025-10-20 16:17:03'),(6,'rrr','male','rrr@gmail.com','rrr',234,'2025-10-20 16:17:25','2025-10-20 16:17:25'),(7,'ttt','female','ttt@gmail.com','ttt',343,'2025-10-20 16:17:44','2025-10-20 16:17:44'),(8,'aaaa','male','aaaa@gmail.com','aaaa',1111,'2025-10-20 16:18:06','2025-10-20 16:18:06'),(9,'sssss','female','sssss@gmail.com','sssss',4321,'2025-10-20 16:18:22','2025-10-20 16:18:22'),(10,'ddd','male','ddd@gmail.com','ddd',231,'2025-10-20 16:18:41','2025-10-20 16:18:41'),(11,'ffff','female','ffff@hotmail.com','ffff',43213,'2025-10-20 16:18:59','2025-10-20 16:18:59'),(12,'xxxx','male','xxxx@gmail.com','xxxx',543,'2025-10-20 16:19:33','2025-10-20 16:19:33'),(13,'cccc','female','cccc@i.ua','cccc',5647,'2025-10-20 16:20:06','2025-10-20 16:20:06'),(14,'vvv','male','vvv@gmail.com','vvv',548,'2025-10-20 16:20:26','2025-10-20 16:20:26'),(15,'bbb','male','bbb@i.ua','bbb',834,'2025-10-20 16:20:40','2025-10-20 16:20:40'),(16,'gggg','male','gggg@gmail.com','gggg',574,'2025-10-20 16:20:56','2025-10-20 16:20:56'),(17,'hhh','female','hhh@gmail.com','hhh',493,'2025-10-20 16:21:13','2025-10-20 16:21:13'),(18,'yyyy','male','yyyy@gmail.com','yyyy',948,'2025-10-20 16:21:40','2025-10-20 16:21:40'),(19,'ppp','male','ppp@i.ua','ppp',5893,'2025-10-20 16:21:54','2025-10-20 16:21:54'),(20,'jdf','male','jdf@gmail.com','fdf',859,'2025-10-20 16:22:12','2025-10-20 16:22:12'),(21,'qwer','male','qwer@gmail.com','qwer',98123,'2025-10-20 16:22:30','2025-10-20 16:22:30');
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

-- Dump completed on 2025-10-22 15:43:16
