
DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `items` WRITE;


INSERT INTO `items` (`id`, `text`, `created_at`)
VALUES
	(1,'godda do dis','2015-06-08 12:56:06'),
	(2,'this is very much a thing to do','2015-06-11 14:08:30'),
	(3,'SUPER IMP, BRO','2015-06-11 14:08:03');

UNLOCK TABLES;




