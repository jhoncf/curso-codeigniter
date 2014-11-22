/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : curso_php

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2014-11-22 02:41:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `capa` varchar(255) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `noticias_categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('1', 'São Paulo vence Palmeiras', 'c9a22-futebol1.jpg', '2014-10-25', 0x3C703E0D0A0954657374653C2F703E0D0A, '1', null);
INSERT INTO `noticias` VALUES ('2', 'São Paulo vence Santos', 'c9a22-futebol1.jpg', '2014-10-25', 0x3C703E0D0A0954657374653C2F703E0D0A, '1', null);

-- ----------------------------
-- Table structure for noticias_categorias
-- ----------------------------
DROP TABLE IF EXISTS `noticias_categorias`;
CREATE TABLE `noticias_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of noticias_categorias
-- ----------------------------
INSERT INTO `noticias_categorias` VALUES ('1', 'Esporte');
INSERT INTO `noticias_categorias` VALUES ('2', 'Economia');
INSERT INTO `noticias_categorias` VALUES ('3', 'Saúde');

-- ----------------------------
-- Table structure for portfolio
-- ----------------------------
DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `arquivo` varchar(255) COLLATE utf8_bin NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of portfolio
-- ----------------------------
INSERT INTO `portfolio` VALUES ('1', 'Caveira', 'ca21c-portfolio_01.jpg', '3');
INSERT INTO `portfolio` VALUES ('2', '', 'c036a-portfolio_03.jpg', '2');
INSERT INTO `portfolio` VALUES ('4', '', '17579-portfolio_05.jpg', '5');
INSERT INTO `portfolio` VALUES ('5', 'Unicório', '27464-portfolio_06.jpg', '7');
INSERT INTO `portfolio` VALUES ('6', 'Cowboy', '57043-portfolio_07.jpg', '1');
INSERT INTO `portfolio` VALUES ('7', 'Lust', '86bce-portfolio_08.jpg', '4');
INSERT INTO `portfolio` VALUES ('8', 'Candy', 'aead7-portfolio_09.jpg', '6');
INSERT INTO `portfolio` VALUES ('9', 'Camera', 'ca1ac-portfolio_10.jpg', '9');
INSERT INTO `portfolio` VALUES ('10', 'Comoz', 'c3540-portfolio_04.jpg', '8');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Julio Pre', '202cb962ac59075b964b07152d234b70');
INSERT INTO `usuarios` VALUES ('4', 'jhonatas', '202cb962ac59075b964b07152d234b70');
