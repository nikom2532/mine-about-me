-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2013 at 02:53 AM
-- Server version: 5.1.68
-- PHP Version: 5.3.22

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imingcom_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Mine_aboutme_ver4_traceip`
--

CREATE TABLE IF NOT EXISTS `Mine_aboutme_ver4_traceip` (
  `traceip_id` int(6) NOT NULL AUTO_INCREMENT,
  `Hostname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IP_Blacklist_Check` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Continent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Capital` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ISP` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Organization` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Time_zone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Continent_Lat_Lon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Country_Lat_Lon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City_Lat_Lon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IP_Language` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IP_Currency` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IDD_Code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`traceip_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Mine_aboutme_ver4_traceip`
--

INSERT INTO `Mine_aboutme_ver4_traceip` (`traceip_id`, `Hostname`, `IP_Blacklist_Check`, `Continent`, `Country`, `Capital`, `State`, `City`, `ISP`, `Organization`, `Time_zone`, `Continent_Lat_Lon`, `Country_Lat_Lon`, `City_Lat_Lon`, `IP_Language`, `IP_Currency`, `IDD_Code`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
