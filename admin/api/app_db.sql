-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2022 at 11:48 PM
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
-- Database: `app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int NOT NULL,
  `amount` int NOT NULL,
  `peer` varchar(50) NOT NULL,
  `approved` int NOT NULL DEFAULT '1',
  `user` int NOT NULL,
  `wallet_add` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(550) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(550) NOT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `session` varchar(1000) NOT NULL,
  `banned` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`, `session`, `banned`) VALUES
(1, 'thetesters', '$2y$10$R37UGof1nlXyeNDWPU/22.6iRSJPOtjqPu4SPdXqbvzWbPxyp/so.', 'emmanuel09073048353@gmail.com', 0, 'tkn_63696c91278e3', 0),
(2, 'Tinkoko', '$2y$10$Z/XyioAYKxucj3SwfoYQy.9GVF98VXFb1uj/eW.gwYToP8JTBT8RC', 'vanillanessa4@gmail.com', 0, 'tkn_63697ebd1a6b2', 0),
(3, 'danieljennifer245@gmail.com', '$2y$10$VI8YtaPlIfDjxxMpetdyAu7YzBktZG.FpC96ckpKhC1l5MLxOu116', 'EKOCTECH@GMAIL.COM', 0, 'tkn_63698080722cd', 0),
(4, 'thetester', '$2y$10$LEPE/cRfpLaK5D1.K0/svOHSh4Dds0HcDc6PM9UVe7lNkEmQwi7ke', 'EKOCTECH@GMAIL.CO', 0, 'tkn_636c3b64f364c', 0);

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
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
