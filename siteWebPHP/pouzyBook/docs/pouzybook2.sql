-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 mars 2021 à 12:32
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pouzybook2`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie_c` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie_c`) VALUES
(1, 'roman');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210318140807', '2021-03-18 14:08:28', 1434),
('DoctrineMigrations\\Version20210318142619', '2021-03-18 14:26:29', 615),
('DoctrineMigrations\\Version20210318155705', '2021-03-18 15:57:14', 4447),
('DoctrineMigrations\\Version20210318161804', '2021-03-18 16:18:12', 1460),
('DoctrineMigrations\\Version20210318162720', '2021-03-18 16:27:32', 2184),
('DoctrineMigrations\\Version20210318203002', '2021-03-18 20:30:14', 543),
('DoctrineMigrations\\Version20210318203310', '2021-03-18 20:33:17', 1826),
('DoctrineMigrations\\Version20210318204944', '2021-03-18 20:49:50', 1862),
('DoctrineMigrations\\Version20210318205429', '2021-03-18 20:54:36', 4263),
('DoctrineMigrations\\Version20210318205954', '2021-03-18 20:59:59', 8618),
('DoctrineMigrations\\Version20210318210126', '2021-03-18 21:01:31', 3614);

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `exemplaire_id` int NOT NULL,
  `dispo_em` int NOT NULL,
  `date_em` date NOT NULL,
  `delais_em` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_364071D767B3B43D` (`users_id`),
  KEY `IDX_364071D75843AA21` (`exemplaire_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `exemplaire`
--

DROP TABLE IF EXISTS `exemplaire`;
CREATE TABLE IF NOT EXISTS `exemplaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `livre_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5EF83C9267B3B43D` (`users_id`),
  KEY `livre_id` (`livre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `exemplaire`
--

INSERT INTO `exemplaire` (`id`, `users_id`, `livre_id`) VALUES
(1, 6, 8),
(2, 6, 8);

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `langue_l` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `langue_l`) VALUES
(1, 'francais'),
(2, 'anglais'),
(3, 'allemand'),
(4, 'italien');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `langue_id` int NOT NULL,
  `exemplaire_id` int NOT NULL,
  `categorie_id` int NOT NULL,
  `titre_l` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_pages_l` int NOT NULL,
  `edition_l` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AC634F9967B3B43D` (`users_id`),
  KEY `IDX_AC634F992AADBACD` (`langue_id`),
  KEY `IDX_AC634F995843AA21` (`exemplaire_id`),
  KEY `IDX_AC634F99BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `users_id`, `langue_id`, `exemplaire_id`, `categorie_id`, `titre_l`, `nombre_pages_l`, `edition_l`, `auteur`) VALUES
(1, 6, 4, 1, 1, 'la chasse', 382, 'Gaillimard', 'rrrr'),
(8, 3, 1, 1, 1, 'Le seigneur des anneaux', 452, 'Folio', 'Tolkien');

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
CREATE TABLE IF NOT EXISTS `reset_password_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `date_naissance` date NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `is_verified`, `date_naissance`, `name`, `first_name`, `rue`, `cp`) VALUES
(3, 'jeny35@orange.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$GMtvYJV40TLUaZB5xJa5/g$9RSUjonu9a385ISDSnsFo6f9TF9KiMUhkBbljNAAtt8', 0, '1982-03-03', 'Gorge', 'Jennifer', '13 rue Augustin Le Guen', 22100),
(6, 'jeromepicard90@sfr.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$G4kTUbQXv+Cq/4ekUsMjtA$VibYetLf9xnq2sscV7P0xg0W1BkufZ9UF9Zz18MGN1c', 0, '1984-08-16', 'Picard', 'Jérôme', '13 rue Augustin Le Guen', 22100);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `FK_364071D75843AA21` FOREIGN KEY (`exemplaire_id`) REFERENCES `exemplaire` (`id`),
  ADD CONSTRAINT `FK_364071D767B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `exemplaire`
--
ALTER TABLE `exemplaire`
  ADD CONSTRAINT `exemplaire_ibfk_1` FOREIGN KEY (`livre_id`) REFERENCES `livre` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_5EF83C9267B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `FK_AC634F992AADBACD` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`),
  ADD CONSTRAINT `FK_AC634F995843AA21` FOREIGN KEY (`exemplaire_id`) REFERENCES `exemplaire` (`id`),
  ADD CONSTRAINT `FK_AC634F9967B3B43D` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_AC634F99BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
