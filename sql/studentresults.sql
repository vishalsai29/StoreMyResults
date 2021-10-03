-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 06:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `USN` varchar(252) NOT NULL,
  `name` varchar(252) NOT NULL,
  `email` varchar(252) NOT NULL,
  `password` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`USN`, `name`, `email`, `password`) VALUES
('1sg18cs088', 'rohan', 'yenkanarohan@gmail.com', '12345'),
('1sg18cs092', 'prash', 'prash@gmail.com', '12345'),
('1sg18cs124', 'vishalsai', 'vishalsai2906@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`USN`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`) VALUES
('1sg18cs124', 100, 100, 100, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`USN`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`) VALUES
('1sg18cs092', 90, 80, 90, 90, 88, 99, 99),
('1sg18cs124', 99, 99, 99, 99, 99, 99, 99);

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`USN`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`) VALUES
('1sg18cs124', 20, 20, 20, 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `USN` varchar(252) NOT NULL,
  `sub1` int(252) NOT NULL,
  `sub2` int(252) NOT NULL,
  `sub3` int(252) NOT NULL,
  `sub4` int(252) NOT NULL,
  `sub5` int(252) NOT NULL,
  `sub6` int(252) NOT NULL,
  `sub7` int(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem8`
--

INSERT INTO `sem8` (`USN`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`) VALUES
('1sg18cs124', 99, 99, 99, 99, 99, 99, 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem7`
--
ALTER TABLE `sem7`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `sem8`
--
ALTER TABLE `sem8`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
