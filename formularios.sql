-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-04-2020 a las 20:43:29
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Matricula` varchar(10) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Matricula`, `Nombre`, `Correo`, `Telefono`) VALUES
(6, '653454', 'dcscs', 'csdcds@65432', '65324'),
(5, '5244', 'Itahi Cristina De Leon Martinez', '5442@dedelndlkew', '6545');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

DROP TABLE IF EXISTS `carreras`;
CREATE TABLE IF NOT EXISTS `carreras` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Clavec` int(15) NOT NULL,
  `Nombre` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`ID`, `Clavec`, `Nombre`) VALUES
(8, 8, 'uriel hdz'),
(7, 65321, 'ITI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `NumG` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`ID`, `NumG`, `Nombre`) VALUES
(1, '653', 'Fisica'),
(2, '4', 'ITI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

DROP TABLE IF EXISTS `maestros`;
CREATE TABLE IF NOT EXISTS `maestros` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `Numem` varchar(15) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`ID`, `Numem`, `Nombre`, `Correo`, `Telefono`) VALUES
(1, '52', 'Ramon', 'frfr@2015de', '8653156'),
(2, '6512', 'uriel hdz', 'frfr@2015de', '65456'),
(3, '645', 'ITI', 'frfr@2015de', '654986'),
(4, '15', 'Uriel', 'uriel@145hdz', '4448596245');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `ClaveM` varchar(15) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`ID`, `ClaveM`, `Nombre`) VALUES
(2, '6595', 'Ramon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
