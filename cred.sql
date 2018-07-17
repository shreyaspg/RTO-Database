-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2017 at 04:07 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cred`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dlicense`
--

DROP TABLE IF EXISTS `dlicense`;
CREATE TABLE IF NOT EXISTS `dlicense` (
  `did` int(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `dob` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'not issued',
  PRIMARY KEY (`did`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dlicense`
--

INSERT INTO `dlicense` (`did`, `email`, `name`, `age`, `type`, `blood`, `dob`, `status`) VALUES
(1125681583, 'spg@spg', 'Shreyas', '28', 'MC50CC', 'A+', '1999-08-12', 'issued');

-- --------------------------------------------------------

--
-- Table structure for table `doc2`
--

DROP TABLE IF EXISTS `doc2`;
CREATE TABLE IF NOT EXISTS `doc2` (
  `email` varchar(50) NOT NULL,
  `file` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` int(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drivdoc`
--

DROP TABLE IF EXISTS `drivdoc`;
CREATE TABLE IF NOT EXISTS `drivdoc` (
  `email` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivdoc`
--

INSERT INTO `drivdoc` (`email`, `file`, `type`, `size`) VALUES
('spg@spg', '1755-driv.pdf', 'application/pdf', 10);

-- --------------------------------------------------------

--
-- Table structure for table `fancy`
--

DROP TABLE IF EXISTS `fancy`;
CREATE TABLE IF NOT EXISTS `fancy` (
  `fid` int(10) NOT NULL,
  `dl` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `plate` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'not issued',
  PRIMARY KEY (`fid`),
  UNIQUE KEY `reg` (`reg`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9002 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fancy`
--

INSERT INTO `fancy` (`fid`, `dl`, `email`, `reg`, `plate`, `amt`, `status`) VALUES
(1118431255, '1125681583', 'spg@spg', '123456789', '20003', '500', 'issued');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

DROP TABLE IF EXISTS `license`;
CREATE TABLE IF NOT EXISTS `license` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'not issued',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `email`, `name`, `age`, `type`, `blood`, `dob`, `status`) VALUES
(1396122855, 'sh@sh', 'shreyas', '26', 'LMV-NT', 'B+', '7788-08-12', ' issued'),
(1144729961, 'spg@spg', 'Shreyas', '28', 'MC50CC', 'A+', '1999-08-12', 'issued'),
(1284370889, 'spg@gmail.com', 'Shreyas', '26', 'MC50CC', 'A+', '1997-12-12', 'not issued');

-- --------------------------------------------------------

--
-- Table structure for table `numb`
--

DROP TABLE IF EXISTS `numb`;
CREATE TABLE IF NOT EXISTS `numb` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(10) NOT NULL DEFAULT 'KA 01 A',
  `last` int(5) NOT NULL DEFAULT '0',
  `avail` varchar(50) NOT NULL DEFAULT 'available',
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20006 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numb`
--

INSERT INTO `numb` (`id`, `prefix`, `last`, `avail`, `price`) VALUES
(20001, 'KA 01 A', 1, 'available', 50000),
(20002, 'KA 01 A', 1111, 'available', 45000),
(20003, 'KA 01 A', 1999, 'not available', 10000),
(20004, 'KA 01 A', 1111, ' available', 45000),
(20005, 'KA 01 A', 1999, 'available', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `alt` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `pwd`, `name`, `gender`, `phone`, `alt`) VALUES
(46, 'shre@shr', 'tumblr123', 'shreyas', 'Male', '9999999999', '7888888888'),
(48, 's@s', 'tumblr123', 'shrys', 'Male', '9538365578', '8904165578'),
(49, 'ss@ss', '12345678', 'shreyas  G', 'Male', '9535835353', '1323235656'),
(50, 'shreyasgaikwad@gmail.com', 'tumblr123', 'shreyas P G', 'Male', '9538959595', '6659595656'),
(51, 'h@h', '12345678', 'shreyas', 'Male', '9895959555', '1234567898'),
(52, 'she@grh', '', '', 'Male', '', ''),
(53, 'sy@sy', '123456', 'shryeas', 'Male', '6599999999', '9999999999'),
(54, 'sh@sh', 'shreyas123', 'shreyas gaikwad', 'Male', '9888888888', '9999999999'),
(55, 'sivnah@as', '12345678', 'sdkfnk', 'Male', '9999999999', '9999999999'),
(56, 'spg@spg', 'tumblr123', 'shreyas', 'Male', '9999999999', '9999999999'),
(57, 'spg@gmail.com', 'shreyas123', 'shreyas', 'Male', '9597959595', '9299595959');

-- --------------------------------------------------------

--
-- Table structure for table `uplo`
--

DROP TABLE IF EXISTS `uplo`;
CREATE TABLE IF NOT EXISTS `uplo` (
  `email` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uplo`
--

INSERT INTO `uplo` (`email`, `file`, `type`, `size`) VALUES
('spg@spg', '40844-learn.pdf', 'application/pdf', 11),
('sh@sh', '1951-hi.pdf', 'application/pdf', 45);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `photo` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `email` varchar(15) NOT NULL,
  `regno` int(50) NOT NULL,
  `did` varchar(20) NOT NULL,
  `chassis` varchar(20) NOT NULL,
  `engine` varchar(20) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `manu` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'not issued',
  PRIMARY KEY (`did`),
  UNIQUE KEY `reg` (`reg`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`email`, `regno`, `did`, `chassis`, `engine`, `reg`, `fuel`, `manu`, `model`, `status`) VALUES
('spg@spg', 1181502313, '1125681583', '12345', '1234165456', '600', 'petrol', 'HOnda', 'City', 'not issued');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
