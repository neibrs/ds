<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_comment_seller`;");
E_C("CREATE TABLE `dsc_comment_seller` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `desc_rank` tinyint(1) NOT NULL,
  `service_rank` tinyint(1) NOT NULL,
  `delivery_rank` tinyint(1) NOT NULL,
  `sender_rank` tinyint(1) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`),
  KEY `user_id` (`user_id`),
  KEY `ru_id` (`ru_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>