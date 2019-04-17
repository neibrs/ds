<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_home_templates`;");
E_C("CREATE TABLE `dsc_home_templates` (
  `temp_id` int(10) NOT NULL AUTO_INCREMENT,
  `rs_id` int(10) unsigned NOT NULL DEFAULT '0',
  `code` varchar(60) NOT NULL,
  `is_enable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(160) NOT NULL,
  PRIMARY KEY (`temp_id`),
  KEY `rs_id` (`rs_id`),
  KEY `code` (`code`),
  KEY `is_enable` (`is_enable`),
  KEY `theme` (`theme`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_home_templates` values('1','0',0x6261636b75705f74706c5f31,'1',0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_home_templates` values('2','0',0x6261636b75705f74706c5f32,'0',0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_home_templates` values('3','0',0x6261636b75705f74706c5f33,'0',0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_home_templates` values('4','0',0x6261636b75705f74706c5f34,'0',0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_home_templates` values('5','0',0x6261636b75705f74706c5f35,'0',0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_home_templates` values('6','0',0x6261636b75705f74706c5f36,'0',0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_home_templates` values('7','0',0x6261636b75705f74706c5f37,'0',0x65636d6f62616e5f64736332303137);");

require("../../inc/footer.php");
?>