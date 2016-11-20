-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 03:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rxconsultation`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE IF NOT EXISTS `doctor_details` (
  `DocId` varchar(7) NOT NULL,
  `DocPwd` varchar(8) NOT NULL,
  `DocName` text NOT NULL,
  `DocSpec` text NOT NULL,
  `DocQual` text NOT NULL,
  `DocPhno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`DocId`, `DocPwd`, `DocName`, `DocSpec`, `DocQual`, `DocPhno`) VALUES
('RXC1001', 'RXC1001', 'ROJA RAMAN', 'CARDIAC', 'MBBS', '9990001116'),
('RXC1002', 'RXC1002', 'POOJA RAMAN', 'ENT', 'MD/MBBS', '9911223300');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE IF NOT EXISTS `patient_details` (
  `Patientid` varchar(6) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `P_age` varchar(3) NOT NULL,
  `P_gender` varchar(11) NOT NULL,
  `P_kgs` varchar(4) NOT NULL,
  `P_contact` varchar(10) NOT NULL,
  `P_email` varchar(11) DEFAULT NULL,
  `P_address` varchar(11) DEFAULT NULL,
  `P_blood` varchar(11) DEFAULT NULL,
  `P_allergy` varchar(11) DEFAULT NULL,
  `P_date` varchar(11) NOT NULL,
  `P_regtime` varchar(11) NOT NULL,
  `P_note` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`Patientid`, `pname`, `P_age`, `P_gender`, `P_kgs`, `P_contact`, `P_email`, `P_address`, `P_blood`, `P_allergy`, `P_date`, `P_regtime`, `P_note`) VALUES
('RXP100', 'rrrrr', '40', 'male', '75', '7416433180', 'thrthtfhg', 'rgfgf', 'A+', 'no', '', '', ''),
('RXP101', 'sthgh', '7', 'female', '30', '1342524624', 'fgsjyjsrtj', 'aethtehgehb', 'A+', 'no', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
 ADD PRIMARY KEY (`DocId`), ADD UNIQUE KEY `DocPwd` (`DocPwd`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
 ADD PRIMARY KEY (`Patientid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
