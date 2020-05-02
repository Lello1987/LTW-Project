-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 02, 2020 alle 16:16
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IndispensApp`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `CategorieD`
--

CREATE TABLE `CategorieD` (
  `Nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `CategorieD`
--

INSERT INTO `CategorieD` (`Nome`) VALUES
('Cantinetta Vini'),
('Frigorifero'),
('Ripostiglio'),
('Sgabuzzino');

-- --------------------------------------------------------

--
-- Struttura della tabella `CategorieP`
--

CREATE TABLE `CategorieP` (
  `Nome` varchar(50) NOT NULL,
  `NumScad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `CategorieP`
--

INSERT INTO `CategorieP` (`Nome`, `NumScad`) VALUES
('Affettati', 2),
('Bevande', 10),
('Carne', 4),
('Cibi in scatola', 8),
('Colazione e Merenda', 4),
('Frutta e Verdura', 2),
('Latticini e Formaggi', 2),
('Pasta', 8),
('Pesce', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `Prodotti`
--

CREATE TABLE `Prodotti` (
  `nome` varchar(50) NOT NULL,
  `id` int(50) NOT NULL,
  `tipoMisura` enum('Pezzi','Litri','Kg','Gr','Ml','Etto') NOT NULL,
  `quantita` int(50) NOT NULL,
  `foto` blob DEFAULT NULL,
  `utente` varchar(50) NOT NULL,
  `categorieD` varchar(50) NOT NULL,
  `categorieP` varchar(50) NOT NULL,
  `scadenza` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Prodotti`
--

INSERT INTO `Prodotti` (`nome`, `id`, `tipoMisura`, `quantita`, `foto`, `utente`, `categorieD`, `categorieP`, `scadenza`) VALUES
('pennette rummo', 3, 'Pezzi', 3, NULL, 'dani', 'Ripostiglio', 'Pasta', '2020-06-18'),
('spaghetti fummo', 4, 'Pezzi', 2, NULL, 'dani', 'Ripostiglio', 'Pasta', '2020-07-16'),
('finocchio', 5, 'Pezzi', 3, NULL, 'dani', 'Frigorifero', 'Frutta e Verdura', '2020-05-14'),
('prosciutto cotto', 6, 'Etto', 2, NULL, 'dani', 'Frigorifero', 'Affettati', '2020-05-20'),
('pan di stelle', 7, 'Kg', 1, NULL, 'dani', 'Ripostiglio', 'Colazione e Merenda', '2020-06-09'),
('orata', 8, 'Pezzi', 1, NULL, 'franko', 'Frigorifero', 'Pesce', '2020-05-20'),
('tonno', 9, 'Pezzi', 5, NULL, 'franko', 'Sgabuzzino', 'Cibi in scatola', '2020-08-12'),
('mela', 10, 'Pezzi', 4, NULL, 'franko', 'Ripostiglio', 'Frutta e Verdura', '2020-06-09'),
('latte', 11, 'Litri', 2, NULL, 'franko', 'Frigorifero', 'Latticini e Formaggi', '2020-05-08'),
('barolo', 12, 'Litri', 2, NULL, 'dani', 'Cantinetta Vini', 'Bevande', '2020-06-30'),
('philadelfia', 13, 'Pezzi', 2, NULL, 'dani', 'Frigorifero', 'Latticini e Formaggi', '2020-05-27'),
('fagioli', 14, 'Pezzi', 3, NULL, 'dani', 'Sgabuzzino', 'Cibi in scatola', '2021-02-10'),
('tavernello', 15, 'Litri', 1, NULL, 'franko', 'Cantinetta Vini', 'Bevande', '2020-09-16'),
('Rocchetta', 16, 'Litri', 6, NULL, 'franko', 'Ripostiglio', 'Bevande', '2021-03-10'),
('bresaola', 17, 'Etto', 2, NULL, 'franko', 'Frigorifero', 'Affettati', '2020-05-27'),
('tavernello', 18, 'Litri', 5, NULL, 'peppe', 'Cantinetta Vini', 'Bevande', '2020-06-24'),
('tavernello dop', 19, 'Litri', 2, NULL, 'peppe', 'Frigorifero', 'Bevande', '2020-05-31'),
('tonno', 20, 'Pezzi', 3, NULL, 'peppe', 'Ripostiglio', 'Cibi in scatola', '2021-04-21'),
('pere', 21, 'Pezzi', 5, NULL, 'peppe', 'Ripostiglio', 'Frutta e Verdura', '2020-05-27'),
('fusilli Voiello', 22, 'Kg', 2, NULL, 'peppe', 'Ripostiglio', 'Pasta', '2020-05-20'),
('fontina', 23, 'Etto', 2, NULL, 'peppe', 'Frigorifero', 'Latticini e Formaggi', '2020-05-20'),
('tagliata', 24, 'Pezzi', 1, NULL, 'peppe', 'Frigorifero', 'Carne', '2020-05-13'),
('insalata', 25, 'Etto', 1, NULL, 'peppe', 'Frigorifero', 'Frutta e Verdura', '2020-05-13'),
('corn flex', 26, 'Etto', 5, NULL, 'peppe', 'Ripostiglio', 'Colazione e Merenda', '2020-07-22'),
('uliveto', 27, 'Pezzi', 5, NULL, 'peppe', 'Sgabuzzino', 'Bevande', '2020-09-30'),
('pelati tutti', 28, 'Litri', 1, NULL, 'peppe', 'Ripostiglio', 'Cibi in scatola', '2020-10-28'),
('tuc', 32, 'Pezzi', 3, NULL, 'peppe', 'Ripostiglio', 'Colazione e Merenda', '2020-07-09'),
('tuc', 33, 'Pezzi', 3, NULL, 'dani', 'Ripostiglio', 'Colazione e Merenda', '2020-07-15'),
('orata', 34, 'Pezzi', 1, NULL, 'franko', 'Frigorifero', 'Pesce', '2020-05-13'),
('pesce spada', 35, 'Pezzi', 1, NULL, 'franko', 'Frigorifero', 'Pesce', '2020-05-21'),
('lombata', 36, 'Etto', 5, NULL, 'peppe', 'Frigorifero', 'Carne', '2020-05-29'),
('spaghetti Voiello', 37, 'Kg', 2, NULL, 'franko', 'Ripostiglio', 'Pasta', '2020-09-23');

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE `Utente` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Utente`
--

INSERT INTO `Utente` (`username`, `password`, `email`) VALUES
('dani', '123', ''),
('franko', '123', ''),
('peppe', '123', 'ciccio@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `CategorieD`
--
ALTER TABLE `CategorieD`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `CategorieP`
--
ALTER TABLE `CategorieP`
  ADD PRIMARY KEY (`Nome`);

--
-- Indici per le tabelle `Prodotti`
--
ALTER TABLE `Prodotti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utente` (`utente`),
  ADD KEY `categorieD` (`categorieD`),
  ADD KEY `categorieP` (`categorieP`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Prodotti`
--
ALTER TABLE `Prodotti`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Prodotti`
--
ALTER TABLE `Prodotti`
  ADD CONSTRAINT `categorieD_fk` FOREIGN KEY (`categorieD`) REFERENCES `CategorieD` (`Nome`),
  ADD CONSTRAINT `categorieP_fk` FOREIGN KEY (`categorieP`) REFERENCES `CategorieP` (`Nome`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`utente`) REFERENCES `Utente` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
