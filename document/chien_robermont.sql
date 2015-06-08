CREATE DATABASE  IF NOT EXISTS `chien_robermont` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `chien_robermont`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: chien_robermont
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
  `titre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `texte` text,
  `photo` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `rubriques_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_rubriques_idx` (`rubriques_id`),
  CONSTRAINT `fk_articles_rubriques` FOREIGN KEY (`rubriques_id`) REFERENCES `rubriques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Horraire des cours','horraire-des-cours','<h1>Puppies de 3 à 6 mois</h1><p>Mercredi: 17h30 – 18h00</p><p>Dimanche: 9h00 – 9h30</p><hr><h1>Groupe + de 6 mois</h1><p>Mercredi: 18h30 – 19h30</p><p>Dimanche: 9h30 – 10h30</p><hr><h1>Groupe 2 et 3</h1><p>Mercredi: 19h30 – 20h30</p><p>Dimanche: 10h30 – 11h30</p><hr><h1>Groupe Concours</h1><p>Mercredi: 20h30 – 21h30</p><p>Dimanche: 11h30 – 12h30</p>','1.jpg','2015-06-02 00:00:00',3),(2,'Notre méthode de travail','notre-méthode-de-travail','<p><span lang=\"FR\">Nous travaillons d’une manière positive, c’est-à-dire en privilégiant les récompenses plutôt que les sanctions. </span><span lang=\"FR\">Mais tout mauvais comportement tel que: agressivité, aboiements intempestifs… serafermement réprimandé.</span></p><p><span lang=\"FR\">Nos objectifs sont l’éducation et l’apprentissage du programme d’obéissance reconnu par l’URCSH.</span></p><p class=\"MsoNormal\"><span lang=\"FR\">Mais attention, pas d’obéissance sans discipline! Le maitre doit s’investir dans le travail. L’instructeur est là pour le guider dans sa démarche, pas pour le remplacer.</span></p><p class=\"MsoNormal\"><span lang=\"FR\">Le chien doit obéir à son maitre et ce dernier ne doit jamais oublier que c’est un chien et qu’il faut «penser chien».</span></p><p class=\"MsoNormal\"><span lang=\"FR\">Le maitre est «le chef» et le chien doit le reconnaître comme tel sinon il y aura conflit.</span></p>',NULL,'2015-06-01 00:00:00',2),(3,'Nos installations','nos-installations','<ul><li>Accès facile</li><li>Parking aisé</li><li>Terrain spacieux clôturé</li><li>Local accueillant</li><li>Toilettes P.M.R.</li><li>Terrasse</li><li>Possibilité de promenade aux alentours</li></ul>','11.jpg','2015-05-31 00:00:00',2),(4,'Le comité','le-comite','<p><span lang=\"FR\">Le comité actuel se compose de </span></p><ul><li><span lang=\"FR\">Présidente: Roland Chantal ( depuis le 16/10/2001)</span></li><li><span lang=\"FR\">Secrétaire: Deltour Nadine ( depuis 2004)</span></li><li><span lang=\"FR\">Trésorière: Matwitchouck Magali ( depuis le 14/12/2012)</span></li><li><span lang=\"FR\">Vice-trésorier: Joly willy ( depuis le 27/10/2007)</span></li></ul>',NULL,'2015-05-30 00:00:00',2),(5,'L’historique de notre club','l-historique-de-notre-club','<p>Le club a été fondé le 5 octobre 1922. Il est directement affilié à l’Union Royale Cynologique de la Saint-Hubert (URCSH), sous le matricule 0080 et appelé «Le Chien de Défense de Robermont»</p><p>Ses activités ont débuté sur un terrain jouxtant le cimetière de Robermont, rue de Herve. En 1974, suite à l’extension de ce dernier, le club s’est établi rue Malvaux à Grivegnée, sur un terrain privé. Jusqu’à cette époque, on travaillaiten «ring», ce qui explique la dénomination «Chien de Défense». On y dressait des bergers allemands et des bergers malinois.</p><p>En 1986, l’ancienne buvette est remplacée par un nouveau local, construit par l’équipe et inauguré le 30 janvier 1993.</p><p>Suite à l’évolution et à la demande des amateurs, une section «obéissance» voit le jour le 6 septembre 1991. L’accroissement du nombre de membres nécessite un nouvel horaire d’entrainement. Il prend cours le 14 juillet 1992. A partir de cemoment, les entrainements en ring ont lieu les mardis et les jeudis et ceux des «compagnons» les mercredis et dimanches.</p><p>Le 31 décembre 1996, la section «ring» est définitivement fermée. Plus aucun coucours 1B n’aura désormais lieu.</p><p>En 1996, le club opte pour le statut d’ASBL. </p><p>En aout 2007, suite à la vente du terrain rue Malvaux, l’ASBL est contrainte de chercher un nouvel emplacement.</p><p>En mai 2012, le club s’installe sur un terrain communal, situé voie Mélotte à Grivegnée. Grâce à une équipe dynamique, le club ne cesse de prospérer.</p><p>Le 3 aout 2012, l’URCSH accepte la nouvelle dénomination du club: EDUCATION CANINE «LE CHIEN DE ROBERMONT» ASBL</p><p>Le comité actuel se compose de </p><p>– Présidente: Roland Chantal ( depuis le 16/10/2001)</p><p>– Secrétaire: Deltour Nadine ( depuis 2004)</p><p>– Trésorière: Matwitchouck Magali ( depuis le 14/12/2012)</p><p>– Vice-trésorier: Joly willy ( depuis le 27/10/2007)</p>',NULL,'2015-05-29 00:00:00',2),(6,'Evenement n°1','evenement-n-1','Cras tortor lorem, imperdiet eget justo sed, tristique dictum lectus. Nullam ligula ex, blandit quis luctus nec, porta eu sem. Etiam rhoncus accumsan tellus. Phasellus tempor ante ac sapien suscipit faucibus.',NULL,'2015-05-16 00:00:00',4),(7,'Déroulement des cours','deroulement-des-cours','<div><p> Les cours ont lieu 2 fois par semaine : mercredi soir et dimanche matin.</p><p> Le montant de l’inscription est de 50 euros par an et par chien.  Pour les chiens supplémentaires de propriétaires vivant à la même adresse, il s’élève à 25 euros par an et par chien.</p><p> Les entrainements coutent 2 euros la séance. Ils seront payés spontanément au comptoir avant l’entrainement. ( 1 euro pour les chiens de 3 à 6 mois).</p><p> La première fois, munissez-vous </p><ul><li> du passeport du chien (carte de vaccination)</li><li> d’une laisse d’un mètre 20 plus ou moins</li><li> d’un collier (pas de harnais)</li><li> d’un jouet</li><li> de friandises.</li></ul><p> Vous réglez votre séance et si notre méthode de travail vous satisfait, vous payez le montant de l’affiliation au cours suivant. Vous pouvez vous affilier dès la première fois si votre décision est prise.</p><p> Les paiements se font en liquide. </p></div>',NULL,'2015-05-28 00:00:00',3),(8,'Coordonnées','coordonnees','<h1>Adresse<br></h1><div>Voie Mélotte S/N</div><div>&nbsp; 4030 Grivegnée</div><div><hr></div><h1>Personnes de contact</h1><div>Roland Chantal 04 365 58 81 ou 0485 291 236</div><div>Deltour Nadine 04 365 27 89</div>',NULL,'2015-05-27 00:00:00',6);
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
  `titre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'un','un','1.jpg'),(2,'onze','onze','11.jpg'),(3,'Koala','koala',NULL);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubriques`
--

DROP TABLE IF EXISTS `rubriques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubriques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `menu` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubriques`
--

LOCK TABLES `rubriques` WRITE;
/*!40000 ALTER TABLE `rubriques` DISABLE KEYS */;
INSERT INTO `rubriques` VALUES (1,'Accueil','accueil','bg1.jpg',0),(2,'A propos','a-propos','bg2.jpg',1),(3,'Les cours','les-cours','bg3.jpg',1),(4,'Agenda','agenda','bg4.jpg',1),(5,'Medias','medias','bg5.jpg',1),(6,'Contacts','contacts','bg6.jpg',0);
/*!40000 ALTER TABLE `rubriques` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-08 12:03:13
