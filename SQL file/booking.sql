# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:11:22
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "booking"
#

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `user` varchar(255) DEFAULT NULL,
  `Bus_Id` int(11) NOT NULL,
  `Seats` varchar(5) DEFAULT NULL,
  `Total_fare` varchar(100) DEFAULT NULL,
  `Bank` varchar(255) DEFAULT NULL,
  `Payment_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "booking"
#

