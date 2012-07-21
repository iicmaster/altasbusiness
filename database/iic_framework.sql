-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.57-community - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-07-21 07:41:42
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for altasbusiness
DROP DATABASE IF EXISTS `altasbusiness`;
CREATE DATABASE IF NOT EXISTS `altasbusiness` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `altasbusiness`;


-- Dumping structure for table altasbusiness.backoffice_log
DROP TABLE IF EXISTS `backoffice_log`;
CREATE TABLE IF NOT EXISTS `backoffice_log` (
  `id_user` int(10) unsigned NOT NULL,
  `id_action` int(10) unsigned NOT NULL,
  `id_module` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `note` text COLLATE utf8_unicode_ci,
  KEY `FK_backoffice_user_log_backoffice_user` (`id_user`),
  KEY `FK_backoffice_user_log_backoffice_module` (`id_module`),
  KEY `FK_backoffice_user_log_backoffice_user_action` (`id_action`),
  KEY `date` (`date`),
  CONSTRAINT `FK_backoffice_user_log_backoffice_module` FOREIGN KEY (`id_module`) REFERENCES `backoffice_module` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_backoffice_user_log_backoffice_user` FOREIGN KEY (`id_user`) REFERENCES `backoffice_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_backoffice_user_log_backoffice_user_action` FOREIGN KEY (`id_action`) REFERENCES `backoffice_user_action` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_log: ~0 rows (approximately)
DELETE FROM `backoffice_log`;
/*!40000 ALTER TABLE `backoffice_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `backoffice_log` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_module
DROP TABLE IF EXISTS `backoffice_module`;
CREATE TABLE IF NOT EXISTS `backoffice_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_enable` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0 = disable, 1 = enable',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_module: ~6 rows (approximately)
DELETE FROM `backoffice_module`;
/*!40000 ALTER TABLE `backoffice_module` DISABLE KEYS */;
INSERT INTO `backoffice_module` (`id`, `name`, `description`, `uri`, `is_enable`) VALUES
	(1, 'Theme', NULL, NULL, 0),
	(2, 'User Group', NULL, NULL, 1),
	(3, 'User Role', NULL, NULL, 1),
	(4, 'User', NULL, NULL, 1),
	(5, 'User Permission', NULL, NULL, 0),
	(6, 'News', NULL, 'backoffice/news', 1);
/*!40000 ALTER TABLE `backoffice_module` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_module_permission
DROP TABLE IF EXISTS `backoffice_module_permission`;
CREATE TABLE IF NOT EXISTS `backoffice_module_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL DEFAULT '0',
  `id_group` int(10) unsigned NOT NULL DEFAULT '0',
  `id_role` int(10) unsigned NOT NULL DEFAULT '0',
  `id_action` int(10) unsigned NOT NULL DEFAULT '0',
  `id_module` int(10) unsigned NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_group` (`id_group`),
  KEY `id_role` (`id_role`),
  KEY `id_action` (`id_action`),
  KEY `id_module` (`id_module`),
  CONSTRAINT `FK_backoffice_module_permission_backoffice_module` FOREIGN KEY (`id_module`) REFERENCES `backoffice_module` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_backoffice_module_permission_backoffice_user` FOREIGN KEY (`id_user`) REFERENCES `backoffice_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_backoffice_module_permission_backoffice_user_action` FOREIGN KEY (`id_action`) REFERENCES `backoffice_user_action` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_backoffice_module_permission_backoffice_user_group` FOREIGN KEY (`id_group`) REFERENCES `backoffice_user_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_backoffice_module_permission_backoffice_user_role` FOREIGN KEY (`id_role`) REFERENCES `backoffice_user_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_module_permission: ~0 rows (approximately)
DELETE FROM `backoffice_module_permission`;
/*!40000 ALTER TABLE `backoffice_module_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `backoffice_module_permission` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_theme
DROP TABLE IF EXISTS `backoffice_theme`;
CREATE TABLE IF NOT EXISTS `backoffice_theme` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `header_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_bg_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_text_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_text_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_text_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `header_text_size` tinyint(2) unsigned DEFAULT NULL,
  `footer_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_bg_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_text_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foot_text_size` tinyint(2) unsigned DEFAULT NULL,
  `table_head_bg_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_head_bg_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_head_rollover_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_head_text_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_head_text_size` tinyint(2) unsigned DEFAULT NULL,
  `table_line_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_bg_color_1` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_bg_color_2` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_rollover_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_row_selected_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_text_color` char(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `table_text_size` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_theme: ~1 rows (approximately)
DELETE FROM `backoffice_theme`;
/*!40000 ALTER TABLE `backoffice_theme` DISABLE KEYS */;
INSERT INTO `backoffice_theme` (`id`, `name`, `header_bg_color`, `header_bg_image`, `header_text_1`, `header_text_2`, `header_text_color`, `header_text_size`, `footer_bg_color`, `footer_bg_image`, `footer_text`, `footer_text_color`, `foot_text_size`, `table_head_bg_color`, `table_head_bg_image`, `table_head_rollover_color`, `table_head_text_color`, `table_head_text_size`, `table_line_color`, `table_row_bg_color_1`, `table_row_bg_color_2`, `table_row_rollover_color`, `table_row_selected_color`, `table_text_color`, `table_text_size`) VALUES
	(1, 'IIC Framework', '#444444', NULL, 'Backoffice System', 'Altasbusiness Co., Ltd.', '#FFFFFF', 24, NULL, NULL, 'All support and powered by @iicmaster', '#669900', 10, '#669900', NULL, '#36AAFF', '#FFFFFF', 12, '#AAAAAA', '#FFFFFF', '#F0F0F0', '#E4EEFF', '#E4EEFF', '#666666', 12);
/*!40000 ALTER TABLE `backoffice_theme` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_user
DROP TABLE IF EXISTS `backoffice_user`;
CREATE TABLE IF NOT EXISTS `backoffice_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(10) unsigned DEFAULT NULL,
  `id_group` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_backoffice_user_backoffice_user_role` (`id_role`),
  KEY `FK_backoffice_user_backoffice_user_group` (`id_group`),
  CONSTRAINT `FK_backoffice_user_backoffice_user_group` FOREIGN KEY (`id_group`) REFERENCES `backoffice_user_group` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_backoffice_user_backoffice_user_role` FOREIGN KEY (`id_role`) REFERENCES `backoffice_user_role` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_user: ~1 rows (approximately)
DELETE FROM `backoffice_user`;
/*!40000 ALTER TABLE `backoffice_user` DISABLE KEYS */;
INSERT INTO `backoffice_user` (`id`, `name`, `username`, `password`, `id_role`, `id_group`) VALUES
	(1, 'Administrator', 'admin', 'admin', 1, 20);
/*!40000 ALTER TABLE `backoffice_user` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_user_action
DROP TABLE IF EXISTS `backoffice_user_action`;
CREATE TABLE IF NOT EXISTS `backoffice_user_action` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_user_action: ~6 rows (approximately)
DELETE FROM `backoffice_user_action`;
/*!40000 ALTER TABLE `backoffice_user_action` DISABLE KEYS */;
INSERT INTO `backoffice_user_action` (`id`, `name`) VALUES
	(1, 'Create'),
	(2, 'Read'),
	(3, 'Update'),
	(4, 'Delete'),
	(5, 'Login'),
	(6, 'Logout');
/*!40000 ALTER TABLE `backoffice_user_action` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_user_group
DROP TABLE IF EXISTS `backoffice_user_group`;
CREATE TABLE IF NOT EXISTS `backoffice_user_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_user_group: ~1 rows (approximately)
DELETE FROM `backoffice_user_group`;
/*!40000 ALTER TABLE `backoffice_user_group` DISABLE KEYS */;
INSERT INTO `backoffice_user_group` (`id`, `name`) VALUES
	(20, 'Group 1');
/*!40000 ALTER TABLE `backoffice_user_group` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.backoffice_user_role
DROP TABLE IF EXISTS `backoffice_user_role`;
CREATE TABLE IF NOT EXISTS `backoffice_user_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.backoffice_user_role: ~4 rows (approximately)
DELETE FROM `backoffice_user_role`;
/*!40000 ALTER TABLE `backoffice_user_role` DISABLE KEYS */;
INSERT INTO `backoffice_user_role` (`id`, `name`) VALUES
	(1, 'Administrator'),
	(2, 'Manager'),
	(3, 'Content Creator'),
	(4, 'User');
/*!40000 ALTER TABLE `backoffice_user_role` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.catalog_category
DROP TABLE IF EXISTS `catalog_category`;
CREATE TABLE IF NOT EXISTS `catalog_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_parent` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `is_enable` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ordering` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_parent` (`id_parent`),
  KEY `ordering` (`ordering`),
  CONSTRAINT `FK_catalog_category_catalog_category` FOREIGN KEY (`id_parent`) REFERENCES `catalog_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.catalog_category: ~0 rows (approximately)
DELETE FROM `catalog_category`;
/*!40000 ALTER TABLE `catalog_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog_category` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.catalog_category_item
DROP TABLE IF EXISTS `catalog_category_item`;
CREATE TABLE IF NOT EXISTS `catalog_category_item` (
  `id_category` int(10) unsigned NOT NULL,
  `id_item` int(10) unsigned NOT NULL,
  `id_item_type` tinyint(3) unsigned NOT NULL,
  KEY `FK_catalog_category_item_catalog_category` (`id_category`),
  KEY `FK_catalog_category_item_catalog_item` (`id_item`),
  KEY `FK_catalog_category_item_catalog_category_item_type` (`id_item_type`),
  CONSTRAINT `FK_catalog_category_item_catalog_category` FOREIGN KEY (`id_category`) REFERENCES `catalog_category` (`id`),
  CONSTRAINT `FK_catalog_category_item_catalog_category_item_type` FOREIGN KEY (`id_item_type`) REFERENCES `catalog_item_type` (`id`),
  CONSTRAINT `FK_catalog_category_item_catalog_item` FOREIGN KEY (`id_item`) REFERENCES `catalog_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.catalog_category_item: ~0 rows (approximately)
DELETE FROM `catalog_category_item`;
/*!40000 ALTER TABLE `catalog_category_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog_category_item` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.catalog_item
DROP TABLE IF EXISTS `catalog_item`;
CREATE TABLE IF NOT EXISTS `catalog_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_enable` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.catalog_item: ~0 rows (approximately)
DELETE FROM `catalog_item`;
/*!40000 ALTER TABLE `catalog_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog_item` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.catalog_item_type
DROP TABLE IF EXISTS `catalog_item_type`;
CREATE TABLE IF NOT EXISTS `catalog_item_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.catalog_item_type: ~2 rows (approximately)
DELETE FROM `catalog_item_type`;
/*!40000 ALTER TABLE `catalog_item_type` DISABLE KEYS */;
INSERT INTO `catalog_item_type` (`id`, `name`) VALUES
	(1, 'story'),
	(2, 'bug');
/*!40000 ALTER TABLE `catalog_item_type` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.cms_category
DROP TABLE IF EXISTS `cms_category`;
CREATE TABLE IF NOT EXISTS `cms_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_enable` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 = disable, 1 = enable',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.cms_category: ~2 rows (approximately)
DELETE FROM `cms_category`;
/*!40000 ALTER TABLE `cms_category` DISABLE KEYS */;
INSERT INTO `cms_category` (`id`, `name`, `description`, `date_create`, `date_update`, `is_enable`) VALUES
	(3, 'News', '', '2012-07-12 00:00:00', '2012-07-12 18:50:06', 0),
	(4, 'Promotion', '', '2012-07-12 00:00:00', '2012-07-12 18:22:40', 1);
/*!40000 ALTER TABLE `cms_category` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.cms_content
DROP TABLE IF EXISTS `cms_content`;
CREATE TABLE IF NOT EXISTS `cms_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_author` int(10) unsigned NOT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_enable` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 = disable, 1 = enable',
  PRIMARY KEY (`id`),
  KEY `FK_cms_content_backoffice_user` (`id_author`),
  CONSTRAINT `FK_cms_content_backoffice_user` FOREIGN KEY (`id_author`) REFERENCES `backoffice_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.cms_content: ~0 rows (approximately)
DELETE FROM `cms_content`;
/*!40000 ALTER TABLE `cms_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_content` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.cms_content_attach_file
DROP TABLE IF EXISTS `cms_content_attach_file`;
CREATE TABLE IF NOT EXISTS `cms_content_attach_file` (
  `id_content` int(10) unsigned NOT NULL,
  `id_upload` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_content`,`id_upload`),
  KEY `FK__upload` (`id_upload`),
  CONSTRAINT `FK__cms_content` FOREIGN KEY (`id_content`) REFERENCES `cms_content` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK__upload` FOREIGN KEY (`id_upload`) REFERENCES `upload` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.cms_content_attach_file: ~0 rows (approximately)
DELETE FROM `cms_content_attach_file`;
/*!40000 ALTER TABLE `cms_content_attach_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_content_attach_file` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.cms_content_category
DROP TABLE IF EXISTS `cms_content_category`;
CREATE TABLE IF NOT EXISTS `cms_content_category` (
  `id_content` int(10) unsigned NOT NULL,
  `id_category` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_content`,`id_category`),
  KEY `FK_cms_content_category_cms_category` (`id_category`),
  CONSTRAINT `FK_cms_content_category_cms_content` FOREIGN KEY (`id_content`) REFERENCES `cms_content` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_cms_content_category_cms_category` FOREIGN KEY (`id_category`) REFERENCES `cms_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.cms_content_category: ~0 rows (approximately)
DELETE FROM `cms_content_category`;
/*!40000 ALTER TABLE `cms_content_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_content_category` ENABLE KEYS */;


-- Dumping structure for table altasbusiness.upload
DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(10) unsigned NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the file that was uploaded including the file extension.',
  `file_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The file''s Mime type',
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raw_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orig_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_width` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_size_str` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table altasbusiness.upload: ~0 rows (approximately)
DELETE FROM `upload`;
/*!40000 ALTER TABLE `upload` DISABLE KEYS */;
/*!40000 ALTER TABLE `upload` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
