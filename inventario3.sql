-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2022 a las 20:57:12
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
('001282', '3513', '15', '15153', '15', '1531', 1531, '515', '5313', '5135', 'CIDE', '151', '31', '153153', 23, 0, NULL, NULL, 'nochequeado', 'Biblioteca'),
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
('admin', '12345', '23', 'Transaccion de Salida', '2022-01-23', '15:03:24'),
('', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:16'),
('', '12345', '23', 'Eliminacion de equipo', '2022-01-23', '15:03:23'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:52'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-23', '15:03:24'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:00'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-23', '15:03:34'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:43'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-23', '15:03:18'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:29'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-23', '15:03:03'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:14'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:06'),
('admin', '12345', '23', 'Eliminacion de equipo', '2022-01-23', '15:03:10'),
('admin', '12345', '23', 'Registro de equipo', '2022-01-23', '15:03:46');

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
  `codigo` varchar(10) NOT NULL,
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
('Comunicacion', '000002', '3153', '', '15', '131', 0, '', 'CIDE', '5153', '115', '153131', '3153', '1515', '11', '3153', 0, 0, '313', 0, '', 23, '2022-01-23 19:54:06', 0, '2022-01-23 19:54:06', NULL, '5153', NULL, ''),
('Mobiliario', '000003', '35135', '', '131', '31', 351351, '', 'CIDE', '51551', '135', '1351', '35135', '51', '135', '131', 0, 0, '135', 0, '', 23, '2022-01-23 19:55:46', 0, '2022-01-23 19:55:46', NULL, '15313135', NULL, '');

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
('TM-2022-000001', '5151', 'asds', '3453543', 5345, '35434', 'dada', 453343, '45343', 'CIDE', '3453', 23, '2022-01-23 17:53:06', 'Salida');

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
('TM-2022-0000001', '1263', 'sadfsd', '543354', 3453, '543', 'sfsdf', 35435, '543543', 'CIDE', '543453', 23, '2022-01-23 18:13:31', 'Salida');

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
('TM-2022-0000001', '10001', '103103', '135135', 135, '153153', '153153151', 51, '1', 'CIDE', '13', 23, '2022-01-23 18:14:53', 'Entrada');

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
('TM-2022-0000001', '214471', '54345', '45345', 3453, '453453', '34534', 53453, '453543', 'CIDE', '453453', 23, '2022-01-23 19:01:24', 'Salida');

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
(18, 'Administrador', 'Administrador', 24642009, '1234', '', '', NULL, 'Super Admin', 'activo', '2019-12-05 14:53:22', '2021-04-27 08:40:36', 'SAT'),
(21, 'Trabajador', 'Trabajador', 0, '1234', 'carrizalesj5@gmai.com', '0414147005', NULL, 'Super Admin', 'activo', '2020-01-30 17:38:08', '2021-04-27 08:40:22', 'ETCS-Baemari'),
(22, 'Alfredo', 'acalderon', 214456544, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 07:01:41', '2021-06-15 07:01:41', 'CIDE'),
(23, 'Admin', 'admin', 12345, '1234', '', '', NULL, 'Super Admin', 'activo', '2021-06-15 07:02:14', '2021-11-10 01:54:48', 'CIDE'),
(24, 'adminluepa', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 07:04:36', '2021-06-15 07:04:36', 'ETCS-Luepa'),
(25, 'adminctsr', 'admin', 12345, '12345', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 07:05:01', '2021-06-15 07:05:01', 'CTSR'),
(26, 'adminsat', 'admin', 12345, '1234', 'fasdfa@safas', '2251511', NULL, 'Super Admin', 'activo', '2021-06-15 07:05:19', '2021-11-25 06:25:57', 'SAT'),
(27, 'adminbaemari', 'admin', 0, '1234', 'dsdsdad@a', '5485415', 'DIIE_LOGO-ABAE.png', 'Super Admin', 'activo', '2021-06-15 07:05:36', '2022-01-15 19:01:58', 'ETCS-Baemari');

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
('214471', '515SAD1D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11616', 'CIDE', 'D5151', '2012', 'GASOLINA', 23, '2020-11-25 12:00:00', '2020-11-25 12:00:00', 'nochequeado', 23, 'Vehiculos'),
('214472', '515SAD2D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11617', 'CIDE', 'D5152', '2013', 'GASOLINA', 24, '2020-11-26 12:00:00', '2020-11-26 12:00:00', 'nochequeado', 24, 'Vehiculos'),
('214473', '515SAD3D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11618', 'CIDE', 'D5153', '2014', 'GASOLINA', 25, '2020-11-27 12:00:00', '2020-11-27 12:00:00', 'nochequeado', 25, 'Vehiculos'),
('214474', '515SAD4D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11619', 'CIDE', 'D5154', '2015', 'GASOLINA', 26, '2020-11-28 12:00:00', '2020-11-28 12:00:00', 'nochequeado', 26, 'Vehiculos'),
('214475', '515SAD5D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11620', 'CIDE', 'D5155', '2016', 'GASOLINA', 27, '2020-11-29 12:00:00', '2020-11-29 12:00:00', 'nochequeado', 27, 'Vehiculos'),
('214476', '515SAD6D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11621', 'CIDE', 'D5156', '2017', 'GASOLINA', 28, '2020-11-30 12:00:00', '2020-11-30 12:00:00', 'nochequeado', 28, 'Vehiculos'),
('214477', '515SAD7D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11622', 'CIDE', 'D5157', '2018', 'GASOLINA', 29, '2020-12-01 12:00:00', '2020-12-01 12:00:00', 'nochequeado', 29, 'Vehiculos'),
('214478', '515SAD8D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11623', 'CIDE', 'D5158', '2019', 'GASOLINA', 30, '2020-12-02 12:00:00', '2020-12-02 12:00:00', 'nochequeado', 30, 'Vehiculos'),
('214479', '515SAD9D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11624', 'CIDE', 'D5159', '2020', 'GASOLINA', 31, '2020-12-03 12:00:00', '2020-12-03 12:00:00', 'nochequeado', 31, 'Vehiculos'),
('214480', '515SAD10D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11625', 'CIDE', 'D5160', '2021', 'GASOLINA', 32, '2020-12-04 12:00:00', '2020-12-04 12:00:00', 'nochequeado', 32, 'Vehiculos'),
('214481', '515SAD11D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11626', 'CIDE', 'D5161', '2022', 'GASOLINA', 33, '2020-12-05 12:00:00', '2020-12-05 12:00:00', 'nochequeado', 33, 'Vehiculos'),
('214482', '515SAD12D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11627', 'CIDE', 'D5162', '2023', 'GASOLINA', 34, '2020-12-06 12:00:00', '2020-12-06 12:00:00', 'nochequeado', 34, 'Vehiculos'),
('214483', '515SAD13D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11628', 'CIDE', 'D5163', '2024', 'GASOLINA', 35, '2020-12-07 12:00:00', '2020-12-07 12:00:00', 'nochequeado', 35, 'Vehiculos'),
('214484', '515SAD14D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11629', 'CIDE', 'D5164', '2025', 'GASOLINA', 36, '2020-12-08 12:00:00', '2020-12-08 12:00:00', 'nochequeado', 36, 'Vehiculos'),
('214485', '515SAD15D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11630', 'CIDE', 'D5165', '2026', 'GASOLINA', 37, '2020-12-09 12:00:00', '2020-12-09 12:00:00', 'nochequeado', 37, 'Vehiculos'),
('214486', '515SAD16D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11631', 'CIDE', 'D5166', '2027', 'GASOLINA', 38, '2020-12-10 12:00:00', '2020-12-10 12:00:00', 'nochequeado', 38, 'Vehiculos'),
('214487', '515SAD17D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11632', 'CIDE', 'D5167', '2028', 'GASOLINA', 39, '2020-12-11 12:00:00', '2020-12-11 12:00:00', 'nochequeado', 39, 'Vehiculos'),
('214488', '515SAD18D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11633', 'CIDE', 'D5168', '2029', 'GASOLINA', 40, '2020-12-12 12:00:00', '2020-12-12 12:00:00', 'nochequeado', 40, 'Vehiculos'),
('214489', '515SAD19D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11634', 'CIDE', 'D5169', '2030', 'GASOLINA', 41, '2020-12-13 12:00:00', '2020-12-13 12:00:00', 'nochequeado', 41, 'Vehiculos');

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
