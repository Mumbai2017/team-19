-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 12:33 PM
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
-- Database: `sanisa_team19`
--

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
(2, 2, 10, '28-07-2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sakhi_inventory`
--
ALTER TABLE `sakhi_inventory`
  ADD KEY `sin_fk` (`s_id`),
  ADD KEY `pin_fk` (`p_id`);

--
-- Constraints for dumped tables
--

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
