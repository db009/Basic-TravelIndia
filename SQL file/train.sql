# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-08-06 14:13:40
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "train"
#

DROP TABLE IF EXISTS `train`;
CREATE TABLE `train` (
  `TrainId` int(11) NOT NULL AUTO_INCREMENT,
  `Train_No` varchar(255) NOT NULL DEFAULT '',
  `Train_Name` varchar(255) NOT NULL DEFAULT '',
  `Origin` varchar(255) NOT NULL DEFAULT '',
  `Destination` varchar(255) NOT NULL DEFAULT '',
  `Seats` varchar(255) DEFAULT NULL,
  `Departure_time` time NOT NULL DEFAULT '00:00:00',
  `Arrival_time` time NOT NULL DEFAULT '00:00:00',
  `Date` date NOT NULL DEFAULT '0000-00-00',
  `Fare` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TrainId`)
) ENGINE=InnoDB AUTO_INCREMENT=606 DEFAULT CHARSET=latin1;

#
# Data for table "train"
#

INSERT INTO `train` VALUES (101,'12101','JNANESWARI DELX','Mumbai','Kolkata','124','20:35:00','03:35:00','2018-07-29',740),(102,'12431','RAJDHANI EXPRESS','Mumbai','Delhi','152','20:40:00','16:55:00','2018-07-28',580),(103,'12163','CHENNAI EXPRESS','Mumbai','Chennai','78','20:30:00','19:45:00','2018-07-29',525),(104,'11301','KOYNA EXPRESS','Mumbai','Pune','55','08:40:00','11:40:00','2018-08-20',485),(105,'12133','MANGALORE EXPRESS','Mumbai','Goa','54','22:02:00','08:50:00','2018-08-19',325),(201,'12152','SAMARSATA EXPRESS','Kolkata','Mumbai','98','21:15:00','06:27:00','2018-08-05',760),(202,'12303','POORVA EXPRESS','Kolkata','Delhi','58','08:05:00','06:05:00','2018-07-28',630),(203,'12130 ','AZAD HIND EXPRESS','Kolkata','Pune','90','21:50:00','06:50:00','2018-07-27',750),(204,'18047','AMARAVATHI EXPRESS','Kolkata','Goa','88','23:30:00','13:55:00','2018-07-30',730),(205,'12841','COROMANDAL EXPRESS','Kolkata','Chennai','101','14:50:00','17:00:00','2018-07-28',665),(301,'09006','NDLS MMCT SF SPL','Delhi','Mumbai','104','14:50:00','00:55:00','2018-08-08',630),(302,'11078','JHELUM EXPRES','Delhi','Pune','123','09:55:00','15:10:00','2018-08-05',615),(303,'16032','ANDAMAN EXPRESS','Delhi','Chennai','115','13:30:00','10:20:00','2018-08-07',750),(304,'12274','HWH DURONTO EXP','Delhi','Kolkata','108','12:55:00','10:40:00','2018-07-29',605),(305,'12450','GOA SMPRK K EXP','Delhi','Goa','120','06:00:00','15:40:00','2018-07-31',725),(401,'11042','MUMBAI EXPRESS','Chennai','Mumbai','45','12:20:00','13:35:00','2018-08-01',525),(402,'11042','MUMBAI EXPRESS','Chennai','Pune','73','12:20:00','09:30:00','2018-07-28',485),(403,'22842','MAS SRC ANTYODAYA','Chennai','Kolkata','69','08:10:00','10:25:00','2018-07-31',635),(404,'17311','MAS VASCO EXP','Chennai','Goa','47','15:00:00','11:55:00','2018-08-03',470),(405,'12615','GRAND TRUNK EXP','Chennai','Delhi','154','19:15:00','06:30:00','2018-08-30',780),(501,'12431','RAJDHANI EXP','Goa','Mumbai','93','10:55:00','20:40:00','2018-07-28',345),(502,'12779','GOA EXPRESS','Goa','Delhi','69','15:45:00','06:20:00','2018-07-30',725),(503,'11098','POORNA EXP','Goa','Pune','46','14:05:00','05:05:00','2018-07-31',345),(504,'17312','VSG CHENNAI EXP','Goa','Chennai','79','15:15:00','11:45:00','2018-08-02',470),(505,'18048','VSG HOWRAH EXP','Goa','Kolkata','73','07:45:00','21:58:00','2018-07-29',730),(601,'12779','GOA EXPRESS','Pune','Delhi','105','04:10:00','06:20:00','2018-08-02',600),(602,'12779','GOA EXPRESS','Pune','Goa','117','05:10:00','07:10:00','2018-08-02',710),(603,'12163','CHENNAI EXPRESS','Pune','Chennai','122','12:10:00','19:45:00','2018-08-01',515),(604,'18519','VSKP LLT EXPRESS','Pune','Mumbai','135','01:00:00','04:40:00','2018-08-03',200),(605,'12129','AZAD HIND EXP','Pune','Kolkata','130','18:25:00','04:10:00','2018-08-03',600),(606,'','','','','','00:00:00','00:00:00','0000-00-00',0);
