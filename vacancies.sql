/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : vacancies

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-08-04 15:47:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `vacancies`
-- ----------------------------
DROP TABLE IF EXISTS `vacancies`;
CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `content` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vacancies
-- ----------------------------
INSERT INTO `vacancies` VALUES ('1', 'test1', 'test2', 'test3');
INSERT INTO `vacancies` VALUES ('2', 'test76', 'test21', 'test47');
INSERT INTO `vacancies` VALUES ('3', 'test59', 'test28', 'test2');
INSERT INTO `vacancies` VALUES ('4', 'test38', 'test36', 'test91');
INSERT INTO `vacancies` VALUES ('5', 'test21', 'test28', 'test59');
INSERT INTO `vacancies` VALUES ('6', 'test40', 'test66', 'test54');
INSERT INTO `vacancies` VALUES ('7', 'test19', 'test28', 'test30');
