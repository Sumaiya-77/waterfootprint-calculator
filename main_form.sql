-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 08:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_form`
--

CREATE TABLE `main_form` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_form`
--

INSERT INTO `main_form` (`id`, `name`, `email`, `message`) VALUES
(1, 'mohammed sumaiya', 'sumaiyamohammed494@gmail.com', 'hello'),
(2, 'mohammed sumaiya', 'sumaiyamohammed494@gmail.com', 'hii'),
(3, 'mohammed sumaiya', 'sumaiyamohammed494@gmail.com', 'hii'),
(4, 'mohammed sumaiya', 'sumaiyamohammed494@gmail.com', 'hii'),
(5, 'mohammed sumaiya', 'sumaiyamohammed494@gmail.com', 'hii'),
(6, 'mohammed sumaiya', 'sumaiyamohammed494@gmail.com', 'hii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_form`
--
ALTER TABLE `main_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_form`
--
ALTER TABLE `main_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
