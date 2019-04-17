<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_complaint`;");
E_C("CREATE TABLE `dsc_complaint` (
  `complaint_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_sn` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shop_name` varchar(60) NOT NULL,
  `title_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `complaint_content` text NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `complaint_handle_time` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `appeal_messg` text NOT NULL,
  `appeal_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_handle_time` int(10) NOT NULL DEFAULT '0',
  `end_admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `end_handle_messg` text NOT NULL,
  `complaint_state` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `complaint_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`complaint_id`),
  KEY `order_id` (`order_id`),
  KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `ru_id` (`ru_id`),
  KEY `title_id` (`title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>