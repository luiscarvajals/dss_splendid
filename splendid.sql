-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 22:09:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4
=======
-- Host: localhost
-- Generation Time: May 22, 2023 at 05:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
>>>>>>> master

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD
-- Base de datos: `splendid`
--
=======
-- Database: `splendid`
--
CREATE DATABASE IF NOT EXISTS `splendid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `splendid`;
>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `asistencias`
=======
-- Table structure for table `asistencias`
>>>>>>> master
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `asistio` tinyint(1) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `fecha`, `asistio`, `id_empleado`) VALUES
=======
INSERT INTO asistencias (id, fecha, asistio, id_empleado) VALUES
>>>>>>> master
(1, '2023-05-01', 1, 1),
(2, '2023-05-01', 1, 2),
(3, '2023-05-01', 1, 3),
(4, '2023-05-01', 0, 4),
(5, '2023-05-01', 1, 5),
(6, '2023-05-02', 1, 1),
(7, '2023-05-02', 1, 2),
(8, '2023-05-02', 0, 3),
(9, '2023-05-02', 1, 4),
(10, '2023-05-02', 1, 5),
(11, '2023-05-03', 1, 1),
(12, '2023-05-03', 1, 2),
(13, '2023-05-03', 1, 3),
(14, '2023-05-03', 0, 4),
(15, '2023-05-03', 1, 5),
(16, '2023-05-04', 1, 1),
(17, '2023-05-04', 1, 2),
(18, '2023-05-04', 0, 3),
(19, '2023-05-04', 1, 4),
(20, '2023-05-04', 1, 5),
(21, '2023-05-05', 1, 1),
(22, '2023-05-05', 1, 2),
(23, '2023-05-05', 1, 3),
(24, '2023-05-05', 0, 4),
(25, '2023-05-05', 1, 5),
(26, '2023-05-06', 1, 1),
(27, '2023-05-06', 1, 2),
(28, '2023-05-06', 0, 3),
(29, '2023-05-06', 1, 4),
(30, '2023-05-06', 1, 5);

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `clientes`
=======
-- Table structure for table `clientes`
>>>>>>> master
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `telefono`, `email`) VALUES
=======
INSERT INTO clientes (id, nombre, apellido, telefono, email) VALUES
>>>>>>> master
(1, 'Juan', 'Pérez', '555-1234', 'juan@example.com'),
(2, 'María', 'González', '555-5678', 'maria@example.com'),
(3, 'Pedro', 'López', '555-9012', 'pedro@example.com'),
(4, 'Ana', 'Torres', '555-3456', 'ana@example.com'),
(5, 'Luis', 'Ramírez', '555-7890', 'luis@example.com'),
(6, 'Laura', 'Sánchez', '555-2345', 'laura@example.com'),
(7, 'Carlos', 'Gómez', '555-6789', 'carlos@example.com'),
(8, 'Sofía', 'Hernández', '555-0123', 'sofia@example.com'),
(9, 'Diego', 'Jiménez', '555-4567', 'diego@example.com'),
(10, 'Ana', 'López', '555-8901', 'ana.l@example.com'),
(11, 'Javier', 'Rojas', '555-2345', 'javier@example.com'),
(12, 'Paula', 'Santos', '555-6789', 'paula@example.com'),
(13, 'Daniel', 'Vargas', '555-0123', 'daniel@example.com'),
(14, 'Carolina', 'Moreno', '555-4567', 'carolina@example.com'),
(15, 'Mario', 'Gutiérrez', '555-8901', 'mario@example.com');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `empleados`
=======
-- Table structure for table `empleados`
>>>>>>> master
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `sueldo` decimal(10,2) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `direccion`, `telefono`, `email`, `cargo`, `sueldo`, `fecha_contratacion`, `imagen`) VALUES
=======
INSERT INTO empleados (id, nombre, apellido, fecha_nacimiento, direccion, telefono, email, cargo, sueldo, fecha_contratacion, imagen) VALUES
>>>>>>> master
(1, 'Juan', 'Pérez', '1990-05-15', 'Calle Principal 123', '555-1234', 'juan@example.com', 'Encargado', 5000.00, '2020-01-01', ''),
(2, 'María', 'González', '1995-09-20', 'Avenida Central 456', '555-5678', 'maria@example.com', 'Cajero', 3000.00, '2021-02-15', ''),
(3, 'Pedro', 'López', '1988-07-10', 'Calle Secundaria 789', '555-9012', 'pedro@example.com', 'Heladero', 3500.00, '2022-03-10', ''),
(4, 'Ana', 'Torres', '1992-04-25', 'Avenida Principal 987', '555-3456', 'ana@example.com', 'Encargado', 3200.00, '2021-11-20', ''),
(5, 'Luis', 'Ramírez', '1991-02-12', 'Calle Central 654', '555-7890', 'luis@example.com', 'Cajero', 2800.00, '2022-05-05', ''),
(6, 'Laura', 'Sánchez', '1993-11-30', 'Avenida Secundaria 321', '555-2345', 'laura@example.com', 'Heladero', 3000.00, '2020-09-15', ''),
(7, 'Carlos', 'Gómez', '1987-08-05', 'Calle Principal 654', '555-6789', 'carlos@example.com', 'Encargado', 5000.00, '2021-06-01', ''),
(8, 'Sofía', 'Hernández', '1994-03-18', 'Avenida Central 987', '555-0123', 'sofia@example.com', 'Cajero', 3500.00, '2022-01-10', ''),
(9, 'Diego', 'Jiménez', '1990-12-01', 'Calle Secundaria 123', '555-4567', 'diego@example.com', 'Heladero', 3200.00, '2021-12-05', ''),
(10, 'Ana', 'López', '1995-01-23', 'Avenida Principal 456', '555-8901', 'ana.l@example.com', 'Encargado', 2800.00, '2022-08-20', ''),
(11, 'Javier', 'Rojas', '1989-06-17', 'Calle Central 789', '555-2345', 'javier@example.com', 'Cajero', 5000.00, '2020-03-01', ''),
(12, 'Paula', 'Santos', '1991-03-12', 'Avenida Secundaria 321', '555-6789', 'paula@example.com', 'Heladero', 3000.00, '2021-07-15', ''),
(13, 'Daniel', 'Vargas', '1993-10-25', 'Calle Principal 654', '555-0123', 'daniel@example.com', 'Encargado', 3500.00, '2022-04-10', ''),
(14, 'Carolina', 'Moreno', '1988-07-18', 'Avenida Central 987', '555-4567', 'carolina@example.com', 'Cajero', 3200.00, '2021-10-05', ''),
(15, 'Mario', 'Gutiérrez', '1992-02-04', 'Calle Secundaria 123', '555-8901', 'mario@example.com', 'Heladero', 2800.00, '2022-06-20', '');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `horarios`
=======
-- Table structure for table `horarios`
>>>>>>> master
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora_entrada`, `hora_salida`, `id_empleado`) VALUES
=======
INSERT INTO horarios (id, hora_entrada, hora_salida, id_empleado) VALUES
>>>>>>> master
(1, '08:00:00', '17:00:00', 1),
(2, '09:00:00', '18:00:00', 2),
(3, '10:00:00', '19:00:00', 3),
(4, '08:30:00', '17:30:00', 4),
(5, '09:30:00', '18:30:00', 5),
(6, '08:00:00', '17:00:00', 6),
(7, '09:00:00', '18:00:00', 7),
(8, '10:00:00', '19:00:00', 8),
(9, '08:30:00', '17:30:00', 9),
(10, '09:30:00', '18:30:00', 10),
(11, '08:00:00', '17:00:00', 11),
(12, '09:00:00', '18:00:00', 12),
(13, '10:00:00', '19:00:00', 13),
(14, '08:30:00', '17:30:00', 14),
(15, '09:30:00', '18:30:00', 15);
<<<<<<< HEAD

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
=======
-- --------------------------------------------------------

--
-- Table structure for table `ingredientes`
>>>>>>> master
--

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_unidad_medida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `ingredientes`
--

=======
>>>>>>> master
INSERT INTO `ingredientes` (`id`, `nombre`, `precio`, `id_unidad_medida`) VALUES
(1, 'Leche', 2.50, 1),
(2, 'Crema', 3.00, 1),
(3, 'Azúcar', 1.20, 2),
(4, 'Vainilla', 0.80, 1),
(5, 'Chocolate', 2.50, 2),
(6, 'Fresas', 4.00, 2),
(7, 'Nueces', 3.50, 2),
(8, 'Menta', 1.50, 1);

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_ingredientes`
=======

-- --------------------------------------------------------

--
-- Table structure for table `inventario_ingredientes`
>>>>>>> master
--

CREATE TABLE `inventario_ingredientes` (
  `id` int(11) NOT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `id_ingrediente` int(11) DEFAULT NULL,
  `id_unidad_medida` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `cantidad_minima` int(11) NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `inventario_ingredientes`
--

=======
>>>>>>> master
INSERT INTO `inventario_ingredientes` (`id`, `id_sucursal`, `id_ingrediente`, `id_unidad_medida`, `cantidad`, `cantidad_minima`, `fecha_actualizacion`) VALUES
(1, 1, 1, 1, 10, 2, '2023-05-01'),
(2, 1, 2, 1, 8, 3, '2023-05-01'),
(3, 1, 3, 2, 15, 5, '2023-05-01'),
(4, 1, 4, 1, 5, 1, '2023-05-01'),
(5, 2, 5, 2, 12, 4, '2023-05-01'),
(6, 2, 6, 2, 7, 2, '2023-05-01'),
(7, 2, 7, 2, 9, 3, '2023-05-01'),
(8, 2, 8, 1, 3, 1, '2023-05-01');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `inventario_productos`
=======
-- Table structure for table `inventario_productos`
>>>>>>> master
--

CREATE TABLE `inventario_productos` (
  `id` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `cantidad_minima` int(11) NOT NULL,
  `fecha_actualizacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
<<<<<<< HEAD
-- Volcado de datos para la tabla `inventario_productos`
=======
-- Dumping data for table `inventario_productos`
>>>>>>> master
--

INSERT INTO `inventario_productos` (`id`, `id_sucursal`, `id_producto`, `cantidad`, `cantidad_minima`, `fecha_actualizacion`) VALUES
(1, 1, 1, 10, 0, '2023-05-01'),
(2, 2, 1, 15, 0, '2023-05-01'),
(3, 1, 2, 12, 0, '2023-05-01'),
(4, 2, 2, 18, 0, '2023-05-01'),
(5, 1, 3, 8, 0, '2023-05-01'),
(6, 2, 3, 14, 0, '2023-05-01'),
(7, 1, 4, 5, 0, '2023-05-01'),
(8, 2, 4, 10, 0, '2023-05-01'),
(9, 1, 5, 7, 0, '2023-05-01'),
<<<<<<< HEAD
(10, 2, 5, 13, 0, '2023-05-01'),
(11, 1, 1, 50, 10, '2023-05-22'),
(12, 1, 3, 30, 5, '2023-05-18'),
(13, 1, 5, 20, 5, '2023-05-22'),
(14, 1, 8, 40, 10, '2023-05-20'),
(15, 1, 11, 25, 5, '2023-05-22'),
(16, 1, 13, 35, 5, '2023-05-19'),
(17, 1, 16, 15, 3, '2023-05-22'),
(18, 1, 18, 30, 5, '2023-05-21'),
(19, 1, 20, 10, 2, '2023-05-22'),
(20, 2, 2, 40, 10, '2023-05-22'),
(21, 2, 4, 20, 5, '2023-05-20'),
(22, 2, 6, 30, 5, '2023-05-22'),
(23, 2, 9, 50, 10, '2023-05-19'),
(24, 2, 12, 15, 3, '2023-05-22'),
(25, 2, 14, 25, 5, '2023-05-18'),
(26, 2, 17, 35, 5, '2023-05-22'),
(27, 2, 19, 10, 2, '2023-05-21'),
(28, 2, 20, 30, 5, '2023-05-21');
=======
(10, 2, 5, 13, 0, '2023-05-01');


>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `ordenes_compra`
=======
-- Table structure for table `ordenes_compra`
>>>>>>> master
--

CREATE TABLE `ordenes_compra` (
  `id` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `ordenes_compra`
--

=======
>>>>>>> master
INSERT INTO `ordenes_compra` (`id`, `id_proveedor`, `id_ingrediente`, `cantidad`, `fecha_compra`) VALUES
(1, 1, 1, 500, '2023-05-02'),
(2, 1, 2, 300, '2023-05-02'),
(3, 2, 3, 1000, '2023-05-03'),
(4, 3, 4, 200, '2023-05-04'),
(5, 4, 5, 400, '2023-05-05'),
(6, 5, 6, 150, '2023-05-06'),
(7, 6, 7, 250, '2023-05-07'),
(8, 7, 8, 350, '2023-05-08'),
(9, 8, 1, 800, '2023-05-09'),
(10, 9, 2, 600, '2023-05-10');

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
=======

-- --------------------------------------------------------

--
-- Table structure for table `productos`
>>>>>>> master
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
<<<<<<< HEAD
  `precio` decimal(10,2) NOT NULL,
  `id_sabor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `id_sabor`) VALUES
(1, 'Helado (1 porcion)', 'Delicioso helado tradicional con un sabor a elegir', 8.00, 1),
(2, 'Helado (2 porciones)', 'Delicioso helado tradicional con dos sabores a elegir.', 12.00, 1),
(3, 'Helado (3 porciones)', 'Delicioso helado tradicional con tres sabores a elegir', 16.00, 1),
(4, 'Paleta rellena', 'Deliciosa paleta rellena del sabor que desees', 8.50, 1),
(5, 'Paleta de agua', 'Refrescante paleta en base de agua', 4.00, 1),
(6, 'Helado de Chocolate', 'Irresistible helado de chocolate oscuro', 4.99, 2),
(7, 'Helado de Fresa', 'Refrescante helado de fresa con trozos de fruta', 4.99, 3),
(8, 'Helado de Menta', 'Refrescante helado de menta con trozos de chocolate', 4.99, 4),
(9, 'Helado de Cookies and Cream', 'Delicioso helado de vainilla con trozos de galleta', 5.99, 5),
(10, 'Helado de Mango', 'Exótico helado de mango con sabor tropical', 4.99, 6),
(11, 'Helado de Limón', 'Refrescante helado de limón con toque cítrico', 3.99, 7),
(12, 'Helado de Plátano', 'Dulce helado de plátano con textura cremosa', 4.99, 8),
(13, 'Helado de Nuez', 'Rico helado de nuez con trozos de nuez caramelizada', 5.99, 9),
(14, 'Helado de Café', 'Intenso helado de café para los amantes del café', 4.99, 10),
(15, 'Helado de Caramelo', 'Dulce helado de caramelo con remolinos de caramelo', 4.99, 11),
(16, 'Helado de Avellana', 'Deliciosa crema de helado de avellana', 4.99, 12),
(17, 'Helado de Pistacho', 'Exquisito helado de pistacho con trozos de pistacho', 5.99, 13),
(18, 'Helado de Almendra', 'Delicioso helado de almendra con trozos de almendra', 4.99, 14),
(19, 'Helado de Maracuyá', 'Refrescante helado de maracuyá con sabor tropical', 4.99, 15),
(20, 'Helado de Coco', 'Cremoso helado de coco con trozos de coco rallado', 4.99, 16),
(21, 'Helado de Manzana', 'Helado de manzana con un toque de canela', 4.99, 17),
(22, 'Helado de Arándano', 'Helado de arándano con trozos de arándano', 4.99, 18),
(23, 'Helado de Frutos del Bosque', 'Mezcla de frutos del bosque en un helado', 5.99, 19),
(24, 'Helado de Tiramisú', 'Delicioso helado de tiramisú con sabor a café y cacao', 5.99, 20),
(25, 'Helado de Vainilla', 'Delicioso helado de vainilla cremoso', 3.99, 1),
(26, 'Helado de Coco Agua', 'Refrescante helado de coco con base de agua', 2.99, 16),
(27, 'Helado de Manzana Agua', 'Helado de manzana con base de agua', 2.99, 17),
(28, 'Helado de Maracuyá Agua', 'Delicioso helado de maracuyá con base de agua', 2.99, 20),
(29, 'Helado de Sandía y Limón Agua', 'Combinación refrescante de sandía y limón con base de agua', 2.99, 1),
(30, 'Helado de Piña y Coco Agua', 'Fusión tropical de piña y coco con base de agua', 2.99, 6),
(31, 'Helado de Mango y Fresa Agua', 'Mezcla exótica de mango y fresa con base de agua', 2.99, 3),
(32, 'Helado de Coco y Piña Agua', 'Dúo refrescante de coco y piña con base de agua', 2.99, 6),
(33, 'Helado de Sandía y Maracuyá Agua', 'Combina la frescura de la sandía y el maracuyá con base de agua', 2.99, 20),
(34, 'Helado de Limón y Menta Agua', 'Refrescante mezcla de limón y menta con base de agua', 2.99, 4),
(35, 'Helado de Piña y Mango Agua', 'Fusión tropical de piña y mango con base de agua', 2.99, 6),
(36, 'Helado de Coco y Maracuyá Agua', 'Deliciosa combinación de coco y maracuyá con base de agua', 2.99, 20),
(37, 'Helado de Sandía y Fresa Agua', 'Refrescante combinación de sandía y fresa con base de agua', 2.99, 3),
(38, 'Helado de Limón y Piña Agua', 'Combinación cítrica de limón y piña con base de agua', 2.99, 1),
(39, 'Helado de Mango y Maracuyá Agua', 'Mezcla tropical de mango y maracuyá con base de agua', 2.99, 20),
(40, 'Helado de Limón Agua', 'Refrescante helado de limón con base de agua', 2.99, 1),
(41, 'Helado de Fresa Agua', 'Delicioso helado de fresa con base de agua', 2.99, 3),
(42, 'Helado de Piña Agua', 'Exquisito helado de piña con base de agua', 2.99, 6),
(43, 'Helado de Sandía Agua', 'Refrescante helado de sandía con base de agua', 2.99, 7),
(44, 'Helado de Mango Agua', 'Delicioso helado de mango con base de agua', 2.99, 15);
=======
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'Helado (1 porcion)', 'Delicioso helado tradicional con un sabor a elegir', 8.00),
(2, 'Helado (2 porciones)', 'Delicioso helado tradicional con dos sabores a elegir.', 12.00),
(3, 'Helado (3 porciones)', 'Delicioso helado tradicional con tres sabores a elegir', 16.00),
(4, 'Paleta rellena', 'Deliciosa paleta rellena del sabor que desees', 8.50),
(5, 'Paleta de agua', 'Refrescante paleta en base de agua', 4.00);
>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `proveedores`
=======
-- Table structure for table `proveedores`
>>>>>>> master
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `telefono`, `email`) VALUES
=======

INSERT INTO proveedores (id, nombre, telefono, email) VALUES
>>>>>>> master
(1, 'Distribuidora de Lácteos S.A.', '123456789', 'info@distribuidoralacteos.com'),
(2, 'Frutas Frescas Ltda.', '987654321', 'contacto@frutasfrescas.com'),
(3, 'Embalajes y Envases Industriales', '555555555', 'ventas@embalajesindustriales.com'),
(4, 'Distribuidora de Chocolates Delicia', '999999999', 'info@chocolatesdelicia.com'),
(5, 'Productos de Azúcar y Endulzantes', '777777777', 'ventas@azucaryendulzantes.com'),
(6, 'Fábrica de Conos y Toppings', '111111111', 'info@conosytoppings.com'),
(7, 'Distribuidora de Frutos Secos', '222222222', 'ventas@frutossecosdistribucion.com'),
(8, 'Proveedora de Ingredientes Especiales', '444444444', 'contacto@ingredientesespeciales.com'),
(9, 'Proveedora de Salsas y Jarabes', '666666666', 'ventas@salsasyjarabes.com'),
(10, 'Distribuidora de Galletas y Barquillos', '888888888', 'info@galletasybarquillos.com');
<<<<<<< HEAD

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
=======
-- --------------------------------------------------------

--
-- Table structure for table `recetas`
>>>>>>> master
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `nombre_helado` varchar(50) NOT NULL,
  `unidades_por_lote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `nombre_helado`, `unidades_por_lote`) VALUES
=======
INSERT INTO recetas (id, nombre_helado, unidades_por_lote) VALUES
>>>>>>> master
(1, 'Helado de Vainilla', 10),
(2, 'Helado de Chocolate', 10),
(3, 'Helado de Fresa', 10),
(4, 'Helado de Menta', 10),
(5, 'Helado de Cookies and Cream', 10),
(6, 'Helado de Nuez', 10),
(7, 'Helado de Limón', 10),
(8, 'Helado de Coco', 10),
(9, 'Helado de Mango', 10),
(10, 'Helado de Pistacho', 10);

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `recetas_ingredientes`
=======
-- Table structure for table `recetas_ingredientes`
>>>>>>> master
--

CREATE TABLE `recetas_ingredientes` (
  `id` int(11) NOT NULL,
  `id_receta` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `cantidad_materia_prima` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `recetas_ingredientes`
--

=======
>>>>>>> master
INSERT INTO `recetas_ingredientes` (`id`, `id_receta`, `id_ingrediente`, `cantidad_materia_prima`) VALUES
(1, 1, 4, 100),
(2, 1, 1, 500),
(3, 2, 5, 200),
(4, 2, 1, 500),
(5, 3, 6, 300),
(6, 3, 1, 500),
(7, 4, 8, 150),
(8, 4, 1, 500),
(9, 5, 5, 200),
(10, 5, 1, 500),
(11, 5, 4, 50),
(12, 6, 7, 200),
(13, 6, 1, 500),
(14, 7, 4, 100),
(15, 7, 1, 500),
(16, 8, 8, 100),
(17, 8, 1, 500),
(18, 9, 6, 300),
(19, 9, 1, 500),
(20, 9, 3, 150),
(21, 10, 7, 200),
(22, 10, 1, 500),
(23, 10, 2, 200);

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabores`
--

CREATE TABLE `sabores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `sabores`
--

INSERT INTO `sabores` (`id`, `nombre`) VALUES
(1, 'Variados'),
(2, 'Chocolate'),
(3, 'Fresa'),
(4, 'Menta'),
(5, 'Cookies and Cream'),
(6, 'Mango'),
(7, 'Limón'),
(8, 'Plátano'),
(9, 'Nuez'),
(10, 'Café'),
(11, 'Caramelo'),
(12, 'Avellana'),
(13, 'Pistacho'),
(14, 'Almendra'),
(15, 'Maracuyá'),
(16, 'Coco'),
(17, 'Manzana'),
(18, 'Arándano'),
(19, 'Frutos del Bosque'),
(20, 'Vainilla');
=======
>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `sucursales`
=======
-- Table structure for table `sucursales`
>>>>>>> master
--

CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
<<<<<<< HEAD
-- Volcado de datos para la tabla `sucursales`
=======
-- Dumping data for table `sucursales`
>>>>>>> master
--

INSERT INTO `sucursales` (`id`, `nombre`, `direccion`) VALUES
(1, 'San Pedro', 'Calle Nicolas Acosta N° 420, Zona San Pedro'),
(2, 'Torre Ketal', 'Avenida Ballivián esq. calle 15, Zona Sur Calacoto');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `unidades_medida`
=======
-- Table structure for table `unidades_medida`
>>>>>>> master
--

CREATE TABLE `unidades_medida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `abreviacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
<<<<<<< HEAD
-- Volcado de datos para la tabla `unidades_medida`
=======
-- Dumping data for table `unidades_medida`
>>>>>>> master
--

INSERT INTO `unidades_medida` (`id`, `nombre`, `abreviacion`) VALUES
(1, 'Litro(s)', 'l'),
(2, 'Kilo(s)', 'kg');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `ventas`
=======
-- Table structure for table `ventas`
>>>>>>> master
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_sucursal`, `id_producto`, `fecha_venta`, `cantidad`, `total`) VALUES
(1, 1, 6, '2023-05-01', 5, 40.00),
(2, 2, 24, '2023-05-02', 3, 36.00),
(3, 1, 8, '2023-05-03', 2, 32.00),
(4, 2, 6, '2023-05-04', 4, 32.00),
(5, 1, 20, '2023-05-05', 6, 72.00),
(6, 2, 12, '2023-05-06', 1, 16.00),
(7, 1, 13, '2023-05-07', 3, 24.00),
(8, 2, 12, '2023-05-08', 2, 24.00),
(9, 1, 11, '2023-05-09', 5, 80.00),
(10, 2, 7, '2023-05-10', 4, 32.00),
(11, 1, 16, '2023-05-11', 3, 36.00),
(12, 2, 11, '2023-05-12', 1, 16.00),
(13, 1, 19, '2023-05-13', 2, 16.00),
(14, 2, 11, '2023-05-14', 6, 72.00),
(15, 1, 11, '2023-05-15', 4, 64.00),
(16, 2, 22, '2023-05-16', 3, 24.00),
(17, 1, 8, '2023-05-17', 5, 60.00),
(18, 2, 17, '2023-05-18', 2, 32.00),
(19, 1, 8, '2023-05-19', 4, 32.00),
(20, 2, 28, '2023-05-20', 1, 12.00),
(21, 1, 22, '2023-05-21', 5, 80.00),
(22, 2, 19, '2023-05-22', 3, 24.00),
(23, 2, 30, '2023-05-01', 2, 24.00),
(24, 1, 28, '2023-05-01', 3, 48.00),
(25, 2, 15, '2023-05-02', 1, 8.00),
(26, 1, 11, '2023-05-02', 4, 48.00),
(27, 2, 17, '2023-05-03', 2, 32.00),
(28, 1, 12, '2023-05-03', 3, 24.00),
(29, 2, 12, '2023-05-04', 1, 12.00),
(30, 1, 22, '2023-05-04', 4, 64.00),
(31, 2, 6, '2023-05-15', 6, 60.00),
(32, 1, 7, '2023-05-15', 3, 30.00),
(33, 2, 8, '2023-05-15', 2, 20.00),
(34, 1, 9, '2023-05-15', 1, 10.00),
(35, 2, 10, '2023-05-15', 5, 50.00),
(36, 1, 11, '2023-05-15', 4, 40.00),
(37, 2, 12, '2023-05-15', 3, 30.00),
(38, 1, 13, '2023-05-15', 2, 20.00),
(39, 2, 14, '2023-05-15', 1, 10.00),
(40, 1, 15, '2023-05-15', 6, 60.00),
(41, 2, 16, '2023-05-15', 5, 50.00),
(42, 1, 17, '2023-05-15', 3, 30.00),
(43, 2, 18, '2023-05-15', 2, 20.00),
(44, 1, 19, '2023-05-15', 1, 10.00),
(45, 2, 20, '2023-05-15', 4, 40.00),
(46, 1, 21, '2023-05-15', 6, 60.00),
(47, 2, 22, '2023-05-15', 3, 30.00),
(48, 1, 23, '2023-05-15', 2, 20.00),
(49, 2, 24, '2023-05-15', 1, 10.00),
(50, 1, 25, '2023-05-15', 5, 50.00),
(51, 2, 26, '2023-05-15', 4, 40.00),
(52, 1, 27, '2023-05-15', 3, 30.00),
(53, 2, 28, '2023-05-15', 2, 20.00),
(54, 1, 29, '2023-05-15', 1, 10.00),
(55, 2, 30, '2023-05-15', 6, 60.00),
(56, 1, 11, '2023-05-15', 5, 50.00),
(57, 2, 19, '2023-05-15', 3, 30.00),
(58, 1, 26, '2023-05-15', 2, 20.00),
(59, 2, 8, '2023-05-15', 1, 10.00),
(60, 1, 30, '2023-05-15', 4, 40.00),
(61, 1, 12, '2023-05-21', 5, 50.00),
(62, 2, 29, '2023-05-20', 3, 30.00),
(63, 1, 9, '2023-05-19', 2, 20.00),
(64, 2, 13, '2023-05-18', 1, 10.00),
(65, 1, 8, '2023-05-17', 4, 40.00),
(66, 2, 6, '2023-05-16', 6, 60.00),
(67, 1, 7, '2023-05-15', 3, 30.00),
(68, 2, 8, '2023-05-21', 2, 20.00),
(69, 1, 9, '2023-05-20', 4, 40.00),
(70, 2, 10, '2023-05-19', 3, 30.00),
(71, 1, 11, '2023-05-18', 1, 10.00),
(72, 2, 12, '2023-05-17', 5, 50.00),
(73, 1, 13, '2023-05-16', 3, 30.00),
(74, 2, 14, '2023-05-15', 2, 20.00),
(75, 1, 15, '2023-05-21', 4, 40.00),
(76, 2, 16, '2023-05-20', 6, 60.00),
(77, 1, 17, '2023-05-19', 3, 30.00),
(78, 2, 18, '2023-05-18', 1, 10.00),
(79, 1, 19, '2023-05-17', 5, 50.00),
(80, 2, 20, '2023-05-16', 4, 40.00),
(81, 1, 21, '2023-05-15', 3, 30.00),
(82, 2, 22, '2023-05-21', 2, 20.00),
(83, 1, 23, '2023-05-20', 1, 10.00),
(84, 2, 24, '2023-05-19', 5, 50.00),
(85, 1, 25, '2023-05-18', 3, 30.00),
(86, 2, 26, '2023-05-17', 4, 40.00),
(87, 1, 27, '2023-05-16', 2, 20.00),
(88, 2, 28, '2023-05-15', 3, 30.00),
(89, 1, 29, '2023-05-21', 6, 60.00),
(90, 2, 30, '2023-05-20', 3, 30.00);
=======
INSERT INTO `ventas` (`id`, `id_sucursal`, `id_producto`, `fecha_venta`, `cantidad`, `total`) VALUES
(1, 1, 1, '2023-05-01', 5, 40.00),
(2, 2, 2, '2023-05-02', 3, 36.00),
(3, 1, 3, '2023-05-03', 2, 32.00),
(4, 2, 1, '2023-05-04', 4, 32.00),
(5, 1, 2, '2023-05-05', 6, 72.00),
(6, 2, 3, '2023-05-06', 1, 16.00),
(7, 1, 1, '2023-05-07', 3, 24.00),
(8, 2, 2, '2023-05-08', 2, 24.00),
(9, 1, 3, '2023-05-09', 5, 80.00),
(10, 2, 1, '2023-05-10', 4, 32.00),
(11, 1, 2, '2023-05-11', 3, 36.00),
(12, 2, 3, '2023-05-12', 1, 16.00),
(13, 1, 1, '2023-05-13', 2, 16.00),
(14, 2, 2, '2023-05-14', 6, 72.00),
(15, 1, 3, '2023-05-15', 4, 64.00),
(16, 2, 1, '2023-05-16', 3, 24.00),
(17, 1, 2, '2023-05-17', 5, 60.00),
(18, 2, 3, '2023-05-18', 2, 32.00),
(19, 1, 1, '2023-05-19', 4, 32.00),
(20, 2, 2, '2023-05-20', 1, 12.00),
(21, 1, 3, '2023-05-21', 5, 80.00),
(22, 2, 1, '2023-05-22', 3, 24.00),
(23, 2, 2, '2023-05-01', 2, 24.00),
(24, 1, 3, '2023-05-01', 3, 48.00),
(25, 2, 1, '2023-05-02', 1, 8.00),
(26, 1, 2, '2023-05-02', 4, 48.00),
(27, 2, 3, '2023-05-03', 2, 32.00),
(28, 1, 1, '2023-05-03', 3, 24.00),
(29, 2, 2, '2023-05-04', 1, 12.00),
(30, 1, 3, '2023-05-04', 4, 64.00);
>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `ventas_empleados`
=======
-- Table structure for table `ventas_empleados`
>>>>>>> master
--

CREATE TABLE `ventas_empleados` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `ventas_empleados`
--

=======
>>>>>>> master
INSERT INTO `ventas_empleados` (`id`, `id_empleado`, `id_venta`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 1, 7),
(8, 2, 8),
(9, 3, 9),
(10, 4, 10),
(11, 5, 11),
(12, 6, 12),
(13, 1, 13),
(14, 2, 14),
(15, 3, 15),
(16, 4, 16),
(17, 5, 17),
(18, 6, 18),
(19, 1, 19),
(20, 2, 20),
(21, 3, 21),
(22, 4, 22),
(23, 2, 23),
(24, 1, 24),
(25, 2, 25),
(26, 1, 26),
(27, 2, 27),
(28, 1, 28),
(29, 2, 29),
(30, 1, 30);

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_por_cliente`
=======

-- --------------------------------------------------------

--
-- Table structure for table `ventas_por_cliente`
>>>>>>> master
--

CREATE TABLE `ventas_por_cliente` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

<<<<<<< HEAD
--
-- Volcado de datos para la tabla `ventas_por_cliente`
--

=======
>>>>>>> master
INSERT INTO `ventas_por_cliente` (`id`, `id_cliente`, `id_venta`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 1, 16),
(17, 2, 17),
(18, 3, 18),
(19, 4, 19),
(20, 5, 20),
(21, 6, 21),
(22, 2, 22),
(23, 2, 23),
(24, 1, 24),
(25, 2, 25),
(26, 1, 26),
(27, 2, 27),
(28, 1, 28),
(29, 2, 29),
(30, 1, 30);

<<<<<<< HEAD
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
=======

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistencias`
>>>>>>> master
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
<<<<<<< HEAD
-- Indices de la tabla `clientes`
=======
-- Indexes for table `clientes`
>>>>>>> master
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `empleados`
=======
-- Indexes for table `empleados`
>>>>>>> master
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `horarios`
=======
-- Indexes for table `horarios`
>>>>>>> master
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
<<<<<<< HEAD
-- Indices de la tabla `ingredientes`
=======
-- Indexes for table `ingredientes`
>>>>>>> master
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `inventario_ingredientes`
=======
-- Indexes for table `inventario_ingredientes`
>>>>>>> master
--
ALTER TABLE `inventario_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unidad_medida` (`id_unidad_medida`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
<<<<<<< HEAD
-- Indices de la tabla `inventario_productos`
=======
-- Indexes for table `inventario_productos`
>>>>>>> master
--
ALTER TABLE `inventario_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_helado` (`id_producto`),
  ADD KEY `id_sucursal` (`id_sucursal`) USING BTREE;

--
<<<<<<< HEAD
-- Indices de la tabla `ordenes_compra`
=======
-- Indexes for table `ordenes_compra`
>>>>>>> master
--
ALTER TABLE `ordenes_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
<<<<<<< HEAD
-- Indices de la tabla `productos`
=======
-- Indexes for table `productos`
>>>>>>> master
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `proveedores`
=======
-- Indexes for table `proveedores`
>>>>>>> master
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `recetas`
=======
-- Indexes for table `recetas`
>>>>>>> master
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `recetas_ingredientes`
=======
-- Indexes for table `recetas_ingredientes`
>>>>>>> master
--
ALTER TABLE `recetas_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_receta` (`id_receta`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
<<<<<<< HEAD
-- Indices de la tabla `sabores`
--
ALTER TABLE `sabores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursales`
=======
-- Indexes for table `sucursales`
>>>>>>> master
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `unidades_medida`
=======
-- Indexes for table `unidades_medida`
>>>>>>> master
--
ALTER TABLE `unidades_medida`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
-- Indices de la tabla `ventas`
=======
-- Indexes for table `ventas`
>>>>>>> master
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_helado` (`id_producto`),
  ADD KEY `id_sucursal` (`id_sucursal`);

--
<<<<<<< HEAD
-- Indices de la tabla `ventas_empleados`
=======
-- Indexes for table `ventas_empleados`
>>>>>>> master
--
ALTER TABLE `ventas_empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_venta` (`id_venta`);

--
<<<<<<< HEAD
-- Indices de la tabla `ventas_por_cliente`
=======
-- Indexes for table `ventas_por_cliente`
>>>>>>> master
--
ALTER TABLE `ventas_por_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_venta` (`id_venta`);

--
<<<<<<< HEAD
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inventario_ingredientes`
--
ALTER TABLE `inventario_ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inventario_productos`
--
ALTER TABLE `inventario_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `ordenes_compra`
--
ALTER TABLE `ordenes_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `recetas_ingredientes`
--
ALTER TABLE `recetas_ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `sabores`
--
ALTER TABLE `sabores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `sucursales`
=======
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventario_ingredientes`
--
ALTER TABLE `inventario_ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventario_productos`
--
ALTER TABLE `inventario_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordenes_compra`
--
ALTER TABLE `ordenes_compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recetas_ingredientes`
--
ALTER TABLE `recetas_ingredientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sucursales`
>>>>>>> master
--
ALTER TABLE `sucursales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `unidades_medida`
=======
-- AUTO_INCREMENT for table `unidades_medida`
>>>>>>> master
--
ALTER TABLE `unidades_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `ventas_empleados`
--
ALTER TABLE `ventas_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `ventas_por_cliente`
--
ALTER TABLE `ventas_por_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
=======
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ventas_empleados`
--
ALTER TABLE `ventas_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ventas_por_cliente`
--
ALTER TABLE `ventas_por_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asistencias`
>>>>>>> master
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Filtros para la tabla `horarios`
=======
-- Constraints for table `horarios`
>>>>>>> master
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Filtros para la tabla `inventario_ingredientes`
=======
-- Constraints for table `inventario_ingredientes`
>>>>>>> master
--
ALTER TABLE `inventario_ingredientes`
  ADD CONSTRAINT `inventario_ingredientes_ibfk_1` FOREIGN KEY (`id_unidad_medida`) REFERENCES `unidades_medida` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ingredientes_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`),
  ADD CONSTRAINT `inventario_ingredientes_ibfk_3` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`);

--
<<<<<<< HEAD
-- Filtros para la tabla `inventario_productos`
=======
-- Constraints for table `inventario_productos`
>>>>>>> master
--
ALTER TABLE `inventario_productos`
  ADD CONSTRAINT `inventario_productos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_productos_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`);

--
<<<<<<< HEAD
-- Filtros para la tabla `ordenes_compra`
=======
-- Constraints for table `ordenes_compra`
>>>>>>> master
--
ALTER TABLE `ordenes_compra`
  ADD CONSTRAINT `ordenes_compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordenes_compra_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `inventario_ingredientes` (`id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Filtros para la tabla `recetas_ingredientes`
=======
-- Constraints for table `recetas_ingredientes`
>>>>>>> master
--
ALTER TABLE `recetas_ingredientes`
  ADD CONSTRAINT `recetas_ingredientes_ibfk_1` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recetas_ingredientes_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Filtros para la tabla `ventas`
=======
-- Constraints for table `ventas`
>>>>>>> master
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`);

--
<<<<<<< HEAD
-- Filtros para la tabla `ventas_empleados`
=======
-- Constraints for table `ventas_empleados`
>>>>>>> master
--
ALTER TABLE `ventas_empleados`
  ADD CONSTRAINT `ventas_empleados_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_empleados_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Filtros para la tabla `ventas_por_cliente`
=======
-- Constraints for table `ventas_por_cliente`
>>>>>>> master
--
ALTER TABLE `ventas_por_cliente`
  ADD CONSTRAINT `ventas_por_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_por_cliente_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
