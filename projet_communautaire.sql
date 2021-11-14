-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 14 nov. 2021 à 12:57
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_communautaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idMembre` int(11) NOT NULL AUTO_INCREMENT,
  `nomMembre` varchar(25) NOT NULL,
  `pnomMembre` varchar(25) NOT NULL,
  `mailMembre` varchar(50) NOT NULL,
  `mdpMembre` varchar(255) NOT NULL,
  `datecrea` datetime NOT NULL DEFAULT curdate(),
  `classe` varchar(20) DEFAULT NULL,
  `statut` varchar(15) NOT NULL,
  PRIMARY KEY (`idMembre`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `nomMembre`, `pnomMembre`, `mailMembre`, `mdpMembre`, `datecrea`, `classe`, `statut`) VALUES
(1, 'bourdageau', 'ben', 'ben@gmail.com', 'ben', '2021-11-14 00:00:00', 'BTS2', 'etudiant'),
(2, 'durantin', 'florian', 'florian@gmail.com', 'florian', '2021-11-14 00:00:00', 'BTS2', 'etudiant'),
(3, 'Eponge', 'Bob', 'bob@gmail.com', 'bob', '2021-11-14 00:00:00', NULL, 'personnel');

-- --------------------------------------------------------

--
-- Structure de la table `membre_histo`
--

DROP TABLE IF EXISTS `membre_histo`;
CREATE TABLE IF NOT EXISTS `membre_histo` (
  `idMembre` int(11) NOT NULL,
  `nomMembre` varchar(25) NOT NULL,
  `pnomMembre` varchar(25) NOT NULL,
  `mailMembre` varchar(50) NOT NULL,
  `mdpMembre` varchar(255) NOT NULL,
  `datecrea` datetime NOT NULL DEFAULT curdate(),
  `classe` varchar(20) DEFAULT NULL,
  `statut` varchar(15) NOT NULL,
  PRIMARY KEY (`idMembre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
