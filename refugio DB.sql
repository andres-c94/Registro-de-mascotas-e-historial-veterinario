-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2021 a las 04:08:17
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `refugio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chequeoveterinario`
--

CREATE TABLE `chequeoveterinario` (
  `id` int(11) NOT NULL,
  `diagnostico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_mascota` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_veterinario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` int(50) NOT NULL,
  `resultado` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `chequeoveterinario`
--

INSERT INTO `chequeoveterinario` (`id`, `diagnostico`, `nombre_mascota`, `nombre_veterinario`, `cedula`, `resultado`, `fecha`) VALUES
(4, 'Esterilizacion', 'lupe', 'andres gaviria', 1032455344, 'se realizo esterilizaciÃ³n de manera correcta', '2021-03-22'),
(5, 'Higiene', 'granito', 'Jenny Bernal', 52088481, 'se baÃ±o y se le eliminaron pulgas y garrapatas', '2021-03-04'),
(6, 'Operacion', 'arnulfo', 'Luis Garcia', 52343456, 'se le parctico operacion en una pata ya que lo atropello un carro, quedo con yeso', '2021-03-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroadopcion`
--

CREATE TABLE `registroadopcion` (
  `id` int(200) NOT NULL,
  `cedula` int(200) NOT NULL,
  `nombre_adoptante` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(50) NOT NULL,
  `nombre_de_mascota_adoptada` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_adopcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registroadopcion`
--

INSERT INTO `registroadopcion` (`id`, `cedula`, `nombre_adoptante`, `direccion`, `telefono`, `nombre_de_mascota_adoptada`, `fecha_adopcion`) VALUES
(8, 1032455433, 'luis perez', 'crr 38 a no 25 51', 2147483647, 'comodoro', '2021-03-16'),
(9, 52088456, 'betty maria', 'crr 54 no 52 51', 2147483647, 'pecas', '2021-03-17'),
(10, 78546783, 'Camila Hernadez', 'cll 50 Ã±o 45 54 b ', 2147483647, 'toby', '2021-03-09'),
(11, 43567589, 'Andres Garcia', 'cll 54 bis no 50 82', 2147483647, 'katia', '2021-03-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chequeoveterinario`
--
ALTER TABLE `chequeoveterinario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroadopcion`
--
ALTER TABLE `registroadopcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chequeoveterinario`
--
ALTER TABLE `chequeoveterinario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registroadopcion`
--
ALTER TABLE `registroadopcion`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
