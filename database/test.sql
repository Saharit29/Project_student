-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 05:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `agencytrain`
--

CREATE TABLE `agencytrain` (
  `agency_id` int(10) NOT NULL,
  `agency_name` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `housenumber` varchar(10) NOT NULL,
  `moo` varchar(30) NOT NULL,
  `road` varchar(30) NOT NULL,
  `subdistrict` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `zipcode` varchar(5) NOT NULL,
  `day` date NOT NULL,
  `activity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agencytrain`
--

INSERT INTO `agencytrain` (`agency_id`, `agency_name`, `region`, `telephone`, `fax`, `housenumber`, `moo`, `road`, `subdistrict`, `district`, `province`, `zipcode`, `day`, `activity`) VALUES
(3, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2022-04-22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `board_id` int(10) NOT NULL,
  `board_name` varchar(50) NOT NULL,
  `board_lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`board_id`, `board_name`, `board_lname`) VALUES
(1, '1', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(10) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `party` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `party`, `student_id`) VALUES
(1, 'test', 'tsetset', 117);

-- --------------------------------------------------------

--
-- Table structure for table `datastudy`
--

CREATE TABLE `datastudy` (
  `datastudy_id` int(10) NOT NULL,
  `educationlevel` varchar(50) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `gap` varchar(50) NOT NULL,
  `currentgap` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `workexp` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE `father` (
  `father_id` int(10) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_lname` varchar(50) NOT NULL,
  `fjob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `father`
--

INSERT INTO `father` (`father_id`, `father_name`, `father_lname`, `fjob`) VALUES
(10, 'na', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `mother`
--

CREATE TABLE `mother` (
  `mother_id` int(10) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_lname` varchar(50) NOT NULL,
  `mjob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mother`
--

INSERT INTO `mother` (`mother_id`, `mother_name`, `mother_lname`, `mjob`) VALUES
(1, 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `idcard` varchar(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `housenumber_stu` varchar(10) NOT NULL,
  `moo_stu` varchar(30) NOT NULL,
  `road_stu` varchar(30) NOT NULL,
  `subdistrict_stu` varchar(30) NOT NULL,
  `district_stu` varchar(30) NOT NULL,
  `province_stu` varchar(30) NOT NULL,
  `zipcode_stu` varchar(5) NOT NULL,
  `father_id` int(10) NOT NULL,
  `mother_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `agencytrain` int(10) NOT NULL,
  `board_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `idcard`, `name`, `lastname`, `birthday`, `phone_number`, `religion`, `housenumber_stu`, `moo_stu`, `road_stu`, `subdistrict_stu`, `district_stu`, `province_stu`, `zipcode_stu`, `father_id`, `mother_id`, `user_id`, `agencytrain`, `board_id`) VALUES
(117, '1', '1', '1', '2022-04-06', '1', '1', '1', '1', '1', '1', '1', '1', '1', 10, 1, 16, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `status`) VALUES
(14, 'student1', 'student1', 'student'),
(15, 'teacher1', 'teacher1', 'teacher'),
(16, 'student11', 'student11', 'student'),
(17, '1', '1', 'student'),
(18, '2', '2', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencytrain`
--
ALTER TABLE `agencytrain`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `datastudy`
--
ALTER TABLE `datastudy`
  ADD PRIMARY KEY (`datastudy_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `father`
--
ALTER TABLE `father`
  ADD PRIMARY KEY (`father_id`);

--
-- Indexes for table `mother`
--
ALTER TABLE `mother`
  ADD PRIMARY KEY (`mother_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `father_id` (`father_id`),
  ADD KEY `mother_id` (`mother_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `datastudy_id` (`agencytrain`),
  ADD KEY `board_id` (`board_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencytrain`
--
ALTER TABLE `agencytrain`
  MODIFY `agency_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `board_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datastudy`
--
ALTER TABLE `datastudy`
  MODIFY `datastudy_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `father`
--
ALTER TABLE `father`
  MODIFY `father_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mother`
--
ALTER TABLE `mother`
  MODIFY `mother_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datastudy`
--
ALTER TABLE `datastudy`
  ADD CONSTRAINT `datastudy_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`father_id`) REFERENCES `father` (`father_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`mother_id`) REFERENCES `mother` (`mother_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`agencytrain`) REFERENCES `agencytrain` (`agency_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_ibfk_5` FOREIGN KEY (`board_id`) REFERENCES `board` (`board_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
