-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 05:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splendid`
--
CREATE DATABASE IF NOT EXISTS `splendid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `splendid`;

-- --------------------------------------------------------

--
-- Table structure for table `asistencias`
--

CREATE TABLE `asistencias` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `asistio` tinyint(1) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO asistencias (id, fecha, asistio, id_empleado) VALUES
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
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO clientes (id, nombre, apellido, telefono, email) VALUES
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
-- Table structure for table `empleados`
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

INSERT INTO empleados (id, nombre, apellido, fecha_nacimiento, direccion, telefono, email, cargo, sueldo, fecha_contratacion, imagen) VALUES
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
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO horarios (id, hora_entrada, hora_salida, id_empleado) VALUES
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
-- --------------------------------------------------------

--
-- Table structure for table `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_unidad_medida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `ingredientes` (`id`, `nombre`, `precio`, `id_unidad_medida`) VALUES
(1, 'Leche', 2.50, 1),
(2, 'Crema', 3.00, 1),
(3, 'Azúcar', 1.20, 2),
(4, 'Vainilla', 0.80, 1),
(5, 'Chocolate', 2.50, 2),
(6, 'Fresas', 4.00, 2),
(7, 'Nueces', 3.50, 2),
(8, 'Menta', 1.50, 1);


-- --------------------------------------------------------

--
-- Table structure for table `inventario_ingredientes`
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
-- Table structure for table `inventario_productos`
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
-- Dumping data for table `inventario_productos`
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
(10, 2, 5, 13, 0, '2023-05-01');



-- --------------------------------------------------------

--
-- Table structure for table `ordenes_compra`
--

CREATE TABLE `ordenes_compra` (
  `id` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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


-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


INSERT INTO proveedores (id, nombre, telefono, email) VALUES
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
-- --------------------------------------------------------

--
-- Table structure for table `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `nombre_helado` varchar(50) NOT NULL,
  `unidades_por_lote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO recetas (id, nombre_helado, unidades_por_lote) VALUES
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
-- Table structure for table `recetas_ingredientes`
--

CREATE TABLE `recetas_ingredientes` (
  `id` int(11) NOT NULL,
  `id_receta` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `cantidad_materia_prima` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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


-- --------------------------------------------------------

--
-- Table structure for table `sucursales`
--

CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `direccion`) VALUES
(1, 'San Pedro', 'Calle Nicolas Acosta N° 420, Zona San Pedro'),
(2, 'Torre Ketal', 'Avenida Ballivián esq. calle 15, Zona Sur Calacoto');

-- --------------------------------------------------------

--
-- Table structure for table `unidades_medida`
--

CREATE TABLE `unidades_medida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `abreviacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `unidades_medida`
--

INSERT INTO `unidades_medida` (`id`, `nombre`, `abreviacion`) VALUES
(1, 'Litro(s)', 'l'),
(2, 'Kilo(s)', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `ventas_empleados`
--

CREATE TABLE `ventas_empleados` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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


-- --------------------------------------------------------

--
-- Table structure for table `ventas_por_cliente`
--

CREATE TABLE `ventas_por_cliente` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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


--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indexes for table `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventario_ingredientes`
--
ALTER TABLE `inventario_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unidad_medida` (`id_unidad_medida`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
-- Indexes for table `inventario_productos`
--
ALTER TABLE `inventario_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_helado` (`id_producto`),
  ADD KEY `id_sucursal` (`id_sucursal`) USING BTREE;

--
-- Indexes for table `ordenes_compra`
--
ALTER TABLE `ordenes_compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recetas_ingredientes`
--
ALTER TABLE `recetas_ingredientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_receta` (`id_receta`),
  ADD KEY `id_ingrediente` (`id_ingrediente`);

--
-- Indexes for table `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unidades_medida`
--
ALTER TABLE `unidades_medida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_helado` (`id_producto`),
  ADD KEY `id_sucursal` (`id_sucursal`);

--
-- Indexes for table `ventas_empleados`
--
ALTER TABLE `ventas_empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indexes for table `ventas_por_cliente`
--
ALTER TABLE `ventas_por_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_venta` (`id_venta`);

--
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
--
ALTER TABLE `sucursales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unidades_medida`
--
ALTER TABLE `unidades_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
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
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inventario_ingredientes`
--
ALTER TABLE `inventario_ingredientes`
  ADD CONSTRAINT `inventario_ingredientes_ibfk_1` FOREIGN KEY (`id_unidad_medida`) REFERENCES `unidades_medida` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_ingredientes_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`),
  ADD CONSTRAINT `inventario_ingredientes_ibfk_3` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`);

--
-- Constraints for table `inventario_productos`
--
ALTER TABLE `inventario_productos`
  ADD CONSTRAINT `inventario_productos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inventario_productos_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`);

--
-- Constraints for table `ordenes_compra`
--
ALTER TABLE `ordenes_compra`
  ADD CONSTRAINT `ordenes_compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordenes_compra_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `inventario_ingredientes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recetas_ingredientes`
--
ALTER TABLE `recetas_ingredientes`
  ADD CONSTRAINT `recetas_ingredientes_ibfk_1` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recetas_ingredientes_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id`);

--
-- Constraints for table `ventas_empleados`
--
ALTER TABLE `ventas_empleados`
  ADD CONSTRAINT `ventas_empleados_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_empleados_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ventas_por_cliente`
--
ALTER TABLE `ventas_por_cliente`
  ADD CONSTRAINT `ventas_por_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_por_cliente_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
