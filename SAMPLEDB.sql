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
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `guides` */

insert  into `guides`(`id`,`game_id`,`user_id`,`title`) values (1,1,1,'The Elder Scrolls V: Skyrim'),(47,3,1,'Test'),(15,2,1,'ME3 Guide'),(16,1,1,'ME3 Guide'),(42,3,1,'Test'),(44,3,1,'Test'),(38,3,1,'Test'),(27,2,1,'ME3 2.0'),(37,2,1,'Test'),(36,2,1,'Test'),(30,2,1,'ME320');

/*Table structure for table `missions` */

DROP TABLE IF EXISTS `missions`;

CREATE TABLE `missions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `rewards` text,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `missions` */

insert  into `missions`(`id`,`section_id`,`title`,`description`,`rewards`) values (1,NULL,'asdfas',NULL,NULL),(6,3,'Mission 1',NULL,NULL),(3,2,'asdfas',NULL,NULL),(4,2,'asdfas',NULL,NULL),(7,4,'Unbound','Not Wanted, Going to Die Anyway\r\n\r\nThe game begins with you in Imperial custody, alongside Jarl Ulfric Stormcloak, Ralof, and a horse thief named Lokir. You were taken prisoner after running into an Imperial Army ambush while crossing the border to Skyrim. The prisoner caravan you are part of is destined for the small Empire stronghold of Helgen. After you get off the cart, the guards begin calling out names, looking for members of the Stormcloaks. Eventually, you are ordered by an Imperial soldier named Hadvar to identify yourself, which will lead to a prompt to create your character. Despite your lack of involvement with the Stormcloaks, the captain of the guard orders you to be executed. A Priestess of Arkay will start saying a prayer, but as soon as she mentions the eight divines a stormcloak will interrupt her, and the executions begin. Not long after the executions start, they call you forward. Following the direction given to you by the guards, you lie down on the execution block.\r\n\r\nCognitus Interruptus\r\n\r\nRight before the executioner can bring his halberd down on your neck, the dragon Alduin arrives and disrupts the execution. With the execution stopped and the guard in chaos, you take the opportunity to escape custody, and at this point the cinematic ends and you gain control of your character\'s movement with Ralof desperately yelling at you to get up. Run with Ralof towards the nearby tower, in which you will find several Stormcloak soldiers and Ulfric Stormcloak, who also escaped in the panic. Climb the stairs to where a Stormcloak Soldier is trying to move some rubble blocking access to the rest of the tower. Alduin will blast a hole through the wall and use a shout to breathe fire into the tower. Ralof will instruct you to jump out of the tower through the hole into a nearby building, with the promise that he will meet up with you when he can.\r\n\r\nAfter jumping down and exiting the inn, you will find that Helgen has become heavily damaged in quite a short time, with many buildings ruined and burning.The defending Imperial soldiers are caught up in the battle and are too busy to take any notice of you. Run into the street and you will encounter Hadvar, attempting to rush civilians to safety. One injured Nord, Torolf, unfortunately fails to escape the carnage, and is killed by the dragon\'s fire breath. After Alduin flies away to attack other targets, Hadvar will tell you to follow him if you want to stay alive. He will lead you towards Helgen Keep, a large Imperial fort in the village. At the entrance to the Keep, Ralof will catch up with you. At this point you must choose whether you wish to accompany Ralof or Hadvar for the remainder of the quest.',NULL),(8,4,'Before the Storm','First Steps\r\n\r\nAs you head out from the dungeon with either Hadvar or Ralof, the dragon that attacked Helgen will travel over your head. Hadvar or Ralof will advise you to get down, but you\'re free to stand up and watch the dragon fly away. Hadvar or Ralof will comment on the dragon and continue on the path. You can now explore the area and advance to Riverwood at your own pace or follow whoever is accompanying you down the path. Following Hadvar or Ralof does not grant any special bonuses, but you do get to listen to your companion detail about the world around you, and they will point out the Guardian Stones and let you pick one that suits your character. You may encounter a few lone wolves along the path. Exploring does have some advantages: any wolves you meet will yield pelts when killed, and you can check out the nearby Embershard Mine. You can also catch some salmon in the river, and there are usually some elk or other prey to hunt along the way, which yield hides, venison, and occasionally antlers to use in alchemy. At the end of the path, you and Hadvar or Ralof will arrive at Riverwood.\r\n\r\nA Friend of a Friend\r\n\r\nOnce you arrive at the village of Riverwood, you will be directed to speak to Alvor, the local smith (if you chose to follow Hadvar during the flight from Helgen) or Gerdur, the woodmill worker (if you chose to follow Ralof). Explain your situation and he or she will recommend you seek out the Jarl of the region, Jarl Balgruuf the Greater at his palace in Whiterun. They will also offer you what assistance they can (in the form of some low level food, potions and jewelry) to get you started. No matter what choice you have made, you can also help Alvor around his shop for some smithing experience, and Gerdur\'s husband Hod will pay you for any firewood obtained by working at the lumber mill (or anywhere else).\r\n\r\nTo Whiterun\r\n\r\nHead out over the bridge out of town and follow the path north to Whiterun. Upon arrival at the main gate, a guard will tell you the city is closed to visitors. Any one of the dialogue options you are presented with will have him let you in the city. Once inside, follow the path up to Dragonsreach and enter. When you approach the Jarl, his housecarl will ask you why you are interrupting the meeting; any dialogue option will gain you an audience. Speak with Jarl Balgruuf to complete the quest and begin the next. The Jarl will reward you with a piece of leveled armor. Whether you receive light or heavy is governed by your aptitude in those skills.',NULL),(9,4,'Bleak Falls Barrow','Meet the Court Wizard\r\n\r\nDuring the final stages of the quest Before the Storm, you will be tasked with a trip from Riverwood to Whiterun to tell Jarl Balgruuf about what happened in Helgen. Make your way to the Dragonsreach palace, where you will be stopped by the housecarl Irileth, who will demand a good reason to interrupt the jarl. You can either tell her about the dragon or report that Riverwood calls for the Jarl\'s aid, both of which will grant you an immediate audience. Deliver the news to Balgruuf, who will order troops to be sent to Riverwood at once and then present you with a reward. He will then remember a job suitable for an adventurer such as yourself and lead you to the court wizard Farengar Secret-Fire, who has been researching dragons. Farengar wants you to fetch the unique Dragonstone from Bleak Falls Barrow, an ancient Nordic tomb near Riverwood. When you question him on what he knows about the quest, he will keep his information sources secret.\r\n\r\nNote: If you already cleared Bleak Falls Barrow and retrieved the Dragonstone during the quest The Golden Claw, then Farengar will prompt you to hand it over immediately and complete the quest. See the notes section for what you may have missed.\r\n\r\nBleak Falls Barrow\r\n\r\nAs the concurrent quest The Golden Claw runs simultaneously with this quest, travel to Riverwood and enter Riverwood Trader. Talk to the proprietor, who will tell you that a precious item was stolen from the main trading room, which will trigger the quest. Locate the ancient barrow and fight the bandits protecting the entrance. Bleak Falls Temple starts with a giant chamber with dead skeevers scattered about and the voices of two bandit inhabitants audible from the back of the room, discussing something of great importance. If you have not yet triggered The Golden Claw, it will begin now, due to the subject of the conversation:\r\n\r\nBandit #1: \"So we\'re just supposed to sit here while Arvel runs off with that golden claw?\"\r\nBandit #2: \"That dark elf wants to go on ahead, let him. Better than us risking our necks.\"\r\nBandit #1: \"What if Arvel doesn\'t come back? I want my share from that claw!\"\r\nBandit #2: \"Just shut it and keep an eye out for trouble.\"',NULL),(10,4,'Dragon Rising','Talk to Jarl Balgruuf\r\n\r\nShortly after you return the Dragonstone to Farengar, a scout will approach to inform him that there has been a sighting of a dragon at the Western Watchtower outside of Whiterun. The scout asks you to meet Jarl Balgruuf in the strategy room. Follow her and Farengar up the stairs beside and behind the Jarl\'s seat. He will tell you to accompany his housecarl, Irileth, as she heads for the western gate. She will recruit several Whiterun Guards along the way.\r\n\r\nMeet Irileth near the Western Watchtower\r\n\r\nFollow Irileth to an area outside the west gate or meet her there. After she delivers a speech to rally her soldiers, follow them west towards the tower.\r\n\r\nYou will gather near the road close to the watchtower to find the watchtower burned and smoking, evidently signs of a recent attack by a dragon. After a short talk, Irileth will give orders to search for survivors. On the north side of the tower, on or around the ramp leading to the interior, you will encounter a single rattled surviving Whiterun Guard, stammering about what he has just been through. Shortly after hearing this, you will hear several warnings that the dragon has returned. Irileth will advise taking cover against the dragon\'s attacks and to \"make every arrow count\".',NULL),(11,4,'The Way of the Voice',NULL,NULL),(12,4,'The Horn of Jurgen Windcaller',NULL,NULL),(13,4,'A Blade in the Dark',NULL,NULL),(14,4,'Diplomatic Immunity',NULL,NULL),(15,4,'A Cornered Rat',NULL,NULL),(16,4,'Alduin\'s Wall',NULL,NULL),(17,4,'The Throat of the World',NULL,NULL),(18,4,'Elder Knowledge',NULL,NULL),(19,4,'Alduin\'s Bane',NULL,NULL),(20,4,'The Fallen',NULL,NULL),(21,4,'The World-Eater\'s Eyrie',NULL,NULL),(22,4,'Sovngarde',NULL,NULL),(23,4,'Dragonslayer',NULL,NULL);

/*Table structure for table `sections` */

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guide_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sections` */

insert  into `sections`(`id`,`guide_id`,`title`) values (4,1,'Main Quest'),(3,10,'Section'),(5,15,'Main Quest');

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
