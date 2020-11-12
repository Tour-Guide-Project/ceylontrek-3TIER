-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 10:36 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`, `image_path`) VALUES
(12, 'kavindya', 'devindi', 'kavindyadewindi12345678@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'female', 'ketanwila,Akuressa,Matara,Sri lanka', '0875332225', 'admin', 'ddad56c9a4e71f3df8b74ad6a8a8391024cfe7eb7f8d9bb0fef7622ccc5d72863e22c43bb1c9230bad8a1a27649d28bdc605', '../resources/images/2019-05-30-16-54-20-994.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `custom_booking_id` varchar(10) NOT NULL,
  `package_booking_id` varchar(10) NOT NULL,
  `guide_booking_id` varchar(10) NOT NULL,
  `has_paid_fine` char(1) NOT NULL,
  `has_fine` char(1) NOT NULL,
  `fine` decimal(10,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custom_tour_request_book`
--

CREATE TABLE `custom_tour_request_book` (
  `custom_booking_id` varchar(10) NOT NULL,
  `guide_id` int(10) NOT NULL,
  `tourist_id` int(10) NOT NULL,
  `post_id` varchar(50) NOT NULL,
  `is_paid_fee` char(1) NOT NULL,
  `date` date NOT NULL,
  `final_price` decimal(10,5) NOT NULL,
  `system_fee` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custom_tour_request_post`
--

CREATE TABLE `custom_tour_request_post` (
  `post_id` varchar(10) NOT NULL,
  `tourist_id` int(10) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `places` varchar(50) NOT NULL,
  `day_no` date NOT NULL,
  `no_of_days` int(10) NOT NULL,
  `requested_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `tourist_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guide_book`
--

CREATE TABLE `guide_book` (
  `guide_booking_id` varchar(10) NOT NULL,
  `guide_id` int(10) NOT NULL,
  `tourist_id` int(10) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `place_to_visit` varchar(50) NOT NULL,
  `day_no` date NOT NULL,
  `is_paid_fee` char(1) NOT NULL,
  `start_date` date NOT NULL,
  `final_price` decimal(10,5) NOT NULL,
  `system_fee` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guide_mod_chat`
--

CREATE TABLE `guide_mod_chat` (
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `guide_id` int(10) NOT NULL,
  `moderator_id` int(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guide_tourist_chat`
--

CREATE TABLE `guide_tourist_chat` (
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `guide_id` int(10) NOT NULL,
  `tourist_id` int(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`, `image_path`) VALUES
(13, 'Lakshan', 'Amal', 'amal@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'male', 'galle,srilanka', '0875332221', 'moderator', '09b12c5b4b6c52291534514b6712242b63a44b09b3e7732b61f6c8d91f5a92b9863519a13a53d82bd5f85d76f36ab03d2730', '../resources/images/IMG_20181219_143750349.jpg'),
(15, 'cds', 'senarathne', 'amal1@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'male', 'galle,srilanka', '0875332221', 'moderator', '8a3ded62f6af4b639bcf1f79834d3b998daed7e775c9918e0f56cfe182ef6c7d2d00f83711f17d98f88d8ce495deb5bead77', ''),
(16, 'cds', 'senarathne', 'kavindya3@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'female', 'Maliduwa,Akuressa,Matara', '8780660644', 'moderator', '7519dd75b3219d8c2ea26f08f0b28f0ae422eb020bc68694198580c70b5a02012560d84262bef9b5088b87b4ed0280284474', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_calendar`
--

CREATE TABLE `personal_calendar` (
  `custom_booking_id` varchar(10) NOT NULL,
  `package_booking_id` varchar(10) NOT NULL,
  `guide_booking_id` varchar(10) NOT NULL,
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `guide_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smartcalendar`
--

CREATE TABLE `smartcalendar` (
  `date` date NOT NULL,
  `festivals` varchar(50) NOT NULL,
  `holidays` varchar(50) NOT NULL,
  `special_events` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smartsearch`
--

CREATE TABLE `smartsearch` (
  `activities` varchar(50) NOT NULL,
  `places` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `token` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`, `image_path`) VALUES
(15, 'sajini', 'senarathne', 'sajini@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'female', 'Hambanthota,Srilanka', '0765376578', 'tourguide', '3f57d6cf47020a77b4cda95dd51c3cc79b7e1133ab66ef97821dc2c85895d89ad3c7cc47efe1cc7c052e5ea1a750fbceb07c', '../resources/images/00000PORTRAIT_00000_BURST20190817151002020.jpg'),
(24, 'laki', 'Ahinsa', 'kavindya@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'female', 'ketanwila,Akuressa', '0764523678', 'tourguide', '0fb4ac96bd6134a3a0f5d6ab5514989bb9ec61fdbeaf13a5f2863e6995e984d65014ec9c00c258095e4f6d95d71f494d1610', '');

-- --------------------------------------------------------

--
-- Table structure for table `tourguide_others`
--

CREATE TABLE `tourguide_others` (
  `guide_id` int(10) NOT NULL,
  `fluent_languages` varchar(50) NOT NULL,
  `government_reg_no` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`, `image_path`) VALUES
(41, 'sajith', 'madushanka', 'sajith@gmail.com', '1a288fe9ef5fb2f4671f1473436c8f6243112a71', 'male', 'Maliduwa,Akuressa,Matara', '0764523678', 'tourist', '864838c4d55950357ff0509149d0dce51b11d27b21a965468cae18ef2d2145e64707b93c5f9248bd96b9f8eb2f0400db18fc', '../resources/images/IMG-20170824-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_mod_chat`
--

CREATE TABLE `tourist_mod_chat` (
  `time` datetime NOT NULL,
  `date` date NOT NULL,
  `tourist_id` int(10) NOT NULL,
  `moderator_id` int(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourist_others`
--

CREATE TABLE `tourist_others` (
  `tourist_id` int(10) NOT NULL,
  `fluent_languages` varchar(50) NOT NULL,
  `prefered_languages` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `package_id` varchar(10) NOT NULL,
  `guide_id` int(10) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `place_to_visit` varchar(50) NOT NULL,
  `display_price` decimal(10,5) NOT NULL,
  `day_no` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package_book`
--

CREATE TABLE `tour_package_book` (
  `package_booking_id` varchar(10) NOT NULL,
  `guide_id` int(10) NOT NULL,
  `tourist_id` int(10) NOT NULL,
  `package_id` varchar(10) NOT NULL,
  `is_paid_fee` char(1) NOT NULL,
  `start_date` date NOT NULL,
  `final_price` decimal(10,5) NOT NULL,
  `system_fee` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_reg_no` int(10) NOT NULL,
  `guide_id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `license_no` varchar(50) NOT NULL,
  `no_of_seats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`custom_booking_id`,`package_booking_id`,`guide_booking_id`),
  ADD KEY `package_booking_id` (`package_booking_id`),
  ADD KEY `guide_booking_id` (`guide_booking_id`);

--
-- Indexes for table `custom_tour_request_book`
--
ALTER TABLE `custom_tour_request_book`
  ADD PRIMARY KEY (`custom_booking_id`,`guide_id`,`tourist_id`,`post_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `tourist_id` (`tourist_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `custom_tour_request_post`
--
ALTER TABLE `custom_tour_request_post`
  ADD PRIMARY KEY (`post_id`,`tourist_id`),
  ADD KEY `tourist_id` (`tourist_id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`name`),
  ADD KEY `tourist_id` (`tourist_id`);

--
-- Indexes for table `guide_book`
--
ALTER TABLE `guide_book`
  ADD PRIMARY KEY (`guide_booking_id`,`guide_id`,`tourist_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `tourist_id` (`tourist_id`);

--
-- Indexes for table `guide_mod_chat`
--
ALTER TABLE `guide_mod_chat`
  ADD PRIMARY KEY (`time`,`date`,`guide_id`,`moderator_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `moderator_id` (`moderator_id`);

--
-- Indexes for table `guide_tourist_chat`
--
ALTER TABLE `guide_tourist_chat`
  ADD PRIMARY KEY (`time`,`date`,`guide_id`,`tourist_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `tourist_id` (`tourist_id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_calendar`
--
ALTER TABLE `personal_calendar`
  ADD PRIMARY KEY (`time`,`date`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `custom_booking_id` (`custom_booking_id`),
  ADD KEY `package_booking_id` (`package_booking_id`),
  ADD KEY `guide_booking_id` (`guide_booking_id`);

--
-- Indexes for table `smartcalendar`
--
ALTER TABLE `smartcalendar`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourguide_others`
--
ALTER TABLE `tourguide_others`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_mod_chat`
--
ALTER TABLE `tourist_mod_chat`
  ADD PRIMARY KEY (`time`,`date`,`tourist_id`,`moderator_id`),
  ADD KEY `tourist_id` (`tourist_id`),
  ADD KEY `moderator_id` (`moderator_id`);

--
-- Indexes for table `tourist_others`
--
ALTER TABLE `tourist_others`
  ADD PRIMARY KEY (`tourist_id`);

--
-- Indexes for table `tourpackage`
--
ALTER TABLE `tourpackage`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- Indexes for table `tour_package_book`
--
ALTER TABLE `tour_package_book`
  ADD PRIMARY KEY (`package_booking_id`,`guide_id`,`tourist_id`,`package_id`),
  ADD KEY `guide_id` (`guide_id`),
  ADD KEY `tourist_id` (`tourist_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_reg_no`),
  ADD KEY `guide_id` (`guide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tourguide`
--
ALTER TABLE `tourguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD CONSTRAINT `cancellation_ibfk_1` FOREIGN KEY (`custom_booking_id`) REFERENCES `custom_tour_request_book` (`custom_booking_id`),
  ADD CONSTRAINT `cancellation_ibfk_2` FOREIGN KEY (`package_booking_id`) REFERENCES `tour_package_book` (`package_booking_id`),
  ADD CONSTRAINT `cancellation_ibfk_3` FOREIGN KEY (`guide_booking_id`) REFERENCES `guide_book` (`guide_booking_id`);

--
-- Constraints for table `custom_tour_request_book`
--
ALTER TABLE `custom_tour_request_book`
  ADD CONSTRAINT `custom_tour_request_book_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`),
  ADD CONSTRAINT `custom_tour_request_book_ibfk_2` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`),
  ADD CONSTRAINT `custom_tour_request_book_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `custom_tour_request_post` (`post_id`);

--
-- Constraints for table `custom_tour_request_post`
--
ALTER TABLE `custom_tour_request_post`
  ADD CONSTRAINT `custom_tour_request_post_ibfk_1` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `emergency_contact_ibfk_1` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guide_book`
--
ALTER TABLE `guide_book`
  ADD CONSTRAINT `guide_book_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`),
  ADD CONSTRAINT `guide_book_ibfk_2` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`);

--
-- Constraints for table `guide_mod_chat`
--
ALTER TABLE `guide_mod_chat`
  ADD CONSTRAINT `guide_mod_chat_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`),
  ADD CONSTRAINT `guide_mod_chat_ibfk_2` FOREIGN KEY (`moderator_id`) REFERENCES `moderator` (`id`);

--
-- Constraints for table `guide_tourist_chat`
--
ALTER TABLE `guide_tourist_chat`
  ADD CONSTRAINT `guide_tourist_chat_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`),
  ADD CONSTRAINT `guide_tourist_chat_ibfk_2` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`);

--
-- Constraints for table `personal_calendar`
--
ALTER TABLE `personal_calendar`
  ADD CONSTRAINT `personal_calendar_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`),
  ADD CONSTRAINT `personal_calendar_ibfk_2` FOREIGN KEY (`custom_booking_id`) REFERENCES `custom_tour_request_book` (`custom_booking_id`),
  ADD CONSTRAINT `personal_calendar_ibfk_3` FOREIGN KEY (`package_booking_id`) REFERENCES `tour_package_book` (`package_booking_id`),
  ADD CONSTRAINT `personal_calendar_ibfk_4` FOREIGN KEY (`guide_booking_id`) REFERENCES `guide_book` (`guide_booking_id`);

--
-- Constraints for table `tourguide_others`
--
ALTER TABLE `tourguide_others`
  ADD CONSTRAINT `tourguide_others_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tourist_mod_chat`
--
ALTER TABLE `tourist_mod_chat`
  ADD CONSTRAINT `tourist_mod_chat_ibfk_1` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`),
  ADD CONSTRAINT `tourist_mod_chat_ibfk_2` FOREIGN KEY (`moderator_id`) REFERENCES `moderator` (`id`);

--
-- Constraints for table `tourist_others`
--
ALTER TABLE `tourist_others`
  ADD CONSTRAINT `tourist_others_ibfk_1` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tourpackage`
--
ALTER TABLE `tourpackage`
  ADD CONSTRAINT `tourpackage_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_package_book`
--
ALTER TABLE `tour_package_book`
  ADD CONSTRAINT `tour_package_book_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`),
  ADD CONSTRAINT `tour_package_book_ibfk_2` FOREIGN KEY (`tourist_id`) REFERENCES `tourist` (`id`),
  ADD CONSTRAINT `tour_package_book_ibfk_3` FOREIGN KEY (`package_id`) REFERENCES `tourpackage` (`package_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tourguide` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
