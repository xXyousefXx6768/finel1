-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 فبراير 2024 الساعة 19:06
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yousef_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `proudcts`
--

CREATE TABLE `proudcts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(77) NOT NULL,
  `cpass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `proudcts`
--

INSERT INTO `proudcts` (`id`, `username`, `password`, `email`, `cpass`) VALUES
(2, 'mr robot', '0', 'ya839327@gmail.com', '0'),
(3, 'amryousef133', '0', 'mrrobot@gmail.com', '0'),
(4, 'yousef tarek', '$2y$10$Vdl6Q9IgUgJIuL6NseKhs.nqp4VESaOPw6KZeGktWsFGfczn9kgye', 'yamt3556@gmail.com', NULL),
(5, 'yousef tarek', '$2y$10$7eG7dptlsMWzOw6X077rfuRR8FKiB61JSOjBTma.78/ipHn3zRPvG', 'yamt3556@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proudcts`
--
ALTER TABLE `proudcts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proudcts`
--
ALTER TABLE `proudcts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
