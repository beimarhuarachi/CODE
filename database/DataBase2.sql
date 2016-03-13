-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2016 at 07:41 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `EVEA`
--

-- --------------------------------------------------------

--
-- Table structure for table `Calificacion`
--

CREATE TABLE `Calificacion` (
  `calificacionID` int(11) NOT NULL DEFAULT '0',
  `idEstudiante` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT '0',
  `idEjercicio` int(11) DEFAULT NULL,
  `idSolucion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Conversacion`
--

CREATE TABLE `Conversacion` (
  `conversacionID` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `mensaje` varchar(255) DEFAULT NULL,
  `fechaMensaje` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Ejercicio`
--

CREATE TABLE `Ejercicio` (
  `ejercicioID` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `recorridoBFS` varchar(255) DEFAULT NULL,
  `recorridoDFS` varchar(255) DEFAULT NULL,
  `tipoEjercicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Solucion`
--

CREATE TABLE `Solucion` (
  `solucionID` int(11) NOT NULL DEFAULT '0',
  `idEjercicio` int(11) DEFAULT NULL,
  `idEstudiante` int(11) DEFAULT NULL,
  `recorridoDFS` varchar(255) DEFAULT NULL,
  `recorridoBFS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TipoEjercicio`
--

CREATE TABLE `TipoEjercicio` (
  `tipoEjercicioID` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `usuarioID` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `nombreUsuario` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Calificacion`
--
ALTER TABLE `Calificacion`
  ADD PRIMARY KEY (`calificacionID`),
  ADD KEY `idEstudiante` (`idEstudiante`),
  ADD KEY `idEjercicio` (`idEjercicio`),
  ADD KEY `idSolucion` (`idSolucion`);

--
-- Indexes for table `Conversacion`
--
ALTER TABLE `Conversacion`
  ADD PRIMARY KEY (`conversacionID`),
  ADD KEY `idProfesor` (`idProfesor`),
  ADD KEY `idEstudiante` (`idEstudiante`);

--
-- Indexes for table `Ejercicio`
--
ALTER TABLE `Ejercicio`
  ADD PRIMARY KEY (`ejercicioID`),
  ADD KEY `tipoEjercicio` (`tipoEjercicio`);

--
-- Indexes for table `Solucion`
--
ALTER TABLE `Solucion`
  ADD PRIMARY KEY (`solucionID`),
  ADD KEY `idEjercicio` (`idEjercicio`),
  ADD KEY `idEstudiante` (`idEstudiante`);

--
-- Indexes for table `TipoEjercicio`
--
ALTER TABLE `TipoEjercicio`
  ADD PRIMARY KEY (`tipoEjercicioID`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`usuarioID`,`nombreUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Conversacion`
--
ALTER TABLE `Conversacion`
  MODIFY `conversacionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Ejercicio`
--
ALTER TABLE `Ejercicio`
  MODIFY `ejercicioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Calificacion`
--
ALTER TABLE `Calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`idEstudiante`) REFERENCES `Usuario` (`usuarioID`),
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`idEjercicio`) REFERENCES `Ejercicio` (`ejercicioID`),
  ADD CONSTRAINT `calificacion_ibfk_3` FOREIGN KEY (`idSolucion`) REFERENCES `Solucion` (`solucionID`);

--
-- Constraints for table `Conversacion`
--
ALTER TABLE `Conversacion`
  ADD CONSTRAINT `conversacion_ibfk_1` FOREIGN KEY (`idProfesor`) REFERENCES `Usuario` (`usuarioID`),
  ADD CONSTRAINT `conversacion_ibfk_2` FOREIGN KEY (`idEstudiante`) REFERENCES `Usuario` (`usuarioID`);

--
-- Constraints for table `Ejercicio`
--
ALTER TABLE `Ejercicio`
  ADD CONSTRAINT `ejercicio_ibfk_1` FOREIGN KEY (`tipoEjercicio`) REFERENCES `TipoEjercicio` (`tipoEjercicioID`);

--
-- Constraints for table `Solucion`
--
ALTER TABLE `Solucion`
  ADD CONSTRAINT `solucion_ibfk_1` FOREIGN KEY (`idEjercicio`) REFERENCES `Ejercicio` (`ejercicioID`),
  ADD CONSTRAINT `solucion_ibfk_2` FOREIGN KEY (`idEstudiante`) REFERENCES `Usuario` (`usuarioID`);
