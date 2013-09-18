-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2013 at 04:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proj_asset`
--
CREATE DATABASE `proj_asset` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proj_asset`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `sku` varchar(15) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`) VALUES
(1, 'administrator'),
(2, 'subscriber'),
(3, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `display_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `display_name`, `username`, `password`, `role`) VALUES
(1, 'Rey', 'Lim', 'Rey Lim', 'rey', '0c909a141f1f2c0a1cb602b0b2d7d050', 1),
(2, 'testsad', 'test', 'test testsad', 'test', '0c909a141f1f2c0a1cb602b0b2d7d050', 1),
(13, '9898', '9898', '9898 9898', '98998', 'aeffb84eed583c8229afae4d108cf65d', 3),
(14, 'Lim', 'Rejie Mae', 'Rejie Mae Lim', 'rejiemae', '74be16979710d4c4e7c6647856088456', 2),
(15, '56', '5', '56 5', '56', '709f6d3d82be6a351eb1d9655086b4d8', 2),
(16, '323', '232', '323 232', '23', '6f181f206b8555c5dc619bc206ab35ad', 1),
(17, '323', '232', '323 232', '236', 'dfcd681eb60f68215c849b58742f9d22', 1),
(18, '323', '232', '323 232', '2365', 'fd27d41aa7f51aa257c95525285180bc', 1),
(19, '89', '89', '89 89', '89', '7bfb7ad34fcdb1c9063a736ec06c48e0', 1),
(20, '89', '89', '89 89', '892', '68f06a8cfc26e63c27fc591a7df2a304', 1),
(21, '89', '1', '89 1', '9', '4c0d13d3ad6cc317017872e51d01b238', 3);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `company` varchar(40) NOT NULL,
  `other_details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `last_name`, `first_name`, `company`, `other_details`) VALUES
(9, 'Lim', 'Rey', 'Ck', 'Another Test'),
(10, 'Nagallo', 'Rejie Mae', 'Love Company', 'This is a test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
