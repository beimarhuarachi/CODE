/*
Navicat MySQL Data Transfer

Source Server         : beimar
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : code

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-03-06 23:22:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ejercicio`
-- ----------------------------
DROP TABLE IF EXISTS `ejercicio`;
CREATE TABLE `ejercicio` (
  `IdEjercicio` int(11) NOT NULL AUTO_INCREMENT,
  `Arbol` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `RecorridoDFS` varchar(200) DEFAULT NULL,
  `RecorridoBFS` varchar(200) DEFAULT NULL,
  `IdTipo` int(11) DEFAULT NULL,
  `FechaLimite` date DEFAULT NULL,
  PRIMARY KEY (`IdEjercicio`),
  KEY `FK_IdTipo` (`IdTipo`),
  CONSTRAINT `FK_IdTipo` FOREIGN KEY (`IdTipo`) REFERENCES `tipo` (`IdTipo`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ejercicio
-- ----------------------------

-- ----------------------------
-- Table structure for `tipo`
-- ----------------------------
DROP TABLE IF EXISTS `tipo`;
CREATE TABLE `tipo` (
  `IdTipo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreTipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipo
-- ----------------------------
