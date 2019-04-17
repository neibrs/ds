<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_shipping_date`;");
E_C("CREATE TABLE `dsc_shipping_date` (
  `shipping_date_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` varchar(10) NOT NULL DEFAULT '0',
  `end_date` varchar(10) NOT NULL DEFAULT '0',
  `select_day` int(10) unsigned NOT NULL DEFAULT '0',
  `select_date` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`shipping_date_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_shipping_date` values('2',0x393a3030,0x31323a3030,'0','');");

require("../../inc/footer.php");
?>