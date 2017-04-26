-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-03-23 02:23:32
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
--

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `tel` char(32) NOT NULL DEFAULT '',
  `info` text NOT NULL,
  `createdTime` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `username`, `name`, `tel`, `info`, `createdTime`) VALUES
(1, ' lucy', 'lucy', '1234', '', 1490089919),
(3, ' lucy', 'lucy', '123', '', 1490090316),
(4, 'user1', 'lucy', '123456', '', 1490090318),
(7, 'user1', 'lucy', '123', '', 1490090316),
(8, 'user1', 'lucy', '123', '', 1490090318),
(12, 'user1', 'lucy', '123', '', 1490089919),
(13, 'user1', 'lucy', '123', '', 1490090314),
(14, 'user1', 'lucy', '123', '', 1490090316),
(15, 'user1', 'lucy', '123', '', 1490090318),
(16, 'user1', 'lucy', '123', '', 1490089919),
(27, 'user2', 'å¼ ä¸‰', '123456', '123456', 1490164211),
(29, 'user123', 'åˆ˜å¾·åŽ', '123', '123', 1490165908),
(30, 'user5', 'åˆ˜å¾·åŽ', '123456', '123456', 1490168575),
(31, 'user6', ' å‘¨æ˜Ÿé©°', '123456789', '1234312', 1490168617),
(32, 'user6', ' å‘¨æ˜Ÿé©°', '123456789', '1234312', 1490168677),
(33, 'user1', 'lucy', '123', '', 1490168731),
(34, 'user1222', 'lucy1', '123', '', 1490168747),
(35, 'user515', 'å‘¨æ°ä¼¦', '123456', '123456', 1490168789),
(36, 'å‘¨æ˜Ÿé©°', 'å‘¨æ˜Ÿé©°', '123', '12312313', 1490170410),
(37, 'user1222', 'lucy1', '123', '', 1490172210),
(38, '123', '123', '123', '123', 1490193000);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `tel` varchar(15) NOT NULL DEFAULT '',
  `info` text NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `createdTime` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tel`, `info`, `isAdmin`, `createdTime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456', '', 0, 1490230929);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
