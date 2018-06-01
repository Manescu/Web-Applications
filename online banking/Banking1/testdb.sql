-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 10:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accno` varchar(25) NOT NULL,
  `customerid` int(10) NOT NULL,
  `holder` varchar(25) NOT NULL,
  `balance` bigint(15) NOT NULL,
  `acctype` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `date_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accno`, `customerid`, `holder`, `balance`, `acctype`, `email`, `mobile`, `date_birth`) VALUES
('3827392817456235', 1, 'Luca Ticusi', 2028, 'student', 'luca_t@gmail.com', '0723186451', '1996-12-26'),
('7584293457387296', 2, 'Adrian V', 4194, 'student', 'adr_v@gmail.com', '0783249571', '1995-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `name` varchar(255) NOT NULL,
  `card_nr` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `cvv` int(3) NOT NULL,
  `suma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`name`, `card_nr`, `month`, `year`, `cvv`, `suma`) VALUES
('Luca', '14132534524', '7', '2019', 543, 0),
('manescu', '515515', '12', '2005', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(25) NOT NULL,
  `trans_date` datetime NOT NULL,
  `acc_no` int(25) NOT NULL,
  `amount` bigint(15) NOT NULL,
  `receiver` int(25) NOT NULL,
  `sender` int(25) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `trans_date`, `acc_no`, `amount`, `receiver`, `sender`, `description`) VALUES
(11, '2018-05-23 21:03:42', 2147483647, 10, 10, 0, 'money received'),
(12, '2018-05-23 21:03:42', 2147483647, 10, 0, 10, 'money sent'),
(13, '2018-05-23 21:13:40', 2147483647, 23, 0, 23, 'money sent'),
(14, '2018-05-23 21:20:10', 2147483647, 17, 17, 0, 'money received'),
(15, '2018-05-23 21:20:10', 2147483647, 17, 0, 17, 'money sent'),
(16, '2018-05-23 21:51:10', 2147483647, 5, 5, 0, 'money received'),
(17, '2018-05-23 21:51:10', 2147483647, 5, 0, 5, 'money sent'),
(18, '2018-05-23 22:14:04', 2147483647, 33, 33, 0, 'money received'),
(19, '2018-05-23 22:14:04', 2147483647, 33, 0, 33, 'money sent'),
(20, '2018-05-23 22:15:56', 2147483647, 3, 3, 0, 'money received'),
(21, '2018-05-23 22:15:56', 2147483647, 3, 0, 3, 'money sent'),
(22, '2018-05-23 22:24:04', 2147483647, 6, 6, 0, 'money received'),
(23, '2018-05-23 22:24:04', 2147483647, 6, 0, 6, 'money sent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `CNP` int(13) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `nr` varchar(255) NOT NULL,
  `apartment` int(4) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `email`, `password`, `CNP`, `country`, `sector`, `city`, `street`, `nr`, `apartment`, `phone`) VALUES
(1, 'Luca', 'Ticusi', 'retyugj@gmail.com', '1234', 12345678, 'Romania', 'Dolj', 'Craiova', 'Asda', 'G7', 5, 743532574),
(2, 'Adrian', 'Voicu', 'adr_v@gmail.com', '987', 1967526784, 'Romania', 'Mehedinti', 'Motru', 'Nijfhr', '34', 7, 783928437);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
