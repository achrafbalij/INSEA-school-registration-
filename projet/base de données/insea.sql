-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 juil. 2020 à 21:33
-- Version du serveur :  10.3.20-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `insea`
--

-- --------------------------------------------------------

--
-- Structure de la table `insea`
--

DROP TABLE IF EXISTS `insea`;
CREATE TABLE IF NOT EXISTS `insea` (
  `Matricule` int(6) NOT NULL,
  `Nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DateNaissance` date NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Cycle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Filiere` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Sexe` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DateInscription` date NOT NULL,
  `Photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CIN` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Attestation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vkey` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estVerifie` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `insea`
--

INSERT INTO `insea` (`Matricule`, `Nom`, `Prenom`, `DateNaissance`, `Email`, `Password`, `Cycle`, `Filiere`, `Sexe`, `DateInscription`, `Photo`, `CIN`, `Attestation`, `vkey`, `estVerifie`) VALUES
(649569, 'BALIJ', 'ACHRAF', '2001-12-05', 'achrafbalij@gmail.com', '9b115f9328e627af01e7a65977476bbe', 'IE', 'DSE', 'Masc', '2019-09-29', 'image/photo/649569_Photo_1.jpg', 'image/CIN/649569_CIN_1.jpg', 'image/attestation/649569_Attes_1.jpg', 'a2b05325cb1e687cf2848ca9b624c21b', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
