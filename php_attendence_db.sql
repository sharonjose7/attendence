-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:59 PM
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
-- Database: `orisys_attendence_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(11) NOT NULL,
  `s_batch` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `a_no` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sadd_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `s_batch`, `subject`, `a_no`, `f_name`, `mark`, `total`, `sname`, `sadd_no`) VALUES
(1, '', 'SS', 1, 'Amitha', 55, 60, 'Susu', 1001),
(2, '', '', 1, 'Amitha', 55, 80, 'Susu', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `saddno` int(11) NOT NULL,
  `adate` date NOT NULL,
  `sname` varchar(50) NOT NULL,
  `s_batch` varchar(10) NOT NULL,
  `h1` varchar(10) NOT NULL,
  `h2` varchar(10) NOT NULL,
  `h3` varchar(10) NOT NULL,
  `h4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `saddno`, `adate`, `sname`, `s_batch`, `h1`, `h2`, `h3`, `h4`) VALUES
(0, 0, '0000-00-00', 'Susu', '1001', 'p', 'p', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bno_students` int(11) NOT NULL,
  `bin_charge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`bid`, `bname`, `bno_students`, `bin_charge`) VALUES
(1, 'JSD2', 29, 'Amitha');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `faddress` varchar(100) NOT NULL,
  `fdesignation` varchar(50) NOT NULL,
  `fjoin_date` date NOT NULL,
  `fqualification` varchar(10) NOT NULL,
  `fgender` text NOT NULL,
  `fmobile` bigint(20) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `fbatch` varchar(10) NOT NULL,
  `fdob` date NOT NULL,
  `fblood` text NOT NULL,
  `fpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `faddress`, `fdesignation`, `fjoin_date`, `fqualification`, `fgender`, `fmobile`, `femail`, `fbatch`, `fdob`, `fblood`, `fpassword`) VALUES
(1, 'Amitha', 'Kollam', 'Trainer', '2020-01-01', 'mca', 'female', 1234567890, 'amitha@gmail.com', 'JSD2', '2019-12-31', 'A+', 'amitha');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_leave`
--

CREATE TABLE `faculty_leave` (
  `id` int(11) NOT NULL,
  `fid` varchar(50) NOT NULL,
  `fname` int(50) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_leave`
--

INSERT INTO `faculty_leave` (`id`, `fid`, `fname`, `leave_from`, `leave_to`, `leave_type`, `reason`, `status`) VALUES
(0, '101', 0, '2020-01-18', '2020-01-18', 'formal', 'i am sick', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `saddno` varchar(10) NOT NULL,
  `srollno` int(11) NOT NULL,
  `squalification` text NOT NULL,
  `sgender` varchar(5) NOT NULL,
  `scourse` varchar(10) NOT NULL,
  `sbatch` varchar(10) NOT NULL,
  `sdob` date NOT NULL,
  `sadd_date` date NOT NULL,
  `sblood` varchar(5) NOT NULL,
  `smobile` bigint(20) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `spassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `saddress`, `saddno`, `srollno`, `squalification`, `sgender`, `scourse`, `sbatch`, `sdob`, `sadd_date`, `sblood`, `smobile`, `semail`, `spassword`) VALUES
(1, 'Susu', 'idukki', '1001', 14, 'Bca', 'male', '', 'JSD2', '2019-12-31', '2020-01-09', 'O+', 9946131202, 'susu@gmail.com', 'susu');

-- --------------------------------------------------------

--
-- Table structure for table `student_leave`
--

CREATE TABLE `student_leave` (
  `id` int(11) NOT NULL,
  `sbatch` varchar(50) NOT NULL,
  `srollno` int(11) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_leave`
--

INSERT INTO `student_leave` (`id`, `sbatch`, `srollno`, `leave_from`, `leave_to`, `leave_type`, `reason`, `status`) VALUES
(1, 'JSD2', 14, '2020-01-18', '2020-01-18', 'sick', 'not feel good', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student_leave`
--
ALTER TABLE `student_leave`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_leave`
--
ALTER TABLE `student_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
