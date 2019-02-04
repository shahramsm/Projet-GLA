-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Mai 2018 à 19:13
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mediatheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `info_gene`
--

CREATE TABLE `info_gene` (
  `ID_INFOGENE` int(6) NOT NULL,
  `DATE_PUBLI` date NOT NULL,
  `TITRE` varchar(50) NOT NULL,
  `TEXTE` varchar(500) NOT NULL,
  `ID_GEST` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `perte`
--

CREATE TABLE `perte` (
  `ID_PERTE` int(11) NOT NULL,
  `ID_RESSOURCE` int(11) NOT NULL,
  `ID_TYPE_PERTE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `ID_RESERV` int(11) NOT NULL,
  `ID_MEMBRE` varchar(20) NOT NULL,
  `ID_RESSOURCE` int(11) NOT NULL,
  `DATE_RESERV` date NOT NULL,
  `DATE_RETOUR` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `ID_RESSOURCE` int(11) NOT NULL,
  `NBR_EXEMP` int(11) NOT NULL,
  `CAUTION` float NOT NULL,
  `NBR_JOUR_RETOUR` int(11) NOT NULL,
  `DEREFERENCE` tinyint(1) NOT NULL,
  `TYPE_RESS` varchar(5) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `AUTEUR` varchar(40) NOT NULL,
  `ANNEE_PUBLI` year(4) NOT NULL,
  `NUM_NIVEAU` int(3) DEFAULT NULL,
  `NUM_ETAGERE` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ressource`
--

INSERT INTO `ressource` (`ID_RESSOURCE`, `NBR_EXEMP`, `CAUTION`, `NBR_JOUR_RETOUR`, `DEREFERENCE`, `TYPE_RESS`, `NOM`, `AUTEUR`, `ANNEE_PUBLI`, `NUM_NIVEAU`, `NUM_ETAGERE`) VALUES
(1, 6, 4.5, 15, 0, 'livre', '1984', 'George Orwell', 1949, 2, 10),
(2, 3, 7.5, 15, 0, 'dvd', 'terminator 2', 'James Cameron', 1991, 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_perte`
--

CREATE TABLE `type_perte` (
  `ID_TYPE_PERTE` int(11) NOT NULL,
  `LIBELLE_PERTE` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_UTILISATEUR` int(5) NOT NULL,
  `IDENTIFIANT` varchar(20) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `MDP` varchar(64) NOT NULL,
  `TYPE_USER` varchar(1) NOT NULL,
  `SOLDE` float DEFAULT NULL,
  `DEFAILLANT` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTILISATEUR`, `IDENTIFIANT`, `NOM`, `PRENOM`, `MAIL`, `MDP`, `TYPE_USER`, `SOLDE`, `DEFAILLANT`) VALUES
(1, 'DAVID', 'De Almeida', 'David', 'david.de.almeida@outlook.fr', '4a5269eeccae065b022ab87feaae29b10b75b32b', 'g', NULL, 0),
(2, 'CEDRIC', 'Chapelle', 'Cédric', 'cedric.chapelle@gmail.fr', '1d4d9679c8745010dcf47b249db8a47f0cac3014', 'g', NULL, 0),
(3, 'MEMBRE', 'Membre', 'Un', 'unmembre@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 50, 0),
(4, 'MICKA', 'panos', 'mickaël', 'micka@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 50, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `info_gene`
--
ALTER TABLE `info_gene`
  ADD PRIMARY KEY (`ID_INFOGENE`),
  ADD KEY `ID_GEST` (`ID_GEST`);

--
-- Index pour la table `perte`
--
ALTER TABLE `perte`
  ADD PRIMARY KEY (`ID_PERTE`),
  ADD KEY `ID_RESSOURCE` (`ID_RESSOURCE`),
  ADD KEY `ID_TYPE_PERTE` (`ID_TYPE_PERTE`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID_RESERV`),
  ADD KEY `ID_RESSOURCE` (`ID_RESSOURCE`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`ID_RESSOURCE`);

--
-- Index pour la table `type_perte`
--
ALTER TABLE `type_perte`
  ADD PRIMARY KEY (`ID_TYPE_PERTE`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_UTILISATEUR`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `info_gene`
--
ALTER TABLE `info_gene`
  MODIFY `ID_INFOGENE` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `perte`
--
ALTER TABLE `perte`
  MODIFY `ID_PERTE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID_RESERV` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `ID_RESSOURCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `type_perte`
--
ALTER TABLE `type_perte`
  MODIFY `ID_TYPE_PERTE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_UTILISATEUR` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
