-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2022 a las 17:51:08
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `condicion` varchar(300) DEFAULT NULL,
  `ubicacion` varchar(30) DEFAULT NULL,
  `created_user` int(11) DEFAULT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `categoria` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`codigo`, `isbn`, `tipo`, `titulo`, `autor`, `editorial`, `cantidad`, `bienesN`, `responsable`, `cedula`, `sede`, `color`, `condicion`, `ubicacion`, `created_user`, `updated_user`, `created_date`, `updated_date`, `estado`, `categoria`) VALUES
('1263', 'SA5463', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 10, '20133', 'JOSE CARRIZALES', '24642028', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 21', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1264', 'SA5464', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20134', 'JOSE CARRIZALES', '24642029', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 22', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1265', 'SA5465', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20135', 'JOSE CARRIZALES', '24642030', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 23', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1266', 'SA5466', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20136', 'JOSE CARRIZALES', '24642031', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 24', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1267', 'SA5467', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20137', 'JOSE CARRIZALES', '24642032', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 25', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1268', 'SA5468', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20138', 'JOSE CARRIZALES', '24642033', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 26', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1269', 'SA5469', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20139', 'JOSE CARRIZALES', '24642034', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 27', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1270', 'SA5470', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20140', 'JOSE CARRIZALES', '24642035', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 28', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1271', 'SA5471', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20141', 'JOSE CARRIZALES', '24642036', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 29', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1272', 'SA5472', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20142', 'JOSE CARRIZALES', '24642037', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 30', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1273', 'SA5473', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20143', 'JOSE CARRIZALES', '24642038', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 31', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1274', 'SA5474', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20144', 'JOSE CARRIZALES', '24642039', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 32', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1275', 'SA5475', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20145', 'JOSE CARRIZALES', '24642040', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 33', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1276', 'SA5476', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20146', 'JOSE CARRIZALES', '24642041', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 34', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1277', 'SA5477', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20147', 'JOSE CARRIZALES', '24642042', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 35', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1278', 'SA5478', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20148', 'JOSE CARRIZALES', '24642043', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 36', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1279', 'SA5479', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20149', 'JOSE CARRIZALES', '24642044', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 37', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1280', 'SA5480', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20150', 'JOSE CARRIZALES', '24642045', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 38', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca'),
('1281', 'SA5481', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R. R. MARTIN', 'SALESIANA', 21, '20151', 'JOSE CARRIZALES', '24642046', 'CIDE', 'NEGRO', 'BUENA', 'ESTANTE 39', 23, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nochequeado', 'Biblioteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `codigo` int(30) NOT NULL,
  `componente` varchar(100) DEFAULT NULL,
  `clase` varchar(100) DEFAULT NULL,
  `capacidad` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `condicion` varchar(100) DEFAULT NULL,
  `voltaje` int(30) NOT NULL,
  `certificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`codigo`, `componente`, `clase`, `capacidad`, `marca`, `modelo`, `serial`, `condicion`, `voltaje`, `certificacion`) VALUES
(5174, 'disco1', '', '88888', '', '', '', '', 0, ''),
(5174, 'disco2', '', '', '', '', '', '', 0, ''),
(5174, 'fuente de poder', NULL, NULL, '', '', '', '', 0, ''),
(5174, 'tarjeta de video', '', '', '888', '', '', '', 0, ''),
(5174, 'memoria ram1', '', '', '888', '', '', '', 0, ''),
(5174, 'memoria ram2', '', '', '88888', '', '', '', 0, '');

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
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-23', '13:01:26'),
('admin', '12345', '23', 'Importacion Modulo Inmuebles', '2021-11-23', '13:01:04'),
('admin', '12345', '23', 'Importacion Modulo Vehiculos', '2021-11-23', '13:01:16'),
('admin', '12345', '23', 'Importacion Modulo Comunicacion', '2021-11-23', '13:01:28'),
('', '12345', '23', 'Eliminacion de inmuebles', '2021-11-23', '15:03:23'),
('', '12345', '23', 'Eliminacion de inmuebles', '2021-11-23', '15:03:27'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:33'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:39'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:42'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:47'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:54'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:02'),
('', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:08'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:13'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:21'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:20'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-23', '15:03:45'),
('admin', '12345', '23', 'Transaccion de Salida', '2021-11-25', '08:08:20'),
('admin', '12345', '23', 'Transaccion de Salida', '2021-11-25', '08:08:07'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:39'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:55'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:15'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:30'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:55'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:31'),
('', '12345', '23', 'Eliminacion de equipo', '2021-11-25', '08:08:32'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:59'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:15'),
('admin', '12345', '23', 'Transaccion de Salida', '2021-11-25', '08:08:41'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:57'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:34'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '08:08:45'),
('admin', '12345', '23', 'Transaccion de Salida', '2021-11-25', '09:09:11'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:39'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:06'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:58'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:15'),
('admin', '12345', '23', 'Importacion Modulo Comunicacion', '2021-11-25', '09:09:37'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:49'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:47'),
('admin', '12345', '23', 'Transaccion de Salida', '2021-11-25', '09:09:05'),
('admin', '12345', '23', 'Importacion Modulo Control de Equipos', '2021-11-25', '09:09:13'),
('', '12345', '23', 'Registro de equipo', '2021-11-25', '11:11:57'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '11:11:16'),
('', '12345', '23', 'Eliminacion de equipo', '2021-11-25', '11:11:43'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '11:11:15'),
('admin', '12345', '23', 'Eportacion Modulo Vehiculos', '2021-11-25', '12:12:36'),
('admin', '12345', '23', 'Eportacion Modulo Vehiculos', '2021-11-25', '12:12:58'),
('admin', '12345', '23', 'Eportacion Modulo Vehiculos', '2021-11-25', '12:12:42'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-25', '12:12:53'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-25', '12:12:25'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-25', '12:12:26'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-25', '12:12:30'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-25', '12:12:24'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-25', '12:12:08'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-11-25', '12:12:16'),
('', '12345', '23', 'Registro de equipo', '2021-11-25', '12:12:48'),
('admin', '12345', '23', 'Exportacion Modulo Biblioteca', '2021-11-25', '12:12:58'),
('admin', '12345', '23', 'Exportacion Modulo Biblioteca', '2021-11-25', '12:12:47'),
('', '12345', '23', 'Registro de equipo', '2021-11-25', '12:12:54'),
('', '12345', '23', 'Modificacion de inmueble', '2021-11-25', '12:12:55'),
('', '12345', '23', 'Modificacion de inmueble', '2021-11-25', '12:12:19'),
('', '12345', '23', 'Eliminacion de inmuebles', '2021-11-25', '13:01:27'),
('', '12345', '23', 'Registro de equipo', '2021-11-25', '13:01:45'),
('', '12345', '23', 'Registro de equipo', '2021-11-25', '13:01:58'),
('', '12345', '23', 'Eliminacion de inmuebles', '2021-11-25', '13:01:53'),
('', '12345', '23', 'Eliminacion de inmuebles', '2021-11-25', '13:01:55'),
('', '12345', '23', 'Modificacion de inmueble', '2021-11-25', '13:01:36'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '13:01:32'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '14:02:48'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '14:02:53'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '14:02:46'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '14:02:31'),
('admin', '12345', '23', 'Importacion Modulo Biblioteca', '2021-11-25', '14:02:57'),
('admin', '12345', '23', 'Importacion Modulo Inmuebles', '2021-11-25', '14:02:51'),
('admin', '12345', '23', 'Importacion Modulo Inmuebles', '2021-11-25', '14:02:47'),
('admin', '12345', '23', 'Importacion Modulo Vehiculos', '2021-11-25', '14:02:19'),
('admin', '12345', '23', 'Importacion Modulo Comunicacion', '2021-11-25', '15:03:04'),
('admin', '12345', '23', 'Importacion Modulo Comunicacion', '2021-11-25', '15:03:05'),
('admin', '12345', '23', 'Exportacion Modulo Comunicacion', '2021-11-25', '15:03:28'),
('', '12345', '23', 'Modificacion de equipo', '2021-11-25', '16:04:47'),
('', '12345', '23', 'Modificacion de inmueble', '2021-11-25', '16:04:08'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-25', '16:04:31'),
('admin', '12345', '23', 'Modificacion de equipo', '2021-11-25', '16:04:34'),
('admin', '12345', '23', 'Modificacion de equipo', '2021-11-25', '16:04:34'),
('admin', '12345', '23', 'Registro de equipo', '2021-11-25', '16:04:43'),
('admin', '12345', '23', 'Modificacion de equipo', '2021-11-25', '16:04:46'),
('admin', '12345', '23', 'Modificacion de equipo', '2021-11-25', '16:04:07'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-21', '12:12:35'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-21', '12:12:03'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-12-21', '12:12:17'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-12-21', '12:12:21'),
('admin', '12345', '23', 'Eliminacion de equipo', '2021-12-24', '09:09:53'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '11:11:08'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '11:11:01'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '11:11:49'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '11:11:36'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:15'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:35'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:10'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:37'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:58'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:59'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:23'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:15'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:03'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:35'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:33'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:22'),
('admin', '12345', '23', 'Registro de equipo', '2021-12-24', '12:12:14'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '09:09:43'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '09:09:35'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '09:09:47'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:51'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:53'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:54'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:56'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:56'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:57'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:58'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:58'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:59'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:00'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:00'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:01'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:02'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:03'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:07'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:09'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:10'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:11'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:12'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:12'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:13'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '09:09:14'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '10:10:47'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '10:10:52'),
('admin', '12345', '23', 'Registro de componentes internos', '2022-01-04', '10:10:29'),
('admin', '12345', '23', 'Exportacion Modulo Comunicacion', '2022-01-04', '10:10:50'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '10:10:12'),
('admin', '12345', '23', 'Registro de componentes internos', '2022-01-04', '10:10:27'),
('admin', '12345', '23', 'Registro de componentes internos', '2022-01-04', '10:10:24'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '10:10:30'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '10:10:49'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '10:10:49'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '10:10:50'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '10:10:52'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '10:10:53'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '10:10:14'),
('admin', '12345', '23', 'Registro de componentes internos', '2022-01-04', '10:10:23'),
('admin', '12345', '23', 'Registro de componentes internos', '2022-01-04', '10:10:56'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:37'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:24'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:03'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:08'),
('admin', '12345', '23', 'Registro de componentes internos', '2022-01-04', '11:11:15'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:52'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:54'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:58'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:01'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:03'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:07'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:09'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:31'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:21'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:13'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:32'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:36'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:50'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:41'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:47'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:05'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:58'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:07'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:10'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-04', '11:11:14'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-04', '11:11:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `codigo` varchar(50) NOT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `metrosCuadrados` varchar(100) DEFAULT NULL,
  `tipo` varchar(300) DEFAULT NULL,
  `nmroCuartos` int(10) DEFAULT NULL,
  `condicion` varchar(300) DEFAULT NULL,
  `estado` enum('chequeado','nochequeado') DEFAULT 'nochequeado',
  `categoria` varchar(300) DEFAULT NULL,
  `pisos` varchar(10) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `direccion` varchar(300) DEFAULT NULL,
  `habitantes` int(10) DEFAULT NULL,
  `sede` varchar(100) DEFAULT NULL,
  `created_user` varchar(50) DEFAULT NULL,
  `updated_user` varchar(50) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`codigo`, `descripcion`, `metrosCuadrados`, `tipo`, `nmroCuartos`, `condicion`, `estado`, `categoria`, `pisos`, `responsable`, `cedula`, `direccion`, `habitantes`, `sede`, `created_user`, `updated_user`, `created_date`, `update_date`) VALUES
('10001', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52151', 'BORBURATA', 1, 'CIDE', '23', '1900-01-22 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10002', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52152', 'BORBURATA', 1, 'CIDE', '24', '1900-01-23 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10003', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52153', 'BORBURATA', 1, 'CIDE', '25', '1900-01-24 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10004', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52154', 'BORBURATA', 1, 'CIDE', '26', '1900-01-25 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10005', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52155', 'BORBURATA', 1, 'CIDE', '27', '1900-01-26 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10006', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52156', 'BORBURATA', 1, 'CIDE', '28', '1900-01-27 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10007', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52157', 'BORBURATA', 1, 'CIDE', '29', '1900-01-28 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10008', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52158', 'BORBURATA', 1, 'CIDE', '30', '1900-01-29 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10009', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52159', 'BORBURATA', 1, 'CIDE', '31', '1900-01-30 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10010', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52160', 'BORBURATA', 1, 'CIDE', '32', '1900-01-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10011', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52161', 'BORBURATA', 1, 'CIDE', '33', '1900-02-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10012', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52162', 'BORBURATA', 1, 'CIDE', '34', '1900-02-02 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10013', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52163', 'BORBURATA', 1, 'CIDE', '35', '1900-02-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10014', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52164', 'BORBURATA', 1, 'CIDE', '36', '1900-02-04 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10015', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52165', 'BORBURATA', 1, 'CIDE', '37', '1900-02-05 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10016', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52166', 'BORBURATA', 1, 'CIDE', '38', '1900-02-06 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10017', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52167', 'BORBURATA', 1, 'CIDE', '39', '1900-02-07 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10018', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52168', 'BORBURATA', 1, 'CIDE', '40', '1900-02-08 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('10019', 'CASA ABAE', '50', 'CASA', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52169', 'BORBURATA', 1, 'CIDE', '41', '23', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
('Comunicacion', 5151, '4D5AS', '', 'XIAOMI', 'REDMI', 1, '', 'CIDE', 'ABAE', '24642009', '215', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-25 08:00:00', 23, '2020-11-25 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5152, '4D6AS', '', 'XIAOMI', 'REDMI', 2, '', 'CIDE', 'ABAE', '24642010', '216', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-26 08:00:00', 23, '2020-11-26 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5153, '4D7AS', '', 'XIAOMI', 'REDMI', 3, '', 'CIDE', 'ABAE', '24642011', '217', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-27 08:00:00', 23, '2020-11-27 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5154, '4D8AS', '', 'XIAOMI', 'REDMI', 4, '', 'CIDE', 'ABAE', '24642012', '218', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-28 08:00:00', 23, '2020-11-28 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5155, '4D9AS', '', 'XIAOMI', 'REDMI', 5, '', 'CIDE', 'ABAE', '24642013', '219', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-29 08:00:00', 23, '2020-11-29 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5156, '4D10AS', '', 'XIAOMI', 'REDMI', 6, '', 'CIDE', 'ABAE', '24642014', '220', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-30 08:00:00', 23, '2020-11-30 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5157, '4D11AS', '', 'XIAOMI', 'REDMI', 7, '', 'CIDE', 'ABAE', '24642015', '221', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-01 08:00:00', 23, '2020-12-01 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electronicos', 5158, '4D12AS', '', 'XIAOMI', 'REDMI', 8, '', 'CIDE', 'ABAE', '24642016', '222', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-02 08:00:00', 23, '2020-12-02 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electronicos', 5159, '4D13AS', '', 'XIAOMI', 'REDMI', 9, '', 'CIDE', 'ABAE', '24642017', '223', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-03 08:00:00', 23, '2020-12-03 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5160, '4D14AS', '', 'XIAOMI', 'REDMI', 10, '', 'CIDE', 'ABAE', '24642018', '224', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-04 08:00:00', 23, '2020-12-04 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5161, '4D15AS', '', 'XIAOMI', 'REDMI', 11, '', 'CIDE', 'ABAE', '24642019', '225', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-05 08:00:00', 23, '2020-12-05 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5162, '4D16AS', '', 'XIAOMI', 'REDMI', 12, '', 'CIDE', 'ABAE', '24642020', '226', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-06 08:00:00', 23, '2020-12-06 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electrodomesticos', 5163, '4D17AS', '', 'XIAOMI', 'REDMI', 13, '', 'CIDE', 'ABAE', '24642021', '227', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-07 08:00:00', 23, '2020-12-07 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electrodomesticos', 5164, '4D18AS', '', 'XIAOMI', 'REDMI', 14, '', 'CIDE', 'ABAE', '24642022', '228', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-08 08:00:00', 23, '2020-12-08 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electrodomesticos', 5165, '4D19AS', '', 'XIAOMI', 'REDMI', 15, '', 'CIDE', 'ABAE', '24642023', '229', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-09 08:00:00', 23, '2020-12-09 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Mobiliario', 5166, '4D20AS', '', 'XIAOMI', 'REDMI', 4, '', 'CIDE', 'ABAE', '24642024', '230', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-10 08:00:00', 23, '2020-12-10 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Mobiliario', 5167, '4D21AS', '', 'XIAOMI', 'REDMI', 17, '', 'CIDE', 'ABAE', '24642025', '231', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-11 08:00:00', 23, '2020-12-11 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5168, '4D22AS', '', 'XIAOMI', 'REDMI', 18, '', 'CIDE', 'ABAE', '24642026', '232', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-12 08:00:00', 23, '2020-12-12 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5169, '4D23AS', '', 'XIAOMI', 'REDMI', 19, '', 'CIDE', 'ABAE', '24642027', '233', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-13 08:00:00', 23, '2020-12-13 08:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5170, 'ttttt', '', 'ttt', 'ttt', 0, '', 'CIDE', 't', '66666', '456456', 'tttt', 'tttt', 'tttt', 'tttt', 0, 0, 'tttt', 0, '', 23, '2022-01-04 15:31:31', 0, '2022-01-04 15:31:31', NULL, 'ttttt', NULL, ''),
('Comunicacion', 5171, 'erterterter', '', 'ertertretert', 'ertetert', 0, '', 'CIDE', 'ABAE', '54645', '456456', 'erterter', 'retertetr', 'tertertert', 'ertert', 0, 0, 'erterter', 0, '', 23, '2022-01-04 15:41:50', 0, '2022-01-04 15:41:50', NULL, 'tyertert', NULL, ''),
('Comunicacion', 5172, 'dasdsad', '', 'dasdasdas', 'as', 0, '', 'CIDE', 'ABAE', '524463', '45343', 'dsda', 'asdsadasd', 'dasdasdasd', 'asdasd', 0, 0, 'asdasd', 0, '', 23, '2022-01-04 15:43:41', 0, '2022-01-04 15:43:41', NULL, 'asdasdas', NULL, ''),
('Comunicacion', 5173, 'eyetyer', '', 'eyeyety', 'etyertyey', 0, '', 'CIDE', 'ABAE', '45767', '4674576', 'etyerytey', 'eyeyety', 'eyeyt', 'tyrty', 0, 0, 'tyety', 0, '', 23, '2022-01-04 15:52:46', 0, '2022-01-04 15:52:46', NULL, 'etytey', NULL, '');

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
('TM-2020-0000001', '10001', 'Prestamo', 'Jose Carrizales', 24642009, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642009', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000002', '10002', 'Prestamo', 'Jose Carrizales', 24642010, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642010', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000003', '10003', 'Prestamo', 'Jose Carrizales', 24642011, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642011', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000004', '10004', 'Prestamo', 'Jose Carrizales', 24642012, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642012', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000005', '10005', 'Prestamo', 'Jose Carrizales', 24642013, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642013', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000006', '10006', 'Prestamo', 'Jose Carrizales', 24642014, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642014', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000007', '10007', 'Prestamo', 'Jose Carrizales', 24642015, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642015', 'ABAE', 'SAT', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000008', '10008', 'Prestamo', 'Jose Carrizales', 24642016, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642016', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000009', '10009', 'Prestamo', 'Jose Carrizales', 24642017, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642017', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000010', '10010', 'Prestamo', 'Jose Carrizales', 24642018, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642018', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000011', '10011', 'Prestamo', 'Jose Carrizales', 24642019, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642019', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000012', '10012', 'Prestamo', 'Jose Carrizales', 24642020, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642020', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000013', '10013', 'Prestamo', 'Jose Carrizales', 24642021, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642021', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000014', '10014', 'Prestamo', 'Jose Carrizales', 24642022, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642022', 'ABAE', 'CTSR', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000015', '10015', 'Prestamo', 'Jose Carrizales', 24642023, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642023', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000016', '10016', 'Prestamo', 'Jose Carrizales', 24642024, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642024', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000017', '10017', 'Prestamo', 'Jose Carrizales', 24642025, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642025', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000018', '10018', 'Prestamo', 'Yoseli Guaramato', 24642026, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642026', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000019', '10019', 'Prestamo', 'Yoseli Guaramato', 24642027, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642027', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000020', '10020', 'Prestamo', 'Yoseli Guaramato', 24642028, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642028', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000021', '10021', 'Prestamo', 'Yoseli Guaramato', 24642029, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642029', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000022', '10022', 'Prestamo', 'Yoseli Guaramato', 24642030, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642030', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000023', '10023', 'Prestamo', 'Yoseli Guaramato', 24642031, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642031', 'ABAE', 'ETCS-Luepa', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000024', '10024', 'Prestamo', 'Yoseli Guaramato', 24642032, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642032', 'ABAE', 'ETCS-Luepa', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000025', '10025', 'Prestamo', 'Yoseli Guaramato', 24642033, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642033', 'ABAE', 'ETCS-Luepa', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000026', '10026', 'Prestamo', 'Yoseli Guaramato', 24642034, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642034', 'ABAE', 'ETCS-Luepa', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000027', '10027', 'Prestamo', 'Yoseli Guaramato', 24642035, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642035', 'ABAE', 'ETCS-Luepa', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000028', '10028', 'Prestamo', 'Yoseli Guaramato', 24642036, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642036', 'ABAE', 'ETCS-Luepa', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000029', '10029', 'Prestamo', 'Yoseli Guaramato', 24642037, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642037', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000030', '10030', 'Prestamo', 'Yoseli Guaramato', 24642038, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642038', 'ABAE', 'ETCS-Baemari', 27, '2020-10-30 08:00:00', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos_biblioteca`
--

CREATE TABLE `transaccion_equipos_biblioteca` (
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
-- Volcado de datos para la tabla `transaccion_equipos_biblioteca`
--

INSERT INTO `transaccion_equipos_biblioteca` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2020-0000001', '1245', 'Prestamo', 'Jose Carrizales', 24642009, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642009', 'ABAE', 'TCS', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000002', '1246', 'Prestamo', 'Jose Carrizales', 24642010, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642010', 'ABAE', 'CIDE', 28, '2020-10-31 08:00:00', 'Salida'),
('TM-2020-0000003', '1247', 'Prestamo', 'Jose Carrizales', 24642011, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642011', 'ABAE', 'CIDE', 29, '2020-11-01 08:00:00', 'Salida'),
('TM-2020-0000004', '1248', 'Prestamo', 'Jose Carrizales', 24642012, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642012', 'ABAE', 'CIDE', 30, '2020-11-02 08:00:00', 'Salida'),
('TM-2020-0000005', '1249', 'Prestamo', 'Jose Carrizales', 24642013, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642013', 'ABAE', 'CIDE', 31, '2020-11-03 08:00:00', 'Salida'),
('TM-2020-0000006', '1250', 'Prestamo', 'Jose Carrizales', 24642014, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642014', 'ABAE', 'CIDE', 32, '2020-11-04 08:00:00', 'Salida'),
('TM-2020-0000007', '1251', 'Prestamo', 'Jose Carrizales', 24642015, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642015', 'ABAE', 'CIDE', 33, '2020-11-05 08:00:00', 'Salida'),
('TM-2020-0000008', '1252', 'Prestamo', 'Jose Carrizales', 24642016, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642016', 'ABAE', 'CIDE', 34, '2020-11-06 08:00:00', 'Salida'),
('TM-2020-0000009', '1253', 'Prestamo', 'Jose Carrizales', 24642017, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642017', 'ABAE', 'CIDE', 35, '2020-11-07 08:00:00', 'Salida'),
('TM-2020-0000010', '1254', 'Prestamo', 'Jose Carrizales', 24642018, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642018', 'ABAE', 'CIDE', 36, '2020-11-08 08:00:00', 'Salida'),
('TM-2020-0000011', '1255', 'Prestamo', 'Jose Carrizales', 24642019, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642019', 'ABAE', 'CIDE', 37, '2020-11-09 08:00:00', 'Salida'),
('TM-2020-0000012', '1256', 'Prestamo', 'Jose Carrizales', 24642020, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642020', 'ABAE', 'CIDE', 38, '2020-11-10 08:00:00', 'Salida'),
('TM-2020-0000013', '1257', 'Prestamo', 'Jose Carrizales', 24642021, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642021', 'ABAE', 'CIDE', 39, '2020-11-11 08:00:00', 'Salida'),
('TM-2020-0000014', '1258', 'Prestamo', 'Jose Carrizales', 24642022, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642022', 'ABAE', 'CIDE', 40, '2020-11-12 08:00:00', 'Salida'),
('TM-2020-0000015', '1259', 'Prestamo', 'Jose Carrizales', 24642023, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642023', 'ABAE', 'CIDE', 41, '2020-11-13 08:00:00', 'Salida'),
('TM-2020-0000016', '1260', 'Prestamo', 'Jose Carrizales', 24642024, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642024', 'ABAE', 'CIDE', 42, '2020-11-14 08:00:00', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos_inmuebles`
--

CREATE TABLE `transaccion_equipos_inmuebles` (
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
-- Volcado de datos para la tabla `transaccion_equipos_inmuebles`
--

INSERT INTO `transaccion_equipos_inmuebles` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2020-0000001', '1002', 'Prestamo', 'Jose Carrizales', 24642009, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642009', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000002', '1003', 'Prestamo', 'Jose Carrizales', 24642010, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642010', 'ABAE', 'CIDE', 28, '2020-10-31 08:00:00', 'Salida'),
('TM-2020-0000003', '1004', 'Prestamo', 'Jose Carrizales', 24642011, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642011', 'ABAE', 'CIDE', 29, '2020-11-01 08:00:00', 'Salida'),
('TM-2020-0000004', '1005', 'Prestamo', 'Jose Carrizales', 24642012, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642012', 'ABAE', 'CIDE', 30, '2020-11-02 08:00:00', 'Salida'),
('TM-2020-0000005', '1006', 'Prestamo', 'Jose Carrizales', 24642013, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642013', 'ABAE', 'CIDE', 31, '2020-11-03 08:00:00', 'Salida'),
('TM-2020-0000006', '1007', 'Prestamo', 'Jose Carrizales', 24642014, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642014', 'ABAE', 'CIDE', 32, '2020-11-04 08:00:00', 'Salida'),
('TM-2020-0000007', '1008', 'Prestamo', 'Jose Carrizales', 24642015, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642015', 'ABAE', 'CIDE', 33, '2020-11-05 08:00:00', 'Salida'),
('TM-2020-0000008', '1009', 'Prestamo', 'Jose Carrizales', 24642016, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642016', 'ABAE', 'CIDE', 34, '2020-11-06 08:00:00', 'Salida'),
('TM-2020-0000009', '1010', 'Prestamo', 'Jose Carrizales', 24642017, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642017', 'ABAE', 'CIDE', 35, '2020-11-07 08:00:00', 'Salida'),
('TM-2020-0000010', '1011', 'Prestamo', 'Jose Carrizales', 24642018, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642018', 'ABAE', 'CIDE', 36, '2020-11-08 08:00:00', 'Salida'),
('TM-2020-0000011', '1012', 'Prestamo', 'Jose Carrizales', 24642019, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642019', 'ABAE', 'CIDE', 37, '2020-11-09 08:00:00', 'Salida'),
('TM-2020-0000012', '1013', 'Prestamo', 'Jose Carrizales', 24642020, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642020', 'ABAE', 'CIDE', 38, '2020-11-10 08:00:00', 'Salida'),
('TM-2020-0000013', '1014', 'Prestamo', 'Jose Carrizales', 24642021, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642021', 'ABAE', 'CIDE', 39, '2020-11-11 08:00:00', 'Salida'),
('TM-2020-0000014', '1015', 'Prestamo', 'Jose Carrizales', 24642022, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642022', 'ABAE', 'CIDE', 40, '2020-11-12 08:00:00', 'Salida'),
('TM-2020-0000015', '1016', 'Prestamo', 'Jose Carrizales', 24642023, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642023', 'ABAE', 'CIDE', 41, '2020-11-13 08:00:00', 'Salida'),
('TM-2020-0000016', '1017', 'Prestamo', 'Jose Carrizales', 24642024, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642024', 'ABAE', 'CIDE', 42, '2020-11-14 08:00:00', 'Salida'),
('TM-2020-0000017', '1018', 'Prestamo', 'Jose Carrizales', 24642025, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642025', 'ABAE', 'CIDE', 43, '2020-11-15 08:00:00', 'Salida'),
('TM-2020-0000018', '1019', 'Prestamo', 'Jose Carrizales', 24642026, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642026', 'ABAE', 'CIDE', 44, '2020-11-16 08:00:00', 'Salida'),
('TM-2020-0000019', '1020', 'Prestamo', 'Jose Carrizales', 24642027, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642027', 'ABAE', 'CIDE', 45, '2020-11-17 08:00:00', 'Salida'),
('TM-2020-0000020', '1021', 'Prestamo', 'Jose Carrizales', 24642028, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642028', 'ABAE', 'CIDE', 46, '2020-11-18 08:00:00', 'Salida'),
('TM-2020-0000021', '1022', 'Prestamo', 'Jose Carrizales', 24642029, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642029', 'ABAE', 'CIDE', 47, '2020-11-19 08:00:00', 'Salida'),
('TM-2020-0000022', '1023', 'Prestamo', 'Jose Carrizales', 24642030, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642030', 'ABAE', 'CIDE', 48, '2020-11-20 08:00:00', 'Salida'),
('TM-2020-0000023', '1024', 'Prestamo', 'Jose Carrizales', 24642031, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642031', 'ABAE', 'CIDE', 49, '2020-11-21 08:00:00', 'Salida'),
('TM-2020-0000024', '1025', 'Prestamo', 'Jose Carrizales', 24642032, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642032', 'ABAE', 'CIDE', 50, '2020-11-22 08:00:00', 'Salida'),
('TM-2020-0000025', '1026', 'Prestamo', 'Jose Carrizales', 24642033, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642033', 'ABAE', 'CIDE', 51, '2020-11-23 08:00:00', 'Salida'),
('TM-2020-0000026', '1027', 'Prestamo', 'Jose Carrizales', 24642034, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642034', 'ABAE', 'CIDE', 52, '2020-11-24 08:00:00', 'Salida'),
('TM-2020-0000027', '1028', 'Prestamo', 'Jose Carrizales', 24642035, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642035', 'ABAE', 'CIDE', 53, '2020-11-25 08:00:00', 'Salida'),
('TM-2020-0000028', '1029', 'Prestamo', 'Jose Carrizales', 24642036, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642036', 'ABAE', 'CIDE', 54, '2020-11-26 08:00:00', 'Salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_equipos_vehiculos`
--

CREATE TABLE `transaccion_equipos_vehiculos` (
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
-- Volcado de datos para la tabla `transaccion_equipos_vehiculos`
--

INSERT INTO `transaccion_equipos_vehiculos` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2020-0000001', '0214449', 'Prestamo', 'Jose Carrizales', 24642009, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642009', 'ABAE', 'CIDE', 27, '2020-10-30 08:00:00', 'Salida'),
('TM-2020-0000002', '0214450', 'Prestamo', 'Jose Carrizales', 24642010, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642010', 'ABAE', 'CIDE', 28, '2020-10-31 08:00:00', 'Salida'),
('TM-2020-0000003', '0214451', 'Prestamo', 'Jose Carrizales', 24642011, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642011', 'ABAE', 'CIDE', 29, '2020-11-01 08:00:00', 'Salida'),
('TM-2020-0000004', '0214452', 'Prestamo', 'Jose Carrizales', 24642012, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642012', 'ABAE', 'CIDE', 30, '2020-11-02 08:00:00', 'Salida'),
('TM-2020-0000005', '0214453', 'Prestamo', 'Jose Carrizales', 24642013, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642013', 'ABAE', 'CIDE', 31, '2020-11-03 08:00:00', 'Salida'),
('TM-2020-0000006', '0214454', 'Prestamo', 'Jose Carrizales', 24642014, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642014', 'ABAE', 'CIDE', 32, '2020-11-04 08:00:00', 'Salida'),
('TM-2020-0000007', '0214455', 'Prestamo', 'Jose Carrizales', 24642015, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642015', 'ABAE', 'CIDE', 33, '2020-11-05 08:00:00', 'Salida'),
('TM-2020-0000008', '0214456', 'Prestamo', 'Jose Carrizales', 24642016, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642016', 'ABAE', 'CIDE', 34, '2020-11-06 08:00:00', 'Salida'),
('TM-2020-0000009', '0214457', 'Prestamo', 'Jose Carrizales', 24642017, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642017', 'ABAE', 'CIDE', 35, '2020-11-07 08:00:00', 'Salida'),
('TM-2020-0000010', '0214458', 'Prestamo', 'Jose Carrizales', 24642018, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642018', 'ABAE', 'CIDE', 36, '2020-11-08 08:00:00', 'Salida'),
('TM-2020-0000011', '0214459', 'Prestamo', 'Jose Carrizales', 24642019, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642019', 'ABAE', 'CIDE', 37, '2020-11-09 08:00:00', 'Salida'),
('TM-2020-0000012', '0214460', 'Prestamo', 'Jose Carrizales', 24642020, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642020', 'ABAE', 'CIDE', 38, '2020-11-10 08:00:00', 'Salida'),
('TM-2020-0000013', '0214461', 'Prestamo', 'Jose Carrizales', 24642021, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642021', 'ABAE', 'CIDE', 39, '2020-11-11 08:00:00', 'Salida'),
('TM-2020-0000014', '0214462', 'Prestamo', 'Jose Carrizales', 24642022, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642022', 'ABAE', 'CIDE', 40, '2020-11-12 08:00:00', 'Salida'),
('TM-2020-0000015', '0214463', 'Prestamo', 'Jose Carrizales', 24642023, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642023', 'ABAE', 'CIDE', 41, '2020-11-13 08:00:00', 'Salida'),
('TM-2020-0000016', '0214464', 'Prestamo', 'Jose Carrizales', 24642024, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642024', 'ABAE', 'CIDE', 42, '2020-11-14 08:00:00', 'Salida'),
('TM-2020-0000017', '0214465', 'Prestamo', 'Jose Carrizales', 24642025, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642025', 'ABAE', 'CIDE', 43, '2020-11-15 08:00:00', 'Salida'),
('TM-2020-0000018', '0214466', 'Prestamo', 'Jose Carrizales', 24642026, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642026', 'ABAE', 'CIDE', 44, '2020-11-16 08:00:00', 'Salida'),
('TM-2020-0000019', '0214467', 'Prestamo', 'Jose Carrizales', 24642027, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642027', 'ABAE', 'CIDE', 45, '2020-11-17 08:00:00', 'Salida'),
('TM-2020-0000020', '0214468', 'Prestamo', 'Jose Carrizales', 24642028, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642028', 'ABAE', 'CIDE', 46, '2020-11-18 08:00:00', 'Salida'),
('TM-2020-0000021', '0214469', 'Prestamo', 'Jose Carrizales', 24642029, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642029', 'ABAE', 'CIDE', 47, '2020-11-19 08:00:00', 'Salida'),
('TM-2020-0000022', '0214470', 'Prestamo', 'Jose Carrizales', 24642030, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642030', 'ABAE', 'CIDE', 48, '2020-11-20 08:00:00', 'Salida'),
('TM-2020-0000023', '0214471', 'Prestamo', 'Jose Carrizales', 24642031, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642031', 'ABAE', 'CIDE', 49, '2020-11-21 08:00:00', 'Salida'),
('TM-2020-0000024', '0214472', 'Prestamo', 'Jose Carrizales', 24642032, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642032', 'ABAE', 'CIDE', 50, '2020-11-22 08:00:00', 'Salida'),
('TM-2020-0000025', '0214473', 'Prestamo', 'Jose Carrizales', 24642033, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642033', 'ABAE', 'CIDE', 51, '2020-11-23 08:00:00', 'Salida'),
('TM-2020-0000026', '0214474', 'Prestamo', 'Jose Carrizales', 24642034, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642034', 'ABAE', 'CIDE', 52, '2020-11-24 08:00:00', 'Salida'),
('TM-2020-0000027', '0214475', 'Prestamo', 'Jose Carrizales', 24642035, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642035', 'ABAE', 'CIDE', 53, '2020-11-25 08:00:00', 'Salida'),
('TM-2020-0000028', '0214476', 'Prestamo', 'Jose Carrizales', 24642036, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642036', 'ABAE', 'CIDE', 54, '2020-11-26 08:00:00', 'Salida'),
('TM-2020-0000029', '0214477', 'Prestamo', 'Jose Carrizales', 24642037, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642037', 'ABAE', 'CIDE', 55, '2020-11-27 08:00:00', 'Salida'),
('TM-2020-0000030', '0214478', 'Prestamo', 'Jose Carrizales', 24642038, 'ABAE', 'Sede Borburata (ABAE)', 0, '24642038', 'ABAE', 'CIDE', 56, '2020-11-28 08:00:00', 'Salida');

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
(18, 'Administrador', 'Administrador', 24642009, '1234', '', '', NULL, 'Super Admin', 'activo', '2019-12-05 10:53:22', '2021-04-27 04:40:36', 'SAT'),
(21, 'Trabajador', 'Trabajador', 0, '1234', 'carrizalesj5@gmai.com', '0414147005', NULL, 'Super Admin', 'activo', '2020-01-30 13:38:08', '2021-04-27 04:40:22', 'ETCS-Baemari'),
(22, 'Alfredo', 'acalderon', 214456544, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 03:01:41', '2021-06-15 03:01:41', 'CIDE'),
(23, 'Admin', 'admin', 12345, '1234', '', '', NULL, 'Super Admin', 'activo', '2021-06-15 03:02:14', '2021-11-09 21:54:48', 'CIDE'),
(24, 'adminluepa', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 03:04:36', '2021-06-15 03:04:36', 'ETCS-Luepa'),
(25, 'adminctsr', 'admin', 12345, '12345', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 03:05:01', '2021-06-15 03:05:01', 'CTSR'),
(26, 'adminsat', 'admin', 12345, '1234', 'fasdfa@safas', '2251511', NULL, 'Super Admin', 'activo', '2021-06-15 03:05:19', '2021-11-25 02:25:57', 'SAT'),
(27, 'adminbaemari', 'admin', 12345, '1234', 'dsdsdad@a', '5485415', NULL, 'Super Admin', 'activo', '2021-06-15 03:05:36', '2021-11-25 02:25:43', 'ETCS-Baemari');

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
  `condicion` varchar(300) DEFAULT NULL,
  `unidad` varchar(300) DEFAULT NULL,
  `ubicacion` varchar(300) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `pertenece` varchar(300) DEFAULT NULL,
  `cedula` varchar(15) DEFAULT NULL,
  `sede` varchar(300) DEFAULT NULL,
  `nmroCarroceria` varchar(300) DEFAULT NULL,
  `anio` varchar(10) DEFAULT NULL,
  `tipoCombustible` varchar(30) DEFAULT NULL,
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

INSERT INTO `vehiculos` (`codigo`, `placa`, `marca`, `tipo`, `modelo`, `color`, `condicion`, `unidad`, `ubicacion`, `responsable`, `pertenece`, `cedula`, `sede`, `nmroCarroceria`, `anio`, `tipoCombustible`, `created_user`, `created_date`, `updated_date`, `estado`, `updated_user`, `categoria`) VALUES
('214471', '515SAD1D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11616', 'CIDE', 'D5151', '2012', 'GASOLINA', 23, '2020-11-25 08:00:00', '2020-11-25 08:00:00', 'nochequeado', 23, 'Vehiculos'),
('214472', '515SAD2D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11617', 'CIDE', 'D5152', '2013', 'GASOLINA', 24, '2020-11-26 08:00:00', '2020-11-26 08:00:00', 'nochequeado', 24, 'Vehiculos'),
('214473', '515SAD3D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11618', 'CIDE', 'D5153', '2014', 'GASOLINA', 25, '2020-11-27 08:00:00', '2020-11-27 08:00:00', 'nochequeado', 25, 'Vehiculos'),
('214474', '515SAD4D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11619', 'CIDE', 'D5154', '2015', 'GASOLINA', 26, '2020-11-28 08:00:00', '2020-11-28 08:00:00', 'nochequeado', 26, 'Vehiculos'),
('214475', '515SAD5D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11620', 'CIDE', 'D5155', '2016', 'GASOLINA', 27, '2020-11-29 08:00:00', '2020-11-29 08:00:00', 'nochequeado', 27, 'Vehiculos'),
('214476', '515SAD6D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11621', 'CIDE', 'D5156', '2017', 'GASOLINA', 28, '2020-11-30 08:00:00', '2020-11-30 08:00:00', 'nochequeado', 28, 'Vehiculos'),
('214477', '515SAD7D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11622', 'CIDE', 'D5157', '2018', 'GASOLINA', 29, '2020-12-01 08:00:00', '2020-12-01 08:00:00', 'nochequeado', 29, 'Vehiculos'),
('214478', '515SAD8D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11623', 'CIDE', 'D5158', '2019', 'GASOLINA', 30, '2020-12-02 08:00:00', '2020-12-02 08:00:00', 'nochequeado', 30, 'Vehiculos'),
('214479', '515SAD9D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11624', 'CIDE', 'D5159', '2020', 'GASOLINA', 31, '2020-12-03 08:00:00', '2020-12-03 08:00:00', 'nochequeado', 31, 'Vehiculos'),
('214480', '515SAD10D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11625', 'CIDE', 'D5160', '2021', 'GASOLINA', 32, '2020-12-04 08:00:00', '2020-12-04 08:00:00', 'nochequeado', 32, 'Vehiculos'),
('214481', '515SAD11D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11626', 'CIDE', 'D5161', '2022', 'GASOLINA', 33, '2020-12-05 08:00:00', '2020-12-05 08:00:00', 'nochequeado', 33, 'Vehiculos'),
('214482', '515SAD12D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11627', 'CIDE', 'D5162', '2023', 'GASOLINA', 34, '2020-12-06 08:00:00', '2020-12-06 08:00:00', 'nochequeado', 34, 'Vehiculos'),
('214483', '515SAD13D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11628', 'CIDE', 'D5163', '2024', 'GASOLINA', 35, '2020-12-07 08:00:00', '2020-12-07 08:00:00', 'nochequeado', 35, 'Vehiculos'),
('214484', '515SAD14D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11629', 'CIDE', 'D5164', '2025', 'GASOLINA', 36, '2020-12-08 08:00:00', '2020-12-08 08:00:00', 'nochequeado', 36, 'Vehiculos'),
('214485', '515SAD15D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11630', 'CIDE', 'D5165', '2026', 'GASOLINA', 37, '2020-12-09 08:00:00', '2020-12-09 08:00:00', 'nochequeado', 37, 'Vehiculos'),
('214486', '515SAD16D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11631', 'CIDE', 'D5166', '2027', 'GASOLINA', 38, '2020-12-10 08:00:00', '2020-12-10 08:00:00', 'nochequeado', 38, 'Vehiculos'),
('214487', '515SAD17D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11632', 'CIDE', 'D5167', '2028', 'GASOLINA', 39, '2020-12-11 08:00:00', '2020-12-11 08:00:00', 'nochequeado', 39, 'Vehiculos'),
('214488', '515SAD18D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11633', 'CIDE', 'D5168', '2029', 'GASOLINA', 40, '2020-12-12 08:00:00', '2020-12-12 08:00:00', 'nochequeado', 40, 'Vehiculos'),
('214489', '515SAD19D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11634', 'CIDE', 'D5169', '2030', 'GASOLINA', 41, '2020-12-13 08:00:00', '2020-12-13 08:00:00', 'nochequeado', 41, 'Vehiculos');

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
-- Indices de la tabla `transaccion_equipos_biblioteca`
--
ALTER TABLE `transaccion_equipos_biblioteca`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_equipos_inmuebles`
--
ALTER TABLE `transaccion_equipos_inmuebles`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indices de la tabla `transaccion_equipos_vehiculos`
--
ALTER TABLE `transaccion_equipos_vehiculos`
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
