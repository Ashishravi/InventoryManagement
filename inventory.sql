-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 05:26 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Table', 'Nothing', '2017-02-15 00:00:00', '2017-02-23 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) DEFAULT NULL,
  `name` char(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` char(11) DEFAULT NULL,
  `description` char(50) DEFAULT NULL,
  `type` char(11) DEFAULT NULL,
  `orders` char(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `timestamp` timestamp(6) NULL DEFAULT NULL,
  `work_order` varchar(50) DEFAULT NULL,
  `security_letter` varchar(50) DEFAULT NULL,
  `rental_payment` varchar(50) DEFAULT NULL,
  `security_negotiable` varchar(50) DEFAULT NULL,
  `financial_clearance` enum('YES','NO','PENDING','') DEFAULT NULL,
  `approved_planning` enum('YES','NO','PENDING','') DEFAULT NULL,
  `customer_id` varchar(10) DEFAULT NULL,
  `job_order_no` varchar(10) DEFAULT NULL,
  `job_order_location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `category`, `description`, `type`, `orders`, `start_date`, `expiry_date`, `timestamp`, `work_order`, `security_letter`, `rental_payment`, `security_negotiable`, `financial_clearance`, `approved_planning`, `customer_id`, `job_order_no`, `job_order_location`) VALUES
(NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'vikas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'vikas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'vikas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', NULL, 'Prepaid', 'sd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', 124, 'Prepaid', 'sd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', 124, 'Prepaid', 'sd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', 124, 'Prepaid', 'sd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212', NULL),
(NULL, 'vikas', 1223, 'Prepaid', 'qwerty', 'Rental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234556789', NULL),
(NULL, 'vikas', 1223, 'Prepaid', 'qwerty', 'Rental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234556789', NULL),
(NULL, 'vikas', 1223, 'Prepaid', 'qwerty', 'Rental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', NULL, '1234556789', NULL),
(NULL, 'vikas', 1223, 'Prepaid', 'qwerty', 'Rental', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', NULL, '1234556789', NULL),
(NULL, 'test1', 456, 'Prepaid', 'none', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', NULL, '4569', NULL),
(NULL, 'test1', 456, 'Prepaid', 'none', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4569', NULL),
(NULL, 'test1', 456, 'Prepaid', 'none', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', NULL, '4569', NULL),
(NULL, 'test1', 456, 'Prepaid', 'none', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4569', NULL),
(NULL, 'test1', 456, 'Prepaid', 'none', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4569', NULL),
(NULL, 'viaks', 23, 'Prepaid', 'dsfsd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '356', NULL),
(NULL, 'viaks', 23, 'Prepaid', 'dsfsd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '356', NULL),
(NULL, 'viaks', 23, 'Prepaid', 'dsfsd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '356', NULL),
(NULL, 'viaks', 23, 'Prepaid', 'dsfsd', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '356', NULL),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MM', NULL),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MM', NULL),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', '12', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', '12', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, '0000-00-00 00:00:00.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, '0000-00-00 00:00:00.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, '2017-02-18 09:39:12.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, NULL, NULL, '2017-02-18 09:39:12.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, '2017-02-02', NULL, '2017-02-18 09:43:13.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, '2017-02-02', NULL, '2017-02-18 09:43:13.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, '2017-02-02', NULL, '2017-02-18 09:44:42.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, '2017-02-02', NULL, '2017-02-18 09:44:42.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, '2017-02-02', '2017-12-12', '2017-02-18 09:45:54.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM'),
(NULL, 'test12', 125, 'Prepaid', 'MM', 'Sales', NULL, '2017-02-02', '2017-12-12', '2017-02-18 09:45:54.000000', NULL, NULL, NULL, NULL, 'PENDING', 'PENDING', '13', 'MM', 'MM');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`) VALUES
(35, 'Chair', 'To sit on', 25, 1, '2017-02-04 14:31:36', '2017-02-04 06:31:36'),
(36, 'Table', 'To Eat on', 58, 1, '2017-02-04 19:43:57', '2017-02-04 11:43:57'),
(37, 'Chair', '4 legs and a back', 23, 1, '2017-02-07 13:17:40', '2017-02-07 05:17:40'),
(38, 'Samarth', 'Jain', 1000, 1, '2017-02-11 20:14:22', '2017-02-11 12:14:38'),
(39, 'Ladder', 'sljfksdn', 560, 1, '2017-02-11 21:17:15', '2017-02-11 13:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('orders', '12345'),
('finance', '12345'),
('ops', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
