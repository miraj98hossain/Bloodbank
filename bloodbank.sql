-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 03:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `DonorID` int(11) NOT NULL,
  `Register_ID` int(11) NOT NULL,
  `Weight` decimal(10,0) NOT NULL,
  `BMI` decimal(10,0) NOT NULL,
  `Accidents` enum('None','Minor','Major','') NOT NULL,
  `Diseases` enum('None','Minor','Major','') NOT NULL,
  `Operations` enum('None','Minor','Major','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DonorID`, `Register_ID`, `Weight`, `BMI`, `Accidents`, `Diseases`, `Operations`) VALUES
(2, 21, '60', '20', 'None', 'None', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Register_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `PHONE_NUMBER` bigint(10) NOT NULL,
  `GENDER` enum('male','female','Other') NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `Bloodgroup` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `CITY` varchar(10) NOT NULL,
  `DISTRICT` varchar(10) NOT NULL,
  `EMAIL_ADDRESS` varchar(25) NOT NULL,
  `CODE` bigint(10) NOT NULL,
  `PASSWORD` varchar(16) NOT NULL,
  `DIVISION` enum('Barishal','Chattogram','Dhaka','Khulna','Rajshahi','Rangpur','Mymensingh','Sylhet') NOT NULL,
  `AGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Register_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`, `GENDER`, `DATE_OF_BIRTH`, `Bloodgroup`, `CITY`, `DISTRICT`, `EMAIL_ADDRESS`, `CODE`, `PASSWORD`, `DIVISION`, `AGE`) VALUES
(14, 'Miraj ', 'hossain', 1984356643, 'male', '2001-09-24', 'B+', 'Savar', 'Dhaka', 'miraj@gmail.com', 12345, '12', 'Dhaka', 20),
(15, 'Miraj ', 'khan', 1984356643, 'male', '2021-12-17', 'AB+', 'tongi', 'gazipur', 'khan@gmail.com', 1213, '12', 'Dhaka', 0),
(17, 'Miraj', 'Hossain', 1213, 'male', '2021-12-29', 'B+', 'savar', 'dhaka', 'mi@gmail.com', 455, '12', 'Rajshahi', 0),
(18, 'Umme', 'Hafsa', 123456789, 'female', '2021-12-07', 'O-', 'Badda', 'Dhaka', 'umme@gmail.com', 12345, '12', 'Dhaka', 23),
(19, 'Rakib', 'Hossain', 956456822, 'male', '1998-06-25', 'AB+', 'savar', 'mugdha', 'rakib@gmail.com', 4545, '12', 'Rajshahi', 23),
(21, 'rita', 'rahman', 123456789, 'female', '1997-02-06', 'B+', 'Savar', 'Dhaka', 'rita@gmail.com', 4545, '12', 'Dhaka', 24);

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `Reqid` int(11) NOT NULL,
  `Register_ID` int(11) NOT NULL,
  `City_b` varchar(15) NOT NULL,
  `District_b` varchar(15) NOT NULL,
  `Division_b` varchar(15) NOT NULL,
  `Blood_Group` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL,
  `Quantity` enum('1','2','3','4','5') NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`Reqid`, `Register_ID`, `City_b`, `District_b`, `Division_b`, `Blood_Group`, `Quantity`, `Phone`) VALUES
(5, 14, 'tongi', 'dhaka', 'dhaka', 'A+', '1', 1984356643),
(12, 15, 'savar', 'dhaka', 'dhaka', 'B+', '1', 1984356643),
(21, 14, 'gazipur', 'dhaka', 'dhaka', 'O-', '2', 12345),
(22, 14, 'savar', 'dhaka', 'dsdsa', 'AB-', '1', 45),
(24, 14, 'ng', 'ng', 'ng', 'B-', '2', 55),
(25, 14, 'hfaf', 'afasf', 'afasf', 'B+', '5', 13214),
(26, 14, 'sdfsa', 'asf', 'asfas', 'B+', '2', 123),
(27, 17, 'hfaf', 'afasf', 'afasf', 'B-', '3', 2147483647),
(28, 17, 'afsafaf', 'afasfasf', 'afsasf', 'O-', '1', 2147483647),
(29, 17, 'fasafs', 'fasasfasf', 'asfasf', 'B-', '2', 4545),
(30, 18, 'Muladi', 'jossore', 'jossore', 'O-', '3', 123456789),
(31, 19, 'rangpur', 'muladi', 'rangpur', 'A-', '5', 12345665);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`DonorID`),
  ADD KEY `test1` (`Register_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Register_ID`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`Reqid`),
  ADD KEY `test` (`Register_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `DonorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Register_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `Reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `test1` FOREIGN KEY (`Register_ID`) REFERENCES `register` (`Register_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD CONSTRAINT `test` FOREIGN KEY (`Register_ID`) REFERENCES `register` (`Register_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
