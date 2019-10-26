-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2019 a las 21:13:52
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wikiserie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombreGen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombreGen`) VALUES
(1, 'Acción'),
(6, 'Terror'),
(7, 'Comedia'),
(9, 'Drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `sinopsis` varchar(400) NOT NULL,
  `actor_principal` varchar(200) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`id_serie`, `nombre`, `sinopsis`, `actor_principal`, `img`, `id_genero`) VALUES
(5, 'Arrow ', 'La serie sigue a Oliver Queen (Stephen Amell), el multimillonario playboy de Ciudad Starling, que es descubierto en la misteriosa isla de Lian Yu cinco años después de que naufragara con su padre.', 'Stephen Amell', 'public/images/arrow.png', 1),
(6, 'Big Bang Theory', 'Leonard y Sheldon son científicos destacados en Caltech, amigos a su vez de Howard y Raj, que son presentados como unos completos geeks, alejados de las inquietudes y problemas de la gente común. En el curso de la serie se muestra la dificultad de los protagonistas masculinos para relacionarse con personas de fuera de su entorno, principalmente de sexo femenino, dando lugar a situaciones cómicas.', 'Jim Parsons', 'public/images/bigBang.png', 7),
(10, 'Stranger Things', 'La historia arranca durante la década de los 80, en el pueblo ficticio de Hawkins, Indiana, cuando un niño llamado Will Byers desaparece, hecho que destapa los extraños sucesos que tienen lugar en la zona, producto de una serie de experimentos que realiza el gobierno en un laboratorio científico cercano.', 'Millie Bobby Brown', 'public/images/stranger.png', 6),
(11, 'Supernatural', 'La trama se remonta 22 años antes, cuando una noche, Mary Winchester es asesinada y quemada en su propia casa, hecho que provoca que su esposo John Winchester se embarque en un interminable viaje en busca de respuestas. ', 'Jared Padalecki', 'public/images/supernatural.png', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `user` varchar(60) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `user`, `pass`) VALUES
(1, 'Yanina', 'yanina', '$2y$10$oZXXj4cRzqTSpP1gDKOUFeOWC/ZUISP.hIDxS.cNCe8RVtiUEbTYm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`),
  ADD KEY `fk_genero` (`id_genero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `fk_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
