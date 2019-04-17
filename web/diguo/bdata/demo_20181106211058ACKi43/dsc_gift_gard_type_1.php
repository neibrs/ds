<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_gift_gard_type`;");
E_C("CREATE TABLE `dsc_gift_gard_type` (
  `gift_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `gift_name` varchar(100) NOT NULL,
  `gift_menory` decimal(10,2) DEFAULT NULL,
  `gift_min_menory` decimal(10,2) DEFAULT NULL,
  `gift_start_date` int(11) NOT NULL,
  `gift_end_date` int(11) NOT NULL,
  `gift_number` smallint(5) NOT NULL,
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  PRIMARY KEY (`gift_id`),
  KEY `review_status` (`review_status`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_gift_gard_type` values('5','0',0x3839,'0.00','0.00','1508451130','1511129530','444','3','');");

require("../../inc/footer.php");
?>