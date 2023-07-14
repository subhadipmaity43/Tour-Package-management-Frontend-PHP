-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 12:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `status`) VALUES
(3, 'subha@maity', '', '4464', '1'),
(4, 'kuntal@gmail.com', '', 'aaaa', '1'),
(7, 'Admin', 'admin@gmail.com', 'Admin', '1'),
(8, 'kuntal@gmail.com', 'subhadipma', '123456789', '1'),
(9, 'Subha_maity', 'subhadipmaity43@gmail.com', 'Subha@123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `bookingdate` date NOT NULL,
  `totalperson` int(10) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `firstname`, `lastname`, `bookingdate`, `totalperson`, `phone`, `email`, `status`) VALUES
(29, 'Subha', 'Maity', '2021-03-30', 8, '2147483647', ' subha@gmail.com', '1'),
(31, 'kuntal ', 'hazra', '2021-04-30', 1, '7978267039', ' kuntal@gmail.com', '0'),
(38, 'Subhadip', 'Maity', '2021-04-15', 4, '8348651566', ' subhadipmaity43@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `reply` varchar(500) DEFAULT NULL,
  `status` enum('0','1') CHARACTER SET latin1 NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `reply`, `status`) VALUES
(1, 'Subha', 'Subha@gmail.com', 'ffgfhjghjgkjkjkjgjhcbvchvnmhgfhgjbvjh', NULL, '1'),
(2, 'Subhadip Maity', 'subhadipmaity43@gmail.com', 'dfdgfgfgfgfhfyryrfffrfgfjghvtfftyfyfhughjyyghgyh', NULL, '1'),
(7, 'Subhadip Maity', 'subhadipmaity43@gmail.com', '1 messege unread from Subha', NULL, '1'),
(8, 'Subhadip Maity', 'subhadipmaity43@gmail.com', 'jvdfjsdvvhjsvfhvhjvfdhvvfhgajfghjagefj', NULL, '1'),
(9, 'Subhadip Maity', 'subhadipmaity43@gmail.com', 'hbgggggggggggggggggggggggggggggg', NULL, '1'),
(10, 'Subhadip Maity', 'subhadipmaity43@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', NULL, '1'),
(11, 'Anup Kumar Paswan', 'cpcbelgharia56@gmail.com', 'I have booked My Tour.', 'Thank you for Buy Package', '1'),
(12, 'Anup Kumar Paswan', 'cpcbelgharia56@gmail.com', 'Hello Admin, Good Morning.', 'Thank You for contacting', '1'),
(13, 'Anup Kumar', 'cpcbelgharia56@gmail.com', 'hii', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `star` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `package` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package`, `name`, `description`, `price`, `photo`) VALUES
(6, '3', 'Kashmir-Gulmarg Escape', 'This is a 4 night,5 days tour. Starting from Srinagar(2N) to Gulmarg(1N) to Srinagar(1N),with attracting spot (House Boating, Gulmarg Gandola, Skiing in Gulmarg, Alpather Lake and many things).', 10900, 'Kashmir-Gulmarg_Escape766.jpg'),
(7, '4', 'Markha Vally, Ladakh', 'This is a 5 night,6 days tour. Starting from Leh(1N) to Zingchen(1N) to Yurutse(1N) to Markha vally(2N),with attracting spot (Snowcappet Peaks, Clear blue skies, Barren Mountains with Meandering Rivers and many things).', 15500, 'Markha_Vally,_Ladakh375.jpg'),
(8, '1', 'Goa', 'This is a 3 night,2 days tour. Main attractions ( Calangute Beach, Candolim beach, Fort Aguada, Cruise in Goa, Water sport in Goa)', 12850, 'Goa158.jpg'),
(9, '2', 'Italy and Austria', 'This is a 7 night,8 days tour. Rome (2N) to Florence(1N) to Venice(1N) to Kitzbuhel (1N) to Vienna(2N)', 110000, 'Italy_and_Austria866.jpg'),
(10, '2', 'Egypt', 'This is a 7night,8 days tour. Cairo(2N) to Nile Cruise (3N) to Luxor (1N) to Cairo (1N)', 139001, 'Egypt489.jpg'),
(21, '4', 'Grand Hotel', 'Very Good', 40000, 'Grand_Hotel227.jpg'),
(22, '5', 'Test Package', 'Test Package Description', 2000, 'Test_Package544.png'),
(23, '1', 'Test Package 1', 'Test Package Description 1', 4999, 'Test_Package_1425.png');

-- --------------------------------------------------------

--
-- Table structure for table `package_hotel`
--

CREATE TABLE `package_hotel` (
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `total_person` int(11) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `package` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `transactionid` varchar(100) NOT NULL,
  `paymentdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `fname`, `lname`, `booking_date`, `total_person`, `phoneno`, `emailid`, `package`, `name`, `amount`, `transactionid`, `paymentdate`, `status`) VALUES
(7, 'Anup Kumar', 'Paswan', '2021-07-05', 2, '09123771458', 'cpcbelgharia56@gmail.com', 'International Tour Pacakage', 'Kashmir-Gulmarg Escape', 21800, 'pay_HUlal73WbDFSnb', '2021-07-04 07:10:50', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `replyid` int(11) NOT NULL,
  `contactid` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_package`
--

CREATE TABLE `tour_package` (
  `id` int(11) NOT NULL,
  `update_package` text NOT NULL,
  `delete_package` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `address`, `status`) VALUES
(34, 'Subhadip', 'Maity', 'subhadipmaity43@gmail.com', '8348651566', 'subha@123', 'Ajodhyapur,contai', '1'),
(35, 'kuntal ', 'hazra', 'kuntal@gmail.com', '989898989', 'aaaa', 'kolkata', '1'),
(39, 'Subhadip', 'Maity', 'subhadipmaity43@gmail.com', '8348651566', '111', 'Ajodhyapur,contai', '1'),
(41, 'Anup Kumar', 'Paswan', 'cpcbelgharia56@gmail.com', '9123771458', '12345', 'Belgharia', '1'),
(43, 'Subhadip', 'Maity', 'subhadipmaity43@gmail.com', '8348651566', '12345', 'KolKata', '1'),
(44, 'Anup Kumar', 'Paswan', 'cpcbelgharia56@gmail.com', '8981887239', '12345', 'Kolkata', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`replyid`);

--
-- Indexes for table `tour_package`
--
ALTER TABLE `tour_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `replyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_package`
--
ALTER TABLE `tour_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
