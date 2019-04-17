<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_gallery_album`;");
E_C("CREATE TABLE `dsc_gallery_album` (
  `album_id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_album_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `album_mame` varchar(60) NOT NULL,
  `album_cover` varchar(255) NOT NULL,
  `album_desc` varchar(255) NOT NULL,
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `suppliers_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '供应商ID',
  PRIMARY KEY (`album_id`),
  KEY `parent_album_id` (`parent_album_id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>