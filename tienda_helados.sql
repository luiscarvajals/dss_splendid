-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2023 a las 07:13:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_helados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidoP` varchar(255) NOT NULL,
  `apellidoM` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidoP`, `apellidoM`, `email`, `puesto`, `direccion`, `imagen`) VALUES
(1, 'Juan Pérez', '', '', '', 'Encargado', '', 0x727574612f612f6c612f666f746f312e6a7067),
(2, 'Maria López', '', '', '', 'Heladero', '', 0x727574612f612f6c612f666f746f322e6a7067),
(3, 'Carlos García', '', '', '', 'Heladero', '', 0x727574612f612f6c612f666f746f332e6a7067),
(4, 'Laura Martínez', '', '', '', 'Cajera', '', 0x727574612f612f6c612f666f746f342e6a7067),
(5, 'Fernando Flores', '', '', '', 'Encargado', '', 0x727574612f612f6c612f666f746f352e6a7067),
(6, 'Paola Llano', '', '', '', 'Heladera', '', 0x727574612f612f6c612f666f746f362e6a7067),
(7, 'Alejandro', 'Alvarez', 'Machicado', 'ale.am@gmail.com', 'Encargado', 'avenida miraflores', 0x727574612f612f6c612f666f746f362e6a7067),
(9, 'adga', '', 'perez', 'dani@gmail.com', 'cajera', 'aasdfsag asfgdh', ''),
(10, 'edely', '', 'loredo', 'ede@gmail.com', 'picador', 'uivyhu  uftcyf', ''),
(11, 'sgfdhfjg', '', 'perez', 'ede@gmail.com', 'ytcvubn', 'aasdfsag asfgdh', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_cliente` char(50) NOT NULL,
  `cantidad_pedido` int(11) NOT NULL,
  `precio_total` int(11) NOT NULL,
  `Empleados_id_empleado` int(11) NOT NULL,
  `Productos_id_productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `fecha`, `nombre_cliente`, `cantidad_pedido`, `precio_total`, `Empleados_id_empleado`, `Productos_id_productos`) VALUES
(1, '2023-05-01', 'Cliente 1', 5, 100, 1, 1),
(2, '2023-05-02', 'Cliente 2', 3, 60, 2, 2),
(3, '2023-05-03', 'Cliente 3', 2, 40, 1, 3),
(4, '2023-05-04', 'Cliente 4', 4, 80, 2, 1),
(5, '2023-05-05', 'Cliente 5', 6, 120, 1, 2),
(6, '2023-05-06', 'Cliente 6', 1, 20, 2, 3),
(7, '2023-05-07', 'Cliente 7', 3, 60, 1, 1),
(8, '2023-05-08', 'Cliente 8', 2, 40, 2, 2),
(9, '2023-05-09', 'Cliente 9', 5, 100, 1, 3),
(10, '2023-05-10', 'Cliente 10', 4, 80, 2, 1),
(11, '2023-05-11', 'Cliente 11', 3, 60, 1, 2),
(12, '2023-05-12', 'Cliente 12', 1, 20, 2, 3),
(13, '2023-05-13', 'Cliente 13', 2, 40, 1, 1),
(14, '2023-05-14', 'Cliente 14', 6, 120, 2, 2),
(15, '2023-05-15', 'Cliente 15', 4, 80, 1, 3),
(16, '2023-05-16', 'Cliente 16', 3, 60, 2, 1),
(17, '2023-05-17', 'Cliente 17', 5, 100, 1, 2),
(18, '2023-05-18', 'Cliente 18', 2, 40, 2, 3),
(19, '2023-05-19', 'Cliente 19', 4, 80, 1, 1),
(20, '2023-05-20', 'Cliente 20', 1, 20, 2, 2),
(21, '2023-05-21', 'Cliente 21', 5, 100, 1, 3),
(22, '2023-05-22', 'Cliente 22', 3, 60, 2, 1),
(50, '2023-06-19', 'Cliente 50', 6, 120, 1, 2),
(51, '2023-06-20', 'Cliente 51', 4, 80, 2, 3),
(100, '2023-07-30', 'Cliente 100', 2, 40, 1, 1),
(101, '2023-07-31', 'Cliente 101', 3, 60, 2, 2),
(102, '2023-08-01', 'Cliente 102', 5, 100, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `nombre` char(50) NOT NULL,
  `descrpcion` char(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad_disponible` int(11) NOT NULL,
  `Sabores_id_sabores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `nombre`, `descrpcion`, `precio`, `cantidad_disponible`, `Sabores_id_sabores`) VALUES
(1, 'Helado de Vainilla', 'Delicioso helado de vainilla', 50, 100, 1),
(2, 'Helado de Chocolate', 'Irresistible helado de chocolate', 60, 80, 2),
(3, 'Helado de Fresa', 'Refrescante helado de fresa', 55, 120, 3),
(4, 'Helado de Menta', 'Refinado helado de menta', 65, 90, 4),
(5, 'Helado de Cookies and Cream', 'Delicioso helado de cookies and cream', 70, 110, 5),
(6, 'Helado de Nuez', 'Suntuoso helado de nuez', 75, 70, 6),
(7, 'Helado de Limón', 'Refrescante helado de limón', 60, 100, 7),
(8, 'Helado de Coco', 'Exquisito helado de coco', 65, 80, 8),
(9, 'Helado de Mango', 'Fresco helado de mango', 70, 120, 9),
(10, 'Helado de Pistacho', 'Elegante helado de pistacho', 75, 90, 10),
(11, 'Helado de Vainilla con Chocolate', 'Combinación perfecta de vainilla y chocolate', 70, 100, 1),
(12, 'Helado de Fresa con Chocolate', 'Deliciosa combinación de fresa y chocolate', 75, 80, 3),
(20, 'Helado de Oreo', 'Irresistible helado de Oreo', 80, 110, 5),
(21, 'Helado de Yogur', 'Helado cremoso de yogur', 70, 70, 6),
(22, 'Helado de Piña Colada', 'Helado tropical de piña colada', 75, 100, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabores`
--

CREATE TABLE `sabores` (
  `id_sabores` int(11) NOT NULL,
  `nombre` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sabores`
--

INSERT INTO `sabores` (`id_sabores`, `nombre`) VALUES
(1, 'Vainilla'),
(2, 'Chocolate'),
(3, 'Fresa'),
(4, 'Menta'),
(5, 'Limón'),
(6, 'Coco'),
(7, 'Plátano'),
(8, 'Mango'),
(9, 'Piña'),
(10, 'Café'),
(11, 'Avellana'),
(12, 'Nuez'),
(13, 'Caramelo'),
(14, 'Mantequilla de maní'),
(15, 'Mora'),
(16, 'Frutos del bosque'),
(17, 'Cereza'),
(18, 'Almendra'),
(19, 'Pistacho'),
(20, 'Maracuyá'),
(21, 'Mango'),
(22, 'Café'),
(23, 'Caramelo'),
(24, 'Canela'),
(25, 'Dulce de leche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `nombre` char(50) NOT NULL,
  `direccion` char(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `horario_apertura` time NOT NULL,
  `horario_cierre` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `nombre`, `direccion`, `telefono`, `horario_apertura`, `horario_cierre`) VALUES
(1, 'SAN PEDRO', 'Dirección 1', 123456789, '09:00:00', '18:00:00'),
(2, 'ZONA SUR', 'Dirección 2', 987654321, '10:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`) VALUES
(1, 'marco.reynolds', '123marco'),
(2, 'alejandra.landaeta', '123alejandra'),
(3, 'luis.carvajal', '123luis'),
(4, 'edward.gomez', '123edward'),
(5, 'edely.tito', '123edely');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` bigint(20) UNSIGNED NOT NULL,
  `cantidad_vendida` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `Sucursales_id_sucursal` int(11) NOT NULL,
  `Productos_id_productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `cantidad_vendida`, `fecha_venta`, `Sucursales_id_sucursal`, `Productos_id_productos`) VALUES
(1, 5, '2023-05-01', 1, 1),
(2, 3, '2023-05-02', 2, 2),
(3, 2, '2023-05-03', 1, 3),
(4, 4, '2023-05-04', 2, 1),
(5, 6, '2023-05-05', 1, 2),
(6, 1, '2023-05-06', 2, 3),
(7, 3, '2023-05-07', 1, 1),
(8, 2, '2023-05-08', 2, 2),
(9, 5, '2023-05-09', 1, 3),
(10, 4, '2023-05-10', 2, 1),
(11, 3, '2023-05-11', 1, 2),
(12, 1, '2023-05-12', 2, 3),
(13, 2, '2023-05-13', 1, 1),
(14, 6, '2023-05-14', 2, 2),
(15, 4, '2023-05-15', 1, 3),
(16, 3, '2023-05-16', 2, 1),
(17, 5, '2023-05-17', 1, 2),
(18, 2, '2023-05-18', 2, 3),
(19, 4, '2023-05-19', 1, 1),
(20, 1, '2023-05-20', 2, 2),
(21, 5, '2023-05-21', 1, 3),
(22, 3, '2023-05-22', 2, 1),
(23, 2, '2023-05-01', 2, 2),
(24, 3, '2023-05-01', 1, 3),
(25, 1, '2023-05-02', 2, 1),
(26, 4, '2023-05-02', 1, 2),
(27, 2, '2023-05-03', 2, 3),
(28, 3, '2023-05-03', 1, 1),
(29, 1, '2023-05-04', 2, 2),
(30, 4, '2023-05-04', 1, 3),
(31, 2, '2023-05-05', 2, 1),
(32, 3, '2023-05-05', 1, 2),
(33, 1, '2023-05-06', 2, 3),
(34, 4, '2023-05-06', 1, 1),
(35, 2, '2023-05-07', 2, 2),
(36, 3, '2023-05-07', 1, 3),
(37, 1, '2023-05-08', 2, 1),
(38, 4, '2023-05-08', 1, 2),
(39, 2, '2023-05-09', 2, 3),
(40, 3, '2023-05-09', 1, 1),
(41, 1, '2023-05-10', 2, 2),
(42, 4, '2023-05-10', 1, 3),
(43, 5, '2023-05-18', 1, 1),
(44, 3, '2023-05-18', 2, 2),
(45, 2, '2023-05-18', 1, 3),
(46, 4, '2023-05-17', 2, 1),
(47, 6, '2023-05-17', 1, 2),
(48, 1, '2023-05-17', 2, 3),
(49, 3, '2023-05-16', 1, 1),
(50, 6, '2023-06-19', 1, 2),
(51, 4, '2023-06-20', 2, 3),
(52, 5, '2023-05-16', 1, 3),
(53, 5, '2023-05-01', 1, 4),
(54, 8, '2023-05-02', 2, 5),
(55, 3, '2023-05-02', 1, 6),
(56, 10, '2023-05-03', 2, 7),
(57, 6, '2023-05-04', 1, 8),
(58, 7, '2023-05-05', 2, 9),
(59, 4, '2023-05-06', 1, 10),
(100, 2, '2023-07-30', 1, 1),
(101, 3, '2023-07-31', 2, 2),
(102, 5, '2023-08-01', 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `sabores`
--
ALTER TABLE `sabores`
  ADD PRIMARY KEY (`id_sabores`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD UNIQUE KEY `id_venta` (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
