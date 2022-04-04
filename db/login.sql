-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2022 a las 04:00:58
-- Versión del servidor: 8.0.27
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descrip` varchar(200) DEFAULT NULL,
  `id_rol` int DEFAULT NULL,
  `porcentaje` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `descrip`, `id_rol`, `porcentaje`) VALUES
(1, 'Reseteo de usuarios', 'se desarrolla una actualizacion de usuarios', 1, 30),
(2, 'Reseteo de usuarios', 'se desarrolla una actualizacion de usuarios', 1, 50),
(3, 'Reseteo de usuarios', 'se desarrolla una actualizacion de usuarios', 1, 75),
(4, 'Reseteo de usuarios', 'se desarrolla una actualizacion de usuarios', 1, 100),
(5, 'Reseteo de usuarios', 'se desarrolla una actualizacion de usuarios', 1, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id` int NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descrip` varchar(200) DEFAULT NULL,
  `id_rol` int DEFAULT NULL,
  `porcentaje` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id`, `nombre`, `descrip`, `id_rol`, `porcentaje`) VALUES
(1, 'Manejo de indicencias', 'se debe de manejar toda incidencia', 1, 100),
(2, 'Colocacion de estatus', 'actualizas los estatus de actividades', 1, 100),
(3, 'Colocacion de Actividades', 'Asignar tareas', 1, 50),
(4, 'Manejo de trabajo', 'se debe de manejar incidencias de trabajo', 1, 85),
(5, 'Limpieza de bandeja de correo', 'se tiene que limpiar toda la bandeja', 1, 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `cargo`) VALUES
(1, 'marcos ', 'codigoadsi@gmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'fausto alonso alvarado silva', 'afaustoalonso@gmail.com', 'fa1ba08039aadd80629cd2215fb88ef2', '2'),
(3, 'marcos', 'eduardoavalos399@gmail.com', '814ba2eb9f1e6ffb9150716246d87838', '2'),
(4, 'jose', 'jose@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2'),
(5, 'sanson', 'sanson@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2'),
(6, 'mar&iacutea silva', 'spotifyutac@gmail.com', 'fa1ba08039aadd80629cd2215fb88ef2', '2'),
(7, 'fatima silva', 'aaa@gmail.com', 'fa1ba08039aadd80629cd2215fb88ef2', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
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
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
