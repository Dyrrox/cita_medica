-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2026 a las 16:29:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointment`
--

CREATE TABLE `appointment` (
  `codcit` int(11) NOT NULL,
  `dates` date NOT NULL,
  `hour` time NOT NULL,
  `codpaci` int(11) NOT NULL,
  `coddoc` int(11) NOT NULL,
  `codespe` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `appointment`
--

INSERT INTO `appointment` (`codcit`, `dates`, `hour`, `codpaci`, `coddoc`, `codespe`, `estado`, `fecha_create`) VALUES
(2, '2022-03-31', '09:00:00', 1, 2, 4, '1', '2022-03-31 05:57:09'),
(4, '2026-10-27', '19:41:00', 1, 4, 10, '1', '2026-10-27 22:40:03'),
(10, '2026-10-29', '10:12:00', 4, 6, 20, '1', '2026-10-28 12:32:00'),
(11, '2026-10-16', '11:56:00', 1, 4, 10, '0', '2026-10-28 19:55:32'),
(12, '2026-10-16', '11:56:00', 1, 4, 10, '0', '2026-10-28 14:56:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `codpaci` int(11) NOT NULL,
  `dnipa` char(8) NOT NULL,
  `nombrep` varchar(50) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `seguro` char(10) NOT NULL,
  `tele` char(9) NOT NULL,
  `sexo` char(15) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` char(1) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`codpaci`, `dnipa`, `nombrep`, `apellidop`, `seguro`, `tele`, `sexo`, `usuario`, `clave`, `cargo`, `estado`, `fecha_create`) VALUES
(1, '75745848', 'Manuel', 'Aparicio', 'Si', '999993939', 'Femenino', 'manu', '123456', '2', '1', '2026-10-28 15:17:09'),
(2, '98584548', 'Leonardo', 'Pazos', 'Si', '959595959', 'Masculino', 'leonar1', '123456', '2', '1', '2026-10-28 07:28:14'),
(4, '11111111', 'Daniel', 'Fernandez', 'Si', '999333666', 'Masculino', 'dan123', '123456', '2', '1', '2026-10-28 12:29:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `coddoc` int(11) NOT NULL,
  `dnidoc` char(8) NOT NULL,
  `nomdoc` varchar(50) NOT NULL,
  `apedoc` varchar(50) NOT NULL,
  `codespe` int(11) NOT NULL,
  `sexo` char(15) NOT NULL,
  `telefo` char(9) NOT NULL,
  `fechanaci` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `naciona` varchar(35) NOT NULL,
  `estado` char(15) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`coddoc`, `dnidoc`, `nomdoc`, `apedoc`, `codespe`, `sexo`, `telefo`, `fechanaci`, `correo`, `naciona`, `estado`, `fecha_create`) VALUES
(2, '74747384', 'Manuel', 'Alban', 4, 'Masculino', '998766554', '1995-09-09', 'maria77@gmail.com', 'Extranjera(o)', '1', '2026-10-28 15:20:54'),
(3, '78493949', 'jose', 'martinez juarez', 3, 'Masculino', '988833333', '2022-03-30', '', 'Peruana(o)', '1', '2022-03-31 01:43:25'),
(4, '22222222', 'Luis', 'Martinez', 10, 'Masculino', '922222222', '1997-01-02', '', 'Peruana(o)', '1', '2026-10-28 09:55:18'),
(6, '34786598', 'Erika', 'Rojas', 20, 'Femenino', '930234856', '1993-03-11', 'erika12@gmail.com', 'Peruana(o)', '1', '2026-10-28 17:12:01'),
(7, '34759822', 'Maria', 'Cruz', 7, 'Femenino', '934287564', '1995-01-21', 'maria77@gmail.com', 'Extranjera(o)', '1', '2026-10-28 12:44:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `codhor` int(11) NOT NULL,
  `nomhor` varchar(30) NOT NULL,
  `coddoc` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  `fere` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`codhor`, `nomhor`, `coddoc`, `estado`, `fere`) VALUES
(2, 'solo martes', 3, '1', '2022-03-31 01:46:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialty`
--

CREATE TABLE `specialty` (
  `codespe` int(11) NOT NULL,
  `nombrees` varchar(50) NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `specialty`
--

INSERT INTO `specialty` (`codespe`, `nombrees`, `fecha_create`) VALUES
(1, 'Cirujia', '2021-07-05 15:56:12'),
(2, 'Cardiologia', '2020-09-28 14:00:07'),
(3, 'Otorrino', '2020-09-28 02:41:46'),
(4, 'Pediatría', '2020-09-28 02:41:59'),
(5, 'Gastroenterología', '2020-09-28 02:42:27'),
(7, ' Infectología', '2020-09-28 02:43:37'),
(8, 'Enfermería', '2020-09-28 02:44:05'),
(9, 'ITS', '2020-09-28 02:44:15'),
(10, 'Obstetricia', '2020-09-28 02:44:36'),
(11, 'Odontologia', '2020-09-28 02:44:52'),
(12, 'Oftalmología', '2020-09-28 02:45:02'),
(20, 'Geriatría', '2026-10-28 17:07:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `clave`, `cargo`) VALUES
(1, 'ruby casillas', 'grace1804', 'rubi_casillaas31@hotmail.com', '123456', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`codcit`),
  ADD KEY `codpaci` (`codpaci`,`coddoc`,`codespe`),
  ADD KEY `coddoc` (`coddoc`),
  ADD KEY `codespe` (`codespe`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`codpaci`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`coddoc`),
  ADD KEY `codespe` (`codespe`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`codhor`),
  ADD KEY `coddoc` (`coddoc`);

--
-- Indices de la tabla `specialty`
--
ALTER TABLE `specialty`
  ADD PRIMARY KEY (`codespe`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointment`
--
ALTER TABLE `appointment`
  MODIFY `codcit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `codpaci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `coddoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `codhor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `specialty`
--
ALTER TABLE `specialty`
  MODIFY `codespe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`codpaci`) REFERENCES `customers` (`codpaci`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`coddoc`) REFERENCES `doctor` (`coddoc`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`codespe`) REFERENCES `specialty` (`codespe`);

--
-- Filtros para la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`codespe`) REFERENCES `specialty` (`codespe`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`coddoc`) REFERENCES `doctor` (`coddoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
