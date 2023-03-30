-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 05:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25
=======
-- Host: localhost
-- Generation Time: Mar 30, 2023 at 05:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
>>>>>>> fc04a318c5b1398ba11f1fbb538a5ccb78be9d16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD
-- Database: `usa_tranquillero.sql`
=======
-- Database: `usa_tranquillero`
>>>>>>> fc04a318c5b1398ba11f1fbb538a5ccb78be9d16
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `usa_tranquillero`
--

CREATE TABLE `usa_tranquillero` (
  `id` int(100) NOT NULL,
  `email` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usa_tranquillero`
--

INSERT INTO `usa_tranquillero` (`id`, `email`, `name`, `message`) VALUES
(0, '', '', 'hi'),
(0, '', '', 'hi'),
(0, '', '', 'hello'),
(0, '', '', 'ghtr'),
(0, '', '', 'jjj'),
(0, '', '', 'hi'),
(0, '', '', 'hi'),
(0, '', '', 'hello');
=======
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(1, 'd', 'asdfdsfsd@sgdg.com', 's'),
(3, 'df', 'sdfdf@gmail.com', 'd'),
(4, 'd', 'bugeetsd2@mailinator.com', 'ddf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> fc04a318c5b1398ba11f1fbb538a5ccb78be9d16
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
