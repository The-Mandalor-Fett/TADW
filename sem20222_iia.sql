-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 21:09:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sem20222_iia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `pApellido` varchar(64) NOT NULL,
  `sApellido` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `pApellido`, `sApellido`) VALUES
('2020302067', 'David', 'Cortés', 'Cirett');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lider`
--

CREATE TABLE `lider` (
  `id_lider` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `pApellido` varchar(64) NOT NULL,
  `sApellido` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `contrasena` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lider`
--

INSERT INTO `lider` (`id_lider`, `nombre`, `pApellido`, `sApellido`, `correo`, `contrasena`) VALUES
('2020302067', 'David', 'Cortés', 'Cirett', 'davidc.cortes@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(1) NOT NULL,
  `rol` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajoterminal`
--

CREATE TABLE `trabajoterminal` (
  `id_tt` varchar(20) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(700) NOT NULL,
  `id_lider` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(10) NOT NULL,
  `id_lidfer` varchar(10) NOT NULL,
  `contrasena` varchar(32) NOT NULL,
  `id_rol` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `id_lidfer`, `contrasena`, `id_rol`) VALUES
('2020302067', '', '81dc9bdb52d04dc20036dbd8313ed055', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `lider`
--
ALTER TABLE `lider`
  ADD PRIMARY KEY (`id_lider`),
  ADD KEY `id_lider` (`id_lider`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `trabajoterminal`
--
ALTER TABLE `trabajoterminal`
  ADD PRIMARY KEY (`id_tt`),
  ADD KEY `id_lider` (`id_lider`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`,`id_lidfer`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `fk_id_user` (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_lider` FOREIGN KEY (`id`) REFERENCES `lider` (`id_lider`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
