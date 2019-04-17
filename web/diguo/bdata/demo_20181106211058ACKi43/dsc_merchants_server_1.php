<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_server`;");
E_C("CREATE TABLE `dsc_merchants_server` (
  `server_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `suppliers_desc` mediumtext,
  `suppliers_percent` int(10) unsigned NOT NULL DEFAULT '0',
  `commission_model` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bill_freeze_day` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cycle` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `day_number` smallint(8) unsigned NOT NULL DEFAULT '0',
  `bill_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`server_id`),
  KEY `user_id` (`user_id`),
  KEY `cycle` (`cycle`),
  KEY `bill_time` (`bill_time`),
  KEY `suppliers_percent` (`suppliers_percent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>