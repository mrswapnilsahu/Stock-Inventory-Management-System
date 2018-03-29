-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 11:58 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(16, 'March_19_2018_10_58_105aaf4a6ad0d58', 20, 10, 256),
(17, 'March_24_2018_18_23_015ab64a2df037f', 22, 10, 176),
(18, 'March_24_2018_18_23_015ab64a2df037f', 58, 1200, 182),
(19, 'March_24_2018_18_23_015ab64a2df037f', 68, 1, 123),
(20, 'March_24_2018_18_23_015ab64a2df037f', 27, 12, 252),
(21, 'March_25_2018_8_46_475ab7149fb164d', 22, 10, 176),
(22, 'March_25_2018_8_46_475ab7149fb164d', 57, 10, 210),
(23, 'March_25_2018_8_46_475ab7149fb164d', 24, 151, 204),
(24, 'March_25_2018_8_48_145ab714f6273ce', 72, 12, 23),
(25, 'March_25_2018_8_53_225ab7162a4a2a8', 2, 12, 18),
(26, 'March_25_2018_9_33_155ab71f83109c4', 68, 10, 123),
(27, 'March_25_2018_9_34_225ab71fc682cc9', 68, 10, 123),
(28, 'March_25_2018_9_36_195ab7203bf2c17', 22, 10, 176),
(29, 'March_25_2018_9_47_075ab722c39df0f', 1, 10, 17),
(30, 'March_25_2018_9_48_575ab723319d451', 1, 17, 17),
(31, 'March_25_2018_10_40_445ab72f54512d8', 70, 10, 23),
(32, 'March_25_2018_10_40_445ab72f54512d8', 71, 10, 23),
(33, 'March_25_2018_10_40_545ab72f5e7340e', 70, 10, 23),
(34, 'March_25_2018_10_40_545ab72f5e7340e', 71, 10, 23),
(35, 'March_25_2018_10_41_205ab72f7804c2f', 70, 10, 23),
(36, 'March_25_2018_10_41_205ab72f7804c2f', 71, 10, 23),
(37, 'March_25_2018_10_41_205ab72f7804c2f', 70, 10, 23),
(38, 'March_25_2018_10_41_205ab72f7804c2f', 71, 10, 23),
(39, 'March_25_2018_15_31_245ab7737468443', 70, 10, 23),
(40, 'March_25_2018_15_31_245ab7737468443', 71, 10, 23),
(41, 'March_25_2018_15_32_075ab7739fed59a', 21, 10, 163),
(42, 'March_25_2018_15_40_395ab7759f1c06c', 1, 12, 17),
(43, 'March_25_2018_19_43_255ab7ae85ab97f', 22, 10, 176),
(44, 'March_25_2018_20_29_055ab7b939a8647', 1, 10, 17),
(45, 'March_25_2018_20_29_465ab7b962e560d', 1, 10, 17),
(46, 'March_27_2018_22_45_225aba7c2aa174b', 1, 10, 17),
(47, 'March_28_2018_0_44_265aba9812d9c9a', 1, 10, 17);

-- --------------------------------------------------------

--
-- Table structure for table `bill_records`
--

CREATE TABLE `bill_records` (
  `bill_id` int(11) NOT NULL,
  `bill_uid` varchar(300) NOT NULL,
  `bill_name` varchar(300) NOT NULL,
  `bill_type` int(11) NOT NULL COMMENT '1 for stock 2 for custom',
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
(2, 'March_18_2018_0_17_535aad62d97f561', 'doe', 2, 'qwerty', 123456, 'fth', 20615, '2018-03-18 00:17:53'),
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
(18, 'March_19_2018_9_22_455aaf735534e4f', 'rupa', 1, NULL, NULL, NULL, 392, '2018-03-19 09:22:45'),
(19, 'March_24_2018_18_08_105ab646b2caee4', 'anuj', 1, NULL, NULL, NULL, 2112, '2018-03-24 18:08:10'),
(20, 'March_24_2018_18_23_015ab64a2df037f', 'anuj rajak', 2, 'qwqw121', NULL, NULL, 223202, '2018-03-24 18:23:01'),
(21, 'March_25_2018_8_46_475ab7149fb164d', 'anuj rajak', 1, NULL, NULL, NULL, 2, '2018-03-25 08:46:47'),
(22, 'March_25_2018_8_48_145ab714f6273ce', 'g', 1, NULL, NULL, NULL, 276, '2018-03-25 08:48:14'),
(23, 'March_25_2018_8_53_225ab7162a4a2a8', 'af', 1, NULL, NULL, NULL, 216, '2018-03-25 08:53:22'),
(24, 'March_25_2018_9_33_155ab71f83109c4', 'anuj rajak', 1, NULL, NULL, NULL, 1260, '2018-03-25 09:33:15'),
(25, 'March_25_2018_9_34_225ab71fc682cc9', 'anuj rajak', 1, 'egfdg', 30, '12', 1260, '2018-03-25 09:34:22'),
(26, 'March_25_2018_9_36_195ab7203bf2c17', 'anuj rajak', 1, '23rewrw', 40, '1200', 1800, '2018-03-25 09:36:19'),
(27, 'March_25_2018_9_47_075ab722c39df0f', 'sas', 1, NULL, 0, NULL, 170, '2018-03-25 09:47:07'),
(28, 'March_25_2018_9_48_575ab723319d451', 'anuj rajak', 2, NULL, 0, NULL, 289, '2018-03-25 09:48:57'),
(29, 'March_25_2018_10_40_445ab72f54512d8', 'anuj rajak', 1, NULL, 0, NULL, 230, '2018-03-25 10:40:44'),
(30, 'March_25_2018_10_40_545ab72f5e7340e', 'anuj rajak', 1, NULL, 0, NULL, 230, '2018-03-25 10:40:54'),
(31, 'March_25_2018_10_41_205ab72f7804c2f', 'anuj rajak', 1, 'qwwe', 0, '1200mp', 460, '2018-03-25 10:41:20'),
(32, 'March_25_2018_15_31_245ab7737468443', 'anuj rajak', 1, NULL, 0, NULL, 230, '2018-03-25 15:31:24'),
(33, 'March_25_2018_15_32_075ab7739fed59a', 'anuj rajak', 1, NULL, 0, NULL, 1630, '2018-03-25 15:32:07'),
(34, 'March_25_2018_15_40_395ab7759f1c06c', 'anuj rajak', 1, NULL, 0, NULL, 204, '2018-03-25 15:40:39'),
(35, 'March_25_2018_15_56_575ab779712a39b', 'q', 1, NULL, 0, NULL, 0, '2018-03-25 15:56:57'),
(36, 'March_25_2018_16_12_095ab77d016bbd7', 'anuj rajak', 2, NULL, 0, NULL, 0, '2018-03-25 16:12:09'),
(37, 'March_25_2018_16_24_435ab77ff372256', 'q', 2, NULL, 0, NULL, 288, '2018-03-25 16:24:43'),
(38, 'March_25_2018_16_33_405ab7820cd6fec', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:33:40'),
(39, 'March_25_2018_16_34_135ab7822d5fb01', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:34:13'),
(40, 'March_25_2018_16_34_475ab7824f1ad56', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:34:47'),
(41, 'March_25_2018_16_35_125ab78268752d4', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:35:12'),
(42, 'March_25_2018_16_35_455ab782897a502', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:35:45'),
(43, 'March_25_2018_16_36_175ab782a9e7ccd', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:36:17'),
(44, 'March_25_2018_16_39_125ab7835881ec1', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:39:12'),
(45, 'March_25_2018_16_40_095ab7839113a6b', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:40:09'),
(46, 'March_25_2018_16_40_325ab783a8d4988', 'anuj', 2, NULL, 0, NULL, 250, '2018-03-25 16:40:32'),
(47, 'March_25_2018_16_40_585ab783c2900e1', 'anuj', 2, '1232', 0, '123', 250, '2018-03-25 16:40:58'),
(48, 'March_25_2018_17_12_415ab78b31a7e48', 'swapnil sahu ', 2, NULL, 100, NULL, 1450, '2018-03-25 17:12:41'),
(49, 'March_25_2018_19_43_255ab7ae85ab97f', 'qwe', 1, NULL, 400, NULL, 1760, '2018-03-25 19:43:25'),
(50, 'March_25_2018_20_27_255ab7b8d51b107', 'final Test', 2, NULL, 200, NULL, 1800, '2018-03-25 20:27:25'),
(51, 'March_25_2018_20_28_325ab7b918eb79d', 'final Test', 2, NULL, 200, NULL, 1800, '2018-03-25 20:28:32'),
(52, 'March_25_2018_20_29_055ab7b939a8647', 'boom', 1, NULL, 30, '123', 170, '2018-03-25 20:29:05'),
(53, 'March_25_2018_20_29_465ab7b962e560d', 'boom', 1, NULL, 30, NULL, 170, '2018-03-25 20:29:46'),
(54, 'March_26_2018_9_58_485ab87700af933', 'ammu', 2, NULL, 800, NULL, 2200, '2018-03-26 09:58:48'),
(55, 'March_27_2018_22_45_225aba7c2aa174b', ' vc', 1, NULL, 0, NULL, 15000, '2018-03-27 22:45:22'),
(56, 'March_28_2018_0_44_265aba9812d9c9a', 'amu', 1, NULL, 30, NULL, 170, '2018-03-28 00:44:26'),
(57, 'March_28_2018_0_46_425aba989a311f8', 'amu', 2, NULL, 100, '100', 300, '2018-03-28 00:46:42');

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
-- Table structure for table `custom_products`
--

CREATE TABLE `custom_products` (
  `cp_id` int(11) NOT NULL,
  `cp_uid` varchar(300) NOT NULL,
  `cp_name` varchar(300) NOT NULL,
  `cp_price` int(11) NOT NULL,
  `cp_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_products`
--

INSERT INTO `custom_products` (`cp_id`, `cp_uid`, `cp_name`, `cp_price`, `cp_qty`) VALUES
(1, 'gfdgdfg', 'gsdfgsfdgds', 10, 10),
(2, 'shirt', 'March_25_2018_16_35_455ab782897a502', 10, 12),
(3, 'cart', 'March_25_2018_16_35_455ab782897a502', 10, 13),
(4, 'March_25_2018_16_36_175ab782a9e7ccd', 'shirt', 10, 12),
(5, 'March_25_2018_16_36_175ab782a9e7ccd', 'cart', 10, 13),
(6, 'March_25_2018_16_39_125ab7835881ec1', 'shirt', 10, 12),
(7, 'March_25_2018_16_39_125ab7835881ec1', 'cart', 10, 13),
(8, 'March_25_2018_16_40_095ab7839113a6b', 'shirt', 10, 12),
(9, 'March_25_2018_16_40_095ab7839113a6b', 'cart', 10, 13),
(10, 'March_25_2018_16_40_325ab783a8d4988', 'shirt', 10, 12),
(11, 'March_25_2018_16_40_325ab783a8d4988', 'cart', 10, 13),
(12, 'March_25_2018_16_40_585ab783c2900e1', 'shirt', 10, 12),
(13, 'March_25_2018_16_40_585ab783c2900e1', 'cart', 10, 13),
(14, 'March_25_2018_17_12_415ab78b31a7e48', 'john', 100, 12),
(15, 'March_25_2018_17_12_415ab78b31a7e48', 'john', 10, 10),
(16, 'March_25_2018_17_12_415ab78b31a7e48', 'doe', 15, 10),
(17, 'March_25_2018_20_27_255ab7b8d51b107', 'testing', 12, 150),
(18, 'March_25_2018_20_28_325ab7b918eb79d', 'testing', 12, 150),
(19, 'March_26_2018_9_58_485ab87700af933', 'shirt', 120, 10),
(20, 'March_26_2018_9_58_485ab87700af933', 'pant', 500, 2),
(21, 'March_28_2018_0_46_425aba989a311f8', 'hel', 10, 10),
(22, 'March_28_2018_0_46_425aba989a311f8', 'jo', 20, 10);

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
  `pro_sell_price` int(11) NOT NULL DEFAULT '0',
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

INSERT INTO `product` (`pro_id`, `pro_typeid`, `pro_grpid`, `pro_firmid`, `pro_price`, `pro_sell_price`, `pro_tax`, `cgst`, `igst`, `sgst`, `pro_qty`, `pro_status`) VALUES
(1, 45, 8, 1, 17, 1500, 0, 0, 0, 0, -23, 1),
(2, 46, 8, 1, 18, 1200, 0, 0, 0, 0, -86, 1),
(3, 47, 8, 1, 19, 1300, 0, 0, 0, 0, 2, 1),
(4, 48, 9, 1, 30, 0, 0, 0, 0, 0, 5, 1),
(5, 49, 9, 1, 35, 0, 0, 0, 0, 0, -10, 1),
(6, 50, 10, 1, 26, 0, 0, 0, 0, 0, 5, 1),
(7, 51, 10, 1, 27, 0, 0, 0, 0, 0, 10, 1),
(8, 52, 10, 1, 28, 0, 0, 0, 0, 0, 8, 1),
(9, 53, 10, 1, 29, 0, 0, 0, 0, 0, 6, 1),
(10, 54, 10, 1, 31, 0, 0, 0, 0, 0, 6, 1),
(11, 55, 10, 1, 32, 0, 0, 0, 0, 0, 8, 1),
(12, 40, 7, 1, 320, 0, 0, 0, 0, 0, 4, 1),
(13, 41, 7, 1, 340, 0, 0, 0, 0, 0, -196, 1),
(14, 42, 7, 1, 360, 0, 0, 0, 0, 0, 4, 1),
(15, 43, 7, 1, 380, 0, 0, 0, 0, 0, 8, 1),
(16, 44, 7, 1, 400, 0, 0, 0, 0, 0, 8, 1),
(17, 36, 6, 1, 196, 0, 0, 0, 0, 0, 8, 1),
(18, 37, 6, 1, 216, 0, 0, 0, 0, 0, 28, 1),
(19, 38, 6, 1, 236, 0, 0, 0, 0, 0, -10, 1),
(20, 39, 6, 1, 256, 0, 0, 0, 0, 0, -2, 1),
(21, 29, 5, 1, 163, 1400, 0, 0, 0, 0, 18, 1),
(22, 30, 5, 1, 176, 15, 0, 0, 0, 0, -77, 1),
(23, 31, 5, 1, 190, 16, 0, 0, 0, 0, 0, 1),
(24, 32, 5, 1, 204, 0, 0, 0, 0, 0, 158, 1),
(25, 33, 5, 1, 224, 0, 0, 0, 0, 0, 2, 1),
(26, 34, 5, 1, 238, 0, 0, 0, 0, 0, 3, 1),
(27, 35, 5, 1, 252, 0, 0, 0, 0, 0, -3, 1),
(28, 24, 4, 1, 140, 0, 0, 0, 0, 0, 20, 1),
(29, 25, 4, 1, 150, 0, 0, 0, 0, 0, 15, 1),
(30, 26, 4, 1, 160, 0, 0, 0, 0, 0, 13, 1),
(31, 27, 4, 1, 170, 0, 0, 0, 0, 0, 13, 1),
(32, 28, 4, 1, 180, 0, 0, 0, 0, 0, 2, 1),
(33, 17, 3, 1, 112, 0, 0, 0, 0, 0, 2, 1),
(34, 18, 3, 1, 123, 0, 0, 0, 0, 0, 2, 1),
(35, 19, 3, 1, 133, 0, 0, 0, 0, 0, 10, 1),
(36, 20, 3, 1, 142, 0, 0, 0, 0, 0, 2, 1),
(37, 21, 3, 1, 160, 0, 0, 0, 0, 0, 22, 1),
(38, 22, 3, 1, 172, 0, 0, 0, 0, 0, 20, 1),
(39, 23, 3, 1, 183, 0, 0, 0, 0, 0, -15, 1),
(40, 56, 2, 1, 181, 0, 0, 0, 0, 0, 5, 1),
(41, 57, 2, 1, 191, 0, 0, 0, 0, 0, 17, 1),
(42, 12, 2, 1, 201, 0, 0, 0, 0, 0, 8, 1),
(43, 13, 2, 1, 211, 0, 0, 0, 0, 0, 14, 1),
(44, 14, 2, 1, 221, 0, 0, 0, 0, 0, 14, 1),
(45, 15, 2, 1, 241, 0, 0, 0, 0, 0, 4, 1),
(46, 16, 2, 1, 256, 0, 0, 0, 0, 0, 13, 1),
(47, 1, 1, 1, 96, 0, 0, 0, 0, 0, 13, 1),
(48, 2, 1, 1, 105, 0, 0, 0, 0, 0, 19, 1),
(49, 3, 1, 1, 115, 0, 0, 0, 0, 0, 19, 1),
(50, 4, 1, 1, 124, 0, 0, 0, 0, 0, 15, 1),
(51, 5, 1, 1, 134, 0, 0, 0, 0, 0, 15, 1),
(52, 6, 1, 1, 144, 0, 0, 0, 0, 0, 15, 1),
(53, 7, 1, 1, 160, 0, 0, 0, 0, 0, 15, 1),
(54, 8, 1, 1, 170, 0, 0, 0, 0, 0, 22, 1),
(55, 9, 1, 1, 180, 0, 0, 0, 0, 0, 22, 1),
(56, 10, 1, 1, 199, 0, 0, 0, 0, 0, 24, 1),
(57, 11, 1, 1, 210, 0, 0, 0, 0, 0, 34, 1),
(58, 58, 11, 1, 182, 0, 0, 0, 0, 0, -1176, 1),
(60, 59, 11, 0, 195, 0, 0, 0, 0, 0, 24, 1),
(61, 60, 11, 0, 208, 0, 0, 0, 0, 0, 23, 1),
(62, 61, 11, 0, 221, 0, 0, 0, 0, 0, 20, 1),
(63, 62, 11, 0, 234, 0, 0, 0, 0, 0, 26, 1),
(64, 63, 11, 0, 247, 0, 0, 0, 0, 0, 27, 1),
(65, 64, 11, 0, 268, 0, 0, 0, 0, 0, 28, 1),
(66, 64, 11, 0, 268, 0, 0, 0, 0, 0, 28, 1),
(67, 65, 11, 0, 282, 0, 0, 0, 0, 0, 2, 1),
(68, 46, 8, 5, 123, 1400, 0, 4, 4, 8, 23, 1),
(69, 38, 6, 3, 234, 0, 0, 4, 4, 8, 5, 1),
(70, 29, 5, 3, 23, 0, 0, 4, 4, 8, 53, 1),
(71, 29, 5, 3, 23, 0, 0, 4, 4, 8, 53, 1),
(72, 45, 8, 5, 23, 1300, 0, 4, 4, 8, 14, 1),
(73, 30, 5, 5, 241, 0, 0, 4, 4, 8, 0, 1),
(74, 37, 6, 3, 34, 0, 0, 2, 2, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_bill_products`
--

CREATE TABLE `seller_bill_products` (
  `bp_id` int(11) NOT NULL,
  `bp_uid` varchar(300) NOT NULL,
  `bp_pid` int(11) NOT NULL,
  `bp_qty` int(11) NOT NULL,
  `bp_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_bill_products`
--

INSERT INTO `seller_bill_products` (`bp_id`, `bp_uid`, `bp_pid`, `bp_qty`, `bp_price`) VALUES
(1, 'March_25_2018_9_52_345ab7240a68cc9', 22, 10, 176),
(2, 'March_25_2018_10_03_025ab7267eb0184', 23, 10, 190),
(3, 'March_25_2018_16_01_515ab77a9722f54', 13, 100, 340),
(4, 'March_25_2018_16_02_065ab77aa60df89', 13, 100, 340),
(5, 'March_28_2018_0_42_485aba97b05ba40', 1, 10, 0),
(6, 'March_28_2018_0_42_485aba97b05ba40', 1, 10, 0),
(7, 'March_28_2018_0_43_235aba97d3a2dd4', 1, 10, 1500),
(8, 'March_28_2018_0_43_235aba97d3a2dd4', 1, 10, 1500),
(9, 'March_28_2018_0_43_555aba97f34a8d9', 1, 10, 1500),
(10, 'March_28_2018_0_43_555aba97f34a8d9', 1, 10, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `seller_bill_records`
--

CREATE TABLE `seller_bill_records` (
  `bill_id` int(11) NOT NULL,
  `bill_uid` varchar(300) NOT NULL,
  `bill_name` varchar(300) NOT NULL,
  `bill_type` int(11) NOT NULL,
  `bill_gst` varchar(300) DEFAULT NULL,
  `bill_tchrg` int(11) NOT NULL,
  `bill_tno` varchar(300) DEFAULT NULL,
  `bill_amt` int(11) NOT NULL,
  `bill_entrydt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_bill_records`
--

INSERT INTO `seller_bill_records` (`bill_id`, `bill_uid`, `bill_name`, `bill_type`, `bill_gst`, `bill_tchrg`, `bill_tno`, `bill_amt`, `bill_entrydt`) VALUES
(1, 'March_25_2018_9_52_345ab7240a68cc9', 'anuj rajak', 2, 'asdasda', 400, 'dfgfdg', 1800, '2018-03-25 09:52:34'),
(2, 'March_25_2018_10_03_025ab7267eb0184', 'qwe', 2, 'qwert', 100, '112', 2000, '2018-03-25 10:03:02'),
(3, 'March_25_2018_16_01_515ab77a9722f54', 'hgh', 2, NULL, 0, NULL, 34000, '2018-03-25 16:01:51'),
(4, 'March_25_2018_16_02_065ab77aa60df89', 'hgh', 2, NULL, 10, '123', 34000, '2018-03-25 16:02:06'),
(5, 'March_28_2018_0_39_335aba96ed8522d', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:39:33'),
(6, 'March_28_2018_0_39_365aba96f04e3c9', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:39:36'),
(7, 'March_28_2018_0_40_365aba972c5dbe5', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:40:36'),
(8, 'March_28_2018_0_40_555aba973f026c5', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:40:55'),
(9, 'March_28_2018_0_41_105aba974e799e9', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:41:10'),
(10, 'March_28_2018_0_41_445aba977014de3', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:41:44'),
(11, 'March_28_2018_0_42_005aba978074d9a', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:42:00'),
(12, 'March_28_2018_0_42_105aba978ace834', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:42:10'),
(13, 'March_28_2018_0_42_135aba978d68bc6', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:42:13'),
(14, 'March_28_2018_0_42_195aba9793d14cf', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:42:19'),
(15, 'March_28_2018_0_42_295aba979dd66f3', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:42:29'),
(16, 'March_28_2018_0_42_485aba97b05ba40', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:42:48'),
(17, 'March_28_2018_0_43_235aba97d3a2dd4', 'amu', 2, NULL, 10, NULL, 30000, '2018-03-28 00:43:23'),
(18, 'March_28_2018_0_43_555aba97f34a8d9', 'amu', 2, NULL, 10, '100', 30000, '2018-03-28 00:43:55');

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
-- Indexes for table `custom_products`
--
ALTER TABLE `custom_products`
  ADD UNIQUE KEY `cp_id` (`cp_id`);

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
-- Indexes for table `seller_bill_products`
--
ALTER TABLE `seller_bill_products`
  ADD PRIMARY KEY (`bp_id`);

--
-- Indexes for table `seller_bill_records`
--
ALTER TABLE `seller_bill_records`
  ADD PRIMARY KEY (`bill_id`);

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
  MODIFY `bp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `bill_records`
--
ALTER TABLE `bill_records`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `custom_products`
--
ALTER TABLE `custom_products`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
-- AUTO_INCREMENT for table `seller_bill_products`
--
ALTER TABLE `seller_bill_products`
  MODIFY `bp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `seller_bill_records`
--
ALTER TABLE `seller_bill_records`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
