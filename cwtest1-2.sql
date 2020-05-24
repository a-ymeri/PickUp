-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 01:52 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `user_id` varchar(30) NOT NULL,
  `event_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` varchar(13) NOT NULL,
  `date_of_event` date NOT NULL,
  `time_of_event` time NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `max_users` int(11) DEFAULT NULL,
  `duration_of_event` time DEFAULT NULL,
  `date_of_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `event_id` varchar(13) NOT NULL,
  `hashtag_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`event_id`, `hashtag_name`) VALUES
('5ec869a2dff54', 'warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `isin`
--

CREATE TABLE `isin` (
  `user_id` varchar(30) NOT NULL,
  `event_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('aymeri', 'Ardit Ymeri', 'aymeri@citycollege.sheffield.eu', 'Computer Science', '1234'),
('aymerii', 'Ardit Ymeri', 'aymerii@citycollege.sheffield.eu', NULL, '1234'),
('ldavidovijk', 'lola', 'ldavidovikj@citycollege.sheffield.eu', 'Computer Science', '123'),
('ljanuzi', 'Learta Januzi', 'ljanuzi@citycollege.sheffield.eu', 'Computer Science', '123'),
('mrestelica', 'Memli Reselica', 'restelicamemli@gmail.com', 'Computer Science', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`user_id`,`event_id`);

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
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`event_id`,`hashtag_name`);

--
-- Indexes for table `isin`
--
ALTER TABLE `isin`
  ADD PRIMARY KEY (`user_id`,`event_id`);

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
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
