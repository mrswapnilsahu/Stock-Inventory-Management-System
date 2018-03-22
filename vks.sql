-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 05:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vks`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_products`
--

CREATE TABLE `bill_products` (
  `bp_id` int(11) NOT NULL,
  `bp_uid` varchar(300) NOT NULL,
  `bp_pid` int(11) NOT NULL,
  `bp_qty` int(11) NOT NULL,
  `bp_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_products`
--

INSERT INTO `bill_products` (`bp_id`, `bp_uid`, `bp_pid`, `bp_qty`, `bp_price`) VALUES
(1, 'March_18_2018_0_16_365aad628cb6113', 35, 155, 133),
(2, 'March_18_2018_0_17_535aad62d97f561', 35, 155, 133),
(3, 'March_18_2018_0_18_495aad6311787b3', 35, 10, 133),
(4, 'March_18_2018_0_21_025aad63961f63b', 23, 10, 190),
(5, 'March_18_2018_0_29_405aad659c73313', 22, 1, 176),
(6, 'March_18_2018_0_30_305aad65ce3bb9c', 23, 10, 190),
(7, 'March_18_2018_18_03_215aae5c91d812f', 5, 10, 35),
(8, 'March_18_2018_21_31_115aae8d47ce462', 39, 10, 183),
(9, 'March_18_2018_21_32_245aae8d90406a3', 39, 10, 183),
(10, 'March_18_2018_23_20_585aaea702e8de0', 2, 100, 18),
(11, 'March_19_2018_10_20_405aaf41a07af2d', 22, 100, 176),
(12, 'March_19_2018_10_21_275aaf41cf495e0', 1, 10, 17),
(13, 'March_19_2018_10_23_435aaf425755094', 68, 100, 123),
(14, 'March_19_2018_10_24_415aaf429131205', 68, 100, 123),
(15, 'March_19_2018_10_34_025aaf44c251173', 19, 10, 236),
(16, 'March_19_2018_10_58_105aaf4a6ad0d58', 20, 10, 256);

-- --------------------------------------------------------

--
-- Table structure for table `bill_records`
--

CREATE TABLE `bill_records` (
  `bill_id` int(11) NOT NULL,
  `bill_uid` varchar(300) NOT NULL,
  `bill_name` varchar(300) NOT NULL,
  `bill_type` int(11) NOT NULL COMMENT '1 for stock 2 for sell',
  `bill_gst` varchar(300) DEFAULT NULL,
  `bill_tchrg` int(11) DEFAULT NULL,
  `bill_tno` varchar(50) DEFAULT NULL,
  `bill_amt` int(11) NOT NULL,
  `bill_entrydt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_records`
--

INSERT INTO `bill_records` (`bill_id`, `bill_uid`, `bill_name`, `bill_type`, `bill_gst`, `bill_tchrg`, `bill_tno`, `bill_amt`, `bill_entrydt`) VALUES
(1, 'March_18_2018_0_16_365aad628cb6113', 'john doe', 1, 'qwerty', 654321, 'qwerty', 20615, '2018-03-18 00:16:36'),
(2, 'March_18_2018_0_17_535aad62d97f561', 'doe', 2, 'qwerty', 123456, 'qwerty', 20615, '2018-03-18 00:17:53'),
(3, 'March_18_2018_0_18_495aad6311787b3', 'anuj', 1, 'qwerty', 123456, 'mp20c159', 1330, '2018-03-18 00:18:49'),
(4, 'March_18_2018_0_21_025aad63961f63b', 'mr. joe', 2, 'qwerty', 654321, 'qwerty', 1900, '2018-03-18 00:21:02'),
(5, 'March_18_2018_0_29_405aad659c73313', 'mr. neola', 1, NULL, NULL, NULL, 176, '2018-03-18 00:29:40'),
(6, 'March_18_2018_0_30_305aad65ce3bb9c', 'mr. fool', 1, NULL, NULL, NULL, 1900, '2018-03-18 00:30:30'),
(7, 'March_18_2018_18_03_215aae5c91d812f', 'lalit', 2, NULL, NULL, NULL, 350, '2018-03-18 18:03:21'),
(8, 'March_18_2018_21_30_235aae8d17e5489', 'kamesh rajak', 2, NULL, NULL, NULL, 2340, '2018-03-18 21:30:23'),
(9, 'March_18_2018_21_31_115aae8d47ce462', 'anuj', 2, NULL, NULL, NULL, 1830, '2018-03-18 21:31:11'),
(10, 'March_18_2018_21_32_245aae8d90406a3', 'anuj', 2, NULL, NULL, NULL, 1830, '2018-03-18 21:32:24'),
(11, 'March_18_2018_23_20_585aaea702e8de0', 'nemo', 2, '123456789', 1200, 'jasvvxasckjas15596', 1800, '2018-03-18 23:20:58'),
(12, 'March_19_2018_10_20_405aaf41a07af2d', 'Rupa', 2, NULL, NULL, NULL, 17600, '2018-03-19 10:20:40'),
(13, 'March_19_2018_10_21_275aaf41cf495e0', 'boom', 1, NULL, NULL, NULL, 170, '2018-03-19 10:21:27'),
(14, 'March_19_2018_10_23_435aaf425755094', 'padma', 1, NULL, NULL, NULL, 1800, '2018-03-19 10:23:43'),
(15, 'March_19_2018_10_24_415aaf429131205', 'padma', 2, NULL, NULL, NULL, 1800, '2018-03-19 10:24:41'),
(16, 'March_19_2018_10_34_025aaf44c251173', 'aaaf', 2, '', NULL, NULL, 2360, '2018-03-19 10:34:02'),
(17, 'March_19_2018_10_58_105aaf4a6ad0d58', 'rupendra singh', 2, NULL, NULL, NULL, 2560, '2018-03-19 10:58:10'),
(18, 'March_19_2018_9_22_455aaf735534e4f', 'rupa', 1, NULL, NULL, NULL, 392, '2018-03-19 09:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(300) NOT NULL,
  `cat_des` varchar(300) NOT NULL,
  `cat_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`, `cat_status`) VALUES
(1, 'Shirt', 'Shirt', 1),
(2, 'Full Shirt', 'Full Shirt', 1),
(3, 'Half Pant', 'Half Pant', 1),
(4, 'Half Pant galice', 'Half Pant galice', 1),
(5, 'Costume', 'Costume', 1),
(6, 'Frock', 'Frock', 1),
(7, 'Salwar Suit', 'Salwar Suit', 1),
(8, 'Belt', 'Belt', 1),
(9, 'Tie', 'Tie', 1),
(10, 'Socks', 'Socks', 1),
(11, 'Full Pant', 'Full Pant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `firm`
--

CREATE TABLE `firm` (
  `firm_id` int(11) NOT NULL,
  `firm_name` varchar(300) NOT NULL,
  `firm_des` text NOT NULL,
  `firm_no` int(11) NOT NULL,
  `firm_add` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firm`
--

INSERT INTO `firm` (`firm_id`, `firm_name`, `firm_des`, `firm_no`, `firm_add`) VALUES
(1, 'Gyan Jyoti School', 'School', 0, ''),
(2, 'Ryan International School', 'School', 0, ''),
(3, 'Holy Cross School', 'School', 0, ''),
(5, 'Padma', 'Shop', 6524151, 'Kawardha');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_typeid` int(11) NOT NULL,
  `pro_grpid` int(11) NOT NULL,
  `pro_firmid` int(11) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_tax` int(11) NOT NULL,
  `cgst` int(11) NOT NULL,
  `igst` int(11) NOT NULL,
  `sgst` int(11) NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `pro_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_typeid`, `pro_grpid`, `pro_firmid`, `pro_price`, `pro_tax`, `cgst`, `igst`, `sgst`, `pro_qty`, `pro_status`) VALUES
(1, 45, 8, 1, 17, 0, 0, 0, 0, 12, 1),
(2, 46, 8, 1, 18, 0, 0, 0, 0, -98, 1),
(3, 47, 8, 1, 19, 0, 0, 0, 0, 2, 1),
(4, 48, 9, 1, 30, 0, 0, 0, 0, 5, 1),
(5, 49, 9, 1, 35, 0, 0, 0, 0, -10, 1),
(6, 50, 10, 1, 26, 0, 0, 0, 0, 5, 1),
(7, 51, 10, 1, 27, 0, 0, 0, 0, 10, 1),
(8, 52, 10, 1, 28, 0, 0, 0, 0, 8, 1),
(9, 53, 10, 1, 29, 0, 0, 0, 0, 6, 1),
(10, 54, 10, 1, 31, 0, 0, 0, 0, 6, 1),
(11, 55, 10, 1, 32, 0, 0, 0, 0, 8, 1),
(12, 40, 7, 1, 320, 0, 0, 0, 0, 4, 1),
(13, 41, 7, 1, 340, 0, 0, 0, 0, 4, 1),
(14, 42, 7, 1, 360, 0, 0, 0, 0, 4, 1),
(15, 43, 7, 1, 380, 0, 0, 0, 0, 8, 1),
(16, 44, 7, 1, 400, 0, 0, 0, 0, 8, 1),
(17, 36, 6, 1, 196, 0, 0, 0, 0, 8, 1),
(18, 37, 6, 1, 216, 0, 0, 0, 0, 28, 1),
(19, 38, 6, 1, 236, 0, 0, 0, 0, -10, 1),
(20, 39, 6, 1, 256, 0, 0, 0, 0, -2, 1),
(21, 29, 5, 1, 163, 0, 0, 0, 0, 8, 1),
(22, 30, 5, 1, 176, 0, 0, 0, 0, -87, 1),
(23, 31, 5, 1, 190, 0, 0, 0, 0, 10, 1),
(24, 32, 5, 1, 204, 0, 0, 0, 0, 7, 1),
(25, 33, 5, 1, 224, 0, 0, 0, 0, 2, 1),
(26, 34, 5, 1, 238, 0, 0, 0, 0, 3, 1),
(27, 35, 5, 1, 252, 0, 0, 0, 0, 9, 1),
(28, 24, 4, 1, 140, 0, 0, 0, 0, 20, 1),
(29, 25, 4, 1, 150, 0, 0, 0, 0, 15, 1),
(30, 26, 4, 1, 160, 0, 0, 0, 0, 13, 1),
(31, 27, 4, 1, 170, 0, 0, 0, 0, 13, 1),
(32, 28, 4, 1, 180, 0, 0, 0, 0, 2, 1),
(33, 17, 3, 1, 112, 0, 0, 0, 0, 2, 1),
(34, 18, 3, 1, 123, 0, 0, 0, 0, 2, 1),
(35, 19, 3, 1, 133, 0, 0, 0, 0, 10, 1),
(36, 20, 3, 1, 142, 0, 0, 0, 0, 2, 1),
(37, 21, 3, 1, 160, 0, 0, 0, 0, 22, 1),
(38, 22, 3, 1, 172, 0, 0, 0, 0, 20, 1),
(39, 23, 3, 1, 183, 0, 0, 0, 0, -15, 1),
(40, 56, 2, 1, 181, 0, 0, 0, 0, 5, 1),
(41, 57, 2, 1, 191, 0, 0, 0, 0, 17, 1),
(42, 12, 2, 1, 201, 0, 0, 0, 0, 8, 1),
(43, 13, 2, 1, 211, 0, 0, 0, 0, 14, 1),
(44, 14, 2, 1, 221, 0, 0, 0, 0, 14, 1),
(45, 15, 2, 1, 241, 0, 0, 0, 0, 4, 1),
(46, 16, 2, 1, 256, 0, 0, 0, 0, 13, 1),
(47, 1, 1, 1, 96, 0, 0, 0, 0, 13, 1),
(48, 2, 1, 1, 105, 0, 0, 0, 0, 19, 1),
(49, 3, 1, 1, 115, 0, 0, 0, 0, 19, 1),
(50, 4, 1, 1, 124, 0, 0, 0, 0, 15, 1),
(51, 5, 1, 1, 134, 0, 0, 0, 0, 15, 1),
(52, 6, 1, 1, 144, 0, 0, 0, 0, 15, 1),
(53, 7, 1, 1, 160, 0, 0, 0, 0, 15, 1),
(54, 8, 1, 1, 170, 0, 0, 0, 0, 22, 1),
(55, 9, 1, 1, 180, 0, 0, 0, 0, 22, 1),
(56, 10, 1, 1, 199, 0, 0, 0, 0, 24, 1),
(57, 11, 1, 1, 210, 0, 0, 0, 0, 24, 1),
(58, 58, 11, 1, 182, 0, 0, 0, 0, 24, 1),
(60, 59, 11, 0, 195, 0, 0, 0, 0, 24, 1),
(61, 60, 11, 0, 208, 0, 0, 0, 0, 23, 1),
(62, 61, 11, 0, 221, 0, 0, 0, 0, 20, 1),
(63, 62, 11, 0, 234, 0, 0, 0, 0, 26, 1),
(64, 63, 11, 0, 247, 0, 0, 0, 0, 27, 1),
(65, 64, 11, 0, 268, 0, 0, 0, 0, 28, 1),
(66, 64, 11, 0, 268, 0, 0, 0, 0, 28, 1),
(67, 65, 11, 0, 282, 0, 0, 0, 0, 2, 1),
(68, 46, 8, 5, 123, 0, 4, 4, 8, 4, 1),
(69, 38, 6, 3, 234, 0, 4, 4, 8, 5, 1),
(70, 29, 5, 3, 23, 0, 4, 4, 8, 3, 1),
(71, 29, 5, 3, 23, 0, 4, 4, 8, 3, 1),
(72, 45, 8, 5, 23, 0, 4, 4, 8, 2, 1),
(73, 30, 5, 5, 241, 0, 4, 4, 8, 0, 1),
(74, 37, 6, 3, 34, 0, 2, 2, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ty_id` int(11) NOT NULL,
  `ty_name` varchar(255) NOT NULL,
  `ty_grp` int(11) NOT NULL,
  `ty_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`ty_id`, `ty_name`, `ty_grp`, `ty_status`) VALUES
(1, '20', 1, 1),
(2, '22', 1, 1),
(3, '24', 1, 1),
(4, '26', 1, 1),
(5, '28', 1, 1),
(6, '30', 1, 1),
(7, '32', 1, 1),
(8, '34', 1, 1),
(9, '36', 1, 1),
(10, '38', 1, 1),
(11, '40', 1, 1),
(12, '32', 2, 1),
(13, '34', 2, 1),
(14, '36', 2, 1),
(15, '38', 2, 1),
(16, '40', 2, 1),
(17, '12', 3, 1),
(18, '13', 3, 1),
(19, '14', 3, 1),
(20, '15', 3, 1),
(21, '16', 3, 1),
(22, '17', 3, 1),
(23, '18', 3, 1),
(24, '11', 4, 1),
(25, '12', 4, 1),
(26, '13', 4, 1),
(27, '14', 4, 1),
(28, '15', 4, 1),
(29, '24', 5, 1),
(30, '26', 5, 1),
(31, '28', 5, 1),
(32, '30', 5, 1),
(33, '32', 5, 1),
(34, '34', 5, 1),
(35, '36', 5, 1),
(36, '20', 6, 1),
(37, '22', 6, 1),
(38, '24', 6, 1),
(39, '26', 6, 1),
(40, '32', 7, 1),
(41, '34', 7, 1),
(42, '36', 7, 1),
(43, '38', 7, 1),
(44, '40', 7, 1),
(45, 'L', 8, 1),
(46, 'XL', 8, 1),
(47, 'XXL', 8, 1),
(48, 'L', 9, 1),
(49, 'XL', 9, 1),
(50, '2', 10, 1),
(51, '3', 10, 1),
(52, '4', 10, 1),
(53, '5', 10, 1),
(54, '6', 10, 1),
(55, '7', 10, 1),
(56, '28', 2, 1),
(57, '30', 2, 1),
(58, '28', 11, 1),
(59, '30', 11, 1),
(60, '32', 11, 1),
(61, '34', 11, 1),
(62, '36', 11, 1),
(63, '38', 11, 1),
(64, '40', 11, 1),
(65, '42', 11, 1),
(66, '12', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(1) NOT NULL COMMENT '1 for admin,2 for stock,3 for seller'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 1),
(2, 'admin', 'neola', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_products`
--
ALTER TABLE `bill_products`
  ADD PRIMARY KEY (`bp_id`);

--
-- Indexes for table `bill_records`
--
ALTER TABLE `bill_records`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `firm`
--
ALTER TABLE `firm`
  ADD PRIMARY KEY (`firm_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ty_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_products`
--
ALTER TABLE `bill_products`
  MODIFY `bp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bill_records`
--
ALTER TABLE `bill_records`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `firm`
--
ALTER TABLE `firm`
  MODIFY `firm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
