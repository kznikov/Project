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
-- Структура на таблица `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(60) CHARACTER SET utf8 NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `comments`
--

INSERT INTO `comments` (`id`, `title`, `alias`, `comment`, `c_date`, `rating`) VALUES
(13, 'eqwfewf', '12ewf', 'wefw', '2017-03-22 10:33:06', 0),
(13, 'fwefw', 'fwefw', 'fwf', '2017-03-22 10:33:21', 40),
(50, 'r1fr1', '12e4e12', '1r1r', '2017-03-22 10:33:59', 0),
(13, '123', '123', '123', '2017-03-22 12:25:16', 80),
(13, '123', '123', '123', '2017-03-22 12:25:51', 80),
(97, '123', '123', '123', '2017-03-22 14:15:00', 60),
(50, '123', '123', '123', '2017-03-22 17:31:01', 100),
(50, '123', '123', '123', '2017-03-22 17:34:19', 100),
(22, '123', '123', '123', '2017-03-23 09:52:51', 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
