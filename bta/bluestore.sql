-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 27, 2015 at 05:06 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bluestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `ArticalData`
--

CREATE TABLE `ArticalData` (
`id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ArticalData`
--

INSERT INTO `ArticalData` (`id`, `Name`, `Price`, `Quantity`, `Image`) VALUES
(1, 'clothes', 15, 2, '1.jpg'),
(2, 'clothes', 20, 2, '2.jpg'),
(3, 'clothes', 18, 2, '3.jpg'),
(4, 'clothes', 89, 2, '4.jpg'),
(5, 'clothes', 51, 2, '5.jpg'),
(6, 'clothes', 92, 2, '6.jpg'),
(7, 'clothes', 67, 2, '7.jpg'),
(8, 'clothes', 39, 2, '8.jpg'),
(9, 'clothes', 43, 2, '9.jpg'),
(10, 'clothes', 96, 2, '10.jpg'),
(11, 'clothes', 34, 2, '11.jpg'),
(12, 'clothes', 42, 2, '12.jpg'),
(13, 'clothes', 66, 2, '13.jpg'),
(14, 'clothes', 70, 2, '14.jpg'),
(15, 'clothes', 30, 2, '15.jpg'),
(16, 'clothes', 29, 2, '16.jpg'),
(17, 'clothes', 70, 2, '17.jpg'),
(18, 'clothes', 75, 2, '18.jpg'),
(19, 'clothes', 75, 2, '19.jpg'),
(20, 'clothes', 20, 2, '20.jpg'),
(21, 'clothes', 11, 2, '21.jpg'),
(22, 'clothes', 66, 2, '22.jpg'),
(23, 'clothes', 84, 2, '22.jpg'),
(24, 'clothes', 10, 2, '23.jpg'),
(25, 'clothes', 13, 2, '24.jpg'),
(26, 'clothes', 59, 2, '25.jpg'),
(27, 'clothes', 13, 2, '26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userData`
--

CREATE TABLE `userData` (
`id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Personal_ans` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userData`
--

INSERT INTO `userData` (`id`, `userName`, `FirstName`, `LastName`, `Email`, `Password`, `Personal_ans`) VALUES
(1, 'sduggi', 'SuryaTeja', 'Duggi', 'surayteja008@gmail.com', 'bluestore312', 'Nandi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ArticalData`
--
ALTER TABLE `ArticalData`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userData`
--
ALTER TABLE `userData`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ArticalData`
--
ALTER TABLE `ArticalData`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `userData`
--
ALTER TABLE `userData`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
