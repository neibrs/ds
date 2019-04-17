<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_link_goods_desc`;");
E_C("CREATE TABLE `dsc_link_goods_desc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` text NOT NULL,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `desc_name` varchar(255) NOT NULL,
  `goods_desc` text NOT NULL,
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`),
  KEY `review_status` (`review_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>