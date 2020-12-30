-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 09:39 AM
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
('khang', 3, 'Uow, new social network!!!!!!! :)))))))', 17),
('khang', 2, 'very competitive', 18),
('khang', 1, 'fun game', 20),
('khang', 1, 'adventures', 21);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `productID` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `picturePath` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `videoPath` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ProductType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`productID`, `name`, `picturePath`, `about`, `videoPath`, `ProductType`) VALUES
(1, 'AdventureTime', 'images\\AdventureTime.jpg', 'This game is about the adventure of Finn and Jake. Together, they discover distant land, protect Candy Kingdom from The Evil Ice-King. On their journey, they make friend with Vampire, Fire Princess and much more. ', 'https://www.youtube.com/embed/kMDaAcfCYow', 0),
(2, 'DOTA2', 'images\\Dota2.jpg', 'Prepare yourself to play as one of the ancient legends to protect your ancient from the other team. Your objective is also to destroy theirs. In the process, you may collect item, experience to become stronger. This game is fun, competitive and highly addictive.', 'https://www.youtube.com/embed/SmnqsdeHFT0', 0),
(3, 'ZALO', 'images/CLOUD1.png', 'A Social media for Vietnamese user', 'https://www.youtube.com/embed/OYMmL2LzV3w', 1),
(4, 'BKGPayment', 'images/PAY2.jpg', 'A payment platform that use blockchain technology for secure and fast transfer. This payment platform is broadly connected to many well-known service, which is great for convinence. ', 'https://www.youtube.com/embed/gG5kLlfZcik', 2),
(5, 'Free Fire', 'images/FreeFire.jpg', 'FREE FIRE là tựa game bắn súng sinh tồn đầu tiên tại Việt Nam, mang đến những trải nghiệm sống còn cực kỳ hồi hộp và đầy rẫy những bất ngờ nghẹt thở. Sau khi nhảy dù với 40 người khác từ máy bay xuống hòn đảo, cuộc chiến sinh tử bắt đầu. Nơi đây chỉ tồn tại một quy tắc duy nhất: “săn mồi hoặc trở thành con mồi”. Người chơi phải nhanh chóng tìm kiếm vũ khí, vật dụng cần thiết rải rác khắp nơi trên đảo để sinh tồn và hạ gục những người chơi khác.', 'https://www.youtube.com/embed/VTJOSgN8zlk', 0),
(6, 'Cyberpunk 2077', 'images/Cyberpunk.jpeg', 'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your character’s cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you.', 'https://www.youtube.com/embed/-Es9cEjBjzg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productType`) VALUES
(0, 'Game'),
(1, 'Cloud'),
(2, 'Pay');

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
  `phoneNumber` int(200) NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profilePic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commentState` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `Pass`, `Email`, `userType`, `FullName`, `phoneNumber`, `Address`, `profilePic`, `commentState`) VALUES
('a', '12', 'a@a.ce', 1, 'âa', 909090, '', 'a.jpg', 1),
('ankhang', '123456', 'trackevation@gmail.com', 0, 'Võ An Khang', 123444, 'halluluya', 'ankhang.jpg', 1),
('khang', '123456', 'khang@gmail.com', 1, 'Khang', 1234567, 'tmp', 'khang.jpg', 1),
('khang1', '123456', 'temp@email.com', 0, 'An Khang ', 14141414, '', 'khang1.jpg', 1);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
