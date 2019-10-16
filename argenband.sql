-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2019 a las 19:30:16
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `argenband`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_nombre` varchar(50) NOT NULL,
  `album_descripcion` varchar(1000) NOT NULL,
  `album_imagen` varchar(50) NOT NULL,
  `canciones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `cancion_id` int(11) NOT NULL,
  `nombre_cancion` varchar(100) NOT NULL,
  `duracion_cancion` tinyint(4) NOT NULL,
  `archivo_cancion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_publicaciones`
--

CREATE TABLE `categoria_publicaciones` (
  `pub_id_categoria` int(11) NOT NULL,
  `categoria_nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_publicaciones`
--

INSERT INTO `categoria_publicaciones` (`pub_id_categoria`, `categoria_nombre`) VALUES
(1, 'Discografia '),
(2, 'Indumentaria'),
(3, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos_musica`
--

CREATE TABLE `generos_musica` (
  `genero_id` int(11) NOT NULL,
  `genero_musica` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos_musica`
--

INSERT INTO `generos_musica` (`genero_id`, `genero_musica`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Funk'),
(4, 'Hip Hop'),
(5, 'Electronica'),
(6, 'Cumbia'),
(7, 'Heavy Metal'),
(8, 'Reggae'),
(9, 'Jazz'),
(10, 'Trap'),
(11, 'Reggaeton'),
(12, 'Blues');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `imagen_id` int(11) NOT NULL,
  `nombre_imagen` varchar(100) NOT NULL,
  `descripcion_imagen` varchar(1000) NOT NULL,
  `archivo_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `pub_id` int(11) NOT NULL,
  `banda_id` int(11) NOT NULL,
  `pub_id_categoria` int(11) NOT NULL,
  `pub_titulo` varchar(50) NOT NULL,
  `pub_precio` decimal(10,0) NOT NULL,
  `pub_descripcion` varchar(1000) NOT NULL,
  `pub_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_password` varchar(20) NOT NULL,
  `usuario_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_password`, `usuario_email`) VALUES
(5, 'asd', 'asd', 'asd@sasd.cm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_banda`
--

CREATE TABLE `usuario_banda` (
  `usuario_id` int(11) NOT NULL,
  `banda_id` int(11) NOT NULL,
  `genero_id` int(11) NOT NULL,
  `descripcion_banda` varchar(1000) NOT NULL,
  `discografia_id` int(11) NOT NULL,
  `videos_id` int(11) NOT NULL,
  `imagenes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_fan`
--

CREATE TABLE `usuario_fan` (
  `usuario_id` int(11) NOT NULL,
  `apellido_fan` varchar(50) NOT NULL,
  `fan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_fan`
--

INSERT INTO `usuario_fan` (`usuario_id`, `apellido_fan`, `fan_id`) VALUES
(5, 'asd', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `nombre_video` varchar(100) NOT NULL,
  `descripcion_video` varchar(1000) NOT NULL,
  `archivo_video` varchar(100) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `canciones_id` (`canciones_id`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`cancion_id`);

--
-- Indices de la tabla `categoria_publicaciones`
--
ALTER TABLE `categoria_publicaciones`
  ADD PRIMARY KEY (`pub_id_categoria`);

--
-- Indices de la tabla `generos_musica`
--
ALTER TABLE `generos_musica`
  ADD PRIMARY KEY (`genero_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`imagen_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `banda_id` (`banda_id`),
  ADD KEY `pub_id_categoria` (`pub_id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indices de la tabla `usuario_banda`
--
ALTER TABLE `usuario_banda`
  ADD PRIMARY KEY (`banda_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `genero_id` (`genero_id`),
  ADD KEY `banda_id` (`banda_id`),
  ADD KEY `discografia_id` (`discografia_id`),
  ADD KEY `videos_id` (`videos_id`,`imagenes_id`),
  ADD KEY `imagenes_id` (`imagenes_id`);

--
-- Indices de la tabla `usuario_fan`
--
ALTER TABLE `usuario_fan`
  ADD PRIMARY KEY (`fan_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `fan_id` (`fan_id`),
  ADD KEY `fan_id_2` (`fan_id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `cancion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria_publicaciones`
--
ALTER TABLE `categoria_publicaciones`
  MODIFY `pub_id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `generos_musica`
--
ALTER TABLE `generos_musica`
  MODIFY `genero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `imagen_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario_banda`
--
ALTER TABLE `usuario_banda`
  MODIFY `banda_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`canciones_id`) REFERENCES `cancion` (`cancion_id`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_2` FOREIGN KEY (`pub_id_categoria`) REFERENCES `categoria_publicaciones` (`pub_id_categoria`);

--
-- Filtros para la tabla `usuario_banda`
--
ALTER TABLE `usuario_banda`
  ADD CONSTRAINT `usuario_banda_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`),
  ADD CONSTRAINT `usuario_banda_ibfk_2` FOREIGN KEY (`genero_id`) REFERENCES `generos_musica` (`genero_id`),
  ADD CONSTRAINT `usuario_banda_ibfk_3` FOREIGN KEY (`banda_id`) REFERENCES `publicaciones` (`pub_id`),
  ADD CONSTRAINT `usuario_banda_ibfk_4` FOREIGN KEY (`discografia_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `usuario_banda_ibfk_5` FOREIGN KEY (`imagenes_id`) REFERENCES `imagenes` (`imagen_id`),
  ADD CONSTRAINT `usuario_banda_ibfk_6` FOREIGN KEY (`videos_id`) REFERENCES `videos` (`video_id`);

--
-- Filtros para la tabla `usuario_fan`
--
ALTER TABLE `usuario_fan`
  ADD CONSTRAINT `usuario_fan_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`);

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario_banda` (`usuario_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
