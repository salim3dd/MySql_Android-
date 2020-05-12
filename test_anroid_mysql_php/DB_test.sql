-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12 مايو 2020 الساعة 10:07
-- إصدار الخادم: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u426621598_test`
--

-- --------------------------------------------------------

--
-- بنية الجدول `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `UserKey` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RegDate` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avatar` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `Users`
--

INSERT INTO `Users` (`id`, `UserKey`, `UserName`, `Password`, `Email`, `RegDate`, `Avatar`) VALUES
(41, 'Uimcsx2020051208211589257272', 'flower', '202cb962ac59075b964b07152d234b70', 'mm@mm.com', '2020/05/12 - 08:21 am', 'Uimcsx2020051208211589257272.jpg'),
(60, 'Ubuxzy2020051209211589260915', 'lion4', '202cb962ac59075b964b07152d234b70', 'ddd@ggmm', '2020/05/12 - 09:21 am', 'Ubuxzy2020051209211589260915.jpg'),
(63, 'Ugvlor2020051210491589266199', 'Lion', '202cb962ac59075b964b07152d234b70', 'lion@gmail.com', '2020/05/12 - 10:49 am', 'Ugvlor2020051210491589266199.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
