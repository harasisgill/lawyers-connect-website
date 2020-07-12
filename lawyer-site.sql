/*
 Navicat Premium Data Transfer

 Source Server         : Harasis
 Source Server Type    : MySQL
 Source Server Version : 50559
 Source Host           : localhost:3306
 Source Schema         : lawyer-site

 Target Server Type    : MySQL
 Target Server Version : 50559
 File Encoding         : 65001

 Date: 07/07/2018 13:28:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for client
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client`  (
  `Lawyer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Mobile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `DOC` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('Public Interest Lawyer', '9288291211', 'yo@gyail.com', 'sd');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '90909090990', 'yo@gyail.com', 'sd');
INSERT INTO `client` VALUES ('', '9288291211', 'yo@gyail.com', 'sdxam');
INSERT INTO `client` VALUES ('', '9288291211', 'yo@gyail.com', 'sdxam');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '9288291211', 'yooo@gyail.com', 'SDSD');
INSERT INTO `client` VALUES ('', '9288291211', 'yo@gyail.com', 'sd');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');
INSERT INTO `client` VALUES ('', '', '', '');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile`  (
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `oadd` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `exp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lt` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('admin', '', '12', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'h', '', '', '', 'Tax Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'h', '', '', '', 'Tax Lawyer');
INSERT INTO `profile` VALUES ('h', '#22673', '121', 'yo@gyail.com', '2', 'check');
INSERT INTO `profile` VALUES ('hj', '#22673', '2e23', 'yo@gyail.com', '2', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'h', '', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'h', '', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'h', '', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'h', '', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'uuy', '', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'uuy', '', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('harasis', 'w113', '2e23', '', '', 'Criminal Lawyer');
INSERT INTO `profile` VALUES ('prabh', 'w113', '123', 'prabh@gmail.com', '2', 'Contract Lawyer');
INSERT INTO `profile` VALUES ('Harshdeep Brar', '#F3', '9478880902', 'hash@gmail.com', '6', 'Immigration Lawyer');
INSERT INTO `profile` VALUES ('Harasis Singh', '#12', '8427789929', 'hsg@gmail.com', '3', 'Tax Lawyer');

-- ----------------------------
-- Table structure for signup
-- ----------------------------
DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup`  (
  `uid` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pwd` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mob` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of signup
-- ----------------------------
INSERT INTO `signup` VALUES ('', '', '', '');
INSERT INTO `signup` VALUES ('admin', 'admin', '9872138293', 'lawyer');
INSERT INTO `signup` VALUES ('gill', 'harasis', '983348990', 'client');
INSERT INTO `signup` VALUES ('gill1', '123', '983348990', 'client');
INSERT INTO `signup` VALUES ('gill3', 'Harasis', '9812672829', 'client');
INSERT INTO `signup` VALUES ('h1', '123', '9872138293', 'client');
INSERT INTO `signup` VALUES ('happy', 'dasdwd@123jJ', '', '');
INSERT INTO `signup` VALUES ('harasis', '123', '9283182311', 'client');
INSERT INTO `signup` VALUES ('harasis@12', '123', '8427789929', 'lawyer');
INSERT INTO `signup` VALUES ('Harshdeep', 'Harasis98', '9478880901', 'lawyer');
INSERT INTO `signup` VALUES ('hem1', 'hem1', '8923820930', 'lawyer');
INSERT INTO `signup` VALUES ('Hemank', '123', '8373728918', 'client');
INSERT INTO `signup` VALUES ('MOVELIKEPRO', '123456789', '9872138293', 'client');
INSERT INTO `signup` VALUES ('MOVELIKEPRO2', '123', '9872138293', 'lawyer');
INSERT INTO `signup` VALUES ('prabh', 'prabh', '9282381923', 'lawyer');

SET FOREIGN_KEY_CHECKS = 1;
