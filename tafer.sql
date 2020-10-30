-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 11:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tafer`
--

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `IdLead` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mediaphotos`
--

CREATE TABLE `mediaphotos` (
  `IdPhoto` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mediavideos`
--

CREATE TABLE `mediavideos` (
  `IdVideo` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Destination` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `IdPost` int(11) NOT NULL,
  `IdPhoto` int(11) NOT NULL,
  `IdVideo` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `Namepost` varchar(50) NOT NULL,
  `ContentPost` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Acces` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`IdLead`);

--
-- Indexes for table `mediaphotos`
--
ALTER TABLE `mediaphotos`
  ADD PRIMARY KEY (`IdPhoto`);

--
-- Indexes for table `mediavideos`
--
ALTER TABLE `mediavideos`
  ADD PRIMARY KEY (`IdVideo`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`IdPost`),
  ADD KEY `IdPhoto` (`IdPhoto`),
  ADD KEY `IdVideo` (`IdVideo`),
  ADD KEY `IdUser` (`IdUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `IdLead` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediaphotos`
--
ALTER TABLE `mediaphotos`
  MODIFY `IdPhoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediavideos`
--
ALTER TABLE `mediavideos`
  MODIFY `IdVideo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `IdPost` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `IdPhoto` FOREIGN KEY (`IdPhoto`) REFERENCES `mediaphotos` (`IdPhoto`),
  ADD CONSTRAINT `IdUser` FOREIGN KEY (`IdUser`) REFERENCES `user` (`IdUser`),
  ADD CONSTRAINT `IdVideo` FOREIGN KEY (`IdVideo`) REFERENCES `mediavideos` (`IdVideo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
