<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_pic_album`;");
E_C("CREATE TABLE `dsc_pic_album` (
  `pic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(100) NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `pic_file` varchar(255) NOT NULL,
  `pic_thumb` varchar(255) NOT NULL,
  `pic_image` varchar(255) NOT NULL,
  `pic_size` int(10) unsigned NOT NULL,
  `pic_spec` varchar(100) NOT NULL,
  `ru_id` int(10) unsigned NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pic_id`),
  KEY `album_id` (`album_id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>