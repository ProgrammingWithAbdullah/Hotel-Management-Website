-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 06:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `roomnumber` int(11) NOT NULL,
  `checkintime` date DEFAULT NULL,
  `checkouttime` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`roomnumber`, `checkintime`, `checkouttime`, `price`, `id`, `username`) VALUES
(102, '2023-05-13', NULL, 350, 81, 'ahmad'),
(102, '2023-05-13', NULL, 350, 82, 'ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `bookinghistory`
--

CREATE TABLE `bookinghistory` (
  `id` int(11) NOT NULL,
  `checkintime` datetime DEFAULT NULL,
  `checkouttime` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `room` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookinghistory`
--

INSERT INTO `bookinghistory` (`id`, `checkintime`, `checkouttime`, `username`, `room`, `price`) VALUES
(1, '2023-05-04 00:00:00', '0000-00-00 00:00:00', 'user', 101, NULL),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'usman', 102, NULL),
(3, '2023-05-04 00:00:00', '0000-00-00 00:00:00', 'user', 104, NULL),
(4, '2023-05-09 00:00:00', '0000-00-00 00:00:00', 'user', 102, NULL),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'usman', 102, NULL),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'usman', 105, NULL),
(7, '2023-05-09 00:00:00', '2023-05-09 01:38:04', 'user', 104, NULL),
(8, '2023-05-09 00:00:00', '2023-05-09 01:38:04', 'user', 104, NULL),
(9, '0000-00-00 00:00:00', '2023-05-09 01:38:58', 'user', 104, NULL),
(10, '0000-00-00 00:00:00', '2023-05-09 01:40:55', 'user', 0, NULL),
(11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'usman', 105, NULL),
(12, '2023-05-06 00:00:00', '0000-00-00 00:00:00', 'usman', 102, NULL),
(13, '2023-05-06 00:00:00', '0000-00-00 00:00:00', 'usman', 102, NULL),
(14, '0000-00-00 00:00:00', '2023-05-09 21:55:24', 'ali', 0, NULL),
(15, '0000-00-00 00:00:00', '2023-05-09 21:55:46', 'ali', 0, NULL),
(16, '0000-00-00 00:00:00', '2023-05-09 21:56:10', 'ali', 0, NULL),
(17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'usman', 104, NULL),
(18, '2023-05-10 00:00:00', '2023-05-11 13:21:53', 'user', 105, NULL),
(19, '2023-05-13 00:00:00', '2023-05-13 18:33:33', 'ahmad', 102, NULL),
(20, '2023-05-13 00:00:00', '2023-05-13 18:34:27', 'ahmad', 104, NULL),
(21, '2023-05-13 00:00:00', '2023-05-13 18:34:44', 'ahmad', 104, NULL),
(22, '2023-05-13 00:00:00', '0000-00-00 00:00:00', 'ahmad', 102, NULL),
(23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'usman', 102, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `room` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `username` varchar(255) DEFAULT NULL,
  `roomno` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`username`, `roomno`, `status`, `floor`, `id`) VALUES
('', '102', 'available', 1, 3),
('', '104', 'available', 1, 5),
('', '105', 'available', 2, 6),
('', '101', 'available', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usertype`, `email`) VALUES
(1, 'usman', '123456', 'admin', NULL),
(2, 'user', 'user123', 'user', NULL),
(5, 'ahmad', '123456', 'user', 'ahmad@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinghistory`
--
ALTER TABLE `bookinghistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `bookinghistory`
--
ALTER TABLE `bookinghistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
