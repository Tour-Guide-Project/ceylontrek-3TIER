-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 07:51 PM
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
-- Table structure for table `tour_package`
--

CREATE TABLE `tour_package` (
  `package_id` int(10) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `pdescription` varchar(2500) NOT NULL,
  `display_price` varchar(10) NOT NULL,
  `day_no` varchar(10) NOT NULL,
  `members` varchar(10) NOT NULL,
  `destinations` varchar(10) NOT NULL,
  `imgpath1` varchar(100) NOT NULL,
  `imgpath2` varchar(100) NOT NULL,
  `imgpath3` varchar(100) NOT NULL,
  `imgpath4` varchar(100) NOT NULL,
  `availability` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_package`
--

INSERT INTO `tour_package` (`package_id`, `guide_id`, `package_name`, `pdescription`, `display_price`, `day_no`, `members`, `destinations`, `imgpath1`, `imgpath2`, `imgpath3`, `imgpath4`, `availability`) VALUES
(1, 44, 'My Best of Colombo ', 'I\'m an experienced Tour Package who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me as your travel Package and friend from Sri Lanka.', '20000', '5', '10', 'Kelaniya', '../resources/images/packages/44ella.jpg', '../resources/img/packages/hanthana.jpg', '../resources/images/packages/44ella.jpg', '../resources/img/SmartSearchResult/default.jpg', 1),
(2, 44, 'My best of Down-South........', 'I\'m an experienced Tour Package who has been working in the industry for almost a decade. I have completed more than 250 local tours and more than 100 international tours. With reasonable prices and high quality service you will never regret choosing me as your travel Package and friend from Sri Lanka.', '25000', '6', '15', 'Hambantota', '../resources/img/packages/hanthana.jpg', '../resources/img/packages/ella.jpg', '../resources/img/packages/pic1.jpg', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour_package`
--
ALTER TABLE `tour_package`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour_package`
--
ALTER TABLE `tour_package`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
