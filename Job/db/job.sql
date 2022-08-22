-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2021 at 08:24 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job`
--
CREATE DATABASE IF NOT EXISTS `job` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `job`;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `sname`, `email`, `company`, `mobile`, `address`, `gender`, `username`, `password`) VALUES
(1, 'Kumar', 'kumar@gmail.com', 'VC Company', 9087866422, 'Erode', 'male', 'kumar', '123'),
(2, 'Javid', 'javid@gmail.com', 'BH ', 8967677574, 'Erode', 'male', 'javid', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `tdate` date NOT NULL,
  `jobid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `cusername` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `userid`, `tdate`, `jobid`, `amount`, `cusername`) VALUES
(2, 'raja', '2021-10-18', 2, 5000, 'javid');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `jobtitle` varchar(100) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `ldate` date NOT NULL,
  `budget` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `jobtitle`, `categories`, `skills`, `ldate`, `budget`, `username`, `description`) VALUES
(1, 'Need Static Website', 'Web Design', 'HTML5, JQuery, PHP', '2021-11-05', 'Rs.8000', 'javid', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(2, 'Need Dynamic Website', 'Web Design', 'HTML5, JQuery, PHP', '2021-11-30', 'Rs.20000', 'javid', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE IF NOT EXISTS `jobapply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `jobid` int(100) NOT NULL,
  `cusername` varchar(100) NOT NULL,
  `jsusername` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`id`, `jobid`, `cusername`, `jsusername`, `status`) VALUES
(3, 2, 'javid', 'raja', 'Rejected'),
(5, 1, 'javid', 'raja', 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE IF NOT EXISTS `jobseeker` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uername` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `sname`, `email`, `dob`, `mobile`, `address`, `gender`, `username`, `password`) VALUES
(2, 'Raja', 'raja@gmail.com', '1998-10-16', 9087675656, 'Erode', 'male', 'raja', '123'),
(4, 'Abdullah', 'abdul@gmail.com', '2005-06-15', 8978675646, 'Erode', 'male', 'abdul', '123'),
(7, 'Priya', 'priya@yahoo.com', '2000-10-30', 9897866665, 'Erode', 'female', 'priya', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
