<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_templates_left`;");
E_C("CREATE TABLE `dsc_templates_left` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) NOT NULL DEFAULT '0',
  `seller_templates` varchar(160) NOT NULL,
  `bg_color` char(10) NOT NULL,
  `img_file` varchar(120) NOT NULL,
  `if_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bgrepeat` varchar(50) NOT NULL,
  `align` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `theme` varchar(60) NOT NULL,
  `fileurl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_templates_left` values('3','0',0x6261636b75705f74706c5f31,'','','0','','',0x626f6e7573616476,0x65636d6f62616e5f64736332303137,'');");
E_D("replace into `dsc_templates_left` values('2','1',0x746f7069635f3135,'','','1',0x6e756c6c,0x6e756c6c,0x636f6e74656e74,'','');");

require("../../inc/footer.php");
?>