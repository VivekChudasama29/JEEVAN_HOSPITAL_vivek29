-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 12:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adid` int(5) NOT NULL,
  `adminnm` varchar(20) NOT NULL,
  `ademail` varchar(35) NOT NULL,
  `adpswd` varchar(10) NOT NULL,
  `admob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adid`, `adminnm`, `ademail`, `adpswd`, `admob`) VALUES
(101, 'Vivek Chudasama', 'vivek@gmail.com', 'vivek1180', 7808197292);

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `aid` int(5) NOT NULL,
  `sname` varchar(35) NOT NULL,
  `doctornm` varchar(30) NOT NULL,
  `departnm` varchar(25) NOT NULL,
  `fees` bigint(5) NOT NULL,
  `datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`aid`, `sname`, `doctornm`, `departnm`, `fees`, `datetime`) VALUES
(5, 'Raj Goyani', 'Dr. Naitik Shah', 'Pharmacy', 700, '2022-07-19 10:00:00.000000'),
(9, 'Gautam Shah', 'Dr. Naitik Shah', 'Pharmacy', 700, '2022-07-28 10:45:00.000000'),
(10, 'Gautam Shah', 'Dr. Ramesh Mehta', 'Orthopaediecs', 900, '2022-07-27 11:15:00.000000'),
(16, 'Riddhi Patel', 'Dr. Nayan Shah', 'Dermatology', 1200, '2022-07-27 15:00:00.000000'),
(23, 'Jay Rathod', 'Dr.Vijay Lathiya', 'Surgery', 1800, '2022-08-08 15:00:00.000000'),
(24, 'Riddhi Patel', 'Dr. Nayan Shah', 'Dermatology', 1200, '2022-08-10 10:05:00.000000'),
(25, 'Dinesh Kanet', 'Dr. Raj Goyani', 'Haematology', 1050, '2022-08-15 12:30:00.000000'),
(27, 'Sahil Khunt', 'Dr.Rohit Parmar', 'Neurology', 500, '2022-08-15 12:05:00.000000'),
(28, 'Dinesh Kanet', 'Dr.Bhavesh  Gathavi', 'Cardiology', 1500, '2022-08-10 14:15:00.000000'),
(31, 'Gautam Shah', 'Dr.Sangita Patel', 'Pathology', 750, '2022-08-17 15:05:00.000000'),
(45, 'Tarun', 'Dr. Nayan Shah', 'Dermatology', 1200, '2023-05-06 11:10:00.000000'),
(47, 'Tarun', 'Dr. Naitik Shah', 'Pharmacy', 700, '2023-05-04 10:45:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(10) NOT NULL,
  `doctornm` varchar(35) NOT NULL,
  `departnm` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `drimg` varchar(100) NOT NULL,
  `day` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `fees` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `doctornm`, `departnm`, `email`, `drimg`, `day`, `mobile`, `fees`) VALUES
(1, 'Dr. Naitik Shah', 'Pharmacy', 'drnait@gmail.com', 'dr3.jpg', 'Tuesday,Wednesday,Thursda', 9087689076, 700),
(13, 'Dr. Nayan Shah', 'Dermatology', 'drnayan@gmail.com', 'dr7.jfif', 'Wednesday,Saturday,', 8698912017, 1200),
(2, 'Dr. Ramesh Mehta', 'Orthopaediecs', 'drramesh@gmail.com', 'dr13.jfif', 'Wednesday,', 9087689076, 900),
(11, 'Dr. Sahil Kheni', 'Surgery', 'drsahil@gmail.com', 'dr4.jpg', 'Monday,Thursday,Friday,', 8910368299, 1300),
(15, 'Dr.Bhavesh  Gathavi', 'Cardiology', 'drbhavesh@gmail.com', 'dr2.jpg', 'Monday,Wednesday,Friday,', 6390173926, 1500),
(21, 'Dr.Mehul Dave', 'Cardiology', 'drmehul@gmail.com', 'dr15.jfif', 'Tuesday,Wednesday,', 7920517180, 1300),
(18, 'Dr.Riddhi munjali', 'Physiotherapy', 'drriddhi@gmail.com', 'dr12.jfif', 'Tuesday,Wednesday,Friday,', 7328782902, 1200),
(22, 'Dr.Rohit Parmar', 'Neurology', 'drrohit@gmail.com', 's11.jfif', 'Monday,Wednesday,', 6390173926, 500),
(16, 'Dr.Sangita Patel', 'Pathology', 'drsangita@gmail.com', 'dr14.jfif', 'Wednesday,Friday,', 7902377628, 750),
(20, 'Dr.Vijay Lathiya', 'Surgery', 'drvijay@gmail.com', 'dr6.jfif', 'Monday,Tuesday,Thursday,', 8906432111, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `sid` int(10) NOT NULL,
  `sno` varchar(10) NOT NULL,
  `sname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(16) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`sid`, `sno`, `sname`, `email`, `password`, `gender`, `blood`, `image`, `dob`, `mobile`, `city`) VALUES
(18, 's015', 'Dharmesh Dave', 'dhar@gmail.com', 'dharmesh25', 'Male', 'AB+', 'banner5.jpg', '2016-06-19', 7803157954, 'Baroda'),
(15, 's012', 'Dinesh Kanet', 'dinesh@gmail.com', 'dinesh109', 'Male', 'A+', 'pa7.jfif', '2009-06-27', 7815027748, 'Rajkot'),
(13, 's011', 'Gautam Shah', 'gautam@gmail.com', 'gautam123', 'Male', 'B+', 'cus7.jfif', '2007-03-01', 7815027748, 'Gandhinagar'),
(16, 's013', 'Harsh Raval', 'harsh@gmail.com', 'harsh2354', 'Male', 'B-', 'cus8.jfif', '2008-02-12', 8901678199, 'Baroda'),
(17, 's014', 'Jay Rathod', 'jay@gmail.com', 'jay231890', 'Male', 'B+', 'cus3.jfif', '2018-08-13', 7915834950, 'Rajkot'),
(9, 's009', 'Raj Goyani', 'raj@gmail.com', 'raj@61714', 'Male', 'A+', 'cus2.jfif', '2012-06-14', 7801568033, 'Ahmedabad'),
(5, 's004', 'Riddhi Patel', 'riddhi@gmail.com', 'riddhi21', 'Female', 'B+', 'cus6.jfif', '2003-03-21', 8291084730, 'Gandhinagar'),
(6, 's005', 'Rohit Mehta', 'rohit@gmail.com', 'rohit4789', 'Male', 'AB+', 'cus5.jfif', '2008-07-18', 6390173926, 'Amreli'),
(3, 's003', 'Sahil Khunt', 'sahil@gmail.com', 'sahil1310', 'Male', 'A-', 'cus4.jfif', '2002-01-31', 8392470159, 'Baroda'),
(27, 's017', 'Tarun', 'tarunvala@gmail.com', 'tarun@vala', 'Male', 'O+', 'user.jfif', '2003-06-18', 9083382910, 'Surat'),


-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(5) NOT NULL,
  `aid` int(5) NOT NULL,
  `fees` bigint(5) NOT NULL,
  `banknm` varchar(35) NOT NULL,
  `ifsccode` varchar(11) NOT NULL,
  `accountno` bigint(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `aid`, `fees`, `banknm`, `ifsccode`, `accountno`, `date`, `status`) VALUES
(3, 7, 850, '', '', 0, '0000-00-00', 'pending'),
(4, 22, 1500, 'Union Bank Of India', 'UNI25610248', 89219023933, '2022-08-11', 'Completed'),
(9, 20, 1500, '', '', 0, '0000-00-00', 'pending'),
(14, 44, 200, 'Bank Of Baroda', 'SBIN0239230', 89293980300, '2022-11-15', 'Completed'),

-- --------------------------------------------------------

--
-- Table structure for table `rating_data`
--

CREATE TABLE `rating_data` (
  `rid` int(5) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `image` varchar(35) NOT NULL,
  `rating` int(10) NOT NULL,
  `discription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_data`
--

INSERT INTO `rating_data` (`rid`, `sname`, `image`, `rating`, `discription`) VALUES
(2, 'Tushar Shah', 'cus1.jfif', 3, 'very easy take appointment\r\n'),
(3, 'Riddhi Patel', 'cus6.jfif', 2, 'it is website is very useful  and save time');


-- --------------------------------------------------------

--


--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ademail`),
  ADD UNIQUE KEY `adid` (`adid`);

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `ForeignKey` (`sname`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctornm`),
  ADD UNIQUE KEY `did` (`did`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`sname`),
  ADD UNIQUE KEY `sno` (`sno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `aidfk` (`aid`);

--
-- Indexes for table `rating_data`
--
ALTER TABLE `rating_data`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `FK` (`sname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rating_data`
--
ALTER TABLE `rating_data`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoint`
--
ALTER TABLE `appoint`
  ADD CONSTRAINT `ForeignKey` FOREIGN KEY (`sname`) REFERENCES `patients` (`sname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `aidfk` FOREIGN KEY (`aid`) REFERENCES `appoint` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating_data`
--
ALTER TABLE `rating_data`
  ADD CONSTRAINT `FK` FOREIGN KEY (`sname`) REFERENCES `patients` (`sname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
