-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 juin 2023 à 22:00
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotelbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` smallint(6) NOT NULL,
  `nom` enum('Economique','Classique','Deluxe','Familliale','Affaire','Couple') NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `nuité` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `numero` smallint(6) NOT NULL,
  `etat` enum('occupe','disponible','renovation','') NOT NULL DEFAULT 'disponible',
  `_Ref` int(11) DEFAULT NULL,
  `idcategorie` smallint(6) NOT NULL,
  `identifiant` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `couriel` varchar(70) DEFAULT NULL,
  `mdp` varchar(100) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `etat` enum('actif','hidden','','') DEFAULT NULL,
  `pays` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `numFacture` smallint(6) NOT NULL,
  `consomation` varchar(255) DEFAULT NULL,
  `totalconso` int(11) NOT NULL,
  `services` varchar(255) DEFAULT NULL,
  `totalservices` int(11) NOT NULL,
  `sejour` varchar(255) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `_Ref` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gerant`
--

CREATE TABLE `gerant` (
  `identifiant` smallint(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `_user` varchar(50) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `receptioniste`
--

CREATE TABLE `receptioniste` (
  `num` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `ddn` date NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `_Ref` int(11) NOT NULL,
  `dateReservation` date NOT NULL,
  `entré` date NOT NULL,
  `sortie` date NOT NULL,
  `Nbadulte` smallint(6) DEFAULT NULL,
  `Nbenfant` smallint(6) NOT NULL,
  `Nbchambre` smallint(6) NOT NULL,
  `num` varchar(50) NOT NULL,
  `idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `numService` smallint(6) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` smallint(6) NOT NULL,
  `identifiant` smallint(6) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `_Ref` (`_Ref`),
  ADD KEY `idcategorie` (`idcategorie`),
  ADD KEY `identifiant` (`identifiant`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD UNIQUE KEY `couriel` (`couriel`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`numFacture`),
  ADD UNIQUE KEY `_Ref` (`_Ref`);

--
-- Index pour la table `gerant`
--
ALTER TABLE `gerant`
  ADD PRIMARY KEY (`identifiant`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `receptioniste`
--
ALTER TABLE `receptioniste`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`_Ref`),
  ADD KEY `num` (`num`),
  ADD KEY `idclient` (`idclient`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`numService`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD KEY `identifiant` (`identifiant`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`_Ref`) REFERENCES `reservation` (`_Ref`),
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`idcategorie`) REFERENCES `categorie` (`idcategorie`),
  ADD CONSTRAINT `chambre_ibfk_3` FOREIGN KEY (`identifiant`) REFERENCES `gerant` (`identifiant`);

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`_Ref`) REFERENCES `reservation` (`_Ref`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`num`) REFERENCES `receptioniste` (`num`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`identifiant`) REFERENCES `gerant` (`identifiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
