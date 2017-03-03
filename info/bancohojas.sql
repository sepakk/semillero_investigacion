-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2017 a las 13:41:54
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

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

INSERT INTO `correos` (`correo_nombre`, `documento_identificacion`) VALUES
('academiaojeda@gmail.com', '161214129'),
('al-felipe@hotmail.com', '1234566'),
('duban.mantilla@hotmail.com', '1069752846'),
('linuxmelopela@s.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `cod_departamento` int(10) UNSIGNED NOT NULL,
  `nombre_departamento` varchar(45) NOT NULL,
  `cod_pais` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`cod_departamento`, `nombre_departamento`, `cod_pais`) VALUES
(1, 'Amazonas ', 39),
(2, 'Antioquia ', 39),
(3, 'Arauca ', 39),
(4, ' AtlÃ¡ntico ', 39),
(5, 'BolÃ­var ', 39),
(6, 'BoyacÃ¡ ', 39),
(7, 'Caldas ', 39),
(8, 'CaquetÃ¡ ', 39),
(9, 'Casanare ', 39),
(10, 'Cauca ', 39),
(11, 'Cesar ', 39),
(12, 'ChocÃ³ ', 39),
(13, 'CÃ³rdoba ', 39),
(14, 'Cundinamarca ', 39),
(15, 'GuainÃ­a ', 39),
(16, 'Guaviare ', 39),
(17, 'Huila ', 39),
(18, 'La Guajira ', 39),
(19, 'Magdalena ', 39),
(20, 'Meta ', 39),
(21, 'NariÃ±o ', 39),
(22, 'Norte de Santander ', 39),
(23, 'Putumayo ', 39),
(24, 'QuindÃ­o ', 39),
(25, 'Risaralda ', 39),
(26, 'San AndrÃ©s y Providencia ', 39),
(27, 'Santander ', 39),
(28, 'Sucre ', 39),
(29, 'Tolima ', 39),
(30, 'Valle del Cauca ', 39),
(31, 'VaupÃ©s ', 39),
(32, 'Vichada ', 39);

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

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`cod_idioma`, `nombre_idioma`) VALUES
(1, 'Afrikaans\r'),
(2, 'Albanés\r'),
(3, 'Alemán\r'),
(4, 'Amhárico\r'),
(5, 'Árabe\r'),
(6, 'Armenio\r'),
(7, 'Azerí\r'),
(8, 'Aymara\r'),
(9, 'Bahasa\r'),
(10, 'Bengalí\r'),
(11, 'Bielorruso\r'),
(12, 'Birmano\r'),
(13, 'Bislama\r'),
(14, 'Bosnio\r'),
(15, 'Bribrí\r'),
(16, 'Búlgaro\r'),
(17, 'Catalán\r'),
(18, 'Cingalés\r'),
(19, 'Croata\r'),
(20, 'Coreano\r'),
(21, 'Chamorro\r'),
(22, 'Checo\r'),
(23, 'Chibcha\r'),
(24, 'Chichewa\r'),
(25, 'Chino\r'),
(26, 'Creole\r'),
(27, 'Danés\r'),
(28, 'Divehi\r'),
(29, 'Dzongkha\r'),
(30, 'Escocés\r'),
(31, 'Eslovaco\r'),
(32, 'Esloveno\r'),
(33, 'Español\r'),
(34, 'Estonio\r'),
(35, 'Euskera\r'),
(36, 'Feroés\r'),
(37, 'Filipino\r'),
(38, 'Finés\r'),
(39, 'Francés\r'),
(40, 'Frisón\r'),
(41, 'Gagauzo\r'),
(42, 'Galés\r'),
(43, 'Gallego\r'),
(44, 'Georgiano\r'),
(45, 'Gibelterse\r'),
(46, 'Griego\r'),
(47, 'Guaraní\r'),
(48, 'Hebreo\r'),
(49, 'Hindi\r'),
(50, 'Húngaro\r'),
(51, 'Inglés\r'),
(52, 'Irlandés\r'),
(53, 'Islandés\r'),
(54, 'Italiano\r'),
(55, 'Japonés\r'),
(56, 'Jemer\r'),
(57, 'Kaqchikel\r'),
(58, 'Kazajo\r'),
(59, 'Kinyarwanda\r'),
(60, 'Kirguís\r'),
(61, 'Kirundi\r'),
(62, 'Kiswahili\r'),
(63, 'Kurdo\r'),
(64, 'Lao\r'),
(65, 'Latín\r'),
(66, 'Letón\r'),
(67, 'Lingala\r'),
(68, 'Lituano\r'),
(69, 'Luxemburgués\r'),
(70, 'Macedonio\r'),
(71, 'Malayo\r'),
(72, 'Maltés\r'),
(73, 'Mam\r'),
(74, 'Maorí\r'),
(75, 'Mapudungun\r'),
(76, 'Marshalés\r'),
(77, 'Moldavo\r'),
(78, 'Mongol\r'),
(79, 'Nahuatl.\r'),
(80, 'Nauruano.\r'),
(81, 'Neerlandés u Holandés\r'),
(82, 'Nepalí\r'),
(83, 'Noruego\r'),
(84, 'Panyabí\r'),
(85, 'Patois\r'),
(86, 'Persa\r'),
(87, 'Pocomam\r'),
(88, 'Polaco\r'),
(89, 'Portugués.\r'),
(90, 'Q’eqchí\r'),
(91, 'Quechua\r'),
(92, 'Quiché\r'),
(93, 'Serbio\r'),
(94, 'Sueco\r'),
(95, 'Shona\r'),
(96, 'Swati\r'),
(97, 'Swahili\r'),
(98, 'Retorrománico\r'),
(99, 'Rumano\r'),
(100, 'Ruso\r'),
(101, 'Sesotho\r'),
(102, 'Somalí\r'),
(103, 'Swahili\r'),
(104, 'Tailandés\r'),
(105, 'Tamil\r'),
(106, 'Tayik\r'),
(107, 'Tetun\r'),
(108, 'Tigriña\r'),
(109, 'Tongano\r'),
(110, 'Tswana\r'),
(111, 'Turco\r'),
(112, 'Turcomano\r'),
(113, 'Tuvaluano\r'),
(114, 'Ucraniano\r'),
(115, 'Urdú\r'),
(116, 'Uzbek\r'),
(117, 'Vietnamita\r'),
(118, 'Venda\r'),
(119, 'Xinca\r'),
(120, 'Zulú\r'),
(121, '\r');

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
-- Volcado de datos para la tabla `informacion_personal`
--

INSERT INTO `informacion_personal` (`documento_identificacion`, `nombre`, `apellidos`, `genero`, `nacionalidad`, `residencia`, `libreta_militar`, `cod_libreta`, `fecha_nacimiento`, `lugar_nacimiento`, `direccion`, `estado_civil`) VALUES
('1069752846', 'Duban Enrique', 'Mantilla Corredor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1069763203', 'Jorge Enrique', 'Romero Cortes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12345', 'linux', 'putito', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1234566', 'linux', 'diaz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('161214129', 'miguel', 'ojeda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

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

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`cod_pais`, `nombre_pais`) VALUES
(2, 'Albania\r'),
(3, 'Alemania\r'),
(4, 'Andorra\r'),
(5, 'Angola\r'),
(6, 'Antigua y Barbuda\r'),
(7, 'Arabia Saudita\r'),
(8, 'Argelia\r'),
(9, 'Argentina\r'),
(10, 'Armenia\r'),
(11, 'Australia\r'),
(12, 'Austria\r'),
(13, 'Azerbaiyán\r'),
(14, 'Bahamas\r'),
(15, 'Bahrein\r'),
(16, 'Bangladesh\r'),
(17, 'Barbados\r'),
(18, 'Bélgica\r'),
(19, 'Bélice\r'),
(20, 'Benin\r'),
(21, 'Bielorrusia\r'),
(22, 'Bolivia\r'),
(23, 'Bosnia y Herzegovina\r'),
(24, 'Botsuana\r'),
(25, 'Brasil\r'),
(26, 'Brunei\r'),
(27, 'Bulgaria\r'),
(28, 'Burkina Faso\r'),
(29, 'Burundi\r'),
(30, 'Bután\r'),
(31, 'Cabo Verde\r'),
(32, 'Camboya\r'),
(33, 'Camerún\r'),
(34, 'Canadá\r'),
(35, 'Chad\r'),
(36, 'Chile\r'),
(37, 'China\r'),
(38, 'Chipre\r'),
(39, 'Colombia\r'),
(40, 'Comoras\r'),
(41, 'Corea del Norte\r'),
(42, 'Corea del Sur\r'),
(43, 'Costa de Marfil\r'),
(44, 'Costa Rica\r'),
(45, 'Croacia\r'),
(46, 'Cuba\r'),
(47, 'Dinamarca\r'),
(48, 'Dominica\r'),
(49, 'Ecuador\r'),
(50, 'Egipto\r'),
(51, 'El Salvador\r'),
(52, 'Emiratos Arabes Unidos\r'),
(53, 'Eritrea\r'),
(54, 'Eslovaquia\r'),
(55, 'Eslovenia\r'),
(56, 'España\r'),
(57, 'Estados Unidos\r'),
(58, 'Estonia\r'),
(59, 'Etiopía\r'),
(60, 'Filipinas\r'),
(61, 'Finlandia\r'),
(62, 'Fiyi\r'),
(63, 'Francia\r'),
(64, 'Gabon\r'),
(65, 'Gambia\r'),
(66, 'Georgia\r'),
(67, 'Ghana\r'),
(68, 'Granada\r'),
(69, 'Grecia\r'),
(70, 'Guatemala\r'),
(71, 'Guinea\r'),
(72, 'Guinea Ecuatorial\r'),
(73, 'Guinea Francesa\r'),
(74, 'Guinea-Bissau\r'),
(75, 'Guyana\r'),
(76, 'Haití\r'),
(77, 'Honduras\r'),
(78, 'Hungría\r'),
(79, 'India\r'),
(80, 'Indonesia\r'),
(81, 'Irán\r'),
(82, 'Iraq\r'),
(83, 'Irlanda\r'),
(84, 'Islandia\r'),
(85, 'Islas Georgias del Sur y Sandwich del Sur\r'),
(86, 'Islas Malvinas\r'),
(87, 'Islas Marshall\r'),
(88, 'Islas Salomon\r'),
(89, 'Israel\r'),
(90, 'Italia\r'),
(91, 'Jamaica\r'),
(92, 'Japon\r'),
(93, 'Jordania\r'),
(94, 'Kazajistán\r'),
(95, 'Kenia\r'),
(96, 'Kirguistán\r'),
(97, 'Kiribati\r'),
(98, 'Kuwait\r'),
(99, 'Laos\r'),
(100, 'Leshoto\r'),
(101, 'Letonia\r'),
(102, 'Líbano\r'),
(103, 'Libia\r'),
(104, 'Liechtenstein\r'),
(105, 'Lituania\r'),
(106, 'Luxemburgo\r'),
(107, 'Madagascar\r'),
(108, 'Malasia\r'),
(109, 'Malaui\r'),
(110, 'Maldivas\r'),
(111, 'Mali\r'),
(112, 'Malta\r'),
(113, 'Marruecos\r'),
(114, 'Mauricio\r'),
(115, 'Mauritania\r'),
(116, 'México\r'),
(117, 'Micronesia\r'),
(118, 'Moldavia\r'),
(119, 'Monaco\r'),
(120, 'Mongolia\r'),
(121, 'Montenegro\r'),
(122, 'Mozambique\r'),
(123, 'Myanmar (Birmania)\r'),
(124, 'Namibia\r'),
(125, 'Nauru\r'),
(126, 'Nepal\r'),
(127, 'Nicaragua\r'),
(128, 'Níger\r'),
(129, 'Nigeria\r'),
(130, 'Noruega\r'),
(131, 'Nueva Zelanda\r'),
(132, 'Omán\r'),
(133, 'Países Bajos\r'),
(134, 'Pakistán\r'),
(135, 'Palaos\r'),
(136, 'Panamá \r'),
(137, 'Papúa Nueva Guinea\r'),
(138, 'Paraguay\r'),
(139, 'Perú\r'),
(140, 'Polonia\r'),
(141, 'Portugal\r'),
(142, 'Puerto Rico\r'),
(143, 'Qatar\r'),
(144, 'Reino Unido\r'),
(145, 'República Centroafricana\r'),
(146, 'República Checa\r'),
(147, 'República de Macedonia\r'),
(148, 'República del Congo\r'),
(149, 'República DemocrAtica del Congo\r'),
(150, 'República Dominicana\r'),
(151, 'república saharaui\r'),
(152, 'Ruanda\r'),
(153, 'Rumania\r'),
(154, 'Rusia\r'),
(155, 'Samoa\r'),
(156, 'San Cristobal y Nevis\r'),
(157, 'San Marino\r'),
(158, 'San Vicente y las Granadinas\r'),
(159, 'Santa Lucía \r'),
(160, 'Santo Tomé y Príncipe\r'),
(161, 'Senegal\r'),
(162, 'Serbia\r'),
(163, 'Seychelles\r'),
(164, 'Sierra Leona\r'),
(165, 'Singapur\r'),
(166, 'Siria\r'),
(167, 'Somalia\r'),
(168, 'Sri Lanka\r'),
(169, 'Suazilandia\r'),
(170, 'SudAfrica\r'),
(171, 'Sudan del norte\r'),
(172, 'Sudan del sur\r'),
(173, 'Suecia\r'),
(174, 'Suiza\r'),
(175, 'Surinam\r'),
(176, 'Tailandia\r'),
(177, 'Tanzania\r'),
(178, 'Tayikistán\r'),
(179, 'Timor Oriental\r'),
(180, 'Togo\r'),
(181, 'Tonga\r'),
(182, 'Trinidad y Tobago\r'),
(183, 'Túnez\r'),
(184, 'Turkmenistán\r'),
(185, 'Turquía\r'),
(186, 'Tuvalu\r'),
(187, 'Ucrania\r'),
(188, 'Uganda\r'),
(189, 'Uruguay\r'),
(190, 'Uzbekistán\r'),
(191, 'Vanuatu\r'),
(192, 'Vaticano\r'),
(193, 'Venezuela\r'),
(194, 'Vietnam\r'),
(195, 'Yemen\r'),
(196, 'Yibuti\r'),
(197, 'Zambia\r'),
(198, 'Zimbabue\r'),
(199, 'Antiguo\r');

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `documento_identificacion`, `name`, `apellidos`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tipoUsuario`) VALUES
(1, '1069763203', 'Jorge Enrique', 'Romero Cortes', 'jromero199@gmail.com', '$2y$10$0CHYFhiBU5aOKxXbGC22peHN/QdcPee25sYB1Rwrctlk3i6LAXnaq', '2MMnnEv2dQGyv0L1cDUxnd3gd0BvjVFNAk2lwejHLYcT1qRSmzXh4mHVpdGZ', '2017-03-01 04:26:23', '2017-03-01 04:26:23', 2),
(2, '1069752846', 'Duban Enrique', 'Mantilla Corredor', 'duban.mantilla@hotmail.com', '$2y$10$H3pu8G2D6zgmqJ3BXDTvT.2A3l3rwH7BzSpds6WHsRqteufiNN2Ti', 'j00vKHWhz6uDesSkH6yfuY8LUFP7i3wFp2RqWzQvPet9w3jR2PoZ8FW8lIqV', '2017-03-01 19:56:13', '2017-03-01 19:56:13', 2),
(3, '161214129', 'miguel', 'ojeda', 'academiaojeda@gmail.com', '$2y$10$DiNXoQL4HZdzoCn7Aag/duhfPdVx6Qzft7BiAttw6SdxdHh7LnXrm', 'zo7gZavqCtIXbrHLAizyRfbJTPC4xBqJhcXwR4jxSkplRhL1twMpCCrl59ju', '2017-03-01 23:09:54', '2017-03-01 23:09:54', 1),
(4, '12345', 'linux', 'putito', 'linuxmelopela@s.com', '$2y$10$PxRov1wY7qNvpIIzA7S3MOcFsc5sc1NbGe3FgL5H64UeELbd9VAKO', NULL, '2017-03-02 00:02:38', '2017-03-02 00:02:38', 1),
(5, '1234566', 'linux', 'diaz', 'al-felipe@hotmail.com', '$2y$10$NJBBmh6OH2ci.6hsYLfYguwEIG1fMqkPX47USVFHczFfv84Krum2q', 'mBOynP0UF5oTtAhpZtk1pp7XFlCGrvcrjxDzWVhVlhO2RmIcqHINfPxOXgTk', '2017-03-02 00:21:42', '2017-03-02 00:21:42', 1);

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
  MODIFY `cod_departamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
  MODIFY `cod_idioma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
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
  MODIFY `cod_pais` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
