/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.32 : Database - pwi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `isi` text,
  `id_category` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `article_ibfk_2` (`id_user`),
  KEY `article_ibfk_1` (`id_category`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `article` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  `desc_category` text,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id_category`,`category`,`desc_category`) values (1,'Web','This category tell you about web.'),(2,'Tutorial','This category explain about tutorial how to make something.'),(3,'Design','This category will give you some information about design.'),(4,'News','This category will inform you about the good news');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name_contact` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`id_contact`,`name_contact`,`email_contact`,`message`) values (1,'andriyas','efendi@gmail.com','aku ingin banget ketemu ama kamu,,,'),(2,'efendi','efendi@gmail.com','aku ingin banget ketemu ama kamu,,,'),(3,'andriyas efendi','efendi@gmail.com','aku'),(4,'andriyas efendi','efendi@gmail.com','adafd'),(5,'andriyas efendi','efendi@gmail.com','adafd'),(6,'andriyas efendi','efendi@gmail.com','adafd'),(7,'andriyas efendi','efendi@gmail.com','adafd');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) DEFAULT NULL,
  `email_user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image_user` varchar(50) DEFAULT NULL,
  `message` text,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`email_user`,`password`,`image_user`,`message`,`last_login`) values (1,'andriyas efendi','efendiandriyas@gmail.com','anka24102010','aesp.jpg','My NIM : 11.11.5286. Today, I\'m study at STMIK AMIKOM Yogyakarta Indonesia.','2014-01-11 15:26:50'),(2,'admin','admin@andriyasefendi.com','admin','aesp.jpg','My NIM : 11.11.5286. Today, I\'m study at STMIK AMIKOM Yogyakarta Indonesia.','2014-01-11 15:42:27');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
