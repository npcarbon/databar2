-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 11:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databar`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Brand_ID` int(10) NOT NULL,
  `Brand_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Group_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`Brand_ID`, `Brand_Name`, `Group_ID`) VALUES
(1, 'Samsung', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_ID` int(10) NOT NULL,
  `Cus_Pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Cus_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Cus_Url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `Cus_Pic`, `Cus_Name`, `Cus_Url`) VALUES
(6, '7-eleven.png', 'seven-eleven', NULL),
(7, '42Gears.png', '42Gears', NULL),
(8, 'airasia.png', 'airasia', NULL),
(9, 'ais.png', 'ais', 'http://www.ais.co.th/'),
(10, 'bartec.png', 'Bartec', 'https://www.bartec.de');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `Group_ID` int(10) NOT NULL,
  `Group_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`Group_ID`, `Group_Name`) VALUES
(1, 'Mobility'),
(2, 'Printer'),
(3, 'Mobile Computer/PDA'),
(4, 'Scanner/Barcode');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pro_ID` int(10) NOT NULL,
  `Pro_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Pro_Detail` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Pro_Descpt` text COLLATE utf8_unicode_ci NOT NULL,
  `Type_ID` int(10) NOT NULL,
  `Sort` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_picture`
--

CREATE TABLE `product_picture` (
  `Pic_ID` int(11) NOT NULL,
  `Pic_name` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Pic_Position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `Type_ID` int(10) NOT NULL,
  `Type_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Brand_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`Type_ID`, `Type_Name`, `Brand_ID`) VALUES
(8, 'Software', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`Brand_ID`),
  ADD KEY `Group_ID` (`Group_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`Group_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pro_ID`),
  ADD KEY `Type_ID` (`Type_ID`);

--
-- Indexes for table `product_picture`
--
ALTER TABLE `product_picture`
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`Type_ID`),
  ADD KEY `Brand_ID` (`Brand_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `Brand_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `Group_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pro_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `Type_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`Group_ID`) REFERENCES `groups` (`Group_ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Type_ID`) REFERENCES `types` (`Type_ID`);

--
-- Constraints for table `product_picture`
--
ALTER TABLE `product_picture`
  ADD CONSTRAINT `product_picture_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`Pro_ID`);

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_ibfk_1` FOREIGN KEY (`Brand_ID`) REFERENCES `brands` (`Brand_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
