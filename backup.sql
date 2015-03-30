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
  PRIMARY KEY (`id_article`),
  KEY `article_ibfk_2` (`id_user`),
  KEY `article_ibfk_1` (`id_category`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `article_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `article` */

insert  into `article`(`id_article`,`judul`,`image`,`isi`,`id_category`,`id_user`) values (1,'Tool for best web design','upload/web-design.jpg','There is no getting around it—effective website design can be complex, time consuming, and difficult. Luckily, website design software tools can make the process much easier. When it comes to website design even the experts use web design software, as opposed to designing from scratch. It is easier, saves time, and typically results in a better website.\r\n\r\nBut if you’re not a web design expert, no worries. Luckily, there are a number of WYSIWYG (What You See Is What You Get) web design programs that make designing a simple website incredibly easy. However, even with WYSIWYG programs, it is still a good idea to at least have a basic knowledge of  programming. If your programming skills are weak, it is something well worth learning, especially HTML. You can learn HTML5 from scratch in this online course.\r\n\r\nUltimately, there is a range of tools out there designed to suit a variety of different skill levels. Let’s take a look at some of the best website design software tools.',1,1),(2,'Tool for best web design 2','upload/web-design.jpg','There is no getting around it—effective website design can be complex, time consuming, and difficult. Luckily, website design software tools can make the process much easier. When it comes to website design even the experts use web design software, as opposed to designing from scratch. It is easier, saves time, and typically results in a better website.\r\n\r\nBut if you’re not a web design expert, no worries. Luckily, there are a number of WYSIWYG (What You See Is What You Get) web design programs that make designing a simple website incredibly easy. However, even with WYSIWYG programs, it is still a good idea to at least have a basic knowledge of  programming. If your programming skills are weak, it is something well worth learning, especially HTML. You can learn HTML5 from scratch in this online course.\r\n\r\nUltimately, there is a range of tools out there designed to suit a variety of different skill levels. Let’s take a look at some of the best website design software tools.',2,1),(3,'Tool for best web design 3','upload/web-design.jpg','There is no getting around it—effective website design can be complex, time consuming, and difficult. Luckily, website design software tools can make the process much easier. When it comes to website design even the experts use web design software, as opposed to designing from scratch. It is easier, saves time, and typically results in a better website.\r\n\r\nBut if you’re not a web design expert, no worries. Luckily, there are a number of WYSIWYG (What You See Is What You Get) web design programs that make designing a simple website incredibly easy. However, even with WYSIWYG programs, it is still a good idea to at least have a basic knowledge of  programming. If your programming skills are weak, it is something well worth learning, especially HTML. You can learn HTML5 from scratch in this online course.\r\n\r\nUltimately, there is a range of tools out there designed to suit a variety of different skill levels. Let’s take a look at some of the best website design software tools.',2,1),(4,'Tool for best web design 4','upload/web-design.jpg','There is no getting around it—effective website design can be complex, time consuming, and difficult. Luckily, website design software tools can make the process much easier. When it comes to website design even the experts use web design software, as opposed to designing from scratch. It is easier, saves time, and typically results in a better website.\r\n\r\nBut if you’re not a web design expert, no worries. Luckily, there are a number of WYSIWYG (What You See Is What You Get) web design programs that make designing a simple website incredibly easy. However, even with WYSIWYG programs, it is still a good idea to at least have a basic knowledge of  programming. If your programming skills are weak, it is something well worth learning, especially HTML. You can learn HTML5 from scratch in this online course.\r\n\r\nUltimately, there is a range of tools out there designed to suit a variety of different skill levels. Let’s take a look at some of the best website design software tools.',2,1);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  `desc_category` text,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id_category`,`category`,`desc_category`) values (1,'Web','This category tell you about web.'),(2,'Tutorial','This category explain about tutorial how to make something.');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`nama_user`,`email_user`,`password`,`image_user`,`message`,`last_login`) values (1,'andriyas efendi','efendiandriyas@gmail.com','anka24102010','upload/aesp.jpg','My NIM : 11.11.5286. Today, I\'m study at STMIK AMIKOM Yogyakarta Indonesia.','2014-01-07 13:08:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
