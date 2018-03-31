-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-03-31 13:25:58
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mice`
--

-- --------------------------------------------------------

--
-- 表的结构 `address_list`
--

CREATE TABLE `address_list` (
  `id` int(12) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `deparyment` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `tel` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `address_list`
--

INSERT INTO `address_list` (`id`, `name`, `sex`, `deparyment`, `position`, `tel`, `address`, `created_at`, `updated_at`) VALUES
(1, '诸葛原', '男', '技术部', '计算总监', '13552305847', '北京市朝阳区大望路135号', 1371706106, 2013),
(2, '马超', '男', '销售部', '销售部经理', '12546879563', '北京市昌平区65号', 1371712226, 0),
(3, '孔红', '女', '技术部', '技术助理', '1358957444', '北京市望京区广顺南大街', 1371712291, 0),
(4, '刘德', '男', '财务部', '财务经理', '13587948741', '北京市顺义区后沙欲165号', 1371712350, 0),
(5, '刘灿', '女', '编辑部', '部门经理', '1862546879', '北京市丰台区178号', 1371712411, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cus`
--

CREATE TABLE `cus` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Position` varchar(100) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `MPType` varchar(20) DEFAULT NULL COMMENT '门票类型',
  `RegDate` date DEFAULT NULL,
  `RegTime` time DEFAULT NULL,
  `Sex` varchar(2) DEFAULT NULL,
  `CJXM` varchar(100) DEFAULT NULL COMMENT '参加论坛选项',
  `DDDate` date DEFAULT NULL COMMENT '到达日期',
  `DDTime` time DEFAULT NULL COMMENT '到达时间',
  `DDJT` varchar(20) DEFAULT NULL COMMENT '到达交通信息',
  `DDJZ` varchar(20) DEFAULT NULL COMMENT '到达接站要求',
  `LKDate` date DEFAULT NULL COMMENT '离开日期',
  `LKTime` time DEFAULT NULL COMMENT '离开时间',
  `LKJT` varchar(20) DEFAULT NULL COMMENT '离开交通信息',
  `LKSZ` varchar(20) DEFAULT NULL COMMENT '离开送站要求',
  `ZSYQ1` varchar(50) DEFAULT NULL COMMENT '住宿要求1',
  `ZSYQ2` varchar(50) DEFAULT NULL COMMENT '住宿要求2',
  `CGLX` varchar(20) DEFAULT NULL COMMENT '参观路线',
  `JFBZ` varchar(20) DEFAULT NULL,
  `JFFS` varchar(20) DEFAULT NULL,
  `DWMC` varchar(100) DEFAULT NULL,
  `QPFS` varchar(20) DEFAULT NULL,
  `PJXM` varchar(20) DEFAULT NULL,
  `PJDH` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cus`
--

INSERT INTO `cus` (`ID`, `Name`, `Company`, `Position`, `Tel`, `Email`, `MPType`, `RegDate`, `RegTime`, `Sex`, `CJXM`, `DDDate`, `DDTime`, `DDJT`, `DDJZ`, `LKDate`, `LKTime`, `LKJT`, `LKSZ`, `ZSYQ1`, `ZSYQ2`, `CGLX`, `JFBZ`, `JFFS`, `DWMC`, `QPFS`, `PJXM`, `PJDH`) VALUES
(100023, '徐波', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100006, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100005, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100004, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100003, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100002, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100001, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '1,2,3', '2017-08-25', '02:02:02', 'bus', '需要', '2017-08-31', '21:39:55', 'bus', '需要', '双人间', 'bc', '西线', NULL, NULL, NULL, NULL, NULL, NULL),
(100024, '胡拥军', '青岛九皋', '财务秘书1', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '男', '1,3', '2017-09-10', '10:02:00', '高铁', '需要', '2017-09-17', '09:00:00', '高铁', '需要', '单人间', '李晓明', '西线', NULL, NULL, NULL, NULL, NULL, NULL),
(100025, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100026, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100027, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100028, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100029, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100030, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100031, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100032, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100033, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100034, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100035, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100036, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100037, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100038, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100039, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100040, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100041, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100042, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100043, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100044, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100045, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100046, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100047, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100048, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100049, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100050, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100051, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100052, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100053, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100054, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100055, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100056, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100057, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100058, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100059, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100060, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100061, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100062, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100063, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100064, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100065, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100066, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100067, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100068, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100069, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100070, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100071, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100072, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100073, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100074, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100075, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100076, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100077, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100078, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100079, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100080, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100081, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100082, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100083, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100084, '胡拥军', '青岛九皋', '财务秘书', '13854255827', '2825807289@qq.com', NULL, '2017-08-26', '16:08:09', '女', '3', '2017-09-10', '10:02:00', '高铁', '不需要', '2017-09-17', '09:00:00', '高铁', '不需要', '双人间', '李晓明', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100085, '李晓明', '青岛九皋会议活动策划管理有限公司', '房务助理', '15964251135', '1078610205@qq.com', NULL, '2017-08-25', '15:45:43', '女', '3', '2017-09-08', '00:08:00', '飞机', '不需要', '2017-09-16', '00:08:00', '飞机', '不需要', '双人间', '胡拥军13854255827', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100086, '黄菁', '青岛九皋会议活动策划管理有限公司', '会议管家', '13791912278', '1598221498@qq.com', NULL, '2017-08-25', '14:30:11', '女', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100087, '张荟', '青岛九皋会议活动策划管理有限公司', '会议秘书', '15192523202', '1516133744@qq.com', NULL, '2017-08-25', '14:28:39', '女', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100088, '邢茜宜', '青岛九皋会议', '总经理', '13705323632', '1275381062@qq.com', NULL, '2017-08-25', '14:20:24', '女', '1', '2017-09-03', '08:08:00', '火车', '不需要', '2017-09-16', '13:08:00', '火车', '不需要', '双人间', '黄菁13791912278', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100089, '徐波', '1', '1', '13061454471', 'xubojam@163.com', NULL, '2017-08-25', '13:42:58', '男', '2', '2017-08-25', '02:02:02', 'b', '需要', '2017-08-25', '21:39:55', 'b', '需要', '单人间', 'b', '不参与', NULL, NULL, NULL, NULL, NULL, NULL),
(100090, '', '斯蒂芬斯蒂芬', '1', '', '1', NULL, NULL, NULL, '男', '1', '2017-08-30', '00:00:00', 'bus', '需要', '2017-08-31', '00:00:00', 'bus', '需要', '单人间', '', '东线', '1000', '会前交费', '123', '现场', '', ''),
(100091, '', 'danwei', 'position', '', 'email', NULL, NULL, NULL, '男', '2,3', '2017-08-30', '01:00:00', 'jtxx', '需要', '2017-08-31', '02:00:00', 'lkjt', '需要', '双人间', '无', '西线', '1000', '会前交费', '信息', '现场', '', ''),
(100092, 'name', 'com', 'position', '130', 'email', NULL, NULL, NULL, '男', '1,3', '2017-08-30', '01:00:00', 'jtxx', '需要', '2017-08-31', '02:00:00', 'lkjt', '需要', '双人间', 'zsyq2', '西线', '2000', '会前交费', 'dwmc', '现场', 'pjxm', '123456'),
(100093, 'bo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100094, 'xbb', '123', '343', '13061454471', 'sdf2@DDDD.COM', NULL, NULL, NULL, '男', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100095, 'xbbb', '单位', '职务', '13061454471', 'youxiang@youxiang.com', NULL, NULL, NULL, '女', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100096, 'xbbb', '单位', '职务', '13061454471', 'youxiang@youxiang.com', NULL, NULL, NULL, '女', '1,2,3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(12) UNSIGNED NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `roleid` int(11) UNSIGNED NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roleid`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1371548947, 0),
(5, 'test', '098f6bcd4621d373cade4e832627b4f6', 2, 1371783634, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_list`
--
ALTER TABLE `address_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus`
--
ALTER TABLE `cus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `address_list`
--
ALTER TABLE `address_list`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `cus`
--
ALTER TABLE `cus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100097;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
