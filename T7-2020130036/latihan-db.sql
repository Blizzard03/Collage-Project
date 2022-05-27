DROP DATABASE IF EXISTS `latihan-db`;
CREATE DATABASE `latihan-db` CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_general_ci';

USE `latihan-db`;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for buku
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `halaman` int(11) NULL DEFAULT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rating` double(2, 1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES (1, 'Fluent Python', 768, 'Programming', 4.0);
INSERT INTO `buku` VALUES (2, 'Data Science from Scratch: First Principles with Python, Second Edition', 406, 'Programming', 4.5);
INSERT INTO `buku` VALUES (3, 'Clean Code - A Handbook of Agile Software Craftsmanship', 462, 'Programming', 5.0);
INSERT INTO `buku` VALUES (4, 'The 7 Habits of Highly Effective People: Powerful Lessons in Personal Change and Habits', 393, 'Self-Help', 5.0);
INSERT INTO `buku` VALUES (5, 'Managing Your Money: Personal Finance Simplified', 22, 'Finance', 5.0);
INSERT INTO `buku` VALUES (6, 'Platform: The Art and Science of Personal Branding', 224, 'Business', 5.0);
INSERT INTO `buku` VALUES (7, 'Critical Thinking: Tools for Taking Charge of Your Professional and Personal Life (2nd Edition)', 481, 'Education', 5.0);
INSERT INTO `buku` VALUES (8, 'Personality Isn\'t Permanent: Break Free from Self-Limiting Beliefs and Rewrite Your Story', 272, 'Business', 5.0);
INSERT INTO `buku` VALUES (9, 'Rich Dad\'s Guide to Investing: What the Rich Invest in That the Poor and Middle Class Do Not!', 403, 'Business', 4.5);
INSERT INTO `buku` VALUES (10, 'Cryptocurrency Investing for Dummies', 360, 'Business', 3.5);

SET FOREIGN_KEY_CHECKS = 1;mysqlbuku