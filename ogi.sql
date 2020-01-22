-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2020 at 05:54 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogi`
--

-- --------------------------------------------------------

--
-- Table structure for table `musteri`
--

CREATE TABLE `musteri` (
  `id` int(11) NOT NULL,
  `Ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Poruka` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `musteri`
--

INSERT INTO `musteri` (`id`, `Ime`, `Email`, `Poruka`) VALUES
(3, 'Acika', 'miki@veliki.com', 'Gde si Miki batice?!'),
(5, 'Acika', 'miki@veliki.com', 'duuuuuuuuuuuuuuuuduuududududdudududu'),
(6, 'cuska', 'miki@veliki.com', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musteri`
--
ALTER TABLE `musteri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musteri`
--
ALTER TABLE `musteri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;