-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 11:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackingtruth`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `confirm`, `token`) VALUES
(74, 'kumar Atul', 'jaiswal', 'kumaratuljaiswal222@gmail.com', '$2y$10$KrofiIsoUd7CD.ee6.mDxu5y7CpLLOeFnO0FFm4Y34u', '$2y$10$RNYHKz1Miz2wkdKtnylO6uIq8mexCcc1WMc0Dtxj2zR', 'a1eyv59sbo'),
(75, 'Atul the', 'hackerboy', 'atulthehacker222@gmail.com', 'atul@143', 'atul@143', '6kdyqshmoi'),
(79, 'as', 'as', 'q@gmail.com', '$2y$10$Jv2C4Be9LS1BLG4lGmLzVOmuug7JsVYQ12s8jOnu6PZzbKApg0dOm', '$2y$10$/uh/mCfuv0yHVq.kE1uFveCYMkE8AizsahgSZu3zkDPYo89oUSqdq', ''),
(80, 'hacking', 'truth', 'hackingtruth.in@gmail.com', '$2y$10$FgGD2KZPpuH8kMC6wOt3zeC2he7qZ7tkTPSs6m4Sjs0womxfHrwEq', '$2y$10$/7oVGnro6tojwoMz8ZIXI.64xwVaP/AeXG/49ewATIn1YYk40lUdW', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
