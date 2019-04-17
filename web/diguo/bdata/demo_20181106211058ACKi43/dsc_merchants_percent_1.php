<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_percent`;");
E_C("CREATE TABLE `dsc_merchants_percent` (
  `percent_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `percent_value` varchar(255) NOT NULL,
  `sort_order` int(10) unsigned NOT NULL,
  `add_time` int(10) NOT NULL,
  PRIMARY KEY (`percent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_percent` values('1',0x3130,'1','1404957720');");
E_D("replace into `dsc_merchants_percent` values('2',0x3135,'2','1404957825');");
E_D("replace into `dsc_merchants_percent` values('3',0x3230,'3','1404957947');");
E_D("replace into `dsc_merchants_percent` values('4',0x3235,'4','1404958068');");
E_D("replace into `dsc_merchants_percent` values('5',0x3330,'5','1404958073');");
E_D("replace into `dsc_merchants_percent` values('6',0x3335,'10','1404958148');");
E_D("replace into `dsc_merchants_percent` values('7',0x3430,'10','1404958151');");
E_D("replace into `dsc_merchants_percent` values('8',0x3435,'10','1404958155');");
E_D("replace into `dsc_merchants_percent` values('9',0x3530,'10','1404958158');");
E_D("replace into `dsc_merchants_percent` values('10',0x3535,'10','1404958161');");
E_D("replace into `dsc_merchants_percent` values('11',0x3630,'10','1404958165');");
E_D("replace into `dsc_merchants_percent` values('12',0x3635,'10','1404958169');");
E_D("replace into `dsc_merchants_percent` values('13',0x3730,'10','1404958172');");
E_D("replace into `dsc_merchants_percent` values('14',0x3735,'10','1404958176');");
E_D("replace into `dsc_merchants_percent` values('15',0x3830,'10','1404958179');");
E_D("replace into `dsc_merchants_percent` values('16',0x3835,'10','1404958183');");
E_D("replace into `dsc_merchants_percent` values('17',0x3930,'10','1404958187');");
E_D("replace into `dsc_merchants_percent` values('18',0x3935,'10','1404958190');");
E_D("replace into `dsc_merchants_percent` values('19',0x313030,'10','1404958194');");

require("../../inc/footer.php");
?>