-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 12:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `subject` varchar(200) NOT NULL,
  `courseduration` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course2`
--

CREATE TABLE `course2` (
  `sno` int(200) NOT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `courseduration` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course2`
--

INSERT INTO `course2` (`sno`, `Subject`, `courseduration`) VALUES
(12, 'urdu', '2/month'),
(13, 'german', '2/month'),
(14, 'maths', '2/month'),
(15, 'computer', '2/month'),
(22, 'french', '2/month');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(22, 'raju@gmail.com', '12345'),
(23, 'aftab@gmail.com', '123456'),
(25, 'usha@gmail.com', '123456'),
(26, 'vaibhav@gmail.com', '8569');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `paymentsche` varchar(300) DEFAULT NULL,
  `bill_number` int(255) DEFAULT NULL,
  `amountpaid` varchar(255) DEFAULT NULL,
  `balanceamount` varchar(300) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `paymentsche`, `bill_number`, `amountpaid`, `balanceamount`, `date`) VALUES
(9, 'busha singh', 'first', 87877956, '20000', '400', '2023-05-09'),
(11, 'shivang', 'first', 788878878, '400', '10', '2023-05-10'),
(12, 'aftab alam', 'first', 884564, '6000', '88977', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `serial_no` int(200) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email` varchar(300) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `Enroll_number` int(150) DEFAULT NULL,
  `Date_admission` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`serial_no`, `Name`, `Email`, `phone`, `Enroll_number`, `Date_admission`) VALUES
(168, 'usha singh', 'raju@gmail.com', 78454546, 2147483647, '2023-05-11'),
(169, 'urmila maurya', 'urmila@gmail.com', 8785464, 2147483647, '2023-05-19'),
(173, 'aftab alam', 'aftab@gmail.com', 787884564, 2147483647, '2023-05-18'),
(174, 'vikas', 'vikas@gmail.com', 2147483647, 745896, '2023-05-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`subject`);

--
-- Indexes for table `course2`
--
ALTER TABLE `course2`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course2`
--
ALTER TABLE `course2`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `serial_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
