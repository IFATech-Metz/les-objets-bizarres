-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 13 déc. 2018 à 10:31
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `catalogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `pages_catalogue`
--

CREATE TABLE `pages_catalogue` (
  `id` int(11) NOT NULL,
  `titre_lien` text NOT NULL,
  `days` varchar(50) NOT NULL,
  `suppression_modification` text NOT NULL,
  `image` text NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `identifiant` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pages_catalogue`
--

INSERT INTO `pages_catalogue` (`id`, `titre_lien`, `days`, `suppression_modification`, `image`, `titre`, `description`, `identifiant`) VALUES
(1, '<a href=\'html/traitement.php?id=1&&titre=Le Tikker&&identifiant=1\'>Le Tikker</a>', '10/10/2018', '<a href=\'html/supression.php?id=1&&titre=Le Tikker&&identifiant=1\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=1&&titre=Le Tikker&&identifiant=1\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'tikker.jpg\'>', 'Le Tikker', 'Le Tikker', 1),
(2, '<a href=\'html/traitement.php?id=2&&titre=Le Nophone&&identifiant=2\'>Le Nophone</a>', '06/01/2018', '<a href=\'html/supression.php?id=2&&titre=Le Nophone&&identifiant=2\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=2&&titre=Le Nophone&&identifiant=2\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'nophone.jpg\'>', 'Le Nophone', 'Le Nophone', 2),
(3, '<a href=\'html/traitement.php?id=3&&titre=Le porte-glace à piles&&identifiant=3\'>Le porte-glace à piles</a>', '22/01/2018', '<a href=\'html/supression.php?id=3&&titre=Le porte-glace à piles&&identifiant=3\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=3&&titre=Le porte-glace à piles&&identifiant=3\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'porte-glace.jpg\'>', 'Le porte-glace à piles', 'Le porte-glace à piles', 3),
(4, '<a href=\'html/traitement.php?id=4&&titre=Perruque pour bébé&&identifiant=4\'>Perruque pour bébé</a>', '04/02/2018', '<a href=\'html/supression.php?id=4&&titre=Perruque pour bébé&&identifiant=4\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=4&&titre=Perruque pour bébé&&identifiant=4\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'perruque-bebe.jpg\'>', 'Perruque pour bébé', 'Perruque pour bébé', 4),
(5, '<a href=\'html/traitement.php?id=5&&titre=DVD rewinder&&identifiant=5\'>DVD rewinder</a>', '13/03/2018', '<a href=\'html/supression.php?id=5&&titre=DVD rewinder&&identifiant=5\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=5&&titre=DVD rewinder&&identifiant=5\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'DVDRewinder.jpg\'>', 'DVD rewinder', 'DVD rewinder', 5),
(6, '<a href=\'html/traitement.php?id=6&&titre=Le wine glass grip&&identifiant=6\'>Le wine glass grip</a>', '09/04/2018', '<a href=\'html/supression.php?id=6&&titre=Le wine glass grip&&identifiant=6\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=6&&titre=Le wine glass grip&&identifiant=6\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'WineGlassGrip.jpg\'>', 'Le wine glass grip', 'Le wine glass grip', 6),
(7, '<a href=\'html/traitement.php?id=7&&titre=Pet rock&&identifiant=7\'>Pet rock</a>', '22/07/2018', '<a href=\'html/supression.php?id=7&&titre=Pet rock&&identifiant=7\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=7&&titre=Pet rock&&identifiant=7\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'PetRock.jpg\'>', 'Pet rock', 'Pet rock', 7),
(8, '<a href=\'html/traitement.php?id=8&&titre=Diet water&&identifiant=8\'>Diet water</a>', '11/08/2018', '<a href=\'html/supression.php?id=8&&titre=Diet water&&identifiant=8\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=8&&titre=Diet water&&identifiant=8\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'DietWater.jpg\'>', 'Diet water', 'Diet water', 8),
(9, '<a href=\'html/traitement.php?id=9&&titre=Headband&&identifiant=9\'>Headband</a>', '17/09/2018', '<a href=\'html/supression.php?id=9&&titre=Headband&&identifiant=9\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=9&&titre=Headband&&identifiant=9\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'headband.jpg\'>', 'Headband', 'Headband', 9),
(10, '<a href=\'html/traitement.php?id=10&&titre=Toilet paper hat&&identifiant=10\'>Toilet paper hat</a>', '01/10/2018', '<a href=\'html/supression.php?id=10&&titre=Toilet paper hat&&identifiant=10\'><img class=\'del-button\' src=\'./image/del.jpg\'></a><a class=\'alter-button\' href=\'html/modification.php?id=10&&titre=Toilet paper hat&&identifiant=10\'><img src=\'./image/alter.jpg\'></a>', '<img class=\'img\' src=\'ToiletPaperHat.jpg\'>', 'Toilet paper hat', 'Toilet paper hat', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pages_catalogue`
--
ALTER TABLE `pages_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pages_catalogue`
--
ALTER TABLE `pages_catalogue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
