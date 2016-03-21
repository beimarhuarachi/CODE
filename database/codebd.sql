-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 06:47 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codebd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(255) NOT NULL,
  `nota` varchar(255) DEFAULT NULL,
  `id_ejercicio` varchar(255) DEFAULT NULL,
  `id_solucion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calificacion`
--

INSERT INTO `calificacion` (`id`, `id_usuario`, `nota`, `id_ejercicio`, `id_solucion`) VALUES
(0, '4', '8', '10', '0'),
(1, '8', '0', '9', '0'),
(3, '2', '-1', '9', '0'),
(4, '2', '-1', '10', '0'),
(5, '2', '-1', '11', '0'),
(6, '2', '-1', '12', '0');

-- --------------------------------------------------------

--
-- Table structure for table `conversacion`
--

CREATE TABLE `conversacion` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_profesor` int(11) DEFAULT NULL,
  `mensaje` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversacion`
--

INSERT INTO `conversacion` (`id`, `id_estudiante`, `id_profesor`, `mensaje`, `fecha`) VALUES
(1, 2, 1, 'Este es un mensaje de prueba...', '2016-03-15'),
(2, 4, 1, 'Hola este es otro mensaje de prueba..', '2016-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `arbol` varchar(255) DEFAULT NULL,
  `rec_dfs` varchar(255) DEFAULT NULL,
  `rec_bfs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `descripcion`, `arbol`, `rec_dfs`, `rec_bfs`) VALUES
(9, '2016-03-06', '0-1, 1-2, 1-3, 2-4, 2-5, 2-6, 3-7, 3-8, 5-9, 5-10, 7-11, 7-12', '123', '123'),
(10, '', '0-1, 0-2, 0-3, 0-4, 0-5, 0-6, 0-7, 5-8, 5-9, 5-10, 5-11, 5-12, 5-13, 5-14, 5-15, 5-16, 9-17, 9-18, 9-19, 9-20, 9-21, 9-22, 9-23, 9-24, 9-25, 23-26, 23-27, 23-28, 23-29, 23-30, 23-31, 23-32, 23-33, 23-34, 23-35', '1,2,3,4,8,17,18,19,20,21,22,26,27,28,29,30,31,32,33,34,35,23,24,25,9,10,11,12,13,14,15,16,5,6,7,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35'),
(11, '2016-03-31', '0-1, 0-2, 0-3, 0-4', '1,2,3,4,0', '0,1,2,3,4'),
(12, '2016-03-25', '0-1, 0-2, 0-3, 0-4, 0-5, 3-6, 3-7, 3-8, 3-9, 3-10, 8-11, 8-12, 8-13, 8-14, 8-15, 8-16, 8-17, 14-18, 14-19, 14-20, 14-21, 14-22', '1,2,6,7,11,12,13,18,19,20,21,22,14,15,16,17,8,9,10,3,4,5,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22');

-- --------------------------------------------------------

--
-- Table structure for table `practica`
--

CREATE TABLE `practica` (
  `id` int(11) NOT NULL,
  `arbol` varchar(255) DEFAULT NULL,
  `rec_dfs` varchar(255) DEFAULT NULL,
  `rec_bfs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practica`
--

INSERT INTO `practica` (`id`, `arbol`, `rec_dfs`, `rec_bfs`) VALUES
(1, '0-1, 0-2, 0-3, 0-4', '1,2,3,4,0', '0,1,2,3,4'),
(2, '0-1, 0-2, 0-3, 1-4, 1-5, 3-6, 3-7, 5-8, 5-9, 5-10, 7-11, 7-12, 9-13, 12-14, 12-15', '4,8,13,9,10,5,1,2,6,11,14,15,12,7,3,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'),
(3, '0-1, 0-2, 1-3, 1-4, 2-5, 2-6, 4-7, 4-8, 5-9, 5-10', '3,7,8,4,1,9,10,5,6,2,0', '0,1,2,3,4,5,6,7,8,9,10'),
(4, '0-1, 0-2, 0-3, 1-4, 1-5, 3-6, 3-7, 5-8, 5-9, 5-10, 7-11, 7-12, 9-13, 12-14, 12-15', '4,8,13,9,10,5,1,2,6,11,14,15,12,7,3,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'),
(5, '0-1, 0-2, 1-3, 1-4, 2-5, 2-6, 4-7, 4-8, 5-9, 5-10', '3,7,8,4,1,9,10,5,6,2,0', '0,1,2,3,4,5,6,7,8,9,10'),
(6, '0-1, 0-2, 0-3, 2-4, 2-5, 2-6, 2-7, 2-8, 6-9, 6-10, 6-11, 6-12, 6-13, 6-14, 6-15, 12-16', '1,4,5,9,10,11,16,12,13,14,15,6,7,8,2,3,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16'),
(7, '0-1, 0-2, 0-3, 0-4, 0-5, 0-6, 2-7, 2-8, 4-9, 4-10, 6-11, 6-12, 7-13, 7-14, 9-15, 9-16, 11-17, 11-18', '1,13,14,7,8,2,3,15,16,9,10,4,5,17,18,11,12,6,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18'),
(8, '0-1, 0-2, 0-3, 2-4, 2-5, 2-6, 2-7, 2-8, 6-9, 6-10, 6-11, 6-12, 6-13, 6-14, 6-15, 12-16', '1,4,5,9,10,11,16,12,13,14,15,6,7,8,2,3,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16'),
(9, '0-1, 0-2, 0-3, 0-4, 0-5, 0-6, 2-7, 2-8, 4-9, 4-10, 6-11, 6-12, 7-13, 7-14, 9-15, 9-16, 11-17, 11-18', '1,13,14,7,8,2,3,15,16,9,10,4,5,17,18,11,12,6,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18'),
(10, '0-1, 0-2, 0-3, 0-4, 0-5, 0-6, 0-7, 2-8, 2-9, 2-10, 4-11, 4-12, 4-13, 6-14, 6-15, 6-16, 12-17, 12-18, 12-19, 12-20, 12-21, 12-22, 12-23, 17-24, 18-25, 19-26, 20-27, 21-28, 22-29, 23-30', '1,8,9,10,2,3,11,24,17,25,18,26,19,27,20,28,21,29,22,30,23,12,13,4,5,14,15,16,6,7,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30'),
(11, '0-1, 0-2, 0-3, 1-4, 1-5, 1-6, 3-7, 3-8, 3-9, 6-10, 6-11, 6-12, 6-13, 6-14, 7-15, 7-16, 7-17, 7-18, 7-19, 12-20, 12-21, 12-22, 12-23, 12-24, 15-25, 15-26, 15-27, 15-28', '4,5,10,11,20,21,22,23,24,12,13,14,6,1,2,25,26,27,28,15,16,17,18,19,7,8,9,3,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28'),
(12, '0-1, 0-2, 0-3, 0-4, 0-5, 0-6, 0-7, 2-8, 2-9, 2-10, 4-11, 4-12, 4-13, 6-14, 6-15, 6-16, 12-17, 12-18, 12-19, 12-20, 12-21, 12-22, 12-23, 17-24, 18-25, 19-26, 20-27, 21-28, 22-29, 23-30', '1,8,9,10,2,3,11,24,17,25,18,26,19,27,20,28,21,29,22,30,23,12,13,4,5,14,15,16,6,7,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30'),
(13, '0-1, 0-2, 0-3, 1-4, 1-5, 1-6, 3-7, 3-8, 3-9, 6-10, 6-11, 6-12, 6-13, 6-14, 7-15, 7-16, 7-17, 7-18, 7-19, 12-20, 12-21, 12-22, 12-23, 12-24, 15-25, 15-26, 15-27, 15-28', '4,5,10,11,20,21,22,23,24,12,13,14,6,1,2,25,26,27,28,15,16,17,18,19,7,8,9,3,0', '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28');

-- --------------------------------------------------------

--
-- Table structure for table `solucion`
--

CREATE TABLE `solucion` (
  `id` int(11) NOT NULL,
  `id_tarea` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `rec_dfs` varchar(255) DEFAULT NULL,
  `rec_bfs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solucion`
--

INSERT INTO `solucion` (`id`, `id_tarea`, `id_usuario`, `rec_dfs`, `rec_bfs`) VALUES
(0, 9, 2, 'respuesta1', 'respuesta1'),
(0, 9, 4, '1,2,3,4,5', '1,2,3,4,6,7'),
(0, 9, 8, '4,9,10,5,6,2,11,12,7,8,3,1,0', '0,1,2,3,4,5,6,7,8,9,10,11,12'),
(0, 10, 2, 'respuesta2', 'respuesta2'),
(0, 10, 4, '5', '0'),
(0, 10, 8, '1,2,3,4,5,6,7,8', '3,4,5,6,7,8,9'),
(0, 11, 2, 'respuesta3', 'respuesta3'),
(0, 12, 2, 'respuesta4', 'respuesta4');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `ci` varchar(255) NOT NULL,
  `rol` int(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `ci`, `rol`) VALUES
(1, 'docente', 'docente', '11', 1),
(2, 'mario', 'gonzales', '22', 2),
(4, 'maria', 'celeste', '33', 2),
(8, 'ricardo', 'soliz', '88', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`,`id_usuario`);

--
-- Indexes for table `conversacion`
--
ALTER TABLE `conversacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practica`
--
ALTER TABLE `practica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solucion`
--
ALTER TABLE `solucion`
  ADD PRIMARY KEY (`id`,`id_tarea`,`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`,`nombre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `conversacion`
--
ALTER TABLE `conversacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `practica`
--
ALTER TABLE `practica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;