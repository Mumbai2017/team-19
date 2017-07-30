-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 03:22 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `c_latitude` double NOT NULL,
  `c_longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `phone_no`, `c_name`, `c_address`, `landmark`, `c_latitude`, `c_longitude`) VALUES
(1, 1234567891, 'ABC', 'mulund', 'mulund', 19.1565, 72.9638),
(2, 1234567891, 'ABCD', 'mulund', 'mulund', 0, 0),
(3, 182739, 'njakd', 'jasjkal', '', 17, 90),
(5, 0, '', '', '', 0, 0),
(6, 0, '', '', '', 0, 0),
(7, 0, '', '', '', 0, 0),
(8, 0, '', '', '', 0, 0),
(9, 0, '', '', '', 0, 0),
(10, 0, '', '', '', 0, 0),
(11, 0, '', '', '', 0, 0),
(12, 0, '', '', '', 0, 0),
(13, 0, '', '', '', 0, 0),
(14, 0, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `o_total` int(10) NOT NULL,
  `del_date` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `c_id`, `p_id`, `s_id`, `quantity`, `o_total`, `del_date`, `status`) VALUES
(1, 1, 1, 1, 1, 100, '31-07-2017', 1),
(2, 2, 2, 2, 1, 150, '01-08-2017', 2),
(8, 5, 2, 0, 6, 0, '', 0),
(11, 1, 1, 0, 7, 0, '', 0),
(12, 1, 3, 0, 5, 0, '', 0),
(14, 1, 2, 0, 6, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_cost` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_cost`) VALUES
(1, 'Breakfast', 100),
(2, 'Methi Masala', 150),
(3, 'Dahi Bajri Methi', 100),
(4, 'Nachni', 150),
(5, 'Jeera', 100),
(6, 'Peppery Oats', 150),
(7, 'Khichdi', 100),
(8, 'Panjabi Masala', 150),
(9, 'Low Calorie', 100);

-- --------------------------------------------------------

--
-- Table structure for table `sakhi`
--

CREATE TABLE `sakhi` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_username` varchar(50) NOT NULL,
  `s_password` varchar(50) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `logitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sakhi`
--

INSERT INTO `sakhi` (`s_id`, `s_name`, `s_username`, `s_password`, `s_address`, `latitude`, `logitude`) VALUES
(1, 'sakabc', 'sakabc', '123', 'thane', 0, 0),
(2, 'sakabc', 'sakabc', '123', 'thane', 0, 0),
(3, 'sakhi', 'monkey', 'monkey', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sakhi_inventory`
--

CREATE TABLE `sakhi_inventory` (
  `s_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `s_quantity` int(10) NOT NULL,
  `last_update` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sakhi_inventory`
--

INSERT INTO `sakhi_inventory` (`s_id`, `p_id`, `s_quantity`, `last_update`) VALUES
(1, 1, 3, '29-07-2017'),
(2, 2, 10, '28-07-2017'),
(3, 3, 5, ''),
(1, 4, 6, ''),
(2, 8, 6, ''),
(1, 9, 8, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `cid_fk` (`c_id`),
  ADD KEY `pid_fk` (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sakhi`
--
ALTER TABLE `sakhi`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sakhi_inventory`
--
ALTER TABLE `sakhi_inventory`
  ADD KEY `sin_fk` (`s_id`),
  ADD KEY `pin_fk` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sakhi`
--
ALTER TABLE `sakhi`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `cid_fk` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `pid_fk` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `sakhi_inventory`
--
ALTER TABLE `sakhi_inventory`
  ADD CONSTRAINT `pin_fk` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `sin_fk` FOREIGN KEY (`s_id`) REFERENCES `sakhi` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
