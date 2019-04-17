<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_region_area`;");
E_C("CREATE TABLE `dsc_merchants_region_area` (
  `ra_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ra_name` varchar(255) NOT NULL,
  `ra_sort` int(11) unsigned NOT NULL,
  `add_time` int(11) unsigned NOT NULL,
  `up_titme` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ra_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_region_area` values('1',0xe58d8ee4b89c,'1','1404773945','1438129982');");
E_D("replace into `dsc_merchants_region_area` values('2',0xe58d8ee58c97,'1','1404773970','1404955889');");
E_D("replace into `dsc_merchants_region_area` values('3',0xe58d8ee58d97,'1','1404773986','1408058577');");

require("../../inc/footer.php");
?>