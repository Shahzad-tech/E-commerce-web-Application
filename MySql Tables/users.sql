-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 07:10 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nic` varchar(64) NOT NULL,
  `city` varchar(32) NOT NULL,
  `address` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_name`, `password`, `nic`, `city`, `address`) VALUES
(1, 'Fraz Haider', 'fruboy', 'fruboy123', '12345', 'Lahore', 'qwrqwrwqrwqrwqrqwrwqrqwrwqwqrwqqwerqw'),
(2, 'Muhammad Faraz ', 'james', 'fafsafsafsafas', '54321', 'Islamabad', 'House number 29 Street number 10 River Gardens Housing Society'),
(3, 'Mike Clooney', 'mclooney', '214jl124n21l4n1', '22222', 'Islamabad', '21 Wesley Rd'),
(4, 'Muhammad Faraz ', 'adafz', 'pakwqwr44', '09001', 'Islamabad', 'House number 29 Street number 10 River Gardens Housing Society'),
(5, 'Mike Clooney', 'mclooney', 'pakmaa123', '09131', 'Quetta', '21 Wesley Rd'),
(6, 'Mike Clooney', 'leead', 'dsfasfasfas012', '09133', 'Peshawar', '21 Wesley Rd'),
(7, 'Shahzad', 'shazi', 'shazi123', '90881', 'Karachi', 'safasfasfasfasfsafsafasfsa'),
(8, 'Noon Ali', 'noons', 'adaffas098', '00012', 'Quetta', '61 Tallpine Rd'),
(9, 'Zafar Ali', 'zfarq', 'pakdsa123', '33345', 'Lahore', 'House# 222 , street 10, Bahria Town phase 4'),
(10, 'Samina ALi', 'smaal', 'samina12', '19087', 'Islamabad', 'House number 29 Street number 10 River Gardens Housing Society'),
(11, 'noon ur rehman', 'noonagee', 'qwerty123', '03301', 'Islamabad', 'House number 29 Street number 10 River Gardens Housing Society'),
(12, 'Daraksha Batool', 'dbatool', 'dbatool11', '14515', 'Peshawar', 'House number 29 Street number 10 River Gardens Housing Society'),
(13, 'Mujtaba Hassan', 'mujiboi', 'rocksansha', '01101', 'Islamabad', 'House# 222 , street 10, Bahria Town phase 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
