<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_qrcode`;");
E_C("CREATE TABLE `dsc_seller_qrcode` (
  `qrcode_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ru_id` int(11) NOT NULL,
  `qrcode_thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`qrcode_id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>