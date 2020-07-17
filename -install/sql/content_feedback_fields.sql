
CREATE TABLE IF NOT EXISTS `content_feedback_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `placeholder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `required` int(11) DEFAULT '0',
  `hidden` int(11) DEFAULT '0',
  `value` text COLLATE utf8mb4_unicode_ci,
  `maxlength` int(11) DEFAULT NULL,
  `extensions` text COLLATE utf8mb4_unicode_ci,
  `maxfilesize` int(11) DEFAULT NULL,
  `html_size` int(11) DEFAULT NULL,
  `html_style` text COLLATE utf8mb4_unicode_ci,
  `html_class` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `content_feedback_fields` (`id`, `id_form`, `name`, `placeholder`, `label`, `type`, `required`, `hidden`, `value`, `maxlength`, `extensions`, `maxfilesize`, `html_size`, `html_style`, `html_class`) VALUES
(1, 1, 'name', '', 'Ваше имя', 'text', 1, 1, NULL, 25, 'gif, png', 1024000, 10, 'css-style', 'css-class'),
(2, 1, 'phone', '', 'Телефон', 'text', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'email', '', 'E-Mail', 'email', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'msg', '', 'Сообщение', 'textarea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
