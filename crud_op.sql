-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 07:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_op`
--

-- --------------------------------------------------------

--
-- Table structure for table `elc301`
--

CREATE TABLE `elc301` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elc301`
--

INSERT INTO `elc301` (`sid`, `unit_1`, `unit_2`, `sem`) VALUES
('2021DSEL010', 13, 17, 65),
('EX0278', 19, 18, 73),
('SID9874', 15, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `elc302`
--

CREATE TABLE `elc302` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elc303`
--

CREATE TABLE `elc303` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elc304`
--

CREATE TABLE `elc304` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elc305`
--

CREATE TABLE `elc305` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ell301`
--

CREATE TABLE `ell301` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ell302`
--

CREATE TABLE `ell302` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ell303`
--

CREATE TABLE `ell303` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ell304`
--

CREATE TABLE `ell304` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ell304`
--

INSERT INTO `ell304` (`sid`, `unit_1`, `unit_2`, `sem`) VALUES
('SID9874', 96, 75, 4);

-- --------------------------------------------------------

--
-- Table structure for table `elm301`
--

CREATE TABLE `elm301` (
  `sid` varchar(11) NOT NULL,
  `unit_1` int(3) DEFAULT NULL,
  `unit_2` int(3) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sr` int(11) NOT NULL,
  `fname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `sid` varchar(11) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sr`, `fname`, `lname`, `sid`, `dob`) VALUES
(1, 'Rupava', 'Baruah', 'EX0278', '1999-09-15'),
(2, 'Omkar', 'Patil', 'SID9874', '2001-01-28'),
(3, 'Mehtab', 'Ansari', 'SD8963', '2002-01-22'),
(4, 'Tejas', 'Mane', '2021DSEL010', '2001-08-15'),
(5, 'Kongkana', 'Saikia', 'SID160920', '2000-05-19'),
(6, 'Jahanavi', 'Appala', 'SID719895', '2003-09-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elc301`
--
ALTER TABLE `elc301`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `elc302`
--
ALTER TABLE `elc302`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `elc303`
--
ALTER TABLE `elc303`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `elc304`
--
ALTER TABLE `elc304`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `elc305`
--
ALTER TABLE `elc305`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ell301`
--
ALTER TABLE `ell301`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ell302`
--
ALTER TABLE `ell302`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ell303`
--
ALTER TABLE `ell303`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `ell304`
--
ALTER TABLE `ell304`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `elm301`
--
ALTER TABLE `elm301`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sr`),
  ADD UNIQUE KEY `sr` (`sr`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `sr_2` (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `elc301`
--
ALTER TABLE `elc301`
  ADD CONSTRAINT `elc_301_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elc302`
--
ALTER TABLE `elc302`
  ADD CONSTRAINT `elc_302_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elc303`
--
ALTER TABLE `elc303`
  ADD CONSTRAINT `elc_303_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elc304`
--
ALTER TABLE `elc304`
  ADD CONSTRAINT `elc_304_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elc305`
--
ALTER TABLE `elc305`
  ADD CONSTRAINT `elc_305_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ell301`
--
ALTER TABLE `ell301`
  ADD CONSTRAINT `ell_301_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ell302`
--
ALTER TABLE `ell302`
  ADD CONSTRAINT `ell_302_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ell303`
--
ALTER TABLE `ell303`
  ADD CONSTRAINT `ell_303_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ell304`
--
ALTER TABLE `ell304`
  ADD CONSTRAINT `ell_304_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elm301`
--
ALTER TABLE `elm301`
  ADD CONSTRAINT `elm_301_fr` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
