<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_extend`;");
E_C("CREATE TABLE `dsc_wholesale_extend` (
  `extend_id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `is_delivery` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否48小时发货，0否 1是',
  `is_return` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持包退服务0否1是',
  `is_free` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否闪速送货0否1是',
  PRIMARY KEY (`extend_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='限时批发标识'");
E_D("replace into `dsc_wholesale_extend` values('1','621','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('2','648','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('3','805','1','0','1');");
E_D("replace into `dsc_wholesale_extend` values('4','803','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('5','809','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('6','812','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('7','810','1','0','1');");
E_D("replace into `dsc_wholesale_extend` values('8','862','1','0','1');");
E_D("replace into `dsc_wholesale_extend` values('9','625','1','1','0');");
E_D("replace into `dsc_wholesale_extend` values('10','629','1','0','1');");
E_D("replace into `dsc_wholesale_extend` values('11','635','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('12','780','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('13','767','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('14','768','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('15','769','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('16','771','1','1','1');");
E_D("replace into `dsc_wholesale_extend` values('17','772','1','1','1');");

require("../../inc/footer.php");
?>