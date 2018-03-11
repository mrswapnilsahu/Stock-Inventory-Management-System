-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 03:11 PM
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
(11, 'book', 'book', 1),
(12, 'doe', 'john', 1),
(13, 'pencil', 'extra pencil', 1),
(16, 'boom', 'boomboomboom', 1),
(17, 'Shirt', 'shirt is shirt.', 1),
(18, 'abc', 'xyz', 1),
(19, 'pen', 'nothing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `firm`
--

CREATE TABLE `firm` (
  `firm_id` int(11) NOT NULL,
  `firm_name` varchar(300) NOT NULL,
  `firm_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firm`
--

INSERT INTO `firm` (`firm_id`, `firm_name`, `firm_des`) VALUES
(2, 'swap', 'swap'),
(3, 'pragya', 'pragya'),
(4, 'ryan', 'school');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_typeid` int(11) NOT NULL,
  `pro_grpid` int(11) NOT NULL,
  `pro_firmid` int(11) NOT NULL,
  `pro_name` varchar(300) NOT NULL,
  `pro_des` varchar(300) NOT NULL,
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

INSERT INTO `product` (`pro_id`, `pro_typeid`, `pro_grpid`, `pro_firmid`, `pro_name`, `pro_des`, `pro_price`, `pro_tax`, `cgst`, `igst`, `sgst`, `pro_qty`, `pro_status`) VALUES
(2, 8, 17, 0, 'Shree-T', 'red shirt', 300, 5, 0, 0, 0, 0, 1),
(3, 3, 13, 0, 'apsara', 'apsaara pencil', 5, 0, 0, 0, 0, 20, 1),
(4, 3, 13, 0, 'rubber', 'rubber', 200, 5, 0, 0, 0, 20, 1),
(5, 7, 17, 0, 'pepe', 'pepe jeans', 150, 0, 0, 0, 0, 15, 1),
(6, 0, 11, 0, 'xyz', 'xyz', 100, 4, 0, 0, 0, 10, 1),
(7, 10, 11, 0, 'xyz', 'zuy', 100, 5, 0, 0, 0, 10, 1),
(8, 11, 18, 0, '', '', 0, 0, 0, 0, 0, 0, 1),
(9, 7, 17, 0, 'ck', 'ck', 200, 5, 0, 0, 0, 50, 1),
(10, 7, 17, 0, 'zz', 'zz', 40, 40, 0, 0, 0, 10, 1),
(11, 8, 17, 0, 'Kurta', 'Kurta', 240, 0, 4, 4, 8, 2, 1);

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
(3, 'XD', 13, 1),
(4, 'anonymous', 12, 1),
(5, 'counting array element.', 10, 1),
(6, 'say', 16, 1),
(7, 'XL', 17, 1),
(8, 'L', 17, 1),
(9, 'XL', 17, 1),
(10, 'book', 11, 1),
(11, 'uniform', 18, 1),
(12, 'uniform2', 18, 1);

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
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `firm`
--
ALTER TABLE `firm`
  MODIFY `firm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
