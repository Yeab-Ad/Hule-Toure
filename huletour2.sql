-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 07:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huletour2`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminbooking`
--

CREATE TABLE `adminbooking` (
  `id` int(255) NOT NULL,
  `place` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminbooking`
--

INSERT INTO `adminbooking` (`id`, `place`) VALUES
(1, 'Lalibela'),
(2, 'Aksum'),
(6, 'Friendship Square'),
(13, 'Hiking'),
(14, 'Semen Mountain'),
(15, 'Unity Park');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `place` tinytext NOT NULL,
  `Reservation` tinytext NOT NULL,
  `transport` tinytext NOT NULL,
  `tg` tinytext NOT NULL,
  `id` int(11) NOT NULL,
  `payment` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`place`, `Reservation`, `transport`, `tg`, `id`, `payment`) VALUES
('Lalibela', 'Hotel', 'Plane', 'Yes', 105, 'morethan-7');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(21) NOT NULL,
  `place` tinytext NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `place`, `money`) VALUES
(3, 'lalibela(1)', 2000),
(4, 'lalibela(2)', 1000),
(5, 'lalibela(3)', 500),
(6, 'aksum(1)', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `idUsers` int(11) NOT NULL,
  `fullname` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `admin` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`idUsers`, `fullname`, `emailUsers`, `pwdUsers`, `admin`) VALUES
(4, 'Yeabsira Adem', 'yeab1ad@gmail.com', '123123', 'Yes'),
(7, 'yeab', 'yeabB1ad@gmail.com', '1', 'no'),
(10, 'yeaba', 'yeab1ad@gmail.comb', 'b', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminbooking`
--
ALTER TABLE `adminbooking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`place`) USING HASH;

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminbooking`
--
ALTER TABLE `adminbooking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
