-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt_bsc_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE `friday` (
  `sno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `period` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `location` varchar(5) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE `monday` (
  `sno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `period` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(10) NOT NULL,
  `location` varchar(5) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saturday`
--

CREATE TABLE `saturday` (
  `sno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `period` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `location` varchar(5) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE `thursday` (
  `sno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `period` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `location` varchar(5) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE `tuesday` (
  `sno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `period` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `location` varchar(5) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`sno`, `stime`, `etime`, `period`, `subject`, `teacher`, `location`, `present`) VALUES
(1, '09:56:00', '10:22:00', 2, 'Java', 'Nadeem ssir', 'http:', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE `wednesday` (
  `sno` int(2) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `period` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `location` varchar(5) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`sno`, `stime`, `etime`, `period`, `subject`, `teacher`, `location`, `present`) VALUES
(1, '11:11:00', '12:11:00', 2, 'OS', 'Swaleha', 'LT1', 0),
(2, '21:56:00', '22:22:00', 3, 'Java', 'Nadeem ssir', 'LTU1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friday`
--
ALTER TABLE `friday`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `monday`
--
ALTER TABLE `monday`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `saturday`
--
ALTER TABLE `saturday`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `thursday`
--
ALTER TABLE `thursday`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tuesday`
--
ALTER TABLE `tuesday`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `wednesday`
--
ALTER TABLE `wednesday`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friday`
--
ALTER TABLE `friday`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monday`
--
ALTER TABLE `monday`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saturday`
--
ALTER TABLE `saturday`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thursday`
--
ALTER TABLE `thursday`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tuesday`
--
ALTER TABLE `tuesday`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wednesday`
--
ALTER TABLE `wednesday`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
