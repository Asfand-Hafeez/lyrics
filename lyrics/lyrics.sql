-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 06:20 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lyrics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'love'),
(2, 'sad'),
(3, 'rapsong'),
(4, 'friendship');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `lyrics` longtext CHARACTER SET utf16 COLLATE utf16_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `user_id`, `cat_id`, `lyrics`) VALUES
(2, 'Romantic', '2', '2', 'Sad'),
(3, 'Zara si', '2', '4', 'Zara SI Dil me'),
(4, 'Juda', '4', '4', 'Juda hai tu'),
(5, 'Ishq Bulava', '4', '2', 'Ishq Bulava Jab AYe'),
(6, 'Ishq Bulava', '4', '1', 'Ishq Bulawa'),
(7, 'Hony', '9', '3', 'Rap'),
(8, 'Teri KAmar ', '10', '3', 'Soni Teri Kamar Py'),
(9, 'Zara si', '10', '1', 'zara c'),
(10, 'Romantic', '4', '1', 'I m happy'),
(11, 'Romatic', '2', '1', 'Beautiful song'),
(12, 'Romantic', '13', '1', 'hello ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`) VALUES
(2, 'asfand', 'asfand@gmail.com', '123', 'male'),
(3, 'jalil', 'jalil@gmail.com', '123', 'male'),
(4, 'mujahid', 'mujahid@gmail.com', '123', 'male'),
(9, 'usman', 'usman@gmail.com', '123', 'male'),
(10, 'Yousaf', 'Yousaf@gmail.com', '123', 'male'),
(11, 'Zaeem', 'Zaeem@gmail.com', '123', 'male'),
(12, 'zain', 'zain@gmail.com', '123', 'male'),
(13, 'Mujahid', 'immujahidkhan6@gmail.com', '12345', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
