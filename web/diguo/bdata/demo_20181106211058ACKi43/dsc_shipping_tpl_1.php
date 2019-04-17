<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_shipping_tpl`;");
E_C("CREATE TABLE `dsc_shipping_tpl` (
  `st_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `print_bg` varchar(255) NOT NULL,
  `print_model` tinyint(1) NOT NULL,
  `config_lable` text NOT NULL,
  `shipping_print` text NOT NULL,
  `update_time` varchar(255) NOT NULL,
  PRIMARY KEY (`st_id`),
  KEY `shipping_id` (`shipping_id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_shipping_tpl` values('2','16','1','','0','','',0x31353038343432393638);");

require("../../inc/footer.php");
?>