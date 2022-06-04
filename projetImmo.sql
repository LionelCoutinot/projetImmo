-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 10 jan. 2022 à 13:08
-- Version du serveur :  10.3.31-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetImmo`
--

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

CREATE TABLE `bien` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `localisation` text DEFAULT NULL,
  `pieces` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`id`, `titre`, `prix`, `description`, `thumbnail`, `surface`, `adresse`, `localisation`, `pieces`, `type`) VALUES
(2, 'Vente Studio centre-ville', '23001.14', 'Magnifique studio du centre ville', 'assets/images/studio/studio.jpg', 75, '12 place de la République, 87000 LIMOGES', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.9936850319546!2d1.2572807155698058!3d45.831408679106964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f934bac0cbb3a7%3A0x3cf9b09439caa09!2s12%20Pl.%20de%20la%20R%C3%A9publique%2C%2087000%20Limoges!5e0!3m2!1sfr!2sfr!4v1640871424793!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, 3),
(4, 'Vente splendide Duplex', '275000.00', 'Quartier historique de la Boucherie.', 'assets/images/duplex/duplex.jpg', 142, '24 Rue Charreyron, 87000 LIMOGES', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d695.0329532698527!2d1.2572581292103346!3d45.82864323318494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f934af87a0c053%3A0x1fd74a6b92792d1d!2s24%20Rue%20Charreyron%2C%2087000%20Limoges!5e0!3m2!1sfr!2sfr!4v1640872140125!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 7, 2),
(6, 'Location appartement T4', '600.00', 'Bel appartement situé sur la Vienne...', 'assets/images/appartementT4/appartementT4.jpg', 100, '55 rue des cornichons, 87000 LIMOGES', NULL, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `image`, `bien`) VALUES
(1, 'assets/images/studio/studio2.jpg', 2),
(3, 'assets/images/studio/studio3.jpg', 2),
(5, 'assets/images/duplex/duplex2.jpg', 4),
(6, 'assets/images/duplex/duplex3.jpg', 4),
(7, 'assets/images/duplex/duplex4.jpg', 4),
(11, 'assets/images/appartementT4/appartementT42.jpg', 6),
(12, 'assets/images/appartementT4/appartementT43.jpg', 6),
(13, 'assets/images/appartementT4/appartementT44.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'Appartement'),
(2, 'Duplex'),
(3, 'Studio'),
(4, 'Triplex'),
(5, 'Loft'),
(6, 'Souplex'),
(7, 'Résidence hôtelière');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bien` (`bien`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bien`
--
ALTER TABLE `bien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `bien_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`bien`) REFERENCES `bien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
