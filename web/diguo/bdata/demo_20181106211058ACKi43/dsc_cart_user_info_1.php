<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_cart_user_info`;");
E_C("CREATE TABLE `dsc_cart_user_info` (
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL,
  `shipping_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  KEY `ru_id` (`ru_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>