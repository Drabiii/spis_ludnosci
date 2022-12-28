-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Gru 2020, 13:20
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `osoby`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dodane`
--

CREATE TABLE `dodane` (
  `id` int(100) NOT NULL,
  `imien` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kp` varchar(100) NOT NULL,
  `numer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dodane`
--

INSERT INTO `dodane` (`id`, `imien`, `email`, `kp`, `numer`) VALUES
(1, 'Geoffrey Scott', 'aliquet@in.ca', '27-600', 441186454),
(2, 'Portia Ward', 'porttitor.vulputate@magnaa.ca', '27-600', 916104784),
(3, 'Colette Flores', 'ornare.facilisis.eget@liberoet.ca', '27-600', 957958533),
(4, 'Stone Ferguson', 'amet.orci@tellusfaucibus.ca', '27-600', 372170416),
(5, 'Patrick Barber', 'Quisque@nec.com', '27-650', 298889323),
(6, 'Briar Miranda', 'vitae@fermentumrisusat.com', '27-650', 359195279),
(7, 'Leroy Witt', 'sollicitudin.orci.sem@blanditcongueIn.com', '27-650', 864716626),
(8, 'Latifah Mcknight', 'magna@euodioPhasellus.edu', '27-650', 997739712),
(9, 'Gillian Blackwell', 'tristique.aliquet.Phasellus@pedeacurna.com', '90-060', 356565471),
(10, 'Emerson Potter', 'sollicitudin@ultricessit.ca', '39-432', 135179489),
(11, 'Dorothy Dudley', 'adipiscing.enim@diamdictumsapien.com', '39-432', 750242967),
(12, 'Natalie Ryan', 'ultrices@sedsemegestas.edu', '39-432', 557700565),
(13, 'Colorado Griffith', 'auctor@fringillaeuismod.org', '39-432', 449363070),
(14, 'Armand Gates', 'blandit.Nam@augue.ca', '90-060', 411977109),
(15, 'Chanda Kim', 'enim.Mauris@famesacturpis.org', '25-101', 71668806),
(16, 'Grace Kent', 'magnis.dis.parturient@luctusCurabitur.edu', '25-101', 599647407),
(17, 'Marcia Blevins', 'metus.In@idantedictum.org', '25-101', 241768386),
(18, 'Ivy Hensley', 'Vivamus.euismod@tincidunt.edu', '25-101', 308574702),
(19, 'Joshua Fields', 'commodo.auctor.velit@arcu.org', '90-060', 726831913),
(20, 'Audrey Little', 'Fusce.diam@Integer.com', '00-001', 305659867),
(21, 'Hasad Hogan', 'sollicitudin.a.malesuada@et.edu', '00-001', 11159322),
(22, 'Tallulah Lynn', 'Nunc@sem.com', '00-001', 142463926),
(23, 'Alexandra Gill', 'aliquet.sem.ut@Proinvelit.edu', '00-001', 723554178),
(24, 'Beau Suarez', 'ligula.Aenean@urnaUt.org', '80-026', 251661209),
(25, 'Germane Preston', 'tincidunt@ante.edu', '80-026', 487450793),
(26, 'Inga Carpenter', 'dui.augue.eu@nibhenimgravida.org', '80-026', 705420925),
(27, 'Evangeline Obrien', 'nec.urna@massa.edu', '80-026', 398868331),
(28, 'Mari Blackburn', 'in@Aliquamrutrum.com', '90-060', 284383236),
(29, 'Heather Nichols', 'augue.Sed@augueSed.edu', '39-442', 372607285),
(30, 'Len Carroll', 'tortor.Integer@Aliquamornare.com', '39-442', 537746362);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `weryfikacja`
--

CREATE TABLE `weryfikacja` (
  `id` int(100) NOT NULL,
  `imien` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kp` varchar(100) NOT NULL,
  `numer` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `weryfikacja`
--

INSERT INTO `weryfikacja` (`id`, `imien`, `email`, `kp`, `numer`) VALUES
(1, 'Juliusz Laskowska', 'JuliaDifficult@gmail.com', '76-766', 786774837),
(2, 'Fryderyk Jaworski', 'FryderykPaltry@gmail.com', '27-899', 765599862);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dodane`
--
ALTER TABLE `dodane`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `weryfikacja`
--
ALTER TABLE `weryfikacja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dodane`
--
ALTER TABLE `dodane`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
