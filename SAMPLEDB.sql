/*
SQLyog Community v10.2 Beta1
MySQL - 5.1.36-community-log : Database - gameapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gameapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gameapp`;

/*Table structure for table `games` */

DROP TABLE IF EXISTS `games`;

CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `games` */

insert  into `games`(`id`,`title`) values (1,'The Elder Scrolls V: Skyrim'),(2,'Mass Effect 3'),(3,'Diablo 3'),(4,'Final Fantasy XIII-2'),(5,'Risen 2: Dark Water'),(6,'Saints Row: The Third'),(7,'Disgaea 3: Absence of Justice'),(8,'Game of Thrones'),(9,'Kingdoms of Amalur: Reckoning'),(10,'The Witcher 2: Assassins of Kings'),(11,'Torchlight II');

/*Table structure for table `guides` */

DROP TABLE IF EXISTS `guides`;

CREATE TABLE `guides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `guides` */

insert  into `guides`(`id`,`game_id`,`user_id`,`title`) values (1,1,1,'The Elder Scrolls V: Skyrim'),(32,1,1,'New Guide'),(10,1,1,'New'),(15,2,1,'ME3 Guide'),(16,1,1,'ME3 Guide'),(17,2,1,'Test'),(18,2,1,'Test'),(19,2,1,'asdf'),(26,2,1,'ME3 2.0'),(27,2,1,'ME3 2.0'),(28,2,1,'ME320'),(29,2,1,'ME320'),(30,2,1,'ME320');

/*Table structure for table `missions` */

DROP TABLE IF EXISTS `missions`;

CREATE TABLE `missions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `rewards` text,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `missions` */

insert  into `missions`(`id`,`section_id`,`title`,`description`,`rewards`) values (1,NULL,'asdfas',NULL,NULL),(6,3,'Mission 1',NULL,NULL),(3,2,'asdfas',NULL,NULL),(4,2,'asdfas',NULL,NULL),(7,4,'Unbound','1. Make your way to the keep.\r\n2. Jump down into the town.\r\n3. Follow Hadvar to shelter from the raid.\r\n4. Either have the Stormcloak Ralof or the Imperial soldier Hadvar escort you through Helgen Keep.\r\n5. Get equipped and fight your way to a secret exit from Helgen.\r\n6. Follow Hadvar or Ralof to the village of Riverwood.\r\n',NULL),(8,4,'Before the Storm','First Steps\r\n\r\nAs you head out from the dungeon with either Hadvar or Ralof, the dragon that attacked Helgen will travel over your head. Hadvar or Ralof will advise you to get down, but you\'re free to stand up and watch the dragon fly away. Hadvar or Ralof will comment on the dragon and continue on the path. You can now explore the area and advance to Riverwood at your own pace or follow whoever is accompanying you down the path. Following Hadvar or Ralof does not grant any special bonuses, but you do get to listen to your companion detail about the world around you, and they will point out the Guardian Stones and let you pick one that suits your character. You may encounter a few lone wolves along the path. Exploring does have some advantages: any wolves you meet will yield pelts when killed, and you can check out the nearby Embershard Mine. You can also catch some salmon in the river, and there are usually some elk or other prey to hunt along the way, which yield hides, venison, and occasionally antlers to use in alchemy. At the end of the path, you and Hadvar or Ralof will arrive at Riverwood.\r\n\r\nA Friend of a Friend\r\n\r\nOnce you arrive at the village of Riverwood, you will be directed to speak to Alvor, the local smith (if you chose to follow Hadvar during the flight from Helgen) or Gerdur, the woodmill worker (if you chose to follow Ralof). Explain your situation and he or she will recommend you seek out the Jarl of the region, Jarl Balgruuf the Greater at his palace in Whiterun. They will also offer you what assistance they can (in the form of some low level food, potions and jewelry) to get you started. No matter what choice you have made, you can also help Alvor around his shop for some smithing experience, and Gerdur\'s husband Hod will pay you for any firewood obtained by working at the lumber mill (or anywhere else).\r\n\r\nTo Whiterun\r\n\r\nHead out over the bridge out of town and follow the path north to Whiterun. Upon arrival at the main gate, a guard will tell you the city is closed to visitors. Any one of the dialogue options you are presented with will have him let you in the city. Once inside, follow the path up to Dragonsreach and enter. When you approach the Jarl, his housecarl will ask you why you are interrupting the meeting; any dialogue option will gain you an audience. Speak with Jarl Balgruuf to complete the quest and begin the next. The Jarl will reward you with a piece of leveled armor. Whether you receive light or heavy is governed by your aptitude in those skills.',NULL),(9,4,'Bleak Falls Barrow','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a tristique lectus. In aliquet elit sed turpis hendrerit sagittis. Suspendisse nec massa eu leo ullamcorper porta sed vel nisi. Aliquam vulputate luctus nunc, sit amet aliquam enim placerat sed. Duis a enim ut tellus accumsan sollicitudin vel ut mauris. Fusce dapibus, mi egestas luctus dignissim, augue tellus interdum nunc, quis aliquam justo est et eros. Cras hendrerit, ante vitae adipiscing egestas, orci dolor accumsan dolor, ut lobortis erat metus at nisi.\r\n\r\nInteger varius diam ut magna lacinia sit amet mattis sapien commodo. Nullam accumsan mollis felis a consequat. Quisque sit amet felis lectus, vitae gravida dolor. Nullam malesuada faucibus porta.',NULL),(10,4,'Dragon Rising',NULL,NULL),(11,4,'The Way of the Voice',NULL,NULL),(12,4,'The Horn of Jurgen Windcaller',NULL,NULL),(13,4,'A Blade in the Dark',NULL,NULL),(14,4,'Diplomatic Immunity',NULL,NULL),(15,4,'A Cornered Rat',NULL,NULL),(16,4,'Alduin\'s Wall',NULL,NULL),(17,4,'The Throat of the World',NULL,NULL),(18,4,'Elder Knowledge',NULL,NULL),(19,4,'Alduin\'s Bane',NULL,NULL),(20,4,'The Fallen',NULL,NULL),(21,4,'The World-Eater\'s Eyrie',NULL,NULL),(22,4,'Sovngarde',NULL,NULL),(23,4,'Dragonslayer',NULL,NULL);

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guide_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sections` */

insert  into `sections`(`id`,`guide_id`,`title`) values (4,1,'Main Quest'),(3,10,'Section');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varbinary(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`created`,`modified`,`role`) values (1,'jack','211851936bdec6a46857121dbab3cb351037f537','2012-07-06 16:50:15','2012-07-06 16:50:15',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
