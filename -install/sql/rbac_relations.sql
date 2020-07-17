
CREATE TABLE IF NOT EXISTS `rbac_relations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object1` int(11) DEFAULT NULL,
  `object2` int(11) DEFAULT NULL,
  `relation` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

INSERT INTO `rbac_relations` (`object1`, `object2`, `relation`) VALUES
(1, 2, '2'),
(2, 3, '2'),
(2, 3, '1'),
(3, 1, '1');
