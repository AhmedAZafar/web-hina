-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 12:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bussinessemail` varchar(255) NOT NULL,
  `phoneno` int(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmedpassword` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `bussinessemail`, `phoneno`, `companyname`, `address`, `password`, `confirmedpassword`, `type`) VALUES
(1, 'rukhsana', 'rukhsana1', 'rukhsana@gmail.com', 2147483647, 'rukshaaaa', 'rwl,street 6, islamabad, Pakistan', 'ruk34567', 'ruk34567', 'Event Planner'),
(2, 'rukhsana', 'rukhsana1', 'rukhsana@gmail.com', 2147483647, 'rukshaaaa', 'rwl,street 6, islamabad, Pakistan', 'ruk34567', 'ruk34567', 'Event Planner'),
(3, 'rukhsan', 'rukhsana166', 'rukhsanayy@gmail.com', 2147483647, 'rukshaaa', 'rwl,street 6, islamabad, Pakistannn', 'rukk3456', 'ruk3456', 'Vendor'),
(4, 'tania', 'tanaaan', 'tania@gmail.com', 2147483647, 'taniaa', 'rwl,street, islamabad, pakistan', 'taraa', 'turuuu', 'Event Planner'),
(5, 'tania', 'afiyaaa', 'tania@gmail.com', 2147483647, 'taniaa', 'rwl, street 9,  islamabaad, pskistan, ', 'taraa', 'y', 'Event Planner'),
(6, 'tania', 'afiyaaa', 'tania@gmail.com', 2147483647, 'taniaa', 'rwl, street 9,  islamabaad, pskistan, ', 'taraa', 'y', 'Event Planner'),
(7, 'Rabia Javed', 'Rabia2', 'rabia2@gmail.com', 987654321, 'dream events', 'street 9, rawalpindi, islamabad, pakistan', 'rabia3000', 'rabia2000', 'Vendor'),
(8, 'Sundas Arshad', 'sundas2', 'sundas2@gmail.com', 2147483647, 'Eventorr', 'sadar, rawalpindi, islamabad, pakistan', 'sundas3000', 'sundas2000', 'Event Planner'),
(10, 'Hina Noor', 'Hina2', 'hina2@gmail.com', 2147483647, 'Eventorrr', 'sadar, rawalpindi, islamabad, pakistan', 'hina2000', 'hina2000', 'Event Planner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
