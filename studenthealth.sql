-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 06:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aopeclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenthealth`
--

CREATE TABLE `studenthealth` (
  `MatricNo` int(10) NOT NULL,
  `HealthCareNo` varchar(20) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Programme` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `MaritalStatus` varchar(50) NOT NULL,
  `healthQuestion1` varchar(255) NOT NULL,
  `healthQuestion2` varchar(255) NOT NULL,
  `healthQuestion3` varchar(255) NOT NULL,
  `healthQuestion4` varchar(255) NOT NULL,
  `healthQuestion5` varchar(255) NOT NULL,
  `healthQuestion6` varchar(255) NOT NULL,
  `healthQuestion7` varchar(255) NOT NULL,
  `healthQuestion8` varchar(255) NOT NULL,
  `healthQuestion9` varchar(255) NOT NULL,
  `healthQuestion10` varchar(255) NOT NULL,
  `healthQuestion11` varchar(255) NOT NULL,
  `healthQuestion12` varchar(255) NOT NULL,
  `healthQuestion13` varchar(255) NOT NULL,
  `healthQuestion14` varchar(255) NOT NULL,
  `healthQuestion15` varchar(255) NOT NULL,
  `healthQuestion16` varchar(255) NOT NULL,
  `healthQuestion17` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Uploaded` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenthealth`
--
ALTER TABLE `studenthealth`
  ADD PRIMARY KEY (`MatricNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
