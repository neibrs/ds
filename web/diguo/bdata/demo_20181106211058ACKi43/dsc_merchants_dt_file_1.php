<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_dt_file`;");
E_C("CREATE TABLE `dsc_merchants_dt_file` (
  `dtf_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) unsigned NOT NULL,
  `dt_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `permanent_file` varchar(255) NOT NULL,
  `permanent_date` varchar(255) NOT NULL,
  `cate_title_permanent` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`dtf_id`),
  KEY `cat_id` (`cat_id`),
  KEY `dt_id` (`dt_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_dt_file` values('1','6','1','1',0x646174612f73657074735f496d6167652f313430353031383934313137313732343734362e6a7067,0x31383436383638353230,'0');");
E_D("replace into `dsc_merchants_dt_file` values('3','6','1','2',0x646174612f73657074735f496d6167652f313430373433373834363739303937363231392e6a7067,'','1');");
E_D("replace into `dsc_merchants_dt_file` values('4','6','1','7','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('6','6','1','11','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('7','3','3','12','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('8','3','4','12','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('9','3','5','12','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('10','3','6','12','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('11','3','3','14','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('12','3','4','14','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('13','3','5','14','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('14','3','6','14','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('35','1','2','39',0x646174612f73657074735f496d6167652f313435303133353133353238323934363730352e6a7067,'','1');");
E_D("replace into `dsc_merchants_dt_file` values('16','3','3','15','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('17','3','4','15','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('18','3','5','15','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('19','3','6','15','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('20','6','1','0','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('34','1','2','0','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('22','3','3','0','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('23','3','4','0','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('24','3','5','0','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('25','3','6','0','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('33','1','2','35','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('27','3','3','2','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('28','3','4','2','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('29','3','5','2','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('30','3','6','2','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('32','6','1','33','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('36','3','3','32','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('37','3','4','32','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('38','3','5','32','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('39','3','6','32','','','0');");
E_D("replace into `dsc_merchants_dt_file` values('40','1','2','51','','','0');");

require("../../inc/footer.php");
?>