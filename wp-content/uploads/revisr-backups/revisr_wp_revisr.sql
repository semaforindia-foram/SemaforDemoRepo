
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_revisr` WRITE;
/*!40000 ALTER TABLE `wp_revisr` DISABLE KEYS */;
INSERT INTO `wp_revisr` VALUES (1,'2019-12-06 06:31:59','Error pushing changes to the remote repository.','error','admin'),(2,'2019-12-06 06:32:34','Error backing up the database.','error','admin'),(3,'2019-12-06 06:33:54','Created new branch: development','branch','admin'),(4,'2019-12-06 06:33:54','Checked out branch: development.','branch','admin'),(5,'2019-12-06 06:34:42','Successfully backed up the database.','backup','admin'),(6,'2019-12-06 06:34:43','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=f30d267&success=true\">#f30d267</a> to the local repository.','commit','admin'),(7,'2019-12-06 06:34:45','Error pushing changes to the remote repository.','error','admin'),(8,'2019-12-06 06:36:11','Successfully backed up the database.','backup','admin'),(9,'2019-12-06 06:36:12','Error pushing changes to the remote repository.','error','admin'),(10,'2019-12-06 06:38:24','Successfully backed up the database.','backup','admin'),(11,'2019-12-06 06:38:25','Committed <a href=\"http://localhost/wordpress/wp-admin/admin.php?page=revisr_view_commit&commit=4aedff3&success=true\">#4aedff3</a> to the local repository.','commit','admin'),(12,'2019-12-06 06:38:26','Error pushing changes to the remote repository.','error','admin'),(13,'2019-12-06 06:39:48','Error pushing changes to the remote repository.','error','admin'),(14,'2019-12-06 06:43:20','Successfully pushed 2 commits to origin/master.','push','admin'),(15,'2019-12-06 06:43:43','Successfully backed up the database.','backup','admin'),(16,'2019-12-06 06:43:48','Successfully pushed 1 commit to origin/master.','push','admin'),(17,'2019-12-06 06:44:25','Successfully backed up the database.','backup','admin'),(18,'2019-12-06 06:44:31','Successfully pushed 1 commit to origin/Adding-User.','push','admin'),(19,'2019-12-06 06:44:56','Successfully backed up the database.','backup','admin'),(20,'2019-12-06 06:45:03','Successfully pushed 1 commit to origin/dev.','push','admin'),(21,'2019-12-06 06:48:51','Successfully imported the database. <a href=\"http://localhost/wordpress/wp-admin/admin-post.php?action=process_revert&amp;revert_type=db&amp;db_hash=b30c24b&amp;revisr_revert_nonce=35ce27c9b1\">Undo</a>','import','admin'),(22,'2019-12-06 06:52:22','Successfully imported the database. ','import','admin'),(23,'2019-12-06 06:55:03','Successfully backed up the database.','backup','admin'),(24,'2019-12-06 06:55:08','Successfully pushed 1 commit to origin/dev.','push','admin');
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

