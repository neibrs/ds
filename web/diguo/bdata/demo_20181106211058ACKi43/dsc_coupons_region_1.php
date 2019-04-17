<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_coupons_region`;");
E_C("CREATE TABLE `dsc_coupons_region` (
  `cf_id` int(10) NOT NULL AUTO_INCREMENT,
  `cou_id` int(10) unsigned NOT NULL DEFAULT '0',
  `region_list` text NOT NULL,
  PRIMARY KEY (`cf_id`),
  KEY `cou_id` (`cou_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>