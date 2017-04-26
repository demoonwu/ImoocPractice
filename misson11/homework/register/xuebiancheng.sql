-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-04-05 10:23:44
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuebiancheng`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `MOBILEPHONE` varchar(40) NOT NULL DEFAULT '',
  `USERNAME` varchar(30) NOT NULL DEFAULT '',
  `PASSWORD` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `MOBILEPHONE`, `USERNAME`, `PASSWORD`) VALUES
(1, '1234567', 'user1', '1234567'),
(8, '1', 'user0', '1234567'),
(9, '2', 'user2', '1234567'),
(10, '3', 'user3', '1234567');

-- --------------------------------------------------------

--
-- 表的结构 `xuebiancheng`
--

CREATE TABLE `xuebiancheng` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERNAME` varchar(32) NOT NULL,
  `PASSWORD` char(32) NOT NULL,
  `LOGINID` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `xuebiancheng`
--

INSERT INTO `xuebiancheng` (`ID`, `USERNAME`, `PASSWORD`, `LOGINID`) VALUES
(1, 'CHENZHONG', 'd020263e64f47820012b5e60215bfa0b', '13966243433'),
(2, 'WUYONGWEI', '3d142045acd8fc809ad842cb23b15f6c', '15655133980');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MOBILEPHONE` (`MOBILEPHONE`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `xuebiancheng`
--
ALTER TABLE `xuebiancheng`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `LOGINID` (`LOGINID`),
  ADD KEY `USERNAME_INDEX` (`USERNAME`),
  ADD KEY `LOGINID_INDEX` (`LOGINID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `xuebiancheng`
--
ALTER TABLE `xuebiancheng`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
