<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_type`;");
E_C("CREATE TABLE `dsc_goods_type` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `suppliers_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '供应商ID',
  `cat_name` varchar(60) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_group` varchar(255) NOT NULL,
  `c_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `user_id` (`user_id`),
  KEY `cat_name` (`cat_name`),
  KEY `enabled` (`enabled`),
  KEY `c_id` (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_type` values('1','2','0',0xe5b08fe7b1b3e6898be69cbae5a597,'1','','0');");
E_D("replace into `dsc_goods_type` values('2','2','0',0xe699bae883bde6898be8a1a8,'1','','0');");
E_D("replace into `dsc_goods_type` values('3','3','0',0xe7ac94e8aeb0e69cac,'1','','0');");
E_D("replace into `dsc_goods_type` values('4','4','0',0xe4b889e4bbb6e5a597,'1','','0');");
E_D("replace into `dsc_goods_type` values('5','0','0',0xe69c8de8a385,'1','','0');");
E_D("replace into `dsc_goods_type` values('6','0','0',0xe99e8be5ad90,'1','','0');");

require("../../inc/footer.php");
?>