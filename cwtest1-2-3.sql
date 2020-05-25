-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 12:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `user_id` varchar(30) NOT NULL,
  `event_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`user_id`, `event_id`) VALUES
('aymeri', '5ec920195b343'),
('ljanuzi', '5ec92aa4b6304'),
('ljanuzi', '5ec92b1620757'),
('ljanuzi', '5ec92b2b4f83e');

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
  `date_of_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `description` longtext NOT NULL,
  `creator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `date_of_event`, `time_of_event`, `subject`, `max_users`, `duration_of_event`, `date_of_posting`, `lat`, `lng`, `description`, `creator`) VALUES
('5ec97190b680b', '2020-05-30', '00:00:00', 'notthis', 4, '00:00:00', '2020-05-23 18:55:13', 40.6373, 22.9369, '', ''),
('5ec983f999926', '2020-05-24', '00:00:00', 'date+1', 4, '00:00:00', '2020-05-24 19:42:58', 40.6373, 22.9369, '', 'ljanuzi'),
('5ec9add3e49b5', '2020-05-24', '00:00:00', 'sun', 4, '00:00:00', '2020-05-23 23:12:20', 40.6373, 22.9369, '', ''),
('5eca2a4453366', '2020-06-07', '00:00:00', 'sunday', 4, '00:00:00', '2020-05-24 08:03:16', 40.6373, 22.9369, '', ''),
('5eca2b8de55c5', '2020-05-24', '00:00:00', '45615302', 4, '00:00:00', '2020-05-24 08:08:45', 40.6348, 22.9343, '', ''),
('5eca2baa35193', '2020-05-24', '00:00:00', 'exception', 4, '00:00:00', '2020-05-24 08:09:14', 40.6348, 22.9343, '', ''),
('5eca2bca2b57a', '2020-05-25', '00:00:00', 'leartajanuziii', 4, '00:00:00', '2020-05-24 08:09:46', 40.646, 22.9381, '', ''),
('5eca40fc541e3', '2020-05-24', '00:00:00', 'file size test', 4, '00:00:00', '2020-05-24 09:40:12', 40.6373, 22.9369, '', ''),
('5eca416810a6d', '2020-05-24', '00:00:00', 'filesize', 4, '00:00:00', '2020-05-24 09:42:00', 40.6373, 22.9369, '', ''),
('5eca4308ba84f', '2020-05-24', '00:00:00', 'max5mb', 4, '00:00:00', '2020-05-24 09:48:56', 40.6373, 22.9369, '', ''),
('5eca43170bfff', '2020-05-24', '00:00:00', 'max5mb2', 4, '00:00:00', '2020-05-24 09:49:11', 40.6373, 22.9369, '', ''),
('5ecadff5bc536', '2020-05-24', '00:00:00', 'Test', 4, '00:00:00', '2020-05-24 20:58:29', 40.647, 22.9431, '#tag1 #tag2', 'ljanuzi'),
('5ecaf1ee042f6', '2020-05-25', '00:00:00', 'MaxUser0', 0, '00:00:00', '2020-05-24 22:15:10', 40.6373, 22.9369, '#tag', 'aymeri'),
('5ecaf5ae06aef', '2020-05-25', '00:00:00', 'TestMax1', 1, '00:00:00', '2020-05-24 22:31:10', 40.6348, 22.9343, '#tag1 #TAG2', 'aymeri');

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
('5ec920195b343', 'test'),
('5ec920195b343', 'test1'),
('5ec920195b343', 'test2'),
('5ec92aa4b6304', 'learta'),
('5ec92b030d8f3', 'januzi'),
('5ec92b1620757', 'hash'),
('5ec92b2b4f83e', 'tag'),
('5ecaaa4865d49', 'test1'),
('5ecaaa4865d49', 'test2'),
('5ecaaa4865d49', 'test3'),
('5ecadff5bc536', 'tag1'),
('5ecadff5bc536', 'tag2'),
('5ecaf1ee042f6', 'tag'),
('5ecaf5ae06aef', 'tag1'),
('5ecaf5ae06aef', 'TAG2');

-- --------------------------------------------------------

--
-- Table structure for table `isin`
--

CREATE TABLE `isin` (
  `user_id` varchar(30) NOT NULL,
  `event_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isin`
--

INSERT INTO `isin` (`user_id`, `event_id`) VALUES
('aymeri', '5ecaf1ee042f6'),
('aymeri', '5ecaf5ae06aef'),
('ljanuzi', '5ec92b2b4f83e'),
('ljanuzi', '5ec983f999926');

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
('ldavidovikj', 'lola', 'ldavidovikj@citycollege.sheffield.eu', 'Computer Science', '123'),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
