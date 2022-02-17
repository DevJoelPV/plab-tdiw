-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2022 a las 18:54:21
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gsbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'GOLD'),
(2, 'SILVER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comandes`
--

CREATE TABLE `comandes` (
  `id` int(11) NOT NULL,
  `data` varchar(50) NOT NULL,
  `idUsuari` int(11) NOT NULL,
  `importTotal` float NOT NULL,
  `totalElements` int(11) NOT NULL,
  `idProductes` varchar(50) NOT NULL,
  `quantitatProductes` varchar(50) NOT NULL,
  `preuProductes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comandes`
--

INSERT INTO `comandes` (`id`, `data`, `idUsuari`, `importTotal`, `totalElements`, `idProductes`, `quantitatProductes`, `preuProductes`) VALUES
(1, '30-12-2021', 1, 119.97, 3, '12,17', '1,2', '19.99,49.99'),
(3, '03-01-2022', 1, 39.99, 1, '24', '1', '39.99'),
(4, '03-01-2022', 1, 129.96, 4, '11,19,18', '1,2,1', '39.99,29.99,29.99'),
(5, '03-01-2022', 2, 139.97, 3, '28,27,13', '1,1,1', '39.99,49.99,49.99'),
(6, '04-01-2022', 8, 189.96, 4, '17,13,29', '1,2,1', '49.99,49.99,39.99'),
(7, '05-01-2022', 9, 169.95, 5, '15,28,29', '3,1,1', '29.99,39.99,39.99'),
(9, '17-01-2022', 12, 189.95, 6, '11,18', '4,1', '39.99,29.99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liniacomanda`
--

CREATE TABLE `liniacomanda` (
  `id` int(11) NOT NULL,
  `idComanda` int(11) NOT NULL,
  `idProductes` int(100) NOT NULL,
  `quantitatProductes` text NOT NULL,
  `preuTotal` float NOT NULL,
  `preuProductes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productes`
--

CREATE TABLE `productes` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `preu` float NOT NULL,
  `descripcio` varchar(100) NOT NULL,
  `imatge` varchar(100) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productes`
--

INSERT INTO `productes` (`id`, `nom`, `preu`, `descripcio`, `imatge`, `idCategoria`) VALUES
(11, 'Golden Sun', 39.99, 'Cadena d\'or d\'alta qualitat amb un sol daurat com a penjoll.', '/../PLAB%20TDIW/vista/img/gold/g1.jpg', 1),
(12, 'Goldenfly', 19.99, 'Anell d\'or d\'alta qualitat en forma de segell amb un imprés d\'una papallona.', '/../PLAB%20TDIW/vista/img/gold/g2.jpg', 1),
(13, 'Goldenbird', 49.99, 'Anell d\'or d\'alta qualitat en forma de segell amb un imprés d\'un ocell.', '/../PLAB%20TDIW/vista/img/gold/g3.jpg', 1),
(14, 'GoldenChain', 39.99, 'Cadena d\'or d\'alta qualitat feta amb petites peces d\'or unides entre elles.', '/../PLAB%20TDIW/vista/img/gold/g4.jpg', 1),
(15, 'Ringchain', 29.99, 'Anell d\'or d\'alta qualitat que combina or solid amb petites peces unides entre elles.', '/../PLAB%20TDIW/vista/img/gold/g5.jpg', 1),
(16, 'Threelines', 29.99, 'Anell d\'or d\'alta qualitat format per tres tires d\'or que s\'entrellacen entre elles.', '/../PLAB%20TDIW/vista/img/gold/g6.jpg', 1),
(17, 'Golden Jesus', 49.99, 'Cadena d\'or d\'alta qualitat amb una creu d\'or com a penjoll.', '/../PLAB%20TDIW/vista/img/gold/g7.jpg', 1),
(18, 'ConstString', 29.99, 'Pulsera d\'or d\'alta qualitat amb una tanca d\'or.', '/../PLAB%20TDIW/vista/img/gold/g8.jpg', 1),
(19, 'Four corners', 29.99, 'Anell d\'or d\'alta qualitat caracteritzat amb un segell llis.', '/../PLAB%20TDIW/vista/img/gold/g9.jpg', 1),
(21, 'Silverfly', 49.99, 'Anell de plata d\'alta qualitat en forma de segell amb un ocell.', '/../PLAB%20TDIW/vista/img/silver/s1.jpg', 2),
(22, 'Unfinished', 39.99, 'Pulsera de plata d\'alta qualitat sense tanca necessària.', '/../PLAB%20TDIW/vista/img/silver/s2.jpg', 2),
(23, 'Sildagger', 29.99, 'Arrecada de plata d\'alta qualitat amb un imprès d\'un \"dagger\".', '/../PLAB%20TDIW/vista/img/silver/s3.jpg', 2),
(24, 'Silveyer', 39.99, 'Anell de plata d\'alta qualitat amb un dibuix d\'un ull.', '/../PLAB%20TDIW/vista/img/silver/s4.jpg', 2),
(25, 'Silflower', 29.99, 'Penjoll de plata d\'alta qualitat amb un afegit amb forma de flor.', '/../PLAB%20TDIW/vista/img/silver/s5.jpg', 2),
(26, 'Shy heart', 29.99, 'Anell de plata d\'alta qualitat amb un imprès d\'un cor tímid.', '/../PLAB%20TDIW/vista/img/silver/s6.jpg', 2),
(27, 'Mon Amour', 49.99, 'Penjoll de plata d\'alta qualitat amb un afegit amb la paraula \"AMOUR\".', '/../PLAB%20TDIW/vista/img/silver/s7.jpg', 2),
(28, 'Define string', 39.99, 'Penjoll de plata d\'alta qualitat bàsic.', '/../PLAB%20TDIW/vista/img/silver/s8.jpg', 2),
(29, 'Silver king', 39.99, 'Penjoll de plata d\'alta qualitat amb un dibuix d\'un caballet de mar. ', '/../PLAB%20TDIW/vista/img/silver/s9.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `direccio` text NOT NULL,
  `codiPostal` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `poblacio` text NOT NULL,
  `imatgePerfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `nom`, `direccio`, `codiPostal`, `email`, `password`, `poblacio`, `imatgePerfil`) VALUES
(1, 'Alejo de Urrengoechea', 'Calle Nunca', 98765, 'alejo@gmail.com', '$2y$10$sRFmIKepBRy28aT/yTGfAeTL2PWLrQ7zhtSQv4zI6CEJVB8NB1ipa', 'Barcelona', '/../PLAB%20TDIW/vista/img/imatge_perfil/IMG_1711-4.jpg'),
(2, 'Joel Prat Vilanova', 'Carrer Joan XXIII', 8251, 'jpratv23@gmail.com', '$2y$10$sEeUFhLWCoZ6UGU0YzQsyu8McuK8aUD4WKnUKhvKGDPozILbBfD..', 'Santpedor', '/../PLAB%20TDIW/vista/img/imatge_perfil/IMG_1883.jpg'),
(3, 'Joan Prat Aranda', 'Carrer Joan XXIII', 8251, 'joenprat11@gmail.com', '$2y$10$yDGaN8h/TPXmLHTyg016ruuz560JHBGKJHwWuEfjpwGucvXuZdlZ6', 'Santpedor', ''),
(4, 'Judit Prat', 'Carrer Joan XXIII', 8251, 'juditpratv@gmail.com', '$2y$10$6iIuC0gQHVw7fogLBW.73.GG1heqVFLBhHiu0g3GEJ2yYnxpF61xO', 'Santpedor', ''),
(5, 'Ingrid', 'Carrer Joan XXIII', 8251, 'ingridvc69@gmail.com', '$2y$10$zgzC/asS1jRw1ryDOzALj.T7WdIiJ9imcGMgKBLPF8UpI8FiRlZMS', 'Santpedor', ''),
(6, 'Nuria Guix', 'Carrer Joan XXIII', 8251, 'nuria.guix.alum@dauro.cat', '$2y$10$q7HpO4qTxQV6poyyMfQwMe8xOEpJlPCkGh3qMoLEo1tLLSCpNBhjC', 'Santpedor', ''),
(7, 'Alejo de Urrengoechea', 'Calle Nunca', 98765, 'alejo@gmail.com', '$2y$10$cauFxv/q9LVSshFibWPlQOFaBnqLQp1lDr5KwdtcC2xX8ws/qfSIy', 'Barcelona', ''),
(8, 'Arnau Masana Silvestre', 'Calle MDLR', 12345, 'arnau@arnau.com', '$2y$10$DTux79VvqbA/SnidroxEquR9hDj4T1DR2SpJBPJ23qNaz7ayEKCdS', 'Moscu', ''),
(9, 'Erik Martin Garzon', 'Calle Siempre', 8240, 'erik@erik.com', '$2y$10$uxEa.T7PFDEg/YiJ8u89puL9KA49a3i6XQzny0Js58ovYaScC9hNG', 'Manresa', ''),
(10, '', '', 0, '', '$2y$10$RKqnCr2bstGLNCafn1OF2u0CqrMBDIxdr5RsXkCaxG32W05IAzcui', '', ''),
(11, 'Bimba', 'Calle Siempre', 12345, 'bimba@bimba.cat', '$2y$10$u7mSpHCwpwPcqD/HpBUUOuhO5ZBwMoTlxoGFj1FZG7iCJMGFt.hMW', 'Sant Adria', ''),
(12, 'Carles', 'casa meva', 12345, 'carles@gmail.com', '$2y$10$eLmpRBoLanyUpSezEiMZn.Kzs/XAuHg/RPJ3dnBZKegynj9fFSPfy', 'Santpedor', '/../PLAB%20TDIW/vista/img/imatge_perfil/IMG_3082.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comandes`
--
ALTER TABLE `comandes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liniacomanda`
--
ALTER TABLE `liniacomanda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-producte` (`idProductes`),
  ADD KEY `id-comanda` (`idComanda`);

--
-- Indices de la tabla `productes`
--
ALTER TABLE `productes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comandes`
--
ALTER TABLE `comandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `liniacomanda`
--
ALTER TABLE `liniacomanda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productes`
--
ALTER TABLE `productes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `liniacomanda`
--
ALTER TABLE `liniacomanda`
  ADD CONSTRAINT `liniacomanda_ibfk_1` FOREIGN KEY (`idProductes`) REFERENCES `productes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liniacomanda_ibfk_2` FOREIGN KEY (`idComanda`) REFERENCES `comandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productes`
--
ALTER TABLE `productes`
  ADD CONSTRAINT `productes_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
