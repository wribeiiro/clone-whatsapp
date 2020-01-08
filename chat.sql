/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.41-log : Database - chat
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`chat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `chat`;

/*Table structure for table `ci_session` */

DROP TABLE IF EXISTS `ci_session`;

CREATE TABLE `ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_session` */

insert  into `ci_session`(`id`,`ip_address`,`user_agent`,`timestamp`,`data`) values ('rpaipd6ljak2n64rndb2m4qalfam4tfk','::1','',1578082504,'__ci_last_regenerate|i:1578082504;sessao_user|a:1:{i:0;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nome\";s:17:\"Wellisson Ribeiro\";s:5:\"email\";s:18:\"welleh10@gmail.com\";s:5:\"login\";s:9:\"wellisson\";s:5:\"senha\";s:32:\"e803adae1f5acc155699ad43e9b77629\";s:6:\"inicio\";s:1:\"0\";}}'),('evf1lipfdf3o4ungho910t43lllepsfv','::1','',1578083283,'__ci_last_regenerate|i:1578083283;sessao_user|a:1:{i:0;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nome\";s:17:\"Wellisson Ribeiro\";s:5:\"email\";s:18:\"welleh10@gmail.com\";s:5:\"login\";s:9:\"wellisson\";s:5:\"senha\";s:32:\"e803adae1f5acc155699ad43e9b77629\";s:6:\"inicio\";s:1:\"0\";}}'),('c2e1pdjvrhggk8nhb3u3qn9n3e8bvi8e','::1','',1578083687,'__ci_last_regenerate|i:1578083283;sessao_user|a:1:{i:0;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"nome\";s:17:\"Wellisson Ribeiro\";s:5:\"email\";s:18:\"welleh10@gmail.com\";s:5:\"login\";s:9:\"wellisson\";s:5:\"senha\";s:32:\"e803adae1f5acc155699ad43e9b77629\";s:6:\"inicio\";s:1:\"0\";}}');

/*Table structure for table `mensagens` */

DROP TABLE IF EXISTS `mensagens`;

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_de` int(11) NOT NULL,
  `id_para` int(11) NOT NULL,
  `nick` varchar(100) DEFAULT '',
  `mensagem` varchar(255) DEFAULT '',
  `ip` varchar(50) DEFAULT '',
  `data_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `mensagens` */

insert  into `mensagens`(`id`,`id_de`,`id_para`,`nick`,`mensagem`,`ip`,`data_hora`) values (2,1,1,'Wellisson Ribeiro','teste','::1','2019-07-25 11:02:10'),(3,2,2,'Hamon','fsdfdf','::1','2019-07-25 11:02:31'),(4,2,2,'Hamon','dfsdfsdf','::1','2019-07-25 11:49:09'),(5,2,2,'Hamon','dsfsdfsdf','::1','2019-07-25 11:50:20'),(6,1,2,'','sdfsd','192.168.0.30','2019-08-16 16:08:56'),(7,2,0,'',NULL,'192.168.0.212','2019-08-16 16:08:58'),(8,2,1,'','Eae man','192.168.0.212','2019-08-16 16:08:58'),(9,1,2,'','funcionando','192.168.0.30','2019-08-16 16:08:58'),(10,2,1,'','deu boas','192.168.0.212','2019-08-16 16:08:58'),(11,1,2,'','049054','192.168.0.30','2019-08-16 16:08:59'),(12,1,2,'','sdf','192.168.0.30','2019-08-16 17:08:00'),(13,1,2,NULL,'teste','::1','2020-01-03 19:01:06'),(14,1,2,NULL,'teste','::1','2020-01-03 19:01:06'),(15,1,2,NULL,'teste','::1','2020-01-03 19:01:06'),(16,1,2,NULL,'teste','::1','2020-01-03 19:01:06'),(17,1,2,NULL,'teste','::1','2020-01-03 19:01:06'),(18,1,2,NULL,'teste','::1','2020-01-03 19:01:06'),(19,1,2,NULL,'sdfsdf','::1','2020-01-03 19:01:07'),(20,1,2,NULL,'teste','::1','2020-01-03 19:01:08'),(21,1,2,NULL,'sdfsd','::1','2020-01-03 19:01:08'),(22,1,2,NULL,'sdfsdf','::1','2020-01-03 19:01:08'),(23,1,2,NULL,'tesdsf','::1','2020-01-03 16:01:09'),(24,1,2,NULL,'sdfosdkf','::1','2020-01-03 16:01:11'),(25,1,2,NULL,'teste','::1','2020-01-03 16:01:14'),(26,1,2,NULL,'sdfsdf','::1','2020-01-03 16:01:19'),(27,1,2,NULL,'KAPDFKPOASDKFPPASDPOKDFSAPKOFDSAPOKFASDPOKFDAPFDPFKOASPSDOFKAPSDOFKPOASDKFPOAKSDFOPAKSDF','::1','2020-01-03 16:01:19'),(28,1,2,NULL,'dfsdf','::1','2020-01-03 18:01:30'),(29,1,2,NULL,'Ola','::1','2020-01-03 18:01:30'),(30,1,2,NULL,'sdfsdf','::1','2020-01-03 18:01:31'),(31,1,2,NULL,'sdff','::1','2020-01-03 18:01:31'),(32,1,2,NULL,'dfdf','::1','2020-01-03 18:01:31'),(33,1,2,NULL,'df','::1','2020-01-03 18:01:31'),(34,1,2,NULL,'df','::1','2020-01-03 18:01:31'),(35,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(36,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(37,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(38,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(39,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(40,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(41,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(42,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(43,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(44,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(45,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(46,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(47,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(48,1,2,NULL,'d','::1','2020-01-03 18:01:31'),(49,1,2,NULL,'fasd','::1','2020-01-03 18:01:31'),(50,1,2,NULL,'fsd','::1','2020-01-03 18:01:31'),(51,1,2,NULL,'f','::1','2020-01-03 18:01:31'),(52,1,2,NULL,'sdf','::1','2020-01-03 18:01:31'),(53,1,3,NULL,'sdfsdf','::1','2020-01-03 18:01:34');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `inicio` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`email`,`login`,`senha`,`inicio`) values (1,'Wellisson Ribeiro','welleh10@gmail.com','wellisson','e803adae1f5acc155699ad43e9b77629',1578072055),(2,'Contato Padrao','contato@contato.com','contato','e8d95a51f3af4a3b134bf6bb680a213a',0),(3,'Teste','teste@teste.com','teste','askdfadf',0),(4,'Joao','spdkfpods@sdokfd.com','oksdfokdfs','asdfsdf',0),(5,'Pedro','osdkfods@teste.com','osdkfods','oksdfods',0),(6,'Maria','ksdfo.com.tes','sdfsdf','sdfdsf',0),(7,'Lucas','234342.com.br','sdfsdf','we23423',0),(8,'Madalena','ksdofk.com.br','oskdfos','2o342423',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
