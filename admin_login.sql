-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 08:01 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_login`
--

CREATE TABLE `adm_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_login`
--

INSERT INTO `adm_login` (`username`, `password`) VALUES
('admin1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `leaveid` int(2) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `dateofrequest` date NOT NULL,
  `leave_type` varchar(20) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `days` int(2) NOT NULL,
  `reason` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`leaveid`, `userName`, `department`, `dateofrequest`, `leave_type`, `leave_from`, `leave_to`, `days`, `reason`, `status`) VALUES
(3, 'cse1001', 'CSE', '2018-03-14', 'casual', '2018-04-14', '2018-04-15', 2, 'dfghjkl', 'approved'),
(4, 'ece1001', 'ECE', '2018-03-14', 'sick', '2018-03-15', '2018-03-16', 2, 'jht', 'rejected'),
(5, 'it1001', 'IT', '2018-03-16', 'casual', '2018-03-18', '2018-03-19', 2, 'dfghjkl', 'rejected'),
(6, 'it1001', 'IT', '2018-03-21', 'sick', '2018-03-23', '2018-03-25', 3, 'dfsa', 'rejected'),
(7, 'ece1001', 'ECE', '2018-03-21', 'earned', '2018-03-24', '2018-03-24', 1, 'dfsa', 'rejected'),
(8, 'eee1001', 'EEE', '2018-03-21', 'casual', '2018-03-22', '2018-03-22', 1, 'dfghjkl', 'approved'),
(9, 'cse1001', 'CSE', '2018-03-25', 'casual', '2018-03-27', '2018-03-28', 2, 'dfghjkl', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `designation` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `setcasualleave` int(2) NOT NULL DEFAULT '15',
  `setsickleave` int(2) NOT NULL DEFAULT '10',
  `setearnedleave` int(2) NOT NULL DEFAULT '30'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`name`, `age`, `gender`, `DOB`, `designation`, `department`, `address`, `emailid`, `contactno`, `Username`, `Password`, `setcasualleave`, `setsickleave`, `setearnedleave`) VALUES
('ram', 30, 'male', '1988-03-14', 'teaching', 'cse', 'abc', 'abc@gmail.com', '989898989', 'cse1001', 'cse', 11, 10, 30),
('susmitha', 25, 'female', '1992-04-13', 'Teaching staff', 'CSE', 'fkjgnjfxm2cfds', 'susmithaaddagada@gmail.com', '9666115578', 'cse1002', 'cse', 15, 10, 30),
('suma', 28, 'female', '1990-03-05', 'non-teaching', 'ece', 'asdsf', 'suma@gmail.com', '898989899', 'ece1001', 'ece', 15, 8, 29),
('prem', 31, 'male', '1988-03-19', 'non-teaching', 'it', 'vjfckvcx', 'prem@gmail.com', '651321245', 'it1001', 'it', 15, 10, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`leaveid`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `leaveid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
