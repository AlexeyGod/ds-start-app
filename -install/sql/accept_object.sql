CREATE TABLE IF NOT EXISTS `accept_object` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` text,
  `name` text,
  `description` text,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `accept_object` (`id`, `slug`, `name`, `description`, `type`) VALUES
(1, 'system', 'Системные настройки', 'Системные настройки', 'permission'),
(2, 'developer', 'Разработчик', 'Разработчик ИС', 'role'),
(3, 'admin', 'Администратор', 'Администратор сайта', 'role');