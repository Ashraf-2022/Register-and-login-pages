-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 11:12 PM
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
-- Database: `login test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(120) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `md5_pass` varchar(120) NOT NULL,
  `date` varchar(120) NOT NULL,
  `gender` enum('female','male') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `md5_pass`, `date`, `gender`) VALUES
(1, 'Ashraf Mohamed', 'adm193556@gmail.com', 'ashraf13552100', 'ea282aaa0dcaf89a172f838485be6d1a', '4-5-2005', 'male'),
(2, 'Osama Salah', 'Osama1234@gmaol.com', '13552100@#123', '6ad5be9a35c0c9aa9d152d7533243d1c', '19-1-2002', 'male'),
(3, 'Ahmed_Osama', 'Ahmed_2020@gamil.com', '01015611078@#', '$2y$10$i16/IYd/2.dyIGFBguvAmOLz5zvxlSmV6YJrHMDXpzi8US1pmISse', '15-2-1952', 'male'),
(4, 'said hamdy', 'sayed22@gmail.com', '12345678900', '$2y$10$p0itdwu/lYGgTXAIlWtda.BZ/2UUdsk7JOHYCJ0.i6pSP5qG0XoaW', '13-1-1991', 'male'),
(5, 'Samira1212', 'Samira1212@hotmail.com', '13552100@#$%^&amp;*()', '$2y$10$nC9bo94cg9s0T7S.SWLDMOJp6XUTCqKs9WdnOBm8mTMIGDlO/ioAe', '18-6-2001', 'female'),
(6, 'abd elsalam', 'abd_elsalam@gmail.com', '12345678900987654321', '$2y$10$ujQk7DXnhqNTOmbSj.gfHet1DyMeciYWUTxK8bCZspRBSG9sunHLO', '18-11-1951', 'male'),
(7, 'Ramy Saied', 'Ramy_Saied@gmail.com', 'Ramy Saied', '$2y$10$tS5K6yuU7HQLeyXJHDlubev8W/hAoKBSBP1jQzqaJ0pmWCTt3sS3u', '19-7-1994', 'male');

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
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
