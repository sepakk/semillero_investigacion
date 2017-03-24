-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2017 a las 02:04:08
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

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

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`cod_ciudad`, `nombre_ciudad`, `cod_departamento`) VALUES
(1, 'MEDELLIN', 1),
(2, 'ABEJORRAL', 1),
(3, 'ABRIAQUI', 1),
(4, 'ALEJANDRIA', 1),
(5, 'AMAGA', 1),
(6, 'AMALFI', 1),
(7, 'ANDES', 1),
(8, 'ANGELOPOLIS', 1),
(9, 'ANGOSTURA', 1),
(10, 'ANORI', 1),
(11, 'SANTAFE DE ANTIOQUIA', 1),
(12, 'ANZA', 1),
(13, 'APARTADO', 1),
(14, 'ARBOLETES', 1),
(15, 'ARGELIA', 1),
(16, 'ARMENIA', 1),
(17, 'BARBOSA', 1),
(18, 'BELMIRA', 1),
(19, 'BELLO', 1),
(20, 'BETANIA', 1),
(21, 'BETULIA', 1),
(22, 'CIUDAD BOLIVAR', 1),
(23, 'BRICEÑO', 1),
(24, 'BURITICA', 1),
(25, 'CACERES', 1),
(26, 'CAICEDO', 1),
(27, 'CALDAS', 1),
(28, 'CAMPAMENTO', 1),
(29, 'CAÑASGORDAS', 1),
(30, 'CARACOLI', 1),
(31, 'CARAMANTA', 1),
(32, 'CAREPA', 1),
(33, 'EL CARMEN DE VIBORAL', 1),
(34, 'CAROLINA', 1),
(35, 'CAUCASIA', 1),
(36, 'CHIGORODO', 1),
(37, 'CISNEROS', 1),
(38, 'COCORNA', 1),
(39, 'CONCEPCION', 1),
(40, 'CONCORDIA', 1),
(41, 'COPACABANA', 1),
(42, 'DABEIBA', 1),
(43, 'DON MATIAS', 1),
(44, 'EBEJICO', 1),
(45, 'EL BAGRE', 1),
(46, 'ENTRERRIOS', 1),
(47, 'ENVIGADO', 1),
(48, 'FREDONIA', 1),
(49, 'FRONTINO', 1),
(50, 'GIRALDO', 1),
(51, 'GIRARDOTA', 1),
(52, 'GOMEZ PLATA', 1),
(53, 'GRANADA', 1),
(54, 'GUADALUPE', 1),
(55, 'GUARNE', 1),
(56, 'GUATAPE', 1),
(57, 'HELICONIA', 1),
(58, 'HISPANIA', 1),
(59, 'ITAGUI', 1),
(60, 'ITUANGO', 1),
(61, 'JARDIN', 1),
(62, 'JERICO', 1),
(63, 'LA CEJA', 1),
(64, 'LA ESTRELLA', 1),
(65, 'LA PINTADA', 1),
(66, 'LA UNION', 1),
(67, 'LIBORINA', 1),
(68, 'MACEO', 1),
(69, 'MARINILLA', 1),
(70, 'MONTEBELLO', 1),
(71, 'MURINDO', 1),
(72, 'MUTATA', 1),
(73, 'NARIÑO', 1),
(74, 'NECOCLI', 1),
(75, 'NECHI', 1),
(76, 'OLAYA', 1),
(77, 'PEÐOL', 1),
(78, 'PEQUE', 1),
(79, 'PUEBLORRICO', 1),
(80, 'PUERTO BERRIO', 1),
(81, 'PUERTO NARE', 1),
(82, 'PUERTO TRIUNFO', 1),
(83, 'REMEDIOS', 1),
(84, 'RETIRO', 1),
(85, 'RIONEGRO', 1),
(86, 'SABANALARGA', 1),
(87, 'SABANETA', 1),
(88, 'SALGAR', 1),
(89, 'SAN ANDRES DE CUERQUIA', 1),
(90, 'SAN CARLOS', 1),
(91, 'SAN FRANCISCO', 1),
(92, 'SAN JERONIMO', 1),
(93, 'SAN JOSE DE LA MONTAÑA', 1),
(94, 'SAN JUAN DE URABA', 1),
(95, 'SAN LUIS', 1),
(96, 'SAN PEDRO', 1),
(97, 'SAN PEDRO DE URABA', 1),
(98, 'SAN RAFAEL', 1),
(99, 'SAN ROQUE', 1),
(100, 'SAN VICENTE', 1),
(101, 'SANTA BARBARA', 1),
(102, 'SANTA ROSA DE OSOS', 1),
(103, 'SANTO DOMINGO', 1),
(104, 'EL SANTUARIO', 1),
(105, 'SEGOVIA', 1),
(106, 'SONSON', 1),
(107, 'SOPETRAN', 1),
(108, 'TAMESIS', 1),
(109, 'TARAZA', 1),
(110, 'TARSO', 1),
(111, 'TITIRIBI', 1),
(112, 'TOLEDO', 1),
(113, 'TURBO', 1),
(114, 'URAMITA', 1),
(115, 'URRAO', 1),
(116, 'VALDIVIA', 1),
(117, 'VALPARAISO', 1),
(118, 'VEGACHI', 1),
(119, 'VENECIA', 1),
(120, 'VIGIA DEL FUERTE', 1),
(121, 'YALI', 1),
(122, 'YARUMAL', 1),
(123, 'YOLOMBO', 1),
(124, 'YONDO', 1),
(125, 'ZARAGOZA', 1),
(126, 'BARRANQUILLA', 2),
(127, 'BARANOA', 2),
(128, 'CAMPO DE LA CRUZ', 2),
(129, 'CANDELARIA', 2),
(130, 'GALAPA', 2),
(131, 'JUAN DE ACOSTA', 2),
(132, 'LURUACO', 2),
(133, 'MALAMBO', 2),
(134, 'MANATI', 2),
(135, 'PALMAR DE VARELA', 2),
(136, 'PIOJO', 2),
(137, 'POLONUEVO', 2),
(138, 'PONEDERA', 2),
(139, 'PUERTO COLOMBIA', 2),
(140, 'REPELON', 2),
(141, 'SABANAGRANDE', 2),
(142, 'SABANALARGA', 2),
(143, 'SANTA LUCIA', 2),
(144, 'SANTO TOMAS', 2),
(145, 'SOLEDAD', 2),
(146, 'SUAN', 2),
(147, 'TUBARA', 2),
(148, 'USIACURI', 2),
(149, 'BOGOTA D.C.', 10),
(150, 'CARTAGENA', 3),
(151, 'ACHI', 3),
(152, 'ALTOS DEL ROSARIO', 3),
(153, 'ARENAL', 3),
(154, 'ARJONA', 3),
(155, 'ARROYOHONDO', 3),
(156, 'BARRANCO DE LOBA', 3),
(157, 'CALAMAR', 3),
(158, 'CANTAGALLO', 3),
(159, 'CICUCO', 3),
(160, 'CORDOBA', 3),
(161, 'CLEMENCIA', 3),
(162, 'EL CARMEN DE BOLIVAR', 3),
(163, 'EL GUAMO', 3),
(164, 'EL PEÑON', 3),
(165, 'HATILLO DE LOBA', 3),
(166, 'MAGANGUE', 3),
(167, 'MAHATES', 3),
(168, 'MARGARITA', 3),
(169, 'MARIA LA BAJA', 3),
(170, 'MONTECRISTO', 3),
(171, 'MOMPOS', 3),
(172, 'NOROSI', 3),
(173, 'MORALES', 3),
(174, 'PINILLOS', 3),
(175, 'REGIDOR', 3),
(176, 'RIO VIEJO', 3),
(177, 'SAN CRISTOBAL', 3),
(178, 'SAN ESTANISLAO', 3),
(179, 'SAN FERNANDO', 3),
(180, 'SAN JACINTO', 3),
(181, 'SAN JACINTO DEL CAUCA', 3),
(182, 'SAN JUAN NEPOMUCENO', 3),
(183, 'SAN MARTIN DE LOBA', 3),
(184, 'SAN PABLO', 3),
(185, 'SANTA CATALINA', 3),
(186, 'SANTA ROSA', 3),
(187, 'SANTA ROSA DEL SUR', 3),
(188, 'SIMITI', 3),
(189, 'SOPLAVIENTO', 3),
(190, 'TALAIGUA NUEVO', 3),
(191, 'TIQUISIO', 3),
(192, 'TURBACO', 3),
(193, 'TURBANA', 3),
(194, 'VILLANUEVA', 3),
(195, 'ZAMBRANO', 3),
(196, 'TUNJA', 4),
(197, 'ALMEIDA', 4),
(198, 'AQUITANIA', 4),
(199, 'ARCABUCO', 4),
(200, 'BELEN', 4),
(201, 'BERBEO', 4),
(202, 'BETEITIVA', 4),
(203, 'BOAVITA', 4),
(204, 'BOYACA', 4),
(205, 'BRICEÑO', 4),
(206, 'BUENAVISTA', 4),
(207, 'BUSBANZA', 4),
(208, 'CALDAS', 4),
(209, 'CAMPOHERMOSO', 4),
(210, 'CERINZA', 4),
(211, 'CHINAVITA', 4),
(212, 'CHIQUINQUIRA', 4),
(213, 'CHISCAS', 4),
(214, 'CHITA', 4),
(215, 'CHITARAQUE', 4),
(216, 'CHIVATA', 4),
(217, 'CIENEGA', 4),
(218, 'COMBITA', 4),
(219, 'COPER', 4),
(220, 'CORRALES', 4),
(221, 'COVARACHIA', 4),
(222, 'CUBARA', 4),
(223, 'CUCAITA', 4),
(224, 'CUITIVA', 4),
(225, 'CHIQUIZA', 4),
(226, 'CHIVOR', 4),
(227, 'DUITAMA', 4),
(228, 'EL COCUY', 4),
(229, 'EL ESPINO', 4),
(230, 'FIRAVITOBA', 4),
(231, 'FLORESTA', 4),
(232, 'GACHANTIVA', 4),
(233, 'GAMEZA', 4),
(234, 'GARAGOA', 4),
(235, 'GUACAMAYAS', 4),
(236, 'GUATEQUE', 4),
(237, 'GUAYATA', 4),
(238, 'GsICAN', 4),
(239, 'IZA', 4),
(240, 'JENESANO', 4),
(241, 'JERICO', 4),
(242, 'LABRANZAGRANDE', 4),
(243, 'LA CAPILLA', 4),
(244, 'LA VICTORIA', 4),
(245, 'LA UVITA', 4),
(246, 'VILLA DE LEYVA', 4),
(247, 'MACANAL', 4),
(248, 'MARIPI', 4),
(249, 'MIRAFLORES', 4),
(250, 'MONGUA', 4),
(251, 'MONGUI', 4),
(252, 'MONIQUIRA', 4),
(253, 'MOTAVITA', 4),
(254, 'MUZO', 4),
(255, 'NOBSA', 4),
(256, 'NUEVO COLON', 4),
(257, 'OICATA', 4),
(258, 'OTANCHE', 4),
(259, 'PACHAVITA', 4),
(260, 'PAEZ', 4),
(261, 'PAIPA', 4),
(262, 'PAJARITO', 4),
(263, 'PANQUEBA', 4),
(264, 'PAUNA', 4),
(265, 'PAYA', 4),
(266, 'PAZ DE RIO', 4),
(267, 'PESCA', 4),
(268, 'PISBA', 4),
(269, 'PUERTO BOYACA', 4),
(270, 'QUIPAMA', 4),
(271, 'RAMIRIQUI', 4),
(272, 'RAQUIRA', 4),
(273, 'RONDON', 4),
(274, 'SABOYA', 4),
(275, 'SACHICA', 4),
(276, 'SAMACA', 4),
(277, 'SAN EDUARDO', 4),
(278, 'SAN JOSE DE PARE', 4),
(279, 'SAN LUIS DE GACENO', 4),
(280, 'SAN MATEO', 4),
(281, 'SAN MIGUEL DE SEMA', 4),
(282, 'SAN PABLO DE BORBUR', 4),
(283, 'SANTANA', 4),
(284, 'SANTA MARIA', 4),
(285, 'SANTA ROSA DE VITERBO', 4),
(286, 'SANTA SOFIA', 4),
(287, 'SATIVANORTE', 4),
(288, 'SATIVASUR', 4),
(289, 'SIACHOQUE', 4),
(290, 'SOATA', 4),
(291, 'SOCOTA', 4),
(292, 'SOCHA', 4),
(293, 'SOGAMOSO', 4),
(294, 'SOMONDOCO', 4),
(295, 'SORA', 4),
(296, 'SOTAQUIRA', 4),
(297, 'SORACA', 4),
(298, 'SUSACON', 4),
(299, 'SUTAMARCHAN', 4),
(300, 'SUTATENZA', 4),
(301, 'TASCO', 4),
(302, 'TENZA', 4),
(303, 'TIBANA', 4),
(304, 'TIBASOSA', 4),
(305, 'TINJACA', 4),
(306, 'TIPACOQUE', 4),
(307, 'TOCA', 4),
(308, 'TOGsI', 4),
(309, 'TOPAGA', 4),
(310, 'TOTA', 4),
(311, 'TUNUNGUA', 4),
(312, 'TURMEQUE', 4),
(313, 'TUTA', 4),
(314, 'TUTAZA', 4),
(315, 'UMBITA', 4),
(316, 'VENTAQUEMADA', 4),
(317, 'VIRACACHA', 4),
(318, 'ZETAQUIRA', 4),
(319, 'MANIZALES', 5),
(320, 'AGUADAS', 5),
(321, 'ANSERMA', 5),
(322, 'ARANZAZU', 5),
(323, 'BELALCAZAR', 5),
(324, 'CHINCHINA', 5),
(325, 'FILADELFIA', 5),
(326, 'LA DORADA', 5),
(327, 'LA MERCED', 5),
(328, 'MANZANARES', 5),
(329, 'MARMATO', 5),
(330, 'MARQUETALIA', 5),
(331, 'MARULANDA', 5),
(332, 'NEIRA', 5),
(333, 'NORCASIA', 5),
(334, 'PACORA', 5),
(335, 'PALESTINA', 5),
(336, 'PENSILVANIA', 5),
(337, 'RIOSUCIO', 5),
(338, 'RISARALDA', 5),
(339, 'SALAMINA', 5),
(340, 'SAMANA', 5),
(341, 'SAN JOSE', 5),
(342, 'SUPIA', 5),
(343, 'VICTORIA', 5),
(344, 'VILLAMARIA', 5),
(345, 'VITERBO', 5),
(346, 'FLORENCIA', 6),
(347, 'ALBANIA', 6),
(348, 'BELEN DE LOS ANDAQUIES', 6),
(349, 'CARTAGENA DEL CHAIRA', 6),
(350, 'CURILLO', 6),
(351, 'EL DONCELLO', 6),
(352, 'EL PAUJIL', 6),
(353, 'LA MONTAÑITA', 6),
(354, 'MILAN', 6),
(355, 'MORELIA', 6),
(356, 'PUERTO RICO', 6),
(357, 'SAN JOSE DEL FRAGUA', 6),
(358, 'SAN VICENTE DEL CAGUAN', 6),
(359, 'SOLANO', 6),
(360, 'SOLITA', 6),
(361, 'VALPARAISO', 6),
(362, 'POPAYAN', 7),
(363, 'ALMAGUER', 7),
(364, 'ARGELIA', 7),
(365, 'BALBOA', 7),
(366, 'BOLIVAR', 7),
(367, 'BUENOS AIRES', 7),
(368, 'CAJIBIO', 7),
(369, 'CALDONO', 7),
(370, 'CALOTO', 7),
(371, 'CORINTO', 7),
(372, 'EL TAMBO', 7),
(373, 'FLORENCIA', 7),
(374, 'GUACHENE', 7),
(375, 'GUAPI', 7),
(376, 'INZA', 7),
(377, 'JAMBALO', 7),
(378, 'LA SIERRA', 7),
(379, 'LA VEGA', 7),
(380, 'LOPEZ', 7),
(381, 'MERCADERES', 7),
(382, 'MIRANDA', 7),
(383, 'MORALES', 7),
(384, 'PADILLA', 7),
(385, 'PAEZ', 7),
(386, 'PATIA', 7),
(387, 'PIAMONTE', 7),
(388, 'PIENDAMO', 7),
(389, 'PUERTO TEJADA', 7),
(390, 'PURACE', 7),
(391, 'ROSAS', 7),
(392, 'SAN SEBASTIAN', 7),
(393, 'SANTANDER DE QUILICHAO', 7),
(394, 'SANTA ROSA', 7),
(395, 'SILVIA', 7),
(396, 'SOTARA', 7),
(397, 'SUAREZ', 7),
(398, 'SUCRE', 7),
(399, 'TIMBIO', 7),
(400, 'TIMBIQUI', 7),
(401, 'TORIBIO', 7),
(402, 'TOTORO', 7),
(403, 'VILLA RICA', 7),
(404, 'VALLEDUPAR', 8),
(405, 'AGUACHICA', 8),
(406, 'AGUSTIN CODAZZI', 8),
(407, 'ASTREA', 8),
(408, 'BECERRIL', 8),
(409, 'BOSCONIA', 8),
(410, 'CHIMICHAGUA', 8),
(411, 'CHIRIGUANA', 8),
(412, 'CURUMANI', 8),
(413, 'EL COPEY', 8),
(414, 'EL PASO', 8),
(415, 'GAMARRA', 8),
(416, 'GONZALEZ', 8),
(417, 'LA GLORIA', 8),
(418, 'LA JAGUA DE IBIRICO', 8),
(419, 'MANAURE', 8),
(420, 'PAILITAS', 8),
(421, 'PELAYA', 8),
(422, 'PUEBLO BELLO', 8),
(423, 'RIO DE ORO', 8),
(424, 'LA PAZ', 8),
(425, 'SAN ALBERTO', 8),
(426, 'SAN DIEGO', 8),
(427, 'SAN MARTIN', 8),
(428, 'TAMALAMEQUE', 8),
(429, 'MONTERIA', 9),
(430, 'AYAPEL', 9),
(431, 'BUENAVISTA', 9),
(432, 'CANALETE', 9),
(433, 'CERETE', 9),
(434, 'CHIMA', 9),
(435, 'CHINU', 9),
(436, 'CIENAGA DE ORO', 9),
(437, 'COTORRA', 9),
(438, 'LA APARTADA', 9),
(439, 'LORICA', 9),
(440, 'LOS CORDOBAS', 9),
(441, 'MOMIL', 9),
(442, 'MONTELIBANO', 9),
(443, 'MOÑITOS', 9),
(444, 'PLANETA RICA', 9),
(445, 'PUEBLO NUEVO', 9),
(446, 'PUERTO ESCONDIDO', 9),
(447, 'PUERTO LIBERTADOR', 9),
(448, 'PURISIMA', 9),
(449, 'SAHAGUN', 9),
(450, 'SAN ANDRES SOTAVENTO', 9),
(451, 'SAN ANTERO', 9),
(452, 'SAN BERNARDO DEL VIENTO', 9),
(453, 'SAN CARLOS', 9),
(454, 'SAN PELAYO', 9),
(455, 'TIERRALTA', 9),
(456, 'VALENCIA', 9),
(457, 'AGUA DE DIOS', 10),
(458, 'ALBAN', 10),
(459, 'ANAPOIMA', 10),
(460, 'ANOLAIMA', 10),
(461, 'ARBELAEZ', 10),
(462, 'BELTRAN', 10),
(463, 'BITUIMA', 10),
(464, 'BOJACA', 10),
(465, 'CABRERA', 10),
(466, 'CACHIPAY', 10),
(467, 'CAJICA', 10),
(468, 'CAPARRAPI', 10),
(469, 'CAQUEZA', 10),
(470, 'CARMEN DE CARUPA', 10),
(471, 'CHAGUANI', 10),
(472, 'CHIA', 10),
(473, 'CHIPAQUE', 10),
(474, 'CHOACHI', 10),
(475, 'CHOCONTA', 10),
(476, 'COGUA', 10),
(477, 'COTA', 10),
(478, 'CUCUNUBA', 10),
(479, 'EL COLEGIO', 10),
(480, 'EL PEÑON', 10),
(481, 'EL ROSAL', 10),
(482, 'FACATATIVA', 10),
(483, 'FOMEQUE', 10),
(484, 'FOSCA', 10),
(485, 'FUNZA', 10),
(486, 'FUQUENE', 10),
(487, 'FUSAGASUGA', 10),
(488, 'GACHALA', 10),
(489, 'GACHANCIPA', 10),
(490, 'GACHETA', 10),
(491, 'GAMA', 10),
(492, 'GIRARDOT', 10),
(493, 'GRANADA', 10),
(494, 'GUACHETA', 10),
(495, 'GUADUAS', 10),
(496, 'GUASCA', 10),
(497, 'GUATAQUI', 10),
(498, 'GUATAVITA', 10),
(499, 'GUAYABAL DE SIQUIMA', 10),
(500, 'GUAYABETAL', 10),
(501, 'GUTIERREZ', 10),
(502, 'JERUSALEN', 10),
(503, 'JUNIN', 10),
(504, 'LA CALERA', 10),
(505, 'LA MESA', 10),
(506, 'LA PALMA', 10),
(507, 'LA PEÑA', 10),
(508, 'LA VEGA', 10),
(509, 'LENGUAZAQUE', 10),
(510, 'MACHETA', 10),
(511, 'MADRID', 10),
(512, 'MANTA', 10),
(513, 'MEDINA', 10),
(514, 'MOSQUERA', 10),
(515, 'NARIÑO', 10),
(516, 'NEMOCON', 10),
(517, 'NILO', 10),
(518, 'NIMAIMA', 10),
(519, 'NOCAIMA', 10),
(520, 'VENECIA', 10),
(521, 'PACHO', 10),
(522, 'PAIME', 10),
(523, 'PANDI', 10),
(524, 'PARATEBUENO', 10),
(525, 'PASCA', 10),
(526, 'PUERTO SALGAR', 10),
(527, 'PULI', 10),
(528, 'QUEBRADANEGRA', 10),
(529, 'QUETAME', 10),
(530, 'QUIPILE', 10),
(531, 'APULO', 10),
(532, 'RICAURTE', 10),
(533, 'SAN ANTONIO DEL TEQUENDAMA', 10),
(534, 'SAN BERNARDO', 10),
(535, 'SAN CAYETANO', 10),
(536, 'SAN FRANCISCO', 10),
(537, 'SAN JUAN DE RIO SECO', 10),
(538, 'SASAIMA', 10),
(539, 'SESQUILE', 10),
(540, 'SIBATE', 10),
(541, 'SILVANIA', 10),
(542, 'SIMIJACA', 10),
(543, 'SOACHA', 10),
(544, 'SOPO', 10),
(545, 'SUBACHOQUE', 10),
(546, 'SUESCA', 10),
(547, 'SUPATA', 10),
(548, 'SUSA', 10),
(549, 'SUTATAUSA', 10),
(550, 'TABIO', 10),
(551, 'TAUSA', 10),
(552, 'TENA', 10),
(553, 'TENJO', 10),
(554, 'TIBACUY', 10),
(555, 'TIBIRITA', 10),
(556, 'TOCAIMA', 10),
(557, 'TOCANCIPA', 10),
(558, 'TOPAIPI', 10),
(559, 'UBALA', 10),
(560, 'UBAQUE', 10),
(561, 'VILLA DE SAN DIEGO DE UBATE', 10),
(562, 'UNE', 10),
(563, 'UTICA', 10),
(564, 'VERGARA', 10),
(565, 'VIANI', 10),
(566, 'VILLAGOMEZ', 10),
(567, 'VILLAPINZON', 10),
(568, 'VILLETA', 10),
(569, 'VIOTA', 10),
(570, 'YACOPI', 10),
(571, 'ZIPACON', 10),
(572, 'ZIPAQUIRA', 10),
(573, 'QUIBDO', 11),
(574, 'ACANDI', 11),
(575, 'ALTO BAUDO', 11),
(576, 'ATRATO', 11),
(577, 'BAGADO', 11),
(578, 'BAHIA SOLANO', 11),
(579, 'BAJO BAUDO', 11),
(580, 'BOJAYA', 11),
(581, 'EL CANTON DEL SAN PABLO', 11),
(582, 'CARMEN DEL DARIEN', 11),
(583, 'CERTEGUI', 11),
(584, 'CONDOTO', 11),
(585, 'EL CARMEN DE ATRATO', 11),
(586, 'EL LITORAL DEL SAN JUAN', 11),
(587, 'ISTMINA', 11),
(588, 'JURADO', 11),
(589, 'LLORO', 11),
(590, 'MEDIO ATRATO', 11),
(591, 'MEDIO BAUDO', 11),
(592, 'MEDIO SAN JUAN', 11),
(593, 'NOVITA', 11),
(594, 'NUQUI', 11),
(595, 'RIO IRO', 11),
(596, 'RIO QUITO', 11),
(597, 'RIOSUCIO', 11),
(598, 'SAN JOSE DEL PALMAR', 11),
(599, 'SIPI', 11),
(600, 'TADO', 11),
(601, 'UNGUIA', 11),
(602, 'UNION PANAMERICANA', 11),
(603, 'NEIVA', 12),
(604, 'ACEVEDO', 12),
(605, 'AGRADO', 12),
(606, 'AIPE', 12),
(607, 'ALGECIRAS', 12),
(608, 'ALTAMIRA', 12),
(609, 'BARAYA', 12),
(610, 'CAMPOALEGRE', 12),
(611, 'COLOMBIA', 12),
(612, 'ELIAS', 12),
(613, 'GARZON', 12),
(614, 'GIGANTE', 12),
(615, 'GUADALUPE', 12),
(616, 'HOBO', 12),
(617, 'IQUIRA', 12),
(618, 'ISNOS', 12),
(619, 'LA ARGENTINA', 12),
(620, 'LA PLATA', 12),
(621, 'NATAGA', 12),
(622, 'OPORAPA', 12),
(623, 'PAICOL', 12),
(624, 'PALERMO', 12),
(625, 'PALESTINA', 12),
(626, 'PITAL', 12),
(627, 'PITALITO', 12),
(628, 'RIVERA', 12),
(629, 'SALADOBLANCO', 12),
(630, 'SAN AGUSTIN', 12),
(631, 'SANTA MARIA', 12),
(632, 'SUAZA', 12),
(633, 'TARQUI', 12),
(634, 'TESALIA', 12),
(635, 'TELLO', 12),
(636, 'TERUEL', 12),
(637, 'TIMANA', 12),
(638, 'VILLAVIEJA', 12),
(639, 'YAGUARA', 12),
(640, 'RIOHACHA', 13),
(641, 'ALBANIA', 13),
(642, 'BARRANCAS', 13),
(643, 'DIBULLA', 13),
(644, 'DISTRACCION', 13),
(645, 'EL MOLINO', 13),
(646, 'FONSECA', 13),
(647, 'HATONUEVO', 13),
(648, 'LA JAGUA DEL PILAR', 13),
(649, 'MAICAO', 13),
(650, 'MANAURE', 13),
(651, 'SAN JUAN DEL CESAR', 13),
(652, 'URIBIA', 13),
(653, 'URUMITA', 13),
(654, 'VILLANUEVA', 13),
(655, 'SANTA MARTA', 14),
(656, 'ALGARROBO', 14),
(657, 'ARACATACA', 14),
(658, 'ARIGUANI', 14),
(659, 'CERRO SAN ANTONIO', 14),
(660, 'CHIBOLO', 14),
(661, 'CIENAGA', 14),
(662, 'CONCORDIA', 14),
(663, 'EL BANCO', 14),
(664, 'EL PIÑON', 14),
(665, 'EL RETEN', 14),
(666, 'FUNDACION', 14),
(667, 'GUAMAL', 14),
(668, 'NUEVA GRANADA', 14),
(669, 'PEDRAZA', 14),
(670, 'PIJIÑO DEL CARMEN', 14),
(671, 'PIVIJAY', 14),
(672, 'PLATO', 14),
(673, 'PUEBLOVIEJO', 14),
(674, 'REMOLINO', 14),
(675, 'SABANAS DE SAN ANGEL', 14),
(676, 'SALAMINA', 14),
(677, 'SAN SEBASTIAN DE BUENAVISTA', 14),
(678, 'SAN ZENON', 14),
(679, 'SANTA ANA', 14),
(680, 'SANTA BARBARA DE PINTO', 14),
(681, 'SITIONUEVO', 14),
(682, 'TENERIFE', 14),
(683, 'ZAPAYAN', 14),
(684, 'ZONA BANANERA', 14),
(685, 'VILLAVICENCIO', 15),
(686, 'ACACIAS', 15),
(687, 'BARRANCA DE UPIA', 15),
(688, 'CABUYARO', 15),
(689, 'CASTILLA LA NUEVA', 15),
(690, 'CUBARRAL', 15),
(691, 'CUMARAL', 15),
(692, 'EL CALVARIO', 15),
(693, 'EL CASTILLO', 15),
(694, 'EL DORADO', 15),
(695, 'FUENTE DE ORO', 15),
(696, 'GRANADA', 15),
(697, 'GUAMAL', 15),
(698, 'MAPIRIPAN', 15),
(699, 'MESETAS', 15),
(700, 'LA MACARENA', 15),
(701, 'URIBE', 15),
(702, 'LEJANIAS', 15),
(703, 'PUERTO CONCORDIA', 15),
(704, 'PUERTO GAITAN', 15),
(705, 'PUERTO LOPEZ', 15),
(706, 'PUERTO LLERAS', 15),
(707, 'PUERTO RICO', 15),
(708, 'RESTREPO', 15),
(709, 'SAN CARLOS DE GUAROA', 15),
(710, 'SAN JUAN DE ARAMA', 15),
(711, 'SAN JUANITO', 15),
(712, 'SAN MARTIN', 15),
(713, 'VISTAHERMOSA', 15),
(714, 'PASTO', 16),
(715, 'ALBAN', 16),
(716, 'ALDANA', 16),
(717, 'ANCUYA', 16),
(718, 'ARBOLEDA', 16),
(719, 'BARBACOAS', 16),
(720, 'BELEN', 16),
(721, 'BUESACO', 16),
(722, 'COLON', 16),
(723, 'CONSACA', 16),
(724, 'CONTADERO', 16),
(725, 'CORDOBA', 16),
(726, 'CUASPUD', 16),
(727, 'CUMBAL', 16),
(728, 'CUMBITARA', 16),
(729, 'CHACHAGsI', 16),
(730, 'EL CHARCO', 16),
(731, 'EL PEÑOL', 16),
(732, 'EL ROSARIO', 16),
(733, 'EL TABLON DE GOMEZ', 16),
(734, 'EL TAMBO', 16),
(735, 'FUNES', 16),
(736, 'GUACHUCAL', 16),
(737, 'GUAITARILLA', 16),
(738, 'GUALMATAN', 16),
(739, 'ILES', 16),
(740, 'IMUES', 16),
(741, 'IPIALES', 16),
(742, 'LA CRUZ', 16),
(743, 'LA FLORIDA', 16),
(744, 'LA LLANADA', 16),
(745, 'LA TOLA', 16),
(746, 'LA UNION', 16),
(747, 'LEIVA', 16),
(748, 'LINARES', 16),
(749, 'LOS ANDES', 16),
(750, 'MAGsI', 16),
(751, 'MALLAMA', 16),
(752, 'MOSQUERA', 16),
(753, 'NARIÑO', 16),
(754, 'OLAYA HERRERA', 16),
(755, 'OSPINA', 16),
(756, 'FRANCISCO PIZARRO', 16),
(757, 'POLICARPA', 16),
(758, 'POTOSI', 16),
(759, 'PROVIDENCIA', 16),
(760, 'PUERRES', 16),
(761, 'PUPIALES', 16),
(762, 'RICAURTE', 16),
(763, 'ROBERTO PAYAN', 16),
(764, 'SAMANIEGO', 16),
(765, 'SANDONA', 16),
(766, 'SAN BERNARDO', 16),
(767, 'SAN LORENZO', 16),
(768, 'SAN PABLO', 16),
(769, 'SAN PEDRO DE CARTAGO', 16),
(770, 'SANTA BARBARA', 16),
(771, 'SANTACRUZ', 16),
(772, 'SAPUYES', 16),
(773, 'TAMINANGO', 16),
(774, 'TANGUA', 16),
(775, 'SAN ANDRES DE TUMACO', 16),
(776, 'TUQUERRES', 16),
(777, 'YACUANQUER', 16),
(778, 'CUCUTA', 17),
(779, 'ABREGO', 17),
(780, 'ARBOLEDAS', 17),
(781, 'BOCHALEMA', 17),
(782, 'BUCARASICA', 17),
(783, 'CACOTA', 17),
(784, 'CACHIRA', 17),
(785, 'CHINACOTA', 17),
(786, 'CHITAGA', 17),
(787, 'CONVENCION', 17),
(788, 'CUCUTILLA', 17),
(789, 'DURANIA', 17),
(790, 'EL CARMEN', 17),
(791, 'EL TARRA', 17),
(792, 'EL ZULIA', 17),
(793, 'GRAMALOTE', 17),
(794, 'HACARI', 17),
(795, 'HERRAN', 17),
(796, 'LABATECA', 17),
(797, 'LA ESPERANZA', 17),
(798, 'LA PLAYA', 17),
(799, 'LOS PATIOS', 17),
(800, 'LOURDES', 17),
(801, 'MUTISCUA', 17),
(802, 'OCAÑA', 17),
(803, 'PAMPLONA', 17),
(804, 'PAMPLONITA', 17),
(805, 'PUERTO SANTANDER', 17),
(806, 'RAGONVALIA', 17),
(807, 'SALAZAR', 17),
(808, 'SAN CALIXTO', 17),
(809, 'SAN CAYETANO', 17),
(810, 'SANTIAGO', 17),
(811, 'SARDINATA', 17),
(812, 'SILOS', 17),
(813, 'TEORAMA', 17),
(814, 'TIBU', 17),
(815, 'TOLEDO', 17),
(816, 'VILLA CARO', 17),
(817, 'VILLA DEL ROSARIO', 17),
(818, 'ARMENIA', 18),
(819, 'BUENAVISTA', 18),
(820, 'CALARCA', 18),
(821, 'CIRCASIA', 18),
(822, 'CORDOBA', 18),
(823, 'FILANDIA', 18),
(824, 'GENOVA', 18),
(825, 'LA TEBAIDA', 18),
(826, 'MONTENEGRO', 18),
(827, 'PIJAO', 18),
(828, 'QUIMBAYA', 18),
(829, 'SALENTO', 18),
(830, 'PEREIRA', 19),
(831, 'APIA', 19),
(832, 'BALBOA', 19),
(833, 'BELEN DE UMBRIA', 19),
(834, 'DOSQUEBRADAS', 19),
(835, 'GUATICA', 19),
(836, 'LA CELIA', 19),
(837, 'LA VIRGINIA', 19),
(838, 'MARSELLA', 19),
(839, 'MISTRATO', 19),
(840, 'PUEBLO RICO', 19),
(841, 'QUINCHIA', 19),
(842, 'SANTA ROSA DE CABAL', 19),
(843, 'SANTUARIO', 19),
(844, 'BUCARAMANGA', 20),
(845, 'AGUADA', 20),
(846, 'ALBANIA', 20),
(847, 'ARATOCA', 20),
(848, 'BARBOSA', 20),
(849, 'BARICHARA', 20),
(850, 'BARRANCABERMEJA', 20),
(851, 'BETULIA', 20),
(852, 'BOLIVAR', 20),
(853, 'CABRERA', 20),
(854, 'CALIFORNIA', 20),
(855, 'CAPITANEJO', 20),
(856, 'CARCASI', 20),
(857, 'CEPITA', 20),
(858, 'CERRITO', 20),
(859, 'CHARALA', 20),
(860, 'CHARTA', 20),
(861, 'CHIMA', 20),
(862, 'CHIPATA', 20),
(863, 'CIMITARRA', 20),
(864, 'CONCEPCION', 20),
(865, 'CONFINES', 20),
(866, 'CONTRATACION', 20),
(867, 'COROMORO', 20),
(868, 'CURITI', 20),
(869, 'EL CARMEN DE CHUCURI', 20),
(870, 'EL GUACAMAYO', 20),
(871, 'EL PEÑON', 20),
(872, 'EL PLAYON', 20),
(873, 'ENCINO', 20),
(874, 'ENCISO', 20),
(875, 'FLORIAN', 20),
(876, 'FLORIDABLANCA', 20),
(877, 'GALAN', 20),
(878, 'GAMBITA', 20),
(879, 'GIRON', 20),
(880, 'GUACA', 20),
(881, 'GUADALUPE', 20),
(882, 'GUAPOTA', 20),
(883, 'GUAVATA', 20),
(884, 'GsEPSA', 20),
(885, 'HATO', 20),
(886, 'JESUS MARIA', 20),
(887, 'JORDAN', 20),
(888, 'LA BELLEZA', 20),
(889, 'LANDAZURI', 20),
(890, 'LA PAZ', 20),
(891, 'LEBRIJA', 20),
(892, 'LOS SANTOS', 20),
(893, 'MACARAVITA', 20),
(894, 'MALAGA', 20),
(895, 'MATANZA', 20),
(896, 'MOGOTES', 20),
(897, 'MOLAGAVITA', 20),
(898, 'OCAMONTE', 20),
(899, 'OIBA', 20),
(900, 'ONZAGA', 20),
(901, 'PALMAR', 20),
(902, 'PALMAS DEL SOCORRO', 20),
(903, 'PARAMO', 20),
(904, 'PIEDECUESTA', 20),
(905, 'PINCHOTE', 20),
(906, 'PUENTE NACIONAL', 20),
(907, 'PUERTO PARRA', 20),
(908, 'PUERTO WILCHES', 20),
(909, 'RIONEGRO', 20),
(910, 'SABANA DE TORRES', 20),
(911, 'SAN ANDRES', 20),
(912, 'SAN BENITO', 20),
(913, 'SAN GIL', 20),
(914, 'SAN JOAQUIN', 20),
(915, 'SAN JOSE DE MIRANDA', 20),
(916, 'SAN MIGUEL', 20),
(917, 'SAN VICENTE DE CHUCURI', 20),
(918, 'SANTA BARBARA', 20),
(919, 'SANTA HELENA DEL OPON', 20),
(920, 'SIMACOTA', 20),
(921, 'SOCORRO', 20),
(922, 'SUAITA', 20),
(923, 'SUCRE', 20),
(924, 'SURATA', 20),
(925, 'TONA', 20),
(926, 'VALLE DE SAN JOSE', 20),
(927, 'VELEZ', 20),
(928, 'VETAS', 20),
(929, 'VILLANUEVA', 20),
(930, 'ZAPATOCA', 20),
(931, 'SINCELEJO', 21),
(932, 'BUENAVISTA', 21),
(933, 'CAIMITO', 21),
(934, 'COLOSO', 21),
(935, 'COROZAL', 21),
(936, 'COVEÑAS', 21),
(937, 'CHALAN', 21),
(938, 'EL ROBLE', 21),
(939, 'GALERAS', 21),
(940, 'GUARANDA', 21),
(941, 'LA UNION', 21),
(942, 'LOS PALMITOS', 21),
(943, 'MAJAGUAL', 21),
(944, 'MORROA', 21),
(945, 'OVEJAS', 21),
(946, 'PALMITO', 21),
(947, 'SAMPUES', 21),
(948, 'SAN BENITO ABAD', 21),
(949, 'SAN JUAN DE BETULIA', 21),
(950, 'SAN MARCOS', 21),
(951, 'SAN ONOFRE', 21),
(952, 'SAN PEDRO', 21),
(953, 'SAN LUIS DE SINCE', 21),
(954, 'SUCRE', 21),
(955, 'SANTIAGO DE TOLU', 21),
(956, 'TOLU VIEJO', 21),
(957, 'IBAGUE', 22),
(958, 'ALPUJARRA', 22),
(959, 'ALVARADO', 22),
(960, 'AMBALEMA', 22),
(961, 'ANZOATEGUI', 22),
(962, 'ARMERO', 22),
(963, 'ATACO', 22),
(964, 'CAJAMARCA', 22),
(965, 'CARMEN DE APICALA', 22),
(966, 'CASABIANCA', 22),
(967, 'CHAPARRAL', 22),
(968, 'COELLO', 22),
(969, 'COYAIMA', 22),
(970, 'CUNDAY', 22),
(971, 'DOLORES', 22),
(972, 'ESPINAL', 22),
(973, 'FALAN', 22),
(974, 'FLANDES', 22),
(975, 'FRESNO', 22),
(976, 'GUAMO', 22),
(977, 'HERVEO', 22),
(978, 'HONDA', 22),
(979, 'ICONONZO', 22),
(980, 'LERIDA', 22),
(981, 'LIBANO', 22),
(982, 'MARIQUITA', 22),
(983, 'MELGAR', 22),
(984, 'MURILLO', 22),
(985, 'NATAGAIMA', 22),
(986, 'ORTEGA', 22),
(987, 'PALOCABILDO', 22),
(988, 'PIEDRAS', 22),
(989, 'PLANADAS', 22),
(990, 'PRADO', 22),
(991, 'PURIFICACION', 22),
(992, 'RIOBLANCO', 22),
(993, 'RONCESVALLES', 22),
(994, 'ROVIRA', 22),
(995, 'SALDAÑA', 22),
(996, 'SAN ANTONIO', 22),
(997, 'SAN LUIS', 22),
(998, 'SANTA ISABEL', 22),
(999, 'SUAREZ', 22),
(1000, 'VALLE DE SAN JUAN', 22),
(1001, 'VENADILLO', 22),
(1002, 'VILLAHERMOSA', 22),
(1003, 'VILLARRICA', 22),
(1004, 'CALI', 23),
(1005, 'ALCALA', 23),
(1006, 'ANDALUCIA', 23),
(1007, 'ANSERMANUEVO', 23),
(1008, 'ARGELIA', 23),
(1009, 'BOLIVAR', 23),
(1010, 'BUENAVENTURA', 23),
(1011, 'GUADALAJARA DE BUGA', 23),
(1012, 'BUGALAGRANDE', 23),
(1013, 'CAICEDONIA', 23),
(1014, 'CALIMA', 23),
(1015, 'CANDELARIA', 23),
(1016, 'CARTAGO', 23),
(1017, 'DAGUA', 23),
(1018, 'EL AGUILA', 23),
(1019, 'EL CAIRO', 23),
(1020, 'EL CERRITO', 23),
(1021, 'EL DOVIO', 23),
(1022, 'FLORIDA', 23),
(1023, 'GINEBRA', 23),
(1024, 'GUACARI', 23),
(1025, 'JAMUNDI', 23),
(1026, 'LA CUMBRE', 23),
(1027, 'LA UNION', 23),
(1028, 'LA VICTORIA', 23),
(1029, 'OBANDO', 23),
(1030, 'PALMIRA', 23),
(1031, 'PRADERA', 23),
(1032, 'RESTREPO', 23),
(1033, 'RIOFRIO', 23),
(1034, 'ROLDANILLO', 23),
(1035, 'SAN PEDRO', 23),
(1036, 'SEVILLA', 23),
(1037, 'TORO', 23),
(1038, 'TRUJILLO', 23),
(1039, 'TULUA', 23),
(1040, 'ULLOA', 23),
(1041, 'VERSALLES', 23),
(1042, 'VIJES', 23),
(1043, 'YOTOCO', 23),
(1044, 'YUMBO', 23),
(1045, 'ZARZAL', 23),
(1046, 'ARAUCA', 24),
(1047, 'ARAUQUITA', 24),
(1048, 'CRAVO NORTE', 24),
(1049, 'FORTUL', 24),
(1050, 'PUERTO RONDON', 24),
(1051, 'SARAVENA', 24),
(1052, 'TAME', 24),
(1053, 'YOPAL', 25),
(1054, 'AGUAZUL', 25),
(1055, 'CHAMEZA', 25),
(1056, 'HATO COROZAL', 25),
(1057, 'LA SALINA', 25),
(1058, 'MANI', 25),
(1059, 'MONTERREY', 25),
(1060, 'NUNCHIA', 25),
(1061, 'OROCUE', 25),
(1062, 'PAZ DE ARIPORO', 25),
(1063, 'PORE', 25),
(1064, 'RECETOR', 25),
(1065, 'SABANALARGA', 25),
(1066, 'SACAMA', 25),
(1067, 'SAN LUIS DE PALENQUE', 25),
(1068, 'TAMARA', 25),
(1069, 'TAURAMENA', 25),
(1070, 'TRINIDAD', 25),
(1071, 'VILLANUEVA', 25),
(1072, 'MOCOA', 26),
(1073, 'COLON', 26),
(1074, 'ORITO', 26),
(1075, 'PUERTO ASIS', 26),
(1076, 'PUERTO CAICEDO', 26),
(1077, 'PUERTO GUZMAN', 26),
(1078, 'LEGUIZAMO', 26),
(1079, 'SIBUNDOY', 26),
(1080, 'SAN FRANCISCO', 26),
(1081, 'SAN MIGUEL', 26),
(1082, 'SANTIAGO', 26),
(1083, 'VALLE DEL GUAMUEZ', 26),
(1084, 'VILLAGARZON', 26),
(1085, 'SAN ANDRES', 27),
(1086, 'PROVIDENCIA', 27),
(1087, 'LETICIA', 28),
(1088, 'EL ENCANTO', 28),
(1089, 'LA CHORRERA', 28),
(1090, 'LA PEDRERA', 28),
(1091, 'LA VICTORIA', 28),
(1092, 'MIRITI - PARANA', 28),
(1093, 'PUERTO ALEGRIA', 28),
(1094, 'PUERTO ARICA', 28),
(1095, 'PUERTO NARIÑO', 28),
(1096, 'PUERTO SANTANDER', 28),
(1097, 'TARAPACA', 28),
(1098, 'INIRIDA', 29),
(1099, 'BARRANCO MINAS', 29),
(1100, 'MAPIRIPANA', 29),
(1101, 'SAN FELIPE', 29),
(1102, 'PUERTO COLOMBIA', 29),
(1103, 'LA GUADALUPE', 29),
(1104, 'CACAHUAL', 29),
(1105, 'PANA PANA', 29),
(1106, 'MORICHAL', 29),
(1107, 'SAN JOSE DEL GUAVIARE', 30),
(1108, 'CALAMAR', 30),
(1109, 'EL RETORNO', 30),
(1110, 'MIRAFLORES', 30),
(1111, 'MITU', 31),
(1112, 'CARURU', 31),
(1113, 'PACOA', 31),
(1114, 'TARAIRA', 31),
(1115, 'PAPUNAUA', 31),
(1116, 'YAVARATE', 31),
(1117, 'PUERTO CARREÑO', 32),
(1118, 'LA PRIMAVERA', 32),
(1119, 'SANTA ROSALIA', 32),
(1120, 'CUMARIBO', 32);

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
('duban.mantilla@hotmail.com', '1069752846'),
('jromero199@gmail.com', '1069763203'),
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
(1, 'ANTIOQUIA', 39),
(2, 'ATLANTICO', 39),
(3, 'BOLIVAR', 39),
(4, 'BOYACA', 39),
(5, 'CALDAS', 39),
(6, 'CAQUETA', 39),
(7, 'CAUCA', 39),
(8, 'CESAR', 39),
(9, 'CORDOBA', 39),
(10, 'CUNDINAMARCA', 39),
(11, 'CHOCO', 39),
(12, 'HUILA', 39),
(13, 'LA GUAJIRA', 39),
(14, 'MAGDALENA', 39),
(15, 'META', 39),
(16, 'NARIÑO', 39),
(17, 'NORTE DE SANTANDER', 39),
(18, 'QUINDIO', 39),
(19, 'RISARALDA', 39),
(20, 'SANTANDER', 39),
(21, 'SUCRE', 39),
(22, 'TOLIMA', 39),
(23, 'VALLE DEL CAUCA', 39),
(24, 'ARAUCA', 39),
(25, 'CASANARE', 39),
(26, 'PUTUMAYO', 39),
(27, 'SAN ANDRES', 39),
(28, 'AMAZONAS', 39),
(29, 'GUAINIA', 39),
(30, 'GUAVIARE', 39),
(31, 'VAUPES', 39),
(32, 'VICHADA', 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalafones`
--

CREATE TABLE `escalafones` (
  `cod_escalafon` int(10) UNSIGNED NOT NULL,
  `tipo_escalafon` int(11) NOT NULL,
  `anexo` varchar(150) NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias_calificadas`
--

CREATE TABLE `experiencias_calificadas` (
  `cod_experiencia_calificada` int(10) UNSIGNED NOT NULL,
  `nombre_experiencia_calificada` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `experiencias_calificadas`
--

INSERT INTO `experiencias_calificadas` (`cod_experiencia_calificada`, `nombre_experiencia_calificada`) VALUES
(1, 'Investigación'),
(2, 'Docencia Universitaria'),
(3, 'En Dirección Académica'),
(4, 'Experiencia Diferente a Docente'),
(5, 'Experiencia en Extensión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaciones_academicas`
--

CREATE TABLE `formaciones_academicas` (
  `cod_formacion` int(10) UNSIGNED NOT NULL,
  `cod_nivel` int(11) NOT NULL,
  `modalidad_academica` varchar(30) NOT NULL,
  `programa_academico` varchar(50) NOT NULL,
  `no_semestres` int(10) UNSIGNED NOT NULL,
  `graduado` tinyint(1) NOT NULL,
  `titulo_obtenido` varchar(60) NOT NULL,
  `nombre_institucion` varchar(50) NOT NULL,
  `fecha_terminacion` date NOT NULL,
  `no_tarjeta_profesional` varchar(30) NOT NULL,
  `documento_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formaciones_academicas`
--

INSERT INTO `formaciones_academicas` (`cod_formacion`, `cod_nivel`, `modalidad_academica`, `programa_academico`, `no_semestres`, `graduado`, `titulo_obtenido`, `nombre_institucion`, `fecha_terminacion`, `no_tarjeta_profesional`, `documento_identificacion`) VALUES
(1, 1, 'Presencial', 'Ingeniería de Sistemas', 9, 1, 'Ingeniero en Sistemas', 'Universidad de Cundinamarca', '2016-12-19', '123123131', '1069763203');

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

--
-- Volcado de datos para la tabla `informacion_categorias`
--

INSERT INTO `informacion_categorias` (`cod_info_cat`, `cod_categoria`, `documento_identificacion`, `fecha`, `anexo`) VALUES
(1, 56, '1069763203', '2017-03-14', '');

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

--
-- Volcado de datos para la tabla `informacion_experiencias`
--

INSERT INTO `informacion_experiencias` (`cod_info_exp`, `documento_identificacion`, `cod_experiencia_calificada`, `entidad`, `direccion_entidad`, `cod_ciudad`, `telefono`, `correo_electronico`, `fecha_inicio`, `fecha_retiro`) VALUES
(2, '1069763203', 1, 'UDEC', 'carrera 1', 1, '3213123', 'correo@mail.com', '2017-03-05', '2017-03-31'),
(3, '1069763203', 3, 'U Nacional', 'carrera 45', 4, '32112311', 'correo@mail.com', '2017-03-05', '2017-03-31');

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

--
-- Volcado de datos para la tabla `informacion_idioma`
--

INSERT INTO `informacion_idioma` (`documento_identificacion`, `cod_idioma`, `habla`, `lectura`, `escritura`) VALUES
('1069752846', 2, '0', '0', '2'),
('1069763203', 51, '1', '2', '0');

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
  `lugar_nacimiento` varchar(10) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `estado_civil` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion_personal`
--

INSERT INTO `informacion_personal` (`documento_identificacion`, `nombre`, `apellidos`, `genero`, `nacionalidad`, `residencia`, `libreta_militar`, `cod_libreta`, `fecha_nacimiento`, `lugar_nacimiento`, `direccion`, `estado_civil`) VALUES
('1069752846', 'Duban Enrique', 'Mantilla Corredor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1069763203', 'Jorge Enrique', 'Romero Cortes', 1, 39, NULL, NULL, NULL, '1998-05-23', '39.22.979', 'CRA 5A ESTE Nº 5-105 INT 2 BARRIO PEKIN', 1),
('12345', 'linux', 'putito', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(3, '2016_07_07_223315_crear_tabla_tipos_usuario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_institucion`
--

CREATE TABLE `nivel_institucion` (
  `cod_nivel` int(11) NOT NULL,
  `nombre_nivel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel_institucion`
--

INSERT INTO `nivel_institucion` (`cod_nivel`, `nombre_nivel`) VALUES
(1, 'Pregrado'),
(2, 'Especializacion'),
(3, 'Maestria'),
(4, 'Doctorado');

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
  `nombre_categoria` varchar(100) NOT NULL,
  `cod_produccion` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `produccion_categorias`
--

INSERT INTO `produccion_categorias` (`cod_categoria`, `nombre_categoria`, `cod_produccion`) VALUES
(1, 'En revistas tipo A1', 1),
(2, 'En revistas tipo A2', 1),
(3, 'En revistas tipo B', 1),
(4, 'En revistas tipo C', 1),
(5, 'En revistas tipo A1', 2),
(6, 'En revistas tipo A2', 2),
(7, 'En revistas tipo B', 2),
(8, 'En revistas tipo C', 2),
(9, 'En revistas tipo A1', 3),
(10, 'En revistas tipo A2', 3),
(11, 'En revistas tipo B', 3),
(12, 'En revistas tipo C', 3),
(13, 'Difusión e impacto internacional ', 4),
(14, 'Difusión e impacto nacional', 4),
(15, 'Difusión e impacto internacional ', 5),
(16, 'Difusión e impacto nacional', 5),
(17, 'Que resulten de un labor investigativa – Divulgación Internacional', 6),
(18, 'Que resulten de un labor investigativa – Divulgación Nacional ', 6),
(19, 'Que resulten de un labor investigativa – Divulgación Regional ', 6),
(20, 'De texto – Divulgación Internacional', 6),
(21, 'De texto – Divulgación Nacional ', 6),
(22, 'De texto – Divulgación Regional ', 6),
(23, 'De ensayo -Divulgación internacional ', 6),
(24, 'De ensayo -Divulgación nacional', 6),
(25, 'De ensayo- Divulgación regional ', 6),
(26, 'Libros  - Divulgación internacional', 7),
(27, 'Libros -Divulgación nacional', 7),
(28, 'Libros  - Divulgación regional', 7),
(29, 'Premio Internacional - Primer Puesto', 8),
(30, 'Premio Internacional - Segundo puesto', 8),
(31, 'Premio Internacional - Tercer puesto', 8),
(32, 'Premio Internacional - Mención', 8),
(33, 'Premio Nacional - Primer Puesto', 8),
(34, 'Premio Nacional - Segundo puesto', 8),
(35, 'Premio Nacional - Tercer puesto', 8),
(36, 'Por cada una', 9),
(37, 'Obra Original - De impacto o trascendencia internacional', 10),
(38, 'Obra Original - De impacto o trascendencia nacional', 10),
(39, 'Obra Complementaria - De impacto o trascendencia internacional', 10),
(40, 'Obra Complementaria - De impacto o trascendencia nacional', 10),
(41, 'Interpretación - De impacto o trascendencia internacional', 10),
(42, 'Interpretación - De impacto o trascendencia nacional', 10),
(43, 'Obras de trascendencia regional', 10),
(44, 'Obras complementarias o de apoyo de trascendencia regional', 10),
(45, 'Interpretaciones de trascendencia regional', 10),
(46, 'Diseño de sistema que constituye una innovación tecnológica y que tiene impacto y aplicación', 11),
(47, 'Diseño de sistema que constituye una adaptación tecnológica y que tiene impacto y aplicación', 11),
(48, 'Producción de Software – Producción científica', 11),
(49, 'Producción de Software – Producción Tecnológica', 11),
(50, 'Difusión  e impacto regional', 12),
(51, 'Producción con carácter documental', 13),
(52, 'Evento Internacional', 14),
(53, 'Evento Nacional', 14),
(54, 'Evento Regional', 14),
(55, 'Publicaciones impresas universitarias', 15),
(56, 'Reseñas críticas', 15),
(57, 'Revistas especializadas y temáticas', 16),
(58, 'Revistas divulgativas, culturales o de opinión, no temáticas', 16),
(59, 'Estudios Posdoctorales', 17),
(60, 'Artículos o capítulos', 18),
(61, 'Dirección individual de tesis maestría', 19),
(62, 'Dirección individual de tesis doctorado', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productividades_academicas`
--

CREATE TABLE `productividades_academicas` (
  `cod_produccion` int(10) UNSIGNED NOT NULL,
  `nombre_produccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productividades_academicas`
--

INSERT INTO `productividades_academicas` (`cod_produccion`, `nombre_produccion`) VALUES
(1, 'Artículo'),
(2, 'Comunicación Corta'),
(3, 'Infome de Caso, Revisión de tema, Carta al Editor'),
(4, 'Video'),
(5, 'Fotografía'),
(6, 'Libro'),
(7, 'Traducción'),
(8, 'Premio'),
(9, 'Patente'),
(10, 'Obra Artística'),
(11, 'Producción Técnica/de Software'),
(12, 'Producción de Videos'),
(13, 'Cinematografía'),
(14, 'Ponencia'),
(15, 'Publicación'),
(16, 'Articulo de Revista no Indexada'),
(17, 'Estudio'),
(18, 'Traducción Publicada'),
(19, 'Dirección de Tesis');

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
-- Estructura de tabla para la tabla `tipo_escalafones`
--

CREATE TABLE `tipo_escalafones` (
  `cod_escalafon` int(11) NOT NULL,
  `nombre_escalafon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_escalafones`
--

INSERT INTO `tipo_escalafones` (`cod_escalafon`, `nombre_escalafon`) VALUES
(0, 'Auxiliar'),
(1, 'Asistente'),
(2, 'Asociado'),
(3, 'Titular');

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
(1, '1069763203', 'Jorge Enrique', 'Romero Cortes', 'jromero199@gmail.com', '$2y$10$0CHYFhiBU5aOKxXbGC22peHN/QdcPee25sYB1Rwrctlk3i6LAXnaq', 'lRAqQvJLE3QGUaQWz6pKHtHWmrE8H1Zq1pKq3fW2ipXPFmhZ39kpM6SUqsnd', '2017-03-01 04:26:23', '2017-03-01 04:26:23', 2),
(2, '1069752846', 'Duban Enrique', 'Mantilla Corredor', 'duban.mantilla@hotmail.com', '$2y$10$H3pu8G2D6zgmqJ3BXDTvT.2A3l3rwH7BzSpds6WHsRqteufiNN2Ti', 'j00vKHWhz6uDesSkH6yfuY8LUFP7i3wFp2RqWzQvPet9w3jR2PoZ8FW8lIqV', '2017-03-01 19:56:13', '2017-03-01 19:56:13', 2),
(3, '161214129', 'miguel', 'ojeda', 'academiaojeda@gmail.com', '$2y$10$DiNXoQL4HZdzoCn7Aag/duhfPdVx6Qzft7BiAttw6SdxdHh7LnXrm', 'zo7gZavqCtIXbrHLAizyRfbJTPC4xBqJhcXwR4jxSkplRhL1twMpCCrl59ju', '2017-03-01 23:09:54', '2017-03-01 23:09:54', 1),
(4, '12345', 'linux', 'putito', 'linuxmelopela@s.com', '$2y$10$PxRov1wY7qNvpIIzA7S3MOcFsc5sc1NbGe3FgL5H64UeELbd9VAKO', 'lMh0h6lZsXy2eLUvfs44JCHsYlnLurENR6GWjWzasoOQNL9ofy031lnjiLx6', '2017-03-02 00:02:38', '2017-03-02 00:02:38', 2);

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
  ADD KEY `documento_identificacion` (`documento_identificacion`),
  ADD KEY `escalafones_tipo` (`tipo_escalafon`);

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
  ADD KEY `documento_identificacion` (`documento_identificacion`),
  ADD KEY `cod_nivel` (`cod_nivel`);

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
-- Indices de la tabla `nivel_institucion`
--
ALTER TABLE `nivel_institucion`
  ADD PRIMARY KEY (`cod_nivel`);

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
-- Indices de la tabla `tipo_escalafones`
--
ALTER TABLE `tipo_escalafones`
  ADD PRIMARY KEY (`cod_escalafon`);

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
  MODIFY `cod_ciudad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;
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
  MODIFY `cod_experiencia_calificada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `formaciones_academicas`
--
ALTER TABLE `formaciones_academicas`
  MODIFY `cod_formacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `cod_idioma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT de la tabla `informacion_categorias`
--
ALTER TABLE `informacion_categorias`
  MODIFY `cod_info_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `informacion_experiencias`
--
ALTER TABLE `informacion_experiencias`
  MODIFY `cod_info_exp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `cod_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `productividades_academicas`
--
ALTER TABLE `productividades_academicas`
  MODIFY `cod_produccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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
  ADD CONSTRAINT `escalafones_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `escalafones_tipo` FOREIGN KEY (`tipo_escalafon`) REFERENCES `tipo_escalafones` (`cod_escalafon`);

--
-- Filtros para la tabla `formaciones_academicas`
--
ALTER TABLE `formaciones_academicas`
  ADD CONSTRAINT `formaciones_academicas_ibfk_1` FOREIGN KEY (`documento_identificacion`) REFERENCES `informacion_personal` (`documento_identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formaciones_academicas_ibfk_2` FOREIGN KEY (`cod_nivel`) REFERENCES `nivel_institucion` (`cod_nivel`);

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
