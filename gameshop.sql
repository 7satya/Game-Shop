-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 03:24 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gameshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `Cust_id` varchar(15) NOT NULL,
  `Cust_name` varchar(24) NOT NULL,
  `Phone` char(10) DEFAULT NULL,
  `Email` varchar(24) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Password` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Cust_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Cust_id`, `Cust_name`, `Phone`, `Email`, `Address`, `Password`) VALUES
('@ryavee', 'Ravi Raj Raut', '8989036085', '2016301@iiitdmj.ac.in', 'Hall-4 IIITDMJ 482005', '8989036085'),
('sumit.ax', 'Sumit Anand', '7992233742', '2016269@iiitdmj.ac.in', 'Hall-4 IIITDMJ 482005', '12345678'),
('prashant@777', 'Prashant Mishra', '8085443751', '2016188@iiitdmj.ac.in', 'Allahabad', 'prashant'),
('Satya@123', 'Satya prakash', '9926627554', '2016231@iiitdmj.ac.in', 'Hall-4 IIITDMJ 482005', '77777777'),
('updesh12', 'Updesh', '1234567891', '2016282@iiitdmj.ac.in', 'Hall-4 IIITDMJ 482005', '12345678'),
('harshith02', 'harshith', '9515977239', '2016283@iiitdmj.ac.in', 'Hall-4 IIITDMJ 482005', '9515977239');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `Game_id` int(5) NOT NULL,
  `Game_name` varchar(24) NOT NULL,
  `Price` int(15) NOT NULL,
  `Ratings` int(3) DEFAULT NULL,
  `Genre` varchar(24) DEFAULT NULL,
  `Platform` varchar(24) DEFAULT NULL,
  `Quantity` int(4) DEFAULT NULL,
  PRIMARY KEY (`Game_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`Game_id`, `Game_name`, `Price`, `Ratings`, `Genre`, `Platform`, `Quantity`) VALUES
(701, 'Mario Cart8', 1200, 6, 'Action', 'Wii U', 5),
(702, 'The Amazing SpiderMan', 1700, 7, 'Action', 'PS4', 21),
(703, 'Border Lands', 1500, 6, 'Shooting', 'PC', 23),
(704, 'Child Of Light', 1400, 5, 'RPG', 'PS4', 31),
(705, 'Child Of Light2', 1450, 5, 'RPG', 'PS4', 4),
(706, 'Bound Of Flames', 1799, 7, 'Action', 'PC', 9),
(707, 'God Of War', 1800, 8, 'Compilation', 'PS Vista', 39),
(708, 'Sports Friends', 1599, 6, 'Action', 'PS3', 33),
(709, 'Wolfenstien', 1999, 7, 'Shooting', 'Xbox1', 13),
(710, 'Car Race', 1999, 9, 'Racing', 'PC', 18),
(711, 'NFS Shift', 1899, 8, 'Racing', 'PC', 25),
(712, 'Titan Fall', 2099, 6, 'Shooting', 'Xbox 360', 6),
(713, 'Flappy Bird', 799, 6, 'Action', 'Android', 0),
(714, 'Dark Souls', 1600, 7, 'RPG', 'PS3', 29),
(715, 'Heroes Of WarCraft', 1700, 7, 'Battle', 'PC', 13),
(716, 'Pure Chess', 399, 6, 'Board', 'PS3', 37),
(717, 'Assasins Creed', 1499, 8, 'Action', 'Xbox 360', 21),
(718, 'X-men: Battle Of Atom', 1899, 8, 'Battle', 'PC', 16),
(719, 'CS Global', 1999, 9, 'Adventure', 'PC', 30),
(720, 'Counter Strike 6.0', 1499, 8, 'Shooting', 'PC', 20),
(725, 'Need For Speed', 1499, 9, 'Racing', 'PS4', 20),
(727, 'Prince Of Persia ', 1599, 8, 'Adventure', 'PC', 17),
(721, 'Subway Surfers', 370, 6, 'Run', 'Android', 16),
(722, 'Angry Bird', 750, 6, 'Shooting', 'Android', 12),
(723, 'Moto Racer', 800, 7, 'Racing', 'PC', 18),
(724, 'Temple Run', 999, 8, 'Approach', 'Android', 10),
(726, 'Street Fighter', 1399, 7, 'Fight', 'Xbox 360', 15),
(728, 'Panda in the desert', 999, 5, 'Mysterious', 'PC', 16),
(729, 'Call Of Duty', 1799, 8, 'Adventure', 'PS4', 20),
(730, 'Crack Down-3', 1399, 7, 'Fight', 'PC', 17),
(731, 'Pokemon Go', 1099, 7, 'Mysterious', 'Android/I-Phone', 15),
(732, 'Shadow of War', 1099, 6, 'Fight', 'PC', 17),
(733, 'Fight Racing', 1299, 7, 'Racing', 'PC/Android', 18),
(734, 'Froza 7', 1499, 7, 'Racing', 'Xbox 360', 13),
(735, 'The Amazing Spider Man-2', 1199, 8, 'Roaming', 'PC', 20),
(736, 'GTA 5', 1899, 9, 'Racing and Roam', 'PC', 27),
(737, 'The Amazing Spider Man-3', 1399, 6, 'Roaming', 'PC', 12),
(738, 'Dota 2', 1300, 7, 'Fighting', 'ps', 6),
(739, 'Assasin''s Creed ORIGINS', 1500, 7, 'Adventure', 'PC', 19),
(740, 'Titan Fall-II', 1799, 8, 'Fight', 'X box 360', 16);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `Cust_id` varchar(15) NOT NULL,
  `Game_id` int(3) NOT NULL,
  PRIMARY KEY (`Cust_id`,`Game_id`),
  KEY `Game_id` (`Game_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Cust_id`, `Game_id`) VALUES
('@ryavee', 721),
('@ryavee', 733),
('@ryavee', 736),
('harshith02', 734),
('prashant@777', 703),
('prashant@777', 726),
('Satya@123', 702),
('Satya@123', 711),
('Satya@123', 729),
('sumit.ax', 704),
('sumit.ax', 721),
('sumit.ax', 722),
('updesh12', 715),
('updesh12', 733);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_id` int(5) NOT NULL AUTO_INCREMENT,
  `Cust_id` varchar(15) DEFAULT NULL,
  `Game_id` int(5) DEFAULT NULL,
  `Orderdate` date DEFAULT NULL,
  `Amount` int(9) DEFAULT NULL,
  PRIMARY KEY (`Order_id`),
  KEY `Cust_id` (`Cust_id`),
  KEY `Game_id` (`Game_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_id`, `Cust_id`, `Game_id`, `Orderdate`, `Amount`) VALUES
(125, '@ryavee', 733, '2017-11-27', 1299),
(124, '@ryavee', 733, '2017-11-27', 1299),
(123, 'Satya@123', 730, '2017-11-27', 1399),
(122, 'Satya@123', 729, '2017-11-27', 1799),
(121, 'Satya@123', 721, '2017-11-27', 370),
(120, 'Satya@123', 723, '2017-11-27', 800),
(119, 'Satya@123', 722, '2017-11-27', 750),
(118, 'Satya@123', 722, '2017-11-27', 750),
(117, 'Satya@123', 721, '2017-11-27', 370),
(116, 'Satya@123', 721, '2017-11-27', 370),
(115, 'Satya@123', 702, '2017-11-27', 1700),
(114, 'Satya@123', 717, '2017-11-27', 1499),
(113, 'Satya@123', 711, '2017-11-27', 1899),
(126, '@ryavee', 733, '2017-11-27', 1299),
(127, '@ryavee', 736, '2017-11-27', 1899),
(128, '@ryavee', 721, '2017-11-27', 370),
(129, 'prashant@777', 703, '2017-11-27', 1500),
(130, 'prashant@777', 726, '2017-11-27', 1399),
(131, 'prashant@777', 726, '2017-11-27', 1399),
(132, 'sumit.ax', 704, '2017-11-28', 1400),
(133, 'sumit.ax', 704, '2017-11-28', 1400),
(134, 'sumit.ax', 704, '2017-11-28', 1400),
(135, 'sumit.ax', 704, '2017-11-28', 1400),
(136, 'updesh12', 715, '2017-11-28', 1700),
(137, 'updesh12', 733, '2017-11-28', 1299),
(138, 'Satya@123', 729, '2017-11-28', 1799),
(139, 'harshith02', 734, '2017-11-28', 1499),
(140, 'sumit.ax', 722, '2017-11-28', 750),
(141, 'sumit.ax', 721, '2017-11-28', 370);
