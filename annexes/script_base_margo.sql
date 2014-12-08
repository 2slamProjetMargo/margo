-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 08 Décembre 2014 à 16:30
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.6-1ubuntu1.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `margo`
--

-- --------------------------------------------------------

--
-- Structure de la table `ADMINISTRATIF`
--

CREATE TABLE IF NOT EXISTS `ADMINISTRATIF` (
  `IDPERSONNE` int(11) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ADMINISTRATIF`
--

INSERT INTO `ADMINISTRATIF` (`IDPERSONNE`) VALUES
(6),
(7);

-- --------------------------------------------------------

--
-- Structure de la table `CLASSE`
--

CREATE TABLE IF NOT EXISTS `CLASSE` (
  `CODECLASSE` int(11) NOT NULL,
  `CODEFILIERE` int(11) NOT NULL,
  `LIBCLASSE` varchar(128) NOT NULL,
  PRIMARY KEY (`CODECLASSE`),
  KEY `FK_CLASSE_FILIERE` (`CODEFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CLASSE`
--

INSERT INTO `CLASSE` (`CODECLASSE`, `CODEFILIERE`, `LIBCLASSE`) VALUES
(1, 1, '1SLAM'),
(2, 2, '1SISR');

-- --------------------------------------------------------

--
-- Structure de la table `ENFANT`
--

CREATE TABLE IF NOT EXISTS `ENFANT` (
  `IDENFANT` int(11) NOT NULL,
  `IDPERSONNE` int(11) NOT NULL,
  `PRENOM` varchar(128) NOT NULL,
  `DATENAISSANCE` date DEFAULT NULL,
  PRIMARY KEY (`IDENFANT`),
  KEY `FK_ENFANT_PERSONNEL` (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ENFANT`
--

INSERT INTO `ENFANT` (`IDENFANT`, `IDPERSONNE`, `PRENOM`, `DATENAISSANCE`) VALUES
(1, 3, 'zzzzzzzzzzz', '2014-12-25');

-- --------------------------------------------------------

--
-- Structure de la table `ENSEIGNANT`
--

CREATE TABLE IF NOT EXISTS `ENSEIGNANT` (
  `IDPERSONNE` int(11) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ENSEIGNANT`
--

INSERT INTO `ENSEIGNANT` (`IDPERSONNE`) VALUES
(3),
(4);

-- --------------------------------------------------------

--
-- Structure de la table `ENSEIGNANTENSEIGNE`
--

CREATE TABLE IF NOT EXISTS `ENSEIGNANTENSEIGNE` (
  `CODECLASSE` int(11) NOT NULL,
  `IDPERSONNE` int(11) NOT NULL,
  `CODEMAT` int(11) NOT NULL,
  PRIMARY KEY (`CODECLASSE`,`IDPERSONNE`,`CODEMAT`),
  KEY `FK_ENSEIGNENTENSEIGNE_INTERVENANT` (`IDPERSONNE`),
  KEY `FK_ENSEIGNENTENSEIGNE_MATIERE` (`CODEMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ENSEIGNANTENSEIGNE`
--

INSERT INTO `ENSEIGNANTENSEIGNE` (`CODECLASSE`, `IDPERSONNE`, `CODEMAT`) VALUES
(1, 3, 4),
(2, 4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ENSEIGNEMENT`
--

CREATE TABLE IF NOT EXISTS `ENSEIGNEMENT` (
  `CODECLASSE` int(11) NOT NULL,
  `CODEMAT` int(11) NOT NULL,
  `VOLUMEHORAIREANNUEL` bigint(4) DEFAULT NULL,
  `COEFFICIENT` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODECLASSE`,`CODEMAT`),
  KEY `FK_ENSEIGNEMENT_MATIERE` (`CODEMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ENSEIGNEMENT`
--

INSERT INTO `ENSEIGNEMENT` (`CODECLASSE`, `CODEMAT`, `VOLUMEHORAIREANNUEL`, `COEFFICIENT`) VALUES
(1, 1, 150, 2),
(2, 5, 50, 6);

-- --------------------------------------------------------

--
-- Structure de la table `ETUDIANT`
--

CREATE TABLE IF NOT EXISTS `ETUDIANT` (
  `IDPERSONNE` int(11) NOT NULL,
  `CODECLASSE` int(11) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `FK_ETUDIANT_CLASSE` (`CODECLASSE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ETUDIANT`
--

INSERT INTO `ETUDIANT` (`IDPERSONNE`, `CODECLASSE`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `FILIERE`
--

CREATE TABLE IF NOT EXISTS `FILIERE` (
  `CODEFILIERE` int(11) NOT NULL,
  `IDRESPONSABLE` int(11) NOT NULL,
  `LIBFILIERE` varchar(128) NOT NULL,
  PRIMARY KEY (`CODEFILIERE`),
  KEY `FK_FILIERE_ENSEIGNENT` (`IDRESPONSABLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `FILIERE`
--

INSERT INTO `FILIERE` (`CODEFILIERE`, `IDRESPONSABLE`, `LIBFILIERE`) VALUES
(1, 3, 'SLAM'),
(2, 4, 'SISR');

-- --------------------------------------------------------

--
-- Structure de la table `INTERVENANT`
--

CREATE TABLE IF NOT EXISTS `INTERVENANT` (
  `IDPERSONNE` int(11) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `INTERVENANT`
--

INSERT INTO `INTERVENANT` (`IDPERSONNE`) VALUES
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Structure de la table `MATIERE`
--

CREATE TABLE IF NOT EXISTS `MATIERE` (
  `CODEMAT` int(11) NOT NULL,
  `LIBMAT` varchar(128) NOT NULL,
  PRIMARY KEY (`CODEMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `MATIERE`
--

INSERT INTO `MATIERE` (`CODEMAT`, `LIBMAT`) VALUES
(1, 'maths'),
(2, 'eco'),
(3, 'français'),
(4, 'info'),
(5, 'anglais');

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNE`
--

CREATE TABLE IF NOT EXISTS `PERSONNE` (
  `IDPERSONNE` int(11) NOT NULL,
  `NOM` varchar(128) NOT NULL,
  `PRENOM` varchar(128) NOT NULL,
  `SITUATION` varchar(255) DEFAULT NULL,
  `ADRESSE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PERSONNE`
--

INSERT INTO `PERSONNE` (`IDPERSONNE`, `NOM`, `PRENOM`, `SITUATION`, `ADRESSE`) VALUES
(1, 'richard', 'antoine', NULL, NULL),
(2, 'Smith', 'John', NULL, NULL),
(3, 'sabaron', 'benjamin', NULL, NULL),
(4, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', NULL, NULL),
(5, 'bbbbbbbbbbbb', 'bbbbbbbbbbb', NULL, NULL),
(6, 'cccccccccccc', 'ccccccccccccccccccccc', NULL, NULL),
(7, 'ddddddddddddd', 'dddddddddddd', NULL, NULL),
(8, 'eeeeeeeeeeeee', 'eeeeeeeeeeeeeeee', NULL, NULL),
(9, 'fffffffffffffffff', 'fffffffffffff', NULL, NULL),
(10, 'ggggggggggggggg', 'gggggggggggg', NULL, NULL),
(11, 'hhhhhhhhhh', 'hhhhhhhhhhhh', NULL, NULL),
(12, 'iiiiiiiiiiii', 'iiiiiiiiiiiiiiiiiiiiiii', NULL, NULL),
(13, 'jjjjjjjjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjj', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNEL`
--

CREATE TABLE IF NOT EXISTS `PERSONNEL` (
  `IDPERSONNE` int(11) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PERSONNEL`
--

INSERT INTO `PERSONNEL` (`IDPERSONNE`) VALUES
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Structure de la table `TECHNICIEN`
--

CREATE TABLE IF NOT EXISTS `TECHNICIEN` (
  `IDPERSONNE` int(11) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `TECHNICIEN`
--

INSERT INTO `TECHNICIEN` (`IDPERSONNE`) VALUES
(5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ADMINISTRATIF`
--
ALTER TABLE `ADMINISTRATIF`
  ADD CONSTRAINT `ADMINISTRATIF_ibfk_1` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNEL` (`IDPERSONNE`);

--
-- Contraintes pour la table `CLASSE`
--
ALTER TABLE `CLASSE`
  ADD CONSTRAINT `CLASSE_ibfk_1` FOREIGN KEY (`CODEFILIERE`) REFERENCES `FILIERE` (`CODEFILIERE`);

--
-- Contraintes pour la table `ENFANT`
--
ALTER TABLE `ENFANT`
  ADD CONSTRAINT `ENFANT_ibfk_1` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNEL` (`IDPERSONNE`);

--
-- Contraintes pour la table `ENSEIGNANT`
--
ALTER TABLE `ENSEIGNANT`
  ADD CONSTRAINT `ENSEIGNANT_ibfk_1` FOREIGN KEY (`IDPERSONNE`) REFERENCES `INTERVENANT` (`IDPERSONNE`);

--
-- Contraintes pour la table `ENSEIGNANTENSEIGNE`
--
ALTER TABLE `ENSEIGNANTENSEIGNE`
  ADD CONSTRAINT `ENSEIGNANTENSEIGNE_ibfk_3` FOREIGN KEY (`CODEMAT`) REFERENCES `MATIERE` (`CODEMAT`),
  ADD CONSTRAINT `ENSEIGNANTENSEIGNE_ibfk_1` FOREIGN KEY (`CODECLASSE`) REFERENCES `CLASSE` (`CODECLASSE`),
  ADD CONSTRAINT `ENSEIGNANTENSEIGNE_ibfk_2` FOREIGN KEY (`IDPERSONNE`) REFERENCES `INTERVENANT` (`IDPERSONNE`);

--
-- Contraintes pour la table `ENSEIGNEMENT`
--
ALTER TABLE `ENSEIGNEMENT`
  ADD CONSTRAINT `ENSEIGNEMENT_ibfk_2` FOREIGN KEY (`CODEMAT`) REFERENCES `MATIERE` (`CODEMAT`),
  ADD CONSTRAINT `ENSEIGNEMENT_ibfk_1` FOREIGN KEY (`CODECLASSE`) REFERENCES `CLASSE` (`CODECLASSE`);

--
-- Contraintes pour la table `ETUDIANT`
--
ALTER TABLE `ETUDIANT`
  ADD CONSTRAINT `ETUDIANT_ibfk_2` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNE` (`IDPERSONNE`),
  ADD CONSTRAINT `ETUDIANT_ibfk_1` FOREIGN KEY (`CODECLASSE`) REFERENCES `CLASSE` (`CODECLASSE`);

--
-- Contraintes pour la table `FILIERE`
--
ALTER TABLE `FILIERE`
  ADD CONSTRAINT `FILIERE_ibfk_1` FOREIGN KEY (`IDRESPONSABLE`) REFERENCES `ENSEIGNANT` (`IDPERSONNE`);

--
-- Contraintes pour la table `INTERVENANT`
--
ALTER TABLE `INTERVENANT`
  ADD CONSTRAINT `INTERVENANT_ibfk_1` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNEL` (`IDPERSONNE`);

--
-- Contraintes pour la table `PERSONNEL`
--
ALTER TABLE `PERSONNEL`
  ADD CONSTRAINT `PERSONNEL_ibfk_1` FOREIGN KEY (`IDPERSONNE`) REFERENCES `PERSONNE` (`IDPERSONNE`);

--
-- Contraintes pour la table `TECHNICIEN`
--
ALTER TABLE `TECHNICIEN`
  ADD CONSTRAINT `TECHNICIEN_ibfk_1` FOREIGN KEY (`IDPERSONNE`) REFERENCES `INTERVENANT` (`IDPERSONNE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
