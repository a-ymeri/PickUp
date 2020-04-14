-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 04:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `courtName` varchar(16) NOT NULL,
  `facilityID` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`courtName`, `facilityID`) VALUES
('group study room', 'Leonto Sofou');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` varchar(16) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time(6) DEFAULT NULL,
  `site` varchar(16) DEFAULT NULL,
  `maxUsers` int(10) DEFAULT NULL,
  `duration` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `date`, `time`, `site`, `maxUsers`, `duration`) VALUES
('1', '2020-03-21', '13:00:00.000000', 'group study room', 5, '01:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `address` varchar(16) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `closingTime` time(6) NOT NULL,
  `openingTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`address`, `availability`, `closingTime`, `openingTime`) VALUES
('Leonto Sofou', 1, '09:30:00.000000', '11:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `isin`
--

CREATE TABLE `isin` (
  `userEmail` varchar(16) NOT NULL,
  `eventID` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isin`
--

INSERT INTO `isin` (`userEmail`, `eventID`) VALUES
('mrestelica', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `sumOfRatings` int(16) DEFAULT NULL,
  `userID` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `fname` varchar(16) DEFAULT NULL,
  `lname` varchar(16) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fname`, `lname`, `email`, `password`) VALUES
('aymeri', 'ardit', 'ymeri', 'aymeri@citycollege.sheffiel.eu', '123'),
('ldavidovijk', 'lola', 'davidovijk', 'ldavidovijk@citycollege.sheffield.eu', '123'),
('ljanuzi', 'learta', 'januzi', 'ljanuzi@citycollege.sheffield.eu', '123'),
('mrestelica', 'memli', 'restelica', 'restelicamemli@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`courtName`,`facilityID`),
  ADD KEY `facilityID` (`facilityID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `site` (`site`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`address`);

--
-- Indexes for table `isin`
--
ALTER TABLE `isin`
  ADD PRIMARY KEY (`userEmail`),
  ADD KEY `eventID` (`eventID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `court`
--
ALTER TABLE `court`
  ADD CONSTRAINT `court_ibfk_1` FOREIGN KEY (`facilityID`) REFERENCES `facility` (`address`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`site`) REFERENCES `court` (`courtName`);

--
-- Constraints for table `isin`
--
ALTER TABLE `isin`
  ADD CONSTRAINT `isin_ibfk_1` FOREIGN KEY (`userEmail`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `isin_ibfk_2` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
