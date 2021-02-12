# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:13:08
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "flight"
#

DROP TABLE IF EXISTS `flight`;
CREATE TABLE `flight` (
  `FlightId` int(11) NOT NULL AUTO_INCREMENT,
  `Flight_Name` varchar(255) NOT NULL DEFAULT '',
  `Origin` varchar(255) NOT NULL DEFAULT '',
  `Destination` varchar(255) NOT NULL DEFAULT '',
  `Seats` int(11) NOT NULL DEFAULT '0',
  `Departure_time` time NOT NULL DEFAULT '00:00:00',
  `Arrival_time` time NOT NULL DEFAULT '00:00:00',
  `Date` date NOT NULL DEFAULT '0000-00-00',
  `Fare` int(11) DEFAULT NULL,
  PRIMARY KEY (`FlightId`)
) ENGINE=InnoDB AUTO_INCREMENT=707 DEFAULT CHARSET=latin1;

#
# Data for table "flight"
#

INSERT INTO `flight` VALUES (101,'IndiGo','Mumbai','Delhi',25,'00:15:00','02:15:00','0000-00-00',5000),(102,'Air India','Mumbai','New York',15,'02:10:00','08:35:00','0000-00-00',61470),(103,'Air India','Mumbai','London',21,'06:30:00','11:30:00','0000-00-00',19560),(104,'Vistara','Mumbai','Sydney',30,'13:10:00','19:30:00','0000-00-00',5000),(105,'Air Arabia','Mumbai','Dubai',30,'21:50:00','23:15:00','0000-00-00',7406),(106,'Jet Airways','Mumbai','Singapore',15,'14:15:00','08:15:00','0000-00-00',8509),(201,'Jet Airways','Delhi','Mumbai',20,'02:25:00','04:35:00','0000-00-00',2901),(202,'Air India','Delhi','New York',13,'01:45:00','07:25:00','0000-00-00',37120),(203,'Emirates','Delhi','London',10,'04:15:00','12:35:00','0000-00-00',15328),(204,'United Airlines','Delhi','Sydney',15,'23:35:00','15:02:00','0000-00-00',58374),(205,'Emirates','Delhi','Dubai',15,'16:15:00','18:10:00','0000-00-00',6470),(206,'Air India','Delhi','Singapore',16,'13:15:00','21:40:00','0000-00-00',13357),(301,'Air India','New York','Mumbai',20,'14:15:00','14:30:00','0000-00-00',77087),(302,'Air India','New York','Delhi',23,'14:30:00','14:10:00','0000-00-00',75572),(303,'Air India','New York','London',11,'22:30:00','10:15:00','0000-00-00',37581),(304,'Delta Airlines','New York','Sydney',15,'18:20:00','07:30:00','0000-00-00',83808),(305,'Aeroflot','New York','Dubai',14,'19:10:00','01:15:00','0000-00-00',56488),(306,'Qatar Airways','New York','Singapore',10,'10:40:00','20:15:00','0000-00-00',79786),(401,'Jet Airways','London','Mumbai',16,'17:05:00','06:50:00','0000-00-00',73232),(402,'WOW Air','London','New York',20,'21:00:00','23:25:00','0000-00-00',79534),(403,'Air India','London','Delhi',22,'09:45:00','22:50:00','0000-00-00',55289),(404,'Delta Airlines','London','Sydney',14,'14:30:00','23:39:00','0000-00-00',158859),(405,'Virgin Atlantic','London','Dubai',10,'22:30:00','08:25:00','0000-00-00',74462),(406,'British Airways','London','Singapore',17,'19:55:00','16:05:00','0000-00-00',124946),(501,'Air Asia','Sydney','Mumbai',18,'20:45:00','11:25:00','0000-00-00',38304),(502,'American Airlines','Sydney','New York',15,'10:15:00','17:48:00','0000-00-00',68181),(503,'Air India','Sydney','London',12,'10:45:00','07:30:00','0000-00-00',46532),(504,'Air India','Sydney','Delhi',25,'09:45:00','18:35:00','0000-00-00',34320),(505,'Air Asia','Sydney','Dubai',13,'20:45:00','11:25:00','0000-00-00',38304),(506,'Scoot','Sydney','Singapore',10,'12:40:00','19:10:00','0000-00-00',9362),(601,'IndiGo','Dubai','Mumbai',16,'18:00:00','22:30:00','0000-00-00',9030),(602,'Air France','Dubai','New York',15,'00:40:00','16:40:00','0000-00-00',71942),(603,'Gulf Air','Dubai','London',10,'23:35:00','15:20:00','0000-00-00',23835),(604,'Jet Airways','Dubai','Sydney',14,'14:45:00','07:25:00','0000-00-00',45235),(605,'SpiceJet','Dubai','Delhi',12,'22:45:00','03:35:00','0000-00-00',7873),(606,'IndiGo','Dubai','Singapore',10,'22:20:00','17:55:00','0000-00-00',21126),(701,'Air India','Singapore','Mumbai',23,'19:15:00','22:05:00','0000-00-00',16891),(702,'Asiana Airlines','Singapore','New York',22,'22:40:00','11:50:00','0000-00-00',71712),(703,'Garuda Indonesia','Singapore','London',17,'22:05:00','20:00:00','0000-00-00',36288),(704,'Singapore Airlines','Singapore','Sydney',18,'20:20:00','05:55:00','0000-00-00',65254),(705,'Emirates','Singapore','Dubai',13,'01:40:00','04:50:00','0000-00-00',39642),(706,'IndiGo','Singapore','Delhi',10,'05:40:00','13:40:00','0000-00-00',13125);
