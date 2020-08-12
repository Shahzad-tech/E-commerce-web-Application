-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 07:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `picture` varchar(32) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `category`, `picture`, `price`) VALUES
(1, 'Egg Tart', 'Food', './Images/eggtart.jpg', 100),
(3, 'Beef', 'Food', './Images/beef.jpg', 300),
(4, 'Karahi', 'Food', './Images/karahi.jpg', 300),
(7, 'French Meat', 'Food', './Images/french.jpg', 250),
(8, 'Indian Chicken', 'Food', './Images/indian.webp', 270),
(11, 'Roast', 'Food', './Images/roast.jpg', 230),
(12, 'Chinese', 'Food', './Images/chinese.jpg', 330),
(13, 'Beef Biryani ', 'Food', './Images/beefbiryani.jpg', 170),
(14, 'Chicken tikka', 'Food', './Images/tikka.jpg', 150),
(15, 'Bell Pepper', 'Vegetables', './Images/vegetable1.jpg', 100),
(16, 'Head Gabbage', 'Vegetables', './Images/vegetable2.jpg', 150),
(17, 'Tomato', 'Vegetables', './Images/vegetable3.jpg', 170),
(18, 'Cauli flower', 'Vegetables', './Images/vegetable4.jpg', 140),
(19, 'Egg Plant', 'Vegetables', './Images/vegetable5.jpg', 200),
(20, 'Carrot', 'Vegetables', './Images/vegetable6.jpg', 160),
(21, 'Cucumber', 'Vegetables', './Images/vegetable7.jpg', 100),
(22, 'Peas', 'Vegetables', './Images/vegetable8.jpg', 220),
(23, 'Onions', 'Vegetables', './Images/vegetable9.jpg', 180),
(24, 'Power Bank', 'Electronics', './Images/Electronic1.jpg', 100),
(25, 'Head Phones', 'Electronics', './Images/Electronic2.webp', 150),
(26, 'Camera', 'Electronics', './Images/Electronic3.jpg', 200),
(27, 'Iron', 'Electronics', './Images/Electronic4.jpg', 180),
(28, 'Torch', 'Electronics', './Images/Electronic5.webp', 70),
(29, 'Socket', 'Electronics', './Images/Electronic6.jpg', 80),
(30, 'Washing Machine', 'Electronics', './Images/Electronic7.jpg', 1000),
(31, 'Vaccum Cleaner', 'Electronics', './Images/Electronic8.jpg', 550),
(32, 'Cabels', 'Electronics', './Images/Electronic9.jpg', 80),
(33, 'Women\'s Shirt', 'Clothes', './Images/clothes1.jpeg', 250),
(34, 'Men\'s Jeans', 'Clothes', './Images/clothes2.jpg', 200),
(35, 'Women\'s Kurta', 'Clothes', './Images/clothes3.jpg', 270),
(36, 'Sherwani', 'Clothes', './Images/clothes4.jpg', 500),
(37, 'Socks', 'Clothes', './Images/clothes5.jpg', 100),
(38, 'Handerchief', 'Clothes', './Images/clothes6.jpg', 150),
(39, 'Sindhi Chadar', 'Clothes', './Images/clothes7.jpg', 150),
(40, 'Breathable Shoes', 'Clothes', './Images/clothes8.jpg', 250),
(41, 'Hoodie', 'Clothes', './Images/clothes9.jpg', 220);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
