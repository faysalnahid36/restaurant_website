-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2015 at 10:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maharaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `submission_date` date DEFAULT NULL,
  `serial` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `images_path`, `submission_date`, `serial`) VALUES
(33, 'Tea', 'images/Tea.jpg', '2015-08-29', 1),
(34, 'Coffee', 'images/Coffee.jpg', '2015-08-29', 2),
(35, 'Juice', 'images/Juice.jpg', '2015-08-29', 3),
(36, 'Rice', 'images/Rice.jpg', '2015-08-29', 4),
(37, 'Appetizer', 'images/Appetizer.jpg', '2015-08-29', 5),
(38, 'Chicken', 'images/Chicken.jpg', '2015-08-30', 6),
(40, 'Meat', 'images/Meat.jpg', '2015-08-30', 7),
(41, 'Soup', 'images/Soup.jpg', '2015-08-30', 8),
(42, 'Drinks', 'images/Drinks.jpg', '2015-08-30', 9),
(43, 'Beef', 'images/Beef.jpg', '2015-08-30', 10),
(44, 'Indian', 'images/Indian.jpg', '2015-08-30', 11),
(45, 'Thai', 'images/Thai.jpg', '2015-08-30', 12);

-- --------------------------------------------------------

--
-- Table structure for table `manu_item`
--

CREATE TABLE IF NOT EXISTS `manu_item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_details` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `manu_item`
--

INSERT INTO `manu_item` (`item_id`, `item_name`, `item_details`, `category_name`) VALUES
(22, 'Black Tea', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Tea'),
(23, 'Hot Tea', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Tea'),
(24, 'Cold Coffee', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Coffee'),
(25, 'Hot Coffee', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Coffee'),
(27, 'Lemon Juice', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Juice'),
(28, 'Mango Juice', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Juice'),
(29, 'Normal Rice', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Rice'),
(30, 'Fried Rice', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea  Some thing about tea', 'Rice'),
(31, 'Chicken Curry', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea', 'Appetizer'),
(32, 'Apple Juice', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea', 'Juice'),
(33, 'Cold Tea', 'Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea Some thing about tea', 'Tea');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
