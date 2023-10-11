-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2023 lúc 02:40 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `app_web1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `email`, `type`, `password`) VALUES
(45, 'duy', '', '', '', '5dc6da3adfe8ccf1287a98c0a8f74496'),
(35, 'duy3', '', '', '', 'f6b893acfa8186ea11c67e4ca6baa107'),
(34, 'duy2', '', '', '', '65cedff8f10488ede6e1d1632f1cdb97'),
(30, 'phong', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(25, 'admin1', '', '', '', 'e00cf25ad42683b3df678c61f42c6bda'),
(26, 'admin2', '', '', '', 'c84258e9c39059a89ab77d846ddab909'),
(37, 'quang', '', '', '', '2b10351253eed030812674e8aa18a5ab'),
(36, 'duy4', '', '', '', '5e900d7419a5e2cd00dc23536185c03d'),
(38, 'phi', '', '', '', 'cb7a24bb7528f934b841b34c3a73e0c7'),
(39, 'lanannh', '', '', '', '578b87605fd4b753a3606d640c95ebe2'),
(44, 'admin', '', '', '', '21232f297a57a5a743894a0e4a801fc3');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
