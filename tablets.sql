-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 01:33 PM
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
-- Table structure for table `tablets`
--

CREATE TABLE `tablets` (
  `ProductId` int(11) NOT NULL,
  `Размер на екрана` varchar(10) DEFAULT NULL,
  `Дисплей (описание)` varchar(200) DEFAULT NULL,
  `Резолюция на дисплея` varchar(30) DEFAULT NULL,
  `Процесор (марка)` varchar(50) DEFAULT NULL,
  `Процесор` varchar(150) DEFAULT NULL,
  `Процесор (честота)` varchar(30) DEFAULT NULL,
  `Сторидж (Диск)` varchar(20) DEFAULT NULL,
  `Памет` varchar(10) DEFAULT NULL,
  `Камера` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Видео карта` varchar(50) DEFAULT NULL,
  `Операционна система` varchar(20) DEFAULT NULL,
  `Bluetooth` varchar(30) DEFAULT NULL,
  `Мрежа` varchar(150) DEFAULT NULL,
  `Батерия` varchar(150) DEFAULT NULL,
  `Сензори` varchar(150) DEFAULT NULL,
  `Размер` varchar(100) DEFAULT NULL,
  `Тегло (нето)` varchar(100) DEFAULT NULL,
  `Гаранционен срок` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablets`
--

INSERT INTO `tablets` (`ProductId`, `Размер на екрана`, `Дисплей (описание)`, `Резолюция на дисплея`, `Процесор (марка)`, `Процесор`, `Процесор (честота)`, `Сторидж (Диск)`, `Памет`, `Камера`, `Видео карта`, `Операционна система`, `Bluetooth`, `Мрежа`, `Батерия`, `Сензори`, `Размер`, `Тегло (нето)`, `Гаранционен срок`) VALUES
(85, '10.1""', 'IPS/Sodalime,10-finger capacitive touch screen', '1280 x 800', 'MediaTek', 'MTK MT8163 Quad-Core, 64bit', '1.30 GHz', '16 GB', '2 GB', '2 MP Front Camera, 5 MP Rear Camera with Auto focus', 'Mali-T720 MP2', 'Android 6.0', 'Yes', '802.11 a/b/g/n,Miracast', '18Wh irremovable Battery', 'G-Sensor / E-compass / Light Sensor/ Hall Sensor', '251.6 x 172 x 7.9 mm (LxWxH)', '500 g', '24 месеца'),
(86, '8""', 'HD IPS', '1280 x 800', 'Qualcomm Snapdragon 210 QuadCore', '1.30 GHz', '16 GB', 'NULL', '1 GB', '8 MP', 'NULL', 'Android 5.1', 'Yes', '802.11 B/G/N', 'NULL', 'NULL', 'NULL', '466.00 g', '24 месеца'),
(87, '10.1""', 'IPS/Sodalime/10-finger capacitive touch screen', '1280 x 800', 'MediaTek', 'MTK QC1.3GHz (MT8163)', '1.30 GHz', '16 GB', '2 GB', 'Camera Rear: 5 MP, Camera Front: 2 MP', 'Mali T720MP2 520Mhz', 'Android 6.0', 'Yes', '802.11 a/b/g/n', '11 hours battery life', 'NULL', 'NULL', '500 g', '24 месеца'),
(88, '10.1""', 'IPS', '1280x800', 'MediaTek', 'MTK MT8163 1.3 GHz Quad-Core', '1.30 GHz', '32 GB', '1 GB', '5 MP REAR, 2 MP FRONT CAMERA', 'NULL', 'Android 6.0', 'NULL', '802.11N + BT', '22.5 Wh Battery', 'NULL', 'NULL', 'NULL', '12 месеца'),
(89, '7""', 'IPS', '1280x720', 'MediaTek', 'MTK MT8163 1.3 GHz Quad-Core', '1.30 GHz', '16 GB', '1 GB', '2 MP REAR, 0.3 MP FRONT CAMERA', 'Graphics Mali', 'Android 6.0', 'NULL', '802.11N + BT', '10.28 Wh Battery', 'NULL', 'NULL', 'NULL', '12 месеца'),
(90, '10.1""', 'Active Matrix TFT Color LCD', '1280x800', 'Intel', 'Intel Atom Z3735F, 1.33 GHz,Quad-core (4 core)', 'NULL', 'NULL', '2 GB', 'Да', 'Intel HD Graphics DDR3 SDRAM', 'Windows 10 Home', 'NULL', 'NULL', 'Lithium-Polymer (Li-Polymer) 8400 mAh', 'NULL', '25.8 x 258 x 193.8mm', '1.19 kg', '12 месеца'),
(91, '10.1""', 'Active Matrix TFT Colour LCD, In-plane Switching (IPS) Technology, 16:10 Aspect Ratio, LED', '1920 x 1200', 'MediaTek', 'MediaTek MT8163, Cortex A53, Quad-core, 1 MB Cache', '1.5 GHz', '32 GB', '2 GB', 'Front Camera Resolution: 2 Megapixel, Rear Camera Resolution: 5 Megapixel', 'NULL', 'Android', 'Bluetooth 4.0', 'NULL', '2-cell, Lithium Polymer (Li-Polymer), 6100 mAh', 'Accelerometer', 'Height 9 mm, Width 259 mm, Depth 167.5 mm', '529 g', '12 месеца'),
(92, '8""', 'LED Backlight WXGA Screen, IPS Panel 10 finger multi-touch support, Corning Gorilla Glass1, Anti-fingerprint coating, Full lamination, ASUS Tru2Life Technology', '1280x800', 'Intel', 'Intel SoFIA Quad Core CPU (C3200)', 'NULL', '16 GB', 'NULL', 'Front: 2M, Rear: 5M', 'NULL', 'Android 5.0', 'Bluetooth V4.0', 'WLAN802.11 b/g/n, Support Miracast', '8 hours battery life(TBD);15.2Wh Li-polymer Battery', 'G-Sensor, E-compass, Hall sensor, light Sensor', '209 x 123 x 8.5 mm (LxWxH)', '350 g', '24 месеца'),
(93, '12""', 'FHD+, 300 nits', '2160x1440', 'Intel', 'Intel Core M7-6Y75 Processor (4M Cache, up to 3.10 GHz)', 'NULL', 'NULL', 'NULL', '??', 'Intel HD Graphics 515', 'Windows 10 Home', 'NULL', 'NULL', '4 Cells, 10800 mAh', 'NULL', '292 x 210 x 8.95 (mm) (W x D x H)', '780 g', '24 месеца'),
(94, '8""', 'IPS Sodalime,Capacitive touch screen with Anti-fingerprint technology', '1280x800', 'MediaTek', 'MediaTek MT8163 Quad-Core, 64bit', '1.30 GHz', '16 GB', '2 GB', '2 MP Front Camera; 5 MP Rear Camera with Auto focus', 'NULL', 'Android 5.0', 'Yes', '802.11 a/b/g/n;Miracast', '15.2Wh Li-polymer Battery', 'G-Sensor/ E-compass/ Hall sensor /Light Sensor', '209 x 123 x 8.5 mm (LxWxH)', '350 g', '24 месеца'),
(95, '10""', 'IPS Gorilla1,10-finger capacitive touch screen', '1280 x 800', 'Intel', 'INTEL Moorefiled 1.8GHz Quad-Core CPU', '1.8 GHz', '32 GB', '2 GB', 'Camera Rear: 5 MP, Camera Front: 2 MP', 'IMG PowerVR Series 6 - G6430', 'Android 5.0', 'Yes', '802.11 b/g/n', '9 hours battery life; 18Wh irremovable Battery', 'G-sensor Ambient Light Sensor; E-compass; Hall sensor', 'NULL', '510 g', '24 месеца'),
(96, '10.1""', 'IPS/Sodalime/10-finger capacitive touch screen', '1280 x 800', 'MediaTek', 'MTK QC1.3GHz (MT8163)', '1.30 GHz', '16 GB', '2 GB', 'Camera Rear: 5 MP, Camera Front: 2 MP', 'Mali T720MP2 520Mhz', 'Android 6.0', 'Yes', '18Wh irremovable Battery', 'NULL', 'NULL', 'NULL', '500 g', 'NULL'),
(97, '8""', 'IPS Sodalime/Capacitive touch screen with Anti-fingerprint technology', '1280 x 800', 'MediaTek', 'MTK QC1.3GHz (MT8163)', '1.30 GHz', '16 GB', 'NULL', 'Camera Rear: 5 MP; Camera Front: 2 MP', 'NULL', 'Android 5.0', 'Yes', '802.11 a/b/g/n', '8 hours battery life', 'NULL', '209 x 123 x 8.5 mm', '350 g', '24 месеца'),
(98, '12""', 'BrightView WUXGA + UWVA EDP ultra slim LED-backlit touchscreen (1920 x 1280), Corning Gorilla Glass 4', '1920 x 1280', 'Intel', 'Intel Core m5-6Y57 with Intel HD Graphics 515 (1.1 GHz to 2.8 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', '1.1 GHz', '256 GB', '8 GB', '2 MP 1080p FHD webcam front; 5-MP FHD 1080p rear', 'Intel HD Graphics 515', 'Windows 10', 'NULL', 'Intel Dual Band Wireless AC 8260 802.11a / b / g / n / ac (2 x 2) Wi-Fi and Bluetooth 4.2 combo HP hs3110 HSPA + Mobile Broadband', '4-cell Long Life 40-WHr lithium-ion polymer', 'Accelerometer, Magnetometer, Gyro (combo chip), Ambient light sensor, Two accelerometers (keyboard)', '300 x 213.5 x 8.05 mm (tablet), 300 x 213,5 x 13,45 mm (tablet with keyboard)', '820 gr (tablet), 1205 gr (tablet with keyboard)', '36 месеца'),
(99, '10.1""', 'Led/glare/WXGA', '800x1280', 'Intel', 'Intel Atom x5-Z8350 Processor (2M Cache, up to 1.92 GHz)', '1.44 GHz', '64 GB', '4 GB', 'Camera Front: 2 MP, Camera Rear: 5 MP', 'NULL', 'Windows 10', 'Yes', 'NON-INTEL 1X1 BGN', '2CELL 33WH', 'NULL', '257.4 x 176.9 x 9.4mm', '0.580kg (tablet only); 0.520kg (keyboard only)', '24 месеца'),
(100, '12.2""', 'FHD/IPS/ Glare Touch(slim)', '1920x1200', 'Intel', 'Intel Core i3-6100U Processor (3M Cache, 2.30 GHz)', '2.3 GHz', '128 GB', '4 GB', 'Camera Front: 2 MP, Camera Rear: 5 MP', 'NULL', 'Windows 10', 'Yes', 'WIFI 1X1 A', '2CELL 39WH', 'NULL', '300 x 205 x 9.9 (tablet ) / 300 x 205 x 15.9 (with keyboard)', '900 g(tablet )/1.25 kg (with keyboard)', '24 месеца'),
(101, '10.1""', 'Led/ glare/ WXGA', '1280 x 800', 'Intel', 'Intel Atom x5-Z8350 Processor (2M Cache, up to 1.92 GHz)', '1.44 GHz', '32 GB', '4 GB', 'Camera Front: 2 MP, Camera Rear: 5 MP', 'NULL', 'Windows 10', 'Yes', 'NON-INTEL 1X1 BGN', '2CELL 33WH', 'NULL', '257.4 x 176.9 x 9.4mm', '0.580kg (tablet only);0.520kg (keyboard only)', '24 месеца'),
(102, '8""', 'IPS/10-finger capacitive touch screen', '1280 x 800', 'NULL', 'Qualcomm MSM8916 Quad Core 1.2GHz', '1.20 GHz', '16 GB', '2 GB', 'Camera Front: 2 MP, Camera Rear: 5 MP', 'NULL', 'Android 5.0', 'Yes', '802.11 b/g/n', '10 hours battery life; 15.2Wh Li-polymer Battery', 'NULL', '209 x 123 x 8.5 mm', '350 g', '24 месеца'),
(103, '8""', 'IPS/10-finger capacitive touch screen', '1280 x 800', 'NULL', 'Qualcomm MSM8916 Quad Core 1.2GHz; 2 GB', 'NULL', '16 GB', '2 GB', 'Camera Rear: 5 MP; Camera Front: 2 MP', 'NULL', 'Android 5.0', 'Yes', '802.11 b/g/n', '10 hours battery life; 15.2Wh Li-polymer Battery', 'NULL', '209 x 123 x 8.5 mm', '350 g', '24 месеца'),
(104, '7""', 'LED Backlight WXGA Screen IPS Panel', '1280x800', 'Intel', 'Quad-Core, 1.2 GHz', '1.20 GHz', '16 GB', '1 GB', '1.2 MP Front Camera, 5 MP Rear Camera', 'NULL', 'Android 4.2', 'Bluetooth V4.0', 'WLAN802.11 b/g/n', '10 hours; 15Wh Li-polymer Battery', 'G-Sensor, E-compass, Hall sensor', '196.8 x 120.6 x 10.8 mm (WxDxH)', '302 g', '24 месеца'),
(105, '13.3""', '16:9 IPS FHD Touch panel, Glare', '1920x1080', 'Intel', 'i5-3317U (3M Cache)', '1.7 GHz', '500 GB', '4 GB', 'HD Web Camera', 'Intel HD Graphics 4000', 'Windows 8', '4', '802.11 b/g/n', '2Cells 5000 mAh Polymer Battery, 2Cells 3120 mAh Polymer Battery', 'NULL', 'Tablet: 340 x 213 x 4 ~11 mm (WxDxH), Dock: 340 x 219 x 3 ~12.9 mm (WxDxH)', 'Tablet: 0.95 kg (with Polymer Battery), Dock: 0.95 kg (with Polymer Battery)', '24 месеца'),
(106, '10.1""', 'TOUCH WideView IPS glare', '1366x768', 'Intel', 'Intel Atom BayTrail-T Z3775 QuadCore (2M Cache, up 2.39GHz, <4W)', '1.46 GHz', '32 GB', '2 GB', '1.2MP front camera', 'HD Graphics Gen7 (BayTrail)', 'Windows 8', 'NULL', 'DualBand WiFI', '31WHrs, 8060mAh, 2-cell Li-ion polymer Battery pack (11hrs) Adapter 5V, 2A, 10W; 100-240V AC, 50/60Hz', 'G-sensor, Ambient Light, Gyroscope, e-Compass', 'Tablet: 263 x 171 x 10.5 mm (WxDxH), Dock: (Mobile Dock) 263 x 171 x 10 mm (WxDxH)', 'Pad: 523gr, including dock: 1031gr;', '24 месеца'),
(107, '7""', 'LED Backlight WXGA Screen IPS Panel', '1280x800', 'Intel', 'Quad-Core, 1.2 GHz', '1.20 GHz', '16 GB', 'NULL', 'Front: 2M, Rear: 5M', 'NULL', 'Android 5.0', 'Bluetooth V4.0', 'WLAN802.11 b/g/n, Support Miracast', '8 hours battery life(TBD);15.2Wh Li-polymer Battery', 'G-Sensor, E-compass, Hall sensor, light Sensor', '209 x 123 x 8.5 mm (LxWxH)', '350 g', '24 месеца'),
(108, '7""', 'LED Backlight WUXGA Screen IPS Panel 10 finger multi-touch support', '1920x1200', 'Intel', 'Intel Atom BayTrail-T Z3775 QuadCore (2M Cache, up 2.39GHz, <4W)', '1.46 GHz', '32 GB', '2 GB', 'Camera Front: 2 MP, Camera Rear: 5 MP', 'NULL', 'Android 4.4', 'v4.0', 'WLAN802.11 b/g/n', '10 hours; 15Wh Li-polymer Battery', 'G-Sensor, E-compass, Hall sensor', '196.8 x 120.6 x 10.8 mm (WxDxH)', '302 g', '24 месеца'),
(109, '8""', 'IPS/10-finger capacitive touch screen', '1280 x 800', 'NULL', 'Qualcomm MSM8916 Quad Core 1.2GHz', '1.20 GHz', '16 GB', '2 GB', 'Camera Front: 2 MP, Camera Rear: 5 MP', 'NULL', 'Android 4.3', 'Yes', 'NON-INTEL 1X1 BGN', '2CELL 33WH', 'NULL', '257.4 x 176.9 x 9.4mm', '0.580kg (tablet only);0.520kg (keyboard only)', '24 месеца'),
(110, '10.1"', 'TOUCH WideView IPS glare', '1366x768', 'Intel', 'Intel Atom BayTrail-T Z3775 QuadCore (2M Cache, up 2.39GHz, <4W)', '1.46 GHz', '32 GB', '2 GB', 'Camera Rear: 5 MP, Camera Front: 2 MP', 'IMG PowerVR Series 6 - G6430', 'Android 5.0', 'Yes', '802.11 b/g/n', '10 hours battery life; 15.2Wh Li-polymer Battery', 'NULL', '209 x 123 x 8.5 mm', '350 g', '24 ??????');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablets`
--
ALTER TABLE `tablets`
  ADD PRIMARY KEY (`ProductId`),
  ADD UNIQUE KEY `ProductId_UNIQUE` (`ProductId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
