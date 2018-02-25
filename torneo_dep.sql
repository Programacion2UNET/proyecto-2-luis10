-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2018 a las 02:55:53
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `torneo_dep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `Nombre_Equipo` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_creacion` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_responsable` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sitio_web` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`Nombre_Equipo`, `fecha_creacion`, `dir_responsable`, `correo`, `sitio_web`, `usuario`, `clave`) VALUES
('Administrador', '2018-02-04', 'Venezuela', 'ojoblanco@gmail.com', 'ojoblanco.com', '#ojoblanco', '1234'),
('barcelona', '2018-02-05', 'espa?a', 'barcelona@gmail.com', 'barcelona.com', 'barcelona', '1547');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_torneo`
--

CREATE TABLE `registro_torneo` (
  `torneo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cant_jugadores` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nom_equipo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_creacion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `web` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_resp` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro_torneo`
--

INSERT INTO `registro_torneo` (`torneo`, `categoria`, `cant_jugadores`, `usuario`, `clave`, `nom_equipo`, `fecha_creacion`, `web`, `dir_resp`, `correo`) VALUES
('futbol', 'principiante', '5', 'barcelona', '1547', 'barcelona', '2018-02-14', 'barcelona.com', 'espa?a', 'barcelona@gmail.com'),
('voleibol', 'principiante', '5', 'barcelona', '1547', 'barcelona', '2018-02-14', 'barcelona.com', 'espa?a', 'barcelona@gmail.com'),
('FUTBOL', 'principiante', '3', 'barcelona', '1547', 'barcelona', '2018-02-05', 'barcelona.com', 'espa?a', 'barcelona@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos_fecha`
--

CREATE TABLE `torneos_fecha` (
  `torneo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `torneos_fecha`
--

INSERT INTO `torneos_fecha` (`torneo`, `fecha`) VALUES
('FUTBOL', '2018-02-06'),
('tenis', '2018-02-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
