-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-01-2023 a las 20:32:30
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `templatehtmlphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_cap`
--

CREATE TABLE `curso_cap` (
  `id` int NOT NULL,
  `curso_id` int NOT NULL,
  `episodio` int NOT NULL,
  `iframe` text COLLATE utf8mb4_bin,
  `actual` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `curso_cap`
--

INSERT INTO `curso_cap` (`id`, `curso_id`, `episodio`, `iframe`, `actual`) VALUES
(1, 4, 1, 'https://www.youtube.com/embed/cqMfPS8jPys', 1),
(3, 4, 2, 'https://www.youtube.com/embed/TNQleomUw6U', 0),
(7, 4, 3, 'https://www.youtube.com/embed/RdnS55MbdY4', 0),
(8, 4, 4, 'https://www.youtube.com/embed/IRbEXqBBOCo', 0),
(9, 4, 5, 'https://www.youtube.com/embed/lAoeALwWKo0', 0),
(10, 3, 1, 'https://www.youtube.com/embed/je1r0Qaz0Gs', 0),
(11, 3, 2, 'https://www.youtube.com/embed/JGN5TqaqnRg', 0),
(12, 3, 3, 'https://www.youtube.com/embed/5-SsRpGa9NM', 0),
(13, 3, 4, 'https://www.youtube.com/embed/iCoJC3P0ftQ', 0),
(14, 3, 5, 'https://www.youtube.com/embed/mppzB_PJR4Q', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categorias`
--

CREATE TABLE `tm_categorias` (
  `cat_id` int NOT NULL,
  `categoria` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `tm_categorias`
--

INSERT INTO `tm_categorias` (`cat_id`, `categoria`, `descripcion`) VALUES
(1, 'desarrollo web', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso`
--

CREATE TABLE `tm_curso` (
  `cur_id` int NOT NULL,
  `cur_titulo` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `id_cat` int NOT NULL,
  `cur_img` varchar(500) COLLATE utf8mb4_bin DEFAULT NULL,
  `cur_url` varchar(600) COLLATE utf8mb4_bin DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `destacado` int NOT NULL COMMENT '1.- Destacado 0.- Sin destacar',
  `fecha` date DEFAULT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `tm_curso`
--

INSERT INTO `tm_curso` (`cur_id`, `cur_titulo`, `descripcion`, `id_cat`, `cur_img`, `cur_url`, `slug`, `destacado`, `fecha`, `estado`) VALUES
(1, 'desarrollo web php-mysql', 'El Desarrollo es una de las Carreras Mas Demandadas que esperas Aprende Con Nosotros ', 1, 'imgs/news/php-mysql.png', NULL, 'desarrollo-php-mysql', 1, '2023-01-14', 1),
(2, 'laravel + angular', NULL, 1, 'imgs/news/laravel-angular.jpg', NULL, 'laravel-angular', 1, '2023-01-12', 1),
(3, 'vue js', 'Aprenderas este Gran Framework Front End ¡Impulsa tu Carrera!', 1, 'imgs/news/Vuejs.jpg', NULL, 'vue-js', 0, '2023-01-12', 1),
(4, 'html', 'Aprende uno de los pilares de la Programacion Web como Lo es HTML (Lenguaje de Marcado de Hipertexto)', 1, 'imgs/news/html.jpg', NULL, 'html', 0, '2022-04-14', 1),
(5, 'css', 'Quieres General un Mejor Aspecto a Tu Sitio WEB CSS es la Solución Genera Tus Propios Estilos Con CSS\r\n', 1, 'imgs/news/css.png', NULL, 'css', 0, '2023-01-07', 1),
(6, 'javascript', 'Dale Funcionalidad a tu Sitio y Sumergete en el Mundo de La Programación WEB Front End', 1, 'imgs/news/js.png', NULL, 'javascript', 0, '2023-01-14', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_lenguajes`
--

CREATE TABLE `tm_lenguajes` (
  `lang_id` int NOT NULL,
  `lang_nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tm_lenguajes`
--

INSERT INTO `tm_lenguajes` (`lang_id`, `lang_nom`, `estado`) VALUES
(1, 'nodejs', 1),
(2, 'php', 1),
(3, 'angular', 1),
(4, 'laravel', 1),
(5, 'sql server', 1),
(6, 'mysql', 1),
(7, 'react', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_socialmedia`
--

CREATE TABLE `tm_socialmedia` (
  `sm_id` int NOT NULL,
  `sm_nom` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sm_icon1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sm_icon2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sm_rutaweb` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tm_socialmedia`
--

INSERT INTO `tm_socialmedia` (`sm_id`, `sm_nom`, `sm_icon1`, `sm_icon2`, `sm_rutaweb`, `estado`) VALUES
(1, 'facebook', 'fb', 'social_facebook', 'https://www.facebook.com', 1),
(2, 'twitter', 'tw', 'social_twitter', '#', 1),
(3, 'youtube', 'yt bg-danger', 'social_youtube', 'https://www.youtube.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso_cap`
--
ALTER TABLE `curso_cap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_id_fk` (`curso_id`);

--
-- Indices de la tabla `tm_categorias`
--
ALTER TABLE `tm_categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD PRIMARY KEY (`cur_id`),
  ADD UNIQUE KEY `cur_titulo` (`cur_titulo`),
  ADD KEY `categoria_fk` (`id_cat`) USING BTREE;

--
-- Indices de la tabla `tm_lenguajes`
--
ALTER TABLE `tm_lenguajes`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indices de la tabla `tm_socialmedia`
--
ALTER TABLE `tm_socialmedia`
  ADD PRIMARY KEY (`sm_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso_cap`
--
ALTER TABLE `curso_cap`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tm_categorias`
--
ALTER TABLE `tm_categorias`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tm_lenguajes`
--
ALTER TABLE `tm_lenguajes`
  MODIFY `lang_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tm_socialmedia`
--
ALTER TABLE `tm_socialmedia`
  MODIFY `sm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso_cap`
--
ALTER TABLE `curso_cap`
  ADD CONSTRAINT `FK1_curso_cap` FOREIGN KEY (`curso_id`) REFERENCES `tm_curso` (`cur_id`);

--
-- Filtros para la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD CONSTRAINT `FK_tm_curso_tm_categorias` FOREIGN KEY (`id_cat`) REFERENCES `tm_categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
