-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 04:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHP-Native`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `number`) VALUES
(1, 'owner', 300),
(2, 'admin', 200),
(3, 'supervisor', 100);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `id_user`, `count`) VALUES
(41, 7, 1, 1),
(42, 18, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cataegory`
--

CREATE TABLE `cataegory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cataegory`
--

INSERT INTO `cataegory` (`id`, `name`) VALUES
(1, 'Television - SAMSUNG - TOSHIBA'),
(2, 'Laptop'),
(8, 'accessories'),
(9, 'Network Accessories'),
(10, 'Printers'),
(13, 'Phones');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `sale`, `count`, `image`, `category`) VALUES
(5, 'laptop Dell insprion 3200', 1000, 50, 100, '274da927464a81379c677341c981cfe9.png', 'Laptop'),
(6, 'keyborad', 100, 10, 100, '50f43fa040db00ca5cc052f62d71771e.jpg', 'accessories'),
(7, 'Ethernet Card', 20, 2, 100, 'cb31e5045448772ce4d4da8abebe4ae6.jpg', 'Network Accessories'),
(8, 'Wifi Cards', 120, 10, 100, '2d9c47fc56ce83caaf8f1556bbe3fcc9.png', 'Network Accessories'),
(9, 'Routers TPlink', 50, 10, 100, '5f05c6f25836f401f0dfe685fdc86118.jpg', 'Network Accessories'),
(10, 'Hard Disk 500HD', 1500, 100, 50, 'ac52bbc79b12a1fb7099ebfda74eb784.jpg', 'accessories'),
(11, 'Flash Memory', 250, 10, 100, '2bacafb26d745d93e1fcd0b029846355.jpg', 'accessories'),
(12, 'Mouse', 100, 10, 100, 'f124b2e809e8b138fda2b43b73fe30a6.jpg', 'accessories'),
(13, 'Speakers', 2500, 100, 10, '0210aa3938551d6f82d286cf763995b5.jpg', 'accessories'),
(18, 'Fiber Glass Cabels', 500, 10, 10, 'b566e037ceae0fec3007644e27e2e6a7.png', 'Network Accessories'),
(19, 'Iphone', 199, 100, 10, '5f88fff239634eb958b71a7be3a3822c.jpg', 'Phones');

-- --------------------------------------------------------

--
-- Table structure for table `send_message`
--

CREATE TABLE `send_message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `send_message`
--

INSERT INTO `send_message` (`id`, `name`, `subject`, `email`, `phone`, `message`, `status`) VALUES
(27, 'mohamed yasser', 'web Developer', 'moyasser@bravo.com', '010025877755', 'Helloooooo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `priv`) VALUES
(12, 'mo yasser', 'moyasser@bravo.com', '$2y$10$Zn2.u6qZReWfx5rmEQXmeeG0kzmdUupDjiFmHVtLqUBeRS6qqCtHO', 0, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cataegory`
--
ALTER TABLE `cataegory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_message`
--
ALTER TABLE `send_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cataegory`
--
ALTER TABLE `cataegory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `send_message`
--
ALTER TABLE `send_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
