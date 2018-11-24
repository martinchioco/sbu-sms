-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 01:34 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sad`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_info`
--

use heroku_a71bbafdab8fcb3;

CREATE TABLE `acc_info` (
  `account_id` int(5) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `acctype` varchar(20) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc_info`
--

INSERT INTO `acc_info` (`account_id`, `user`, `pass`, `acctype`, `contact`) VALUES
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', '1234'),
(14, 'qwe', '81dc9bdb52d04dc20036dbd8313ed055', 'student', 'qwe'),
(15, 'kirby', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '12341234'),
(16, 'kirky', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1234'),
(17, 'kiki', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '1234'),
(22, '&lt;script&gt;alert(1)&lt;/script&gt;', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '<script>alert(1)</script>');

-- --------------------------------------------------------

--
-- Table structure for table `projectproposal`
--

CREATE TABLE `projectproposal` (
  `proposalnum` int(5) NOT NULL,
  `groupcode` varchar(10) NOT NULL,
  `submitdate` date NOT NULL,
  `lfname` varchar(20) DEFAULT NULL,
  `llname` varchar(20) DEFAULT NULL,
  `m1fname` varchar(20) DEFAULT NULL,
  `m1lname` varchar(20) DEFAULT NULL,
  `m2fname` varchar(20) DEFAULT NULL,
  `m2lname` varchar(20) DEFAULT NULL,
  `m3fname` varchar(20) DEFAULT NULL,
  `m3lname` varchar(20) DEFAULT NULL,
  `m4fname` varchar(20) DEFAULT NULL,
  `m4lname` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `ownername` varchar(100) DEFAULT NULL,
  `businessaddress` varchar(100) DEFAULT NULL,
  `yearsexistence` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `productservice` varchar(100) DEFAULT NULL,
  `transactionnum` varchar(100) DEFAULT NULL,
  `branchloc` varchar(100) DEFAULT NULL,
  `scope` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectproposal`
--

INSERT INTO `projectproposal` (`proposalnum`, `groupcode`, `submitdate`, `lfname`, `llname`, `m1fname`, `m1lname`, `m2fname`, `m2lname`, `m3fname`, `m3lname`, `m4fname`, `m4lname`, `title`, `ownername`, `businessaddress`, `yearsexistence`, `contact`, `productservice`, `transactionnum`, `branchloc`, `scope`) VALUES
(1, '1', '2018-10-12', 'Gabriel', 'Muralla', 'Martin', 'Chioco', 'Kirby', 'Templonuevo', 'Karl', 'Rodriguez', 'Darren', 'Dulay', 'ProposedSadDatabaseManagement', 'SBU', 'Manila', '201123', '5', 'School', '20', 'Manila', 'qweqweqweqewqeqe'),
(2, 'student', '2018-11-21', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Title` varchar(89) DEFAULT NULL,
  `yr` year(4) DEFAULT NULL,
  `grpnum` varchar(10) DEFAULT NULL,
  `projno` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Title`, `yr`, `grpnum`, `projno`) VALUES
('Marketing', 2018, '1A', 1),
('Sad database management', 2018, '6A-2018', 2),
('qweazxcz', 2021, '1', 3),
('qwe', 2018, '1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `projinfo`
--

CREATE TABLE `projinfo` (
  `projno` int(89) NOT NULL,
  `abstract` varchar(8000) DEFAULT NULL,
  `objectives` varchar(8000) DEFAULT NULL,
  `scope` varchar(8000) DEFAULT NULL,
  `purpose` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projinfo`
--

INSERT INTO `projinfo` (`projno`, `abstract`, `objectives`, `scope`, `purpose`) VALUES
(1, 'Abs', 'Obj', 'Sco', 'Pur'),
(2, 'qbas', 'asdqwe', 'qwe', 'qwtqwe'),
(3, 'qwe', '123', '123', '123'),
(4, 'qwe', 'qwe', 'qwe', 'qwe'),
(5, 'qwe', 'qwe', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `proposeaccept`
--

CREATE TABLE `proposeaccept` (
  `groupcode` varchar(10) NOT NULL,
  `submitdate` date NOT NULL,
  `lfname` varchar(20) DEFAULT NULL,
  `llname` varchar(20) DEFAULT NULL,
  `m1fname` varchar(20) DEFAULT NULL,
  `m1lname` varchar(20) DEFAULT NULL,
  `m2fname` varchar(20) DEFAULT NULL,
  `m2lname` varchar(20) DEFAULT NULL,
  `m3fname` varchar(20) DEFAULT NULL,
  `m3lname` varchar(20) DEFAULT NULL,
  `m4fname` varchar(20) DEFAULT NULL,
  `m4lname` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `ownername` varchar(100) DEFAULT NULL,
  `businessaddress` varchar(100) DEFAULT NULL,
  `yearsexistence` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `productservice` varchar(100) DEFAULT NULL,
  `transactionnum` varchar(100) DEFAULT NULL,
  `branchloc` varchar(100) DEFAULT NULL,
  `scope` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_info`
--
ALTER TABLE `acc_info`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `projectproposal`
--
ALTER TABLE `projectproposal`
  ADD PRIMARY KEY (`proposalnum`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projno`);

--
-- Indexes for table `projinfo`
--
ALTER TABLE `projinfo`
  ADD PRIMARY KEY (`projno`);

--
-- Indexes for table `proposeaccept`
--
ALTER TABLE `proposeaccept`
  ADD PRIMARY KEY (`groupcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_info`
--
ALTER TABLE `acc_info`
  MODIFY `account_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projectproposal`
--
ALTER TABLE `projectproposal`
  MODIFY `proposalnum` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projinfo`
--
ALTER TABLE `projinfo`
  MODIFY `projno` int(89) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
