-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 08:33 PM
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
  `approved` int(50) NOT NULL,
  `dashboard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_sgm`
--

INSERT INTO `register_sgm` (`id`, `name`, `email`, `password`, `image_path`, `approved`, `dashboard`) VALUES
(1, 'Hammad Arshad', 'hammad@gmail.com', '$2y$10$aXeCIX7xxf1oeyoxUXYHK.7yhddRBKmkuY3R2aYE5Wj2PElVoc.JK', 'images/IMG_20220215_144034_759.jpg', 1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `sgm_blog`
--

CREATE TABLE `sgm_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sgm_blog`
--

INSERT INTO `sgm_blog` (`id`, `title`, `comment`, `date`) VALUES
(1, 'Hammad', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet, blanditiis consectetur dicta dolor ea facere ipsa laborum nobis odit officiis perferendis, quo ratione repudiandae, suscipit tenetur unde velit veniam.', '2022-02-15 23:56:25'),
(2, 'Smart Garbage Management', 'Smart Garbage Management for sustainable city life is a system used to detect garbage from the streets & generates an alert to the system. To Makes our cities clean there’s a dire need for this project. This project is better than others because the previous project that was done only detects some piece of garbage or sensors is applied in the lid of the dustbins. but there didn’t exist such a system that could help detect the whole accumulation of garbage.', '2022-02-16 00:08:46');

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
-- Indexes for table `sgm_blog`
--
ALTER TABLE `sgm_blog`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sgm_blog`
--
ALTER TABLE `sgm_blog`
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
