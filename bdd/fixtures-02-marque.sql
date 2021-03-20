-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2021 at 02:51 PM
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

INSERT INTO `marque` (`marque_id`, `nom`, `description`) VALUES
(1, 'Janod', 'jouets bois carton'),
(2, 'Mini-Kane', 'poupées'),
(3, 'Moulin Roty', 'univers enfant'),
(4, 'Sophie La Girafe', 'artisanal jouet unique bébé'),
(5, 'Mountain Buggy', 'poussette'),
(6, 'Le Biberon Français', 'biberons fabrication française'),
(7, 'KidsMe', 'repas biberon ustensile'),
(8, 'RedCastle', 'sommeil'),
(9, 'Eco by Naty', 'linge hygiène'),
(10, 'Doudou et Compagnie', 'doudou lapin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
