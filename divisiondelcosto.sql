-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2018 a las 23:22:59
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `praxis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisiondelcosto`
--

CREATE TABLE `divisiondelcosto` (
  `id` int(11) NOT NULL,
  `articulo` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `mobra` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cprimo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cfab` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cprod` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `chv` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `utilidad` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pventa` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `divisiondelcosto`
--

INSERT INTO `divisiondelcosto` (`id`, `articulo`, `mobra`, `cprimo`, `cfab`, `cprod`, `chv`, `utilidad`, `pventa`) VALUES
(27, 'ñññ', '44', '44', '44', '44', '44', '44', '392.86');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `divisiondelcosto`
--
ALTER TABLE `divisiondelcosto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `divisiondelcosto`
--
ALTER TABLE `divisiondelcosto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
