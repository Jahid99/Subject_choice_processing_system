-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 06:47 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subject_choice_processing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$GhUSmNcq9yOj/mdKZHcNMuPgOpMQnvooh4xkmoE9euaki1.91sRCa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidates`
--

CREATE TABLE `tbl_candidates` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `roll` int(16) NOT NULL,
  `choice` varchar(256) NOT NULL,
  `position` int(16) NOT NULL,
  `unit` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidates`
--

INSERT INTO `tbl_candidates` (`id`, `name`, `email`, `roll`, `choice`, `position`, `unit`) VALUES
(1, 'Jahid', 'email1@gmail.com', 123345, 'a:5:{i:0;s:4:\"cste\";i:1;s:4:\"acce\";i:2;s:3:\"ice\";i:3;s:3:\"eee\";i:4;s:20:\"software_engineering\";}', 16, 'A'),
(2, 'Faisal', 'email2@gmail.com', 123347, 'a:5:{i:0;s:3:\"ice\";i:1;s:4:\"cste\";i:2;s:4:\"acce\";i:3;s:3:\"eee\";i:4;s:20:\"software_engineering\";}', 12, 'A'),
(3, 'rumman', 'email3@gmail.com', 123356, 'a:5:{i:0;s:3:\"eee\";i:1;s:4:\"cste\";i:2;s:4:\"acce\";i:3;s:3:\"ice\";i:4;s:20:\"software_engineering\";}', 1, 'A'),
(4, 'Kaiko', 'email4@gmail.com', 123367, 'a:5:{i:0;s:3:\"eee\";i:1;s:20:\"software_engineering\";i:2;s:4:\"acce\";i:3;s:3:\"ice\";i:4;s:4:\"cste\";}', 5, 'A'),
(5, 'Shohon', 'email5@gmail.com', 123332, 'a:5:{i:0;s:3:\"eee\";i:1;s:20:\"software_engineering\";i:2;s:4:\"cste\";i:3;s:3:\"ice\";i:4;s:4:\"acce\";}', 4, 'A'),
(6, 'Eshat', 'email6@gmail.com', 123380, 'a:5:{i:0;s:4:\"cste\";i:1;s:20:\"software_engineering\";i:2;s:3:\"eee\";i:3;s:3:\"ice\";i:4;s:4:\"acce\";}', 2, 'A'),
(7, 'Majhar', 'email7@gmail.com', 123511, 'a:5:{i:0;s:4:\"acce\";i:1;s:4:\"cste\";i:2;s:3:\"eee\";i:3;s:20:\"software_engineering\";i:4;s:3:\"ice\";}', 7, 'A'),
(8, 'Nizam', 'email8@gmail.com', 1233488, 'a:5:{i:0;s:3:\"ice\";i:1;s:4:\"cste\";i:2;s:3:\"eee\";i:3;s:20:\"software_engineering\";i:4;s:4:\"acce\";}', 9, 'A'),
(9, 'Muka', 'email9@gmail.com', 1233489, 'a:5:{i:0;s:3:\"eee\";i:1;s:4:\"cste\";i:2;s:4:\"acce\";i:3;s:20:\"software_engineering\";i:4;s:3:\"ice\";}', 13, 'A'),
(10, 'Kamrul', 'email10@gmail.com', 1233499, 'a:5:{i:0;s:4:\"cste\";i:1;s:3:\"eee\";i:2;s:4:\"acce\";i:3;s:20:\"software_engineering\";i:4;s:3:\"ice\";}', 20, 'A'),
(11, 'Mainul', 'email11@gmail.com', 1233423, 'a:5:{i:0;s:4:\"acce\";i:1;s:3:\"eee\";i:2;s:4:\"cste\";i:3;s:20:\"software_engineering\";i:4;s:3:\"ice\";}', 18, 'A'),
(12, 'Hasan', 'email12@gmail.com', 1253488, 'a:5:{i:0;s:20:\"software_engineering\";i:1;s:3:\"ice\";i:2;s:4:\"cste\";i:3;s:3:\"eee\";i:4;s:4:\"acce\";}', 15, 'A'),
(13, 'Rohol', 'email13@gmail.com', 1253489, 'a:5:{i:0;s:20:\"software_engineering\";i:1;s:4:\"cste\";i:2;s:3:\"ice\";i:3;s:3:\"eee\";i:4;s:4:\"acce\";}', 11, 'A'),
(14, 'Motiur', 'email14@gmail.com', 1253476, 'a:5:{i:0;s:3:\"eee\";i:1;s:4:\"cste\";i:2;s:3:\"ice\";i:3;s:20:\"software_engineering\";i:4;s:4:\"acce\";}', 19, 'A'),
(15, 'Hridoy', 'email15@gmail.com', 1254488, 'a:5:{i:0;s:3:\"ice\";i:1;s:4:\"cste\";i:2;s:3:\"eee\";i:3;s:20:\"software_engineering\";i:4;s:4:\"acce\";}', 14, 'A'),
(16, 'Ali', 'email16@gmail.com', 125188, 'a:5:{i:0;s:3:\"ice\";i:1;s:3:\"eee\";i:2;s:4:\"cste\";i:3;s:20:\"software_engineering\";i:4;s:4:\"acce\";}', 17, 'A'),
(17, 'sarker', 'email17@gmail.com', 1153488, 'a:5:{i:0;s:4:\"cste\";i:1;s:4:\"acce\";i:2;s:3:\"ice\";i:3;s:20:\"software_engineering\";i:4;s:3:\"eee\";}', 8, 'A'),
(18, 'Nur', 'email18@gmail.com', 125349, 'a:5:{i:0;s:4:\"acce\";i:1;s:4:\"cste\";i:2;s:3:\"ice\";i:3;s:20:\"software_engineering\";i:4;s:3:\"eee\";}', 3, 'A'),
(19, 'Ovhijit', 'email19@gmail.com', 1253445, 'a:5:{i:0;s:3:\"ice\";i:1;s:4:\"cste\";i:2;s:4:\"acce\";i:3;s:20:\"software_engineering\";i:4;s:3:\"eee\";}', 6, 'A'),
(20, 'Moshi', 'email20@gmail.com', 1253475, 'a:5:{i:0;s:3:\"eee\";i:1;s:4:\"cste\";i:2;s:4:\"acce\";i:3;s:20:\"software_engineering\";i:4;s:3:\"ice\";}', 10, 'A'),
(21, 'Junno', 'junayed@gmai.com', 21342434, 'a:5:{i:0;s:3:\"ice\";i:1;s:3:\"eee\";i:2;s:4:\"cste\";i:3;s:20:\"software_engineering\";i:4;s:4:\"acce\";}', 2222222, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `seats` int(16) NOT NULL,
  `unit` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`id`, `name`, `slug`, `seats`, `unit`) VALUES
(5, 'CSTE', 'cste', 3, 'A'),
(6, 'ICE', 'ice', 3, 'A'),
(7, 'ACCE', 'acce', 2, 'A'),
(8, 'EEE', 'eee', 3, 'A'),
(9, 'Software Engineering', 'software_engineering', 2, 'A'),
(12, 'Pharmacy', 'pharmacy', 4, 'B'),
(13, 'FIMS', 'fims', 2, 'B'),
(14, 'FTNS', 'ftns', 2, 'B'),
(15, 'Costal', 'costal', 3, 'B'),
(16, 'Microbiology', 'microbiology', 2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_units`
--

CREATE TABLE `tbl_units` (
  `id` int(16) NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_units`
--

INSERT INTO `tbl_units` (`id`, `name`, `slug`) VALUES
(2, 'A', 'A'),
(3, 'B', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_units`
--
ALTER TABLE `tbl_units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_units`
--
ALTER TABLE `tbl_units`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
