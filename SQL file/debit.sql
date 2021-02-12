# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:12:48
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "debit"
#

DROP TABLE IF EXISTS `debit`;
CREATE TABLE `debit` (
  `DebitId` int(11) NOT NULL AUTO_INCREMENT,
  `Bank_Name` varchar(255) DEFAULT NULL,
  `Card_No` varchar(16) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Ex_Month` int(2) DEFAULT NULL,
  `Ex_Year` int(4) DEFAULT NULL,
  `CVV` int(3) DEFAULT NULL,
  `Money` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DebitId`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

#
# Data for table "debit"
#

INSERT INTO `debit` VALUES (101,'SBI','8273624518365248','VIKAS GUPTA',5,2024,115,'12381'),(102,'PNB','6239324218815934','DHANANJAY BHATKAR',2,2025,657,'87345'),(103,'HDFC','3242374823646723','JOHN PAUL',11,2027,261,'98765'),(104,'BOI','9236723672366512','JAY SHAH',9,2028,545,'24534');
