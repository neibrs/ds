<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_transport_tpl`;");
E_C("CREATE TABLE `dsc_goods_transport_tpl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tpl_name` varchar(255) NOT NULL,
  `tid` int(10) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `shipping_id` int(10) NOT NULL DEFAULT '0',
  `region_id` text NOT NULL,
  `configure` text NOT NULL,
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin_id` (`admin_id`),
  KEY `tid` (`tid`),
  KEY `user_id` (`user_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>