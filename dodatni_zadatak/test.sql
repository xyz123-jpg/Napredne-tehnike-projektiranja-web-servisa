-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 10:59 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_path`, `uploaded_at`) VALUES
(38, 'uploads/6 - Copy (2)_1730973528.jpg', '2024-11-07 09:58:48'),
(39, 'uploads/6 - Copy (2)_1730973530.jpg', '2024-11-07 09:58:50'),
(40, 'uploads/4_1730973533.jpg', '2024-11-07 09:58:53'),
(41, 'uploads/4_1730973535.jpg', '2024-11-07 09:58:55'),
(42, 'uploads/4_1730973536.jpg', '2024-11-07 09:58:56'),
(43, 'uploads/4_1730973537.jpg', '2024-11-07 09:58:57'),
(44, 'uploads/4_1730973539.jpg', '2024-11-07 09:58:59'),
(45, 'uploads/4_1730973540.jpg', '2024-11-07 09:59:00'),
(46, 'uploads/4_1730973541.jpg', '2024-11-07 09:59:01'),
(47, 'uploads/4_1730973542.jpg', '2024-11-07 09:59:02'),
(48, 'uploads/4_1730973543.jpg', '2024-11-07 09:59:03'),
(49, 'uploads/4_1730973544.jpg', '2024-11-07 09:59:04'),
(50, 'uploads/4_1730973546.jpg', '2024-11-07 09:59:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
