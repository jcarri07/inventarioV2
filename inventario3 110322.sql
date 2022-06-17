-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 04:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventario3`
--

-- --------------------------------------------------------

--
-- Table structure for table `biblioteca`
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
  `estado` enum('chequeado','nochequeado') DEFAULT 'chequeado',
  `categoria` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biblioteca`
--

INSERT INTO `biblioteca` (`codigo`, `isbn`, `tipo`, `titulo`, `autor`, `editorial`, `cantidad`, `bienesN`, `responsable`, `cedula`, `sede`, `color`, `condicion`, `ubicacion`, `created_user`, `updated_user`, `created_date`, `updated_date`, `estado`, `categoria`) VALUES
('000005', '262626', 'LIBRO', 'FESTIN DE CUERVOS', 'R.R. MARTIN', 'N/A', 1, '5158', 'JOSE CARRIZALES', '24642009', 'CIDE', 'NEGRO', 'EN USO', 'BORBURATA', 23, 23, '2022-01-29 21:01:59', NULL, 'nochequeado', 'Biblioteca'),
('000006', '52551', 'LIBRO', 'CANCION DE FUEGO Y HIELO', 'R.R. MARTIN', 'N/A', 1, '5626', 'JOSE CARRIZALES', '24642009', 'CIDE', 'AMARILLO', 'EN USO', 'BORBURATA', 23, 23, '2022-01-29 21:13:28', NULL, 'nochequeado', 'Biblioteca'),
('000007', 'LIBRO', 'LIBRO', 'LIBRO', 'LIBRO', 'LIBRO', 55, 'LIBRO', 'LIBRO', '55', 'CIDE', 'LIBRO', 'LIBRO', 'LIBRO', 23, NULL, '2022-02-02 21:35:15', NULL, 'nochequeado', 'Biblioteca'),
('000008', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 4, 'NUEVO', 'NUEVO', '757468', 'CIDE', 'NUEVO', 'NUEVO', 'NUEVO', 23, NULL, '2022-02-02 21:40:05', NULL, 'nochequeado', 'Biblioteca'),
('000009', 'TEXTO', 'TEXTO', 'TEXTO', 'TEXTO', 'TEXTO', 2, 'TEXTO', 'TEXTO', '2', 'CIDE', 'TEXTO', 'TEXTO', 'TEXTO', 23, NULL, '2022-02-03 00:38:45', NULL, 'nochequeado', 'Biblioteca'),
('000010', 'LIBRO', 'LIBRO', 'LIBRO', 'LIBRO', 'LIBRO', 6, 'LIBRO', 'LIBRO', '563747', 'CIDE', 'LIBRO', 'LIBRO', 'LIBRO', 23, NULL, '2022-03-09 18:26:50', NULL, 'chequeado', 'Biblioteca');

-- --------------------------------------------------------

--
-- Table structure for table `componentes`
--

CREATE TABLE `componentes` (
  `codigo` int(30) DEFAULT NULL,
  `componente` varchar(100) DEFAULT 'N/A',
  `clase` varchar(100) DEFAULT 'N/A',
  `capacidad` varchar(100) DEFAULT 'N/A',
  `marca` varchar(100) DEFAULT 'N/A',
  `modelo` varchar(100) DEFAULT 'N/A',
  `serial` varchar(100) DEFAULT 'N/A',
  `condicion` varchar(100) DEFAULT 'N/A',
  `voltaje` varchar(30) DEFAULT 'N/A',
  `certificacion` varchar(30) DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `componentes`
--

INSERT INTO `componentes` (`codigo`, `componente`, `clase`, `capacidad`, `marca`, `modelo`, `serial`, `condicion`, `voltaje`, `certificacion`) VALUES
(5174, 'disco1', '', '88888', '', '', '', '', '0', ''),
(5174, 'disco2', '', '', '', '', '', '', '0', ''),
(5174, 'fuente de poder', NULL, NULL, '', '', '', '', '0', ''),
(5174, 'tarjeta de video', '', '', '888', '', '', '', '0', ''),
(5174, 'memoria ram1', '', '', '888', '', '', '', '0', ''),
(5174, 'memoria ram2', '', '', '88888', '', '', '', '0', ''),
(20, 'disco1', 'fhdf', '', '', '', '', '', '0', ''),
(20, 'disco2', '', 'thfdhtfh', '', '', '', '', '0', ''),
(20, 'fuente de poder', NULL, NULL, '', '', '', '', '0', 'frthyftg'),
(20, 'tarjeta de video', '', '', 'hfhfgh', '', '', '', '0', ''),
(20, 'memoria ram1', '', '', '', 'fghfhgf', '', '', '0', ''),
(20, 'memoria ram2', '', '', '', 'ghfghfgh', 'fghfgh', 'fghfgh', '0', ''),
(21, 'disco1', 'HDD', '1TR', 'Wester Digital', 'WD5000AAKX', 'WCC2EUS44677', 'EN USO', '0', ''),
(21, 'disco2', 'HDD', '1TR', 'Wester Digital', 'WD5000AAKX', 'WCC2EUS44888', 'EN USO', '0', ''),
(21, 'fuente de poder', NULL, NULL, 'HOPLY', 'BDX-2539', 'PSCA09P10022A', 'EN USO', '500', 'N/A'),
(21, 'tarjeta de video', '1GB', '1GB', 'NVIDIA', 'QADRO K600', 'VIDC10050021A', 'EN USO', '0', ''),
(21, 'memoria ram1', 'DDR3', '4GB', 'SCS EMICON', 'MEMORIA', 'MEDC10050517A', 'EN USO', '0', ''),
(21, 'memoria ram2', 'DDR3', '4GB', 'SCS EMICON', 'MEMORIA', 'MEDC10050518A', 'EN USO', '0', ''),
(22, 'disco1', 'HDD', '1TB', 'SEAGATE', '7438k', '52378578786', 'En uso', 'N/A', 'N/A'),
(22, 'disco2', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(22, 'fuente de poder', 'N/A', 'N/A', 'HOPLY', 'BDX-2539', '678689696', 'En uso', '500W', ''),
(22, 'tarjeta de video', 'DDR3', '2GB', 'MSi', 'GT 730', '602-V809-779SD2008007080', 'En uso', 'N/A', 'N/A'),
(22, 'memoria ram1', 'DDR3', '8GB', 'Mushkin', 'MEMORIA', '099202800123', 'En uso', 'N/A', 'N/A'),
(22, 'memoria ram2', 'DDR3', '8GB', 'Mushkin', 'MEMORIA', '099202800123', 'En uso', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `history`
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
-- Dumping data for table `history`
--

INSERT INTO `history` (`nombre`, `cedula`, `permiso`, `accion`, `fecha`, `hora`) VALUES
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-24 05:44:46', '21:09:46'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 05:45:39', '21:09:39'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-31 05:46:35', '21:09:35'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 05:56:17', '21:09:17'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 06:09:46', '22:10:46'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 06:09:48', '22:10:48'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 06:09:51', '22:10:51'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 06:09:57', '22:10:57'),
('Jose Carrizales', '24642009', '23', 'Transaccion de Entrada', '2022-01-30 17:41:52', '09:09:52'),
('Jose Carrizales', '24642009', '23', 'Transaccion de Salida', '2022-01-30 17:50:23', '09:09:23'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 17:51:47', '09:09:47'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 17:54:14', '09:09:14'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-01-30 17:55:51', '09:09:51'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 17:57:16', '09:09:16'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 17:57:56', '09:09:56'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 17:58:56', '09:09:56'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:06:32', '10:10:32'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:07:06', '10:10:06'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:07:57', '10:10:57'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 18:08:05', '10:10:05'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:08:55', '10:10:55'),
('', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:11:01', '10:10:01'),
('', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:11:19', '10:10:19'),
('', '24642009', '23', 'Modificacion de equipo', '2022-01-30 18:13:05', '10:10:05'),
('', '24642009', '23', 'Eliminacion de equipo', '2022-01-30 18:13:34', '10:10:34'),
('admin', '12345', '23', 'Registro de equipo', '2022-02-02 21:35:15', '17:05:15'),
('admin', '12345', '23', 'Registro de equipo', '2022-02-02 21:38:41', '17:05:41'),
('admin', '12345', '23', 'Registro de equipo', '2022-02-02 21:40:05', '17:05:05'),
('admin', '12345', '23', 'Registro de equipo', '2022-02-02 21:42:11', '17:05:11'),
('', '12345', '23', 'Registro de equipo', '2022-02-02 21:42:32', '17:05:32'),
('admin', '12345', '23', 'Registro de equipo', '2022-02-02 21:44:34', '17:05:34'),
('admin', '12345', '23', 'Registro de equipo', '2022-02-02 21:47:14', '17:05:14'),
('Jose Carrizales', '24642009', '23', 'Exportacion Modulo Maquinaria', '2022-02-02 23:51:36', '19:07:36'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-02-03 00:38:45', '20:08:45'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-02-03 00:39:14', '20:08:14'),
('', '24642009', '23', 'Registro de equipo', '2022-02-03 00:40:25', '20:08:25'),
('', '24642009', '23', 'Registro de equipo', '2022-02-03 00:46:23', '20:08:23'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-02-03 00:46:46', '20:08:46'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-02-03 00:46:50', '20:08:50'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-02-03 00:47:16', '20:08:16'),
('Jose Carrizales', '24642009', '23', 'Eliminacion de equipo', '2022-02-03 00:47:21', '20:08:21'),
('', '24642009', '23', 'Registro de equipo', '2022-02-03 00:47:45', '20:08:45'),
('', '24642009', '23', 'Registro de equipo', '2022-02-03 00:48:54', '20:08:54'),
('', '24642009', '23', 'Registro de equipo', '2022-02-03 00:49:57', '20:08:57'),
('Jose Carrizales', '24642009', '23', 'Registro de equipo', '2022-02-03 01:16:41', '21:09:41'),
('Jose Carrizales', '24642009', '23', 'Modificacion de equipo', '2022-02-03 01:16:54', '21:09:54'),
('Jose Carrizales', '24642009', '23', 'Registro de Equipo', '2022-03-08 15:33:44', '11:11:44'),
('Jose Carrizales', '24642009', '23', 'Modificacion de Equipo', '2022-03-08 15:35:58', '11:11:58'),
('Jose Carrizales', '24642009', '23', 'Modificacion de componentes internos', '2022-03-08 15:43:21', '11:11:21'),
('Jose Carrizales', '24642009', '23', 'Modificacion de componentes internos', '2022-03-08 15:46:31', '11:11:31'),
('Jose Carrizales', '24642009', '23', 'Registro de Equipo', '2022-03-08 15:49:01', '11:11:01'),
('Jose Carrizales', '24642009', '23', 'Registro de componentes internos', '2022-03-08 15:54:05', '11:11:05'),
('Jose Carrizales', '24642009', '23', 'Modificacion de componentes internos', '2022-03-08 15:55:55', '11:11:55'),
('Jose Carrizales', '24642009', '23', 'Registro de Biblioteca', '2022-03-09 18:26:50', '14:02:50'),
('Jose Carrizales', '24642009', '23', 'Registro de Vehiculo', '2022-03-09 18:27:16', '14:02:16'),
('Jose Carrizales', '24642009', '23', 'Registro de Inmueble', '2022-03-09 18:27:43', '14:02:43'),
('Jose Carrizales', '24642009', '23', 'Modificacion de Equipo', '2022-03-09 22:48:33', '18:06:33'),
('Jose Carrizales', '24642009', '23', 'Registro de Equipo', '2022-03-11 15:27:27', '11:11:27'),
('Jose Carrizales', '24642009', '23', 'Registro de Equipo', '2022-03-11 15:28:01', '11:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `inmuebles`
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
-- Dumping data for table `inmuebles`
--

INSERT INTO `inmuebles` (`codigo`, `descripcion`, `metrosCuadrados`, `tipo`, `nmroCuartos`, `condicion`, `estado`, `categoria`, `pisos`, `responsable`, `cedula`, `direccion`, `habitantes`, `sede`, `created_user`, `updated_user`, `created_date`, `update_date`) VALUES
('000001', 'CASA', '1', ' ', 3, 'CASA', 'nochequeado', 'inmuebles', '2', 'CASA', '5', 'CASA', 4, 'CIDE', '23', NULL, '2022-02-03 00:40:25', NULL),
('000002', 'CASA2', '22', ' ', 22, 'CASA2', 'nochequeado', 'inmuebles', '22', 'CASA2', '22', 'CASA2', 22, 'CIDE', '23', NULL, '2022-02-03 00:46:23', NULL),
('000003', 'HOUSE', '45', ' ', 45, 'HOUSE', 'nochequeado', 'inmuebles', '45', 'HOUSE', '42', '45', 45, 'CIDE', '23', NULL, '2022-02-03 00:47:45', NULL),
('000004', 'HOUSE', '1111', ' ', 1111, 'HOUSE', 'nochequeado', 'inmuebles', '1111', 'HOUSE', '1111', 'HOUSE', 111, 'CIDE', '23', NULL, '2022-02-03 00:48:54', NULL),
('000005', 'HOUSE', '56456456', ' ', 4564564, 'HOUSE', 'chequeado', 'inmuebles', '5664', 'HOUSE', '422', 'HOUSE', 545456, 'CIDE', '23', NULL, '2022-02-03 00:49:57', NULL),
('000006', 'CASA', '75785', ' ', 8767, 'CASA', 'chequeado', 'inmuebles', '2', 'CASA', '78', 'CASA', 7676, 'CIDE', '23', NULL, '2022-03-09 18:27:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
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
  `estado` enum('chequeado','nochequeado') NOT NULL DEFAULT 'chequeado',
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user` int(3) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(300) DEFAULT NULL,
  `responsable` varchar(300) DEFAULT NULL,
  `uso` varchar(20) DEFAULT NULL,
  `detalles` varchar(300) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventario`
--

INSERT INTO `inventario` (`categoria`, `codigo`, `serial`, `nombre`, `marca`, `modelo`, `cantidad`, `clasificacion`, `sede`, `pertenece`, `cedula`, `bienesN`, `color`, `descripcion`, `condicion`, `ubicacion`, `precio_compra`, `precio_venta`, `unidad`, `stock`, `estado`, `created_user`, `created_date`, `updated_user`, `updated_date`, `tipo`, `responsable`, `uso`, `detalles`, `foto`) VALUES
('Maquinaria', '0000007', '256G1G55A', '', 'MABE', '514A5A', 0, '', 'CIDE', 'ABAE', '515151462', '2651', 'NEGRO', 'CAFETERA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-24 18:54:46', 23, '2022-01-24 18:54:46', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('', '0000008', 'dasdas', '', 'dasdasd', 'sadsa', 0, '', 'CIDE', 'ABAE', '11651', 'dasdas', 'dsadsad', 'sda', 'sadsd', 'asdsad', 0, 0, 'sadsad', 0, '', 23, '2022-01-24 19:05:09', 0, '2022-01-24 19:05:09', NULL, 'sadsad', NULL, '', NULL),
('Comunicaciones', '000002', '14F1A44AA', '', 'VIT', '4A151AA', 0, '', 'CIDE', 'ABAE', '24642009', '153131', 'NEGRO', 'Teclado', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-23 23:54:06', 0, '2022-01-23 23:54:06', NULL, 'Jose Carrizales', NULL, '', NULL),
('Oficina', '000003', 'N/A', '', 'N/A', 'PEQUEÃ‘O', 1, '', 'CIDE', 'ABAE', '24642009', '02525', 'MARRON', 'ESCRITORIO', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-23 23:55:46', 23, '2022-01-23 23:55:46', NULL, 'Jose Carrizales', NULL, '', NULL),
('Cientificos', '000005', '541D6A', '', 'ARDUINO', 'NANO', 1, '', 'CIDE', 'ABAE', '246420009', '6416', 'AZUL', 'ARDUINO NANO', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-24 03:38:05', 23, '2022-01-24 03:38:05', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Medicos', '000006', '64G5A4A', '', 'MICROSOFT', '45AA', 0, '', 'CIDE', 'ABAE', '24642009', '5246', 'NEGRO', 'CAMARA DE Medicos', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-24 03:38:32', 23, '2022-01-24 03:38:32', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Oficina', '000007', 'A4545F45A2', '', 'DELL', 'SILLA OFICINA TIPO 1', 1, '', 'CIDE', 'ABAE', '24642009', '22541', 'AZUL', 'SILLA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-24 18:56:18', 23, '2022-01-24 18:56:18', NULL, 'Jose Carrizales', NULL, '', NULL),
('Maquinaria', '000009', '21F165A1', '', 'OSTER', '514A21', 0, '', 'CIDE', 'ABAE', '24642009', '25544', 'BLANCO', 'CAFETERA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-29 20:24:33', 23, '2022-01-29 20:24:33', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Medicos', '000011', '364S5A1D56', '', 'ZTE', '54A514D', 0, '', 'CIDE', 'ABAE', '24642009', '4777', 'NEGRO', 'CAMARA DE Medicos', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-29 20:25:04', 23, '2022-01-29 20:25:04', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Comunicaciones', '000012', '55A4112S', '', 'Inspur', '2ASDD', 0, '', 'CIDE', 'ABAE', '24642009', '25000', 'NEGRO', 'Mouse', 'EN USO', 'Borburata', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-30 05:31:26', 0, '2022-01-30 05:31:26', NULL, 'Jose Carrizales', NULL, '', NULL),
('Cientificos', '000013', '012502320JHGD', '', 'ARDUINO', 'UNO', 1, '', 'CIDE', 'ABAE', '24642009', '51AA', 'AZUL', 'ARDUINO UNO', 'SIN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-30 05:56:17', 0, '2022-01-30 05:56:17', NULL, 'Jose Carrizales', NULL, '', NULL),
('Comunicaciones', '000014', '151GG15SA1', '', 'MSI', 'NVIDIA GT730', 0, '', 'CIDE', 'ABA', '246420009', '25541', 'BLANCO', 'GPU GT730', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2022-01-30 17:51:47', 0, '2022-01-30 17:51:47', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Comunicaciones', '000015', '45KL6T6', '', 'GENIUS', '25A51', 0, '', 'CIDE', 'ABAE', '24642009', '56521', 'NEGRO', 'Teclado', 'EN USO', 'BORBURATA', 0, 0, 'UDPL', 0, 'chequeado', 23, '2022-01-30 17:54:14', 0, '2022-01-30 17:54:14', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Oficina', '000016', '63MNSJK', '', 'DELL', '255A136A', 1, '', 'CIDE', 'ABAE', '24642009', '5144', 'NEGRO', 'SILLA', 'EN USO', 'BORBURATA', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-01-30 17:55:51', 0, '2022-01-30 17:55:51', NULL, 'JOSE CARRIZALES', NULL, '', NULL),
('Comunicaciones', '000017', 'NUEVO', '', 'NUEVO', 'NUEVO', 0, '', 'CIDE', 'ABAE', '3356', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 0, 0, 'NUEVO', 0, 'chequeado', 23, '2022-02-02 21:38:41', 0, '2022-02-02 21:38:41', NULL, 'NUEVO', NULL, '', NULL),
('Cientificos', '000018', 'NUEVO', '', 'NUEVO', 'NUEVO', 1, '', 'CIDE', 'NUEVO', '54', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 0, 0, 'NUEVO', 0, 'chequeado', 23, '2022-02-02 21:44:34', 0, '2022-02-02 21:44:34', NULL, 'NUEVO', NULL, '', NULL),
('Comunicaciones', '000019', 'NUEVO', '', 'NUEVO', 'NUEVO', 0, '', 'CIDE', 'NUEVO', '4242', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 0, 0, 'NUEVO', 0, 'chequeado', 23, '2022-02-02 21:47:14', 0, '2022-02-02 21:47:14', NULL, 'NUEVO', NULL, '', NULL),
('Comunicaciones', '000020', 'PC', '', 'PC', 'PC', 0, '', 'CIDE', 'PC', '222', 'PC', 'PC', 'PC', 'PC', 'PC', 0, 0, 'PC', 0, 'chequeado', 23, '2022-02-03 01:16:41', 23, '2022-02-03 01:16:41', NULL, 'PC', NULL, '', 'descarga.jpg'),
('Comunicaciones', '000021', '468515454', '', 'INSPUR', '9038HJ', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'NEGRO', 'CPU', 'EN USO', 'RESIDENCIA USUARIO', 0, 0, 'UDLP', 0, 'chequeado', 23, '2022-03-08 15:33:44', 23, '2022-03-08 15:33:44', NULL, 'YOSELI GUARAMATO', NULL, '', 'INSPUR.jpg'),
('Comunicaciones', '000022', '4679687988', '', 'VIT', '903847', 0, '', 'CIDE', 'ABAE', '24913526', 'N/A', 'Negro', 'CPU', 'En uso', 'Residencia Usuario', 0, 0, 'udlp', 0, 'chequeado', 23, '2022-03-08 15:49:01', 23, '2022-03-08 15:49:01', NULL, 'Yoseli Guaramato', NULL, '', 'descarga.jpg'),
('Comunicaciones', '000023', 'PRUEBA 1', '', 'PRUEBA 1', 'PRUEBA 1', 0, '', 'CIDE', 'ABAE', '452445', 'PRUEBA 1', 'PRUEBA 1', 'PRUEBA 1', 'PRUEBA 1', 'PRUEBA 1', 0, 0, 'PRUEBA 1', 0, '', 23, '2022-03-11 15:27:27', 2147483647, '2022-03-11 15:27:27', NULL, 'PRUEBA 1', NULL, '', NULL),
('Oficina', '000024', 'OFICINA', '', 'OFICINA', 'OFICINA', 452, '', 'CIDE', 'OFICINA', '4524', 'OFICINA', 'OFICINA', 'OFICINA', 'OFICINA', 'OFICINA', 0, 0, 'OFICINA', 0, '', 23, '2022-03-11 15:28:01', 0, '2022-03-11 15:28:01', NULL, 'OFICINA', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaccion_equipos`
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
-- Dumping data for table `transaccion_equipos`
--

INSERT INTO `transaccion_equipos` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2022-000001', '0000007', 'sa', 'fyu', 2044, 'ABAE', 'dSDFad', 4543, 'fyu', 'yfyf', 'CIDE', 23, '2022-01-27 05:05:24', 'Entrada'),
('TM-2022-000002', '000010', 'vsdfgdfg', '25460', 405404, '45045045', 'gfdgds', 852472, 'ABAE', 'CIDE', '0450450', 23, '2022-01-29 20:44:33', 'Salida'),
('TM-2022-000003', '0000007', 'asfsff', 'fsdsdfsd', 66, 'dsf', 'sdfsdaf', 511531, 'ABAE', 'CIDE', 'dfsf', 23, '2022-01-30 22:13:13', 'Salida'),
('TM-2022-000004', '000012', 'PRESTAMO', 'JUAN RUIZ', 26545854, 'ABAE', 'JOSE CARRIZALES', 24642009, 'ABAE', 'CIDE', 'CIDE', 23, '2022-01-30 17:50:23', 'Salida');

-- --------------------------------------------------------

--
-- Table structure for table `transaccion_equipos_biblioteca`
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
-- Dumping data for table `transaccion_equipos_biblioteca`
--

INSERT INTO `transaccion_equipos_biblioteca` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2022-000001', '000004', 'dfsadf', 'fdafsd', 55254, '542', 'dsfsdf', 5156, 'ABAE', 'CIDE', '54542', 23, '2022-01-29 21:16:46', 'Salida'),
('TM-2022-000002', '000006', 'asdds', 'dsffs', 66262, 'dfsfdf', 'dfdsfsda', 515611, 'ABAE', 'CIDE', 'fdfsd', 23, '2022-01-30 22:22:25', 'Salida');

-- --------------------------------------------------------

--
-- Table structure for table `transaccion_equipos_inmuebles`
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
-- Dumping data for table `transaccion_equipos_inmuebles`
--

INSERT INTO `transaccion_equipos_inmuebles` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2022-000001', '10001', 'dsaf', 'vvguyy', 0, 'hjfjh', 'sdfsdaf', 654165, 'ABAE', 'CIDE', 'vvtvtyvty', 23, '2022-01-29 21:11:41', 'Salida'),
('TM-2022-000002', '10001', 'dsaf', 'vvguyy', 0, 'hjfjh', 'sdfsdaf', 654165, 'ABAE', 'CIDE', 'vvtvtyvty', 23, '2022-01-30 21:11:41', 'Salida');

-- --------------------------------------------------------

--
-- Table structure for table `transaccion_equipos_Transporte`
--

CREATE TABLE `transaccion_equipos_Transporte` (
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
-- Dumping data for table `transaccion_equipos_Transporte`
--

INSERT INTO `transaccion_equipos_Transporte` (`codigo_transaccion`, `codigo`, `motivo`, `recibe`, `cedula_r`, `empresa_r`, `entrega`, `cedula_e`, `empresa`, `lugar_e`, `lugar_r`, `created_user`, `created_date`, `tipo_transaccion`) VALUES
('TM-2022-000001', '214471', 'sf', 'fcsadf', 552832, 'sdafsadf', 'sdafdsf', 2873284, 'ABAE', 'CIDE', 'sdfsaf', 23, '2022-01-29 21:10:44', 'Salida'),
('TM-2022-000002', '214471', 'sf', 'fcsadf', 552832, 'sdafsadf', 'sdafdsf', 2873284, 'ABAE', 'CIDE', 'sdfsaf', 23, '2022-01-30 21:10:44', 'Salida'),
('TM-2022-000003', '214475', 'ENTREGA', 'KARLA MIERES', 155225411, 'ABAE', 'GUSTAVO GUEDEZ', 125544565, 'ABAE', 'CIDE', 'CIDE', 23, '2022-01-30 17:41:52', 'Entrada');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `username`, `name_user`, `cedula_user`, `password`, `email`, `telefono`, `foto`, `permisos_acceso`, `status`, `created_at`, `updated_at`, `sede`) VALUES
(18, 'Administrador', 'Administrador', 24642009, '1234', '', '', NULL, 'Super Admin', 'activo', '2019-12-05 18:53:22', '2021-04-27 12:40:36', 'SAT'),
(21, 'Trabajador', 'Trabajador', 0, '1234', 'carrizalesj5@gmai.com', '0414147005', NULL, 'Super Admin', 'activo', '2020-01-30 21:38:08', '2021-04-27 12:40:22', 'ETCS-Baemari'),
(22, 'Alfredo', 'acalderon', 214456544, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 11:01:41', '2021-06-15 11:01:41', 'CIDE'),
(23, 'admin', 'Jose Carrizales', 24642009, '1234', 'carrizalesj5@gmail.com', '04144001564', 'PhotoRoom-20220104_134307.jpg', 'Super Admin', 'activo', '2021-06-15 11:02:14', '2022-01-30 05:37:06', 'CIDE'),
(24, 'adminluepa', 'admin', 12345, '1234', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 11:04:36', '2021-06-15 11:04:36', 'ETCS-Luepa'),
(25, 'adminctsr', 'admin', 12345, '12345', NULL, NULL, NULL, 'Super Admin', 'activo', '2021-06-15 11:05:01', '2021-06-15 11:05:01', 'CTSR'),
(26, 'adminsat', 'admin', 12345, '1234', 'fasdfa@safas', '2251511', NULL, 'Super Admin', 'activo', '2021-06-15 11:05:19', '2021-11-25 10:25:57', 'SAT'),
(27, 'adminbaemari', 'admin', 0, '1234', 'dsdsdad@a', '5485415', 'DIIE_LOGO-ABAE.png', 'Super Admin', 'activo', '2021-06-15 11:05:36', '2022-01-15 23:01:58', 'ETCS-Baemari');

-- --------------------------------------------------------

--
-- Table structure for table `Transporte`
--

CREATE TABLE `Transporte` (
  `codigo` varchar(10) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
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
  `estado` enum('chequeado','nochequeado') DEFAULT 'chequeado',
  `updated_user` int(5) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Transporte`
--

INSERT INTO `Transporte` (`codigo`, `placa`, `marca`, `tipo`, `modelo`, `color`, `condicion`, `unidad`, `ubicacion`, `responsable`, `pertenece`, `cedula`, `sede`, `nmroCarroceria`, `anio`, `tipoCombustible`, `created_user`, `created_date`, `updated_date`, `estado`, `updated_user`, `categoria`) VALUES
('214475', '515SAD5D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11620', 'CIDE', 'D5155', '2016', 'GASOLINA', 27, '2020-11-29 16:00:00', '2020-11-29 16:00:00', 'nochequeado', 27, 'Transporte'),
('214476', '515SAD6D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11621', 'CIDE', 'D5156', '2017', 'GASOLINA', 28, '2020-11-30 16:00:00', '2020-11-30 16:00:00', 'nochequeado', 28, 'Transporte'),
('214477', '515SAD7D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11622', 'CIDE', 'D5157', '2018', 'GASOLINA', 29, '2020-12-01 16:00:00', '2020-12-01 16:00:00', 'nochequeado', 29, 'Transporte'),
('214478', '515SAD8D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11623', 'CIDE', 'D5158', '2019', 'GASOLINA', 30, '2020-12-02 16:00:00', '2020-12-02 16:00:00', 'nochequeado', 30, 'Transporte'),
('214479', '515SAD9D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11624', 'CIDE', 'D5159', '2020', 'GASOLINA', 31, '2020-12-03 16:00:00', '2020-12-03 16:00:00', 'nochequeado', 31, 'Transporte'),
('214480', '515SAD10D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11625', 'CIDE', 'D5160', '2021', 'GASOLINA', 32, '2020-12-04 16:00:00', '2020-12-04 16:00:00', 'nochequeado', 32, 'Transporte'),
('214481', '515SAD11D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11626', 'CIDE', 'D5161', '2022', 'GASOLINA', 33, '2020-12-05 16:00:00', '2020-12-05 16:00:00', 'nochequeado', 33, 'Transporte'),
('214482', '515SAD12D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11627', 'CIDE', 'D5162', '2023', 'GASOLINA', 34, '2020-12-06 16:00:00', '2020-12-06 16:00:00', 'nochequeado', 34, 'Transporte'),
('214483', '515SAD13D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11628', 'CIDE', 'D5163', '2024', 'GASOLINA', 35, '2020-12-07 16:00:00', '2020-12-07 16:00:00', 'nochequeado', 35, 'Transporte'),
('214484', '515SAD14D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11629', 'CIDE', 'D5164', '2025', 'GASOLINA', 36, '2020-12-08 16:00:00', '2020-12-08 16:00:00', 'nochequeado', 36, 'Transporte'),
('214485', '515SAD15D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11630', 'CIDE', 'D5165', '2026', 'GASOLINA', 37, '2020-12-09 16:00:00', '2020-12-09 16:00:00', 'nochequeado', 37, 'Transporte'),
('214486', '515SAD16D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11631', 'CIDE', 'D5166', '2027', 'GASOLINA', 38, '2020-12-10 16:00:00', '2020-12-10 16:00:00', 'nochequeado', 38, 'Transporte'),
('214487', '515SAD17D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11632', 'CIDE', 'D5167', '2028', 'GASOLINA', 39, '2020-12-11 16:00:00', '2020-12-11 16:00:00', 'nochequeado', 39, 'Transporte'),
('214488', '515SAD18D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11633', 'CIDE', 'D5168', '2029', 'GASOLINA', 40, '2020-12-12 16:00:00', '2020-12-12 16:00:00', 'nochequeado', 40, 'Transporte'),
('214489', '515SAD19D', 'DONGFENG', 'PICKUP', 'ZNA', 'BLANCO', 'EN USO', 'UDLP', 'BORBURATA', 'KARLA MIERES', 'ABAE', '11634', 'CIDE', '', '2030', '', 41, '2020-12-13 16:00:00', '2020-12-13 16:00:00', 'nochequeado', 23, 'Transporte'),
('214490', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', 'NUEVO', '42', 'CIDE', '', '42', '', 23, NULL, NULL, 'chequeado', 0, 'Transporte'),
('214491', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'ABAE', '22', 'CIDE', '', '22', '', 23, NULL, NULL, 'chequeado', 0, 'Transporte'),
('214492', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'VEHICULO', 'ABAE', '7527', 'CIDE', '', '785', '', 23, NULL, NULL, 'chequeado', 0, 'Transporte');


--
-- Table structure for table `guia`
--

CREATE TABLE `guia` (
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Transporte`
--

INSERT INTO `guia` (`codigo`, `nombre`,`categoria`) VALUES
('15010-0001','Ambulancias',	'Transporte'),
('15010-0002', 'Autobuses',	'Transporte'),
('15010-0003',	'Automoviles',	'Transporte'),
('15010-0004',	'Camiones cisterna para asfalto',	'Transporte'),
('15010-0005',	'Camiones cisterna para agua',	'Transporte'),
('15010-0006',	'Camiones cisterna para gasolina',	'Transporte'),
('15010-0007',	'Camiones cisterna para gas',	'Transporte'),
('15010-0008',	'Camiones chasis',	'Transporte'),
('15010-0009',	'Camiones de estacas',	'Transporte'),
('15010-0010',	'Camiones volteos',	'Transporte'),
('15010-0011',	'Camiones ganaderos',	'Transporte'),
('15010-0012',	'Camiones gruas',	'Transporte'),
('15010-0013',	'Camiones para basura',	'Transporte'),
('15010-0014',	'Camionetas de carga cubiertas',	'Transporte'),
('15010-0015',	'Camionetas de carga pick-up', 	'Transporte'),
('15010-0016',	'Camionetas de pasajeros', 	'Transporte'),
('15010-0017',	'Camionetas (ómnibus rurales)', 	'Transporte'),
('15010-0018',	'Carros bombas para incendios', 'Transporte'),
('15010-0019',	'Carros de bomberos', 'Transporte'),
('15010-0020',	'Chutos', 	'Transporte'),
('15010-0021',	'Escaleras automoviles para bomberos','Transporte'),
('15010-0022',	'Furgones',	'Transporte'),
('15010-0023',	'Gandolas', 	'Transporte'),
('15010-0024',	'Microbuses', 	'Transporte'),
('15010-0025',	'Motocicletas', 	'Transporte'),
('15010-0026',	'Motocicletas de reparto',	'Transporte'),
('15010-0027',	'Motonetas', 	'Transporte'),
('15010-0028',	'Motonetas de reparto', 	'Transporte'),
('15010-0029',	'Radiopatrullas', 	'Transporte'),
('15010-0030',	'Transportadores de vehiculos',	'Transporte'),
('16010-0001', 'Amplificadores', 'Comunicaciones'),
('16010-0002', 'Analizadoras', 'Comunicaciones'),
('16010-0003', 'Antenas fácilmente desmontables','Comunicaciones'),
('16010-0004', 'Centrales telefónicas manuales', 'Comunicaciones'),
('16010-0005', 'Concentradores','Comunicaciones'),
('16010-0006', 'Conmutadores telefónicos','Comunicaciones'),
('16010-0007', 'Conmutadores telegráficos','Comunicaciones'),
('16010-0008', 'Equipos de control remoto','Comunicaciones'),
('16010-0009', 'Equipos de sloran','Comunicaciones'),
('16010-0010', 'Equipos de luces de señales para torres de antena','Comunicaciones'),
('16010-0011', 'Equipos de radar','Comunicaciones'),
('16010-0012', 'Equipos de radiocomunicación portátiles','Comunicaciones'),
('16010-0013', 'Equipos de comunicación interna','Comunicaciones'),
('16010-0014', 'Generadores de señales','Comunicaciones'),
('16010-0015', 'Jacks panels','Comunicaciones'),
('16010-0016', 'Manipuladores','Comunicaciones'),
('16010-0017', 'Mesas para teleimpresoras','Comunicaciones'),
('16010-0018', 'Micrófonos','Comunicaciones'),
('16010-0019', 'Multicanales para telefonía','Comunicaciones'),
('16010-0020', 'Multicanales para telegrafía','Comunicaciones'),
('16010-0021', 'Pilas húmedas o de gravedad','Comunicaciones'),
('16010-0022', 'Plantas eléctricas','Comunicaciones'),
('16010-0023', 'Probadores de tubos electrónicos','Comunicaciones'),
('16010-0024', 'Racks','Comunicaciones'),
('16010-0025', 'Radioreceptores','Comunicaciones'),
('16010-0026', 'Radiotransmisores','Comunicaciones'),
('16010-0027', 'Receptores radioeléctricos','Comunicaciones'),
('16010-0028', 'Rectificadores','Comunicaciones'),
('16010-0029', 'Teléfonos','Comunicaciones'),
('16010-0030', 'Teleimpresoras','Comunicaciones'),
('16010-0031', 'Teletipos','Comunicaciones'),
('16010-0032', 'Transmisores radioeléctricos','Comunicaciones'),
('16010-0033', 'Trazadores de señales','Comunicaciones'),
('16010-0034', 'Voltímetros','Comunicaciones'),
('20010-0001', 'Acondicionadores de aire','Oficina'),
('20010-0002', 'Alfombras','Oficina'),
('20010-0003', 'Anaqueles','Oficina'),
('20010-0004', 'Archivadores de gavetas','Oficina'),
('20010-0005', 'Archivadores de puertas','Oficina'),
('20010-0006', 'Aspiradoras','Oficina'),
('20010-0007', 'Balanzas','Oficina'),
('20010-0008', 'Bancos (asientos)','Oficina'),
('20010-0009', 'Bancos (mesas)','Oficina'),
('20010-0010', 'Banderas nacionales','Oficina'),
('20010-0011', 'Bibliotecas','Oficina'),
('20010-0012', 'Borradores eléctricos','Oficina'),
('20010-0013', 'Burros','Oficina'),
('20010-0014', 'Caballetes','Oficina'),
('20010-0015', 'Cafeteras','Oficina'),
('20010-0016', 'Cajas fuertes','Oficina'),
('20010-0017', 'Cajas registradoras','Oficina'),
('20010-0018', 'Calculadoras','Oficina'),
('20010-0019', 'Carteleras','Oficina'),
('20010-0020', 'Carteleras','Oficina'),
('20010-0021', 'Ceniceros de pie','Oficina'),
('20010-0022', 'Cestas para botar papeles','Oficina'),
('20010-0023', 'Cestas para escritorios','Oficina'),
('20010-0024', 'Circuladores de aire','Oficina'),
('20010-0025', 'Compases','Oficina'),
('20010-0026', 'Comptómetros ','Oficina'),
('20010-0027', 'Cortinas','Oficina'),
('20010-0028', 'Cortineros','Oficina'),
('20010-0029', 'Curvígrafos','Oficina'),
('20010-0030', 'Dictáfonos','Oficina'),
('20010-0031', 'Díngrafos','Oficina'),
('20010-0032', 'Dispensadores de cinta engomada','Oficina'),
('20010-0033', 'Enfriadores de agua','Oficina'),
('20010-0034', 'Engrapadoras','Oficina'),
('20010-0035', 'Escalímetros','Oficina'),
('20010-0036', 'Escaparates','Oficina'),
('20010-0037', 'Escritorios','Oficina'),
('20010-0038', 'Escuadras','Oficina'),
('20010-0039', 'Escudos nacionales','Oficina'),
('20010-0040', 'Espaciadores para máquinas de escribir',' Oficina'),
('20010-0041', 'Estantes','Oficina'),
('20010-0042', 'Estenógrafos (máquinas)','Oficina'),
('20010-0043', 'Estuches de matemáticas','Oficina'),
('20010-0044', 'Estuches de plantillas','Oficina'),
('20010-0045', 'Ficheros (tarjeteros)','Oficina'),
('20010-0046', 'Fotocopiadoras','Oficina'),
('20010-0047', 'Gabinetes','Oficina'),
('20010-0048', 'Guillotinas para papel, manuales','Oficina'),
('20010-0049', 'Grabadores de sonido','Oficina'),
('20010-0050', 'Impresoras de rótulos','Oficina'),
('20010-0051', 'Juegos de instrumentos para dibujo','Oficina'),
('20010-0052', 'Juegos de muebles para recibo','Oficina'),
('20010-0053', 'Kardex','Oficina'),
('20010-0054', 'Lámparas móviles','Oficina'),
('20010-0055', 'Litografías montadas en marcos','Oficina'),
('20010-0056', 'Lockers','Oficina'),
('20010-0057', 'Maletines','Oficina'),
('20010-0058', 'Mapas montados en marcos','Oficina'),
('20010-0059', 'Mapotecas','Oficina'),
('20010-0060', 'Máquinas de contabilidad','Oficina'),
('20010-0061', 'Máquinas de escribir','Oficina'),
('20010-0062', 'Máquinas eléctricas y electrónicas de contabilidad','Oficina'),
('20010-0063', 'Máquinas foliadoras','Oficina'),
('20010-0064', 'Máquinas franqueadoras de correspondencia','Oficina'),
('20010-0065', 'Mesas','Oficina'),
('20010-0066', 'Microfilmadoras','Oficina'),
('20010-0067', 'Mimeógrafos','Oficina'),
('20010-0068', 'Multígrafos','Oficina'),
('20010-0069', 'Neveras','Oficina'),
('20010-0070', 'Normógrafos','Oficina'),
('20010-0071', 'Numeradoras','Oficina')
('20010-0072', 'Organigramas montados','Oficina'),
('20010-0073', 'Pantógrafos','Oficina'),
('20010-0074', 'Percheros','Oficina'),
('20010-0075', 'Perforadoras para mas de 2 ojetes','Oficina'),
('20010-0076', 'Pesa-cartas','Oficina'),
('20010-0077', 'Pizarrones','Oficina'),
('20010-0078', 'Planímetros','Oficina'),
('20010-0079', 'Planotecas','Oficina'),
('20010-0080', 'Plantillas de dibujo','Oficina'),
('20010-0081', 'Poltronas','Oficina'),
('20010-0082', 'Porta-copias','Oficina'),
('20010-0083', 'Prensas para copias','Oficina'),
('20010-0084', 'Protectoras de cheques','Oficina'),
('20010-0085', 'Proyectores para dibujo','Oficina'),
('20010-0086', 'Reglas','Oficina'),
('20010-0087', 'Relojes','Oficina'),
('20010-0088', 'Relojes de control','Oficina'),
('20010-0089', 'Relojes fechadores','Oficina'),
('20010-0090', 'Roperos','Oficina'),
('20010-0091', 'Saca-puntas','Oficina'),
('20010-0092', 'Sellos-prensa metálicos','Oficina'),
('20010-0093', 'Sillas para escritorios','Oficina'),
('20010-0094', 'Sofás','Oficina'),
('20010-0095', 'Soportes para sellos','Oficina'),
('20010-0096', 'Sumadoras','Oficina'),
('20010-0097', 'Tableros (ni pizarrones, ni carteleras)','Oficina'),
('20010-0098', 'Taburetes','Oficina'),
('20010-0099', 'Teléfonos (internos)','Oficina'),
('20010-0100', 'Transportadores ','Oficina'),
('20010-0101', 'Televisores','Oficina'),
('20010-0102', 'Ventiladores','Oficina'),
('20010-0103', 'Vitrinas','Oficina'),
('v20020-0001', 'Adaptador de bienes múltiples','Oficina'),
('20020-0002', 'Cadena de impresora intercambiable','Oficina'),
('20020-0003', 'Discos','Oficina'),
('20020-0004', 'Lectora óptica','Oficina'),
('20020-0005', 'Lectora de tarjeta','Oficina'),
('20020-0006', 'Lectora de cintas de papel','Oficina'),
('20020-0007', 'Microcomputador','Oficina'),
('20020-0008', 'Modulador y desmodulador (modem)','Oficina'),
('20020-0009', 'Perforadora de tarjeta','Oficina'),
('20020-0010', 'Perforadora de cinta de papel','Oficina'),
('20020-0011 ', 'Terminal con teclado ','Oficina'),
('20020-0012 ', 'Unidad central de proceso (CPU) ','Oficina'),
('20020-0013', ' Unidad de control de líneas remotas ','Oficina'),
('20020-0014 ', 'Unidad de control local de terminales ','Oficina'),
('20020-0015 ', 'Unidad de control remoto de terminales ','Oficina'),
('20020-0016 ', 'Unidad de control de cinta ','Oficina'),
('20020-0017', ' Unidad de control de impresora ','Oficina'),
('20020-0018', ' Unidad de cinta magnética ','Oficina'),
('20020-0019 ', 'Unidad de acceso directo (discos) ','Oficina'),
('20020-0020 ', 'Unidad de diskettes ','Oficina'),
('20020-0021 ', 'Unidad impresora ','Oficina'),
('20020-0022', ' Visores de microfichas','Oficina'),
('20090-0001', ' Acondicionadores de aire ','Oficina'),
('20090-0002', ' Acuarios ','Oficina'),
('20090-0003 ', 'Alfombras ','Oficina'),
('20090-0004 ', 'Anaqueles ','Oficina'),
('20090-0006 ', 'Aparadores ','Oficina'),
('20090-0007', ' Aparatos desmanchadores para lavanderas ','Oficina'),
('20090-0008 ', 'Armarios ','Oficina'),
('20090-0010 ', 'Atomizadores ','Oficina'),
('20090-0011', ' Azafates ','Oficina'),
('20090-0012', ' Balanzas ','Oficina'),
('20090-0013', ' Bancas y banquetas ','Oficina'),
('20090-0014', ' Bancos (asientos) ','Oficina'),
('20090-0015 ', 'Bancos (mesas) ','Oficina'),
('20090-0016 ', 'Banderas nacionales ','Oficina'),
('20090-0017 ', 'Bañeras móviles ','Oficina'),
('20090-0018', ' Bares ','Oficina'),
('20090-0019 ', 'Barqueos ','Oficina'),
('20090-0020 ', 'Bases para alfombras ','Oficina'),
('20090-0021 ', 'Batidoras ','Oficina'),
('20090-0022 ', 'Bibelots ','Oficina'),
('20090-0023 ', 'Biombos ','Oficina'),
('20090-0024 ', 'Botiquines ','Oficina'),
('20090-0025 ', 'Butacas  ','Oficina'),
('20090-0026 ', 'Burros ','Oficina'),
('20090-0027 ', 'Caballetes ','Oficina'),
('20090-0028 ', 'Cafeteras ','Oficina'),
('20090-0029 ', 'Calderos ','Oficina'),
('20090-0030 ', 'Calentadores ','Oficina'),
('20090-0031 ', 'Camas ','Oficina'),
('20090-0032', ' Canapés ','Oficina'),
('20090-0033 ', 'Cantaras ','Oficina'),
('20090-0034 ', 'Carros de comida ','Oficina'),
('20090-0035', ' Cocinas móviles ','Oficina'),
('20090-0036 ', 'Cocinillas portátiles ','Oficina'),
('20090-0037 ', 'Cofres ','Oficina'),
('20090-0038 ', 'Cómodas ','Oficina'),
('20090-0039 ', 'Congeladoras ','Oficina'),
('20090-0040 ', 'Conservadoras ','Oficina'),
('20090-0041 ', 'Consolas ','Oficina'),
('20090-0042', 'Cortadoras de césped','Oficina'),
('20090-0043', 'Cortinas','Oficina'),
('20090-0044', 'Cortineros','Oficina'),
('20090-0045', 'Cunas','Oficina'),
('20090-0046', 'Chiffonieres','Oficina'),
('20090-0047', 'Chinchorros','Oficina'),
('20090-0048', 'Divanes','Oficina'),
('20090-0049', 'Enfriadores de agua','Oficina'),
('20090-0050', 'Equipos para desperdicios','Oficina'),
('20090-0052', 'Escaparates','Oficina'),
('20090-0053', 'Escudos nacionales','Oficina'),
('20090-0054', 'Estantes','Oficina'),
('20090-0055', 'Espejos','Oficina'),
('20090-0056', 'Estufas móviles','Oficina'),
('20090-0057', 'Exprimidoras','Oficina'),
('20090-0058', 'Exprimidoras de lavandera','Oficina'),
('20090-0059', 'Filtros de agua','Oficina'),
('20090-0060', 'Floreros','Oficina'),
('20090-0061', 'Freidores','Oficina'),
('20090-0062 ', 'Gabinetes','Oficina'),
('20090-0063', 'Gaveteros','Oficina'),
('20090-0065', 'Hamacas','Oficina'),
('20090-0064 ', 'Grecas para el café','Oficina'),
('20090-0065 ', 'Hamacas','Oficina'),
('20090-0066 ', 'Jardineras móviles','Oficina'),
('20090-0067 ', 'Jarrones','Oficina'),
('20090-0068 ', 'Juegos de cristal','Oficina'),
('20090-0069 ', 'Juegos de dormitorio','Oficina'),
('20090-0070 ', 'Juegos de muebles de comedor','Oficina'),
('20090-0071 ', 'Juegos de muebles de recibo','Oficina'),
('20090-0072 ', 'Juegos de pesas para balanzas','Oficina'),
('20090-0073 ', 'Juego de porcelana','Oficina'),
('20090-0074 ', 'Lámparas móviles','Oficina'),
('20090-0075', 'Lavabos móviles','Oficina'),
('20090-0076 ', 'Lavacopas y vasos ','Oficina'),
('20090-0077 ', 'Lavadoras de ropa ','Oficina'),
('20090-0078', ' Lavaplatos móviles ','Oficina'),
('20090-0079 ', 'Licuadoras ','Oficina'),
('20090-0080 ', 'Máquinas ayudante de cocina ','Oficina'),
('20090-0081 ', 'Máquinas amasadoras ','Oficina'),
('20090-0082 ', 'Máquinas de afeitar ','Oficina'),
('20090-0083 ', 'Máquinas de almidonar ','Oficina'),
('20090-0084 ', 'Máquinas de coser ','Oficina'),
('20090-0085 ', 'Máquinas de planchar ','Oficina'),
('20090-0086 ', 'Máquinas para cortar carne ','Oficina'),
('20090-0087 ', 'Máquinas para cortar jamón ','Oficina'),
('20090-0088 ', 'Máquinas para fabricar cubos de hielo ','Oficina'),
('20090-0089 ', 'Máquinas para hacer helados ','Oficina'),
('20090-0090 ', 'Máquinas para lavar alfombras ','Oficina'),
('20090-0091 ', 'Máquinas ralladoras ','Oficina'),
('20090-0092 ', 'Máquinas secadoras de ropa ','Oficina'),
('20090-0093', ' Marcadoras de ropa ','Oficina'),
('20090-0094', ' Marmitas ','Oficina'),
('20090-0095 ', 'Materos ','Oficina'),
('20090-0096', ' Macedores ','Oficina'),
('20090-0097', ' Mesas ','Oficina'),
('20090-0098', ' Mesones ','Oficina'),
('20090-0099', ' Molinos para carne ','Oficina'),
('20090-0100', ' Molinos para granos','Oficina'),
('20090-0101 ', 'Mostradores ','Oficina'),
('20090-0102 ', 'Neveras ','Oficina'),
('20090-0103 ', 'Neveras-mostrador ','Oficina'),
('20090-0104 ', 'Objetos decorativos ','Oficina'),
('20090-0105 ', 'Ollas grandes ','Oficina'),
('20090-0106 ', 'Paravanes ','Oficina'),
('20090-0107', ' Parrillas móviles ','Oficina'),
('20090-0108 ', 'Peinadoras','Oficina'),
('20090-0109 ', 'Peladoras de papas ','Oficina'),
('20090-0110 ', 'Percheros ','Oficina'),
('20090-0111', ' Persianas ','Oficina'),
('20090-0112', ' Planchas eléctricas ','Oficina'),
('20090-0113', ' Platones ','Oficina'),
('20090-0114 ', 'Poltronas ','Oficina'),
('20090-0115 ', 'Pulidoras de pisos ','Oficina'),
('20090-0116 ', 'Purificadores de agua ','Oficina'),
('20090-0117 ', 'Radio-receptores ','Oficina'),
('20090-0118 ', 'Rebanadas de fiambres ','Oficina'),
('20090-0119 ', 'Recipientes ','Oficina'),
('20090-0120', ' Repisas ','Oficina'),
('20090-0121', ' Revisteros ','Oficina'),
('20090-0122', ' Roperos ','Oficina'),
('20090-0123', ' Sartenes ','Oficina'),
('20090-0124', ' Secadores de ropa ','Oficina'),
('20090-0125', ' Sillas ','Oficina'),
('20090-0126', ' Sillones ','Oficina'),
('20090-0127', ' Sillones de barbera ','Oficina'),
('20090-0128', ' Sofás ','Oficina'),
('20090-0129', ' Taburetes ','Oficina'),
('20090-0130', ' Tapetes ','Oficina'),
('20090-0131', ' Tarimas ','','Oficina'),
('20090-0132', ' Televisores ','Oficina'),
('20090-0133', ' Tiendas de campaña ','Oficina'),
('20090-0134', ' Tinajeros ','Oficina'),
('20090-0135', ' Tocadores ','Oficina'),
('20090-0136', ' Tostadoras ','Oficina'),
('20090-0137', ' Vajillas de lujo ','Oficina'),
('20090-0138', ' Video grabadores','Oficina'),
('20990-0001', ' Otras maquinas, muebles y demás equipos de oficina y alojamiento','Oficina');


--
-- Table structure for table `guia`
--

CREATE TABLE `colores` (
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Transporte`
--

INSERT INTO `colores` ( `nombre`) VALUES
('NEGRO'),
('AZUL'),
('PALO ROSA'),
('NARANJA'),
('VERDE'),
('BEIGE'),
('CROMATICO'),
('VINOTINTO'),
('GRIS / NEGRO'),
('PLATEADO'),
('BEIGE AUSTRALIA'),
('PLATEADO FERROSO'),
('PERLA'),
('BEIGE OLIMPICO'),
('ARENA METALIZADO'),
('PLATA'),
('ROJO'),
('AMARILLO'),
('BEIGE DUNA'),
('MARRON / NEGRO'),
('AZUL / BEIGE'),
('MARRÓN / BEIGE'),
('VERDE ESMERALDA'),
('PLATA CLARO'),
('PLATEADO BRILLANTE'),
('MARRON PARDILLO BICAPA'),
('GRIS PALMERA'),
('DORADO'),
('MADERA NATURAL'),
('NEGRO/AMARILLO MOSTAZA'),
('MARRON'),
('BLANCO'),
('GRIS'),
('AZUL / GRIS'),
('AZUL / NEGRO'),
('ACERO'),
('OTRO COLOR');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`codigo`,`isbn`);

--
-- Indexes for table `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `transaccion_equipos`
--
ALTER TABLE `transaccion_equipos`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `transaccion_equipos_biblioteca`
--
ALTER TABLE `transaccion_equipos_biblioteca`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `transaccion_equipos_inmuebles`
--
ALTER TABLE `transaccion_equipos_inmuebles`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `transaccion_equipos_Transporte`
--
ALTER TABLE `transaccion_equipos_Transporte`
  ADD PRIMARY KEY (`codigo_transaccion`),
  ADD KEY `id_barang` (`codigo`),
  ADD KEY `created_user` (`created_user`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`permisos_acceso`);

--
-- Indexes for table `Transporte`
--
ALTER TABLE `Transporte`
  ADD PRIMARY KEY (`codigo`,`placa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
