-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 03:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `Email`, `password`, `mobile_no`, `address`) VALUES
(100, 'Rajesh singh', 'rsingh.rajesh01@gmail.com', 'rajesh@123', '9843244242', 'Janakpur,Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `BID` int(11) NOT NULL,
  `Father_name` varchar(25) NOT NULL,
  `f_citizenship_number` varchar(20) NOT NULL,
  `MOther_name` varchar(30) NOT NULL,
  `M_citizenship_number` varchar(20) NOT NULL,
  `child_name` varchar(25) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `permanent_address` varchar(30) NOT NULL,
  `Birth_palace` varchar(25) NOT NULL,
  `grand_father_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`BID`, `Father_name`, `f_citizenship_number`, `MOther_name`, `M_citizenship_number`, `child_name`, `Date_of_birth`, `Gender`, `permanent_address`, `Birth_palace`, `grand_father_name`) VALUES
(1, 'Rakesh shah', '173096-1214', 'Sabita shah', '173096-1213', 'Shristi shah', '2021-09-02', 'female', 'mithila municipality -01 ', 'mithila municipality -01 ', 'Bechan shah'),
(2, 'Rakesh shah', '173096-1214', 'Sabita shah', '173096-1213', 'Ritik sah', '2021-09-06', 'female', 'mithila municipality -01 ', 'mithila municipality -01 ', 'Bechan shah');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `D_ID` int(11) NOT NULL,
  `Deceased_full_name` varchar(20) NOT NULL,
  `Id_deceased` int(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_death` varchar(30) NOT NULL,
  `permanent_address` varchar(35) NOT NULL,
  `Father_name` varchar(20) NOT NULL,
  `wife_name/husband_name` varchar(25) NOT NULL,
  `Informantant_name` varchar(20) NOT NULL,
  `informant-iD` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`D_ID`, `Deceased_full_name`, `Id_deceased`, `date_of_birth`, `place_of_death`, `permanent_address`, `Father_name`, `wife_name/husband_name`, `Informantant_name`, `informant-iD`) VALUES
(2, 'bechan mahato ', 1513, '2021-08-05', 'kanaki kathmandu', 'mithila municipality', '214205538_1520112671', 'susmita devi', 'susmita devi', 173096),
(3, 'ram sah', 1515, '2019-05-06', 'heatauda', 'mithila municipality', '214205538_1520112671', 'susmita devi', 'susmita devi', 173096);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `Id` bigint(10) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`Id`, `full_name`, `Email`, `password`, `mobile_no`, `address`) VALUES
(100, 'Rajesh singh', 'rsingh.rajesh01@gmail.com', 'rajesh@123', 9818335585, 'kalanki,kathmandu'),
(101, 'nikesh shah ', 'nikesh123@gmail.com', 'nikesh@123', 9812122398, 'dhalkewar'),
(104, 'suresh singh', 'sureshsingh@gmail.com', 'suresh@123', 9812122398, 'hetauda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
