
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `email` text,
  `status` int(11) DEFAULT NULL,
  `name` text,
  `last_visit` datetime NOT NULL,
  `token` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `username`, `password`, `email`, `status`, `name`, `last_visit`, `token`, `created_at`) VALUES
(1, 'developer', '499807161100904699ec5c49f2bae5c2', 'support@digital-solution.ru', 1, 'Разработчик', '0000-00-00 00:00:00', 'a1fb4b7d47', '2019-11-01 20:41:36'),
(2, 'admin', '7a788cc7ad5c8acd2880b18119577506', 'admin@localhost.loc', 1, 'Администратор', '0000-00-00 00:00:00', '', '2019-07-24 09:38:54'),
(3, 'simple', '499807161100904699ec5c49f2bae5c2', 'simple@localhost.loc', 1, 'Посетитель', '0000-00-00 00:00:00', '60ab913610', '2019-11-01 23:21:18');
