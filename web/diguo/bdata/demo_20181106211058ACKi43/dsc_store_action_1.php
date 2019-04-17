<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_store_action`;");
E_C("CREATE TABLE `dsc_store_action` (
  `action_id` int(8) NOT NULL AUTO_INCREMENT,
  `parent_id` int(8) unsigned NOT NULL DEFAULT '0',
  `action_code` varchar(20) NOT NULL,
  `relevance` varchar(20) NOT NULL,
  `action_name` varchar(20) NOT NULL,
  PRIMARY KEY (`action_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_store_action` values('1','0',0x676f6f64735f6d616e616765,'',0xe59586e59381e7aea1e79086);");
E_D("replace into `dsc_store_action` values('2','0',0x6f726465725f6d616e616765,'',0xe8aea2e58d95e7aea1e79086);");
E_D("replace into `dsc_store_action` values('3','0',0x757365725f6d616e616765,'',0xe8818ce59198e7aea1e79086);");
E_D("replace into `dsc_store_action` values('4','0',0x636f6e6669675f6d616e616765,'',0xe8aebee7bdaee7aea1e79086);");

require("../../inc/footer.php");
?>