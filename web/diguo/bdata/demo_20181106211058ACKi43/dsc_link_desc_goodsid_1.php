<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_link_desc_goodsid`;");
E_C("CREATE TABLE `dsc_link_desc_goodsid` (
  `d_id` int(11) unsigned NOT NULL,
  `goods_id` int(11) unsigned NOT NULL,
  KEY `goods_id` (`goods_id`),
  KEY `d_id` (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>