-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 22:50:53
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
('Comunicacion', 5151, '4D5AS', '', 'XIAOMI', 'REDMI', 1, '', 'CIDE', 'ABAE', '24642009', '215', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-25 04:00:00', 23, '2020-11-25 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5152, '4D6AS', '', 'XIAOMI', 'REDMI', 2, '', 'CIDE', 'ABAE', '24642010', '216', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-26 04:00:00', 23, '2020-11-26 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5153, '4D7AS', '', 'XIAOMI', 'REDMI', 3, '', 'CIDE', 'ABAE', '24642011', '217', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-27 04:00:00', 23, '2020-11-27 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5154, '4D8AS', '', 'XIAOMI', 'REDMI', 4, '', 'CIDE', 'ABAE', '24642012', '218', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-28 04:00:00', 23, '2020-11-28 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5155, '4D9AS', '', 'XIAOMI', 'REDMI', 5, '', 'CIDE', 'ABAE', '24642013', '219', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-29 04:00:00', 23, '2020-11-29 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5156, '4D10AS', '', 'XIAOMI', 'REDMI', 6, '', 'CIDE', 'ABAE', '24642014', '220', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-11-30 04:00:00', 23, '2020-11-30 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5157, '4D11AS', '', 'XIAOMI', 'REDMI', 7, '', 'CIDE', 'ABAE', '24642015', '221', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-01 04:00:00', 23, '2020-12-01 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electronicos', 5158, '4D12AS', '', 'XIAOMI', 'REDMI', 8, '', 'CIDE', 'ABAE', '24642016', '222', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-02 04:00:00', 23, '2020-12-02 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electronicos', 5159, '4D13AS', '', 'XIAOMI', 'REDMI', 9, '', 'CIDE', 'ABAE', '24642017', '223', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-03 04:00:00', 23, '2020-12-03 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5160, '4D14AS', '', 'XIAOMI', 'REDMI', 10, '', 'CIDE', 'ABAE', '24642018', '224', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-04 04:00:00', 23, '2020-12-04 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Seguridad', 5161, '4D15AS', '', 'XIAOMI', 'REDMI', 11, '', 'CIDE', 'ABAE', '24642019', '225', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-05 04:00:00', 23, '2020-12-05 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5162, '4D16AS', '', 'XIAOMI', 'REDMI', 12, '', 'CIDE', 'ABAE', '24642020', '226', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-06 04:00:00', 23, '2020-12-06 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electrodomesticos', 5163, '4D17AS', '', 'XIAOMI', 'REDMI', 13, '', 'CIDE', 'ABAE', '24642021', '227', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-07 04:00:00', 23, '2020-12-07 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electrodomesticos', 5164, '4D18AS', '', 'XIAOMI', 'REDMI', 14, '', 'CIDE', 'ABAE', '24642022', '228', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-08 04:00:00', 23, '2020-12-08 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Electrodomesticos', 5165, '4D19AS', '', 'XIAOMI', 'REDMI', 15, '', 'CIDE', 'ABAE', '24642023', '229', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-09 04:00:00', 23, '2020-12-09 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Mobiliario', 5166, '4D20AS', '', 'XIAOMI', 'REDMI', 4, '', 'CIDE', 'ABAE', '24642024', '230', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-10 04:00:00', 23, '2020-12-10 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Mobiliario', 5167, '4D21AS', '', 'XIAOMI', 'REDMI', 17, '', 'CIDE', 'ABAE', '24642025', '231', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-11 04:00:00', 23, '2020-12-11 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5168, '4D22AS', '', 'XIAOMI', 'REDMI', 18, '', 'CIDE', 'ABAE', '24642026', '232', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-12 04:00:00', 23, '2020-12-12 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5169, '4D23AS', '', 'XIAOMI', 'REDMI', 19, '', 'CIDE', 'ABAE', '24642027', '233', 'NEGRO', 'CELULAR', 'EN USO', 'AIT', 0, 0, 'UDLP', 0, 'nochequeado', 23, '2020-12-13 04:00:00', 23, '2020-12-13 04:00:00', NULL, 'JOSE CARRIZAES', NULL, ''),
('Comunicacion', 5170, 'Prueba', '', 'Prueba', 'Prueba', 0, '', 'CIDE', 'Prueba', '54154156', '5446845', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 0, 0, 'Prueba', 0, 'nochequeado', 23, '2021-11-25 20:30:31', 23, '2021-11-25 20:30:31', NULL, 'prueba', NULL, ''),
('Comunicacion', 5171, 'PRUEBA', '', 'PRUEBA', 'PRUEBA', 0, '', 'CIDE', 'ABAE', '4561531', '15616', 'PRUEBA', 'PRUEBA', 'PRUEBA', 'PRUEBA', 0, 0, 'PRUEBA', 0, '', 23, '2021-11-25 20:37:43', 0, '2021-11-25 20:37:43', NULL, 'PRUEBA', NULL, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
