-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2018 lúc 05:37 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `login`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`) VALUES
(1, 'hoang123', 'hahaha', '', ''),
(2, 'haha', '123', '', ''),
(3, 'hoang1104', '1212', '', ''),
(4, 'hoang123123', '123456', '', ''),
(5, 'asd', 'asd', '', ''),
(6, 'dasdsadas', '111', '', ''),
(12, 'asdasd', 'asd', '', ''),
(13, 'zxc', '111', '', ''),
(14, 'xcxc', 'a', '', ''),
(15, 'sadasd', '8277e0910d750195b448797616e091', '', ''),
(16, 'hoanghung', 'c4ca4238a0b923820dcc509a6f7584', '', ''),
(17, 'vitieubao', '49067851782bda7ca512c139a31e5a', 'hoangdang', 'sasa@gmail.com'),
(18, 'vitieubao', '49067851782bda7ca512c139a31e5a', 'hoangdang', 'sasa@gmail.com'),
(19, 'vitieubao', '49067851782bda7ca512c139a31e5a', 'hoangdang', 'sasa@gmail.com'),
(20, 'asasas', '202cb962ac59075b964b07152d234b', 'asas', 'ss@gmail.com'),
(21, 'as', 'f970e2767d0cfe75876ea857f92e31', 'sa', 'hah@gmail.com'),
(22, '12', '3c59dc048e8850243be8079a5c74d0', '12', '21@sd'),
(23, 'phong', '4a7d1ed414474e4033ac29ccb8653d', 'Phong', 'windtran411@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
