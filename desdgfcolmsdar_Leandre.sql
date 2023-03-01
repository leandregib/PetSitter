-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 01 mars 2023 à 17:44
-- Version du serveur : 5.7.41
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `desdgfcolmsdar_Leandre`
--

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_cp` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_cp`) VALUES
(1, 'Strasbourg', '67000'),
(2, 'Colmar', '68000'),
(3, 'Marseille', '13000'),
(4, 'Paris', '75000'),
(5, 'Lyon', '69000');

-- --------------------------------------------------------

--
-- Structure de la table `historic`
--

CREATE TABLE `historic` (
  `his_id` int(10) UNSIGNED NOT NULL,
  `his_new_modif` varchar(255) NOT NULL,
  `his_old_modif` varchar(255) NOT NULL,
  `his_user` varchar(255) NOT NULL,
  `his_date_hour` date NOT NULL,
  `his_table` varchar(255) NOT NULL,
  `his_champ_id` int(10) UNSIGNED NOT NULL,
  `his_champ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `historic`
--

INSERT INTO `historic` (`his_id`, `his_new_modif`, `his_old_modif`, `his_user`, `his_date_hour`, `his_table`, `his_champ_id`, `his_champ`) VALUES
(1, 'C\'était top ! ', 'test', '4 - Giboin Léandre', '2023-01-18', 'picture', 2, 'pic_description');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `home_id` int(10) UNSIGNED NOT NULL,
  `home_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`home_id`, `home_type`) VALUES
(1, 'Maison sans jardin'),
(2, 'Maison avec jardin'),
(3, 'Appartement sans jardin'),
(4, 'Appartement avec jardin'),
(5, 'Non renseigné');

-- --------------------------------------------------------

--
-- Structure de la table `pet`
--

CREATE TABLE `pet` (
  `pet_id` int(10) UNSIGNED NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `pet_birthday` date DEFAULT NULL,
  `pet_userid` int(10) UNSIGNED NOT NULL,
  `pet_typeid` int(10) UNSIGNED NOT NULL,
  `pet_sexid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pet`
--

INSERT INTO `pet` (`pet_id`, `pet_name`, `pet_birthday`, `pet_userid`, `pet_typeid`, `pet_sexid`) VALUES
(2, 'Beans', '2018-09-01', 6, 2, 1),
(14, 'Dorian', '1999-10-17', 14, 3, 2),
(21, 'Fifi', '1999-12-14', 18, 1, 2),
(22, 'gigi', '2022-10-10', 23, 2, 1),
(23, 'gogo', '2022-12-12', 23, 2, 2),
(24, 'gugu', '2022-10-10', 23, 2, 1),
(25, 'lulu', '2020-10-10', 24, 1, 1),
(26, 'gaga', '2000-12-12', 24, 4, 2),
(27, 'Medor', '2023-03-03', 28, 1, 2),
(29, 'Kiwii', NULL, 21, 3, 2),
(33, 'Serpette', '2022-07-06', 29, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pet_type`
--

CREATE TABLE `pet_type` (
  `pet_type_id` int(10) UNSIGNED NOT NULL,
  `pet_type_kind` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pet_type`
--

INSERT INTO `pet_type` (`pet_type_id`, `pet_type_kind`) VALUES
(1, 'Chien'),
(2, 'Chat'),
(3, 'Rongeur'),
(4, 'Reptile');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `pic_id` int(10) UNSIGNED NOT NULL,
  `pic_name` varchar(100) DEFAULT NULL,
  `pic_date` date DEFAULT NULL,
  `pic_description` text,
  `pic_userid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`pic_id`, `pic_name`, `pic_date`, `pic_description`, `pic_userid`) VALUES
(3, '20230228082651.jpg', '2023-02-28', 'un chien', 14),
(4, '20230228082839.jpg', '2023-02-28', 're le chien', 14),
(5, '20230301152036.jpeg', '2023-03-01', '', 23),
(6, '20230301152348.jpg', '2023-03-01', '', 23),
(7, '20230301152405.jpg', '2023-03-01', 'super chat', 23),
(8, '20230301152421.jpg', '2023-03-01', 'super chat 2', 23),
(9, '20230301152436.jpg', '2023-03-01', '', 23),
(10, '20230301152447.jpg', '2023-03-01', '', 23),
(11, '20230301152458.jpg', '2023-03-01', '', 23),
(12, '20230301152509.jpg', '2023-03-01', '', 23),
(13, '20230301152525.jpg', '2023-03-01', '', 23),
(14, '20230301152545.jpg', '2023-03-01', '', 23),
(15, '20230301152658.jpg', '2023-03-01', 'hihi', 23),
(16, '20230301152714.jpg', '2023-03-01', 'fight', 23),
(17, '20230301152725.jpg', '2023-03-01', '', 23),
(18, '20230301152738.jpg', '2023-03-01', '', 23),
(19, '20230301152805.jpg', '2023-03-01', '', 23),
(20, '20230301152814.jpg', '2023-03-01', '', 23),
(21, '20230301152822.jpg', '2023-03-01', '', 23),
(22, '20230301152848.jpg', '2023-03-01', '', 23),
(23, '20230301152906.jpg', '2023-03-01', '', 23),
(24, '20230301152916.jpg', '2023-03-01', '', 23),
(25, '20230301153821.jpg', '2023-03-01', 'Mon gaga', 24),
(26, '20230301161317.jpg', '2023-03-01', '', 28),
(27, '20230301161439.jpg', '2023-03-01', 'un autre chieng', 28),
(28, '20230301172517.png', '2023-03-01', '', 29);

-- --------------------------------------------------------

--
-- Structure de la table `propose`
--

CREATE TABLE `propose` (
  `prop_id` int(10) UNSIGNED NOT NULL,
  `prop_valid` tinyint(1) NOT NULL DEFAULT '0',
  `prop_userid` int(10) UNSIGNED NOT NULL,
  `prop_sitterid` int(10) UNSIGNED NOT NULL,
  `prop_pet_typeid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `propose`
--

INSERT INTO `propose` (`prop_id`, `prop_valid`, `prop_userid`, `prop_sitterid`, `prop_pet_typeid`) VALUES
(2, 1, 6, 1, 1),
(3, 1, 6, 1, 2),
(6, 1, 18, 1, 1),
(7, 1, 18, 2, 1),
(8, 1, 18, 3, 1),
(9, 1, 18, 1, 2),
(10, 1, 18, 2, 2),
(11, 1, 18, 3, 2),
(12, 1, 18, 1, 3),
(13, 1, 18, 2, 3),
(14, 1, 18, 3, 3),
(15, 1, 18, 1, 4),
(16, 1, 18, 2, 4),
(17, 0, 18, 3, 4),
(18, 1, 23, 1, 2),
(19, 0, 23, 2, 2),
(20, 0, 24, 1, 1),
(21, 0, 24, 2, 1),
(22, 0, 24, 3, 1),
(23, 0, 24, 1, 4),
(24, 1, 24, 2, 4),
(25, 1, 24, 3, 4),
(26, 0, 25, 2, 2),
(27, 0, 28, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Modérateur');

-- --------------------------------------------------------

--
-- Structure de la table `sex`
--

CREATE TABLE `sex` (
  `sex_id` int(10) UNSIGNED NOT NULL,
  `sex_type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sex`
--

INSERT INTO `sex` (`sex_id`, `sex_type`) VALUES
(1, 'Femelle'),
(2, 'Mâle'),
(3, 'Non connu');

-- --------------------------------------------------------

--
-- Structure de la table `sitter`
--

CREATE TABLE `sitter` (
  `sitter_id` int(10) UNSIGNED NOT NULL,
  `sitter_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sitter`
--

INSERT INTO `sitter` (`sitter_id`, `sitter_type`) VALUES
(1, 'À domicile'),
(2, 'En pension'),
(3, 'Promenade');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` char(10) NOT NULL,
  `user_description` text NOT NULL,
  `user_iban` char(27) DEFAULT NULL,
  `user_homeid` int(10) UNSIGNED NOT NULL,
  `user_cityid` int(10) UNSIGNED NOT NULL,
  `user_roleid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_birthday`, `user_mail`, `user_password`, `user_address`, `user_phone`, `user_description`, `user_iban`, `user_homeid`, `user_cityid`, `user_roleid`) VALUES
(6, 'Berthomme', 'Charles', '1986-01-01', 'hello@api-studio.fr', 'formateurHTMLCSSdu68!!', '20 rue d&#39;Agen', '0367300236', 'Inscris pour faire garder ma petite chattounette qui répond au nom de Beans&#13;&#10;netbeans est le meilleur ide j&#39;en suis convaincu', NULL, 5, 1, 3),
(14, 'Timothée', 'Kern', '1999-10-10', 'timotheekern@gmail.com', '$2y$10$14eUsgGyeCdChdVE3IOtre2LdJlG0oa7fMRFCQBBBu0SiQ9EDKfeq', '32 rue du best', '0389243820', 'Le meilleur Timothée de l&#39;univers the best of the best&#13;&#10;de l&#39;univers tout entier mon meilleur copain', NULL, 1, 1, 2),
(17, 'go', 'go', '1999-05-16', 'gogo@gmail.com', '$2y$10$FbHX5civdeDmaWDugCMd/OeR3CK5A4POG6AWruI333Eybp0csY.DO', '32 rue lol', '0389243824', 'grhg', NULL, 5, 5, 1),
(18, 'toto', 'toto', '1999-12-16', 'toto@gmail.com', '$2y$10$f/o6Gcp2VgKiGGUoIRQa7eVpO4Lf7fwT3QZJzoNF1575MQtay4mUq', '32 rue lol', '0389243824', '41243', NULL, 2, 5, 3),
(20, 'admin1', 'admin1', '1999-10-10', 'admin1@gmail.com', '$2y$10$JMxFxRdWghv64pHWC.cQp.lvOQMyzXHVNu3G31.13rrVjrqFXluuG', '32 rue admin', '0389243824', 'admin1', NULL, 5, 2, 1),
(21, 'moderateur1', 'moderateur1', '1999-10-10', 'moderateur1@gmail.com', '$2y$10$Hr4fRNzRdr0jI4cJ7TaR9uOTPyVkCegwYCyHOS1RdFrQVDc2yeAcy', '32 rue du moderateur', '0325252525', 'moderateur', NULL, 5, 2, 3),
(22, 'moderateur2', 'moderateur2', '1999-10-10', 'moderateur2@gmail.com', '$2y$10$J8eBqLqnbjtkaFnbuY.yau3qTZzmlYTOIjCUxzchICLwiMvrXiZyi', '32 rue du moderateur', '0624252525', 'moderateur', NULL, 5, 2, 3),
(23, 'user1', 'user1', '1999-10-10', 'user1@gmail.com', '$2y$10$wB./6nQx99.KgNzd6OHmKOmVeR/ZjDd/Vqdx7XmoroNOtm3qtsWLW', '32 rue lol', '0624252525', 'efefeafg', NULL, 2, 5, 2),
(24, 'user2', 'user2', '2022-02-20', 'user2@gmail.com', '$2y$10$ZkajvS.sBdYJX8tCb1Z.d.Pdw5GZT03gqc4zr1gUG0FaDJyW.eLEe', '32 rue user', '0621202020', 'user2', NULL, 4, 5, 2),
(25, 'user3', 'user3', '1960-12-10', 'user3@gmail.com', '$2y$10$zczUfYHmu4u/HwC4XUAOo.Fem0HsBesHCzSlRceytbPlaoFz6hvbO', '32 rue user', '0325252525', 'user3', NULL, 1, 2, 2),
(26, 'user4', 'user4', '1999-12-10', 'user4@gmail.com', '$2y$10$5TSup4l2QUymhtMJP7Cpxu1VaNwGUD1xFhF0ISiMCA2UrggvjajZy', '32 rue user', '0367555555', 'user4', NULL, 5, 5, 2),
(27, 'Léandre', 'Giboin', '2000-11-04', 'leandregiboin@gmail.com', '$2y$10$XmGZYhcP5Cf9GtZ7S/ZCUukYXYWqkG8gb8APWU2Ivl9msgHtCqK1C', '32 rue des yolo', '0621744558', 'Léandre the only Léandre', NULL, 5, 2, 2),
(28, 'Blanc', 'Michel', '1995-06-08', 'michel@gmail.fr', '$2y$10$5OCcMihqiYbRsfuYigf3juuX3JFsmnDAdcUPZ9huKTYeOE0scwg.C', '4 rue de la Concorde', '0687477452', '', NULL, 3, 3, 2),
(29, 'Belle', 'Michelle', '1965-03-18', 'michelle@hotmail.fr', '$2y$10$/6dOdYIcqC50R/RI647SXOjOaWMap2lCzmrq.5I2HZlXbwOCAMtv6', '9 rue du puit', '0623584796', '', NULL, 5, 5, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Index pour la table `historic`
--
ALTER TABLE `historic`
  ADD PRIMARY KEY (`his_id`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Index pour la table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `fk_pet_user` (`pet_userid`),
  ADD KEY `fk_pet_type` (`pet_typeid`),
  ADD KEY `fk_pet_sex` (`pet_sexid`);

--
-- Index pour la table `pet_type`
--
ALTER TABLE `pet_type`
  ADD PRIMARY KEY (`pet_type_id`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pic_id`),
  ADD KEY `fk_picture_user` (`pic_userid`);

--
-- Index pour la table `propose`
--
ALTER TABLE `propose`
  ADD PRIMARY KEY (`prop_id`),
  ADD KEY `fk_propose_users` (`prop_userid`),
  ADD KEY `fk_propose_sitter` (`prop_sitterid`),
  ADD KEY `fk_propose_pet_type` (`prop_pet_typeid`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`sex_id`);

--
-- Index pour la table `sitter`
--
ALTER TABLE `sitter`
  ADD PRIMARY KEY (`sitter_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_home` (`user_homeid`),
  ADD KEY `fk_user_city` (`user_cityid`),
  ADD KEY `fk_user_role` (`user_roleid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `historic`
--
ALTER TABLE `historic`
  MODIFY `his_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pet`
--
ALTER TABLE `pet`
  MODIFY `pet_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `pet_type`
--
ALTER TABLE `pet_type`
  MODIFY `pet_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `pic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `propose`
--
ALTER TABLE `propose`
  MODIFY `prop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sex`
--
ALTER TABLE `sex`
  MODIFY `sex_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sitter`
--
ALTER TABLE `sitter`
  MODIFY `sitter_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `fk_pet_sex` FOREIGN KEY (`pet_sexid`) REFERENCES `sex` (`sex_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pet_type` FOREIGN KEY (`pet_typeid`) REFERENCES `pet_type` (`pet_type_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pet_user` FOREIGN KEY (`pet_userid`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `fk_picture_user` FOREIGN KEY (`pic_userid`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `propose`
--
ALTER TABLE `propose`
  ADD CONSTRAINT `fk_propose_pet_type` FOREIGN KEY (`prop_pet_typeid`) REFERENCES `pet_type` (`pet_type_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_propose_sitter` FOREIGN KEY (`prop_sitterid`) REFERENCES `sitter` (`sitter_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_propose_users` FOREIGN KEY (`prop_userid`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_city` FOREIGN KEY (`user_cityid`) REFERENCES `city` (`city_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_home` FOREIGN KEY (`user_homeid`) REFERENCES `home` (`home_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`user_roleid`) REFERENCES `role` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
