-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 jan. 2020 à 10:32
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evaluation`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `file` blob DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `prenom`, `mail`, `phone`, `message`, `file`) VALUES
(1, 'e', 'e', 'e', 'e', 'e', NULL),
(2, 'r', 'r', 'r', 'r', 'r', NULL),
(3, 'r', 'r', 'r', 'r', 'r', NULL),
(4, 'z', 'z', 'z', 'z', 'z', NULL),
(5, 'z', 'z', 'z', 'z', 'z', NULL),
(6, 'RYAN', 'Debby', 'debbyryan@gmail.com', '0669696969', 'jtm bg', NULL),
(7, 'CLARKE', 'Arthur', 'coucou@coucou.fr', '06145798526', 'Coucou', NULL),
(8, 'COLEMAN', 'Jenna', 'jennacoleman@gmail.com', '0669696968', 'jtm ttro bo', NULL),
(9, 'NOEL', 'Frederic', 'fredericnoel4ever@gmail.com', 'tulauraspas', 'Woaw, Arthur, ton site est beaucoup trop beau, je te met 20', NULL),
(10, 'FOUCAULT', 'Dylan', 'jesuisunsniper@gmail.com', '789456123', 'Quand tu mets aléatoire pendant la création de ton perso, gros nez et oreille de chou fleur.', NULL),
(11, 'Bidule', 'Machin', 'CHouet@jfeoz.fr', '0606060606', 'hfezilojfezijipefz', NULL),
(12, 'CAUVIN', 'Caro', 'cauvainkro@mescouillessurtonnez.fr', '46464646464', 'Woaw ton site est trop beau', NULL),
(13, 't', 't', 't', 't', 't', NULL),
(14, 'y', 'y', 'y', 'y', 'y', NULL),
(15, 'KADANI', 'Dylan', 'dylanbgdu76@gmail.com', '06696969696969', 'Woaw', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
