
CREATE TABLE IF NOT EXISTS `content_feedback_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) NOT NULL,
  `answer` text,
  `bw` text,
  `ip` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `unread` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;