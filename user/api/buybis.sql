-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2022 at 07:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buybis`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `email` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `peer` varchar(1000) NOT NULL,
  `method` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `wallet` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `email`, `amount`, `peer`, `method`, `date`, `wallet`) VALUES
(1, 'email', '13', '', 'deposit', 'dates', 'wallet'),
(2, 'email', '345', '', 'deposit', 'dates', 'wallet'),
(3, 'email', '2345', 'peer', 'deposit', 'dates', 'wallet'),
(4, 'email', '1', 'BUSD', 'deposit', 'dates', 'wallet'),
(5, 'email', '1', 'BUSD', 'deposit', 'dates', 'wallet'),
(6, 'email', '231111', 'USDT', 'deposit', 'dates', 'wallet'),
(7, 'email', '2', 'BUSD', 'withdraw', 'dates', 'dfghjkl;'),
(8, 'email', '23', 'USDT', 'withdraw', 'dates', 'wallet adress');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `usdtBalance` varchar(1000) NOT NULL,
  `busdBalance` varchar(1000) NOT NULL,
  `refBalance` varchar(1000) NOT NULL,
  `ref` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
