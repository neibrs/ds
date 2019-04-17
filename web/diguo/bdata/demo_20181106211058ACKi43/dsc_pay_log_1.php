<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_pay_log`;");
E_C("CREATE TABLE `dsc_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `openid` varchar(255) NOT NULL,
  `transid` varchar(255) NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `order_id` (`order_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_pay_log` values('1','1','139.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('2','1','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('3','2','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('4','3','3500.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('5','4','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('6','5','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('7','6','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('8','7','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('9','8','509.10','0','0','','');");
E_D("replace into `dsc_pay_log` values('10','9','0.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('11','10','798.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('12','11','798.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('13','12','798.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('14','13','12.00','0','0','','');");
E_D("replace into `dsc_pay_log` values('15','14','798.00','0','0','','');");

require("../../inc/footer.php");
?>