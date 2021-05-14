-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2021 at 03:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
('admin001', 'bch', 'bca3', 'admin@gmail.com', 'Admin@001');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `cand_id` varchar(255) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `cand_id`, `party_name`, `name`, `DOB`, `region`) VALUES
(19, 'BKS20', 'Barathiya Kshema', 'Abhishek S', '1973-03-02', 'karnataka'),
(21, 'HP20', 'Hindusthan Party', 'Ramya reddy', '1982-07-25', 'Andhra Pradesh'),
(22, 'JJP20', 'JanJeevan Party', 'Amar Sagar', '1974-09-06', 'Gujarat'),
(20, 'JP20', 'Janatha Party', 'Rahul Singh', '1975-05-14', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `voter_id`, `first_name`, `last_name`, `DOB`, `mobile_no`, `gender`, `email`, `region`, `password`) VALUES
(21, 'aji1995', 'Ajith', 'K', '1995-04-01', 9644232456, 'male', 'ajith@gmail.com', 'delhi', 'Ajith@123'),
(30, 'aks2000', 'akshata', 'r', '2000-02-27', 7676853421, 'female', 'akshata@gmail.com', 'andhra pradesh', 'Akshata@123'),
(41, 'ana1968', 'anand', 'h', '1968-02-02', 9984536214, 'male', 'anand@gmail.com', 'karnataka', 'Anand@123'),
(22, 'ant1991', 'Anthony', 'r', '1991-11-03', 6695422312, 'male', 'anthony@gmail.com', 'Gujarat', 'Anthony@123'),
(25, 'arc1990', 'arachana', 'naidu', '1990-06-13', 7765413214, 'female', 'arachana@gmail.com', 'Delhi', 'Archana@123'),
(32, 'bhu1999', 'bhumika', 'c', '1999-05-03', 9756234465, 'female', 'bhumika@gmail.com', 'delhi', 'Bhumika@123'),
(15, 'bin2001', 'Bindu', 'Shree', '2001-03-17', 9988465125, 'female', 'bindu@gmail.com', 'karnataka', 'Bindu@123'),
(38, 'cha1979', 'chandru', 's', '1979-06-26', 9802046575, 'male', 'chandru@gmail.com', 'delhi', 'Chandru@123'),
(16, 'cha1999', 'Chandana', 'Reddy', '1999-08-24', 9436465132, 'female', 'chandana@gmail.com', 'Andhra Pradesh', 'Chandana@123'),
(28, 'dee1985', 'Deeksha', 'r', '1985-08-06', 9984561232, 'female', 'deeksha@gmail.com', 'Delhi', 'Deeksha@123'),
(20, 'dee1997', 'Deepthi', 'p', '1997-12-25', 7654832454, 'female', 'deepthi@gmail.com', 'delhi', 'Deepthi@123'),
(39, 'din1996', 'dinesh', 'k', '1996-02-06', 9976452132, 'male', 'dinesh@gmail.com', 'madhya pradesh', 'Dinesh@123'),
(31, 'esh2000', 'esha', 's', '2000-03-15', 9960321564, 'female', 'esha@gmail.com', 'andhra prdaesh', 'Esha@123'),
(19, 'har1999', 'Haritha', 'n', '1999-06-05', 7654244556, 'female', 'haritha@gmail.com', 'kerala', 'Haritha@123'),
(17, 'har2000', 'Harshitha', 'Gowda', '2000-05-05', 7668532455, 'female', 'harshitha@gmail.com', 'karnataka', 'Harshitha@123'),
(13, 'him1986', 'hima', 'j', '1986-01-24', 9835645164, 'female', 'hima@gmail.com', 'karnataka', 'Hima@123'),
(29, 'jai1994', 'Jai', 'Kumar', '1994-03-26', 7765231465, 'male', 'jai@gmail.com', 'tamil nadu', 'Jaikumar@123'),
(18, 'jay1999', 'Jayanth', 'a', '1999-02-14', 9487653155, 'male', 'jayanth@gmail.com', 'karnataka', 'Jayanth@123'),
(24, 'kir1999', 'kiran', 'a', '1999-02-05', 9932654245, 'male', 'kiran@gmail.com', 'karnataka', 'Kiran@123'),
(8, 'man1995', 'Manav', 'Singh', '1995-06-04', 7668452314, 'male', 'manavsingh@gmail.com', 'Gujarat', 'Manav@123'),
(14, 'nar1997', 'Narayan', 's', '1997-02-06', 9647532165, 'male', 'narayan@gmail.com', 'Andhra Pradesh', 'Narayan@123'),
(26, 'sad1984', 'sandhya', 'm', '1984-04-18', 9984231565, 'female', 'sandhya@gmail.com', 'Gujarat', 'Sandhya@123'),
(23, 'sha1989', 'shabaz', 'z', '1989-05-19', 7765842646, 'male', 'shabaz@gmail.com', 'Andhra Pradesh', 'Shabaz@123'),
(33, 'shr1999', 'shreyas', 'k p', '1999-02-26', 7676546123, 'male', 'shreyas@gmail.com', 'delhi', 'Shreyas@123'),
(35, 'sri1994', 'sri', 'ram', '1994-03-06', 7765846512, 'male', 'sriram@gmail.com', 'karnataka', 'Sriram@123'),
(36, 'sud1987', 'sudhakar', 'b', '1987-06-03', 9984561237, 'male', 'sudhakar@123', 'delhi', 'Sudhakar@123'),
(27, 'sup1989', 'supriya', 'a', '1989-05-02', 9985612314, 'female', 'supriya@gmail.com', 'karnataka', 'Supriya@123'),
(34, 'til1992', 'tilak', 'k', '1992-03-17', 9985643212, 'male', 'tilak@gmail.com', 'karnataka', 'Tilak@123'),
(40, 'xav1998', 'xavier', 's', '1998-03-02', 9986423156, 'others', 'xavier@gmail.com', 'delhi', 'Xavier@123'),
(37, 'yat1986', 'yathish', 'b', '1986-02-06', 7676521346, 'male', 'yathish@gmail.com', 'tamil nadu', 'Yathish@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`cand_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`voter_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
