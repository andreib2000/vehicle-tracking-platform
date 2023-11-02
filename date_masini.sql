-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2023 at 07:48 PM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_masini`
--

CREATE TABLE `date_masini` (
  `id` int NOT NULL,
  `tip_autovehicul` varchar(16) NOT NULL,
  `marca` varchar(32) NOT NULL,
  `model` varchar(32) NOT NULL,
  `date_tehnice` varchar(2048) NOT NULL,
  `alte_caracteristici` varchar(2048) NOT NULL,
  `numar_de_inmatriculare` varchar(12) NOT NULL,
  `data_inmatriculare` date NOT NULL,
  `proprietar` varchar(32) NOT NULL,
  `data_ultim_itp` date NOT NULL,
  `imagine` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `date_masini`
--

INSERT INTO `date_masini` (`id`, `tip_autovehicul`, `marca`, `model`, `date_tehnice`, `alte_caracteristici`, `numar_de_inmatriculare`, `data_inmatriculare`, `proprietar`, `data_ultim_itp`, `imagine`) VALUES
(1, 'autoturism', 'DACIA', 'DUSTER', 'motor: 1.5 (115CP), cuplu: 260Nm (1750-2750 rot/min), numar cilindrii: 4', 'culoare: rosu', 'DJ-08-CCC', '2023-11-01', 'B. ANDREI', '2023-11-01', 'imgs/image242.jpg'),
(3, 'autoturism', 'DACIA', 'DUSTER', 'motor: 1.5 (115CP), cuplu: 260Nm (1750-2750 rot/min), numar cilindrii: 4', 'culoare: rosu', 'DJ-08-CCC', '2023-11-01', 'B. ANDREI', '2023-11-01', 'imgs/image242.jpg'),
(4, 'autoturism', 'DACIA', 'DUSTER', 'motor: 1.5 (115CP), cuplu: 260Nm (1750-2750 rot/min), numar cilindrii: 4', 'culoare: rosu', 'DJ-08-CCC', '2023-11-01', 'B. ANDREI', '2023-11-01', 'imgs/image242.jpg'),
(5, 'autoturism', 'DACIA', 'DUSTER', 'motor: 1.5 (115CP), cuplu: 260Nm (1750-2750 rot/min), numar cilindrii: 4', 'culoare: rosu', 'DJ-08-CCC', '2023-11-01', 'B. ANDREI', '2023-11-01', 'imgs/image242.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_masini`
--
ALTER TABLE `date_masini`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_masini`
--
ALTER TABLE `date_masini`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
