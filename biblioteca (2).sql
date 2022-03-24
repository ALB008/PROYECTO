-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-03-2022 a las 01:18:31
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `createActividad`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createActividad` (IN `nomA` VARCHAR(50), IN `descA` VARCHAR(200), IN `ubiA` VARCHAR(30), IN `diaA` VARCHAR(9), IN `horaA` TIME, IN `limitA` INT(2), IN `duracA` INT(5))  BEGIN
INSERT Actividad(Nom_activ,Desc_activ,Ubi_activ,Dia_activ,Hora_activ,Limit_activ,Durac_activ) 
VALUES (nomA,descA,ubiA,diaA,horaA,limitA,duracA);
END$$

DROP PROCEDURE IF EXISTS `createAutor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createAutor` (IN `nomAu` VARCHAR(130), IN `origeAu` VARCHAR(70), IN `estadoAu` VARCHAR(9))  BEGIN
INSERT Autor(Nom_aut,Orige_aut,estado_aut) 
VALUES (nomAu,origeAu,estadoAu);
END$$

DROP PROCEDURE IF EXISTS `createEditorial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createEditorial` (IN `nomEd` VARCHAR(50), IN `ciudEd` VARCHAR(50), IN `direcEd` VARCHAR(70), IN `telEd` VARCHAR(15))  BEGIN
INSERT editorial(nom_edit,ciud_edit,direc_edit,tel_edit) 
VALUES (nomEd,ciudEd,direcEd,telEd);
END$$

DROP PROCEDURE IF EXISTS `createEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createEmpleado` (IN `idEm` INT(20), IN `nomEm` VARCHAR(30), IN `apellEm` VARCHAR(70), IN `nacimEm` DATE, IN `telEm` VARCHAR(13), IN `emailEm` VARCHAR(50), IN `direcEm` VARCHAR(30), IN `genEm` VARCHAR(10), IN `estudEm` VARCHAR(30))  BEGIN
INSERT Empleado(id_emp,nom_emp,apell_emp,nacim_emp,tel_emp,email_emp,direc_emp,gen_emp,estud_emp) 
VALUES (idEm,nomEm,apellEm,nacimEm,telEm,emailEm,direcEm,genEm,estudEm);
END$$

DROP PROCEDURE IF EXISTS `createEscribe`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createEscribe` (`autEs` INT, `libEs` INT)  BEGIN
INSERT INTO escribe(Cod_aut_esc, ISBN_lib_esc) 
VALUES (autEs, libEs);
END$$

DROP PROCEDURE IF EXISTS `createGenero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createGenero` (IN `nomG` VARCHAR(20))  BEGIN
INSERT Genero(nom_gen) 
VALUES (nomG);
END$$

DROP PROCEDURE IF EXISTS `createLibro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createLibro` (IN `isbnL` INT(13), IN `codL` VARCHAR(10), IN `nomL` VARCHAR(50), IN `estadoL` VARCHAR(15), IN `descL` VARCHAR(200), IN `annoL` YEAR(4), IN `pagL` INT(4), IN `editL` INT(11), IN `empL` INT(20))  BEGIN
INSERT Libro(ISBN_lib,Cod_lib,Nom_lib,Estado_lib,Desc_lib,Anno_lib,Pag_lib,Cod_edit_lib,Id_emp_lib) 
VALUES (isbnL,codL,nomL,estadoL,descL,annoL,pagL,editL,empL);
END$$

DROP PROCEDURE IF EXISTS `createParticipa`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createParticipa` (`usuP` INT, `activP` INT)  BEGIN
INSERT INTO participa(Id_usu_part, Cod_activ_part)
values(usuP, activP);
END$$

DROP PROCEDURE IF EXISTS `createPrestamo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createPrestamo` (`usuP` INT, `isbnP` INT, `presP` DATE, `devP` DATE, `empP` INT)  BEGIN
INSERT INTO Prestamo(Id_usu_pres, ISBN_lib_pres, Fpres_pres, Fdev_pres, Id_emp_pres)
values(usuP, isbnP, presP, devP, empP);
END$$

DROP PROCEDURE IF EXISTS `createTiene`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createTiene` (`isbnLT` INT, `genT` INT)  BEGIN
INSERT INTO Tiene(ISBN_libT, Cod_genT) 
VALUES (isbnLT, genT);
END$$

DROP PROCEDURE IF EXISTS `createUsser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUsser` (`nomUs` VARCHAR(15), `contraUs` VARCHAR(10), `tipoUs` VARCHAR(13), `ideUs` INT)  BEGIN
INSERT INTO usuario_sistema(Nom_sistem, Contra_sistem, Tipo_sistem, Id_emp_sistem) 
VALUES (nomUs, contraUs, tipoUs, ideUs);
END$$

DROP PROCEDURE IF EXISTS `createUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUsuario` (IN `idU` INT(20), IN `nomU` VARCHAR(30), IN `apellU` VARCHAR(70), IN `nacimU` DATE, IN `telU` VARCHAR(13), IN `emailU` VARCHAR(50), IN `direcU` VARCHAR(30), IN `genU` VARCHAR(10), IN `idEmpleU` INT(20))  BEGIN
INSERT Usuario(id_usu,nom_usu,apell_usu,nacim_usu,tel_usu,email_usu,direc_usu,id_emp_usu) 
VALUES (idU,nomU,apellU,nacimU,telU,emailU,direcU,genU,idEmpleU);
END$$

DROP PROCEDURE IF EXISTS `deleteActividad`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteActividad` (`CodA` INT)  BEGIN
DELETE from Actividad where Cod_activ = CodA;
END$$

DROP PROCEDURE IF EXISTS `deleteAutor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteAutor` (`codAu` INT)  BEGIN
delete from Autor where Cod_aut = codAu;
END$$

DROP PROCEDURE IF EXISTS `deleteEditorial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEditorial` (`CodEd` INT)  BEGIN
DELETE from Editorial where Cod_edit = codEd;
END$$

DROP PROCEDURE IF EXISTS `deleteEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEmpleado` (`idEm` INT)  BEGIN
DELETE from Empleado where id_emp = idEm;
END$$

DROP PROCEDURE IF EXISTS `deleteEscribe`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteEscribe` (`codEs` INT)  BEGIN
delete from escribe where Cod_esc = codEs;
END$$

DROP PROCEDURE IF EXISTS `deleteGenero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteGenero` (`codG` INT)  BEGIN
DELETE from Genero where Cod_gen = codG;
END$$

DROP PROCEDURE IF EXISTS `deleteLibro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteLibro` (`isbnL` INT)  BEGIN
DELETE from Libro where ISBN_lib = codL;
END$$

DROP PROCEDURE IF EXISTS `deleteParticipa`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteParticipa` (`codP` INT)  BEGIN 
DELETE from participa where Cod_part = codP;
END$$

DROP PROCEDURE IF EXISTS `deletePrestamo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deletePrestamo` (`codP` INT)  BEGIN
delete from Prestamo where Cod_pres = codP;
END$$

DROP PROCEDURE IF EXISTS `deleteTiene`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteTiene` (`codT` INT)  BEGIN
DELETE FROM Tiene where Cod_T = codT;
END$$

DROP PROCEDURE IF EXISTS `deleteUsser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUsser` (`idUs` INT)  BEGIN
delete from usuario_sistema where id_sistem = idUs;
END$$

DROP PROCEDURE IF EXISTS `deleteUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUsuario` (`idU` INT)  BEGIN
DELETE from usuario where id_usu = idU;
END$$

DROP PROCEDURE IF EXISTS `updateActividad`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateActividad` (`codA` INT, `nomA` VARCHAR(50), `descA` VARCHAR(200), `ubiA` VARCHAR(30), `diaA` VARCHAR(9), `horaA` TIME, `limitA` INT, `duracA` INT)  BEGIN
update Actividad set Nom_activ = nomA, Desc_activ = descA, Ubi_activ = ubiA, Dia_activ = diaA, Hora_activ = horaA, Limit_activ = limitA,Durac_activ = duracA
where Cod_activ = codA;
END$$

DROP PROCEDURE IF EXISTS `updateAutor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateAutor` (`CodAu` INT, `nomAu` VARCHAR(130), `origeAu` VARCHAR(70), `estadoAu` VARCHAR(9))  BEGIN
update Autor set Nom_aut = nomAu, Orige_aut = origeAu, estado_aut = estadoAu
where Cod_aut = CodAu;
END$$

DROP PROCEDURE IF EXISTS `updateEditorial`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEditorial` (`codEd` INT, `nomEd` VARCHAR(50), `ciudEd` VARCHAR(50), `direcEd` VARCHAR(70), `telEd` VARCHAR(15))  BEGIN
update editorial set nom_edit = nomEd, ciud_edit = ciudEd, direc_edit = direcEd, tel_edit = telEd
where Cod_edit = codEd;
END$$

DROP PROCEDURE IF EXISTS `updateEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEmpleado` (`idEm` INT, `nomEm` VARCHAR(30), `apellEm` VARCHAR(70), `nacimEm` DATE, `telEm` VARCHAR(13), `emailEm` VARCHAR(50), `direcEm` VARCHAR(30), `genEm` VARCHAR(10), `estudEm` VARCHAR(30))  BEGIN
UPDATE Empleado set nom_emp = nomEm, apell_emp = apellEm, nacim_emp = nacimEm, tel_emp = telEm, email_emp = emailEm, direc_emp = direcEm, gen_emp = genEm, estud_emp = estudEm where id_emp = idEm;
END$$

DROP PROCEDURE IF EXISTS `updateEscribe`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateEscribe` (`codEs` INT, `autEs` INT, `libEs` INT)  BEGIN
update escribe set Cod_aut_esc = autEs, ISBN_lib_esc = libEs 
where Cod_esc = codEs;
END$$

DROP PROCEDURE IF EXISTS `updateGenero`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateGenero` (`codG` INT, `nomG` VARCHAR(20))  BEGIN
UPDATE Genero set Nom_gen = nomG where Cod_gen = codG;
END$$

DROP PROCEDURE IF EXISTS `updateLibro`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateLibro` (`isbnL` INT, `codL` VARCHAR(10), `nomL` VARCHAR(50), `estadoL` VARCHAR(15), `descL` VARCHAR(200), `annoL` YEAR, `pagL` INT, `editL` INT, `empL` INT)  BEGIN
update Libro set Cod_lib = codL, Nom_lib = nomL, Estado_lib = estadoL, Desc_lib = descL, Anno_lib = annoL, Pag_lib = pagL,Cod_edit_lib = editL, Id_emp_lib = empL
where ISBN_lib = isbnL;
END$$

DROP PROCEDURE IF EXISTS `updateParticipa`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateParticipa` (`codP` INT, `usuP` INT, `activP` INT)  BEGIN
UPDATE participa SET Id_usu_part = usuP, Cod_activ_part = activP
where Cod_part = codP;
END$$

DROP PROCEDURE IF EXISTS `updatePrestamo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatePrestamo` (`codP` INT, `usuP` INT, `isbnP` INT, `presP` DATE, `devP` DATE, `empP` INT)  BEGIN
UPDATE Prestamo set Id_usu_pres = usuP, ISBN_lib_pres = isbnP, Fpres_pres = presP, Fdev_pres = devP, Id_emp_pres = empP
where Cod_pres = codP;
END$$

DROP PROCEDURE IF EXISTS `updateTiene`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateTiene` (`codT` INT, `isbnLT` INT, `genT` INT)  BEGIN
UPDATE Tiene set ISBN_libT= isbnLT, Cod_genT = genT 
where Cod_T = codT;
END$$

DROP PROCEDURE IF EXISTS `updateUsser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUsser` (`idUs` INT, `nomUs` VARCHAR(15), `contraUs` VARCHAR(10), `tipoUs` VARCHAR(13), `ideUs` INT)  BEGIN
update usuario_sistema set Nom_sistem = nomUs, Contra_sistem = contraUs, Tipo_sistem = tipoUs, Id_emp_sistem = ideUs
where id_sistem = idUs;
END$$

DROP PROCEDURE IF EXISTS `updateUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUsuario` (`idU` INT, `nomU` VARCHAR(30), `apellU` VARCHAR(70), `nacimU` DATE, `telU` VARCHAR(13), `emailU` VARCHAR(50), `direcU` VARCHAR(30), `genU` VARCHAR(10), `idEmpleU` INT)  BEGIN
update Usuario set nom_usu = nomU, apell_usu = apellU, nacim_usu = nacimU, tel_usu = telU, email_usu = emailU, direc_usu = direcU, gen_usu = genU, id_emp_usu = idEmpleU where id_usu = idU;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

DROP TABLE IF EXISTS `actividad`;
CREATE TABLE IF NOT EXISTS `actividad` (
  `Cod_activ` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_activ` varchar(50) NOT NULL,
  `Desc_activ` varchar(200) NOT NULL,
  `Ubi_activ` varchar(30) NOT NULL,
  `Dia_activ` varchar(9) NOT NULL,
  `Hora_activ` time NOT NULL,
  `Limit_activ` int(2) NOT NULL,
  `Durac_activ` int(5) NOT NULL,
  PRIMARY KEY (`Cod_activ`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `Cod_aut` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_aut` varchar(130) NOT NULL,
  `Orige_aut` varchar(70) NOT NULL,
  `Estado_aut` varchar(9) NOT NULL,
  PRIMARY KEY (`Cod_aut`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`Cod_aut`, `Nom_aut`, `Orige_aut`, `Estado_aut`) VALUES
(1, 'Gabriel Garcia Marquez', 'Colombia', 'Fallecido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

DROP TABLE IF EXISTS `editorial`;
CREATE TABLE IF NOT EXISTS `editorial` (
  `Cod_edit` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_edit` varchar(50) NOT NULL,
  `Ciud_edit` varchar(50) NOT NULL,
  `Direc_edit` varchar(70) NOT NULL,
  `Tel_edit` varchar(15) NOT NULL,
  PRIMARY KEY (`Cod_edit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `Id_emp` int(20) NOT NULL,
  `Nom_emp` varchar(30) NOT NULL,
  `Apell_emp` varchar(70) NOT NULL,
  `Nacim_emp` date NOT NULL,
  `Tel_emp` varchar(13) NOT NULL,
  `Email_emp` varchar(50) NOT NULL,
  `Gen_emp` varchar(10) NOT NULL,
  `Estud_emp` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_emp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escribe`
--

DROP TABLE IF EXISTS `escribe`;
CREATE TABLE IF NOT EXISTS `escribe` (
  `Cod_esc` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_aut_esc` int(11) NOT NULL,
  `ISBN_lib_esc` int(11) NOT NULL,
  PRIMARY KEY (`Cod_esc`),
  KEY `Cod_aut_esc` (`Cod_aut_esc`),
  KEY `ISBN_lib_esc` (`ISBN_lib_esc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `Cod_gen` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_gen` varchar(20) NOT NULL,
  PRIMARY KEY (`Cod_gen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `ISBN_lib` int(13) NOT NULL,
  `Cod_lib` varchar(10) NOT NULL,
  `Nom_lib` varchar(50) NOT NULL,
  `Estado_lib` varchar(15) NOT NULL,
  `Desc_lib` varchar(200) NOT NULL,
  `Anno_lib` year(4) NOT NULL,
  `Pag_lib` int(4) NOT NULL,
  `Cod_edit_lib` int(11) NOT NULL,
  `Id_emp_lib` int(20) NOT NULL,
  PRIMARY KEY (`ISBN_lib`),
  KEY `Cod_edit_lib` (`Cod_edit_lib`),
  KEY `Id_emp_lib` (`Id_emp_lib`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participa`
--

DROP TABLE IF EXISTS `participa`;
CREATE TABLE IF NOT EXISTS `participa` (
  `Cod_part` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usu_part` int(11) NOT NULL,
  `Cod_activ_part` int(11) NOT NULL,
  PRIMARY KEY (`Cod_part`),
  KEY `Cod_activ_part` (`Cod_activ_part`) USING BTREE,
  KEY `Id_usu_part` (`Id_usu_part`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
  `Cod_pres` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usu_pres` int(11) NOT NULL,
  `ISBN_lib_pres` int(11) NOT NULL,
  `Fpres_pres` date NOT NULL,
  `Fdev_pres` date NOT NULL,
  `Id_emp_pres` int(11) NOT NULL,
  PRIMARY KEY (`Cod_pres`),
  KEY `Id_usu_pres` (`Id_usu_pres`),
  KEY `ISBN_lib_pres` (`ISBN_lib_pres`),
  KEY `Id_emp_pres` (`Id_emp_pres`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiene`
--

DROP TABLE IF EXISTS `tiene`;
CREATE TABLE IF NOT EXISTS `tiene` (
  `Cod_T` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN_libT` int(11) NOT NULL,
  `Cod_genT` int(11) NOT NULL,
  PRIMARY KEY (`Cod_T`),
  KEY `ISBN_libT` (`ISBN_libT`),
  KEY `Cod_genT` (`Cod_genT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usu` int(20) NOT NULL,
  `Nom_usu` varchar(30) NOT NULL,
  `Apell_usu` varchar(70) NOT NULL,
  `Nacim_usu` date NOT NULL,
  `Tel_usu` varchar(13) NOT NULL,
  `Email_usu` varchar(50) NOT NULL,
  `Direc_usu` varchar(30) NOT NULL,
  `Gen_usu` varchar(10) NOT NULL,
  `Id_emp_usu` int(20) NOT NULL,
  PRIMARY KEY (`Id_usu`),
  KEY `Id_emp_usu` (`Id_emp_usu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_sistema`
--

DROP TABLE IF EXISTS `usuario_sistema`;
CREATE TABLE IF NOT EXISTS `usuario_sistema` (
  `Id_sistem` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_sistem` varchar(15) NOT NULL,
  `Contra_sistem` varchar(10) NOT NULL,
  `Tipo_sistem` varchar(13) NOT NULL,
  `Id_emp_sistem` int(11) NOT NULL,
  PRIMARY KEY (`Id_sistem`),
  KEY `Id_emp_sistem` (`Id_emp_sistem`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
