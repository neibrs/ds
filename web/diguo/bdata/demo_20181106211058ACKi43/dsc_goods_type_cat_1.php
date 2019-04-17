<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_type_cat`;");
E_C("CREATE TABLE `dsc_goods_type_cat` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `suppliers_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '供应商ID',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_name` varchar(90) NOT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT '50',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`),
  KEY `user_id` (`user_id`),
  KEY `parent_id` (`parent_id`),
  KEY `cat_name` (`cat_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_type_cat` values('1','0','0','0',0x39,'50','1');");

require("../../inc/footer.php");
?>