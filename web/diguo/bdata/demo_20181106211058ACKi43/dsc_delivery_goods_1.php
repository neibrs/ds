<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_delivery_goods`;");
E_C("CREATE TABLE `dsc_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` int(10) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`),
  KEY `product_id` (`product_id`),
  KEY `is_real` (`is_real`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_delivery_goods` values('1','1','792','0','',0xe8b49de5a68de5a48fe5ada3e89684e6acbee5a5b3e5a3abe79da1e8a1a3e680a7e6849f56e9a286e5a5b3e58d97e99fa9e4b89de5aeb6e5b185e69c8de8bf90e58aa8e58fafe5a496e7a9bfe4b8ade8a296e5a597e8a385,0xe78bbce788aa,0x454353303030373932,'1','','0','1','');");
E_D("replace into `dsc_delivery_goods` values('2','1','912','0','',0xe58880,'',0x454353303030393132,'1',NULL,'0','1','');");
E_D("replace into `dsc_delivery_goods` values('3','2','912','0','',0xe58880,'',0x454353303030393132,'1',NULL,'0','1','');");
E_D("replace into `dsc_delivery_goods` values('4','3','912','0','',0xe58880,'',0x454353303030393132,'1',NULL,'0','1','');");
E_D("replace into `dsc_delivery_goods` values('5','4','903','0','',0xe6ada3e59381e79bb4e982ae4865726d6573e788b1e9a9ace4bb9532303137e696b0e6acbee794b7e99e8b20e697b6e5b09ae79c9fe79aaee4bc91e997b2e99e8b483137313332355a4830322037343935,0xe998bfe78e9be5b0bc,0x454353303030393033,'1',NULL,'0','1','');");

require("../../inc/footer.php");
?>