-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 16:08:18
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


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
  `isbn` varchar(30) NOT NULL,
  `tipo` varchar(300) DEFAULT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `autor` varchar(300) DEFAULT NULL,
  `editorial` varchar(300) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `bienesN` varchar(5) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `sede` varchar(300) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `serial` varchar(30) DEFAULT NULL,
  `envoltura` varchar(20) DEFAULT NULL,
  `condicion` varchar(300) DEFAULT NULL,
  `ubicacion` varchar(30) DEFAULT NULL,
  `created_user` int(11) DEFAULT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `categoria` varchar(300) DEFAULT NULL,
  `cabtidad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`codigo`, `isbn`, `tipo`, `titulo`, `autor`, `editorial`, `cantidad`, `bienesN`, `responsable`, `cedula`, `sede`, `color`, `serial`, `envoltura`, `condicion`, `ubicacion`, `created_user`, `updated_user`, `created_date`, `updated_date`, `estado`, `categoria`, `cabtidad`) VALUES
('1244', 'SA5444', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 2, '20114', 'JOSE CARRIZALES', '24642009', 'CIDE', 'NEGRO', '22A5A41D', 'CUERO', 'BUENA', 'ESTANTE 2', 44318, 44318, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'biblioteca', NULL),
('1245', 'SA5445', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 3, '20115', 'JOSE CARRIZALES', '24642010', 'CIDE', 'NEGRO', '22A5A42D', 'CUERO', 'BUENA', 'ESTANTE 3', 44319, 44319, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'biblioteca', NULL),
('1246', 'SA5446', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 4, '20116', 'JOSE CARRIZALES', '24642011', 'CIDE', 'NEGRO', '22A5A43D', 'CUERO', 'BUENA', 'ESTANTE 4', 44320, 44320, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'biblioteca', NULL),
('1247', 'SA5447', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 5, '20117', 'JOSE CARRIZALES', '24642012', 'CIDE', 'NEGRO', '22A5A44D', 'CUERO', 'BUENA', 'ESTANTE 5', 44321, 44321, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'biblioteca', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `codigo` varchar(30) NOT NULL,
  `componente` varchar(100) DEFAULT NULL,
  `clase` varchar(100) DEFAULT NULL,
  `capacidad` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `condicion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

CREATE TABLE `history` (
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `permiso` varchar(50) NOT NULL,
  `accion` varchar(50) NOT NULL,
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
('Jose Carrizales V.', '24642009', '20', 'Transaccion de Salida', '2021-11-05', '10:10:54'),
('', '', '', 'Eliminacion de usuario', '2021-11-05', '10:10:24'),
('', '', '', 'Eliminacion de usuario', '2021-11-05', '11:11:12'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-05', '13:01:47'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-09', '10:10:13'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:21'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:44'),
('', '12345', '23', 'Eliminacion de inmuebles', '2021-11-09', '14:02:48'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:56'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:45'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:12'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:22'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:46'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '14:02:59'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '15:03:47'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '15:03:50'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '15:03:21'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:57'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:43'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:04'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:36'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:37'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:31'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:32'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:12'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:00'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:52'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-09', '16:04:33'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:05'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:33'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:57'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:02'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:23'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:41'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '09:09:35'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:55'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:41'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:12'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:35'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:57'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:50'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '10:10:46'),
('admin', '12345', '23', 'Incorporacion de equipos', '2021-11-18', '11:11:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `codigo` varchar(10) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `metrosCuadrados` varchar(10) DEFAULT NULL,
  `ubicacion` varchar(300) DEFAULT NULL,
  `tipo` varchar(300) DEFAULT NULL,
  `nmroCuartos` int(10) DEFAULT NULL,
  `condicion` varchar(300) DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `categoria` varchar(300) DEFAULT NULL,
  `pisos` varchar(10) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `habitantes` int(10) DEFAULT NULL,
  `sede` varchar(30) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `created_user` varchar(10) DEFAULT NULL,
  `updated_user` varchar(10) DEFAULT NULL,
  `created_date` varchar(10) DEFAULT NULL,
  `update_date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `categoria` varchar(300) NOT NULL,
  `codigo` int(10) NOT NULL,
  `serial` varchar(20) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `marca` varchar(300) NOT NULL,
  `modelo` varchar(300) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `clasificacion` varchar(300) NOT NULL,
  `sede` varchar(300) NOT NULL,
  `pertenece` varchar(300) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `bienesN` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `condicion` varchar(300) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `unidad` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` enum('chequeado','nochequeado') NOT NULL DEFAULT 'nochequeado',
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(300) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `uso` varchar(20) DEFAULT NULL,
  `detalles` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`categoria`, `codigo`, `serial`, `nombre`, `marca`, `modelo`, `cantidad`, `clasificacion`, `sede`, `pertenece`, `cedula`, `bienesN`, `color`, `descripcion`, `condicion`, `ubicacion`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `estado`, `created_user`, `created_date`, `updated_user`, `updated_date`, `tipo`, `responsable`, `uso`, `detalles`) VALUES
('Comunicacion', 1, '214185856', 'KARLA DESIREE MIERES HENRRIQUEZ', 'INSPUR', 'NP3020M2', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'CPU', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 2, 'C16D6BA000016', 'KARLA DESIREE MIERES HENRRIQUEZ', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 3, 'C16D6BA000382', 'KARLA DESIREE MIERES HENRRIQUEZ', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 4, 'KBD729K11701A', 'KARLA DESIREE MIERES HENRRIQUEZ', 'VIT', 'DOK-K5313', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 5, 'MSD720K10938A', 'KARLA DESIREE MIERES HENRRIQUEZ', 'VIT', 'DOK-M696', 0, '', 'CIDE', 'ABAE', '18344910', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 7, '214185809', 'YOSELI ONEL GUARAMATO PEROZO', 'INSPUR', 'NP3020M2', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 8, 'C16D6BA000339', 'YOSELI ONEL GUARAMATO PEROZO', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 9, 'C16DCBA000008', 'YOSELI ONEL GUARAMATO PEROZO', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 11, 'MSD720K101..A', 'YOSELI ONEL GUARAMATO PEROZO', 'VIT', 'DOK-M696', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 12, '1409290160382', 'YOSELI ONEL GUARAMATO PEROZO', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 13, '214185826', 'JOSE FRANZUE CARRIZALES VARGAS', 'INSPUR', 'NP3020M3', 0, '', 'CIDE', 'ABAE', '24642009', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 14, 'C16D6BA000087', 'JOSE FRANZUE CARRIZALES VARGAS', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 15, 'C16D6BA000474', 'JOSE FRANZUE CARRIZALES VARGAS', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 16, 'KBD729K11142A', 'JOSE FRANZUE CARRIZALES VARGAS', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 17, 'MSD720K10020A', 'JOSE FRANZUE CARRIZALES VARGAS', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 18, '211306300372', 'JOSE FRANZUE CARRIZALES VARGAS', 'OMEGA', 'DP-800', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', '1324', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 19, 'ZF458B090432', 'JOSE FRANZUE CARRIZALES VARGAS', 'GENIUS', 'SP-S110', 0, '', 'ETCS-Baemari', 'ABAE', '24642009', 'N/A', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 20, '214185843', 'EMERSON GERARDO AGUIAR NAVARRO', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 21, 'C16D6BA000341', 'EMERSON GERARDO AGUIAR NAVARRO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'MONITOR', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 22, 'C16D6BA000350', 'EMERSON GERARDO AGUIAR NAVARRO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'MONITOR', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 23, 'MSD720K10079A', 'EMERSON GERARDO AGUIAR NAVARRO', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'MOUSE', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 24, '140929-0160384', 'EMERSON GERARDO AGUIAR NAVARRO', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 25, 'K3D729K16790A', 'EMERSON GERARDO AGUIAR NAVARRO', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '14299653', 'N/A', 'NEGRO', 'TECLADO', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 26, '214185834', 'ALFREDO JOSE CALDERON CURIEL', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 27, 'C16D6BA000024', 'ALFREDO JOSE CALDERON CURIEL', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 28, 'C16D6BA000448', 'ALFREDO JOSE CALDERON CURIEL', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 29, 'KBD729K11654A', 'ALFREDO JOSE CALDERON CURIEL', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 30, 'MSD720K10083A', 'ALFREDO JOSE CALDERON CURIEL', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 31, '211306300665', 'ALFREDO JOSE CALDERON CURIEL', 'OMEGA', 'DP-800', 0, '', 'ETCS-Baemari', 'ABAE', '24574345', '1386', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 32, '214185733', 'JUAN ANTONIO RUIZ SECO', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 33, 'C16D6BA000364', 'JUAN ANTONIO RUIZ SECO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 34, 'C16D6BA000348', 'JUAN ANTONIO RUIZ SECO', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 35, 'KBD729K11708A', 'JUAN ANTONIO RUIZ SECO', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 36, 'MSD720K10932A', 'JUAN ANTONIO RUIZ SECO', 'VIT', 'DOK-M696', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 37, '1409290161218', 'JUAN ANTONIO RUIZ SECO', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'ETCS-Baemari', 'ABAE', '25780954', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 38, '214185761', 'MIGUEL DANIEL BENCOMO ARANA  ', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Baemari', 'ABAE', '25779874', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 39, 'C16D6BA000335', 'MIGUEL DANIEL BENCOMO ARANA  ', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 40, 'C16D6BA000394', 'MIGUEL DANIEL BENCOMO ARANA  ', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 41, 'KBD729K16788A', 'MIGUEL DANIEL BENCOMO ARANA  ', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 42, 'MSD720K10159A', 'MIGUEL DANIEL BENCOMO ARANA  ', 'VIT', 'DOK-M696', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 43, '1409290160381', 'MIGUEL DANIEL BENCOMO ARANA  ', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'ETCS-Luepa', 'ABAE', '25779874', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 44, 'C16D6BA000362', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 45, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'ZOTAC', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2264', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 46, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'CQ-KMS1025', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2280', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 47, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'CQ-TX111', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 48, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'APC', 'BACK-UPS ES 750', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2229', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 49, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2291', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 50, 'N/A', 'ELIEZER JOSE MONTAÃ‘O ORSAL', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '13564263', '2292', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 51, '214185808', 'IRLANDA JOSEFINA MOLINA MOLINA', 'INSPUR', 'NP3020M2', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 52, 'C16D6BA000015', 'IRLANDA JOSEFINA MOLINA MOLINA', 'INSPUR', 'I215EWD-B', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 53, 'KBD729K11149A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'VIT', 'DOK-K5313', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 54, 'MSD720K10939A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'VIT', 'DOK-M696', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 55, '211306300720', 'IRLANDA JOSEFINA MOLINA MOLINA', 'OMEGA', 'DP-800', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', '1321', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 56, 'N/A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', '2276', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 57, 'N/A', 'IRLANDA JOSEFINA MOLINA MOLINA', 'COMQTECH', 'N/A', 0, '', 'ETCS-Luepa', 'ABAE', '18343688', '2277', 'NEGRO', 'Cornetas', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 58, '214185778', 'EDUAR RAFAEL DIAZ COLINA', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 59, 'C16D6BA000388', 'EDUAR RAFAEL DIAZ COLINA', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 60, 'C16D6BA000231', 'EDUAR RAFAEL DIAZ COLINA', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 61, 'KBD729K12764A', 'EDUAR RAFAEL DIAZ COLINA', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 62, 'MSD720K10005A', 'EDUAR RAFAEL DIAZ COLINA', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 63, '140929-0160383', 'EDUAR RAFAEL DIAZ COLINA', 'ADVANCE TE', 'ATP-UPR 754', 0, '', 'SAT', 'ABAE', '11748197', 'N/A', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 64, '214185806', 'HELFRID ALEXANDER BETHANCOUT', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 65, 'C16D6BA000442', 'HELFRID ALEXANDER BETHANCOUT', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 66, 'C16D6BA000327', 'HELFRID ALEXANDER BETHANCOUT', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 67, 'KBD729K11141A', 'HELFRID ALEXANDER BETHANCOUT', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 68, 'MSD720K10187A', 'HELFRID ALEXANDER BETHANCOUT', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '12686954', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 69, '214185810', 'MARIANGEL GRACIELA VALLES CAMACHO', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 70, 'C16D6BA000325', 'MARIANGEL GRACIELA VALLES CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 71, 'C16D6BA000101', 'MARIANGEL GRACIELA VALLES CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 72, 'KBD729K11606A', 'MARIANGEL GRACIELA VALLES CAMACHO', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 73, 'MSD720K10188A', 'MARIANGEL GRACIELA VALLES CAMACHO', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '25784075', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 74, '211306300392', 'MARIANGEL GRACIELA VALLES CAMACHO', 'OMEGA', 'DP-800', 0, '', 'SAT', 'ABAE', '25784075', '1390', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'USMI', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 75, '214185838', 'MARIA CECILIA MONZANT CAMACHO', 'INSPUR', 'NP3020M2', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 76, 'C16D6BA000353', 'MARIA CECILIA MONZANT CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 77, 'C16D6BA000345', 'MARIA CECILIA MONZANT CAMACHO', 'INSPUR', 'I215EWD-B', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 78, 'KBD624K16784A', 'MARIA CECILIA MONZANT CAMACHO', 'VIT', 'DOK-K5313', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 79, 'MSD720K10926A', 'MARIA CECILIA MONZANT CAMACHO', 'VIT', 'DOK-M696', 0, '', 'SAT', 'ABAE', '24561674', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 80, '211306300520', 'MARIA CECILIA MONZANT CAMACHO', 'OMEGA', 'DP-800', 0, '', 'SAT', 'ABAE', '24561674', '1468', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 81, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'INSPUR', 0, '', 'SAT', 'ABAE', '17932717', '214185779', 'NP3020M2', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 82, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'INSPUR', 0, '', 'SAT', 'ABAE', '17932718', 'C16D6BA000333', 'I215EWD-B', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 83, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'VIT', 0, '', 'SAT', 'ABAE', '17932719', 'KBD729K11857A', 'DOK-K5313', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 84, 'NEGRO', 'ROSANA PATRICIA BRICEÃ‘O ALBARRAN', '1', 'VIT', 0, '', 'CTSR', 'ABAE', '17932720', 'MSD720K10198A', 'DOK-M696', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 85, '214185747', 'RUBEN EDUARDO SILVA DIAZ', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 86, 'C16D6BA000352', 'RUBEN EDUARDO SILVA DIAZ', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 87, 'KBD729K11619A', 'RUBEN EDUARDO SILVA DIAZ', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 88, 'MSD720K10117A', 'RUBEN EDUARDO SILVA DIAZ', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '18362413', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 89, '211306300698', 'RUBEN EDUARDO SILVA DIAZ', 'OMEGA', 'DP-800', 0, '', 'CTSR', 'ABAE', '18362413', '1467', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'UDLP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 90, '214185760', 'LUIS ANTONIO ARGUELLO RANGEL', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '13366349', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 91, 'C16D6BA000402', 'LUIS ANTONIO ARGUELLO RANGEL', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '13366350', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 92, 'KBD729K11656A', 'LUIS ANTONIO ARGUELLO RANGEL', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '13366351', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 93, 'MSD720K10076A', 'LUIS ANTONIO ARGUELLO RANGEL', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '13366352', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 94, '214185823', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'INSPUR', 'NP3020M3', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 95, 'C16D6BA000384', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 96, 'KBD729K11143A', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 97, 'MSD720K10935A', 'WILLIAM ALFREDO ARIAS BAPTISTA', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '17854252', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 98, '214185753', 'ARTURO JOSE ROJAS MERCADO', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '16445244', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 99, 'C16D6BA000340', 'ARTURO JOSE ROJAS MERCADO', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '16445245', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 100, 'KBD729K11145A', 'ARTURO JOSE ROJAS MERCADO', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '16445246', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 101, 'MSD720K10943A', 'ARTURO JOSE ROJAS MERCADO', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '16445247', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 102, '214185847', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 103, 'C16D6BA000439', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 104, 'KBD729K11655A', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 105, 'MSD720K10164A', 'CHRISTIAN ANTONIO LEDEZMA ABACHE', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '17251108', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 106, '214185837', 'CESAR EDUARDO VASQUEZ SUAREZ', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 107, 'C16D6BA000326', 'CESAR EDUARDO VASQUEZ SUAREZ', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 108, 'C16D6BA000399', 'CESAR EDUARDO VASQUEZ SUAREZ', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 109, 'KBD729K16827A', 'CESAR EDUARDO VASQUEZ SUAREZ', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 110, 'MSD720K10161A', 'CESAR EDUARDO VASQUEZ SUAREZ', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '16129316', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 111, '211306300519', 'CESAR EDUARDO VASQUEZ SUAREZ', 'OMEGA', 'DP-800', 0, '', 'CTSR', 'ABAE', '16129316', '1380', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 112, '214185744', 'Parra Pulgar Yassarik JosÃ©', 'INSPUR', 'NP3020M2', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'UDIT', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Oficina', 113, 'C16D6BA000334', 'Parra Pulgar Yassarik JosÃ©', 'INSPUR', 'I215EWD-B', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'UPP', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Oficina', 114, 'KBD729K16786A', 'Parra Pulgar Yassarik JosÃ©', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'UDIT', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Oficina', 115, 'MSD720K10946A', 'Parra Pulgar Yassarik JosÃ©', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '13841224', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'UDIT', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Oficina', 116, '211306300719', 'Parra Pulgar Yassarik JosÃ©', 'OMEGA', 'DP-800', 0, '', 'CTSR', 'ABAE', '13841224', '1323', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Oficina', 117, 'KBD729K11858A', 'ALFREDO MANEIRO', 'VIT', 'DOK-K5313', 0, '', 'CTSR', 'ABAE', '13079248', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Oficina', 118, 'MSD720K10146A', 'ALFREDO MANEIRO', 'VIT', 'DOK-M696', 0, '', 'CTSR', 'ABAE', '13079248', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Seguridad', 119, 'N/A', 'ALFREDO MANEIRO', 'ZOTAC', 'N/A', 0, '', 'CTSR', 'ABAE', '13079248', '2299', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Seguridad', 120, 'N/A', 'ALFREDO MANEIRO', 'LG', 'W1943CV', 0, '', 'CTSR', 'ABAE', '13079248', '2253', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Seguridad', 121, '053105989', 'ALFREDO MANEIRO', 'EMERALD 10', 'N/A', 0, '', 'CTSR', 'ABAE', '13079248', '11767', 'GRIS', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Seguridad', 122, 'N/A', 'ALFREDO MANEIRO', 'N/A', 'N/A', 0, '', 'CTSR', 'ABAE', '13079248', '2475', 'NEGRO / GR', 'Sacapuntas ElÃ©ctrico', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Seguridad', 123, 'AI0S9000-W7HP', 'HECTOR BRAVO', 'SIRAGON', 'AIO SERIA 9000', 0, '', 'CIDE', 'ABAE', 'N/A', '2461', 'BLANCO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Seguridad', 124, '-', 'HECTOR BRAVO', 'COMQTECH', 'CQ-KMS1025', 0, '', 'CIDE', 'ABAE', 'N/A', '2270', 'NEGRO', 'TECLADO', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 125, 'N/A', 'LORENA MARTÃNEZ', 'ZOTAC', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', '2274', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 126, '103NDRF3M750', 'LORENA MARTÃNEZ', 'LG', 'W1943CV', 0, '', 'CIDE', 'ABAE', 'N/A', '2278', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Refrigeracion', 127, 'N/A', 'LORENA MARTÃNEZ', 'COMQTECH', 'CQ-KMS1025', 0, '', 'CIDE', 'ABAE', 'N/A', '2290', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Refrigeracion', 128, '23-001191', 'LORENA MARTÃNEZ', 'HP', 'MO32BO', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Refrigeracion', 129, 'N/A', 'biometrico', 'ZOTAC', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', '2294', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Refrigeracion', 130, 'N/A', 'biometrico', 'LG', 'W1943CV', 0, '', 'CIDE', 'ABAE', 'N/A', '2318', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Refrigeracion', 131, 'N/A', 'Biometrico', 'COMPUTECH', 'CQ-KMS102S', 0, '', 'CIDE', 'ABAE', 'N/A', '2285', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Refrigeracion', 132, 'X69664007661', 'Biometrico', 'GENIUS', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 133, 'HADID607408017235', 'biometrico', 'LG', 'N/A', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Adaptador de corriente', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 134, '214185781', 'CAMARA VIGILANCIA', 'INSPUR', 'NP3020M2', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'CPU  (UNIDAD CENTRAL DE PROCES', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 135, 'C16D6BA000366', 'CAMARA VIGILANCIA', 'INSPUR', 'I215EWD-B', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Monitor', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 136, 'KBD729K11787A', 'CAMARA VIGILANCIA', 'VIT', 'DOK-K5313', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Teclado', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 137, 'MSD720K10152A', 'CAMARA VIGILANCIA', 'VIT', 'DOK-M696', 0, '', 'CIDE', 'ABAE', 'N/A', 'N/A', 'NEGRO', 'Mouse', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 138, '214185857', 'CAMARA VIGILANCIA', 'OMEGA', 'DP-800', 0, '', 'CIDE', 'ABAE', 'N/A', '1322', 'NEGRO', 'UPS', 'En uso', 'DIIE', 0, 0, 'N/A', 0, 'nochequeado', 1, '2020-01-08 08:00:00', 1, '2020-01-08 08:00:00', NULL, NULL, NULL, ''),
('Comunicacion', 139, 'sadfsadfsda', 'dsfdsafsdaf', 'sdffsaddfs', 'sdfasadf', 0, '', 'CIDE', 'ABAE', '10213', '3545', 'fsdafsadf', 'sdadasd', 'dsfsdf', 'dfasfsdaf', 0, 0, 'sadfasdfsa', 0, '', 20, '2021-06-14 21:20:07', 0, '2021-06-14 21:20:07', NULL, NULL, NULL, ''),
('Comunicacion', 140, '3213123', '312312312', '213123', '123123', 0, '', 'CIDE', '123123', '3123123213', '3123123', '12321312', '3213', '123123123', '321312', 0, 0, '12312321', 0, '', 20, '2021-06-14 22:40:12', 0, '2021-06-14 22:40:12', NULL, NULL, NULL, ''),
('Comunicacion', 141, '213123', '123123', '12321321', '3213123', 0, '', 'CIDE', 'ABAE', '123123123', '21312312', '123123', '213213', '3123123', '3123213', 0, 0, '12312', 0, '', 20, '2021-06-14 22:44:34', 0, '2021-06-14 22:44:34', NULL, NULL, NULL, ''),
('Oficina', 142, '554D4AAA', 'N/A', 'DELL', 'DLL12', 0, '', 'CIDE', 'ABAE', '00000000', '0152', 'NEGRO', 'Silla de Oficina', 'EXCELENTE', 'OFICINA 1', 0, 0, 'UDLP', 0, '', 23, '2021-11-09 14:41:13', 0, '2021-11-09 14:41:13', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos`
--

CREATE TABLE `transaccion_equipos` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `motivo` varchar(300) NOT NULL,
  `recibe` varchar(300) NOT NULL,
  `cedula_r` int(15) NOT NULL,
  `empresa_r` varchar(300) NOT NULL,
  `entrega` varchar(300) NOT NULL,
  `cedula_e` int(15) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `lugar_e` varchar(300) NOT NULL,
  `lugar_r` varchar(300) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo_transaccion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transaccion_equipos`
--

INSERT INTO `transaccion_equipos` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2021-0000005', '141', 'Prestamo', 'Yose', 21454656, 'ABAE', 'Jose', 246400225, 'ABAE', 'CIDE', 'Borburata', 20, '2021-11-05 18:11:54', 'Salida');

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
(18, 'Administrador', 'Administrador', 24642009, '1234', '', '', NULL, 'Super Admin', 'activo', '2019-12-05 06:53:22', '2021-04-27 00:40:36', 'SAT'),
(21, 'Trabajador', 'Trabajador', 0, '1234', 'carrizalesj5@gmai.com', '0414147005', NULL, 'Super Admin', 'activo', '2020-01-30 09:38:08', '2021-04-27 00:40:22', 'ETCS-Baemari'),
(22, 'Alfredo', 'acalderon', 214456544, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:01:41', '2021-06-14 23:01:41', 'CIDE'),
(23, 'Admin', 'admin', 12345, '1234', '', '', NULL, 'Super Admin', 'activo', '2021-06-14 23:02:14', '2021-11-09 17:54:48', 'CIDE'),
(24, 'adminluepa', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:04:36', '2021-06-14 23:04:36', 'ETCS-Luepa'),
(25, 'adminctsr', 'admin', 12345, '12345', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:05:01', '2021-06-14 23:05:01', 'CTSR'),
(26, 'adminsat', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-14 23:05:19', '2021-06-14 23:05:19', 'SAT'),
(27, 'adminbaemari', 'admin', 12345, '1234', 'dsdsdad@dsasda', '5485415', NULL, 'Super Admin', 'activo', '2021-06-14 23:05:36', '2021-06-14 23:09:15', 'ETCS-Baemari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `codigo` varchar(10) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `marca` varchar(300) DEFAULT NULL,
  `tipo` varchar(300) DEFAULT NULL,
  `modelo` varchar(300) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `cilindros` varchar(300) DEFAULT NULL,
  `transmision` varchar(300) DEFAULT NULL,
  `nMotor` varchar(300) DEFAULT NULL,
  `condicion` varchar(300) DEFAULT NULL,
  `unidad` varchar(300) DEFAULT NULL,
  `ubicacion` varchar(300) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `pertenece` varchar(300) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `sede` varchar(300) DEFAULT NULL,
  `bienesN` varchar(10) DEFAULT NULL,
  `resguardo` varchar(300) DEFAULT NULL,
  `nmroCarroceria` varchar(300) DEFAULT NULL,
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
  `categoria` varchar(30) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`codigo`,`isbn`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`codigo`);

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
