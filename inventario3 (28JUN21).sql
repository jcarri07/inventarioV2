-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2021 a las 06:04:57
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

CREATE DATABASE inventario3;
USE inventario3;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `codigo` varchar(10) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `editorial` varchar(30) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `bienesN` varchar(5) DEFAULT NULL,
  `responsable` varchar(30) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `sede` varchar(30) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `serial` varchar(30) DEFAULT NULL,
  `envoltura` varchar(20) DEFAULT NULL,
  `condicion` varchar(30) DEFAULT NULL,
  `ubicacion` varchar(30) DEFAULT NULL,
  `created_user` int(11) DEFAULT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`codigo`, `isbn`, `tipo`, `titulo`, `autor`, `editorial`, `cantidad`, `bienesN`, `responsable`, `cedula`, `sede`, `color`, `serial`, `envoltura`, `condicion`, `ubicacion`, `created_user`, `updated_user`, `created_date`, `updated_date`, `estado`, `categoria`) VALUES
('1244', 'SA5444', 'LIBRO', 'GAME OF THRONES', 'R. R. MARTIN', 'SALESIANA', 2, '20114', 'JOSE CARRIZALES', '24642009', 'CIDE', 'NEGRO', '22A5A41D', 'CUERO', 'BUENA', 'ESTANTE 2', 44318, 44318, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'biblioteca'),
('1245', 'SA5445', 'LIBRO', 'FESTIN DE CUERVOS', 'R. R. MARTIN', 'SALESIANA', 3, '20115', 'JOSE CARRIZALES', '24642010', 'CIDE', 'NEGRO', '22A5A42D', 'CUERO', 'BUENA', 'ESTANTE 3', 44319, 44319, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'biblioteca'),
('1246', 'SA5446', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 4, '20116', 'JOSE CARRIZALES', '24642011', 'CIDE', 'NEGRO', '22A5A43D', 'CUERO', 'BUENA', 'ESTANTE 4', 44320, 44320, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'biblioteca'),
('1247', 'SA5447', 'LIBRO', 'HARRY POTTER Y EL CALIZ DE FUE', 'J. K. ROWLING', 'SALESIANA', 5, '20117', 'JOSE CARRIZALES', '24642012', 'CIDE', 'NEGRO', '22A5A44D', 'CUERO', 'BUENA', 'ESTANTE 5', 44321, 44321, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'biblioteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

CREATE TABLE `history` (
  `nombre` varchar(30) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `permiso` varchar(30) NOT NULL,
  `accion` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`nombre`, `cedula`, `permiso`, `accion`, `fecha`, `hora`) VALUES
('Carrito', '', '1', 'Registro de equipo', '2021-03-26', '14:02:25'),
('Jose Carrizales', '306645', '20', 'Registro de equipo', '2021-03-26', '16:04:54'),
('Jose Carrizales', '306645', '20', 'Registro de equipo', '2021-03-26', '16:04:11'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:19'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:45'),
('Jose Carrizales', '306645', '20', 'Eliminacion de equipo', '2021-03-26', '16:04:02'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:15'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:42'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:53'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:21'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:04'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:19'),
('Jose Carrizales', '306645', '20', 'Modificacion de equipo', '2021-03-26', '16:04:29'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-29', '10:10:52'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-29', '10:10:03'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-29', '10:10:11'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-29', '10:10:20'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-29', '10:10:36'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-29', '11:11:13'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-03-29', '12:12:40'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:34'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:21'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:31'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:47'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:50'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:03'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:56'),
('Jose Carrizales', '0', '20', 'Modificacion de equipo', '2021-03-31', '12:12:18'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '14:02:37'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '14:02:41'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '14:02:45'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '14:02:47'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '14:02:49'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '14:02:51'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '15:03:57'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '15:03:58'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '15:03:00'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:05'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:16'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:05'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:42'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:29'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:16'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:20'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:45'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:09'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:40'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:42'),
('Jose Carrizales', '0', '20', 'Registro de equipo', '2021-04-12', '15:03:49'),
('Jose Carrizales', '0', '20', 'Registro de equipo', '2021-04-12', '15:03:19'),
('Jose Carrizales', '0', '20', 'Registro de equipo', '2021-04-12', '15:03:10'),
('Jose Carrizales', '0', '20', 'Eliminacion de equipo', '2021-04-12', '15:03:17'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:38'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:21'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:39'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:50'),
('Jose Carrizales', '0', '20', 'Incorporacion de equipos', '2021-04-12', '15:03:42'),
('Carrito', '', '1', 'Registro de equipo', '2021-04-23', '11:11:05'),
('Carrito', '', '1', 'Registro de equipo', '2021-04-23', '12:12:34'),
('Carrito', '', '1', 'Modificacion de equipo', '2021-04-23', '12:12:55'),
('Carrito', '', '1', 'Registro de equipo', '2021-04-23', '12:12:31'),
('Carrito', '', '1', 'Modificacion de equipo', '2021-04-23', '12:12:42'),
('Carrito', '', '1', 'Registro de equipo', '2021-04-23', '12:12:11'),
('Carrito', '', '1', 'Registro de equipo', '2021-04-23', '12:12:41'),
('Carrito', '', '1', 'Eliminacion de equipo', '2021-04-23', '12:12:47'),
('Carrito', '', '1', 'Eliminacion de equipo', '2021-04-23', '12:12:49'),
('Carrito', '', '1', 'Eliminacion de equipo', '2021-04-23', '12:12:44'),
('Carrito', '', '1', 'Eliminacion de equipo', '2021-04-23', '12:12:49'),
('Carrito', '', '1', 'Registro de equipo', '2021-04-23', '12:12:44'),
('Carrito', '', '1', 'Modificacion de equipo', '2021-04-23', '12:12:43'),
('Carrito', '', '1', 'Modificacion de equipo', '2021-04-23', '12:12:37'),
('Carrito', '', '1', 'Modificacion de equipo', '2021-04-23', '12:12:09'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-04-26', '17:05:51'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-04-26', '17:05:56'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-04-26', '17:05:25'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-04-26', '17:05:56'),
('Administrador', '24642009', '18', 'Registro de equipo', '2021-04-26', '17:05:41'),
('Administrador', '24642009', '18', 'Registro de equipo', '2021-04-26', '17:05:30'),
('Administrador', '24642009', '18', 'Registro de equipo', '2021-04-26', '17:05:59'),
('Administrador', '24642009', '18', 'Registro de equipo', '2021-04-26', '17:05:06'),
('Administrador', '24642009', '18', 'Registro de equipo', '2021-04-26', '17:05:47'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '11:11:24'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '11:11:39'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '12:12:15'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '12:12:12'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '12:12:24'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '12:12:50'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de equipos', '2021-06-14', '12:12:43'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de multiples tra', '2021-06-14', '13:01:32'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de multiples tra', '2021-06-14', '13:01:38'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de multiples tra', '2021-06-14', '13:01:13'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de multiples tra', '2021-06-14', '13:01:33'),
('Jose Carrizales V.', '1233444', '20', 'Incorporacion de multiples tra', '2021-06-14', '13:01:36'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-06-14', '13:01:07'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-06-14', '14:02:12'),
('Jose Carrizales V.', '1233444', '20', 'Registro de equipo', '2021-06-14', '14:02:34'),
('Jose Carrizales V.', '24642009', '20', 'Incorporacion de equipos', '2021-06-15', '16:04:21'),
('Jose Carrizales V.', '24642009', '20', 'Incorporacion de equipos', '2021-06-15', '16:04:30'),
('Jose Carrizales V.', '24642009', '20', 'Incorporacion de equipos', '2021-06-15', '16:04:54'),
('Jose Carrizales V.', '24642009', '20', 'Incorporacion de equipos', '2021-06-15', '16:04:06'),
('Jose Carrizales V.', '24642009', '20', 'Incorporacion de equipos', '2021-06-15', '16:04:36'),
('Jose Carrizales V.', '24642009', '20', 'Incorporacion de equipos', '2021-06-15', '16:04:10'),
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-06-27', '20:08:30'),
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-06-27', '20:08:22'),
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-06-27', '20:08:45'),
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-06-27', '21:09:58'),
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-06-27', '22:10:56'),
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-06-27', '22:10:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `codigo` varchar(10) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `metrosCuadrados` varchar(10) DEFAULT NULL,
  `ubicacion` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `nmroCuartos` int(10) DEFAULT NULL,
  `condicion` varchar(30) DEFAULT NULL,
  `created_user` varchar(30) DEFAULT NULL,
  `updated_user` varchar(30) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `categoria` varchar(30) DEFAULT NULL,
  `pisos` varchar(10) DEFAULT NULL,
  `responsable` varchar(30) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `habitantes` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `categoria` varchar(30) NOT NULL,
  `codigo` int(7) NOT NULL,
  `serial` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `clasificacion` varchar(30) NOT NULL,
  `sede` varchar(30) NOT NULL,
  `pertenece` varchar(30) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `bienesN` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `condicion` varchar(30) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` enum('chequeado','nochequeado') NOT NULL DEFAULT 'nochequeado',
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(30) DEFAULT NULL,
  `responsable` varchar(30) DEFAULT NULL,
  `uso` varchar(10) DEFAULT NULL,
  `detalles` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`categoria`, `codigo`, `serial`, `nombre`, `marca`, `modelo`, `cantidad`, `clasificacion`, `sede`, `pertenece`, `cedula`, `bienesN`, `color`, `descripcion`, `condicion`, `ubicacion`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `estado`, `created_user`, `created_date`, `updated_user`, `updated_date`, `tipo`, `responsable`, `uso`, `detalles`) VALUES
('Comunicacion', 1, '214185856', 'KARLA DESIREE MIERES HENRRIQUEZ', 'INSPUR', 'NP3020M2', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'CPU', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 2, 'C16D6BA000016', 'KARLA DESIREE MIERES HENRRIQUEZ', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 3, 'C16D6BA000382', 'KARLA DESIREE MIERES HENRRIQUEZ', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 4, 'KBD729K11701A', 'KARLA DESIREE MIERES HENRRIQUEZ', 'VIT', 'DOK-K5313', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 5, 'MSD720K10938A', 'KARLA DESIREE MIERES HENRRIQUEZ', 'VIT', 'DOK-M696', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 6, '211306300718', 'KARLA DESIREE MIERES HENRRIQUEZ', 'OMEGA', 'DP-800', 0, '', 'CIDE', 'ABAE', '18344910', '1391', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 7, '214185809', 'YOSELI ONEL GUARAMATO PEROZO', 'INSPUR', 'NP3020M2', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 8, 'C16D6BA000339', 'YOSELI ONEL GUARAMATO PEROZO', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 9, 'C16DCBA000008', 'YOSELI ONEL GUARAMATO PEROZO', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 10, 'KBD729K11855A', 'YOSELI ONEL GUARAMATO PEROZO', 'VIT', 'DOK-K5313', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 11, 'MSD720K101..A', 'YOSELI ONEL GUARAMATO PEROZO', 'VIT', 'DOK-M696', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 12, '1409290160382', 'YOSELI ONEL GUARAMATO PEROZO', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 13, '214185826', 'JOSE FRANZUE CARRIZALES VARGAS', 'INSPUR', 'NP3020M3', 0, '', 'CIDE', 'ABAE', '24642009', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 14, 'C16D6BA000087', 'JOSE FRANZUE CARRIZALES VARGAS', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 15, 'C16D6BA000474', 'JOSE FRANZUE CARRIZALES VARGAS', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 16, 'KBD729K11142A', 'JOSE FRANZUE CARRIZALES VARGAS', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 17, 'MSD720K10020A', 'JOSE FRANZUE CARRIZALES VARGAS', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 18, '211306300372', 'JOSE FRANZUE CARRIZALES VARGAS', 'OMEGA', 'DP-800', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', '1324', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 19, 'ZF458B090432', 'JOSE FRANZUE CARRIZALES VARGAS', 'GENIUS', 'SP-S110', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 20, '214185843', 'EMERSON GERARDO AGUIAR NAVARRO', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 21, 'C16D6BA000341', 'EMERSON GERARDO AGUIAR NAVARRO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'MONITOR', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 22, 'C16D6BA000350', 'EMERSON GERARDO AGUIAR NAVARRO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'MONITOR', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 23, 'MSD720K10079A', 'EMERSON GERARDO AGUIAR NAVARRO', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'MOUSE', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 24, '140929-0160384', 'EMERSON GERARDO AGUIAR NAVARRO', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 25, 'K3D729K16790A', 'EMERSON GERARDO AGUIAR NAVARRO', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'TECLADO', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 26, '214185834', 'ALFREDO JOSE CALDERON CURIEL', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 27, 'C16D6BA000024', 'ALFREDO JOSE CALDERON CURIEL', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 28, 'C16D6BA000448', 'ALFREDO JOSE CALDERON CURIEL', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 29, 'KBD729K11654A', 'ALFREDO JOSE CALDERON CURIEL', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 30, 'MSD720K10083A', 'ALFREDO JOSE CALDERON CURIEL', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 31, '211306300665', 'ALFREDO JOSE CALDERON CURIEL', 'OMEGA', 'DP-800', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', '1386', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 32, '214185733', 'JUAN ANTONIO RUIZ SECO', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 33, 'C16D6BA000364', 'JUAN ANTONIO RUIZ SECO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 34, 'C16D6BA000348', 'JUAN ANTONIO RUIZ SECO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 35, 'KBD729K11708A', 'JUAN ANTONIO RUIZ SECO', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 36, 'MSD720K10932A', 'JUAN ANTONIO RUIZ SECO', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 37, '1409290161218', 'JUAN ANTONIO RUIZ SECO', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 38, '214185761', 'MIGUEL DANIEL BENCOMO ARANA  ', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '25779874', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 39, 'C16D6BA000335', 'MIGUEL DANIEL BENCOMO ARANA  ', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 40, 'C16D6BA000394', 'MIGUEL DANIEL BENCOMO ARANA  ', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 41, 'KBD729K16788A', 'MIGUEL DANIEL BENCOMO ARANA  ', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 42, 'MSD720K10159A', 'MIGUEL DANIEL BENCOMO ARANA  ', 'VIT', 'DOK-M696', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 43, '1409290160381', 'MIGUEL DANIEL BENCOMO ARANA  ', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 44, 'C16D6BA000362', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 45, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'ZOTAC', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2264', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 46, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'CQ-KMS1025', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2280', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 47, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'CQ-TX111', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 48, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'APC', 'BACK-UPS ES 750', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2229', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 49, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2291', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 50, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2292', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 51, '214185808', 'IRLANDA JOSEFINA MOLINA MOLINA', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 52, 'C16D6BA000015', 'IRLANDA JOSEFINA MOLINA MOLINA', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 53, 'KBD729K11149A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 54, 'MSD720K10939A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'VIT', 'DOK-M696', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 55, '211306300720', 'IRLANDA JOSEFINA MOLINA MOLINA', 'OMEGA', 'DP-800', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', '1321', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 56, 'N/A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', '2276', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 57, 'N/A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', '2277', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 58, '214185778', 'EDUAR RAFAEL DIAZ COLINA', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 59, 'C16D6BA000388', 'EDUAR RAFAEL DIAZ COLINA', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 60, 'C16D6BA000231', 'EDUAR RAFAEL DIAZ COLINA', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 61, 'KBD729K12764A', 'EDUAR RAFAEL DIAZ COLINA', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 62, 'MSD720K10005A', 'EDUAR RAFAEL DIAZ COLINA', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 63, '140929-0160383', 'EDUAR RAFAEL DIAZ COLINA', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 64, '214185806', 'HELFRID ALEXANDER BETHANCOUT', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 65, 'C16D6BA000442', 'HELFRID ALEXANDER BETHANCOUT', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 66, 'C16D6BA000327', 'HELFRID ALEXANDER BETHANCOUT', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 67, 'KBD729K11141A', 'HELFRID ALEXANDER BETHANCOUT', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 68, 'MSD720K10187A', 'HELFRID ALEXANDER BETHANCOUT', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 69, '214185810', 'MARIANGEL GRACIELA VALLES CAMACHO', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 70, 'C16D6BA000325', 'MARIANGEL GRACIELA VALLES CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 71, 'C16D6BA000101', 'MARIANGEL GRACIELA VALLES CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 72, 'KBD729K11606A', 'MARIANGEL GRACIELA VALLES CAMACHO', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 73, 'MSD720K10188A', 'MARIANGEL GRACIELA VALLES CAMACHO', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 74, '211306300392', 'MARIANGEL GRACIELA VALLES CAMACHO', 'OMEGA', 'DP-800', 0, '', 'SAT', 'ABAE', '25784075', '1390', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 75, '214185838', 'MARIA CECILIA MONZANT CAMACHO', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 76, 'C16D6BA000353', 'MARIA CECILIA MONZANT CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 77, 'C16D6BA000345', 'MARIA CECILIA MONZANT CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 78, 'KBD624K16784A', 'MARIA CECILIA MONZANT CAMACHO', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 79, 'MSD720K10926A', 'MARIA CECILIA MONZANT CAMACHO', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 80, '211306300520', 'MARIA CECILIA MONZANT CAMACHO', 'OMEGA', 'DP-800', 0, '', 'SAT', 'ABAE', '24561674', '1468', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 81, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'INSPUR', 0, '', 'SAT', 'ABAE', '17932717', '214185779', 'NP3020M2', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 82, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'INSPUR', 0, '', 'SAT', 'ABAE', '17932718', 'C16D6BA000333', 'I215EWD-B', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 83, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'VIT', 0, '', 'SAT', 'ABAE', '17932719', 'KBD729K11857A', 'DOK-K5313', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 84, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'VIT', 0, '', 'CTSR', 'ABAE', '17932720', 'MSD720K10198A', 'DOK-M696', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 85, '214185747', 'RUBEN EDUARDO SILVA DIAZ', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 86, 'C16D6BA000352', 'RUBEN EDUARDO SILVA DIAZ', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 87, 'KBD729K11619A', 'RUBEN EDUARDO SILVA DIAZ', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 88, 'MSD720K10117A', 'RUBEN EDUARDO SILVA DIAZ', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 89, '211306300698', 'RUBEN EDUARDO SILVA DIAZ', 'OMEGA', 'DP-800', 0, '', 'CTSR', 'ABAE', '18362413', '1467', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 90, '214185760', 'LUIS ANTONIO ARGUELLO RANGEL', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '13366349', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 91, 'C16D6BA000402', 'LUIS ANTONIO ARGUELLO RANGEL', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '13366350', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 92, 'KBD729K11656A', 'LUIS ANTONIO ARGUELLO RANGEL', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '13366351', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 93, 'MSD720K10076A', 'LUIS ANTONIO ARGUELLO RANGEL', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '13366352', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 94, '214185823', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'INSPUR', 'NP3020M3', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 95, 'C16D6BA000384', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 96, 'KBD729K11143A', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 97, 'MSD720K10935A', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 98, '214185753', 'ARTURO JOSE ROJAS MERCADO', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '16445244', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 99, 'C16D6BA000340', 'ARTURO JOSE ROJAS MERCADO', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '16445245', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 100, 'KBD729K11145A', 'ARTURO JOSE ROJAS MERCADO', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '16445246', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 101, 'MSD720K10943A', 'ARTURO JOSE ROJAS MERCADO', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '16445247', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 102, '214185847', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 103, 'C16D6BA000439', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 104, 'KBD729K11655A', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 105, 'MSD720K10164A', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 106, '214185837', 'CESAR EDUARDO VASQUEZ SUAREZ', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 107, 'C16D6BA000326', 'CESAR EDUARDO VASQUEZ SUAREZ', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 108, 'C16D6BA000399', 'CESAR EDUARDO VASQUEZ SUAREZ', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 109, 'KBD729K16827A', 'CESAR EDUARDO VASQUEZ SUAREZ', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 110, 'MSD720K10161A', 'CESAR EDUARDO VASQUEZ SUAREZ', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 111, '211306300519', 'CESAR EDUARDO VASQUEZ SUAREZ', 'OMEGA', 'DP-800', 0, '', 'CTSR', 'ABAE', '16129316', '1380', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 112, '214185744', 'Parra Pulgar Yassarik JosÃ©', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDIT', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Oficina', 113, 'C16D6BA000334', 'Parra Pulgar Yassarik JosÃ©', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UPP', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Oficina', 114, 'KBD729K16786A', 'Parra Pulgar Yassarik JosÃ©', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDIT', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Oficina', 115, 'MSD720K10946A', 'Parra Pulgar Yassarik JosÃ©', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDIT', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Oficina', 116, '211306300719', 'Parra Pulgar Yassarik JosÃ©', 'OMEGA', 'DP-800', 0, '', 'CTSR', 'ABAE', '13841224', '1323', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Oficina', 117, 'KBD729K11858A', 'ALFREDO MANEIRO', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '13079248', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Oficina', 118, 'MSD720K10146A', 'ALFREDO MANEIRO', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '13079248', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Seguridad', 119, 'N/A', 'ALFREDO MANEIRO', 'ZOTAC', 'N/A', 0, '', 'CTSR', 'ABAE', '13079248', '2299', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Seguridad', 120, 'N/A', 'ALFREDO MANEIRO', 'LG', 'W1943CV', 0, '', 'CTSR', 'ABAE', '13079248', '2253', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Seguridad', 121, '053105989', 'ALFREDO MANEIRO', 'EMERALD 10', 'N/A', 0, '', 'CTSR', 'ABAE', '13079248', '11767', 'GRIS', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Seguridad', 122, 'N/A', 'ALFREDO MANEIRO', 'N/A', 'N/A', 0, '', 'CTSR', 'ABAE', '13079248', '2475', 'NEGRO / GR', 'Sacapuntas ElÃ©ctrico', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Seguridad', 123, 'AI0S9000-W7HP', 'HECTOR BRAVO', 'SIRAGON', 'AIO SERIA 9000', 0, '', 'CIDE', 'ABAE', 'N/A', '2461', 'BLANCO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Seguridad', 124, '-', 'HECTOR BRAVO', 'COMQTECH', 'CQ-KMS1025', 0, '', 'CIDE', 'ABAE', 'N/A', '2270', 'NEGRO', 'TECLADO', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 125, 'N/A', 'LORENA MARTÃNEZ', 'ZOTAC', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', '2274', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 126, '103NDRF3M750', 'LORENA MARTÃNEZ', 'LG', 'W1943CV', 0, '', 'CIDE', 'ABAE', 'N/A', '2278', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Refrigeracion', 127, 'N/A', 'LORENA MARTÃNEZ', 'COMQTECH', 'CQ-KMS1025', 0, '', 'CIDE', 'ABAE', 'N/A', '2290', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Refrigeracion', 128, '23-001191', 'LORENA MARTÃNEZ', 'HP', 'MO32BO', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Refrigeracion', 129, 'N/A', 'biometrico', 'ZOTAC', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', '2294', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Refrigeracion', 130, 'N/A', 'biometrico', 'LG', 'W1943CV', 0, '', 'CIDE', 'ABAE', 'N/A', '2318', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Refrigeracion', 131, 'N/A', 'Biometrico', 'COMPUTECH', 'CQ-KMS102S', 0, '', 'CIDE', 'ABAE', 'N/A', '2285', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Refrigeracion', 132, 'X69664007661', 'Biometrico', 'GENIUS', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 133, 'HADID607408017235', 'biometrico', 'LG', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Adaptador de corriente', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 134, '214185781', 'CAMARA VIGILANCIA', 'INSPUR', 'NP3020M2', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 135, 'C16D6BA000366', 'CAMARA VIGILANCIA', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 136, 'KBD729K11787A', 'CAMARA VIGILANCIA', 'VIT', 'DOK-K5313', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 137, 'MSD720K10152A', 'CAMARA VIGILANCIA', 'VIT', 'DOK-M696', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 138, '214185857', 'CAMARA VIGILANCIA', 'OMEGA', 'DP-800', 0, '', 'CIDE', 'ABAE', 'N/A', '1322', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:30:00', 1, '2020-01-08 08:30:00', NULL, NULL, NULL, ''),
('Comunicacion', 139, 'sadfsadfsda', 'dsfdsafsdaf', 'sdffsaddfs', 'sdfasadf', 0, '', 'CIDE', 'ABAE', '10213', '3545', 'fsdafsadf', 'sdadasd', 'dsfsdf', 'dfasfsdaf', 0, 0, 'sadfasdfsa', 0, '', 20, '2021-06-14 21:50:07', 0, '2021-06-14 21:50:07', NULL, NULL, NULL, ''),
('Comunicacion', 140, '3213123', '312312312', '213123', '123123', 0, '', 'CIDE', '123123', '3123123213', '3123123', '12321312', '3213', '123123123', '321312', 0, 0, '12312321', 0, '', 20, '2021-06-14 23:10:12', 0, '2021-06-14 23:10:12', NULL, NULL, NULL, ''),
('Comunicacion', 141, '213123', '123123', '12321321', '3213123', 0, '', 'CIDE', 'ABAE', '123123123', '21312312', '123123', '213213', '3123123', '3123213', 0, 0, '12312', 0, '', 20, '2021-06-14 23:14:34', 0, '2021-06-14 23:14:34', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos`
--

CREATE TABLE `transaccion_equipos` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `recibe` varchar(30) NOT NULL,
  `cedula_r` int(15) NOT NULL,
  `empresa_r` varchar(11) NOT NULL,
  `entrega` varchar(30) NOT NULL,
  `cedula_e` int(15) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `lugar_e` varchar(30) NOT NULL,
  `lugar_r` varchar(30) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_equipos`
--

INSERT INTO `transaccion_equipos` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2019-0000001', '10001', 'Prestamo', 'Yoseli', 24913526, 'ABAE', 'Maryeli', 30617828, 'MayeG', 'Pto Cabello', 'Pto Cabello', 1, '2020-05-20 08:30:00', 'Salida'),
('TM-2019-0000002', '10002', 'Prestamo', 'Yoseli', 24913526, 'ABAE', 'Maryeli', 30617828, 'MayeG', 'Pto Cabello', 'Pto Cabello', 1, '2020-05-19 08:30:00', 'Salida'),
('TM-2019-0000003', '10003', 'Prestamo', 'Yoseli', 24913526, 'ABAE', 'Maryeli', 30617828, 'MayeG', 'Pto Cabello', 'Pto Cabello', 1, '2020-05-16 08:30:00', 'Salida'),
('TM-2020-0000004', '10046', 'Prestamo', 'Maryeli', 30617828, 'MAYEG', 'Yoseli', 24913526, 'ABAE', 'CIDE', 'Pto Cabello', 19, '2020-05-20 08:30:00', 'Salida'),
('TM-2021-0000001', '1244', 'PRESTAMO', 'YOSELI GUARAMATO', 24888392, 'ABAE', 'JOSE CARRIZALES', 24642009, 'ABAE', 'CIDE', 'CIDE', 20, '2021-06-28 01:13:30', 'Salida'),
('TM-2021-0000002', '26', 'PRESTAMO', 'YOSELI GUARAMATO', 2555362, 'ABAE', 'JOSE CARRIZALES', 24642009, 'ABAE', 'CIDE', 'CIDE', 20, '2021-06-28 01:18:45', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos_biblioteca`
--

CREATE TABLE `transaccion_equipos_biblioteca` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `recibe` varchar(30) NOT NULL,
  `cedula_r` int(15) NOT NULL,
  `empresa_r` varchar(11) NOT NULL,
  `entrega` varchar(30) NOT NULL,
  `cedula_e` int(15) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `lugar_e` varchar(30) NOT NULL,
  `lugar_r` varchar(30) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_equipos_biblioteca`
--

INSERT INTO `transaccion_equipos_biblioteca` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2021-0000001', '1245', 'PRESTAMO', 'YOSELI GUARAMATO', 233441112, 'ABAE', 'JOSE CARRIZALES', 24642009, 'ABAE', 'CIDE', 'CIDE', 20, '2021-06-28 01:17:22', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos_inmuebles`
--

CREATE TABLE `transaccion_equipos_inmuebles` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `recibe` varchar(30) NOT NULL,
  `cedula_r` int(15) NOT NULL,
  `empresa_r` varchar(11) NOT NULL,
  `entrega` varchar(30) NOT NULL,
  `cedula_e` int(15) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `lugar_e` varchar(30) NOT NULL,
  `lugar_r` varchar(30) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos_vehiculos`
--

CREATE TABLE `transaccion_equipos_vehiculos` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `recibe` varchar(30) NOT NULL,
  `cedula_r` int(15) NOT NULL,
  `empresa_r` varchar(11) NOT NULL,
  `entrega` varchar(30) NOT NULL,
  `cedula_e` int(15) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `lugar_e` varchar(30) NOT NULL,
  `lugar_r` varchar(30) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_transaccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_equipos_vehiculos`
--

INSERT INTO `transaccion_equipos_vehiculos` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2021-0000003', '0214445', 'IJHIOO', 'IHOIHASOI', 77098798, 'HHBHB', 'jdbjKBD', 873910274, 'BUBUU', 'CIDE', 'HIOHNIOH', 20, '2021-06-28 03:00:29', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `cedula_user` int(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `permisos_acceso` varchar(30) NOT NULL,
  `status` enum('activo','bloqueado') NOT NULL DEFAULT 'activo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sede` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `cedula_user`, `password`, `email`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`, `sede`) VALUES
(18, 'Administrador', 'Administrador', 24642009, '1234', '', '', NULL, 'Super Admin', 'activo', '2019-12-05 07:23:22', '2021-04-27 01:10:36', 'SAT'),
(19, 'Onel', 'Yoseli Onel Guaramato Perozo', 1223444, '1234', '', '', 'Yoseli Guaramato.jpg', 'Super Admin', 'activo', '2020-01-30 10:05:20', '2021-04-27 01:10:40', 'ETCS-Luepa'),
(20, 'Admin', 'Jose Carrizales V.', 24642009, '1234', 'CARROZXASqQ@CAFA', '04144001564', '094524048039f9e7e20eea7488e67702.jpg', 'Super Admin', 'activo', '2020-01-30 10:07:40', '2021-06-14 23:14:18', 'CIDE'),
(21, 'Trabajador', 'Trabajador', 0, '1234', 'carrizalesj5@gmai.com', '0414147005', NULL, 'Super Admin', 'activo', '2020-01-30 10:08:08', '2021-04-27 01:10:22', 'ETCS-Baemari'),
(22, 'Alfredo', 'acalderon', 214456544, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:31:41', '2021-06-14 23:31:41', 'CIDE'),
(23, 'adminborburata', 'admin', 12345, '1234', '', '', NULL, 'Super Admin', 'activo', '2021-06-14 23:32:14', '2021-06-14 23:34:04', 'CIDE'),
(24, 'adminluepa', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:34:36', '2021-06-14 23:34:36', 'ETCS-Luepa'),
(25, 'adminctsr', 'admin', 12345, '12345', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:35:01', '2021-06-14 23:35:01', 'CTSR'),
(26, 'adminsat', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:35:19', '2021-06-14 23:35:19', 'SAT'),
(27, 'adminbaemari', 'admin', 12345, '1234', 'dsdsdad@dsasda', '5485415', NULL, 'Super Admin', 'activo', '2021-06-14 23:35:36', '2021-06-14 23:39:15', 'ETCS-Baemari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `codigo` varchar(10) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `cilindros` varchar(20) DEFAULT NULL,
  `transmision` varchar(20) DEFAULT NULL,
  `nMotor` varchar(20) DEFAULT NULL,
  `condicion` varchar(30) DEFAULT NULL,
  `unidad` varchar(30) DEFAULT NULL,
  `ubicacion` varchar(30) DEFAULT NULL,
  `responsable` varchar(30) DEFAULT NULL,
  `pertenece` varchar(30) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `sede` varchar(30) DEFAULT NULL,
  `bienesN` varchar(10) DEFAULT NULL,
  `resguardo` varchar(30) DEFAULT NULL,
  `nmroCarroceria` varchar(20) DEFAULT NULL,
  `anio` varchar(10) DEFAULT NULL,
  `uso` varchar(30) DEFAULT NULL,
  `servicio` varchar(30) DEFAULT NULL,
  `tipoCombustible` varchar(30) DEFAULT NULL,
  `capacidadTanque` varchar(10) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `updated_user` int(5) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`codigo`, `placa`, `marca`, `tipo`, `modelo`, `color`, `cilindros`, `transmision`, `nMotor`, `condicion`, `unidad`, `ubicacion`, `responsable`, `pertenece`, `cedula`, `sede`, `bienesN`, `resguardo`, `nmroCarroceria`, `anio`, `uso`, `servicio`, `tipoCombustible`, `capacidadTanque`, `created_user`, `created_date`, `updated_date`, `estado`, `updated_user`, `categoria`) VALUES
('0214445', '2ASD1D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '8', '5S5A5', 'DAD52321', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445522', 'CIDE', '254414', 'VISTAMAR', '199531231', '2005', 'PERSONAL', 'SERVICIO', 'GASOLINA', '60LTS', 44336, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44336, 'VEHICULOS'),
('0214446', '2ASD2D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '9', '5S5A6', 'DAD52322', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445523', 'CIDE', '254415', 'VISTAMAR', '199531232', '2006', 'PERSONAL', 'SERVICIO', 'GASOLINA', '61LTS', 44337, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44337, 'VEHICULOS'),
('0214447', '2ASD3D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '10', '5S5A7', 'DAD52323', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445524', 'CIDE', '254416', 'VISTAMAR', '199531233', '2007', 'PERSONAL', 'SERVICIO', 'GASOLINA', '62LTS', 44338, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44338, 'VEHICULOS'),
('0214448', '2ASD4D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '11', '5S5A8', 'DAD52324', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445525', 'CIDE', '254417', 'VISTAMAR', '199531234', '2008', 'PERSONAL', 'SERVICIO', 'GASOLINA', '63LTS', 44339, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44339, 'VEHICULOS'),
('0214449', '2ASD5D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '12', '5S5A9', 'DAD52325', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445526', 'CIDE', '254418', 'VISTAMAR', '199531235', '2009', 'PERSONAL', 'SERVICIO', 'GASOLINA', '64LTS', 44340, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44340, 'VEHICULOS'),
('0214450', '2ASD6D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '13', '5S5A10', 'DAD52326', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445527', 'CIDE', '254419', 'VISTAMAR', '199531236', '2010', 'PERSONAL', 'SERVICIO', 'GASOLINA', '65LTS', 44341, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44341, 'VEHICULOS'),
('0214451', '2ASD7D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '14', '5S5A11', 'DAD52327', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445528', 'CIDE', '254420', 'VISTAMAR', '199531237', '2011', 'PERSONAL', 'SERVICIO', 'GASOLINA', '66LTS', 44342, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44342, 'VEHICULOS'),
('0214452', '2ASD8D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '15', '5S5A12', 'DAD52328', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445529', 'CIDE', '254421', 'VISTAMAR', '199531238', '2012', 'PERSONAL', 'SERVICIO', 'GASOLINA', '67LTS', 44343, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44343, 'VEHICULOS'),
('0214453', '2ASD9D', 'DONGFENG', 'CAMIONETA', 'DOBLE CABINA', 'BLANCO', '16', '5S5A13', 'DAD52329', 'BUENA', 'UDLP', 'VISTAMAR', 'ABAE', 'KARLA MIERES', '2445530', 'CIDE', '254422', 'VISTAMAR', '199531239', '2013', 'PERSONAL', 'SERVICIO', 'GASOLINA', '68LTS', 44344, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 44344, 'VEHICULOS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`codigo`,`isbn`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `transaccion_equipos`
--
ALTER TABLE `transaccion_equipos`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`permisos_acceso`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`codigo`,`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
