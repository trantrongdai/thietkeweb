-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2014 at 12:28 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thietkeweb`
--
CREATE DATABASE IF NOT EXISTS `thietkeweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thietkeweb`;

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE IF NOT EXISTS `baiviet` (
  `idbaiviet` int(11) NOT NULL AUTO_INCREMENT,
  `tenbaiviet` varchar(100) NOT NULL,
  `anhminhhoa` varchar(100) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` longtext NOT NULL,
  `idloaitin` int(11) NOT NULL,
  `trangthai` varchar(15) NOT NULL,
  `thutu` int(11) NOT NULL,
  PRIMARY KEY (`idbaiviet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`idbaiviet`, `tenbaiviet`, `anhminhhoa`, `tomtat`, `noidung`, `idloaitin`, `trangthai`, `thutu`) VALUES
(18, 'Ä‘Ã ', 'fafda', 'fdafda', 'fdsasfda', 0, 'KhÃ´ng hiá»ƒn t', 0),
(19, 'fdsaf', 'fdafd', 'fafd', 'fafd', 0, 'Hiá»ƒn thá»‹', 5),
(20, 'Ä‘Ã ', 'fafda', 'fdafda', 'fdsasfda', 0, 'Hiá»ƒn thá»‹', 0),
(21, 'fdsaf', 'fdafd', 'fafd', 'fafd', 0, 'KhÃ´ng hiá»ƒn t', 5),
(22, 'Ä‘Ã ', 'fafda', 'fdafda', 'fdsasfda', 0, 'KhÃ´ng hiá»ƒn t', 0),
(23, 'fdsaf', 'fdafd', 'fafd', 'fafd', 0, 'KhÃ´ng hiá»ƒn t', 5),
(24, 'con ga', '', '<p>fxavadzv</p>\r\n<p>Ä‘áº¥</p>', '<p>fdsafdsa</p>\r\n<p>fdsafdsa</p>', 0, 'KhÃ´ng hiá»ƒn t', 0),
(25, '', '', '', '', 0, 'Hiá»ƒn thá»‹', 0),
(26, '', '', '', '<p>&nbsp;cvshghhgjdsfdasgfdg</p>\r\n<p><em>fdsafdsafdsafdsa</em></p>\r\n<p><em>fdsafdsafdsafdsa</em></p>', 0, 'Hiá»ƒn thá»‹', 0),
(27, '', '', '', '', 0, 'Hiá»ƒn thá»‹', 0),
(30, '', 'uploads/201406281034540ee04d21d531b3660a2be1b374158378.jpg', '<p>hahah</p>', '<p>hoho</p>', 0, 'KhÃ´ng hiá»ƒn t', 5),
(31, 'tretrd', 'uploads/201406291039042.PNG', '<p>dafdsaf</p>', '<p>fdsafdsa</p>', 0, 'Hiá»ƒn thá»‹', 0),
(32, '', 'uploads/201406291039123.png', '', '', 0, 'Hiá»ƒn thá»‹', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitin`
--

CREATE TABLE IF NOT EXISTS `loaitin` (
  `idloaitin` int(11) NOT NULL AUTO_INCREMENT,
  `tenloaitin` varchar(50) NOT NULL,
  `thutu` int(11) NOT NULL,
  `trangthai` varchar(30) NOT NULL,
  PRIMARY KEY (`idloaitin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `loaitin`
--

INSERT INTO `loaitin` (`idloaitin`, `tenloaitin`, `thutu`, `trangthai`) VALUES
(2, 'VÄƒn hÃ³a', 2, 'Hiá»ƒn thá»‹'),
(3, 'áº¨m thá»±c', 3, 'Hiá»ƒn thá»‹'),
(5, 'Ngoai ngu', 4, 'KhÃ´ng hiá»ƒn thá»‹'),
(23, 'fdsfds', 5, 'Hiá»ƒn thá»‹'),
(26, 'dtdgfd', 8, 'KhÃ´ng hiá»ƒn thá»‹'),
(27, '', 0, 'Hiá»ƒn thá»‹'),
(28, '', 0, 'Hiá»ƒn thá»‹'),
(30, '', 0, 'Hiá»ƒn thá»‹'),
(31, '', 0, 'Hiá»ƒn thá»‹'),
(32, '', 0, 'KhÃ´ng hiá»ƒn thá»‹');

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE IF NOT EXISTS `quangcao` (
  `idquangcao` int(11) NOT NULL AUTO_INCREMENT,
  `tenquangcao` varchar(100) NOT NULL,
  `anhminhhoa` varchar(100) NOT NULL,
  `trangthai` varchar(15) NOT NULL,
  `diachi` varchar(0) NOT NULL,
  PRIMARY KEY (`idquangcao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
