-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Lip 2017, 10:17
-- Wersja serwera: 5.7.14
-- Wersja PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `invoicebook`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `incomes`
--

CREATE TABLE `incomes` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `consultation` int(5) NOT NULL,
  `premium_packet` int(5) NOT NULL,
  `outcome` int(5) NOT NULL,
  `description_outcome` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `incomes`
--

INSERT INTO `incomes` (`id`, `date`, `consultation`, `premium_packet`, `outcome`, `description_outcome`) VALUES
(1, '2017-06-01', 100, 200, 100, 'test'),
(2, '2017-06-23', 300, 0, 0, 'Usa konsultacja'),
(9, '2017-06-02', 100, 200, 100, '50'),
(10, '2017-06-02', 100, 200, 100, '50'),
(8, '2017-06-02', 100, 200, 100, '50'),
(7, '2017-06-03', 100, 50, 40, 'Ksiazka'),
(11, '2017-06-18', 100, 100, 100, '100'),
(12, '2017-06-03', 100, 300, 200, 'To jest ten opis');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
