-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2018 a las 05:41:52
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_pdo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutas`
--

CREATE TABLE `frutas` (
  `f_id` int(11) NOT NULL,
  `f_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `f_color` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `frutas`
--

INSERT INTO `frutas` (`f_id`, `f_nombre`, `f_color`) VALUES
(6, 'sandia', 'verde'),
(14, '1', '1'),
(28, '312', '231'),
(58, '44213', '312321'),
(59, 'asd', 'asd'),
(66, '1561561', '12161'),
(67, 'manzana', 'roja'),
(68, 'manzana', 'roja'),
(69, 'manzana', 'roja'),
(70, '', ''),
(71, 'xxx', ''),
(72, 'sandia', ''),
(73, 'asd', 'asd'),
(74, 'sandia', 'verde'),
(75, 'asd', 'asd'),
(76, '1231', '1231'),
(77, 'asd', 'asd'),
(78, 'asd', 'asd'),
(79, 'aq|aq|', 'asd'),
(80, 'asd', 'asd'),
(81, 'asd', 'sda'),
(82, 'asd', 'asd'),
(83, 'asd', 'sda'),
(84, 'asd', 'asd'),
(85, 'asd', 'asd'),
(86, 'asd', 'asd'),
(87, 'xxx', 'xx'),
(88, 'asd', 'asd'),
(89, 'xx', 'xx'),
(90, 'asa', 'as'),
(91, 'asdsda', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `frutas`
--
ALTER TABLE `frutas`
  ADD PRIMARY KEY (`f_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `frutas`
--
ALTER TABLE `frutas`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
