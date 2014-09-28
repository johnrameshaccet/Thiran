-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2014 at 05:50 PM
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

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('abe65733698824a5cf67d2ec81e82f99', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:32.0) Gecko/20100101 Firefox/32.0', 1411914038, 'a:6:{s:9:"user_data";s:0:"";s:11:"thiran_user";a:6:{s:2:"id";s:8:"10101001";s:4:"role";s:2:"AL";s:10:"first_name";s:6:"kishok";s:9:"last_name";s:5:"kumar";s:5:"email";s:19:"kishokz92@gmail.com";s:10:"college_id";s:5:"ACCET";}s:12:"is_logged_in";b:1;s:20:"flash:old:alert_type";s:7:"success";s:21:"flash:old:alert_title";s:0:"";s:19:"flash:old:alert_msg";s:14:"Login success.";}');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` varchar(150) NOT NULL,
  `college_name` varchar(225) NOT NULL,
  `university_affilliation` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(150) NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `university_affilliation`, `address`, `city`) VALUES
('ACCET', 'Alagappa chettair college of engg & tech', 'Anna University', 'Alagappa road', 'karaikudi'),
('TC', 'Thiyagarajar college of engg', 'Anna University', 'madurai', 'madurai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
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
  `role` varchar(20) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10101003 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `college_id`, `phone_no`, `uid`, `activation_code`, `active`, `forgot_password_code`, `forgot_password_time`, `last_update`, `ypassout`, `role`, `company_name`) VALUES
(10101001, 'kishok', 'kumar', 'kishokz92@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ACCET', '9688737417', '0', 'a5255074c4366dd28f9160bf579f54f0', 1, NULL, NULL, '2014-09-28 08:21:07', 2014, 'AL', ''),
(10101002, 'salim', 'kumar', 'salim@gmail.com', 'c33367701511b4f6020ec61ded352059', '0', '9688747317', '0', '6ddd52b4affb8c73cb3de54d4c4bd567', 1, NULL, NULL, '2014-09-28 08:21:27', 0, 'RE', 'accenture');

-- --------------------------------------------------------

--
-- Table structure for table `user_general`
--

CREATE TABLE IF NOT EXISTS `user_general` (
  `id` int(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `photo` blob NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('AL', 'alumni'),
('RE', 'recruiter'),
('ST', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
