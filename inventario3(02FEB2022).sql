-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2022 a las 20:51:26
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
  `bienesN` varchar(20) DEFAULT NULL,
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
('000005', '262626', 'LIBRO', 'FESTIN DE CUERVOS', 'R.R. MARTIN', 'N/A', 1, '5158', 'JOSE CARRIZALES', '24642009', 'CIDE', 'NEGRO', 'EN USO', 'BORBURATA', 23, 23, '2022-01-29 17:01:59', NULL, 'nochequeado', 'Biblioteca'),
('000006', '52551', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R.R. MARTIN', 'N/A', 1, '5626', 'JOSE CARRIZALES', '24642009', 'CIDE', 'AMARILLO', 'EN USO', 'BORBURATA', 23, 23, '2022-01-29 17:13:28', NULL, 'nochequeado', 'Biblioteca');

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
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`nombre`, `cedula`, `permiso`, `accion`, `fecha`, `hora`) VALUES
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-24 01:44:46', '21:09:46'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 01:45:39', '21:09:39'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-31 01:46:35', '21:09:35'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 01:56:17', '21:09:17'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 02:09:46', '22:10:46'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 02:09:48', '22:10:48'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 02:09:51', '22:10:51'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 02:09:57', '22:10:57'),
('Jose Carrizales', '24642009', '23', 'Transaccion de Entrada', '2022-01-30 13:41:52', '09:09:52'),
('Jose Carrizales', '24642009', '23', 'Transaccion de Salida', '2022-01-30 13:50:23', '09:09:23'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 13:51:47', '09:09:47'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 13:54:14', '09:09:14'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 13:55:51', '09:09:51'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 13:57:16', '09:09:16'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 13:57:56', '09:09:56'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 13:58:56', '09:09:56'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:06:32', '10:10:32'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:07:06', '10:10:06'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:07:57', '10:10:57'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 14:08:05', '10:10:05'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:08:55', '10:10:55'),
('', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:11:01', '10:10:01'),
('', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:11:19', '10:10:19'),
('', '24642009', '23', 'Modificacion de equipo', '2022-01-30 14:13:05', '10:10:05'),
('', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 14:13:34', '10:10:34');

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
('10019', 'CASA ABAE', '50', '', 4, 'EN USO', 'nochequeado', 'Inmuebles', '1', 'ELIEZER', '52169', 'BORBURATA', 1, 'CIDE', '41', '23', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
('Electrodomesticos', '0000007', '256G1G55A', '', 'MABE', '514A5A', 0, '', 'CIDE', 'ABAE', '515151462', '2651', 'NEGRO', 'CAFETERA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-24 14:54:46', 23, '2022-01-24 14:54:46', NULL, 'JOSE CARRIZALES', NULL, ''),
('', '0000008', 'dasdas', '', 'dasdasd', 'sadsa', 0, '', 'CIDE', 'ABAE', '11651', 'dasdas', 'dsadsad', 'sda', 'sadsd', 'asdsad', 0, 0, 'sadsad', 0, '', 23, '2022-01-24 15:05:09', 0, '2022-01-24 15:05:09', NULL, 'sadsad', NULL, ''),
('Comunicacion', '000002', '14F1A44AA', '', 'VIT', '4A151AA', 0, '', 'CIDE', 'ABAE', '24642009', '153131', 'NEGRO', 'Teclado', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-23 19:54:06', 0, '2022-01-23 19:54:06', NULL, 'Jose Carrizales', NULL, ''),
('Mobiliario', '000003', 'N/A', '', 'N/A', 'PEQUEÃ‘O', 1, '', 'CIDE', 'ABAE', '24642009', '02525', 'MARRON', 'ESCRITORIO', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-23 19:55:46', 23, '2022-01-23 19:55:46', NULL, 'Jose Carrizales', NULL, ''),
('Electronicos', '000005', '541D6A', '', 'ARDUINO', 'NANO', 1, '', 'CIDE', 'ABAE', '246420009', '6416', 'AZUL', 'ARDUINO NANO', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-23 23:38:05', 23, '2022-01-23 23:38:05', NULL, 'JOSE CARRIZALES', NULL, ''),
('Seguridad', '000006', '64G5A4A', '', 'MICROSOFT', '45AA', 0, '', 'CIDE', 'ABAE', '24642009', '5246', 'NEGRO', 'CAMARA DE SEGURIDAD', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-23 23:38:32', 23, '2022-01-23 23:38:32', NULL, 'JOSE CARRIZALES', NULL, ''),
('Mobiliario', '000007', 'A4545F45A2', '', 'DELL', 'SILLA OFICINA TIPO 1', 1, '', 'CIDE', 'ABAE', '24642009', '22541', 'AZUL', 'SILLA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-24 14:56:18', 23, '2022-01-24 14:56:18', NULL, 'Jose Carrizales', NULL, ''),
('Electrodomesticos', '000009', '21F165A1', '', 'OSTER', '514A21', 0, '', 'CIDE', 'ABAE', '24642009', '25544', 'BLANCO', 'CAFETERA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-29 16:24:33', 23, '2022-01-29 16:24:33', NULL, 'JOSE CARRIZALES', NULL, ''),
('Seguridad', '000011', '364S5A1D56', '', 'ZTE', '54A514D', 0, '', 'CIDE', 'ABAE', '24642009', '4777', 'NEGRO', 'CAMARA DE SEGURIDAD', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-29 16:25:04', 23, '2022-01-29 16:25:04', NULL, 'JOSE CARRIZALES', NULL, ''),
('Comunicacion', '000012', '55A4112S', '', 'Inspur', '2ASDD', 0, '', 'CIDE', 'ABAE', '24642009', '25000', 'NEGRO', 'Mouse', 'EN USO', 'Borburata', 0, 0, 'UDLP', 0, '', 23, '2022-01-30 01:31:26', 0, '2022-01-30 01:31:26', NULL, 'Jose Carrizales', NULL, ''),
('Electronicos', '000013', '012502320JHGD', '', 'ARDUINO', 'UNO', 1, '', 'CIDE', 'ABAE', '24642009', '51AA', 'AZUL', 'ARDUINO UNO', 'SIN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-30 01:56:17', 0, '2022-01-30 01:56:17', NULL, 'Jose Carrizales', NULL, ''),
('Comunicacion', '000014', '151GG15SA1', '', 'MSI', 'NVIDIA GT730', 0, '', 'CIDE', 'ABA', '246420009', '25541', 'BLANCO', 'GPU GT730', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-30 13:51:47', 0, '2022-01-30 13:51:47', NULL, 'JOSE CARRIZALES', NULL, ''),
('Comunicacion', '000015', '45KL6T6', '', 'GENIUS', '25A51', 0, '', 'CIDE', 'ABAE', '24642009', '56521', 'NEGRO', 'Teclado', 'EN USO', 'BORBURATA', 0, 0, 'UDPL', 0, '', 23, '2022-01-30 13:54:14', 0, '2022-01-30 13:54:14', NULL, 'JOSE CARRIZALES', NULL, ''),
('Mobiliario', '000016', '63MNSJK', '', 'DELL', '255A136A', 1, '', 'CIDE', 'ABAE', '24642009', '5144', 'NEGRO', 'SILLA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, '', 23, '2022-01-30 13:55:51', 0, '2022-01-30 13:55:51', NULL, 'JOSE CARRIZALES', NULL, '');

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
('TM-2022-000001', '0000007', 'sa', 'fyu', 2044, 'ABAE', 'dSDFad', 4543, 'fyu', 'yfyf', 'CIDE', 23, '2022-01-27 01:05:24', 'Entrada'),
('TM-2022-000002', '000010', 'vsdfgdfg', '25460', 405404, '45045045', 'gfdgds', 852472, 'ABAE', 'CIDE', '0450450', 23, '2022-01-29 16:44:33', 'Salida'),
('TM-2022-000003', '0000007', 'asfsff', 'fsdsdfsd', 66, 'dsf', 'sdfsdaf', 511531, 'ABAE', 'CIDE', 'dfsf', 23, '2022-01-30 18:13:13', 'Salida'),
('TM-2022-000004', '000012', 'PRESTAMO', 'JUAN RUIZ', 26545854, 'ABAE', 'JOSE CARRIZALES', 24642009, 'ABAE', 'CIDE', 'CIDE', 23, '2022-01-30 13:50:23', 'Salida');

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
('TM-2022-000001', '000004', 'dfsadf', 'fdafsd', 55254, '542', 'dsfsdf', 5156, 'ABAE', 'CIDE', '54542', 23, '2022-01-29 17:16:46', 'Salida'),
('TM-2022-000002', '000006', 'asdds', 'dsffs', 66262, 'dfsfdf', 'dfdsfsda', 515611, 'ABAE', 'CIDE', 'fdfsd', 23, '2022-01-30 18:22:25', 'Salida');

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
('TM-2022-000001', '10001', 'dsaf', 'vvguyy', 0, 'hjfjh', 'sdfsdaf', 654165, 'ABAE', 'CIDE', 'vvtvtyvty', 23, '2022-01-29 17:11:41', 'Salida'),
('TM-2022-000002', '10001', 'dsaf', 'vvguyy', 0, 'hjfjh', 'sdfsdaf', 654165, 'ABAE', 'CIDE', 'vvtvtyvty', 23, '2022-01-30 17:11:41', 'Salida');

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
('TM-2022-000001', '214471', 'sf', 'fcsadf', 552832, 'sdafsadf', 'sdafdsf', 2873284, 'ABAE', 'CIDE', 'sdfsaf', 23, '2022-01-29 17:10:44', 'Salida'),
('TM-2022-000002', '214471', 'sf', 'fcsadf', 552832, 'sdafsadf', 'sdafdsf', 2873284, 'ABAE', 'CIDE', 'sdfsaf', 23, '2022-01-30 17:10:44', 'Salida'),
('TM-2022-000003', '214475', 'ENTREGA', 'KARLA MIERES', 155225411, 'ABAE', 'GUSTAVO GUEDEZ', 125544565, 'ABAE', 'CIDE', 'CIDE', 23, '2022-01-30 13:41:52', 'Entrada');

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
(23, 'admin', 'Jose Carrizales', 24642009, '1234', 'carrizalesj5@gmail.com', '04144001564', 'PhotoRoom-20220104_134307.jpg', 'Super Admin', 'activo', '2021-06-15 07:02:14', '2022-01-30 01:37:06', 'CIDE'),
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
('214489', '515SAD19D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11634', 'CIDE', '', '2030', '', 41, '2020-12-13 12:00:00', '2020-12-13 12:00:00', 'nochequeado', 23, 'Vehiculos');

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
