-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2020 lúc 07:19 AM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `game`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `namePlayer` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `contentCmt` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `timeCmt` date NOT NULL,
  `idGame` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`namePlayer`, `contentCmt`, `timeCmt`, `idGame`) VALUES
('4', 'phú', '0000-00-00', 2020),
('phú', 'hi', '2020-01-02', 4),
('dương', 'Game Hay Quá!', '2020-01-02', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `games`
--

CREATE TABLE `games` (
  `idGame` int(5) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `view` int(9) NOT NULL,
  `play` varchar(3000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tag` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tagSecond` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `games`
--

INSERT INTO `games` (`idGame`, `name`, `image`, `category`, `view`, `play`, `tag`, `tagSecond`) VALUES
(1, 'Flappy Bird', 'images/flappy.png', 'Phiêu Lưu', 1090, 'FlappyBird/flappyBird.php', 'flappy', 'bird'),
(2, 'Xếp Hình ', 'images/xepgach.jpg', 'Trí Tuệ', 542, 'xephinh/xephinh.php', 'xephinh', ''),
(3, 'Hứng Trứng', 'images/hungtrung.png', 'Hành Động', 421, 'egg_game/engGame.php', 'trứng', 'eggs'),
(4, 'a hunting snake', 'images/snake.jpg', 'Giải Trí', 705, 'snake/snake.php', 'snake', 'hunt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `player`
--

CREATE TABLE `player` (
  `idPlayer` int(5) NOT NULL,
  `idGame` int(5) NOT NULL,
  `namePlayer` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `player`
--

INSERT INTO `player` (`idPlayer`, `idGame`, `namePlayer`, `score`) VALUES
(2, 2, 'phú béo', 456),
(3, 2, 'phú béo', 789),
(6, 2, 'phú', 1000),
(7, 2, 'phú', 2000),
(8, 2, 'phú', 4444),
(26, 4, 'phú txp', 10),
(90, 4, 'hưng', 1),
(99, 4, 'phú', 10),
(102, 4, 'khương', 3),
(218, 4, 'phú', 5),
(219, 4, 'phú', 5),
(220, 4, 'phú', 5),
(221, 4, 'phú', 5),
(222, 4, 'aka', 10),
(223, 4, 'aka', 10),
(224, 4, 'phú', 1),
(225, 4, 'phú', 1),
(226, 4, 'phú', 2),
(227, 4, 'phú', 2),
(228, 4, 'aka', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`idGame`);

--
-- Chỉ mục cho bảng `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`idPlayer`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `games`
--
ALTER TABLE `games`
  MODIFY `idGame` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `player`
--
ALTER TABLE `player`
  MODIFY `idPlayer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
