<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_transport_express`;");
E_C("CREATE TABLE `dsc_goods_transport_express` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_id` text NOT NULL,
  `shipping_fee` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_transport_express` values('2','1','0','57',0x322c392c31312c31342c31352c31362c31372c3139,'0.00');");
E_D("replace into `dsc_goods_transport_express` values('3','0','1','42','','0.00');");
E_D("replace into `dsc_goods_transport_express` values('4','0','1','42','','0.00');");

require("../../inc/footer.php");
?>