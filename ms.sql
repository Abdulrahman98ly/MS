-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 06:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('waseem', 'waseem@gmail.com', '', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `menue`
--

CREATE TABLE `menue` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menue`
--

INSERT INTO `menue` (`id`, `name`, `price`, `size`, `cat`) VALUES
(1, 'pizza', '5 LYD', 'small', 'm'),
(2, 'Birger', '2 LYD', 'small', 'm'),
(4, 'banana deseart', '7.99 LYD', 'large', 'e'),
(5, 'kabab', '1.75 LYD', 'small', 'm'),
(6, 'pizza', '12.99 LYD', 'large', 'm'),
(7, 'water', '0.5 LYD', 'small', 'd'),
(9, 'sahleb', '1 LYD', 'small', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `oredr_id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`oredr_id`, `name`, `number`, `location`, `comment`) VALUES
(1, 'Abdulmohimen Elfitury', '0916778990', 'salahadin', 'YARAB'),
(3, 'Abdulrahman', '0916778990', 'salahadin', 'salah'),
(4, 'Abdulmohimen Elfitury', '0916778787', 'salahadin', 'bwesm alahh'),
(5, 'Hassan', '0916778787', 'salahadin', 'mnk\r\n'),
(6, 'ibrahim', '0916778990', 'salahadin', 'drtr'),
(7, 'wassem', '322', 'salahadin', 'tyry'),
(8, 'wassem', '41221', 'fesf', 'fewew');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `admin`) VALUES
(1, 'Abdulrahman', '111', 1),
(2, 'Hassan', '222', 0),
(4, 'ibrahim', '333', 0),
(5, 'wassem', '444', 0),
(6, 'yg', '11123', 0),
(7, 'amin', '666', 0),
(8, 'wael', '777', 0),
(9, 'Ahmed', '999', 0),
(10, 'Ahmed', '999', 0),
(11, 'faraj', '888', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `menue`
--
ALTER TABLE `menue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`oredr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menue`
--
ALTER TABLE `menue`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `oredr_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
