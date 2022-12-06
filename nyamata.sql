-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 02:57 PM
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
-- Database: `nyamata`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `Amazina /Firstname` varchar(25) DEFAULT NULL,
  `Andi mazina /Lastname` varchar(25) DEFAULT NULL,
  `Indangamuntu /ID` int(16) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `Umudugudu /Village` varchar(45) DEFAULT NULL,
  `Akagari/Ccell` varchar(45) DEFAULT NULL,
  `Umurenge /Sector` varchar(45) DEFAULT NULL,
  `Akarere /District` varchar(45) DEFAULT NULL,
  `Date /itariki` timestamp NULL DEFAULT current_timestamp(),
  `Issue /Ikibazo` text DEFAULT NULL,
  `Conclusion /Umwanzuro` text DEFAULT NULL,
  `Date /Itariki  wafatiweho` timestamp NULL DEFAULT NULL,
  `Decider /Uwafashe umwanzuro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`Indangamuntu /ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `Indangamuntu /ID` int(16) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
