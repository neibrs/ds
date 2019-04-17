<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_template_mall`;");
E_C("CREATE TABLE `dsc_template_mall` (
  `temp_id` int(10) NOT NULL AUTO_INCREMENT,
  `temp_file` varchar(255) NOT NULL,
  `temp_mode` tinyint(1) NOT NULL DEFAULT '0',
  `temp_cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `temp_code` varchar(60) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `sales_volume` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`temp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_template_mall` values('13','','0','0.00',0x73746f72655f74706c5f32343931,'0','1');");
E_D("replace into `dsc_template_mall` values('14','','0','0.00',0x73746f72655f74706c5f32343932,'0','1');");
E_D("replace into `dsc_template_mall` values('15','','0','0.00',0x73746f72655f74706c5f32343933,'0','1');");
E_D("replace into `dsc_template_mall` values('16','','0','0.00',0x73746f72655f74706c5f32343934,'0','1');");
E_D("replace into `dsc_template_mall` values('17','','0','0.00',0x73746f72655f74706c5f363532343534,'0','1');");

require("../../inc/footer.php");
?>