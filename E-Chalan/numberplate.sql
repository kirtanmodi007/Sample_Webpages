-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 06:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `numberplate`
--

CREATE TABLE `numberplate` (
  `ID` int(11) NOT NULL,
  `number` char(50) NOT NULL,
  `time` datetime NOT NULL,
  `Name` text NOT NULL,
  `Fine` int(11) NOT NULL,
  `email` text NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberplate`
--

INSERT INTO `numberplate` (`ID`, `number`, `time`, `Name`, `Fine`, `email`, `img`) VALUES
(2, 'MJ4606', '2018-03-16 13:11:37', 'ccc patel', 0, 'vatsal2727@gmail.com', ''),
(3, 'AV8866', '2018-03-16 13:13:57', 'bbb patel', 0, 'vatsal2727@gmail.com', ''),
(5, 'BD9085', '2018-03-16 13:19:14', 'Abc patel', 0, 'vatsal2727@gmail.com', ''),
(6, 'AN0857', '2018-03-19 15:40:38', 'aaa patel', 0, 'vatsal2727@gmail.com', ''),
(11, 'CS9977', '2018-04-30 22:17:30', 'Akhil Vavadia', 1, 'vatsal2727@gmail.com', 'C:\\xampp\\htdocs\\example\\numberplate\\main\\iin19.jpg'),
(12, 'HJ6336', '2018-04-10 15:02:08', 'Nishi Shah', 0, 'nishi@gmail.com', ''),
(13, 'RV2366', '2018-04-10 15:02:49', 'Harsh Soni', 0, 'harsh@gmail.com', ''),
(16, 'KE279', '2018-04-10 15:03:12', 'Akshat Doshi', 0, 'akshat@gmail.com', ''),
(17, 'RZ0778', '2018-04-19 01:20:42', 'Vatsal Patel', 1, 'vatsal2727@gmail.com', 'C:\\xampp\\htdocs\\example\\numberplate\\main\\iin16.jpg'),
(18, 'RS9827', '2018-04-11 16:09:02', 'Kirtan Modi', 1, 'kirtanmodi007@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `numberplate`
--
ALTER TABLE `numberplate`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `numberplate`
--
ALTER TABLE `numberplate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
