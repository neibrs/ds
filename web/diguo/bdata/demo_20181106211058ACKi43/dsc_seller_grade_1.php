<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_grade`;");
E_C("CREATE TABLE `dsc_seller_grade` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `grade_name` varchar(255) NOT NULL,
  `goods_sun` int(255) NOT NULL,
  `seller_temp` int(255) NOT NULL,
  `favorable_rate` varchar(20) NOT NULL,
  `give_integral` smallint(8) unsigned NOT NULL,
  `rank_integral` smallint(8) unsigned NOT NULL,
  `pay_integral` smallint(8) NOT NULL,
  `white_bar` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `grade_introduce` varchar(255) NOT NULL,
  `entry_criteria` text NOT NULL,
  `grade_img` varchar(255) NOT NULL,
  `is_open` tinyint(1) NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seller_grade` values('10',0xe699aee9809ae59586e5aeb6,'100','5',0x3930,'20','20','20','0',0x31313131,0x613a313a7b693a313b733a313a2231223b7d,0x646174612f73656c6c65725f67726164652f313439303331373334323732313833353134332e706e67,'1','1');");
E_D("replace into `dsc_seller_grade` values('12',0xe4bc98e8b4a8e59586e5aeb6,'200','7',0x3835,'40','40','40','0',0x323232323232,0x613a323a7b693a313b733a313a2231223b693a393b733a313a2239223b7d,0x646174612f73656c6c65725f67726164652f313439303331373335303234383730353736312e706e67,'1','0');");
E_D("replace into `dsc_seller_grade` values('13',0xe98791e7898ce59586e5aeb6,'300','9',0x3830,'60','60','60','0',0x3333333333,0x613a323a7b693a313b733a313a2231223b693a31313b733a323a223131223b7d,0x646174612f73656c6c65725f67726164652f313439303331373335393838393437363035352e706e67,'1','0');");
E_D("replace into `dsc_seller_grade` values('14',0xe58aa0e79b9fe59586e5aeb6,'400','20',0x3735,'80','80','80','0',0x3434343434,0x613a333a7b693a313b733a313a2231223b693a393b733a313a2239223b693a31313b733a323a223131223b7d,0x646174612f73656c6c65725f67726164652f313439303331373336373637363832303435342e706e67,'1','0');");

require("../../inc/footer.php");
?>