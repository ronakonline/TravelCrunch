-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 04:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
(1, 3, 'India', 'india', 0, 'logo.PNG', 'about 1', 'logo@2x.png', 'about 2', 'QN_Center.png', 0),
(7, 3, 'CHINA', 'CORONA VIRUS', 1, 'Gaming_logo.PNG', 'about 1', 'logo@2x.png', NULL, NULL, 0),
(8, 5, 'Ganna', 'place of black people(Niggas)', 1, 'photo-of-girl-smiling-4144295.jpg', 'We are the one who do all shity things', 'people-inside-room-and-surrounding-table-1581554.jpg', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `destinations_parents`
--

CREATE TABLE `destinations_parents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations_parents`
--

INSERT INTO `destinations_parents` (`id`, `name`, `bannerimg`, `isdeleted`) VALUES
(3, 'Asia', 'logo.PNG', 0),
(4, 'United states', 'people-inside-room-and-surrounding-table-15815542.jpg', 0),
(5, 'Africa', 'man-and-woman-hive-five-3184417.jpg', 1);

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
(5, 1, 'tdhtghgftrhvbgtfrgbvfb', 'fgvbgftrgvbfvbghbv', 0),
(6, 1, 'bvngfbv bnfrfgnv', 'gfnvgnfhffgvbgfhdd', 0);

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
(1, 1, 'Nature_Book_-_Logo_Template_small.png', 0),
(2, 1, 'Nature_Book_-_Logo_Template_small1.png', 0),
(3, 1, 'Nature_Book_-_Logo_Template_small2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `oleft` varchar(255) NOT NULL,
  `oright` varchar(255) NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`id`, `destid`, `oleft`, `oright`, `isdeleted`) VALUES
(1, 1, ',fsfdvsmhsbvsdjfbdhmbxjfhd', 'sdhfsuhvsfjbshvjvhm', 0),
(2, 1, ',fsfdvsmhsbvsdjfbdhmbxjfhd', 'sdhfsuhvsfjbshvjvhm', 0),
(3, 7, 'sfsfbskfbskfb', 'khgkebgk', 0),
(4, 8, 'Ganna is the developing country. You should never visit this place, its very dangerous.', 'Ganna is the developing country. You should never visit this place, its very dangerous.', 0);

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
(1, 1, 'Titile 1', 'This is titile1', 'Title 2', 'This is titile 2', 'List1', 'Array', 'List 2', 'Array', 'List 3', 'Array', 'List 4', 'Array', 0),
(2, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', '', 'item 1', '', 'item 1', '', 'item 1', '', 0),
(3, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', '', 'item 1', '', 'item 1', '', 'item 1', '', 0),
(4, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', 'Array', 'item 1', 'Array', 'item 1', 'Array', 'item 1', '', 0),
(5, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', 'N;', 'item 1', 'N;', 'item 1', 'N;', 'item 1', 'N;', 0);

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

--
-- Dumping data for table `seotag`
--

INSERT INTO `seotag` (`id`, `destid`, `tags`, `isdeleted`) VALUES
(1, 7, 'corona virus, covid-19, fuckyou', 0),
(2, 1, 'freedom, modi, amitshah', 0),
(3, 1, 'modi, amit shah', 0),
(4, 1, 'modi, amit shah', 0),
(5, 1, 'amit shah, modi, politics', 0),
(6, 1, 'amit shah, modi, politics', 0),
(7, 1, 'amit shah, modi, politics', 0),
(8, 1, 'Modiji, amit Shah', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seotag`
--
ALTER TABLE `seotag`
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
