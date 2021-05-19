-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 10:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sparkb`
--

CREATE TABLE `sparkb` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(22) NOT NULL,
  `amount` int(9) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparkb`
--

INSERT INTO `sparkb` (`id`, `name`, `email`, `amount`, `date`) VALUES
(1, 'Chetas Raulkar', 'chetasr@gmail.com', 100000, '0000-00-00'),
(2, 'Swati Band', 'swati.band@gmail.com', 28800, '0000-00-00'),
(3, 'Jitendra Raulkar', 'jitendra12@gmail.com', 73800, '0000-00-00'),
(4, 'Jyoti Jain', 'jain.jyoti@gmail.com', 58900, '0000-00-00'),
(5, 'Manoj Jain', 'manoj345@gmail.com', 108600, '0000-00-00'),
(6, 'Bhumi Raulkar', 'raulkar.bhumi@gmail.co', 65000, '0000-00-00'),
(7, 'Deepak Amde', 'dpk2602@gmail.com', 38000, '0000-00-00'),
(8, 'Tejas Raikwar', 'tejas.raikwar42@gmail.', 80000, '0000-00-00'),
(9, 'Lavesh Raulkar', 'raulkar.lav945@gamil,c', 62000, '0000-00-00'),
(10, 'Naina Jain', 'nainajain61@gmail.com', 90000, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sparkb`
--
ALTER TABLE `sparkb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sparkb`
--
ALTER TABLE `sparkb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
