CREATE TABLE IF NOT EXISTS `#__cscommunity_field` (
  `field_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `tooltip` text NOT NULL,
  `parent` int(10) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `ordering` int(11) DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',  
  `required` tinyint(1) DEFAULT '0',
  `registration` tinyint(1) DEFAULT '1',
  `options` text,
  `code` varchar(255) NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`field_id`),
  KEY `fieldcode` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
