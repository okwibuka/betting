-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 07:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registering`
--

-- --------------------------------------------------------

--
-- Table structure for table `cregister`
--

CREATE TABLE `cregister` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` varchar(16) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cregister`
--

INSERT INTO `cregister` (`fname`, `lname`, `sex`, `email`, `number`, `password`, `id`, `nationality`) VALUES
('kabera', 'honollin', 'on', 'kwibuka@gmail.com', '3425', 'abana', '142', 'Rwanda'),
('dfg', 'hghj', 'on', 'wibuka@gmail.com', '522', 'abana', '215', 'Rwanda'),
('dfg', 'afs', 'on', 'ibuka@gmail.com', '5326', 'abana', '526', 'Rwanda'),
('kwibuka', 'olivier', 'on', 'okwibuka@gmail.com', '0781691699', 'solidality', '1199980063459036', 'Rwanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cregister`
--
ALTER TABLE `cregister`
  ADD UNIQUE KEY `number` (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
