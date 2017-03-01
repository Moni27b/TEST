-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2017 at 11:37 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `HomePay`
--

-- --------------------------------------------------------

--
-- Table structure for table `CB`
--

CREATE TABLE `CB` (
  `id` int(11) NOT NULL,
  `Num_CB` varchar(16) NOT NULL,
  `Mois` varchar(255) NOT NULL,
  `Annee` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL,
  `Solde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `CB`
--

INSERT INTO `CB` (`id`, `Num_CB`, `Mois`, `Annee`, `id_client`, `Solde`) VALUES
(8, '1111222233334444', 'Avril', '2018', 8, 100),
(10, '9999888877776666', 'Avril', '2019', 8, 50);

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `id` int(11) NOT NULL,
  `N_Compte` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`id`, `N_Compte`, `Nom`, `Adresse`, `Password`) VALUES
(8, 123456, 'Jack', 'Cholet', 'JackJack'),
(9, 121234, 'Cecilia', 'Cherbourg', 'CeciliaCecilia');

-- --------------------------------------------------------

--
-- Table structure for table `Paiment`
--

CREATE TABLE `Paiment` (
  `idPaiment` int(11) NOT NULL,
  `Commercant` varchar(255) NOT NULL,
  `Montant` int(11) NOT NULL,
  `idCB` int(11) NOT NULL,
  `DateP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `Paiment`
--

INSERT INTO `Paiment` (`idPaiment`, `Commercant`, `Montant`, `idCB`, `DateP`) VALUES
(1, 'Auchan', 14, 8, '2017-01-27 10:05:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CB`
--
ALTER TABLE `CB`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Num_CB` (`Num_CB`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `Num_CB_2` (`Num_CB`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Paiment`
--
ALTER TABLE `Paiment`
  ADD PRIMARY KEY (`idPaiment`),
  ADD KEY `idCB` (`idCB`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CB`
--
ALTER TABLE `CB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `Paiment`
--
ALTER TABLE `Paiment`
  MODIFY `idPaiment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `CB`
--
ALTER TABLE `CB`
  ADD CONSTRAINT `cb_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `Client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Paiment`
--
ALTER TABLE `Paiment`
  ADD CONSTRAINT `paiment_ibfk_1` FOREIGN KEY (`idCB`) REFERENCES `CB` (`id`);
