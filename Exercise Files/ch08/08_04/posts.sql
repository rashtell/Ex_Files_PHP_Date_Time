-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2016 at 06:24 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datetime_esst`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `submitted`) VALUES
(1, 'Down the Rabbit-Hole', '2016-04-14 09:34:28'),
(2, 'The Pool of Tears', '2016-04-15 19:15:39'),
(3, 'A Caucus-Race and a Long Tale', '2016-04-16 16:15:41'),
(4, 'The Rabbit Sends in a Little Bill', '2016-04-17 10:19:38'),
(5, 'Advice from a Caterpillar', '2016-04-18 19:22:41'),
(6, 'Pig and Pepper', '2016-04-20 20:18:19'),
(7, 'A Mad Tea-Party', '2016-04-21 04:30:13'),
(8, 'The Queen\'s Croquet-Ground', '2016-04-21 19:03:12'),
(9, 'The Mock Turtle\'s Story', '2016-04-23 14:08:30'),
(10, 'The Lobster Quadrille', '2016-04-24 07:26:02'),
(11, 'Who Stole the Tarts?', '2016-04-25 17:22:37'),
(12, 'Alice\'s Evidence', '2016-04-26 19:23:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
