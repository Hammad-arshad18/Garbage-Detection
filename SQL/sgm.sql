-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 06:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_sgm`
--

CREATE TABLE `register_sgm` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `approved` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_sgm`
--

INSERT INTO `register_sgm` (`id`, `name`, `email`, `password`, `image_path`, `approved`) VALUES
(1, 'Hammad Arshad', 'hammad@gmail.com', '$2y$10$5dnQu.Luty7/FIQmBZGRaOAB7tmUvJxOKu2IWrHQ2Ug5X.oP336hu', 'images/PicsArt_07-27-11.42.40.jpg', 1),
(2, 'Afifa Shahid', 'afifa@gmail.com', '$2y$10$b9U86c7ewGSyKNUz6q.oOOB9xEKBf5GVhvbB98kG72ksZMm0zEODi', 'images/IMG_3775.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sgm_contact`
--

CREATE TABLE `sgm_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sgm_contact`
--

INSERT INTO `sgm_contact` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Hammad', 'Hammad@yahoo.com', 'Great Job'),
(4, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_sgm`
--
ALTER TABLE `register_sgm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sgm_contact`
--
ALTER TABLE `sgm_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_sgm`
--
ALTER TABLE `register_sgm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sgm_contact`
--
ALTER TABLE `sgm_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
