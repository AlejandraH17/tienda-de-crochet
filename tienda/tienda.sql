-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2025 a las 02:29:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `categoria`) VALUES
(1, 'Bolso azul', 'Bolso tejido con diseño clásico.', 'bolso_azul.jpg', NULL, 'Sillas y algo más...'),
(2, 'Bolso verde', 'Bolso artesanal con asas tejidas.', 'bolso_verde.jpg', NULL, 'Sillas y algo más...'),
(3, 'Conjunto falda', 'Conjunto de falda y top tejido a mano.', 'conjunto_falda.jpg', NULL, 'Vestidos y Conjuntos'),
(4, 'Conjunto pantalón', 'Conjunto playero tejido.', 'conjunto_pantalon.jpg', NULL, 'Vestidos y Conjuntos'),
(5, 'Escarpines', 'Escarpines suaves para bebé.', 'escarpines.jpg', NULL, 'Escarpines'),
(6, 'Falda red', 'Falda de red abierta.', 'falda_red.jpg', NULL, 'Vestidos y Conjuntos'),
(7, 'Panty', 'Panty tejido con diseño delicado.', 'panty.jpg', NULL, 'Trajes de Baño'),
(8, 'Red decorativa', 'Diseño decorativo', 'red.jpg', NULL, 'Sillas y algo más...'),
(9, 'Silla colgante', 'Silla tejida tipo hamaca artesanal.', 'silla.jpg', NULL, 'Sillas y algo más...'),
(10, 'Sombrilla', 'Sombrilla decorativa tejida.', 'sombrilla.jpg', NULL, 'Sillas y algo más...'),
(11, 'Sombrilla playera', 'Sombrilla tejida ideal para la playa.', 'sombrilla_playera.jpg', NULL, 'Sillas y algo más...'),
(12, 'Suéter cardigan', 'Cardigan tejido con botones frontales.', 'sueter_cardigan.jpg', NULL, 'Tops y Suéteres'),
(13, 'Suéter red', 'Suéter calado con patrón de red.', 'sueter_red.jpg', NULL, 'Tops y Suéteres'),
(14, 'Traje de baño básico', 'Traje de baño tejido en diseño clásico.', 'tdb.jpg', NULL, 'Trajes de Baño'),
(15, 'Traje de baño cinta', 'Traje de baño con cinta lisa.', 'tdb_cinta.jpg', NULL, 'Trajes de Baño'),
(16, 'Traje de baño lua', 'Diseño Lua en traje de baño artesanal.', 'tdb_lua.jpg', NULL, 'Trajes de Baño'),
(17, 'Traje de baño piedras', 'Traje de baño decorado con piedreria.', 'tdb_piedras.jpg', NULL, 'Trajes de Baño'),
(18, 'Traje de baño sencillo', 'Diseño sencillo con abaniscos al rededor.', 'tdb_sencillo.jpg', NULL, 'Trajes de Baño'),
(19, 'Traje de baño top', 'Top tejido para traje de baño.', 'tdb_top.jpg', NULL, 'Trajes de Baño'),
(20, 'Top básico', 'Top tejido en diseño clásico.', 'top.jpg', NULL, 'Tops y Suéteres'),
(21, 'Top alto', 'Top con cuello alto tejido.', 'top_alto.jpg', NULL, 'Tops y Suéteres'),
(22, 'Top corazón', 'Top con escote en forma de corazón.', 'top_corazon.jpg', NULL, 'Tops y Suéteres'),
(23, 'Top cruzado', 'Top cruzado tejido en hilo suave.', 'top_cruzado.jpg', NULL, 'Tops y Suéteres'),
(24, 'Top recto', 'Top de corte recto y elegante.', 'top_recto.jpg', NULL, 'Tops y Suéteres'),
(25, 'Vestido básico', 'Vestido tejido en diseño tradicional.', 'vestido.jpg', NULL, 'Vestidos y Conjuntos'),
(53, 'Vestido abanico', 'Vestido con patrón de abanico.', 'vestido_abanico.jpg', NULL, NULL),
(54, 'Vestido red', 'Vestido calado con diseño de red.', 'vestido_red.jpg', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
