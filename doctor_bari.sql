-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 06:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_bari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`) VALUES
(2, 'arif', 'c20ad4d76fe97759aa27a0c99bff6710');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_for_patient`
--

CREATE TABLE `medicine_for_patient` (
  `id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `per_day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_for_patient`
--

INSERT INTO `medicine_for_patient` (`id`, `m_name`, `per_day`) VALUES
(4, 'medicine 1', '1+0+1'),
(5, 'm2', '1+1+0');

-- --------------------------------------------------------

--
-- Table structure for table `name_of_symtom`
--

CREATE TABLE `name_of_symtom` (
  `id` int(11) NOT NULL,
  `symtomName` varchar(255) NOT NULL,
  `symtomCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name_of_symtom`
--

INSERT INTO `name_of_symtom` (`id`, `symtomName`, `symtomCode`) VALUES
(1, 'abdominal cramping or pain', 1),
(2, 'pain or tightness in the chest', 2),
(3, 'diarrhea', 1),
(4, 'difficulty swallowing', 1),
(5, 'fear or anxiety', 1),
(6, 'flushing of the face', 1),
(7, 'fasv fja vfjf a', 2),
(8, 'qarfq', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient_diease`
--

CREATE TABLE `patient_diease` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_diease`
--

INSERT INTO `patient_diease` (`id`, `name`) VALUES
(19, 'abdominal cramping or pain'),
(20, 'difficulty swallowing'),
(21, 'fear or anxiety');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_care`
--

CREATE TABLE `types_of_care` (
  `id` int(11) NOT NULL,
  `care_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types_of_care`
--

INSERT INTO `types_of_care` (`id`, `care_name`) VALUES
(1, '\r\n\r\nAllergist '),
(2, 'Anesthesiologist'),
(3, 'Cardiologist '),
(4, 'Dermatologist ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_for_patient`
--
ALTER TABLE `medicine_for_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_of_symtom`
--
ALTER TABLE `name_of_symtom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_diease`
--
ALTER TABLE `patient_diease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_care`
--
ALTER TABLE `types_of_care`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicine_for_patient`
--
ALTER TABLE `medicine_for_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `name_of_symtom`
--
ALTER TABLE `name_of_symtom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `patient_diease`
--
ALTER TABLE `patient_diease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `types_of_care`
--
ALTER TABLE `types_of_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
