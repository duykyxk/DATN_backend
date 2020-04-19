-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2019 lúc 12:37 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpionic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat1`
--

CREATE TABLE `cat1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `cat1`
--

INSERT INTO `cat1` (`id`, `name`, `parentID`) VALUES
(1, 'a', 0),
(2, 'b', 0),
(4, 'Dá»‹ch vá»¥', 2),
(6, 'An uon', 1),
(7, 'ca hÃ¡t', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat2`
--

CREATE TABLE `cat2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `cat2`
--

INSERT INTO `cat2` (`id`, `name`, `parentID`) VALUES
(1, 'c', 0),
(2, 'd', 0),
(3, 'du ', 1),
(4, 'ca chÃ©p', 0),
(5, 'test', 0),
(6, 'test2', 0),
(7, 'test3', 1),
(8, 'test4', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cat1id` int(11) NOT NULL,
  `cat2id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `field1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `field2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `image01` varchar(255) DEFAULT NULL,
  `image02` varchar(255) DEFAULT NULL,
  `image03` varchar(255) DEFAULT NULL,
  `image04` varchar(255) DEFAULT NULL,
  `image05` varchar(255) DEFAULT NULL,
  `image06` varchar(255) DEFAULT NULL,
  `image07` varchar(255) DEFAULT NULL,
  `image08` varchar(255) DEFAULT NULL,
  `image09` varchar(255) DEFAULT NULL,
  `image10` varchar(255) DEFAULT NULL,
  `stime` datetime DEFAULT NULL,
  `etime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `item`
--

INSERT INTO `item` (`id`, `uid`, `cat1id`, `cat2id`, `title`, `field1`, `field2`, `image01`, `image02`, `image03`, `image04`, `image05`, `image06`, `image07`, `image08`, `image09`, `image10`, `stime`, `etime`) VALUES
(1, 1, 1, 1, 'item 2', 'field1 item2', 'field2 item2', 'http://localhost/app_dashboard/uploads/place/665844744897_496436777526518_3756548576570769408_n.jpg', 'http://localhost/app_dashboard/uploads/place/665844744897_496436777526518_3756548576570769408_n.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cat1id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `cat1id`, `role`, `name`, `phone`, `address`) VALUES
(1, 'admin@gmail.com', 'admin', 1, 1, 'admin', '0123', 'admin'),
(5, 'admin1@gmail.com', '$2y$10$4eyZ6sUQjRSoHE2/JUgPEe5Zh2.lc/umNrGIR2PGY1zDFAekT6gCC', 1, 0, 'ky', '0124', '4747'),
(8, 'Toan@gmail.com', '$2y$10$HAm6eiQ95UtRsZ50YaN9fuwjfIaDc/wXTW1ibjBN6HPP.WRXZIvNW', 6, 1, 'Toan', '123', 'Äá»n lá»«'),
(9, 'duykyxk4797@gmail.com', '$2y$10$Nfufzb.91kyCe/qxNlwwResNSImcoFnSTtgzoXaXGQSByBz0WE4wC', 4, 0, 'Ky1', '789', 'Äá»n lá»«');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cat1`
--
ALTER TABLE `cat1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cat2`
--
ALTER TABLE `cat2`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cat1`
--
ALTER TABLE `cat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cat2`
--
ALTER TABLE `cat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
