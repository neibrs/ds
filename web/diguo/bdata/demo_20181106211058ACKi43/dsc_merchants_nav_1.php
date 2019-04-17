<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_nav`;");
E_C("CREATE TABLE `dsc_merchants_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `cat_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `ru_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`),
  KEY `cat_id` (`cat_id`),
  KEY `cid` (`cid`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_nav` values('2','','0','0',0xe6b497e8a1a3e69cba,'1','50','0',0x6d65726368616e74735f73746f72652e7068703f6d65726368616e745f69643d312669643d3132,0x6d6964646c65,'1');");
E_D("replace into `dsc_merchants_nav` values('3','','0','0',0x4c4544e781af,'1','50','0',0x6d65726368616e74735f73746f72652e7068703f6d65726368616e745f69643d312669643d31,0x6d6964646c65,'1');");

require("../../inc/footer.php");
?>