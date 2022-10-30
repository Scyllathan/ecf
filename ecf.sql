-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : y6aj3qju8efqj0w1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com
-- Généré le : dim. 30 oct. 2022 à 22:31
-- Version du serveur : 8.0.28
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tcppfcjmo7161v7j`
--

-- --------------------------------------------------------

--
-- Structure de la table `branch`
--

CREATE TABLE `branch` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `user_id` int NOT NULL,
  `client_grants_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `branch`
--

INSERT INTO `branch` (`id`, `name`, `manager_name`, `address`, `client_id`, `user_id`, `client_grants_id`) VALUES
(1, 'Marché', 'John Doe', '8 place du marché, 77100 Meaux', 0x34636432663437352d343666632d3131, 13, 3),
(3, 'Beauval', 'Chuck Norris', '22 rue René Bazin, 77100 Meaux', 0x34636432663437352d343666632d3131, 14, 5),
(6, 'Centre', 'Laura Dupont', '22 rue des Lilas, 77120 Coulommiers', 0x62653465363366302d343732382d3131, 15, 6),
(7, 'Ville Haute', 'Paul Morel', '2 place Carrel, 77120 Coulommiers', 0x62653465363366302d343732382d3131, 16, 6),
(8, 'Centre', 'Charles Martin', '3 avenue des peupliers 77410 Claye Souilly', 0x35323131396339352d343666662d3131, 17, 26),
(9, 'Victor Hugo', 'Mélie Mellot', '12 ru des Gouttes 77410 Claye Souilly', 0x35323131396339352d343666662d3131, 18, 27),
(10, 'Frot', 'Quentin Dupuis', '14 rue Louis Braille 77100 Meaux', 0x34636432663437352d343666632d3131, 19, 28),
(11, 'Ancre de Lune', 'Marie Verrier', '6 rue Frédéric Passy, 77470 Trilport', 0x37623938663932362d343730302d3131, 20, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `commercial_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `name`, `active`, `short_description`, `full_description`, `logo_url`, `url`, `dpo`, `technical_contact`, `commercial_contact`, `user_id`) VALUES
(0x34636432663437352d343666632d3131, 'Meaux', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec metus auctor, malesuada enim vel, lacinia elit. Suspendisse potenti. Morbi faucibus, risus ut dapibus lacinia, tortor ante elementum augue, sed dapibus purus felis non turpis. Praesent', NULL, 'https://placeimg.com/100/100/arch', 'fitnesspark-meaux.fr', 'dpo@meaux.fr', 'techco@meaux.fr', 'comco@meaux.fr', 4),
(0x35323131396339352d343666662d3131, 'Claye-Souilly', 1, 'Voici notre description courte. Vous n\'y trouverez pas grand chose', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', NULL, 'fitnesspark-claye.fr', 'dpo@claye.fr', 'techco@claye.fr', 'comco@claye.fr', 5),
(0x37623938663932362d343730302d3131, 'Trilport', 0, 'Toujours pas grand chose à lire ici, vous commencez à le savoir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', 'https://placeimg.com/100/100/people', NULL, 'dpo@trilport.fr', 'techco@trilport.fr', 'comco@trilport.fr', 6),
(0x37623939313930352d343730302d3131, 'Nanteuil', 1, 'Toujours pas grand chose à lire ici, vous commencez à le savoir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', NULL, NULL, 'dpo@nanteuil.fr', 'techco@nanteuil.fr', 'comco@nanteuil.fr', 7),
(0x37623939313965332d343730302d3131, 'Mareuil', 1, 'Toujours pas grand chose à lire ici, vous commencez à le savoir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', NULL, NULL, 'dpo@mareuil.fr', 'techco@mareuil.fr', 'comco@mareuil.fr', 8),
(0x37623939316134312d343730302d3131, 'Villenoy', 0, 'Toujours pas grand chose à lire ici, vous commencez à le savoir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', NULL, NULL, 'dpo@villenoy.fr', 'techco@villenoy.fr', 'comco@villenoy.fr', 11),
(0x62653465363366302d343732382d3131, 'Coulommier', 1, 'Encore une autre description courte totalement random', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis auctor justo, eget placerat dui. Duis rutrum tellus sed leo mattis, id scelerisque elit aliquam. Nullam in efficitur risus, et consequat elit. Curabitur pellentesque sit amet nisi vel laoreet. Vivamus vel fringilla arcu, at varius mi. Aenean ullamcorper fringilla mauris vitae efficitur. Sed lacinia elit a justo scelerisque, sagittis malesuada metus mattis. Pellentesque efficitur ante quis ultricies iaculis. Aliquam ullamcorper viverra nisi nec venenatis. Suspendisse feugiat ex metus, a finibus eros iaculis ac. Donec at aliquet magna. Phasellus sit amet consectetur justo. Fusce erat arcu, bibendum non arcu vel, blandit vehicula augue. Pellentesque mattis sapien in maximus pretium. In viverra erat a dolor fringilla, non porta mauris sodales.', NULL, 'fitnesspark-coulommier.fr', 'dpo@coulommier.fr', 'techco@coulommier.fr', 'comco@coulommier.fr', 12),
(0x63376664306433392d343730302d3131, 'Troyes', 0, 'Toujours pas grand chose à lire ici, vous commencez à le savoir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', 'https://placeimg.com/100/100/any', NULL, 'dpo@troyes.fr', 'techco@troyes.fr', 'comco@troyes.fr', 9),
(0x63383033306431622d343730302d3131, 'Reims', 0, 'Toujours pas grand chose à lire ici, vous commencez à le savoir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lectus sapien, dictum vitae erat vel, ultricies scelerisque dolor. Aenean non justo id massa scelerisque semper. Donec ultrices aliquam magna id cursus. Maecenas euismod maximus ipsum, eu porttitor tellus aliquam eu. Praesent tincidunt, justo in lobortis luctus, sem ipsum fringilla orci, eu fringilla tortor nulla sit amet velit. Proin elementum viverra accumsan. Suspendisse potenti. Vestibulum sed urna eu arcu imperdiet ullamcorper vel ac risus. Ut suscipit urna eget risus convallis, a molestie magna porta.', NULL, NULL, 'dpo@reims.fr', 'techco@reims.fr', 'comco@reims.fr', 10);

-- --------------------------------------------------------

--
-- Structure de la table `client_grants`
--

CREATE TABLE `client_grants` (
  `id` int NOT NULL,
  `active` tinyint(1) NOT NULL,
  `perms` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:json)',
  `client_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client_grants`
--

INSERT INTO `client_grants` (`id`, `active`, `perms`, `client_id`, `token`) VALUES
(3, 1, '{\"membersRead\":true,\"membersWrite\":true,\"membersAdd\":true,\"membersPaymentSchedulesRead\":false,\"membersStatisticRead\":false,\"membersSubscriptionRead\":false,\"membersSchedulesRead\":false,\"membersSchedulesWrite\":false,\"paymentDayRead\":true}', 0x34636432663437352d343666632d3131, NULL),
(5, 0, '{\"membersRead\":false,\"membersWrite\":false,\"membersAdd\":true,\"membersPaymentSchedulesRead\":true,\"membersStatisticRead\":false,\"membersSubscriptionRead\":false,\"membersSchedulesRead\":false,\"membersSchedulesWrite\":false,\"paymentDayRead\":false}', 0x34636432663437352d343666632d3131, NULL),
(6, 0, '{\"membersRead\":true,\"membersWrite\":true,\"membersAdd\":false,\"membersPaymentSchedulesRead\":false,\"membersStatisticRead\":false,\"membersSubscriptionRead\":true,\"membersSchedulesRead\":false,\"membersSchedulesWrite\":false,\"paymentDayRead\":true}', 0x62653465363366302d343732382d3131, NULL),
(26, 1, '{\"membersRead\":false,\"membersWrite\":false,\"membersAdd\":false,\"membersPaymentSchedulesRead\":true,\"membersStatisticRead\":false,\"membersSubscriptionRead\":false,\"membersSchedulesRead\":true,\"membersSchedulesWrite\":true,\"paymentDayRead\":true}', 0x35323131396339352d343666662d3131, NULL),
(27, 0, '{\"membersRead\":true,\"membersWrite\":true,\"membersAdd\":false,\"membersPaymentSchedulesRead\":false,\"membersStatisticRead\":false,\"membersSubscriptionRead\":true,\"membersSchedulesRead\":false,\"membersSchedulesWrite\":false,\"paymentDayRead\":true}', 0x35323131396339352d343666662d3131, NULL),
(28, 1, '{\"membersRead\":true,\"membersWrite\":true,\"membersAdd\":true,\"membersPaymentSchedulesRead\":true,\"membersStatisticRead\":true,\"membersSubscriptionRead\":true,\"membersSchedulesRead\":true,\"membersSchedulesWrite\":true,\"paymentDayRead\":true}', 0x34636432663437352d343666632d3131, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221007125053', '2022-10-07 14:51:06', 107),
('DoctrineMigrations\\Version20221008110809', '2022-10-08 13:08:19', 88),
('DoctrineMigrations\\Version20221011102018', '2022-10-11 12:20:31', 293),
('DoctrineMigrations\\Version20221015154639', '2022-10-15 17:46:52', 576),
('DoctrineMigrations\\Version20221026113443', '2022-10-26 13:34:58', 589);

-- --------------------------------------------------------

--
-- Structure de la table `install_perm`
--

CREATE TABLE `install_perm` (
  `id` int NOT NULL,
  `members_read` tinyint(1) NOT NULL,
  `members_write` tinyint(1) NOT NULL,
  `members_add` tinyint(1) NOT NULL,
  `members_products_add` tinyint(1) NOT NULL,
  `members_payment_schedules_read` tinyint(1) NOT NULL,
  `members_statistic_read` tinyint(1) NOT NULL,
  `members_subscription_read` tinyint(1) NOT NULL,
  `members_schedules_read` tinyint(1) NOT NULL,
  `members_schedules_write` tinyint(1) NOT NULL,
  `payment_day_read` tinyint(1) NOT NULL,
  `client_id` binary(16) NOT NULL COMMENT '(DC2Type:uuid)',
  `branch_id` int NOT NULL,
  `client_grants_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `install_perm`
--

INSERT INTO `install_perm` (`id`, `members_read`, `members_write`, `members_add`, `members_products_add`, `members_payment_schedules_read`, `members_statistic_read`, `members_subscription_read`, `members_schedules_read`, `members_schedules_write`, `payment_day_read`, `client_id`, `branch_id`, `client_grants_id`) VALUES
(1, 1, 1, 0, 0, 1, 1, 0, 1, 0, 1, 0x34636432663437352d343666632d3131, 1, 3),
(3, 1, 1, 0, 1, 1, 1, 0, 0, 1, 1, 0x34636432663437352d343666632d3131, 3, 5),
(4, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0x62653465363366302d343732382d3131, 6, 6),
(5, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0x62653465363366302d343732382d3131, 7, 6),
(12, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0x35323131396339352d343666662d3131, 8, 26),
(13, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0x35323131396339352d343666662d3131, 9, 27),
(14, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0x34636432663437352d343666632d3131, 10, 28);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_connection` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `last_connection`) VALUES
(3, 'test@test.fr', '[\"ROLE_ADMIN\"]', '$2y$13$VuxPupraIYVxOqi/c8urrOAik9w2xtG5buG7j5jGfL.I6Va3MmnZK', '2022-10-30 22:01:58'),
(4, 'test2@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$19gGmq6WrSJ58NNwH9fpMeN4OcVQFPOUDLcLfsBtqb0R9Cf83a4VC', NULL),
(5, 'test3@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$VuxPupraIYVxOqi/c8urrOAik9w2xtG5buG7j5jGfL.I6Va3MmnZK', NULL),
(6, 'test4@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$wuGVO8gktQVXrh/T4stvEufzk2t6SSr4sf5OMhcfv3b2rlNH9xPaO', '2022-10-21 16:08:53'),
(7, 'test5@test.fr', '[\"ROLE_CLIENT\"]', '$2y$10$BUIsj7OxGkJpKa8AfJm6jeqdFn0PZW/iMRDtzTT98dEMK4uR883tW', NULL),
(8, 'test6@test.fr', '[\"ROLE_CLIENT\"]', '$2y$10$BUIsj7OxGkJpKa8AfJm6jeqdFn0PZW/iMRDtzTT98dEMK4uR883tW', NULL),
(9, 'test7@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$1A.Jzhp2nI5k8vldrZLJuOYcg21W20RhWoQqFplT9wwzUXcAuyrqW', '2022-10-24 23:32:49'),
(10, 'test8@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$UQRRbFxjOgnJf.dgFVoEBuv36AVxYp.uChr1TEBVQtOq6l5XeTyMm', NULL),
(11, 'test9@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$LkSUxRwEDMc5FJS3jEKlMeII3QL0mYnZIoQkNT0f4D4e0vd.oXH6O', NULL),
(12, 'test10@test.fr', '[\"ROLE_CLIENT\"]', '$2y$13$veiwjuRravUR3rCom0adaejczty1yGzoSa4MU8kqP7kdiW.4Beyqe', NULL),
(13, 'branch@branch.fr', '[\"ROLE_BRANCH\"]', '$2y$13$A9K36F2HrdQotcrUTY0EqOy5M/cSrJsJvoPYjklsYe5iEabJkR5te', '2022-10-30 21:59:54'),
(14, 'branch2@branch.fr', '[\"ROLE_BRANCH\"]', '$2y$13$NmErBx7D6bsV82PZ8NsUDuULRWlRZ1m3ca6rZR.Otzq0lYpoecPUC', '2022-10-23 17:03:27'),
(15, 'branch3@branch.fr', '[\"ROLE_BRANCH\"]', '$2a$12$A41ssj2ANAhMxmsFhdgMi.fQXqOPGFhcoRhS8x/zGDRwKWkXbsDbu', NULL),
(16, 'branch4@branch.fr', '[\"ROLE_BRANCH\"]', '$2y$10$DZ1YqHlJBz62KlrnLUaRfORGensoOVHYtpy6L3Z6qPjsfmN1oZMHG', NULL),
(17, 'branch5@branch.fr', '[\"ROLE_BRANCH\"]', '$2y$10$DZ1YqHlJBz62KlrnLUaRfORGensoOVHYtpy6L3Z6qPjsfmN1oZMHG', NULL),
(18, 'branch6@branch.fr', '[\"ROLE_BRANCH\"]', '$2a$12$A41ssj2ANAhMxmsFhdgMi.fQXqOPGFhcoRhS8x/zGDRwKWkXbsDbu', NULL),
(19, 'branch7@branch.fr', '[\"ROLE_BRANCH\"]', '$2y$10$ySF90vvOhBKqEN7I6TwE2eKJawyJpjgyblB5GGBlu1RQLD7FNXS42', NULL),
(20, 'branch8@branch.fr', '[ROLE_BRANCH]', '$2y$10$ySF90vvOhBKqEN7I6TwE2eKJawyJpjgyblB5GGBlu1R...', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_BB861B1FA76ED395` (`user_id`),
  ADD KEY `IDX_BB861B1F19EB6921` (`client_id`),
  ADD KEY `IDX_BB861B1F28B9C205` (`client_grants_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C74404555E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_C7440455A76ED395` (`user_id`);

--
-- Index pour la table `client_grants`
--
ALTER TABLE `client_grants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_310B8C6519EB6921` (`client_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `install_perm`
--
ALTER TABLE `install_perm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E2B63FC3DCD6CC49` (`branch_id`),
  ADD KEY `IDX_E2B63FC319EB6921` (`client_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `client_grants`
--
ALTER TABLE `client_grants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `install_perm`
--
ALTER TABLE `install_perm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `FK_BB861B1F19EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_BB861B1F28B9C205` FOREIGN KEY (`client_grants_id`) REFERENCES `client_grants` (`id`),
  ADD CONSTRAINT `FK_BB861B1FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C7440455A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `client_grants`
--
ALTER TABLE `client_grants`
  ADD CONSTRAINT `FK_310B8C6519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `install_perm`
--
ALTER TABLE `install_perm`
  ADD CONSTRAINT `FK_E2B63FC319EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_E2B63FC3DCD6CC49` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
