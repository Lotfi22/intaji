-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 28 sep. 2022 à 16:00
-- Version du serveur :  8.0.18
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
-- Base de données :  `intaji`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `solde` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`, `password_text`, `solde`) VALUES
(1, 'Lotfi', 'Lotfi', '$2y$10$BDJFGccV/XnssWriPRw7e.q.Rw1jZXbbMeloZAckJNO5mRuYCKGy6', 0, NULL, '2022-07-03 22:22:50', '2022-07-03 22:22:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `reference`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CATEGORIE_test1', 'CAT Test', '', '2022-07-28 20:25:56', '2022-09-14 09:31:46'),
(3, 'TEST3', 'TEST3', '', '2022-07-29 10:48:27', '2022-07-29 10:48:27'),
(4, 'etuie serviette', 'imprimer', '', '2022-09-01 09:33:47', '2022-09-01 09:33:47'),
(5, 'pompe', 'pompe', '', '2022-09-08 17:02:17', '2022-09-08 17:04:20'),
(6, 'san_pompe', 'san_pompe', '', '2022-09-08 17:02:35', '2022-09-08 17:04:34');

-- --------------------------------------------------------

--
-- Structure de la table `depots`
--

DROP TABLE IF EXISTS `depots`;
CREATE TABLE IF NOT EXISTS `depots` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `depot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `depots_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `depots`
--

INSERT INTO `depots` (`id`, `name`, `email`, `password`, `password_text`, `depot`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'seif', 'seif', '$2y$10$hm5328Dr3FUGPHt6AbYRD.n/eUDEn9ePniWmiSrp9D0VenhLzKyPe', 'seif', 'Bejaia', NULL, '2022-09-14 10:39:43', '2022-09-14 10:39:43'),
(2, 'Lotfi', 'lotfi', '$2y$10$VWY9GXxUsQ9FMzI5uM.8rukcnkDFWfLHQoP3uW7pB7xV7OPncZe9y', 'lotfi', 'Bejaia', NULL, '2022-09-28 13:01:19', '2022-09-28 13:01:19'),
(3, 'omar', 'omar', '$2y$10$51WKxtF1ECepfeWCEoZ7sugbgaWp/4eY3yHv6fMyg4fBNe.3JHwtW', 'omar', 'Chelghoum', NULL, '2022-09-28 13:25:29', '2022-09-28 13:25:29');

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

DROP TABLE IF EXISTS `historiques`;
CREATE TABLE IF NOT EXISTS `historiques` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ticket` bigint(20) UNSIGNED NOT NULL,
  `depot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `id_ticket`, `depot`, `created_at`, `updated_at`) VALUES
(1, 23, 'Bejaia', '2022-09-28 15:07:08', '2022-09-28 15:07:08'),
(2, 44, 'Bejaia', '2022-09-28 15:07:12', '2022-09-28 15:07:12'),
(3, 55, 'Bejaia', '2022-09-28 15:08:11', '2022-09-28 15:08:11'),
(4, 65, 'Bejaia', '2022-09-28 15:08:18', '2022-09-28 15:08:18'),
(5, 32, 'Chelghoum', '2022-09-28 15:25:54', '2022-09-28 15:25:54'),
(6, 77, 'Chelghoum', '2022-09-28 15:25:58', '2022-09-28 15:25:58'),
(7, 79, 'Chelghoum', '2022-09-28 15:26:01', '2022-09-28 15:26:01'),
(8, 89, 'Chelghoum', '2022-09-28 15:26:03', '2022-09-28 15:26:03'),
(9, 89, 'Bejaia', '2022-09-28 15:33:38', '2022-09-28 15:33:38');

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

DROP TABLE IF EXISTS `livraisons`;
CREATE TABLE IF NOT EXISTS `livraisons` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `num_livraison` bigint(20) NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `nom_produit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livreur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qte` int(11) NOT NULL,
  `prix` double NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en attente',
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'commerciale',
  `validator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pas encore',
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aucun commentaire',
  `freelancer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aucun',
  `remise` double NOT NULL DEFAULT '0',
  `versement` float NOT NULL DEFAULT '0',
  `id_commande` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livraisons`
--

INSERT INTO `livraisons` (`id`, `num_livraison`, `id_client`, `nom_produit`, `livreur`, `qte`, `prix`, `statut`, `user`, `validator`, `commentaire`, `freelancer`, `remise`, `versement`, `id_commande`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'machine_2', '2', 2, 200, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-25 14:14:42', '2022-09-25 15:20:36'),
(2, 1, 1, 'machine_a_cremme', '2', 1, 500000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-25 14:14:42', '2022-09-25 15:20:36'),
(3, 1, 1, 'pro1', '2', 6, 350000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-25 14:14:42', '2022-09-25 15:20:36'),
(4, 2, 1, 'machine_2', '1', 2, 20000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 90000, 0, '2022-09-25 15:23:51', '2022-09-26 16:38:37'),
(5, 2, 1, 'machine_a_cremme', '1', 1, 20000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 90000, 0, '2022-09-25 15:23:51', '2022-09-26 16:38:37'),
(6, 2, 1, 'pro1', '1', 3, 10000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 90000, 0, '2022-09-25 15:23:51', '2022-09-26 16:38:37'),
(7, 3, 1, 'machine_2', '1', 2, 180000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 980000, 0, '2022-09-25 15:25:48', '2022-09-26 15:41:48'),
(8, 3, 1, 'machine_a_cremme', '1', 1, 200000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 980000, 0, '2022-09-25 15:25:48', '2022-09-26 15:41:48'),
(9, 3, 1, 'pro1', '1', 3, 140000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 980000, 0, '2022-09-25 15:25:48', '2022-09-26 15:41:48'),
(10, 4, 1, 'machine_2', '1', 2, 100000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 802000, 0, '2022-09-25 15:33:49', '2022-09-26 16:10:10'),
(11, 4, 1, 'machine_a_cremme', '1', 1, 200000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 802000, 0, '2022-09-25 15:33:49', '2022-09-26 16:10:10'),
(12, 4, 1, 'pro1', '1', 3, 134000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 802000, 0, '2022-09-25 15:33:49', '2022-09-26 16:10:10'),
(13, 5, 1, 'machine_2', '1', 2, 200000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-25 15:38:28', '2022-09-26 11:40:49'),
(14, 5, 1, 'machine_a_cremme', '1', 1, 309000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-25 15:38:28', '2022-09-26 11:40:49'),
(15, 5, 1, 'pro1', '1', 3, 487000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-25 15:38:28', '2022-09-26 11:40:49'),
(16, 6, 1, 'machine_2', '1', 2, 100000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-26 14:21:00', '2022-09-26 14:21:23'),
(17, 6, 1, 'machine_a_cremme', '1', 1, 100000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-26 14:21:00', '2022-09-26 14:21:23'),
(18, 6, 1, 'pro1', '1', 3, 100000, 'rejeté', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 0, 0, '2022-09-26 14:21:00', '2022-09-26 14:21:23'),
(19, 7, 1, 'machine_2', '1', 2, 6000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 36000, 0, '2022-09-26 15:45:46', '2022-09-26 15:48:06'),
(20, 7, 1, 'machine_a_cremme', '1', 1, 6000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 36000, 0, '2022-09-26 15:45:46', '2022-09-26 15:48:06'),
(21, 7, 1, 'pro1', '1', 3, 6000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 36000, 0, '2022-09-26 15:45:46', '2022-09-26 15:48:06'),
(22, 8, 1, 'machine_2', '2', 2, 2320000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 4904000, 0, '2022-09-26 16:46:44', '2022-09-26 16:49:13'),
(23, 8, 1, 'machine_a_cremme', '2', 1, 120000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 4904000, 0, '2022-09-26 16:46:44', '2022-09-26 16:49:13'),
(24, 8, 1, 'pro1', '2', 6, 24000, 'encaissé', 'commerciale', 'Lotfi', 'Aucun commentaire', 'Aucun', 0, 4904000, 0, '2022-09-26 16:46:44', '2022-09-26 16:49:13');

-- --------------------------------------------------------

--
-- Structure de la table `livreurs`
--

DROP TABLE IF EXISTS `livreurs`;
CREATE TABLE IF NOT EXISTS `livreurs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_editor` tinyint(1) DEFAULT '0',
  `adress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1111',
  `password_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1111',
  `wilaya_id` int(10) UNSIGNED DEFAULT NULL,
  `commune_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identite` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'empty',
  `state` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `livreurs_email_unique` (`email`),
  KEY `livreurs_wilaya_id_foreign` (`wilaya_id`),
  KEY `livreurs_commune_id_foreign` (`commune_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livreurs`
--

INSERT INTO `livreurs` (`id`, `name`, `prenom`, `email`, `is_editor`, `adress`, `telephone`, `birth`, `password`, `password_text`, `wilaya_id`, `commune_id`, `remember_token`, `created_at`, `updated_at`, `identite`, `state`) VALUES
(1, 'LIVREUR TEST', 'LIVREUR TEST', 'LIVREUR TEST', 0, 'ALGER', '0557266778', NULL, '$2y$10$tGVZzR.a/LxPbAaZLplIJOg1afdx83XCxCbuZilqkan162GNc532G', 'TEST', NULL, NULL, NULL, '2022-07-28 20:41:23', '2022-07-28 20:41:23', 'empty', 1),
(2, 'MOHAMMED', 'MOHAMMED', 'CITROEN 2021', 0, 'ORAN', '0557015468', NULL, '$2y$10$900ieJrHumditeUQ/syVm.MG5aSf6yIz/vJE8/nHmH35pVnF9u9ui', '000000', NULL, NULL, NULL, '2022-09-08 17:25:05', '2022-09-08 17:25:05', 'empty', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mes_depots`
--

DROP TABLE IF EXISTS `mes_depots`;
CREATE TABLE IF NOT EXISTS `mes_depots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mes_depots`
--

INSERT INTO `mes_depots` (`id`, `nom`, `adresse`) VALUES
(1, 'Bejaia', 'Bejaia'),
(2, 'Chelghoum', 'Chelghoum el aid');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2022_09_22_133628_create_livraisons_table', 1),
(14, '2022_09_28_144139_create_historiques_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `productions`
--

DROP TABLE IF EXISTS `productions`;
CREATE TABLE IF NOT EXISTS `productions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `productions_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `productions`
--

INSERT INTO `productions` (`id`, `name`, `email`, `password`, `password_text`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lotfi', 'lotfi', '$2y$10$LUS5OTF4WSbwgj386mf4SunuWBsaZDQRsh6VUAVIkLx1wWaHngpma', 'lotfi', NULL, '2022-09-14 10:38:38', '2022-09-14 10:38:38');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `prix_gros` double(8,2) DEFAULT '1000.00',
  `prix_semi_gros` double(8,2) DEFAULT '1000.00',
  `prix_detail` double(8,2) DEFAULT '1000.00',
  `prix_minimum` double(8,2) DEFAULT '1000.00',
  `prix_autre` double(8,2) DEFAULT NULL,
  `id_categorie` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'random.png',
  PRIMARY KEY (`id`),
  KEY `produits_id_categorie_foreign` (`id_categorie`),
  KEY `id` (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `reference`, `description`, `prix_gros`, `prix_semi_gros`, `prix_detail`, `prix_minimum`, `prix_autre`, `id_categorie`, `created_at`, `updated_at`, `image`) VALUES
(8, 'machine_a_cremme', 'BQL825', 'san_pompe', 280000.00, 310000.00, 320000.00, 350000.00, 350000.00, 'CATEGORIE_test1', '2022-09-08 17:07:15', '2022-09-20 07:16:55', 'images/produits/Adx9uI2CXDNAnPmI3YyLwqyueKl44mBuRZAbcLRf.svg'),
(9, 'pro1', 'pr1', 'desc Pr1', 1000.00, 2000.00, 2000.00, 2000.00, 2000.00, 'CATEGORIE_test1', '2022-09-14 09:34:47', '2022-09-14 09:34:47', '/img/produits/random.png'),
(10, 'machine_2', 'BQL825', 'san_pompe', 280000.00, 15000.00, 2000.00, 2000.00, 350000.00, 'pompe', '2022-09-14 14:01:49', '2022-09-14 14:01:49', '/img/produits/random.png'),
(11, 'produit_4', 'PR_4', NULL, 280000.00, NULL, NULL, NULL, NULL, 'pompe', '2022-09-20 07:20:59', '2022-09-20 07:20:59', '/img/produits/random.png'),
(12, 'piment', 'p1', NULL, 400.00, NULL, NULL, NULL, NULL, 'CATEGORIE_test1', '2022-09-20 08:41:26', '2022-09-20 08:41:26', '/img/produits/random.png');

-- --------------------------------------------------------

--
-- Structure de la table `retours`
--

DROP TABLE IF EXISTS `retours`;
CREATE TABLE IF NOT EXISTS `retours` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ticket` bigint(20) UNSIGNED NOT NULL,
  `id_livreur` bigint(20) UNSIGNED NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `statut_livraison` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'retour',
  `prix_vente` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `retours`
--

INSERT INTO `retours` (`id`, `id_ticket`, `id_livreur`, `id_client`, `statut_livraison`, `prix_vente`, `created_at`, `updated_at`) VALUES
(1, 55, 1, 1, 'retour', 100.00, '2022-07-29 10:58:11', '2022-07-29 10:58:11'),
(2, 4, 1, 1, 'retour', 100.00, '2022-07-29 11:03:22', '2022-07-29 11:03:22'),
(12, 2, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(4, 76, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(5, 75, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(6, 45, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(7, 119, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(8, 118, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(9, 117, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(10, 116, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(11, 115, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(13, 5, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(14, 1, 1, 1, 'retour', 100.00, '2022-07-29 11:06:06', '2022-07-29 11:06:06'),
(15, 170, 1, 1, 'retour', 100.00, '2022-09-06 19:13:26', '2022-09-06 19:13:26'),
(16, 171, 1, 1, 'retour', 100.00, '2022-09-06 19:13:53', '2022-09-06 19:13:53'),
(17, 175, 2, 1, 'retour', 100.00, '2022-09-08 17:33:06', '2022-09-08 17:33:06'),
(18, 33, 2, 1, 'retour', 100.00, '2022-09-14 13:49:39', '2022-09-14 13:49:39'),
(19, 184, 2, 1, 'retour', 100.00, '2022-09-14 13:49:51', '2022-09-14 13:49:51');

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

DROP TABLE IF EXISTS `sorties`;
CREATE TABLE IF NOT EXISTS `sorties` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ticket` bigint(20) UNSIGNED NOT NULL,
  `id_livreur` bigint(20) UNSIGNED NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `statut_livraison` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vers_client',
  `prix_vente` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sorties`
--

INSERT INTO `sorties` (`id`, `id_ticket`, `id_livreur`, `id_client`, `statut_livraison`, `prix_vente`, `created_at`, `updated_at`) VALUES
(113, 5, 2, 1, 'vers_client', 100.00, '2022-09-15 11:57:20', '2022-09-15 11:57:20'),
(114, 2, 2, 1, 'vers_client', 100.00, '2022-09-15 11:57:33', '2022-09-15 11:57:33'),
(128, 55, 1, 1, 'vers_client', 100.00, '2022-09-22 13:44:23', '2022-09-22 13:44:23'),
(5, 91, 1, 1, 'vers_client', 100.00, '2022-07-29 10:52:20', '2022-07-29 10:52:20'),
(12, 87, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(13, 86, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(14, 85, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(15, 84, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(16, 83, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(17, 82, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(18, 81, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(19, 80, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(20, 79, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(72, 78, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:26', '2022-09-06 19:15:26'),
(22, 77, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(101, 169, 1, 1, 'vers_client', 100.00, '2022-09-14 13:11:02', '2022-09-14 13:11:02'),
(65, 3, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:04', '2022-09-06 19:15:04'),
(25, 74, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(26, 73, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(27, 72, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(28, 71, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(29, 70, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(30, 69, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(31, 68, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(58, 42, 1, 1, 'vers_client', 100.00, '2022-09-01 09:48:55', '2022-09-01 09:48:55'),
(56, 153, 1, 1, 'vers_client', 100.00, '2022-09-01 09:46:36', '2022-09-01 09:46:36'),
(54, 155, 1, 1, 'vers_client', 100.00, '2022-09-01 09:46:14', '2022-09-01 09:46:14'),
(112, 4, 2, 1, 'vers_client', 100.00, '2022-09-15 11:57:19', '2022-09-15 11:57:19'),
(37, 114, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(38, 113, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(39, 112, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(108, 111, 1, 1, 'vers_client', 100.00, '2022-09-14 13:21:44', '2022-09-14 13:21:44'),
(41, 110, 1, 1, 'vers_client', 100.00, '2022-07-29 11:05:38', '2022-07-29 11:05:38'),
(116, 456, 2, 1, 'vers_client', 100.00, '2022-09-20 09:08:27', '2022-09-20 09:08:27'),
(66, 45, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:07', '2022-09-06 19:15:07'),
(70, 43, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:21', '2022-09-06 19:15:21'),
(68, 21, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:14', '2022-09-06 19:15:14'),
(129, 66, 1, 1, 'vers_client', 100.00, '2022-09-22 13:44:25', '2022-09-22 13:44:25'),
(74, 44, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:39', '2022-09-06 19:15:39'),
(76, 99, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:46', '2022-09-06 19:15:46'),
(77, 49, 1, 1, 'vers_client', 100.00, '2022-09-06 19:15:51', '2022-09-06 19:15:51'),
(89, 100, 2, 1, 'vers_client', 100.00, '2022-09-14 12:50:18', '2022-09-14 12:50:18'),
(104, 170, 1, 1, 'vers_client', 100.00, '2022-09-14 13:12:42', '2022-09-14 13:12:42'),
(80, 123, 1, 1, 'vers_client', 100.00, '2022-09-06 19:16:24', '2022-09-06 19:16:24'),
(81, 143, 1, 1, 'vers_client', 100.00, '2022-09-06 19:16:31', '2022-09-06 19:16:31'),
(105, 174, 1, 1, 'vers_client', 100.00, '2022-09-14 13:13:38', '2022-09-14 13:13:38'),
(117, 1, 2, 1, 'vers_client', 100.00, '2022-09-20 09:49:50', '2022-09-20 09:49:50'),
(86, 56, 2, 1, 'vers_client', 100.00, '2022-09-14 12:50:02', '2022-09-14 12:50:02'),
(115, 33, 2, 1, 'vers_client', 100.00, '2022-09-15 11:57:35', '2022-09-15 11:57:35'),
(91, 185, 2, 1, 'vers_client', 100.00, '2022-09-14 12:50:52', '2022-09-14 12:50:52'),
(92, 177, 2, 1, 'vers_client', 100.00, '2022-09-14 12:50:56', '2022-09-14 12:50:56'),
(93, 22, 2, 1, 'vers_client', 100.00, '2022-09-14 12:50:59', '2022-09-14 12:50:59'),
(95, 186, 2, 1, 'vers_client', 100.00, '2022-09-14 13:07:15', '2022-09-14 13:07:15'),
(96, 187, 2, 1, 'vers_client', 100.00, '2022-09-14 13:07:26', '2022-09-14 13:07:26'),
(98, 183, 2, 1, 'vers_client', 100.00, '2022-09-14 13:07:54', '2022-09-14 13:07:54'),
(99, 179, 1, 1, 'vers_client', 100.00, '2022-09-14 13:09:53', '2022-09-14 13:09:53'),
(100, 178, 1, 1, 'vers_client', 100.00, '2022-09-14 13:10:05', '2022-09-14 13:10:05'),
(102, 160, 1, 1, 'vers_client', 100.00, '2022-09-14 13:11:36', '2022-09-14 13:11:36'),
(103, 176, 1, 1, 'vers_client', 100.00, '2022-09-14 13:11:52', '2022-09-14 13:11:52'),
(106, 173, 1, 1, 'vers_client', 100.00, '2022-09-14 13:17:48', '2022-09-14 13:17:48'),
(107, 172, 1, 1, 'vers_client', 100.00, '2022-09-14 13:18:23', '2022-09-14 13:18:23'),
(109, 11, 1, 1, 'vers_client', 100.00, '2022-09-14 13:22:03', '2022-09-14 13:22:03'),
(110, 150, 1, 1, 'vers_client', 100.00, '2022-09-14 13:29:22', '2022-09-14 13:29:22'),
(118, 458, 2, 1, 'vers_client', 100.00, '2022-09-22 11:14:40', '2022-09-22 11:14:40'),
(119, 457, 2, 1, 'vers_client', 100.00, '2022-09-22 11:15:06', '2022-09-22 11:15:06'),
(120, 461, 2, 1, 'vers_client', 100.00, '2022-09-22 11:15:27', '2022-09-22 11:15:27'),
(121, 462, 2, 1, 'vers_client', 100.00, '2022-09-22 11:16:19', '2022-09-22 11:16:19'),
(122, 463, 2, 1, 'vers_client', 100.00, '2022-09-22 11:19:06', '2022-09-22 11:19:06'),
(123, 460, 2, 1, 'vers_client', 100.00, '2022-09-22 11:23:22', '2022-09-22 11:23:22'),
(124, 465, 2, 1, 'vers_client', 100.00, '2022-09-22 11:23:29', '2022-09-22 11:23:29'),
(125, 459, 1, 1, 'vers_client', 100.00, '2022-09-22 13:44:11', '2022-09-22 13:44:11'),
(126, 363, 1, 1, 'vers_client', 100.00, '2022-09-22 13:44:17', '2022-09-22 13:44:17'),
(127, 23, 1, 1, 'vers_client', 100.00, '2022-09-22 13:44:20', '2022-09-22 13:44:20'),
(130, 442, 1, 1, 'vers_client', 100.00, '2022-09-22 13:44:31', '2022-09-22 13:44:31');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_produit` bigint(20) UNSIGNED NOT NULL,
  `num_ticket_produit` bigint(20) UNSIGNED NOT NULL,
  `satut` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `codebar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `impression` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Agent',
  `maj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Agent',
  PRIMARY KEY (`id`),
  KEY `codebar` (`codebar`),
  KEY `created_at` (`created_at`),
  KEY `updated_at` (`updated_at`)
) ENGINE=MyISAM AUTO_INCREMENT=512 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `id_produit`, `num_ticket_produit`, `satut`, `created_at`, `updated_at`, `codebar`, `impression`, `maj`) VALUES
(1, 9, 1, 'sortie', '2022-09-17 15:35:54', '2022-09-20 09:49:50', 'id1', 'TEST', 'TEST'),
(2, 8, 2, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id2', 'TEST', 'Pas encore'),
(3, 8, 3, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id3', 'TEST', 'Pas encore'),
(4, 8, 4, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id4', 'TEST', 'Pas encore'),
(5, 10, 5, 'vers_depot', '2022-09-17 15:35:54', '2022-09-26 10:37:59', 'id5', 'TEST', 'Lotfi'),
(6, 10, 6, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id6', 'TEST', 'Pas encore'),
(7, 8, 7, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id7', 'TEST', 'Pas encore'),
(8, 8, 8, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id8', 'TEST', 'Pas encore'),
(9, 10, 9, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id9', 'TEST', 'Pas encore'),
(10, 10, 10, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id10', 'TEST', 'Pas encore'),
(11, 10, 11, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id11', 'TEST', 'Pas encore'),
(12, 10, 12, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id12', 'TEST', 'Pas encore'),
(13, 8, 13, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id13', 'TEST', 'Pas encore'),
(14, 8, 14, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id14', 'TEST', 'Pas encore'),
(15, 9, 15, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id15', 'TEST', 'Pas encore'),
(16, 9, 16, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id16', 'TEST', 'Pas encore'),
(17, 9, 17, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id17', 'TEST', 'Pas encore'),
(18, 9, 18, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id18', 'TEST', 'Pas encore'),
(19, 9, 19, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id19', 'TEST', 'Pas encore'),
(20, 9, 20, '0', '2022-09-17 15:35:54', '2022-09-17 15:35:54', 'id20', 'TEST', 'Pas encore'),
(21, 9, 1, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id21', 'TEST', 'Pas encore'),
(22, 9, 2, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id22', 'TEST', 'Pas encore'),
(23, 10, 3, 'sortie', '2022-09-17 15:36:05', '2022-09-22 13:44:20', 'id23', 'TEST', 'TEST'),
(24, 8, 4, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id24', 'TEST', 'Pas encore'),
(25, 10, 5, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id25', 'TEST', 'Pas encore'),
(26, 9, 6, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id26', 'TEST', 'Pas encore'),
(27, 8, 7, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id27', 'TEST', 'Pas encore'),
(28, 8, 8, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id28', 'TEST', 'Pas encore'),
(29, 10, 9, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id29', 'TEST', 'Pas encore'),
(30, 9, 10, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id30', 'TEST', 'Pas encore'),
(31, 9, 11, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id31', 'TEST', 'Pas encore'),
(32, 9, 12, 'au_depot', '2022-09-17 15:36:05', '2022-09-28 13:25:54', 'id32', 'TEST', 'omar'),
(33, 10, 13, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id33', 'TEST', 'Pas encore'),
(34, 9, 14, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id34', 'TEST', 'Pas encore'),
(35, 8, 15, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id35', 'TEST', 'Pas encore'),
(36, 10, 16, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id36', 'TEST', 'Pas encore'),
(37, 8, 17, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id37', 'TEST', 'Pas encore'),
(38, 8, 18, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id38', 'TEST', 'Pas encore'),
(39, 9, 19, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id39', 'TEST', 'Pas encore'),
(40, 8, 20, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id40', 'TEST', 'Pas encore'),
(41, 10, 21, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id41', 'TEST', 'Pas encore'),
(42, 10, 22, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id42', 'TEST', 'Pas encore'),
(43, 9, 23, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id43', 'TEST', 'Pas encore'),
(44, 9, 24, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id44', 'TEST', 'Pas encore'),
(45, 9, 25, '0', '2022-09-17 15:36:05', '2022-09-17 15:36:05', 'id45', 'TEST', 'Pas encore'),
(46, 10, 1, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id46', 'TEST', 'Pas encore'),
(47, 9, 2, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id47', 'TEST', 'Pas encore'),
(48, 9, 3, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id48', 'TEST', 'Pas encore'),
(49, 8, 4, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id49', 'TEST', 'Pas encore'),
(50, 9, 5, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id50', 'TEST', 'Pas encore'),
(51, 10, 6, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id51', 'TEST', 'Pas encore'),
(52, 8, 7, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id52', 'TEST', 'Pas encore'),
(53, 8, 8, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id53', 'TEST', 'Pas encore'),
(54, 8, 9, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id54', 'TEST', 'Pas encore'),
(55, 9, 10, 'au_depot', '2022-09-17 15:36:18', '2022-09-28 13:08:11', 'id55', 'TEST', 'seif'),
(56, 8, 11, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id56', 'TEST', 'Pas encore'),
(57, 8, 12, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id57', 'TEST', 'Pas encore'),
(58, 9, 13, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id58', 'TEST', 'Pas encore'),
(59, 10, 14, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id59', 'TEST', 'Pas encore'),
(60, 10, 15, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id60', 'TEST', 'Pas encore'),
(61, 10, 16, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id61', 'TEST', 'Pas encore'),
(62, 8, 17, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id62', 'TEST', 'Pas encore'),
(63, 10, 18, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id63', 'TEST', 'Pas encore'),
(64, 10, 19, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id64', 'TEST', 'Pas encore'),
(65, 9, 20, 'au_depot', '2022-09-17 15:36:18', '2022-09-28 13:08:18', 'id65', 'TEST', 'seif'),
(66, 9, 21, 'sortie', '2022-09-17 15:36:18', '2022-09-22 13:44:25', 'id66', 'TEST', 'TEST'),
(67, 9, 22, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id67', 'TEST', 'Pas encore'),
(68, 9, 23, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id68', 'TEST', 'Pas encore'),
(69, 10, 24, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id69', 'TEST', 'Pas encore'),
(70, 8, 25, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id70', 'TEST', 'Pas encore'),
(71, 9, 26, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id71', 'TEST', 'Pas encore'),
(72, 9, 27, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id72', 'TEST', 'Pas encore'),
(73, 8, 28, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id73', 'TEST', 'Pas encore'),
(74, 8, 29, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id74', 'TEST', 'Pas encore'),
(75, 9, 30, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id75', 'TEST', 'Pas encore'),
(76, 10, 31, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id76', 'TEST', 'Pas encore'),
(77, 10, 32, 'au_depot', '2022-09-17 15:36:18', '2022-09-28 13:25:58', 'id77', 'TEST', 'omar'),
(78, 8, 33, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id78', 'TEST', 'Pas encore'),
(79, 10, 34, 'au_depot', '2022-09-17 15:36:18', '2022-09-28 13:26:01', 'id79', 'TEST', 'omar'),
(80, 8, 35, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id80', 'TEST', 'Pas encore'),
(81, 9, 36, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id81', 'TEST', 'Pas encore'),
(82, 8, 37, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id82', 'TEST', 'Pas encore'),
(83, 10, 38, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id83', 'TEST', 'Pas encore'),
(84, 9, 39, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id84', 'TEST', 'Pas encore'),
(85, 9, 40, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id85', 'TEST', 'Pas encore'),
(86, 10, 41, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id86', 'TEST', 'Pas encore'),
(87, 9, 42, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id87', 'TEST', 'Pas encore'),
(88, 10, 43, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id88', 'TEST', 'Pas encore'),
(89, 9, 44, 'au_depot', '2022-09-17 15:36:18', '2022-09-28 13:33:38', 'id89', 'TEST', 'seif'),
(90, 8, 45, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id90', 'TEST', 'Pas encore'),
(91, 10, 46, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id91', 'TEST', 'Pas encore'),
(92, 8, 47, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id92', 'TEST', 'Pas encore'),
(93, 9, 48, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id93', 'TEST', 'Pas encore'),
(94, 8, 49, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id94', 'TEST', 'Pas encore'),
(95, 8, 50, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id95', 'TEST', 'Pas encore'),
(96, 9, 51, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id96', 'TEST', 'Pas encore'),
(97, 10, 52, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id97', 'TEST', 'Pas encore'),
(98, 9, 53, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id98', 'TEST', 'Pas encore'),
(99, 9, 54, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id99', 'TEST', 'Pas encore'),
(100, 8, 55, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id100', 'TEST', 'Pas encore'),
(101, 10, 56, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id101', 'TEST', 'Pas encore'),
(102, 8, 57, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id102', 'TEST', 'Pas encore'),
(103, 10, 58, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id103', 'TEST', 'Pas encore'),
(104, 8, 59, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id104', 'TEST', 'Pas encore'),
(105, 10, 60, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id105', 'TEST', 'Pas encore'),
(106, 10, 61, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id106', 'TEST', 'Pas encore'),
(107, 9, 62, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id107', 'TEST', 'Pas encore'),
(108, 8, 63, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id108', 'TEST', 'Pas encore'),
(109, 10, 64, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id109', 'TEST', 'Pas encore'),
(110, 8, 65, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id110', 'TEST', 'Pas encore'),
(111, 8, 66, '0', '2022-09-17 15:36:18', '2022-09-17 15:36:18', 'id111', 'TEST', 'Pas encore'),
(112, 8, 67, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id112', 'TEST', 'Pas encore'),
(113, 10, 68, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id113', 'TEST', 'Pas encore'),
(114, 8, 69, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id114', 'TEST', 'Pas encore'),
(115, 8, 70, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id115', 'TEST', 'Pas encore'),
(116, 9, 71, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id116', 'TEST', 'Pas encore'),
(117, 8, 72, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id117', 'TEST', 'Pas encore'),
(118, 8, 73, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id118', 'TEST', 'Pas encore'),
(119, 9, 74, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id119', 'TEST', 'Pas encore'),
(120, 9, 75, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id120', 'TEST', 'Pas encore'),
(121, 8, 76, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id121', 'TEST', 'Pas encore'),
(122, 10, 77, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id122', 'TEST', 'Pas encore'),
(123, 8, 78, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id123', 'TEST', 'Pas encore'),
(124, 9, 79, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id124', 'TEST', 'Pas encore'),
(125, 9, 80, '0', '2022-09-17 15:36:19', '2022-09-17 15:36:19', 'id125', 'TEST', 'Pas encore'),
(126, 9, 21, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id126', 'TEST', 'Pas encore'),
(127, 10, 22, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id127', 'TEST', 'Pas encore'),
(128, 9, 23, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id128', 'TEST', 'Pas encore'),
(129, 8, 24, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id129', 'TEST', 'Pas encore'),
(130, 10, 25, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id130', 'TEST', 'Pas encore'),
(131, 10, 26, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id131', 'TEST', 'Pas encore'),
(132, 8, 27, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id132', 'TEST', 'Pas encore'),
(133, 8, 28, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id133', 'TEST', 'Pas encore'),
(134, 8, 29, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id134', 'TEST', 'Pas encore'),
(135, 9, 30, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id135', 'TEST', 'Pas encore'),
(136, 10, 31, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id136', 'TEST', 'Pas encore'),
(137, 8, 32, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id137', 'TEST', 'Pas encore'),
(138, 10, 33, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id138', 'TEST', 'Pas encore'),
(139, 9, 34, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id139', 'TEST', 'Pas encore'),
(140, 10, 35, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id140', 'TEST', 'Pas encore'),
(141, 10, 36, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id141', 'TEST', 'Pas encore'),
(142, 8, 37, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id142', 'TEST', 'Pas encore'),
(143, 9, 38, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id143', 'TEST', 'Pas encore'),
(144, 10, 39, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id144', 'TEST', 'Pas encore'),
(145, 8, 40, '0', '2022-09-18 15:33:37', '2022-09-18 15:33:37', 'id145', 'TEST', 'Pas encore'),
(146, 8, 26, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id146', 'TEST', 'Pas encore'),
(147, 10, 27, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id147', 'TEST', 'Pas encore'),
(148, 10, 28, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id148', 'TEST', 'Pas encore'),
(149, 9, 29, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id149', 'TEST', 'Pas encore'),
(150, 8, 30, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id150', 'TEST', 'Pas encore'),
(151, 8, 31, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id151', 'TEST', 'Pas encore'),
(152, 10, 32, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id152', 'TEST', 'Pas encore'),
(153, 10, 33, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id153', 'TEST', 'Pas encore'),
(154, 8, 34, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id154', 'TEST', 'Pas encore'),
(155, 8, 35, '0', '2022-09-18 15:33:49', '2022-09-18 15:33:49', 'id155', 'TEST', 'Pas encore'),
(156, 9, 81, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id156', 'TEST', 'Pas encore'),
(157, 8, 82, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id157', 'TEST', 'Pas encore'),
(158, 9, 83, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id158', 'TEST', 'Pas encore'),
(159, 9, 84, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id159', 'TEST', 'Pas encore'),
(160, 10, 85, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id160', 'TEST', 'Pas encore'),
(161, 10, 86, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id161', 'TEST', 'Pas encore'),
(162, 10, 87, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id162', 'TEST', 'Pas encore'),
(163, 9, 88, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id163', 'TEST', 'Pas encore'),
(164, 9, 89, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id164', 'TEST', 'Pas encore'),
(165, 10, 90, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id165', 'TEST', 'Pas encore'),
(166, 10, 91, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id166', 'TEST', 'Pas encore'),
(167, 9, 92, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id167', 'TEST', 'Pas encore'),
(168, 8, 93, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id168', 'TEST', 'Pas encore'),
(169, 9, 94, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id169', 'TEST', 'Pas encore'),
(170, 9, 95, '0', '2022-09-18 15:33:58', '2022-09-18 15:33:58', 'id170', 'TEST', 'Pas encore'),
(171, 8, 41, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id171', 'TEST', 'Pas encore'),
(172, 8, 42, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id172', 'TEST', 'Pas encore'),
(173, 10, 43, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id173', 'TEST', 'Pas encore'),
(174, 10, 44, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id174', 'TEST', 'Pas encore'),
(175, 8, 45, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id175', 'TEST', 'Pas encore'),
(176, 10, 46, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id176', 'TEST', 'Pas encore'),
(177, 9, 47, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id177', 'TEST', 'Pas encore'),
(178, 9, 48, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id178', 'TEST', 'Pas encore'),
(179, 8, 49, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id179', 'TEST', 'Pas encore'),
(180, 10, 50, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id180', 'TEST', 'Pas encore'),
(181, 10, 51, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id181', 'TEST', 'Pas encore'),
(182, 8, 52, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id182', 'TEST', 'Pas encore'),
(183, 9, 53, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id183', 'TEST', 'Pas encore'),
(184, 8, 54, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id184', 'TEST', 'Pas encore'),
(185, 10, 55, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id185', 'TEST', 'Pas encore'),
(186, 8, 56, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id186', 'TEST', 'Pas encore'),
(187, 10, 57, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id187', 'TEST', 'Pas encore'),
(188, 9, 58, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id188', 'TEST', 'Pas encore'),
(189, 9, 59, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id189', 'TEST', 'Pas encore'),
(190, 9, 60, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id190', 'TEST', 'Pas encore'),
(191, 8, 61, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id191', 'TEST', 'Pas encore'),
(192, 8, 62, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id192', 'TEST', 'Pas encore'),
(193, 9, 63, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id193', 'TEST', 'Pas encore'),
(194, 10, 64, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id194', 'TEST', 'Pas encore'),
(195, 8, 65, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id195', 'TEST', 'Pas encore'),
(196, 9, 66, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id196', 'TEST', 'Pas encore'),
(197, 10, 67, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id197', 'TEST', 'Pas encore'),
(198, 9, 68, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id198', 'TEST', 'Pas encore'),
(199, 8, 69, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id199', 'TEST', 'Pas encore'),
(200, 10, 70, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id200', 'TEST', 'Pas encore'),
(201, 10, 71, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id201', 'TEST', 'Pas encore'),
(202, 10, 72, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id202', 'TEST', 'Pas encore'),
(203, 8, 73, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id203', 'TEST', 'Pas encore'),
(204, 9, 74, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id204', 'TEST', 'Pas encore'),
(205, 10, 75, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id205', 'TEST', 'Pas encore'),
(206, 9, 76, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id206', 'TEST', 'Pas encore'),
(207, 8, 77, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id207', 'TEST', 'Pas encore'),
(208, 9, 78, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id208', 'TEST', 'Pas encore'),
(209, 10, 79, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id209', 'TEST', 'Pas encore'),
(210, 9, 80, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id210', 'TEST', 'Pas encore'),
(211, 10, 81, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id211', 'TEST', 'Pas encore'),
(212, 8, 82, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id212', 'TEST', 'Pas encore'),
(213, 8, 83, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id213', 'TEST', 'Pas encore'),
(214, 8, 84, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id214', 'TEST', 'Pas encore'),
(215, 10, 85, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id215', 'TEST', 'Pas encore'),
(216, 8, 86, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id216', 'TEST', 'Pas encore'),
(217, 10, 87, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id217', 'TEST', 'Pas encore'),
(218, 9, 88, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id218', 'TEST', 'Pas encore'),
(219, 8, 89, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id219', 'TEST', 'Pas encore'),
(220, 10, 90, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id220', 'TEST', 'Pas encore'),
(221, 8, 91, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id221', 'TEST', 'Pas encore'),
(222, 9, 92, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id222', 'TEST', 'Pas encore'),
(223, 8, 93, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id223', 'TEST', 'Pas encore'),
(224, 8, 94, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id224', 'TEST', 'Pas encore'),
(225, 10, 95, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id225', 'TEST', 'Pas encore'),
(226, 8, 96, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id226', 'TEST', 'Pas encore'),
(227, 8, 97, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id227', 'TEST', 'Pas encore'),
(228, 9, 98, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id228', 'TEST', 'Pas encore'),
(229, 9, 99, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id229', 'TEST', 'Pas encore'),
(230, 10, 100, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id230', 'TEST', 'Pas encore'),
(231, 8, 101, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id231', 'TEST', 'Pas encore'),
(232, 9, 102, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id232', 'TEST', 'Pas encore'),
(233, 10, 103, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id233', 'TEST', 'Pas encore'),
(234, 9, 104, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id234', 'TEST', 'Pas encore'),
(235, 9, 105, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id235', 'TEST', 'Pas encore'),
(236, 8, 106, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id236', 'TEST', 'Pas encore'),
(237, 9, 107, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id237', 'TEST', 'Pas encore'),
(238, 10, 108, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id238', 'TEST', 'Pas encore'),
(239, 10, 109, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id239', 'TEST', 'Pas encore'),
(240, 8, 110, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id240', 'TEST', 'Pas encore'),
(241, 9, 111, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id241', 'TEST', 'Pas encore'),
(242, 10, 112, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id242', 'TEST', 'Pas encore'),
(243, 10, 113, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id243', 'TEST', 'Pas encore'),
(244, 9, 114, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id244', 'TEST', 'Pas encore'),
(245, 10, 115, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id245', 'TEST', 'Pas encore'),
(246, 10, 116, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id246', 'TEST', 'Pas encore'),
(247, 8, 117, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id247', 'TEST', 'Pas encore'),
(248, 8, 118, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id248', 'TEST', 'Pas encore'),
(249, 9, 119, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id249', 'TEST', 'Pas encore'),
(250, 8, 120, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id250', 'TEST', 'Pas encore'),
(251, 8, 121, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id251', 'TEST', 'Pas encore'),
(252, 9, 122, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id252', 'TEST', 'Pas encore'),
(253, 8, 123, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id253', 'TEST', 'Pas encore'),
(254, 8, 124, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id254', 'TEST', 'Pas encore'),
(255, 8, 125, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id255', 'TEST', 'Pas encore'),
(256, 10, 126, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id256', 'TEST', 'Pas encore'),
(257, 9, 127, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id257', 'TEST', 'Pas encore'),
(258, 10, 128, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id258', 'TEST', 'Pas encore'),
(259, 10, 129, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id259', 'TEST', 'Pas encore'),
(260, 10, 130, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id260', 'TEST', 'Pas encore'),
(261, 8, 131, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id261', 'TEST', 'Pas encore'),
(262, 10, 132, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id262', 'TEST', 'Pas encore'),
(263, 9, 133, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id263', 'TEST', 'Pas encore'),
(264, 8, 134, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id264', 'TEST', 'Pas encore'),
(265, 9, 135, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id265', 'TEST', 'Pas encore'),
(266, 10, 136, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id266', 'TEST', 'Pas encore'),
(267, 8, 137, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id267', 'TEST', 'Pas encore'),
(268, 10, 138, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id268', 'TEST', 'Pas encore'),
(269, 9, 139, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id269', 'TEST', 'Pas encore'),
(270, 9, 140, '0', '2022-09-20 07:46:19', '2022-09-20 07:46:19', 'id270', 'TEST', 'Pas encore'),
(271, 9, 36, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id271', 'TEST', 'Pas encore'),
(272, 10, 37, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id272', 'TEST', 'Pas encore'),
(273, 10, 38, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id273', 'TEST', 'Pas encore'),
(274, 8, 39, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id274', 'TEST', 'Pas encore'),
(275, 8, 40, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id275', 'TEST', 'Pas encore'),
(276, 10, 41, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id276', 'TEST', 'Pas encore'),
(277, 9, 42, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id277', 'TEST', 'Pas encore'),
(278, 8, 43, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id278', 'TEST', 'Pas encore'),
(279, 8, 44, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id279', 'TEST', 'Pas encore'),
(280, 9, 45, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id280', 'TEST', 'Pas encore'),
(281, 8, 46, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id281', 'TEST', 'Pas encore'),
(282, 9, 47, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id282', 'TEST', 'Pas encore'),
(283, 10, 48, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id283', 'TEST', 'Pas encore'),
(284, 9, 49, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id284', 'TEST', 'Pas encore'),
(285, 8, 50, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id285', 'TEST', 'Pas encore'),
(286, 9, 51, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id286', 'TEST', 'Pas encore'),
(287, 10, 52, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id287', 'TEST', 'Pas encore'),
(288, 10, 53, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id288', 'TEST', 'Pas encore'),
(289, 8, 54, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id289', 'TEST', 'Pas encore'),
(290, 8, 55, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id290', 'TEST', 'Pas encore'),
(291, 9, 56, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id291', 'TEST', 'Pas encore'),
(292, 9, 57, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id292', 'TEST', 'Pas encore'),
(293, 8, 58, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id293', 'TEST', 'Pas encore'),
(294, 9, 59, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id294', 'TEST', 'Pas encore'),
(295, 9, 60, '0', '2022-09-20 07:46:49', '2022-09-20 07:46:49', 'id295', 'TEST', 'Pas encore'),
(296, 8, 96, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id296', 'TEST', 'Pas encore'),
(297, 9, 97, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id297', 'TEST', 'Pas encore'),
(298, 9, 98, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id298', 'TEST', 'Pas encore'),
(299, 9, 99, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id299', 'TEST', 'Pas encore'),
(300, 10, 100, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id300', 'TEST', 'Pas encore'),
(301, 8, 101, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id301', 'TEST', 'Pas encore'),
(302, 9, 102, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id302', 'TEST', 'Pas encore'),
(303, 8, 103, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id303', 'TEST', 'Pas encore'),
(304, 9, 104, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id304', 'TEST', 'Pas encore'),
(305, 8, 105, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id305', 'TEST', 'Pas encore'),
(306, 9, 106, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id306', 'TEST', 'Pas encore'),
(307, 10, 107, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id307', 'TEST', 'Pas encore'),
(308, 10, 108, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id308', 'TEST', 'Pas encore'),
(309, 8, 109, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id309', 'TEST', 'Pas encore'),
(310, 10, 110, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id310', 'TEST', 'Pas encore'),
(311, 8, 111, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id311', 'TEST', 'Pas encore'),
(312, 9, 112, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id312', 'TEST', 'Pas encore'),
(313, 10, 113, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id313', 'TEST', 'Pas encore'),
(314, 9, 114, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id314', 'TEST', 'Pas encore'),
(315, 9, 115, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id315', 'TEST', 'Pas encore'),
(316, 8, 116, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id316', 'TEST', 'Pas encore'),
(317, 8, 117, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id317', 'TEST', 'Pas encore'),
(318, 10, 118, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id318', 'TEST', 'Pas encore'),
(319, 9, 119, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id319', 'TEST', 'Pas encore'),
(320, 8, 120, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id320', 'TEST', 'Pas encore'),
(321, 9, 121, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id321', 'TEST', 'Pas encore'),
(322, 9, 122, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id322', 'TEST', 'Pas encore'),
(323, 8, 123, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id323', 'TEST', 'Pas encore'),
(324, 8, 124, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id324', 'TEST', 'Pas encore'),
(325, 10, 125, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id325', 'TEST', 'Pas encore'),
(326, 9, 126, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id326', 'TEST', 'Pas encore'),
(327, 9, 127, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id327', 'TEST', 'Pas encore'),
(328, 10, 128, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id328', 'TEST', 'Pas encore'),
(329, 9, 129, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id329', 'TEST', 'Pas encore'),
(330, 10, 130, '0', '2022-09-20 07:47:12', '2022-09-20 07:47:12', 'id330', 'TEST', 'Pas encore'),
(331, 10, 61, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id331', 'TEST', 'Pas encore'),
(332, 8, 62, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id332', 'TEST', 'Pas encore'),
(333, 10, 63, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id333', 'TEST', 'Pas encore'),
(334, 8, 64, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id334', 'TEST', 'Pas encore'),
(335, 9, 65, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id335', 'TEST', 'Pas encore'),
(336, 9, 66, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id336', 'TEST', 'Pas encore'),
(337, 10, 67, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id337', 'TEST', 'Pas encore'),
(338, 8, 68, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id338', 'TEST', 'Pas encore'),
(339, 10, 69, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id339', 'TEST', 'Pas encore'),
(340, 8, 70, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id340', 'TEST', 'Pas encore'),
(341, 10, 71, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id341', 'TEST', 'Pas encore'),
(342, 10, 72, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id342', 'TEST', 'Pas encore'),
(343, 9, 73, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id343', 'TEST', 'Pas encore'),
(344, 9, 74, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id344', 'TEST', 'Pas encore'),
(345, 9, 75, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id345', 'TEST', 'Pas encore'),
(346, 8, 76, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id346', 'TEST', 'Pas encore'),
(347, 8, 77, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id347', 'TEST', 'Pas encore'),
(348, 9, 78, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id348', 'TEST', 'Pas encore'),
(349, 8, 79, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id349', 'TEST', 'Pas encore'),
(350, 9, 80, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id350', 'TEST', 'Pas encore'),
(351, 8, 81, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id351', 'TEST', 'Pas encore'),
(352, 9, 82, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id352', 'TEST', 'Pas encore'),
(353, 8, 83, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id353', 'TEST', 'Pas encore'),
(354, 8, 84, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id354', 'TEST', 'Pas encore'),
(355, 10, 85, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id355', 'TEST', 'Pas encore'),
(356, 8, 86, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id356', 'TEST', 'Pas encore'),
(357, 9, 87, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id357', 'TEST', 'Pas encore'),
(358, 8, 88, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id358', 'TEST', 'Pas encore'),
(359, 10, 89, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id359', 'TEST', 'Pas encore'),
(360, 9, 90, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id360', 'TEST', 'Pas encore'),
(361, 9, 91, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id361', 'TEST', 'Pas encore'),
(362, 10, 92, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id362', 'TEST', 'Pas encore'),
(363, 9, 93, 'sortie', '2022-09-20 08:03:53', '2022-09-22 13:44:17', 'id363', 'TEST', 'TEST'),
(364, 10, 94, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id364', 'TEST', 'Pas encore'),
(365, 9, 95, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id365', 'TEST', 'Pas encore'),
(366, 8, 96, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id366', 'TEST', 'Pas encore'),
(367, 10, 97, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id367', 'TEST', 'Pas encore'),
(368, 8, 98, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id368', 'TEST', 'Pas encore'),
(369, 10, 99, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id369', 'TEST', 'Pas encore'),
(370, 9, 100, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id370', 'TEST', 'Pas encore'),
(371, 8, 101, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id371', 'TEST', 'Pas encore'),
(372, 8, 102, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id372', 'TEST', 'Pas encore'),
(373, 8, 103, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id373', 'TEST', 'Pas encore'),
(374, 8, 104, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id374', 'TEST', 'Pas encore'),
(375, 10, 105, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id375', 'TEST', 'Pas encore'),
(376, 9, 106, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id376', 'TEST', 'Pas encore'),
(377, 8, 107, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id377', 'TEST', 'Pas encore'),
(378, 8, 108, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id378', 'TEST', 'Pas encore'),
(379, 8, 109, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id379', 'TEST', 'Pas encore'),
(380, 10, 110, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id380', 'TEST', 'Pas encore'),
(381, 8, 111, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id381', 'TEST', 'Pas encore'),
(382, 9, 112, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id382', 'TEST', 'Pas encore'),
(383, 8, 113, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id383', 'TEST', 'Pas encore'),
(384, 10, 114, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id384', 'TEST', 'Pas encore'),
(385, 10, 115, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id385', 'TEST', 'Pas encore'),
(386, 10, 116, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id386', 'TEST', 'Pas encore'),
(387, 10, 117, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id387', 'TEST', 'Pas encore'),
(388, 8, 118, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id388', 'TEST', 'Pas encore'),
(389, 10, 119, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id389', 'TEST', 'Pas encore'),
(390, 10, 120, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id390', 'TEST', 'Pas encore'),
(391, 10, 121, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id391', 'TEST', 'Pas encore'),
(392, 9, 122, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id392', 'TEST', 'Pas encore'),
(393, 10, 123, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id393', 'TEST', 'Pas encore'),
(394, 10, 124, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id394', 'TEST', 'Pas encore'),
(395, 8, 125, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id395', 'TEST', 'Pas encore'),
(396, 10, 126, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id396', 'TEST', 'Pas encore'),
(397, 9, 127, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id397', 'TEST', 'Pas encore'),
(398, 9, 128, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id398', 'TEST', 'Pas encore'),
(399, 10, 129, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id399', 'TEST', 'Pas encore'),
(400, 10, 130, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id400', 'TEST', 'Pas encore'),
(401, 8, 131, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id401', 'TEST', 'Pas encore'),
(402, 9, 132, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id402', 'TEST', 'Pas encore'),
(403, 8, 133, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id403', 'TEST', 'Pas encore'),
(404, 8, 134, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id404', 'TEST', 'Pas encore'),
(405, 8, 135, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id405', 'TEST', 'Pas encore'),
(406, 9, 136, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id406', 'TEST', 'Pas encore'),
(407, 10, 137, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id407', 'TEST', 'Pas encore'),
(408, 8, 138, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id408', 'TEST', 'Pas encore'),
(409, 9, 139, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id409', 'TEST', 'Pas encore'),
(410, 9, 140, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id410', 'TEST', 'Pas encore'),
(411, 9, 141, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id411', 'TEST', 'Pas encore'),
(412, 10, 142, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id412', 'TEST', 'Pas encore'),
(413, 8, 143, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id413', 'TEST', 'Pas encore'),
(414, 8, 144, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id414', 'TEST', 'Pas encore'),
(415, 8, 145, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id415', 'TEST', 'Pas encore'),
(416, 8, 146, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id416', 'TEST', 'Pas encore'),
(417, 8, 147, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id417', 'TEST', 'Pas encore'),
(418, 10, 148, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id418', 'TEST', 'Pas encore'),
(419, 9, 149, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id419', 'TEST', 'Pas encore'),
(420, 9, 150, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id420', 'TEST', 'Pas encore'),
(421, 10, 151, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id421', 'TEST', 'Pas encore'),
(422, 8, 152, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id422', 'TEST', 'Pas encore'),
(423, 10, 153, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id423', 'TEST', 'Pas encore'),
(424, 10, 154, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id424', 'TEST', 'Pas encore'),
(425, 9, 155, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id425', 'TEST', 'Pas encore'),
(426, 9, 156, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id426', 'TEST', 'Pas encore'),
(427, 8, 157, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id427', 'TEST', 'Pas encore'),
(428, 9, 158, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id428', 'TEST', 'Pas encore'),
(429, 10, 159, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id429', 'TEST', 'Pas encore'),
(430, 9, 160, '0', '2022-09-20 08:03:53', '2022-09-20 08:03:53', 'id430', 'TEST', 'Pas encore'),
(431, 9, 141, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id431', 'TEST', 'Pas encore'),
(432, 9, 142, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id432', 'TEST', 'Pas encore'),
(433, 9, 143, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id433', 'TEST', 'Pas encore'),
(434, 9, 144, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id434', 'TEST', 'Pas encore'),
(435, 10, 145, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id435', 'TEST', 'Pas encore'),
(436, 9, 146, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id436', 'TEST', 'Pas encore'),
(437, 9, 147, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id437', 'TEST', 'Pas encore'),
(438, 10, 148, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id438', 'TEST', 'Pas encore'),
(439, 10, 149, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id439', 'TEST', 'Pas encore'),
(440, 10, 150, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id440', 'TEST', 'Pas encore'),
(441, 9, 151, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id441', 'TEST', 'Pas encore'),
(442, 10, 152, 'sortie', '2022-09-20 08:04:12', '2022-09-22 13:44:31', 'id442', 'TEST', 'TEST'),
(443, 8, 153, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id443', 'TEST', 'Pas encore'),
(444, 9, 154, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id444', 'TEST', 'Pas encore'),
(445, 8, 155, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id445', 'TEST', 'Pas encore'),
(446, 8, 156, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id446', 'TEST', 'Pas encore'),
(447, 9, 157, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id447', 'TEST', 'Pas encore'),
(448, 8, 158, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id448', 'TEST', 'Pas encore'),
(449, 9, 159, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id449', 'TEST', 'Pas encore'),
(450, 8, 160, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id450', 'TEST', 'Pas encore'),
(451, 10, 161, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id451', 'TEST', 'Pas encore'),
(452, 8, 162, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id452', 'TEST', 'Pas encore'),
(453, 10, 163, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id453', 'TEST', 'Pas encore'),
(454, 9, 164, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id454', 'TEST', 'Pas encore'),
(455, 9, 165, '0', '2022-09-20 08:04:12', '2022-09-20 08:04:12', 'id455', 'TEST', 'Pas encore'),
(456, 10, 131, 'sortie', '2022-09-20 08:04:31', '2022-09-20 09:08:27', 'id456', 'TEST', 'TEST'),
(457, 9, 132, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:15:06', 'id457', 'TEST', 'TEST'),
(458, 9, 133, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:14:39', 'id458', 'TEST', 'TEST'),
(459, 8, 134, 'sortie', '2022-09-20 08:04:31', '2022-09-22 13:44:11', 'id459', 'TEST', 'TEST'),
(460, 8, 135, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:23:22', 'id460', 'TEST', 'TEST'),
(461, 9, 136, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:15:27', 'id461', 'TEST', 'TEST'),
(462, 10, 137, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:16:19', 'id462', 'TEST', 'TEST'),
(463, 9, 138, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:19:06', 'id463', 'TEST', 'TEST'),
(464, 10, 139, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id464', 'TEST', 'Pas encore'),
(465, 9, 140, 'sortie', '2022-09-20 08:04:31', '2022-09-22 11:23:29', 'id465', 'TEST', 'TEST'),
(466, 10, 141, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id466', 'TEST', 'Pas encore'),
(467, 10, 142, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id467', 'TEST', 'Pas encore'),
(468, 9, 143, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id468', 'TEST', 'Pas encore'),
(469, 9, 144, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id469', 'TEST', 'Pas encore'),
(470, 8, 145, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id470', 'TEST', 'Pas encore'),
(471, 10, 146, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id471', 'TEST', 'Pas encore'),
(472, 8, 147, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id472', 'TEST', 'Pas encore'),
(473, 10, 148, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id473', 'TEST', 'Pas encore'),
(474, 9, 149, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id474', 'TEST', 'Pas encore'),
(475, 9, 150, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id475', 'TEST', 'Pas encore'),
(476, 8, 151, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id476', 'TEST', 'Pas encore'),
(477, 8, 152, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id477', 'TEST', 'Pas encore'),
(478, 9, 153, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id478', 'TEST', 'Pas encore'),
(479, 9, 154, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id479', 'TEST', 'Pas encore'),
(480, 8, 155, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id480', 'TEST', 'Pas encore'),
(481, 9, 156, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id481', 'TEST', 'Pas encore'),
(482, 8, 157, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id482', 'TEST', 'Pas encore'),
(483, 10, 158, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id483', 'TEST', 'Pas encore'),
(484, 10, 159, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id484', 'TEST', 'Pas encore'),
(485, 9, 160, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id485', 'TEST', 'Pas encore'),
(486, 9, 161, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id486', 'TEST', 'Pas encore'),
(487, 9, 162, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id487', 'TEST', 'Pas encore'),
(488, 9, 163, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id488', 'TEST', 'Pas encore'),
(489, 8, 164, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id489', 'TEST', 'Pas encore'),
(490, 9, 165, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id490', 'TEST', 'Pas encore'),
(491, 10, 166, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id491', 'TEST', 'Pas encore'),
(492, 8, 167, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id492', 'TEST', 'Pas encore'),
(493, 10, 168, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id493', 'TEST', 'Pas encore'),
(494, 8, 169, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id494', 'TEST', 'Pas encore'),
(495, 10, 170, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id495', 'TEST', 'Pas encore'),
(496, 9, 171, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id496', 'TEST', 'Pas encore'),
(497, 9, 172, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id497', 'TEST', 'Pas encore'),
(498, 8, 173, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id498', 'TEST', 'Pas encore'),
(499, 8, 174, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id499', 'TEST', 'Pas encore'),
(500, 8, 175, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id500', 'TEST', 'Pas encore'),
(501, 9, 176, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id501', 'TEST', 'Pas encore'),
(502, 8, 177, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id502', 'TEST', 'Pas encore'),
(503, 9, 178, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id503', 'TEST', 'Pas encore'),
(504, 9, 179, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id504', 'TEST', 'Pas encore'),
(505, 9, 180, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id505', 'TEST', 'Pas encore'),
(506, 9, 181, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id506', 'TEST', 'Pas encore'),
(507, 10, 182, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id507', 'TEST', 'Pas encore'),
(508, 8, 183, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id508', 'TEST', 'Pas encore'),
(509, 8, 184, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id509', 'TEST', 'Pas encore'),
(510, 9, 185, '0', '2022-09-20 08:04:31', '2022-09-20 08:04:31', 'id510', 'TEST', 'Pas encore'),
(511, 8, 1, '0', '2022-09-20 07:09:09', '2022-09-20 07:09:09', 'id511', 'TEST', 'Pas encore');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilaya_id` int(10) UNSIGNED DEFAULT NULL,
  `commune_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identite` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'empty',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_wilaya_id_foreign` (`wilaya_id`),
  KEY `users_commune_id_foreign` (`commune_id`),
  KEY `id` (`id`,`wilaya_id`,`commune_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
