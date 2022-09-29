-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 12:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr_code_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnikID` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `prioritet` char(1) NOT NULL COMMENT '(A)DMIN/(P)REDAVAC/(S)TUDENT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `predavac`
--

CREATE TABLE `predavac` (
  `predavacID` int(11) NOT NULL,
  `korisnikID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `predavac_po_predmetu`
--

CREATE TABLE `predavac_po_predmetu` (
  `ppID` int(11) NOT NULL,
  `predavacID` int(11) NOT NULL,
  `sifra_predmeta` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `predmet`
--

CREATE TABLE `predmet` (
  `sifra_predmeta` char(7) NOT NULL,
  `naziv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `predmet_po_programu`
--

CREATE TABLE `predmet_po_programu` (
  `pppID` int(11) NOT NULL,
  `sifra_predmeta` char(7) NOT NULL,
  `sifra_programa` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prisustvo`
--

CREATE TABLE `prisustvo` (
  `prisustvoID` int(11) NOT NULL,
  `broj_indeksa` char(10) NOT NULL,
  `predavacID` int(11) NOT NULL,
  `sifra_predmeta` char(7) NOT NULL,
  `datum` date NOT NULL,
  `vreme` varchar(10) NOT NULL,
  `indikator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `broj_indeksa` char(10) NOT NULL,
  `korisnikID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studijski_program`
--

CREATE TABLE `studijski_program` (
  `sifra_programa` char(7) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `tip` char(1) NOT NULL COMMENT '(O)snovne/(S)trukovne/(M)aster',
  `akademija` char(2) NOT NULL COMMENT 'KG/KS/AR/TS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnikID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `predavac`
--
ALTER TABLE `predavac`
  ADD PRIMARY KEY (`predavacID`),
  ADD KEY `korisnikID` (`korisnikID`);

--
-- Indexes for table `predavac_po_predmetu`
--
ALTER TABLE `predavac_po_predmetu`
  ADD PRIMARY KEY (`ppID`),
  ADD KEY `predavacID` (`predavacID`),
  ADD KEY `sifra_predmeta` (`sifra_predmeta`);

--
-- Indexes for table `predmet`
--
ALTER TABLE `predmet`
  ADD PRIMARY KEY (`sifra_predmeta`);

--
-- Indexes for table `predmet_po_programu`
--
ALTER TABLE `predmet_po_programu`
  ADD PRIMARY KEY (`pppID`),
  ADD KEY `sifra_predmeta` (`sifra_predmeta`),
  ADD KEY `sifra_programa` (`sifra_programa`);

--
-- Indexes for table `prisustvo`
--
ALTER TABLE `prisustvo`
  ADD PRIMARY KEY (`prisustvoID`),
  ADD UNIQUE KEY `indikator` (`indikator`),
  ADD KEY `broj_indeksa` (`broj_indeksa`),
  ADD KEY `predavacID` (`predavacID`),
  ADD KEY `sifra_predmeta` (`sifra_predmeta`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`broj_indeksa`),
  ADD KEY `korisnikID` (`korisnikID`);

--
-- Indexes for table `studijski_program`
--
ALTER TABLE `studijski_program`
  ADD PRIMARY KEY (`sifra_programa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnikID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predavac`
--
ALTER TABLE `predavac`
  MODIFY `predavacID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predavac_po_predmetu`
--
ALTER TABLE `predavac_po_predmetu`
  MODIFY `ppID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predmet_po_programu`
--
ALTER TABLE `predmet_po_programu`
  MODIFY `pppID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prisustvo`
--
ALTER TABLE `prisustvo`
  MODIFY `prisustvoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `predavac`
--
ALTER TABLE `predavac`
  ADD CONSTRAINT `predavac_ibfk_1` FOREIGN KEY (`korisnikID`) REFERENCES `korisnik` (`korisnikID`);

--
-- Constraints for table `predavac_po_predmetu`
--
ALTER TABLE `predavac_po_predmetu`
  ADD CONSTRAINT `predavac_po_predmetu_ibfk_1` FOREIGN KEY (`predavacID`) REFERENCES `predavac` (`predavacID`),
  ADD CONSTRAINT `predavac_po_predmetu_ibfk_2` FOREIGN KEY (`sifra_predmeta`) REFERENCES `predmet` (`sifra_predmeta`);

--
-- Constraints for table `predmet_po_programu`
--
ALTER TABLE `predmet_po_programu`
  ADD CONSTRAINT `predmet_po_programu_ibfk_1` FOREIGN KEY (`sifra_predmeta`) REFERENCES `predmet` (`sifra_predmeta`),
  ADD CONSTRAINT `predmet_po_programu_ibfk_2` FOREIGN KEY (`sifra_programa`) REFERENCES `studijski_program` (`sifra_programa`);

--
-- Constraints for table `prisustvo`
--
ALTER TABLE `prisustvo`
  ADD CONSTRAINT `prisustvo_ibfk_1` FOREIGN KEY (`broj_indeksa`) REFERENCES `student` (`broj_indeksa`),
  ADD CONSTRAINT `prisustvo_ibfk_2` FOREIGN KEY (`sifra_predmeta`) REFERENCES `predmet` (`sifra_predmeta`),
  ADD CONSTRAINT `prisustvo_ibfk_3` FOREIGN KEY (`predavacID`) REFERENCES `predavac` (`predavacID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`korisnikID`) REFERENCES `korisnik` (`korisnikID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
