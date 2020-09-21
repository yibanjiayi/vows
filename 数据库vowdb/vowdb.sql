/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : vowdb

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-09-21 19:50:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for vowtab
-- ----------------------------
DROP TABLE IF EXISTS `vowtab`;
CREATE TABLE `vowtab` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `info` varchar(255) NOT NULL,
  `send` varchar(50) NOT NULL,
  `pick` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
