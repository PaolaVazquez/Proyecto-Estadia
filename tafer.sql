-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2020 a las 21:03:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tafer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE `leads` (
  `IdLead` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `fecha-reg` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`IdLead`, `Fname`, `Lname`, `Phone`, `Email`, `fecha-reg`) VALUES
(1, 'Paola', 'Vazquez', '3338398861', 'paola.vazra@gmail.com', '2020-11-27'),
(2, 'paola itzel', 'vazquez ramos', '1234567890', 'fgythryh@gmail.com', '2020-12-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediaphotos`
--

CREATE TABLE `mediaphotos` (
  `IdPhoto` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediavideos`
--

CREATE TABLE `mediavideos` (
  `IdVideo` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Pass` varchar(20) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Phone` varchar(12) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Access` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`IdUser`, `Fname`, `Lname`, `Pass`, `Position`, `Phone`, `Email`, `Access`) VALUES
(1, 'paola itzel', 'vazquez ramos', '12345', 'Paola', '1234567890', 'paola.vazra98@gmail.com', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`IdLead`);

--
-- Indices de la tabla `mediaphotos`
--
ALTER TABLE `mediaphotos`
  ADD PRIMARY KEY (`IdPhoto`);

--
-- Indices de la tabla `mediavideos`
--
ALTER TABLE `mediavideos`
  ADD PRIMARY KEY (`IdVideo`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`IdPost`),
  ADD KEY `IdPhoto` (`IdPhoto`),
  ADD KEY `IdVideo` (`IdVideo`),
  ADD KEY `IdUser` (`IdUser`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `IdLead` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mediaphotos`
--
ALTER TABLE `mediaphotos`
  MODIFY `IdPhoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mediavideos`
--
ALTER TABLE `mediavideos`
  MODIFY `IdVideo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `IdPost` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `IdPhoto` FOREIGN KEY (`IdPhoto`) REFERENCES `mediaphotos` (`IdPhoto`),
  ADD CONSTRAINT `IdVideo` FOREIGN KEY (`IdVideo`) REFERENCES `mediavideos` (`IdVideo`),
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`IdUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
