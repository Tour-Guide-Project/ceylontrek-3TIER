-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 07:23 AM
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
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notifications` varchar(100) NOT NULL,
  `notification_level` varchar(20) NOT NULL,
  `seen_state` int(1) NOT NULL,
  `time` varchar(10) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `notifications`, `notification_level`, `seen_state`, `time`, `path`, `user_id`, `icon`) VALUES
(101, 'request a tour', 'you can add a post for requesting tour guide as to wish', 'tourist', 0, '6:0', '/ceylontrek-3tier/view/tour_request_post.php', 41, 'fa fa-pencil-square-o'),
(102, 'request a tour', 'you can add a post for requesting tour guide as to wish', 'tourist', 0, '6:0', '/ceylontrek-3tier/view/tour_request_post.php', 51, 'fa fa-pencil-square-o'),
(103, 'request a tour', 'you can add a post for requesting tour guide as to wish', 'tourist', 0, '6:0', '/ceylontrek-3tier/view/tour_request_post.php', 52, 'fa fa-pencil-square-o'),
(104, 'request a tour', 'you can add a post for requesting tour guide as to wish', 'tourist', 0, '6:0', '/ceylontrek-3tier/view/tour_request_post.php', 55, 'fa fa-pencil-square-o'),
(105, 'request a tour', 'you can add a post for requesting tour guide as to wish', 'tourist', 0, '6:0', '/ceylontrek-3tier/view/tour_request_post.php', 56, 'fa fa-pencil-square-o'),
(106, 'smart search', 'we have updated  new places for hiking and camping, you can check it', 'tourist', 1, '6:3', '/ceylontrek-3tier/view/SmartSearchResultsPage.php', 41, 'fa fa-picture-o'),
(107, 'smart search', 'we have updated  new places for hiking and camping, you can check it', 'tourist', 0, '6:3', '/ceylontrek-3tier/view/SmartSearchResultsPage.php', 51, 'fa fa-picture-o'),
(108, 'smart search', 'we have updated  new places for hiking and camping, you can check it', 'tourist', 0, '6:3', '/ceylontrek-3tier/view/SmartSearchResultsPage.php', 52, 'fa fa-picture-o'),
(109, 'smart search', 'we have updated  new places for hiking and camping, you can check it', 'tourist', 0, '6:3', '/ceylontrek-3tier/view/SmartSearchResultsPage.php', 55, 'fa fa-picture-o'),
(110, 'smart search', 'we have updated  new places for hiking and camping, you can check it', 'tourist', 0, '6:3', '/ceylontrek-3tier/view/SmartSearchResultsPage.php', 56, 'fa fa-picture-o'),
(111, 'wishes', 'happy new year', 'tourist', 1, '6:5', '/ceylontrek-3tier/view/touristDashboard.php', 41, 'fa fa-eercast'),
(112, 'wishes', 'happy new year', 'tourist', 0, '6:5', '/ceylontrek-3tier/view/touristDashboard.php', 51, 'fa fa-eercast'),
(113, 'wishes', 'happy new year', 'tourist', 0, '6:5', '/ceylontrek-3tier/view/touristDashboard.php', 52, 'fa fa-eercast'),
(114, 'wishes', 'happy new year', 'tourist', 0, '6:5', '/ceylontrek-3tier/view/touristDashboard.php', 55, 'fa fa-eercast'),
(115, 'wishes', 'happy new year', 'tourist', 0, '6:5', '/ceylontrek-3tier/view/touristDashboard.php', 56, 'fa fa-eercast'),
(116, 'request a tour', 'you can see new posts from tourists please check them', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/tour_request_post.php', 15, 'fa fa-pencil-square-o'),
(117, 'request a tour', 'you can see new posts from tourists please check them', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/tour_request_post.php', 32, 'fa fa-pencil-square-o'),
(118, 'request a tour', 'you can see new posts from tourists please check them', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/tour_request_post.php', 34, 'fa fa-pencil-square-o'),
(119, 'request a tour', 'you can see new posts from tourists please check them', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/tour_request_post.php', 40, 'fa fa-pencil-square-o'),
(120, 'request a tour', 'you can see new posts from tourists please check them', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/tour_request_post.php', 43, 'fa fa-pencil-square-o'),
(121, 'request a tour', 'you can see new posts from tourists please check them', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/tour_request_post.php', 45, 'fa fa-pencil-square-o'),
(122, 'wishes', 'happy christmas day!', 'tour-guide', 1, '6:12', '/ceylontrek-3tier/view/guideDashboard.php', 15, 'fa fa-eercast'),
(123, 'wishes', 'happy christmas day!', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/guideDashboard.php', 32, 'fa fa-eercast'),
(124, 'wishes', 'happy christmas day!', 'tour-guide', 1, '6:12', '/ceylontrek-3tier/view/guideDashboard.php', 34, 'fa fa-eercast'),
(125, 'wishes', 'happy christmas day!', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/guideDashboard.php', 40, 'fa fa-eercast'),
(126, 'wishes', 'happy christmas day!', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/guideDashboard.php', 43, 'fa fa-eercast'),
(127, 'wishes', 'happy christmas day!', 'tour-guide', 0, '6:12', '/ceylontrek-3tier/view/guideDashboard.php', 45, 'fa fa-eercast');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
