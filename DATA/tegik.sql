-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-09-2014 a las 05:02:19
-- Versión del servidor: 5.5.29
-- Versión de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tegik`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Deportes', '2014-09-12 01:34:25', '0000-00-00 00:00:00'),
(2, 'Tecnología', '2014-09-12 01:34:25', '0000-00-00 00:00:00'),
(3, 'Música', '2014-09-12 01:34:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `category_id`, `store_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 'Producto de prueba 2', '100', '2014-09-12 05:29:39', '2014-09-17 00:55:54'),
(3, 2, 1, 'Producto 2 modificado', '1500', '2014-09-12 06:02:25', '2014-09-17 00:56:39'),
(5, 1, 1, 'Producto JSON', '120', '2014-09-12 06:09:25', '0000-00-00 00:00:00'),
(6, 1, 1, 'Producto nuevo', '123', '2014-09-13 04:38:58', '0000-00-00 00:00:00'),
(7, 1, 1, 'Prueba JSON', '1234', '2014-09-13 04:45:42', '0000-00-00 00:00:00'),
(8, 2, 1, 'Ya jala?', '150', '2014-09-13 04:47:13', '0000-00-00 00:00:00'),
(9, 3, 1, 'Veamos si jala', '12345', '2014-09-13 05:00:37', '0000-00-00 00:00:00'),
(10, 0, 0, '', '', '2014-09-13 05:02:07', '2014-09-14 11:10:40'),
(11, 1, 1, 'Producto nuevo que se esc', '12000', '2014-09-17 02:56:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `store`
--

INSERT INTO `store` (`id`, `name`, `country`, `state`, `city`, `created_at`, `updated_at`) VALUES
(1, 'My Store', 'México', 'Nuevo León', 'Monterrey', '2014-09-12 01:33:48', '2014-09-12 05:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
