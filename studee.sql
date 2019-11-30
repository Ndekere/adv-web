-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 05:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studee`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`) VALUES
('Admin', '1234'),
('admin@localhost', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `save_retrieve`
--

CREATE TABLE `save_retrieve` (
  `id` int(255) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `save_retrieve`
--

INSERT INTO `save_retrieve` (`id`, `First Name`, `Last Name`, `Age`, `Contact`) VALUES
(1, 'Test ', 'User', 0, 'test@usrr.com'),
(3, 'Mister', 'Raphael', 49, 'raphael@anu.ac.ke'),
(4, 'DR', 'Kendi', 47, '+1-732-757-2923'),
(5, 'Mr', 'Obuhuma', 41, 'jobuhuma@uonbi.ac.ke'),
(6, 'Mr', 'Karani', 53, 'mr_karani254@anu.ac.ke'),
(11, 'Steve', 'Mutio', 21, 'steve@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Id` int(255) NOT NULL,
  `Unit Name` varchar(255) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='End of 3.1 Sem Timetable';

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Id`, `Unit Name`, `Day`, `Date`, `Time`) VALUES
(1, 'Assembly Language [CSC 212]', 'Mon', '25th November 2019', '8.30 - 10.30 am'),
(2, 'Linear Algebra [MTH 201]', 'Wed', '27th November 2019', '2.30 - 4.30 pm'),
(3, 'Distributed Systems [CSC 404]', 'Thu', '28th November 2019', '8.30 - 10.30 am'),
(4, 'Advanced Database [CSC 315]', 'Fri', '29th November 2019', '8.30 - 10.30 am'),
(5, 'Programming II [CSC 311]', 'Wed', '4th December 2019', '2.30 - 4.30 pm'),
(6, 'Advanced Web [CSC 316]', 'Thu', '5th December 2019', '8.30 - 10.30 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `save_retrieve`
--
ALTER TABLE `save_retrieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `save_retrieve`
--
ALTER TABLE `save_retrieve`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
