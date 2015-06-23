-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Cze 2015, 10:41
-- Wersja serwera: 5.6.24
-- Wersja PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `holdem`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `flop`
--

CREATE TABLE IF NOT EXISTS `flop` (
  `idfloptemp` int(11) NOT NULL,
  `idflop` int(11) NOT NULL,
  `movenumber` int(11) NOT NULL,
  `bigblindmove` text NOT NULL,
  `valueone` int(11) NOT NULL,
  `dealermove` text NOT NULL,
  `valuetwo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `flop`
--

INSERT INTO `flop` (`idfloptemp`, `idflop`, `movenumber`, `bigblindmove`, `valueone`, `dealermove`, `valuetwo`) VALUES
(1, 2, 2, 'c', 2, 'c', 2),
(2, 0, 1, 'x', 10, 'x', 10),
(3, 0, 1, 'x', 10, 'x', 10),
(4, 0, 1, 'x', 10, 'x', 10),
(5, 0, 1, 'x', 10, 'x', 10),
(6, 0, 1, 'x', 10, 'x', 10),
(7, 0, 1, 'x', 10, 'x', 10),
(8, 1, 1, 'x', 10, 'x', 10),
(9, 0, 1, 'x', 10, 'x', 10),
(10, 0, 1, 'x', 10, 'x', 10),
(11, 0, 1, 'x', 10, 'x', 10),
(12, 0, 1, 'x', 10, 'x', 10),
(13, 0, 1, 'x', 10, 'x', 10),
(14, 0, 1, 'x', 10, 'x', 10),
(15, 1, 2, 'x', 10, 'x', 10),
(16, 1, 2, 'x', 10, 'x', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gracze`
--

CREATE TABLE IF NOT EXISTS `gracze` (
  `idgracza` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `rokurodzenia` int(11) NOT NULL,
  `zwyciestwa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `gracze`
--

INSERT INTO `gracze` (`idgracza`, `imie`, `nazwisko`, `rokurodzenia`, `zwyciestwa`) VALUES
(45, 'Arek', 'Cyktor', 1992, 2),
(46, 'Maciek', 'Baranowski', 1992, 19),
(47, 'Starszy', 'Pan', 1900, 999),
(48, 'Mikushi', 'Dziurzynska', 1992, 10000),
(49, 'Basia', 'Wojcik', 1992, 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `hands`
--

CREATE TABLE IF NOT EXISTS `hands` (
  `idhand` int(11) NOT NULL,
  `idturniej` int(11) NOT NULL,
  `idgame` int(11) NOT NULL,
  `stackone` int(11) NOT NULL,
  `stacktwo` int(11) NOT NULL,
  `holecardsone` text NOT NULL,
  `holecardstwo` text NOT NULL,
  `dealer` text NOT NULL,
  `blindlimit` int(11) NOT NULL,
  `idpreflop` int(11) NOT NULL,
  `flop` text NOT NULL,
  `idflop` int(11) NOT NULL,
  `turn` text NOT NULL,
  `idturn` int(11) NOT NULL,
  `river` text NOT NULL,
  `idriver` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `hands`
--

INSERT INTO `hands` (`idhand`, `idturniej`, `idgame`, `stackone`, `stacktwo`, `holecardsone`, `holecardstwo`, `dealer`, `blindlimit`, `idpreflop`, `flop`, `idflop`, `turn`, `idturn`, `river`, `idriver`) VALUES
(1, 1, 1, 1000, 1000, 'AA', 'AK', '1', 20, 1, 'AAA', 1, 'x', 1, 'x', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `river`
--

CREATE TABLE IF NOT EXISTS `river` (
  `idrivertemp` int(11) NOT NULL,
  `idriver` int(11) NOT NULL,
  `movenumber` int(11) NOT NULL,
  `bigblindmove` text NOT NULL,
  `valueone` int(11) NOT NULL,
  `dealermove` text NOT NULL,
  `valuetwo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `river`
--

INSERT INTO `river` (`idrivertemp`, `idriver`, `movenumber`, `bigblindmove`, `valueone`, `dealermove`, `valuetwo`) VALUES
(1, 0, 1, 'x', 10, 'x', 10),
(2, 0, 1, 'x', 10, 'x', 10),
(3, 0, 1, 'x', 10, 'x', 10),
(4, 0, 1, 'xxx', 10, 'x', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rozgrywka`
--

CREATE TABLE IF NOT EXISTS `rozgrywka` (
  `idgame` int(11) NOT NULL,
  `tablename` text NOT NULL,
  `playerone` int(11) NOT NULL,
  `playertwo` int(11) NOT NULL,
  `gamewinnerid` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `rozgrywka`
--

INSERT INTO `rozgrywka` (`idgame`, `tablename`, `playerone`, `playertwo`, `gamewinnerid`, `time`) VALUES
(10, 'aax', 2, 2, 2, 2),
(11, 'Red', 45, 46, 1, 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turn`
--

CREATE TABLE IF NOT EXISTS `turn` (
  `idturntemp` int(11) NOT NULL,
  `idturn` int(11) NOT NULL,
  `movenumber` int(11) NOT NULL,
  `bigblindmove` text NOT NULL,
  `valueone` int(11) NOT NULL,
  `dealermove` text NOT NULL,
  `valuetwo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `turn`
--

INSERT INTO `turn` (`idturntemp`, `idturn`, `movenumber`, `bigblindmove`, `valueone`, `dealermove`, `valuetwo`) VALUES
(1, 0, 1, 'x', 10, 'x', 10),
(2, 0, 1, 'x', 10, 'x', 10),
(3, 0, 1, 'x', 10, 'x', 10),
(4, 0, 1, 'x', 10, 'x', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turniej`
--

CREATE TABLE IF NOT EXISTS `turniej` (
  `idturniej` int(11) NOT NULL,
  `tourneyname` text NOT NULL,
  `numberofplayers` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `idwinner` int(11) NOT NULL,
  `reward` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `turniej`
--

INSERT INTO `turniej` (`idturniej`, `tourneyname`, `numberofplayers`, `time`, `idwinner`, `reward`) VALUES
(5, 'WSOPxx', 200, 6000, 1, 10000),
(6, 'SCOOPx', 300, 30000, 3, 20000),
(7, 'Alpha', 2, 1000, 2, 1000),
(8, '7', 11, 1000, 1, 10000);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `flop`
--
ALTER TABLE `flop`
  ADD PRIMARY KEY (`idfloptemp`);

--
-- Indexes for table `gracze`
--
ALTER TABLE `gracze`
  ADD PRIMARY KEY (`idgracza`);

--
-- Indexes for table `hands`
--
ALTER TABLE `hands`
  ADD PRIMARY KEY (`idhand`);

--
-- Indexes for table `river`
--
ALTER TABLE `river`
  ADD PRIMARY KEY (`idrivertemp`);

--
-- Indexes for table `rozgrywka`
--
ALTER TABLE `rozgrywka`
  ADD PRIMARY KEY (`idgame`);

--
-- Indexes for table `turn`
--
ALTER TABLE `turn`
  ADD PRIMARY KEY (`idturntemp`);

--
-- Indexes for table `turniej`
--
ALTER TABLE `turniej`
  ADD PRIMARY KEY (`idturniej`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `flop`
--
ALTER TABLE `flop`
  MODIFY `idfloptemp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT dla tabeli `gracze`
--
ALTER TABLE `gracze`
  MODIFY `idgracza` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT dla tabeli `hands`
--
ALTER TABLE `hands`
  MODIFY `idhand` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `river`
--
ALTER TABLE `river`
  MODIFY `idrivertemp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `rozgrywka`
--
ALTER TABLE `rozgrywka`
  MODIFY `idgame` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `turn`
--
ALTER TABLE `turn`
  MODIFY `idturntemp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `turniej`
--
ALTER TABLE `turniej`
  MODIFY `idturniej` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
