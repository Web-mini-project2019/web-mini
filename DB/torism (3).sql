-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 03:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Password`) VALUES
(1, 'vishal', '456'),
(2, 'purshotham', '852');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `CarName` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `OwnedBy` varchar(200) NOT NULL,
  `Rates` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `CarName`, `Description`, `Image`, `OwnedBy`, `Rates`, `Status`) VALUES
(1, 'BMW', 'good', 'img/bmw.jpg', 'vishal', 5, 1),
(2, 'Shift', 'sdad', 'img/Astra vauxhall.jpg', 'sadsad', 1, 0),
(3, 'Benze', 'dad', 'img/audi r8.jpg', 's', 4, 0),
(4, 'tata', 'nice', 'img/tata.jpg', 'vishu', 5, 1),
(5, 'Mercedes', 'qswq', 'img/bmw.jpg', 'qwqwq', 1, 1),
(6, 'brezza', 'dadad', 'img/bmw.jpg', 'dad', 3, 1),
(7, 'Enova', 'sas', 'img/bmw.jpg', 'sS', 1, 1),
(8, 'Nexa', 's', 'img/bmw.jpg', 'qeqeq', 1, 1),
(9, 'Maruti', '', 'img/bmw.jpg', '', 0, 1),
(10, 'Porsche', '', 'img/bmw.jpg', '', 0, 1),
(11, 'Hyundai', '', 'img/bmw.jpg', '', 0, 1),
(12, 'Ferrari', '', 'img/bmw.jpg', '', 0, 1),
(17, 'jaguar', 'Fast Car', 'img/carsimage/jaguar.jpeg', 'Jaugar', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carbooking`
--

CREATE TABLE `carbooking` (
  `BookingId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `carsid` int(11) NOT NULL,
  `PickLocation` varchar(200) NOT NULL,
  `DropLocation` varchar(200) NOT NULL,
  `PickUpDate` date NOT NULL,
  `DropOfDate` date NOT NULL,
  `Distance` double NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carbooking`
--

INSERT INTO `carbooking` (`BookingId`, `CustomerId`, `carsid`, `PickLocation`, `DropLocation`, `PickUpDate`, `DropOfDate`, `Distance`, `cost`) VALUES
(1, 1, 1, 'Banglore', 'Manglore', '2019-11-06', '2019-11-09', 12, 1000),
(2, 16, 1, 'manglore', 'Banglore', '2019-11-07', '2019-11-21', 250, 15000),
(3, 1, 1, 'manglore', 'banglore', '2019-11-07', '2019-11-08', 250, 15000),
(4, 78, 4, 'magalore', 'dubai', '2019-12-05', '2019-12-08', 100, 100),
(5, 78, 1, 'mangalore', 'bangalore', '2019-12-12', '2019-12-26', 250, 15000),
(6, 78, 1, 'mangalore', 'bangalore', '2019-12-12', '2019-12-26', 250, 15000),
(7, 78, 1, 'mangalore', 'bangalore', '2019-12-12', '2019-12-26', 250, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `carschedular`
--

CREATE TABLE `carschedular` (
  `id` int(11) NOT NULL,
  `CarId` int(11) NOT NULL,
  `CarName` varchar(200) NOT NULL,
  `PickUpLocation` varchar(200) NOT NULL,
  `DropingLocation` varchar(200) NOT NULL,
  `Distance` double NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carschedular`
--

INSERT INTO `carschedular` (`id`, `CarId`, `CarName`, `PickUpLocation`, `DropingLocation`, `Distance`, `cost`) VALUES
(1, 1, 'asha', 'mysore', 'banglore', 250, 15000),
(2, 0, '1', 'banglore', 'manglore', 100, 100),
(3, 0, '1', 'banglore', 'manglore', 100, 100),
(4, 0, '1', 'banglore', 'manglore', 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Id` int(11) NOT NULL,
  `FlightName` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Images` varchar(500) NOT NULL,
  `Rates` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Id`, `FlightName`, `Description`, `Images`, `Rates`, `Status`) VALUES
(1, 'King of King KingFisher ', 'This is the second leg of a truly fun week        There are adventure', '780975_1.jpg', 5, 0),
(2, 'SpiceJet Airlines', 'Your guide to a truly fun week', '120331_3.jpg', 1, 5),
(3, 'Luftansa', 'where luxury meeet in heavens', '696228_2.jpg', 1, 5),
(4, 'Air Emirates', 'Fly with the Best there is to be offered', '780975_1.jpg', 1, 5),
(8, 'air india', 'royal', 'img/flightimages/airindia.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flightbooking`
--

CREATE TABLE `flightbooking` (
  `id` int(11) NOT NULL,
  `FlightSid` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `ArrivalTime` datetime NOT NULL,
  `DepartureTime` datetime NOT NULL,
  `Source` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightbooking`
--

INSERT INTO `flightbooking` (`id`, `FlightSid`, `CustomerId`, `ArrivalTime`, `DepartureTime`, `Source`, `Destination`, `Cost`, `Status`) VALUES
(1, 1, 1, '2019-11-13 01:01:00', '2019-11-13 05:18:20', 'Manglore', 'Banglore', 1000, 1),
(2, 1, 1, '2019-11-13 01:01:00', '2019-11-13 05:18:20', 'Manglore', 'Banglore', 1000, 1),
(3, 1, 1, '2019-11-13 01:01:00', '2019-11-13 05:18:20', 'Manglore', 'Banglore', 1000, 1),
(4, 1, 1, '2019-11-13 01:01:00', '2019-11-13 05:18:20', 'Manglore', 'Banglore', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flightschedular`
--

CREATE TABLE `flightschedular` (
  `id` int(11) NOT NULL,
  `FightId` int(11) NOT NULL,
  `Source` varchar(200) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `ArrivalTime` datetime NOT NULL,
  `DepartureTime` datetime NOT NULL,
  `Cost` int(11) NOT NULL,
  `Distance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightschedular`
--

INSERT INTO `flightschedular` (`id`, `FightId`, `Source`, `Destination`, `ArrivalTime`, `DepartureTime`, `Cost`, `Distance`) VALUES
(1, 1, 'Manglore', 'Banglore', '2019-11-13 01:01:00', '2019-11-13 05:18:20', 1000, 550),
(2, 2, 'Manglore', 'Dubai', '2019-11-19 01:09:00', '2019-11-19 13:00:00', 10000, 5000),
(3, 3, 'Banglore', 'Dubai', '2019-11-19 01:09:00', '2019-11-19 13:00:00', 10000, 500),
(4, 4, 'Dubai', 'chennai', '2019-11-21 00:00:00', '2019-11-21 05:00:00', 15000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `Id` int(11) NOT NULL,
  `TourName` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `HotelName` varchar(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `RoomsAvailable` int(11) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Rates` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`Id`, `TourName`, `Description`, `HotelName`, `Images`, `Location`, `RoomsAvailable`, `Cost`, `Rates`) VALUES
(2, '6 Days Around the Thiland', 'BANKONG', 'Raveen', 'img/2.jpg', 'banglore', 20, 220, 5),
(3, 'Honkong Island Tour', 'HONKONG', 'Sapna', 'img/3.jpg', 'soudhi', 3, 1000, 1),
(4, 'Himalaya', 'new place to enjoy', 'SagarPalace', 'img/1.jpg', 'himachal', 12, 13000, 5),
(5, 'Dubai', 'Beutiful city', 'SuperCity', 'img/g8.jpg', 'Dubai', 2, 1000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tourbooking`
--

CREATE TABLE `tourbooking` (
  `Id` int(11) NOT NULL,
  `tourid` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `HotelName` varchar(200) NOT NULL,
  `NoOfRooms` int(11) NOT NULL,
  `BookingDate` date NOT NULL,
  `Cost` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourbooking`
--

INSERT INTO `tourbooking` (`Id`, `tourid`, `CustomerId`, `HotelName`, `NoOfRooms`, `BookingDate`, `Cost`, `Status`) VALUES
(2, 1, 1, 'raj', 1, '2019-12-11', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ContactNo` int(12) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Email`, `Password`, `ContactNo`, `Address`, `Status`) VALUES
(1, 'xyz', 'vsiahal123@gmail.com', '123', 112222, 'banjpe manglore', 1),
(2, 'abcd', '', '123', 0, '', 0),
(3, 'abcde', '', '123', 0, '', 0),
(4, 'abc', '', '123', 0, '', 0),
(5, 'abcd', '', '123', 0, '', 0),
(6, 'abc', '', '123', 0, '', 0),
(7, 'abc', '', '123', 0, '', 0),
(8, 'sdss', '', 'fsfsf', 0, '', 0),
(9, 'abc', '', '123', 0, '', 0),
(10, 'abc', '', '123', 0, '', 0),
(11, 'addw', '', 'ddqd', 0, '', 0),
(12, 'abc', '', 'sws', 0, '', 0),
(13, '', '', '', 0, '', 0),
(14, '', '', '', 0, '', 0),
(15, '', '', '', 0, '', 0),
(16, '', '', '', 0, '', 0),
(17, '', '', '', 0, '', 0),
(18, '', '', '', 0, '', 0),
(19, '', '', '', 0, '', 0),
(20, 'abc', '', 'wdwd', 0, '', 0),
(21, 'abc', '', '123', 0, '', 0),
(22, '', '', '', 0, '', 0),
(23, 'abc', '', '123', 0, '', 0),
(24, 'abc', '', '123', 0, '', 0),
(25, 'abc', '', '123', 0, '', 0),
(26, '', '', '', 0, '', 0),
(27, '', '', '', 0, '', 0),
(28, '', '', '', 0, '', 0),
(29, '', '', '', 0, '', 0),
(30, 'abc', '', '123', 0, '', 0),
(31, 'abc', '', '123', 0, '', 0),
(32, 'abc', '', '123', 0, '', 0),
(33, 'abc', '', '123', 0, '', 0),
(34, '', '', '', 0, '', 0),
(35, '', '', '', 0, '', 0),
(36, '', '', '', 0, '', 0),
(37, '', '', '', 0, '', 0),
(38, '', '', '', 0, '', 0),
(39, '', '', '', 0, '', 0),
(40, '', '', '', 0, '', 0),
(41, '', '', '', 0, '', 0),
(42, '', '', '', 0, '', 0),
(43, '', '', '', 0, '', 0),
(44, '', '', '', 0, '', 0),
(45, '', '', '', 0, '', 0),
(46, '', '', '', 0, '', 0),
(47, '', '', '', 0, '', 0),
(48, '', '', '', 0, '', 0),
(49, '', '', '', 0, '', 0),
(50, '', '', '', 0, '', 0),
(51, '', '', '', 0, '', 0),
(52, '', '', '', 0, '', 0),
(53, '', '', '', 0, '', 0),
(54, '', '', '', 0, '', 0),
(55, '', '', '', 0, '', 0),
(56, '', '', '', 0, '', 0),
(57, '', '', '', 0, '', 0),
(58, '', '', '', 0, '', 0),
(59, '', '', '', 0, '', 0),
(60, '', '', '', 0, '', 0),
(61, '', '', '', 0, '', 0),
(62, '', '', '', 0, '', 0),
(63, '', '', '', 0, '', 0),
(64, '', '', '', 0, '', 0),
(65, '', '', '', 0, '', 0),
(66, '', '', '', 0, '', 0),
(67, '', '', '', 0, '', 0),
(68, '', '', '', 0, '', 0),
(69, 'abc', '', '123', 0, '', 0),
(70, 'abc', '', '123', 0, '', 0),
(71, '', '', '', 0, '', 0),
(72, '', '', '', 0, '', 0),
(73, 'xyz', '', '123', 0, '', 0),
(74, 'abc', '', '123', 0, '', 0),
(75, 'abc', '', '123', 0, '', 0),
(76, 'abc', '', '123', 0, '', 0),
(77, 'xyz', '', '123', 0, '', 0),
(78, 'Purshotham', 'Pursho@gmail.com', '123', 96325, 'kenjar', 1),
(79, 'Purshotham', 'Pursho@gmail.com', '123', 2147483647, 'kenjar', 0),
(80, 'Ashsalatha', 'Asha@gmail.com', '123', 987456, 'kavvor', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `carschedular`
--
ALTER TABLE `carschedular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `flightbooking`
--
ALTER TABLE `flightbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightschedular`
--
ALTER TABLE `flightschedular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tourbooking`
--
ALTER TABLE `tourbooking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carbooking`
--
ALTER TABLE `carbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carschedular`
--
ALTER TABLE `carschedular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flightbooking`
--
ALTER TABLE `flightbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flightschedular`
--
ALTER TABLE `flightschedular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourbooking`
--
ALTER TABLE `tourbooking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`BookingId`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
