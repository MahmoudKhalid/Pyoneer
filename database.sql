/*
Navicat MySQL Data Transfer
Source Host     : localhost:3306
Source Database : information
Target Host     : localhost:3306
Target Database : information
Date: 11/23/2017 2:38:18 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) default NULL,
  `reg_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of accounts
-- ----------------------------
INSERT INTO `accounts` VALUES ('mahmoudkhalid@yahoo.com', '123456789', null, '2017-11-23 01:45:08');
