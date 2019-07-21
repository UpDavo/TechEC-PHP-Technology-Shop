-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2019 at 02:54 PM
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
-- Database: `techec`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `codCli` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `nickname` varchar(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `pas` varchar(30) NOT NULL,
  `fecha_creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`codCli`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`codCli`, `nombre`, `nickname`, `correo`, `pas`, `fecha_creado`) VALUES
(5, 'Anthony Villegas', '', 'advillegas@uees.edu.ec', '12x3x4x5', '2019-07-21 14:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `detallepedido`
--

DROP TABLE IF EXISTS `detallepedido`;
CREATE TABLE IF NOT EXISTS `detallepedido` (
  `numPedido` int(11) NOT NULL,
  `codpro` int(11) NOT NULL,
  `can` int(11) NOT NULL,
  KEY `numPedido` (`numPedido`),
  KEY `codpro` (`codpro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detallepedido`
--

INSERT INTO `detallepedido` (`numPedido`, `codpro`, `can`) VALUES
(1, 21, 2),
(1, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `numPedido` int(11) NOT NULL AUTO_INCREMENT,
  `codCli` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`numPedido`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`numPedido`, `codCli`, `fecha`) VALUES
(1, '3', '2019-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `codpro` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `detalle` varchar(1000) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`codpro`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`codpro`, `descripcion`, `precio`, `stock`, `estado`, `detalle`, `imagen`) VALUES
(25, 'Mouse Fancy', '400.00', 2, 'Normal', 'Mouse perfecto para gente que tiene demasiado dinero', 'mouse.jpg'),
(24, 'Kit Gamer', '70.00', 5, 'Oferta', 'Kit perfecto para las personas que se encuentra iniciando en el mundo de los videojuegos, perfecto para principiantes', 'kit-gamer.jpg'),
(23, 'Monitor a 144 Hz', '200.00', 10, 'Normal', 'Monitor que permite una gran flexibilidad a la hora de jugar para obtener la mayor cantidad de fotogramas posibles', 'monitor144.jpg'),
(22, 'Disco Duro Solido 512 GB', '120.00', 7, 'Normal', 'Un disco de gran velocidad para el procesamiento de archivos, muy util para la edicion de videos', 'disco.jpg'),
(21, 'Case multi ventilador', '140.00', 10, 'Oferta', 'Case adaptado para ingresar una gran cantidad de ventiladores, perfecto para una gran cantidad de procesamiento que necesite enfriarse', 'case2.jpg'),
(20, 'Case color', '120.00', 15, 'Normal', 'Case adaptado para una mayor flexibilidad al momento de instalar varias tarjetas de video', 'case1.jpg'),
(26, 'Placa Madre Fancy', '100.00', 20, 'Normal', 'Placa que permite modulos de ram ddr4 y procesadores de ultima generacion', 'placa.jpg'),
(27, 'Memorias Ram Dual Channel 8gb C/U', '80.00', 30, 'Oferta', 'Modulos de Memoria ram para doble canal garantizando una mejor velocidad en la computadora', 'ram.jpg'),
(28, 'Refrigeracion Liquida RGB', '230.00', 40, 'Normal', 'Kit de refrigeracion liquida para mantener el procesador en una temperatura que no ponga en riesgo el resto de los componentes', 'refrigeracion.jpg'),
(29, 'Tarjeta de video RTX 2080 TI', '350.00', 20, 'Oferta', 'La tarjeta de video RTX 2080 TI garantiza la capatidad para el funcionamiento de todos los tipos de tareas que necesiten un poder grafico en el medio, siendo asi, una de las mejores tarjetas del medio', 'tarjeta.jpg'),
(30, 'Teclado Mecanico HyperX RGB', '150.00', 30, 'Normal', 'Teclado mecanico con retro iluminacion RGB y pulsadores Mx Blue que garantizan un mejor tacto a la hora de escribir', 'teclado-mecanico.jpg'),
(31, 'Alexa 100% Real no Fake', '100.00', 20, 'Oferta', 'Alexa es el servicio de voz ubicado en la nube de Amazon disponible en los dispositivos de Amazon y dispositivos tercios con Alexa integrada.', 'alexa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `codUsu` int(11) NOT NULL AUTO_INCREMENT,
  `nomUsu` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `pasUsu` varchar(30) NOT NULL,
  PRIMARY KEY (`codUsu`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`codUsu`, `nomUsu`, `correo`, `pasUsu`) VALUES
(1, 'Anita Diaz', 'Admin@gmail.com', 'abc123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
