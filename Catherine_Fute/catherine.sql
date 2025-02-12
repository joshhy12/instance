-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2025 at 01:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catherine`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(11) NOT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `registration_number` varchar(15) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `region` varchar(12) DEFAULT NULL,
  `district` varchar(12) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `full_name`, `registration_number`, `sex`, `email`, `region`, `district`, `password`) VALUES
(1, 'Sharon Massawe', 'BCS-01-0024-202', 'Female', 'kassimsharon12@gmail', 'Kilimanjaro', '', '$2y$10$2thaVcGu'),
(2, 'Catherine Fute', 'BCS-01-0032-202', 'Female', 'catherinefute34@gmai', 'Arusha', 'Kyela', '$2y$10$lGSS0mTh'),
(3, 'Sharon Massawe', 'BCS-01-0032-202', 'Male', 'kassimsharon12@gmail', 'Arusha', 'AruMeru', '$2y$10$zfFtA0h1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
