-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Juin 2024 à 11:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_gestion_soutenance`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_encadreur`
--

CREATE TABLE IF NOT EXISTS `t_encadreur` (
  `Num_Encadreur` int(2) NOT NULL,
  `Nom_Encadreur` varchar(20) NOT NULL,
  `Prenom_Encadreur` varchar(40) NOT NULL,
  `Contact_Encadreur` varchar(14) NOT NULL,
  `Email_Encadreur` text NOT NULL,
  `Specialite_Encadreur` varchar(10) NOT NULL,
  PRIMARY KEY (`Num_Encadreur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_enseignant`
--

CREATE TABLE IF NOT EXISTS `t_enseignant` (
  `Num_Enseignant` int(3) NOT NULL,
  `Nom_Enseignant` varchar(20) NOT NULL,
  `Prenom_Enseignant` varchar(40) NOT NULL,
  `Grade_Enseignant` varchar(2) NOT NULL,
  `Contact_Enseignant` varchar(14) NOT NULL,
  `Email_Enseignant` text NOT NULL,
  `Specialite_Enseignant` varchar(10) NOT NULL,
  PRIMARY KEY (`Num_Enseignant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_etudiant`
--

CREATE TABLE IF NOT EXISTS `t_etudiant` (
  `Matricule_Etudiant` int(7) unsigned NOT NULL,
  `Nom_Etudiant` varchar(20) NOT NULL,
  `Prenom_Etudiant` varchar(40) NOT NULL,
  `Cycle_Etudiant` varchar(7) NOT NULL,
  `Contact_Etudiant` varchar(14) NOT NULL,
  `Email_Etudiant` text NOT NULL,
  `Specialite_Etudiant` varchar(10) NOT NULL,
  `Num_Encadreur` int(2) NOT NULL,
  PRIMARY KEY (`Matricule_Etudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_salle`
--

CREATE TABLE IF NOT EXISTS `t_salle` (
  `Num_Salle` int(2) NOT NULL,
  `Nombre_place_salle` int(3) NOT NULL,
  `Situation_Salle` varchar(10) NOT NULL,
  `Etat_Salle` varchar(10) NOT NULL,
  PRIMARY KEY (`Num_Salle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_sassister`
--

CREATE TABLE IF NOT EXISTS `t_sassister` (
  `Num_Soutenance` int(4) NOT NULL,
  `Num_Enseignant` int(2) NOT NULL,
  `Qualite_Enseignant` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_soutenance`
--

CREATE TABLE IF NOT EXISTS `t_soutenance` (
  `Num_Soutenance` int(4) NOT NULL,
  `Type_Soutenance` varchar(10) NOT NULL,
  `Theme_Soutenance` text NOT NULL,
  `Heure_Soutenance` time NOT NULL,
  `Date_Soutenance` date NOT NULL,
  `Date_Eff_Soutenance` date NOT NULL,
  `Matricule_Etudiant` int(7) NOT NULL,
  `Num_Salle` int(2) NOT NULL,
  PRIMARY KEY (`Num_Soutenance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
  `Num_Utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_utilisateur` varchar(20) NOT NULL,
  `Prenom_Utilisateur` varchar(40) NOT NULL,
  `Email_Utilisateur` text NOT NULL,
  `Mdp` text NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Login_Utilisateur` varchar(100) NOT NULL,
  PRIMARY KEY (`Num_Utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `t_user`
--

INSERT INTO `t_user` (`Num_Utilisateur`, `Nom_utilisateur`, `Prenom_Utilisateur`, `Email_Utilisateur`, `Mdp`, `Type`, `Login_Utilisateur`) VALUES
(1, 'maniga', 'tokpa abou', 'aboum084@gmail.com', 'maniga@m', 'Administrateur', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
