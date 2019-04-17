<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_delayed`;");
E_C("CREATE TABLE `dsc_order_delayed` (
  `delayed_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `apply_day` tinyint(2) unsigned NOT NULL,
  `apply_time` int(10) unsigned NOT NULL,
  `review_status` tinyint(1) unsigned NOT NULL,
  `review_time` int(10) unsigned NOT NULL,
  `review_admin` int(10) unsigned NOT NULL,
  PRIMARY KEY (`delayed_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>