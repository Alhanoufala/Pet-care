-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 04:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pet_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments_requests`
--

CREATE TABLE `appointments_requests` (
  `pet_name` varchar(15) NOT NULL,
  `service` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `owner_email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments_requests`
--

INSERT INTO `appointments_requests` (`pet_name`, `service`, `date`, `time`, `owner_email`) VALUES
('Charlie', 'Boarding ', '2022-04-12', '21:14:50', 'alhanouf@gmail.com'),
('Lucy', 'Grooming ', '2022-04-12', '05:14:08', 'nada@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `available_appointments`
--

CREATE TABLE `available_appointments` (
  `service` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_appointments`
--

INSERT INTO `available_appointments` (`service`, `date`, `time`) VALUES
('Grooming', '2022-04-11', '06:00'),
('Checkup', '2022-04-11', '07:05'),
('Boarding', '2022-04-05', '00:40');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `email` varchar(35) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`email`, `password`) VALUES
('alhanouf@gmail.com', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments_requests`
--
ALTER TABLE `appointments_requests`
  ADD PRIMARY KEY (`pet_name`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
