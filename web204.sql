/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50640
 Source Host           : localhost:3306
 Source Schema         : web204

 Target Server Type    : MySQL
 Target Server Version : 50640
 File Encoding         : 65001

 Date: 19/09/2018 10:39:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (3, 'Kitkat', NULL);
INSERT INTO `categories` VALUES (4, 'Chocopie', NULL);
INSERT INTO `categories` VALUES (5, 'Mashwallow', NULL);
COMMIT;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `detail` text,
  `list_price` int(11) DEFAULT '0',
  `sell_price` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 3, 'Bánh nha', 'Bánh ngon', 100000, 90000, 'img/product4.jpg', 1, 200);
INSERT INTO `products` VALUES (2, 5, 'Bánh trung thu', 'Bánh ngon', 110000, 90000, 'img/product2.jpg', 1, 190);
INSERT INTO `products` VALUES (3, 3, 'Bánh khoai4', 'Bánh ngon', 950000, 92000, 'img/product3.jpg', 1, 180);
INSERT INTO `products` VALUES (4, 4, 'Bánh nướng', 'Bánh ngon', 80000, 50000, 'img/product1.jpg', 1, 170);
INSERT INTO `products` VALUES (5, 4, 'Bánh dẻo', 'Bánh ngon', 50000, 40000, 'img/product2.jpg', 1, 160);
INSERT INTO `products` VALUES (6, 5, 'Bánh ngô', 'Bánh ngon', 120000, 60000, 'img/product1.jpg', 1, 450);
INSERT INTO `products` VALUES (7, 5, 'Bánh phu thê', 'Bánh ngon', 150000, 60000, 'img/product2.jpg', 1, 260);
INSERT INTO `products` VALUES (8, 4, 'Bánh gai', 'Bánh ngon', 120000, 90000, 'img/product4.jpg', 1, 270);
INSERT INTO `products` VALUES (9, 3, 'Bánh cu đơ', 'Bánh ngon', 140000, 90000, 'img/product2.jpg', 1, 280);
INSERT INTO `products` VALUES (10, 5, 'Bánh cáy', 'Bánh ngon', 200000, 70000, 'img/product1.jpg', 1, 200);
INSERT INTO `products` VALUES (11, 5, 'Bánh trôi', 'Bánh ngon', 130000, 120000, 'img/product3.jpg', 1, 200);
INSERT INTO `products` VALUES (12, 3, 'Bánh bao', 'Bánh ngon', 170000, 90000, 'img/product1.jpg', 1, 200);
COMMIT;

-- ----------------------------
-- Table structure for slideshows
-- ----------------------------
DROP TABLE IF EXISTS `slideshows`;
CREATE TABLE `slideshows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `desc` text,
  `url` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `order_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slideshows
-- ----------------------------
BEGIN;
INSERT INTO `slideshows` VALUES (0, 'img/slide4.jpg', NULL, NULL, 1, 4);
INSERT INTO `slideshows` VALUES (8, 'img/slide2.jpg', NULL, NULL, 1, 1);
INSERT INTO `slideshows` VALUES (9, 'img/slide1.jpg', NULL, NULL, 1, 2);
INSERT INTO `slideshows` VALUES (11, 'img/slide3.jpg', NULL, NULL, 1, 3);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) DEFAULT '1',
  `address` varchar(1000) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `gender` int(11) DEFAULT '1',
  `phone_number` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for web_settings
-- ----------------------------
DROP TABLE IF EXISTS `web_settings`;
CREATE TABLE `web_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `hotline` varchar(11) DEFAULT NULL,
  `map` text,
  `email` varchar(255) DEFAULT NULL,
  `fb` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of web_settings
-- ----------------------------
BEGIN;
INSERT INTO `web_settings` VALUES (1, 'img/logo1.png', '0987654323', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8276297077555!2d105.80170781448595!3d21.039581885992526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3e6416efc7%3A0x808741175914b86b!2zMTUgxJDDtG5nIFF1YW4sIFF1YW4gSG9hLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1537233971337\" width=\"100%\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'sweetcake@gmail.com', 'http://fb.com/sweetcake');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
