<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_grade`;");
E_C("CREATE TABLE `dsc_merchants_grade` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `grade_id` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `year_num` int(10) NOT NULL DEFAULT '0',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_grade` values('1','1','13','1490144829','10','0.00');");
E_D("replace into `dsc_merchants_grade` values('2','2','13','1490153848','10','0.00');");
E_D("replace into `dsc_merchants_grade` values('3','3','13','1490158746','10','0.00');");
E_D("replace into `dsc_merchants_grade` values('4','4','13','1490160720','10','0.00');");
E_D("replace into `dsc_merchants_grade` values('5','5','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('6','6','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('7','9','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('8','10','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('9','11','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('10','12','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('11','13','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('12','14','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('13','15','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('14','16','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('15','18','10','1522137047','1','0.00');");
E_D("replace into `dsc_merchants_grade` values('16','24','13','1490316428','5','0.00');");
E_D("replace into `dsc_merchants_grade` values('17','20','13','1490573425','50','0.00');");

require("../../inc/footer.php");
?>