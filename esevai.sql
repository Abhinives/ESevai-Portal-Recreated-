-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 08:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esevai`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhaar`
--

CREATE TABLE `aadhaar` (
  `name` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `mother` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone` text NOT NULL,
  `number` text NOT NULL,
  `result` text NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aadhaar`
--

INSERT INTO `aadhaar` (`name`, `dob`, `gender`, `father`, `mother`, `address`, `district`, `pincode`, `phone`, `number`, `result`, `num`) VALUES
('asdf', '2021-12-08', 'Male', 'asdf', 'sdf', 'sadf', 'sdf', 624001, '9345884174', '132759273633', 'yes', 770),
('Abhinivesh', '2021-09-01', 'Male', 'dindigul', 'asdf', 'hkkhk', 'Dindigul', 624001, '9345884174', '358666983987', 'yes', 853),
('Saran nithish', '2002-07-29', 'Male', 'Siva guru', 'Renuka', 'Raja street, Tiripur', 'Tiripur', 641001, '9345884174', '131325807012', 'yes', 943),
('Shriram R', '2003-03-18', 'Male', 'Abhinivesh', 'Dany', 'Coimbatore', 'Coimbatore', 624001, '9345884174', '491983744203', 'yes', 972);

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `name` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `district` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `caste` text NOT NULL,
  `religion` text NOT NULL,
  `phone` text NOT NULL,
  `result` text NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`name`, `dob`, `gender`, `fname`, `mname`, `address`, `district`, `pincode`, `caste`, `religion`, `phone`, `result`, `num`) VALUES
('Abhinivesh', '2021-07-08', 'Male', 'Senthil Murugan S', 'Vijayalakshmi S', 'asdf', 'dindigul', 624001, 'BC', 'Hindu', '9345884174', 'yes', 342);

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `name` varchar(20) NOT NULL,
  `taluk` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` text NOT NULL,
  `inco` int(10) NOT NULL,
  `phone` text NOT NULL,
  `result` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ration`
--

CREATE TABLE `ration` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` text NOT NULL,
  `member1` varchar(20) NOT NULL,
  `age1` text NOT NULL,
  `gender1` varchar(20) NOT NULL,
  `member2` varchar(20) NOT NULL,
  `age2` text NOT NULL,
  `gender2` varchar(20) NOT NULL,
  `member3` varchar(20) NOT NULL,
  `age3` text NOT NULL,
  `gender3` varchar(20) NOT NULL,
  `member4` varchar(20) NOT NULL,
  `age4` text NOT NULL,
  `gender4` varchar(20) NOT NULL,
  `member5` varchar(20) NOT NULL,
  `age5` text NOT NULL,
  `gender5` varchar(20) NOT NULL,
  `member6` varchar(20) NOT NULL,
  `age6` text NOT NULL,
  `gender6` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `num` int(11) NOT NULL,
  `number` text NOT NULL,
  `result` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ration`
--

INSERT INTO `ration` (`name`, `gender`, `dob`, `member1`, `age1`, `gender1`, `member2`, `age2`, `gender2`, `member3`, `age3`, `gender3`, `member4`, `age4`, `gender4`, `member5`, `age5`, `gender5`, `member6`, `age6`, `gender6`, `phone`, `address`, `num`, `number`, `result`) VALUES
('Abhinivesh', 'Male', '2021-06-17', 'asdf', '22', 'Male', 'Ramesh', '23', 'Male', '-', '-', 'None', '-', '-', 'None', '-', '-', 'None', '-', '-', 'None', '8220946808', 'municpal colony dindigul', 110, '6604734729', 'yes'),
('Abhinivesh', 'Male', '2021-06-17', 'asdf', '22', 'Male', 'Ramesh', '23', 'Male', '-', '-', 'None', '-', '-', 'None', '-', '-', 'None', '-', '-', 'None', '8220946808', 'municpal colony dindigul', 889, '7964237313', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `repass` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `pass`, `repass`, `name`, `address`, `phone`) VALUES
('Abhinivesh', 'abhi123', 'abhi123', 'abhi', 'municipal colony dindigul', '9345884174'),
('Abhinivesh', 'abhi123', 'abhi123', 'asdfs', 'asdf', '9345588414');

-- --------------------------------------------------------

--
-- Table structure for table `signupa`
--

CREATE TABLE `signupa` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `repass` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupa`
--

INSERT INTO `signupa` (`username`, `pass`, `repass`, `name`, `address`, `phone`) VALUES
('Abhinivesh S', 'abhi123', 'abhi123', 'abhi', '54, munucipal colony, dindigul', '9345884174'),
('senjeev', 'abhi123', 'abhi123', 'senjeev', 'municipal colony dindigul', '9345884174');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhaar`
--
ALTER TABLE `aadhaar`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
