# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:12:33
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "bus"
#

DROP TABLE IF EXISTS `bus`;
CREATE TABLE `bus` (
  `BusId` int(11) NOT NULL AUTO_INCREMENT,
  `Bus_Name` varchar(200) NOT NULL DEFAULT '',
  `Origin` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Departure_time` time NOT NULL DEFAULT '00:00:00',
  `Arrival_time` time NOT NULL,
  `Date` date NOT NULL,
  `Fare` int(11) DEFAULT NULL,
  PRIMARY KEY (`BusId`)
) ENGINE=InnoDB AUTO_INCREMENT=606 DEFAULT CHARSET=latin1;

#
# Data for table "bus"
#

INSERT INTO `bus` VALUES (101,'Neeta Travels','Mumbai','Ahemedabad',71,'08:00:00','21:00:00','0000-00-00',500),(102,'Dnm Travels','Mumbai','Delhi',68,'09:00:00','23:00:00','0000-00-00',500),(103,'Paulo Travels','Mumbai','Kolkata',69,'16:45:00','20:00:00','0000-00-00',500),(104,'Naik  travels','Mumbai','Goa',75,'07:00:00','22:00:00','0000-00-00',500),(105,'Galaxy travels','Mumbai','Pune',77,'09:00:00','12:00:00','0000-00-00',500),(201,'Neeta Travels','Ahemedabad','Mumbai',71,'21:15:00','08:18:00','0000-00-00',600),(202,'VRL Travels','Ahemedabad','Delhi',40,'18:15:00','06:01:00','0000-00-00',600),(203,'Kaloji Travels\r\n','Ahemedabad','Kolkata',59,'17:30:00','08:15:00','0000-00-00',600),(204,'Eagle Travel ','Ahemedabad','Goa',66,'11:00:00','23:00:00','0000-00-00',600),(205,'Adifaah Travels','Ahemedabad','Pune',42,'10:00:00','20:00:00','0000-00-00',600),(301,'Dnm Travels','Delhi','Mumbai',68,'23:15:00','09:15:00','0000-00-00',600),(302,'VRL Travels','Delhi','Ahemedabad',45,'06:15:00','18:15:00','0000-00-00',700),(303,'Kanade Travels','Delhi','Kolkata',69,'17:45:00','08:00:00','0000-00-00',700),(304,'Koyna  Travel','Delhi','Goa',63,'16:45:00','08:00:00','0000-00-00',700),(305,'Daksh Travels ','Delhi','Pune',49,'17:00:00','07:30:00','0000-00-00',700),(401,'Paulo Travels\r\n ','Kolkata','Mumbai',72,'20:30:00','07:30:00','0000-00-00',800),(402,'Kaloji Travels','Kolkata','Ahemedabad',59,'08:15:00','17:30:00','0000-00-00',800),(403,'Kanade Travels','Kolkata','Delhi',69,'08:00:00','17:45:00','0000-00-00',800),(404,'Mangela Travels','Kolkata','Goa',44,'09:00:00','23:00:00','0000-00-00',800),(405,'Morya Travels','Kolkata','Pune',75,'07:00:00','22:00:00','0000-00-00',800),(501,'Naik  travels','Goa','Mumbai',75,'22:15:00','07:15:00','0000-00-00',900),(502,'Eagle Travel ','Goa','Ahemedabad',66,'23:30:00','11:20:00','0000-00-00',900),(503,'Koyna  Travel','Goa','Delhi',63,'08:00:00','16:45:00','0000-00-00',900),(504,'Mangela  Travels','Goa','Kolkata',44,'23:20:00','09:15:00','0000-00-00',900),(505,'Atmaram Travels','Goa','Pune',63,'08:00:00','22:00:00','0000-00-00',900),(601,'Galaxy travels','Pune','Mumbai',73,'12:05:00','09:15:00','0000-00-00',1000),(602,'Adifaah Travels','Pune','Ahemedabad',45,'20:30:00','10:40:00','0000-00-00',1000),(603,'Daksh Travels ','Pune','Delhi',49,'07:00:00','16:45:00','0000-00-00',1000),(604,'Morya  Travels','Pune','Kolkata',75,'22:00:00','07:00:00','0000-00-00',1000),(605,'Atmaram Travels ','Pune','Goa',63,'22:00:00','08:00:00','0000-00-00',1000);
