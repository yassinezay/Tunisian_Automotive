-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 11 déc. 2022 à 12:11
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `pw_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom_admin`, `email_admin`, `pw_admin`) VALUES
(1, 'yassine', 'zayaneyassine6@gmail.com', 'yassine'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `articlejardinage`
--

CREATE TABLE `articlejardinage` (
  `IdArticle` int(10) NOT NULL,
  `IdCategorie` int(10) NOT NULL,
  `NomArticle` varchar(150) NOT NULL,
  `ImageArticle` varchar(200) NOT NULL,
  `DescriptionArticle` varchar(200) DEFAULT NULL,
  `PrixArticle` float NOT NULL,
  `QuantiteArticle` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articlejardinage`
--

INSERT INTO `articlejardinage` (`IdArticle`, `IdCategorie`, `NomArticle`, `ImageArticle`, `DescriptionArticle`, `PrixArticle`, `QuantiteArticle`) VALUES
(11, 1, 'Kia picanto', 'c381b1b52b9895a0d6ef532ed1740f68.jpg', 'Rouge', 42000, 10),
(13, 2, 'Fiat panda', '49eb3b1d01fe2bafbaf8af8851d26a95.jpg', 'Blanc', 53000, 5),
(14, 1, 'BMW', 'bmw-m3-m4-5.jpg', 'Verte', 200000, 6),
(15, 6, 'TEST', 'OIP.jpg', 'Noirrr', 50000, 7);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `type`, `img`, `price`, `des`) VALUES
(1, 'Lames Pare Chocs Avants ', 'Standard', 'assets/images/product/lame.jpg', '360.00', 'Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sontLes detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont\r\n'),
(4, '2 Phares avants', 'Selon choix', 'assets/images/product/phares.jpg', '600', 'Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sontLes detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont\r\n'),
(5, 'Jantes ALU', 'Selon choix', 'assets/images/product/5.jpg', '1800', 'Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sontLes detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont\r\n'),
(6, '2 Phares Arrières', 'Selon choix', 'assets/images/product/phares2.jpg', '640.00', 'Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sontLes detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont Les detailles sont les detailles sont\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IdCategorie` int(10) NOT NULL,
  `NomCategorie` varchar(30) NOT NULL,
  `Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IdCategorie`, `NomCategorie`, `Description`) VALUES
(2, 'Categorie2', 'Manuelle'),
(6, 'VALIDATION', 'VAL2');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `paid` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date_creation`, `paid`, `id_user`) VALUES
(1, '2022-11-19 17:03:05', 1, 1),
(31, '2022-12-09 12:52:53', 1, 88),
(36, '2022-12-09 15:02:39', 1, 1),
(37, '2022-12-09 15:03:57', 1, 87),
(38, '2022-12-09 15:13:13', 1, 87),
(39, '2022-12-09 15:27:18', 1, 88),
(47, '2022-12-09 16:22:56', 1, 87),
(51, '2022-12-10 14:58:20', 1, 88),
(52, '2022-12-10 15:15:03', 1, 1),
(55, '2022-12-10 16:12:17', 1, 1),
(61, '2022-12-10 16:36:09', 0, 1),
(62, '2022-12-10 16:43:40', 1, 88),
(63, '2022-12-10 18:25:39', 1, 90),
(64, '2022-12-10 18:25:50', 0, 90),
(65, '2022-12-10 20:31:40', 0, 88),
(66, '2022-12-11 02:13:28', 1, 87),
(67, '2022-12-11 02:23:37', 0, 87),
(68, '2022-12-11 11:57:46', 1, 95),
(69, '2022-12-11 12:01:10', 0, 95);

-- --------------------------------------------------------

--
-- Structure de la table `commandevoiture`
--

CREATE TABLE `commandevoiture` (
  `id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `paid` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commandevoiture`
--

INSERT INTO `commandevoiture` (`id`, `date_creation`, `paid`, `id_user`) VALUES
(1, '2022-12-10 12:13:20', 1, 88),
(3, '2022-12-10 15:12:37', 1, 1),
(4, '2022-12-10 16:35:33', 1, 1),
(6, '2022-12-10 16:49:39', 1, 88),
(7, '2022-12-10 16:50:13', 1, 88),
(8, '2022-12-10 18:24:53', 1, 90),
(9, '2022-12-10 18:25:19', 0, 90),
(10, '2022-12-10 20:03:52', 0, 1),
(11, '2022-12-10 20:30:47', 0, 88),
(12, '2022-12-10 22:50:33', 0, 87),
(13, '2022-12-11 10:14:32', 0, 94),
(14, '2022-12-11 11:57:29', 1, 95),
(15, '2022-12-11 11:57:37', 0, 95);

-- --------------------------------------------------------

--
-- Structure de la table `diagnostiques`
--

CREATE TABLE `diagnostiques` (
  `id` int(11) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `kilm` varchar(255) NOT NULL,
  `timee` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `addit` text NOT NULL,
  `seen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `diagnostiques`
--

INSERT INTO `diagnostiques` (`id`, `modele`, `kilm`, `timee`, `tel`, `mail`, `addit`, `seen`) VALUES
(17, 'Mercedes', '123442', '2022-11-27T02:21', '22324543', 'client@gmail.com', 'rien', 0),
(19, 'symbole', '21313', '2022-11-27T07:28', '3456789098765', 'abderraouf.mahmoudi@esprit.tn', 'sdfghjklkjhgfd', 1),
(20, 'VOLVO', '34567', '2022-11-27T14:51', '45678', 'amirothman@gmail.com', 'hjkjllkjn', 1),
(26, 'TEST', '3333', '2022-11-28T09:25', '222222', 'joseplkkkkhs@gmail.comaaa', 'aaaa', 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `id_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `date_creation`, `id_panier`) VALUES
(1, '2022-12-01 15:33:13', 1),
(2, '2022-12-01 19:47:06', 2),
(3, '2022-12-01 19:47:14', 3),
(4, '2022-12-01 19:47:20', 26),
(6, '2022-12-09 12:35:02', 30),
(7, '2022-12-09 15:32:45', 36),
(8, '2022-12-09 16:04:11', 37),
(9, '2022-12-09 16:04:16', 38),
(10, '2022-12-09 16:25:00', 47),
(11, '2022-12-09 16:32:14', 31),
(16, '2022-12-10 16:09:35', 52),
(17, '2022-12-10 16:10:56', 53),
(18, '2022-12-10 16:12:29', 55),
(19, '2022-12-10 16:14:38', 56),
(20, '2022-12-10 16:21:48', 57),
(21, '2022-12-10 16:31:23', 59),
(22, '2022-12-10 16:36:05', 60),
(23, '2022-12-10 16:43:39', 51),
(24, '2022-12-10 18:25:47', 63),
(25, '2022-12-10 20:31:38', 62),
(26, '2022-12-10 20:34:21', 39),
(27, '2022-12-11 02:23:28', 66),
(28, '2022-12-11 12:01:07', 68);

-- --------------------------------------------------------

--
-- Structure de la table `facturev`
--

CREATE TABLE `facturev` (
  `id` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facturev`
--

INSERT INTO `facturev` (`id`, `date_creation`, `id_panier`) VALUES
(2, '2022-12-10 15:33:05', 3),
(3, '2022-12-10 15:47:29', 1),
(4, '2022-12-10 15:49:54', 6),
(5, '2022-12-10 17:25:14', 8),
(6, '2022-12-10 19:03:47', 4),
(7, '2022-12-10 19:30:45', 7),
(8, '2022-12-11 10:57:35', 14);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id`, `quantite`, `id_produit`, `id_commande`) VALUES
(92, 1, 5, 1),
(95, 2, 6, 1),
(110, 1, 5, 37),
(114, 1, 4, 31),
(115, 1, 5, 38),
(119, 1, 4, 36),
(120, 1, 1, 37),
(123, 1, 4, 47),
(132, 1, 4, 39),
(133, 1, 6, 51),
(134, 1, 5, 52),
(136, 1, 5, 55),
(141, 1, 1, 63),
(142, 1, 4, 64),
(143, 1, 5, 62),
(144, 1, 1, 66),
(145, 1, 4, 66),
(148, 1, 1, 68),
(149, 1, 5, 68);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commandevoiture`
--

CREATE TABLE `ligne_commandevoiture` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ligne_commandevoiture`
--

INSERT INTO `ligne_commandevoiture` (`id`, `quantite`, `id_produit`, `id_commande`) VALUES
(13, 1, 2, 3),
(14, 1, 3, 3),
(15, 1, 3, 1),
(16, 1, 17, 6),
(17, 1, 4, 6),
(19, 1, 2, 8),
(20, 1, 3, 4),
(21, 1, 2, 7),
(24, 1, 3, 13),
(25, 1, 3, 13),
(26, 1, 2, 14);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `texte_message` text CHARACTER SET utf32 NOT NULL,
  `date_message` date NOT NULL,
  `heure_message` time NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `texte_message`, `date_message`, `heure_message`, `id_user`) VALUES
(244, 'azeeee', '2022-11-07', '00:36:00', 7),
(245, 'azerrrrrrrr', '2022-11-22', '00:37:00', 87),
(246, 'azertyyyya', '2022-11-22', '18:58:00', 87),
(247, 'tunisie ya tu', '2022-11-26', '00:46:00', 87),
(248, 'forzaaaaaa', '2022-11-27', '14:09:00', 92),
(251, 'test2000000', '2022-11-29', '00:06:00', 7),
(252, 'ye mouhebbbb', '2022-12-01', '17:20:00', 87),
(254, 'test50', '2022-12-01', '23:14:00', 7),
(255, 'testetstest', '2022-12-02', '01:07:00', 7),
(256, 'aazazazazaza', '2022-12-07', '01:17:00', 7),
(257, 'test2000000', '2022-11-30', '01:20:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `txt_post` varchar(200) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `txt_post`, `id_admin`) VALUES
(1, 'leave your problems !', 1),
(4, 'test', 1),
(5, 'testtt2000', 1),
(7, 'how to devlop', 1),
(8, 'how to save ', 1),
(11, 'teee', 1),
(12, 'eeeeeee', 1),
(13, 'taaaaaa', 1),
(14, 'azerty', 1),
(15, 'azerty', 1),
(16, 'azerty', 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Lame Pare Chocs Avant', 350),
(2, 'Amortisseurs courts', 800),
(3, 'Spoilers', 350),
(4, '2 Phares avants', 560),
(5, 'Jantes ALU', 1900),
(6, '2 Phares arrières', 640);

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `id_rate` int(11) NOT NULL,
  `nbr` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rate`
--

INSERT INTO `rate` (`id_rate`, `nbr`) VALUES
(148, '5'),
(149, '5'),
(150, '3'),
(151, '1'),
(152, '2'),
(153, '4'),
(154, '5'),
(155, '1'),
(156, '5'),
(157, '5'),
(158, '5');

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `addi` varchar(255) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `seen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `tel`, `mail`, `addi`, `produit`, `seen`) VALUES
(16, '382388', 'samis6403@gmail.com', 'jhh', '4', 1),
(17, '3823888213', 'josephinhoo@gmail.com', 'aaaa', '5', 1),
(18, '3823888213', 'samis6403@gmail.com', 'aaaaa', '4', 1),
(19, '2222', 'amyyr.othman@gmail.com', 'aa', '21', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reply`
--

CREATE TABLE `reply` (
  `id_reply` int(11) NOT NULL,
  `texte_reply` varchar(200) NOT NULL,
  `date_reply` date NOT NULL,
  `heure_reply` time NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reply`
--

INSERT INTO `reply` (`id_reply`, `texte_reply`, `date_reply`, `heure_reply`, `id_user`, `id_message`) VALUES
(1, 'mmmmmm', '2022-11-01', '10:33:00', 7, 244),
(2, 'kkkkkkkk', '2022-11-02', '10:56:00', 7, 244),
(3, 'nnnnnn', '2022-11-02', '10:56:00', 7, 245),
(4, 'azazaz', '2022-12-10', '22:50:00', 87, 255),
(5, 'hellocccccccc', '2022-12-01', '01:20:00', 91, 257),
(6, 'azazazaz', '2022-12-01', '01:32:00', 1, 257);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idreserv` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `idvt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idreserv`, `date`, `idvt`) VALUES
(23, '2022-12-24', 1),
(25, '2022-12-30', 2),
(26, '2022-12-31', 11),
(27, '2022-12-10', 13);

-- --------------------------------------------------------

--
-- Structure de la table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `done` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `email`, `hash`, `done`) VALUES
(5, 'zayaneyassine6@gmail.com', '6bc24fc1ab650b25b4114e93a98f1eba', '0'),
(6, 'zayaneyassine6@gmail.com', '6bc24fc1ab650b25b4114e93a98f1eba', '0'),
(7, 'zayaneyassine6@gmail.com', 'd395771085aab05244a4fb8fd91bf4ee', '0'),
(8, 'zayaneyassine6@gmail.com', '7f1de29e6da19d22b51c68001e7e0e54', '0'),
(9, 'zayaneyassine6@gmail.com', '0a113ef6b61820daa5611c870ed8d5ee', '0'),
(10, 'zayaneyassine6@gmail.com', '46ba9f2a6976570b0353203ec4474217', '0'),
(11, 'zayaneyassine6@gmail.com', '8df707a948fac1b4a0f97aa554886ec8', '0'),
(12, 'zayaneyassine6@gmail.com', '6faa8040da20ef399b63a72d0e4ab575', '0'),
(13, 'zayaneyassine6@gmail.com', '49ae49a23f67c759bf4fc791ba842aa2', '0'),
(14, 'zaza@gmail.com', '847cc55b7032108eee6dd897f3bca8a5', '1'),
(15, 'amyyr.othman@gmail.com', '0d0fd7c6e093f7b804fa0150b875b868', '0'),
(16, 'arijhorchani1234@gmail.com', 'f61d6947467ccd3aa5af24db320235dd', '0'),
(17, 'arijhorchani1234@gmail.com', '0bb4aec1710521c12ee76289d9440817', '0'),
(18, 'arijhorchani1234@gmail.com', '5b8add2a5d98b1a652ea7fd72d942dac', '1'),
(19, 'kamelhajsalah1@gmail.com', 'c06d06da9666a219db15cf575aff2824', '1'),
(20, 'kamelhajsalah1@gmail.com', '1700002963a49da13542e0726b7bb758', '1');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) CHARACTER SET utf32 NOT NULL,
  `prenom_user` varchar(50) CHARACTER SET utf32 NOT NULL,
  `email_user` varchar(50) CHARACTER SET utf32 NOT NULL,
  `pw_user` varchar(200) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `pw_user`) VALUES
(1, 'bouhamed', 'saif', 'saif@gmail.com', 'saifsaif'),
(7, 'jeuehudaa', 'horrr', 'heuu@aaa.tn', '348ed072b694aa990978fac94fc62d47f1f04852'),
(86, 'test', 'test', 'test@test.fr', 'test'),
(87, 'aa', 'anou', 'anouer@gmail.com', 'aaaa'),
(88, 'zaza', 'zaza', 'zaza@gmail.tn', '123456789'),
(90, 'azer', 'azer', 'azer@gmail.com', 'azerazer'),
(91, 'boukh', 'zied', 'ziedbk@gmail.com', 'ziedzied'),
(92, 'ouss', 'ouss', 'ouss@gmail.com', 'oussouss'),
(94, 'horchani', 'arij', 'arijhorchani1234@gmail.com', '1234567890'),
(95, 'HajSalah', 'Kamel', 'kamelhajsalah1@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idVehicule` int(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `prix` double NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `nb_place` int(50) NOT NULL,
  `ac` varchar(50) NOT NULL,
  `boite` varchar(255) NOT NULL,
  `carburant` varchar(255) NOT NULL,
  `id_c` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`idVehicule`, `img`, `marque`, `model`, `prix`, `reviews`, `nb_place`, `ac`, `boite`, `carburant`, `id_c`) VALUES
(2, 'assets1/images/t%C3%A9l%C3%A9chargement.jfif', 'Porsche', 'Cayenne Turbo', 135, '2', 510, '1', 'auto', 'es', 1),
(3, 'assets1/images/audi.jfif', 'Audi', 'A5', 122.5, '10', 4, '1', 'auto', 'es', 1),
(4, 'assets1/images/ford-ranger-raptor-2.0-l-diesel-bi-turbo-bva-10-46980.jpg', 'Ford', 'Raptor', 110, '10', 5, '0', 'manu', 'mz', 1),
(5, 'assets1/images/toyota.jfif', 'Toyota', 'Land Cruiser', 85, '10', 5, '0', 'manu', 'es', 1),
(6, 'assets1/images/nissan%20juke.jfif', 'Nissan', 'Juke', 42, '10', 5, '1', 'auto', 'es', 1),
(7, 'assets1/images/golf.jfif', 'Volkswagen', 'Golf 8', 58.85, '10', 4, '1', 'auto', 'es', 1),
(8, 'assets1/images/marc.jfif', 'Mercedes-Benz', 'Gle Coupé', 132.62, '10', 4, '1', 'auto', 'es', 1),
(17, 'assets1/images/kia.jfif', 'Kia', 'A555', 129.9, '10', 4, '0', 'manu', 'es', 1),
(20, 'assets1/images/camaroo.jfif', 'Abarth', 'Camaro', 109.145, '10', 10, '0', 'auto', 'es', 1);

-- --------------------------------------------------------

--
-- Structure de la table `visitorc`
--

CREATE TABLE `visitorc` (
  `id` int(11) NOT NULL,
  `visitor_counter` int(11) NOT NULL,
  `forum_visitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visitorc`
--

INSERT INTO `visitorc` (`id`, `visitor_counter`, `forum_visitor`) VALUES
(2, 285, 41);

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Marque` varchar(20) NOT NULL,
  `Modele` varchar(255) NOT NULL,
  `Matricule` text NOT NULL,
  `PrixJour` int(11) NOT NULL,
  `Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`ID`, `Marque`, `Modele`, `Matricule`, `PrixJour`, `Img`) VALUES
(1, 'BMW', '', '14 TU 124', 310, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs-JLFV51GPSH0R4JVSVyJbnm217fqAnrbtg&usqp=CAU'),
(2, 'Mercedes', '', '128 TU 128', 360, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFhYYGBgaGhoaHBwYGh4ZHBgYHBgaGhgZGhgcIS4lHB4rIRoaJzgmKy8xNTU1GiQ7QDs0Py80NjEBDAwMEA8QGBESGjEhGCE0NDQ0NDExNDQ0NDE0NDQ0MTQ0NDQ0MTQ0NDQ0NDE0NDE0NDE0NDQxPzQ0NDQ0PzQ0Mf/AABEIAKMBNQMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABgIDBAUHAQj/xABMEAACAQIDAwcHCAgEBAcBAAABAgADEQQSIQUxQQYiUWFxgZEHEzJCobHBFFJicpLR4fAVFiNDU4Ki0jOTwvEkVGOyNERkc4Oj4hf/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAYEQEBAQEBAAAAAAAAAAAAAAAAEQEhMf/aAAwDAQACEQMRAD8A7NERAREQEREBERARMfGYunSUvUdUUb2ZgoHeZGKvL3DlslBKuIb/AKa2UdruQAOvdAl8SLYflFWc3NCmi9dUu3eFp2/qmPtLlNXpsqpTpEtuLOwB77dm+WCYxIO229pcKeFHaah9xlB2vtP/ANIO6pEE7iQBtrbT+dhB/K8t/pjal/Twdux7n7vbESuhxOffp7aI44M/bHxj9ZdoD1MIexm+LxFdAiQAcrMeN+Got9WoB73MrXltiR6WAJ+rUv7ApiCexIMvlAt/iYPEL2An2lVlxPKPhDoVrKetV+DRBNYkWocvMC2+qyfXRwO9sth4zeYDadGuM1GqlQfQYN7jpIM2IiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgJBeV3LxcOzUcPleqvpuxtSo/Xb1m+iPfpLPlL5YfJk+T0Xy1nW7ON9GmdMwt67HRR39E4ZtDEliEXRV4byXO8k8W4X8IEg2tyiFVs9ZqmKfpZjSpL1Ii88jsyTdUKoRE/Z0UcjM+WkjZRqAv7QOS1xYkknmHpkLw2znRkeohUHnKG3sRa113gXtvmV+mG8629kNha+oAFlOvGw16SZpE72ftJA4zqljoXSmlOon0lemq5gN+VgQd03u2gWoPe2ZNdN2ZTla3VvkIr08lNKrOoD2yqbhucLgai17SY4ep5ygPp0h4+bCt/WGMDSDaL21dzoN7GefKyd5J7zMGk+k2SbHqFQwykEAjXgdZRb89+dfvlBqdQl9tk1h6l+wg/GY1ag6emrL2j4yCl26hLDjqtLhM9L6WtAxWXTfr0W+MozWl90lDNpa0D1a3Rp2EiU1KmbQkntYn3yQ7DwtN6N2RSbspJGvjw0I3TRbQwppOUO7eD0qdx/PRAwzTToI7DLLUyDmpuyMNzDf4ggkdV5scLVFNwWUMp0IIBBB36GSDEbEpOMycwkXBX0TfdzfutAxdg+UTF4chMYorUt3nF0ZR0v8AeZ1fZO16OJQPSYMOjiO0Ti+LwD0jZxdeDDUH7u+YmBxFXCOKuHYjiaYOh+rwHZu+Mg+g4kV5J8r6WMULcLU3Fd1yN9hwPV+NpVIpERAREQEREBERAREQEREBERAREQE1HKPbSYPDvXfXKLKo3u50VB2n2XM2xM4V5Rtu1MdVth0d6NJitPIrNnqbnq83gBop678ZcEK2rtN69Z6tRszli7Hg1Q6KB9FdwH0TNxyM2QGviHF7GyA/OG9/gOwnomqo8nMVlAGHqC+uqkanQaHoA9snNcfJqP8AhOUXIm4oLZQvptYA6HjCIttfFGrVcqC1uagUEkgXGgGuvOPeJgYfk/iijMMNWuf+mRv6j+dJL6PLKnSUKlBqS9CIpB7WVjfvlX67UjvzjtRvgJRz/EVKuQU6jNzWNla90tzSLNqNx0nTOQ1a+EpX9XOnhVdvcwkC5UbQTEYg1EvbIoYkEXYXvoerLJnyJxGbDIBYZXdTx+ZYgeMQY9VMjuvzWYeBkv2RUvRQ9VvAkfCaXbezmDmovODC54kMN97dMx8Bj6qAKl8t72NN+O/XLAl4Mi+2sY7VGTMcgsLA6bhe/TrNum1B8yp9kffI5ikdnZ8j2Zid19CTbS8C2J6BKkov8xu8W989803zTKLLiWXEy2pt80yy1Bvmn2QN5yYfmOvQ1/EfhPeUmFzIHG9N/wBU7/A29swdkYg0WbMjEMBute43bz1mV4nHPUNmDonQoUkjr5wvINMOcvWJIOTWNzKabHVdV7OI/PTNMiVLnTTuHxleHV0cOENweFtRxBF+i8ol7ICCCAQd4OoMj209kFLvT1Xiu8jrHSJsxtVOKuP5fxnh2snQ/wDlt8BIIY6MjedpHK46yA1uBtx6/wAjqHInluuIApVjlqDmgnS53WP0uvj4XgW2npX84jFbnnKyMoPWCRYHqmgxeJVT5xGGccN2YdHb/tA+l4nCsJts1KQqK1RKgW4amxRzYdANm7Dfv3zZ8ivKbUNZMNi+dncIr2yurMbLnUaEEkC/C/GSFdiiIkUiIgIiICIiAiIgIiICUMwAudAOnhK5BvK1tk4fAsimz12FIW3hSC1Q/ZBH80CG8vvKL8oz4bCkij6LVBoavSq9Cde9uob+fvi3tlYuQNykkAcdF3CW6KLY5mC5ULAEXztcWTVWAJHSLaS1UxAYk5VS/BQABpbgAL9gE0i+mKAIuhtfXLa9uNr8ZJMNt3Z6oVODrbrM/NdgOm+YW7rSJeeEy2K00Gdc3nEzKUdlzA3GUlWK3BBBBURo2ZTZrm4xNWnfg9EtbvQmWdobJoKmeji6dXpW4RrdIRjczRlgZSUUyje8nMdgrNRxVNANWWraoWLEgZDkJ0tcg5eElnJOjQ89XTCs70FVCGc3u7asFOVTlGg1F7g9U5p5gTZ7D23iMJmFFlytYsrKGBI3a7xx3GQdhUlXy3tmUWv61i2YDpIuNOuVPhUbegB6V5p9kjWw+U9bEr+1wqsm4sraMR0I418ZIadVfUZk+i4zL4E37gwgePs4+o/cw+I+6Y1ak6g3TWxswGYA8CQNbeE2S4gj0lv1oc3eVNj3C8uU66torAno3MO1TqO+BGcNiBa1d2ptf00VGpnXTUqSn81u2bM7KZhdMRodx82jA9hFrzNxFFW9JQfYfETSjYz0mLYasUublHGZD3Dd4XlF59jV+GJXvor98x32Rix6Nake2mF/0mb7D1GKjPlzW1ykkX6ri9pdJkoib7Nx49amezL8UExqmHx43pf6vmz7pNC08vFEAq4jFL6SOP8A4xbxCzEba9TcXsfqoD7VnSby3UpK2jKG+sAffFI5s2PqH9847Ag/0S0zu2+tVP8APb3ASf1th4d99FP5Rk9q2mur8kqJ9EunY2Yf1An2yiFvgkb0i7fWdz8YTZ9NdyL36++SKvySqD0Kit1MpX2i811fYuJTfTLDpQhvYNfZAxcsILMrgDMhDK3FWBuCDwIMtVGdNHRl+spX3iFriBONm+UTFJYVAtYfSGRvtILeKmTTY3LvC1yFZjRY8HtlJ6n3eNpxYVBDPJEr6Uns4Vyd5bYjCEJfzlL5jncPoPvXs1HVOrbA5U4fFiyPle2tN9GHTbgw6xfuk3FrfxESKREQEREBERATg3lm2wKmNWiDzaCAWv8AvHs7f0+b9s7q7hQSdAASewb58nbTrti8RVq+tUdnJY2sWJIUdgsO6XBh1ahJ7h7hLZaU1LjQ6Hce0G0oAvFRdvPAY8z1ynzY+cI6Ks09DmWinWPGCpgXxVMyKL3mvDS/fS17Dj8AJc0joHk/xarTdGqqWLkopa7BQNSAeBPAdElFXFicYpox5yK4sb5hc2I3G4Ghkrw3KgGjd/8AEXQjdmPBurrjBNxtEICScqjeSdBLX6yUG5pzHXQmi7DtUlLDtnPG2w72OYXv6NrW+qb6n2zcbL24uZFbPSIPOdCS9upSQu+3jxlE1XatIaF8v13dT3ByJkpilO5iexrzf0MDXOHFZMSzgqGArLTqAqek5R4AyL4rFUxVdK2AoPkZk87RBoZypytlbjZrjfvBjgy/O9Z8fwnoxPWfZ901QxGz2GmIxWFJ+ewrU/tOG075k09j13F8Ni8JihwW5pv32JHsERK2K4peJYeH3S75xTx9pkO2vtGrg2CYqg1MnUEMrqQN5BuCe4S9htqBlDLmAIvzlK6dOokipUWHSfE/fKSfzvkQr8qqKeszWGbmKSMt7XDHQi+mhmOeWicEqHcfUubgEWGe5NiLgajjaBNCeoeAlJfqHgJCm5aAbqLnosym4AJJWxOYDKbkXAtrKG5aHW1Fja+5wbqM2ZlsNVGU3YaQJuanUJ49Vej3SCvyze5AognUrzzz1Ga7LzNVGQ66SulyjxFUHJhywy5gRnIY2ByqcmrC/ZodYEwdlYWKqR0EAzCr7OoPvpp/KMp8VtIfU5UV1NnpBSBqGLqQxDFVIK+kcptw655+tVbd5tb6i2Zr5gbZPR9PqijfV+TdI+g7p3hh7dfbNfX5O1V9B0ftup+MwF5V1TqKa2spvnNrHebkbhuJ3A754eVlX+Eo/n9lt9zvA3nhFGPjqFSmRnQrc2B0IJ7RPUxBBBDEEG4INiD0gjUGYW0tsVKxXOAqg6Abi1vncdD7ZI+SvJZsUhrvUWjhkbKznVmYb1RenXj07jKJ/wCT7ls9ZxhsQczEcypxNvVqdfQ3HcddT0mc/wBi7NpHC1DhV83TUkXcBnrlVBzu17ga6AcR3SV8ncWatBGY3YZkY77srFTc9OmvXM7hjaxESKREQEREDV8pK2TCYl/m0areCMZ86bG2Mj0gzMys/oEWsGNwucEXIJsNLW367p9B8tVJwGLA3nD1R402nD6yEUilioVUAJBGt2U2PVlHjLgh20aZ0fgxPcwtmB75hFZLcGQ5ckA8/PrrbOLnTvlWL2DTfVeYerVfs8O60u4lRJapG+VKBe416pnYzYtVPVzDpXXxG+auRUk2WtJ19EFhvBGszGwFM+ovhIrSrFSCDYjcR+dZItnbRD81rB/Y3WPulzUYW19nKih00F7EXvv3EX/OsxKFIaFhcb7cCTxPUBb2zebXF6duse+ZWxMGEUVXtmOq33Io9bXjpp0WvxFkGGmDxJXMtKqV4ZUe1uFgF3dgmixXpX+dvt0jTh+d8mwxquM65soVzc6FiK+GAbp4HrmBthqeMovVU2r0tWJ0aoq6EP0uBqG3kKQdQI0RN5Wldhxv1HWUDXdx/PGeSiVbI5dYrDoKS1L0x6jgsosb2DKQwHUNJsavKkV7l6fm1LOzGmxZMztmfm+rmJuR0k9OkJwlDO6rwO/sEnOBwSoAFFoFaY/DlWsyZbOQNzaXZAt+n0ba748nGx/PYj5TUOSlTLVXPoqNSwXqHV0S5V2dTf0kBPSOafEWMpfClabUxVqikSGZAwAa17XIW/HpgXOVO2Rj8S1d/wDw9IlKSt65B1Y9V9T12HAyMbU2oa11XVbgWvbOx4m3qjuFzv0mrxWLeu1gLKPRQaKqjcOsyQbF5UV8PTWmiYcprmL0gzB9cuZhZsp5uvWZN0aVVYnTPcubG3He1Vh87Xm7rdOk9SkxK81wCWI5tyiLqejnNYa6HmjU3MlNHl1iCVvRwupZT+ybmvzsouHtY6buvvyKHL2vzL4fDC+dDemwyuM2VDd9L6b7HfobaxUPXDsbXpkAguwFM6KtwiC1t5GpFic28yoYVz6VNjdc7jzbgM25E0tYC43Zd7anSTOh5Qq/M/4XDc7MuqWtUGayG76Xsu+x1Ngba3aXlJrnL/w2GGZWHogftATzDdtNALA2JvoDpAw9i8nRRX5VjFOQI2IKm/7R19EEbrgtoNPWve4mmobcr4zFKrOVRs6rTQlUVSj2AUaadMk+L5U1NqUWwzKlNihZMugLD0kO/LYjjY2sbagyP7O21htnqwp0vlOJN1erUGWnT4MtJSM3UWIBPC0o1GB2i1W1Ksxe4IRnJLKx9Qte5RvRK34g6Wg7Mq6A06hU3S+RzmSwNNrgW06ugaGZlOhh8VVV6IagwOepTa7KEXnO1N1FwbD0WAuSLG+kk2H8omKQJRWnRyoy0luoY2VefqG1y6XI011tIIUcDWtfzL3sH1pv6d8rDd6w16Oi09bZ9S9vNOBmKgim9wu9W7VOl99umS8+UzGkAhcOAVdv8G9lW4Vt+4sCOjrlip5Rscb/AOBfKmnmQOc2oXXhlubnTrgRP5FVO+lUsQCQEYaE2YDS2/nDgOqSLkJtEqMTgnIs6GpTzDQVqIzeidxZAw/lWXKvL3HEnn01W7G606foDQHVdLnQE7+uRXa2Oq1KnnajlqlgGawXnA6gBQBoDa/V1wicjlpWoYc0aYQI5JLupLLoL+bQndYekRvPfJ95H9oeewTDilZl132KowJ6zczgo1H57tZ1byFYyz4mhfetOoB2Eo/vSXTHY4iJlSIiAiIgajlV/wCDxP8A7NT/ALDOVYbaBdgoRHQozq7sbX05tQcMmQi49IDXU69W5UKTg8QBv8zU/wCwzi+xNnsyswZQMh379WAsF/kuT1jplwaarpi6qlsxLKLlQmY5AdFXRdRuE22GXWxkbx1TzdZn1OSoh7QupFu6b79LYdmulQDqcFD/AFaTSN7Sora9uvw1mPjdi0Kt89NSekc1vtDWXMJiARvBB4jUeMyVe4B6hAieM5EIdadRl6nGYeIsR7Zpq3JXEpqoV7G4KNu67GxnRiZQRJBCMTTchEYWZmAPDXTp65nbawWINIqlJvS1AIJ82o5lgDcjQbuiZe23tXonTmh216QLi/VzZZGLqKzvhz51QA9TDuSWQEC70WBDZetTccQRrGmMTAUmWgqlSG8yzWIIIvjkXd3CY61RTZkNO2YlX5upzX36a7xpN/hNumrWWqUCjL5tqTHR6RS5pq9rlgbPm4NbfKaWLq1iKlCnTw1J7/t6n7Ws5FxZC66ndqiKBxYSjnWax6PhwI98KZVjUyu63vZmF917MdbTHBmVZdCqUZWXeD49UlNDlJTCjNmB6LX/AAkUReF9eOl7dX57JfKA+v8A0N8JUSkcq6HQ/wBkffLg5T4c7yw7VPwkQNFT66d6uP8ATPaeGUMCWQgHUZrX6tRHRsMStIsXoODfUoysNfom3smIlZb68xuNxcHtB08RMt9oMNEFO3AB192ks0qjYglSEFvWO8dnTAIesNpb0tCLrZW4soyiwuLSq+hFr6KNfWAA0ZhutYWy267zZUcDgqI/atnbvP8ASu7vlNTHYDcKDnsFv9UDXkamwLbvVClrei2noMLLqu/W56a8rC+jHUHRQhYjcy2B82wstyty3EzccnK1Fq7GgjUx5s5rm9+etranrkmznpPjEEDQupzDPcWa6qEJbmi6gKRTNhqdc1td8z62MSsQ2JwxdyvOqUi1NiQDYMoUqx0HOtx6pLGqEDefEy2tcm2pFxfW/Vp7fZEKiPyshMlGg1FXtm5pqMSGBUuzizroeaAovY8Jhii1v8NxcEegXIB9I3tzmYnebFQBY6SbjFdvDj0y6j3F9YhUC8w5/c1CCBcZHA5p5q33lAANdGJvrLLYwjQ8Dc3YXufTJPzidLixAFtZ0MGc1xxHnamnrvw+kY8FLYsi1iBbW4011ta27Q8LRRwlR1ZwpyqLltwAHAdPYJbKAi9pfp4+plKGoyrbLlA4cRaQW0rDcLm3V+Mmfkm2jk2nSGo84r0zxuCuYa9qLIilNOlvYJteQzW2lhMoI/4hBvv61jw6CZdH1NERMqREQEREDGx9HPSqJ89GX7SkfGcO2fifN1KdMA2dGUngGKFwCeBIUzvU4Py4pfI8U65CGIZqThsoyPmtzQOcyFnUai1gTeXBB9s1gzu3z6jsOGl9LSxSqULc4PfibgDusCT7JZxrahej37z8Jin8/n875dRvUwLK37NnB38whiRwYZGJI67TKpbSxNPTOGtwca+2zTqHJLZGyqGDoriDhHr5c7s5RnV2ObLm3jLcLp0TMxVLY53YxKf1awcdy1MwHdFI5nR5VsulSie1D8D982WG5SYZ9M5Q9Dgj2i4m42hgNmG+XHYU9TXQntdCQfsyLbS2fghuxFI9aOrqPHI3sMUZO1Cr1qZRlYFKoGUg65Dbd2zSbPVhjsMygg+epjtAZQ97bltmvfgDeV4CnSpVUdKqOM6gqCQ1vqsAbffNu2DIDKp/aBmw1NiNLVr3qX4BafnjfhnBlFeysQKrPZc9MOcrEjW75crAi5ABRhboF5h8oMa/ndMwvnzX9VEuFQdAG6w0l+ltoGquARrUGBpoDYZH0NF9BozOAWP/AFG6BG3KL1TTqLcNUAJA3+cLZXTt84GFoEUxeCzZ2GhLFuy+pExvk2RczancBwv8bb+6bx6Tl3QU2yq7AN6rBTYEX6d8xdrYJyEIUkC97DMQTbXLxkg1NJVtclvAfEy9Zel/sj+6Bh1/i5T0MuX4mPkl91en/X8EgeFE+e32PxlDIn8TxVpe/RpP76n/APZ/ZN6tLDDDqrMhqKDcqrWOpIN2UawItUsNxDdYBHvhKVt/+3bKFIHbLq1H4DwX8JFHItLZ/P5/2l8VavDMP5fwlQat9OEZmwdqLh3ZmQuGXLYGxGoN7m44Te/rhT/gP/mL/ZIuPP8AS/j+Mq8ziD8/7X4yiSHlen/Lv9sf2Tz9bR/yz/5n/wCNJH/keKPq1PE/fKhs/F8ErHszGKN9+tZ4YY/bP9kfrS3DDH7Z/smi/ReMP7uv9lo/Q+M/hVvst90DefrPU4Yb2v8A2yN1qLszMUYFiWtY6Em5A/3mQdhYv+FU7ww988/V7E/wm7yB7zIq15lwPRb7JmO6638eybBeT+J/hjvdB72ljFbNrUyM62O8WZW/7SZUKRQ8LdrayQeTykG2jg9AP2rmw+gpYEi9+nwmiwuDLWHmnc/RRtOq9wJ0byX8k6vy2niTS83TpBzzmuzMyFRoNB6R4wO4xETKkREDyUEHplyeQMSrQJ4nxMj22+SdHEi1RSbbiGII7DJZaeFYHIMb5JaBJK1Kq9pVves0WL8lTr6FYntX7p3lqYPCW3woMD5uxnk9xKbireP3TR4rk7iU9Km3drPqSps5TwmBiNiI3qwPlmpQZfSUjtEtT6UxvJKk+9Ae6RraHk4oG9lt2QOKUKmVgej3cZ0XB44VaGZVL1kVgLfMZVV3HEtkQLu0UnoM82h5NSvouR2iahti4nCDNfRTcMpsV1lzRrMTsgls6VFsTfnZlZTe/AEHtBkuxu0MlBKrEGpUPnEUHVKrIadZyp3JmUOv0n6jNK+33IN1pF/ntSQuPFbE9bAmavFYlqhLuzMT6TMbk9AHVwsNBuFhNIt1cY6LdXI4BTYi3VcbtJaG2av0T3Ee4zFxNXMeobpYJk3Rsjtx+Kr7fvlttqk70TwmuM8kqxmtjQfUT7MoOK+gn2ZixFGScQeBC/VUL7d8yqW28QoypVdR0Kbe6ayJBszt7En9/V+2ZT+m8T/zFb/Mf75rogbJds4g/wDmKvfVf75uNk0atc8/aK0dNPOVnJJ4Cw3DrvIrECc0OSmPqehi6TdmKOszU8mu0n/fUj212PwnO1YjUG3ZM3D7YxCehWqL2O3uvAnY8km0T+8w/fVc/wCiaHlVyHxeAVXrBHVzbPTJZVbgrFlFieHTYy3g+XmPp7q7N1MAfxm2byoYl0anXp0qyMLMrAgMOuBCsgtvAPQRbwO6VKFGpI7ALn7vbKcXVRmJRSin1S2a3UGIuR2ywWMtGUuLI3AdnAeEujHPqRlud/NB999Zh0lubXA69fhJxyV5OYCoyticbYcUWm6k9RqMNB2DvEVGf5NNm4nHV1LO64akQzlQFVmGopAqBcnS/QO0TvqqALAADoGgmn2JXwiU1pYdqaoosqoRp8SeknUzcBwdxEiq4nl57AREQEREBERAREQE8tPYgUFB0SlqCnhLsQMZ8Eh4TDxGwqLizID2gTaxAhWN8m+CqX/Z5T9AsvsBtNLi/I/h23Vag/mv7xOnxA41X8ivzMQe8fhNbX8jGIHoVEPabfCd3iB88VvJDjxuCHsZfvmFU8lu0R+6B/mH3z6UiB8yN5M9oj9x/UJQfJxtH+AfET6eiB8wf/znaH8A+M9Hk52h/APjPp6IHzEPJvtD+D7fwlQ8mu0P4Q8fwn03ED5nHky2h/DX7R+6XV8lu0D6i+P4T6TiB84r5KMefVXxl1fJJjj80fntn0TED58TyPYw72Qfntl9PI1iuNWmO78Z3yIHDE8i1bjXX7P4zKp+RU+tiPATtMQOQ0fItTHpV28BNthvJTQXfVqHwE6RECJYTkJh6fFz2sfhJDhMAtMWW9usk+8zMiB4BPYiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiB//9k='),
(9, 'BMW', 'ancien', '14 TU 121', 90, 'data:image/jpeg;base64,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'),
(11, 'skoda', 'ancien', '10 TU 121', 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_T5Rl77XqzxWrHKCsmaH7hMA5FgfU0b44RiBVrtrt_h_kR8r64b3qkbHq87-VVgmFnNQ&usqp=CAU'),
(13, 'KIA', 'nouveau', '1 TU 121', 30, 'data:image/jpeg;base64,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');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `articlejardinage`
--
ALTER TABLE `articlejardinage`
  ADD PRIMARY KEY (`IdArticle`),
  ADD UNIQUE KEY `NomArticle` (`NomArticle`),
  ADD KEY `fk_categorie` (`IdCategorie`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IdCategorie`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `commandevoiture`
--
ALTER TABLE `commandevoiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `diagnostiques`
--
ALTER TABLE `diagnostiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_panier` (`id_panier`);

--
-- Index pour la table `facturev`
--
ALTER TABLE `facturev`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_panier` (`id_panier`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Index pour la table `ligne_commandevoiture`
--
ALTER TABLE `ligne_commandevoiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `fk_post_admin` (`id_admin`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id_rate`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id_reply`),
  ADD KEY `id_message` (`id_message`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreserv`);

--
-- Index pour la table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idVehicule`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `visitorc`
--
ALTER TABLE `visitorc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `articlejardinage`
--
ALTER TABLE `articlejardinage`
  MODIFY `IdArticle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCategorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `commandevoiture`
--
ALTER TABLE `commandevoiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `diagnostiques`
--
ALTER TABLE `diagnostiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `facturev`
--
ALTER TABLE `facturev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT pour la table `ligne_commandevoiture`
--
ALTER TABLE `ligne_commandevoiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idVehicule` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `visitorc`
--
ALTER TABLE `visitorc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `commandevoiture`
--
ALTER TABLE `commandevoiture`
  ADD CONSTRAINT `commandevoiture_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `facturev`
--
ALTER TABLE `facturev`
  ADD CONSTRAINT `facturev_ibfk_1` FOREIGN KEY (`id_panier`) REFERENCES `commandevoiture` (`id`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `id_commande` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `ligne_commandevoiture`
--
ALTER TABLE `ligne_commandevoiture`
  ADD CONSTRAINT `ligne_commandevoiture_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commandevoiture` (`id`),
  ADD CONSTRAINT `ligne_commandevoiture_ibfk_3` FOREIGN KEY (`id_produit`) REFERENCES `vehicule` (`idVehicule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
