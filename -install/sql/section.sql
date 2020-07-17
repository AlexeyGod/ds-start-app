
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `alias` text,
  `link` text NOT NULL,
  `public` int(11) DEFAULT '0',
  `access_filter` text,
  `class` text NOT NULL,
  `id_parent` int(11) NOT NULL DEFAULT '0',
  `priority` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
