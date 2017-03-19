-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 09:58 AM
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
(1, 'Лаптоп HP EliteBook 850 G3, i7-6500U, 15.6", 8GB, 256GB, Win 10, Y3B77EA', 'HP', 'laptops', 'R57.052', 'Y3B77EA', '2114.00', NULL, 'assets/images/products/1.jpg', 58),
(2, 'Лаптоп HP EliteBook 850 G3 Notebook PC, i7-6500U, 15.6", 8GB, 256GB, Win 10, Y8Q81EA', 'HP', 'laptops', 'R57.051', 'Y8Q81EA', '2042.00', NULL, 'assets/images/products/2.jpg', 101),
(3, 'Лаптоп ASUS X751SJ-TY001D, N3700, 17.3", 4GB, 1TB', 'ASUS', 'laptops', 'R55.608', 'n/a', '683.00', NULL, 'assets/images/products/3.jpg', 23),
(4, 'Монитор ACER 19.5"" V206HQLAB, UM.IV6EE.A01', 'ACER', 'monitors', 'R49.303', 'UM.IV6EE.A01', '124.00', 'ACER 19.5” V206HQLAB е монитор от бюджетен клас на компанията Acer. Широкоекранният монитор предлага достатъчно пространство както за работа, така и за гледане на филми с висока резолюция. Технологията ComfyView пресъздава цветовете по-ярки и живи с намаляване на отблясъците на околната светлина.\n\nМониторът разполага с 19,5-инчов екран с разделителна способност от 1600 х 900. Поддържа контраст от 100,000,000:1 и разпознава 16,7 милиона цвята. Яркостта му е 200 cd/m², а времето му за реакция – 5ms. Ъгълът му на видимост е 90° хоризонтален и 65° - вертикален.\n\nМоделът консумира 16,20W електроенергия в нормален режим на работа, 450 mW в режим на изчакване или 350mW в деактивиран режим. Поддържа VGA интерфейс. Размерите му са 362,20 x 463,40 x 191 милиметра с поставката.\n\nACER 19.5” V206HQLAB може да се намери на българския пазар с гаранционен срок от 36 месеца.', 'assets/images/products/4.jpg', 12),
(5, 'Монитор ASUS MX27AQ, 27""', 'ASUS', 'monitors', 'R53.806', '', '864.00', 'ASUS MX27AQ е 27-инчов монитор от висок клас на компанията Asus. Моделът е перфектен избор за естетите с ултра тънкия си дизайн и почти несъществуващи странични рамки с дебелина от едва 0,1 сантиметра. С този монитор Asus спечелиха престижната награда за дизайн IF през 2015 година.\n\n27-инчовият IPS екран поддържа разделителна способност от 2560 х 1440 пиксела, обещавайки 25% по-остра картина и 77% повече екранно пространство от това на други Full HD дисплеи със същите размери. LED подсветката обещава точно възпроизвеждане на цветовете, а IPS технологията – ултра широки ъгли на гледане.\n\nМониторът впечатлява и с перфектното си озвучение: има вграден чип Bang & Olufsen Technology MobileSound 3 и поддържа технологията ASUS SonicMaster и ICEpower®. Разполага с 25-милиметрови колонки за гладък и чист звук. Поддържа и функция на име SUS AudioWizard OSD, която оптимизира звука според съдържанието било то музика, филми, игри или работа.\n\nASUS MX27AQ се продава на българския пазар с гаранционен срок от 36 месеца.', 'assets/images/products/5.jpg', 31),
(6, 'Лаптоп HP EliteBook 850 G3 Notebook PC, i5-6200U, 15.6"", 8GB, 256GB, Win 7, T9X19EA', 'HP', 'Laptops', 'R57.050', 'T9X19EA', '1884.00', NULL, 'assets/images/products/6.jpg', 20),
(7, 'Лаптоп HP ZBook 15u G3, i7-6500U, 15.6"", 8GB, 1TB, Win 10, Y6J52EA', 'HP', 'Laptops', 'R56.997', 'Y6J52EA', '2410.00', NULL, 'assets/images/products/7.jpg', 5),
(8, 'Лаптоп HP ZBook 15 G3 Mobile Workstation, i7-6700HQ, 15.6"", 8GB, 1TB, Win 10, Y6J56EA', 'HP', 'Laptops', 'R57.057', 'Y6J56EA', '2837.00', NULL, 'assets/images/products/8.jpg', 14),
(9, 'Лаптоп HP EliteBook 1030 G1 Notebook PC, m5-6Y54, 13.3"", 8GB, 256GB, Win 10, X2F02EA', 'HP', 'Laptops', 'R57.015', 'X2F02EA', '2388.00', NULL, 'assets/images/products/9.jpg', 4),
(10, 'Лаптоп HP EliteBook 1040 G3 Notebook PC, i7-6600U, 14"", 8GB, 256GB, Win10, Y8Q90EA', 'HP', 'Laptops', 'R56.996', 'Y8Q90EA', '2611.00', NULL, 'assets/images/products/10.jpg', 7),
(11, 'Лаптоп HP EliteBook 1040 G3 Notebook, i5-6300U, 14.0"", 8GB, 256GB, Win10, X1C38AW', 'HP', 'Laptops', 'R56.995', 'X1C38AW', '2497.00', NULL, 'assets/images/products/11.jpg', 4),
(12, 'Лаптоп HP ProBook 650 G2 Notebook PC, i5-6200U, 15.6"", 8GB, 256GB, Win 10, Y3B63EA', 'HP', 'Laptops', 'R56.994', 'Y3B63EA', '1610.00', NULL, 'assets/images/products/12.jpg', 5),
(13, 'Лаптоп HP EliteBook 1030 G1 Notebook PC, m7-6Y75, 13.3"", 8GB, 512GB, Win 10, X2F04EA', 'HP', 'Laptops', 'R57.058', 'X2F04EA', '3636.00', NULL, 'assets/images/products/13.jpg', 13),
(14, 'Лаптоп HP Spectre Pro x360 G2, i7-6500U, 13.3"", 8GB, 512GB, Win 10, Y3B96EA', 'HP', 'Laptops', 'R57.099', 'Y3B96EA', '2874.00', NULL, 'assets/images/products/14.jpg', 2),
(15, 'Лаптоп HP EliteBook 820 G4 Notebook PC, i7-7500U, 12.5"", 8GB, 256GB, Win10, Z2V79EA', 'HP', 'Laptops', 'R57.356', 'Z2V79EA', '2629.00', NULL, 'assets/images/products/15.jpg', 5),
(16, 'Лаптоп HP EliteBook 820 G4, i7-7500U, 12.5"", 8GB, 512GB, Win10, Z2V77EA', 'HP', 'Laptops', 'R57.325', 'Z2V77EA', '2561.00', NULL, 'assets/images/products/16.jpg', 6),
(17, 'Лаптоп HP 250 G5 Notebook PC, i7-6500U, 15.6"", 8GB, 256GB, Win10, W4P69EA', 'HP', 'Laptops', 'R57.321', 'W4P69EA', '1343.00', NULL, 'assets/images/products/17.jpg', 1),
(18, 'Лаптоп HP ProBook 450 G4 Notebook PC, i5-7200U, 15.6"", 8GB, 1TB, Y8A36EA', 'HP', 'Laptops', 'R57.179', 'Y8A36EA', '1005.00', NULL, 'assets/images/products/18.jpg', 32),
(19, 'Лаптоп HP 250 G5 Notebook PC, i5-6200U, 15.6'', 4GB, 128GB, W4N44EA', 'HP', 'Laptops', 'R57.116', 'W4N44EA', '905.00', NULL, 'assets/images/products/19.jpg', 14),
(20, 'Лаптоп HP 250 G5 Notebook PC, i5-6200U, 15.6"", 4GB, 500GB, W4N23EA', 'HP', 'Laptops', 'R57.115', 'W4N23EA', '826.00', NULL, 'assets/images/products/20.jpg', 5),
(21, 'Лаптоп HP Spectre Pro x360 G2 Convertible PC, i5-6200U, 13.3"", 8GB, 256GB, Win 10, V1B01EA', 'HP', 'Laptops', 'R57.101', 'V1B01EA', '2414.00', NULL, 'assets/images/products/21.jpg', 5),
(22, 'Лаптоп HP ProBook 430 G4, i7-7500U, 13.3"", 8GB, 256GB, Win 10, Y7Z45EA', 'HP', 'Laptops', 'R57.100', 'Y7Z45EA', '1555.00', NULL, 'assets/images/products/22.jpg', 5),
(23, 'Лаптоп HP ProBook 640 G2 Notebook PC, i5-6200U, 14"", 4GB, 500GB, Win10, Y3B20EA', 'HP', 'Laptops', 'R56.993', 'Y3B20EA', '1428.00', NULL, 'assets/images/products/23.jpg', 7),
(24, 'Лаптоп HP ProBook 640 G2 Notebook PC, i5-6200U, 14"", 8GB, 256GB, Win 10, X2F69EA', 'HP', 'Laptops', 'R56.992', 'X2F69EA', '1614.00', NULL, 'assets/images/products/24.jpg', 8),
(25, 'Лаптоп HP EliteBook 840 G3 Notebook PC, i5-6200U, 14"", 4GB, 500GB, Win 7 Pro 64, T9X22EA', 'HP', 'Laptops', 'R56.140', 'T9X22EA', '2140.00', NULL, 'assets/images/products/25.jpg', 6),
(26, 'Лаптоп HP Chromebook 11 G3, N2840, 11.6"", 4GB, 16GB, L6V37AA', 'HP', 'Laptops', 'R55.972', 'L6V37AA', '414.00', NULL, 'assets/images/products/26.jpg', 8),
(27, 'Лаптоп HP 250 G5 Notebook PC, N3710, 15.6"", 4GB, 500GB, W4N33EA', 'HP', 'Laptops', 'R56.094', 'W4N33EA', '493.00', NULL, 'assets/images/products/27.jpg', 24),
(28, 'Лаптоп HP ProBook 450 G3, i7-6500U, 15.6"", 8GB, 1TB, P4P03EA', 'HP', 'Laptops', 'R55.940', 'P4P03EA', '1093.00', NULL, 'assets/images/products/28.jpg', 7),
(29, 'Лаптоп HP ProBook 450 G3, 3-6100U, 15.6"", 4GB, 500GB, P4P07EA', 'HP', 'Laptops', 'R55.939', 'P4P07EA', '655.00', NULL, 'assets/images/products/29.jpg', 27),
(30, 'Лаптоп HP ProBook 455 G3 Notebook PC, A8-7410, 15.6"", 8GB, 1TB, Win 7 Pro 64, P5S14EA', 'HP', 'Laptops', 'R55.218', 'P5S14EA', '874.00', NULL, 'assets/images/products/30.jpg', 45),
(31, 'Лаптоп HP EliteBook 840 G2, i5-5200, 14"", 8GB, 320GB, Win 7 Pro 64bit, N2R22EP', 'HP', 'Laptops', 'R54.689', 'N2R22EP', '1424.00', NULL, 'assets/images/products/31.jpg', 32),
(32, 'Лаптоп HP Spectre Pro 13 G1 Notebook PC, i5-6200U, 13.3"", 8GB, 256GB, Win 10, X2F01EA', 'HP', 'Laptops', 'R56.229', 'X2F01EA', '2694.00', NULL, 'assets/images/products/32.jpg', 12),
(33, 'Лаптоп HP EliteBook 1040 G3 Notebook PC, i7-6500U, 14"", 8GB, 256GB, Win7, V1A88EA', 'HP', 'Laptops', 'R56.332', 'V1A88EA', '2902.00', NULL, 'assets/images/products/33.jpg', 10),
(34, 'Лаптоп HP EliteBook 1030 G1, m5-6Y54, 13.3”, 8GB, 256GB, Win10 , X2F07EA', 'HP', 'Laptops', 'R56.381', 'X2F07EA', '2902.00', NULL, 'assets/images/products/34.jpg', 6),
(35, 'Лаптоп HP ProBook 650 G2 Notebook, i5-6200U, 15.6"", 8GB, 1TB, Win 10, Y3B62EA', 'HP', 'Laptops', 'R56.991', 'Y3B62EA', '1566.00', NULL, 'assets/images/products/35.jpg', 20),
(36, 'Лаптоп HP ZBook Studio G3 Mobile Workstation, i7-6700HQ, 15.6"", 8GB, 256GB, Win10 Pro 64, Y6J45EA', 'HP', 'Laptops', 'R56.990', 'Y6J45EA', '3406.00', NULL, 'assets/images/products/36.jpg', 9),
(37, 'Лаптоп HP ProBook 440 G4, i7-7500U, 14"", 8GB, 256GB, Win10 Pro 64, Y7Z74EA', 'HP', 'Laptops', 'R56.986', 'Y7Z74EA', '1511.00', NULL, 'assets/images/products/37.jpg', 23),
(38, 'Лаптоп HP Spectre Pro x360 G2, i7-6600U, 13.3"", 8GB, 512GB, Win10 Pro 64, V1B04EA', 'HP', 'Laptops', 'R56.717', 'V1B04EA', '3316.00', NULL, 'assets/images/products/38.jpg', 15),
(39, 'Лаптоп HP EliteBook 820 G1, i7-4600U, 12.5"", 4GB, 128GB, J7F73UP', 'HP', 'Laptops', 'R56.665', 'J7F73UP', '1351.00', NULL, 'assets/images/products/39.jpg', 31),
(40, 'Лаптоп HP 250 G5 Notebook PC, i5-6200U, 15.6"", 4GB, 1TB, W4M39EA', 'HP', 'Laptops', 'R56.625', 'W4M39EA', '839.00', NULL, 'assets/images/products/40.jpg', 3),
(41, 'Лаптоп HP Spectre Pro x360, i5-6200U, 13.3"", 8GB, 256GB, Win10, V1B05EA', 'HP', 'Laptops', 'R56.414', 'V1B05EA', '2690.00', NULL, 'assets/images/products/41.jpg', 45),
(42, 'Лаптоп HP ProBook 470 G3 Notebook PC, i5-6200U, 17.3"", 8GB, 1TB, W4P93EA', 'HP', 'Laptops', 'R56.415', 'W4P93EA', '1161.00', NULL, 'assets/images/products/42.jpg', 2),
(43, 'Лаптоп ASUS G752VS-GC118T, i7-6700HQ, 17.3'', 16GB, 1TB + 256GB, Win10', 'ASUS', 'Laptops', 'R56.605', 'NULL', '3457.00', NULL, 'assets/images/products/43.jpg', 17),
(44, 'Лаптоп ASUS X540SA-DM290, N3700, 15.6'', 4GB, 500GB', 'ASUS', 'Laptops', 'R56.467', 'NULL', '474.00', NULL, 'assets/images/products/44.jpg', 27),
(45, 'Лаптоп ASUS X540SA-XX435D, N3060, 15.6'', 4GB, 1TB, 90NB0B33-M10260', 'ASUS', 'Laptops', 'R56.468', '90NB0B33-M10260', '433.00', NULL, 'assets/images/products/45.jpg', 45),
(46, 'Лаптоп ASUS X540SA-XX333D, N3710, 15.6"", 4GB, 1TB, 90NB0B31-M12680', 'ASUS', 'Laptops', 'R56.469', '90NB0B31-M12680', '516.00', NULL, 'assets/images/products/46.jpg', 32),
(47, 'Лаптоп ASUS X540LA-XX538D, i3-5005U, 15.6"", 4GB, 1TB, 90NB0B01-M3880', 'ASUS', 'Laptops', 'R56.470', '90NB0B01-M3880', '599.00', NULL, 'assets/images/products/47.jpg', 12),
(48, 'Лаптоп ASUS G502VT-FY068, i7-6700HQ, 15.6"", 8GB, 1TB+128GB, 90NB0AP1-M03060', 'ASUS', 'Laptops', 'R56.749', '90NB0AP1-M03060', '2041.00', NULL, 'assets/images/products/48.jpg', 10),
(49, 'Лаптоп ASUS ZENBOOK3-ROYAL-PRO, i7-7500U, 12.5"", 16GB, 512GB, Win10, 90NB0CZ-M05670', 'ASUS', 'Laptops', 'R56.751', '90NB0CZ-M05670', '2999.00', NULL, 'assets/images/products/49.jpg', 23),
(50, 'Лаптоп ASUS ZENBOOK3-ROSEGOLD-PRO, i7-7500U, 12.5"", 16GB, 512GB, Win10, 90NB0CZ2-M05680', 'ASUS', 'Laptops', 'R56.752', '90NB0CZ2-M05680', '2999.00', NULL, 'assets/images/products/50.jpg', 15),
(51, 'Лаптоп ASUS K550VX-DM027D, i7-6700HQ, 15.6"", 16GB, 256GB, 90B0BBJ-M01950', 'ASUS', 'Laptops', 'R56.606', '90B0BBJ-M01950', '1483.00', NULL, 'assets/images/products/51.jpg', 6),
(52, 'Лаптоп ASUS FX502VM-DM105T, i7-6700HQ, 15.6"", 8GB, 1TB, Win10, 90NB0DR5-M02740', 'ASUS', 'Laptops', 'R56.794', '90NB0DR5-M02740', '2041.00', NULL, 'assets/images/products/52.jpg', 11),
(53, 'Лаптоп ASUS X540LJ-XX548D, i3-5005U, 15.6'', 4GB, 1TB', 'ASUS', 'Laptops', 'R56.391', 'NULL', '649.00', NULL, 'assets/images/products/53.jpg', 12),
(54, 'Лаптоп ASUS K756UQ-T4021D, i5-6200U, 17.3'', 6GB, 1TB', 'ASUS', 'Laptops', 'R56.405', 'NULL', '1149.00', NULL, 'assets/images/products/54.jpg', 10),
(55, 'Лаптоп ASUS K550VX-DN028D, i7-6700HQ, 15.6"", 8GB, 1TB', 'ASUS', 'Laptops', 'R55.691', 'NULL', '1350.00', NULL, 'assets/images/products/55.jpg', 6),
(56, 'Лаптоп ASUS G751JY-T7450T, i7-4750HQ, 17.3"", 8GB, 2TB, Win 10', 'ASUS', 'Laptops', 'R55.693', 'NULL', '2699.00', NULL, 'assets/images/products/56.jpg', 23),
(57, 'Лаптоп ASUS X540SA-XX081D, N3050, 15.6"", 4GB, 500GB', 'ASUS', 'Laptops', 'R56.022', 'NULL', '391.00', NULL, 'assets/images/products/57.jpg', 15),
(58, 'Лаптоп ASUS X454LA-WX390D, i3-4005U, 14"", 4GB, 500GB', 'ASUS', 'Laptops', 'R56.090', 'NULL', '483.00', NULL, 'assets/images/products/58.jpg', 31),
(59, 'Лаптоп ASUS G752VY-GC192T, i7-6700HQ, 17.3", 16GB, 128GB SSD + 1TB, Win10 + Gaming Backpack + Headset Gaming Mouse', 'ASUS', 'Laptops', 'R56.025', 'NULL', '3249.00', NULL, 'assets/images/products/59.jpg', 3),
(60, 'Лаптоп ASUS N552VX-FY209D, i7-6700HQ, 15.6'', 8GB, 1TB + Carry Bag', 'ASUS', 'Laptops', 'R56.362', 'NULL', '1583.00', NULL, 'assets/images/products/60.jpg', 31),
(61, 'Лаптоп ASUS UX360CA-C4011T, M 6Y30, 13.3'', 4GB, 128GB, Win10', 'ASUS', 'Laptops', 'R56.154', 'NULL', '1167.00', NULL, 'assets/images/products/61.jpg', 20),
(62, 'Лаптоп ASUS X454LA-WX751D, i5-5200U, 14'', 8GB, 1TB', 'ASUS', 'Laptops', 'R56.404', 'NULL', '791.00', NULL, 'assets/images/products/62.jpg', 5),
(63, 'Лаптоп ASUS UX310UQ-FC301T, i7-7500U, 13.3"", 12GB, 256GB, Win10, 90NB0CL1-M04570', 'ASUS', 'Laptops', 'R56.865', '90NB0CL1-M04570', '1666.00', NULL, 'assets/images/products/63.jpg', 14),
(64, 'Лаптоп ASUS UX501VW-FY095R, i7-6700HQ, 15.6"", 8GB, 256GB, Win10, 90NB0AU2-M05340', 'ASUS', 'Laptops', 'R56.866', '90NB0AU2-M05340', '2083.00', NULL, 'assets/images/products/64.jpg', 4),
(65, 'Лаптоп ACER E5-575G-79GL, i7-7500U, 15.6'', 8GB, 1TB', 'ACER', 'Laptops', 'R56.395', 'NULL', '1083.00', NULL, 'assets/images/products/65.jpg', 10),
(66, 'Лаптоп ACER E5-575G-73J8, i7-7500U, 15.6"", 8GB, 1TB', 'ACER', 'Laptops', 'R56.396', 'NULL', '1083.00', NULL, 'assets/images/products/66.jpg', 12),
(67, 'Лаптоп ACER ES1-732-P2YD, N4200, 17.3"", 4GB, 1TB, NX.GH4EX.002', 'ACER', 'Laptops', 'R56.419', 'NX.GH4EX.002', '583.00', NULL, 'assets/images/products/67.jpg', 32),
(68, 'Лаптоп ACER ES1-332-P2F0, N4200, 13.3"", 4GB, 1TB+32GB, NX.GFZEX.005', 'ACER', 'Laptops', 'R56.631', 'NX.GFZEX.005', '541.00', NULL, 'assets/images/products/68.jpg', 9),
(69, 'Лаптоп ACER ES1-332-P8B6, N4200, 13.3"", 4GB, 1TB+32GB, NX.GG0EX.001', 'ACER', 'Laptops', 'R56.632', 'NX.GG0EX.001', '541.00', NULL, 'assets/images/products/69.jpg', 20),
(70, 'Лаптоп ACER ES1-132-P1Y2, N4200, 11.6"", 4GB, 500GB + 32GB, NX.GG2EX.002', 'ACER', 'Laptops', 'R56.570', 'NX.GG2EX.002', '458.00', NULL, 'assets/images/products/70.jpg', 21),
(71, 'Лаптоп ACER ES1-132-P1BC, N4200, 11.6"", 4GB, 500GB + 32GB, NX.GG3EX.001', 'ACER', 'Laptops', 'R56.571', 'NX.GG3EX.001', '549.00', NULL, 'assets/images/products/71.jpg', 7),
(72, 'Лаптоп ACER E5-722-41YM, A4-7210, 17.3"", 4GB, 1TB, NX.G1REX.005', 'ACER', 'Laptops', 'R56.645', 'NX.G1REX.005', '500.00', NULL, 'assets/images/products/72.jpg', 5),
(73, 'Лаптоп ACER F5-771G-71ER, i7-7500U, 17.3"", 8GB, 1TB, NX.GEMEX.002', 'ACER', 'Laptops', 'R56.596', 'NX.GEMEX.002', '1167.00', NULL, 'assets/images/products/73.jpg', 5),
(74, 'Лаптоп ACER F5-771G-56H1, i5-7200U, 17.3"", 8GB, 1TB, NX.GEMEX.001', 'ACER', 'Laptops', 'R56.597', 'NX.GEMEX.001', '999.00', NULL, 'assets/images/products/74.jpg', 4),
(75, 'Лаптоп LENOVO Y700-17ISK /80RV005GBM/, i7-6700HQ, 17.3'', 8GB, 1TB, Win10, 80RV005GBM', 'LENOVO', 'Laptops', 'R56.288', '80RV005GBM', '1666.00', NULL, 'assets/images/products/75.jpg', 45),
(76, 'Лаптоп LENOVO 310-15IAP /80TT0039BM/, N3350, 15.6"", 4GB, 1TB, 80TT0039BM', 'LENOVO', 'Laptops', 'R56.711', '80TT0039BM', '466.00', NULL, 'assets/images/products/76.jpg', 2),
(77, 'Лаптоп LENOVO 310-15IAP /80TT003BBM/, N3350, 15.6"", 4GB, 1TB, 80TT003BBM', 'LENOVO', 'Laptops', 'R56.712', '80TT003BBM', '466.00', NULL, 'assets/images/products/77.jpg', 17),
(78, 'Лаптоп LENOVO Y700-15ISK /80NV010DBM/, i7-6700HQ, 15.6"", 8GB, 1TB, 80NV010DBM', 'LENOVO', 'Laptops', 'R56.999', '80NV010DBM', '1749.00', NULL, 'assets/images/products/78.jpg', 27),
(79, 'Лаптоп LENOVO YG910-13IKB /80VF00CPBM/, i7-7500U, 13.9"", 8GB, 512GB, Win10, 80VF00CPBM', 'LENOVO', 'Laptops', 'R57.045', '80VF00CPBM', '2733.00', NULL, 'assets/images/products/79.jpg', 45),
(80, 'Лаптоп LENOVO 310-15IAP /80TT003FBM/, N4200, 15.6"", 4GB, 1TB, 80TT003FBM', 'LENOVO', 'Laptops', 'R56.826', '80TT003FBM', '524.00', NULL, 'assets/images/products/80.jpg', 32),
(81, 'Лаптоп LENOVO 310-15IAP /80TT003JBM/, N4200, 15.6"", 4GB, 1TB, 80TT003JBM', 'LENOVO', 'Laptops', 'R56.845', '80TT003JBM', '583.00', NULL, 'assets/images/products/81.jpg', 12),
(82, 'Лаптоп LENOVO 110-14IBR /80T6007NBM/, N3060, 14"", 4GB, 500GB, 80T6007NBM', 'LENOVO', 'Laptops', 'R56.701', '80T6007NBM', '366.00', NULL, 'assets/images/products/82.jpg', 10),
(83, 'Лаптоп LENOVO 100-15IBD /80QQ01DLBM/, i5-5200U, 15.6"", 8GB, 1TB, Win10, 80QQ01DLBM', 'LENOVO', 'Laptops', 'R56.744', '80QQ01DLBM', '833.00', NULL, 'assets/images/products/83.jpg', 12),
(84, 'Лаптоп LENOVO 310-15IAP /80TT003DBM/, N4200, 15.6", 4GB, 1TB, 80TT003DBM', 'LENOVO', 'Laptops', 'R56.743', '80TT003DBM', '524.00', NULL, 'assets/images/products/84.jpg', 17);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
