-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220523.649d9b34ea
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2022 at 07:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

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
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `error` int(11) DEFAULT NULL,
  `isVerify` int(2) DEFAULT 0,
  `role` int(2) DEFAULT 0,
  `abnormal` int(2) DEFAULT 0,
  `OTP` int(34) NOT NULL,
  `timeblock` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__account`
--

INSERT INTO `__account` (`phone`, `email`, `dob`, `frontImg`, `backImg`, `username`, `password`, `status`, `error`, `isVerify`, `role`, `abnormal`, `OTP`, `timeblock`) VALUES
('0332420477', 'admin@gmail.com', '2022-05-19', '../Resource/upload/628b59d3ea1124.42378319.jpg', '../Resource/upload/628b59d3ea1523.76749906.jpg', '524396180', '123456', 1, 0, 1, 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `__buyphonecard`
--

CREATE TABLE `__buyphonecard` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `cardtype` varchar(30) NOT NULL,
  `cardvalue` int(11) NOT NULL,
  `serial` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `date` date NOT NULL,
  `fee` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__buyphonecard`
--

INSERT INTO `__buyphonecard` (`id`, `username`, `cardtype`, `cardvalue`, `serial`, `code`, `date`, `fee`) VALUES
(12, '524396180', 'viettel', 10000, 928579060, 1111184877, '2022-05-23', 0),
(13, '524396180', 'viettel', 10000, 819077954, 1111126997, '2022-05-23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `__card`
--

CREATE TABLE `__card` (
  `cardnumber` int(6) NOT NULL,
  `expiration` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__card`
--

INSERT INTO `__card` (`cardnumber`, `expiration`, `cvv`) VALUES
(111111, '2022-10-10', 411),
(222222, '2022-11-11', 443),
(333333, '2022-12-12', 577);

-- --------------------------------------------------------

--
-- Table structure for table `__historyrecharge`
--

CREATE TABLE `__historyrecharge` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `cardnumber` int(11) DEFAULT NULL,
  `dateRecharge` date DEFAULT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__historyrecharge`
--

INSERT INTO `__historyrecharge` (`id`, `username`, `cardnumber`, `dateRecharge`, `value`) VALUES
(1, '524396180', 222222, '2022-05-23', 56000),
(2, '524396180', 222222, '2022-05-23', 56000),
(3, '524396180', 222222, '2022-05-23', 56000),
(4, '524396180', 222222, '2022-05-23', 56000),
(5, '524396180', 222222, '2022-05-23', 56000),
(6, '524396180', 333333, '2022-05-23', 56000),
(7, '524396180', 333333, '2022-05-23', 56000);

-- --------------------------------------------------------

--
-- Table structure for table `__money`
--

CREATE TABLE `__money` (
  `username` varchar(30) NOT NULL,
  `money` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__money`
--

INSERT INTO `__money` (`username`, `money`) VALUES
('524396180', 448000);

-- --------------------------------------------------------

--
-- Table structure for table `__mycard`
--

CREATE TABLE `__mycard` (
  `username` varchar(30) NOT NULL,
  `cardnumber` int(6) NOT NULL,
  `expiration` date NOT NULL,
  `cvv` int(3) NOT NULL,
  `money` int(30) NOT NULL,
  `date` date DEFAULT NULL,
  `times` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `__mycard`
--

INSERT INTO `__mycard` (`username`, `cardnumber`, `expiration`, `cvv`, `money`, `date`, `times`) VALUES
('524396180', 222222, '2022-11-11', 443, 0, '2022-05-23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `__account`
--
ALTER TABLE `__account`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `__buyphonecard`
--
ALTER TABLE `__buyphonecard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `__card`
--
ALTER TABLE `__card`
  ADD PRIMARY KEY (`cardnumber`);

--
-- Indexes for table `__historyrecharge`
--
ALTER TABLE `__historyrecharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `__money`
--
ALTER TABLE `__money`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `__mycard`
--
ALTER TABLE `__mycard`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `__buyphonecard`
--
ALTER TABLE `__buyphonecard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `__historyrecharge`
--
ALTER TABLE `__historyrecharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `__money`
--
ALTER TABLE `__money`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `__account` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



