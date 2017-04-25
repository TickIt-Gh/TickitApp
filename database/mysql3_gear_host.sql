-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql3.gear.host
-- Generation Time: Apr 23, 2017 at 04:35 PM
-- Server version: 5.7.17-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tti2018`
--
CREATE DATABASE IF NOT EXISTS `tti2018` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tti2018`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userID` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `company` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `listing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_status` enum('paid','unpaid') NOT NULL,
  `validity` enum('valid','invalid') NOT NULL,
  `termination_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_listing`
--

CREATE TABLE `bus_listing` (
  `listing_id` int(11) NOT NULL,
  `bus_number` varchar(20) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `depature_time` time NOT NULL,
  `departure_date` date NOT NULL,
  `departure_point` varchar(20) NOT NULL,
  `destination_point` varchar(20) NOT NULL,
  `listing_status` enum('available','unavailable') NOT NULL,
  `price` float NOT NULL,
  `managed_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_listing`
--

INSERT INTO `bus_listing` (`listing_id`, `bus_number`, `available_seats`, `depature_time`, `departure_date`, `departure_point`, `destination_point`, `listing_status`, `price`, `managed_by`) VALUES
(31, 'KBJ 20 17', 43, '08:00:00', '2017-05-04', 'Accra', 'Kumasi', 'available', 80, 8),
(32, 'GK 202', 39, '10:00:00', '2017-12-12', 'Tamale', 'Accra', 'available', 150, 8);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `DOB` text NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`userID`, `firstName`, `lastName`, `DOB`, `gender`, `telephone`) VALUES
(19, 'last', 'met', '2017-04-13', 'M', 'me@you.us'),
(20, 'Mwesigwa', 'Nkuusi', '2017-04-26', 'M', 'me@you.us'),
(21, 'mustafa', 'Juma', '2000-05-05', 'M', ''),
(22, 'AbdulRazak', 'Adam', '2017-04-19', 'M', '0548196535'),
(23, 'Sheamus', 'Honest', '1992-01-01', 'M', '1234567895'),
(24, 'Test', 'sdasa', '2017-04-15', 'M', '+23564845156'),
(25, 'test', 'test', '2017-04-11', 'M', '+2356458996'),
(26, 'asddsa', 'adasdsa', '2017-04-12', 'M', '+23564188956'),
(27, 'sadsasda', 'sdasdadsa', '2017-04-12', 'M', '265231582564');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'Admin', 'admin@admin.com', 'Reporting an error in query'),
(3, 'asdd', 'asddsasad@asdads.com', 'asddasasdasddasasdadsasdasdasdasd'),
(4, 'ddasdsa', 'assdadsa@adasd.com', 'asddsaadsdasdsadsaasdads'),
(5, 'mboya', 'mboya@yahoo.com', 'just checking in...'),
(6, 'lucy', 'lucy@yahoo.com', 'just checking the contact page');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `error_id` int(6) NOT NULL,
  `error_time` datetime NOT NULL,
  `error_type` int(4) NOT NULL,
  `error_string` text NOT NULL,
  `error_file` varchar(225) NOT NULL,
  `error_line` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `errors`
--

INSERT INTO `errors` (`error_id`, `error_time`, `error_type`, `error_string`, `error_file`, `error_line`) VALUES
(5, '2017-04-11 23:12:12', 8, 'Undefined variable: yesydsadsa', 'C:\\xampp\\htdocs\\TickitApp\\setting\\Test.php', 18);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Time` datetime NOT NULL,
  `error_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `listing_id`, `user_id`, `date`, `Amount`) VALUES
(33, 31, 20, '2017-04-23 18:21:08', 80),
(34, 31, 20, '2017-04-23 18:21:26', 80),
(50, 31, 20, '2017-04-23 23:20:40', 80),
(51, 32, 20, '2017-04-23 23:20:48', 150),
(62, 31, 20, '2017-04-23 23:19:22', 80);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session` enum('on','off') NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `is_admin` enum('No','Yes') NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `email`, `password`, `session`, `status`, `is_admin`, `balance`) VALUES
(1, 'admin@admin.com', '$2y$10$6wmvVQQAcvtn9tG4yK4mhOIu1iMp33BbGrLfDuT74IBO5pmcdBfoW', 'on', 'active', 'Yes', 5000),
(8, 'me@you.us', '$2y$10$8DtKyxLeHYfYNWIYpMJPKOo5HnWybtkNJDQeITkTFIcVNqVUHGc6u', 'on', 'active', 'Yes', 9000),
(19, 'mwegddssigwajob@gmail.com', '$2y$10$SHLl2u4KH7eFC3sm3Ief1OlaSo/oPHVaq3qKEFEiEZU/FqOtu8pIu', 'on', 'active', 'No', 7000),
(20, 'mwesigwajob1@gmail.com', '$2y$10$o0gEqPkavQbYyuyHq1A/ZenfiuhQhS6A7wd49Pt3LBsLQc02GGWu.', 'on', 'active', 'No', 323341910),
(21, 'mustafa@gmail.com', '$2y$10$eLDF3ladJFEvbO5RsWnIGuSLYN4zWNhiCivHyS4EmqvfOH4RgF3vG', 'on', 'active', 'No', 6098),
(22, 'razakadam74@gmail.com', '$2y$10$BrbMeRvDFSDshB6fjbXP7u8m3DQqPVLDtjClBPKh7n41NUBrzSHcu', 'on', 'active', 'No', 90000),
(23, 'honest@gmail.com', '$2y$10$k6i4nV.zPxz7NiOnUDE.Eel/OwzDLEAjuODjTA2Xfd0BKe4MhvUIi', 'on', 'active', 'No', 0),
(24, 'dsadsa@asd.com', '$2y$10$PVkVZpe7nFEgsmJ6o.IvK.9vO/cEvr7K40TKXV2fMK9gQJiP09RZu', 'on', 'active', 'No', 0),
(25, 'test@test.com', '$2y$10$fYPXL7BymmNQYMBX3FaMT./JEC4HgsABtDtCLpuuZhRe0GLtHo2gi', 'on', 'active', 'No', 0),
(26, 'asddsa@dassda.com', '$2y$10$oIkWA5U6QaZHO5W0wSkLJ.S3n6Q8Z9qeGZyhDMnuk.aoKDg6cvKxe', 'on', 'active', 'No', 0),
(27, 'dassda@adsasd.com', '$2y$10$WqHA3nqCzxX2RodOLPy21eCay0uQ1O3sjzzI/QJWyw/oIX8A3hYxS', 'on', 'active', 'No', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`listing_id`,`user_id`),
  ADD KEY `listing_id` (`listing_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bus_listing`
--
ALTER TABLE `bus_listing`
  ADD PRIMARY KEY (`listing_id`),
  ADD KEY `managed_by` (`managed_by`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`error_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `listing_id` (`listing_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_listing`
--
ALTER TABLE `bus_listing`
  MODIFY `listing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `error_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`listing_id`) REFERENCES `bus_listing` (`listing_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bus_listing`
--
ALTER TABLE `bus_listing`
  ADD CONSTRAINT `bus_listing_ibfk_1` FOREIGN KEY (`managed_by`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`listing_id`) REFERENCES `bus_listing` (`listing_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
