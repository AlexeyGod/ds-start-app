
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `url` text,
  `priority` int(11) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `access` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
