-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 05:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `complainee_level` varchar(20) NOT NULL,
  `complainee` varchar(20) NOT NULL,
  `report_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `title`, `description`, `date`, `time`, `complainee_level`, `complainee`, `report_status`) VALUES
(12, 'I\'m supposed to pay extra for this? how was i supposed to know?', 'Extra charges are often added to tourist\'s accounts for things like if they spend more time in tour they will get extra money from us.phone calls they make using the phone , they consume on day trips.  tourists are not aware at the time that they will be charged extra for these items.', '2021-03-17', '05:35:11', 'tourist', 'sajith madushanka', 1),
(13, 'I cancelled tour package booking just before I was supposed to check in.why cannot get my money back', 'I cancelled tour package booking just before I was supposed to check in.The validity of such a complaint will depend on your official policies. Policies regarding booking cancellations should be made readily available to all tourists.', '2021-03-17', '06:33:20', 'tourist', 'sajith madushanka', 1),
(14, 'That is not what it says on your website', 'tourists often take the images/photos displayed on websites.this would be a situation where your tourists see a picture on your website of a hikkaduwa tour package, and become upset  when they arrive for their stay and the weather is all cloudy.', '2021-03-17', '06:35:39', 'tourist', 'sajith madushanka', 0),
(15, 'Tour guide\'s service is not available for sometime', 'when I want particular tour guide for my tour., he has advertisement  for tour package that i liked,but he is not available in your website. please check them and remove those guide advertisement.I blaim you.', '2021-03-17', '06:40:39', 'tourist', 'sajith madushanka', 1),
(17, 'I have not receive yet last month profit.', 'I have not receive yet last month profit.your site is not available for me And also I had to pay double payment in your system because your online payment platform error had occur.I tell about that for your staff, but they said only sorry and they said they will get money immediately to me.', '2021-03-17', '08:16:56', 'tourguide', 'sajini senarathne', 1),
(18, 'Tourist blaim for me without any evidence.', 'some tourist reviewed my profile after finished to tour.but they blaim for me and complaining about me but i had not made any mistakes for them.please check those tourists.please take the action. ', '2021-03-17', '08:22:43', 'tourguide', 'sajini senarathne', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
