-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2014 at 09:32 PM
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
('ee7f8d1bd2cbb7434354a980737880ce', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:32.0) Gecko/20100101 Firefox/32.0 FirePHP/0.7.4', 1412794483, 'a:4:{s:9:"user_data";s:0:"";s:11:"thiran_user";a:9:{s:2:"id";s:8:"10010102";s:4:"role";s:2:"ST";s:10:"first_name";s:4:"test";s:9:"last_name";s:4:"user";s:5:"email";s:14:"test@gmail.com";s:10:"college_id";s:5:"ACCET";s:14:"profile_notify";s:4:"done";s:11:"profile_use";s:27:"user_general,user_education";s:15:"profile_created";s:10:"2014-10-08";}s:12:"is_logged_in";b:1;s:10:"table_name";s:14:"user_education";}');

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
  `profile_notify` varchar(50) NOT NULL DEFAULT 'empty',
  `profile_use` text,
  `profile_created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10010103 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `college_id`, `phone_no`, `uid`, `activation_code`, `active`, `forgot_password_code`, `forgot_password_time`, `last_update`, `ypassout`, `role`, `company_name`, `profile_notify`, `profile_use`, `profile_created`) VALUES
(10010101, 'kishok', 'kumar', 'kishokz92@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ACCET', '9688767457', '0', 'd7656658536eebe1d99b23550860bb78', 1, NULL, NULL, '2014-10-08 11:00:17', 2014, 'AL', '', 'empty', NULL, NULL),
(10010102, 'test', 'user', 'test@gmail.com', '508df4cb2f4d8f80519256258cfb975f', 'ACCET', '9688767456', '0', '98a62d9d4e448255ef7c7a72781f9430', 1, NULL, NULL, '2014-10-08 14:53:10', 2015, 'ST', '', 'done', 'user_general,user_education', '2014-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_assessment`
--

CREATE TABLE IF NOT EXISTS `user_assessment` (
  `id` int(150) NOT NULL,
  `amcat_score` varchar(200) NOT NULL,
  `ph_score` varchar(200) NOT NULL,
  `other_score` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE IF NOT EXISTS `user_education` (
  `id` int(150) NOT NULL,
  `tenth` varchar(300) NOT NULL,
  `twelvth` varchar(300) NOT NULL,
  `diploma` varchar(100) NOT NULL,
  `degree` varchar(225) NOT NULL,
  `type_degree` varchar(150) NOT NULL,
  `college` varchar(225) NOT NULL,
  `university_regno` int(100) NOT NULL,
  `specialization` varchar(225) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `attachment` varchar(300) DEFAULT NULL,
  `is_current_stud` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `tenth`, `twelvth`, `diploma`, `degree`, `type_degree`, `college`, `university_regno`, `specialization`, `duration`, `cgpa`, `attachment`, `is_current_stud`) VALUES
(10010102, '76', '67', '89', 'B.E', 'full', 'ACCET', 12345, 'cse', 'aug 2010 - may 2014', '7.6', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_educ_prof_achievements`
--

CREATE TABLE IF NOT EXISTS `user_educ_prof_achievements` (
  `id` int(11) NOT NULL,
  `summary` varchar(225) NOT NULL,
  `achievement` varchar(225) NOT NULL,
  `year_achievement` varchar(100) NOT NULL,
  `organization` varchar(225) NOT NULL,
  `score` varchar(10) NOT NULL,
  `is_certification` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_experience`
--

CREATE TABLE IF NOT EXISTS `user_experience` (
  `id` int(150) NOT NULL,
  `organization` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `us_experience` varchar(300) NOT NULL,
  `join_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_current_role` int(10) NOT NULL,
  `is_entreprenur` int(10) NOT NULL,
  `is_ngo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_external_profile`
--

CREATE TABLE IF NOT EXISTS `user_external_profile` (
  `id` int(150) NOT NULL,
  `website` varchar(100) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_extra_curr_achievements`
--

CREATE TABLE IF NOT EXISTS `user_extra_curr_achievements` (
  `id` int(150) NOT NULL,
  `category` varchar(225) NOT NULL,
  `activtiy` varchar(225) NOT NULL,
  `awards_recognition` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_general`
--

CREATE TABLE IF NOT EXISTS `user_general` (
  `id` int(100) NOT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `photo` blob NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_general`
--

INSERT INTO `user_general` (`id`, `dob`, `photo`, `gender`, `address`, `city`, `state`, `pincode`) VALUES
(10010102, '21/03/2011', 0x687474703a2f2f6c6f63616c686f73742f54686972616e2f6173736574732f696d672f352e6a7067, 'male', 'porur', 'chennai', 'TN', '60040');

-- --------------------------------------------------------

--
-- Table structure for table `user_mentoring_interests`
--

CREATE TABLE IF NOT EXISTS `user_mentoring_interests` (
  `id` int(150) NOT NULL,
  `skill` varchar(225) NOT NULL,
  `skill_level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_paper_research`
--

CREATE TABLE IF NOT EXISTS `user_paper_research` (
  `id` int(150) NOT NULL,
  `category` varchar(200) NOT NULL,
  `web_url` text NOT NULL,
  `cat_name` varchar(225) NOT NULL,
  `year` varchar(200) NOT NULL,
  `co_authors` varchar(225) NOT NULL,
  `recognition` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE IF NOT EXISTS `user_skills` (
  `id` int(150) NOT NULL,
  `skill` varchar(225) NOT NULL,
  `skill_level` varchar(100) NOT NULL,
  `skill_type` varchar(225) NOT NULL,
  `duration` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE IF NOT EXISTS `user_status` (
  `id` int(150) NOT NULL,
  `follows` int(50) NOT NULL,
  `followers` int(50) NOT NULL,
  `hiring_interests` int(50) NOT NULL,
  `projects_doing` int(50) NOT NULL,
  `projects_mentored` int(50) NOT NULL,
  `forum_posts` int(50) NOT NULL,
  `forum_points` int(50) NOT NULL,
  PRIMARY KEY (`id`)
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
