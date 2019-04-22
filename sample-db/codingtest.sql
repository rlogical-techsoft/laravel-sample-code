/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : codingtest

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-04-20 17:54:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES ('1', 'BPL 80 cm (32 inches) HD Ready LED TV T32BH3A (Black)', '1', '9490', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('2', 'Sony Cordless Rechargeable Lightweight Headphones-Black', '1', '465.50', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('3', 'Sennheiser RS 165 Tv Digital Wireless Headphone (Black)', '1', '16177', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('4', 'boAt AAVANTE Bar Wireless Bluetooth Soundbar Speaker (Black)', '1', '7999', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('5', 'Ant Audio Treble X -SB560 Wireless Bluetooth Soundbar (Black)', '1', '6499', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('6', 'Portronics Sound Slick II POR-936 Wireless Bluetooth (Black)', '1', '2999', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('7', 'EGATE i9 LED HD Projector (Black)', '1', '5990', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('8', 'Unic UC28 Mini Pico Full hd Input LED Projector 1080', '1', '2547', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('9', 'Myra® TouYinGer X7 Led Projector 1800 Lumens', '1', '8799', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('10', 'Anker Smart Portable Pico Wifi Wireless Projector', '1', '6499', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('11', 'Fantastic Beasts and Where to Find Them', '2', '490', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('12', 'Fantastic Beasts: The Crimes of Grindelwald', '2', '390', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('13', 'The Hogwarts Library Collection', '2', '1204', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('14', 'The Tales of Beedle the Bard', '2', '370', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('15', 'Harry Potter and the Deathly Hallows', '2', '729', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('16', 'Harry Potter and the Order of the Phoenix', '2', '1414', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('17', 'Harry Potter and the Goblet of Fire', '2', '1131', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('18', 'Wings of Fire: An Autobiography of Abdul Kalam', '2', '370', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('19', 'Mind Without Fear', '2', '388', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('20', 'Captain Cool: The M.S. Dhoni Story', '2', '230', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('21', 'Allen Solly Men Plain Slim Fit Casual Shirt', '3', '724', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('22', 'Parx Men Plain Slim Fit Casual Shirt', '3', '674', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('23', 'Allen Solly Men Plain Slim Fit Casual Shirt', '3', '500', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('24', 'EYEBOGLER Men Cotton T-Shirt ', '3', '506', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('25', 'Rangoli Jaipur Jute Modi Jacket', '3', '899', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('26', 'Dhingra Men Waistcoat', '3', '1140', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('27', 'Cenizas Casual Tuxedo Waistcoat for Men', '3', '949', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('28', 'Menjestic Men Slim Fit Blazer With Grey Lapel', '3', '1950', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('29', 'Elegante UV Protected Blue Mirrored Premium Rectangular', '3', '1701', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('30', 'Silver Kartz Wayfarer Unisex Sunglass', '3', '1230', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('31', 'XOLO ERA 4X', '4', '7199', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('32', 'Redmi 6 Pro', '4', '11499', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('33', 'Micromax Canvas 5', '4', '6999', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('34', 'Lava Z61', '4', '6500', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('35', 'OnePlus 6T', '4', '3799', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('36', 'Oppo R17', '4', '36999', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('37', 'Samsung Galaxy M20', '4', '1339', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('38', 'Xiaomi Mi A2', '4', '17499', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('39', 'Honor 8X', '4', '17499', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('40', 'Vivo Y95', '4', '18990', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('41', 'MRFF Genius', '5', '2350', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('42', 'ASICS Men Gel-Rocket 8 Badminton Shoes', '5', '5499', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('43', 'Nivia Men Synthetic Leather Badminton Shoes', '5', '6999', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('44', 'Nivia Men Super Court Badminton Shoes', '5', '6500', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('45', 'Nivia Storm Football', '5', '560', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('46', 'Nike Premier League Strike Ball White', '5', '1795', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('47', 'NIVIA Spider F.B G/Keeper Gloves Large Black', '5', '815', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('48', 'Nivia Super Grip 881 Football Goal Keeping Gloves', '5', '2350', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('49', 'Nivia Classic with Sleeve Shinguard', '5', '236', '2019-04-20 07:43:02', '2019-04-20 07:43:02');
INSERT INTO `items` VALUES ('50', 'Nivia Performance Football Shin Guard', '5', '170', '2019-04-20 07:43:02', '2019-04-20 07:43:02');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_04_20_052045_create_items_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_04_20_052403_create_types_table', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `types`
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of types
-- ----------------------------
INSERT INTO `types` VALUES ('1', 'Electronic', '2019-04-20 07:43:23', '2019-04-20 07:43:23');
INSERT INTO `types` VALUES ('2', 'Book', '2019-04-20 07:43:23', '2019-04-20 07:43:23');
INSERT INTO `types` VALUES ('3', 'Fashion', '2019-04-20 07:43:23', '2019-04-20 07:43:23');
INSERT INTO `types` VALUES ('4', 'Mobile', '2019-04-20 07:43:23', '2019-04-20 07:43:23');
INSERT INTO `types` VALUES ('5', 'Sport', '2019-04-20 07:43:23', '2019-04-20 07:43:23');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
