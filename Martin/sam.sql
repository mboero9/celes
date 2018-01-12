-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2018 a las 15:14:18
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, '2017-11-30 18:26:27', 'Nose', 'k8i99021', 'Alguno', '', 'Accion de mejora', 'Auditoria interna', 'Cualquer', 'Soporte', 'Presentada', 'Aprobada', '0000-00-00', ''),
(2, '2017-11-30 18:26:53', 'Nose', 'k8i99021', 'Alguno', '', 'Observacion', 'Propuesta', 'Cualquer', 'Desarrollo', 'Presentada', 'Aprobada', '0000-00-00', ''),
(3, '2017-11-30 18:47:06', 'Nose', 'pruabnasdas', 'estamos probando', 'otra', 'Accion de mejora', 'Auditoria interna', 'Alguno', 'Soporte', 'Presentada', 'En ejecucion', '0000-00-00', ''),
(4, '2017-11-30 18:56:49', 'Prueba', 'asdasda', 'asdfsfdg', '', 'No conformidad', 'Reclamo de clientes', 'Alguno', 'Desarrollo', 'Presentada', 'Implementada', '0000-00-00', ''),
(5, '2017-11-30 18:57:06', 'Prueba', 'asdasda', 'asdfsfdg', '', 'Oportunidad de mejora', 'Desvio', 'Alguno', 'Desarrollo', 'Presentada', 'Implementada', '0000-00-00', ''),
(6, '2017-11-30 18:57:19', 'Prueba', 'asdasda', 'asdfsfdg', '', 'Oportunidad de mejora', 'Desvio', 'Alguno', 'Desarrollo', 'Presentada', 'Implementada', '0000-00-00', ''),
(7, '2017-12-04 15:21:44', 'Filtrado', 'se esta probando la aplicacion', 'alguno', 'se estara revisando', 'Oportunidad de mejora', 'Reclamo de clientes', 'Probando', 'Riesgo', 'Abierta', 'Aprobada', '0000-00-00', ''),
(8, '2017-12-04 15:26:54', 'Filtrado', 'se esta probando la aplicacion', 'alguno', 'se estara revisando', 'Oportunidad de mejora', 'Reclamo de clientes', 'Probando', 'Riesgo', 'Abierta', 'En estudio', '0000-00-00', ''),
(9, '2017-12-04 15:27:26', 'Telefono', 'se esta probando la aplicacion', 'alguno', 'se estara revisando', 'Oportunidad de mejora', 'Reclamo de clientes', 'Probando', 'Riesgo', 'Abierta', 'En estudio', '0000-00-00', ''),
(10, '2017-12-04 15:37:27', 'cualquiera', '', '', '', 'Accion de mejora', 'Auditoria interna', 'Probando', 'Soporte', 'Abierta', 'Aprobada', '2017-12-04', ''),
(11, '2017-12-04 20:06:20', 'Tecnologia', 'sdasdasdad', 'sdasdasd', 'asdasdasd', 'Accion de mejora', 'Propuesta', 'Tecno', 'Tecno', 'Abierta', 'Aprobada', '2017-12-04', ''),
(12, '2017-12-04 20:07:52', 'Probando', 'sadasd', 'dasdasd', 'asdasd', 'Accion de mejora', 'Propuesta', 'Prueba1', 'Prueba', 'Abierta', 'Aprobada', '2017-12-04', ''),
(13, '2017-12-27 16:28:12', 'Consultas por colegiador', 'Cuando un Colegiador hace preguntas al EC â€“ este devuelve la consulta no regresa al Colegiador que tenÃ­a la duda sino es asignado a otro lo cual lleva a que este nuevo vuelva a ver toda la solicitud el crÃ©dito.\r\n', 'Bajar tiempos', 'asociado a accion 259', 'Accion de mejora', 'Propuesta', 'Colegiatura', 'Calidad y Procesos', 'Presentada', 'En estudio', '2017-12-27', ''),
(14, '2018-01-03 18:50:40', 'fsdfsdfsd', '', '', '', 'Accion de mejora', 'Auditoria interna', 'fafadf', 'ksnfknafkna', 'Abierta', 'Aprobada', '2018-01-03', ''),
(15, '2018-01-04 16:36:03', 'aaddfafas', '', '', '', 'Accion de mejora', 'Auditoria interna', 'cualquiera', 'sistemas', 'Abierta', 'Aprobada', '2018-01-04', ''),
(16, '2018-01-05 18:45:50', '', '', '', '', 'Accion de mejora', 'Auditoria interna', '', '', 'Abierta', 'Aprobada', '2018-01-05', ''),
(17, '2018-01-05 18:47:33', '', '', '', '', 'Accion de mejora', 'Auditoria interna', '', '', 'Abierta', 'Aprobada', '2018-01-05', ''),
(18, '2018-01-08 12:42:49', 'Prueba20000', '', '', '', 'Accion de mejora', 'Auditoria interna', 'documentos', 'Calidad y Procesos', 'Presentada', 'En estudio', '2018-01-08', ''),
(19, '2018-01-08 12:54:38', 'prueba', '', '', '', 'Accion de mejora', 'Auditoria interna', 'desarrollo de software', 'Sistemas', 'Abierta', 'Aprobada', '2018-01-08', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_mov` int(11) NOT NULL,
  `movi` int(11) NOT NULL,
  `fecha_movimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `derivado_a` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `plazo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_mov`, `movi`, `fecha_movimiento`, `tipo`, `derivado_a`, `descripcion`, `plazo`) VALUES
(4, 38, '2017-11-30 18:31:32', 'Accion propuesta a realizar', 'soporte', 'algunas pruebas', '0000-00-00'),
(7, 38, '2017-11-30 18:59:26', 'Analisis causa raiz', 'Seguridad', 'asdasda', '0000-00-00'),
(8, 38, '2017-11-30 18:59:42', 'Accion para verificar', 'Seguridad', 'asdadasdas', '0000-00-00'),
(9, 38, '2017-11-30 19:08:59', 'Analisis causa raiz', 'Seguridad', '2515', '0000-00-00'),
(10, 38, '2017-11-30 19:53:16', 'Analisis causa raiz', '', '', '0000-00-00'),
(11, 38, '2017-11-30 20:06:03', '', '', '', '0000-00-00'),
(12, 38, '2017-11-30 20:06:07', '', '', '', '0000-00-00'),
(13, 38, '2017-11-30 20:06:37', '', '', '', '0000-00-00'),
(14, 38, '2017-11-30 20:06:40', '', '', '', '0000-00-00'),
(15, 38, '2017-11-30 20:10:39', '', '', '', '0000-00-00'),
(16, 38, '2017-11-30 20:12:23', 'Analisis causa raiz', 'Seguridad', 'fgfdfd', '0000-00-00'),
(17, 44, '2017-11-30 20:14:22', 'Analisis causa raiz', '', '', '0000-00-00'),
(18, 38, '2017-11-30 20:15:37', 'Derivacion', 'alguna', '', '0000-00-00'),
(19, 38, '2017-11-30 20:15:59', 'Derivacion', 'alguna', '', '0000-00-00'),
(20, 38, '2017-11-30 20:17:40', 'Derivacion', 'alguna', '', '0000-00-00'),
(21, 38, '2017-11-30 20:28:36', 'Analisis causa raiz', '34234', '43534', '0000-00-00'),
(22, 38, '2017-11-30 20:29:06', 'Accion para verificar', 'alguno', 'afqwerfaqss', '0000-00-00'),
(23, 38, '2017-11-30 20:30:55', 'Analisis causa raiz', 'asdfsd', 'asdas', '0000-00-00'),
(27, 38, '2017-11-30 20:41:58', 'Analisis causa raiz', '', '', '0000-00-00'),
(28, 38, '2017-11-30 20:42:08', 'Analisis causa raiz', '', '', '0000-00-00'),
(29, 38, '2017-11-30 20:58:21', 'Analisis causa raiz', '', '', '0000-00-00'),
(30, 38, '2017-12-01 13:44:47', 'Analisis causa raiz', 'sa', 'asa', '0000-00-00'),
(31, 38, '2017-12-01 13:50:28', 'Accion correctiva', 'alguna', 'jtsdsf', '0000-00-00'),
(32, 38, '2017-12-01 16:35:34', 'Accion propuesta a realizar', 'Seguridad', '', '0000-00-00'),
(33, 38, '2017-12-01 16:54:56', '', '', '', '0000-00-00'),
(34, 38, '2017-12-01 17:12:47', '', '', '', '0000-00-00'),
(35, 38, '2017-12-01 17:15:17', 'Accion para verificar', 'sdasd', 'asda', '0000-00-00'),
(36, 38, '2017-12-01 17:30:04', 'Accion para verificar', '', '', '0000-00-00'),
(37, 38, '2017-12-01 17:52:01', 'Analisis causa raiz', '', '', '0000-00-00'),
(38, 38, '2017-12-01 18:00:22', 'Analisis causa raiz', '', '', '0000-00-00'),
(39, 38, '2017-12-01 18:01:27', 'Derivacion', '', '', '0000-00-00'),
(40, 38, '2017-12-01 18:03:55', 'Accion para verificar', '', '', '0000-00-00'),
(41, 38, '2017-12-01 18:07:49', 'Analisis causa raiz', '', '', '0000-00-00'),
(42, 38, '2017-12-01 18:10:29', 'Accion para verificar', '', '', '0000-00-00'),
(43, 38, '2017-12-01 18:13:48', 'Analisis causa raiz', '', '', '0000-00-00'),
(44, 38, '2017-12-01 18:14:02', 'Analisis causa raiz', '', '', '0000-00-00'),
(45, 38, '2017-12-01 18:19:53', 'Analisis causa raiz', '', '', '0000-00-00'),
(46, 38, '2017-12-01 18:20:44', 'Analisis causa raiz', '', '', '0000-00-00'),
(47, 38, '2017-12-01 18:27:51', 'Analisis causa raiz', '', '', '0000-00-00'),
(48, 38, '2017-12-01 18:31:34', 'Analisis causa raiz', '', '', '0000-00-00'),
(49, 38, '2017-12-01 18:35:47', 'Analisis causa raiz', '', '', '0000-00-00'),
(50, 38, '2017-12-01 18:41:45', 'Analisis causa raiz', '', '', '0000-00-00'),
(51, 38, '2017-12-01 18:45:31', 'Analisis causa raiz', '', '', '0000-00-00'),
(52, 38, '2017-12-01 18:46:40', 'Analisis causa raiz', '', '', '0000-00-00'),
(53, 38, '2017-12-01 18:47:22', 'Analisis causa raiz', '', '', '0000-00-00'),
(54, 38, '2017-12-01 18:48:57', 'Analisis causa raiz', '', '', '0000-00-00'),
(55, 38, '2017-12-01 18:50:47', 'Analisis causa raiz', '', '', '0000-00-00'),
(56, 38, '2017-12-01 19:11:51', 'Analisis causa raiz', '', '', '0000-00-00'),
(57, 38, '2017-12-01 19:12:03', 'Analisis causa raiz', '', '', '0000-00-00'),
(58, 38, '2017-12-01 20:04:44', 'Analisis causa raiz', '', '', '0000-00-00'),
(61, 38, '2017-12-01 20:05:46', 'Analisis causa raiz', '', '', '0000-00-00'),
(63, 38, '2017-12-01 20:09:50', 'Analisis causa raiz', '', '', '0000-00-00'),
(65, 38, '2017-12-01 20:13:37', 'Accion propuesta a realizar', 'Seguridad', '', '0000-00-00'),
(66, 38, '2017-12-01 20:20:48', 'Accion propuesta a realizar', 'Seguridad', '', '0000-00-00'),
(69, 38, '2017-12-01 20:38:02', 'Derivacion', '', '', '0000-00-00'),
(70, 38, '2017-12-01 20:39:05', 'Accion correctiva', '', '', '0000-00-00'),
(71, 38, '2017-12-04 15:25:01', '', '', '', '0000-00-00'),
(72, 38, '2017-12-04 15:25:45', '', '', '', '0000-00-00'),
(73, 38, '2017-12-04 15:51:40', 'Analisis causa raiz', 'prueba', 'asas', '2017-12-04'),
(75, 38, '2017-12-04 16:29:53', 'Analisis causa raiz', '', '', '2017-12-04'),
(76, 38, '2017-12-04 16:30:55', 'Analisis causa raiz', '', '', '2017-12-04'),
(77, 38, '2017-12-04 16:32:37', 'Analisis causa raiz', '', '', '2017-12-04'),
(78, 38, '2017-12-04 16:32:42', 'Analisis causa raiz', '', '', '2017-12-04'),
(79, 38, '2017-12-04 16:33:09', 'Analisis causa raiz', '', '', '2017-12-04'),
(80, 38, '2017-12-04 16:39:59', 'Accion para verificar', '', '', '2017-12-04'),
(81, 38, '2017-12-04 19:06:02', 'Analisis causa raiz', '', '', '2017-12-04'),
(82, 38, '2017-12-04 19:36:33', 'Analisis causa raiz', '', '', '2017-12-04'),
(83, 38, '2017-12-04 19:40:11', 'Analisis causa raiz', '', '', '2017-12-04'),
(84, 38, '2017-12-04 19:42:28', 'Analisis causa raiz', '', '', '2017-12-04'),
(92, 38, '2017-12-04 20:34:36', 'Analisis causa raiz', '', '', '2017-12-04'),
(93, 38, '2017-12-04 20:35:45', 'Accion para verificar', '', '', '2017-12-04'),
(94, 38, '2017-12-04 20:42:03', 'Analisis causa raiz', '', '', '2017-12-04'),
(95, 38, '2017-12-04 20:43:23', 'Analisis causa raiz', '', '', '2017-12-04'),
(96, 38, '2017-12-04 20:55:00', 'Analisis causa raiz', '', '', '2017-12-04'),
(97, 38, '2017-12-05 17:29:44', 'Analisis causa raiz', '', '', '2017-12-05'),
(98, 38, '2017-12-05 17:52:46', 'Analisis causa raiz', '', '', '2017-12-05'),
(99, 38, '2017-12-05 18:20:58', 'Analisis causa raiz', '', '', '2017-12-05'),
(100, 38, '2017-12-05 18:24:20', 'Analisis causa raiz', '', '', '2017-12-05'),
(101, 38, '2017-12-05 19:31:40', 'Analisis causa raiz', '', '', '2017-12-05'),
(102, 38, '2017-12-05 19:43:16', 'Analisis causa raiz', '', '', '2017-12-05'),
(103, 38, '2017-12-05 20:20:28', 'Analisis causa raiz', '', '', '2017-12-05'),
(104, 38, '2017-12-05 20:51:18', 'Analisis causa raiz', '', '', '2017-12-05'),
(105, 38, '2017-12-06 12:50:02', 'Analisis causa raiz', 'PRUEBA', '', '2017-12-06'),
(106, 38, '2017-12-06 15:05:22', 'Analisis causa raiz', '', '', '2017-12-06'),
(107, 38, '2017-12-06 19:38:02', 'Analisis causa raiz', '', '', '2017-12-06'),
(108, 38, '2017-12-06 19:40:33', 'Analisis causa raiz', '', '', '2017-12-06'),
(109, 38, '2017-12-06 19:47:27', 'Analisis causa raiz', '', '', '2017-12-06'),
(110, 38, '2017-12-06 19:50:49', 'Analisis causa raiz', '', '', '2017-12-06'),
(111, 38, '2017-12-06 19:50:56', 'Analisis causa raiz', '', '', '2017-12-06'),
(112, 38, '2017-12-06 20:34:57', 'Analisis causa raiz', '', '', '2017-12-06'),
(113, 38, '2017-12-06 20:53:47', 'Analisis causa raiz', 'Seguridad', 'La sucursal se encuentra operativa por el enlace Secundario. Se realizÃ³ el reclamo a TelefÃ³nica, quien nos asignÃ³ el nÃºmero 5985433 por el enlace Principal.', '2017-12-06'),
(114, 38, '2017-12-07 12:47:28', 'Analisis causa raiz', '', '', '2017-12-07'),
(115, 38, '2017-12-11 20:15:27', 'Analisis causa raiz', '', '', '2017-12-11'),
(116, 38, '2017-12-11 20:18:50', 'Analisis causa raiz', '', '', '2017-12-11'),
(117, 38, '2017-12-11 20:19:50', 'Analisis causa raiz', '', '', '2017-12-11'),
(118, 38, '2017-12-11 20:21:35', 'Analisis causa raiz', '', '', '2017-12-11'),
(119, 38, '2017-12-11 20:30:11', 'Analisis causa raiz', '', '', '2017-12-11'),
(120, 38, '2017-12-12 13:17:29', '', '', '', '2017-12-12'),
(121, 38, '2017-12-12 13:34:47', '', '', '', '0000-00-00'),
(122, 38, '2017-12-12 13:42:21', '', '', '', '0000-00-00'),
(151, 38, '2017-12-13 17:03:03', 'Analisis causa raiz', '', '', '2017-12-13'),
(152, 38, '2017-12-13 18:25:55', 'Analisis causa raiz', '', '', '2017-12-13'),
(153, 38, '2017-12-14 13:43:50', 'Analisis causa raiz', '', '', '2017-12-14'),
(154, 38, '2017-12-14 13:44:14', 'Analisis causa raiz', '', '', '2017-12-14'),
(155, 38, '2017-12-14 14:08:20', 'Analisis causa raiz', '', '', '2017-12-14'),
(156, 38, '2017-12-14 14:08:48', 'Analisis causa raiz', '', '', '2017-12-14'),
(157, 38, '2017-12-14 14:16:19', 'Analisis causa raiz', '', '', '2017-12-14'),
(158, 38, '2017-12-14 14:19:21', 'Analisis causa raiz', '', '', '2017-12-14'),
(159, 38, '2017-12-14 14:42:57', 'Analisis causa raiz', '', '', '2017-12-14'),
(160, 38, '2017-12-14 14:43:53', 'Analisis causa raiz', '', '', '2017-12-14'),
(161, 38, '2017-12-14 14:46:19', 'Analisis causa raiz', '', '', '2017-12-14'),
(162, 38, '2017-12-14 14:57:26', 'Analisis causa raiz', '', '', '2017-12-14'),
(163, 38, '2017-12-14 15:00:46', 'Analisis causa raiz', '', '', '2017-12-14'),
(164, 38, '2017-12-14 15:19:53', 'Analisis causa raiz', '', '', '2017-12-14'),
(165, 38, '2017-12-14 15:21:03', 'Analisis causa raiz', '', '', '2017-12-14'),
(166, 38, '2017-12-14 15:23:20', 'Analisis causa raiz', '', '', '2017-12-14'),
(167, 38, '2017-12-14 15:33:59', 'Analisis causa raiz', '', '', '2017-12-14'),
(168, 38, '2017-12-14 15:34:17', 'Analisis causa raiz', '', '', '2017-12-14'),
(169, 38, '2017-12-14 15:34:32', 'Analisis causa raiz', '', '', '2017-12-14'),
(170, 38, '2017-12-14 15:34:37', 'Analisis causa raiz', '', '', '2017-12-14'),
(171, 38, '2017-12-14 16:08:20', 'Analisis causa raiz', '', '', '2017-12-14'),
(172, 38, '2017-12-14 16:11:40', 'Analisis causa raiz', '', '', '2017-12-14'),
(173, 38, '2017-12-14 16:12:59', 'Analisis causa raiz', '', '', '2017-12-14'),
(174, 38, '2017-12-14 16:16:39', 'Analisis causa raiz', '', '', '2017-12-14'),
(175, 38, '2017-12-14 16:17:46', 'Analisis causa raiz', '', '', '2017-12-14'),
(176, 38, '2017-12-14 16:18:05', 'Analisis causa raiz', '', '', '2017-12-14'),
(177, 38, '2017-12-14 17:52:59', 'Analisis causa raiz', '', '', '2017-12-14'),
(178, 38, '2017-12-14 17:53:43', 'Analisis causa raiz', '', '', '2017-12-14'),
(179, 38, '2017-12-14 17:54:03', 'Analisis causa raiz', '', '', '2017-12-14'),
(180, 38, '2017-12-14 19:39:52', 'Analisis causa raiz', '', '', '2017-12-14'),
(181, 38, '2017-12-14 19:56:35', 'Analisis causa raiz', '', '', '2017-12-14'),
(182, 38, '2017-12-14 20:02:16', 'Analisis causa raiz', '', '', '2017-12-14'),
(183, 38, '2017-12-14 20:07:41', 'Analisis causa raiz', '', '', '2017-12-14'),
(184, 38, '2017-12-14 20:08:58', 'Analisis causa raiz', '', '', '2017-12-14'),
(185, 38, '2017-12-15 13:23:24', 'Derivacion', '', '', '2017-12-15'),
(186, 38, '2017-12-15 13:24:13', '', '', '', '2017-12-15'),
(187, 38, '2017-12-15 13:25:37', '', '', '', '2017-12-15'),
(188, 38, '2017-12-15 13:50:01', '', '', '', '2017-12-15'),
(189, 38, '2017-12-15 13:52:00', '', '', '', '2017-12-15'),
(190, 38, '2017-12-15 13:52:29', '', '', '', '2017-12-15'),
(191, 38, '2017-12-15 13:53:07', '', '', '', '2017-12-15'),
(192, 38, '2017-12-15 13:53:35', '', '', '', '2017-12-15'),
(193, 38, '2017-12-26 17:49:28', '', '', '', '2017-12-26'),
(194, 38, '2017-12-26 19:15:31', '', '', '', '2017-12-26'),
(195, 38, '2017-12-26 19:15:57', '', '', '', '2017-12-26'),
(196, 38, '2017-12-27 13:53:30', '', '', '', '2017-12-27'),
(197, 38, '2017-12-27 13:55:14', '', '', '', '2017-12-27'),
(198, 38, '2017-12-27 16:36:09', '', '', '', '2017-12-27'),
(199, 38, '2017-12-28 19:13:44', '', '', '', '2017-12-28'),
(200, 38, '2017-12-28 19:18:59', '', '', '', '2017-12-28'),
(201, 38, '2017-12-28 19:19:59', '', '', '', '2017-12-28'),
(202, 38, '2017-12-28 19:21:31', 'Analisis causa raiz', '', '', '2017-12-28'),
(203, 38, '2017-12-28 19:43:37', 'Accion para verificar', '', '', '2017-12-28'),
(204, 38, '2017-12-28 20:20:14', 'Analisis causa raiz', '', '', '2017-12-28'),
(205, 38, '2018-01-03 15:50:20', 'Analisis causa raiz', '', '', '2018-01-03'),
(206, 38, '2018-01-03 16:01:48', 'Analisis causa raiz', '', '', '2018-01-03'),
(207, 38, '2018-01-03 16:04:48', 'Analisis causa raiz', '', '', '2018-01-03'),
(208, 38, '2018-01-03 16:05:22', 'Analisis causa raiz', '', '', '2018-01-03'),
(209, 38, '2018-01-03 18:13:33', 'Analisis causa raiz', '', '', '2018-01-03'),
(210, 38, '2018-01-03 18:47:29', 'Analisis causa raiz', '', 'Prueba cbasjbakjsvnancaklnclkasnckasnclkasncsa', '2018-01-03'),
(211, 38, '2018-01-03 18:48:23', 'Accion para verificar', '', 'gddhfgfdhdghfhgfhggfgf', '2018-01-03'),
(212, 38, '2018-01-04 12:40:01', 'Analisis causa raiz', '', '', '2018-01-04'),
(213, 38, '2018-01-04 12:43:24', 'Analisis causa raiz', '', '', '2018-01-04'),
(214, 38, '2018-01-04 12:58:01', 'Analisis causa raiz', '', '', '2018-01-04'),
(215, 38, '2018-01-04 13:24:51', 'Analisis causa raiz', '', '', '2018-01-04'),
(216, 38, '2018-01-04 13:48:55', 'Analisis causa raiz', '', '', '2018-01-04'),
(217, 38, '2018-01-04 13:49:41', 'Analisis causa raiz', '', '', '2018-01-04'),
(218, 38, '2018-01-04 14:03:34', 'Analisis causa raiz', '', '', '2018-01-04'),
(219, 38, '2018-01-04 14:05:12', 'Analisis causa raiz', '', '', '2018-01-04'),
(220, 38, '2018-01-04 15:34:42', 'Analisis causa raiz', '', '', '2018-01-04'),
(221, 38, '2018-01-04 15:39:38', 'Analisis causa raiz', '', '', '2018-01-04'),
(222, 38, '2018-01-04 15:42:53', 'Analisis causa raiz', '', '', '2018-01-04'),
(223, 38, '2018-01-04 16:00:35', 'Analisis causa raiz', '', '', '2018-01-04'),
(224, 38, '2018-01-04 16:01:57', 'Analisis causa raiz', '', '', '2018-01-04'),
(225, 38, '2018-01-04 16:15:58', 'Analisis causa raiz', '', '', '2018-01-04'),
(226, 38, '2018-01-04 17:41:04', 'Analisis causa raiz', '', '', '2018-01-04'),
(227, 38, '2018-01-04 17:43:17', 'Analisis causa raiz', '', '', '2018-01-04'),
(228, 38, '2018-01-04 17:48:34', 'Analisis causa raiz', '', '', '2018-01-04'),
(229, 38, '2018-01-04 17:52:03', 'Analisis causa raiz', '', '', '2018-01-04'),
(230, 38, '2018-01-04 17:55:49', 'Analisis causa raiz', '', '', '2018-01-04'),
(231, 38, '2018-01-04 18:22:45', 'Analisis causa raiz', '', '', '2018-01-04'),
(232, 38, '2018-01-04 18:54:02', 'Analisis causa raiz', '', '', '2018-01-04'),
(233, 38, '2018-01-04 20:38:14', 'Analisis causa raiz', '', '', '2018-01-04'),
(234, 38, '2018-01-04 20:40:46', 'Accion correctiva', '', '', '2018-01-04'),
(235, 38, '2018-01-05 14:08:25', 'Analisis causa raiz', '', '', '2018-01-05'),
(236, 38, '2018-01-05 16:22:53', 'Accion propuesta a realizar', '', '', '2018-01-05'),
(237, 38, '2018-01-05 16:22:55', 'Accion propuesta a realizar', '', '', '2018-01-05'),
(238, 38, '2018-01-05 16:22:57', 'Accion propuesta a realizar', '', '', '2018-01-05'),
(239, 38, '2018-01-05 18:50:14', 'Analisis causa raiz', '', '', '2018-01-05'),
(240, 38, '2018-01-05 18:54:13', 'Analisis causa raiz', '', '', '2018-01-05'),
(241, 38, '2018-01-05 18:55:30', 'Analisis causa raiz', '', '', '2018-01-05'),
(242, 38, '2018-01-05 18:56:30', 'Analisis causa raiz', '', '', '2018-01-05'),
(243, 38, '2018-01-05 18:57:35', 'Analisis causa raiz', '', '', '2018-01-05'),
(244, 38, '2018-01-05 18:58:24', 'Analisis causa raiz', '', '', '2018-01-05'),
(245, 38, '2018-01-05 19:04:49', 'Analisis causa raiz', '', '', '2018-01-05'),
(246, 38, '2018-01-05 19:06:22', 'Analisis causa raiz', '', '', '2018-01-05'),
(247, 38, '2018-01-05 19:09:18', 'Analisis causa raiz', '', '', '2018-01-05'),
(248, 38, '2018-01-05 19:10:42', 'Analisis causa raiz', '', '', '2018-01-05'),
(249, 38, '2018-01-05 19:12:19', 'Analisis causa raiz', '', '', '2018-01-05'),
(250, 38, '2018-01-05 19:27:47', 'Analisis causa raiz', '', '', '2018-01-05'),
(251, 38, '2018-01-05 19:27:47', '', '', '', '0000-00-00'),
(252, 38, '2018-01-05 19:38:03', 'Analisis causa raiz', '', '', '2018-01-05'),
(253, 38, '2018-01-05 19:39:56', 'Analisis causa raiz', '', '', '2018-01-05'),
(254, 38, '2018-01-05 19:39:56', '', '', '', '0000-00-00'),
(255, 38, '2018-01-05 19:41:58', 'Analisis causa raiz', '', '', '2018-01-05'),
(256, 38, '2018-01-05 19:42:28', 'Analisis causa raiz', '', '', '2018-01-05'),
(257, 38, '2018-01-05 19:42:44', 'Analisis causa raiz', '', '', '2018-01-05'),
(258, 38, '2018-01-05 19:43:08', 'Analisis causa raiz', '', '', '2018-01-05'),
(259, 38, '2018-01-05 19:43:26', 'Analisis causa raiz', '', '', '2018-01-05'),
(260, 38, '2018-01-05 19:49:24', 'Analisis causa raiz', '', '', '2018-01-05'),
(261, 38, '2018-01-05 19:58:56', 'Analisis causa raiz', '', '', '2018-01-05'),
(262, 38, '2018-01-05 20:08:09', 'Analisis causa raiz', '', '', '2018-01-05'),
(263, 38, '2018-01-05 20:09:17', 'Analisis causa raiz', '', '', '2018-01-05'),
(264, 38, '2018-01-05 20:09:39', 'Analisis causa raiz', '', '', '2018-01-05'),
(265, 38, '2018-01-05 20:10:46', 'Analisis causa raiz', '', '', '2018-01-05'),
(266, 37, '2018-01-05 20:36:31', 'Analisis causa raiz', 'soporte', '', '2018-01-05'),
(267, 35, '2018-01-08 12:43:16', 'Analisis causa raiz', '', '', '2018-01-08'),
(268, 31, '2018-01-08 12:43:49', 'Accion correctiva', '', '', '2018-01-08'),
(269, 31, '2018-01-08 12:43:49', 'Accion correctiva', '', '', '2018-01-08'),
(270, 26, '2018-01-08 12:46:20', 'Accion para verificar', '', 'f fghfghgfhf', '2018-01-08'),
(271, 24, '2018-01-08 12:53:08', 'Analisis causa raiz', '', '', '2018-01-08'),
(272, 19, '2018-01-08 12:53:51', 'Accion correctiva', '', '', '2018-01-08'),
(273, 16, '2018-01-08 12:54:49', 'Analisis causa raiz', '', '', '2018-01-08'),
(274, 14, '2018-01-08 12:55:51', 'Accion para verificar', '', '', '2018-01-08'),
(275, 10, '2018-01-08 17:35:24', 'Derivacion', '', '', '2018-01-08'),
(276, 7, '2018-01-08 17:36:17', 'Analisis causa raiz', '', 'fdssfdsffsdfsdd', '2018-01-08'),
(277, 4, '2018-01-08 17:38:50', 'Derivacion', '', '', '2018-01-08'),
(278, 3, '2018-01-08 17:39:21', 'Analisis causa raiz', '', 'gyhgjhgjg', '2018-01-08'),
(279, 0, '2018-01-08 17:41:52', 'Accion propuesta a realizar', '', '', '2018-01-08'),
(280, 0, '2018-01-08 17:42:44', 'Cierre de la accion', 'prueba', 'asdasdasd', '2018-01-08'),
(281, 0, '2018-01-08 17:43:25', 'Derivacion', '', '', '2018-01-08'),
(282, 0, '2018-01-08 17:44:11', 'Derivacion', '', '', '2018-01-08'),
(283, 0, '2018-01-08 20:30:59', 'Accion propuesta a realizar', '', '', '2018-01-08'),
(284, 0, '2018-01-09 12:35:36', 'Accion propuesta a realizar', '', '', '2018-01-09'),
(285, 0, '2018-01-09 19:17:02', 'Analisis causa raiz', '', '', '2018-01-09'),
(286, 0, '2018-01-10 18:38:08', 'Analisis causa raiz', '', '', '2018-01-10'),
(287, 0, '2018-01-10 19:47:14', 'Analisis causa raiz', '', '', '2018-01-10'),
(288, 0, '2018-01-10 19:58:32', 'Analisis causa raiz', '', '', '2018-01-10'),
(289, 0, '2018-01-10 19:58:50', 'Analisis causa raiz', '', '', '2018-01-10'),
(290, 0, '2018-01-10 20:00:53', 'Analisis causa raiz', '', '', '2018-01-10'),
(291, 0, '2018-01-11 12:49:19', 'Analisis causa raiz', '', '', '2018-01-11'),
(292, 0, '2018-01-11 13:12:57', 'Analisis causa raiz', '', '', '2018-01-11'),
(293, 0, '2018-01-11 13:14:07', 'Analisis causa raiz', '', '', '2018-01-11'),
(294, 0, '2018-01-11 13:15:56', 'Analisis causa raiz', '', '', '2018-01-11'),
(295, 0, '2018-01-11 13:35:46', 'Analisis causa raiz', '', '', '2018-01-11'),
(296, 0, '2018-01-11 13:36:17', 'Analisis causa raiz', '', '', '2018-01-11'),
(297, 0, '2018-01-11 13:36:26', 'Analisis causa raiz', '', '', '2018-01-11'),
(298, 0, '2018-01-11 13:37:20', 'Analisis causa raiz', '', '', '2018-01-11'),
(299, 0, '2018-01-11 13:52:16', 'Analisis causa raiz', '', '', '2018-01-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accionesdemejora`
--
ALTER TABLE `accionesdemejora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_mov`),
  ADD KEY `movimientos` (`movi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accionesdemejora`
--
ALTER TABLE `accionesdemejora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
