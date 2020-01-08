/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.21-21 : Database - ifcombr_teste
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ifcombr_teste` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `ifcombr_teste`;

/*Table structure for table `ci_session` */

DROP TABLE IF EXISTS `ci_session`;

CREATE TABLE `ci_session` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ci_session` */

insert  into `ci_session`(`id`,`ip_address`,`user_agent`,`timestamp`,`data`) values ('easi7o2h0j6v4u5qlk4hs6dknr1iokl0','::1','',1578450047,'__ci_last_regenerate|i:1578450047;'),('304f74284763fe072e1cbbdb9d1af4413d54608b','200.53.22.242','',1578450902,'__ci_last_regenerate|i:1578450902;'),('d595621bcde9248947e39883676106d51e78bda5','200.53.22.242','',1578450841,'__ci_last_regenerate|i:1578450841;FBRLH_state|s:32:\"cb2dd1daab1599677c9c5e195d3ddad0\";'),('185d5447e4e50086d190f068929269d5b73ed44b','200.53.22.242','',1578450843,'__ci_last_regenerate|i:1578450843;FBRLH_state|s:32:\"3dd30d7d50050736fedb1d69fe0c3c7f\";'),('ar0s7scgcgokq0cjj5di4fam1s9i95qj','::1','',1578451399,'__ci_last_regenerate|i:1578451399;FBRLH_state|s:32:\"ffdb7d0fd51430f97d04e0f604d2635e\";'),('f7b75e0419a9d24f3f53c3ca74d9cf78d880cd82','200.53.22.242','',1578450184,'__ci_last_regenerate|i:1578450184;'),('3b70d705192838789b8638cfeabc428a36eaa646','69.171.251.23','',1578450398,'__ci_last_regenerate|i:1578450398;'),('4370a43ce193542486ae89837cab000be03ebc72','173.252.95.26','',1578450568,'__ci_last_regenerate|i:1578450568;FBRLH_state|s:32:\"6be8196655dde6ba687c06eb500f2264\";'),('da1b008558df8d3fbe39bb87801b486f21344f15','200.53.22.242','',1578451717,'__ci_last_regenerate|i:1578451717;FBRLH_state|s:32:\"cb2dd1daab1599677c9c5e195d3ddad0\";'),('a1b9ffeb0572206509c2ff7d376a11ce103fe4c1','200.53.22.242','',1578451226,'__ci_last_regenerate|i:1578450692;FBRLH_state|s:32:\"e3d446df8b6f34cd62b4d4219b5f34b4\";'),('194eabc9309efea874e51b495842fefd7e24a5d6','200.53.22.242','',1578451735,'__ci_last_regenerate|i:1578451735;FBRLH_state|s:32:\"3dd30d7d50050736fedb1d69fe0c3c7f\";'),('8f1d499094024287c3790271a9d9cdd7a506e23f','200.53.22.242','',1578451225,'__ci_last_regenerate|i:1578450902;'),('ofgpl3bt41a04v6ue0vs8i3qvpnvn88a','::1','',1578451401,'__ci_last_regenerate|i:1578451399;FBRLH_state|s:32:\"ffdb7d0fd51430f97d04e0f604d2635e\";'),('kk1lppejodgvhs4n8qgoaugtn1dp3br7','::1','',1578452619,'__ci_last_regenerate|i:1578452619;FBRLH_state|s:32:\"37eee4bc5f1f4958b38bea197af104b8\";face_access_token|s:183:\"EAAKm1AHvs8UBANGMoLJAmZAmQihZBEQPXdwVeFEIZAaHtqFhOPqaL4epOWVZBQb1eUBmZBOdlVl7MfC4ZCSZBSYdFayy27izzOGPlqWZAANJZCJ5vbJqa6Y0lnmZB5UpPWDCTTkkJfNrroqshp4rNSZCqv4kmHKGpn6nacqohVpDZAE7kQZDZD\";'),('978c66bc8b4eba648561f2b261152a8c9b7888ab','200.53.22.242','',1578452550,'__ci_last_regenerate|i:1578452550;FBRLH_state|s:32:\"3dd30d7d50050736fedb1d69fe0c3c7f\";sessao_user|a:1:{i:0;a:7:{s:2:\"id\";s:1:\"1\";s:4:\"nome\";s:17:\"Wellisson Ribeiro\";s:5:\"email\";s:18:\"welleh10@gmail.com\";s:5:\"login\";s:9:\"wellisson\";s:5:\"senha\";s:32:\"e803adae1f5acc155699ad43e9b77629\";s:6:\"inicio\";s:10:\"1578452454\";s:6:\"imagem\";s:135:\"https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2640547489397903&height=50&width=50&ext=1581043405&hash=AeQq-hT7NG1Ykaya\";}}'),('6a31908acfc8941c6c729ca5dc55d5a1fd4f4d2f','200.53.22.242','',1578451717,'__ci_last_regenerate|i:1578451717;FBRLH_state|s:32:\"cb2dd1daab1599677c9c5e195d3ddad0\";'),('21866a62f3be5979b651ea3591f1a58096446e44','200.53.22.242','',1578451806,'__ci_last_regenerate|i:1578451742;'),('0c6d87ed94b537508adf6ff7bc22bdb4ce0d2873','200.53.22.242','',1578452733,'__ci_last_regenerate|i:1578452733;sessao_user|a:1:{i:0;a:7:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:6:\"Teste \";s:5:\"email\";s:15:\"teste@teste.com\";s:5:\"login\";s:5:\"teste\";s:5:\"senha\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"inicio\";s:10:\"1578452548\";s:6:\"imagem\";s:106:\"https://cdn0.iconfinder.com/data/icons/avatar-25/64/avatar-guy-handsome-man-hipster-beard-undercut-512.png\";}}'),('7060c8bbbb414525835d854278bb14cacf1a702d','200.53.22.242','',1578453412,'__ci_last_regenerate|i:1578453412;FBRLH_state|s:32:\"3dd30d7d50050736fedb1d69fe0c3c7f\";'),('d88568c0a0f547484a305c40b1fca4f72179311c','200.53.22.242','',1578453772,'__ci_last_regenerate|i:1578453772;sessao_user|a:7:{s:2:\"id\";s:1:\"2\";s:4:\"nome\";s:6:\"Teste \";s:5:\"email\";s:15:\"teste@teste.com\";s:5:\"login\";s:5:\"teste\";s:5:\"senha\";s:32:\"202cb962ac59075b964b07152d234b70\";s:6:\"inicio\";s:10:\"1578452838\";s:6:\"imagem\";s:106:\"https://cdn0.iconfinder.com/data/icons/avatar-25/64/avatar-guy-handsome-man-hipster-beard-undercut-512.png\";}'),('h5a7vdfvks8mup0glrdl5iogasbqqq27','::1','',1578453171,'__ci_last_regenerate|i:1578452619;FBRLH_state|s:32:\"37eee4bc5f1f4958b38bea197af104b8\";face_access_token|s:183:\"EAAKm1AHvs8UBANGMoLJAmZAmQihZBEQPXdwVeFEIZAaHtqFhOPqaL4epOWVZBQb1eUBmZBOdlVl7MfC4ZCSZBSYdFayy27izzOGPlqWZAANJZCJ5vbJqa6Y0lnmZB5UpPWDCTTkkJfNrroqshp4rNSZCqv4kmHKGpn6nacqohVpDZAE7kQZDZD\";sessao_user|a:7:{s:2:\"id\";s:1:\"1\";s:4:\"nome\";s:17:\"Wellisson Ribeiro\";s:5:\"email\";s:18:\"welleh10@gmail.com\";s:5:\"login\";s:9:\"wellisson\";s:5:\"senha\";s:32:\"e803adae1f5acc155699ad43e9b77629\";s:6:\"inicio\";s:10:\"1578452668\";s:6:\"imagem\";s:135:\"https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2640547489397903&height=50&width=50&ext=1581043405&hash=AeQq-hT7NG1Ykaya\";}'),('limblhn9emvp3miaqfgf1642unde07s7','::1','',1578453778,'__ci_last_regenerate|i:1578453309;'),('eb006c70ddb2c8e935f882b728ed59e4528b4cd8','200.53.22.242','',1578453772,'__ci_last_regenerate|i:1578453772;'),('14ff2c714f0559f4260425462b83df9661780ae5','200.53.22.242','',1578453862,'__ci_last_regenerate|i:1578453412;FBRLH_state|s:32:\"3dd30d7d50050736fedb1d69fe0c3c7f\";');

/*Table structure for table `mensagens` */

DROP TABLE IF EXISTS `mensagens`;

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_de` int(11) NOT NULL,
  `id_para` int(11) NOT NULL,
  `mensagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `data_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `mensagens` */

insert  into `mensagens`(`id`,`id_de`,`id_para`,`mensagem`,`ip`,`data_hora`) values (1,1,2,'ola','200.53.22.242','2020-01-07 23:01:53'),(2,2,1,'teste','200.53.22.242','2020-01-07 23:01:53'),(3,2,1,'teste','200.53.22.242','2020-01-07 23:01:54'),(4,1,2,'sd','200.53.22.242','2020-01-07 23:01:55'),(5,1,2,'s','200.53.22.242','2020-01-07 23:01:55'),(6,1,2,'s','200.53.22.242','2020-01-07 23:01:55'),(7,1,2,'s','200.53.22.242','2020-01-07 23:01:55'),(8,1,2,'s','200.53.22.242','2020-01-07 23:01:55'),(9,1,2,'s','200.53.22.242','2020-01-07 23:01:55'),(10,2,1,'t','200.53.22.242','2020-01-07 23:01:55'),(11,2,1,'t','200.53.22.242','2020-01-07 23:01:55'),(12,2,1,'sdf','::1','2020-01-08 01:01:17'),(13,2,1,'t','::1','2020-01-08 01:01:18');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` int(11) DEFAULT '0',
  `imagem` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`email`,`login`,`senha`,`inicio`,`imagem`) values (1,'Wellisson Ribeiro','welleh10@gmail.com','wellisson','e803adae1f5acc155699ad43e9b77629',1578453861,'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2640547489397903&height=50&width=50&ext=1581043405&hash=AeQq-hT7NG1Ykaya'),(2,'Teste ','teste@teste.com','teste','202cb962ac59075b964b07152d234b70',1578453772,'https://cdn0.iconfinder.com/data/icons/avatar-25/64/avatar-guy-handsome-man-hipster-beard-undercut-512.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
