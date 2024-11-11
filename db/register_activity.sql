-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2024 at 05:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id_auto` int(11) NOT NULL,
  `id` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `id_res_auto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id_auto`, `id`, `ip_address`, `timestamp`, `data`, `user_id`, `id_res_auto`) VALUES
(1, 'j6jljv7639jtp7j8lasv9id981mamlvm', '::1', 1730430410, '__ci_last_regenerate|i:1730430410;', NULL, NULL),
(2, 'o5q7ejgo9kdlotfvdoug6o3njv1ok585', '::1', 1730432503, '__ci_last_regenerate|i:1730432503;', NULL, NULL),
(3, 'd3si3lp06ub9b6uqk6q0sehgh4fv0f4u', '::1', 1730432832, '__ci_last_regenerate|i:1730432832;', NULL, NULL),
(4, '25mdlqf5sc5fbv9ppppe8m7s2ojrpe35', '::1', 1730433608, '__ci_last_regenerate|i:1730433608;', NULL, NULL),
(15, '2rjph4ers6gtpi2i6clii0d4u5qqh582', '::1', 1730434342, '__ci_last_regenerate|i:1730434342;', NULL, NULL),
(16, '7kruvhobkbfo9sg9viipkkdfnk4tcc98', '::1', 1730434378, '__ci_last_regenerate|i:1730434342;', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dt_activity`
--

CREATE TABLE `dt_activity` (
  `dt_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dt_activity`
--




--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `rank_id` int(11) NOT NULL,
  `rank_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`rank_id`, `rank_name`) VALUES
(1, '1'),
(2, '2'),
(3, '3');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rank_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `rank_id`) VALUES
(1, 'Hanana', '111111', 'Hanana@gmail.com', 1),
(2, 'Onana', '222222', 'Onana@gmail.com', 2),
(3, NULL, '33333', 'nullll@gmail.com', 1),
(4, 'Moradona', '44444', 'Moradona@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `dt_activity`
--
ALTER TABLE `dt_activity`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `rank_id` (`rank_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dt_activity`
--
ALTER TABLE `dt_activity`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rank_id`) REFERENCES `ranks` (`rank_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
