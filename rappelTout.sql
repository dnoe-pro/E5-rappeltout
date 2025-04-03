-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 27 mars 2025 à 14:35
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rappeltout`
--

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `num_doc` int(11) NOT NULL,
  `date_exp` date NOT NULL,
  `ref_materiel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`num_doc`, `date_exp`, `ref_materiel`) VALUES
(1, '2023-09-11', 'AA-001-AA'),
(3, '2023-10-25', 'AA-123-YZ'),
(4, '2023-10-02', '824'),
(6, '2023-10-18', '825'),
(7, '2023-10-25', '822'),
(8, '2023-10-29', '821'),
(9, '2023-10-25', 'AA-564-BB'),
(10, '2023-10-25', 'AA-564-BB'),
(11, '2023-11-30', '826');

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `ref_materiel` varchar(10) NOT NULL DEFAULT '',
  `nom_materiel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`ref_materiel`, `nom_materiel`) VALUES
('1', 'matosOne'),
('2', 'matosTwo'),
('3', 'matosThree'),
('821', 'extincteur b305'),
('822', 'extincteur b310'),
('824', 'extincteur'),
('825', 'extincteur local'),
('826', 'extincteur couloir '),
('AA-001-AA', 'vehicule'),
('AA-123-YZ', 'Peugeot Boxer'),
('AA-564-BB', 'Renault Trafic');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(1) NOT NULL,
  `nom_utilisateur` varchar(15) NOT NULL,
  `mdp_utilisateur` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `mdp_utilisateur`) VALUES
(1, 'Moreau', '$2y$10$7RNSgcffpVLL3x2Zs8js0.zsQRKiSm5ZP4GoFflEltV85u7DqevTm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`num_doc`),
  ADD KEY `ref_materiel` (`ref_materiel`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`ref_materiel`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `num_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`ref_materiel`) REFERENCES `materiel` (`ref_materiel`);
COMMIT;



-- --------------------------------------------------------------------------------------------------

CREATE TABLE Rappel(
   Id_Rappel int,
   Id_Materiel int,
   date_expiration date ,
   chemin_fichier varchar(60) NOT NULL,
   statut varchar(60) NOT NULL
   )ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


ALTER TABLE `Rappel`
  ADD CONSTRAINT FOREIGN KEY(Id_Materiel) REFERENCES Materiel(Id_Materiel);
  
ALTER TABLE `Rappel`
  MODIFY Id_Rappel INT NOT NULL AUTO_INCREMENT;



CREATE TABLE type_materiel(
   Id_type_materiel INT AUTO_INCREMENT,
   Id_Materiel INT AUTO_INCREMENT,
   text VARCHAR(50),  
   Id_Materiel INT NOT NULL,
)ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

ALTER TABLE type_materiel
  ADD CONSTRAINT FOREIGN KEY(Id_type_materiel) REFERENCES Materiel(Id_Materiel);

ALTER TABLE type_materiel 
  MODIFY Id_type_materiel INT NOT NULL AUTO_INCREMENT;




ALTER TABLE Rappel(
  ADD COLUMN Id_type_materiel
)

-- --------------------------------------------------------------------------------------------------
