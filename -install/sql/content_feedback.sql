
CREATE TABLE IF NOT EXISTS `content_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email_to` text,
  `email_from` text,
  `success_text` text,
  `success_url` text,
  `use_captcha` int(11) DEFAULT '0',
  `save_results` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

