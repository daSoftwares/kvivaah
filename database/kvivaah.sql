-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 06:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kshaadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`id`, `userName`, `password`, `isActive`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matched`
--

CREATE TABLE IF NOT EXISTS `tbl_matched` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userIdBride` int(11) NOT NULL,
  `userIdGroom` int(11) NOT NULL,
  `matchedPhoto` text NOT NULL,
  `dateCreated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_sessions` (
  `id` varchar(255) NOT NULL,
  `data` text,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userDisplayName` varchar(30) NOT NULL,
  `userEmail` varchar(40) NOT NULL,
  `userMobile` varchar(10) NOT NULL,
  `userPassword` varchar(12) NOT NULL,
  `userDobAndTime` datetime NOT NULL,
  `userBirthPlace` varchar(30) NOT NULL,
  `isManglik` tinyint(1) NOT NULL DEFAULT '0',
  `userCurrentLocation` varchar(30) NOT NULL,
  `userEducation` varchar(30) NOT NULL,
  `userJobStatus` varchar(20) NOT NULL,
  `userType` tinyint(2) NOT NULL DEFAULT '0',
  `gurdianMobile` varchar(10) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `userStatus` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `userDisplayName`, `userEmail`, `userMobile`, `userPassword`, `userDobAndTime`, `userBirthPlace`, `isManglik`, `userCurrentLocation`, `userEducation`, `userJobStatus`, `userType`, `gurdianMobile`, `dateCreated`, `dateModified`, `userStatus`) VALUES
(1, 'Rohit Shrivastava', 'rohit0122@gmail.com', '9158924084', 'holishit', '1987-01-22 11:32:00', 'Ratlam', 1, '', 'M.Sc Computers', '', 1, '9096012714', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'Himani Shrivatava', 'himani1214@gmail.com', '9096012714', 'holishit', '1988-12-14 10:05:00', 'Paradh', 0, '', 'B.A English', '', 0, '9158924084', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_images`
--

CREATE TABLE IF NOT EXISTS `tbl_user_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `imgSize` enum('USER_100X100','USER_FULL_LENGTH') NOT NULL,
  `imgName` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user_images`
--

INSERT INTO `tbl_user_images` (`id`, `userId`, `imgSize`, `imgName`) VALUES
(1, 1, 'USER_100X100', '14050060332013-12-17 20.38.01.jpg'),
(2, 1, 'USER_FULL_LENGTH', '14050060342013-12-17 20.39.33.jpg'),
(3, 1, 'USER_FULL_LENGTH', '14050060352013-12-30 17.41.07.jpg'),
(4, 2, 'USER_100X100', '14050110362014-01-17 14.22.38.jpg'),
(5, 2, 'USER_FULL_LENGTH', '14050110372014-01-23 13.27.30.jpg'),
(6, 2, 'USER_FULL_LENGTH', '14050110382013-12-17 20.38.57.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
