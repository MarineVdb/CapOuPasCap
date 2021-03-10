-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 mars 2021 à 12:25
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `copc`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `categorie_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`categorie_id`),
  KEY `categorie` (`categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande_detail`
--

DROP TABLE IF EXISTS `commande_detail`;
CREATE TABLE IF NOT EXISTS `commande_detail` (
  `commande_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `commande_entete` int(11) DEFAULT NULL,
  `produit` int(11) DEFAULT NULL,
  PRIMARY KEY (`commande_detail_id`),
  KEY `commande_entete` (`commande_entete`),
  KEY `produit` (`produit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande_entete`
--

DROP TABLE IF EXISTS `commande_entete`;
CREATE TABLE IF NOT EXISTS `commande_entete` (
  `commande_entete_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` datetime NOT NULL,
  `utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`commande_entete_id`),
  KEY `utilisateur` (`utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `marque_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`marque_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `description` text,
  `ordre` int(11) DEFAULT NULL,
  `produit` int(11) DEFAULT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `produit` (`produit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `produit_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text,
  `prix` float DEFAULT '0',
  `actif` tinyint(1) DEFAULT '1',
  `quantite` int(11) DEFAULT '1',
  `dimension_largeur` float DEFAULT NULL,
  `dimension_longueur` float DEFAULT NULL,
  `dimension_hauteur` float DEFAULT NULL,
  `poids` float DEFAULT NULL,
  `solde_pourcentage` int(11) DEFAULT '0',
  `categorie` int(11) DEFAULT NULL,
  `marque` int(11) DEFAULT NULL,
  `taille_vetement` char(1) DEFAULT NULL,
  PRIMARY KEY (`produit_id`),
  KEY `categorie` (`categorie`),
  KEY `marque` (`marque`),
  KEY `taille_vetement` (`taille_vetement`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taille_vetement`
--

DROP TABLE IF EXISTS `taille_vetement`;
CREATE TABLE IF NOT EXISTS `taille_vetement` (
  `taille_vetement_id` char(1) NOT NULL DEFAULT 'M',
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`taille_vetement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `adresse1` text,
  `adresse2` text,
  `localite` varchar(100) DEFAULT NULL,
  `code_postal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`utilisateur_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
