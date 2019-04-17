<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_warehouse_goods`;");
E_C("CREATE TABLE `dsc_warehouse_goods` (
  `w_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `region_id` int(10) unsigned NOT NULL DEFAULT '0',
  `region_sn` varchar(60) NOT NULL DEFAULT '',
  `region_number` int(10) unsigned NOT NULL DEFAULT '0',
  `warehouse_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `warehouse_promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `give_integral` int(10) NOT NULL DEFAULT '0',
  `rank_integral` int(10) NOT NULL DEFAULT '0',
  `pay_integral` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`w_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `region_id` (`region_id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_warehouse_goods` values('89','0','908','1','','1','1.00','1.00','1508452720','0','0','0','0');");

require("../../inc/footer.php");
?>