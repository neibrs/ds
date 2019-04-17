<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_entry_criteria`;");
E_C("CREATE TABLE `dsc_entry_criteria` (
  `id` smallint(10) NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(10) unsigned NOT NULL DEFAULT '0',
  `criteria_name` varchar(255) NOT NULL,
  `charge` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `standard_name` varchar(60) NOT NULL,
  `type` varchar(10) NOT NULL,
  `is_mandatory` tinyint(1) NOT NULL DEFAULT '0',
  `option_value` varchar(255) NOT NULL,
  `data_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cumulative` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_entry_criteria` values('1','0',0xe5ae9ee5908de8aea4e8af81,'0.00','','','0','','0','1');");
E_D("replace into `dsc_entry_criteria` values('2','1',0xe5a793e5908d,'0.00','',0x74657874,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('3','1',0xe8baabe4bbbde8af81e6ada3e99da2,'0.00','',0x66696c65,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('4','1',0xe8baabe4bbbde8af81e58f8de99da2,'0.00','',0x66696c65,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('5','1',0xe890a5e4b89ae689a7e785a7,'0.00','',0x66696c65,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('6','1',0xe6898be69cbae58fb7e7a081,'0.00','',0x74657874,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('7','1',0xe794b5e5ad90e982aee7aeb1,'0.00','',0x74657874,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('8','1',0xe8baabe4bbbde8af81e58fb7e7a081,'0.00','',0x74657874,'1','','0','1');");
E_D("replace into `dsc_entry_criteria` values('9','0',0xe7bcb4e7bab3e4bf9de8af81e98791,'0.00','','','0','','0','1');");
E_D("replace into `dsc_entry_criteria` values('10','9',0xe4bf9de8af81e98791,'500.00','',0x636861726765,'0','','0','1');");
E_D("replace into `dsc_entry_criteria` values('11','0',0xe7bcb4e7bab3e58aa0e79b9fe8b4b9,'0.00','','','0','','0','1');");
E_D("replace into `dsc_entry_criteria` values('12','11',0xe58aa0e79b9fe8b4b9,'5000.00','',0x636861726765,'0','','0','1');");

require("../../inc/footer.php");
?>