-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2014 at 04:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` varchar(150) NOT NULL,
  `college_name` varchar(225) NOT NULL,
  `range_val` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `range_val`, `location`) VALUES
('ACCET', 'Alagappa chettair college of engg & tech', '{"from":"101010002010","to":"101010102010"}', 'karaikudi'),
('TC', 'Thiyagarajar college of engg', '{"from":"102010102011","to":"102010202011"}', 'madurai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  `college_id` varchar(150) DEFAULT NULL,
  `phone_no` varchar(15) NOT NULL,
  `uid` varchar(200) NOT NULL DEFAULT '0',
  `activation_code` varchar(32) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `forgot_password_code` varchar(32) DEFAULT NULL,
  `forgot_password_time` timestamp NULL DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ypassout` int(10) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `college_id`, `phone_no`, `uid`, `activation_code`, `active`, `forgot_password_code`, `forgot_password_time`, `last_update`, `ypassout`, `user_type`, `company_name`) VALUES
('101010002010', 'salim', 'raja', '0', 'e10adc3949ba59abbe56e057f20f883e', 'ACCET', '9088747314', '0', NULL, 0, NULL, NULL, '2014-09-24 14:26:32', 2014, 'ST010', ''),
('101010002011', 'kishok', 'kumar', '0', 'e10adc3949ba59abbe56e057f20f883e', 'ACCET', '9088747314', '0', NULL, 0, NULL, NULL, '2014-09-24 14:28:42', 2014, 'AL010', ''),
('101010002012', 'kumar', 'raja', 'kis.kath2@gmail.com', 'c33367701511b4f6020ec61ded352059', 'ACCET', '9088747314', '0', NULL, 0, NULL, NULL, '2014-09-24 14:49:45', 2014, 'AL010', ''),
('101010002013', 'guru', 'parasad', 'guru@gmail.com', 'c33367701511b4f6020ec61ded352059', 'ACCET', '9088747314', '0', NULL, 0, NULL, NULL, '2014-09-24 14:52:43', 2014, 'AL010', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` varchar(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`) VALUES
('AL010', 'alumni'),
('RE010', 'recruiter'),
('ST010', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
