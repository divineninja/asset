-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2013 at 06:27 PM
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
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` int(2) NOT NULL,
  `link` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `google_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `display_name`, `username`, `password`, `role`, `link`, `picture`, `gender`, `birthday`, `email`, `google_id`) VALUES
(1, 'Rey', 'Lim', 'Rey Lim', 'rey', '0c909a141f1f2c0a1cb602b0b2d7d050', 1, '', '', '', '', '', 0),
(24, 'Reynaldo', 'Lim Jr.', 'Reynaldo Lim Jr.', 'reynaldo.lim.jr@gmail.com', '3d902fc579e0293597830d2902bea1e3', 2, 'https://plus.google.com/109533903393031519449', 'https://lh3.googleusercontent.com/-f702vRpeVcI/AAAAAAAAAAI/AAAAAAAAABc/5LG4_GsJjDE/photo.jpg', 'male', '', 'reynaldo.lim.jr@gmail.com', 2147483647),
(25, 'Rejie Mae', 'Nagallo', 'Rejie Mae Nagallo', 'rejmae23@gmail.com', 'd7c236a5e44941d59944e3a4157e6ee0', 2, 'https://plus.google.com/109988085985941964980', 'https://lh3.googleusercontent.com/-yX_3pVO2oBM/AAAAAAAAAAI/AAAAAAAAACc/6XZvwiIrsas/photo.jpg', 'female', '', 'rejmae23@gmail.com', 2147483647),
(28, 'Rey', 'Lim Jr.', 'Rey Lim Jr.', 'junreyjr1029@gmail.com', '9c275c8ea8e29c951b4fae5d4c99b9f1', 2, 'https://plus.google.com/116231194285574935636', 'https://lh3.googleusercontent.com/-24BUsh5kmGk/AAAAAAAAAAI/AAAAAAAAAU4/2Q7yrzq7En4/photo.jpg', 'male', '', 'junreyjr1029@gmail.com', 2147483647);

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
