-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2015 at 06:36 AM
-- Server version: 5.5.16-log
-- PHP Version: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cap`
--
CREATE DATABASE IF NOT EXISTS `cap` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `cap`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_date` date DEFAULT NULL,
  ` customer_name` varchar(35) COLLATE utf8_persian_ci DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=11 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, ` customer_name`) VALUES
(1, '1394-05-09', 'کریمی'),
(2, '1394-08-09', 'محمدی'),
(3, '1394-08-09', 'سعیدی'),
(4, '1394-08-09', 'حمیدی'),
(5, '1394-08-09', 'سعیدی فزد'),
(6, '1394-08-09', 'حمیدی'),
(7, '1394-03-09', 'زمانی'),
(8, '1394-07-09', 'قدسی'),
(9, '1394-08-09', 'قاسمی'),
(10, '1394-08-09', 'نادری');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`) VALUES
(1, 'G800', 'رنگ آبی تک سیم کارت', 250000),
(2, 'k500', 'رنگ آبی دو سیم کارت', 300000),
(3, 'G2800', 'رنگ آبی تک سیم کارت', 250000),
(4, 'H10', 'رنگ آبی تک سیم کارت', 900000),
(5, 'K20', 'رنگ آبی تک سیم کارت', 150000),
(6, 'Z20', 'رنگ آبی تک سیم کارت', 520000),
(7, 'Q200', 'رنگ آبی تک سیم کارت', 320000),
(8, 'S100', 'رنگ سبز تک سیم کارت', 520000),
(9, 'S600', 'رنگ آبی تک سیم کارت', 150000),
(10, 'LG30', 'دو سیم کارت رنگ سبز', 450000),
(11, 'LG80', 'دو سیم کارت رنگ سبز', 600000),
(12, 'SamSung', 'رنگ آبی تک سیم کارت', 9020000),
(13, 'Sumsungs2', 'رنگ آبی تک سیم کارت', 620000),
(14, 'SamSung300', 'رنگ آبی تک سیم کارت', 900000),
(15, 'Sumsungs800', 'رنگ آبی تک سیم کارت', 620000),
(16, 'Y300', 'رنگ آبی تک سیم کارت', 520000),
(17, 'LG9000', 'رنگ آبی تک سیم کارت', 150000),
(18, 'H100', 'رنگ آبی تک سیم کارت', 450000),
(19, 'k500Y', 'رنگ آبی تک سیم کارت', 620000),
(20, 'G2890', 'رنگ آبی تک سیم کارت', 520000),
(21, 'K200', 'رنگ آبی تک سیم کارت', 620000),
(22, 'LG3080', 'رنگ آبی تک سیم کارت', 450000),
(23, 'k5000', 'رنگ آبی تک سیم کارت', 150000),
(24, 'G28000', 'رنگ آبی تک سیم کارت', 900000),
(25, 'S6000', 'رنگ آبی تک سیم کارت', 320000),
(26, 'GM', 'رنگ آبی تک سیم کارت', 300000),
(27, 'GM2', 'رنگ آبی تک سیم کارت', 150000),
(28, 'GM800', 'رنگ آبی تک سیم کارت', 9020000),
(29, 'GM28', 'رنگ آبی تک سیم کارت', 320000),
(30, 'GR100', 'رنگ آبی تک سیم کارت', 900000),
(31, 'GR500', 'رنگ آبی تک سیم کارت', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `products_ordered`
--

CREATE TABLE IF NOT EXISTS `products_ordered` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products_ordered`
--

INSERT INTO `products_ordered` (`id`, `product_id`, `order_id`, `count`, `price`) VALUES
(1, 1, 1, 1, 250000),
(2, 1, 2, 1, 250000),
(3, 3, 3, 1, 300000),
(4, 3, 4, 1, 300000),
(5, 3, 5, 1, 300000),
(6, 3, 6, 1, 300000),
(7, 11, 7, 1, 600000),
(8, 11, 8, 1, 600000),
(9, 11, 9, 1, 600000),
(10, 11, 10, 1, 600000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
