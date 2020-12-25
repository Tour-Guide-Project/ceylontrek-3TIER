-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 04:05 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdbnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `smartsearch`
--

CREATE TABLE `smartsearch` (
  `activities` varchar(100) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `long_description` varchar(1000) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartsearch`
--

INSERT INTO `smartsearch` (`activities`, `place_name`, `long_description`, `short_description`, `image_path`) VALUES
('Deep Sea Fishing', 'Hikkaduwa', 'Hikkaduwa is a long beautiful beach providing excellent opportunity for surfing, swimming and snorkeling. This was replaced by tourism when its golden sandy beaches were discovered. Hikkaduwa is a small town on the south coast of Sri Lanka located in the Southern Province, about 17 km (11 mi) north-west of Galle and 98 km (61 mi) south of Colombo. Hikkaduwa Coral Sanctuary - located a few hundred metres offshore. The sanctuary has approximately seventy varieties of multi-coloured corals.Hikkaduwa is one of the most beautiful place in Sri Lanka.', 'Hikkaduwa is a long beautiful beach providing excellent opportunity for surfing, swimming and snorke', '../resources/img/SmartSearchResult/hik.jpg'),
('Hiking', 'Horton Plains', 'Horton Plains National Park is a protected area in the central highlands of Sri Lanka and is covered by montane grassland and cloud forest.', 'Horton Plains National Park is a protected area in the central highlands of Sri Lanka and is covered by montane grassland and cloud forest.', '../resources/img/SmartSearchResult/hortan.jpg'),
('Temples', 'Temple of the Tooth', 'Sri Dalada Maligawa or the Temple of the Sacred Tooth Relic is a Buddhist temple in the city of Kandy, Sri Lanka.', 'Sri Dalada Maligawa or the Temple of the Sacred Tooth Relic is a Buddhist temple in the city of Kandy, Sri Lanka.', '../resources/img/SmartSearchResult/temple.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smartsearch`
--
ALTER TABLE `smartsearch`
  ADD PRIMARY KEY (`place_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
