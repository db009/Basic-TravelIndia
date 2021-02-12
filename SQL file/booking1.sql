# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:11:35
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "booking1"
#

DROP TABLE IF EXISTS `booking1`;
CREATE TABLE `booking1` (
  `user` varchar(255) DEFAULT NULL,
  `Train_Id` int(11) NOT NULL DEFAULT '0',
  `Train_No` varchar(255) DEFAULT NULL,
  `Seats` varchar(5) DEFAULT NULL,
  `Total_fare` varchar(255) DEFAULT NULL,
  `Bank` varchar(200) DEFAULT NULL,
  `Payment_method` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "booking1"
#

