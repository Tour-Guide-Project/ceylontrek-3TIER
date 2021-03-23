-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 09:57 AM
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
-- Table structure for table `activity_place`
--

CREATE TABLE `activity_place` (
  `activity_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_place`
--

INSERT INTO `activity_place` (`activity_id`, `place_id`) VALUES
(2, 1),
(2, 2),
(2, 4),
(2, 15),
(2, 28),
(4, 17),
(5, 1),
(7, 1),
(10, 17),
(10, 33),
(12, 18),
(13, 18),
(15, 3),
(15, 4),
(15, 28),
(18, 32),
(19, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_place`
--
ALTER TABLE `activity_place`
  ADD PRIMARY KEY (`activity_id`,`place_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_place`
--
ALTER TABLE `activity_place`
  ADD CONSTRAINT `activity_place_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`activity_id`),
  ADD CONSTRAINT `activity_place_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `smartsearch` (`place_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
