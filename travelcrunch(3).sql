-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 04:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelcrunch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` mediumtext NOT NULL,
  `add1` mediumtext NOT NULL,
  `add2` mediumtext NOT NULL,
  `telno` mediumtext NOT NULL,
  `phoneno` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `add1`, `add2`, `telno`, `phoneno`) VALUES
(1, 'careers@travleu.com', 'Manhatta Hall Veerpolder 7 2361 Empor ', 'Ltd 1258, Melbourne, Australia', '+51 900 321 4568', '+501 860 3210');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `parent` int(10) NOT NULL,
  `name` mediumtext NOT NULL,
  `tagline` text NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `banner` longtext NOT NULL,
  `about1` longtext NOT NULL,
  `about1_image` longtext NOT NULL,
  `about2` longtext DEFAULT NULL,
  `about2_image` longtext DEFAULT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `parent`, `name`, `tagline`, `featured`, `banner`, `about1`, `about1_image`, `about2`, `about2_image`, `isdeleted`) VALUES
(12, 10, 'India', 'The place of dreams', 1, 'india.jpg', 'Wonderfully different, there is nothing quite like a tour of India. Travel a lot? No matter how much you\'ve done or how many countries you\'ve visited, when you first arrive in India it will hit you like a gale force wind; a hurricane of sounds, smells, and colour where nothing is as it seems.', 'indiatour.jpg', 'Travelling to India reveals a country that is both mesmerizing, exotic, exciting, and mystical but at times frustrating, confusing, and chaotic. Relax, stay calm, be patient, and smile and India will open up herself to you in all her splendid glory.', 'Gateway-of-India-in-Mumbai.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destinations_parents`
--

CREATE TABLE `destinations_parents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations_parents`
--

INSERT INTO `destinations_parents` (`id`, `name`, `bannerimg`, `featured`, `isdeleted`) VALUES
(10, 'Asia Tours', 'asiatour1.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `destid`, `question`, `answer`, `isdeleted`) VALUES
(14, 12, 'The best ways to pay for services in India ?', '10% of the service price', 0),
(15, 12, 'Electricity and power supplies in India ?', 'Type C , Type D , Type E', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `destid` int(11) NOT NULL,
  `img` longtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `destid`, `img`, `isdeleted`) VALUES
(15, 12, 'gal.jpg', 0),
(16, 12, 'gal1.jpg', 0),
(17, 12, 'gal2.jpg', 0),
(18, 12, 'gal3.jpg', 0),
(19, 12, 'gal4.jpg', 0),
(20, 12, 'gal5.jpg', 0),
(21, 12, 'gal6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `descr` longtext NOT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `tid`, `title`, `descr`, `isdeleted`) VALUES
(5, 5, 'Day 1 Delhi', '<p>Arrive at any time. Arrival transfer is included through the G Adventures-supported Women With Wheels project.</p>', 0),
(6, 5, 'Day 2 Delhi/Jaipur', '<p>Visit Delhis impressive India Gate and Connaught Place before traveling\r\n to Jaipur, commonly called the Pink City for its unique architecture.\r\n Get to know this colourful city on an orientation walk, then opt to \r\nwatch a classic Bollywood film.</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `oleft` longtext NOT NULL,
  `oright` longtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`id`, `destid`, `oleft`, `oright`, `isdeleted`) VALUES
(12, 12, 'Wonderfully different, there is nothing quite like a tour of India. Travel a lot? No matter how much you\'ve done or how many countries you\'ve visited, when you first arrive in India it will hit you like a gale force wind; a hurricane of sounds, smells, and colour where nothing is as it seems.', 'Travelling to India reveals a country that is both mesmerizing, exotic, exciting, and mystical but at times frustrating, confusing, and chaotic. Relax, stay calm, be patient, and smile and India will open up herself to you in all her splendid glory.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `title1` text NOT NULL,
  `desc1` longtext NOT NULL,
  `title2` text NOT NULL,
  `desc2` longtext NOT NULL,
  `list1` text NOT NULL,
  `item1` longtext NOT NULL,
  `list2` text NOT NULL,
  `item2` longtext NOT NULL,
  `list3` text NOT NULL,
  `item3` longtext NOT NULL,
  `list4` text NOT NULL,
  `item4` longtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id`, `destid`, `title1`, `desc1`, `title2`, `desc2`, `list1`, `item1`, `list2`, `item2`, `list3`, `item3`, `list4`, `item4`, `isdeleted`) VALUES
(8, 12, 'Packing for India', 'We suggest that you pack as lightly as possible as you are expected to carry your own luggage. As a rule we try not to have to walk more than 15-20 minutes with your bag which is why we recommend keeping the weight of your bags between 10-15kg/22-30lb. Suitcases are not recommended for G Adventures trips! Most travellers carry a backpack or rolling bag of small to medium size (no XXL ones please!) as they need to fit under the beds when travelling on sleeper trains. You will also need a day pack/bag to carry water, cameras and other electronics like ipods and mobile phones. If your trip involves overnights in home stays, villages or camping then you usually have the opportunity to rent sleeping bags if need be instead of bringing them with you.', 'Electricity and power supplies in India', 'In India the power plugs and sockets are of type C, D and M. The standard voltage is 230 V and the standard frequency is 50 Hz. You can use your electric appliances in India, if the standard voltage in your country is in between 220 - 240 V (as is in the UK, Europe, Australia and most of Asia and Africa). Manufacturers take these small deviations into account. If the standard voltage in your country is in the range of 100 V - 127 V (as is in the US, Canada and most South American countries), you need a voltage converter in India. You can also consider a combined power plug adapter/voltage converter.', 'Cold weather', '[Long-sleeved shirts or sweater,Scarf,Warm gloves,Warm hat,Warm layers]', 'Warm weather', '[Sandals/flip-flops,Shorts/skirts,Sun hat/bandana,Swimwear]', 'Conservative Dress', '[Modest clothing that covers knees and shoulders,Shawl or scarf]', 'Documents', '[Flight info,Insurance info,Passport,Required visas or vaccination certificates,Vouchers and pre-departure information]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seotag`
--

CREATE TABLE `seotag` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `logo` mediumtext NOT NULL,
  `title1` mediumtext NOT NULL,
  `tagline1` mediumtext NOT NULL,
  `slide1` mediumtext NOT NULL,
  `slide2` mediumtext NOT NULL,
  `slide3` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `logo`, `title1`, `tagline1`, `slide1`, `slide2`, `slide3`) VALUES
(1, 'WhatsApp_Image_2020-04-16_at_11_03_33.jpeg', 'Experience the Wonderrr', 'People don’t take trips, trips take People', 'image.png', 'WhatsApp_Image_2020-04-16_at_11_03_33.jpeg', 'WhatsApp_Image_2020-04-27_at_18_33_252.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tourfaq`
--

CREATE TABLE `tourfaq` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourfaq`
--

INSERT INTO `tourfaq` (`id`, `tid`, `question`, `answer`, `isdeleted`) VALUES
(3, 5, 'Travel Style ? ', 'Travel Style: Classic', 0),
(4, 5, 'Service Level', 'Service Level: Standard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tourgallery`
--

CREATE TABLE `tourgallery` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `img` mediumtext NOT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourgallery`
--

INSERT INTO `tourgallery` (`id`, `tid`, `img`, `isdeleted`) VALUES
(4, 5, 'tour.jpg', 0),
(5, 5, 'tour1.jpg', 0),
(6, 5, 'tour2.jpg', 0),
(7, 5, 'tour3.jpg', 0),
(8, 5, 'tour4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `tfrom` mediumtext NOT NULL,
  `tto` mediumtext NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `days` mediumtext NOT NULL,
  `price` mediumtext NOT NULL,
  `overview` longtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `did`, `title`, `tfrom`, `tto`, `bannerimg`, `days`, `price`, `overview`, `details`, `isdeleted`) VALUES
(5, 12, 'Delhi to Kathmandu', 'Delhi', 'Kathmandu', 'Gateway-of-India-in-Mumbai.jpg', '15', '1359', 'If you’re looking to experience the diversity of India and Nepal, this \r\n15-day trip contrasts the colourful culture of India with the pristine \r\nserenity of Nepal\'s Himalayan mountains. From the ghats that line the \r\nbanks of the Ganges in Varanasi to a 4x4 safari in Chitwan National \r\nPark, our expert CEOs will take you through a region of unsurpassed \r\nnatural beauty and spirituality before revealing to you the rugged \r\nHimalayan landscape of Nepal’s magical capital, Kathmandu.\r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>If you’re looking to experience the diversity of India and Nepal,\r\n this 15-day trip contrasts the colourful culture of India with the \r\npristine serenity of Nepals Himalayan mountains. From the ghats that \r\nline the banks of the Ganges in Varanasi to a 4x4 safari in Chitwan \r\nNational Park, our expert CEOs will take you through a region of \r\nunsurpassed natural beauty and spirituality before revealing to you the \r\nrugged Himalayan landscape of Nepal’s magical capital, Kathmandu.</p>\r\n\r\n    <ul><li>Explore the vibrant streets of Agra</li><li>Uncover bustling Delhi and beautiful Jaipur</li><li>Enjoy a sunset cruise on the River Ganges</li><li>Travel by 4x4 on a safari in Chitwan National Park</li><li>Experience Nepals mountain views</li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            15 days</dt><dt><span class=muted>Start/Finish City:</span> Delhi to Kathmandu</dt><dt><span class=muted>Service Level:</span> Standard</dt><dd>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 2 - Light</dt><dd>Light walking and hiking suitable for most fitness levels. Nothing too challenging.</dd><dt><span class=muted>Travel Style:</span> Classic</dt><dd>All of the highlights, culture, access, and I-can’t-believe-we-did-that moments, all at a great price.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 15, avg 12</dd></dl>\r\n</div>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `traveldeal`
--

CREATE TABLE `traveldeal` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 2,
  `offer` varchar(200) NOT NULL,
  `deal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveldeal`
--

INSERT INTO `traveldeal` (`id`, `did`, `featured`, `offer`, `deal`) VALUES
(3, 12, 1, '25', '25% of on all Asia Tours');

-- --------------------------------------------------------

--
-- Table structure for table `travelstyle`
--

CREATE TABLE `travelstyle` (
  `id` int(11) NOT NULL,
  `pid` mediumtext NOT NULL,
  `name` mediumtext NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelstyle`
--

INSERT INTO `travelstyle` (`id`, `pid`, `name`, `bannerimg`, `featured`, `isdeleted`) VALUES
(8, '[10]', 'Classic Tours', 'classictour.jpg', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_destination_fk` (`parent`);

--
-- Indexes for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_destination_fk` (`destid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_dest_fk` (`destid`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seotag`
--
ALTER TABLE `seotag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sea_destination_fk` (`destid`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourfaq`
--
ALTER TABLE `tourfaq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourgallery`
--
ALTER TABLE `tourgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traveldeal`
--
ALTER TABLE `traveldeal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelstyle`
--
ALTER TABLE `travelstyle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seotag`
--
ALTER TABLE `seotag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourfaq`
--
ALTER TABLE `tourfaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tourgallery`
--
ALTER TABLE `tourgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `traveldeal`
--
ALTER TABLE `traveldeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `travelstyle`
--
ALTER TABLE `travelstyle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `parent_destination_fk` FOREIGN KEY (`parent`) REFERENCES `destinations_parents` (`id`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_destination_fk` FOREIGN KEY (`destid`) REFERENCES `destination` (`id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_dest_fk` FOREIGN KEY (`destid`) REFERENCES `destination` (`id`);

--
-- Constraints for table `seotag`
--
ALTER TABLE `seotag`
  ADD CONSTRAINT `sea_destination_fk` FOREIGN KEY (`destid`) REFERENCES `destination` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
