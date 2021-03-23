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
-- Table structure for table `smartsearch`
--

CREATE TABLE `smartsearch` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `long_description` varchar(1000) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartsearch`
--

INSERT INTO `smartsearch` (`place_id`, `place_name`, `long_description`, `short_description`, `image_path`) VALUES
(1, 'Hikkaduwa', ' Hikkaduwa is a long beautiful beach providing excellent opportunity for surfing, swimming and snorkeling. This was replaced by tourism when its golden sandy beaches were discovered. Hikkaduwa is a small town on the south coast of Sri Lanka located in the Southern Province, about 17 km (11 mi) north-west of Galle and 98 km (61 mi) south of Colombo. Hikkaduwa Coral Sanctuary - located a few hundred metres offshore. The sanctuary has approximately seventy varieties of multi-coloured corals.Hikkaduwa is one of the most beautiful place in Sri Lanka. ', ' Hikkaduwa is a long beautiful beach providing excellent opportunity for surfing, swimming and snorke ', '../resources/img/SmartSearchResult/hik.jpg'),
(2, 'Horton Plains', 'Horton Plains National Park is a protected area in the central highlands of Sri Lanka and is covered by montane grassland and cloud forest.', 'Horton Plains National Park is a protected area in the central highlands of Sri Lanka and is covered by montane grassland and cloud forest.', '../resources/img/SmartSearchResult/hortan.jpg'),
(3, 'Temple of the Tooth', 'Sri Dalada Maligawa or the Temple of the Sacred Tooth Relic is a Buddhist temple in the city of Kandy, Sri Lanka.', 'Sri Dalada Maligawa or the Temple of the Sacred Tooth Relic is a Buddhist temple in the city of Kandy, Sri Lanka.', '../resources/img/SmartSearchResult/temple.jpg'),
(4, 'Sigiriya', ' Sigiriyaaaaa or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka. ', ' Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka. The name refers to a site of historical. ', '../resources/img/SmartSearchResult/sigiriya.jpg'),
(15, 'Ella Rock', 'It\'s in the middle of beautiful countryside, with small vegetable plots in the valleys, tea plantations on the hill slopes and forests on the tops.\r\n\r\nThe climate throughout most of the year is typical of the high Hill Country, with a hot sun by midday, but a moderate air temperature. It will often rain in the afternoon, but only for an hour or so. A sweatshirt, or light jacket is needed at night. In December it can rain a lot!  ', ' It\'s in the middle of beautiful countryside, with small vegetable plots in the valleys, tea plantations on the hill slopes and forests on the tops.\r\n', ''),
(17, 'Galle Fort', ' Galle Fort (Sinhala: à¶œà·à¶½à·” à¶šà·œà¶§à·”à·€ Galu Kotuwa; Tamil: à®•à®¾à®²à®¿à®•à¯ à®•à¯‹à®Ÿà¯à®Ÿà¯ˆ, romanized: KÄlik KÅá¹­á¹­ai), in the Bay of Galle on the southwest coast of Sri Lanka, was built first in 1588 by the Portuguese, then extensively fortified by the Dutch during the 17th century from 1649 onwards. It is a historical, archaeological and architectural heritage monument, which even after more than 432 years maintains a polished appearance, due to extensive reconstruction work done by Archaeological Department of Sri Lanka. ', ' Galle Fort (Sinhala: à¶œà·à¶½à·” à¶šà·œà¶§à·”à·€ Galu Kotuwa; Tamil: à®•à®¾à®²à®¿à®•à¯ à®•à¯‹à®Ÿà¯à®Ÿà¯ˆ, romanized: KÄlik KÅá¹­á¹­ai), in the Bay of Galle on the southwest coast of Sri Lanka. ', '../resources/img/SmartSearchResult/galle fort.jpg'),
(18, 'Galadari Hotel', '   The finest star class hotel in Sri Lanka with the best of dinning, accommodation and entertainment facilities. This 450 roomed beauty is located facing the foaming ripples of the Indian Ocean and remains to be one of the best hotels in Sri Lanka. Step-in to be lost in unearthly cuisines, cosy hideouts, heavenly surrounding and the best of services, which other hotels in Sri Lanka could not offer. Galadari Hotel Sri Lanka; one of the finest hotels in Sri Lanka is not only the best place to relax, eat and indulge, but is also the finest place to celebrate. Come! Delight & breathe the air of luxury at the heart of Colombo.   ', '   The finest star class hotel in Sri Lanka with the best of dinning, accommodation and entertainment facilities.   ', '../resources/img/SmartSearchResult/galadari.jpg'),
(28, 'Adam\'s Peak', ' The climb to Sri Padaya or Adamâ€™s Peak Mountain in Sri Lankaâ€™s hill country is just a magical experience. Itâ€™s a magnificent creation of nature that has been respected for centuries. The sunrise here is absolutely spectacular. To witness this breath-taking site, you will have to start the climb at midnight and continue it all night long to be there by dawn. People of all ages in Sri Lanka climb the Adamâ€™s Peak Mountain as a yearly pilgrimage, and they never get enough of this amazing experience. Visitors to Sri Lanka admit that it could be the most amazing sunrise view in all of Sri Lanka, or perhaps even in all of Asiaâ€¦.   ', ' Adam\'s Peak is a 2,243 m (7,359 ft) tall conical mountain located in central Sri Lanka. It is well known for the Sri Pada (Sinhala: à·à·Šâ€à¶»à·“ à¶´à·à¶¯) ', '../resources/img/SmartSearchResult/sri_padha.jpg'),
(32, 'Nallur Kandaswamy Kovil', 'Nallur Kandaswamy Kovil (Tamil: à®¨à®²à¯à®²à¯‚à®°à¯ à®•à®¨à¯à®¤à®šà¯à®µà®¾à®®à®¿ à®•à¯‹à®µà®¿à®²à¯ Sinhala: à¶±à¶½à·Šà¶½à·”à¶»à·”à·€ à·ƒà·Šà¶šà¶±à·Šà¶° à¶šà·”à¶¸à·à¶» à¶šà·à·€à·’à¶½) is a significant Hindu temple, located in Nallur, Northern Province, Sri Lanka.[2] The presiding deity is Lord Murugan or Katharagama Deviyo in the form of the holy \'Vel\' in the Sanctum, the primary shrine, and in other forms, namely, Shanmugar, Muthukumaraswami, Valli Kaanthar with consorts Valli and Deivayanai, and Thandayuthapani, sans consorts in secondary shrines in the temple.', 'Nallur Kandaswamy Kovil (Tamil: à®¨à®²à¯à®²à¯‚à®°à¯ à®•à®¨à¯à®¤à®šà¯à®µà®¾à®®à®¿ à®•à¯‹à®µà®¿à®²à¯ Sinhala: à¶±à¶½à·Šà¶½à·”à¶»à·”à·€ à·ƒà·Šà¶šà¶±à·Šà¶° à¶šà·”à¶¸à·à¶» à¶šà·à·€à·’à¶½) is a signi', '../resources/img/SmartSearchResult/Nallur.jpg'),
(33, 'National Museum of Colombo', ' National Museum of Colombo, also known as the Sri Lanka National Museum is one of two museums in Colombo. It is the largest museum in Sri Lanka. It is maintained by the Department of National Museum of the central government. The museum holds contains a collections of much importance to Sri Lanka such as the regalia of the country, including the throne and crown of the Kandyan monarchs as well as many other exhibits telling the story of ancient Sri Lanka. ', ' National Museum of Colombo, also known as the Sri Lanka National Museum is one of two museums in Colombo. It is the largest museum in Sri Lanka. It is maintained by the Department of National Museum ', '../resources/img/SmartSearchResult/museum.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smartsearch`
--
ALTER TABLE `smartsearch`
  ADD PRIMARY KEY (`place_id`,`place_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smartsearch`
--
ALTER TABLE `smartsearch`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
