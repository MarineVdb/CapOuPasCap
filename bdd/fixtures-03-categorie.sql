-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2021 at 08:57 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `copc`
--

-- --------------------------------------------------------

INSERT INTO `categorie` (`categorie_id`, `nom`, `categorie`) VALUES
(1, 'Puériculture', NULL),
(2, 'Eveil et Jeux', NULL),
(3, 'Peluches et doudous', NULL),
(4, 'Décoration', NULL),
(5, 'Mode et accessoires', NULL),
(6, 'Cadeaux à personnaliser', NULL),
(7, 'Linge de lit', 1),
(8, 'Linge de lit', 1),
(9, 'Tétines et attaches-tétines', 1),
(10, 'Sortie de bain', 1),
(11, 'Protège-carnets de santé', 1),
(12, 'Bavoir et Langes', 1),
(13, 'Couvertures et plaids', 1),
(14, 'Toilettes et soins de bébé', 1),
(15, 'Sacs à langer, Sacs week-end', 1),
(16, 'Repas', 1),
(17, 'Hochets, Anneaux de dentition', 2),
(18, 'Jeux sensoriels', 2),
(19, 'Jeux éducatifs, Jeux de société, Puzzles', 2),
(20, 'Jouets en bois', 2),
(21, 'Jeux d\'imitation', 2),
(22, 'Jeux de bain', 2),
(23, 'Loisirs créatifs', 2),
(24, 'Garages, Voitures', 2),
(25, 'Poupées, Poupons', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`categorie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
