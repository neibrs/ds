<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_goods_comment`;");
E_C("CREATE TABLE `dsc_merchants_goods_comment` (
  `goods_id` int(11) unsigned NOT NULL,
  `comment_start` varchar(60) NOT NULL,
  `comment_end` varchar(60) NOT NULL,
  `comment_last_percent` varchar(60) NOT NULL,
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>