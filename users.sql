-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 05:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
  `shopping_cart` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bulgarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `subscription`, `phone_number`, `address`, `place`, `postcode`, `area`, `country`, `shopping_cart`) VALUES
(22, 'Krasimir', 'Nikov', 'kznikov@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'no', 885734559, 'Lenin 48', 'Stara Zagora', 6000, '', 'България', '{"R55.069":{"realId":"93","title":"Таблет Lenovo MIIX 700-12ISK /80QL009RBM/, M7-6Y75, 12u0022u0022, 8GB, 256GB, Win 10, 80QL009RBM","id":"R55.069","quantity":2,"price":"2233.00","pic":"pic_5_1.jpg"},"R57.058":{"realId":"13","title":"Лаптоп HP EliteBook 1030 G1 Notebook PC, m7-6Y75, 13.3u0022u0022, 8GB, 512GB, Win 10, X2F04EA","id":"R57.058","quantity":"1","price":"3636.00","pic":"pic_3_1.jpg"},"R56.879":{"realId":"100","title":"Таблет LENOVO MIIX510 /80U100GWBM/, i3-6100U, 12.2u0022u0022, 4GB, 128GB, Win10, 80U100GWBM","id":"R56.879","quantity":"1","price":"1208.00","pic":"pic_4_1.jpg"},"R57.356":{"realId":"15","title":"Лаптоп HP EliteBook 820 G4 Notebook PC, i7-7500U, 12.5u0022u0022, 8GB, 256GB, Win10, Z2V79EA","id":"R57.356","quantity":"1","price":"2629.00","pic":"pic_2_1.jpg"}}'),
(23, 'Denitsa', 'Dremsizova', 'deni4ka_d@yahoo.com', '3a7306a7751a1079497609b718251c4a4d76a375f3d893280f1e50db6cbaf5a8', 'yes', 889249991, 'Lulin', 'Sofia', 1324, 'Sofia-grad', 'Bulgaria', '{"R56.396":{"realId":"66","title":"Лаптоп ACER E5-575G-73J8, i7-7500U, 15.6u0022u0022, 8GB, 1TB","id":"R56.396","quantity":"1","price":"1083.00","pic":"pic_1_1.jpg"}}'),
(24, 'Ivan', 'Ivanov', 'ivan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'no', 0, '', '', 0, '', '', '');

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
