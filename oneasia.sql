-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2014 at 10:11 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oneasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` int(15) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `email`, `pno`, `uname`, `password`) VALUES
(1, 'cus1', 'last name', 'cus1@gmail.com', 123456789, 'cus1', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `home_design1`
--

CREATE TABLE IF NOT EXISTS `home_design1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `home_design1`
--

INSERT INTO `home_design1` (`id`, `paragraph`) VALUES
(1, 'Find homes for sale or rent, calculate affordability and shop mortgage rates â€“ all from your mobile device!'),
(2, 'ertregtryrty'),
(3, 'fefdc'),
(4, ''),
(5, ''),
(6, 'jjj'),
(7, '1'),
(8, 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `home_design2`
--

CREATE TABLE IF NOT EXISTS `home_design2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_design2`
--

INSERT INTO `home_design2` (`id`, `paragraph`) VALUES
(1, 'fdfdfdfdfdfdfdfdfv \r\ndffgddddddddddddddgdfvjhd hadhashd \r\nhakjdhksad hhasd hhgasdj hkasdgj \r\nhasdjasgd hgjasgdas hasgdsgfgdshf \r\nsdfhdf hgsdfdshf gsfsjd fjgsd fsdfd \r\nfdh dhs ch dhc sdh cds h shd hs dhs h \r\nsd hds hds vhd v sd vs vhsdh v \r\nvdhvhsdbvhbshdbvd bdhbsdd ddv dasddad bjsahd fdfdfdfdfdfdfdfdfv \r\ndffgddddddddddddddgdfvjhd hadhashd \r\nhakjdhksad hhasd hhgasdj hkasdgj '),
(2, 'Getting pre-approved is important to demonstrate to real estate agents and sellers that you''re a credible buyer. It means that you are credit-worthy, closer to locking a rate, and able to act fast when you find the home you want to buy. For more information about pre-approval'),
(3, '2');

-- --------------------------------------------------------

--
-- Table structure for table `home_design3_1`
--

CREATE TABLE IF NOT EXISTS `home_design3_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `home_design3_1`
--

INSERT INTO `home_design3_1` (`id`, `paragraph`) VALUES
(1, 'Homes for sale??'),
(2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `home_design3_2`
--

CREATE TABLE IF NOT EXISTS `home_design3_2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home_design3_2`
--

INSERT INTO `home_design3_2` (`id`, `paragraph`) VALUES
(1, '3.2');

-- --------------------------------------------------------

--
-- Table structure for table `home_design3_3`
--

CREATE TABLE IF NOT EXISTS `home_design3_3` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `home_design3_3`
--

INSERT INTO `home_design3_3` (`id`, `paragraph`) VALUES
(1, 'Safe & Secure.'),
(2, ''),
(3, ''),
(4, '3.3');

-- --------------------------------------------------------

--
-- Table structure for table `home_design4`
--

CREATE TABLE IF NOT EXISTS `home_design4` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_design4`
--

INSERT INTO `home_design4` (`id`, `paragraph`) VALUES
(1, 'resent post 1'),
(2, 'recent post 2'),
(3, 'recent post 3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_username` varchar(50) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `login_username`, `login_password`, `fname`, `lname`, `email`, `pno`) VALUES
(1, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'Super', 'Admin', 'admin@oneasiafinance.lk', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `propertyid` int(5) NOT NULL AUTO_INCREMENT,
  `propertyname` varchar(50) NOT NULL,
  `propertycategory` varchar(50) NOT NULL,
  `streetno` varchar(20) NOT NULL,
  `streetaddress` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `propertyprice` varchar(20) NOT NULL,
  `location` varchar(1000) NOT NULL,
  PRIMARY KEY (`propertyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyid`, `propertyname`, `propertycategory`, `streetno`, `streetaddress`, `zipcode`, `city`, `description`, `propertyprice`, `location`) VALUES
(1, 'Family Residence of Grand Proportions on 1012m2', 'House', '45/3 B', 'colombo', '40 000', 'colombo', 'Magnificent workmanship characterises this sprawling family home. Set on 1012m2, 18 Gresham Street blends style, space and', '100000.00', 'photos/home1.jpg'),
(2, 'My property 1', 'Land ', '456', 'gall road', '4545', 'colombo', 'Place continues to build on our reputation as Queensland’s most dynamic, innovative and progressive real estate firm. In both 2013 and 2014, Place has been awarded with the outstanding accolade of Maj', '500,000.00', 'photos/home2.jpg'),
(3, 'my home', 'Apartment', '', '', '', '', '', '30,000.00', 'photos/home3.jpg'),
(4, 'gfdgfg', 'House', '', '', '', '', '', '454545', 'photos/5473bc6d62d5e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_category`
--

CREATE TABLE IF NOT EXISTS `property_category` (
  `property_categoryid` int(5) NOT NULL AUTO_INCREMENT,
  `propertycategory` varchar(50) NOT NULL,
  PRIMARY KEY (`property_categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `property_category`
--

INSERT INTO `property_category` (`property_categoryid`, `propertycategory`) VALUES
(1, 'House'),
(2, 'Land '),
(3, 'Apartment');
