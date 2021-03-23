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
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activity_id` int(11) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `activity_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity_id`, `activity`, `activity_type`) VALUES
(1, 'Bicycle Tour', 'out'),
(2, 'Hiking', 'out'),
(3, 'Whale Watching', 'out'),
(4, 'Go-Cart Racing', 'out'),
(5, 'Deep Sea Fishing', 'out'),
(6, 'Golf', 'out'),
(7, 'Kite Surfing', 'out'),
(8, 'Surfing', 'out'),
(9, 'Rock Climbing', 'out'),
(10, 'Museums', 'in'),
(11, 'Spa', 'in'),
(12, 'Casino', 'in'),
(13, 'Billiards', 'in'),
(14, 'Tea Tasting', 'in'),
(15, 'Temples', 'in'),
(16, 'Mosques', 'in'),
(17, 'Churches', 'in'),
(18, 'Hindu Shrines', 'in'),
(19, 'Swimming', 'in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
