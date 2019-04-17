<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_shopheader`;");
E_C("CREATE TABLE `dsc_seller_shopheader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `headtype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `headbg_img` varchar(255) CHARACTER SET latin1 NOT NULL,
  `shop_color` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `seller_theme` varchar(100) NOT NULL,
  `ru_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>