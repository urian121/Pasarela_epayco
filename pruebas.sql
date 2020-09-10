-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-09-2020 a las 20:22:30
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
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `fechaRegistro` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `fechaUltimaSesion` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `plan` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `fechaPago` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `name`, `phone`, `email`, `password`, `fechaRegistro`, `fechaUltimaSesion`, `plan`, `fechaPago`) VALUES
(2, 'uriany', '67', 'admin@gmail.com', '123', '10/09/2020', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
