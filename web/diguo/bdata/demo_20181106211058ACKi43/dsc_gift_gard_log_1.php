<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_gift_gard_log`;");
E_C("CREATE TABLE `dsc_gift_gard_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) unsigned NOT NULL DEFAULT '0',
  `gift_gard_id` int(11) unsigned NOT NULL DEFAULT '0',
  `delivery_status` varchar(60) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `handle_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gift_gard_id` (`gift_gard_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_gift_gard_log` values('1','57','7',0x31,'1508522435',0x746f67676c655f6f6e5f736574746c656d656e74);");
E_D("replace into `dsc_gift_gard_log` values('2','57','6',0x31,'1508522438',0x746f67676c655f6f6e5f736574746c656d656e74);");

require("../../inc/footer.php");
?>