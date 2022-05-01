-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 11:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atma_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `user_status` varchar(25) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `address`, `email`, `password`, `user_type`, `user_status`, `created_at`) VALUES
(23, 'sfafas', 'fsfsf', 'qeqwrwsvxcv', 'fdsdfdfsd@gmail.com', '$2y$10$BSFQpPZvQIJqSKvMQAsgbe7jytTbMQCDwT2zE42xeP67kBJNRLCJa', 'user', 'active', '0000-00-00 00:00:00.000000'),
(25, 'Nai', 'Mollel', 'Dar', 'nai@gmail.com', '$2y$10$aveu5RjgZh9bt.sAdzDd8.1N19Tkt7APGEjnk3Sm6XfkoHd1IsxWO', 'User', 'inactive', '0000-00-00 00:00:00.000000'),
(28, 'sfafas', 'cvcxv', 'dsfdsf', 'qqqq@gmail.com', '$2y$10$bPKJCsewAEiXueftcJ48ruHhlFQvH8DZbOaEIathQPGqxvo2KIxT6', 'user', 'inactive', '0000-00-00 00:00:00.000000'),
(30, 'sfafas', 'ncvbvc', 'bbbbb', 'www@gmail.com', '$2y$10$6R6uxii8WT0UMMX/G65AX.CFQvg5DDalgKqsvRbJmYFRyvkDUTGrm', 'user', 'inactive', '0000-00-00 00:00:00.000000'),
(32, 'Norah', 'Charles', 'Arusha', 'noryn@gmail.com', '$2y$10$st9gqM6D77RRpguSvgDp2.RpKEYI9FX17PVEjOdBlSDZZk3xLbwT.', 'administrator', 'inactive', '0000-00-00 00:00:00.000000');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
