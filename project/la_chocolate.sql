-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2019 at 06:37 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la chocolate`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `User id` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`User id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product name` varchar(100) NOT NULL,
  `Product Type` varchar(100) NOT NULL,
  `Product price` int(4) NOT NULL,
  `id` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product name`, `Product Type`, `Product price`, `id`) VALUES
('Dark Continental Collection (284g) ', 'Dark Chocolate', 8, 1),
('Mint Collection Chocolate (282g)', 'Dark Chocolate', 9, 2),
('Bag of Luxury Dinner Mints (105g)', 'Dark Chocolate', 7, 3),
('Almond Marzipan Chocolate (268g)', 'Dark Chocolate', 8, 4),
('Mint Truffle Chocolate(34g)', 'Dark Chocolate', 3, 5),
('Alpini Bar (34g)', 'Dark Chocolate', 2, 6),
('Milk Chunky Caramels (103g)', 'Milk Chocolate', 4, 10),
('Milk Chocolate Brazils (104g)', 'Milk Chocolate', 3, 7),
('Alpini Bag (110g)', 'Milk Chocolate', 7, 8),
('Bag of Diplomat Chocolates (100g)', 'Milk Chocolate', 5, 9),
('Mint Truffle Chocolate Bar (34g)', 'Milk Chocolate', 3, 11),
('Alpini Bar (34g)', 'Milk Chocolate', 2, 12),
('Caramel Truffle Chocolate Bar (34g) ', 'Milk Chocolate', 2, 13),
('Bag of Honeycomb Chocolates (97g)\r\n', 'Milk Chocolate', 3, 14),
('Almond Marzipan Chocolate \r\n', 'Milk Chocolate', 1, 15),
('Sicilian Mousse Bag (110g) \r\n', 'White Chocolate	', 3, 16),
('Vanilla Truffle Bag (105g)', 'White Chocolate	', 4, 17),
('Bag of Cappuccino Chocolates (97g) \r\n', 'White Chocolate	', 7, 18),
('Sicilian Mousse Bar (34g) ', 'White Chocolate	', 5, 19),
('Cappuccino Chocolate Bar (34g)', 'White Chocolate	', 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Full name` varchar(100) NOT NULL,
  `last name` varchar(100) NOT NULL,
  `User id` varchar(20) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  PRIMARY KEY (`User id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Full name`, `last name`, `User id`, `E-mail`, `password`, `Sex`) VALUES
('', '', '', '', '', ''),
('k', 'k', 'kk', 'kk@hotmail.com', '11', ''),
('kholod', 'gg', 'ee', 'kx@gmail.com', '11', ''),
('q', 'q', 'qq', 'kk@hotmail.com', '111', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
