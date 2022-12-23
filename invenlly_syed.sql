-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invenlly_syed`
--

-- --------------------------------------------------------

--
-- Table structure for table `eron`
--

CREATE TABLE `eron` (
  `id` int(11) NOT NULL,
  `value_cmd` int(11) NOT NULL,
  `value_cmd_ack` int(11) NOT NULL,
  `value_detected` int(11) NOT NULL,
  `text_LCD` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `button` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eron`
--

INSERT INTO `eron` (`id`, `value_cmd`, `value_cmd_ack`, `value_detected`, `text_LCD`, `button`) VALUES
(1, 1, 0, 0, 'on', '');

-- --------------------------------------------------------

--
-- Table structure for table `syed`
--

CREATE TABLE `syed` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syed`
--

INSERT INTO `syed` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(3, 1, 'syed@gmail.com', '1234', '2022-02-12 12:29:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eron`
--
ALTER TABLE `eron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syed`
--
ALTER TABLE `syed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eron`
--
ALTER TABLE `eron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syed`
--
ALTER TABLE `syed`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
