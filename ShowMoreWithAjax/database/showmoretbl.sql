-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 08:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showmore`
--

-- --------------------------------------------------------

--
-- Table structure for table `showmoretbl`
--

CREATE TABLE `showmoretbl` (
  `ID` int(11) NOT NULL,
  `Data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showmoretbl`
--

INSERT INTO `showmoretbl` (`ID`, `Data`) VALUES
(1, 'PHP is a server side scripting language'),
(2, 'PHP is a server side scripting language'),
(3, 'PHP is a server side scripting language'),
(4, 'PHP is a server side scripting language'),
(5, 'PHP is a server side scripting language'),
(6, 'PHP is a server side scripting language'),
(7, 'PHP is a server side scripting language'),
(8, 'PHP is a server side scripting language'),
(9, 'PHP is a server side scripting language'),
(10, 'PHP is a server side scripting language'),
(11, 'PHP is a server side scripting language'),
(12, 'PHP is a server side scripting language'),
(13, 'PHP is a server side scripting language'),
(14, 'PHP is a server side scripting language'),
(15, 'PHP is a server side scripting language');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showmoretbl`
--
ALTER TABLE `showmoretbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showmoretbl`
--
ALTER TABLE `showmoretbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
