-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 08:30 AM
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
-- Database: `userdb`
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
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(5, 'kavindya', 'dewindi', 'kavindyadewindi12345678@gmail.com', 'b3ed0eb2a3faa03f43add6fd6013bd75ebfd4bf2', 'Female', 'ketanwila,maliduwa,akuressa', '0762435678', 'admin', '297d9588eab9e3a48d14f45dc925bc81be0e9e0ac1cb7854df871b1c6bce0fd59a67da26bf9d43316b776375b2dc19d21893');

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
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(3, 'lakshan', 'Amal', 'lakshanamal100@gmail.com', 'a4d92c18228030fab859c3681fe59e6e98ebd542', 'Male', 'hikkaduwa,galle,srilanka', '0762435678', 'moderator', '6d8a5b0c6532854cce04be5286418af1a799d37fafe125e79ad757986c1ea8c5e097297996f08c3d62ead10ae68625feeb84');

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
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(3, 'sajini', 'Ahinsa', 'amal@gmail.com', '84b7d0a7fd48b2e86dd5b37f13db786bf05d4751', 'Male', 'Maliduwa,Akuressa,Matara', '8780660644', 'tourguide', '7bd95440bfa127d9a11446f88e7ba959c27df47fcbbc24f227d8d7b331dc4a37b9850235c5603f890b41f5bdb657e875044b'),
(4, 'sajini', 'navodya', 'sajinisenarathne@gmail.com', '8fc257feb6f3836494b7130c164ebc845912d6f0', 'Female', 'ketanwila,Akuressa', '0764523678', 'tourguide', '280432c095248643876f36ed5614acbcdbbdf81a59af09819bfc5bee2f3ca4caf481052fe96c62800adde0708c4583c0f308'),
(5, 'lakshan', 'senarathne', 'amal@gmail.com', '135142a8ac44f350bbf2747f81344f400d7e80c7', 'Male', 'ketanwila,Akuressa', '8780660644', 'tourguide', 'c4fffcc917a2349de74157a83a6e66b317b31e628aec77dd82f43c3da901362435723101b945f6a6fbfa737112cf9ccd648e');

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
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `address`, `contact`, `level`, `token`) VALUES
(17, 'kavindya', 'sureshi', 'sureshi@gmail.com', '8874084277b85cfbbe99eec25c2a9fff6a324ca5', 'Male', 'galle,srilanka', '0875332221', 'tourist', '40f2151557ff5042274c8dafdc0c4ed6928bca7da961164905afd916a98e32ff8fd387187269075a83f0b624286895e733fd'),
(18, 'kavindya', 'sureshi', 'sureshi@gmail.com', '8874084277b85cfbbe99eec25c2a9fff6a324ca5', 'Male', 'galle,srilanka', '0875332221', 'tourist', '332b2c3225551088b500c4092657944e3131aa367919d90b46237b290520ed7af41c7f999f384c0d3b13d34fada707f0f926'),
(19, 'cds', 'bfg', 'nimo123@gmail.com', '41cca738850539014b36ca07c9c89b7785fb1a74', 'Male', 'kjhlkhjlkjh', 'jqbwfbqkfrb', 'tourist', 'd94ec2f9ea026c3035392c1d57054596b9b3745f980b3a30583a37238217451e353d43a9dba747a3721eda3b73b8666bff72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tourguide`
--
ALTER TABLE `tourguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
