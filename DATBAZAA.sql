-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 07:30 PM
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
-- Database: `cwtest1`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `date_of_event` date NOT NULL,
  `time_of_event` time NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `max_users` int(11) DEFAULT NULL,
  `duration_of_event` time DEFAULT NULL,
  `address` varchar(60) NOT NULL,
  `date_of_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `date_of_event`, `time_of_event`, `subject`, `max_users`, `duration_of_event`, `address`, `date_of_posting`) VALUES
(14, '2020-05-20', '15:00:00', 'TAKWENDO', 4, '15:00:00', 'Warehouse', '2020-04-14 14:50:39'),
(54, '2020-04-15', '19:00:00', 'Fitness CLASS', 4, '19:00:00', 'Warehouse', '2020-04-14 14:28:52'),
(119, '2020-04-17', '14:00:00', 'JAVA OOP', 4, '14:00:00', 'Library', '2020-04-14 13:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `follows_`
--

CREATE TABLE `follows_` (
  `follower` varchar(30) NOT NULL,
  `following_` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `isin`
--

CREATE TABLE `isin` (
  `username` varchar(30) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `user_id` varchar(30) NOT NULL,
  `sum_of_Ratings` int(11) DEFAULT NULL,
  `nr_of_Ratings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`user_id`, `sum_of_Ratings`, `nr_of_Ratings`) VALUES
('ljanuzi', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `department`, `password`) VALUES
('aymeri', 'Ardit Ymeri', 'aymeri@citycollege.sheffield.eu', 'Computer Science', '123'),
('ldavidovijk', 'lola', 'ldavidovikj@citycollege.sheffield.eu', 'Computer Science', '123'),
('ljanuzi', 'Learta Januzi', 'ljanuzi@citycollege.sheffield.eu', 'Computer Science', '123'),
('mrestelica', 'Memli Reselica', 'restelicamemli@gmail.com', 'Computer Science', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `follows_`
--
ALTER TABLE `follows_`
  ADD PRIMARY KEY (`follower`),
  ADD KEY `following_` (`following_`);

--
-- Indexes for table `isin`
--
ALTER TABLE `isin`
  ADD PRIMARY KEY (`username`,`event_id`) USING HASH,
  ADD KEY `foreignkeyszibfk_1` (`event_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `follows_`
--
ALTER TABLE `follows_`
  ADD CONSTRAINT `follows__ibfk_1` FOREIGN KEY (`follower`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `follows__ibfk_2` FOREIGN KEY (`following_`) REFERENCES `user` (`username`);

--
-- Constraints for table `isin`
--
ALTER TABLE `isin`
  ADD CONSTRAINT `advertisers_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `foreignkeyszibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `isin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `isin_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
