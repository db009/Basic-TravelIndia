# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:13:21
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "signup"
#

DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT '',
  `Gender` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "signup"
#

INSERT INTO `signup` VALUES (1,'Jay','Shah','jayshah12@gmail.com','9882593561','B-17,Govind Nagar,Kim','Male','India',18,'jayShah12@'),(2,'Vikas','Gupta','vkgupta@gmail.com','9898452367','A-1, Madhuram Society, Bhayander West','Male','India',18,'vkGupta798'),(3,'Dhananjay','Bhatkar','dj32@gmail.com','7875264632','104, Lakshmi Dham Society, Vasai Road East','Male','India',18,'Bhatkardj32@'),(4,'John','Paul','jp12@gmail.com','542378183','83 Grafton Road ,Tien Son','Male','Other',23,'Pauljohn@12');
