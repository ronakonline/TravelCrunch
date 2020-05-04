-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 02:14 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
