-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 01:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-copy`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Model` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Brand` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `SKU` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `Part #` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` varchar(2000) CHARACTER SET utf8 DEFAULT NULL,
  `Picture` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Num of Items in Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Model`, `Brand`, `Category`, `SKU`, `Part #`, `Price`, `Description`, `Picture`, `Num of Items in Stock`) VALUES
(1, 'Лаптоп HP EliteBook 850 G3, i7-6500U, 15.6", 8GB, 256GB, Win 10, Y3B77EA', 'HP', 'laptops', 'R57.052', 'Y3B77EA', '2114.00', 'не е налично', 'assets/images/products/1.jpg', 58),
(2, 'Лаптоп HP EliteBook 850 G3 Notebook PC, i7-6500U, 15.6", 8GB, 256GB, Win 10, Y8Q81EA', 'HP', 'laptops', 'R57.051', 'Y8Q81EA', '2042.00', 'не е налично', 'assets/images/products/2.jpg', 101),
(3, 'Лаптоп ASUS X751SJ-TY001D, N3700, 17.3", 4GB, 1TB', 'ASUS', 'laptops', 'R55.608', 'n/a', '683.00', 'не е налично', 'assets/images/products/3.jpg', 23),
(4, 'Монитор ACER 19.5"" V206HQLAB, UM.IV6EE.A01', 'ACER', 'monitors', 'R49.303', 'UM.IV6EE.A01', '124.00', 'ACER 19.5” V206HQLAB е монитор от бюджетен клас на компанията Acer. Широкоекранният монитор предлага достатъчно пространство както за работа, така и за гледане на филми с висока резолюция. Технологията ComfyView пресъздава цветовете по-ярки и живи с намаляване на отблясъците на околната светлина.\n\nМониторът разполага с 19,5-инчов екран с разделителна способност от 1600 х 900. Поддържа контраст от 100,000,000:1 и разпознава 16,7 милиона цвята. Яркостта му е 200 cd/m², а времето му за реакция – 5ms. Ъгълът му на видимост е 90° хоризонтален и 65° - вертикален.\n\nМоделът консумира 16,20W електроенергия в нормален режим на работа, 450 mW в режим на изчакване или 350mW в деактивиран режим. Поддържа VGA интерфейс. Размерите му са 362,20 x 463,40 x 191 милиметра с поставката.\n\nACER 19.5” V206HQLAB може да се намери на българския пазар с гаранционен срок от 36 месеца.', 'assets/images/products/4.jpg', 12),
(5, 'Монитор ASUS MX27AQ, 27""', 'ASUS', 'monitors', 'R53.806', '', '864.00', 'ASUS MX27AQ е 27-инчов монитор от висок клас на компанията Asus. Моделът е перфектен избор за естетите с ултра тънкия си дизайн и почти несъществуващи странични рамки с дебелина от едва 0,1 сантиметра. С този монитор Asus спечелиха престижната награда за дизайн IF през 2015 година.\n\n27-инчовият IPS екран поддържа разделителна способност от 2560 х 1440 пиксела, обещавайки 25% по-остра картина и 77% повече екранно пространство от това на други Full HD дисплеи със същите размери. LED подсветката обещава точно възпроизвеждане на цветовете, а IPS технологията – ултра широки ъгли на гледане.\n\nМониторът впечатлява и с перфектното си озвучение: има вграден чип Bang & Olufsen Technology MobileSound 3 и поддържа технологията ASUS SonicMaster и ICEpower®. Разполага с 25-милиметрови колонки за гладък и чист звук. Поддържа и функция на име SUS AudioWizard OSD, която оптимизира звука според съдържанието било то музика, филми, игри или работа.\n\nASUS MX27AQ се продава на българския пазар с гаранционен срок от 36 месеца.', 'assets/images/products/5.jpg', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`),
  ADD UNIQUE KEY `Model_UNIQUE` (`Model`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
