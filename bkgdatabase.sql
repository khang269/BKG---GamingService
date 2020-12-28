-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 09:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkgdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `userName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `productID` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `commentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`userName`, `productID`, `Content`, `commentID`) VALUES
('Khang', 1, 'Very good game', 1),
('khang', 1, 'nice game', 3),
('khang', 1, 'nice game', 4);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `productID` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `picturePath` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ProductType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`productID`, `name`, `picturePath`, `about`, `ProductType`) VALUES
(1, 'AdventureTime', 'images\\GAME.png', 'This game is about the adventure of Finn and Jake. Together, they discover distant land, protect Candy Kingdom from The Evil Ice-King. On their journey, they make friend with Vampire, Fire Princess and much more. ', 0),
(2, 'DOTA2', 'images\\GAME1.png', 'Prepare yourself to play as one of the ancient legends to protect your ancient from the other team. Your objective is also to destroy theirs. In the process, you may collect item, experience to become stronger. This game is fun, competitive and highly addictive.', 0),
(3, 'ZING.ME', 'images/CLOUD1.png', 'A Social media for Vietnamese user', 1),
(4, 'BKGPayment', 'images/PAY2.jpg', 'A payment platform that use blockchain technology for secure and fast transfer. This payment platform is broadly connected to many well-known service, which is great for convinence. ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `userType` int(11) NOT NULL DEFAULT 0,
  `FullName` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `Pass`, `Email`, `userType`, `FullName`, `phoneNumber`) VALUES
('khang', '123456', 'khang@gmail.com', 1, 'Vo An Khang', 123456789),
('khang1', '123456', 'khang.vo_cntt@hcmut.edu.vn', 0, 'khang', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
