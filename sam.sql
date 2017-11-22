-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2017 a las 16:44:57
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accionesdemejora`
--

CREATE TABLE `accionesdemejora` (
  `id` int(11) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titulo` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `objetivo` text COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `origen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `proceso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `subestado` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_validacion` date NOT NULL,
  `vencida` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accionesdemejora`
--

INSERT INTO `accionesdemejora` (`id`, `fecha_alta`, `titulo`, `descripcion`, `objetivo`, `observacion`, `tipo`, `origen`, `proceso`, `area`, `estado`, `subestado`, `fecha_validacion`, `vencida`) VALUES
(51, '2017-11-17 14:31:04', 'Planilla de Requerimiento', '', '', '', 'Oportunidad de mejora', 'Auditoria interna', 'desarrollo de software', 'Analisis y desarrollo', 'Abierta', 'Implementada', '0000-00-00', ''),
(52, '2017-11-17 18:14:44', 'Planilla de Requerimiento', '', '', '', 'Oportunidad de mejora', 'Auditoria interna', 'desarrollo de software', 'Analisis y desarrollo', 'Abierta', 'Implementada', '0000-00-00', ''),
(53, '2017-11-17 18:21:36', 'Planilla de Requerimiento', '', '', '', 'Oportunidad de mejora', 'Auditoria interna', 'desarrollo de software', 'Analisis y desarrollo', 'Abierta', 'Implementada', '0000-00-00', ''),
(54, '2017-11-21 17:25:26', 'Seguimiento de tareas en Sitio de altaa de esucursales', '', '', '', 'Observacion', 'Auditoria interna', 'Alta de Sucursales', 'Desarrollo de Sucursales', 'Abierta', 'En estudio', '0000-00-00', ''),
(55, '2017-11-21 17:25:26', 'Seguimiento de tareas en Sitio de altaa de esucursales', '', '', '', 'Observacion', 'Auditoria interna', 'Alta de Sucursales', 'Desarrollo de Sucursales', 'Abierta', 'En estudio', '0000-00-00', ''),
(56, '2017-11-21 17:26:25', 'Cronopagos adulterado', '', '', '', 'No conformidad', 'Desvio', 'Proceso de Crédito', 'Cronopagos', 'Presentada', 'En estudio', '0000-00-00', ''),
(57, '2017-11-21 20:40:13', 'fsghsfghsfghs', 'Campañas de fidelización: gestiones telefónicas y por mensajería. Acciones de clientes (Comités - Meriendas - Capacitaciones - Visitas). Recomendados. Asistencia a Clientes. Gestión de reclamos. PNet. Encuestas de Satisfacción. Encuesta para cambio de categoría de ejecutivos. \r\nCampañas de fidelización: gestiones telefónicas y por mensajería. Acciones de clientes (Comités - Meriendas - Capacitaciones - Visitas). Recomendados. Asistencia a Clientes. Gestión de reclamos. PNet. Encuestas de Satisfacción. Encuesta para cambio de categoría de ejecutivos. \r\nCampañas de fidelización: gestiones telefónicas y por mensajería. Acciones de clientes (Comités - Meriendas - Capacitaciones - Visitas). Recomendados. Asistencia a Clientes. Gestión de reclamos. PNet. Encuestas de Satisfacción. Encuesta para cambio de categoría de ejecutivos. ', 'hfsghsfhgfsghsf', 'sghsfghsf', 'Accion de mejora', 'Auditoria interna', 'sghsfhgsfg', 'hbfkbdfgdfg', 'Abierta', 'Aprobada', '0000-00-00', ''),
(58, '2017-11-22 14:16:21', 'Navidad', 'Arbolito de navidad para la oficina', 'felicidad', 'blablabla', 'Accion de mejora', 'Propuesta', 'Navidad', 'Calidad y Procesos', 'Abierta', 'Aprobada', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `fecha_movimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `derivado_a` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `plazo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id`, `id2`, `fecha_movimiento`, `tipo`, `derivado_a`, `descripcion`, `plazo`) VALUES
(0, 1, '2017-11-17 14:16:26', 'Analisis causa raiz', '', 'vdfvdfvd', '0000-00-00'),
(0, 2, '2017-11-17 14:17:28', 'Analisis causa raiz', '', 'vdfvdfvd', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accionesdemejora`
--
ALTER TABLE `accionesdemejora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id2`),
  ADD KEY `id2` (`id2`),
  ADD KEY `id` (`id`),
  ADD KEY `id2_2` (`id2`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accionesdemejora`
--
ALTER TABLE `accionesdemejora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
