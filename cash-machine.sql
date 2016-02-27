/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : cash-machine

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-02-25 10:59:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `atm`
-- ----------------------------
DROP TABLE IF EXISTS `atm`;
CREATE TABLE `atm` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `atm` varchar(100) DEFAULT NULL,
  `ubication` varchar(200) DEFAULT NULL,
  `near_of` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of atm
-- ----------------------------

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(8) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `account` varchar(100) DEFAULT NULL,
  `balance` float(12,0) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------
