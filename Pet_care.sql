-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220506.44a5cb2d56
-- https://www.phpmyadmin.net/
--
<<<<<<< Updated upstream
-- Host: localhost
-- Generation Time: May 07, 2022 at 08:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29
=======
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 09:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5
>>>>>>> Stashed changes

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_care`
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
<<<<<<< Updated upstream
  `note` varchar(150) DEFAULT NULL,
  `id` int(11) NOT NULL
=======
  `note` varchar(50) DEFAULT NULL
>>>>>>> Stashed changes
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments_requests`
--

<<<<<<< Updated upstream
INSERT INTO `appointments_requests` (`pet_name`, `service`, `date`, `time`, `owner_email`, `status`, `note`, `id`) VALUES
('lala', 'Checkup', '2022-05-24', '00:59:00', '666', NULL, NULL, 18);
=======
INSERT INTO `appointments_requests` (`pet_name`, `service`, `date`, `time`, `owner_email`, `status`, `note`) VALUES
('Lulu', 'grooming', '2022-05-11', '32:52:53', 'alhanouf@gmail.com', 'completed', NULL),
('sam', 'grooming', '2022-05-04', '28:52:53', 'nada@gmail.com', 'completed', NULL),
('Lucy', 'grooming', '2022-05-10', '29:54:17', 'raseel@gmail.com', 'declined', NULL),
('juju', 'Grooming ', '2022-05-10', '32:54:17', 'sara@gmail.com', 'completed', NULL);
>>>>>>> Stashed changes

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

--
-- Dumping data for table `available_appointments`
--

INSERT INTO `available_appointments` (`service`, `date`, `time`, `appointment_id`) VALUES
('Grooming', '2022-04-19', '04:10', 2),
('Grooming', '2022-05-17', '01:07', 3);

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
  `status` enum('spayed','neutered') NOT NULL,
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
<<<<<<< Updated upstream
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `owner_email` varchar(45) NOT NULL,
  `review` varchar(100) NOT NULL,
  `photo` longblob NOT NULL
=======
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Petimage` blob DEFAULT NULL,
  `Petname` varchar(25) DEFAULT NULL,
  `review` varchar(350) DEFAULT NULL
>>>>>>> Stashed changes
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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



