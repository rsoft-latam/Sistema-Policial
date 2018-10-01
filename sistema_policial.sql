-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-08-2018 a las 02:38:43
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_policial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE IF NOT EXISTS `cuenta` (
  `CodigoCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroDocumento` int(11) NOT NULL,
  `CorreoElectronico` text NOT NULL,
  `Contrasena` text NOT NULL,
  `Tipo` text NOT NULL,
  `Foto` text NOT NULL,
  PRIMARY KEY (`CodigoCuenta`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`CodigoCuenta`, `NumeroDocumento`, `CorreoElectronico`, `Contrasena`, `Tipo`, `Foto`) VALUES
(1, 6989918, 'dota@hotmail.com', 'riki', 'Usuario', 'Fotos/policia1.png'),
(4, 1221345, 'riki@hotmail.com', 'r', 'Usuario', 'Fotos/20151023_180434.jpg'),
(6, 1234567, 'bolivia@hotmail.com', '123456', 'Administrador', 'Fotos/policia2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delito`
--

DROP TABLE IF EXISTS `delito`;
CREATE TABLE IF NOT EXISTS `delito` (
  `CodigoDelito` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoDetenido` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Tipo` text NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`CodigoDelito`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detenido`
--

DROP TABLE IF EXISTS `detenido`;
CREATE TABLE IF NOT EXISTS `detenido` (
  `CodigoDetenido` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroDocumento` int(11) NOT NULL,
  `Estatura` double NOT NULL,
  `Peso` double NOT NULL,
  `ColorPiel` text NOT NULL,
  `ColorCabello` text NOT NULL,
  `Rasgos` text NOT NULL,
  `Foto` text NOT NULL,
  PRIMARY KEY (`CodigoDetenido`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detenido`
--

INSERT INTO `detenido` (`CodigoDetenido`, `NumeroDocumento`, `Estatura`, `Peso`, `ColorPiel`, `ColorCabello`, `Rasgos`, `Foto`) VALUES
(2, 8663652, 1.7, 7.9, 'Blanco', 'sdfsd', 'fdsf', 'Fotos/preso2.jpg'),
(3, 2344333, 3, 7, 'sdfds', 'sdf', 'sdf', 'Fotos/,.,.,.,..JPG'),
(4, 23423, 3, 5, 'sdf', 'sdfsdf', 'sdf', 'Fotos/images_064.jpg'),
(5, 32534564, 5, 6, 'dsf', 'sdf', 'sdf', 'Fotos/images_047.jpg'),
(6, 3543534, 4, 6, 'dsfds', 'sdfsdf', 'sdf', 'Fotos/images_044.jpg'),
(9, 4555, 1.7, 65.6, 'Amarillo', 'Negro', 'Negro', 'Fotos/images_084.jpg'),
(10, 2147483647, 3, 5, 'qqqqqqqqq', 'qqqqqqqq', 'qqqqqqqqqqqqq', 'Fotos/DSC07325.JPG'),
(11, 456777, 1, 7, 'Palida', 'Rubio', 'Caucasico', 'Fotos/images_056.jpg'),
(13, 8522655, 1, 67, 'Blanca', 'Negro', 'Aymara', 'Fotos/Delincuente8.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `TipoDocumento` text NOT NULL,
  `NumeroDocumento` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Paterno` text NOT NULL,
  `Materno` text NOT NULL,
  `Genero` text NOT NULL,
  `EstadoCivil` text NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Departamento` text NOT NULL,
  `Provincia` text NOT NULL,
  `Municipio` text NOT NULL,
  `Zona` text NOT NULL,
  `Calle` text NOT NULL,
  `Numero` int(11) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Nacionalidad` text NOT NULL,
  PRIMARY KEY (`NumeroDocumento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`TipoDocumento`, `NumeroDocumento`, `Nombre`, `Paterno`, `Materno`, `Genero`, `EstadoCivil`, `Telefono`, `Celular`, `Departamento`, `Provincia`, `Municipio`, `Zona`, `Calle`, `Numero`, `FechaNacimiento`, `Nacionalidad`) VALUES
('Cedula de Identidad', 7894561, 'Juan ', 'Quispe', 'Mamani', 'Masculino', 'aaaaaaaaaaaa1', 4234234, 324234, 'sdfdsfdsf', 'dsfsdf', 'dsfdsf', 'dsfdsf', 'sdfsdf', 1, '2000-01-01', 'Peruano'),
('Cedula de Identidad', 23423, 'Rolando ', 'Villazon', 'Prada', 'Masculino', 'dsfds', 234234, 32456, 'dsfds', 'sdfsdf', 'dsfdsf', 'gfh', 'gfh', 234, '2000-01-01', 'Peruano'),
('Cedula de Identidad', 6989918, 'Ricardo ', 'Pari', 'Cahuna', 'Masculino', 'Soltero', 2831132, 65136419, 'La Paz', 'Murillo', 'El Alto', 'Cosmos 78', 'E', 2, '1990-11-17', 'Peruano'),
('Cedula de Identidad', 1268356, 'Issabel ', 'Mamani', 'Claure', 'Femenino', 'Casada', 2835678, 67845677, 'Pando', 'La Recaja', 'Pacajes', 'San Mateo', 'Albarado', 78, '1983-08-01', 'Peruano'),
('Cedula de Identidad', 15216322, 'Juan', 'Quispe', 'Machaca', 'Masculino', 'Soltero', 124234, 2147483647, 'Santa Cruz', 'Murillo', 'La Paz', 'Abril', 'A', 1, '1994-08-04', 'Peruano'),
('Cedula de Identidad', 7898568, 'Andrea', 'Tejada', 'Paredes', 'Femenino', 'Soltera', 2831856, 67453425, 'Santa Cruz', 'La Recaja', 'Palca', 'San Martin', 'Avaroa', 33, '1971-08-16', 'Peruano'),
('Cedula de Identidad', 7866578, 'Patricia', 'Ibañez', 'Apaza', 'Femenino', 'Divorciada', 2835566, 67895672, 'Cochabamba', 'Murillo', 'La Recaja', 'Pacajes', 'Flores', 11, '1985-09-17', 'Peruano'),
('Pasaporte', 8522655, 'Wilson', 'Guarachi', 'Apaza', 'Masculino', 'Viudo', 2678877, 64235567, 'Santa Cruz', 'Palca', 'Tercer Anillo', 'El Matadero', 'Rodriguez', 56, '1997-03-03', 'Colombiano'),
('Cedula de Identidad', 5678900, 'Hendrick', 'Pari', 'Cahuna', 'Masculino', 'Soltero', 2835676, 45789673, 'La Paz', 'Murillo', 'La Recaja', 'San Luis Taza', 'E', 2, '1999-08-16', 'Peruano'),
('Cedula de Identidad', 67343321, 'Gabriel', 'Castellon', 'Ticona', 'Masculino', 'Soltero', 2831132, 65748890, 'La Paz', 'La Recaja', 'Pacajes', 'San Martin', 'Albarado', 34, '1985-10-16', 'Peruano'),
('Cedula de Identidad', 45678899, 'Esteban', 'Gutierrez', 'Pari', 'Masculino', 'Soltero', 124234, 65748890, 'Santa Cruz', 'La Recaja', 'El Alto', 'Villa Adela', 'Albarado', 5, '1983-10-18', 'Peruano'),
('Cedula de Identidad', 2344556, 'Monica', 'Sosa', 'Albarado', 'Femenino', 'Soltera', 2831856, 67453425, 'Chuquisaca', 'La Recaja', 'Pacajes', 'Villa Adela', 'Avaroa', 6, '1985-07-01', 'Peruano'),
('Cedula de Identidad', 8663652, 'Rolando', 'Pari', 'Cahuna', 'Masculino', 'Soltero', 2831132, 70521314, 'La Paz', 'Murillo', 'El Alto', 'Cosmos 78', 'E', 2, '1997-07-02', 'Peruano'),
('Libreta Militar', 3456789, 'juan', 'tenorio', 'palo', 'Masculino', 'diveociasdo', 23654645, 5676867, 'dsfdsf', 'sdf', 'dfg', 'dfg', 'dfgfd', 3, '1996-03-04', 'boliviano'),
('Cedula de Identidad', 32534564, 'Gabriel', 'Montesino', 'Gutierrez', 'Masculino', 'dsfsd', 23423, 23432, 'sdfds', 'sdfds', 'sdfsd', 'sdf', 'dsfsd', 3, '2000-01-01', 'sdfsdf'),
('Cedula de Identidad', 3543534, 'sdfsdfsdf', 'sdf', 'sdfsdfsd', 'Masculino', 'sdfdgdf', 32, 567567, 'sdfdsf', 'sdfsd', 'sdfsdf', 'sdfsd', 'sdfsd', 333, '2000-01-01', 'sdfsdf'),
('Cedula de Identidad', 1221345, 'rrrrrr', 'rrrrrr', 'rrrrrrrrr', 'Masculino', 'rrrrrr', 3333, 3333, 'rrrrrrr', 'rrrrrrrrrrr', 'rrrrrrrrrrr', 'rrrrrrrrrr', 'rrrrrrrrrrrrr', 2, '2000-01-01', 'rrrrrrrrrrrr'),
('Cedula de Identidad', 456777, 'Dayana', 'Mamani', 'Tarquino', 'Masculino', 'Casada', 45666, 23443543, 'Tarija', 'Omasuyu', 'La Caja', 'Achacachi', 'El Veloz', 77, '2000-01-01', 'EspaÃ±ola'),
('Cedula de Identidad', 1234567, 'Juan', 'Quiroga', 'Ramirez', 'Masculino', 'Casado', 2831132, 65136419, 'La Paz', 'La Recaja', 'Murillo', 'Santiago Segundo', 'Salvador', 45, '1990-11-17', 'Argentino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `policia`
--

DROP TABLE IF EXISTS `policia`;
CREATE TABLE IF NOT EXISTS `policia` (
  `CodigoPolicia` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroDocumento` int(11) NOT NULL,
  `Grado` text NOT NULL,
  PRIMARY KEY (`CodigoPolicia`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `policia`
--

INSERT INTO `policia` (`CodigoPolicia`, `NumeroDocumento`, `Grado`) VALUES
(1, 6989918, 'Sargento'),
(2, 6666666, 'Teniente'),
(3, 9999999, 'sarna'),
(4, 1221345, 'rrrrrrrrrrr'),
(5, 2147483647, '666666666'),
(6, 1234567, 'Teniente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
