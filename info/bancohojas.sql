-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2017 a las 01:19:25
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancohojas`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Ingreso_Correos` (IN `correo_nombre` VARCHAR(60) CHARSET utf8, IN `documento_identificacion` VARCHAR(30) CHARSET utf8)  NO SQL
IF NOT EXISTS ( SELECT c.correo_nombre 
FROM correos as c
WHERE c.documento_identificacion = documento_identificacion and c.correo_nombre=correo_nombre) THEN
INSERT INTO correos
VALUES ( correo_nombre,documento_identificacion);
ELSE
SELECT 'Este Correo ya existe en la base de datos!';
END IF$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `cod_ciudad` int(10) UNSIGNED NOT NULL,
  `nombre_ciudad` varchar(90) NOT NULL,
  `cod_departamento` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `correo_nombre` varchar(60) NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `correos`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `cod_departamento` int(10) UNSIGNED NOT NULL,
  `nombre_departamento` varchar(45) NOT NULL,
  `cod_pais` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalafones`
--

CREATE TABLE `escalafones` (
  `cod_escalafon` int(10) UNSIGNED NOT NULL,
  `tipo_escalafon` varchar(20) NOT NULL,
  `anexo` varchar(150) NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias_calificadas`
--

CREATE TABLE `experiencias_calificadas` (
  `cod_experiencia_calificada` int(10) UNSIGNED NOT NULL,
  `nombre_experiencia_calificada` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaciones_academicas`
--

CREATE TABLE `formaciones_academicas` (
  `cod_formacion` int(10) UNSIGNED NOT NULL,
  `modalidad_academica` varchar(30) NOT NULL,
  `programa_academico` varchar(50) NOT NULL,
  `no_semestres` int(10) UNSIGNED NOT NULL,
  `graduado` tinyint(1) NOT NULL,
  `titulo_obtenido` varchar(60) NOT NULL,
  `fecha_terminacion` date NOT NULL,
  `no_tarjeta_profesional` varchar(30) NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `cod_idioma` int(10) UNSIGNED NOT NULL,
  `nombre_idioma` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_actividades`
--

CREATE TABLE `informacion_actividades` (
  `cod_perfeccionamiento` int(10) UNSIGNED NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL,
  `entidad` varchar(40) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `intensidad_horaria` double NOT NULL,
  `puntaje_perfeccionamiento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_categorias`
--

CREATE TABLE `informacion_categorias` (
  `cod_info_cat` int(10) UNSIGNED NOT NULL,
  `cod_categoria` int(10) UNSIGNED NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `anexo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_experiencias`
--

CREATE TABLE `informacion_experiencias` (
  `cod_info_exp` int(10) UNSIGNED NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL,
  `cod_experiencia_calificada` int(10) UNSIGNED NOT NULL,
  `entidad` varchar(40) NOT NULL,
  `direccion_entidad` varchar(100) NOT NULL,
  `cod_ciudad` int(10) UNSIGNED NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo_electronico` varchar(30) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_retiro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_idioma`
--

CREATE TABLE `informacion_idioma` (
  `documento_identificacion` varchar(30) NOT NULL,
  `cod_idioma` int(10) UNSIGNED NOT NULL,
  `habla` varchar(10) NOT NULL,
  `lectura` varchar(10) NOT NULL,
  `escritura` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_personal`
--

CREATE TABLE `informacion_personal` (
  `documento_identificacion` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `genero` tinyint(1) DEFAULT NULL,
  `nacionalidad` int(10) UNSIGNED DEFAULT NULL,
  `residencia` int(10) UNSIGNED DEFAULT NULL,
  `libreta_militar` tinyint(1) DEFAULT NULL,
  `cod_libreta` varchar(15) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` int(10) UNSIGNED DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `estado_civil` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_07_07_223315_crear_tabla_tipos_usuario', 1),
(4, '2016_07_07_225615_update_table_users_V2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `cod_pais` int(10) UNSIGNED NOT NULL,
  `nombre_pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfeccionamiento_actividades`
--

CREATE TABLE `perfeccionamiento_actividades` (
  `cod_perfeccionamiento` int(10) UNSIGNED NOT NULL,
  `nombre_perfeccionamiento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_categorias`
--

CREATE TABLE `produccion_categorias` (
  `cod_categoria` int(10) UNSIGNED NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL,
  `cod_produccion` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productividades_academicas`
--

CREATE TABLE `productividades_academicas` (
  `cod_produccion` int(10) UNSIGNED NOT NULL,
  `nombre_produccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `numero` varchar(20) NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', NULL, NULL),
(2, 'ESTANDAR', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `documento_identificacion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipoUsuario` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`cod_ciudad`),
  ADD KEY `cod_departamento` (`cod_departamento`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`correo_nombre`,`documento_identificacion`),
  ADD KEY `documento_identificacion` (`documento_identificacion`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`cod_departamento`),
  ADD KEY `cod_pais` (`cod_pais`);

--
-- Indices de la tabla `escalafones`
--
ALTER TABLE `escalafones`
  ADD PRIMARY KEY (`cod_escalafon`),
  ADD KEY `documento_identificacion` (`documento_identificacion`);

--
-- Indices de la tabla `experiencias_calificadas`
--
ALTER TABLE `experiencias_calificadas`
  ADD PRIMARY KEY (`cod_experiencia_calificada`);

--
-- Indices de la tabla `formaciones_academicas`
--
ALTER TABLE `formaciones_academicas`
  ADD PRIMARY KEY (`cod_formacion`),
  ADD KEY `documento_identificacion` (`documento_identificacion`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`cod_idioma`);

--
-- Indices de la tabla `informacion_actividades`
--
ALTER TABLE `informacion_actividades`
  ADD PRIMARY KEY (`cod_perfeccionamiento`,`documento_identificacion`),
  ADD KEY `documento_identificacion` (`documento_identificacion`);

--
-- Indices de la tabla `informacion_categorias`
--
ALTER TABLE `informacion_categorias`
  ADD PRIMARY KEY (`cod_info_cat`),
  ADD KEY `documento_identificacion` (`documento_identificacion`),
  ADD KEY `cod_categoria` (`cod_categoria`);

--
-- Indices de la tabla `informacion_experiencias`
--
ALTER TABLE `informacion_experiencias`
  ADD PRIMARY KEY (`cod_info_exp`),
  ADD KEY `documento_identificacion` (`documento_identificacion`),
  ADD KEY `cod_experiencia_calificada` (`cod_experiencia_calificada`),
  ADD KEY `cod_ciudad` (`cod_ciudad`);

--
-- Indices de la tabla `informacion_idioma`
--
ALTER TABLE `informacion_idioma`
  ADD PRIMARY KEY (`documento_identificacion`,`cod_idioma`),
  ADD KEY `cod_idioma` (`cod_idioma`);

--
-- Indices de la tabla `informacion_personal`
--
ALTER TABLE `informacion_personal`
  ADD PRIMARY KEY (`documento_identificacion`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`cod_pais`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `perfeccionamiento_actividades`
--
ALTER TABLE `perfeccionamiento_actividades`
  ADD PRIMARY KEY (`cod_perfeccionamiento`);

--
-- Indices de la tabla `produccion_categorias`
--
ALTER TABLE `produccion_categorias`
  ADD PRIMARY KEY (`cod_categoria`),
  ADD KEY `cod_produccion` (`cod_produccion`);

--
-- Indices de la tabla `productividades_academicas`
--
ALTER TABLE `productividades_academicas`
  ADD PRIMARY KEY (`cod_produccion`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`numero`,`documento_identificacion`),
  ADD KEY `documento_identificacion` (`documento_identificacion`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_documento_identificacion_unique` (`documento_identificacion`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `cod_ciudad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `cod_departamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `escalafones`
--
ALTER TABLE `escalafones`
  MODIFY `cod_escalafon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `experiencias_calificadas`
--
ALTER TABLE `experiencias_calificadas`
  MODIFY `cod_experiencia_calificada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formaciones_academicas`
--
ALTER TABLE `formaciones_academicas`
  MODIFY `cod_formacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `cod_idioma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informacion_categorias`
--
ALTER TABLE `informacion_categorias`
  MODIFY `cod_info_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informacion_experiencias`
--
ALTER TABLE `informacion_experiencias`
  MODIFY `cod_info_exp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `cod_pais` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfeccionamiento_actividades`
--
ALTER TABLE `perfeccionamiento_actividades`
  MODIFY `cod_perfeccionamiento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `produccion_categorias`
--
ALTER TABLE `produccion_categorias`
  MODIFY `cod_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productividades_academicas`
--
ALTER TABLE `productividades_academicas`
  MODIFY `cod_produccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`cod_departamento`) REFERENCES `departamentos` (`cod_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `correos`
--
ALTER TABLE `correos`
  ADD CONSTRAINT `correos_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`cod_pais`) REFERENCES `paises` (`cod_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `escalafones`
--
ALTER TABLE `escalafones`
  ADD CONSTRAINT `escalafones_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formaciones_academicas`
--
ALTER TABLE `formaciones_academicas`
  ADD CONSTRAINT `formaciones_academicas_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacion_actividades`
--
ALTER TABLE `informacion_actividades`
  ADD CONSTRAINT `informacion_actividades_ibfk_1` FOREIGN KEY (`cod_perfeccionamiento`) REFERENCES `perfeccionamiento_actividades` (`cod_perfeccionamiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informacion_actividades_ibfk_2` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacion_categorias`
--
ALTER TABLE `informacion_categorias`
  ADD CONSTRAINT `informacion_categorias_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informacion_categorias_ibfk_2` FOREIGN KEY (`cod_categoria`) REFERENCES `produccion_categorias` (`cod_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacion_experiencias`
--
ALTER TABLE `informacion_experiencias`
  ADD CONSTRAINT `informacion_experiencias_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informacion_experiencias_ibfk_2` FOREIGN KEY (`cod_experiencia_calificada`) REFERENCES `experiencias_calificadas` (`cod_experiencia_calificada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informacion_experiencias_ibfk_3` FOREIGN KEY (`cod_ciudad`) REFERENCES `ciudades` (`cod_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `informacion_idioma`
--
ALTER TABLE `informacion_idioma`
  ADD CONSTRAINT `informacion_idioma_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informacion_idioma_ibfk_2` FOREIGN KEY (`cod_idioma`) REFERENCES `idiomas` (`cod_idioma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `produccion_categorias`
--
ALTER TABLE `produccion_categorias`
  ADD CONSTRAINT `produccion_categorias_ibfk_1` FOREIGN KEY (`cod_produccion`) REFERENCES `productividades_academicas` (`cod_produccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD CONSTRAINT `telefonos_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
