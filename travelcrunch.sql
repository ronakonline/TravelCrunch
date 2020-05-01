-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 08:32 PM
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
  `about2_image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `parent`, `name`, `tagline`, `featured`, `banner`, `about1`, `about1_image`, `about2`, `about2_image`) VALUES
(1, 3, 'India', 'india', 0, 'logo.PNG', 'about 1', 'logo@2x.png', 'about 2', 'QN_Center.png'),
(7, 3, 'CHINA', 'CORONA VIRUS', 1, 'Gaming_logo.PNG', 'about 1', 'logo@2x.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinations_parents`
--

CREATE TABLE `destinations_parents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bannerimg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations_parents`
--

INSERT INTO `destinations_parents` (`id`, `name`, `bannerimg`) VALUES
(1, 'avas', '0f6cd503f4c8231e3af6f146c13279011.jpg'),
(3, 'Asia', 'logo.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `destid`, `question`, `answer`) VALUES
(5, 1, 'tdhtghgftrhvbgtfrgbvfb', 'fgvbgftrgvbfvbghbv'),
(6, 1, 'bvngfbv bnfrfgnv', 'gfnvgnfhffgvbgfhdd');

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `oleft` varchar(255) NOT NULL,
  `oright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`id`, `destid`, `oleft`, `oright`) VALUES
(1, 1, ',fsfdvsmhsbvsdjfbdhmbxjfhd', 'sdhfsuhvsfjbshvjvhm'),
(2, 1, ',fsfdvsmhsbvsdjfbdhmbxjfhd', 'sdhfsuhvsfjbshvjvhm'),
(3, 7, 'sfsfbskfbskfb', 'khgkebgk');

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
  `item4` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id`, `destid`, `title1`, `desc1`, `title2`, `desc2`, `list1`, `item1`, `list2`, `item2`, `list3`, `item3`, `list4`, `item4`) VALUES
(1, 1, 'Titile 1', 'This is titile1', 'Title 2', 'This is titile 2', 'List1', 'Array', 'List 2', 'Array', 'List 3', 'Array', 'List 4', 'Array'),
(2, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', '', 'item 1', '', 'item 1', '', 'item 1', ''),
(3, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', '', 'item 1', '', 'item 1', '', 'item 1', ''),
(4, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', 'Array', 'item 1', 'Array', 'item 1', 'Array', 'item 1', ''),
(5, 1, 'Title 1', 'Title 1', 'title 2', 'title 2', 'list1 ', 'N;', 'item 1', 'N;', 'item 1', 'N;', 'item 1', 'N;');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
