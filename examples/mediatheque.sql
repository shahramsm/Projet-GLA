-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 22 Mai 2018 à 20:43
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

--
-- Contenu de la table `info_gene`
--

INSERT INTO `info_gene` (`ID_INFOGENE`, `DATE_PUBLI`, `TITRE`, `TEXTE`, `ID_GEST`) VALUES
(1, '2018-05-21', 'ATELIERS NUMERIQUES - MERCREDI 23 MAI', 'Comment  créer ses propres jeux vidéos, programmer un robot pour le faire déplacer, comment fonctionne un ordinateur ? \r\nLe mercredi 23 mai, venez découvrir en ateliers découverte de quoi vos enfants sont capables !\r\nChristophe propose des initiations à la programmation sous Scratch, qui permet de découvrir la programmation de manière visuelle et ludique (blocs à assembler).', 'DAVID'),
(2, '2018-05-15', 'ATELIERS CULTUREL - VENDREDI 18 MAI', 'L’étudiant se doit d’acquérir une culture artistique : savoir regarder une œuvre et l’analyser, savoir lire des textes théoriques pour nourrir sa propre réflexion et enrichir sa démarche conceptuelle. Il apprend à s’exprimer clairement à l’écrit comme à l’oral et à communiquer ses idées sur l’art contemporain.', 'CEDRIC'),
(3, '2018-05-02', 'Revisions du BAC', 'La bibliothèque élargit ses horaires d’ouvertures à partir du vendredi 8 juin\r\npour les lycéens qui souhaitent réviser avant les épreuves du bac.', 'DAVID'),
(4, '2018-04-26', 'FERMETURE EXCEPTIONNELLE - MARDI 1 MAI 2018', 'La bibliothèque sera exceptionnellement fermé le mardi 1 mai 2018.', 'DAVID');

-- --------------------------------------------------------

--
-- Structure de la table `perte`
--

CREATE TABLE `perte` (
  `ID_PERTE` int(11) NOT NULL,
  `ID_RESSOURCE` int(11) NOT NULL,
  `TYPE_PERTE` varchar(35) NOT NULL,
  `DATE_PERTE` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `perte`
--

INSERT INTO `perte` (`ID_PERTE`, `ID_RESSOURCE`, `TYPE_PERTE`, `DATE_PERTE`) VALUES
(7, 1, 'Perte naturelle', '2018-05-22');

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

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`ID_RESERV`, `ID_MEMBRE`, `ID_RESSOURCE`, `DATE_RESERV`, `DATE_RETOUR`) VALUES
(1, 'MICKA', 10, '2018-04-27', '2018-05-22'),
(2, 'SHAHRAM', 10, '2018-04-28', '2018-05-16'),
(3, 'MULLER', 11, '2018-04-25', '2018-05-15'),
(4, 'LOPEZ', 11, '2018-04-12', '2018-05-04'),
(5, 'BOYER', 15, '2018-04-02', '2018-05-14'),
(6, 'BOYER', 16, '2018-05-16', NULL),
(7, 'SHAHRAM', 12, '2018-04-14', '2018-05-07'),
(8, 'DUPONT', 11, '2018-03-31', '2018-04-24'),
(9, 'MICKA', 16, '2018-05-02', NULL),
(10, 'ROUSSEAU', 18, '2018-04-08', '2018-05-15'),
(11, 'MULLER', 15, '2018-04-10', '2018-05-10'),
(12, 'MULLER', 10, '2018-05-17', NULL),
(13, 'LOPEZ', 10, '2018-05-07', NULL),
(14, 'MICKA', 11, '2018-05-18', NULL),
(15, 'SHAHRAM', 11, '2018-04-10', '2018-05-15'),
(16, 'ROUSSEAU', 11, '2018-05-11', NULL),
(17, 'LOPEZ', 12, '2018-03-15', '2018-04-09'),
(18, 'BOYER', 18, '2018-05-22', NULL),
(19, 'DUPONT', 13, '2018-05-03', NULL),
(20, 'MULLER', 14, '2018-03-21', '2018-04-16'),
(21, 'SHAHRAM', 13, '2018-05-14', NULL),
(22, 'ROUSSEAU', 14, '2018-03-09', '2018-04-02'),
(23, 'MICKA', 17, '2018-05-21', NULL),
(24, 'MULLER', 17, '2018-05-04', NULL),
(25, 'DUPONT', 15, '2018-04-12', '2018-04-26');

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
(10, 4, 4.5, 15, 0, 'livre', '1984', 'George Orwell', 1949, 2, 10),
(11, 8, 7.5, 15, 0, 'dvd', 'terminator 2', 'James Cameron', 1991, 4, 2),
(12, 3, 3.2, 17, 0, 'livre', 'Les Déferlantes', 'Claudie Gallay', 2008, 2, 6),
(13, 5, 6.7, 20, 0, 'livre', 'Trois femmes puissantes', 'Marie NDiaye', 2009, 4, 14),
(14, 7, 4, 16, 0, 'livre', 'Les Ombres errantes', 'Pascal Quignard', 2002, 7, 18),
(15, 4, 2.5, 27, 0, 'dvd', 'Spider-Man Homecoming', 'Jon Watts', 2017, 8, 12),
(16, 2, 7.7, 23, 0, 'dvd', 'Da Vinci Code', 'Ron Howard', 2017, 5, 9),
(17, 8, 3.5, 35, 0, 'revue', 'L\'astronomie - d\'ou viennent les trous noirs binaires ? ', 'SAF', 2016, 1, 13),
(18, 6, 1.5, 29, 0, 'revue', 'La revue de l\'infirmière', 'SPEPS', 2015, 4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
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

INSERT INTO `utilisateur` (`IDENTIFIANT`, `NOM`, `PRENOM`, `MAIL`, `MDP`, `TYPE_USER`, `SOLDE`, `DEFAILLANT`) VALUES
('DAVID', 'De Almeida', 'David', 'david.de.almeida@outlook.fr', '4a5269eeccae065b022ab87feaae29b10b75b32b', 'g', NULL, 0),
('CEDRIC', 'Chapelle', 'Cédric', 'cedric.chapelle@gmail.fr', '1d4d9679c8745010dcf47b249db8a47f0cac3014', 'g', NULL, 0),
('MEMBRE', 'Membre', 'Un', 'unmembre@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 50, 0),
('MICKA', 'panos', 'mickaël', 'micka@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 63.5, 0),
('SHAHRAM', 'Mahdavi', 'shahram', 'shahramsm@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 75, 0),
('DUPONT', 'Dupont', 'Jean', 'jean123@gmail.fr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 44.5, 0),
('ROUSSEAU', 'Rousseau', 'Patrick', 'partrik123@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 55, 0),
('MULLER', 'Muller', 'Nathalie', 'nathalie123@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 60, 0),
('BOYER', 'Boyer', 'Catherine', 'catherine123@gmail.fr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 87, 0),
('LOPEZ', 'Lopez', 'Julien', 'julien123@hotmail.fr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm', 73.2, 0);

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
  ADD KEY `ID_TYPE_PERTE` (`DATE_PERTE`);

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
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IDENTIFIANT`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `info_gene`
--
ALTER TABLE `info_gene`
  MODIFY `ID_INFOGENE` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `perte`
--
ALTER TABLE `perte`
  MODIFY `ID_PERTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID_RESERV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `ID_RESSOURCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
