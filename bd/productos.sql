-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2016 a las 18:57:02
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sdproductos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(255) UNSIGNED NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `imagen` varchar(20) NOT NULL
) ENGINE=CSV DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `categoria`, `imagen`) VALUES
(9, 'Galaxy S7 Edge', 742990, 'Galaxy Edge S7 le da libertad a t? imaginaci?n,experiencia de uso incomparable con funciones avanzadas y dise?o sofisticado.', 'telefonia', 'image/9.jpg'),
(8, 'Alcatel 1050', 15000, 'El nuevo Alcatel 1050 es un terminal simple y econ?mico, que contiene las prestaciones necesarias para que hables y escribas de manera sencilla. El terminal cuenta con pantalla de 1,77", c?mara VGA, y aplicaciones como Calculadora, Radio FM y Reproductor de MP3. ', 'telefonia', 'image/8.jpg'),
(7, 'Huawei Telefono', 6990, 'Telefon?a Fija Entel Hogar.', 'telefonia', 'image/7.jpg'),
(6, 'Xbox One 1TB', 349990, 'Lidera a los equipos a trav?s de escenarios de combate tensos y emocionantes en Rainbow Six Siege, en donde el ?xito se obtiene luego de una preparaci?n inteligente y de una improvisaci?n estrat?gica.', 'electronica', 'image/6.jpg'),
(5, 'Samsung Gear VR Lite', 120990, 'Lentes de Realidad Aumentada. Compatibles con tu Samsung Galaxy. Para que disfrutes de la realidad virtual como ning?n otro.', 'electronica', 'image/5.jpg'),
(4, 'Sony? DSC-W800 ', 74520, 'La c?mara digital compacta Sony W800 es perfecta para obtener de manera f?cil fotograf?as y videos en HD (720p). Permite acercamientos gracias a su zoom ?ptico de 5x. Tomar fotos es f?cil, los botones est?n ubicados de manera que es c?modo y f?cil de usarlos. ', 'electronica', 'image/4.jpg'),
(3, 'Apple? Ipad Pro', 722990, 'Con tegnologia Touch ID y iOS 9, y un nuevo acabado. iPad Pro est? alimentado por un chip A9 con arquitectura de 64 bits. As? se obtiene un rendimiento ?ptimo en un dispositivo que puede llevar con usted donde quiera que vaya', 'computacion', 'image/3.jpg'),
(2, 'Lenovo AIO C20-00', 299990, 'Obtenga todo lo que necesita: Una computadora, un monitor y unos altavoces en un dise?o accesible que ahorra espacio y que est? hecho para el entretenimiento y la productividad', 'computacion', 'image/2.jpg'),
(1, 'Notebook ASUS E402SA', 190000, 'Dise?ado para las multitareas diarias y el entretenimiento, los notebooks ASUS redefinen sus expectativas en portabilidad. El E402SA cuenta con un procesador Intel Celeron N3150 Quad Core, 500 GB de capacidad de almacenamiento, m?ltiples puertos USB para la transferencia r?pida de datos.', 'computacion', 'image/1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
