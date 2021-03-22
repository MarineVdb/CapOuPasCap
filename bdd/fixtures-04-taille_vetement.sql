-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2021 at 09:01 AM
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

INSERT INTO `taille_vetement` (`taille_vetement_id`, `nom`) VALUES
(1, 'XXS'),
(2, 'XS'),
(3, 'S'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, 'Naissance'),
(8, '1 mois'),
(9, '3 mois'),
(10, '6 mois'),
(11, '9 mois'),
(12, '12 mois'),
(13, '18 mois'),
(14, '24 mois'),
(15, '3 ans'),
(16, '4 ans'),
(17, '5 ans'),
(18, '6 ans'),
(19, '7 ans'),
(20, '8 ans'),
(21, '9 ans'),
(22, '10 ans'),
(23, '12 ans'),
(24, '14 ans');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
