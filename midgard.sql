-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 nov. 2018 à 14:50
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
-- Base de données :  `midgard`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `catEvent` varchar(255) NOT NULL,
  `nbPerson` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `reservationDate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `email`, `phone`, `catEvent`, `nbPerson`, `comment`, `reservationDate`) VALUES
(1, 'Dizet', 'midgard@gmail.com', 600000000, 'Anniversaire', 8, 'merci', '23/11/2018'),
(2, 'test', 'midgard@gmail.com', 600000000, 'Enterrement de vie de garçon / fille', 5, 'ol', '03/10/2018'),
(3, 'test', 'midgard@gmail.com', 600000000, 'Détente entreprise', 4, '', '29/11/2018'),
(4, 'Dizet', 'midgard@gmail.com', 600000000, 'Enterrement de vie de garçon / fille', 6, 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. ', '20/12/2018'),
(5, 'Dizet', 'midgard@gmail.com', 600000000, 'Enterrement de vie de garçon / fille', 6, 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. ', '20/12/2018');

-- --------------------------------------------------------

--
-- Structure de la table `listdrinks`
--

DROP TABLE IF EXISTS `listdrinks`;
CREATE TABLE IF NOT EXISTS `listdrinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(800) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `rem` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listdrinks`
--

INSERT INTO `listdrinks` (`id`, `name`, `description`, `image`, `category`, `rem`) VALUES
(1, 'Hydromel', 'L\'hydromel est l\'une des premières boissons alcoolisées mise au point par l\'homme. Miel fermenté dans de l\'eau. Les premières productions d\'hydromel remontent à 7000 av. J.-C., en Chine. On a une recette écrite d\'Aristote en 350 av. J.-C. Chez les wicking, on buvait de l\'hydromel dans des cornes, durant le festin des dieux.', 'hydromel-doux-75cl.jpg', 'Médiévale', 0),
(20, 'Delirium Nocturnum', 'Une bière rouge foncée brassée selon la tradition belge: à la fois forte et accessible. Des saveurs de fruits secs, de caramel et chocolat. Légèrement sucrée avec une touche épicée (réglisse et coriandre). La finale en bouche est chaude et agréable.', 'delirium_nocturnum.png', 'Bière', 0),
(16, 'Budels Malty Dark', 'Couleur brune, limpide, petit col de mousse beige. Arômes maltés. Le goût est original et gorgé de céréales, tout comme la fin de bouche. \r\nCette bière est sans alcool. 0%', 'budels-malty-0.0-dark.png', 'Sans Alcool', 1),
(18, 'Mojito coco', 'Le mojito constitue le cocktail cubain que tout le monde adore, avec sa cousine, la caïpirinha, star brésilienne. Mais si on zappait le rhum pour le remplacer par de l\'eau de coco en glaçons et du lait de coco ? En version sans alcool, ça donne quoi ?', 'mojitococo.png', 'Sans Alcool', 0),
(21, 'Aecht Schlenkerla Rauchbier Marzen', 'Bière à dominante douce\r\n5,1 %\r\nBrasserie Heller\r\nAllemagne\r\nIntensément fumée, boisée, amère, épicée', 'budels-malty-0.0-dark.png', 'Bière', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(2, 'admin', '$2y$10$OFR5stvK0IvenXew0TvDC.0N.0X3StyCbbxgf/Xhg6vWIIES6S7a6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
