-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 03 Octobre 2017 à 12:01
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moreauConst`
--

-- --------------------------------------------------------

--
-- Structure de la table `mainSteps`
--

CREATE TABLE `mainSteps` (
  `id` int(11) NOT NULL,
  `step` varchar(255) NOT NULL,
  `id_projects` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mainSteps`
--

INSERT INTO `mainSteps` (`id`, `step`, `id_projects`) VALUES
(1, 'Supportage', 1),
(2, 'Tuyauterie', 1),
(3, 'Tests', 1),
(4, 'Nettoyage', 1),
(5, 'Nettoyage', 1),
(6, 'Nettoyage', 1),
(7, 'Nettoyage', 1),
(8, 'Nettoyage', 1),
(9, 'Nettoyage', 1),
(10, 'Nettoyage', 1),
(11, 'Préparation', 3),
(12, 'Préparation', 3),
(13, 'Préparation', 3),
(14, 'Etude des plans', 4),
(15, 'test', 1),
(16, 'test', 1),
(17, 'test', 1),
(18, 'test2', 1),
(19, 'test2', 1),
(20, 'test2', 1),
(21, 'test2', 1),
(22, 'test2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project` varchar(255) NOT NULL,
  `startingDate` date NOT NULL,
  `endingDate` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `project`, `startingDate`, `endingDate`, `id_user`) VALUES
(1, 'Université Gand', '2017-10-01', '2018-03-01', 1),
(2, 'test', '2017-10-10', '2017-10-12', 2),
(3, 'Plateforme Logistique MONS', '2017-10-15', '2018-10-31', 1),
(4, 'Appartements Valenciennes', '2017-12-20', '2018-01-30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(55) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `id_mainSteps` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `comments`, `id_mainSteps`, `status`) VALUES
(1, 'Traçage', 'Definir l\'emplacement des supports', 1, 0),
(2, 'Préparation des supports', '', 1, 0),
(5, 'Préparer les tuayaux', 'decouper et blanchir', 2, 0),
(6, 'Installation et soudure', 'neant', 2, 0),
(7, 'Radio des soudures', 'neant', 3, 0),
(8, 'Test détanchéité', 'test d\'air et eau', 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `rights` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `password`, `rights`) VALUES
(1, 'TOUMIA', 'Mehdi', 'mehdi', 'administrator'),
(2, 'test', 'test', 'test', 'manager');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mainSteps`
--
ALTER TABLE `mainSteps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mainSteps`
--
ALTER TABLE `mainSteps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
