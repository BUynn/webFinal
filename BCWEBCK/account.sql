-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 06:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `__account`
--

CREATE TABLE `__account` (
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date DEFAULT NULL,
  `frontImg` text DEFAULT NULL,
  `backImg` text DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `error` int(11) DEFAULT NULL,
  `isVerify` int(2) DEFAULT 0,
  `role` int(2) DEFAULT 0,
  `abnormal` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__account`
--

INSERT INTO `__account` (`phone`, `email`, `dob`, `frontImg`, `backImg`, `username`, `password`, `status`, `error`, `isVerify`, `role`, `abnormal`) VALUES
('0389341740', 'khangbayern4869@gmail.com', '2022-05-21', '../upload/', '../upload/', '731982650', 'Q3qM4i', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `__account`
--
ALTER TABLE `__account`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;