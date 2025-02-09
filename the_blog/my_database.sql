-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 03:46 PM
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
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `regNumber` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `regNumber`, `sex`, `email`, `region`, `district`, `password`, `created_at`) VALUES
(1, 'george milton victor', 'BCS-02-0172-2023', 'Male', 'george@gmail.com', 'Dar es Salaam', 'Ilala', '$2y$10$34vt8QKyIcU0LZ0n8dggGOFqhsnXdLg8UcQct7CjWvGi8FsGWRpn.', '2025-02-08 22:59:50'),
(2, 'george milton victorz', 'BCS-02-0174-2023', 'Male', 'george4@gmail.com', 'Pemba North', 'Micheweni', '$2y$10$.rW9hnmvzhjy5wzgmukkwu9/vsQjjW.FqjFgRyjPgDA0R36yFJdGu', '2025-02-09 09:51:06'),
(3, 'george milton victorz', 'BCS-02-0179-2023', 'Male', 'georg2e@gmail.com', 'Arusha', 'Arusha City', '$2y$10$gq9MnoaPUavtRjuvdAEW9uzkS/jYHBemz4nI7E5Ml5R7/ruatBwPa', '2025-02-09 13:25:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regNumber` (`regNumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
