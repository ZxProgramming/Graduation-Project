-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 01:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layercase`
--

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `idintity` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL DEFAULT 'lawyer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `type`, `Role`) VALUES
(1, 'programmer', 'Alsaghir', 'ziadm57@yahoo.com', '01099475854', '1241241513513', '6eea157529589e67776586397630f947', 'محامى مجلس الدولة', 'محامى'),
(2, 'programmer', 'Alsaghir', 'ziadddm57@yahoo.com', '01099475854', '2312412412412', 'ae835a7002a88ae37cfc9887e0b2173b', 'محامى جنائى', 'محامى'),
(3, 'Ahmedd', 'Alsaghir', 'ahmedddd@yahoo.com', '01099475854', '2131231241241', 'a846dc032478a30b4cbdcd64e56e04bb', 'محامى قضاء عسكرى', 'محامى');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `idintity` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `Role`) VALUES
(21, 'AhmedUser', 'Alsaghir', 'ziadm57@yahoo.com', '01099475854', '2414212412412', 'ae835a7002a88ae37cfc9887e0b2173b', 'مواطن'),
(22, 'programmer', 'Alsaghir', 'ahmed@yahoo.com', '01099475854', '2312412412412', '9c24662f37e33ad7803ed43b740025b6', 'مواطن');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
