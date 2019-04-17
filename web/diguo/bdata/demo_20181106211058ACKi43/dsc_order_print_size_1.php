<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_print_size`;");
E_C("CREATE TABLE `dsc_order_print_size` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `specification` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_order_print_size` values('1',0x313030,0x3130304d4d,0x313030,'',0x3130306d6d,'');");
E_D("replace into `dsc_order_print_size` values('2',0x3830,0x38304d4d,0x3830,'',0x38306d6d,'');");
E_D("replace into `dsc_order_print_size` values('3',0x3730,0x37304d4d,0x3730,'',0x37306d6d,'');");
E_D("replace into `dsc_order_print_size` values('4',0x3630,0x36304d4d,0x3630,'',0x36306d6d,'');");
E_D("replace into `dsc_order_print_size` values('5',0x3530,0x35304d4d,0x3530,'',0x35306d6d,'');");
E_D("replace into `dsc_order_print_size` values('6',0x4134,0x4134e7bab8e5bca0,0x323130,0x323937,0x3231306d6d2078203239376d6d,0xe5bd93e68993e58db0e8aebee7bdaee98089e68ba94134e7bab8e5bca0e38081e7ab96e59091e68993e58db0e38081e697a0e8beb9e8b79de697b6e6af8fe5bca04134e68993e58db0e7bab8e58fafe8be93e587ba32e9a1b5e8aea2e58d95e38082);");
E_D("replace into `dsc_order_print_size` values('7',0x313230,0x3132304d4d2a39334d4d,0x313230,0x3933,0x3132306d6d20782039336d6d,'');");
E_D("replace into `dsc_order_print_size` values('8',0x313230,0x3132304d4d2a3134304d4d,0x313230,0x313430,0x3132306d6d2078203134306d6d,'');");
E_D("replace into `dsc_order_print_size` values('9',0x313230,0x3132304d4d2a3238304d4d,0x313230,0x323830,0x3132306d6d2078203238306d6d,'');");
E_D("replace into `dsc_order_print_size` values('10',0x313930,0x3139304d4d2a39334d4d,0x313930,0x3933,0x3139306d6d20782039336d6d,'');");
E_D("replace into `dsc_order_print_size` values('11',0x313930,0x3139304d4d2a3134304d4d,0x313930,0x313430,0x3139306d6d2078203134306d6d,'');");
E_D("replace into `dsc_order_print_size` values('12',0x313930,0x3139304d4d2a3238304d4d,0x313930,0x323830,0x3139306d6d2078203238306d6d,'');");
E_D("replace into `dsc_order_print_size` values('13',0x323130,0x3231304d4d2a3134354d4d,0x323130,0x313435,0x3231306d6d2078203134356d6d,'');");
E_D("replace into `dsc_order_print_size` values('14',0x323431,0x3234314d4d2a39334d4d,0x323431,0x3933,0x3234316d6d20782039336d6d,'');");
E_D("replace into `dsc_order_print_size` values('15',0x323431,0x3234314d4d2a3133394d4d,0x323431,0x313339,0x3234316d6d2078203133396d6d,'');");
E_D("replace into `dsc_order_print_size` values('16',0x323431,0x3234314d4d2a3238304d4d,0x323431,0x323830,0x3234316d6d2078203238306d6d,'');");

require("../../inc/footer.php");
?>