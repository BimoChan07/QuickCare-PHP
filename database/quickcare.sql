-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 08:43 AM
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
-- Database: `quickcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(10) NOT NULL,
  `AppointmentNumber` int(10) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `AppointmentDate` date DEFAULT NULL,
  `AppointmentTime` time DEFAULT NULL,
  `Specialization` varchar(250) DEFAULT NULL,
  `Doctor` int(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `AppointmentNumber`, `Name`, `username`, `MobileNumber`, `Email`, `AppointmentDate`, `AppointmentTime`, `Specialization`, `Doctor`, `Message`, `ApplyDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 141561395, 'Rajesh Kaur', '', 989, 'raj@gmail.com', '2022-11-12', '12:41:00', '2', 2, 'Thanks', '2022-11-10 06:11:50', 'Cancelled due to incorrect mobile number', 'Cancelled', '2022-11-10 12:40:35'),
(2, 499219152, 'Mukesh Yadav', '', 7977797979, 'mukesh@gmail.com', '2022-11-13', '12:30:00', '2', 2, 'bmnbmngfugwakJDiowhfdgr', '2022-11-10 07:08:58', 'Your appointment has been approved, kindly came at mention time', 'Approved', '2022-11-10 12:34:41'),
(3, 485109480, 'Tina Yadav', '', 4654564464, 'tina@gmail.com', '2022-11-11', '13:00:00', '1', 1, 'bjnbjh', '2022-11-10 12:08:51', 'Appointment request has been approved', 'Approved', '2022-11-10 14:32:29'),
(4, 611388102, 'Jyoti', '', 7897987987, 'jyoti@gmail.com', '2022-11-12', '02:00:00', '1', 1, 'Thanks', '2022-11-10 14:31:17', NULL, NULL, NULL),
(5, 607441873, 'Anuj kumar', '', 1425362514, 'anujkkk@hmak.com', '2022-11-16', '20:50:00', '1', 1, 'NA', '2022-11-11 01:19:37', NULL, NULL, NULL),
(6, 667282012, 'Rahul', '', 1425251414, 'rk@gmail.com', '2022-11-15', '18:31:00', '2', 2, 'NA', '2022-11-11 01:48:52', 'Approved', 'Approved', '2022-11-11 07:24:25'),
(7, 599829368, 'Anita', '', 4563214563, 'anta@test.com', '2022-11-25', '15:20:00', '2', 2, 'NA', '2022-11-11 01:49:54', NULL, NULL, NULL),
(8, 940019123, 'Amit Kumar', '', 1425362514, 'amitkr123@test.com', '2022-11-15', '12:30:00', '13', 4, 'NA', '2022-11-11 01:56:17', 'Your appointment has been approved.', 'Approved', '2022-11-11 01:56:55'),
(9, 231614133, 'Bimochan Bajimaya', '', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '1', 1, 'Please help\r\n', '2023-09-25 08:40:11', 'Approved', 'Approved', '2023-09-27 18:08:16'),
(10, 553223397, 'Nischal Dahal', '', 0, 'nischald@gmail.com', '2023-09-26', '08:00:00', '1', 5, 'kslfkfjdsalf', '2023-09-25 08:40:59', 'huncha', 'Approved', '2023-09-25 08:41:21'),
(11, 554614474, 'sanjay khadka', '', 9809349832, 'sanjaykhadka1@gmail.com', '2023-09-26', '08:00:00', '1', 1, 'I want urgent reply', '2023-09-25 09:38:00', 'No', 'Cancelled', '2023-09-25 21:12:29'),
(12, 849153420, 'Anish', '', 234223, 'alishashrestha893@gmail.com', '2023-09-28', '10:00:00', '6', 0, 'dsad', '2023-09-25 22:08:19', NULL, NULL, NULL),
(13, 544599747, 'Bimochan Bajimaya', 'bmochanb', 9860232480, NULL, '2023-09-28', '07:30:00', '3', 1, 'I need an appointment', '2023-09-27 16:43:17', 'sadasd', 'Approved', '2023-09-27 18:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(5) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `specialization` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(259) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fullname`, `phone`, `email`, `specialization`, `username`, `password`, `CreationDate`) VALUES
(1, 'Dr. Neha Bajimaya', 9800100234, 'nehab@gmail.com', '3', 'neha123', 'neha123', '2023-09-25 19:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(20) NOT NULL,
  `AppointmentNumber` varchar(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `AppointmentDate` varchar(255) NOT NULL,
  `AppointmentTime` varchar(255) NOT NULL,
  `ApplyDate` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `AppointmentNumber`, `Name`, `MobileNumber`, `Email`, `AppointmentDate`, `AppointmentTime`, `ApplyDate`, `Status`, `Remark`) VALUES
(1, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(2, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(3, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(4, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(5, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(6, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(7, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(8, '231614133', 'Bimochan Bajimaya', 9860232480, 'bmochanb@gmail.com', '2023-09-26', '07:30:00', '2023-09-25 14:25:11', 'Approved', ''),
(9, '544599747', 'Bimochan Bajimaya', 9860232480, '', '2023-09-28', '07:30:00', '2023-09-27 22:28:17', 'Approved', ''),
(10, '544599747', 'Bimochan Bajimaya', 9860232480, '', '2023-09-28', '07:30:00', '2023-09-27 22:28:17', 'Approved', ''),
(11, '544599747', 'Bimochan Bajimaya', 9860232480, '', '2023-09-28', '07:30:00', '2023-09-27 22:28:17', 'Approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `ID` int(5) NOT NULL,
  `Specialization` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`ID`, `Specialization`, `CreationDate`) VALUES
(1, 'Orthopedics', '2022-11-09 14:22:33'),
(2, 'Internal Medicine', '2022-11-09 14:23:42'),
(3, 'Obstetrics and Gynecology', '2022-11-09 14:24:14'),
(4, 'Dermatology', '2022-11-09 14:24:42'),
(5, 'Pediatrics', '2022-11-09 14:25:06'),
(6, 'Radiology', '2022-11-09 14:25:31'),
(7, 'General Surgery', '2022-11-09 14:25:52'),
(8, 'Ophthalmology', '2022-11-09 14:27:18'),
(9, 'Family Medicine', '2022-11-09 14:27:52'),
(10, 'Chest Medicine', '2022-11-09 14:28:32'),
(11, 'Anesthesia', '2022-11-09 14:29:12'),
(12, 'Pathology', '2022-11-09 14:29:51'),
(13, 'ENT', '2022-11-09 14:30:13'),
(14, 'New Pathology', '2023-09-27 07:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `age`, `phone`, `username`, `password`) VALUES
(1, 'Bimochan Bajimaya', 21, 9860232480, 'bmochanb', 'bmocchan07'),
(2, 'Nischal Dahal', 21, 1212121, 'nischal10', 'nischal10'),
(3, 'Anish Shrestha', 22, 98988, 'anish', 'anish'),
(4, 'Sabin', 23, 12312312, 'sabin', 'sabin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
