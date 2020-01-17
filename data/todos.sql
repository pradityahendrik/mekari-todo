-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 05:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekari_todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `name`, `created_at`) VALUES
(2, 'asd', '2020-01-17 09:24:17'),
(4, 'asdasda', '2020-01-17 09:24:30'),
(5, 's', '2020-01-17 16:13:09'),
(6, 'asdasda', '2020-01-17 16:15:52'),
(7, 'asd', '2020-01-17 16:15:56'),
(8, 'asdasda', '2020-01-17 16:18:00'),
(9, 'dasdasd', '2020-01-17 16:18:02'),
(10, 'asdasd', '2020-01-17 16:18:06'),
(11, 'asdasda', '2020-01-17 16:18:22'),
(14, 'asda', '2020-01-17 16:18:36'),
(21, 'makan', '2020-01-17 16:26:55'),
(22, 'tidur', '2020-01-17 16:27:01'),
(23, 'asd', '2020-01-17 16:28:54'),
(24, 'asd', '2020-01-17 16:29:06'),
(26, 'as', '2020-01-17 16:29:12'),
(27, 'asd', '2020-01-17 16:30:02'),
(28, 'dddd', '2020-01-17 16:30:04'),
(29, 'sda', '2020-01-17 16:30:43'),
(30, 'sda', '2020-01-17 16:30:59'),
(31, 'sda', '2020-01-17 16:31:03'),
(32, 'dddd', '2020-01-17 16:31:05'),
(33, 'dasdad', '2020-01-17 16:31:08'),
(34, '1', '2020-01-17 16:31:15'),
(35, '2', '2020-01-17 16:31:17'),
(36, '3', '2020-01-17 16:31:19'),
(37, '', '2020-01-17 16:31:31'),
(38, 'asd', '2020-01-17 16:33:01'),
(41, 'as', '2020-01-17 16:34:03'),
(42, 'd', '2020-01-17 16:34:05'),
(43, 'asd', '2020-01-17 16:34:13'),
(46, 'dasdasd', '2020-01-17 16:34:26'),
(47, 'dasd', '2020-01-17 16:34:36'),
(48, 'asd', '2020-01-17 16:37:06'),
(49, 'dd', '2020-01-17 16:37:08'),
(50, 'asd', '2020-01-17 16:37:19'),
(51, '1', '2020-01-17 16:37:32'),
(52, '1', '2020-01-17 16:37:36'),
(54, '2', '2020-01-17 16:37:46'),
(64, 'hendrik', '2020-01-17 16:41:40'),
(65, 'praditya', '2020-01-17 16:41:48'),
(68, 'apaan', '2020-01-17 16:41:54'),
(72, '4', '2020-01-17 16:43:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
