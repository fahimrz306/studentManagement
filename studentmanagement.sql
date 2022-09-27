-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 06:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `class`, `city`, `contact`, `photo`) VALUES
(1, 'Fabiha', 3, '5', 'Dhaka', 1347483647, '402763_3063537501150_1044867070_3072341_1439433172_n.jpg'),
(2, 'Ishrak Navid Niloy', 5, '11', 'Comilla', 1647483641, 'IMG_20141008_174253.jpg'),
(3, 'FRZ', 1, '11', 'Dhaka', 1852003815, '123.JPG'),
(4, 'Mashrur', 25, '11', 'Dhaka', 1515234456, 'Davil may cry trial.wmv_000105205.jpg'),
(5, 'Muhit', 3, '8', 'Comilla', 1852003815, 'photo0091.jpg'),
(6, 'Lamia', 1, '10', 'Dhaka', 1952103815, 'ComputerDesktopWallpapersCollection1150__008.jpg'),
(7, 'Shakil', 30, '11', 'Dhaka', 1515234456, '51325651_2264628437150504_4711211697849761792_n.jpg'),
(8, 'Maruf', 31, '11', 'Dhaka', 1952125815, '51325651_2264628437150504_4711211697849761792_n.jpg'),
(9, 'Amit', 6, '11', 'Dhaka', 1515234456, '51325651_2264628437150504_4711211697849761792_n.jpg'),
(10, 'Shurovi', 4, '11', 'Dhaka', 167205346, '51325651_2264628437150504_4711211697849761792_n.jpg'),
(11, 'Abeda', 13, '11', 'Dhaka', 1711042544, '51325651_2264628437150504_4711211697849761792_n.jpg'),
(12, 'Maria', 8, '11', 'Dhaka', 1515234456, 'job3 (deadline- 8.12.20).PNG'),
(13, 'FAHIM RUBAIYAT ZAHIR', 12, '11', 'Dhaka', 1852003815, 'DSM 53408.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `photo`) VALUES
(1, 'FAHIM RUBAIYAT ZAHIR', 'fahim', 'fahimrz@gmail.com', '123', '123.JPG'),
(2, 'Mahir Shafin Mahi', 'mahi', 'mahi@gmail.com', '123', '428128_3063559221693_1044867070_3072386_1921478770_n.jpg'),
(3, 'Mashrur', 'Mashrur', 'mashrur@gmail.com', '123', 'Davil may cry trial.wmv_000044911.jpg'),
(4, 'Shakil', 'shakil', 'shakil@gmail.com', '123', '51325651_2264628437150504_4711211697849761792_n.jpg'),
(5, 'FAHIM RUBAIYAT ZAHIR', 'fahimrz', 'fahimrz306@gmail.com', '123', 'DSM 53408.jpg'),
(6, 'amit', 'amit', 'amit@gmail.com', '123', '51325651_2264628437150504_4711211697849761792_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
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
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
