-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2015 at 05:12 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tests`
--

-- --------------------------------------------------------

--
-- Table structure for table `femalecont`
--

CREATE TABLE IF NOT EXISTS `femalecont` (
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `femalecont`
--

INSERT INTO `femalecont` (`fname`, `lname`) VALUES
('Anne', 'Oyindamola Okeya'),
('Carole', 'Laure Ndoumbe'),
('Esther', 'Wanyaga Njue'),
('Fiona', 'Musanga Kwatemba'),
('Gertrude', 'Kariuki'),
('Ghyslaine', 'Uwimana'),
('Irene', 'Jima Ajogbor'),
('Joan', 'Bazilika Lado'),
('Maureen', 'Asukute Emu'),
('Nadege', 'Nibizi'),
('Sela', 'Mumuli'),
('Serah', 'Ngugi');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `username` int(6) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`username`, `time`) VALUES
(635568, '1415759223'),
(635568, '1415759276'),
(635568, '1415759344'),
(635568, '1415759449');

-- --------------------------------------------------------

--
-- Table structure for table `malecont`
--

CREATE TABLE IF NOT EXISTS `malecont` (
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malecont`
--

INSERT INTO `malecont` (`fname`, `lname`) VALUES
('Antonio', 'Longangi Amandla'),
('Brian', 'Wilson'),
('Bryan', 'Mutethia'),
('Chibuzo', 'Chinwuba'),
('Eric', 'Muiruri'),
('Kamal', 'Ali Manzi'),
('Kevin', 'Moronge'),
('Ludwig', 'Mpondo'),
('Makuei', 'Makur Kulang Liei'),
('Peter', 'Taylor');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` int(6) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `voted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `salt`, `voted`) VALUES
(1, 627568, 'a2a8d6b3e84e9ba72d88dde6f2037ca131df5e81fc5c9021ef4bcd43b5d785c6349d58a427b84b807d9af4489615ca4f12da22db951b31f1f536ca7205c85e45', '5b8c1f75a6a969e362e208cd18372df9485025d4480d9ebebcab43380ffa7d15eae8d7e0a8c7f45ee8f05b66bfcc1156079dbdae625224068cef80c26108975f', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `username` int(1) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mrusiu` varchar(25) NOT NULL,
  `missusiu` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
