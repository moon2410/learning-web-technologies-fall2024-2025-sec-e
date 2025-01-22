-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 07:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `msg_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `is_read`, `msg_time`) VALUES
(1, 548592546, 1013361585, 'as', 0, '2025-01-17 10:30:31'),
(2, 548592546, 1013361585, 'asd', 0, '2025-01-17 10:30:31'),
(3, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(4, 548592546, 1013361585, 'asd', 0, '2025-01-17 10:30:31'),
(5, 548592546, 1013361585, 'asd', 0, '2025-01-17 10:30:31'),
(6, 1263166330, 1013361585, 'asd', 1, '2025-01-17 11:05:32'),
(7, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(8, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(9, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(10, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(11, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(12, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(13, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(14, 548592546, 1013361585, 'asd', 0, '2025-01-17 10:30:31'),
(15, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(16, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(17, 548592546, 1013361585, 'ad', 0, '2025-01-17 10:30:31'),
(18, 548592546, 1013361585, 'hh', 0, '2025-01-17 10:30:31'),
(19, 548592546, 1013361585, 'a', 0, '2025-01-17 10:30:31'),
(20, 210935271, 1208375429, 'ad', 0, '2025-01-17 10:30:31'),
(21, 1208375429, 210935271, 'ad', 1, '2025-01-17 11:06:44'),
(22, 210935271, 1208375429, 'ads', 0, '2025-01-17 10:30:31'),
(23, 1013361585, 1263166330, 'a', 0, '2025-01-17 10:30:31'),
(24, 1208375429, 1263166330, '😢aa', 1, '2025-01-17 11:06:37'),
(25, 1208375429, 1263166330, '😍', 1, '2025-01-17 11:06:37'),
(26, 1208375429, 1263166330, '🎉', 1, '2025-01-17 11:06:37'),
(27, 1208375429, 1263166330, '👍😢', 1, '2025-01-17 11:06:37'),
(28, 1208375429, 1263166330, '😀😍j', 1, '2025-01-17 11:06:37'),
(29, 210935271, 1263166330, '👍', 0, '2025-01-17 10:30:31'),
(30, 210935271, 1263166330, 's', 0, '2025-01-17 10:30:31'),
(31, 1208375429, 1263166330, 'sad', 1, '2025-01-17 11:06:37'),
(32, 210935271, 1208375429, '👍', 0, '2025-01-17 10:30:31'),
(33, 210935271, 1208375429, '😢', 0, '2025-01-17 10:30:31'),
(34, 210935271, 1208375429, 'a', 0, '2025-01-17 10:30:31'),
(35, 210935271, 1208375429, 'sdf', 0, '2025-01-17 10:30:31'),
(36, 210935271, 1208375429, 'sdf', 0, '2025-01-17 10:30:31'),
(37, 1208375429, 1263166330, 'ad', 1, '2025-01-17 11:06:37'),
(38, 1263166330, 1208375429, 'asd', 1, '2025-01-17 11:05:19'),
(39, 1263166330, 1208375429, 'asd', 1, '2025-01-17 11:05:19'),
(40, 1208375429, 1263166330, 'sad', 1, '2025-01-17 11:06:37'),
(41, 1263166330, 1208375429, 'asd', 1, '2025-01-17 11:05:19'),
(42, 1208375429, 1263166330, 'asdad', 1, '2025-01-17 11:06:37'),
(43, 1208375429, 1263166330, 'adsad', 1, '2025-01-17 11:06:37'),
(44, 1208375429, 1263166330, 'adad', 1, '2025-01-17 11:06:37'),
(45, 1208375429, 1263166330, 'adad', 1, '2025-01-17 11:06:37'),
(46, 1208375429, 1263166330, 'adads', 1, '2025-01-17 11:06:37'),
(47, 1208375429, 1263166330, 'asdsad', 1, '2025-01-17 11:06:37'),
(48, 1208375429, 1263166330, 'adad', 1, '2025-01-17 11:06:37'),
(49, 1208375429, 1263166330, 'asdsasdsassd', 1, '2025-01-17 11:06:37'),
(50, 1208375429, 1263166330, 'asdad', 1, '2025-01-17 11:06:37'),
(51, 1208375429, 1263166330, 'asdad', 1, '2025-01-17 11:06:37'),
(52, 1208375429, 1263166330, 'asdadad', 1, '2025-01-17 11:06:37'),
(53, 1208375429, 1263166330, 'asdadasd', 1, '2025-01-17 11:06:37'),
(54, 1208375429, 1263166330, 'asdasd', 1, '2025-01-17 11:06:37'),
(55, 1208375429, 1263166330, 'asdad', 1, '2025-01-17 11:06:37'),
(56, 1263166330, 1208375429, 'ads', 1, '2025-01-17 11:05:19'),
(57, 1263166330, 1208375429, 'asds', 1, '2025-01-17 11:05:19'),
(58, 210935271, 1208375429, 'sdf', 0, '2025-01-17 10:43:36'),
(59, 1208375429, 1263166330, 'da', 1, '2025-01-17 11:06:37'),
(60, 1263166330, 1208375429, '😢', 1, '2025-01-17 11:05:19'),
(61, 1263166330, 1208375429, 'ad', 1, '2025-01-17 11:05:19'),
(62, 210935271, 1208375429, 'asd', 0, '2025-01-17 11:06:51'),
(63, 1208375429, 1263166330, 'asd', 1, '2025-01-17 11:12:05'),
(64, 1263166330, 1208375429, 'asd', 0, '2025-01-17 11:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1263166330, 'moon', 's', 'moon@gmail.com', '$2y$10$g/wcnMNKth.asOmjwXwrx.rz//GNyr0YotMRfABy3dioODZhRsNVe', '1737039928_678920381b6ee.jpg', 'Active now'),
(2, 548592546, 'shuvo', 'a', 'shuvo@gmail.com', '$2y$10$AAkDvFg8hzxdXqrooHXkE.unV20PF32HxGf7CpyBm40fhQiRAMKZG', '1737040026_6789209ae1f6d.jpg', 'Offline now'),
(3, 1013361585, 'a', 's', 'a@gmail.com', '$2y$10$sEkdtMH/upklaqooiejsZO40BHAjD648i5LTG7.P9rc8B4MHDt0YO', '1737040566_678922b6c4f48.jpeg', 'Offline now'),
(4, 210935271, 'q', 's', 'q@gmail.com', '$2y$10$qV0i6LVrdtFQhx/YskeRiuEDnv/sbXYWc9WC71Qmnp8lbO4Hx8zHG', '1737041357_678925cdc6808.jpeg', 'Offline now'),
(5, 1208375429, 'orvi', 'a', 'orvi@gmail.com', '$2y$10$IR0W674N421PvDsZFTAs0uZcSm2y5ZKDpkuq8q3.IbPYIgp4AQw.a', '1737041462_67892636c5551.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
