-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 03:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--
CREATE DATABASE IF NOT EXISTS `petshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `petshop`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idBaiViet` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `create_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_end` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `comment`
--

TRUNCATE TABLE `comment`;
--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idBaiViet`, `NoiDung`, `create_up`, `create_end`) VALUES
(56, 22, 0, 'dịch vụ rất tốt', '2019-01-01 09:08:23', '2019-01-01 09:08:23'),
(57, 22, 0, 'đã xem', '2019-01-01 09:09:24', '2019-01-01 09:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `Tendv` varchar(250) NOT NULL,
  `MoTa` varchar(250) NOT NULL,
  `Gia` varchar(250) NOT NULL,
  `Hinh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `dichvu`
--

TRUNCATE TABLE `dichvu`;
-- --------------------------------------------------------

--
-- Table structure for table `repcomment`
--

CREATE TABLE `repcomment` (
  `id` int(11) NOT NULL,
  `idComment` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `NoiDung` text NOT NULL,
  `create_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `repcomment`
--

TRUNCATE TABLE `repcomment`;
--
-- Dumping data for table `repcomment`
--

INSERT INTO `repcomment` (`id`, `idComment`, `name`, `NoiDung`, `create_up`) VALUES
(11, 57, 'hoangdang', 'cám ơn bạn', '2019-01-01 09:10:28'),
(12, 56, 'hoangdang', 'cám ơn', '2019-01-01 09:41:04'),
(13, 57, 'hoangdang', 'hay', '2019-01-01 09:58:30'),
(14, 57, 'hoangdang', 'hay ghe', '2019-01-01 09:59:14'),
(15, 57, 'Đặng Tiếng Đông', 'hay hay', '2019-01-01 10:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `role`) VALUES
(18, 'hoangdang', 'a', 'c4ca4238a0b923820dcc509a6f75849b', 'sasa@gmail.com', NULL),
(22, 'a1', 'a1', 'c4ca4238a0b923820dcc509a6f75849b', '21@sd', NULL),
(23, 'Bùi Tiến Dũng', 'TienDung123', '202cb962ac59075b964b07152d234b70', 'TienDung123@gmail.com', NULL),
(24, 'Đặng Tiếng Đông', 'TienDong11', '202cb962ac59075b964b07152d234b70', 'nam@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_user` (`idUser`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repcomment`
--
ALTER TABLE `repcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_idcmt` (`idComment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repcomment`
--
ALTER TABLE `repcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Constraints for table `repcomment`
--
ALTER TABLE `repcomment`
  ADD CONSTRAINT `FK_id_idcmt` FOREIGN KEY (`idComment`) REFERENCES `comment` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
