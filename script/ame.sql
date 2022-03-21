-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 02:49:04
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `d_estudiante` varchar(80) NOT NULL,
  `t_estudiante` varchar(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `representante` varchar(30) NOT NULL,
  `afinidad` varchar(15) NOT NULL,
  `d_representante` varchar(80) NOT NULL,
  `t_representante` varchar(11) NOT NULL,
  `t_laboral` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `d_estudiante`, `t_estudiante`, `correo`, `representante`, `afinidad`, `d_representante`, `t_representante`, `t_laboral`) VALUES
(1, 'San Felipe - Independencia', '0141-235.32', 'maria_carmen@gmail.com', 'Maria de Betania Rodríguez', 'Mamá', 'San Felipe  - Independencia', '0254-233.35', '0254-254.65'),
(2, 'San Felipe - Yaracuy - Catedral', '0412-256.87', '', 'Nancy Filomena', 'Madre', '', '0414-657.32', ''),
(3, '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', ''),
(5, 'Independencia - Yaracuy', '', '', 'Josefa de la Chiquinquira Mart', 'Abuela', 'Independencia - Yaracuy', '0416-365.27', ''),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(10) NOT NULL,
  `cedula` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `gen` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nac` date NOT NULL,
  `ano` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `secc` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `f_estatus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `cedula`, `nombre`, `apellido`, `gen`, `nac`, `ano`, `secc`, `estatus`, `f_estatus`) VALUES
(1, '41258966', 'María del Carmen', 'Figueroa Rodríguez', 'F', '2001-01-22', '5', 'D', 'Ingreso', '2021-10-10'),
(2, '37258965', 'Eduardo José ', 'Gutiérrez Landinez', 'M', '2005-07-24', '5', 'B', 'Egreso', '0000-00-00'),
(3, '30', 'Nancy Alejandra', 'Alvarez  Pereira', 'f', '2012-11-12', '1', 'A', 'Ingreso', '2021-10-12'),
(4, '28', 'Cesar Augustu', 'Pinochet José', 'M', '2010-11-05', '1', 'A', 'Ingreso', '2021-11-11'),
(5, '33333333', 'Alejandro', 'Magno', 'M', '2011-10-05', '3', 'B', '', '0000-00-00'),
(6, '36478521', 'Gisela de la Chiquinquira', 'Fernández Lugo', 'F', '2007-03-14', '3', 'B', '', '0000-00-00'),
(7, '5654646', 'gfdgdfgfdg', 'dfgdfg', 'M', '2021-11-11', '1', 'A', 'Egreso', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud_fisicos`
--

CREATE TABLE `salud_fisicos` (
  `id` int(5) NOT NULL,
  `altura` float(4,2) DEFAULT NULL,
  `peso` float(5,2) DEFAULT NULL,
  `camisa` varchar(3) DEFAULT NULL,
  `pantalon` varchar(3) DEFAULT NULL,
  `zapato` int(2) NOT NULL,
  `lateralidad` varchar(10) NOT NULL,
  `condicion_f` varchar(20) NOT NULL,
  `sangre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salud_fisicos`
--

INSERT INTO `salud_fisicos` (`id`, `altura`, `peso`, `camisa`, `pantalon`, `zapato`, `lateralidad`, `condicion_f`, `sangre`) VALUES
(1, 1.59, 55.00, 'L', '30', 38, 'Diestro', '', 'rh O negativo'),
(2, 1.72, 74.00, 'XL', '34', 41, 'Zurdo', '', 'rh AB positivo'),
(3, 1.68, 77.00, '', '', 0, '', '', ''),
(4, 1.65, 45.00, '', '', 0, '', '', ''),
(5, 1.61, 53.40, 'L', '32', 40, 'Diestro', 'Síndrome de Aspenger', 'rh A Positivo'),
(6, 0.00, 0.00, '', '', 0, '', '', ''),
(7, 0.00, 0.00, '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(2) NOT NULL,
  `nombre_usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contrasena`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `salud_fisicos`
--
ALTER TABLE `salud_fisicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `salud_fisicos`
--
ALTER TABLE `salud_fisicos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
