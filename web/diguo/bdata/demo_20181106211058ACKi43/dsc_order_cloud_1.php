<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_cloud`;");
E_C("CREATE TABLE `dsc_order_cloud` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `apiordersn` varchar(255) NOT NULL,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `totalprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `rec_id` int(10) unsigned NOT NULL DEFAULT '0',
  `parentordersn` varchar(255) NOT NULL,
  `cloud_orderid` int(10) unsigned NOT NULL DEFAULT '0',
  `cloud_detailed_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>