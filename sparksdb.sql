-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2021 at 04:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparksdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `snum` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(25) NOT NULL,
  `receiver` varchar(25) DEFAULT NULL,
  `balance` int(25) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`snum`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`snum`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'chandana', 'swathi', 33, '2021-08-19 09:24:57'),
(2, 'chandana', 'swathi', 3, '2021-08-19 09:24:57'),
(3, 'chandana', 'swathi', 67, '2021-08-19 09:25:16'),
(4, 'pandithya', 'jhansi', 5, '2021-08-19 18:18:41'),
(5, 'chandana', 'sirireddy', 897, '2021-08-19 18:34:39'),
(6, 'nizam', 'mouni', 8000, '2021-08-19 18:39:21'),
(7, 'jhansi', 'shaista', 55, '2021-08-19 21:20:43'),
(8, 'soumya', 'saicharan', 6, '2021-08-19 21:22:56'),
(9, 'pandithya', 'sindhu', 789, '2021-08-19 21:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `balance` int(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'swathi', 'swathi@gmail.com', 987667),
(2, 'chandana', 'chandana@gmail.com', 97857),
(3, 'vennela', 'vennela@gmail.com', 987564),
(4, 'pranay', 'pranay@gmail.com', 789654),
(5, 'soumya', 'soumya@gmail.com', 879659),
(6, 'shaista', 'shaista@gmail.com', 89820),
(7, 'sindhu', 'sindhu@gmail.com', 99554),
(8, 'deeksha', 'deeksha@gmail.com', 678954),
(9, 'nizam', 'nizam@gmail.com', 900765),
(10, 'mouni', 'mouni@gmail.com', 97765),
(11, 'jhansi', 'jhansi@gmail.com', 98604),
(12, 'pandithya', 'pandithya@gmail.com', 89974),
(13, 'ravinder', 'ravinder@gmail.com', 9876588),
(14, 'saicharan', 'saicharan@gmail.com', 1000005),
(15, 'sirireddy', 'sirireddy@gmail.com', 880893);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
