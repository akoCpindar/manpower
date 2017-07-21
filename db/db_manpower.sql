-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 01:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_manpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adm_id` int(11) NOT NULL,
  `adm_username` varchar(100) NOT NULL,
  `adm_password` varchar(80) NOT NULL,
  `adm_fname` varchar(120) NOT NULL,
  `adm_lname` varchar(120) NOT NULL,
  `adm_time_added` time NOT NULL,
  `adm_date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant`
--

CREATE TABLE `tbl_applicant` (
  `app_id` int(11) NOT NULL,
  `app_fname` varchar(100) NOT NULL,
  `app_lname` varchar(100) NOT NULL,
  `app_minitial` varchar(2) NOT NULL,
  `app_age` varchar(100) NOT NULL,
  `app_gender` varchar(100) NOT NULL,
  `app_address` varchar(100) NOT NULL,
  `app_mobile` varchar(100) NOT NULL,
  `app_birthdate` varchar(100) NOT NULL,
  `app_email` varchar(100) NOT NULL,
  `app_status` varchar(100) NOT NULL,
  `app_time_added` time NOT NULL,
  `app_date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_applicant`
--

INSERT INTO `tbl_applicant` (`app_id`, `app_fname`, `app_lname`, `app_minitial`, `app_age`, `app_gender`, `app_address`, `app_mobile`, `app_birthdate`, `app_email`, `app_status`, `app_time_added`, `app_date_added`) VALUES
(1, 'Jose', 'Clawrence', 'G', '31', 'Male', 'Bacolod City', '0908173577', '1995-05-16', 'pindarjimenez@gmail.com', 'Active', '00:00:00', '0000-00-00'),
(2, 'qweq', 'qwewq', 'E', '21', 'Female', 'weqe', '09089756216', '1995-11-12', 'asd@gmail.com', 'Active', '20:12:58', '2017-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign`
--

CREATE TABLE `tbl_assign` (
  `ass_id` int(11) NOT NULL,
  `app_id` int(11) DEFAULT NULL,
  `ass_service` varchar(180) DEFAULT NULL,
  `ass_company` varchar(180) DEFAULT NULL,
  `ass_reason` varchar(180) DEFAULT NULL,
  `ass_status` varchar(180) DEFAULT NULL,
  `ass_time` time DEFAULT NULL,
  `ass_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assign`
--

INSERT INTO `tbl_assign` (`ass_id`, `app_id`, `ass_service`, `ass_company`, `ass_reason`, `ass_status`, `ass_time`, `ass_date`) VALUES
(1, 1, 'Electrical', 'Doctors', 'transfer', 'Active', '00:59:51', '2017-02-08'),
(2, 2, 'Pluming', 'Doctors', 'Assigne', 'Active', '01:34:06', '2017-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `com_description` tinytext NOT NULL,
  `com_address` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`com_id`, `com_name`, `com_description`, `com_address`) VALUES
(1, 'Doctors', 'hospital\r\n', 'Bacolod City');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `ser_id` int(11) NOT NULL,
  `ser_title` varchar(180) NOT NULL,
  `ser_status` varchar(100) NOT NULL,
  `ser_time` time DEFAULT NULL,
  `ser_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`ser_id`, `ser_title`, `ser_status`, `ser_time`, `ser_date`) VALUES
(1, 'Janitor', 'Active', '19:20:03', '2017-02-07'),
(2, 'Electrical Technician', 'Active', '19:20:06', '2017-02-07'),
(3, 'Pluming', 'Active', '19:27:17', '2017-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`ser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_assign`
--
ALTER TABLE `tbl_assign`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
