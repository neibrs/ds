<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_documenttitle`;");
E_C("CREATE TABLE `dsc_merchants_documenttitle` (
  `dt_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dt_title` varchar(255) NOT NULL,
  `cat_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`dt_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_documenttitle` values('1',0xe585b6e5ae83e8b584e8b4a8,'6');");
E_D("replace into `dsc_merchants_documenttitle` values('2',0xe585b6e4bb96e8b584e8b4a8,'1');");
E_D("replace into `dsc_merchants_documenttitle` values('3',0xe8b584e8b4a831,'3');");
E_D("replace into `dsc_merchants_documenttitle` values('4',0xe8b584e8b4a832,'3');");
E_D("replace into `dsc_merchants_documenttitle` values('5',0xe8b584e8b4a833,'3');");
E_D("replace into `dsc_merchants_documenttitle` values('6',0xe8b584e8b4a834,'3');");

require("../../inc/footer.php");
?>