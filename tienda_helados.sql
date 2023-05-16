-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 07:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda_helados`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
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
-- Dumping data for table `empleados`
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
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`) VALUES
(1, 'marco.reynolds', '123marco'),
(2, 'alejandra.landaeta', '123alejandra'),
(3, 'luis.carvajal', '123luis'),
(4, 'edward.gomez', '123edward'),
(5, 'edely.tito', '123edely');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
