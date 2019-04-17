<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_attribute`;");
E_C("CREATE TABLE `dsc_attribute` (
  `attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_cat_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `color_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_input_category` varchar(30) NOT NULL,
  `cloud_attr_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`),
  KEY `attr_name` (`attr_name`),
  KEY `attr_cat_type` (`attr_cat_type`),
  KEY `attr_type` (`attr_type`),
  KEY `attr_group` (`attr_group`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_attribute` values('1','1',0xe9a29ce889b2,'0','1','1',0xe69a97e5a49ce9bb910d0ae5ae9de79fb3e8939d0d0ae78eabe791b0e987910d0ae59c9fe8b1aae987910d0ae4b8ade59bbde7baa2,'','0','0','0','0','','0');");
E_D("replace into `dsc_attribute` values('2','2',0xe9a29ce889b2,'0','1','1',0xe799bde889b20d0ae9bb91e889b20d0ae98791e889b20d0a,'','0','0','0','0','','0');");
E_D("replace into `dsc_attribute` values('3','3',0xe9a29ce889b2,'0','1','1',0xe9bb91e889b20d0ae7baa2e889b2,'','0','0','0','0','','0');");
E_D("replace into `dsc_attribute` values('4','4',0xe9a29ce889b2,'0','1','1',0xe781b0e889b20d0ae69e9ae7baa2e889b20d0ae993b6e781b0e889b20d0ae7b4abe889b2,'','0','0','0','0','','0');");
E_D("replace into `dsc_attribute` values('5','5',0xe5b0bae7a081,'0','1','1',0x4d0d0a580d0a584c0d0a32584c0d0a33584c0d0a34584c,'','0','0','0','0','','0');");
E_D("replace into `dsc_attribute` values('6','5',0xe9a29ce889b2,'1','0','1','','','0','0','0','0','','0');");
E_D("replace into `dsc_attribute` values('7','6',0xe9a29ce889b2,'0','1','1',0xe799bde7baa2e889b20d0ae6b5b7e5869be8939d0d0ae9bb84e9bb91e889b2,'','0','0','0','0','','0');");

require("../../inc/footer.php");
?>