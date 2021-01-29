-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 02:07 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `country` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `member` int(20) NOT NULL,
  `roomC` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `user`, `email`, `password`, `country`, `mobile`, `checkIn`, `checkOut`, `member`, `roomC`) VALUES
(1, 'Dony', 'dony@gmail.com', '1234567', 'UK', '52865893532', '2020-07-26', '2020-07-29', 1, 1070),
(2, 'joke', 'joke@.com', '12345685', 'India', '5255562335', '2020-08-20', '2020-08-25', 2, 1050),
(3, 'Hoke', 'hoke@.com', '78954562', 'UK', '43642563563', '2020-08-07', '2020-08-10', 3, 1040),
(4, 'Boy', 'boy@.com', '538623278', 'China', '15222522252', '2020-10-10', '0000-00-00', 1, 1060),
(5, 'jkgk', 'jkgy@.com', '5453640.345', 'US', '32569874512', '2020-08-20', '2020-08-22', 2, 1040),
(6, 'nil', 'nil@.com', '85676576', 'India', '85126945632', '2020-08-20', '2020-08-22', 1, 1040),
(7, 'koky', 'koky@.com', '867677', 'India', '25896456986', '2020-08-20', '2020-08-22', 2, 1040),
(8, 'yoke', 'yoke', '5275635436', 'Italy', '53765343555623', '2020-08-20', '2020-08-25', 3, 1060),
(9, 'Viki', 'viki@.com', '13456526', 'US', '12365231254', '2020-08-26', '2020-08-30', 1, 1110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
