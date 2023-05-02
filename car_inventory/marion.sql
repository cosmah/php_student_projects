-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 09:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `mileage` int(11) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `type`, `model`, `mileage`, `year`) VALUES
(1, 'BMW', 'C100S', 23456, 2005),
(3, 'BMW', 'C100S', 23456, 2005),
(4, 'FORD', 'MUSTANG', 234500, 2001),
(5, 'TOYOTA', 'SPACIO', 340000, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(225) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `status`, `created_at`, `updated_at`, `password`, `user_type`) VALUES
(12, 'jack', 'frost', 'jacfrost06@gmail.com', 1, '2023-02-26 00:47:57', '2023-02-26 00:47:57', '$2y$10$3md8xfQPn2gcPSKKibMc5.Z/RoyjGaKYiM.4OlKZX95BnJxORJIs6', 'Admin'),
(13, 'john', 'doe', 'john@gmail.com', 1, '2023-02-26 03:52:43', '2023-02-26 03:52:43', '$2y$10$p0dK7eOz5t9GZUNtweSl4.687B0gMvcWfRvRISVYYvWfmaDUzh2rG', 'user'),
(14, 'jane', 'doe', 'jane@gmail.com', 1, '2023-02-26 03:53:27', '2023-02-26 03:53:27', '$2y$10$Ykf16A1hgNRI0./iJ.T4Luz8DoyLRiB2Wxo17BH31oIBU6MMk5vrC', 'admin'),
(15, 'ken', 'jack', 'jac06@gmail.com', 1, '2023-03-23 07:45:48', '2023-03-23 07:45:48', '$2y$10$ApcBNu02dpMc9ZmwIS08/.m1Q8iSpefHYhoauGQHnbDLLA/scOWh2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
