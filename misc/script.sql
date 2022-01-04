DROP DATABASE IF EXISTS `koffi_place`;
CREATE DATABASE `koffi_place`;
USE `koffi_place`;

-- #
-- # TABLE STRUCTURE FOR: colors
-- #

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_hexa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `colors` (`color_id`, `color_name`, `color_hexa`) VALUES (1, 'red', '#DC1818');
INSERT INTO `colors` (`color_id`, `color_name`, `color_hexa`) VALUES (2, 'yellow', '#FDD50F');
INSERT INTO `colors` (`color_id`, `color_name`, `color_hexa`) VALUES (3, 'blue', '#0FB7FD');
INSERT INTO `colors` (`color_id`, `color_name`, `color_hexa`) VALUES (4, 'green', '#57C32D');
INSERT INTO `colors` (`color_id`, `color_name`, `color_hexa`) VALUES (5, 'white', '#FFF');
INSERT INTO `colors` (`color_id`, `color_name`, `color_hexa`) VALUES (6, 'black', '#000');


-- #
-- # TABLE STRUCTURE FOR: pixel_grid
-- #

DROP TABLE IF EXISTS `pixel_grid`;

CREATE TABLE `pixel_grid` (
  `pixel_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`pixel_id`),
  KEY `color_id` (`color_id`),
  CONSTRAINT `pixel_grid_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (1, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (6, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (11, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (16, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (21, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (26, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (31, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (36, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (41, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (46, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (51, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (56, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (61, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (66, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (71, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (76, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (81, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (86, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (91, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (96, 1);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (2, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (7, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (12, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (17, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (22, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (27, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (32, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (37, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (42, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (47, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (52, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (57, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (62, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (67, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (72, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (77, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (82, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (87, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (92, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (97, 2);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (3, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (8, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (13, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (18, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (23, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (28, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (33, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (38, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (43, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (48, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (53, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (58, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (63, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (68, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (73, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (78, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (83, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (88, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (93, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (98, 3);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (4, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (9, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (14, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (19, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (24, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (29, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (34, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (39, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (44, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (49, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (54, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (59, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (64, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (69, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (74, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (79, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (84, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (89, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (94, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (99, 4);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (5, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (10, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (15, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (20, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (25, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (30, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (35, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (40, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (45, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (50, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (55, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (60, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (65, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (70, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (75, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (80, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (85, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (90, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (95, 5);
INSERT INTO `pixel_grid` (`pixel_id`, `color_id`) VALUES (100, 5);


-- #
-- # TABLE STRUCTURE FOR: timelapse
-- #

DROP TABLE IF EXISTS `timelapse`;

CREATE TABLE `timelapse` (
  `timelapse_id` int(11) NOT NULL AUTO_INCREMENT,
  `timelapse_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timelapse_date` date DEFAULT NULL,
  PRIMARY KEY (`timelapse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- #
-- # TABLE STRUCTURE FOR: users
-- #

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_last_pixel_timestamp` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_last_pixel_timestamp`) VALUES (1, 'root', 'root', 0);


