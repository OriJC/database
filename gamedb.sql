-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `gamedb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `coach`
--

CREATE TABLE `coach` (
  `Coach_Name` varchar(250) NOT NULL,
  `Coach_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `coach`
--

INSERT INTO `coach` (`Coach_Name`, `Coach_ID`) VALUES
('coach2', 2002),
('coach_test', 2008);

-- --------------------------------------------------------

--
-- 資料表結構 `competition`
--

CREATE TABLE `competition` (
  `Arena` varchar(250) NOT NULL,
  `Regional` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `prize` int(11) NOT NULL,
  `Com_ID` int(11) NOT NULL,
  `Game_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `competition`
--

INSERT INTO `competition` (`Arena`, `Regional`, `Name`, `prize`, `Com_ID`, `Game_ID`) VALUES
('arena1', 'Taiwan', 'competition1', 10000, 6001, 4001),
('arena_test', 'regional_test', 'competition_test', 10003, 6002, 4002);

-- --------------------------------------------------------

--
-- 資料表結構 `game`
--

CREATE TABLE `game` (
  `Game_title` varchar(250) NOT NULL,
  `Category` varchar(250) DEFAULT NULL,
  `Game_ID` int(11) NOT NULL,
  `G_Producer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `game`
--

INSERT INTO `game` (`Game_title`, `Category`, `Game_ID`, `G_Producer_ID`) VALUES
('lol', 'lol', 4001, 3001),
('game_test', 'g_category_test', 4002, 3002);

-- --------------------------------------------------------

--
-- 資料表結構 `game_producer`
--

CREATE TABLE `game_producer` (
  `Company_Name` varchar(250) NOT NULL,
  `Company_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `game_producer`
--

INSERT INTO `game_producer` (`Company_Name`, `Company_ID`) VALUES
('garena', 3001),
('company_test', 3002);

-- --------------------------------------------------------

--
-- 資料表結構 `has_joined`
--

CREATE TABLE `has_joined` (
  `T_SSID` int(11) NOT NULL,
  `Com_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `has_joined`
--

INSERT INTO `has_joined` (`T_SSID`, `Com_ID`) VALUES
(5002, 6002);

-- --------------------------------------------------------

--
-- 資料表結構 `is_sponsor`
--

CREATE TABLE `is_sponsor` (
  `Team_ID` int(11) NOT NULL,
  `Sponsor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `is_sponsor`
--

INSERT INTO `is_sponsor` (`Team_ID`, `Sponsor_ID`) VALUES
(5002, 7002);

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `Salary` int(11) NOT NULL,
  `Nationality` varchar(250) DEFAULT NULL,
  `Name` varchar(250) NOT NULL,
  `M_SSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `manager`
--

INSERT INTO `manager` (`Salary`, `Nationality`, `Name`, `M_SSID`) VALUES
(10000, 'nation1', 'manager1', 1001),
(10000, 'nation_test', 'manager_test', 1002);

-- --------------------------------------------------------

--
-- 資料表結構 `player`
--

CREATE TABLE `player` (
  `Name` varchar(250) NOT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Nationality` varchar(250) NOT NULL,
  `P_SSID` int(11) NOT NULL,
  `P_Team_ID` int(11) NOT NULL,
  `P_Game_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `player`
--

INSERT INTO `player` (`Name`, `Salary`, `Nationality`, `P_SSID`, `P_Team_ID`, `P_Game_ID`) VALUES
('player1', 10000, 'Taiwan', 9001, 5001, 4001),
('player_test', 3939, 'nation_test', 9002, 5002, 4002);

-- --------------------------------------------------------

--
-- 資料表結構 `sponsor`
--

CREATE TABLE `sponsor` (
  `Sponsor_ID` int(11) NOT NULL,
  `Sponsor_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `sponsor`
--

INSERT INTO `sponsor` (`Sponsor_ID`, `Sponsor_Name`) VALUES
(7001, 'sponsor1'),
(7002, 'sponsor_test');

-- --------------------------------------------------------

--
-- 資料表結構 `team`
--

CREATE TABLE `team` (
  `Team_Color` varchar(250) DEFAULT NULL,
  `Team_Name` varchar(250) NOT NULL,
  `Team_ID` int(11) NOT NULL,
  `T_M_SSID` int(11) NOT NULL,
  `T_Coach_ID` int(11) NOT NULL,
  `T_Game_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `team`
--

INSERT INTO `team` (`Team_Color`, `Team_Name`, `Team_ID`, `T_M_SSID`, `T_Coach_ID`, `T_Game_ID`) VALUES
('color1', 'team1', 5001, 1001, 2002, 4001),
('color_test', 'team_test', 5002, 1002, 2008, 4002);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`Coach_ID`);

--
-- 資料表索引 `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`Com_ID`,`Game_ID`),
  ADD KEY `Game_ID` (`Game_ID`);

--
-- 資料表索引 `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`Game_ID`),
  ADD KEY `G_Producer_ID` (`G_Producer_ID`);

--
-- 資料表索引 `game_producer`
--
ALTER TABLE `game_producer`
  ADD PRIMARY KEY (`Company_ID`);

--
-- 資料表索引 `has_joined`
--
ALTER TABLE `has_joined`
  ADD PRIMARY KEY (`T_SSID`,`Com_ID`),
  ADD KEY `Com_ID` (`Com_ID`);

--
-- 資料表索引 `is_sponsor`
--
ALTER TABLE `is_sponsor`
  ADD KEY `Sponsor_ID` (`Sponsor_ID`),
  ADD KEY `Team_ID` (`Team_ID`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`M_SSID`);

--
-- 資料表索引 `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`P_SSID`,`P_Team_ID`),
  ADD KEY `P_Team_ID` (`P_Team_ID`),
  ADD KEY `P_Game_ID` (`P_Game_ID`);

--
-- 資料表索引 `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`Sponsor_ID`);

--
-- 資料表索引 `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Team_ID`,`T_M_SSID`,`T_Coach_ID`,`T_Game_ID`),
  ADD KEY `T_Coach_ID` (`T_Coach_ID`),
  ADD KEY `T_M_SSID` (`T_M_SSID`),
  ADD KEY `T_Game_ID` (`T_Game_ID`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `competition`
--
ALTER TABLE `competition`
  ADD CONSTRAINT `competition_ibfk_1` FOREIGN KEY (`Game_ID`) REFERENCES `game` (`Game_ID`) ON UPDATE CASCADE;

--
-- 資料表的限制式 `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`G_Producer_ID`) REFERENCES `game_producer` (`Company_ID`);

--
-- 資料表的限制式 `has_joined`
--
ALTER TABLE `has_joined`
  ADD CONSTRAINT `has_joined_ibfk_1` FOREIGN KEY (`Com_ID`) REFERENCES `competition` (`Com_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `has_joined_ibfk_2` FOREIGN KEY (`T_SSID`) REFERENCES `team` (`Team_ID`) ON UPDATE CASCADE;

--
-- 資料表的限制式 `is_sponsor`
--
ALTER TABLE `is_sponsor`
  ADD CONSTRAINT `is_sponsor_ibfk_1` FOREIGN KEY (`Sponsor_ID`) REFERENCES `sponsor` (`Sponsor_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `is_sponsor_ibfk_2` FOREIGN KEY (`Team_ID`) REFERENCES `team` (`Team_ID`) ON UPDATE CASCADE;

--
-- 資料表的限制式 `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`P_Team_ID`) REFERENCES `team` (`Team_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `player_ibfk_2` FOREIGN KEY (`P_Game_ID`) REFERENCES `game` (`Game_ID`);

--
-- 資料表的限制式 `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`T_Coach_ID`) REFERENCES `coach` (`Coach_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`T_M_SSID`) REFERENCES `manager` (`M_SSID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `team_ibfk_3` FOREIGN KEY (`T_Game_ID`) REFERENCES `game` (`Game_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
