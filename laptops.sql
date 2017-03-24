-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 март 2017 в 09:58
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
-- Структура на таблица `laptops`
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
  `Твърд диск` varchar(500) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `laptops`
--

INSERT INTO `laptops` (`Id`, `HP серии`, `Размер на екрана`, `Дисплей (описание)`, `Разделителна способност`, `Камера`, `Процесор (марка)`, `Процесор (серия)`, `Процесор (тип)`, `Процесор (ядра)`, `Памет`, `Твърд диск`) VALUES
(1, 'HP EliteBook', '15.6\"\"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6500U with Intel HD Graphics 520 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(2, 'HP EliteBook', '15.6\"\"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6500U with Intel HD Graphics 520 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(3, NULL, '17.3\"\"', 'HD+ LED Glare, 16ms', '1600x900', 'Да', 'Intel', 'Intel Pentium', 'Intel Quad-Core Pentium N3700 Processor (1.6-2.4GHz, 2M Cache, 6W, 14nm)', 'quad', '4 GB', '1 TB'),
(6, 'HP EliteBook', '15.6\"\"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'quad', '8 GB', '256 GB'),
(7, 'ZBOOK', '15.6\"\"', 'FHD SVA anti-glare LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6500U Processor (4M Cache, up to 3.10 GHz)', 'quad', '8 GB', '1 TB'),
(8, 'ZBOOK', '15.6\"\"', 'FHD SVA anti-glare LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6700HQ with Intel HD graphics 530 (2.60 GHz, up to 3.50 GHz with Intel Turbo Boost Technology, 6 MB cache, 4 cores)', 'quad', '8 GB', '1 TB'),
(9, 'HP EliteBook', '13.3\"\"', 'FHD', '1920x1080', 'Да', 'Intel', 'Intel Core M', 'Intel Core m5-6Y54 with Intel HD Graphics 515 (1.1 GHz, up to 2.7 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(10, 'HP EliteBook', '14\"\"', 'HP Private Eyes Non-Touch Integrated Privacy Screen 35.56 cm (14\"\") diagonal FHD SVA anti-glare slim LED-backlit with camera', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6600U with Intel HD Graphics 520 (2.6 GHz, up to 3.4 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(11, 'HP EliteBook', '14\"\"', 'FHD SVA AG', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6300U Processor (3M Cache, up to 3.00 GHz)', 'dual', '8 GB', '256 GB'),
(12, 'HP ProBook', '15.6\"\"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(13, 'HP EliteBook', '13.3\"\"', 'QHD+ eDP 1.3 touch screen', '3200x1800', 'Да', 'Intel', 'Intel Core M', 'Intel® Core™ m7-6Y75 with Intel HD Graphics 515 (1.2 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '512 GB'),
(14, 'Spectre Pro', '13.3\"\"', 'QHD-UWVA touch screen, eDP 1.3 + PSR, WLED BrightView', '2560x1440', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6500U Processor (4M Cache, up to 3.10 GHz)', 'dual', '8 GB', '512 GB'),
(15, 'HP EliteBook', '12.5\'', 'FHD UWVA Touch', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U Processor (4M Cache, up to 3.50 GHz)', 'dual', '8 GB', '256 GB'),
(16, 'HP EliteBook', '12.5\'', 'FHD UWVA anti-glare ultra slim LED-backlit with camera (1920 x 1080)', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-7500U with Intel HD graphics 620 (2.7 GHz, up to 3.5 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '512 GB'),
(17, 'HP 250 - 255', '15.6\"\"', 'FHD SVA AG', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-6500U Processor,4M Cache, up to 3.10 GHz', 'dual', '8 GB', '250 GB'),
(18, 'HP ProBook', '15.6\"\"', 'FHD anti-glare LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-7200U with Intel HD Graphics 620 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '1 TB'),
(19, 'HP 250 - 255', '15.6\"\"', 'FHD anti-glare LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel® Core™ i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '4 GB', '128 GB'),
(20, 'HP 250 - 255', '15.6\"\"', 'HD SVA anti-glare slim LED-backlit', '1366x768', 'Да', 'Intel', 'Intel Core i5', 'Intel® Core™ i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '4 GB', '500 GB'),
(21, 'Spectre Pro', '13.3\"\"', 'FHD UWVA eDP 1.2 WLED BrightView touch screen', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel® Core™ i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(22, 'HP ProBook', '13.3\"\"', NULL, '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel® Core™ i7-7500U Processor (4M Cache, up to 3.50 GHz )', 'dual', '8 GB', '256 GB'),
(23, 'HP ProBook', '14\"\"', 'HD SVA anti-glare flat LED-backlit', '1366x768', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '4 GB', '500 GB'),
(24, 'HP ProBook', '14\"\"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U Processor (3M Cache, up to 2.80 GHz)', 'dual', '8 GB', '256 GB'),
(25, 'HP EliteBook', '14\"\"', 'FHD SVA anti-glare slim LED-backlit (1920 x 1080)', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '4 GB', '500 GB'),
(26, 'HP Chromebook', '11.6\"\"', 'HD WLED anti - glare (1366x768) SVA , 220 nits, eDP', '1366x768', 'Да', 'Intel', 'Intel Celeron', 'Intel Celeron N2840 ( 2.16 GHz, tubro up to 2.58 GHz, 1MB 1333 MHz L2 cache, 2 cores)', 'dual', '4 GB', '16 GB'),
(27, 'HP 250 - 255', '15.6\"\"', 'HD SVA anti-glare slim LED-backlit', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium N3710 with Intel HD Graphics 405 (1.6 GHz, up to 2.56 GHz, 2 MB cache, 4 cores)', 'quad', '4 GB', '500 GB'),
(28, 'HP ProBook', '15.6\"\"', 'HD anti-glare flat LED-backlit', '1366x768', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6500U with Intel HD Graphics 520 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '1 TB'),
(29, 'HP ProBook', '15.6\"\"', 'HD anti-glare flat LED-backlit', '1366x768', 'Да', 'Intel', 'Intel Core i3', 'Intel Core i3-6100U with Intel HD Graphics 520 (2.3 GHz, 3 MB cache, 2 cores)', 'dual', '4 GB', '500 GB'),
(30, 'HP ProBook', '15.6\"\"', 'HD anti-glare flat LED-backlit (1366 x 768)', '1366x768', 'Да', 'Intel', 'AMD A8', 'AMD Quad-Core A8-7410 APU with Radeon R5 Graphics (2.2 GHz, up to 2.5 GHz, 2 MB cache)', 'quad', '8 GB', '1 TB'),
(31, NULL, '14\"\"', 'HD', '1366x768', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-5200U Processor (3M Cache, up to 2.70 GHz)', 'dual', '8 GB', '320 GB'),
(32, 'Spectre Pro', '13.3\"\"', 'FHD UWVA eDP + PSR WLED BrightView ultra-slim flat (1920 x 1080)', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(33, 'HP EliteBook', '14\"\"', 'QHD UWVA anti-glare LED-backlit', '2560x1440', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6500U with Intel HD Graphics 520 (2.5 GHz, up to 3.1 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(34, 'HP EliteBook', '13.3\"\"', 'QHD+ eDP 1.3 touch screen (3200 x 1800)', '3200x1800', 'Да', 'Intel', 'Intel Core M', 'Intel Core m5-6Y54 with Intel HD Graphics 515 (1.1 GHz, up to 2.7 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(35, 'HP ProBook', '15.6\"\"', 'FHD SVA anti-glare slim LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '1 TB'),
(36, 'ZBOOK', '15.6\"\"', 'FHD UWVA IPS anti-glare LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ with Intel HD graphics 530 (2.60 GHz, up to 3.50 GHz with Intel Turbo Boost Technology, 6 MB cache, 4 cores)', 'quad', '8 GB', '256 GB'),
(37, 'HP ProBook', '14\"\"', 'FHD anti-glare LED-backlit', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U with Intel HD graphics 620 (2.7 GHz, up to 3.5 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(38, 'Spectre Pro', '13.3\"\"', 'QHD UWVA eDP 1.3 + PSR WLED BrightView touch screen (2560 x 1440)', '2560x1440', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6600U with Intel HD Graphics 520 (2.6 GHz, up to 3.4 GHz with Intel Turbo Boost Technology, 4 MB cache, 2 cores)', 'dual', '8 GB', '512 GB'),
(39, 'HP EliteBook', '12.5\'', 'HD', NULL, 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-4600U Processor (4M Cache, up to 3.30 GHz)', 'dual', '4 GB', '128 GB'),
(40, 'HP 250 - 255', '15.6\"\"', 'FHD anti-glare LED-backlit (1920 x 1080)', '1920x1080', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '4 GB', '1 TB'),
(41, 'Spectre Pro', '13.3\"\"', 'QHD UWVA eDP 1.3 + PSR WLED BrightView touch screen', '2560x1440', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '256 GB'),
(42, 'HP ProBook', '17.3\"\"', 'HD+ SVA anti-glare flat LED backlit', '1600x900', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U with Intel HD Graphics 520 (2.3 GHz, up to 2.8 GHz with Intel Turbo Boost Technology, 3 MB cache, 2 cores)', 'dual', '8 GB', '1 TB'),
(43, NULL, '17.3\"\"', 'LED Back-lit, Slim 300nits, FHD,16:9,AG,NTSC:72%,WV', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ Processor 2.6 GHz (6M Cache, up to 3.5 GHz)', 'quad', '16 GB', '1 TB'),
(44, NULL, '15.6\"\"', 'LED Back-lit,Ultra Slim 200nits,FHD, 16:9/AG/NTSC:45%', '1920x1080', 'Да', 'Intel', 'Intel Pentium', 'Intel Quad-Core Pentium N3700 Processor, 1.6 GHz(2M Cache, up to 2.4 GHz)', 'quad', '4 GB', '500 GB'),
(45, NULL, '15.6\"\"', 'HD LED, glare', '1366x768', NULL, 'Intel', 'Intel Celeron Dual-Core', 'Intel Dual-Core Celeron N3060 Processor (1.6-2.48GHz, 2M Cache, 6W, 14nm)', 'dual', '4 GB', '1 TB'),
(46, NULL, '15.6\"\"', 'HD LED,glare', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Quad-Core Pentium N3710 Processor (1.6-2.56GHz, 2M Cache, 6W, 14nm)', 'quad', '4 GB', '1 TB'),
(47, NULL, '15.6\"\"', 'HD LED, Glare', '1366x768', 'Да', 'Intel', 'Intel Core i3', 'Intel Core i3-5005U Broadwell (2.0GHz, 3M Cache, 14nm, 2cores/4threads)', 'dual', '4 GB', '1 TB'),
(48, NULL, '15.6\"\"', 'FHD IPS , Non-glare EWV, High Brightness 300nit, Ultra-Slim', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ (2.6 GHz-3.5GHz, 6M Cache, 14nm)', 'quad', '8 GB', '1 TB'),
(49, NULL, '12.5\'', 'LED FHD , 16:9, Glare, WideView Ultra Slim 300nits, Gorilla Glass 4', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U (2.7GHz up to 3.5GHz, 2 cores, 4M Cache, 15w)', 'dual', '16 GB', '512 GB'),
(50, NULL, '12.5\'', 'LED FHD, 16:9, Glare, WideView Ultra Slim 300nits, Gorilla Glass 4', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U (2.7GHz up to 3.5GHz, 2 cores, 4M Cache, 15w)', 'dual', '16 GB', '512 GB'),
(51, NULL, '15.6\"\"', 'FHD LED, non-glare type', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ (2.6 GHz-3.5GHz, 6M Cache, 14nm)', 'quad', '16 GB', '256 GB'),
(52, NULL, '15.6\"\"', 'LED Back-lit,Ultra Slim 200nits,FHD,16:9,AG,NTSC:45%,WVFILM 140 degrees', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ Processor 2.6 GHz (6M Cache, up to 3.5 GHz)', 'quad', '8 GB', '1 TB'),
(53, NULL, '15.6\"\"', 'HD LED, glare', '1366x768', 'Да', 'Intel', 'Intel Core i3', 'Intel Core i3-5005U Broadwell (2.0GHz, 3M Cache, 14nm, 2cores/4threads)', 'dual', '4 GB', '1 TB'),
(54, NULL, '17.3\'', 'FHD LED,Anti-Glare,Wide-View', '1920x1080', 'Не', 'Intel', 'Intel Core i5', 'Intel Core i5-6200U (2.3GHz up to 2.8GHz, 2 cores, 3M Cache, 15w)', 'dual', '6 GB', '1 TB'),
(55, NULL, '15.6\"\"', 'FHD LED non-glare type', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ (2.6 GHz-3.5GHz, 6M Cache, 14nm);', 'quad', '8 GB', '1 TB'),
(56, NULL, '17.3\'', 'LED Back-lit 300nits, FHD 1920x1080 16:9, AG NTSC:72% IPS', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-4750HQ Processor 2 GHz (6M Cache, up to 3.20 GHz)', 'quad', '8 GB', '2 TB'),
(57, NULL, '15.6\"\"', 'LED Back-lit, Slim 200nits, HD 1366x768 16:9, Glare, NTSC:45%', '1366x768', 'Да', 'Intel', 'Intel Celeron', 'Intel Dual-Core Celeron N3050 Processor (2M Cache, up to 2.16 GHz);', 'dual', '4 GB', '500 GB'),
(58, NULL, '14\"\"', 'LED Back-lit, Slim 200nits, HD 1366x768 16:9, Glare, NTSC:45%', '1366x768', 'Да', 'Intel', 'Intel Core i3', 'Intel Core i3-4005U Processor, 1.7GHz (3M Cache)', 'dual', '4 GB', '500 GB'),
(59, NULL, '17.3\'', 'LED Back-lit, Slim 300nits, FHD 1920x1080 16:9, AG, NTSC:72%, IPS', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ Processor 2.6 GHz (6M Cache, up to 3.5 GHz)', 'quad', '16 GB', '1 TB'),
(60, NULL, '15.6\"\"', 'IPS; Non-glare EWV, High Brightness 300nit, Ultra-Slim', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ (2.6 GHz-3.5GHz, 6M Cache, 14nm)', 'quad', '8 GB', '1 TB'),
(61, NULL, '13.3\'', 'LED backlit FHD, Glare Touchscreen with 72% NTSC', '1920x1080', 'Да', 'Intel', 'Intel Core M', 'Intel Core M 6Y30 Processor', 'dual', '4 GB', '128 GB'),
(62, NULL, '14\"\"', 'LED Back-lit,Slim 200nits,HD,Glare,NTSC:45%', '1366x768', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-5200U Processor, 2.2GHz (3M Cache, up to 2.7GHz)', 'dual', '8 GB', '1 TB'),
(63, NULL, '13.3\"\"', 'LED Back-lit/Ultra Slim 350nits/FHD/16:9/AG/NTSC:72%/WV', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U Processor, 2.7GHz (4M Cache, up to 3.5GHz)', 'dual', '12GB', '256 GB'),
(64, NULL, '15.6\"\"', 'LED Back-lit/Ultra Slim 300nits/FHD/16:9/AG/NTSC:72%;', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ Processor 2.6 GHz (6M Cache, up to 3.5 GHz)', 'quad', '8 GB', '256 GB'),
(65, NULL, '15.6\"\"', 'Active Matrix TFT Colour LCD, ComfyView, FHD, LED, Non Glare', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U Processor (4M Cache, up to 3.50 GHz )', 'dual', '8 GB', '1 TB'),
(66, NULL, '15.6\"\"', 'Active Matrix TFT Colour LCD, ComfyView, FHD, LED, Non Glare', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U Processor (4M Cache, up to 3.50 GHz )', 'dual', '8 GB', '1 TB'),
(67, NULL, '17.3\"\"', 'Active Matrix TFT Colour LCD, LED', '1600x900', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium N4200, 1.10 GHz , Quad-core (4 Core), 2 MB Cache, 64-bit', 'quad', '4 GB', '1 TB'),
(68, NULL, '13.3\"\"', 'Active Matrix TFT Colour LCD/ComfyView/16:9/HD', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '1 TB'),
(69, NULL, '13.3\"\"', 'Active Matrix TFT Colour LCD/ComfyView/16:9/HD', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '1 TB'),
(70, NULL, '11.6\"\"', 'Active Matrix TFT Colour LCD, ComfyView, LED, 16:9, HD', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '500 GB'),
(71, NULL, '11.6\"\"', 'Active Matrix TFT Colour LCD, ComfyView, LED, 16:9, HD', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '500 GB'),
(72, NULL, '17.3\"\"', 'Active Matrix TFT Colour LCD, CineCrystal, LED, 16:9, HD+', '1600x900', 'Да', 'AMD', 'AMD A4', 'AMD A4-7210 (1.80 GHz-2.20 GHz Quad-core (4 Core)/Cache 2 MB', 'quad', '4 GB', '1 TB'),
(73, NULL, '17.3\"\"', 'Active Matrix TFT Colour LCD / CineCrystal / 16:9 / HD+ / LED', '1600x900', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U Processor (4M Cache, up to 3.50 GHz )', 'dual', '8 GB', '1 TB'),
(74, NULL, '17.3\"\"', 'Active Matrix TFT Colour LCD / CineCrystal / 16:9 / HD+ / LED', '1600x900', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-7200U Processor (3M Cache, up to 3.10 GHz)', 'dual', '8 GB', '1 TB'),
(75, NULL, '17.3\"\"', 'FHD IPS, Anti-Glare(FLAT)', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ Processor (6M Cache, up to 3.50 GHz)', 'quad', '8 GB', 'DDR4 2133'),
(76, NULL, '15.6\"\"', 'HD Glossy', '1366x768', 'Да', 'Intel', 'Intel Celeron', 'Intel Celeron Processor N3350 (2M Cache, up to 2.4 GHz)', 'dual', '4 GB', '1x 4 GB DDR3L 1600'),
(77, NULL, '15.6\"\"', 'HD Glossy', '1366x768', 'Да', 'Intel', 'Intel Celeron', 'Intel Celeron Processor N3350 (2M Cache, up to 2.4 GHz)', 'dual', '4 GB', '1x 4 GB DDR3L 1600'),
(78, NULL, '15.6\"\"', 'FHD IPS AntiGlare', '1920x1080', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-6700HQ Processor (6M Cache, up to 3.50 GHz)', 'quad', '8 GB', '1 x 8 GB DDR4 2133'),
(79, NULL, '13.9\"\"', 'UHD IPS Multi-touch', '3840x2160', 'Да', 'Intel', 'Intel Core i7', 'Intel Core i7-7500U Processor (4M Cache, up to 3.50 GHz )', 'dual', '8 GB', 'DDR4 2133 ONBOARD'),
(80, NULL, '15.6\"\"', 'HD TN Glossy', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '1x 4 GB DDR3L 1600'),
(81, NULL, '15.6\"\"', 'HD TN Glossy (Slim)', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '1x 4GB DDR3L 1600'),
(82, NULL, '14\"\"', 'HD/TN AG(FLAT)', '1366x768', 'Да', 'Intel', 'Intel Celeron', 'Intel Celeron Processor N3060 (2M Cache, up to 2.48 GHz)', 'dual', '4 GB', 'DDR3L 1600 ONBOARD'),
(83, NULL, '15.6\"\"', 'HD/TN/Glare(Flat)', '1366x768', 'Да', 'Intel', 'Intel Core i5', 'Intel Core i5-5200U Processor (3M Cache, up to 2.70 GHz)', 'dual', '8 GB', '1 x 8 GB(No ONBOARDRAM), DDR3L1600'),
(84, NULL, '15.6\"\"', 'HD TN GL(SLIM)', '1366x768', 'Да', 'Intel', 'Intel Pentium', 'Intel Pentium Processor N4200 (2M Cache, up to 2.5 GHz)', 'quad', '4 GB', '1x 4GB DDR3L 1600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id_UNIQUE` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
