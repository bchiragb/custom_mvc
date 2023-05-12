-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2023 at 11:50 AM
-- Server version: 5.7.31-log
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esti`
--

-- --------------------------------------------------------

--
-- Table structure for table `final_esti`
--

DROP TABLE IF EXISTS `final_esti`;
CREATE TABLE IF NOT EXISTS `final_esti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lotid` int(10) NOT NULL,
  `wt` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `clarity` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `datime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_esti`
--

INSERT INTO `final_esti` (`id`, `lotid`, `wt`, `color`, `clarity`, `quality`, `datime`) VALUES
(1, 101, '22', 'f', 'vs1', 'noneee', '2022-03-14 17:34:21'),
(2, 102, '65.30', 'g', 'if', 'stgvvv', '2022-03-14 17:34:21'),
(3, 103, '0.99', 'H', 'I1', 'NONggg', '2022-03-14 17:34:21'),
(4, 92, '1.51', 'G', 'VS', 'NONeee', '2022-03-15 11:28:17'),
(5, 817, '2.63', 'M', 'SI2', 'medvvv', '2022-03-15 11:28:17'),
(6, 55, '1.90', 'D', 'IF', 'STGggg', '2022-03-15 11:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `gia_esti`
--

DROP TABLE IF EXISTS `gia_esti`;
CREATE TABLE IF NOT EXISTS `gia_esti` (
  `g_id` int(10) NOT NULL AUTO_INCREMENT,
  `g_lotid` int(10) NOT NULL,
  `g_wt` varchar(100) NOT NULL,
  `g_color` varchar(100) NOT NULL,
  `g_clarity` varchar(100) NOT NULL DEFAULT '5% - 10% - 15% - 20%',
  `g_quality` varchar(100) NOT NULL,
  `g_datime` datetime DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gia_esti`
--

INSERT INTO `gia_esti` (`g_id`, `g_lotid`, `g_wt`, `g_color`, `g_clarity`, `g_quality`, `g_datime`) VALUES
(1, 101, '2.23', 'f', 'vs2', 'noneee', '2022-03-14 16:34:21'),
(2, 102, '5.30', 'g', 'if', 'stgvvv', '2022-03-14 07:34:21'),
(4, 92, '1.51', 'G', 'VS', 'NONeee', '2022-03-15 11:28:44'),
(5, 817, '2.63', 'M', 'SI2', 'medvvv', '2022-03-15 11:28:44'),
(6, 55, '1.90', 'D', 'IF', 'STGggg', '2022-03-15 11:28:44'),
(9, 1111, '2222', '333', '5% - 10% - 15% - 20%', 'STGggg', '2022-10-01 14:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `grader_esti`
--

DROP TABLE IF EXISTS `grader_esti`;
CREATE TABLE IF NOT EXISTS `grader_esti` (
  `r_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_lotid` int(10) NOT NULL,
  `r_wt` varchar(100) NOT NULL,
  `r_color` varchar(100) NOT NULL,
  `r_clarity` varchar(100) NOT NULL,
  `r_quality` varchar(100) NOT NULL,
  `r_datime` datetime DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grader_esti`
--

INSERT INTO `grader_esti` (`r_id`, `r_lotid`, `r_wt`, `r_color`, `r_clarity`, `r_quality`, `r_datime`) VALUES
(1, 101, '6.56', 'f', 'vs1', 'noneee', '2022-03-14 08:34:21'),
(2, 102, '1.30', 'g', 'if', 'stgvvv', '2022-03-14 10:34:21'),
(3, 103, '1.26', 'D', 'I3', 'NONeee', '2022-03-14 12:34:21'),
(4, 92, '1.51', 'G', 'VS', 'NONeee', '2022-03-15 11:28:31'),
(5, 817, '2.63', 'M', 'SI2', 'medvvv', '2022-03-15 11:28:31'),
(6, 55, '1.90', 'D', 'IF', 'STGggg', '2022-03-15 11:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `empid` int(10) NOT NULL,
  `empnm` varchar(250) NOT NULL,
  `emppass` varchar(250) NOT NULL,
  `isadmin` tinyint(4) NOT NULL,
  `insdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=314 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `empid`, `empnm`, `emppass`, `isadmin`, `insdate`) VALUES
(1, 121, 'asd', '6512bd43d9caa6e02c990b0a82652dca', 1, '2021-11-24 16:10:21'),
(2, 122, 'qwe', '6512bd43d9caa6e02c990b0a82652dca', 0, '2021-11-24 16:10:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
