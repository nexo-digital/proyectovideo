/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.9-log : Database - tutorialdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tutorialdb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `tutorialdb`;

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(40) NOT NULL,
  `mensaje` varchar(250) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `contacto` */

insert  into `contacto`(`id_contacto`,`nombre`,`apellido`,`email`,`asunto`,`mensaje`) values 
(1,'Víctor','Vargas','victprogram@gmail.com','Ejemplo','Este es un mensaje de ejemplo.'),
(2,'Víctor','Vargas','victprogran@gmail.com','asd','fg'),
(3,'Víctor','Vargas','victprogran@gmail.com','asd','fg');

/*Table structure for table `sugerencia` */

DROP TABLE IF EXISTS `sugerencia`;

CREATE TABLE `sugerencia` (
  `id_sugerencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `sugerencia` varchar(250) NOT NULL,
  PRIMARY KEY (`id_sugerencia`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `sugerencia` */

insert  into `sugerencia`(`id_sugerencia`,`nombre`,`apellido`,`email`,`pais`,`sugerencia`) values 
(14,'Víctor','Vargas','victprogram@gmail.com','República Dominicana','Este es un mensaje de ejemplo.');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`usuario`,`clave`) values 
(1,'victor','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
