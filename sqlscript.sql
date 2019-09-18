-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2019 at 07:33 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('nishaguptanishagupta', 'guni7248812912');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `fullname` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `country` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobileno` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fullname`, `message`, `country`, `emailid`, `mobileno`) VALUES
('', '', 'india', 'ankitguptagupta1995@gmail.co', 658756),
('abcd', 'kjhiouh', 'india', 'a@b.c', 346),
('jj', 'nn', 'india', 'jl@hj', 44),
('deepa', 'hello', 'india', 'deepa@gmail.com', 346),
('k', 'hi', 'india', 'k@gmail.com', 55),
('g', 'oo', 'india', 'g@gmail.com', 346),
('ni', 'guf', 'india', 'ni@gmail.com', 72),
('v', 'rf', 'india', 'v@gmail.com', 4),
('g', 'tt', 'india', 'g@gmail.com', 4),
('tt', 'rrr', 'india', 'tt@gmail.com', 4),
('ff', 'fffff', 'india', 'ff@gmail.com', 3),
('kk', 'rrw', 'india', 'kk@gmail.com', 5),
('d', 'ds', 'india', 'd@gmail.com', 32),
('venus', 'hxbsfdh', 'india', 'venus@gmail.com', 443),
('akku', 'i donate someting', 'india', 'akku@gmail.com', 346),
('h', 'rfbbhfuif', 'india', 'h@gmail.com', 55);

-- --------------------------------------------------------

--
-- Table structure for table `donateuser`
--

CREATE TABLE IF NOT EXISTS `donateuser` (
  `username` varchar(50) NOT NULL,
  `affectedarea` varchar(50) NOT NULL,
  `reason` varchar(60) NOT NULL,
  `helptype` varchar(60) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donateuser`
--

INSERT INTO `donateuser` (`username`, `affectedarea`, `reason`, `helptype`, `qty`) VALUES
('nisha', 'asam', 'heavyrainfall', 'food', 10),
('nisha', 'asam', 'heavyrainfall', 'food', 10),
('nisha', 'asam', 'heavyrainfall', 'food', 10),
('nisha', 'asam', 'heavyrainfall', 'food', 30),
('ankit', 'kerala', 'flood', 'medicine', 50),
('dfg', 'gujrat', 'flood', 'education', 10),
('reeeeeee', 'asam', 'heavyrainfall', 'food', 4445),
('deepa', 'kerala', 'flood', 'money', 50),
('k', '', 'heavyrainfall', 'food', 30),
('k', 'gujrat', 'heavyrainfall', 'food', 6),
('g', 'kerala', 'heavyrainfall', 'food', 5),
('ni', 'gujrat', 'heavyrainfall', 'food', 6),
('v', 'gujrat', 'heavyrainfall', 'food', 6),
('t', 'asam', 'heavyrainfall', 'food', 4445),
('tt', 'kerala', 'heavyrainfall', 'food', 5),
('ff', 'gujrat', 'heavyrainfall', 'food', 7),
('vivek pandey', 'asam', 'heavyrainfall', 'food', 5),
('d', 'asam', 'heavyrainfall', 'food', 50),
('fe', 'kerala', 'heavyrainfall', 'food', 2),
('nishu', 'gujrat', 'heavyrainfall', 'food', 30),
('nishu', 'gujrat', 'heavyrainfall', 'food', 5),
('tikki', 'kerala', 'heavyrainfall', 'food', 7),
('akku', 'asam', 'heavyrainfall', 'food', 6);

-- --------------------------------------------------------

--
-- Table structure for table `floodarea`
--

CREATE TABLE IF NOT EXISTS `floodarea` (
  `affectedarea` varchar(400) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `helptype` varchar(50) NOT NULL,
  `requirement` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floodarea`
--

INSERT INTO `floodarea` (`affectedarea`, `reason`, `helptype`, `requirement`) VALUES
('asam', 'heavyrainfall', 'money', 5),
('kerala', 'flood', 'money', 6),
('kedarnath', 'flood', 'money', 7);

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE IF NOT EXISTS `userdetail` (
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobilenum` varchar(10) NOT NULL,
  `helptype` varchar(40) NOT NULL,
  `member` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`username`, `password`, `emailid`, `dob`, `mobilenum`, `helptype`, `member`) VALUES
('a', 'a', 'a@gmail.com', '2019-04-11', '22', 'food', 'N'),
('aaa', 'bbb', 'aaa', '0000-00-00', '2222', 'food', 'Y'),
('aaaffff', 'sgggggggggg', 'sdfs@gmail.com', '2019-04-01', '654654', 'food', 'Y'),
('ankit', 'ankit', 'ankitguptagupta1995@gmail.co', '2019-04-19', '7417718283', 'vehicle help', 'N'),
('ankita', 'ankita', 'bk@gmail.com', '2019-04-18', '76587', 'food', 'N'),
('bbb', 'ccc', 'aaa', '0000-00-00', '768765', 'food', 'Y'),
('d', 'd', 'd@gmail.com', '2019-06-05', '33', 'food', 'Y'),
('deepa', 'deepa', 'deepa@gmail.com', '2019-05-06', '346', 'food', 'Y'),
('dx', 'zc', 'sdfs@gmail.com', '2019-04-01', '2415', 'food', 'Y'),
('e', 'w', 'e@gmail.com', '2019-04-04', '4', 'food', 'N'),
('f', 'f', 'f@gmail.com', '2019-04-10', '6', 'food', 'N'),
('ff', 'dd', 'f@gmail.com', '2019-04-04', '2222', 'medicine', 'N'),
('g', 'g', 'g@gmail.com', '2019-04-12', '-3', 'clothes', 'N'),
('gupta', 'gupta', 'gupta@gmail.com', '2019-08-30', '452', 'food', 'Y'),
('jhgy', 'aasaaa', 'kljh@kkjuh.com', '2019-04-16', '76875', 'food', 'N'),
('k', 'k', 'k@gamil.com', '2019-05-09', '-2', 'food', 'Y'),
('kk', 'k', 'k@gamil.com', '2019-06-04', '76587', 'food', 'Y'),
('ni', 'ni', 'ni@gmail.com', '2019-05-06', '72', 'food', 'Y'),
('nisha', 'nisha', 'nishaguptagupta1997@gmail.com', '2019-04-02', '24', 'medicine', 'Y'),
('shaifali', 'shaifali', 'shaifali@gmail.com', '2019-08-13', '654654', 'food', 'Y'),
('t', 't', 't@gmail.com', '2019-05-17', '654654', 'food', 'N'),
('tt', 'tt', 'tt@gmail.com', '2019-05-07', '3', 'food', 'Y'),
('umang', 'umang', 'umang@gmail.com', '2019-07-17', '6556473', 'food', 'Y'),
('v', 'v', 'v@gmail.com', '2019-05-22', '3', 'food', 'Y'),
('vivek pandey', 'pandey123', 'vivek@gmail.com', '2019-06-11', '654654', 'food', 'Y');
