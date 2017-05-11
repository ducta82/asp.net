-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 05:02 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chu_chay_duoi`
--

CREATE TABLE `chu_chay_duoi` (
  `ID` int(11) NOT NULL,
  `Name` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chu_chay_duoi`
--

INSERT INTO `chu_chay_duoi` (`ID`, `Name`) VALUES
(1, 'blabla');

-- --------------------------------------------------------

--
-- Table structure for table `lai_suat_tg`
--

CREATE TABLE `lai_suat_tg` (
  `ID` int(11) NOT NULL,
  `TT` int(11) NOT NULL,
  `Name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ShortName` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lai_suat` float NOT NULL,
  `Loai_TG` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lai_suat_tg`
--

INSERT INTO `lai_suat_tg` (`ID`, `TT`, `Name`, `ShortName`, `Lai_suat`, `Loai_TG`) VALUES
(1, 1, 'Tiền gửi không kỳ hạn', 'KKH', 0.5, 1),
(2, 2, 'Tiền gửi có kỳ hạn 01 tuần', '01 TUẦN', 0.5, 1),
(3, 3, 'Tiền gửi có kỳ hạn 02 tuần', '02 TUẦN', 0.5, 1),
(4, 4, 'Tiền gửi có kỳ hạn 01 tháng', '01 THÁNG', 4, 1),
(5, 5, 'Tiền gửi có kỳ hạn 02 tháng', '02 THÁNG', 4.3, 1),
(6, 6, 'Tiền gửi có kỳ hạn 03 tháng', '03 THÁNG', 4.5, 1),
(7, 7, 'Tiền gửi có kỳ hạn 04 tháng', '04 THÁNG', 4.8, 1),
(8, 8, 'Tiền gửi có kỳ hạn 05 tháng', '05 THÁNG', 5, 1),
(9, 9, 'Tiền gửi có kỳ hạn 06 tháng', '06 THÁNG', 5.3, 1),
(10, 10, 'Tiền gửi có kỳ hạn 07 tháng', '07 THÁNG', 5.3, 1),
(11, 11, 'Tiền gửi có kỳ hạn 09 tháng', '09 THÁNG', 5.4, 1),
(12, 12, 'Tiền gửi có kỳ hạn 12 tháng', '12 THÁNG', 6, 1),
(13, 13, 'Tiền gửi có kỳ hạn 13 tháng', '13 THÁNG', 6.2, 1),
(14, 14, 'Tiền gửi có kỳ hạn 18 tháng', '18 THÁNG', 6.5, 1),
(15, 15, 'Tiền gửi có kỳ hạn 24 tháng', '24 THÁNG', 6.5, 1),
(16, 1, 'Tiền gửi không kỳ hạn', 'KKH', 0.05, 2),
(17, 2, 'Tiền gửi có kỳ hạn 01 tháng', '01 THÁNG', 0.25, 2),
(18, 3, 'Tiền gửi có kỳ hạn 02 tháng', '02 THÁNG', 0.25, 2),
(19, 4, 'Tiền gửi có kỳ hạn 03 tháng', '03 THÁNG', 0.25, 2),
(20, 5, 'Tiền gửi có kỳ hạn 06 tháng', '06 THÁNG', 0.25, 2),
(21, 6, 'Tiền gửi có kỳ hạn 09 tháng', '09 THÁNG', 0.25, 2),
(22, 7, 'Tiền gửi có kỳ hạn 12 tháng', '12 THÁNG', 0.25, 2),
(23, 8, 'Tiền gửi có kỳ hạn 18 tháng', '18 THÁNG', 0.25, 2),
(24, 9, 'Tiền gửi có kỳ hạn 24 tháng', '24 THÁNG', 0.25, 2),
(25, 1, 'Tiền gửi không kỳ hạn', '', 0.5, 3),
(26, 2, 'Tiền gửi có kỳ hạn 01 tháng', '', 4, 3),
(27, 3, 'Tiền gửi có kỳ hạn 02 tháng', '', 4.3, 3),
(28, 4, 'Tiền gửi có kỳ hạn 03 tháng', '', 4.5, 3),
(29, 5, 'Tiền gửi có kỳ hạn 06 tháng', '', 5.2, 3),
(30, 6, 'Tiền gửi có kỳ hạn 09 tháng', '', 5.3, 3),
(31, 7, 'Tiền gửi có kỳ hạn 12 tháng', '', 6, 3),
(32, 1, 'Tiền gửi không kỳ hạn', '', 0, 4),
(33, 2, 'Tiền gửi có kỳ hạn 03 tháng', '', 0, 4),
(34, 3, 'Tiền gửi có kỳ hạn 06 tháng', '', 0, 4),
(35, 4, 'Tiền gửi có kỳ hạn 09 tháng', '', 0, 4),
(36, 5, 'Tiền gửi có kỳ hạn 12 tháng', '', 0, 4),
(37, 1, 'Tiền gửi có kỳ hạn 12 tháng', '', 5.2, 5),
(38, 2, 'Tiền gửi có kỳ hạn 24 tháng', '', 6, 5),
(39, 3, 'Tiền gửi có kỳ hạn 36 tháng', '', 6, 5),
(40, 4, 'Tiền gửi có kỳ hạn 60 tháng', '', 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `lai_suat_tv`
--

CREATE TABLE `lai_suat_tv` (
  `ID` int(11) NOT NULL,
  `TT` int(11) NOT NULL,
  `Name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lai_suat_tv` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lai_suat_tv`
--

INSERT INTO `lai_suat_tv` (`ID`, `TT`, `Name`, `Lai_suat_tv`) VALUES
(1, 1, 'KKH', '0.5'),
(2, 2, '01 TUẦN', '0.5'),
(3, 3, '02 TUẦN', '0.5'),
(4, 4, '01 THÁNG', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ty_gia`
--

CREATE TABLE `ty_gia` (
  `ID` int(11) NOT NULL,
  `TT` int(11) NOT NULL,
  `Name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia_mua` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia_ban` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ty_gia`
--

INSERT INTO `ty_gia` (`ID`, `TT`, `Name`, `Gia_mua`, `Gia_ban`) VALUES
(1, 1, 'VÀNG', '33,45', '33,62'),
(2, 2, 'USD', '22.247', '22.275');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chu_chay_duoi`
--
ALTER TABLE `chu_chay_duoi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lai_suat_tg`
--
ALTER TABLE `lai_suat_tg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lai_suat_tv`
--
ALTER TABLE `lai_suat_tv`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ty_gia`
--
ALTER TABLE `ty_gia`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chu_chay_duoi`
--
ALTER TABLE `chu_chay_duoi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lai_suat_tg`
--
ALTER TABLE `lai_suat_tg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `lai_suat_tv`
--
ALTER TABLE `lai_suat_tv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ty_gia`
--
ALTER TABLE `ty_gia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
