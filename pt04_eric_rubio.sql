-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 13:44:09
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
-- Base de datos: `pt04_eric_rubio`
--
DROP DATABASE IF EXISTS `pt04_eric_rubio`;
CREATE DATABASE `pt04_eric_rubio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt04_eric_rubio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `article` varchar(50) NOT NULL,
  `id_usuari` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuari` (`id_usuari`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `articles`:
--   `id_usuari`
--       `usuaris` -> `id`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE IF NOT EXISTS `usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `correu` varchar(30) NOT NULL,
  `contrasenya` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correu` (`correu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONES PARA LA TABLA `usuaris`:
--


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuaris` (`id`);
COMMIT;


--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`nom`, `correu`, `contrasenya`) VALUES
('eric', 'e.rubio@sapalomera.cat', '$2y$10$bq1wkLDAlofB82Ak5NrZc.Gb6TjEEjzrv.agWKC9BWInn.R/CKkZG'),
('Biel', 'b.rubio@sapalomera.cat', '$2y$10$riydF4dYWN9nIAiv0GaC7.E08GJZ.T3z6MplhD7a.aVUVVq/3tQcW'),
('Pere Pi', 'p.pi@sapalomera.cat', '$2y$10$8xosBEAEz.1sQRH5dJLFxOkKFeJCmZKprhHjiesEuId0ZyoBnJNBm'),
('Marta Mas', 'm.mas@sapalomera.cat', '$2y$10$GMpMjPRafy0R0BEOIJB5JeHJQ4YuRFloabIKQIZd3IhJ1azFEA75C'),
('Dani', 'd.torres@sapalomera.cat', '$2y$10$uQs0SGSUpx6q99lDALzZE.Lyvd/MVJRTi1PsQYYjJlFs1.u/yz7zm');


--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`article`, `id_usuari`) VALUES
('Nou 3', 1),
('Hola', 1),
('Article6', 1),
('Article7', 1),
('Article8', 1),
('Article9', 1),
( 'Article10', 1),
( 'Article11', 1),
( 'Article12', 1),
( 'Article13', 1),
( 'Article14', 1),
( 'Article15', 1),
( 'Article16', 1),
( 'Article17', 1),
( 'Article18', 1),
( 'Article19', 1),
( 'Article20', 1),
( 'Article21', 1),
( 'Article22', 1),
( 'Article23', 1),
( 'Article24', 1),
( 'Article25', 1),
( 'Nou Article', 4),
( 'Hola', 1),
( 'Hola', 1),
( 'Adeu', 1),
( 'REs', 1),
( 'REs', 1),
( 'REs', 1),
( 'Bona tarda', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
