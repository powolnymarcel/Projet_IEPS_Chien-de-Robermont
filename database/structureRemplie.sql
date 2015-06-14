CREATE DATABASE  IF NOT EXISTS `cdr` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `cdr`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: cdr
-- ------------------------------------------------------
-- Server version	5.6.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rubrique_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `articles_rubrique_id_foreign` (`rubrique_id`),
  CONSTRAINT `articles_rubrique_id_foreign` FOREIGN KEY (`rubrique_id`) REFERENCES `rubriques` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Horaire des cours','horaire-des-cours13062015104416','<h1>Puddppiesde 3 &agrave; 6 mois</h1>\r\n\r\n<p>Mercredi: 17h30 &ndash; 18h00</p>\r\n\r\n<p>Dimanche: 9h00 &ndash; 9h30</p>\r\n\r\n<hr />\r\n<h1>Groupe + de 6 mois</h1>\r\n\r\n<p>Mercredi: 18h30 &ndash; 19h30</p>\r\n\r\n<p>Dimanche: 9h30 &ndash; 10h30</p>\r\n\r\n<hr />\r\n<h1>Groupe 2 et 3</h1>\r\n\r\n<p>Mercredi: 19h30 &ndash; 20h30</p>\r\n\r\n<p>Dimanche: 10h30 &ndash; 11h30</p>\r\n\r\n<hr />\r\n<h1>Groupe Concours</h1>\r\n\r\n<p>Mercredi: 20h30 &ndash; 21h30</p>\r\n\r\n<p>Dimanche: 11h30 &ndash; 12h30</p>\r\n','1.jpg',1,'0000-00-00 00:00:00','2015-06-13 20:44:16'),(2,'Notre méthode de travail','notre-methode-de-travail14062015021022','<p>11Nous travaillons d&rsquo;une mani&egrave;re positive, c&rsquo;est-&agrave;-dire en privil&eacute;giant les r&eacute;compenses plut&ocirc;t que les sanctions. Mais tout mauvais comportement tel que: agressivit&eacute;, aboiements intempestifs&hellip; serafermement r&eacute;primand&eacute;.</p>\r\n\r\n<p>Nos objectifs sont l&rsquo;&eacute;ducation et l&rsquo;apprentissage du programme d&rsquo;ob&eacute;issance reconnu par l&rsquo;URCSH.</p>\r\n\r\n<p>Mais attention, pas d&rsquo;ob&eacute;issance sans discipline! Le maitre doit s&rsquo;investir dans le travail. L&rsquo;instructeur est l&agrave; pour le guider dans sa d&eacute;marche, pas pour le remplacer.</p>\r\n\r\n<p>Le chien doit ob&eacute;ir &agrave; son maitre et ce dernier ne doit jamais oublier que c&rsquo;est un chien et qu&rsquo;il faut &laquo;penser chien&raquo;.</p>\r\n\r\n<p>Le maitre est &laquo;le chef&raquo; et le chien doit le reconna&icirc;tre comme tel sinon il y aura conflit.</p>\r\n','',2,'0000-00-00 00:00:00','2015-06-14 00:10:23'),(3,'Nos installations','nos-installations14062015021026','<ul>\r\n	<li>22Acc&egrave;s facile</li>\r\n	<li>Parking ais&eacute;</li>\r\n	<li>Terrain spacieux cl&ocirc;tur&eacute;</li>\r\n	<li>Local accueillant</li>\r\n	<li>Toilettes P.M.R.</li>\r\n	<li>Terrassed</li>\r\n	<li>Possibilit&eacute; de promenade aux alentours</li>\r\n</ul>\r\n','',2,'0000-00-00 00:00:00','2015-06-14 00:10:26'),(4,'Le comité','le-comite14062015021030','<p>33Le comit&eacute; actuel se compose de</p>\r\n\r\n<ul>\r\n	<li>Pr&eacute;sidente: Roland Chantal ( depuis le 16/10/2001)</li>\r\n	<li>Secr&eacute;taire: Deltour Nadine ( depuis 2004)</li>\r\n	<li>Tr&eacute;sori&egrave;re: Matwitchouck Magali ( depuis le 14/12/2012)</li>\r\n	<li>Vice-tr&eacute;sorier: Joly willy ( depuis le 27/10/2007)</li>\r\n</ul>\r\n','',2,'0000-00-00 00:00:00','2015-06-14 00:10:30'),(5,'L’historique de notre club','lhistorique-de-notre-club14062015021032','<p>44Le club a &eacute;t&eacute; fond&eacute; le 5 octobre 1922. Il est directement affili&eacute; &agrave; l&rsquo;Union Royale Cynologique de la Saint-Hubert (URCSH), sous le matricule 0080 et appel&eacute; &laquo;Le Chien de D&eacute;fense de Robermont&raquo;</p>\r\n\r\n<p>Ses activit&eacute;s ont d&eacute;but&eacute; sur un terrain jouxtant le cimeti&egrave;re de Robermont, rue de Herve. En 1974, suite &agrave; l&rsquo;extension de ce dernier, le club s&rsquo;est &eacute;tabli rue Malvaux &agrave; Grivegn&eacute;e, sur un terrain priv&eacute;. Jusqu&rsquo;&agrave; cette &eacute;poque, on travaillaiten &laquo;ring&raquo;, ce qui explique la d&eacute;nomination &laquo;Chien de D&eacute;fense&raquo;. On y dressait des bergers allemands et des bergers malinois.</p>\r\n\r\n<p>En 1986, l&rsquo;ancienne buvette est remplac&eacute;e par un nouveau local, construit par l&rsquo;&eacute;quipe et inaugur&eacute; le 30 janvier 1993.</p>\r\n\r\n<p>Suite &agrave; l&rsquo;&eacute;volution et &agrave; la demande des amateurs, une section &laquo;ob&eacute;issance&raquo; voit le jour le 6 septembre 1991. L&rsquo;accroissement du nombre de membres n&eacute;cessite un nouvel horaire d&rsquo;entrainement. Il prend cours le 14 juillet 1992. A partir de cemoment, les entrainements en ring ont lieu les mardis et les jeudis et ceux des &laquo;compagnons&raquo; les mercredis et dimanches.</p>\r\n\r\n<p>Le 31 d&eacute;cembre 1996, la section &laquo;ring&raquo; est d&eacute;finitivement ferm&eacute;e. Plus aucun coucours 1B n&rsquo;aura d&eacute;sormais lieu.</p>\r\n\r\n<p>En 1996, le club opte pour le statut d&rsquo;ASBL.</p>\r\n\r\n<p>En aout 2007, suite &agrave; la vente du terrain rue Malvaux, l&rsquo;ASBL est contrainte de chercher un nouvel emplacement.</p>\r\n\r\n<p>En mai 2012, le club s&rsquo;installe sur un terrain communal, situ&eacute; voie M&eacute;lotte &agrave; Grivegn&eacute;e. Gr&acirc;ce &agrave; une &eacute;quipe dynamique, le club ne cesse de prosp&eacute;rer.</p>\r\n\r\n<p>Le 3 aout 2012, l&rsquo;URCSH accepte la nouvelle d&eacute;nomination du club: EDUCATION CANINE &laquo;LE CHIEN DE ROBERMONT&raquo; ASBL</p>\r\n\r\n<p>Le comit&eacute; actuel se compose de</p>\r\n\r\n<p>&ndash; Pr&eacute;sidente: Roland Chantal ( depuis le 16/10/2001)</p>\r\n\r\n<p>&ndash; Secr&eacute;taire: Deltour Nadine ( depuis 2004)</p>\r\n\r\n<p>&ndash; Tr&eacute;sori&egrave;re: Matwitchouck Magali ( depuis le 14/12/2012)</p>\r\n\r\n<p>&ndash; Vice-tr&eacute;sorier: Joly willy ( depuis le 27/10/2007)</p>\r\n','',2,'0000-00-00 00:00:00','2015-06-14 00:10:32'),(6,'Evenement n°1','evenement-n114062015021035','<p>55Cras tortor lorem, imperdiet eget justo sed, tristique dictum lectus. Nullam ligula ex, blandit quis luctus nec, porta eu sem. Etiam rhoncus accumsan tellus. Phasellus tempor ante ac sapien suscipit faucibus.</p>\r\n','',4,'0000-00-00 00:00:00','2015-06-14 00:10:35'),(7,'Déroulement des cours','deroulement-des-cours14062015021040','<p>66Les cours ont lieu 2 fois par semaine : mercredi soir et dimanche matin.</p>\r\n\r\n<p>Le montant de l&rsquo;inscription est de 50 euros par an et par chien. Pour les chiens suppl&eacute;mentaires de propri&eacute;taires vivant &agrave; la m&ecirc;me adresse, il s&rsquo;&eacute;l&egrave;ve &agrave; 25 euros par an et par chien.</p>\r\n\r\n<p>Les entrainements coutent 2 euros la s&eacute;ance. Ils seront pay&eacute;s spontan&eacute;ment au comptoir avant l&rsquo;entrainement. ( 1 euro pour les chiens de 3 &agrave; 6 mois).</p>\r\n\r\n<p>La premi&egrave;re fois, munissez-vous</p>\r\n\r\n<ul>\r\n	<li>du passeport du chien (carte de vaccination)</li>\r\n	<li>d&rsquo;une laisse d&rsquo;un m&egrave;tre 20 plus ou moins</li>\r\n	<li>d&rsquo;un collier (pas de harnais)</li>\r\n	<li>d&rsquo;un jouet</li>\r\n	<li>de friandises.</li>\r\n</ul>\r\n\r\n<p>Vous r&eacute;glez votre s&eacute;ance et si notre m&eacute;thode de travail vous satisfait, vous payez le montant de l&rsquo;affiliation au cours suivant. Vous pouvez vous affilier d&egrave;s la premi&egrave;re fois si votre d&eacute;cision est prise.</p>\r\n\r\n<p>Les paiements se font en liquide.</p>\r\n','',3,'0000-00-00 00:00:00','2015-06-14 00:10:40'),(8,'Coordonnées','coordonnees','<h1>Adresse<br></h1><div>Voie Mélotte S/N</div><div>&nbsp; 4030 Grivegnée</div><div><hr></div><h1>Personnes de contact</h1><div>Roland Chantal 04 365 58 81 ou 0485 291 236</div><div>Deltour Nadine 04 365 27 89</div>',NULL,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,'Gallerie','Gallerie','GallerieGallerieGallerieGallerieGallerie','C:\\wamp\\tmp\\php85BE.tmp',5,'2015-06-13 21:00:14','2015-06-13 21:09:11'),(51,'Horaire des cours','horaire-des-cours14062015021045','<h1>77Puddppiesde 3 &agrave; 6 mois</h1>\r\n\r\n<p>Mercredi: 17h30 &ndash; 18h00</p>\r\n\r\n<p>Dimanche: 9h00 &ndash; 9h30</p>\r\n\r\n<hr />\r\n<h1>Groupe + de 6 mois</h1>\r\n\r\n<p>Mercredi: 18h30 &ndash; 19h30</p>\r\n\r\n<p>Dimanche: 9h30 &ndash; 10h30</p>\r\n\r\n<hr />\r\n<h1>Groupe 2 et 3</h1>\r\n\r\n<p>Mercredi: 19h30 &ndash; 20h30</p>\r\n\r\n<p>Dimanche: 10h30 &ndash; 11h30</p>\r\n\r\n<hr />\r\n<h1>Groupe Concours</h1>\r\n\r\n<p>Mercredi: 20h30 &ndash; 21h30</p>\r\n\r\n<p>Dimanche: 11h30 &ndash; 12h30</p>\r\n','',3,'0000-00-00 00:00:00','2015-06-14 00:10:45'),(53,'ezzerte','ezzerte14062015020857','<p>zreyezryzrty</p>\r\n','',2,'2015-06-14 00:08:57','2015-06-14 00:08:57'),(54,'teryth\'','teryth14062015020907','<p>(&#39;y&quot;&#39;y</p>\r\n','',3,'2015-06-14 00:09:07','2015-06-14 00:09:07');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'Un','un','1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Onze','onze','11.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Koala','koala','koala.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'tutu','71324png14062015022414','71324.png','2015-06-14 00:24:14','2015-06-14 00:24:14');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_06_08_101640_create_rubriques_table',2),('2015_06_08_105502_create_rubriques_table',3),('2015_06_08_105526_create_articles_table',3),('2015_06_08_110720_create_media_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('marcel@marcel.com','35f5c6c6aa3945a6e8aee5e6e7e629c469caf7ba39d42171bae77d02be357e97','2015-06-12 05:50:25');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubriques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubriques`
--

LOCK TABLES `rubriques` WRITE;
/*!40000 ALTER TABLE `rubriques` DISABLE KEYS */;
INSERT INTO `rubriques` VALUES (1,'Accueil','accueil','bg1.jpg',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'A propos','a-propos','bg2.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Les cours','les-cours','bg3.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Agenda','agenda','bg4.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Medias','medias','bg5.jpg',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Contacts','contacts','bg6.jpg',0,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `rubriques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'marcel','marcel@marcel.com','$2y$10$q2LHxcETM2PH5dYsNQgbRuAiy0kc3ibt0Lwjb8xopHHDM8Fi5Ahsi',NULL,'2015-06-12 05:53:04','2015-06-12 05:53:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-14  4:35:02
