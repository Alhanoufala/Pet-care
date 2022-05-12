-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2022 at 11:23 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `label` text NOT NULL,
  `description` text NOT NULL,
  `photo` blob DEFAULT NULL,
  `location` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`label`, `description`, `photo`, `location`, `id`) VALUES
('About us testing', 'testing', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.7256444722366!2d46.68682081516388!3d24.77059418409634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efd3fc8ec4aeb%3A0x605baa975e4243f9!2sAdvanced%20Pet%20Clinic!5e0!3m2!1sen!2ssa!4v1645211168968!5m2!1sen!2ssa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointments_requests`
--

CREATE TABLE `appointments_requests` (
  `pet_name` varchar(15) NOT NULL,
  `service` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `owner_email` varchar(25) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `note` varchar(150) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments_requests`
--

INSERT INTO `appointments_requests` (`pet_name`, `service`, `date`, `time`, `owner_email`, `status`, `note`, `id`) VALUES
('lala', 'Checkup', '2022-05-24', '00:59:00', '666', 'accepted', NULL, 18),
('lulu', 'Grooming', '2022-05-17', '01:07:00', 'h@gmail.com', 'completed', '---', 19);

-- --------------------------------------------------------

--
-- Table structure for table `available_appointments`
--

CREATE TABLE `available_appointments` (
  `service` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(8) NOT NULL,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `name` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `birthDate` date NOT NULL,
  `breed` varchar(30) NOT NULL,
  `pet_status` enum('spayed','neutered') NOT NULL,
  `medicalHistory` longblob DEFAULT NULL,
  `vaccinations` longblob DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `owner_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`name`, `photo`, `birthDate`, `breed`, `status`, `medicalHistory`, `vaccinations`, `gender`, `owner_email`) VALUES
('Luna', 'Luna.png', '2020-01-01', 'Labradoodle', 'neutered', NULL, NULL, 'female', 's.i.alshathri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pet_owner`
--

CREATE TABLE `pet_owner` (
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phone_no` int(11) NOT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_owner`
--

INSERT INTO `pet_owner` (`email`, `password`, `Fname`, `Lname`, `gender`, `phone_no`, `photo`) VALUES
('s.i.alshathri@gmail.com', '112233', 'Sarah', 'AlShathri', 'female', 582653424, 'ProfilePhoto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `pet_name` varchar(25) NOT NULL,
  `owner_email` varchar(45) NOT NULL,
  `review` varchar(100) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `pet_name`, `owner_email`, `review`, `photo`) VALUES
(19, 'lulu', 'h@gmail.com', 'Testing ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments_requests`
--
ALTER TABLE `appointments_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available_appointments`
--
ALTER TABLE `available_appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`name`),
  ADD KEY `owner_email` (`owner_email`);

--
-- Indexes for table `pet_owner`
--
ALTER TABLE `pet_owner`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments_requests`
--
ALTER TABLE `appointments_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `available_appointments`
--
ALTER TABLE `available_appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`owner_email`) REFERENCES `pet_owner` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
