-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-12-04 00:43:57
-- 服务器版本： 5.6.17
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weixin`
--

-- --------------------------------------------------------

--
-- 表的结构 `wx_user`
--

CREATE TABLE IF NOT EXISTS `wx_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id号',
  `uname` varchar(100) NOT NULL COMMENT '用户名',
  `upassword` varchar(400) NOT NULL COMMENT '用户密码',
  `uemail` varchar(100) NOT NULL COMMENT '用户邮箱',
  `uregtime` timestamp NOT NULL COMMENT '用户注册时间',
  `ulogtime` timestamp NOT NULL COMMENT '用户登录时间',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `wx_user`
--

INSERT INTO `wx_user` (`uid`, `uname`, `upassword`, `uemail`, `uregtime`, `ulogtime`) VALUES
(13, 'sunshine', '111111', '2632807692@qq.com', '2015-12-02 08:44:07', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
