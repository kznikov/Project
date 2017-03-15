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
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `Id` int(11) NOT NULL,
  `HP серии` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Размер на екрана` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Дисплей (описание)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Разделителна способност` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Камера` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Процесор (марка)` varchar(500) DEFAULT NULL,
  `Процесор (серия)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Процесор (тип)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Процесор (ядра)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Памет` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Памет (Oписание)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Твърд диск` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Твърд диск скорост` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Сторидж Описание (Диск)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Чипсет` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Оптично устройство` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Видео карта` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Видео карта (чипсет)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Видео карта (модел)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Операционна система` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Операционна система (описание)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Размер` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Тегло (нето)` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Батерия` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Безжична връзка` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `LAN` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Портове` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Слотове` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Звук` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Други` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Гаранционен срок` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `Гаранционен срок (батерия)` varchar(500) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`Id`, `HP серии`, `Размер на екрана`, `Дисплей (описание)`, `Разделителна способност`, `Камера`, `Процесор (марка)`, `Процесор (серия)`, `Процесор (тип)`, `Процесор (ядра)`, `Памет`, `Памет (Oписание)`, `Твърд диск`, `Твърд диск скорост`, `Сторидж Описание (Диск)`, `Чипсет`, `Оптично устройство`, `Видео карта`, `Видео карта (чипсет)`, `Видео карта (модел)`, `Операционна система`, `Операционна система (описание)`, `Размер`, `Тегло (нето)`, `Батерия`, `Безжична връзка`, `LAN`, `Портове`, `Слотове`, `Звук`, `Други`, `Гаранционен срок`, `Гаранционен срок (батерия)`) VALUES
(1, 'HP EliteBook', '15.6"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6500U with Intel HD Graphics 520 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', 'DDR4-2133 SDRAM (1 x 8 GB), 2 SODIMM, Transfer rates up to 2133 MT/s', '256 GB', 'не е налично', 'M.2 SATA TLC SSD', 'Chipset is integrated with processor', 'не е налично', 'Интегрирана', 'Intel', 'Intel® HD Graphics 520', 'Windows 10', 'Windows 10 Pro 64', '38.33 x 25.77 x 1.94 cm', '1.84 kg', 'HP Long Life 3-cell, 46 Wh Li-ion', 'Intel 802.11a/b/g/n/ac (2x2) and Bluetooth® 4.2 Combo', 'Intel® Ethernet Connection I219-V 10/100/1000', '1 USB 3.0, 1 USB 3.0 charging, 1 USB Type-C, 1 DisplayPort, 1 VG,A 1 headphone/microphone combo, 1 AC power, 1 RJ-45, 1 docking connector', '1 media card reader, Supports SD, SDHC, SDXC; 1 external SIM', 'не е налично', 'не е налично', 'не е налично', 'не е налично'),
(2, 'HP EliteBook', '15.6"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6500U with Intel HD Graphics 520 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', 'DDR4-2133 SDRAM (1 x 8 GB), Transfer rates up to 2133 MT/s, 2 SODIMM', '256 GB', 'не е налично', 'M.2 SATA TLC SSD', 'Chipset is integrated with processor', 'не е налично', 'Интегрирана', 'Intel', 'Intel® HD Graphics 520', 'Windows 10', 'Windows 10 Pro 64', '38.33 x 25.77 x 1.94 cm', '1.84 kg', 'HP Long Life 3-cell, 46 Wh Li-ion', 'Intel® Dual Band Wireless-AC 8260 802.11a/b/g/n/ac (2x2) WiFi and Bluetooth® 4.2 Combo', 'Intel® Ethernet Connection I219-V 10/100/1000', '1 USB 3.0, 1 USB 3.0 charging, 1 USB Type-C, 1 DisplayPort, 1 VGA, 1 headphone/microphone combo, 1 AC power, 1 RJ-45, 1 docking connector', '1 media card reader, 1 external SIM (Supports SD, SDHC, SDXC.)', 'Audio by Bang & Olufsen, Integrated dual array microphone, Integrated premium speakers, HP Noise Reduction Software, HP Clear Sound Amp', 'не е налично', '36 месеца', 'не е налично'),
(3, 'не е налично', '17.3"', 'HD+ LED Glare, 16ms', '1600x900', 'Да', 'Intel', 'Intel Pentium', 'Intel Quad-Core Pentium N3700 Processor (1.6-2.4GHz, 2M Cache, 6W, 14nm)', 'quad', '4 GB', 'DDR3 1600MHz (1 free slot)', '1 TB', '5400 rpm', '2.5"', 'не е налично', 'DVD SuperMulti', 'Дискретна', 'NVIDIA', 'NVIDIA Geforce 920M (N16V-GM-S) 1GB DDR3L', 'не е налично', 'FREE DOS', '41.5 x 27.2 x 3.0 cm (WxDxH)', '2.8 kg', '37WHrs, 4-cell Li-ion Battery Pack', 'не е налично', 'Gigabit Lan', '1 x COMBO audio jack, 1 x VGA port/Mini D-sub 15-pin for external monitor, 1 x USB 3.0 port(s), 2 x USB 2.0 port(s), 1X AC adapter plug', '3-in-1 Card Reader', 'Sonic master audio', 'Matte texture chassis', '24 месеца', '12 months');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laptops`
--
ALTER TABLE `laptops`
  ADD CONSTRAINT `FK_products_Id` FOREIGN KEY (`Id`) REFERENCES `products` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
