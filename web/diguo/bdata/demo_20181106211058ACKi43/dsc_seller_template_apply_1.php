<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_template_apply`;");
E_C("CREATE TABLE `dsc_seller_template_apply` (
  `apply_id` int(10) NOT NULL AUTO_INCREMENT,
  `apply_sn` varchar(20) NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `temp_id` int(10) unsigned NOT NULL DEFAULT '0',
  `temp_code` varchar(60) NOT NULL,
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `apply_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`apply_id`),
  KEY `apply_sn` (`apply_sn`),
  KEY `ru_id` (`ru_id`),
  KEY `temp_id` (`temp_id`),
  KEY `pay_id` (`pay_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>