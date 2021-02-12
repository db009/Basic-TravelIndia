# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:12:21
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "booking2"
#

DROP TABLE IF EXISTS `booking2`;
CREATE TABLE `booking2` (
  `user` varchar(255) DEFAULT NULL,
  `Flight_Id` int(11) NOT NULL DEFAULT '0',
  `Seats` int(11) DEFAULT NULL,
  `Total_fare` varchar(200) DEFAULT NULL,
  `Bank` varchar(255) DEFAULT NULL,
  `Payment_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "booking2"
#

