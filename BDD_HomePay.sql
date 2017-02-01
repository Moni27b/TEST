-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2017 at 11:14 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `PFE_Tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `Mesure`
--

CREATE TABLE `Mesure` (
  `Id_Mesure` int(11) NOT NULL,
  `Date_Mesure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Adresse_Routeur` varchar(255) NOT NULL,
  `Mode` varchar(20) NOT NULL,
  `Id_Tracker` int(11) NOT NULL,
  `Id_Routeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `Mesure`
--

INSERT INTO `Mesure` (`Id_Mesure`, `Date_Mesure`, `Adresse_Routeur`, `Mode`, `Id_Tracker`, `Id_Routeur`) VALUES
(11, '2016-12-08 15:36:01', '77:77:77:77', 'ON', 2, 5),
(12, '2016-12-08 16:58:29', '77:77:77:77', 'OFF', 2, 5),
(17, '2016-12-13 18:29:34', '66:66:66:66', 'ON', 1, 4),
(18, '2016-12-13 20:44:55', '66:66:66:66', 'OFF', 1, 4),
(24, '2017-01-27 14:07:06', '55:55:55:55', 'ON', 1, 3),
(25, '2017-01-27 15:45:09', '55:55:55:55', 'OFF', 1, 3),
(26, '2017-01-28 12:51:52', '33:33:33:33:33', 'ON', 3, 1),
(27, '2017-01-28 12:53:15', '44:44:44:44', 'ON', 2, 2),
(28, '2017-01-28 12:53:50', '44:44:44:44', 'ON', 1, 2),
(29, '2017-01-28 16:26:51', '33:33:33:33:33', 'OFF', 3, 1),
(30, '2017-01-28 17:33:09', '44:44:44:44', 'OFF', 2, 2),
(31, '2017-01-28 18:49:12', '44:44:44:44', 'OFF', 1, 2),
(32, '2017-01-29 12:06:11', '33:33:33:33:33', 'ON', 3, 1),
(33, '2017-01-29 16:17:16', '44:44:44:44', 'ON', 2, 2),
(34, '2017-01-29 16:17:32', '33:33:33:33:33', 'OFF', 3, 1),
(35, '2017-01-29 16:17:55', '44:44:44:44', 'ON', 1, 2),
(38, '2017-01-29 17:44:10', '44:44:44:44', 'OFF', 2, 2),
(39, '2017-01-29 22:00:00', '44:44:44:44', 'OFF', 1, 2),
(40, '2017-01-30 14:29:02', '33:33:33:33:33', 'ON', 3, 1),
(41, '2017-01-30 19:55:59', '33:33:33:33:33', 'OFF', 3, 1),
(42, '2016-12-13 07:00:00', '55:55:55:55', 'ON', 3, 3),
(43, '2016-12-13 18:00:00', '55:55:55:55', 'OFF', 3, 3),
(44, '2017-01-10 06:11:00', '66:66:66:66', 'ON', 2, 4),
(45, '2017-01-10 17:39:00', '66:66:66:66', 'OFF', 2, 4),
(46, '2017-01-03 09:13:00', '77:77:77:77', 'ON', 3, 5),
(47, '2017-01-03 15:20:00', '77:77:77:77', 'OFF', 3, 5),
(48, '2017-01-03 16:11:00', '44:44:44:44', 'ON', 3, 2),
(50, '2017-01-03 18:08:00', '44:44:44:44', 'OFF', 3, 2),
(51, '2017-01-30 08:19:12', '77:77:77:77', 'ON', 2, 5),
(52, '2017-01-30 12:38:25', '77:77:77:77', 'OFF', 2, 5),
(53, '2016-12-20 09:00:00', '55:55:55:55', 'ON', 5, 3),
(54, '2016-12-20 15:00:00', '55:55:55:55', 'OFF', 5, 3),
(55, '2017-01-05 07:00:00', '33:33:33:33:33', 'ON', 5, 1),
(56, '2017-01-05 13:19:00', '33:33:33:33:33', 'OFF', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Mesure`
--
ALTER TABLE `Mesure`
  ADD PRIMARY KEY (`Id_Mesure`),
  ADD KEY `Id_Tracker` (`Id_Tracker`),
  ADD KEY `Id_Routeur` (`Id_Routeur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Mesure`
--
ALTER TABLE `Mesure`
  MODIFY `Id_Mesure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Mesure`
--
ALTER TABLE `Mesure`
  ADD CONSTRAINT `mesure_ibfk_1` FOREIGN KEY (`Id_Tracker`) REFERENCES `Tracker` (`Id_Tracker`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesure_ibfk_2` FOREIGN KEY (`Id_Routeur`) REFERENCES `Routeur` (`Id_Routeur`) ON DELETE CASCADE ON UPDATE CASCADE;
