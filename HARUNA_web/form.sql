-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 07:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(255) NOT NULL,
  `registrationnumber` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `registrationnumber`, `sex`, `email`, `region`, `district`, `pwd`) VALUES
('haruna suleman jembe', 'bcs-01-0057-2023', 'Male', 'twaha@gmail.com', 'KUSINI UNGUJA', 'kati', 'twfy@123'),
('haruna suleman jembe', 'bcs-01-0057-2023', 'Male', 'twaha@gmail.com', 'KUSINI UNGUJA', 'kati', 'twfy@123'),
('twaha faki yaya', 'bcs-01-0057-2023', 'Male', 'twaha@gmail.com', 'KUSINI UNGUJA', 'kusini', 'haru@1234'),
('twaha faki yaya', 'bcs-01-0057-2023', 'Male', 'twaha@gmail.com', 'KUSINI UNGUJA', 'kusini', 'haru@1234'),
('papy kabamba sishimbi', 'bff-01-0067-2030', 'Male', 'twaha@gmail.com', 'KUSINI UNGUJA', 'kati', 'papy@1234'),
('papy kabamba sishimbi', 'bff-01-0067-2030', 'Male', 'twaha@gmail.com', 'KUSINI UNGUJA', 'kati', 'papy@1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
