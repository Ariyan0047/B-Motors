-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 08:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `Engine_Model` varchar(255) DEFAULT NULL,
  `Engine_Type` varchar(255) DEFAULT NULL,
  `Piston_Displacement` varchar(255) DEFAULT NULL,
  `Fuel_System` varchar(255) DEFAULT NULL,
  `Transmission_Type` varchar(255) DEFAULT NULL,
  `Front_Suspension` varchar(255) DEFAULT NULL,
  `Rear_Suspension` varchar(255) DEFAULT NULL,
  `Fuel_Tank_Capacity` varchar(255) DEFAULT NULL,
  `Seating_Capacity` varchar(255) DEFAULT NULL,
  `Overall_length` varchar(255) DEFAULT NULL,
  `Overall_Width` varchar(255) DEFAULT NULL,
  `Overall_Height` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`ID`, `NAME`, `Engine_Model`, `Engine_Type`, `Piston_Displacement`, `Fuel_System`, `Transmission_Type`, `Front_Suspension`, `Rear_Suspension`, `Fuel_Tank_Capacity`, `Seating_Capacity`, `Overall_length`, `Overall_Width`, `Overall_Height`) VALUES
(47, 'TOYOTA FORTUNER', '2TR-FE', '4 Cylinder In-Line', '2694 CC', 'Fuel Injection', '6-Speed Auto', 'Double wishbone (With Torsion Bar)', '	4-link (With Torsion Bar)', '80', '07 Persons (Including Driver)', '4795 mm', '1885 mm', '1835 mm'),
(48, 'TOYOTA LC200', '1VD-FTV', '8-cylinders,V line', '4461 CC', 'Common-Rail Type', '6-Speed Auto', 'Double Wishbone', '4 Link Coil Rigid Suspension with Lateral Rod', '93+45 (Sub tank)', '08 Persons (Including Driver)', '5325 mm', '1980 mm', '1945(With Roof Rail) mm'),
(49, 'Toyota Camry', 'A25A-FXS', '4 Cylinder In-Line', '2487 CC', 'Electronic Fuel Injection (EFI)', 'CVT', 'McPherson Strut (with Torsion Bar)', 'Double Wishbone(with Torsion Bar)', '50', '05 Persons (Including Driver)', '4835 mm', '1840 mm', '1455 mm'),
(50, 'TOYOTA HILUX', '2GD-FTV (Turbo Diesel with Intercooler)', '4 Cylinder In-Line', '2393 CC', 'Direct Fuel Injection with Common Rail', '6-Speed Manual', 'Double Wishbone', 'Leaf Spring Rigid', '80', '5 Person', '5330 mm', '1800 mm', '1815 mm'),
(51, 'YARIS 1.3L', '1NR-FE', '4 Cylinder In-Line', '1329 CC', 'EFI (with SFI)', 'CVT', 'McPherson Strut', 'Torsion Beam', '42', '05 Persons (Including Driver)', '4425 mm', '1730 mm', '1495 mm'),
(52, 'YARIS 1.5L', '2NR-FE', '4 Cylinder In-Line', '1496 CC', 'Fuel Injection', 'CVT', 'McPherson Strut', 'Torsion Beam', '42', '05 Persons (Including Driver)', '4425 mm', '1730 mm', '1495 mm'),
(53, 'Toyota Supra', '	2JZ-GTE', '4 Cylinder In-Line', '2997 CC', 'Gasoline', '6MT', 'Double wishbone', 'Double Wishbone', '50', '4 Persons', '4615 mm', '1651 mm', '1290 mm'),
(54, 'Mitsubishi Lancer GT', '1NR-FE', 'Regular Unleaded I-4', '2.0 L/122', 'Sequential MPI', 'CVT w/OD', 'Strut', 'MultiLink', '15.5', '4 Persons', '4230 mm', '	1620 mm', '1390 mm'),
(55, 'BMW 2 Series', '2.0d Diesel', 'Intercooled Turbo Premium Unleaded I-4', '\r\n2.0 L/122', '\r\nGasoline Direct Injection', '\r\nAutomatic w/OD', '\r\nStrut', '\r\nMulti-Link', '\r\n13.7', '5 Persons(Including Driver)', '4432 mm', '1774 mm', '1418 mm');

-- --------------------------------------------------------

--
-- Table structure for table `comment_1`
--

CREATE TABLE `comment_1` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_2`
--

CREATE TABLE `comment_2` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_3`
--

CREATE TABLE `comment_3` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_4`
--

CREATE TABLE `comment_4` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_5`
--

CREATE TABLE `comment_5` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_6`
--

CREATE TABLE `comment_6` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_7`
--

CREATE TABLE `comment_7` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_8`
--

CREATE TABLE `comment_8` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_9`
--

CREATE TABLE `comment_9` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_9`
--

INSERT INTO `comment_9` (`cid`, `uid`, `date`, `msg`) VALUES
(1, 'Anonymous', '2020-04-08 00:09:56', 'Wow !!! Awesome Car !!');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`ID`, `EMAIL`) VALUES
(32, 'ariyan15-9047@diu.edu.bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment_1`
--
ALTER TABLE `comment_1`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_2`
--
ALTER TABLE `comment_2`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_3`
--
ALTER TABLE `comment_3`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_4`
--
ALTER TABLE `comment_4`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_5`
--
ALTER TABLE `comment_5`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_6`
--
ALTER TABLE `comment_6`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_7`
--
ALTER TABLE `comment_7`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_8`
--
ALTER TABLE `comment_8`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comment_9`
--
ALTER TABLE `comment_9`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `comment_1`
--
ALTER TABLE `comment_1`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comment_2`
--
ALTER TABLE `comment_2`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_3`
--
ALTER TABLE `comment_3`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_4`
--
ALTER TABLE `comment_4`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_5`
--
ALTER TABLE `comment_5`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_6`
--
ALTER TABLE `comment_6`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_7`
--
ALTER TABLE `comment_7`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_8`
--
ALTER TABLE `comment_8`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_9`
--
ALTER TABLE `comment_9`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
