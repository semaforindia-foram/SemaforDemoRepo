
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wp_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text,
  `event` varchar(42) NOT NULL,
  `user` varchar(60) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=226 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_revisr` WRITE;
/*!40000 ALTER TABLE `wp_revisr` DISABLE KEYS */;
INSERT INTO `wp_revisr` VALUES (1,'2019-12-05 10:59:36','Created new branch: dev','branch','admin'),(2,'2019-12-05 10:59:36','Checked out branch: dev.','branch','admin'),(3,'2019-12-05 11:00:53','There was an error committing the changes to the local repository.','error','admin'),(4,'2019-12-05 11:02:10','There was an error committing the changes to the local repository.','error','admin'),(5,'2019-12-05 11:03:16','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=74248e0&success=true\">#74248e0</a> to the local repository.','commit','admin'),(6,'2019-12-05 11:05:53','Error backing up the database.','error','admin'),(7,'2019-12-05 11:06:00','Error backing up the database.','error','admin'),(8,'2019-12-05 11:08:04','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=91ad0c6&success=true\">#91ad0c6</a> to the local repository.','commit','admin'),(9,'2019-12-05 11:08:26','Error pulling changes from the remote repository.','error','admin'),(10,'2019-12-05 11:21:05','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=28ec219&success=true\">#28ec219</a> to the local repository.','commit','admin'),(11,'2019-12-05 11:21:21','Error backing up the database.','error','admin'),(12,'2019-12-05 11:21:21','Checked out branch: master.','branch','admin'),(13,'2019-12-05 11:21:22','','error','admin'),(14,'2019-12-05 11:21:22','','error','admin'),(15,'2019-12-05 11:21:22','','error','admin'),(16,'2019-12-05 11:21:22','','error','admin'),(17,'2019-12-05 11:21:22','','error','admin'),(18,'2019-12-05 11:21:22','','error','admin'),(19,'2019-12-05 11:21:23','','error','admin'),(20,'2019-12-05 11:21:23','','error','admin'),(21,'2019-12-05 11:21:23','','error','admin'),(22,'2019-12-05 11:21:23','','error','admin'),(23,'2019-12-05 11:21:23','','error','admin'),(24,'2019-12-05 11:21:23','','error','admin'),(25,'2019-12-05 11:21:23','','error','admin'),(26,'2019-12-05 11:21:23','Error importing the database.','error','admin'),(27,'2019-12-05 11:21:48','Error backing up the database.','error','admin'),(28,'2019-12-05 11:21:48','There was an error checking out the branch. Check your configuration and try again.','error','admin'),(29,'2019-12-05 11:21:49','','error','admin'),(30,'2019-12-05 11:21:49','','error','admin'),(31,'2019-12-05 11:21:49','','error','admin'),(32,'2019-12-05 11:21:49','','error','admin'),(33,'2019-12-05 11:21:49','','error','admin'),(34,'2019-12-05 11:21:49','','error','admin'),(35,'2019-12-05 11:21:49','','error','admin'),(36,'2019-12-05 11:21:49','','error','admin'),(37,'2019-12-05 11:21:49','','error','admin'),(38,'2019-12-05 11:21:49','','error','admin'),(39,'2019-12-05 11:21:49','','error','admin'),(40,'2019-12-05 11:21:50','','error','admin'),(41,'2019-12-05 11:21:50','','error','admin'),(42,'2019-12-05 11:21:50','Error importing the database.','error','admin'),(43,'2019-12-05 11:22:00','Error backing up the database.','error','admin'),(44,'2019-12-05 11:22:01','There was an error checking out the branch. Check your configuration and try again.','error','admin'),(45,'2019-12-05 11:22:01','','error','admin'),(46,'2019-12-05 11:22:01','','error','admin'),(47,'2019-12-05 11:22:01','','error','admin'),(48,'2019-12-05 11:22:01','','error','admin'),(49,'2019-12-05 11:22:01','','error','admin'),(50,'2019-12-05 11:22:02','','error','admin'),(51,'2019-12-05 11:22:02','','error','admin'),(52,'2019-12-05 11:22:02','','error','admin'),(53,'2019-12-05 11:22:02','','error','admin'),(54,'2019-12-05 11:22:02','','error','admin'),(55,'2019-12-05 11:22:02','','error','admin'),(56,'2019-12-05 11:22:02','','error','admin'),(57,'2019-12-05 11:22:02','','error','admin'),(58,'2019-12-05 11:22:02','Error importing the database.','error','admin'),(59,'2019-12-05 11:22:36','Error backing up the database.','error','admin'),(60,'2019-12-05 11:22:37','There was an error checking out the branch. Check your configuration and try again.','error','admin'),(61,'2019-12-05 11:22:37','','error','admin'),(62,'2019-12-05 11:22:37','','error','admin'),(63,'2019-12-05 11:22:37','','error','admin'),(64,'2019-12-05 11:22:37','','error','admin'),(65,'2019-12-05 11:22:37','','error','admin'),(66,'2019-12-05 11:22:37','','error','admin'),(67,'2019-12-05 11:22:38','','error','admin'),(68,'2019-12-05 11:22:38','','error','admin'),(69,'2019-12-05 11:22:38','','error','admin'),(70,'2019-12-05 11:22:38','','error','admin'),(71,'2019-12-05 11:22:38','','error','admin'),(72,'2019-12-05 11:22:38','','error','admin'),(73,'2019-12-05 11:22:38','','error','admin'),(74,'2019-12-05 11:22:38','Error importing the database.','error','admin'),(75,'2019-12-05 11:23:15','Error backing up the database.','error','admin'),(76,'2019-12-05 11:23:20','Error backing up the database.','error','admin'),(77,'2019-12-05 11:23:20','There was an error checking out the branch. Check your configuration and try again.','error','admin'),(78,'2019-12-05 11:23:20','','error','admin'),(79,'2019-12-05 11:23:20','','error','admin'),(80,'2019-12-05 11:23:21','','error','admin'),(81,'2019-12-05 11:23:21','','error','admin'),(82,'2019-12-05 11:23:21','','error','admin'),(83,'2019-12-05 11:23:21','','error','admin'),(84,'2019-12-05 11:23:21','','error','admin'),(85,'2019-12-05 11:23:21','','error','admin'),(86,'2019-12-05 11:23:21','','error','admin'),(87,'2019-12-05 11:23:21','','error','admin'),(88,'2019-12-05 11:23:21','','error','admin'),(89,'2019-12-05 11:23:22','','error','admin'),(90,'2019-12-05 11:23:22','','error','admin'),(91,'2019-12-05 11:23:22','Error importing the database.','error','admin'),(92,'2019-12-05 11:24:05','Error backing up the database.','error','admin'),(93,'2019-12-05 11:24:05','There was an error checking out the branch. Check your configuration and try again.','error','admin'),(94,'2019-12-05 11:24:06','','error','admin'),(95,'2019-12-05 11:24:06','','error','admin'),(96,'2019-12-05 11:24:06','','error','admin'),(97,'2019-12-05 11:24:06','','error','admin'),(98,'2019-12-05 11:24:06','','error','admin'),(99,'2019-12-05 11:24:06','','error','admin'),(100,'2019-12-05 11:24:06','','error','admin'),(101,'2019-12-05 11:24:06','','error','admin'),(102,'2019-12-05 11:24:07','','error','admin'),(103,'2019-12-05 11:24:07','','error','admin'),(104,'2019-12-05 11:24:07','','error','admin'),(105,'2019-12-05 11:24:07','','error','admin'),(106,'2019-12-05 11:24:07','','error','admin'),(107,'2019-12-05 11:24:07','Error importing the database.','error','admin'),(108,'2019-12-05 11:38:43','Error pushing changes to the remote repository.','error','admin'),(109,'2019-12-05 11:42:37','Error backing up the database.','error','admin'),(110,'2019-12-05 11:42:48','Error backing up the database.','error','admin'),(111,'2019-12-05 11:42:49','Checked out branch: master.','branch','admin'),(112,'2019-12-05 11:42:49','','error','admin'),(113,'2019-12-05 11:42:49','','error','admin'),(114,'2019-12-05 11:42:49','','error','admin'),(115,'2019-12-05 11:42:49','','error','admin'),(116,'2019-12-05 11:42:49','','error','admin'),(117,'2019-12-05 11:42:49','','error','admin'),(118,'2019-12-05 11:42:50','','error','admin'),(119,'2019-12-05 11:42:50','','error','admin'),(120,'2019-12-05 11:42:50','','error','admin'),(121,'2019-12-05 11:42:50','','error','admin'),(122,'2019-12-05 11:42:50','','error','admin'),(123,'2019-12-05 11:42:50','','error','admin'),(124,'2019-12-05 11:42:50','','error','admin'),(125,'2019-12-05 11:42:50','Error importing the database.','error','admin'),(126,'2019-12-05 11:44:01','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=7bf7b8f&success=true\">#7bf7b8f</a> to the local repository.','commit','admin'),(127,'2019-12-05 11:44:14','Successfully pushed 1 commit to origin/master.','push','admin'),(128,'2019-12-05 11:44:22','Error backing up the database.','error','admin'),(129,'2019-12-05 11:45:17','Error merging branch dev into master.','error','admin'),(130,'2019-12-05 11:45:32','Error backing up the database.','error','admin'),(131,'2019-12-05 11:45:33','Error backing up the database.','error','admin'),(132,'2019-12-05 11:45:46','Error backing up the database.','error','admin'),(133,'2019-12-05 11:46:55','Error backing up the database.','error','admin'),(134,'2019-12-05 11:48:29','Error backing up the database.','error','admin'),(135,'2019-12-05 11:48:29','There was an error committing the changes to the local repository.','error','admin'),(136,'2019-12-05 11:48:44','Error backing up the database.','error','admin'),(137,'2019-12-05 11:48:44','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=eda2627&success=true\">#eda2627</a> to the local repository.','commit','admin'),(138,'2019-12-05 11:48:52','Successfully pushed 1 commit to origin/master.','push','admin'),(139,'2019-12-05 11:49:20','Successfully pushed 0 commits to origin/master.','push','admin'),(140,'2019-12-05 11:52:37','Error backing up the database.','error','admin'),(141,'2019-12-05 11:52:38','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=cae4c21&success=true\">#cae4c21</a> to the local repository.','commit','admin'),(142,'2019-12-05 11:52:43','Successfully pushed 1 commit to origin/master.','push','admin'),(143,'2019-12-05 11:53:23','Checked out branch: dev.','branch','admin'),(144,'2019-12-05 11:54:39','Successfully pushed 0 commits to origin/dev.','push','admin'),(145,'2019-12-05 11:54:51','Error backing up the database.','error','Revisr Bot'),(146,'2019-12-05 11:54:51','The daily backup was successful.','backup','Revisr Bot'),(147,'2019-12-05 11:55:12','Created new branch: Adding-User','branch','admin'),(148,'2019-12-05 11:55:13','Checked out branch: Adding-User.','branch','admin'),(149,'2019-12-05 11:58:20','Error backing up the database.','error','admin'),(150,'2019-12-05 11:58:21','There was an error committing the changes to the local repository.','error','admin'),(151,'2019-12-05 11:58:33','Error backing up the database.','error','admin'),(152,'2019-12-05 11:58:33','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=8ca758c&success=true\">#8ca758c</a> to the local repository.','commit','admin'),(153,'2019-12-05 11:58:38','Successfully pushed 1 commit to origin/Adding-User.','push','admin'),(154,'2019-12-05 11:59:14','Error backing up the database.','error','admin'),(155,'2019-12-05 11:59:15','Checked out branch: master.','branch','admin'),(156,'2019-12-05 11:59:15','','error','admin'),(157,'2019-12-05 11:59:15','','error','admin'),(158,'2019-12-05 11:59:16','','error','admin'),(159,'2019-12-05 11:59:16','','error','admin'),(160,'2019-12-05 11:59:16','','error','admin'),(161,'2019-12-05 11:59:16','','error','admin'),(162,'2019-12-05 11:59:16','','error','admin'),(163,'2019-12-05 11:59:16','','error','admin'),(164,'2019-12-05 11:59:16','','error','admin'),(165,'2019-12-05 11:59:17','','error','admin'),(166,'2019-12-05 11:59:17','','error','admin'),(167,'2019-12-05 11:59:17','','error','admin'),(168,'2019-12-05 11:59:17','','error','admin'),(169,'2019-12-05 11:59:17','Error importing the database.','error','admin'),(170,'2019-12-05 11:59:44','Error backing up the database.','error','admin'),(171,'2019-12-05 12:00:01','Error backing up the database.','error','admin'),(172,'2019-12-05 12:00:01','Checked out branch: Adding-User.','branch','admin'),(173,'2019-12-05 12:00:02','','error','admin'),(174,'2019-12-05 12:00:02','','error','admin'),(175,'2019-12-05 12:00:02','','error','admin'),(176,'2019-12-05 12:00:02','','error','admin'),(177,'2019-12-05 12:00:02','','error','admin'),(178,'2019-12-05 12:00:02','','error','admin'),(179,'2019-12-05 12:00:02','','error','admin'),(180,'2019-12-05 12:00:03','','error','admin'),(181,'2019-12-05 12:00:03','','error','admin'),(182,'2019-12-05 12:00:03','','error','admin'),(183,'2019-12-05 12:00:03','','error','admin'),(184,'2019-12-05 12:00:03','','error','admin'),(185,'2019-12-05 12:00:03','','error','admin'),(186,'2019-12-05 12:00:03','Error importing the database.','error','admin'),(187,'2019-12-05 12:00:15','Error backing up the database.','error','admin'),(188,'2019-12-05 12:06:25','Error backing up the database.','error','admin'),(189,'2019-12-05 12:18:13','Error backing up the database.','error','admin'),(190,'2019-12-05 12:18:47','Error backing up the database.','error','admin'),(191,'2019-12-05 12:18:48','Checked out branch: master.','branch','admin'),(192,'2019-12-05 12:18:48','','error','admin'),(193,'2019-12-05 12:18:48','','error','admin'),(194,'2019-12-05 12:18:48','','error','admin'),(195,'2019-12-05 12:18:48','','error','admin'),(196,'2019-12-05 12:18:49','','error','admin'),(197,'2019-12-05 12:18:49','','error','admin'),(198,'2019-12-05 12:18:49','','error','admin'),(199,'2019-12-05 12:18:49','','error','admin'),(200,'2019-12-05 12:18:49','','error','admin'),(201,'2019-12-05 12:18:49','','error','admin'),(202,'2019-12-05 12:18:49','','error','admin'),(203,'2019-12-05 12:18:49','','error','admin'),(204,'2019-12-05 12:18:50','','error','admin'),(205,'2019-12-05 12:18:50','Error importing the database.','error','admin'),(206,'2019-12-05 12:18:57','Error backing up the database.','error','admin'),(207,'2019-12-05 12:19:52','Error backing up the database.','error','admin'),(208,'2019-12-05 12:20:00','Error backing up the database.','error','admin'),(209,'2019-12-05 12:20:00','Checked out branch: Adding-User.','branch','admin'),(210,'2019-12-05 12:20:00','','error','admin'),(211,'2019-12-05 12:20:01','','error','admin'),(212,'2019-12-05 12:20:01','','error','admin'),(213,'2019-12-05 12:20:01','','error','admin'),(214,'2019-12-05 12:20:01','','error','admin'),(215,'2019-12-05 12:20:01','','error','admin'),(216,'2019-12-05 12:20:01','','error','admin'),(217,'2019-12-05 12:20:01','','error','admin'),(218,'2019-12-05 12:20:02','','error','admin'),(219,'2019-12-05 12:20:02','','error','admin'),(220,'2019-12-05 12:20:02','','error','admin'),(221,'2019-12-05 12:20:02','','error','admin'),(222,'2019-12-05 12:20:02','','error','admin'),(223,'2019-12-05 12:20:02','Error importing the database.','error','admin'),(224,'2019-12-05 12:20:57','Successfully backed up the database.','backup','admin'),(225,'2019-12-05 12:21:03','Successfully pushed 1 commit to origin/Adding-User.','push','admin');
/*!40000 ALTER TABLE `wp_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

