-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 04:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base de donnees`
--

-- --------------------------------------------------------

--
-- Table structure for table `annee_academique`
--

CREATE TABLE `annee_academique` (
  `Id_Annee_Academique` int(11) NOT NULL,
  `Annee_Academique` varchar(255) NOT NULL,
  `Is_Actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annee_academique`
--

INSERT INTO `annee_academique` (`Id_Annee_Academique`, `Annee_Academique`, `Is_Actif`) VALUES
(1, '2016-2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `domaine`
--

CREATE TABLE `domaine` (
  `Code_Domaine` int(11) NOT NULL,
  `Libelle_Domaine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domaine`
--

INSERT INTO `domaine` (`Code_Domaine`, `Libelle_Domaine`) VALUES
(1, 'Informatique');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `Id_Code_Etudiant` int(11) NOT NULL,
  `Code_Etudiant` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Sexe` char(1) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant_niveau`
--

CREATE TABLE `etudiant_niveau` (
  `id_Etudiant_Niveau` int(11) NOT NULL,
  `Code_Etudiant` varchar(255) NOT NULL,
  `Annee_Academique` varchar(255) NOT NULL,
  `Code_Mention` int(11) NOT NULL,
  `Code_Niveau` int(11) NOT NULL,
  `Vacation_Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `Id_Matiere` int(11) NOT NULL,
  `Matiere_Code` varchar(255) NOT NULL,
  `Matiere_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`Id_Matiere`, `Matiere_Code`, `Matiere_Name`) VALUES
(1, '01', 'Anglais');

-- --------------------------------------------------------

--
-- Table structure for table `matiere_enseigne`
--

CREATE TABLE `matiere_enseigne` (
  `Id_Matiere_Enseigne` int(11) NOT NULL,
  `Code_Mention` int(11) NOT NULL,
  `Code_Niveau` int(11) NOT NULL,
  `Annee_Academique` varchar(255) NOT NULL,
  `Code_Semestre` int(11) NOT NULL,
  `Matiere_code` varchar(255) NOT NULL,
  `Coefficient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mention`
--

CREATE TABLE `mention` (
  `Code_Mention` int(11) NOT NULL,
  `Code_Domaine` int(11) NOT NULL,
  `Libelle_Mention` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mention_niveau`
--

CREATE TABLE `mention_niveau` (
  `Id_Mention_Niveau` int(11) NOT NULL,
  `Code_Mention` int(11) NOT NULL,
  `Code_Niveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `Code_Niveau` int(11) NOT NULL,
  `Libelle_Niveau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`Code_Niveau`, `Libelle_Niveau`) VALUES
(1, 'Master');

-- --------------------------------------------------------

--
-- Table structure for table `note_etudiant`
--

CREATE TABLE `note_etudiant` (
  `Id_Note_Etudiant` int(11) NOT NULL,
  `Code_Mention` int(11) NOT NULL,
  `Code_Niveau` int(11) NOT NULL,
  `Annee_Academique` varchar(255) NOT NULL,
  `Code_Semestre` int(11) NOT NULL,
  `Matiere_Code` varchar(255) NOT NULL,
  `Code_Etudiant` varchar(255) NOT NULL,
  `Intra` bigint(20) NOT NULL,
  `Finale` bigint(20) NOT NULL,
  `Note_finale` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semestre`
--

CREATE TABLE `semestre` (
  `Code_Semestre` int(11) NOT NULL,
  `Libelle` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semestre1`
--

CREATE TABLE `semestre1` (
  `Code_Semestre` int(11) NOT NULL,
  `Libelle_Semestre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semestre1`
--

INSERT INTO `semestre1` (`Code_Semestre`, `Libelle_Semestre`) VALUES
(1, '1ere Semestre'),
(2, '1ere Semestre');

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `Vacation_Code` int(11) NOT NULL,
  `Libelle_Vacation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`Vacation_Code`, `Libelle_Vacation`) VALUES
(1, 'soir'),
(2, 'matin'),
(3, 'soir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annee_academique`
--
ALTER TABLE `annee_academique`
  ADD PRIMARY KEY (`Annee_Academique`),
  ADD UNIQUE KEY `Id_Annee_Academique` (`Id_Annee_Academique`);

--
-- Indexes for table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`Code_Domaine`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`Code_Etudiant`),
  ADD UNIQUE KEY `Id_Code_Etudiant` (`Id_Code_Etudiant`);

--
-- Indexes for table `etudiant_niveau`
--
ALTER TABLE `etudiant_niveau`
  ADD PRIMARY KEY (`Code_Etudiant`,`Annee_Academique`),
  ADD UNIQUE KEY `id_Etudiant_Niveau` (`id_Etudiant_Niveau`),
  ADD KEY `Annee_Academique` (`Annee_Academique`),
  ADD KEY `Vacation_Code` (`Vacation_Code`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`Matiere_Code`),
  ADD UNIQUE KEY `Id_Matiere` (`Id_Matiere`);

--
-- Indexes for table `matiere_enseigne`
--
ALTER TABLE `matiere_enseigne`
  ADD PRIMARY KEY (`Code_Mention`,`Code_Niveau`,`Annee_Academique`,`Code_Semestre`,`Matiere_code`),
  ADD UNIQUE KEY `Id_Matiere_Enseigne` (`Id_Matiere_Enseigne`),
  ADD KEY `Code_Niveau` (`Code_Niveau`),
  ADD KEY `Annee_Academique` (`Annee_Academique`),
  ADD KEY `Code_Semestre` (`Code_Semestre`),
  ADD KEY `Matiere_code` (`Matiere_code`);

--
-- Indexes for table `mention`
--
ALTER TABLE `mention`
  ADD PRIMARY KEY (`Code_Mention`),
  ADD KEY `Code_Domaine` (`Code_Domaine`);

--
-- Indexes for table `mention_niveau`
--
ALTER TABLE `mention_niveau`
  ADD PRIMARY KEY (`Code_Mention`,`Code_Niveau`),
  ADD UNIQUE KEY `Id_Mention_Niveau` (`Id_Mention_Niveau`),
  ADD KEY `Code_Niveau` (`Code_Niveau`);

--
-- Indexes for table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`Code_Niveau`);

--
-- Indexes for table `note_etudiant`
--
ALTER TABLE `note_etudiant`
  ADD PRIMARY KEY (`Code_Mention`,`Code_Niveau`,`Annee_Academique`,`Code_Semestre`,`Matiere_Code`,`Code_Etudiant`),
  ADD UNIQUE KEY `Id_Note_Etudiant` (`Id_Note_Etudiant`);

--
-- Indexes for table `semestre1`
--
ALTER TABLE `semestre1`
  ADD PRIMARY KEY (`Code_Semestre`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`Vacation_Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annee_academique`
--
ALTER TABLE `annee_academique`
  MODIFY `Id_Annee_Academique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `Code_Domaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `Id_Code_Etudiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etudiant_niveau`
--
ALTER TABLE `etudiant_niveau`
  MODIFY `id_Etudiant_Niveau` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `Id_Matiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `matiere_enseigne`
--
ALTER TABLE `matiere_enseigne`
  MODIFY `Id_Matiere_Enseigne` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mention`
--
ALTER TABLE `mention`
  MODIFY `Code_Mention` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mention_niveau`
--
ALTER TABLE `mention_niveau`
  MODIFY `Id_Mention_Niveau` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `Code_Niveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `note_etudiant`
--
ALTER TABLE `note_etudiant`
  MODIFY `Id_Note_Etudiant` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semestre1`
--
ALTER TABLE `semestre1`
  MODIFY `Code_Semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `Vacation_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiant_niveau`
--
ALTER TABLE `etudiant_niveau`
  ADD CONSTRAINT `etudiant_niveau_ibfk_1` FOREIGN KEY (`Annee_Academique`) REFERENCES `annee_academique` (`Annee_Academique`),
  ADD CONSTRAINT `etudiant_niveau_ibfk_2` FOREIGN KEY (`Code_Etudiant`) REFERENCES `etudiant` (`Code_Etudiant`),
  ADD CONSTRAINT `etudiant_niveau_ibfk_3` FOREIGN KEY (`Vacation_Code`) REFERENCES `vacation` (`Vacation_Code`);

--
-- Constraints for table `matiere_enseigne`
--
ALTER TABLE `matiere_enseigne`
  ADD CONSTRAINT `matiere_enseigne_ibfk_1` FOREIGN KEY (`Code_Mention`) REFERENCES `mention_niveau` (`Code_Mention`),
  ADD CONSTRAINT `matiere_enseigne_ibfk_2` FOREIGN KEY (`Code_Niveau`) REFERENCES `mention_niveau` (`Code_Niveau`),
  ADD CONSTRAINT `matiere_enseigne_ibfk_3` FOREIGN KEY (`Annee_Academique`) REFERENCES `annee_academique` (`Annee_Academique`),
  ADD CONSTRAINT `matiere_enseigne_ibfk_4` FOREIGN KEY (`Code_Semestre`) REFERENCES `semestre1` (`Code_Semestre`),
  ADD CONSTRAINT `matiere_enseigne_ibfk_5` FOREIGN KEY (`Matiere_code`) REFERENCES `matiere` (`Matiere_Code`);

--
-- Constraints for table `mention`
--
ALTER TABLE `mention`
  ADD CONSTRAINT `mention_ibfk_1` FOREIGN KEY (`Code_Domaine`) REFERENCES `domaine` (`Code_Domaine`);

--
-- Constraints for table `mention_niveau`
--
ALTER TABLE `mention_niveau`
  ADD CONSTRAINT `mention_niveau_ibfk_1` FOREIGN KEY (`Code_Mention`) REFERENCES `mention` (`Code_Mention`),
  ADD CONSTRAINT `mention_niveau_ibfk_2` FOREIGN KEY (`Code_Niveau`) REFERENCES `niveau` (`Code_Niveau`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
