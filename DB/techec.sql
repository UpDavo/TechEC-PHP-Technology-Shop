-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2019 at 05:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techec2`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `pas` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `nickname`, `email`, `phone`, `address`, `pas`, `created`, `modified`, `status`) VALUES
(3, 'ANTHONY VILLEGAS', 'DANIELGD20', 'advillegas@uees.edu.ec', '0994504722', 'CDLA GIRASOLES GUAYAQUIL', '$2y$10$MIvU.CMpZfluSSzfNY51XekB0GrzTFj1Gubf4yeefN3XLXiT5uoEi', '2019-07-29 00:30:04', '2019-07-29 00:30:04', '1'),
(4, 'CUENTA  PRUEBA', 'DANONINO', 'user@gmail.com', '0999664758', 'SAMBORONDON ECUADOR', '$2y$10$gvs2ZMmT7s2L2/BrG0pDD.NfrdYEq/3hzHuzEtBX953hngqQaNNv6', '2019-07-29 02:05:21', '2019-07-29 02:05:21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mis_productos`
--

DROP TABLE IF EXISTS `mis_productos`;
CREATE TABLE IF NOT EXISTS `mis_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `stock`, `estado`, `imagen`, `price`, `created`, `modified`, `status`) VALUES
(5, 'Mouse Fancy', 'Mouse perfecto para gente que tiene demasiado dinero', 2, 'Normal', 'mouse.jpg', 400.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(6, 'Kit Gamer', 'Kit perfecto para las personas que se encuentra iniciando en el mundo de los videojuegos, perfecto para principiantes', 5, 'Oferta', 'kit-gamer.jpg', 70.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(7, 'Monitor a 144 Hz', 'Monitor que permite una gran flexibilidad a la hora de jugar para obtener la mayor cantidad de fotogramas posibles', 10, 'Normal', 'monitor144.jpg', 200.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(8, 'Disco Duro Solido 512 GB', 'Un disco de gran velocidad para el procesamiento de archivos, muy util para la edicion de videos', 7, 'Normal', 'disco.jpg', 120.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(9, 'Case multi ventilador', 'Case adaptado para ingresar una gran cantidad de ventiladores, perfecto para una gran cantidad de procesamiento que necesite enfriarse', 10, 'Oferta', 'case2.jpg', 140.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(10, 'Case color', 'Case adaptado para una mayor flexibilidad al momento de instalar varias tarjetas de video', 15, 'Oferta', 'case1.jpg', 120.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(11, 'Placa Madre Fancy', 'Placa que permite modulos de ram ddr4 y procesadores de ultima generacion', 20, 'Normal', 'placa.jpg', 100.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(12, 'Memorias Ram Dual Channel 8gb C/U', 'Modulos de Memoria ram para doble canal garantizando una mejor velocidad en la computadora', 30, 'Oferta', 'ram.jpg', 80.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(13, 'Refrigeracion Liquida RGB', 'Kit de refrigeracion liquida para mantener el procesador en una temperatura que no ponga en riesgo el resto de los componentes', 40, 'Normal', 'refrigeracion.jpg', 230.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(14, 'Tarjeta de video RTX 2080 TI', 'La tarjeta de video RTX 2080 TI garantiza la capatidad para el funcionamiento de todos los tipos de tareas que necesiten un poder grafico en el medio, siendo asi, una de las mejores tarjetas del medio', 20, 'Oferta', 'tarjeta.jpg', 350.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(15, 'Teclado Mecanico HyperX RGB', 'Teclado mecanico con retro iluminacion RGB y pulsadores Mx Blue que garantizan un mejor tacto a la hora de escribir', 30, 'Normal', 'teclado-mecanico.jpg', 150.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1'),
(16, 'Alexa 100% Real no Fake', 'Alexa es el servicio de voz ubicado en la nube de Amazon disponible en los dispositivos de Amazon y dispositivos tercios con Alexa integrada.', 20, 'Oferta', 'alexa.jpg', 100.00, '2019-07-28 23:13:05', '2019-07-28 23:13:05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

DROP TABLE IF EXISTS `orden`;
CREATE TABLE IF NOT EXISTS `orden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`id`, `customer_id`, `total_price`, `created`, `modified`, `status`) VALUES
(8, 3, 100.00, '2019-07-29 02:19:07', '2019-07-29 02:19:07', '1'),
(9, 3, 550.00, '2019-07-29 09:34:51', '2019-07-29 09:34:51', '1'),
(10, 4, 500.00, '2019-07-29 09:37:20', '2019-07-29 09:37:20', '1'),
(11, 3, 510.00, '2019-07-29 12:13:39', '2019-07-29 12:13:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orden_articulos`
--

DROP TABLE IF EXISTS `orden_articulos`;
CREATE TABLE IF NOT EXISTS `orden_articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orden_articulos`
--

INSERT INTO `orden_articulos` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(6, 8, 16, 1),
(7, 9, 14, 1),
(8, 9, 16, 2),
(9, 10, 14, 1),
(10, 10, 15, 1),
(11, 11, 6, 1),
(12, 11, 10, 2),
(13, 11, 7, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
