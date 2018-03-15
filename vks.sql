-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:21 AM
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
(1, 45, 8, 1, 17, 0, 0, 0, 0, 2, 1),
(2, 46, 8, 1, 18, 0, 0, 0, 0, 2, 1),
(3, 47, 8, 1, 19, 0, 0, 0, 0, 2, 1),
(4, 48, 9, 1, 30, 0, 0, 0, 0, 5, 1),
(5, 49, 9, 1, 35, 0, 0, 0, 0, 0, 1),
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
(18, 37, 6, 1, 216, 0, 0, 0, 0, 8, 1),
(19, 38, 6, 1, 236, 0, 0, 0, 0, 0, 1),
(20, 39, 6, 1, 256, 0, 0, 0, 0, 8, 1),
(21, 29, 5, 1, 163, 0, 0, 0, 0, 8, 1),
(22, 30, 5, 1, 176, 0, 0, 0, 0, 12, 1),
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
(35, 19, 3, 1, 133, 0, 0, 0, 0, 0, 1),
(36, 20, 3, 1, 142, 0, 0, 0, 0, 2, 1),
(37, 21, 3, 1, 160, 0, 0, 0, 0, 22, 1),
(38, 22, 3, 1, 172, 0, 0, 0, 0, 20, 1),
(39, 23, 3, 1, 183, 0, 0, 0, 0, 5, 1),
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
(68, 46, 8, 5, 123, 0, 4, 4, 8, 4, 1);

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
(65, '42', 11, 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
