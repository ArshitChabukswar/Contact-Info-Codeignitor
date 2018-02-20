-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 09:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci-login-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE IF NOT EXISTS `intern` (
  `user_name` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_age` varchar(40) NOT NULL,
  `user_mobile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`user_name`, `user_password`, `user_email`, `user_age`, `user_mobile`) VALUES
('arshit', 'a9b2846deaba26d6d7e9d080671982bc', 'asrs@gmail.com', '12', '1234554321'),
('jayraj', '7a69c4f04af6915e241e07a7fb81543a', 'jayraj@gmail.com', '20', '1234554321'),
('ramesh', '6fc42c4388ed6f0c5a91257f096fef3c', 'ramesh@gmail.com', '20', '1234554321'),
('ramesh', '6fc42c4388ed6f0c5a91257f096fef3c', 'ramesh@gmail.com', '20', '1234554321'),
('arshit', 'a9b2846deaba26d6d7e9d080671982bc', 'abc@gmail.com', '20', '1234554321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
