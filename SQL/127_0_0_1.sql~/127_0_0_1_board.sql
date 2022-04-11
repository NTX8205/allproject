-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-04-11 06:49:06
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `board`
--
CREATE DATABASE IF NOT EXISTS `board` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `board`;

-- --------------------------------------------------------

--
-- 資料表結構 `mesboard`
--

CREATE TABLE `mesboard` (
  `id` int(11) NOT NULL,
  `mesUser` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mesboard`
--

INSERT INTO `mesboard` (`id`, `mesUser`, `title`, `messages`) VALUES
(115, 'res12344', 'hello ', '2021.05.29 hi'),
(116, 'res12344', 'sunny', 'hot'),
(117, 'res12344', '測試', 'test'),
(118, '123514', 'hihi', '8512151'),
(119, '123514', '040044', '424242424'),
(120, '123514', 'hhth', 'htrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrthtrhtrhrthtrhrt');

-- --------------------------------------------------------

--
-- 資料表結構 `resmesboard`
--

CREATE TABLE `resmesboard` (
  `id` int(11) NOT NULL,
  `resid` int(11) NOT NULL,
  `resname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resmes` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resmesboard`
--

INSERT INTO `resmesboard` (`id`, `resid`, `resname`, `resmes`) VALUES
(20, 116, 'utr0012', 'hi 123'),
(21, 115, 'res12344', 'hello 123'),
(24, 115, '123514', 'ytjytjytj');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `account` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `account`, `password`) VALUES
(7, 'res12344', 'sd036521478'),
(8, 'utr0012', 'qwer1234'),
(9, '123514', '123');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `mesboard`
--
ALTER TABLE `mesboard`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resmesboard`
--
ALTER TABLE `resmesboard`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account` (`account`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mesboard`
--
ALTER TABLE `mesboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resmesboard`
--
ALTER TABLE `resmesboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
