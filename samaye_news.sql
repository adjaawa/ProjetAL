-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 09:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samaye_news`
--
CREATE DATABASE IF NOT EXISTS `samaye_news` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `samaye_news`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `id_compte_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` varchar(1000) NOT NULL,
  `contenu` varchar(10000) NOT NULL,
  `date_pub` date NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_categorie` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(1, 'Aile volante', 'Une aile volante équipée de deux moteurs électriques qui atteint 300 km/h !
', 'Il faut beaucoup d''énergie et de force pour pouvoir manœuvrer cet ensemble, par rapport à une wingsuit ordinaire. Et surtout, avec cette masse supplémentaire, la finesse du vol dégringole avec une perte d''altitude d''un mètre tous les trois mètres parcourus à l''horizontal, par rapport à une wingsuit classique. En revanche, la vitesse dépasse les 100 km/h et culmine à 300 km/h à plein régime. Il est alors possible de reprendre de l''altitude, plutôt que de tenter sa chance en misant sur l''effet de sol.', '2020-11-14', 1, 1);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(2, 'Réalité virtuelle', 'Les casques de réalité virtuelle pourraient bientôt intégrer une technologie des panneaux solaires', 'Des chercheurs de l’université de Stanford, en collaboration avec Samsung, travaillent sur un nouveau type d''écran OLED qui pourrait résoudre ce problème. Cette technologie, développée à l''origine pour des panneaux solaires ultra-minces, promet des affichages avec une résolution pouvant atteindre 10.000 pixels par pouce (ppp). À titre de comparaison, même le nouvel iPhone 12 ne dépasse pas 476 ppp', '2020-11-17', 1, 1);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(3, 'Qualifications pour la CAN 2022: l’Algérie et le Sénégal assurent, les Comores font sensation', 'Cinq sélections sont d’ores et déjà assurées de participer à la phase finale de la Coupe d’Afrique des nations de football, début 2022 au Cameroun.', 'Au terme des troisième et quatrième journées de qualification pour la prochaine Coupe d’Afrique des nations (CAN), cinq sélections ont assuré leur présence au Cameroun du 9 janvier au 6 février 2022. Outre le pays organisateur, qualifié d’office, l’Algérie, le Sénégal, la Tunisie et le Mali peuvent d’ores et déjà se projeter sur la phase finale. Le Maroc, l’Egypte, le Burkina Faso et la Guinée, eux, s’en rapprochent, alors que certaines grosses écuries du continent, comme la République démocratique du Congo (RDC), la Côte d’Ivoire ou le Ghana, vont devoir lutter jusqu’au bout pour ne pas manquer le grand raout africain.', '2020-12-31', 2, 2);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(4, 'Ligue des nations: : les Bleus battent sans difficulté la Suède (4-2)', 'Déjà qualifiée pour le « Final 4 » de la Ligue A, la France termine l’année en beauté grâce aux deux buts d’Olivier Giroud. L’Espagne, grâce à une victoire contre l’Allemagne (6-0), rejoint les Bleus en phase finale.', 'L''équipe de France, déjà qualifiée pour la phase finale de Ligue des nations, a dominé la Suède (4-2), mardi 17 novembre au Stade de France pour son dernier match de l''année 2020, prélude à une pause internationale de quatre mois.
Menés très rapidement (4e), les Bleus ont ensuite fait la différence grâce à un doublé d’Olivier Giroud (16e, 59e), un but du défenseur Benjamin Pavard (36e) et un dernier de l’entrant Kingsley Coman (90e + 5)', '2020-11-07', 1, 2);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(5, 'PS5 : date de sortie, prix, specs… tout ce qu’il faut savoir sur la PlayStation 5', 'La fin de l’année 2020 sera le théâtre d’une nouvelle génération de consoles de jeux vidéo. Face à la Xbox (Series X) de Microsoft, la future PlayStation 5 de Sony s’avère extrêmement attendue.', 'Le prix et la date de sortie de la PlayStation 5 ont été officialisés mercredi 16 septembre, à l’occasion d’un nouvel événement numérique. La PS5 – modèle standard avec lecteur de disque et Digital Edition, sans – sera commercialisé le 19 novembre en France (une semaine après les États-Unis, le Japon ou encore la Corée du Sud). Les deux modèles sont déjà théoriquement disponibles en précommande chez la plupart de revendeurs, mais les stocks ne sont visiblement pas suffisant pour satisfaire la demande. La console est en rupture partout ou presque. La PlayStation 5 avec lecteur de disque est affichée à 499 euros contre 399 euros pour la « Digital Edition ».', '2019-10-01', 4, 3);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(6, 'Call of Duty Black Ops Cold War : une guerre froide qui réchauffe le coeur','Véritable monument du jeu vidéo, la saga Call of Duty s’approche doucement de ses vingt ans et Black Ops Cold War en est le 17e volet !','Des missions moins importantes bien sûr et que l’on peut tout à fait zapper. Reste que leur accomplissement permet d’orienter le jeu et de modifier légèrement la conclusion de la campagne. Pour partir avec les meilleures chances sur ces « secondaires », il est important de récupérer un maximum de données durant les « principales ». On le récolte comme n''importe quel collectible dans un jeu en monde ouvert et elles s’ajoutent au tableau noir. Là, de petites énigmes, des recoupements peuvent être faits pour voir dans quelle direction avancer. Rien de sorcier, mais ça change agréablement du « boom-boom pan-pan » des autre Call of Duty».', '2020-09-12', 4, 3);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(7, 'La reprise du commerce mondial entraîne une pénurie de bateaux et de conteneurs','VSelon Rodolphe Saadé, PDG de l’armateur CMA CGM, les volumes transportés entre l’Asie et les Etats-Unis seront en progression en 2020. Malgré les reconfinements en Europe, le groupe devrait connaître une année exceptionnelle.','La pandémie de Covid-19 ne faiblit pas et grève la croissance économique. Le fret maritime devrait ainsi subir une baisse de 4,1 % des volumes en 2020, selon une estimation de la Conférence des Nations unies sur le commerce et le développement (Cnuced), publiée jeudi 12 novembre. Pour les seuls échanges par porte-conteneurs, la chute devrait dépasser les 6 % sur l’ensemble de l''année.', '2020-12-12', 1, 4);

INSERT INTO `articles` (`id`, `titre`, `resume`, `contenu`, `date_pub`, `id_auteur`, `id_categorie`) VALUES
(8, 'Comment les acteurs du cybercrime se professionnalisent','En plein essor, très lucrative, la criminalité sur Internet est passée de la petite délinquance au crime organisé. L’agilité et la rapidité d’action de ces organisations complexifient la traque et l’enquête.','LNom de code : opération DisrupTor. Objet : démanteler un réseau de trafiquants du dark Web, cet Internet de l’ombre, et mettre fin à leur commerce illicite. Au passage, saisir quelque 500 kg de drogues diverses (oxycodone, ecstasy, héroïne…), 63 armes à feu et 6,5 millions de dollars (5,5 millions d’euros) en cash et en cryptomonnaies. Et arrêter 179 trafiquants majoritairement aux Etats-Unis et en Allemagne, ainsi que dans plusieurs pays européens', '2020-11-12', 2, 4);





-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` int(11) NOT NULL,
  `id_compte_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auteurs`
--

INSERT INTO `auteurs` (`id`, `id_compte_users`) VALUES
(1, 1),
(2, 2),
(3,4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(25) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`) VALUES
(1, 'Technologie', 'Suivez les dernières actualités sur le sujet Technologies'),
(2, 'Sport', "Toute l'actualité sur le sport."),
(3, 'Jeux', 'Actu sur les jeux videos'),
(4, 'Economie', "L'économie internationale");

-- --------------------------------------------------------

--
-- Table structure for table `compte_users`
--

CREATE TABLE `compte_users` (
  `id` int(25) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compte_users`
--

INSERT INTO `compte_users` (`id`, `prenom`, `nom`, `email`, `username`, `password`, `profil`) VALUES
(1, 'Abdou', 'Ndiaye', 'abdou@gmail.com', 'abdou', 'ndiayeabdou', 'editeur'),
(2, 'Sokhna', 'Fall', 'sokhna@gmail.com', 'sokhna', 'fallsokhna', 'editeur'),
(3, 'Falilou', 'Gueye', 'falilou@gmail.com', 'falilou', 'falilougueye', 'admin'),
(4, 'Adja', 'Traore', 'awa@gmail.com', 'adja', 'awa', 'editeur'),
(5, 'Peinda', 'Fall', 'peinda@gmail.com', 'peind', 'peind', 'admin')
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_articles_categories` (`id_categorie`),
  ADD KEY `fk_articles_auteurs` (`id_auteur`) USING BTREE;

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compte_users`
--
ALTER TABLE `compte_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `compte_users`
--
ALTER TABLE `compte_users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_categories` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
