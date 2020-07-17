
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `class` text,
  `icon` text,
  `priority` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `system` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `modules` (`id`, `name`, `class`, `icon`, `priority`, `status`, `system`) VALUES
(1, 'user', 'modules\\user\\UserModule', 'icon icon-users', 0, 1, 1),
(2, 'content', 'modules\\content\\ContentModule', 'icon icon-folder-plus', 0, 1, 1),
(3, 'manager', 'modules\\manager\\ManagerModule', 'icon icon-browser-window', 0, 1, 1);