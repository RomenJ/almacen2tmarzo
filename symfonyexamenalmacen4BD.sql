-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2023 a las 19:48:29
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfonyexamenalmacen4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetosalmacen`
--

CREATE TABLE `objetosalmacen` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `entradaalmacen` datetime DEFAULT NULL,
  `salidaalmacen` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `objetosalmacen`
--

INSERT INTO `objetosalmacen` (`id`, `descripcion`, `cantidad`, `ubicacion`, `entradaalmacen`, `salidaalmacen`) VALUES
(1, 'Llave allen', 200, 'Pasillo', '2018-01-01 00:00:00', '2018-01-01 00:00:00'),
(2, 'Tornillo Lokkallror', 250, 'Estanteria', '2025-05-13 00:00:00', '2019-02-04 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroentrada`
--

CREATE TABLE `registroentrada` (
  `id` int(11) NOT NULL,
  `objetosalmacen_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registroentrada`
--

INSERT INTO `registroentrada` (`id`, `objetosalmacen_id`, `user_id`, `fecha`, `cantidad`) VALUES
(1, 1, 1, '2018-01-01 00:00:00', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosalida`
--

CREATE TABLE `registrosalida` (
  `id` int(11) NOT NULL,
  `objeto_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registrosalida`
--

INSERT INTO `registrosalida` (`id`, `objeto_id`, `user_id`, `fecha`, `cantidad`) VALUES
(1, 1, 1, '2018-01-01 00:00:00', 2),
(2, 1, 1, '2018-01-01 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `email`) VALUES
(1, 'pepe', '[\"ROLE_ADMIN\"]', '$2y$13$JlmPdT8I1IcN/riPDYUxTe8/3ihKw/7hZqrU8cCFMSkf0NTebc7Ay', 'pepe@pep.es'),
(2, 'romen', '[]', '$2y$13$2gwcPYXVmWoFf9rY/qTZ0ep8iPnvp.FGwtBhTrfNfd4rjasuCz.JW', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `objetosalmacen`
--
ALTER TABLE `objetosalmacen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroentrada`
--
ALTER TABLE `registroentrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ACD5365FD77BC3B4` (`objetosalmacen_id`),
  ADD KEY `IDX_ACD5365FA76ED395` (`user_id`);

--
-- Indices de la tabla `registrosalida`
--
ALTER TABLE `registrosalida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B9B92A1076F5CD27` (`objeto_id`),
  ADD KEY `IDX_B9B92A10A76ED395` (`user_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objetosalmacen`
--
ALTER TABLE `objetosalmacen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registroentrada`
--
ALTER TABLE `registroentrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registrosalida`
--
ALTER TABLE `registrosalida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registroentrada`
--
ALTER TABLE `registroentrada`
  ADD CONSTRAINT `FK_ACD5365FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_ACD5365FD77BC3B4` FOREIGN KEY (`objetosalmacen_id`) REFERENCES `objetosalmacen` (`id`);

--
-- Filtros para la tabla `registrosalida`
--
ALTER TABLE `registrosalida`
  ADD CONSTRAINT `FK_B9B92A1076F5CD27` FOREIGN KEY (`objeto_id`) REFERENCES `objetosalmacen` (`id`),
  ADD CONSTRAINT `FK_B9B92A10A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
