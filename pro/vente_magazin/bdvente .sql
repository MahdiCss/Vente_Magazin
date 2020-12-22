-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 21 mai 2018 à 12:40
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdvente`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminlog`
--

DROP TABLE IF EXISTS `adminlog`;
CREATE TABLE IF NOT EXISTS `adminlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `logadmin` varchar(20) DEFAULT NULL,
  `passadmin` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adminlog`
--

INSERT INTO `adminlog` (`id`, `logadmin`, `passadmin`) VALUES
(1, 'boulbeba', 'boulbeba');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomcat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nomcat`) VALUES
(1, 'Ordinateurs & Tablettes'),
(2, 'Telephonie'),
(3, 'Stockage'),
(4, 'Impression & Copieurs'),
(5, 'TV-Son-Photos'),
(6, 'Accessories'),
(7, 'Composants'),
(8, 'Reseau & Securite'),
(9, 'Bureautique');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `cin` int(11) NOT NULL,
  `etat` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `email`, `pass`, `nom`, `prenom`, `tel`, `adresse`, `cin`, `etat`) VALUES
(9, 'boulbebazz@yahoo.fr', '21404271', 'nom', 'bouaziz', 21404271, 'cité el habib sfax', 11068795, 'non bloque'),
(6, 'boulbeba115@gmail.com', '123456', 'nom', 'bouaziz', 12345678, 'sfax', 12345678, 'non bloque'),
(11, 'boulbeba115@gdil.com', 'ddddddd', 'nom', 'sss', 23180613, 'citÃ© el habib', 11068795, 'non bloque');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `message`, `date`) VALUES
(5, 'zzzz', 'boulbebazz@yahoo.fr', 'ccccccccccccccccccccc', '2018-04-10'),
(6, 'boulbeba', 'mail', 'dddddddd', '2018-05-19'),
(7, 'boulbeba', 'mail', 'rrrrrrrrrrrrrr', '2018-05-19'),
(8, 'boulbeba', 'mail', 'rrrrrrrrrrrrrrrrrrr', '2018-05-19'),
(15, 'boulbeba', 'boulbebazz@yahoo.fr', 'OOOOOOOOOOOO', '2018-05-20'),
(10, 'boulbeba', 'boulbebazz@yahoo.fr', 'sssssssssssssssssssssssssssss', '2018-05-19'),
(11, 'boulbeba', 'boulbebazz@yahoo.fr', 'dddddddddddd', '2018-05-19'),
(12, 'boulbeba', 'boulbebazz@hotmail.fr', 'ddddddddsv boulbeba bouazizii fdpjspodbjpsdjbpmsdjbmsjbpmsdjbpmdjbpjpsjoojebdpjsdjdjbsibjpsjbpsjbpfbsfssf', '2018-05-19'),
(13, 'boulbeba', 'boulbebazz@hotmail.fr', 'ddddddddsv boulbeba bouazizii fdpjspodbjpsdjbpmsdjbmsjbpmsdjbpmdjbpjpsjoojebdpjsdjdjbsibjpsjbpsjbpfbsfssf', '2018-05-19'),
(14, 'ssssssss', 'ssss@ssss.sssss', 'ssssssssssssssss', '2018-05-19'),
(16, 'boulbeba', 'boulbebazz@yahoo.fr', 'SSSSSSSSSSSSSSSSDDDDDDDDDCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC', '2018-05-20');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idprod` int(11) NOT NULL AUTO_INCREMENT,
  `nomprod` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `prixprod` double NOT NULL,
  `quantiteprod` int(11) NOT NULL,
  `imageprod` varchar(500) CHARACTER SET latin1 NOT NULL,
  `categorie` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idprod`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idprod`, `nomprod`, `prixprod`, `quantiteprod`, `imageprod`, `categorie`, `description`) VALUES
(59, 'GAMER CROSS', 1929, 19, 'image_produit/d61a328561119583444e250036006e813.jpg', 'Ordinateurs & Tablettes', 'Processeur i3-8100, 7&egrave; G&eacute;n&eacute;ration, 3.6 Ghz, 6 Mo de m&eacute;moire cache - M&eacute;moire 16 Go DDR4 - Disque 1 To - Carte Graphique GTX 1050, 2 Go de m&eacute;moire DDR5 d&eacute;di&eacute;e - Garantie 2 ans'),
(60, 'GAMER PANTHER', 2200, 15, 'image_produit/0decd736e9cee73e63418003b47d7d562.jpg', 'Ordinateurs & Tablettes', 'Processeur i5-8400, 8&egrave; G&eacute;n&eacute;ration, up to 4 Ghz, 9 Mo de m&eacute;moire cache - M&eacute;moire 8 Go DDR4 - Disque 1 To - Carte Graphique GTX 1050 Ti, 4 Go de m&eacute;moire DDR5 d&eacute;di&eacute;e - Garantie 2 ans'),
(57, 'GAMER FLEX', 1300, 20, 'image_produit/631e08b59d01b18c9d5477a62647e03bpc-de-bureau-gamer-casper-i7-7e-gen-8-go-gtx-1050-ti-4g.png', 'Ordinateurs & Tablettes', 'Processeur i3-7100, 7&egrave; G&eacute;n&eacute;ration, 3.9 Ghz, 3 Mo de m&eacute;moire cache - M&eacute;moire 8 Go DDR4 - Disque 500 Go - Carte Graphique GT 1030, 2 Go de m&eacute;moire DDR5 d&eacute;di&eacute;e - Garantie 2 ans'),
(56, 'acer predator helios', 2620, 15, 'image_produit/6bd2ab1de93563ccc2ac555b8f1808depc-portable-acer-predator-helios-300-i5-7e-gen-8-go.jpg', 'Ordinateurs & Tablettes', 'Ecran 15.6&quot; IPS Full HD - Processeur Intel Core i5-7300HQ, up to 3.5 GHz, 6 Mo de m&eacute;moire cache - M&eacute;moire 8 Go DDR4 - Disque 1 To - Carte graphique Nvidia GeForce GTX 1060, 6 Go de m&eacute;moire d&eacute;di&eacute;e - Clavier r&eacute;tro&eacute;clair&eacute; - Lecteur de cartes - HDMI - USB 3.0 - Wifi - Bluetooth - Webcam HD - Garantie 1 an'),
(55, 'hp omen 15', 2300, 10, 'image_produit/c6eb87251fae45835f27ecee7f826604pc-portable-hp-omen-15-ax209nk-i7-7e-gen-12-go.jpg', 'Ordinateurs & Tablettes', 'Ecran 15.6&#039;&#039; FHD IPS - Processeur Intel Core i7-7700HQ, up to 3.8 Ghz, 6Mo de m&eacute;moire cache - M&eacute;moire 12 Go DDR4 - Disque 1 To - Carte graphique NVIDIA GeForce GTX 1050, 4 Go de m&eacute;moire GDDR5 d&eacute;di&eacute;e - Wifi - Bluetooth - 1x USB 3.1 Type-C - 3x USB 3.1 1e G&eacute;n - HDMI - RJ45  - Garantie 1 an'),
(91, 'asus strix gl503vd', 2599, 20, 'image_produit/735143e9ff8c47def504f1ba0442df98pc-portable-asus-strix-gl503vd-i7-7e-gen-12-go.jpg', 'Ordinateurs & Tablettes', 'Ecran 15.6&quot; Full HD - Processeur Intel Core i7-7700HQ 7&egrave; G&eacute;n, up to 3.8 Ghz, 6Mo de cache - M&eacute;moire 12Go DDR4 - Disque 1To + 128Go SSD M.2 - Carte graphique Nvidia GeForce GTX 1050, 4Go de m&eacute;moire GDDR5 d&eacute;di&eacute;e - Clavier r&eacute;tro&eacute;clair&eacute; - Boitier en m&eacute;tal - Lecteur de cartes - Wifi - Bluetooth - USB 3.0 Type C - 3xUSB 3.0 - HDMI - Webcam avec Micro - Garantie 2 ans'),
(53, 'acer aspire-v-nitro', 1800, 20, 'image_produit/d2319feb7864f7123a48f0ce98e09936pc-portable-acer-aspire-v-nitro-vn7-592g-i5-6e-gen-8-go.jpg', 'Ordinateurs & Tablettes', 'Ecran 15.6&quot; Full HD LED - Processeur Intel Core i5-6300HQ, up to 3.2 GHz, 6 Mo de m&eacute;moire cache - M&eacute;moire 12 Go DDR4 - Disque 1 To + 8 Go SSD - Carte graphique Nvidia GeForce GTX 960M, 4 Go de m&eacute;moire d&eacute;di&eacute;e - Lecteur de cartes - HDMI - 3xUSB 3.0 - Wifi - Bluetooth - Webcam 3D - Garantie 1 an'),
(54, 'lenovo legion y520', 1999, 29, 'image_produit/2705e8fde87cd2883e9fc1f00335685fpc-portable-lenovo-legion-y520-i5-7e-gen-8-go.jpg', 'Ordinateurs & Tablettes', '\r\nEcran 15.6&quot; Full HD IPS LED - Processeur Intel Core i5-7300HQ 7&eacute; G&eacute;n&eacute;ration, up to 3.50 GHz, 6 Mo de m&eacute;moire cache - M&eacute;moire 8 Go DDR4 2400Mhz - Disque 1 To - Carte graphique Nvidia GeForce GTX 1050, 4 Go de m&eacute;moire DDR5 d&eacute;di&eacute;e - Wifi - Bluetooth - Webcam HD avec Micro - USB 3.1 Type C - USB 3.0 - HDMI - VGA - Garantie 2 ans'),
(61, 'versus-v401', 129, 100, 'image_produit/6dcb94fb55921f2416219b454651bffctelephone-portable-versus-v401-double-sim-3g-gris-sim-offerte.jpg', 'Telephonie', 'Double SIM - Ecran 4&quot; WVGA - Processeur Quad Core 1.3 Ghz - RAM 512 Mo - M&eacute;moire 8 Go - Android 6.0 Marshmallow - 2x Appareils Photos 2 M&eacute;gapixels (Arri&egrave;re), 2 M&eacute;gapixels (Frontale) - 3G - Wifi - Batterie 1500 mAh - Couleur Gris  - Garantie 1 an + SIM Data avec 1Go d&#039;Internet ou SIM Voix Offerte'),
(62, 'Smartek M5', 205, 150, 'image_produit/a283c2fa682d70aae6928ffd73c13363telephone-portable-smartek-m5-double-sim-gris-etui-silicone-sim-offerte.jpg', 'Telephonie', 'Double SIM - Ecran 5.0&quot; HD IPS - R&eacute;solution: 1280x720 pixels - Processeur MT6735 Quad Core 1.3GHz - RAM 1Go - M&eacute;moire 8Go Extensible jusqu&#039;&agrave; 32Go - Android 5.1 Lollipop - 2x Appareils Photo 8 M&eacute;gapixels (Arri&egrave;re), 2 M&eacute;gapixels (Frontale) - GPS - Wifi - 4G - Bluetooth - Garantie 1 an + Etui en silicone transparent Gratuits + SIM Data avec 1Go d&#039;Internet ou SIM Voix Offerte'),
(63, 'Condor Griffe T1', 219, 40, 'image_produit/af5baf594e9197b43c9f26f17b205e5btelephone-portable-condor-griffe-t1-4g-double-sim-blanc-sim-offerte.png', 'Telephonie', 'Double SIM - Ecran 4.5&#039;&#039; FWVGA 854x480 - RAM 1 Go - M&eacute;moire 8 Go - Android Nougat 7.0 - 2x Appareils Photos 5MP Arri&egrave;re, 2MP Frontale - Wifi - 4G - Bluetooth - Batterie 2000 mAh - Garantie 1 an  + SIM Data avec 1Go d&#039;Internet ou SIM Voix Offerte'),
(64, 'Huawei Y3 2017', 246, 200, 'image_produit/f540b5a543ecdae19fa0876e80f10528telephone-portable-huawei-y3-2017-3g-gold-film-de-protection-sim-offerte.jpg', 'Telephonie', 'Ecran 5&quot; - Processeur  Quad-Core - RAM 1 Go - M&eacute;moire 8 Go Extensible Jusqu&#039;&agrave; 32 Go Via Micro SD - Android 6.0 Marshmallow - 2xAppareils Photo: 8MP (Arri&egrave;re), 2MP (Frontale) - 3G - Wifi - Bluetooth - GPS - Couleur Gold - Garantie 1 an + SIM Data avec 1Go d&#039;Internet ou SIM Voix Offerte + Film de protection'),
(65, 'Sandisk Cruzer Blade', 12.5, 150, 'image_produit/a122a3441dd463a8360ca951ef45f98acle-usb-cruzer-blade-8-go.jpg', 'Stockage', 'Cl&eacute; USB Sandisk - Capacit&eacute; 8 Go - Ultra Compact  - Couleur Noir et Rouge'),
(66, 'TEAM GROUP C141', 13.4, 120, 'image_produit/f195a5545321221316855b446880a0b3cle-usb-team-group-c141-8-go.jpg', 'Stockage', 'Cl&eacute; USB Team Group C141 - Capacit&eacute; 8 Go - Couleur Noir &amp; Rouge'),
(67, 'Adata C906', 13.6, 160, 'image_produit/696186d1596721cb6e79013d4655c5d9cle-usb-adata-c906-8go.jpg', 'Stockage', 'Cl&eacute; USB Adata C906 - Capacit&eacute; 8Go - Couleur Noir et Bleu - Garantie &agrave; vie'),
(68, 'Adata uv100', 16.3, 60, 'image_produit/cc8f2e58b77f38bde7744b4109446c07cle-usb-adata-uv100-16-go-bleu.jpg', 'Stockage', 'cle-usb-adata-uv100-16-go-bleu'),
(69, 'Western Digital', 40.5, 15, 'image_produit/c9e5c2b59d98488fe1070e744041ea0edisque-dur-interne-35-western-digital-320go-reconditionne.jpg', 'Stockage', 'Disque Dur Interne 3.5&quot; Western Digital - Capacit&eacute; 320 Go - 8 Mo de m&eacute;moire cache - 7200Rpm - Serial ATA 3Gb/s (SATA II) - Garantie 3 mois'),
(70, 'TeamGroup Ultra L5', 119, 20, 'image_produit/cd69510f4a69bc0ef6ba504331b9d546disque-dur-interne-ssd-teamgroup-ultra-l5-120-go.png', 'Stockage', 'Disque Dur Interne SSD TeamGroup Ultra L5 / 120 Go'),
(71, 'western digital', 150, 30, 'image_produit/0afe095e81a6ac76ff3f69975cb3e7aedisque-dur-externe-25-western-digital-elements-1-to-noir-usb-30.jpg', 'Stockage', 'disque-dur-externe-25-western-digital-elements-1-to-noir-usb-30'),
(72, 'Canon PIXMA E414', 80, 20, 'image_produit/80789d636d68ec8ac889de80365bbd57imprimante-multifonction-jet-d-encre-couleur-3-en-1-canon-pixma-e414.jpg', 'Impression & Copieurs', 'Imprimante Multifonction Jet d&#039;encre Couleur 3 en 1 - Impression, copie, num&eacute;risation - Format A4 - R&eacute;solution d&#039;impression: Jusqu&#039;&agrave; 4800 x 600 dpi - Vitesse d&#039;impression Noir/Couleur: 8 ppm / 4 ppm - R&eacute;solution de num&eacute;risation: 600 x 1200 dpi - Interface USB - Dimensions: 426 x 306 x 145 mm - Couleur Noir - Garantie 1 an'),
(73, 'Brother DCP-T500W ', 329, 20, 'image_produit/679635e8efe21e055ae3693f6145f298imprimante-multifonction-jet-d-encre-couleur-wifi-3-en-1-brother-dcp-t500w-wifi.png', 'Impression & Copieurs', '\r\nImprimante multifonction jet d&#039;encre couleur 3 en 1 - Impression, num&eacute;risation, copie - Format A4 - Recto/verso automatique - R&eacute;solution jusqu&#039;&agrave; 1200 dpi - Vitesse d&#039;impression: jusqu&#039;&agrave; 12 ipm monochrome, 6 ipm couleur - Scanner &agrave; plat jusqu&#039;&agrave; 2400 x 2400 dpi - Interface USB 2.0 / Wifi - Ecran LCD - Dimensions 151 x 341 x 477 mm - Garantie 1 an'),
(74, 'BROTHER DCP-T300', 469, 10, 'image_produit/21bfef81b08fa7988c78190cc68c241cimprimante-multifonction-jet-d-encre-couleur-3-en-1-brother-dcp-t300.jpg', 'Impression & Copieurs', 'Imprimante multifonction jet d&#039;encre couleur 3 en 1 - Impression, num&eacute;risation, copie - Format A4 - R&eacute;solution jusqu&#039;&agrave; 6000 x 1200 dpi - Vitesse d&#039;impression: jusqu&#039;&agrave; 27 ppm monochrome, 10 ppm couleur - Interface USB 2.0 - Ecran LCD - M&eacute;moire de 64 MB - Garantie 1 an'),
(75, 'TELEFUNKEN E2000', 379, 20, 'image_produit/76d4110e944e83212bafa4b11ebf2b7eteleviseur-telefunken-e2000-24-hd-led.jpg', 'TV-Son-Photos', 'T&eacute;l&eacute;viseur HD LED 24&quot; - R&eacute;solution 720p - HDMI - USB PVR - USB media player - Video (Mpeg4) - DVB-T - Technologie NaturaLight - LCD Panel &agrave; temp&eacute;rature faible - Protection des yeux - &Eacute;conomie d&#039;&eacute;nergie - Puissance de sortie: 2x 6 Watts - HDIDTV (Mpeg4) nicam+German stereo - 1 peritel + 1 RCA - Couleur: Noir - Garantie 3 ans'),
(76, 'Unionaire', 490, 45, 'image_produit/3dfe2f633108d604df160cd1b01710dbteleviseur-led-unionaire-hd-32-avec-tuner.jpg', 'TV-Son-Photos', 'T&eacute;l&eacute;viseur LED  Unionaire HD 32&quot; - Tuner int&eacute;gr&eacute; - R&eacute;solution 1366 x 768p - Angle de vue (V/H) 178&deg; - 2x USB - 2x HDMI - 1x Entr&eacute;e AV (RCA) - 1x VGA - Haut Parleur 16W (2x 8W) - Dimensions 785 x 125 x 525mm - Garantie 2 ans'),
(77, 'MAXWELL CURVED ', 539, 15, 'image_produit/1a32df83ac6be75b6907fe885465b7a9televiseur-vega-maxwell-led-32-curved-hd-gris.png', 'TV-Son-Photos', 'T&eacute;l&eacute;viseur LED 32&quot; - R&eacute;solution: 1366 x 768 pixels - Courbure 4000R - Brillance 200&plusmn;10% - Contraste 3000:1 - Angle de vue 176&deg;(H) X 176&deg;(V) - Aspect Ratio 16:9 - Maximum Colors 16.7M - Temps de r&eacute;ponse: 6.5ms - Fr&eacute;quence 60Hz - 2x USB 2.0 - 3x HDMI - 1x VGA - 1x AV - 1x Antenne Type D - Couleur Gris - Garantie 3 ans'),
(78, 'TELEFUNKEN SMART ', 595, 32, 'image_produit/312f1ba2a72318edaaa995a67835fad5televiseur-telefunken-e3-32-smart-hd-led-wifi.jpg', 'TV-Son-Photos', 'T&eacute;l&eacute;viseur HD LED 32&quot; Smart - Diagonal 81 cm - R&eacute;solution 1366 x 768 - 2x HDMI - 2x USB - 1x RCA - DVB-T2 TNT - PVR - Technologie NaturaLight - Protection des yeux - &Eacute;conomie d&#039;&eacute;nergie - Puissance de sortie: 2x 6 Watts - Couleur: Noir - Garantie 3 ans'),
(79, ' MAXWELL ', 949, 19, 'image_produit/fbd85d9451c0d7555518534bcbac00e3televiseur-vega-maxwell-led-40-curved-smart-hd-wifi-android-gris.png', 'TV-Son-Photos', 'T&eacute;l&eacute;viseur LED 40&quot; - Smart TV avec cortex CPU A7 Dual Core 1.2GHz - Wifi - Android - R&eacute;solution: 1366 x 768 pixels - Courbure 4000R - Brillance 220&plusmn;10% - Contraste 3000:1 - Angle de vue 176&deg;(H) X 176&deg;(V) - Aspect Ratio 16:9 - Maximum Colors 16.7M - Temps de r&eacute;ponse: 6.5ms - Fr&eacute;quence 60Hz - 2x USB 2.0 - 2x HDMI - 1x VGA - 1x AV - 1x Antenne Type D - Couleur Gris - Garantie 3 ans'),
(80, 'jedel-tb220', 2.2, 150, 'image_produit/6de0f2761a44ff1e2ca60131058d8297souris-optique-jedel-tb220-noir.jpg', 'Accessories', 'souris-optique-jedel-tb220-noir.jpg'),
(81, 'macro-m555', 4.5, 200, 'image_produit/0b115042dd978264d92d419b6c8a1450souris-optique-usb-macro-m555-noir-violet.jpg', 'Accessories', 'souris-optique-usb-macro-m555-noir-violet'),
(82, 'macro kmx 179', 6, 160, 'image_produit/12e086066892a311b752673a28583d3fsouris-optique-usb-macro-kmx-179.jpg', 'Accessories', 'souris-optique-usb-macro-kmx-179.jpg'),
(83, 'macro-g300', 19, 92, 'image_produit/b33128cb0089003ddfb5199e1b679652ensemble-souris-gamer-et-tapis-macro-g300.jpg', 'Accessories', 'ensemble-souris-gamer-et-tapis-macro-g300 1600 dpi super slide '),
(84, 'apqrox war', 30, 40, 'image_produit/7866731eed67dc3be9693b33f50fdb48souris-optique-gamer-apqrox-war-ii-7-couleurs.jpg', 'Accessories', 'souris-optique-gamer-apqrox-war-ii-7-couleurs 3400 DPI.'),
(85, 'havit h210', 7.9, 20, 'image_produit/a43bf030e75e0614616467f596075f14casque-micro-havit-hv-h2105d.jpg', 'Accessories', 'Casque Micro Havit HV-H2105D - Couleur Rouge et Noir - Sensibilit&eacute;:116db-+3db (Casque) / -54db+-3db (Micro) - Interface Jack 3.5mm - Fr&eacute;quence :20HZ to 20khz'),
(86, 'Platinet Freestyle', 14.9, 60, 'image_produit/d9de6a144a3cc26cb4b3c47b206a121acasque-micro-platinet-freestyle-fh4088-noir-orange.jpg', 'Accessories', 'Casque-Micro Platinet Freestyle FH4088 - Extra Bass System - Bandeau confortable - Design moderne - R&eacute;ponse en fr&eacute;quence: 20-20KHz - Sensibilit&eacute;: 116 &plusmn; 3dB - Imp&eacute;dance: 32Ohm &plusmn; 15% - Puissance d&#039;entr&eacute;e maximale: 100mw - Longueur du c&acirc;ble: 1.6m - Couleur: Noir et Orange'),
(87, 'Snopy SG-104', 8, 62, 'image_produit/1ce83e5d4135b07c0b82afffbe2b3436manette-de-jeux-usb-snopy-sg-104.jpg', 'Accessories', 'Manette de Jeux USB Snopy SG-104- Couleur Noir - 17x Boutons - Interface USB'),
(88, 'snopy-sg-305', 17, 50, 'image_produit/e5a90182cc81e12ab5e72d66e0b46fe3manette-de-jeux-usb-avec-analogue-et-vibration-snopy-sg-305.jpg', 'Accessories', 'manette-de-jeux-usb-avec-analogue-et-vibration-snopy-sg-305'),
(89, 'Huawei Y5 2017', 350, 53, 'image_produit/2609acbab44e192aa3764849a69b7dd8telephone-portable-huawei-y5-2017-4g-gris-sim-offerte.jpg', 'Telephonie', 'Ecran 5&quot; - Processeur  Quad-Core MT6737T 1.4 Ghz Cortex A53 - RAM 2 Go - M&eacute;moire 16 Go Extensible Jusqu&#039;&agrave; 32 Go Via Micro SD - Android 6.0 Marshmallow + EMUI 4.1 - 2xAppareils Photo: 8MP (Arri&egrave;re), 5MP (Frontale) - 4G - Batterie 3000 mAh - Wifi - Bluetooth - GPS - Couleur Gris - Garantie 1 an + SIM Data avec 1Go d&#039;Internet ou SIM Voix Offerte'),
(90, 'Light SD-290', 6.5, 60, 'image_produit/84b64e537f08e81b8dea8cce972a28b2haut-parleur-jedel-led-light-sd-290.jpg', 'Accessories', 'Haut Parleur JeDEL LED Light SD-290 - Tension d&#039;alimentation: DC 5V - Disponible en couleur Bleu et Jaune'),
(93, 'JeDEL K11', 6.5, 160, 'image_produit/d19ac2e656681f6cd7adde630d8a1478clavier-usb-jedel-k11.png', 'Accessories', 'Clavier USB JeDEL K11 - Connexion USB - Fran&ccedil;ais / Arabe - Fr&eacute;quence: 10 ~ 55Hz - Longueur du c&acirc;ble: 1.5 m - Tension de fonctionnement: 4,4 ~ 5,25 V - Temp&eacute;rature de fonctionnement: -20 ~ 60 &deg; C - Couleur Noir'),
(94, 'Macro K60120', 6.9, 160, 'image_produit/68881d2246abebc3aa474b51ecd7773eclavier-multimedia-macro-k60120.jpg', 'Accessories', 'Clavier Multim&eacute;dia USB Macro K60120 - Interface USB 2.0 - Fran&ccedil;ais / Arabe - Etanche - Design ergonomique - Confortable'),
(95, 'Macro K60120', 6.9, 160, 'image_produit/449ef87e4d3fa1f1f268196b185627ddclavier-multimedia-macro-k60120.jpg', 'Accessories', 'Clavier Multim&eacute;dia USB Macro K60120 - Interface USB 2.0 - Fran&ccedil;ais / Arabe - Etanche - Design ergonomique - Confortable'),
(96, 'Western Digital', 60.9, 50, 'image_produit/a41f781632ce686f2c7746208bf36912disque-dur-interne-35-western-digital-320-go-.jpg', 'Composants', 'Disque Dur Interne Western Digital - Capacit&eacute; 320 Go - Format 3.5&quot; - Vitesse de rotation 7200 RPM - Taille du cache 8 Mo - Interface Serial ATA 3Gb/s (SATA II) - Dimensions 101.6 x 25.4 x 147 mm - Poids 600 g - Garantie 3 mois'),
(97, 'Travelstar Z5K500', 118, 15, 'image_produit/9c72e0c8882794b79d65f14776a0a974disque-dur-interne-25-hgst-travelstar-z5k500-1-to.jpg', 'Composants', 'Disque Dur Interne 2.5&quot; HGST Travelstar Z5K500 - Capacit&eacute; 500 Go - 8 Mo de m&eacute;moire cache - &Eacute;paisseur 7mm - Interface SATA III 6Gb/s - Vitesse de rotation 5400 Rpm - Dimensions 70 x 7 x 100 mm - Poids 95g - Garantie 1 an'),
(98, 'RAM Team Group', 82.2, 40, 'image_produit/ba3c736667394d5082f86f28aef38107barrette-memoire-crucial-crucial-4-gb-ddr3l-1600-udimm.jpg', 'Composants', 'Barrette M&eacute;moire Team Group DIMM DDR3L - Capacit&eacute; 4 Go - Fr&eacute;quence PC3-12800 / 1600 MHz UDIMM - Vitesse 1600 MT/S - Tension 1.35V - Garantie &agrave; vie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
