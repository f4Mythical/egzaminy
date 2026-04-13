-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2026 at 11:23 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polskie_gory`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `panstwa`
--

CREATE TABLE `panstwa` (
  `id_panstwa` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `stolica` varchar(50) NOT NULL,
  `ludnosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panstwa`
--

INSERT INTO `panstwa` (`id_panstwa`, `nazwa`, `stolica`, `ludnosc`) VALUES
(1, 'Polska', 'Warszawa', 38000000),
(2, 'Nepal', 'Katmandu', 30000000),
(3, 'Chiny', 'Pekin', 1400000000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pasma_gorskie`
--

CREATE TABLE `pasma_gorskie` (
  `id_pasma` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `powierzchnia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasma_gorskie`
--

INSERT INTO `pasma_gorskie` (`id_pasma`, `nazwa`, `powierzchnia`) VALUES
(1, 'Tatry', 785),
(2, 'Sudety', 9300),
(3, 'Beskidy', 4800),
(4, 'Himalaje', 595000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `szczyty`
--

CREATE TABLE `szczyty` (
  `id_szczytu` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `wysokosc` int(11) NOT NULL,
  `zdjecie` varchar(50) NOT NULL,
  `id_pasma` int(11) NOT NULL,
  `id_panstwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `szczyty`
--

INSERT INTO `szczyty` (`id_szczytu`, `nazwa`, `wysokosc`, `zdjecie`, `id_pasma`, `id_panstwa`) VALUES
(1, 'Rysy', 2500, 'rysy.jpg', 1, 1),
(3, 'Giewont', 1894, 'giewont.jpg', 1, 1),
(4, 'Krzesanica', 2122, 'krzesanica.jpg', 1, 1),
(5, 'Świnica', 2301, 'swinica.jpg', 1, 1),
(6, 'Kościelec', 2155, 'koscielec.jpg', 1, 1),
(8, 'Babia Góra', 1725, 'babia.jpg', 3, 1),
(9, 'Pilsko', 1557, 'pilsko.jpg', 3, 1),
(10, 'Tarnica', 1346, 'tarnica.jpg', 3, 1),
(11, 'Radziejowa', 1226, 'radziejowa.jpg', 3, 1),
(12, 'Skrzyczne', 1257, 'skrzyczne.jpg', 3, 1),
(13, 'Mogielica', 1170, 'mogielica.jpg', 3, 1),
(14, 'Śnieżka', 1603, 'sniezka.jpg', 2, 1),
(15, 'Wielki Szyszak', 1509, 'wielki.jpg', 2, 1),
(16, 'Śnieżnik', 1425, 'snieznik.jpg', 2, 1),
(17, 'Szczeliniec Wielki', 919, 'szczeliniec.jpg', 2, 1),
(18, 'Ślęża', 718, 'sleza.jpg', 2, 1),
(29, 'Kasprowy wierch', 1987, 'kasprowy.jpg', 1, 1),
(30, 'Mount Everest', 8848, 'everest.jpg', 4, 2),
(31, 'K2', 8611, 'k2.jpg', 4, 3),
(32, 'Makalu', 8485, 'makalu.jpg', 4, 2),
(33, 'Lhotse', 8516, 'lhotse.jpg', 4, 2),
(34, 'Gaszerbrum I', 8080, 'gaszerbrum.jpg', 4, 3),
(35, 'Broad Peak', 8051, 'broad.jpg', 4, 3),
(36, 'Kozi Wierch', 2291, 'kozi.jpg', 1, 1),
(37, 'Klimczok', 1117, 'klimczok.jpg', 3, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `panstwa`
--
ALTER TABLE `panstwa`
  ADD PRIMARY KEY (`id_panstwa`);

--
-- Indeksy dla tabeli `pasma_gorskie`
--
ALTER TABLE `pasma_gorskie`
  ADD PRIMARY KEY (`id_pasma`);

--
-- Indeksy dla tabeli `szczyty`
--
ALTER TABLE `szczyty`
  ADD PRIMARY KEY (`id_szczytu`),
  ADD KEY `id_pasma` (`id_pasma`),
  ADD KEY `id_kraju` (`id_panstwa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panstwa`
--
ALTER TABLE `panstwa`
  MODIFY `id_panstwa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasma_gorskie`
--
ALTER TABLE `pasma_gorskie`
  MODIFY `id_pasma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `szczyty`
--
ALTER TABLE `szczyty`
  MODIFY `id_szczytu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `szczyty`
--
ALTER TABLE `szczyty`
  ADD CONSTRAINT `szczyty_ibfk_1` FOREIGN KEY (`id_pasma`) REFERENCES `pasma_gorskie` (`id_pasma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `szczyty_ibfk_2` FOREIGN KEY (`id_panstwa`) REFERENCES `panstwa` (`id_panstwa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
