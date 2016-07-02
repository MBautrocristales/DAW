-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2016 at 05:46 AM
-- Server version: 5.7.12-0ubuntu1.1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MBAWA_001_DB`
--
CREATE DATABASE IF NOT EXISTS `MBAWA_001_DB` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `MBAWA_001_DB`;

-- --------------------------------------------------------

--
-- Table structure for table `anio`
--

CREATE TABLE `anio` (
  `idAnio` int(11) NOT NULL,
  `AnioAuto` varchar(45) NOT NULL,
  `idModelo` int(11) NOT NULL,
  `idAuto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anio`
--

INSERT INTO `anio` (`idAnio`, `AnioAuto`, `idModelo`, `idAuto`) VALUES
(1, '2000-2005', 1, 1),
(2, '2000-2005', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `idAuto` int(11) NOT NULL,
  `MarcaA` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`idAuto`, `MarcaA`) VALUES
(1, 'Ford'),
(4, 'Honda');

-- --------------------------------------------------------

--
-- Table structure for table `bodega`
--

CREATE TABLE `bodega` (
  `idBodega` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `P_Publico` double NOT NULL,
  `P_Instalado` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bodega`
--

INSERT INTO `bodega` (`idBodega`, `Stock`, `P_Publico`, `P_Instalado`) VALUES
(1, 95, 1500, 1800),
(2, 100, 1500, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `caracteristica`
--

CREATE TABLE `caracteristica` (
  `idCaracteristica` int(11) NOT NULL,
  `Color` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caracteristica`
--

INSERT INTO `caracteristica` (`idCaracteristica`, `Color`) VALUES
(1, 'GGN'),
(2, 'GTN');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `NombreCat` varchar(45) NOT NULL,
  `DescripcionCat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `NombreCat`, `DescripcionCat`) VALUES
(1, 'Parabrisas', 'Cristal delantero'),
(2, 'Medallon', 'Cristal trasero');

-- --------------------------------------------------------

--
-- Table structure for table `detallesuc`
--

CREATE TABLE `detallesuc` (
  `idDetalleSuc` int(11) NOT NULL,
  `idSalida` int(11) NOT NULL,
  `idBodega` int(11) NOT NULL,
  `idSucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entrada`
--

CREATE TABLE `entrada` (
  `idEntrada` int(11) NOT NULL,
  `FechaE` date NOT NULL,
  `CantidadE` int(11) NOT NULL,
  `idBodega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entrada`
--

INSERT INTO `entrada` (`idEntrada`, `FechaE`, `CantidadE`, `idBodega`) VALUES
(2, '2016-06-05', 20, 1),
(3, '2016-06-05', 20, 1),
(5, '2016-06-05', 10, 1);

--
-- Triggers `entrada`
--
DELIMITER $$
CREATE TRIGGER `tg_addEntrada` AFTER INSERT ON `entrada` FOR EACH ROW BEGIN
	UPDATE bodega set stock=stock+(NEW.cantidadE) 
		where idBodega = new.idBodega;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_delEntrada` AFTER DELETE ON `entrada` FOR EACH ROW BEGIN
	UPDATE bodega set stock=stock-(OLD.cantidadE) 
		where idBodega = OLD.idBodega;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updEntrada` BEFORE UPDATE ON `entrada` FOR EACH ROW BEGIN
		IF NEW.CantidadE < OLD.CAntidadE THEN
			UPDATE bodega set stock=stock-(OLD.cantidadE - NEW.cantidadE) 
			where idBodega = new.idBodega;
		ELSEIF NEW.CantidadE > OLD.CantidadE THEN
			UPDATE bodega set stock=stock+(NEW.cantidadE - OLD.cantidadE) 
		where idBodega = OLD.idBodega;
		END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE `mensajes` (
  `idMensaje` int(11) NOT NULL,
  `nombreMen` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `mStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mensajes`
--

INSERT INTO `mensajes` (`idMensaje`, `nombreMen`, `telefono`, `email`, `mensaje`, `mStatus`) VALUES
(2, 'Juan Lopez', '447-653-8564', 'jsadfhñkjashfgjsanf', 'lshdgflkjsdfghgsdfkausgfd \r\najdhsñ', 0),
(3, '4563158965', 'jodsere@jhsdfjshdjfg.com', 'Alex Palomo', 'sanbdfjkdfglkdfgdsfgsd', 1),
(4, 'Aldo', '5846497826', 'aldo@aldo', 'lshgbakjs asjdhf asdñlkjhasjd faksjdfh asñkjdfh  ', 1),
(5, 'Qari', '4876312548', 'qari@qari', 'asjfkagfksfgdfgdshsdfgdfg', 1),
(6, 'Qari', '4563158965', 'qari@qari', '555555555', 1),
(8, 'Juana nelly', '452158763', 'jhgfd@jhgsadjf', 'ouasdhfjñk todo muy bien ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modelo`
--

CREATE TABLE `modelo` (
  `idModelo` int(11) NOT NULL,
  `ModAuto` varchar(45) NOT NULL,
  `idAuto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modelo`
--

INSERT INTO `modelo` (`idModelo`, `ModAuto`, `idAuto`) VALUES
(1, 'Fiesta', 1),
(2, 'City', 4);

-- --------------------------------------------------------

--
-- Table structure for table `parabrisas`
--

CREATE TABLE `parabrisas` (
  `idParabrisas` int(11) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `MarcaP` varchar(45) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `idPrecio` int(11) NOT NULL,
  `idCaracteristica` int(11) NOT NULL,
  `idUbicacion` int(11) NOT NULL,
  `idAuto` int(11) NOT NULL,
  `idProcedencia` int(11) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `idBodega` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parabrisas`
--

INSERT INTO `parabrisas` (`idParabrisas`, `Clave`, `MarcaP`, `idCategoria`, `idPrecio`, `idCaracteristica`, `idUbicacion`, `idAuto`, `idProcedencia`, `idTipo`, `idBodega`, `idUsuario`) VALUES
(1, '166865565', 'Vitro', 1, 1, 1, 1, 1, 2, 1, 1, 3),
(2, '9654245515', 'Vimex', 1, 2, 2, 2, 1, 2, 2, 1, 2);

--
-- Triggers `parabrisas`
--
DELIMITER $$
CREATE TRIGGER `tg_dellParabrisas` BEFORE DELETE ON `parabrisas` FOR EACH ROW BEGIN
		DELETE FROM bodega WHERE bodega.idBodega = OLD.idBodega;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `precio`
--

CREATE TABLE `precio` (
  `idPrecio` int(11) NOT NULL,
  `P_Lista` double NOT NULL,
  `P_Mayoreo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `precio`
--

INSERT INTO `precio` (`idPrecio`, `P_Lista`, `P_Mayoreo`) VALUES
(1, 1800, 2000),
(2, 1600, 1900);

-- --------------------------------------------------------

--
-- Table structure for table `procedencia`
--

CREATE TABLE `procedencia` (
  `idProcedencia` int(11) NOT NULL,
  `NombreP` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedencia`
--

INSERT INTO `procedencia` (`idProcedencia`, `NombreP`) VALUES
(2, 'CMX'),
(4, 'CGA');

-- --------------------------------------------------------

--
-- Table structure for table `salida`
--

CREATE TABLE `salida` (
  `idSalida` int(11) NOT NULL,
  `FechaS` date NOT NULL,
  `CantidadS` int(11) NOT NULL,
  `idBodega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salida`
--

INSERT INTO `salida` (`idSalida`, `FechaS`, `CantidadS`, `idBodega`) VALUES
(1, '2016-06-16', 10, 1),
(2, '2016-06-16', 10, 1),
(3, '2016-06-15', 20, 1),
(4, '2016-06-13', 5, 1);

--
-- Triggers `salida`
--
DELIMITER $$
CREATE TRIGGER `tg_addSalida` AFTER INSERT ON `salida` FOR EACH ROW BEGIN
	UPDATE bodega set stock=stock-(NEW.cantidadS) 
		where idBodega = new.idBodega;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_delSalida` AFTER DELETE ON `salida` FOR EACH ROW BEGIN
	UPDATE bodega set stock=stock+(OLD.cantidadS) 
		where idBodega = OLD.idBodega;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updSalida` BEFORE UPDATE ON `salida` FOR EACH ROW BEGIN
		IF NEW.CantidadS < OLD.CantidadS THEN
			UPDATE bodega set stock=stock-(OLD.cantidadS - NEW.cantidadS) 
			where idBodega = new.idBodega;
		ELSEIF NEW.CantidadS > OLD.CantidadS THEN
			UPDATE bodega set stock=stock+(NEW.cantidadS - OLD.cantidadS) 
		where idBodega = OLD.idBodega;
		END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sucursal`
--

CREATE TABLE `sucursal` (
  `idSucursal` int(11) NOT NULL,
  `NombreSuc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sucursal`
--

INSERT INTO `sucursal` (`idSucursal`, `NombreSuc`) VALUES
(1, 'CDHIDALGO'),
(2, 'TUXPAN');

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `NombreT` varchar(45) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`idTipo`, `NombreT`) VALUES
(1, 'Sombra'),
(2, 'Tintex');

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idUbicacion` int(11) NOT NULL,
  `Rac` varchar(45) NOT NULL,
  `Fila` varchar(45) NOT NULL,
  `Piso` varchar(45) NOT NULL,
  `Posicion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ubicacion`
--

INSERT INTO `ubicacion` (`idUbicacion`, `Rac`, `Fila`, `Piso`, `Posicion`) VALUES
(1, '1', '1', '1', '1'),
(2, '1', '1', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUs` varchar(45) NOT NULL,
  `aPaterno` varchar(45) NOT NULL,
  `aMaterno` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nick` varchar(45) NOT NULL,
  `privilegios` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUs`, `aPaterno`, `aMaterno`, `password`, `nick`, `privilegios`) VALUES
(2, 'Jose', 'Lopez', 'B', '1234', 'Joxe', 1),
(3, 'a757', 'll7', 'a', 'a', 'a', 0),
(5, 'iiii', 'iiii', 'iiii', 'iii', 'iii', 0),
(10, 'jos hhhh nhh', 'AS', 'a', '1234', 'Joxe', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anio`
--
ALTER TABLE `anio`
  ADD PRIMARY KEY (`idAnio`,`idModelo`,`idAuto`),
  ADD KEY `fk_Anio_Modelo1_idx` (`idModelo`,`idAuto`);

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`idAuto`);

--
-- Indexes for table `bodega`
--
ALTER TABLE `bodega`
  ADD PRIMARY KEY (`idBodega`);

--
-- Indexes for table `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`idCaracteristica`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `detallesuc`
--
ALTER TABLE `detallesuc`
  ADD PRIMARY KEY (`idDetalleSuc`,`idSalida`,`idBodega`,`idSucursal`),
  ADD KEY `fk_DetalleSuc_Salida1_idx` (`idSalida`,`idBodega`),
  ADD KEY `fk_DetalleSuc_Sucursal1_idx` (`idSucursal`);

--
-- Indexes for table `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`idEntrada`,`idBodega`),
  ADD KEY `fk_Entrada_Bodega1_idx` (`idBodega`);

--
-- Indexes for table `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idModelo`,`idAuto`),
  ADD KEY `fk_Modelo_Auto1_idx` (`idAuto`);

--
-- Indexes for table `parabrisas`
--
ALTER TABLE `parabrisas`
  ADD PRIMARY KEY (`idParabrisas`,`idCategoria`,`idPrecio`,`idCaracteristica`,`idUbicacion`,`idAuto`,`idProcedencia`,`idTipo`,`idBodega`,`idUsuario`),
  ADD KEY `fk_Parabrisas_Categoria_idx` (`idCategoria`),
  ADD KEY `fk_Parabrisas_Precio1_idx` (`idPrecio`),
  ADD KEY `fk_Parabrisas_Caracteristica1_idx` (`idCaracteristica`),
  ADD KEY `fk_Parabrisas_Ubicacion1_idx` (`idUbicacion`),
  ADD KEY `fk_Parabrisas_Auto1_idx` (`idAuto`),
  ADD KEY `fk_Parabrisas_Procedencia1_idx` (`idProcedencia`),
  ADD KEY `fk_Parabrisas_Tipo1_idx` (`idTipo`),
  ADD KEY `fk_Parabrisas_Bodega1_idx` (`idBodega`),
  ADD KEY `fk_parabrisas_usuarios1_idx` (`idUsuario`);

--
-- Indexes for table `precio`
--
ALTER TABLE `precio`
  ADD PRIMARY KEY (`idPrecio`);

--
-- Indexes for table `procedencia`
--
ALTER TABLE `procedencia`
  ADD PRIMARY KEY (`idProcedencia`);

--
-- Indexes for table `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`idSalida`,`idBodega`),
  ADD KEY `fk_Salida_Bodega1_idx` (`idBodega`);

--
-- Indexes for table `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idSucursal`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indexes for table `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anio`
--
ALTER TABLE `anio`
  MODIFY `idAnio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `idAuto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bodega`
--
ALTER TABLE `bodega`
  MODIFY `idBodega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `caracteristica`
--
ALTER TABLE `caracteristica`
  MODIFY `idCaracteristica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detallesuc`
--
ALTER TABLE `detallesuc`
  MODIFY `idDetalleSuc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entrada`
--
ALTER TABLE `entrada`
  MODIFY `idEntrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idModelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parabrisas`
--
ALTER TABLE `parabrisas`
  MODIFY `idParabrisas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `precio`
--
ALTER TABLE `precio`
  MODIFY `idPrecio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `procedencia`
--
ALTER TABLE `procedencia`
  MODIFY `idProcedencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salida`
--
ALTER TABLE `salida`
  MODIFY `idSalida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anio`
--
ALTER TABLE `anio`
  ADD CONSTRAINT `fk_Anio_Modelo1` FOREIGN KEY (`idModelo`,`idAuto`) REFERENCES `modelo` (`idModelo`, `idAuto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detallesuc`
--
ALTER TABLE `detallesuc`
  ADD CONSTRAINT `fk_DetalleSuc_Salida1` FOREIGN KEY (`idSalida`,`idBodega`) REFERENCES `salida` (`idSalida`, `idBodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DetalleSuc_Sucursal1` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_Entrada_Bodega1` FOREIGN KEY (`idBodega`) REFERENCES `bodega` (`idBodega`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_Modelo_Auto1` FOREIGN KEY (`idAuto`) REFERENCES `auto` (`idAuto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parabrisas`
--
ALTER TABLE `parabrisas`
  ADD CONSTRAINT `fk_Parabrisas_Auto1` FOREIGN KEY (`idAuto`) REFERENCES `auto` (`idAuto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Bodega1` FOREIGN KEY (`idBodega`) REFERENCES `bodega` (`idBodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Caracteristica1` FOREIGN KEY (`idCaracteristica`) REFERENCES `caracteristica` (`idCaracteristica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Precio1` FOREIGN KEY (`idPrecio`) REFERENCES `precio` (`idPrecio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Procedencia1` FOREIGN KEY (`idProcedencia`) REFERENCES `procedencia` (`idProcedencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Tipo1` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idTipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Parabrisas_Ubicacion1` FOREIGN KEY (`idUbicacion`) REFERENCES `ubicacion` (`idUbicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_parabrisas_usuarios1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `fk_Salida_Bodega1` FOREIGN KEY (`idBodega`) REFERENCES `bodega` (`idBodega`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
