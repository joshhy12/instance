-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 12:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocls_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `date_created`) VALUES
(8, 'techpc', 'finebrand', 1, '2025-01-01 23:30:15'),
(9, 'Hp', 'Hp brand', 1, '2025-01-01 23:31:34'),
(10, 'Dell', 'Dell brand', 1, '2025-01-01 23:31:48'),
(11, 'Lenovo', 'Lenovo brand', 1, '2025-01-01 23:32:13'),
(12, 'SSD', '256', 1, '2025-02-08 21:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `client_id` int(30) NOT NULL,
  `inventory_id` int(30) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `client_id`, `inventory_id`, `price`, `quantity`, `date_created`) VALUES
(4, 7, 0, 75, 1, '2025-02-07 16:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `status`, `date_created`) VALUES
(5, 'Personal computer', 'personal pc', 1, '2025-01-01 23:33:33'),
(6, 'Desktop', 'Desktop computer', 1, '2025-01-01 23:34:13'),
(7, 'ACCESSORIES', 'SSD', 1, '2025-02-08 21:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(30) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `default_delivery_address` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `gender`, `contact`, `email`, `password`, `default_delivery_address`, `date_created`) VALUES
(1, 'Mark', 'Cooper', 'Male', '09123654789', 'mcooper@mail.com', '$2y$10$GfYNgIJ8E86XdO6ZA5qwW.55KzSqyl9FDOpVCEZVYmaqwKjCCezKa', 'Sample Address Only', '2023-04-03 13:05:15'),
(2, 'dorca', 'maduca', 'Male', '09786534235', 'dorca@gmail.com', '202cb962ac59075b964b07152d234b70', 'arusha', '2024-12-30 16:16:43'),
(3, 'admin', 'admin', 'Male', '06202040', 'admin@gmail.com', '674f3c2c1a8a6f90461e8a66fb5550ba', '', '2025-02-03 23:18:12'),
(4, 'jo', 'jo', 'Male', 'abc', 'jo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '', '2025-02-04 00:25:48'),
(5, 'john', 'john', 'Male', '64t7589578', 'johnjohn@gmil.com', '527bd5b5d689e2c32ae974c6229ff785', '1010', '2025-02-04 15:07:07'),
(6, 'a', 'b', 'Male', '123', 'aa@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '', '2025-02-07 16:50:20'),
(7, 'b', 'c', 'Male', '123', 'bc@gmail.com', '0416bdd194bf37ec39a8bf8053f3d276', '12', '2025-02-07 16:55:03'),
(8, 'b', 'c', 'Male', '123', 'bcc@gmail.com', 'dc9262a469f6f315f74c087a7b3a7f35', '', '2025-02-07 16:57:40'),
(9, 'aa', 'bb', 'Male', 'bc', 'aabb@gmail.com', '5e394281dfac81c1e7dddcaf4d35d1f6', '', '2025-02-07 18:16:33'),
(10, 'A', 'R', 'Male', '1', 'AR@gmail.com', '5b61a1b298a0d06efa6933a97e68d763', '', '2025-02-07 18:31:21'),
(11, 'o', 'o', 'Male', '12', 'oo@gmail.com', '25f9e794323b453885f5181f1b624d0b', '', '2025-02-07 18:52:10'),
(12, 'o', 'o', 'Male', '12', 'o@gmail.com', 'b59c67bf196a4758191e42f76670ceba', '1', '2025-02-07 20:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` double NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `quantity`, `date_created`, `date_updated`) VALUES
(1, 1, 10, '2023-04-03 11:30:20', NULL),
(2, 2, 15, '2023-04-03 13:48:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `client_id` int(30) NOT NULL,
  `delivery_address` text NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `order_type` tinyint(1) NOT NULL COMMENT '1= pickup,2= deliver',
  `amount` double NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `paid` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `brand_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `sub_category_id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` float(12,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `sub_category_id`, `name`, `price`, `status`, `date_created`) VALUES
(3, 9, 6, 0, 'HP', 500000.00, 1, '2025-02-04 15:33:58'),
(5, 8, 5, 0, 'techpc', 75.00, 1, '2025-02-04 16:17:16'),
(6, 8, 5, 0, 'ThinkPad', 680000.00, 1, '2025-02-08 21:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `total_amount` double NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specification_list`
--

CREATE TABLE `specification_list` (
  `id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specification_list`
--

INSERT INTO `specification_list` (`id`, `product_id`, `meta_field`, `meta_value`) VALUES
(79, 3, 'processor', 'INTEL'),
(80, 3, 'clock_speed', '2.5'),
(81, 3, 'GPU', 'INTEL'),
(82, 3, 'RAM', '4GB'),
(83, 3, 'RAM_slot', '2PORT'),
(84, 3, 'SSD_OR_HDD', 'SSD'),
(85, 3, 'OS', 'ALL'),
(86, 3, 'display_size', '12N'),
(87, 3, 'display_type', 'LED'),
(88, 3, 'display_touch', 'YES'),
(89, 3, 'power_adapter', 'YES'),
(90, 3, 'battery_capacity', '3500'),
(91, 3, 'battery_hour', '6HR'),
(92, 3, 'dimension', '20X20'),
(93, 3, 'weight', '500G'),
(94, 3, 'colors', 'SILVER'),
(95, 3, 'IO_ports', 'YES'),
(96, 3, 'fingerprint_sensor', 'YES'),
(97, 3, 'camera', 'YES'),
(98, 3, 'keyboard', 'LIGHT'),
(99, 3, 'touchpad', 'YES'),
(100, 3, 'WIFI', 'YES'),
(101, 3, 'bluetooth', 'YES'),
(102, 3, 'speaker', '2PORT'),
(103, 3, 'mic', 'YES'),
(104, 3, 'other', 'GOODQUALITY'),
(157, 5, 'processor', 'AMD'),
(158, 5, 'clock_speed', '1.56'),
(159, 5, 'GPU', '2.6'),
(160, 5, 'RAM', '8GB'),
(161, 5, 'RAM_slot', '2PT'),
(162, 5, 'SSD_OR_HDD', 'HDD'),
(163, 5, 'OS', 'ALL'),
(164, 5, 'display_size', '12IN'),
(165, 5, 'display_type', 'LED'),
(166, 5, 'display_touch', 'OK'),
(167, 5, 'power_adapter', '240'),
(168, 5, 'battery_capacity', '6500'),
(169, 5, 'battery_hour', '7HR'),
(170, 5, 'dimension', '12X12'),
(171, 5, 'weight', '450G'),
(172, 5, 'colors', 'SILVER'),
(173, 5, 'IO_ports', 'YES'),
(174, 5, 'fingerprint_sensor', 'YES'),
(175, 5, 'camera', '250MP'),
(176, 5, 'keyboard', 'BACKLIGHT'),
(177, 5, 'touchpad', 'YES'),
(178, 5, 'WIFI', 'YES'),
(179, 5, 'bluetooth', 'YES'),
(180, 5, 'speaker', '2SIDE'),
(181, 5, 'mic', 'YES'),
(182, 5, 'other', 'GOOD'),
(183, 6, 'processor', 'amd'),
(184, 6, 'clock_speed', '1.26'),
(185, 6, 'GPU', 'yes'),
(186, 6, 'RAM', '16GB'),
(187, 6, 'RAM_slot', 'ok'),
(188, 6, 'SSD_OR_HDD', 'SSD'),
(189, 6, 'OS', 'all'),
(190, 6, 'display_size', '12'),
(191, 6, 'display_type', 'led'),
(192, 6, 'display_touch', 'no'),
(193, 6, 'power_adapter', 'yes'),
(194, 6, 'battery_capacity', 'good'),
(195, 6, 'battery_hour', '6hr'),
(196, 6, 'dimension', '12n'),
(197, 6, 'weight', '500g'),
(198, 6, 'colors', 'black'),
(199, 6, 'IO_ports', 'ok'),
(200, 6, 'fingerprint_sensor', 'no'),
(201, 6, 'camera', 'good'),
(202, 6, 'keyboard', 'light'),
(203, 6, 'touchpad', 'no'),
(204, 6, 'WIFI', 'yes'),
(205, 6, 'bluetooth', 'yes'),
(206, 6, 'speaker', 'good'),
(207, 6, 'mic', 'support'),
(208, 6, 'other', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(30) NOT NULL,
  `parent_id` int(30) NOT NULL,
  `sub_category` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `parent_id`, `sub_category`, `description`, `status`, `date_created`) VALUES
(1, 1, 'Desktop', 'cheap and highly affordable price', 1, '2023-04-03 09:36:53'),
(2, 1, 'Laptop', 'safe and portable ones', 1, '2023-04-03 09:37:12'),
(3, 1, 'Tablets', 'High quality products', 1, '2023-04-03 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'ONLINE COMPUTER STORE AND ACCESSORIES MANAGEMENT SYSTEM'),
(6, 'short_name', 'OCS-AM'),
(11, 'logo', 'uploads/1737981720_technology-6701504_1280.webp'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1737981720_photo cover.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'BCS', 'admin', '$2y$10$LziGhoekEzIFYliOYhTvSeLZ.Tj3vAnd8O2AgMubQRq40zWraMzpq', 'uploads/1735643520_ADMIN.png', NULL, 1, '2021-01-20 14:02:37', '2025-02-09 01:01:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification_list`
--
ALTER TABLE `specification_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specification_list`
--
ALTER TABLE `specification_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `specification_list`
--
ALTER TABLE `specification_list`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
