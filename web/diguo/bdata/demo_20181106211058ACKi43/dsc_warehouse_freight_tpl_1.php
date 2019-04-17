<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_warehouse_freight_tpl`;");
E_C("CREATE TABLE `dsc_warehouse_freight_tpl` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `warehouse_id` varchar(255) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `region_id` varchar(255) NOT NULL,
  `configure` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `shipping_id` (`shipping_id`),
  KEY `region_id` (`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>