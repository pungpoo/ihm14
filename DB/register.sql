-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 10:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sotl`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(6) UNSIGNED NOT NULL,
  `regis_title_name` varchar(255) NOT NULL,
  `regis_name` varchar(50) NOT NULL,
  `regis_lastname` varchar(50) DEFAULT NULL,
  `regis_gender` varchar(1) NOT NULL,
  `regis_age` int(2) NOT NULL,
  `regis_nationality` varchar(100) NOT NULL,
  `regis_mail` varchar(100) NOT NULL,
  `regis_phone` varchar(50) NOT NULL,
  `regis_emergency_phone` varchar(20) DEFAULT NULL,
  `regis_affiliation` varchar(255) NOT NULL,
  `regis_affiliation_address` varchar(255) NOT NULL,
  `regis_food` int(1) NOT NULL,
  `regis_food_other` varchar(255) DEFAULT NULL,
  `regis_food_allergy` varchar(50) DEFAULT NULL,
  `regis_group` int(2) DEFAULT NULL,
  `regis_workshop_day1` varchar(2) DEFAULT NULL,
  `regis_workshop_day2` varchar(2) DEFAULT NULL,
  `regis_payment_rate` int(1) NOT NULL,
  `regis_payment_date` date DEFAULT NULL,
  `regis_payment_status` int(1) NOT NULL DEFAULT '0',
  `regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
