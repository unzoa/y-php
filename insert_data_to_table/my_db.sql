/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : my_db

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-01-16 09:02:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `persons`
-- ----------------------------
DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of persons
-- ----------------------------
INSERT INTO `persons` VALUES ('1', '&#21704;&#21704;', '&#30475;&#30475;&#30475;', '12');
INSERT INTO `persons` VALUES ('2', '&#21345;', '&#35273;&#24471;', '12');
INSERT INTO `persons` VALUES ('3', '&#21345;', '&#35273;&#24471;', '12');
INSERT INTO `persons` VALUES ('4', 'mm', '&#20040;&#20040;&#20040;&#20040;', '1111');
INSERT INTO `persons` VALUES ('5', '&#21862;&#21862;', '&#21862;&#21862;', '23');
INSERT INTO `persons` VALUES ('6', '&#21862;&#21862;', '&#21862;&#21862;', '23');
INSERT INTO `persons` VALUES ('7', '&#21862;&#21862;', '&#21862;&#21862;', '23');
INSERT INTO `persons` VALUES ('8', '&#21862;&#21862;', '&#21862;&#21862;', '23');
INSERT INTO `persons` VALUES ('9', '哈', '啦', '34');
INSERT INTO `persons` VALUES ('10', '看看看', '娜娜', '16');
INSERT INTO `persons` VALUES ('11', '看看看', '娜娜', '16');
INSERT INTO `persons` VALUES ('12', '看看看', '娜娜解决', '16');
INSERT INTO `persons` VALUES ('13', '看看', '么么么么', '23');
INSERT INTO `persons` VALUES ('14', '么么么么', '么么么么', '22');
INSERT INTO `persons` VALUES ('15', '解决', '解决', '22');
INSERT INTO `persons` VALUES ('16', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('17', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('18', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('19', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('20', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('21', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('22', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('23', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('24', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('25', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('26', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('27', '看看', '啦啦', '11');
INSERT INTO `persons` VALUES ('28', '解决', '娜娜', '11');
INSERT INTO `persons` VALUES ('29', 'zoaun', 'haha', '99');
INSERT INTO `persons` VALUES ('30', '卡卡卡卡卡开会', '好', '38');

-- ----------------------------
-- Table structure for `ueditor`
-- ----------------------------
DROP TABLE IF EXISTS `ueditor`;
CREATE TABLE `ueditor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ueditor
-- ----------------------------
INSERT INTO `ueditor` VALUES ('1', null);
INSERT INTO `ueditor` VALUES ('2', null);
INSERT INTO `ueditor` VALUES ('3', '&lt;p&gt;打哈还是啥可好看&lt;/p&gt;');
INSERT INTO `ueditor` VALUES ('4', '&lt;p&gt;打哈还是啥可好看&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/Upload/20170116/2017-01-16_297779_525809108.jpg&quot; title=&quot;2017-01-16_297779_525809108.jpg&quot; alt=&quot;525809108.jpg&quot; width=&quot;326&quot; height=&quot;337&quot;/&gt;&lt;/p&gt;');
INSERT INTO `ueditor` VALUES ('5', '&lt;p&gt;打哈还是啥可好看&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/myHub/thinkphp-ueditor/Public/Upload/20170116/2017-01-16_259610_headDefault-01.png&quot; title=&quot;2017-01-16_259610_headDefault-01.png&quot; alt=&quot;headDefault-01.png&quot;/&gt;&lt;/p&gt;');
