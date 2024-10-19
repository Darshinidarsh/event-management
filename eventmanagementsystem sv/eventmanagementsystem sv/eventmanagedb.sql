-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 03:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `CName` varchar(255) NOT NULL,
  `EventType` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `VenueName` varchar(255) NOT NULL,
  `Guest` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Equipment` varchar(255) NOT NULL,
  `FoodType` varchar(255) NOT NULL,
  `Food` varchar(255) NOT NULL,
  `Decoration` varchar(255) NOT NULL,
  `Payment` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(255) NOT NULL,
  `CardNo` varchar(255) NOT NULL,
  `CvvNo` varchar(255) NOT NULL,
  `CardHolder` varchar(255) NOT NULL,
  `ValidThru` varchar(255) NOT NULL,
  `ValidUpto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `CardNo`, `CvvNo`, `CardHolder`, `ValidThru`, `ValidUpto`) VALUES
(1, '12345678912345', '5555', 'pallavi', '10/18', '11/50'),
(2, '12345678985496', '5567', 'Kumar', '12/15', '04/22'),
(3, '3495877698328304', '0258', 'Kiran', '09/10', '11/20'),
(4, '6799998912341006', '6558', 'Omkar', '07/16', '10/19');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `CustomerName`, `PhoneNo`, `EmailID`, `Address`, `Password`) VALUES
(1, 'Sanjana', '9480631430', 'admin@gmail.com', 'mohanfiuaf', '99999'),
(2, 'Sumona', '8196226774', 'mydatabasemail1@gmail.com', 'msduwbf', '77777');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(255) NOT NULL,
  `VenueName` varchar(255) NOT NULL,
  `VenueAddress` varchar(255) NOT NULL,
  `VenuePlace` varchar(255) NOT NULL,
  `VenuePhone` varchar(255) NOT NULL,
  `Capacity` varchar(255) NOT NULL,
  `Preferred` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `VenueName`, `VenueAddress`, `VenuePlace`, `VenuePhone`, `Capacity`, `Preferred`, `Amount`, `Image`) VALUES
(2, 'engagement', 'Near Mysore', 'Mysore', '9999999990', '1000', 'All', '65000', 'FB_IMG_1486212778856.jpg'),
(3, 'reception', 'Near Bangalore', 'Bangalore', '9999999988', '500', 'Marriage', '12000', 'FB_IMG_1486212746289.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
