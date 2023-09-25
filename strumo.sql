-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 03:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strumo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `user` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `order_id` int(20) NOT NULL DEFAULT current_timestamp(),
  `orderedby` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `payment_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `price`, `quantity`, `order_id`, `orderedby`, `address`, `phoneno`, `payment_mode`) VALUES
(1, 'Mokshya', 20000, 5, 51, 'Bimochan Bajimaya', 'Chabahil', 9860232480, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `brand` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text NOT NULL,
  `category` varchar(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `isFeatured` tinyint(1) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `name`, `photo`, `brand`, `description`, `category`, `isActive`, `isFeatured`, `price`, `stock`) VALUES
(1, 'American Dream', 'american_dream.jpeg', 'Taylor', 'American Dream from US', 'Acoustic', 1, 1, 100000, 15),
(2, 'Avatar', 'Avatar.jpg', 'Mantra', 'Color: Light Brown\nSize:40 inch\nBack/Fretboard/Neck/TopMaterial Type: Basswood/Rosewood/Basswood/Basswood\nType: Acoustic\nNumber of String: 6\nPick up: Tuner 4 line equalizer\nHand Orientation: Right Handed\nIncluded: Bag, Mantra string, Mantra Capo, Mantra Picks, Mantra strap and Mantra Certificate\nWarranty: 1 Year\nServicing: 3 Times Free Servicing at Guitarshop Nepal', 'SemiAcous', 1, 1, 10000, 150),
(3, 'Mokshya', 'Mokshya.jpg', 'Mantra', 'Color: Brown\r\nSize:40 inch\r\nBack, Fretboard & Neck Material Type: Rosewood\r\nTopMaterial Type: Solid Spruce\r\nType: Acoustic\r\nNumber of String: 6\r\nPick up: Tuner 4 line equalizer\r\nHand Orientation: Right Handed\r\nIncluded: Bag, Mantra string, Mantra Capo, Mantra Picks, Mantra strap and Mantra Certificate\r\nWarranty: 1 Year\r\nServicing: 3 Times Free Servicing At Guitarshop Nepal', 'SemiAcous', 1, 1, 20000, 115);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `address`, `phone`, `email`, `username`, `password`) VALUES
(3, 'Bimochan Bajimaya', 'Chabahil', 9860232480, 'bmochanb@gmail.com', 'bimochan07', 'bimochan07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
