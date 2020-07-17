CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `alias` text,
  `id_section` int(11) NOT NULL,
  `short` text,
  `content` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(11) DEFAULT NULL,
  `public` int(11) DEFAULT NULL,
  `link` text,
  `type` text NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);

INSERT INTO `page` (`id`, `name`, `alias`, `id_section`, `short`, `content`, `created_at`, `author`, `public`, `link`, `type`, `priority`) VALUES
(1, 'Главная страница', 'main', 0, NULL, '<p>Поздравляем с успешной установкой DS-CMS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"/cmsdoc/index.html\">Документация по системе</a></p>\r\n', '2019-08-19 14:29:21', 1, 1, '/main', 'page', 1000);