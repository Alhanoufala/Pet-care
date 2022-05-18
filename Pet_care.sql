-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 02:47 PM
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
  `photo` text DEFAULT NULL,
  `photo1` text NOT NULL,
  `location` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`label`, `description`, `photo`, `photo1`, `location`, `id`) VALUES
('About Us', 'Welcome to our Petcare Veterinary Clinic! Where animals and their owners are valued and cherished. The clinic first opened its doors in Riyadh in January 2022. In Saudi Arabia, our clinic is the first of its kind. Our staff has been offering unique veterinary medical services and compassion to pets as a primary focus. We are here to keep your pets healthy by treating each client as if they were family and each pet as if it were our own. <br>Our mission is to provide quality, caring, and compassionate veterinary care to pet owners in addition to detecting diseases and providing outstanding health care.<br> We specislize in the care of cats , dogs, rabbits, birds, fish, and turtles.', 'catR2.png', 'catR.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.7256444722366!2d46.68682081516388!3d24.77059418409634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efd3fc8ec4aeb%3A0x605baa975e4243f9!2sAdvanced%20Pet%20Clinic!5e0!3m2!1sen!2ssa!4v1645211168968!5m2!1sen!2ssa', 1);

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
  `password` int(15) NOT NULL,
  `Verification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`email`, `password`, `Verification`) VALUES
('hano.alawwad@gmail.com', 123456, '5350');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `name` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `birthDate` date NOT NULL,
  `breed` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `medicalHistory` longblob DEFAULT NULL,
  `vaccinations` longblob DEFAULT NULL,
  `gender` text NOT NULL,
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
  `photo` text DEFAULT NULL,
  `Verification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_owner`
--

INSERT INTO `pet_owner` (`email`, `password`, `Fname`, `Lname`, `gender`, `phone_no`, `photo`, `Verification`) VALUES
('s.i.alshathri@gmail.com', '12345', 'Sarah', 'AlShathri', 'female', 582653424, 'ProfilePhoto.jpg', '8819');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `pet_name` varchar(25) NOT NULL,
  `owner_email` varchar(45) NOT NULL,
  `review` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `servicename` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`servicename`, `description`, `price`, `photo`) VALUES
('Grooming', '    grooming session consists of the pet being brushed , bathed , and dried.  \r\n', '70', 'grooming.jpeg'),
('Boarding', 'providing a place where your pet can stay overnight or longer.  \r\n', '120', 'Boarding.jpeg'),
('Checkup', 'tests that are meant to detect any signs of health issues that your pet may be facing.\r\n', '180', 'cheakup.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `available_appointments`
--
ALTER TABLE `available_appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
