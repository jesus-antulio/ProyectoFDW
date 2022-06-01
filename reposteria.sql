-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 22:14:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reposteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `cantidad`, `precio`, `imagen`) VALUES
(1, 'Harina Aunt Jemina', 'Harina para Hot Cakes Aunt Jemima original  de 500gr.', 10, 50, '../images/HarinaAuntHC.jpg'),
(2, 'Moldes para tarta', 'Set de 4 moldes de aluminio para tarta de 12cm', 67, 200, '../images/MoldesSet4.jpg'),
(3, 'Chispas de Chocolate Hershey´s', 'Chispas de chocolate marca Heshey´s de 326gr. Poseen una textura sólida y suave en la boca', 39, 80, '../images/ChispasHershey.jpg'),
(4, 'Moldes de silicon cupcake', 'Moldes reutilizables de silicona para hacer cupcakes/muffins. Incliuye 12 piezas', 9, 180, '../images/moldeCup.jpg'),
(5, 'Harina de Arroz', 'La Harina de Arroz es un producto seco, palpable, homogéneo y de color crema obtenido de la molienda del Arroz. (500gr)', 100, 50, '../images/harinaArroz.jpg'),
(8, 'Molde para pastel Wilton', 'Wilton Performance sartenes, 20.32 cm (paquete de 2) redondo, Variados, 8\" 2-Pack, 1 ', 80, 320, '../images/moldeWilton.jpg'),
(9, 'Escencia de Vainilla D´Gari', 'D´Gari saborizante artificial de vainilla de 1 litro. Producto de alta calidad', 150, 25, '../images/DGariVainilla.jpg'),
(10, 'Harina de Trigo', 'Garina de trigo marca San Blas de 800gr.  Harian multiusos con excelente estabilidad durante el horneado. Granos de trigo de calidad premium.', 199, 15, '../images/HarinaTrigoSB.jpg'),
(11, 'Leche condensada La Lechera', 'Por más de 85 años la leche condensada La Lechera ha sido el complemento perfecto para dar sabor a tus postres, platillos y bebidas.', 150, 20, '../images/LaLechera.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `contraseña`, `telefono`, `rol`) VALUES
(1, 'Jesús Jiménez', 'antulioj@gmail.com', '010621', '4448288334', 2),
(2, 'Dannia', 'dannia@hotmail.com', 'holis', '4456567567', 1),
(3, 'Laura Delgado', 'ladelza@hotmail.com', 'DEZALASA', '4441234567', 1),
(6, 'Nora Esperanza', 'norahesperanza99@gmail.com', 'JesusAntulio21', '', 1),
(7, 'jesus', 'a@c.com', '01452', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `folio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `productos` varchar(500) NOT NULL,
  `total` int(50) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`folio`, `id_usuario`, `productos`, `total`, `fecha_compra`) VALUES
(1, 1, 'Moldes para tarta,Moldes para tarta,Harina de Arroz,Chispas de Chocolate Hershey´s,', 530, '2022-05-27 18:05:17'),
(2, 1, 'Moldes para tarta,Moldes para tarta,Harina de Arroz,Chispas de Chocolate Hershey´s,', 530, '2022-05-27 18:09:22'),
(9, 1, 'Harina de Arroz,', 50, '2022-05-27 18:32:24'),
(10, 3, 'Harina Aunt Jemina,Moldes de silicon cupcake,', 230, '2022-05-27 19:55:27'),
(11, 1, 'Moldes para tarta,', 200, '2022-05-27 20:30:10'),
(12, 1, 'Moldes para tarta,', 200, '2022-05-27 20:32:52'),
(13, 1, 'Moldes para tarta,', 200, '2022-05-27 20:33:22'),
(14, 1, 'Moldes para tarta,', 200, '2022-05-27 21:04:11'),
(15, 1, 'Chispas de Chocolate Hershey´s,', 80, '2022-05-27 21:05:21'),
(16, 1, 'jj,', 10, '2022-05-27 21:07:14'),
(17, 1, 'Harina de Arroz,', 50, '2022-05-27 21:08:02'),
(18, 1, 'Moldes para tarta,', 200, '2022-05-27 21:10:24'),
(19, 1, 'Harina de Arroz,', 50, '2022-05-27 21:13:45'),
(20, 1, 'Moldes para tarta,', 200, '2022-05-27 21:28:26'),
(21, 1, 'Harina Aunt Jemina,', 50, '2022-05-27 21:29:51'),
(22, 1, 'Harina de Arroz,', 50, '2022-05-27 21:34:39'),
(23, 1, 'Harina de Arroz,', 50, '2022-05-27 21:35:52'),
(24, 1, 'Harina de Arroz,', 50, '2022-05-27 21:35:55'),
(25, 1, 'Harina de Arroz,', 50, '2022-05-27 21:36:45'),
(26, 1, 'Harina de Arroz,', 50, '2022-05-27 21:37:33'),
(27, 1, 'Harina de Arroz,', 50, '2022-05-27 21:37:46'),
(28, 1, 'Harina de Arroz,', 50, '2022-05-27 21:38:02'),
(29, 1, 'Harina de Arroz,', 50, '2022-05-27 21:38:29'),
(30, 1, 'Moldes para tarta,', 200, '2022-05-27 21:40:07'),
(31, 1, 'Harina Aunt Jemina,', 50, '2022-05-27 21:40:30'),
(32, 1, 'Harina Aunt Jemina,', 50, '2022-05-27 21:41:20'),
(33, 1, 'Moldes para tarta,', 200, '2022-05-27 21:56:46'),
(34, 1, 'Harina Aunt Jemina,Harina de Arroz,jj,', 0, '2022-05-27 23:17:05'),
(35, 1, 'Moldes de silicon cupcake,', 0, '2022-05-28 02:42:38'),
(36, 1, 'Moldes para tarta,', 0, '2022-05-28 02:43:52'),
(37, 1, 'Moldes para tarta,', 0, '2022-05-28 02:46:49'),
(38, 1, 'Moldes para tarta,', 0, '2022-05-28 02:48:14'),
(39, 1, 'Chispas de Chocolate Hershey´s,', 0, '2022-05-28 02:49:03'),
(40, 1, 'Harina Aunt Jemina,', 0, '2022-05-28 02:51:20'),
(41, 1, 'Harina Aunt Jemina,Harina de Arroz,', 0, '2022-05-29 22:29:18'),
(42, 1, 'Harina de Trigo,', 0, '2022-06-01 20:06:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`folio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
