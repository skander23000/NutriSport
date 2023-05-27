-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 27 mai 2023 à 19:49
-- Version du serveur : 5.7.30
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `programmes_sportifs`
--

-- --------------------------------------------------------

--
-- Structure de la table `femme_maintien`
--

CREATE TABLE `femme_maintien` (
  `id` int(3) NOT NULL,
  `image` varchar(243) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `groupe_musculaire` varchar(30) NOT NULL,
  `series_et_repetitions` varchar(30) NOT NULL,
  `temps_de_repos` int(4) NOT NULL,
  `jour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `femme_maintien`
--

INSERT INTO `femme_maintien` (`id`, `image`, `exercise`, `groupe_musculaire`, `series_et_repetitions`, `temps_de_repos`, `jour`) VALUES
(14, 'frontend/img/Cable Chest Press.gif', 'Cable Chest Press', 'Chest', '3 sets of 10-15 repetitions', 90, 3),
(17, 'frontend/img/Car Drivers.gif', 'Car Drivers', 'Shoulders', '3 sets of 10-15 repetitions', 90, 1),
(19, 'frontend/img/Clean.gif', 'Clean', 'Hamstrings', '3 sets of 18 repetitions', 120, 3),
(24, 'frontend/img/Concentration Curls.gif', 'Concentration Curls', 'Biceps', '3 sets of 10-15 repetitions', 90, 1),
(25, 'frontend/img/Deadlift with Bands.gif', 'Deadlift with Bands', 'Lower Back', '3 sets of 10-15 repetitions', 90, 1),
(27, 'frontend/img/Decline Push-Up.gif', 'Decline Push-Up', 'Chest', '3 sets of 10-15 repetitions', 90, 2),
(34, 'frontend/img/EZ-Bar Skullcrusher.gif', 'EZ-Bar Skullcrusher', 'Triceps', '3 sets of 10-15 repetitions', 90, 3),
(37, 'frontend/img/Glute Ham Raise.gif', 'Glute Ham Raise', 'Hamstrings', '3 sets of 15 repetitions', 120, 2),
(49, 'frontend/img/Leverage High Row.gif', 'Leverage High Row', 'Middle Back', '3 sets of 10-15 repetitions', 90, 2),
(50, 'frontend/img/Leverage Iso Row.gif', 'Leverage Iso Row', 'Lats', '3 sets of 15 repetitions', 120, 1),
(58, 'frontend/img/Olympic Squat.gif', 'Olympic Squat', 'Quadriceps', '3 sets of 10-15 repetitions', 90, 2),
(80, 'frontend/img/Spell Caster.gif', 'Spell Caster', 'Abdominals', '3 sets of 15 repetitions', 90, 3);

-- --------------------------------------------------------

--
-- Structure de la table `femme_perte`
--

CREATE TABLE `femme_perte` (
  `id` int(3) NOT NULL,
  `image` varchar(243) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `groupe_musculaire` varchar(30) NOT NULL,
  `series_et_repetitions` varchar(30) NOT NULL,
  `temps_de_repos` int(5) NOT NULL,
  `jour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `femme_perte`
--

INSERT INTO `femme_perte` (`id`, `image`, `exercise`, `groupe_musculaire`, `series_et_repetitions`, `temps_de_repos`, `jour`) VALUES
(3, 'frontend/img/atlasStone.gif', 'Atlas Stones', 'Lower Back', '3 sets of 10 to 12 repetitions', 90, 1),
(12, 'frontend/img/Bottoms-up.gif', 'Bottoms-up', 'Abdominals', '3 sets of 15 repetitions', 75, 1),
(30, 'frontend/img/Drop Push.gif', 'Drop Push', 'Chest', '3 sets of 15 repetitions', 60, 3),
(44, 'frontend/img/Inverted Row.gif', 'Inverted Row', 'Middle Back', '3 sets of 10 to 12 repetitions', 90, 2),
(57, 'frontend/img/Neck Press.gif', 'Neck Press', 'Chest', '3 sets of 10 to 12 repetitions', 90, 1),
(59, 'frontend/img/One-Arm Side Laterals.gif', 'One-Arm Side Laterals', 'Shoulders', '3 sets of 10 to 12 repetitions', 90, 2),
(60, 'frontend/img/Parallel Bar Dip.gif', 'Parallel Bar Dip', 'Triceps', '3 sets of 10 to 12 repetitions', 75, 3),
(64, 'frontend/img/Power Clean.gif', 'Power Clean', 'Hamstrings', '3 sets of 15 repetitions', 75, 2),
(67, 'frontend/img/Preacher Curl.gif', 'Preacher Curl', 'Biceps', '3 sets of 10 to 12 repetitions', 90, 2),
(78, 'frontend/img/Shotgun Row.gif', 'Shotgun Row', 'Lats', '3 sets of 10 to 12 repetitions', 75, 3),
(79, 'frontend/img/Snatch.gif', 'Snatch', 'Quadriceps', '3 sets of 10 to 12 repetitions', 75, 3),
(83, 'frontend/img/Sumo Deadlift.gif', 'Sumo Deadlift', 'Hamstrings', '3 sets of 10 to 12 repetitions', 90, 1);

-- --------------------------------------------------------

--
-- Structure de la table `femme_prise`
--

CREATE TABLE `femme_prise` (
  `id` int(3) NOT NULL,
  `image` varchar(243) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `groupe_musculaire` varchar(30) NOT NULL,
  `series_et_repetitions` varchar(30) NOT NULL,
  `temps_de_repos` int(4) NOT NULL,
  `jour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `femme_prise`
--

INSERT INTO `femme_prise` (`id`, `image`, `exercise`, `groupe_musculaire`, `series_et_repetitions`, `temps_de_repos`, `jour`) VALUES
(10, 'frontend/img/Bodyweight Flyes.gif', 'Bodyweight Flyes', 'Chest', '2 sets of 15 repetitions', 75, 2),
(13, 'frontend/img/Box Squat.gif', 'Box Squat', 'Quadriceps', '2 sets of 12 to 15 repetitions', 75, 3),
(15, 'frontend/img/Cable Crossover.gif', 'Cable Crossover', 'Chest', '2 sets of 12 to 15 repetitions', 75, 1),
(24, 'frontend/img/Concentration Curl.gif', 'Concentration Curl', 'Biceps', '2 sets of 12 to 15 repetitions', 75, 2),
(37, 'frontend/img/Glute Ham Raise.gif', 'Glute Ham Raise', 'hamstrings', '2 sets of 12 to 15 repetitions', 75, 1),
(38, 'frontend/img/Good Morning.gif', 'Good Morning', 'Hamstrings', '2 sets of 15 repetitions', 30, 3),
(42, 'frontend/img/Hanging Pike.gif', 'Hanging Pike', 'Abdominals', '2 sets of 12 to 15 repetitions', 75, 3),
(55, 'frontend/img/Mixed Grip Chin.gif', 'Mixed Grip Chin', 'Middle Back', '2 sets of 12 to 15 repetitions', 75, 2),
(65, 'frontend/img/Power Partials.gif', 'Power Partials', 'Shoulders', '2 sets of 15 repetitions', 45, 1),
(72, 'frontend/img/Rack pulls.gif', 'Rack pulls', 'Lower Back', '2 sets of 12 to 15 repetitions', 75, 1),
(76, 'frontend/img/Rope Climb.gif', 'Rope Climb', 'Lats', '2 sets of 12 to 15 repetitions', 75, 2),
(77, 'frontend/img/Seated Triceps Press.gif', 'Seated Triceps Press', 'Triceps', '2 sets of 12 to 15 repetitions', 75, 3);

-- --------------------------------------------------------

--
-- Structure de la table `homme_maintien`
--

CREATE TABLE `homme_maintien` (
  `id` int(3) NOT NULL,
  `image` varchar(243) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `groupe_musculaire` varchar(30) NOT NULL,
  `series_et_repetitions` varchar(30) NOT NULL,
  `temps_de_repos` int(4) NOT NULL,
  `jour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `homme_maintien`
--

INSERT INTO `homme_maintien` (`id`, `image`, `exercise`, `groupe_musculaire`, `series_et_repetitions`, `temps_de_repos`, `jour`) VALUES
(9, 'frontend/img/Bench Dips.gif', 'Bench Dips', 'Triceps', '3 sets of 8-12 repetitions', 60, 3),
(11, 'frontend/img/Bodyweight Lunge.gif', 'Bodyweight Lunge', 'Quadriceps', '3 sets of 15 repetitions', 90, 3),
(30, 'frontend/img/Drop Push.gif', 'Drop Push', 'Chest', '3 sets of 8-12 repetitions', 60, 2),
(32, 'frontend/img/dumbbells Squat.gif', 'dumbbells Squat', 'Quadriceps', '3 sets of 8-12 repetitions', 60, 1),
(36, 'frontend/img/Front Plate Raise.gif', 'Front Plate Raise', 'Shoulders', '3 sets of 8-12 repetitions', 60, 3),
(39, 'frontend/img/Hammer Curls.gif', 'Hammer Curls', 'Biceps', '3 sets of 15 repetitions', 90, 2),
(45, 'frontend/img/JM Press.gif', 'JM Press', 'Triceps', '3 sets of 8-12 repetitions', 60, 1),
(46, 'frontend/img/Keg Load.gif', 'Keg Load', 'Lower Back', '3 sets of 15 repetitions', 90, 1),
(47, 'frontend/img/Kipping Muscle Up.gif', 'Kipping Muscle Up', 'Lats', '3 sets of 15 repetitions', 90, 2),
(53, 'frontend/img/Man Maker.gif', 'Man Maker', 'Middle Back', '3 sets of 8-12 repetitions', 60, 2),
(81, 'frontend/img/Spider Crawl.gif', 'Spider Crawl', 'Abdominals', '3 sets of 8-12 repetitions', 60, 1),
(83, 'frontend/img/Sumo Deadlift.gif', 'Sumo Deadlift', 'Hamstrings', '3 sets of 8-12 repetitions', 60, 3);

-- --------------------------------------------------------

--
-- Structure de la table `homme_perte`
--

CREATE TABLE `homme_perte` (
  `id` int(3) NOT NULL,
  `image` varchar(243) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `groupe_musculaire` varchar(30) NOT NULL,
  `series_et_repetitions` varchar(30) NOT NULL,
  `temps_de_repos` int(4) NOT NULL,
  `jour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `homme_perte`
--

INSERT INTO `homme_perte` (`id`, `image`, `exercise`, `groupe_musculaire`, `series_et_repetitions`, `temps_de_repos`, `jour`) VALUES
(3, 'frontend/img/atlasStone.gif', 'Atlas Stones', 'Lower Back', '4 sets of 20 repetitions', 60, 3),
(9, 'frontend/img/Bench Dips.gif', 'Bench Dips', 'Triceps', '4 sets of 12 to 15 repetitions', 90, 3),
(18, 'frontend/img/Chin-up.gif', 'Chin-up', 'Lats', '4 sets of 20 repetitions', 60, 1),
(20, 'frontend/img/Clean and Jerk.gif', 'Clean and Jerk', 'Shoulders', '4 sets of 12 to 15 repetitions', 90, 2),
(22, 'frontend/img/Clean Deadlift.gif', 'Clean Deadlift', 'Hamstrings', '4 sets of 12 to 15 repetitions', 90, 2),
(23, 'frontend/img/cocoons.gif', 'cocoons', 'Abdominals', '4 sets of 12 to 15 repetitions', 90, 1),
(28, 'frontend/img/Deficit Deadlift.gif', 'Deficit Deadlift', 'Lower Back', '4 sets of 12 to 15 repetitions', 90, 1),
(33, 'frontend/img/EZ-Bar Curl.gif', 'EZ-Bar Curl', 'Biceps', '4 sets of 12 to 15 repetitions', 90, 1),
(51, 'frontend/img/Lying T-Bar Row.gif', 'Lying T-Bar Row', 'Middle Back', '4 sets of 15 repetitions', 90, 3),
(57, 'frontend/img/Neck press.gif', 'Neck press', 'Chest', '4 sets of 20 repetitions', 60, 2),
(84, 'frontend/img/Suspended Row.gif', 'Suspended Row', 'Middle Back', '4 sets of 12 to 15 repetitions', 90, 2),
(86, 'frontend/img/Tire Flip.gif', 'Tire Flip', 'Quadriceps', '4 sets of 12 to 15 repetitions', 90, 3);

-- --------------------------------------------------------

--
-- Structure de la table `homme_prise`
--

CREATE TABLE `homme_prise` (
  `id` int(3) NOT NULL,
  `image` varchar(243) NOT NULL,
  `exercise` varchar(30) NOT NULL,
  `groupe_musculaire` varchar(30) NOT NULL,
  `series_et_repetitions` varchar(30) NOT NULL,
  `temps_de_repos` int(4) NOT NULL,
  `jour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `homme_prise`
--

INSERT INTO `homme_prise` (`id`, `image`, `exercise`, `groupe_musculaire`, `series_et_repetitions`, `temps_de_repos`, `jour`) VALUES
(1, 'frontend/img/Ab Roller.gif', 'Ab Roller', 'Abdominals', '3 sets of 20 repetitions', 30, 1),
(4, 'frontend/img/Axle Deadlift.gif', 'Axle Deadlift', 'Lower Back', '3 sets of 15 repetitions', 60, 3),
(5, 'frontend/img/Ball Leg Curl.gif', 'Ball Leg Curl', 'Hamstrings', '3 sets of 15 repetitions', 60, 3),
(29, 'frontend/img/Dip Machine.gif', 'Dip Machine', 'Triceps', '3 sets of 15 repetitions', 60, 1),
(36, 'frontend/img/Front Plate Raise.gif', 'Front Plate Raise', 'Shoulders', '3 sets of 15 repetitions', 60, 1),
(39, 'frontend/img/Hammer Curls.gif', 'Hammer Curls', 'Biceps', '3 sets of 15 repetitions', 60, 2),
(48, 'frontend/img/Leg Press.gif', 'Leg Press', 'Quadriceps', '3 sets of 15 repetitions', 60, 3),
(56, 'frontend/img/Muscle Up.gif', 'Muscle Up', 'Lats', '3 sets of 15 repetitions', 60, 2),
(62, 'frontend/img/Plank.gif', 'Plank', 'Abdominals', '3 sets of 20 repetitions', 30, 2),
(68, 'frontend/img/pullups.gif', 'pullups', 'Lats', '3 sets of 15 repetitions', 60, 1),
(70, 'frontend/img/Pushups.gif', 'Pushups', 'Chest', '3 sets of 15 repetitions', 60, 3),
(85, 'frontend/img/T-Bar Row.gif', 'T-Bar Row', 'Middle Back', '4 sets of 15 repetitions', 60, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `femme_maintien`
--
ALTER TABLE `femme_maintien`
  ADD PRIMARY KEY (`exercise`),
  ADD KEY `fk_femme_maintien_exercices` (`id`);

--
-- Index pour la table `femme_perte`
--
ALTER TABLE `femme_perte`
  ADD PRIMARY KEY (`exercise`),
  ADD KEY `fk_femme_perte_exercices` (`id`);

--
-- Index pour la table `femme_prise`
--
ALTER TABLE `femme_prise`
  ADD PRIMARY KEY (`exercise`),
  ADD KEY `fk_femme_prise_exercices` (`id`);

--
-- Index pour la table `homme_maintien`
--
ALTER TABLE `homme_maintien`
  ADD PRIMARY KEY (`exercise`),
  ADD KEY `fk_homme_maintien_exercices` (`id`);

--
-- Index pour la table `homme_perte`
--
ALTER TABLE `homme_perte`
  ADD PRIMARY KEY (`exercise`),
  ADD KEY `fk_homme_perte_exercices` (`id`);

--
-- Index pour la table `homme_prise`
--
ALTER TABLE `homme_prise`
  ADD PRIMARY KEY (`exercise`),
  ADD KEY `fk_homme_prise_exercices` (`id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `femme_maintien`
--
ALTER TABLE `femme_maintien`
  ADD CONSTRAINT `fk_femme_maintien_exercices` FOREIGN KEY (`id`) REFERENCES `main_test`.`exercices` (`id`);

--
-- Contraintes pour la table `femme_perte`
--
ALTER TABLE `femme_perte`
  ADD CONSTRAINT `fk_femme_perte_exercices` FOREIGN KEY (`id`) REFERENCES `main_test`.`exercices` (`id`);

--
-- Contraintes pour la table `femme_prise`
--
ALTER TABLE `femme_prise`
  ADD CONSTRAINT `fk_femme_prise_exercices` FOREIGN KEY (`id`) REFERENCES `main_test`.`exercices` (`id`);

--
-- Contraintes pour la table `homme_maintien`
--
ALTER TABLE `homme_maintien`
  ADD CONSTRAINT `fk_homme_maintien_exercices` FOREIGN KEY (`id`) REFERENCES `main_test`.`exercices` (`id`);

--
-- Contraintes pour la table `homme_perte`
--
ALTER TABLE `homme_perte`
  ADD CONSTRAINT `fk_homme_perte_exercices` FOREIGN KEY (`id`) REFERENCES `main_test`.`exercices` (`id`);

--
-- Contraintes pour la table `homme_prise`
--
ALTER TABLE `homme_prise`
  ADD CONSTRAINT `fk_homme_prise_exercices` FOREIGN KEY (`id`) REFERENCES `main_test`.`exercices` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
