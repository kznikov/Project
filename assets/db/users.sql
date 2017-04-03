-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  3 апр 2017 в 07:37
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subscription` varchar(3) COLLATE cp1251_bulgarian_ci NOT NULL,
  `phone_number` int(20) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(10) NOT NULL,
  `area` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shopping_cart` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bulgarian_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `subscription`, `phone_number`, `address`, `place`, `postcode`, `area`, `country`, `shopping_cart`) VALUES
(22, 'Krasimir', 'Nikov', 'kznikov@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'no', 885734559, 'Lenin 48', 'Stara Zagora', 6000, '', 'България', '{\"R55.865\":{\"realId\":\"91\",\"title\":\"Таблет ACER ICONIA A3-A40-N2CN, MT8163, 10.1u0022u0022, 2GB, 32GB, Android, NT.LCBEE.003\",\"id\":\"R55.865\",\"quantity\":\"1\",\"price\":\"332.00\",\"pic\":\"pic_6_1.jpg\"},\"R57.058\":{\"realId\":\"13\",\"title\":\"Лаптоп HP EliteBook 1030 G1 Notebook PC, m7-6Y75, 13.3u0022u0022, 8GB, 512GB, Win 10, X2F04EA\",\"id\":\"R57.058\",\"quantity\":\"1\",\"price\":\"3636.00\",\"pic\":\"pic_3_1.jpg\"}}'),
(23, 'Denitsa', 'Dremsizova', 'deni4ka_d@yahoo.com', '3a7306a7751a1079497609b718251c4a4d76a375f3d893280f1e50db6cbaf5a8', 'yes', 889249991, 'Lulin', 'Sofia', 1324, 'Sofia-grad', 'Bulgaria', ''),
(24, 'Ivan', 'Ivanov', 'ivan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'no', 0, '', '', 0, '', '', '{\"R55.865\":{\"realId\":\"91\",\"title\":\"Таблет ACER ICONIA A3-A40-N2CN, MT8163, 10.1u0022u0022, 2GB, 32GB, Android, NT.LCBEE.003\",\"id\":\"R55.865\",\"quantity\":\"1\",\"price\":\"332.00\",\"pic\":\"pic_6_1.jpg\"}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
