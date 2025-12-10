-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2025 a las 19:23:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interesados`
--

CREATE TABLE `interesados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo` enum('vida','auto','medico') NOT NULL,
  `comentarios` text DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `interesados`
--

INSERT INTO `interesados` (`id`, `nombre`, `email`, `telefono`, `tipo`, `comentarios`, `fecha_registro`) VALUES
(7, 'Moises Casanova', 'moi@example.com', '99993787874', 'auto', 'Quiero asegurar mi vehículo ', '2025-12-10 17:50:14'),
(13, 'Moises Casanova', 'moi@example.com', '9993787874', 'vida', 'suiodhnhasiudas', '2025-12-10 18:13:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `vehicle` varchar(150) NOT NULL,
  `year` int(4) NOT NULL,
  `plates` varchar(30) NOT NULL,
  `vin` varchar(50) DEFAULT NULL,
  `payment_type` enum('transferencia','tarjeta','efectivo') NOT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `receipt` longblob DEFAULT NULL,
  `receipt_type` varchar(50) DEFAULT NULL,
  `receipt_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `receipt_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `name`, `email`, `phone`, `vehicle`, `year`, `plates`, `vin`, `payment_type`, `bank`, `message`, `receipt`, `receipt_type`, `receipt_name`, `created_at`, `receipt_path`) VALUES
(12, 'Moises Casanova', 'casanovamoi166@gmail.com', '99993787874', 'Mazda, Mazda 2', 2023, 'HYN123A', '86464', 'transferencia', 'BBVA', 'Auto con 2 años de uso, no presenta ningún malestar o algo fuera de lo normal', NULL, NULL, NULL, '2025-12-10 17:48:03', 'recibos/20251210184803_Captura de pantalla 2025-09-08 193217.png'),
(13, 'Moises Casanova', 'casanovamoi166@gmail.com', '99993787874', 'Mazda, Mazda 2', 2023, 'HYN123A', '86464', 'transferencia', 'BBVA', 'Ya pago', NULL, NULL, NULL, '2025-12-10 18:13:52', 'recibos/20251210191352_Captura de pantalla 2025-09-05 151311.png'),
(14, 'Moises Casanova', 'casanovamoi166@gmail.com', '99993787874', 'Mazda, Mazda 2', 2023, 'HYN123A', '86464', 'tarjeta', 'BBVA', '', NULL, NULL, NULL, '2025-12-10 18:14:34', 'recibos/20251210191434_Equipo 8-MOISES BENJAMIN CASANOVA UC_329209_0.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `usuario`, `password`, `fecha_registro`) VALUES
(1, 'Moises Casanova', 'moises@example.com', 'moi', '12345', '2025-12-09 21:36:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `interesados`
--
ALTER TABLE `interesados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `interesados`
--
ALTER TABLE `interesados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
