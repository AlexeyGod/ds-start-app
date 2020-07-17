
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `value` text,
  `system` int(11) DEFAULT NULL,
  `handler` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `settings` (`id`, `name`, `value`, `system`, `handler`, `description`) VALUES
(1, 'theme', 'basic', 1, 'framework\\widgets\\settings\\ThemeSelect', 'Тема сайта'),
(2, 'secretKey', 'mi5434w', 1, '', 'Секретный ключ для шифрования'),
(3, 'defaultAdminView', 'index', 1, 'framework\\widgets\\settings\\AdminDefaultView', 'Стартовая страница панели управления'),
(4, 'title', 'Название/Заголовок сайта', 1, NULL, 'Название/Заголовок сайта');
