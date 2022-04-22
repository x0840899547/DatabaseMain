-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 11:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_css326`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `idVaccine_Certificated` int(11) NOT NULL,
  `Vaccine_select` varchar(100) NOT NULL,
  `Dose` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `Vaccination_Site` varchar(100) NOT NULL,
  `IdPatient_Information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`idVaccine_Certificated`, `Vaccine_select`, `Dose`, `Date`, `Vaccination_Site`, `IdPatient_Information`) VALUES
(28, 'Pfizer', '1', '2021-10-16', 'Future Park Rangsit', 9),
(29, 'Astrazeneca', '1', '2021-10-16', 'Future Park Rangsit', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Patient_Information`
--

CREATE TABLE `Patient_Information` (
  `idPatient_Information` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Birth_Date` date NOT NULL,
  `National_ID` bigint(11) NOT NULL,
  `Passport_ID` varchar(45) NOT NULL,
  `Contact_Number` bigint(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient_Information`
--

INSERT INTO `Patient_Information` (`idPatient_Information`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Birth_Date`, `National_ID`, `Passport_ID`, `Contact_Number`, `Email`, `Address`) VALUES
(9, 'pra', 'ss', 'dag', 'male', '2021-11-01', 1129901635257, '', 855554528, 'prara@gmail.com', '98/84 supalai tiwanon'),
(10, 'Petchpram', 'a', 'Sangbumrung', 'Male', '2021-10-16', 1129901635257, '', 855554528, 'xretax2542@gmail.com', '98/84 supalai tiwanon'),
(11, 'First', 'sad', 'name', 'hum', '2000-12-28', 1129901635258, '', 855554527, 'ha', 'kuysas');

-- --------------------------------------------------------

--
-- Table structure for table `Post_Vaccination_Effect`
--

CREATE TABLE `Post_Vaccination_Effect` (
  `idPost_Vaccination_Effect` int(11) NOT NULL,
  `Effect_30minutes` varchar(100) NOT NULL,
  `Effect_1day` varchar(100) NOT NULL,
  `IdPatient_Information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Staff_Information`
--

CREATE TABLE `Staff_Information` (
  `idStaff_Information` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Middle_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Birth_Date` date NOT NULL,
  `National_ID` int(11) NOT NULL,
  `Passport_ID` varchar(45) NOT NULL,
  `Contact_Number` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Vaccine_Information`
--

CREATE TABLE `Vaccine_Information` (
  `IdVaccine_Information` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Manufacturer` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Lot` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`idVaccine_Certificated`),
  ADD KEY `fk_idPatient` (`IdPatient_Information`);

--
-- Indexes for table `Patient_Information`
--
ALTER TABLE `Patient_Information`
  ADD PRIMARY KEY (`idPatient_Information`);

--
-- Indexes for table `Post_Vaccination_Effect`
--
ALTER TABLE `Post_Vaccination_Effect`
  ADD PRIMARY KEY (`idPost_Vaccination_Effect`),
  ADD KEY `post_vaccination_id` (`IdPatient_Information`);

--
-- Indexes for table `Staff_Information`
--
ALTER TABLE `Staff_Information`
  ADD PRIMARY KEY (`idStaff_Information`);

--
-- Indexes for table `Vaccine_Information`
--
ALTER TABLE `Vaccine_Information`
  ADD PRIMARY KEY (`IdVaccine_Information`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `idVaccine_Certificated` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Patient_Information`
--
ALTER TABLE `Patient_Information`
  MODIFY `idPatient_Information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Booking`
--
ALTER TABLE `Booking`
  ADD CONSTRAINT `fk_idPatient` FOREIGN KEY (`IdPatient_Information`) REFERENCES `Patient_Information` (`idPatient_Information`);

--
-- Constraints for table `Post_Vaccination_Effect`
--
ALTER TABLE `Post_Vaccination_Effect`
  ADD CONSTRAINT `post_vaccination_id` FOREIGN KEY (`IdPatient_Information`) REFERENCES `Patient_Information` (`idPatient_Information`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
