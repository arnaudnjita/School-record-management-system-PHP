-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 12:39 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `first_name` varchar(220) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `dob` varchar(2000) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `phone number` varchar(200) NOT NULL,
  `class` date NOT NULL,
  `specialty` varchar(7) NOT NULL,
  `yoe` varchar(7) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `matricule` varchar(45) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `first_name` varchar(220) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `dob` varchar(2000) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `parent_name` varchar(45) NOT NULL,
  `parent_phone` varchar(200) NOT NULL,
  `class` date NOT NULL,
  `specialty` varchar(7) NOT NULL,
  `pob` varchar(7) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

CREATE TABLE admin IF NOT EXISTS(
   `id` INT(25) AUTO_INCREMENT PRIMARY KEY,
   `username` VARCHAR(200) NOT NULL,
   `password` VARCHAR(100) NOT NULL
);