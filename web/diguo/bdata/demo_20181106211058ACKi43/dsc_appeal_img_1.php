<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_appeal_img`;");
E_C("CREATE TABLE `dsc_appeal_img` (
  `img_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `complaint_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `img_file` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `order_id` (`order_id`),
  KEY `ru_id` (`ru_id`),
  KEY `complaint_id` (`complaint_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>