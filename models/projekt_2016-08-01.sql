# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.42)
# Database: projekt
# Generation Time: 2016-08-01 19:07:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `comId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comUser` varchar(255) NOT NULL DEFAULT '',
  `comText` text NOT NULL,
  `comDate` varchar(255) NOT NULL DEFAULT '',
  `comReviewId` int(11) NOT NULL,
  PRIMARY KEY (`comId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`comId`, `comUser`, `comText`, `comDate`, `comReviewId`)
VALUES
	(1,'Sam','Bra omdöme!','Idag',1);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `courseId` int(11) unsigned NOT NULL,
  `courseName` text CHARACTER SET utf8 NOT NULL,
  `courseInfo` text CHARACTER SET utf8 NOT NULL,
  `courseLength` text CHARACTER SET utf8 NOT NULL,
  `courseLevel` text CHARACTER SET utf8 NOT NULL,
  `coursePace` text CHARACTER SET utf8 NOT NULL,
  `courseSubject` text CHARACTER SET utf8 NOT NULL,
  `courseRate` varchar(11) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `university` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `uniLink` varchar(200) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`courseId`, `courseName`, `courseInfo`, `courseLength`, `courseLevel`, `coursePace`, `courseSubject`, `courseRate`, `university`, `uniLink`)
VALUES
	(1,'Informationssystem A','Kursen ger dig en grundläggande förståelse om hur datorer, nätverk och datasystem fungerar. Du får datakunskaper genom kurserna informationssystem och systemutveckling, introduktion till programmering och databasteknik. Genom att kombinera teori och praktiska tillämpningar lär du dig bland annat att skapa hemsidor och att utveckla användbara system, program och databaser.','30hp','Grundnivå','100%','Informationssystem','7/10','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=26080&lasar=13/14&typ=2'),
	(2,'Marknad och organisation','Organisation och Marknad\n','15hp','Grundnivå','100%','Företagsekonomi','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=2FE014&lasar=15/16&typ=1'),
	(3,'Rysk text','Kursen består av självständig läsning av fritt valda originaltexter på ryska med utblickar mot rysk litteratur- och kulturhistoria. Kursen omfattar 1200 normalsidor rysk text (större delen skönlitteratur men även ett antal sidor samhällsvetenskaplig text).\r\n\r\nKursen ges på distans.','7,5hp','Avancerad nivå','25%','Språk','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=5RY031&lasar=15/16&typ=1'),
	(5,'Geografi C','No','7,5hp','Avancerad nivå','25%','Geografi','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=2KU057&lasar=14/15&typ=1'),
	(6,'Linjär algebra och geometri I ','Ys','5hp','Grundnivå','33%','Matematik','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=1MA025&lasar=15/16&typ=1'),
	(7,'Teoretisk filosofi, baskurs A','No','30hp','Grundnivå','100%','Filosofi','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=5FT017&lasar=15/16&typ=1'),
	(8,'Informationssystem C','-','30hp','Avancerad nivå','100%','Informationssystem','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=26082&lasar=14/15&typ=2'),
	(9,'Informationssystem B','-','30hp','Grundnivå','100%','Informationssystem','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=76081&lasar=13/14&typ=2'),
	(10,'Kinas historia och kultur',' Bunden/på campus.','7,5hp','Grundnivå','25%','Historia','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=5KN141&lasar=15/16&typ=1'),
	(11,'Multimedia',' Bunden/på campus.','15hp','Grundnivå','50%','Informationssystem','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=2AD349&lasar=15/16&typ=1'),
	(12,'Kvantitativa metoder',' Bunden/på campus.','7,5hp','Avancerad nivå','50%','Matematik','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=2ST106&lasar=15/16&typ=1'),
	(13,'Grundläggande statistik A4',' Bunden/på campus.','15hp','Grundnivå','100%','Matematik','0','Uppsala Universitet','http://www.uu.se/utbildning/utbildningar/selma/kurser/?kKod=2ST063&lasar=15/16&typ=1');

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `imgId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imgUser` varchar(255) NOT NULL DEFAULT '',
  `imgName` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`imgId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`imgId`, `imgUser`, `imgName`)
VALUES
	(13,'random','lo.png'),
	(14,'random','lo.png'),
	(15,'random','IMG_8776.jpg'),
	(16,'random','zende.jpg'),
	(17,'random','1.jpg'),
	(18,'random','1.jpg'),
	(19,'sam','1.jpg'),
	(20,'sam','1.jpg'),
	(21,'Roger','1.jpg'),
	(22,'Roger','roger_pontare2-620x385.png'),
	(23,'stefano','11.jpg');

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `userName` varchar(255) NOT NULL,
  `profileinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`userName`, `profileinfo`)
VALUES
	('kalle','hej ja heter kalle!'),
	('Mailarn','hejsa'),
	('Roger','Hallå hallå jag heter Roger!'),
	('urban','Hallå jag heter Urban!'),
	('sam',''),
	('Raingsai','CS'),
	('Erdol','Je m\'apelle ERdola'),
	('stefano','Hej');

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `rId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rUser` text NOT NULL,
  `courseID` int(11) NOT NULL,
  `rText` text NOT NULL,
  `rDate` varchar(255) NOT NULL DEFAULT '',
  `rRate` int(255) NOT NULL,
  PRIMARY KEY (`rId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;

INSERT INTO `reviews` (`rId`, `rUser`, `courseID`, `rText`, `rDate`, `rRate`)
VALUES
	(1,'Mr. Turd',1,'Kursen var väldigt bra, speciellt Hamfelt och hans föreläsningar','28-05-2015',2),
	(2,'Adrian08',1,'Databaskursen var väldigt lärorik sajk, YOLO','28-05-2015',0),
	(59,'Roger',1,'Test','31-05-2015',5),
	(61,'Erdol',2,'first','01-07-2015',1),
	(62,'Erdol',11,'grave mauvais','01-07-2015',5),
	(63,'lol',2,'Hejjj','21-07-2016',3);

/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` text NOT NULL,
  `userMail` text NOT NULL,
  `userPass` text NOT NULL,
  `userSalt` text,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`userId`, `userName`, `userMail`, `userPass`, `userSalt`, `admin`)
VALUES
	(114,'Robert','robert@rob.com','56850c617645c42b592d35cf2259571f','1366841794555c6044f3bce8.93599382',0),
	(115,'regge','ragge@hoc.com','00dc0230f0fd304f60b7cfc445d82b7f','1853224866555c6242c7d4e9.44808705',0),
	(120,'anders borg','ab@aac.com','26245ce0d6589b7caa1e1c5f470fa536','1498599942555c65c345c599.74391330',0),
	(125,'Roger','Pontare','9ddb77508e09dc7261923863dacec6b7','1369022739555f00e662bfd6.29864634',1),
	(127,'Mailarn','mail@mail.com','335e6455c153c6304c5d8701e6c4138f','1725440385564c9572a1388.53152879',0),
	(129,'urban','ubbe@ubb.com','521295641757e3d55b566f47bd94220b','41610137655659ee95055b2.97830009',0),
	(130,'Samme','sam@sam.com','215afec81ea994eaaaecfc4e0e111372','21097134475566df4a277a41.08140806',0),
	(131,'sam','sam','2e1ac4170ee42440a7430356e2d9e8d2','30662167255671fc3a6b246.82906904',0),
	(132,'qwerty','123','db3584b795b39fa72982e64632561cd0','99451099555675526a82515.09428288',0),
	(133,'Raingsai','Raingsai@hej.hej','ca314056d4fa83c841291c42d556d7ff','714802906556ddbf3b10218.28355277',1),
	(134,'Sina','sina@sina.se','2532496cef882da4f937ccbf6dd35703','256436710558c067b551622.96064148',0),
	(135,'Erdol','erdola@abdul.erdol','871780b2709f7fac027244e641c258f0','114693938655945281b59304.60689332',1),
	(136,'stefano','stefano','f7344730b8d557dc87a405f2f50ac619','1387251063561cef79a12619.30489373',0),
	(137,'po','po','ecfb10e29f0ecabefd96817726b2b75d','7196080285620aed75a1244.26584812',0),
	(138,'lol','lol@lol.lol','135600a9bb45285f79654dc851337f80','153056756057911b9d045d08.83773674',0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
