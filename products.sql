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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Model` varchar(200) CHARACTER SET utf8 NOT NULL,
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
(1, 'Лаптоп HP EliteBook 850 G3, i7-6500U, 15.6", 8GB, 256GB, Win 10, Y3B77EA', 'HP', 'laptops', 'R57.052', 'Y3B77EA', '2114.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 58),
(2, 'Лаптоп HP EliteBook 850 G3 Notebook PC, i7-6500U, 15.6", 8GB, 256GB, Win 10, Y8Q81EA', 'HP', 'laptops', 'R57.051', 'Y8Q81EA', '2042.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 101),
(3, 'Лаптоп ASUS X751SJ-TY001D, N3700, 17.3", 4GB, 1TB', 'ASUS', 'laptops', 'R55.608', 'n/a', '683.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 23),
(4, 'Монитор ACER 19.5"" V206HQLAB, UM.IV6EE.A01', 'ACER', 'monitors', 'R49.303', 'UM.IV6EE.A01', '124.00', 'ACER 19.5” V206HQLAB е монитор от бюджетен клас на компанията Acer. Широкоекранният монитор предлага достатъчно пространство както за работа, така и за гледане на филми с висока резолюция. Технологията ComfyView пресъздава цветовете по-ярки и живи с намаляване на отблясъците на околната светлина.\n\nМониторът разполага с 19,5-инчов екран с разделителна способност от 1600 х 900. Поддържа контраст от 100,000,000:1 и разпознава 16,7 милиона цвята. Яркостта му е 200 cd/m², а времето му за реакция – 5ms. Ъгълът му на видимост е 90° хоризонтален и 65° - вертикален.\n\nМоделът консумира 16,20W електроенергия в нормален режим на работа, 450 mW в режим на изчакване или 350mW в деактивиран режим. Поддържа VGA интерфейс. Размерите му са 362,20 x 463,40 x 191 милиметра с поставката.\n\nACER 19.5” V206HQLAB може да се намери на българския пазар с гаранционен срок от 36 месеца.', 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 12),
(5, 'Монитор ASUS MX27AQ, 27""', 'ASUS', 'monitors', 'R53.806', '', '864.00', 'ASUS MX27AQ е 27-инчов монитор от висок клас на компанията Asus. Моделът е перфектен избор за естетите с ултра тънкия си дизайн и почти несъществуващи странични рамки с дебелина от едва 0,1 сантиметра. С този монитор Asus спечелиха престижната награда за дизайн IF през 2015 година.\n\n27-инчовият IPS екран поддържа разделителна способност от 2560 х 1440 пиксела, обещавайки 25% по-остра картина и 77% повече екранно пространство от това на други Full HD дисплеи със същите размери. LED подсветката обещава точно възпроизвеждане на цветовете, а IPS технологията – ултра широки ъгли на гледане.\n\nМониторът впечатлява и с перфектното си озвучение: има вграден чип Bang & Olufsen Technology MobileSound 3 и поддържа технологията ASUS SonicMaster и ICEpower®. Разполага с 25-милиметрови колонки за гладък и чист звук. Поддържа и функция на име SUS AudioWizard OSD, която оптимизира звука според съдържанието било то музика, филми, игри или работа.\n\nASUS MX27AQ се продава на българския пазар с гаранционен срок от 36 месеца.', 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 31),
(6, 'Лаптоп HP EliteBook 850 G3 Notebook PC, i5-6200U, 15.6"", 8GB, 256GB, Win 7, T9X19EA', 'HP', 'laptops', 'R57.050', 'T9X19EA', '1884.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 20),
(7, 'Лаптоп HP ZBook 15u G3, i7-6500U, 15.6"", 8GB, 1TB, Win 10, Y6J52EA', 'HP', 'laptops', 'R56.997', 'Y6J52EA', '2410.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 5),
(8, 'Лаптоп HP ZBook 15 G3 Mobile Workstation, i7-6700HQ, 15.6"", 8GB, 1TB, Win 10, Y6J56EA', 'HP', 'laptops', 'R57.057', 'Y6J56EA', '2837.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 14),
(9, 'Лаптоп HP EliteBook 1030 G1 Notebook PC, m5-6Y54, 13.3"", 8GB, 256GB, Win 10, X2F02EA', 'HP', 'laptops', 'R57.015', 'X2F02EA', '2388.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 4),
(10, 'Лаптоп HP EliteBook 1040 G3 Notebook PC, i7-6600U, 14"", 8GB, 256GB, Win10, Y8Q90EA', 'HP', 'laptops', 'R56.996', 'Y8Q90EA', '2611.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 7),
(11, 'Лаптоп HP EliteBook 1040 G3 Notebook, i5-6300U, 14.0"", 8GB, 256GB, Win10, X1C38AW', 'HP', 'laptops', 'R56.995', 'X1C38AW', '2497.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 4),
(12, 'Лаптоп HP ProBook 650 G2 Notebook PC, i5-6200U, 15.6"", 8GB, 256GB, Win 10, Y3B63EA', 'HP', 'laptops', 'R56.994', 'Y3B63EA', '1610.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 5),
(13, 'Лаптоп HP EliteBook 1030 G1 Notebook PC, m7-6Y75, 13.3"", 8GB, 512GB, Win 10, X2F04EA', 'HP', 'laptops', 'R57.058', 'X2F04EA', '3636.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 13),
(14, 'Лаптоп HP Spectre Pro x360 G2, i7-6500U, 13.3"", 8GB, 512GB, Win 10, Y3B96EA', 'HP', 'laptops', 'R57.099', 'Y3B96EA', '2874.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 2),
(15, 'Лаптоп HP EliteBook 820 G4 Notebook PC, i7-7500U, 12.5"", 8GB, 256GB, Win10, Z2V79EA', 'HP', 'laptops', 'R57.356', 'Z2V79EA', '2629.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 5),
(16, 'Лаптоп HP EliteBook 820 G4, i7-7500U, 12.5"", 8GB, 512GB, Win10, Z2V77EA', 'HP', 'laptops', 'R57.325', 'Z2V77EA', '2561.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 6),
(17, 'Лаптоп HP 250 G5 Notebook PC, i7-6500U, 15.6"", 8GB, 256GB, Win10, W4P69EA', 'HP', 'laptops', 'R57.321', 'W4P69EA', '1343.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 1),
(18, 'Лаптоп HP ProBook 450 G4 Notebook PC, i5-7200U, 15.6"", 8GB, 1TB, Y8A36EA', 'HP', 'laptops', 'R57.179', 'Y8A36EA', '1005.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 32),
(19, 'Лаптоп HP 250 G5 Notebook PC, i5-6200U, 15.6'', 4GB, 128GB, W4N44EA', 'HP', 'laptops', 'R57.116', 'W4N44EA', '905.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 14),
(20, 'Лаптоп HP 250 G5 Notebook PC, i5-6200U, 15.6"", 4GB, 500GB, W4N23EA', 'HP', 'laptops', 'R57.115', 'W4N23EA', '826.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 5),
(21, 'Лаптоп HP Spectre Pro x360 G2 Convertible PC, i5-6200U, 13.3"", 8GB, 256GB, Win 10, V1B01EA', 'HP', 'laptops', 'R57.101', 'V1B01EA', '2414.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 5),
(22, 'Лаптоп HP ProBook 430 G4, i7-7500U, 13.3"", 8GB, 256GB, Win 10, Y7Z45EA', 'HP', 'laptops', 'R57.100', 'Y7Z45EA', '1555.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 5),
(23, 'Лаптоп HP ProBook 640 G2 Notebook PC, i5-6200U, 14"", 4GB, 500GB, Win10, Y3B20EA', 'HP', 'laptops', 'R56.993', 'Y3B20EA', '1428.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 7),
(24, 'Лаптоп HP ProBook 640 G2 Notebook PC, i5-6200U, 14"", 8GB, 256GB, Win 10, X2F69EA', 'HP', 'laptops', 'R56.992', 'X2F69EA', '1614.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 8),
(25, 'Лаптоп HP EliteBook 840 G3 Notebook PC, i5-6200U, 14"", 4GB, 500GB, Win 7 Pro 64, T9X22EA', 'HP', 'laptops', 'R56.140', 'T9X22EA', '2140.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 6),
(26, 'Лаптоп HP Chromebook 11 G3, N2840, 11.6"", 4GB, 16GB, L6V37AA', 'HP', 'laptops', 'R55.972', 'L6V37AA', '414.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 8),
(27, 'Лаптоп HP 250 G5 Notebook PC, N3710, 15.6"", 4GB, 500GB, W4N33EA', 'HP', 'laptops', 'R56.094', 'W4N33EA', '493.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 24),
(28, 'Лаптоп HP ProBook 450 G3, i7-6500U, 15.6"", 8GB, 1TB, P4P03EA', 'HP', 'laptops', 'R55.940', 'P4P03EA', '1093.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 7),
(29, 'Лаптоп HP ProBook 450 G3, 3-6100U, 15.6"", 4GB, 500GB, P4P07EA', 'HP', 'laptops', 'R55.939', 'P4P07EA', '655.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 27),
(30, 'Лаптоп HP ProBook 455 G3 Notebook PC, A8-7410, 15.6"", 8GB, 1TB, Win 7 Pro 64, P5S14EA', 'HP', 'laptops', 'R55.218', 'P5S14EA', '874.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 45),
(31, 'Лаптоп HP EliteBook 840 G2, i5-5200, 14"", 8GB, 320GB, Win 7 Pro 64bit, N2R22EP', 'HP', 'laptops', 'R54.689', 'N2R22EP', '1424.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 32),
(32, 'Лаптоп HP Spectre Pro 13 G1 Notebook PC, i5-6200U, 13.3"", 8GB, 256GB, Win 10, X2F01EA', 'HP', 'laptops', 'R56.229', 'X2F01EA', '2694.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 12),
(33, 'Лаптоп HP EliteBook 1040 G3 Notebook PC, i7-6500U, 14"", 8GB, 256GB, Win7, V1A88EA', 'HP', 'laptops', 'R56.332', 'V1A88EA', '2902.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 10),
(34, 'Лаптоп HP EliteBook 1030 G1, m5-6Y54, 13.3”, 8GB, 256GB, Win10 , X2F07EA', 'HP', 'laptops', 'R56.381', 'X2F07EA', '2902.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 6),
(35, 'Лаптоп HP ProBook 650 G2 Notebook, i5-6200U, 15.6"", 8GB, 1TB, Win 10, Y3B62EA', 'HP', 'laptops', 'R56.991', 'Y3B62EA', '1566.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 20),
(36, 'Лаптоп HP ZBook Studio G3 Mobile Workstation, i7-6700HQ, 15.6"", 8GB, 256GB, Win10 Pro 64, Y6J45EA', 'HP', 'laptops', 'R56.990', 'Y6J45EA', '3406.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 9),
(37, 'Лаптоп HP ProBook 440 G4, i7-7500U, 14"", 8GB, 256GB, Win10 Pro 64, Y7Z74EA', 'HP', 'laptops', 'R56.986', 'Y7Z74EA', '1511.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 23),
(38, 'Лаптоп HP Spectre Pro x360 G2, i7-6600U, 13.3"", 8GB, 512GB, Win10 Pro 64, V1B04EA', 'HP', 'laptops', 'R56.717', 'V1B04EA', '3316.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 15),
(39, 'Лаптоп HP EliteBook 820 G1, i7-4600U, 12.5"", 4GB, 128GB, J7F73UP', 'HP', 'laptops', 'R56.665', 'J7F73UP', '1351.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 31),
(40, 'Лаптоп HP 250 G5 Notebook PC, i5-6200U, 15.6"", 4GB, 1TB, W4M39EA', 'HP', 'laptops', 'R56.625', 'W4M39EA', '839.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 3),
(41, 'Лаптоп HP Spectre Pro x360, i5-6200U, 13.3"", 8GB, 256GB, Win10, V1B05EA', 'HP', 'laptops', 'R56.414', 'V1B05EA', '2690.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 45),
(42, 'Лаптоп HP ProBook 470 G3 Notebook PC, i5-6200U, 17.3"", 8GB, 1TB, W4P93EA', 'HP', 'laptops', 'R56.415', 'W4P93EA', '1161.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 2),
(43, 'Лаптоп ASUS G752VS-GC118T, i7-6700HQ, 17.3'', 16GB, 1TB + 256GB, Win10', 'ASUS', 'laptops', 'R56.605', 'NULL', '3457.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 17),
(44, 'Лаптоп ASUS X540SA-DM290, N3700, 15.6'', 4GB, 500GB', 'ASUS', 'laptops', 'R56.467', 'NULL', '474.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 27),
(45, 'Лаптоп ASUS X540SA-XX435D, N3060, 15.6'', 4GB, 1TB, 90NB0B33-M10260', 'ASUS', 'laptops', 'R56.468', '90NB0B33-M10260', '433.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 45),
(46, 'Лаптоп ASUS X540SA-XX333D, N3710, 15.6"", 4GB, 1TB, 90NB0B31-M12680', 'ASUS', 'laptops', 'R56.469', '90NB0B31-M12680', '516.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 32),
(47, 'Лаптоп ASUS X540LA-XX538D, i3-5005U, 15.6"", 4GB, 1TB, 90NB0B01-M3880', 'ASUS', 'laptops', 'R56.470', '90NB0B01-M3880', '599.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 12),
(48, 'Лаптоп ASUS G502VT-FY068, i7-6700HQ, 15.6"", 8GB, 1TB+128GB, 90NB0AP1-M03060', 'ASUS', 'laptops', 'R56.749', '90NB0AP1-M03060', '2041.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 10),
(49, 'Лаптоп ASUS ZENBOOK3-ROYAL-PRO, i7-7500U, 12.5"", 16GB, 512GB, Win10, 90NB0CZ-M05670', 'ASUS', 'laptops', 'R56.751', '90NB0CZ-M05670', '2999.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 23),
(50, 'Лаптоп ASUS ZENBOOK3-ROSEGOLD-PRO, i7-7500U, 12.5"", 16GB, 512GB, Win10, 90NB0CZ2-M05680', 'ASUS', 'laptops', 'R56.752', '90NB0CZ2-M05680', '2999.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 15),
(51, 'Лаптоп ASUS K550VX-DM027D, i7-6700HQ, 15.6"", 16GB, 256GB, 90B0BBJ-M01950', 'ASUS', 'laptops', 'R56.606', '90B0BBJ-M01950', '1483.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 6),
(52, 'Лаптоп ASUS FX502VM-DM105T, i7-6700HQ, 15.6"", 8GB, 1TB, Win10, 90NB0DR5-M02740', 'ASUS', 'laptops', 'R56.794', '90NB0DR5-M02740', '2041.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 11),
(53, 'Лаптоп ASUS X540LJ-XX548D, i3-5005U, 15.6'', 4GB, 1TB', 'ASUS', 'laptops', 'R56.391', 'NULL', '649.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 12),
(54, 'Лаптоп ASUS K756UQ-T4021D, i5-6200U, 17.3'', 6GB, 1TB', 'ASUS', 'laptops', 'R56.405', 'NULL', '1149.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 10),
(55, 'Лаптоп ASUS K550VX-DN028D, i7-6700HQ, 15.6"", 8GB, 1TB', 'ASUS', 'laptops', 'R55.691', 'NULL', '1350.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 6),
(56, 'Лаптоп ASUS G751JY-T7450T, i7-4750HQ, 17.3"", 8GB, 2TB, Win 10', 'ASUS', 'laptops', 'R55.693', 'NULL', '2699.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 23),
(57, 'Лаптоп ASUS X540SA-XX081D, N3050, 15.6"", 4GB, 500GB', 'ASUS', 'laptops', 'R56.022', 'NULL', '391.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 15),
(58, 'Лаптоп ASUS X454LA-WX390D, i3-4005U, 14"", 4GB, 500GB', 'ASUS', 'laptops', 'R56.090', 'NULL', '483.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 31),
(59, 'Лаптоп ASUS G752VY-GC192T, i7-6700HQ, 17.3", 16GB, 128GB SSD + 1TB, Win10 + Gaming Backpack + Headset Gaming Mouse', 'ASUS', 'laptops', 'R56.025', 'NULL', '3249.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 3),
(60, 'Лаптоп ASUS N552VX-FY209D, i7-6700HQ, 15.6'', 8GB, 1TB + Carry Bag', 'ASUS', 'laptops', 'R56.362', 'NULL', '1583.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 31),
(61, 'Лаптоп ASUS UX360CA-C4011T, M 6Y30, 13.3'', 4GB, 128GB, Win10', 'ASUS', 'laptops', 'R56.154', 'NULL', '1167.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 20),
(62, 'Лаптоп ASUS X454LA-WX751D, i5-5200U, 14'', 8GB, 1TB', 'ASUS', 'laptops', 'R56.404', 'NULL', '791.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 5),
(63, 'Лаптоп ASUS UX310UQ-FC301T, i7-7500U, 13.3"", 12GB, 256GB, Win10, 90NB0CL1-M04570', 'ASUS', 'laptops', 'R56.865', '90NB0CL1-M04570', '1666.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 14),
(64, 'Лаптоп ASUS UX501VW-FY095R, i7-6700HQ, 15.6"", 8GB, 256GB, Win10, 90NB0AU2-M05340', 'ASUS', 'laptops', 'R56.866', '90NB0AU2-M05340', '2083.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 4),
(65, 'Лаптоп ACER E5-575G-79GL, i7-7500U, 15.6'', 8GB, 1TB', 'ACER', 'laptops', 'R56.395', 'NULL', '1083.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 10),
(66, 'Лаптоп ACER E5-575G-73J8, i7-7500U, 15.6"", 8GB, 1TB', 'ACER', 'laptops', 'R56.396', 'NULL', '1083.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 12),
(67, 'Лаптоп ACER ES1-732-P2YD, N4200, 17.3"", 4GB, 1TB, NX.GH4EX.002', 'ACER', 'laptops', 'R56.419', 'NX.GH4EX.002', '583.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 32),
(68, 'Лаптоп ACER ES1-332-P2F0, N4200, 13.3"", 4GB, 1TB+32GB, NX.GFZEX.005', 'ACER', 'laptops', 'R56.631', 'NX.GFZEX.005', '541.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 9),
(69, 'Лаптоп ACER ES1-332-P8B6, N4200, 13.3"", 4GB, 1TB+32GB, NX.GG0EX.001', 'ACER', 'laptops', 'R56.632', 'NX.GG0EX.001', '541.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 20),
(70, 'Лаптоп ACER ES1-132-P1Y2, N4200, 11.6"", 4GB, 500GB + 32GB, NX.GG2EX.002', 'ACER', 'laptops', 'R56.570', 'NX.GG2EX.002', '458.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 21),
(71, 'Лаптоп ACER ES1-132-P1BC, N4200, 11.6"", 4GB, 500GB + 32GB, NX.GG3EX.001', 'ACER', 'laptops', 'R56.571', 'NX.GG3EX.001', '549.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 7),
(72, 'Лаптоп ACER E5-722-41YM, A4-7210, 17.3"", 4GB, 1TB, NX.G1REX.005', 'ACER', 'laptops', 'R56.645', 'NX.G1REX.005', '500.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 5),
(73, 'Лаптоп ACER F5-771G-71ER, i7-7500U, 17.3"", 8GB, 1TB, NX.GEMEX.002', 'ACER', 'laptops', 'R56.596', 'NX.GEMEX.002', '1167.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 5),
(74, 'Лаптоп ACER F5-771G-56H1, i5-7200U, 17.3"", 8GB, 1TB, NX.GEMEX.001', 'ACER', 'laptops', 'R56.597', 'NX.GEMEX.001', '999.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 4),
(75, 'Лаптоп LENOVO Y700-17ISK /80RV005GBM/, i7-6700HQ, 17.3'', 8GB, 1TB, Win10, 80RV005GBM', 'LENOVO', 'laptops', 'R56.288', '80RV005GBM', '1666.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 45),
(76, 'Лаптоп LENOVO 310-15IAP /80TT0039BM/, N3350, 15.6"", 4GB, 1TB, 80TT0039BM', 'LENOVO', 'laptops', 'R56.711', '80TT0039BM', '466.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 2),
(77, 'Лаптоп LENOVO 310-15IAP /80TT003BBM/, N3350, 15.6"", 4GB, 1TB, 80TT003BBM', 'LENOVO', 'laptops', 'R56.712', '80TT003BBM', '466.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 17),
(78, 'Лаптоп LENOVO Y700-15ISK /80NV010DBM/, i7-6700HQ, 15.6"", 8GB, 1TB, 80NV010DBM', 'LENOVO', 'laptops', 'R56.999', '80NV010DBM', '1749.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 27),
(79, 'Лаптоп LENOVO YG910-13IKB /80VF00CPBM/, i7-7500U, 13.9"", 8GB, 512GB, Win10, 80VF00CPBM', 'LENOVO', 'laptops', 'R57.045', '80VF00CPBM', '2733.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 45),
(80, 'Лаптоп LENOVO 310-15IAP /80TT003FBM/, N4200, 15.6"", 4GB, 1TB, 80TT003FBM', 'LENOVO', 'laptops', 'R56.826', '80TT003FBM', '524.00', NULL, 'pic_3_1.jpg/pic_3_2.jpg/pic_3_3.jpg', 32),
(81, 'Лаптоп LENOVO 310-15IAP /80TT003JBM/, N4200, 15.6"", 4GB, 1TB, 80TT003JBM', 'LENOVO', 'laptops', 'R56.845', '80TT003JBM', '583.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 12),
(82, 'Лаптоп LENOVO 110-14IBR /80T6007NBM/, N3060, 14"", 4GB, 500GB, 80T6007NBM', 'LENOVO', 'laptops', 'R56.701', '80T6007NBM', '366.00', NULL, 'pic_2_1.jpg/pic_2_2.jpg/pic_2_3.jpg/pic_2_4.jpg', 10),
(83, 'Лаптоп LENOVO 100-15IBD /80QQ01DLBM/, i5-5200U, 15.6"", 8GB, 1TB, Win10, 80QQ01DLBM', 'LENOVO', 'laptops', 'R56.744', '80QQ01DLBM', '833.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 12),
(84, 'Лаптоп LENOVO 310-15IAP /80TT003DBM/, N4200, 15.6", 4GB, 1TB, 80TT003DBM', 'LENOVO', 'laptops', 'R56.743', '80TT003DBM', '524.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 17),
(85, 'Таблет ASUS ZENPAD Z300M-6A048A, MT8163, 10.1'', 2GB, 16GB', 'ASUS', 'tablets', 'R56.312', 'NULL', '291.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 123),
(86, 'Таблет LENOVO YOGA TAB3 /ZA090005BG/, Snapdragon 210, 8'', 1GB, 16GB, Android 5.1, ZA090005BG', 'LENOVO', 'tablets', 'R56.307', 'ZA090005BG', '308.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 65),
(87, 'Таблет ASUS ZENPAD Z300M-6B043A', 'ASUS', 'tablets', 'R57.358', 'NULL', '291.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 15),
(88, 'Таблет ACER ICONIA B3-A30-K8Q0, MT8163, 10.1"", 1GB, 32GB, Android 6.0, NT.LCPEE.001', 'ACER', 'tablets', 'R56.152', 'NT.LCPEE.001', '266.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 23),
(89, 'Таблет ACER ICONIA B1-780-K05K, MT8163, 7"", 1GB, 16GB, Android 6.0, NT.LCJEE.001', 'ACER', 'tablets', 'R56.153', 'NT.LCJEE.001', '166.00', NULL, 'pic_1_1.jpg/pic_1_2.jpg/pic_1_3.jpg/pic_1_4.jpg', 41),
(90, 'Таблет с клавиатура ACER ICONIA ONE 10 S1002-14CP, Z3735F, 10.1'', 2GB, 32GB +500GB HDD, Win10, NT.G53EX.010', 'ACER', 'tablets', 'R55.970', 'NT.G53EX.010', '483.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 14),
(91, 'Таблет ACER ICONIA A3-A40-N2CN, MT8163, 10.1"", 2GB, 32GB, Android, NT.LCBEE.003', 'ACER', 'tablets', 'R55.865', 'NT.LCBEE.003', '332.00', NULL, 'pic_6_1.jpg/pic_6_2.jpg/pic_6_3.jpg', 33),
(92, 'Таблет ASUS ZenPad 8.0 Z380C-1A081A, C3200, 8"", 2GB, 16GB, Android 5.0 + калъф ASUS Zen Clutch', 'ASUS', 'tablets', 'R55.650', 'NULL', '283.00', NULL, 'pic_6_1.jpg/pic_6_2.jpg/pic_6_3.jpg', 15),
(93, 'Таблет Lenovo MIIX 700-12ISK /80QL009RBM/, M7-6Y75, 12"", 8GB, 256GB, Win 10, 80QL009RBM', 'LENOVO', 'tablets', 'R55.069', '80QL009RBM', '2233.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 27),
(94, 'Таблет ASUS ZENPAD Z380M-6A030A, MT8163, 8'', 2GB, 16GB, Android 5.0', 'ASUS', 'tablets', 'R56.361', 'NULL', '233.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 40),
(95, 'Таблет ASUS ZenPad 10 Z300CNL-6A035A', 'ASUS', 'tablets', 'R56.864', 'NULL', '43.00', NULL, 'pic_6_1.jpg/pic_6_2.jpg/pic_6_3.jpg', 12),
(96, 'Таблет ASUS ZENPAD Z300M-6L030A, MT8163, 10.1"", 2GB, 16GB, Android 6.0, 90NP00C3-M01420', 'ASUS', 'tablets', 'R57.279', '90NP00C3-M01420', '291.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 10),
(97, 'Таблет ASUS ZENPAD Z380M-6B020A, MT8163, 8"", 2GB, 16GB, Android 5.0, 90NP00A2-M00690', 'ASUS', 'tablets', 'R57.178', '90NP00A2-M00690', '233.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 25),
(98, 'Таблет HP Elite x2 1012 G1, m5-6Y57, 12"", 8GB, 256GB, Win 10 с клавиатура, T8Y92AW', 'HP', 'tablets', 'R57.048', 'T8Y92AW', '2881.00', NULL, 'pic_6_1.jpg/pic_6_2.jpg/pic_6_3.jpg', 30),
(99, 'Таблет LENOVO MIIX310-10 /80SG00EFBM/, x5-Z8350, 10.1"", 4GB, 64GB, Win10, 80SG00EFBM', 'LENOVO', 'tablets', 'R56.878', '80SG00EFBM', '474.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 5),
(100, 'Таблет LENOVO MIIX510 /80U100GWBM/, i3-6100U, 12.2"", 4GB, 128GB, Win10, 80U100GWBM', 'LENOVO', 'tablets', 'R56.879', '80U100GWBM', '1208.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 30),
(101, 'Таблет LENOVO MIIX310-10 /80SG00EEBM/, x5-Z8350, 10.1"", 4GB, 32GB, Win10, 80SG00EEBM', 'LENOVO', 'tablets', 'R56.877', '80SG00EEBM', '441.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 3),
(102, 'Таблет ASUS ZENPAD Z380KNL-6B020A, MSM8916, 8"", 2GB, 16GB, Android 5.0, 90NP0247-M03860', 'ASUS', 'tablets', 'R56.898', '90NP0247-M03860', '332.00', NULL, 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 16),
(103, 'Таблет ASUS ZENPAD Z380KNL-6A022A, 90NP0246-M02840', 'ASUS', 'tablets', 'R56.897', '90NP0246-M02840', '332.00', NULL, 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 20),
(104, 'Таблет ASUS MEMOPAD HD7 ME173X-1A089A, 7"", 1GB, 16GB, White', 'ASUS', 'tablets', 'R50.350', 'NULL', '166.00', 'ASUS MEMOPAD HD7 е таблет от бюджетен клас на компанията Asus. Стилен и лек, таблетът е идеалното решение за потребители, които имат нужда да сърфират в интернет или да се развличат в движение. За това им спомага и батерията на устройството, която гарантира живот до десет часа.\n\nТаблетът има 7-инчов WXGA IPS екран с LED подсветка и разделителна способност от 1280 х 800. Използва четириядрен процесор на Intel с честота 1.2GHz и разполага с 1GB памет. Налице са също 16GB EMMC(P) сторидж.\n\nМобилното устройство разполага със задна 5-мегапикселова камера и предна 1,2-мегапикселова камера. Опциите му за свързване включват Bluetooth V4.0 и WLAN802.11 b/g/n.\nТаблетът разполага с Micro USB, два висококачествени стерео говорителя, аудио жак, microSD четец за карти, който поддържа до 32GB допълнителен сторидж, както и с вградени G-сензор, E-Compass и други. Моделът разполага с литиево-полимерна батерия с капацитет от 15Wh, обещаваща до десет часа живот. Устройството тежи 302 грама и има размери 196,8 х 120,6 х 10,8 милиметра.\n\nASUS MEMOPAD HD7 се продава и на българския пазар с гаранционен срок от 24 месеца и с операционна система Android 4.2. ', 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 12),
(105, 'Таблет ASUS TX300CA-C4023H, i5-3317U, 13.3"", 4GB, 500GB, Win 8, Чанта', 'ASUS', 'tablets', 'R48.946', 'NULL', '1293.00', 'ASUS TX300CA-C4023H e хибриден таблет от висок клас на компанията Asus. Моделът е перфектен за потребителите, които се двоумят между лаптоп или таблет, защото може да функционира и като двете. Освен практичност и портативност, таблетът предлага изключителен звук гарантиран от технологията ASUS SonicMaster с Bang & Olufsen ICEpower®.\n\nТаблетът разполага с 13,3-инчов IPS FHD гланцов тъчскрийн екран със съотношение на страните от 16:9. Лаптопът използва процесора Intel i5-3317U от серията Intel Core i5 с работна честота от 1.7GHz и 3МВ Cache. Разполага с 4GB DDR3 вградена SDRAM памет със скорост от 1600MHz  и 500GB + 128GB MSSD сторидж.\n\nХибридното устройство има на разположение два USB 3.0 порта, micro HDMI, комбиниран аудио жак, HD уеб камера, четец за Micro SD карти и втори четец за SD/MMC карти в докинг станцията. Използва вградената видео карта Intel HD Graphics 4000.\n\nТаблетът се свързва с интернет посредством вграден 802.11 b/g/n  и LAN (само в докинг станцията). Поддържа също Bluetooth 4.0 и разполага с вградени говорители и микрофон с поддръжка на MaxxAudio и ASUS SonicMaster аудио с Bang & Olufsen ICEpower.\n\nASUS TX300CA-C4023H е с размери 340 х 213 х 4 ~11 милиметра, а теглото му е 0,95 килограма. Размерите на дока са 340 х 219 х 3 ~12.9 милиметра, а теглото му е 0,95 килограма. Двуклетъчната полимерна батерия на таблета е с капацитет от 5000mAh. В дока има допълнителна двуклетъчна батерия с капацитет от 3120mAh. Устройството може да се намери на българския пазар с операционна система Windows 8 64-bit и с гаранционен срок от 24 месеца. Гаранционният срок на батерията е 12 месеца. Към продукта всеки купувач получава и подарък – чанта.\n', 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 6),
(106, 'Таблет ASUS T100TAM-DK013B, Z3775, 10.1"", 2GB, 32GB, Win 8.1', 'ASUS', 'tablets', 'R52.690', 'NULL', '660.00', 'ASUS T100TAM-DK013B е хибриден таблет на компанията Asus. Моделът е идеалното решение за потребителите, които се чудят дали да си купят таблет или лаптоп, защото комбинира в себе си и двете устройства. Сравнително евтиният модел е перфектен за хора, които често пътуват и не могат да носят със себе си тежък мобилен компютър.\n\nТаблетът има голям 10,1-инчов TOUCH WideView IPS гланцов екран, който е нито твърде голям (за да е твърде скъп и тежък), нито твърде малък (за да не ни позволява да четем текст удобно). Разделителна му способност е 1366 х 768. Устройството използва четириядрения процесор Intel Atom BayTrail-T Z3775, чиято честота започва от 1.46GHz и достига 2.39GHz. Кешът му е 2МВ. Таблетът, също така, има на разположение 2GB LPDDR3 1067 памет.\n\nХибридното използва предлага вграден eMMC капацитет от 32GB плюс допълнителни 500 GB 5400R SATA в клавиатурата. Разполага с видео карта от серията HD Graphics Gen7 (BayTrail). Налице са microSD слот, MicroUSB, MicroHDMI, аудио жак, качествени стерео говорители и вградени сензори, сред които G-sensor, eКомпас, жироскоп и други. Има 1,2-мегапикселова предна камера.\n\nОпциите му за свързване включват DualBand WiFI. Двуклетъчната му литиево-йонна полимерна батерия е с капацитет от 8060mAh. Клавиатурата му е снабдена с USB 3.0 и тъчпад, какъвто очакваме от всеки лаптоп.\n\nASUS T100TAM-DK013B тежи 523 грама без клавиатурата или 1031 грама с нея, а размерите му са 263 х 171 х 10,5 милиметра (само таблета) или 263 х 171 х 10 милиметра (таблетът плюс клавиатурата). Продава се с операционна система Windows 8.1 с Bing и с гаранционен срок от 24 месеца. Към покупката на таблета всеки потребител получава и едногодишен абонамент за облака Office 365 Personal.\n', 'pic_6_1.jpg/pic_6_2.jpg/pic_6_3.jpg', 14),
(107, 'Таблет ASUS MeMO Pad 8 (ME581C-1B017A), Z3560, 8"", 2GB, 16GB, Android 4.4, White', 'ASUS', 'tablets', 'R52.736', 'NULL', '416.00', 'ASUS MeMO Pad 8 (ME581C-1B017A), Z3560 е таблет на компанията Asus. Таблетът предлага добър комплект от характеристики като мощен процесор, издръжлива батерия, стилен дизайн и две камери, с които да запечатвате важните моменти от всекидневието си.\n\nТаблетът има 8-инчов IPS поддържащ десетпръстов мултитъч екран с LED подсветка и разделителна способност от 1920 х 1200. Използва четириядрения процесор Intel Z3560 с честота 1.83GHz и разполага с 2GB DDR3L памет. Налице са също 16GB сторидж и допълнителни 16GB в уеб услугата ASUS Webstorage, който е валиден в продължение на една година.\n\nТаблетът разполага с Micro USB със SlimPort, MicroSIM порт, два висококачествени говорителя (поддържащи технологията SonicMaster), жак за слушалки, microSD (SDXC) порт, който поддържа до 64GB допълнителен сторидж, както и с вградени G-сензор, жироскоп, сензор за светлина, E-Compass и други.\n\nМобилното устройство разполага със задна 5-мегапикселова камера с автофокус и поддръжка на 720р видео и с предна 1,2-мегапикселова камера. Опциите му за свързване включват Bluetooth V4.0 и WLAN802.11 ac/b/g/n. Поддържа също и Miracast.\n\nТаблетът разполага с литиево-полимерна батерия с капацитет от 15Wh, обещаваща до девет часа живот. Устройството тежи 290 грама и има размери 123 х 213 х 7,45 милиметра.\n\nASUS MeMO Pad 8 (ME581C-1B017A), Z3560 се предлага в бял цвят с гаранционен срок от 24 месеца и с операционна система Android 4.4. ', 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 17),
(108, 'Таблет ASUS MeMO Pad 7 (ME572C-1A028A), Z3560, 7"", 2GB, 16GB, Android 4.4, Gold', 'ASUS', 'tablets', 'R52.813', 'NULL', '308.00', 'ASUS MeMO Pad 7 (ME572C-1A028A) е таблет на компанията Asus. Таблетът успява да комбинира достъпната си цена с пакет от добри характеристики, сред които интуитивен интерфейс ZenUI, добър процесор, стилен дизайн и възможност за екипиране с разширяващи функциите му аксесоари.\n\nТаблетът има 7-инчов IPS поддържащ десетпръстов мултитъч екран с LED подсветка и разделителна способност от 1920 х 1200. Използва четириядрения процесор Intel Atom Z3560 с честота 1.83GHz и разполага с 2GB DDR3L памет. Налице са също 16GB сторидж. Използва видео карта IMG PowerVR Series 6 - G6430.\n\nМобилното устройство разполага със задна 5-мегапикселова камера с автофокус и поддръжка на 720р видео и с предна 2-мегапикселова камера. Опциите му за свързване включват Bluetooth V4.0 и 802.11 b/g/n.\n\nТаблетът разполага с Micro USB, два висококачествени стерео говорителя (поддържащи технологията SonicMaster), жак за слушалки, изход за микрофон, microSD четец за карти, който поддържа до 64GB допълнителен SDXC сторидж, както и с вградени G-сензор, сензор за светлина, E-Compass и други. Налице е също поддръжка на GPS & GLONASS.\n\nТаблетът разполага с литиево-полимерна батерия с капацитет от 15Wh, обещаваща до единайсет часа живот. Устройството тежи 269 грама и има размери 114,3 х 200 х 8,3 милиметра.\n\nASUS MeMO Pad 7 (ME572C-1A028A) се продава и на българския пазар с гаранционен срок от 24 месеца и с операционна система Android 4.4. ', 'pic_5_1.jpg/pic_5_2.jpg/pic_5_3.jpg', 20),
(109, 'Таблет ASUS Fonepad 8 FE380CG - DualSIM Black, Z3530, 8"", 1GB, 16GB, Android 4.3', 'ASUS', 'tablets', 'R52.909', 'NULL', '416.00', 'ASUS Fonepad 8 FE380CG е таблет компанията Asus. Двусимовият таблет позволява невероятни възможности за свързване, а стилният му дизайн с тънки рамки поставя акцент върху качествения екран. Като добавим и мощния процесор получаваме комплект от страхотни характеристики на изненадващо ниска цена.\n\nТаблетът има 8-инчов IPS екран с LED подсветка и разделителна способност от 1280 х 800. Поддържа десетпръстов мултитъч и има специално покритие устойчиво на замърсяване с пръстови отпечатъци. Използва четириядрения процесор  Z3530 на Intel с честота 1.3GHz и разполага с 1GB памет. Налице са също 16GB сторидж плюс 5GB доживотен сторидж в услугата ASUS Webstorage Space и допълнителни 11GB през първата година.\n\nМобилното устройство разполага със задна 5-мегапикселова камера екипирана с автофокус и предна 1,2-мегапикселова камера. Опциите му за свързване включват Bluetooth V4.0 и 802.11 b/g/n, като поддържа също и GPS. Използва видео картата SGX544MP2 със скорост 400MHz.\n\nТаблетът разполага с Micro USB, преден говорител с поддръжка на SonicMaster, комбиниран аудио жак, microSD четец за карти, който поддържа до 64GB допълнителен сторидж, слот за две Micro SIM карти, както и с вградени G-сензор, E-Compass и други. Моделът разполага с литиево-полимерна батерия с капацитет от 3950mAh, обещаваща до 12 часа живот. Устройството тежи 310 грама и има размери 120 х 214 х 8,9 милиметра.\n\nASUS Fonepad 8 FE380CG се продава и на българския пазар в черен цвят с гаранционен срок от 24 месеца и с операционна система Android 4.3. ', 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 30),
(110, 'Таблет ASUS Eee Pad Transformer TF101G-1B172A, Tegra 2, 10.1"", 1GB, 16GB, Android 3.2 Refurbished', 'ASUS', 'tablets', 'R45.445', 'NULL', '208.00', 'Таблетът ASUS Eee Pad Transformer TF101G-1B172A притежава двуядрен процесор NVIDIA Tegra 2. Ядрата му работят с тактова честота 1 GHz. Операционната система, с която устройството работи е Android 3.2 Honeycomb. Тя може да се обнови до по-новата версия от Google – Android 4.0 Ice Cream Sandwich, поддържаща Adobe Flash версия 10.2. Мястото за съхранение на данни е с капацитет от 16 GB EMMC формат, а оперативната памет на таблета е 1 GB.\n\nДисплеят на ASUS Eee Pad Transformer TF101G-1B172A е 10.1” с IPS матрица и зрителен ъгъл от 178 градуса, който прави цветовете наситени и много контрастни. Разделителната способност тук е 1280 х 800 пиксела, благодарение на която изображенията са детайлни и ясни. В дисплея има добавена LED подсветка, с помощта на която се намалява консумацията на електроенергия. Стъклото, което покрива дисплея е устойчиво на удари и драскотини. То притежава и 10-точков мултитъч, с който лесно може да подавате команди. Устройството има две камери. Основната се намира в задната му част и е 5 MP, като снимките или видеото, които заснема са висококачествени. Предната камера, с която е оборудван таблетът е 1.2 MP. С нея главно може да се провеждат видео разговори в социалните приложения. Озвучението се състои от два вградени високоговорителя и микрофон принадлежащи към SRS Premium Sound система. SRS не е Dolby матричен съраунд декодер, но работи с нормални стерео записи. Високоговорителите пресъздават звука силно и ясно.\n\nУстройството има слот за четец на SIM карта. По периферията му са налични цифров microHDMI видео изход, microSD карта, чрез която може да се увеличи мястото за съхранение на информация с до 32 GB и 3.5 милиметров аудио жак за слушалки и микрофон. По данни на компанията, батерията е Li-Polymer и издържа до 8.5 часа в режим на работа и до 14.5 часа, когато към нея е свързан докинг кънектор. С нея теглото на таблета е 695 грама.\n', 'pic_4_1.jpg/pic_4_2.jpg/pic_4_3.jpg/pic_4_4.jpg', 9);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
