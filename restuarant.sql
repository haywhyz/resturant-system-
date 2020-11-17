-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2020 at 10:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restuarant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(68) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(66) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `fullname`, `email`, `phone`, `address`, `password`) VALUES
(1, 'olayinka', 'olayinkancs@gmail', '08141875056', 'ilaro, ogun state', '123456'),
(2, 'elon musk adesewa', 'olayinkancs@yahoo.com', '1128072762', 'ilaro, ogun state', 'adeola'),
(6, '', '', '1128072762', 'ilaro, ogun state', ''),
(5, '', '', '08141875056', '', ''),
(7, '', '', '1128072762', 'ilaro, ogun state', ''),
(8, '', '', '1128072762', 'ilaro, ogun state', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(70) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `address` varchar(120) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `fullname`, `gender`, `email`, `phone`, `address`) VALUES
(1, 'elon musk adesewa', 'Select gender', 'hk2dw@xduv.com', '1128072762', 'dExzioej5Y');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(55) NOT NULL,
  `description` varchar(120) NOT NULL,
  `price` varchar(20) NOT NULL,
  `pics` varchar(66) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `description`, `price`, `pics`) VALUES
(4, 'continental dishes', 'rice and beans', '4500', 'menu_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `delivery_phone` varchar(66) NOT NULL,
  `delivery_address` varchar(66) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `total_price` varchar(55) NOT NULL,
  `arrival_time` datetime(6) NOT NULL,
  `departure_time` datetime(6) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `menu_id`, `customer_id`, `delivery_phone`, `delivery_address`, `quantity`, `total_price`, `arrival_time`, `departure_time`, `status`) VALUES
(4, 4, 2, 'ilaro, ogun state', '1128072762', '2', '9000', '2020-11-09 21:57:23.000000', '2020-11-09 21:57:23.000000', '0'),
(2, 4, 2, 'ilaro, ogun state', '1128072762', '1', '4500', '2020-11-09 21:29:29.000000', '2020-11-09 21:29:29.000000', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
