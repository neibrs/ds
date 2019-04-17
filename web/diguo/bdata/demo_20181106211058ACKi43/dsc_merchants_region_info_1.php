<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_region_info`;");
E_C("CREATE TABLE `dsc_merchants_region_info` (
  `ra_id` int(11) unsigned NOT NULL,
  `region_id` int(11) unsigned NOT NULL,
  KEY `ra_id` (`ra_id`),
  KEY `region_id` (`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_region_info` values('1','32');");
E_D("replace into `dsc_merchants_region_info` values('1','31');");
E_D("replace into `dsc_merchants_region_info` values('1','26');");
E_D("replace into `dsc_merchants_region_info` values('1','25');");
E_D("replace into `dsc_merchants_region_info` values('1','23');");
E_D("replace into `dsc_merchants_region_info` values('1','21');");
E_D("replace into `dsc_merchants_region_info` values('2','20');");
E_D("replace into `dsc_merchants_region_info` values('2','19');");
E_D("replace into `dsc_merchants_region_info` values('2','18');");
E_D("replace into `dsc_merchants_region_info` values('2','15');");
E_D("replace into `dsc_merchants_region_info` values('2','12');");
E_D("replace into `dsc_merchants_region_info` values('2','10');");
E_D("replace into `dsc_merchants_region_info` values('2','5');");
E_D("replace into `dsc_merchants_region_info` values('2','3');");
E_D("replace into `dsc_merchants_region_info` values('2','2');");
E_D("replace into `dsc_merchants_region_info` values('3','30');");
E_D("replace into `dsc_merchants_region_info` values('3','29');");
E_D("replace into `dsc_merchants_region_info` values('3','28');");
E_D("replace into `dsc_merchants_region_info` values('3','17');");
E_D("replace into `dsc_merchants_region_info` values('3','9');");
E_D("replace into `dsc_merchants_region_info` values('3','8');");
E_D("replace into `dsc_merchants_region_info` values('3','7');");
E_D("replace into `dsc_merchants_region_info` values('3','6');");
E_D("replace into `dsc_merchants_region_info` values('2','22');");
E_D("replace into `dsc_merchants_region_info` values('2','27');");
E_D("replace into `dsc_merchants_region_info` values('1','16');");
E_D("replace into `dsc_merchants_region_info` values('1','14');");
E_D("replace into `dsc_merchants_region_info` values('1','13');");
E_D("replace into `dsc_merchants_region_info` values('3','4');");
E_D("replace into `dsc_merchants_region_info` values('1','11');");

require("../../inc/footer.php");
?>